<?php 

include 'connection.php';

$responce = array();

$userid  = $_POST['user_id'];
$typeid  = $_POST['type_id'];
$useareaid = $_POST['area_id'];
// $propertyfile = $_POST['property_file'];
$aboutproperty = $_POST['aboutproperty'];
$buildyear = $_POST['buildyear'];
$rentamount = $_POST['rentamount'];
// $mainphotos = $_POST['mainphotos'];
$videourl = $_POST['video_url'];
$termconditions	 = $_POST['termconditions'];
$specifications	 = $_POST['specifications'];
$latitude = $_POST['latitude'];
$longtitude = $_POST['longtitude'];
$addrees = $_POST['addrees'];
$pincode = $_POST['pincode'];
$propertystatus = $_POST['propertystatus'];
$status	 = $_POST['status'];
$sqft = $_POST['sqft'];
$overlooking = $_POST['overlooking'];
$facing = $_POST['facing'];


if (isset($_FILES["property_file"])) {
    $file = $_FILES["property_file"];
    $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
    $imagename = time() . rand(1111, 9999) . "." . $ext;
    $upload_path1 = "uploads/property/" . $imagename;


    $uploadSuccess1 = move_uploaded_file($file["tmp_name"], $upload_path1);

    $file1 = $_FILES["mainphotos"];
    $ext1 = pathinfo($file1["name"], PATHINFO_EXTENSION);
    $imagename1 = time() . rand(1111, 9999) . "." . $ext1;
    $upload_path2 = "uploads/property/" . $imagename1;


    $uploadSuccess2 = move_uploaded_file($file1["tmp_name"], $upload_path2);

    if ($uploadSuccess1 && $uploadSuccess2) {
        $result = mysqli_query($conn,"insert into tbl_property(user_id,type_id,area_id,property_file,about_property,buildyear,rent_amount,mainphotos,video_url,term_conditions,specifications,latitude,longtitude,addrees,pincode,property_status,status,sqft,overlooking,facing)values(
            '$userid','$typeid','$useareaid','$imagename','$aboutproperty','$buildyear','$rentamount','$imagename1',
            '$videourl','$termconditions','$specifications','$latitude','$longtitude','$addrees','$pincode',
            '$propertystatus','$status','$sqft','$overlooking','$facing')") or die(mysqli_error($conn));

        if ($result) {
            echo "yes";
        } else {
            echo "no";
        }
    } else {
        echo "File upload error: " . $_FILES["property_file"]["error"];
        echo "File upload error: " . $_FILES1["mainphotos"]["error"];
    }
} else {
    echo "no_file_uploaded";
}



// $result = mysqli_query($conn,"insert into type_users(user_id,type_id ,area_id ,property_file,about_property,buildyear,rent_amount,mainphotos,video_url,term&conditions,specifications,latitude,longtitude,addrees,pincode,property_status,status,sqft,overlooking,facing)values(
// '$userid','$typeid','$useareaid','$propertyfile','$aboutproperty''$buildyear','$rentamount','$mainphotos',
// '$videourl','$termconditions','$specifications','$latitude','$longtitude','$addrees','$pincode',
// '$propertystatus','$status','$sqft','$overlooking','$facing')") or die(mysqli_error($conn));

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