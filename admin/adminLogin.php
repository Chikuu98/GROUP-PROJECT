<!DOCTYPE html>
<html lan="en" and dir="Itr">

<head>
    <meta charset="utf-8">
    <title>Admin Control Area</title>
    <link rel="stylesheet" href="./adminLogin.css?v=<?php echo time(); ?> ">

</head>

<body>
<div class="web-name">

<H1>EventPlanner.lk</H1>


</div>
    <form class="box" action = choose.php  method="POST">

        <h1>Admin Area</h1>

        <input type="text" name="" placeholder="Enter Username" id="username">
        <input type="password" name="" placeholder="Enter Password" id="password">
        <input type="submit" name="" value="Login" onclick="validate()">
</form>
<footer>

<H2>Authorized persons only</H2>
</footer>
    <script>
            function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "admin123@gmail.com" && password == "1234") {
        alert("login successfully");
        window.location.href="choose.php";

    } else {
        alert("login failed");
       window.location.href="adminLogin.php";

    }
}
        </script>


</body>

</html>