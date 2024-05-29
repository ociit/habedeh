<?php
    if(isset($_POST["salken"])) {
        header("location: hallo.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200;1,300;1,400;1,600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
<div class="log">
        <div class="login-card">
            <h2>Hello There!</h2>
            <h6>Boleh kenalan nggk?</h6>
            <form method="POST" action="hallo.php">
                <label>Your Name</label><br>
                    <input type="text" name="username" required placeholder="masukin namamu dongs ><" >

                    <button type="submit" name="salken">Salam Kenal yaa</button>
            </form>
        </div>
    </div>
</body>
</html>