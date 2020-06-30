<?php


$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {

    require_once 'conexion.php';
    $request = file_get_contents('php://input');
    $data = json_decode($request);
    $res=array();
  
    if (isset($data->userId) ) 
    {
        $userId = $data->userId;  
   
        // validacion de campos vacios
        if ($userId=="" ) 
        {
            echo json_encode(array( 'res' => array('success' => false,  'data' => $res,  'error' => array('title: Format Invalid, message: the fields cannot be empty'))));
        } 
        else
        { 
            $sql = "SELECT * FROM properties WHERE  userId='$userId' ";
            $result = mysqli_query($conexion, $sql);
            if ($result->num_rows <= 0) 
            {
                echo json_encode(array( 'res' => array("success" => false,  "data" => $res,  "error" => array('title: Consulting property, message: property Not Exists '))));
            }
            else
            {
                try
                {
                    $sql = "SELECT * FROM properties WHERE userId='{$userId}' ";                              
                    $result = mysqli_query($conexion, $sql);
                    if ($result->num_rows > 0) 
                    {
                        while($row = $result -> fetch_assoc())
                        {
                           $res[]=$row;
                        }
                        echo json_encode(array( 'res' => array("success" => true,  "data" => $res,  "error" => array('title: , message: '))));
                    }                     
                } 
                catch (Exception $ex)
                {
                    echo json_encode(array( 'res' => array("success" => false,  "data" => $res,  "error" => array('title: consulting property , message: error consulting  property '))));
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