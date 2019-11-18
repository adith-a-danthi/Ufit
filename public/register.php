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
            <h5>Create Account</h5> <br>
            <input type="text" class="form-control" id="name" placeholder="Name"> <br>
            <input type="email" class="form-control" id="email_id" placeholder="Email id"> <br>
            <input type="tel" class="form-control" id="phone" placeholder="Phone Number"> <br>
            <input type="password" class="form-control" id="password" placeholder="Password"> <br>
            <input type="r-password" class="form-control" id="r-password" placeholder="Confirm Password"> <br>

            <button class="btn btn-outline-dark">Register</button>
        </form>
    </div>
</div>
</body>