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
                <table class="table">
                    <tbody>
                    <tr scope="row">
                        <th scope="row">First Name</th>
                       <?php foreach (report_name() as $first_name) {
                           echo '<td>' . $first_name['pat_first_name'] . '</td>';
                       }
                       ?>
                    </tr>

                    <tr scope="row">
                        <th scope="row">Last Name</th>
                        <?php foreach (report_name() as $last_name) {
                            echo '<td>' . $last_name['pat_last_name'] . '</td>';
                        }
                        ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include './inc/footer.php'; ?>