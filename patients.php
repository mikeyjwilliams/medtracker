<?php
/**
 * Created by PhpStorm.
 * User: mikey
 * Date: 11/1/18
 * Time: 9:58 AM
 */
include 'inc/strap.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = trim(filter_input(INPUT_POST, 'patientFirstName', FILTER_SANITIZE_STRING));
    $last_name = trim(filter_input(INPUT_POST, 'patientLastName', FILTER_SANITIZE_STRING));

    if ( empty($first_name) || empty($last_name)) {
        $error_message = 'Please fill out First, Last name.';
    } else {
        if (add_name($first_name, $last_name)) {
            header('Location: patient_list.php');
        } else {
            $error_message = 'Could not add name';
        }
    }
}


$page_title = 'Patients Entry';
$page = 'patients';
?>

<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/nav.php'; ?>

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
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center"><i class="fal fa-user"></i> Patient Add Form</h1>
        </div>
    </div>
</div>
<form action="patients.php" method="post">
    <div class="container my-4 my-1">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="patientFirstName">Patient First Name</label>
                    <input type="text" class="form-control" name="patientFirstName" id="patientFirstName" placeholder="John" >
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="patientLastName">Patient Last Name</label>
                    <input type="text" class="form-control" name="patientLastName" id="patientLastName" placeholder="Smith" >
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
