<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <?php
include 'core/init.php';
?>
    <head>
        <title>The Homestead</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel ="stylesheet" type="text/css" href="css/custom.css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </head>
    <body class="body"> 
        <header class="mainHeader">
            <div class='logo'>
                <div class="social">
                    <p class="follow"><b>Follow Us</b></p>
                    <a href="https://twitter.com/@homesteadpsc"><img src='images/icons/twitter.png'/></a>
                    <a href="https://www.facebook.com/TheHomesteadProjectStreetChildren?fref=ts"><img src='images/icons/facebook_2.png'/></a>
                    <br/><br/>
                    <p id="login"><a href="Login.php">Login</a> |
                        <a href="Register.php">Register</a> </p>  
                    <div class="clear"></div>
                </div>
                <img src="images/logo3.png" class="logo-1"/>
            </div>
            <div class= "navbar navbar-default">
                <div class= "container">
                    <div class ="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class ="icon-bar"></span>
                            <span class ="icon-bar"></span>
                            <span class ="icon-bar"></span>
                            <span class ="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav  navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                    About <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a href="Legal.html">Legal, NPO, PBO Status</a></li>
                                   <li><a href="http://issuu.com/paulvernonhooper/docs/the_homestead__projects_for_street_/1" target="_blank">Audited Financials  2014  </a></li>
                                    <li><a href="http://issuu.com/paulvernonhooper/docs/homestead_2014_final_low_res/1" target="_blank">Annual Report 2014</a></li>
                                    <li><a href="Business.html">Business Canvas</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">

                                    Gallery <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a href="Photo.html">Photos</a></li>
                                    <li><a href="Video.html">Videos</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">

                                    Donate <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a href="MySchool.html">My School</a></li>
                                    <li><a href="YouDonate.html">You Donate</a></li>
                                </ul>
                            </li>
                            <li><a href="Volunteering.html">Volunteering</a></li>

                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">

                                    Our Projects <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a href="intake.html">Intake Shelter</a></li>
                                    <li><a href="children.html">Children Home</a></li>
                                    <li><a href="outreach.html">Outreach Work</a></li>
                                    <li><a href="prevention.html">Prevention and Early Intervention</a></li>

                                </ul>
                            </li>

                            <li class="active"><a href="Contact.php">Contact</a></li>
                        </ul> 

                    </div>

                </div>
                <div class='c'></div>
            </div>

        </header>
        <div class='c'></div>
        <div class="reg-wrapper">
            <br>
            <div class='reg'>
                <div class="clear"></div>                 
                <h1>Contact Us</h1>
                <br/>
                <div class="row">
                    <div class="col-md-6">
                        <form class="form-group">
                            <label class="formLabel">Your Name</label><br/>
                            <input type="text" class="form-control"><br/><br/>
                            
                            <label class="formLabel">Subject</label><br/>
                            <input type="text" class="form-control"><br/><br/>
                            
                            <label class="formLabel">Message</label><br/>
                            <textarea rows="2" cols="20" class="form-control"></textarea><br/><br/>
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </form>  
                        <?php
$to      = 'jonas.gift83@gmail.com';
$subject = 'the subject';
$message = 'hello';

mail($to, $subject, $message);
?>
                </div>
                <br>
            </div>
        </div>
        <footer class="mainFooter">
            <br/>
            <p>Copyright by <a href="#">The Homestead Projects For Street Children</a> &COPY;2015.All rights reserved.
                <a href="http://www.givengain.com/cause/2949/"><img src='images/gg_secure_main_153_64.png'/></a></p>
            <br/>
        </footer>

        </div>
    </body>
</html>
