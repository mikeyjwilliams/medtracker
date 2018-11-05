<?php
/**
 * Created by PhpStorm.
 * User: mikey
 * Date: 10/31/18
 * Time: 10:02 PM
 */
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/index.php">Meds</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mednavbar" aria-controls="mednavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mednavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if($page == 'home') { echo ' active'; } ?>">
                <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Med Check In</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarMedDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Add Items
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarMedDropdown">
                    <a class="dropdown-item" href="patients.php">Add Patient</a>
                    <a class="dropdown-item" href="doctors.php">Add Doctor</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="medications.php">Add Medication</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="patient_list.php">Patient List</a>
                    <a class="dropdown-item" href="doctors_list.php">Doctors List</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="report.php">Reports</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

