/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/base/eCommerceImpressionsEvent', ['googleAnalytics/eCommerceCoreEvent', 'js/underscore'], function (eCommerceCoreEvent, _) {
  let eCommerceImpressionsEventBase = eCommerceCoreEvent.extend({

    chunkThreshold: 6000,
    processedImpressions: {},

    constructor () {
      eCommerceImpressionsEventBase.superclass.constructor.apply(this, arguments)
      this.initialize()
    },

    initialize() {
      this.resetContainer()
    },

    resetContainer () {
      this.container = {}
    },

    getListeners () {
      return {
        'ga-pageview-sending': this.registerAllImpressionsInitial,
        'list.products.loaded': this.registerAllImpressionsInList,
        'ga-ec-addImpression': this.addImpressionExternalHandler
      }
    },

    registerAllImpressionsInitial (event, data) {
      var self = this

      self.processImpressionsList(self.getActions('impression'))
    },

    registerAllImpressionsInList (event, widget) {
      var self = this

      self.processedImpressions = {}

      self.processImpressionsList(self.getActions('impression', widget['base']))
    },

    addImpressionExternalHandler (event, data) {
      this.addImpression(data)
    },

    processImpressionsList (actionsData) {
      var self = this
      var length = 0

      _.each(
        actionsData,
        function (action, index) {
          if (self.addImpression(action.data)) {
            length += JSON.stringify(action.data).length
          }
          if (self.calculateChunkThresholdLength(length) > self.chunkThreshold) {
            self.flushImpressions()
            length = 0
          }
        }
      )

      if (length) {
        self.flushImpressions()
      }
    },

    calculateChunkThresholdLength (length) {
      return length
    },

    addImpression (impressionData) {
      var self = this
      var result = false
      var hash = self.getImpressionHash(impressionData)

      if (hash && !self.processedImpressions[hash]) {
        self.addImpressionAction(impressionData)
        result = true

        self.processedImpressions[hash] = true
      }

      return result
    },

    getImpressionHash (data) {
      return null
    },

    addImpressionAction (data) {
    },

    flushImpressions () {
    }

  })

  return eCommerceImpressionsEventBase;
});
