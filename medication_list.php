<?php
/**
 * Created by PhpStorm.
 * User: mikey
 * Date: 11/4/18
 * Time: 1:15 AM
 */

$med_name = $_POST['med_name'];
$med_rx = $_POST['med_rx'];
$med_quantity = $_POST['med_quantity'];
$fill_date = $_POST['fill_date'];
$med_per_dose = $_POST['med_per_dose'];
$dr_id = $_POST['dr_id'];
$patient_id = $_POST['patient_id'];

echo 'medication name is ' . $med_name . "<br>";
echo 'med rx is ' . $med_rx . "<br>";
echo 'med quantity is ' . $med_quantity . "<br>";
echo 'fill date is ' . $fill_date . "<br>";
echo 'dr id is ' . $dr_id . "<br>";
echo 'patient id is ' . $patient_id . "<br>";