<?php

    session_start();

    $error = "";

    if(array_key_exists("logout", $_GET)){
        unset($_SESSION);
        setcookie("id", "", time() - 60 * 60);
        $_COOKIE["id"] = "";
    } else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])){
        header("Location: loggedinpage.php");
    }

    if(array_key_exists("submit", $_POST)){

        $link = mysqli_connect("sdb-o.hosting.stackcp.net", "sportSocialApp-313937963c", "j93mb0hfya", "sportSocialApp-313937963c");

        if(mysqli_connect_error()){
            die("Database connection error");
        }

        if(!$_POST['email']){
            $error .= "An email address is required<br>";
        }

        if(!$_POST['password']){
            $error .= "A password is required<br>";
        }

        if($error != ""){

            $error = "<p>There were errors in your form</p>".$error;

        } else{ // Sign up with given email and password

            $query = "SELECT id FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";

            $result = mysqli_query($link, $query);

            if(mysqli_num_rows($result) > 0){
                $error = "That email address is taken";
            }
            else{
                $query = "INSERT INTO `users` (`email`, `password`) VALUES('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
                
                if(!mysqli_query($link, $query)){
                    $error = "<p>Could not sign you up, try again later.</p>";
                }else{

                    $query = "UPDATE `users` SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1"; // ID of most recently added user in database

                    mysqli_query($link, $query);

                    $_SESSION['id'] = mysqli_insert_id($link);

                    if ($_POST['stayLoggedIn'] == 1){
                        setcookie("id", mysqli_insert_id($link), time() + 60 * 60 * 24 * 365);
                    }

                    header("Location: loggedinpage.php");
                }

            } 
            
            
        }
    }

?> 

<html>

	<head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script type="text/Javascript" src="jquery-3.6.0.min.js"></script>
        <script src="jquery-ui/jquery-ui.js"></script>
        <link href="jquery-ui/jquery-ui.css" rel="stylesheet">


        <style type="text/css">

            body{
                background-color: #34495E;
            }

            #dataContainer{
                margin-top: 175px;
                width: 600px;
                border: 5px solid grey;
                padding: 50px;
                border-radius: 4px;
                background-color: white;
            }

            #stayLoggedIn{
                vertical-align: middle;
                margin: 0 auto;
            }

            .changeButton{
                color:blue;
                background-color: Transparent;
                background-repeat:no-repeat;
                border: none;
                cursor:pointer;
                overflow: hidden;
                outline:none;
            }

            .buttonUnderline{
                text-decoration: underline;
                font-weight: bold;
            }

        </style>

    </head>


	<body>

        <div class="container text-center" id="dataContainer">
            <div id="error"><?php echo $error; ?></div>

            <h1>Sign Up</h1>

            <h5>Store your thoughts permanently and securely.</h5>

            <form method="post" id="signup" class="userData">

                <p>Interested? Sign up now.</p>

                <div class="mb-3">
                    <input type="email" name="email" placeholder="Your Email" class="form-control" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>

                <div class="mb-3">
                    <input type="hidden" name="signUp" value="1">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" name="stayLoggedIn" value=1 class="form-check-input">
                    <label class="form-check-label" for="stayLoggedIn">Stay logged in</label>
                </div>

                <div class="mb-3 form-check">
                    <button type="submit" name="submit" class="btn btn-success">Sign Up!</button>
                </div>

                <div class="mb-3 form-check">
                    <button type="submit" class="changeButton" id="loginButton">Have an account? Login now</button>
                </div>
            </form>

        </div>


        <script type="text/Javascript">


        </script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    </body> 

</html>