<?php
//Local database configuration
$LOCAL_HOST      ='localhost';
$LOCAL_DBNAME    ='app_beta';
$LOCAL_USERNAME  ='postgres';
$LOCAL_PASSWORD  ='unicesmag';
$LOCAL_PORT      ='5432';

//supabase database configuration
$SUPA_HOST       ='';
$SUPA_DBNAME     ='app_beta';
$SUPA_USERNAME   ='';
$SUPA_PASSWORD   ='';
$SUPA_PORT       ='';

$data_connection ="
 host=$LOCAL_HOST
 dbname=$LOCAL_DBNAME
 user=$LOCAL_USERNAME
 password=$LOCAL_PASSWORD
 port=$LOCAL_PORT
 ";

 $conn = pg_connect($data_connection);
 
 if(!$conn){
  echo"Error:unable to connect to database";
  exit();
 }else{
  echo "sucess connection !!!";
 }
?>