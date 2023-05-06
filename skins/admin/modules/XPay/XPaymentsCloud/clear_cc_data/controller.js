/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Clear credit card data controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */
jQuery().ready(
  function() {
    jQuery('.clear-cc-data-progress .bar')
      .bind(
        'error',
        function() {
          this.errorState = true;
          self.location = URLHandler.buildURL({ 'target': 'module', 'moduleId': 'XPay-XPaymentsCloud', 'clear_cc_data_failed': 1 });
        }
      )
      .bind(
        'complete',
        function() {
          if (!this.errorState) {
            self.location = URLHandler.buildURL({ 'target': 'module', 'moduleId': 'XPay-XPaymentsCloud', 'clear_cc_data_completed': 1 });
          }
        }
      ).bind(
      'cancel',
      function() {
        setTimeout(function() {
          self.location = URLHandler.buildURL({ 'target': 'module', 'moduleId': 'XPay-XPaymentsCloud' });
        }, 4000);
      }
    );

    var height = 0;
    jQuery('.clear-cc-data-completed .files.std ul li.file').each(
      function () {
        height += jQuery(this).outerHeight();
      }
    );

    var bracket = jQuery('.clear-cc-data-completed .files ul li.sum .bracket');
    var diff = bracket.outerHeight() - bracket.innerHeight();

    bracket.height(height - diff);
  }
);
