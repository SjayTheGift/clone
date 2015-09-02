<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$connect_error = 'Sorry, we\'re having a connection problem';
mysql_connect('localhost','root','') or die($connect_error);
mysql_select_db('lr') or die($connect_error);
