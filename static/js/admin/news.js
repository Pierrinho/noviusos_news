define([
  'jquery-nos-appdesk'
], function($nos) {
    "use strict";
    return function(appDesk) {
        return {
        
            /**
             * Config variables
             */
            blognews : {
                namespace   : 'NoviusDev\\BlogNews\\News',
                dir         : 'noviusdev_news',
                icon_name   : 'news'
            }
        };
    };
});