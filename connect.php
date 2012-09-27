<?php 
session_start();
 // Connects to Our Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("project") or die(mysql_error()); 
 ?> 