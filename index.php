<?php

use Source\App\User;
use Source\Bank\Account;
use Source\Bank\AccountCurrent;
use Source\Bank\AccountSaving;

require __DIR__ . "/source/autoload.php";

$client = new User("Brayann", "Barbosa");
/*$account = new Account(
    "2224",
    "221122",
    $client,
    "10000"
); */

var_dump(
    $client
//    $account
);


$saving = new AccountSaving(
    "2565",
    "221122",
    $client,
    "0"
);

var_dump($saving);

$saving->deposit("500");

$saving->withdrawal("550");
$saving->withdrawal("500");

$saving->extract();


$current = new AccountCurrent(
    "2255",
    "221111",
    $client,
    "1000",
    "1000"
);

var_dump($current);

$current->deposit("1000");
$current->withdrawal("2000");
$current->withdrawal("500");

$current->extract();