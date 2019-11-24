<?php
    require_once '../inc/db.php';
?>

<html>
    <head>
        <title>Membership</title>
        <?php
            require_once 'links.php';
        ?>
    </head>
    <body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Ufit</a>
    </nav>
    <br>
    <div class="container">
        <h5 >Cost per Session = Rs 100 / Day</h5>
        <br>
        <table class="table" style="text-align: center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Membership Duration (Days)</th>
                <th scope="col">Discount</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>91 - 180</td>
                <td>10%</td>
            </tr>
            <tr>
                <td>181 - 365</td>
                <td>20%</td>
            </tr>
            <tr>
                <td>> 365</td>
                <td>30%</td>
            </tr>
            </tbody>
        </table>
    </div>

    <br>
    <div class="card" style="width: 50%; border-radius: 25px; margin-left: auto; margin-right: auto">
        <br>
        <h5 style="margin: auto">Membership</h5>
        <div class="card-body">
            <form action="register.php" method="post">
                <div class="row mx-auto" style="padding: 10px">
                    <div class="col md-6" style="padding: 10px;margin-right: 20px">
                        <p><label for="start_date" class="col col-form-label">Start Date</label></p>
                        <input type="date" class="form-control" name="start_date" id="start_date" style="width: auto"
                               required>
                    </div>
                    <div class="col md-6" style="padding: 10px;margin-left: 20px">
                        <p><label for="end_date" class="col col-form-label">End Date</label></p>
                        <input type="date" class="form-control" name="end_date" id="end_date" style="width: auto" required>
                    </div>
                    <div class="col md-6" style="padding: 10px;margin-left: 20px">
                        <br>
                        <button class="btn btn-outline-dark" type="button" id="calc-fees" onclick="calculateFees()">Calculate Fees</button>
                    </div>
                </div>
                <hr>
                <?php

                ?>
                <h5> Fees : <span id="fees"></span> </h5>
                <hr>
                <input type="hidden" name="fees" value="" />
                <button class="btn btn-outline-dark" type="submit">Confirm</button>
        </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <script>
        const calculateFees = () => {
            let startDate = $('#start_date').val().trim();
            let endDate = $('#end_date').val().trim();
            if(startDate === '' || endDate === '' ) {
                alert('Enter valid dates.');
                return;
            }
            let jsStartDate = new Date(startDate);
            let jsEndDate = new Date(endDate);
            if (jsStartDate > jsEndDate) {
                alert('Enter valid dates.');
                return;
            }
            let diff = Math.abs(jsEndDate - jsStartDate);
            diff = Math.ceil(diff / (1000 * 60 * 60 * 24));
            console.log(diff);
            let discount = 0;
            if (diff >= 91 && diff < 181) {
                discount = 10;
            } else if (diff >= 181 && diff <= 365) {
                discount = 20;
            } else if (diff > 365) {
                discount = 30;
            } else {
                discount = 0;
            }
            let fees = (100 * diff) - ((discount / 100) * (100 * diff));
            $('#fees').text(fees);
            $('input[name=fees]').val(fees);
        };
    </script>
    </body>
</html>

