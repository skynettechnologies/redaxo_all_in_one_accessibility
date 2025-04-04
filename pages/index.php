<?php

if (rex_ini_get('memory_limit') < 67_108_864) {
    @ini_set('memory_limit', '64M');
}

echo rex_view::title(rex_i18n::msg('allinoneaccessibility_title'));

rex_be_controller::includeCurrentPageSubPath();
