

<?php

include 'connection.php';

$responce = array();

    



$result = mysqli_query($conn, "SELECT * FROM tbl_property as p left join tbl_property_type as pt on p.type_id=pt.type_id") or die(mysqli_error($conn));

if($result)
{

    $responce['status'] = "true";
    $responce['message'] = "Data Found";
    while ($row = mysqli_fetch_assoc($result)) {
      $responce["data"][] = $row;
    }

    
}
else
{
    $responce['status'] = "false";
    $responce['message'] = "Data Not Found";
}




echo json_encode($responce);
?>