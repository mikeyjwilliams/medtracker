<?php
/**
 * Created by PhpStorm.
 * User: mikey
 * Date: 10/31/18
 * Time: 11:36 PM
 */
require_once './inc/strap.php';

?>

<?php include './inc/header.php'; ?>
<?php include './inc/nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Reports</h1>
        </div>
    </div>
</div>
<form action="reports.php" method="POST">
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="group-select">Options</label>
                </div>
                <select class="custom-select" id="group-select">
                    <option selected>Choose...</option>
                    <option value="">Full Report</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">Show Report</button>
        </div>
    </div>
</div>
</form>
<?php
if(isset($report) == $full_reports())  { ?>

    <div class="container">
        <?php foreach($full_reports as $full_report) { ?>
        <div class="table row">
            <thead>
                <tr>
                    <th scope="col"></th>
                </tr>
            </thead>
        </div>
        <?php } ?>
    </div>
<?php }  ?>


