<?php
require_once ROOT."controllers".DS."User.php";
require_once ROOT."controllers".DS."UserManager.php";

$um = UserManager::getInstance($db);

$pageContent = array(
    'user' => $user,
);

//var_dump($um->getFriendsByUserId($user->getId()));