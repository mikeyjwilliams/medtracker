<?php
/**
 * Created by PhpStorm.
 * User: mikey
 * Date: 11/4/18
 * Time: 12:24 AM
 */

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
<form action="medication_list.php" method="post">
   <div class="container">
       <div class="form-group row">
           <label for="med-name" class="col-sm-2 col-md-2 col-form-label">Medication Name</label>
           <input type="text" id="med-name" name="medName" class="col-sm-10 col-md-10" maxlength="60">
       </div>
       <div class="form-group row">
           <label for="med-rx" class="col-sm-2 col-md-2 col-form-label"><i class="fal fa-prescription"></i> Med RX</label>
           <input type="text" class="col-sm-10 col-md-10" maxlength="12">
       </div>
       <div class="form-group row">
           <label for="med-quantity" class="col-sm-2 col-md-2 col-form-label">Med Quantity</label>
           <input type="number" id="med-quantity" name="medQuantity" class="col-sm-10 col-md-10" min="1">
       </div>
       <div class="form-group row">
           <label for="fill-date" class="col-sm-2 col-md-2 col-form-label">Date Filled</label>
           <input type="date" id="fill-date" name="fillDate" class="col-sm-10 col-md-10" min="2018-08-01">
       </div>
       <div class="form-group row">
           <label for="per-dose" class="col-sm-2 col-md-2 col-form-label">Med per Doseage</label>
           <input type="number" id="per-dose" name="medPerDose" class="col-sm-10 col-md-10" min="1">
       </div>
       <div class="form-group row">
           <label for="docSelection" class="col-sm-2 col-md-2 col-form-label">Doctor selection</label>
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