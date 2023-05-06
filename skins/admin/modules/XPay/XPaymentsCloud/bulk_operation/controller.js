/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Clear credit card data controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

var BulkOperationProgress = Object.extend({

    /** 
     * DOM selectors
     */
    pattern:          '.bulk-operation-progress-box',
    progressSelector: '.progress-bar-container',
    messageSelector:  '.bulk-operation-message',
    stopSelector:     '#stop-bulk-operation',
    barSelector:      '.bar',

    /**
     * URL to get data  
     */
    url: '',

    /** 
     * Sleep timeout
     */
    sleepTimeout: 3000,

    /**
     * Flag indicating is progress finished or not
     */
    finished: false,

    /**
     * Percent done
     */
    percent: 0,

    /**
     * Status message
     */
    message: '',

    /** 
     * Orders data
     */
    orders: [],

    /**
     * Constructor
     */
    constructor: function BulkOperationProgress(element)
    {
        this.$component = element ? element : $(this.pattern);

        if (!this.$component.length || this.$component.data('initialized')) {
            return;
        }

        this.$component.data('initialized', true);
        this.$progress = this.$component.find(this.progressSelector);
        this.$bar = this.$progress.find(this.barSelector);
        this.$message = this.$component.find(this.messageSelector).find('.message');
        this.$reload = this.$component.find(this.messageSelector).find('.reload');
        this.$stopButton = this.$component.closest('form').find(this.stopSelector);
        this.initialize();
    },

    /**
     * Initialize widget
     */
    initialize: function()
    {
        this.url = URLHandler.buildURL({
            'target': 'xpayments_bulk_operation',
            'action': 'get_data',
        }),

        this.updateProgress();
    },

    /**
     * Hide entire component 
     */
    hide: function(success)
    {
        if (success) {
            this.$bar.hide();
            this.$progress.hide();
            this.$message.hide();
            this.$stopButton.hide();
            this.$reload.removeClass('hidden');
        } else {
            this.$component.hide();
        }
    },

    /**
     * Process progress data
     */
    processProgressData: function() 
    {
        this.$bar.attr('title', this.percent + '%');
        this.$bar.css('width', this.percent + '%');

        this.$message.text(this.message ? this.message: ' ');

        for (order in this.orders) {
            jQuery(order).attr('disabled', 'disabled');
            jQuery(order).val(this.orders[order]);
        }

        if (this.finished) {
            this.processProgressFinish();
        } else {
            this.$stopButton.removeClass('hidden');
        }
    },

    /** 
     * Finish progress
     */
    processProgressFinish: function()
    {
        if (this.message) {
            core.trigger('message', {type: 'success', message: this.message});
        }

        for (order in this.orders) {
            jQuery(order).removeAttr('disabled');
        }

        this.$stopButton.addClass('hidden');
        this.$bar.addClass('progress-bar-success');

        this.setTimeout(this.hide.bind(this, true));
    },

    /**
     * Process error with progress
     */
    processProgressError: function()
    {
        if (this.message) {
            core.trigger('message', {type: 'error', message: this.message});
        }

        for (order in this.orders) {
            jQuery(order).removeAttr('disabled');
        }

        this.$bar.addClass('progress-bar-danger');

        this.setTimeout(this.hide.bind(this, false));
    },

    /**
     * Callback for update progress
     */
    updateProgressCallback: function(XMLHttpRequest, textStatus, data, valid)
    {
        var success = true;

        try {

            data = jQuery.parseJSON(data);

            if (
                'undefined' !== typeof(data.percent)
                && 0 <= data.percent
                && 100 >= data.percent
            ) {
                this.percent = data.percent;
            }

            if ('undefined' !== typeof(data.message)) {
                this.message = data.message;
            }

            if ('undefined' !== typeof(data.finished)) {
                this.finished = data.finished;
            }

            if ('undefined' !== typeof(data.orders)) {
                this.orders = data.orders;
            }

            this.processProgressData();

        } catch (exception) {
            console.error(exception);
            success = false;
        }

        if (success && !this.finished) {
            this.setTimeout(this.updateProgress.bind(this));
        }
    },

    /**
     * Update progress
     */
    updateProgress: function()
    {
        core.post(
            this.url,
            this.updateProgressCallback.bind(this)
        );
    },

    /**
     * Set timeout wrapper
     */
    setTimeout: function (callback)
    {
        setTimeout(callback, this.sleepTimeout);
    }
});

core.autoload(BulkOperationProgress);
