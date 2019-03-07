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

function add_medication($med_name, $med_rx, $med_quantity, $med_date, $med_per_dose, $mg, $dr_id, $patient_id) {
    include 'conn.php';
    $sql = 'INSERT INTO Medications(`med_name`, `med_rx`, `med_quantity`, `med_fill_date`, `med_per_dose`, `med_mg`, `p_id`, `d_id`)
            VALUES (:med_name, :med_rx, :med_quant, :fill_date, :dosage, :med_mg, :p_id, :d_id)';
    try {
        $results = $db->prepare($sql);
        $results->bindValue(':med_name', $med_name, PDO::PARAM_STR);
        $results->bindValue(':med_rx', $med_rx, PDO::PARAM_STR);
        $results->bindValue(':med_quant', $med_quantity, PDO::PARAM_STR); // Decimal
        $results->bindValue(':fill_date', $med_date, PDO::PARAM_STR);
        $results->bindValue(':dosage', $med_per_dose, PDO::PARAM_STR); // Decimal
        $results->bindValue(':med_mg', $mg, PDO::PARAM_STR);
        $results->bindValue(':p_id', $patient_id, PDO::PARAM_INT);
        $results->bindValue(':d_id', $dr_id, PDO::PARAM_INT);
        $results->execute();
    } catch(Exception $e) {
        echo 'Error! ' . $e->getMessage() . "<br>";
        return false;
    }
    return true;
}

function report_names() {
    include 'conn.php';
    $sql = 'SELECT id, pat_first_name, pat_last_name FROM Patients';
    try {
        $patients = $db->prepare($sql);
        $patients->execute();
        $patient_names = $patients->fetchAll();
        return $patient_names;

    } catch (Exception $e) {
        echo 'Error! ' . $e->getMessage() . '<br>';
        return array();
    }
}

function report_docs() {
    include 'conn.php';
    $sql =  'SELECT id, dr_first_name, dr_last_name FROM Doctors';
    try {
        $doctors = $db->prepare($sql);
        $doctors->execute();
        $doctors_names = $doctors->fetchAll();
        return $doctors_names;

    } catch (Exception $e) {
        echo 'Error! ' . $e->getMessage() . '<br>';
        return array();
    }
}

function full_report() {
    include 'conn.php';
    $sql = 'SELECT m.id AS med_id, m.med_name AS name, m.med_rx AS rx, m.med_quantity AS quantity, m.med_fill_date AS fill_date,
    m.med_per_dose as dosage, TRUNCATE(m.med_quantity - (dd.dose_taken * m.med_per_dose), 2) AS med_subtract,
    d.id AS d_id, d.dr_first_name AS dr_first, d.dr_last_name AS dr_last,
    p.id AS p_id, p.pat_first_name AS patient_first, p.pat_last_name AS patient_last,
    dd.dose_taken AS taken
    FROM Medications AS m
    JOIN Doctors AS d ON d.id = m.d_id
    JOIN Patients AS p  ON p.id = m.p_id
    JOIN Daily_doses AS dd ON dd.id = m.d_id
    GROUP BY med_id';

}