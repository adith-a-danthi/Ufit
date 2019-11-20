<html>
<head>
    <title>Home</title>
    <?php
        require_once 'links.php';
    ?>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php">Ufit</a>
    <a class="btn btn-outline-light" href="index.php" role="button">Logout</a>
</nav>

<div class="card" style="width: 85%;margin-left: auto;margin-right: auto;margin-top:10px;padding: 10px">
    <h3 style="margin: auto">Account Info</h3>
    <div class="card-body">
        <div class="row">
            <div class="column" style="margin: auto;width:200px" id="name">
                <h5 class="card-title">Name</h5>
                <h6 class="text-muted" id="email">lorem ipsum</h6>
            </div>
            <div class="column" style="margin: auto;width:200px" id="email">
                <h5 class="card-title">Email</h5>
                <h6 class="text-muted" id="email">lorem.ipsum@lorem.ipsum</h6>
            </div>
            <div class="column" style="margin: auto;width:200px" id="phone">
                <h5 class="card-title">Phone No.</h5>
                <h6 class="text-muted" id="phone">lorem ipsum</h6>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="column" style="margin: auto;width:200px" id="dob">
                <h5 class="card-title">DOB</h5>
                <h6 class="text-muted" id="email">lorem ipsum</h6>
            </div>
            <div class="column" style="margin: auto;width:200px" id="gender">
                <h5 class="card-title">Gender</h5>
                <h6 class="text-muted" id="email">lorem ipsum</h6>
            </div>
            <div class="column" style="margin: auto;width:200px" id="address">
                <h5 class="card-title">Address</h5>
                <h6 class="text-muted" id="phone">lorem ipsum</h6>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="card" style="width: 35%;margin-left: auto;margin-top:10px;padding: 10px">
        <h3 class="strong" style="margin: auto">Membership</h3>
        <div class="card-body">
            <div class="row">
                <div class="column" style="margin: auto">
                    <h5>Start Date</h5>
                    <p class="text-muted">01/11/19</p>
                </div>
                <div class="column" style="margin: auto">
                    <h5>End Date</h5>
                    <p class="text-muted">01/12/19</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card" style="width: 35%;margin-left: auto;margin-right: auto;margin-top:10px;padding: 10px">
        <h3 class="strong" style="margin: auto">Batch</h3>
        <div class="card-body">
            <div class="row">
                <div class="column" style="margin: auto">
                    <h5>Time</h5>
                    <h5 class="text-muted">0600 Hrs</h5>
                </div>
                <div class="column" style="margin: auto">
                    <h5>Trainer</h5>
                    <h5 class="text-muted">lorem ipsum</h5>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
