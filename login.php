<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>

    <style type="text/css">
    #text {

        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button {

        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }

    #box {

        background-color: grey;
        margin: auto;
        margin-top: 10%;
        width: 300px;
        padding: 20px;
    }
    </style>

    <div id="box">

        <form action="login.inc.php" method="post">
            <div style="font-size: 30px;margin: 10px;color: white;">Login</div>

            <input id="text" type="text" name="uid" placeholder="Username or Email"><br><br>
            <input id="text" type="password" name="password" placeholder="Password"><br><br>

            <input id="button" type="submit" name="submit"><br><br>

            <a href="signup.php">Click to Signup</a><br><br>
        </form>
    </div>
</body>

</html>