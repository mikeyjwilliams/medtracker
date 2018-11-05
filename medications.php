<?php
/**
 * Created by PhpStorm.
 * User: mikey
 * Date: 11/4/18
 * Time: 12:24 AM
 */

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $med_name = trim(filter_input(INPUT_POST, 'med_name', FILTER_SANITIZE_STRING));
    $med_rx = trim(filter_input(INPUT_POST, 'med_rx', FILTER_SANITIZE_STRING));
    $med_quantity = trim(filter_input(INPUT_POST, 'med_quantity', FILTER_SANITIZE_NUMBER_INT));
    $med_date = trim(filter_input(INPUT_POST, 'fill_date', FILTER_SANITIZE_STRING));
    $med_per_dose = trim(filter_input(INPUT_POST, 'med_per_dose', FILTER_SANITIZE_NUMBER_INT));
    $dr_id = trim(filter_input(INPUT_POST, 'dr_id', FILTER_SANITIZE_NUMBER_INT));
    $patient_id = trim(filter_input(INPUT_POST, 'patient_id', FILTER_SANITIZE_NUMBER_INT));

    if ( empty($med_name) || empty($med_rx) || empty($med_quantity) || empty($med_date) || empty($med_per_dose) ||
        empty($dr_id) || empty($patient_id)) {
        $error_message = "Please make sure to fill out all fields. Med name, Med Rx, Med Quantity,\n" .
            ' Med Date, Med Per Dose, Dr Name, and Patient Name.';
    } else {
        if(add_medication($med_name, $med_rx, $med_quantity, $med_date, $med_per_dose, $dr_id, $patient_id)) {
            header('Location: medication_list.php');
        } else {
            $error_message = 'Could not add Medication';
        }
    }
}

$page_title = 'Meds Form | Med App';
$page = 'meds_form';

include 'inc/functions.php';

?>

<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 my-1 my-md-4">
            <h1 class="text-center"><i class="fal fa-prescription-bottle-alt"></i> Med Add Form</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php
            if(isset($error_message)) {
                echo "<h3 class='bg-danger'>" . $error_message . "</h3>";
            }
            ?>
        </div>
    </div>
</div>
<form action="medications.php" method="post">
   <div class="container">
       <div class="form-group row">
           <label for="med-name" class="col-sm-2 col-md-2 col-form-label">Medication Name</label>
           <input type="text" id="med-name" name="med_name" class="col-sm-10 col-md-10" maxlength="60">
       </div>
       <div class="form-group row">
           <label for="med-rx" class="col-sm-2 col-md-2 col-form-label"><i class="fal fa-prescription"></i> Med RX</label>
           <input type="text" name="med_rx" class="col-sm-10 col-md-10" maxlength="12">
       </div>
       <div class="form-group row">
           <label for="med-quantity" class="col-sm-2 col-md-2 col-form-label">Med Quantity</label>
           <input type="number" id="med-quantity" name="med_quantity" class="col-sm-10 col-md-10" min="1">
       </div>
       <div class="form-group row">
           <label for="fill-date" class="col-sm-2 col-md-2 col-form-label">Date Filled</label>
           <input type="date" id="fill-date" name="fill_date" class="col-sm-10 col-md-10" min="2018-08-01">
       </div>
       <div class="form-group row">
           <label for="per-dose" class="col-sm-2 col-md-2 col-form-label">Med per Doseage</label>
           <input type="number" id="per-dose" name="med_per_dose" class="col-sm-10 col-md-10" min="1">
       </div>
       <div class="form-group row">
           <label for="doc-selection" class="col-sm-2 col-md-2 col-form-label">Doctor selection</label>
           <select name="dr_id" id="doc-selection">
               <option value="">Select One</option>
               <?php
               foreach (report_docs() as $doctor) {
                   echo "<option value='" . $doctor['id'] . "'>"
                       . $doctor['dr_last_name'] . ', ' . $doctor['dr_first_name'] . "</option>";
               }
               ?>
           </select>
       </div>
       <div class="form-group row">
           <label for="patient-selection" class="col-sm-2 col-md-2 col-form-label">Patient Selection</label>
           <select name="patient_id" id="patient-selection">
               <option value="">Select</option>
               <?php
               foreach (report_names() as $patient) {
                   echo "<option value='" . $patient['id'] . "'>"
                       . $patient['pat_last_name'] . ', ' . $patient['pat_first_name'] . "</option>";
               }
               ?>
           </select>
       </div>
       <div class="col-sm-3 col-md-3">
           <button type="submit" class="btn btn-primary">Submit</button>
       </div>

   </div>
</form>

<?php include './inc/footer.php'; ?>