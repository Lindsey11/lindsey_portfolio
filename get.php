<?php
/**
 * Created by PhpStorm.
 * User: lindseydrew
 * Date: 2018/04/20
 * Time: 4:33 PM
 */



$json = file_get_contents("https://manuva.co.za/platform/home/members/26327");

//$jsondata = json_decode($json, true );


echo ($json[$name]);
