<?php
/**
 * Created by PhpStorm.
 * User: mikey
 * Date: 11/1/18
 * Time: 11:27 AM
 */
require 'inc/functions.php';

?>


<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">
                Patients list
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ">
                            <ul>
                            <?php foreach (report_names() as $first_name) { ?>
                                <?php echo '<li>' . $first_name['pat_first_name'] . '</li>'; ?>

                                <?php } ?>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <?php foreach (report_names() as $last_name) { ?>
                                    <?php echo '<li>' . $last_name['pat_last_name'] . '</li>'; ?>
                                <?php }  ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include './inc/footer.php'; ?>