<?php

    session_start();

    if(array_key_exists("login", $_POST)){
        header("Location: login.php");
    }

    if(array_key_exists("signup", $_POST)){
        header("Location: signup.php");
    }

?> 

<html>

	<head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script type="text/Javascript" src="jquery-3.6.0.min.js"></script>
        <script src="jquery-ui/jquery-ui.js"></script>
        <link href="jquery-ui/jquery-ui.css" rel="stylesheet">

        <script src="https://kit.fontawesome.com/91e14863c4.js" crossorigin="anonymous"></script>


        <style type="text/css">

            .navbar-custom{
                background-color: #34495E;
            }

            #searchBar{
                width: 300px;
                margin-right: 10px;
            }

            #signInButtons{
                position: relative;
                top: 8px;
            }

            #signup{
                margin-left: 10px;
            }
            
        </style>

    </head>


	<body>

        <nav class="navbar navbar-custom navbar-expand-lg  navbar-dark py-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">App Name/Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Newsfeed</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Discover</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Groups</a>
                        </li>
                    </ul>

                    <div class="input-group rounded" id="searchBar">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                          <i class="fas fa-search"></i>
                        </span>
                    </div>

                    <form method="post" class="d-flex" id="signInButtons">

                        <button class="btn btn-outline-light" type="submit" name="login">Log In</button>
                        <button class="btn btn-outline-light" id="signup" type="submit" name="signup">Sign Up</button>
                            
                    </form>

                </div>
            </div>
        </nav>
        
        
        
        <script type="text/Javascript">

            /*
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <input type="image" src="http://example.com/path/to/image.png"/>

                <input class="btn btn-outline-light" type="submit" name="login" value="Log In"/>
                        <input class="btn btn-outline-light" id="signup" type="submit" name="signup" value="Sign Up"/>

                <input type="hidden" name="signInButtons" value="1">
    
                <button class="btn btn-outline-light" type="button" name="login">Log In</button>
                        <button class="btn btn-outline-light" id="signup" type="submit" name="signup">Sign Up</button>
            */

            $theme-colors: (
                "custom-color": #34495E;
            );
            

        </script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    </body> 

</html>