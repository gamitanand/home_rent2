<?php 

include 'connection.php';

$responce = array();

$title = $_POST['title'];
$description = $_POST['description'];
$img1 = $_POST['img1'];
$img2 = $_POST['img2'];
$articledatetime = $_POST['articledatetime'];


$result = mysqli_query($conn,"insert into articles(title,description,img1,img2,articledatetime)values('$title','$description','$img1','$img2','$articledatetime')") or die(mysqli_error($conn));

if($result)
{
    $responce['status'] = "true";
    $responce['message'] = "User Added Successfully";
}
else
{
    $responce['status'] = "false";
    $responce['message'] = "User Not Added";
}

echo json_encode($responce);


?>