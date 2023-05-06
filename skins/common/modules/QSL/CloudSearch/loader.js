/**
 * CloudSearch asynchronous JS code loader
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

(function () {
  var cs = document.createElement('script');
  cs.type = 'text/javascript'; 
  cs.async = true;
  cs.src = 'https://e9h3u4j8.stackpathcdn.com/cloud_search_xcart.js';

  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(cs, s);
})();
