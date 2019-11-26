<?php
require_once '../inc/db.php';
?>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
    <?php
    $fromDate = $_POST['from_date'];
    $toDate = $_POST['to_date'];
    $query = 'CALL current_members(?, ?)';
    /*echo $query . '<br/>';
    $result = $conn->query($query);
    if($result === false) {
        echo $conn->error . '<br/>';
    }*/
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss',$fromDate,$toDate);
    if ($stmt->execute() === false){
        error_log($stmt->error);
        die('Error...');
    }
    $result = $stmt->get_result();

    $tableStart = <<<TABLESTART
<table class="table" style="text-align: center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Member Name</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Fees</th>
        </tr>
        </thead>
        <tbody>
TABLESTART;
    $tableRow = '';
    while($row = $result->fetch_assoc())
 {
     $tableRow .= <<<ROW
        <tr>
            <td>{$row['Mem_Name']}</td>
            <td>{$row['Start_Date']}</td>
            <td>{$row['End_Date']}</td>
            <td>{$row['Fees']}</td>
        </tr>
ROW;
 }

 $table = <<<TABLE
$tableStart
$tableRow
        </tbody>
    </table>
TABLE;


$links = file_get_contents(__DIR__.'/../public/links.php');


    $html = <<<HTML
<html>
<head>
    <title>Ufit</title>
    $links
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#" >Ufit - Admin</a>
</nav>
<br>
<div class="container">
    $table
</div>
</body>
</html>

HTML;

echo $html;
    ?>
<?php else: ?>
    <html>
    <head>
        <title>Ufit</title>
        <?php
        require_once '../public/links.php';
        ?>
    </head>
    <body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Ufit - Admin</a>
    </nav>
    <br>
    <div class="card" style="width: 50%; border-radius: 25px; margin-left: auto; margin-right: auto">
        <br>
        <h5 style="margin: auto">Current Members</h5>
        <div class="card-body">
            <form method="post" action="admin.php">
                <div class="row mx-auto" style="padding: 10px">
                    <div class="col md-6" style="padding: auto;margin: auto;alignment:">
                        <p><label for="from_date" class="col col-form-label">From</label></p>
                        <input type="date" class="form-control" name="from_date" id="from_date" style="width: auto"
                               required>
                    </div>
                    <div class="col md-6" style="padding: auto;margin: auto">
                        <p><label for="to_date" class="col col-form-label">To</label></p>
                        <input type="date" class="form-control" name="to_date" id="to_date" style="width: auto"
                               required>
                    </div>
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    </body>
    </html>
<?php endif; ?>
