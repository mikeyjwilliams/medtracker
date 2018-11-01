<?php
/**
 * Created by PhpStorm.
 * User: mikey
 * Date: 11/1/18
 * Time: 9:58 AM
 */

$page_title = 'Patients Entry';

?>

<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/nav.php'; ?>

<form action="/patient_list.php" method="POST">
    <div class="container my-4 my-1">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="patientFirstName">Patient First Name</label>
                    <input type="text" class="form-control" name="patientFirstName" id="patientFirstName" placeholder="John" required>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="patientLastName">Patient Last Name</label>
                    <input type="text" class="form-control" name="patientLastName" id="patientLastName" placeholder="Smith" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>

</form>




<?php include 'inc/footer.php'; ?>
