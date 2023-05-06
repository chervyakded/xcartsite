/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Layout type controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

function LayoutType(base) {
  var o = this;

  o.base = base;
  o.base.commonController = o;

  o.selector = jQuery('.hidden-field select', o.base);

  jQuery('.layout-type', this.base).bind('click', _.bind(o.handleClickLayoutType, o));
}

LayoutType.prototype.base = null;
LayoutType.prototype.selector = null;


LayoutType.prototype.handleClickLayoutType = function (event) {
  jQuery('.layout-type', this.base).removeClass('selected');
  var selected = jQuery(event.currentTarget).addClass('selected');
  this.setLayoutType(selected.data());
};

LayoutType.prototype.setLayoutType = function (data) {
  this.selector.val(data.layoutType);
  this.selector.trigger('change', data);
};

core.autoload(LayoutType, '.layout-types');
