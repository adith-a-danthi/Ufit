<?php
require_once "../inc/login_helper.php";
init_session();
if (is_logged_in() === false) {
    header("Location:login.php");
}
require_once '../inc/db.php'

?>
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
    <div class="form-inline">
        <a class="btn btn-outline-light" href="membership.php" role="button" style="margin-right: 10px">Membership</a>
        <a class="btn btn-outline-light" href="index.php" role="button">Logout</a>
    </div>

</nav>

<?php
$mem_id = $_SESSION['user_id'];
$query_user = "SELECT * FROM MEMBERS WHERE Mem_ID = ?";
$stmt = $conn->prepare($query_user);
$stmt->bind_param('i',$mem_id);
$stmt->execute();
$result_member = $stmt->get_result();
$result_member = $result_member->fetch_assoc();

$query_membership = "SELECT * FROM MEMBERSHIP WHERE Mem_ID = ?";
$stmt_membership = $conn->prepare($query_membership);
$stmt_membership->bind_param('i',$mem_id);
$stmt_membership->execute();
$result_membership = $stmt_membership->get_result();
$result_membership = $result_membership->fetch_assoc();

$query_batch = "SELECT * FROM MEMBERS M,BATCHES B,TRAINER T WHERE M.Batch_ID = B.Batch_ID AND M.Mem_ID = ? AND B.T_ID = T.T_ID";
$stmt_batch = $conn->prepare($query_batch);
$stmt_batch->bind_param('i',$mem_id);
$stmt_batch->execute();
$result_batch = $stmt_batch->get_result();
$result_batch = $result_batch->fetch_assoc();


$html = <<<HTML
<div class="card" style="width: 85%;margin-left: auto;margin-right: auto;margin-top:10px;padding: 10px">
    <h3 style="margin: auto">Account Info</h3>
    <div class="card-body">
        <div class="row">
            <div class="column" style="margin: auto;width:200px" id="name">
                <h5 class="card-title">Name</h5>
                <h6 class="text-muted" id="name">{$result_member['Mem_Name']}</h6>
            </div>
            <div class="column" style="margin: auto;width:200px" id="email">
                <h5 class="card-title">Email</h5>
                <h6 class="text-muted" id="email">{$result_member['Mem_email']}</h6>
            </div>
            <div class="column" style="margin: auto;width:200px" id="phone">
                <h5 class="card-title">Phone No.</h5>
                <h6 class="text-muted" id="phone">{$result_member['Mem_Phone']}</h6>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="column" style="margin: auto;width:200px" id="dob">
                <h5 class="card-title">DOB</h5>
                <h6 class="text-muted" id="dob">{$result_member['Mem_DOB']}</h6>
            </div>
            <div class="column" style="margin: auto;width:200px" id="gender">
                <h5 class="card-title">Gender</h5>
                <h6 class="text-muted" id="gender">{$result_member['Mem_Gender']}</h6>
            </div>
            <div class="column" style="margin: auto;width:200px" id="address">
                <h5 class="card-title">Goal</h5>
                <h6 class="text-muted" id="goal">{$result_member['Mem_Goal']}</h6>
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
                    <p class="text-muted">{$result_membership['Start_Date']}</p>
                </div>
                <div class="column" style="margin: auto">
                    <h5>End Date</h5>
                    <p class="text-muted">{$result_membership['End_Date']}</p>
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
                    <h5 class="text-muted">{$result_batch['Batch_Time']}</h5>
                </div>
                <div class="column" style="margin: auto">
                    <h5>Trainer</h5>
                    <h5 class="text-muted">{$result_batch['T_Name']}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card" style="width: 85%;margin-left: auto;margin-right: auto;margin-top:10px;padding: 10px">
    <h3 style="margin: auto">Stats</h3>
    <div class="card-body">
        <div class="row">
            <div class="column" style="margin: auto;width:200px" id="height">
                <h5 class="card-title">Height</h5>
                <h6 class="text-muted" id="height">{$result_member['Mem_Height']} cms</h6>
            </div>
            <div class="column" style="margin: auto;width:200px" id="weight">
                <h5 class="card-title">Weight</h5>
                <h6 class="text-muted" id="email">{$result_member['Mem_Weight']} Kgs</h6>
            </div>
            <div class="column" style="margin: auto;width:200px" id="bmi">
                <h5 class="card-title">BMI</h5>
                <h6 class="text-muted" id="bmi">{$result_member['Mem_BMI']}</h6>
            </div>
        </div>
        <br>
    </div>
</div>
HTML;
echo $html;
?>
</body>
</html>
