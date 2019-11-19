<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
    <title>Register</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Gym</a>
</nav>
<br>
<div class="card" style="width: 50%; border-radius: 25px; margin-left: auto; margin-right: auto">
    <div class="card-body">
        <form action="register.php" method="post">
            <h5 style="text-align: center">Create Account</h5>
            <br>
            <h6>Basic Details</h6>
            <input type="text" class="form-control" id="name" placeholder="Name" required> <br>
            <input type="email" class="form-control" id="email_id" placeholder="Email id" required> <br>
            <input type="tel" class="form-control" id="phone" placeholder="Phone Number" required> <br>
            <input type="password" class="form-control" id="password" placeholder="Password" required> <br>
            <input type="r-password" class="form-control" id="r-password" placeholder="Confirm Password" required>
            <hr>
            <div class="form-row">
                <div class="col">
                    <label for="dob" class="col col-form-label">DOB</label>
                </div>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="dob" placeholder="dob" required style="width: auto">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <label class="col-form-label col-sm-10 pt-0">Gender</label>
                </div>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gen_male" value="male">
                        <label class="form-check-label" for="gen_male">M</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gen_female" value="female">
                        <label class="form-check-label" for="gen_female">F</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gen_other" value="other">
                        <label class="form-check-label" for="gen_other">Other</label>
                    </div>
                </div>
            </div>
            <br>
            <input type="number" class="form-control" id="height" placeholder="Height (cm)" required> <br>
            <input type="number" class="form-control" id="weight" placeholder="Weight (kgs)" required> <br>
            <input type="text" class="form-control" id="goal" placeholder="Goal" required>
            <hr>
            <div class="form-inline">
                <label class="mr-sm-2" for="batch">Batch</label>
                <select class="custom-select mr-sm-2" id="batch">
                    <option selected>Time</option>
                    <option value="1">5:00</option>
                    <option value="2">6:00</option>
                    <option value="3">7:00</option>
                    <option value="4">8:00</option>
                    <option value="5">16:00</option>
                    <option value="6">17:00</option>
                    <option value="7">18:00</option>
                    <option value="8">19:00</option>
                </select>
            </div>
            <br>
            <button class="btn btn-outline-dark">Register</button>
        </form>
    </div>
</div>
<br>
</body>