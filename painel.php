<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="style11.css">

    <style>
        .texto-painel{
            width: 100%;
            height: 830px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: orange;
        }

        .texto-painel h1{
            color: gray;
            font-size: 50px;
            font-family: Arial, Helvetica, sans-serif;
            animation: animate infinite 2s;
        }

    </style>
</head>
<body>

<nav class="div-menu">
                <ul class="menu">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li style="background-color: red;height:40px;display:flex;justify-content:center;align-items:center;"><a href="index.html">LOGOUT</a></li>
                </ul>
            </nav>
    <div class="texto-painel">
        
        <?php 
        session_start();
        echo '<h1>Welcome &nbsp'.$_SESSION['username'].'</h1>';
        ?>
    </div>
</body>
</html>