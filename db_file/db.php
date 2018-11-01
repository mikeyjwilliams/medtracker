<?php
/**
 * Created by PhpStorm.
 * User: mikey
 * Date: 10/31/18
 * Time: 11:39 PM
 */

try {

$db = new PDO('mysql:host='.$host.';dbname='.$db.';',$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}