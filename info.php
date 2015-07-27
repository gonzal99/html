<?php
/**
 * Created by PhpStorm.
 * User: gonzal99
 * Date: 7/27/2015
 * Time: 10:01 AM
 */
if($_SERVER['HTTPS']!= null){
    echo "https on";
}else{
    echo "https off";
}
echo isset($_SERVER['HTTPS']);