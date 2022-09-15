<?php

define('DB_HOST','smkn12malang.sch.id');
define('DB_USER','smkn12m1_lulus');
define('DB_PASS','bismillah1');
define('DB_NAME','smkn12m1_lulus2021');

$db_conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(mysqli_connect_errno()){
	echo 'Gagal terhubung ke database: '.mysqli_connect_error();
	exit();
}
?>