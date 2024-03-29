<?php
define('WORAIS_LOGIN_PROTECT_CONFIGS', [
    'retention_time'    => 30,
    'ban_threshold'     => 15,
    'ban_time'          => 10,
    'captcha_show' => 1,
    'captcha_threshold' => 2
]);

define('WORAIS_LOGIN_PROTECT_CAPTCHA', [
    'width'  => 120,
    'height' => 40,
    'font'         => WORAIS_LOGIN_PROTECT_DIR . '/assets/monofont.ttf',
    'font_size'    => 40 * 0.75,
    'random_lines' => 20
]);