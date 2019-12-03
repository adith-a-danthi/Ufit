<?php
require_once "../inc/login_helper.php";
init_session();
if (is_logged_in() === true) {
    header("Location:home.php");
}
?>
<html>
<head>
    <title>Ufit</title>
    <?php
        require_once 'links.php';
    ?>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#" >Ufit</a>
    <div>
        <a class="btn btn-outline-light" href="register.php" role="button">Register</a>
        <a class="btn btn-outline-light" href="login.php" role="button">Login</a>
    </div>
</nav>
<main class="container">

   <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="images/gym1.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item" data-interval="10000">
                <img src="images/gym2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="10000">
                <img src="images/gym3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>-->
    <br>
    <div class="jumbotron">
        <h1 class="display-4">Ufit</h1>
        <p class="lead">The one stop for your fitness.</p>
        <hr class="my-4">
        <img src="images/gym1.jpg" class="d-block w-100" alt="">
        <hr class="my-4">
        <h4>Fees Structure</h4>
        <p>Cost per Session = Rs 100 / Day</p>
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
        <hr>
    </div>
</main>
<footer class="footer" style="margin-bottom: 0px">
    <div class="container">
        <hr>
        <span class="text-muted">Contact Us</span>
        <br>
        <span class="text-muted">+91 9874563210</span>
        <hr>
    </div>
</footer>
</body>
</html>





