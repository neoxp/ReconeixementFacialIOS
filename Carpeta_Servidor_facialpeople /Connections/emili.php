<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_emili = "mysql.webcindario.com";
$database_emili = "facialpeople";
$username_emili = "facialpeople";
$password_emili = "admin123";
$emili = mysql_pconnect($hostname_emili, $username_emili, $password_emili) or trigger_error(mysql_error(),E_USER_ERROR); 
?>