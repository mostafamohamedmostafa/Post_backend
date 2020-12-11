<?php

$id=$_GET['id'];

//connection to data base
$connect = mysqli_connect("localhost", "root", "", "blog");

//query

$q = "delete  from `post` where id=$id";

$my_q = mysqli_query($connect, $q);

$affected_row = mysqli_affected_rows($connect);

if($affected_row){

    header("LOCATION:view.php");

}else{
echo"error in delete";
}
