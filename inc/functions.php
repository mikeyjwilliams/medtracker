<?php
/**
 * Created by PhpStorm.
 * User: mikey
 * Date: 10/31/18
 * Time: 11:36 PM
 */


/** @param $pat_first_name
 * @param $pat_last_name
 * @return bool
 */
function add_name($pat_first_name, $pat_last_name)
{
    include 'conn.php';
    $sql = "INSERT INTO Patients(pat_first_name, pat_last_name) 
              VALUES(?, ?)";
    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $pat_first_name, PDO::PARAM_STR);
        $results->bindValue(2, $pat_last_name, PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo 'Error! ' . $e->getMessage() . "<br>";
        return false;
    }
    return true;
}

function add_doc($dr_first_name, $dr_last_name) {
    include 'conn.php';
    $sql = "INSERT INTO Doctors(dr_first_name, dr_last_name) 
              VALUES(?, ?)";
    try {
        $results = $db->prepare($sql);
        $results->bindValue(1,$dr_first_name, PDO::PARAM_STR);
        $results->bindValue(2, $dr_last_name, PDO::PARAM_STR);
        $results->execute();
    } catch(Exception $e) {
        echo 'Error! ' . $e->getMessage() . "<br>";
        return false;
    }
    return true;
}

function report_names()
{
    include 'conn.php';

    try {
        $patients = $db->prepare('SELECT id, pat_first_name, pat_last_name FROM Patients');
        $patients->execute();
        $patient_names = $patients->fetchAll();
        return $patient_names;

    } catch (Exception $e) {
        echo 'Error! ' . $e->getMessage() . '<br>';
        return array();
    }
}

function report_docs()
{
    include 'conn.php';

    try {
        $doctors = $db->prepare('SELECT id, dr_first_name, dr_last_name FROM Doctors');
        $doctors->execute();
        $doctors_names = $doctors->fetchAll();
        return $doctors_names;

    } catch (Exception $e) {
        echo 'Error! ' . $e->getMessage() . '<br>';
        return array();
    }
}
