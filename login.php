<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle"
                            data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right"><li><a href="login.php"> 
                                <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="Signup.php">
                                <span class="glyphicon glyphicon-user
                                      "></span> Sign Up</a></li></ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: grey;">
                            <h1>Login Page</h1>
                            
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <div class="container">
                            <div class="row">
                            <div class="col-xs-5">
                                <form action="login2.php" method="POST">
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <button class="btn btn-secondary">
                                Login</button>
                                </form>
                        </div>
                            </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            Don't have an account? 
                            <a href="Signup.php">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <center>
                Copyright &copy; Lifestyle Store. All Rights
                Reserved|Contact Us +91 90000 00000
                </center>
            </div>
        </footer>
    </body>
</html>
