<?php
require_once '../inc/db.php';
require_once  '../inc/process_registration.php'
?>
<html>
<head>
    <title>
        Register
    </title>
    <?php
    require_once 'links.php';
    ?>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Ufit</a>
</nav>
<br>
<div class="card" style="width: 50%; border-radius: 25px; margin-left: auto; margin-right: auto">
    <div class="card-body">
        <form action="register.php" method="post">
            <h5 style="text-align: center">Create Account</h5>
            <br>
            <h6>Basic Details</h6>
            <hr>
            <input type="text" class="form-control" name="name" placeholder="Name" required> <br>
            <input type="email" class="form-control" name="email" placeholder="Email id" required> <br>
            <input type="tel" class="form-control" name="phone" placeholder="Phone Number" required> <br>
            <input type="password" class="form-control" name="password" placeholder="Password" required> <br>
            <input type="password" class="form-control" name="r_password" placeholder="Confirm Password" required>
            <hr>
            <div class="form-row">
                <div class="col">
                    <label for="dob" class="col col-form-label">DOB</label>
                </div>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="dob" placeholder="dob" required style="width: auto">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <label class="col-form-label col-sm-10 pt-0">Gender</label>
                </div>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gen_male" value="M">
                        <label class="form-check-label" for="gen_male">M</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gen_female" value="F">
                        <label class="form-check-label" for="gen_female">F</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gen_other" value="O">
                        <label class="form-check-label" for="gen_other">Other</label>
                    </div>
                </div>
            </div>
            <br>
            <input type="number" class="form-control" name="height" placeholder="Height (cm)" required> <br>
            <input type="" class="form-control" name="weight" placeholder="Weight (kgs)" required> <br>
            <input type="text" class="form-control" name="goal" placeholder="Goal" required>
            <hr>
            <div class="row" style="padding: 10px">
                <!--<div class="col md-4">
                    <p><label for="start_date" class="col col-form-label">Start Date</label></p>
                    <input type="date" class="form-control" name="start_date" id="start_date" style="width: auto"
                           required>
                </div>
                <div class="col md-4">
                    <p><label for="end_date" class="col col-form-label">End Date</label></p>
                    <input type="date" class="form-control" name="end_date" id="end_date" style="width: auto" required>
                </div>-->
                <div class="col md-4">
                    <p><label class="col col-form-label" for="batch">Batch</label></p>
                    <select class="custom-select" name="batch" style="width: auto">
                        <option disabled selected>Select Batch</option>
                        <?php
                        $query = 'SELECT * FROM BATCHES';
                        $result = $conn->query($query);
                        while ($row = $result->fetch_assoc()) {
                            $opt = <<<OPT
<option value="{$row['Batch_ID']}">{$row['Batch_Time']}</option>
OPT;
                            echo $opt;
                        }
                        ?>
                    </select>
                </div>
            </div>
            <br>
            <button class="btn btn-outline-dark">Register</button>
        </form>
    </div>
</div>
<br>
</body>
</html>
