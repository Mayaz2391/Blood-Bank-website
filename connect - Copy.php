<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$con= mysqli_connect("localhost","id5639573_mizanmayaz", "root123" );
if(!$con)
{
    die('could not connect: '.mysqli_error());
    
}
mysqli_select_db($con,"id5639573_bankbd" );
?>