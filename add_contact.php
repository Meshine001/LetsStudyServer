<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2016/5/11
 * Time: 21:29
 */
require_once("config/Config.php");
require_once("config/RequestUrl.php");
require_once("entity/UserInfo.php");
require(__DIR__ . '/bootstrap.php');


$url = Config::$JMESSAGE_API_URL.RequestUrl::$GET_USER_INFO.$_GET['username'];
$auth = 'Basic '.base64_encode(Config::$APP_KEY.':'.Config::$MASTER_SECRET);
echo $auth;
$response = \Httpful\Request::get($url)
    ->addHeader('Authorization',$auth)
    ->send();
echo $response;

