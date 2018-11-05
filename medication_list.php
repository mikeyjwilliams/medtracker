<?php
/**
 * Created by PhpStorm.
 * User: mikey
 * Date: 11/4/18
 * Time: 1:15 AM
 */

//$med_name = $_POST['med_name'];
//$med_rx = $_POST['med_rx'];
//$med_quantity = $_POST['med_quantity'];
//$fill_date = $_POST['fill_date'];
//$med_per_dose = $_POST['med_per_dose'];
//$dr_id = $_POST['dr_id'];
//$patient_id = $_POST['patient_id'];

$med_name = trim(filter_input(INPUT_POST, 'med_name', FILTER_SANITIZE_STRING));
$med_rx = trim(filter_input(INPUT_POST, 'med_rx', FILTER_SANITIZE_STRING));
$med_quantity = trim(filter_input(INPUT_POST, 'med_quantity', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION));
$med_date = trim(filter_input(INPUT_POST, 'fill_date', FILTER_SANITIZE_STRING));
$med_per_dose = trim(filter_input(INPUT_POST, 'med_per_dose', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION));
$dr_id = trim(filter_input(INPUT_POST, 'dr_id', FILTER_SANITIZE_NUMBER_INT));
$patient_id = trim(filter_input(INPUT_POST, 'patient_id', FILTER_SANITIZE_NUMBER_INT));

echo 'medication name is ' . $med_name . "<br>";
echo 'med rx is ' . $med_rx . "<br>";
echo 'med quantity is ' . $med_quantity . "<br>";
echo 'fill date is ' . $med_date . "<br>";
echo 'per dosage ' . $med_per_dose . "<br>";
echo 'dr id is ' . $dr_id . "<br>";
echo 'patient id is ' . $patient_id . "<br>";