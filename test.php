<?php

require_once "lib/ScreenSteps.php";

use lib\ScreenSteps;

$login = "LOGIN";
$password = "PASSWORD";
$account = "ACCOUNT";
$site_id = "SITE_ID";

$api = new ScreenSteps($login, $password, $account);

$args = ['text' => 'user account', 'page' => 1];
$args = ['tags' => ['account', 'admin']];
$args = ['title' => 'user', 'page' => 1];

$args = ['manual_ids' => [1]];

$sites = $api->search($site_id, $args);

echo '<xmp>';
print_r($sites);
echo '</xmp>';
