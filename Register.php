<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    include 'core/init.php';
    include 'includes/head.php';


    if (empty($_POST) === false) {
        $requied_fields = array('username', 'email', 'password', 'password_again');
        foreach ($_POST as $key => $value) {
            if (empty($value) && in_array($key, $requied_fields) === true) {
                $errors[] = 'Requierd';
                break 1;
            }
            if (empty($errors) === true) {
                if (email_exists($_POST['email']) === true) {
                    $errors [] = 'Sorry email\'' . htmlentities($_POST['email']) . '\' is alredy in use';
                }if (user_exists($_POST['username']) === true) {
                    $errors [] = 'username\'' . htmlentities($_POST['username']) . '\' is alredy taken';
                }
                if (preg_match("/\\s/", $_POST['username']) == true) {
                    $errors[] = 'Your username must not contain any spaces';
                }
                if (strlen($_POST['password'])< 5) {
                    $errors[] = 'Your password must be atleast 5 characters';
                }
                if ($_POST['password'] !== $_POST['password_again']) {
                    $errors[] = 'Your passwords do not match';
                }
            }
        }
    }
    ?>
    <body class="body"> 
        <?php include 'includes/header.php'; ?>
        <div class='c'></div>
        <div class="slider">
        </div>
        <div class="reg-wrapper">

            <div class='reg'>
                <div class="clear"></div>                 
                <h1>Registration</h1>
                <br/>
                <?php
                    if (isset($_GET['success']) && empty($_GET['success'])) {
                        echo '<h2>You have been registered successfully </h2>';
                        echo '<p>You have been registered successfully </p>';
                    }else{
                        if(empty($_POST) === false && empty($errors) === true) {

                            $register_data = array(
                                'username' => $_POST['username'],
                                'email' => $_POST['email'],
                                'password' => $_POST['password'],
                                'email_code'=> md5($_POST['username'+  microtime()])
                            );
                            register_user($register_data);
                            header('Location: Register.php?success');
                            exit();
                        } else  if (empty ($errors)=== false){
                            echo output_errors($errors);
                        }
                    
                    ?>
                <div class="row">
                    <div class="col-md-6">
                        <form  action="" method="post" class="form-group">
                            <label class="formLabel">Username</label><br/>
                            <input type="text" name="username" class="form-control"><br/>

                            <label class="formLabel">Email</label><br/>
                            <input type="email" name="email" class="form-control"><br/> 

                            <label class="formLabel">Password</label><br/>
                            <input type="password" name="password" class="form-control"><br/>

                            <label class="formLabel">Confirm Password</label><br/>
                            <input type="password" name="password_again" class="form-control"><br/>

                            <input type="submit" value="Submit" class="btn btn-primary"><br/>
                        </form>

                    </div>
                    
                </div>
                    <?php }  ?>
            </div>
           
        </div>

<?php  include 'includes/footer.php'; ?>

    </body>
</html>
