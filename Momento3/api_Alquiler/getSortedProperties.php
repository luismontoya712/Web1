<?php


$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {

    require_once 'conexion.php';
    $request = file_get_contents('php://input');
    $data = json_decode($request);
    $res=array();
  
    try
    {
        $sql = "SELECT * FROM properties  ORDER BY price asc";                              
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

?>