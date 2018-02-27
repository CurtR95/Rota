<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
        <script src="AJAXLogin.js"></script>
        <script type="text/javascript">
        var UN = "<?php echo filter_input(INPUT_COOKIE,"user"); ?>";

        function hideOtherElement() {
            if (UN === '')
            {
            document.getElementById('Login').style.display = 'inline';
            }
            else if (UN !== '')
            {
            document.getElementById('Logout').style.display = 'inline';
            }
        }

        function hideLogin() {
            if (document.getElementById('HB').innerHTML === 'Hide Login') {
                    hide();
                    document.getElementById('HB').innerHTML = 'Show Login';
            }
            else if (document.getElementById('HB').innerHTML === 'Show Login') {
                    document.getElementById('HB').innerHTML = 'Hide Login';
                    if(UN!=='') {
                            document.getElementById('Login').style.display = 'none'; 
                            document.getElementById('Logout').style.display = 'inline';
                    }	 
                    else {
                            document.getElementById('Login').style.display = 'inline';
                            document.getElementById('Logout').style.display = 'none';
                    }
            }
        }
        </script>
    </head>
    <body onLoad="hideOtherElement()">
        <nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top">
            <div class="navbar-brand">CJRota</div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#section1">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Rota
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#section41">Link 1</a>
                        <a class="dropdown-item" href="#section42">Link 2</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section2">Lunch Rota</a>
                </li>
            </ul>
                <button type="button" class="btn btn-success" style="display:none;" data-toggle="modal" data-target="#myModal" id="Login">
                    Log In
                </button>
                <form action="Authenticate.php" method="post" id="Logout" style="display:none;">
                    <button type="submit" class="btn btn-success" name="logOut">
                        Sign Out
                    </button>
                </form>
        </nav> 
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<form action="Login.php" method="post">-->
                    <form method="post" id="login-form">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title text-white">Log In</h4>
                        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="username">Username</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" id="username" /><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="password">Password</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" id="password"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col" id="error">
                                
                            </div>
                        </div>
                    </div>
                    <div id="test" class="modal-footer">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="" name="Remember">Remember Me
                        </label>
                        <button type="submit" class="btn btn-success" name="logIn" id="logIn">Login</button>
                        <button type="submit" class="btn btn-success" name="signUp">Sign Up</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
