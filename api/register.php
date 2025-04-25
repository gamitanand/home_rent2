<?php 

include 'connection.php';

// $responce = array();

$username = $_POST['name'];
$useremail = $_POST['email'];
$usermobile = $_POST['mobileno'];
$userpassword = $_POST['password'];
// $userphoto = $_POST['photo'];


if (isset($_FILES["photo"])) {
    $file = $_FILES["photo"];
    $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
    $imagename = time() . rand(1111, 9999) . "." . $ext;
    $upload_path1 = "uploads/user/" . $imagename;


    $uploadSuccess1 = move_uploaded_file($file["tmp_name"], $upload_path1);

    if ($uploadSuccess1) {
        $result = mysqli_query($conn,"insert into type_users(name,email,password,mobile,photo)values('$username','$useremail','$userpassword','$usermobile','$imagename')") or die(mysqli_error($conn));


        if ($result) {
            echo "yes";
        } else {
            echo "no";
        }
    } else {
        echo "File upload error: " . $_FILES["photo"]["error"];
    }
} else {
    echo "no_file_uploaded";
}


// $result = mysqli_query($conn,"insert into type_users(name,email,password,mobile,photo)values('$username','$useremail','$userpassword','$usermobile','$userphoto')") or die(mysqli_error($conn));

// if($result)
// {
//     $responce['status'] = "true";
//     $responce['message'] = "User Added Successfully";
// }
// else
// {
//     $responce['status'] = "false";
//     $responce['message'] = "User Not Added";
// }

// echo json_encode($responce);


?>
