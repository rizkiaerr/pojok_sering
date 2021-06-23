<?php
	$host	= "localhost";
	$user = "u9016224_admin";
	$password = "Pusak@41113";
	$database = "u9016224_berbagiilmu";

	$link = mysqli_connect($host,$user,$password,$database);


if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
?> 