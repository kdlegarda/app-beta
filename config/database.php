<?php
//Local database configuration
$LOCAL_HOST      ='localhost';
$LOCAL_DBNAME    ='app_beta';
$LOCAL_USERNAME  ='postgres';
$LOCAL_PASSWORD  ='unicesmag';
$LOCAL_PORT      ='5432';

//supabase database configuration
$SUPA_HOST       ='aws-1-us-east-2.pooler.supabase.com';
$SUPA_DBNAME     ='postgres';
$SUPA_USERNAME   ='postgres.ptmxcwvpobbxwycxnten';
$SUPA_PASSWORD   ='unicesmag@@';
$SUPA_PORT       ='6543';

$local_data_connection ="
 host=$LOCAL_HOST
 dbname=$LOCAL_DBNAME
 user=$LOCAL_USERNAME
 password=$LOCAL_PASSWORD
 port=$LOCAL_PORT
 ";

 $supa_data_connection ="
 host=$SUPA_HOST
 dbname=$SUPA_DBNAME
 user=$SUPA_USERNAME
 password=$SUPA_PASSWORD
 port=$SUPA_PORT
 ";

 //Local_conection
 $local_conn = pg_connect($local_data_connection);
 
 if(!$local_conn){
  echo"Error:unable to connect to database";
  exit();
 }else{
  echo "Local sucess connection !!!";
 }

 //supa_conection
 $supa_conn = pg_connect($supa_data_connection);
 
 if(!$supa_conn){
  echo"Error:unable to connect to Supabase database";
  exit();
 }else{
  echo "<br>Supabase sucess connection !!!";
 }
?>