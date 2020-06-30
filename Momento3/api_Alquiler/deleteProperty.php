<?php


$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'DELETE') {

    require_once 'conexion.php';
    $request = file_get_contents('php://input');
    $data = json_decode($request);
    $res=array();
  
    if (isset($data->propertyId) || isset($data->userId) ) 
    {
        $propertyId = $data->propertyId; 
        $userId = $data->userId;  
   
        // validacion de campos vacios
        if ($propertyId == ""  || $userId== "" ) 
        {
            echo json_encode(array( 'res' => array('success' => false,  'data' => $res,  'error' => array('title: Format Invalid, message: the fields cannot be empty'))));
        } 
        else
        { 
            $sql = "SELECT * FROM properties WHERE propertyId = '$propertyId' and userId='$userId' ";
            $result = mysqli_query($conexion, $sql);
            if ($result->num_rows <= 0) 
            {
                
                echo json_encode(array( 'res' => array("success" => false,  "data" => $res,  "error" => array('title: Consulting property, message: property Not Exists '))));
            }
            else
            {
                try
                {
                    $sql = "DELETE FROM properties WHERE propertyId = '{$propertyId}' and userId='{$userId}' ";                              
                    $result = mysqli_query($conexion, $sql);
                    if($result)
                    {
                        echo json_encode(array( 'res' => array("success" => true,  "data" => $res,  "error" => array('title: , message: '))));
                    }                     
                } 
                catch (Exception $ex)
                {
                    echo json_encode(array( 'res' => array("success" => false,  "data" => $res,  "error" => array('title: removing property , message: error removing  property '))));
                }    
            }
                         
        }
    } 
    else 
    {
        echo json_encode(  array( 'res' => array("success" => false,  "data" => $res,  "error" => array('title: api fields, message: some fields do not exist '))));
       
    }
}

?>