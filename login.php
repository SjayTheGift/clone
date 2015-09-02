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

                            <li><a href="Contact.php">Contact</a></li>
                        </ul> 

                    </div>

                </div>
                <div class='c'></div>
            </div>

        </header>
        <div class='c'></div>
        <div class="home-wrapper">



            <div class='reg'>
                <div class="clear"></div>                 
                <h1>Login</h1>
                <br/>
                <div class="row">
                    <div class="col-md-6">
                        <form action="login.php" method="post" class="form-group">
                            <label class="formLabel">Username</label><br/>
                            <input type="text" name="username" class="form-control"><br/>

                            <label class="formLabel">Password</label><br/>
                            <input type="password" name="password" class="form-control"><br/>

                            <input type="submit" value="Login" class="btn btn-primary"><br/>


                        </form>
                        <?php
                        if (empty($_POST) == false) {
                            $username = $_POST['username'];
                            $password = $_POST['password'];

                            if (empty($username) === true || empty($password) === true) {
                                $errors[] = 'You need to enter password and username';
                            } else if (user_exists($username) === false) {
                                $errors[] = 'We can\'t find that username have you registered';
                            } else if (user_active($username) === false) {
                                $errors[] = 'You haven\'t activated your account';
                            } else {
                                if(strlen($password) > 32){
                                   $errors[] = 'Password too long'; 
                                }
                                $login = login($username, $password);
                                if ($login === false) {
                                    $errors[] = 'That username/password combination is incorrect';
                                } else {
                                    $_SESSION['user_id'] = $login;
                                }
                            }
                           echo output_errors($errors);
                        }
                        
                        if (logged_in() === true) {
                            include 'includes/widgets/loggedin.php';
                        } else {
                            echo 'Not logged in';
                        }
                        ?>
                        <p><a href="Register.php">Register</a> | </p>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>

