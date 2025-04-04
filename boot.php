<?php

if (rex::isFrontend()) {
    if (rex_package::get('allinoneaccessibility')->isInstalled() && rex_package::get('allinoneaccessibility')->isAvailable()) {
        rex_extension::register('OUTPUT_FILTER', function (rex_extension_point $ep) {
            // Define the script tag to inject
            $script = '<script id="aioa-adawidget" src="https://www.skynettechnologies.com/accessibility/js/all-in-one-accessibility-js-widget-minify.js?colorcode=#420083&token=&position=bottom_right"></script>';
            $ep->setSubject(str_replace('</body>', $script . '</body>', $ep->getSubject()));
        });
    }
}

