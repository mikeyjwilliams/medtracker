<?php
/**
 * Created by PhpStorm.
 * User: mikey
 * Date: 10/31/18
 * Time: 4:33 PM
 */
?>

<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/nav.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Medication Tracker App</h1>
            <hr>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="card text-center">
                <div class="card-title">
                    <h2>Med Check Off</h2>
                </div>
                <div class="card-body">
                    <p>
                        Did we take our medications today?<br>
                        Well then it is time to check it off!
                    </p>
                    <a href="#">
                        <button type="button" class="btn btn-primary">
                            Med check off
                        </button>
                    </a>
                </div>
            </div>
        </div><!-- /row -->
            <div class="col-sm-12 col-md-6">
                <div class="card text-center">
                    <div class="card-title">
                        <h2>Medication Input</h2>
                    </div>
                    <div class="card-body">
                        <p>
                            Need to enter a new medication?<br>
                            *please add dr. and patient first.
                        </p>
                        <a href="#">
                            <button type="button" class="btn btn-primary">
                                Medication Entry
                            </button>
                        </a>
                    </div>
                </div>
            </div>
    </div><!-- /row -->
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="card text-center">
                <div class="card-title">
                    <h2>Patient / Dr. Entry</h2>
                </div>
                <div class="card-body">
                    <p>
                        Patient entry
                    </p>
                    <a href="#">
                        <button class="btn btn-primary">
                            Patient entry
                        </button>
                    </a>
                    <br>
                    <p>
                        Doctor Entry
                    </p>
                    <a href="#">
                        <button class="btn btn-primary">
                            Doctor Entry
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="card text-center">
                <div class="card-title">
                    <h2>Reports</h2>
                </div>
                <div class="card-body">
                    <p>
                        Reports of when, what, and more<br>
                        about your meds.
                    </p>
                    <a href="#">
                        <button type="button" class="btn btn-primary">
                            Reports
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>






<?php include 'inc/footer.php'; ?>
