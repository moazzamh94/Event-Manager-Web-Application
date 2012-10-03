<?php 
 // Connects to Our Database 
 session_start();
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("project") or die(mysql_error()); 
 ?> 