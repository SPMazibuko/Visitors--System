<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
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

    <section id="box">

        <form action="includes/signup.inc.php" method="post">
            <div style="font-size: 30px;margin: 10px;color: white;">Signup</div>
            <input id="text" type="text" name="name" placeholder="Full name"><br><br>
            <input id="text" type="email" name="email" placeholder="Email"><br><br>
            <input id="text" type="text" name="uid" placeholder="Username"><br><br>
            <input id="text" type="password" name="password" placeholder="Password"><br><br>
            <input id="text" type="password" name="confirm" placeholder="Confirm Password"><br><br>

            <input id="button" type="submit" name="submit"><br><br>

            <?php
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "empty_input") {
				echo "Please fill in all fields";
			}
			else if ($_GET["error"] == "invalid_uid") {
				echo "Enter username";
			}
			else if ($_GET["error"] == "invalid_email") {
				echo "Choose a Proper Email";
			}
			else if ($_GET["error"] == "passwords_do_not_match") {
				echo "Passwords Do Not Match!!";
			}
			else if ($_GET["error"] == "username_exist") {
				echo "User name already exist";
			}
			else if ($_GET["error"] == "stmt_failed") {
				echo "Something Went Wrong";
			}
			else if ($_GET["error"] == "none") {
				echo "You have Signed up";
			}
		}
	?>
            <br />
            <a href="login.php">Click to Login</a><br><br>
        </form>
    </section>
</body>

</html>