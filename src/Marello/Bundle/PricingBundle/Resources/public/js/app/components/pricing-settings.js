/*jslint nomen: true*/
/*global define*/
define(function (require) {
    'use strict';

    var $ = require('jquery'),
        _ = require('underscore'),
        __ = require('orotranslation/js/translator');

    return function (options) {
        var $el = options._sourceElement,
            $enableEl = $el.find('#' + options.pricing_enable_id);

        var enableHandler = function () {
            if ($enableEl.is(':checked')) {
                console.log('checked')
                $el.addClass('pricing-enabled');
            } else {
                console.log('not checked')
                $el.removeClass('pricing-enabled');
            }
        };

        $enableEl.on('click', enableHandler);
        console.log($enableEl);
        enableHandler();

    };
});
