<?php
/**
 * Created by PhpStorm.
 * User: mikey
 * Date: 11/3/18
 * Time: 10:14 PM
 */
require_once 'inc/strap.php';
?>


<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/nav.php'; ?>

<div class="container my-1 my-md-5">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Doctors List</h1>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ">
                            <ul>
                                <?php foreach (report_docs() as $first_name) { ?>
                                    <?php echo '<li>' . $first_name['dr_first_name'] . '</li>'; ?>

                                <?php } ?>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <?php foreach (report_docs() as $last_name) { ?>
                                    <?php echo '<li>' . $last_name['dr_last_name'] . '</li>'; ?>
                                <?php }  ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include './inc/footer.php'; ?>