<?php

include 'connection.php';

$responce = array();

    
   
    $txtemail = $_POST["email"];
    $txtpws = $_POST["password"];
    


    $result = mysqli_query($conn, "select * from type_users where email='$txtemail' and password='$txtpws'and is_verify='yes'") or die(mysqli_error($conn));
    if(mysqli_num_rows($result) <= 0)
    {
        $responce['status'] = "false";
        $responce['message'] = "Inavlid Email or Password";
    }
    else
    {
        $responce['status'] = "true";
        $responce['message'] = "Login Successfully";
        while ($row = mysqli_fetch_assoc($result)) {
          $responce["data"] = $row;
        }
    }




    echo json_encode($responce);
?>