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



            #content{
                padding-top: 62px;
                background-color: #EBEDEF;
            }

            #leftContainer{
                height: 1000px;
                border-right: 1px solid #A6ACAF;
                padding: 30px 0 0 30px;
            }

            #leftContainer button{
                border: none;
                font-size: 18px;
            }

            #leftContainer i{
                float:left;
                border: 2px solid #181818;
                border-radius:3px;
                padding:4px;
                margin-right: 20px;
            }

            .userOptions{
                padding-bottom: 30px;
            }


            #rightContainer{
                height: 1000px;
            }

            .sportList{
                padding: 20px 0 0 60px;
            }
            
        </style>

    </head>


	<body>

        <nav class="navbar fixed-top navbar-custom navbar-expand-lg navbar-dark py-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">App Name/Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Messages</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Groups</a>
                        </li>
                    </ul>

                    <div class="input-group rounded" id="searchBar">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                    <form method="post" class="d-flex" id="signInButtons">

                        <button class="btn btn-outline-light" type="submit" name="login">Log In</button>
                        <button class="btn btn-outline-light" id="signup" type="submit" name="signup">Sign Up</button>
                            
                    </form>

                </div>
            </div>
        </nav>



        <div class="container-fluid" id="content">

            <div class="row">

                <div class="col-sm-3" id="leftContainer">

                    <div class="userOptions">
                        <button type="submit" name="user"><i class="fas fa-user"></i>User's Profile</button>
                    </div>

                    <div class="userOptions">
                        <button type="submit"><i class="fas fa-user"></i>Friends</button>
                    </div>

                    <div class="userOptions">
                        <button type="submit"><i class="fas fa-user"></i>Discover</button>
                    </div>

                    <div class="userOptions">
                        <button type="submit"><i class="fas fa-user"></i>Popular</button>
                    </div>

                    <div class="userOptions">
                        <button type="submit"><i class="fas fa-user"></i>Saved</button>
                    </div>

                    <div class="userOptions">
                        <button type="submit"><i class="fas fa-user"></i>Sport</button>
                        
                        <div class="form-check sportList">
                            <input class="form-check-input" type="checkbox" id="checkbox1" value="option1" checked>
                            <label class="form-check-label" for="checkbox1">Basketball</label>
                        </div>
                        
                        <div class="form-check sportList">
                            <input class="form-check-input" type="checkbox" id="checkbox2" value="option2" checked>
                            <label class="form-check-label" for="checkbox2">Soccer</label>
                        </div>

                        <div class="form-check sportList">
                            <input class="form-check-input" type="checkbox" id="checkbox3" value="option3" checked>
                            <label class="form-check-label" for="checkbox3">Hurling</label>
                        </div>

                        <div class="form-check sportList">
                            <input class="form-check-input" type="checkbox" id="checkbox4" value="option4" checked>
                            <label class="form-check-label" for="checkbox4">Hockey</label>
                        </div>

                    </div>

                </div>


                <div class="col-sm-9" id="rightContainer">

                    <div id="createPost">

                    </div>

                    
                    <div id="firstPost">



                    </div>




                </div>
            </div>
        </div>
        
        
        
        <script type="text/Javascript">

            /*

            */
            

        </script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    </body> 

</html>