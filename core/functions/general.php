<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function email($to,$subject,$body){
    mail($to, $subject, $body, 'From jonas.gift83@gmail.com');
}

function sanitize($data){
    return mysql_real_escape_string($data);
}

function output_errors($errors){
    $output = array();
    foreach ($errors as $error){
        $output [] = '<li>' .$error. '</li>';
    }
    return '<ul>' .  implode('',$output). '</ul>';
}
