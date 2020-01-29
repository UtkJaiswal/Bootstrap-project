<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cart page</title>
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
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php"> 
                                <span class="glyphicon glyphicon-shopping-cart">
                                     </span> Cart</a></li>
                        <li><a href="Settings.php">
                                <span class="glyphicon glyphicon-user
                                      "></span> Settings</a></li>
                        <li><a href="logout.php">
                                <span class="glyphicon glyphicon-log-out
                                      "></span> Logout</a></li></ul>
                            
                                      
                </div>
            </div>
        </nav>
        <div class="container">
            <table class="table table-bordered">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td>Price Rs.0/-</td>
                </tr>
                
            </table>
            <div class="btn btn-success">
                    <a href="successpage.html">Confirm Order</a>
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
