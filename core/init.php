<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

require 'database/connect.php';
require 'functions/users.php';
require 'functions/general.php';

error_reporting(0);

if(logged_in() === true){
    $session_user_id = $_SESSION['user_id'];
    $user_data = user_data($session_user_id,'user_id','username','email');

    
} 

$errors = array();
?>