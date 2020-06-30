<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {

    require_once 'conexion.php';
    $request = file_get_contents('php://input');
    $data = json_decode($request);
    $res=array();

    if (isset($data->username) || isset($data->identification)) 
    {
        $UserName = $data->username;
        $identification = $data->identification;

        if ($UserName == "" || $identification == "") 
        {
                
            echo json_encode(  array( 'res' => array("success" => true,  "data" => $res,  "error" => array('title: api fields, message: there are empty fieldsg '))));
            
        } 
        else
        {
            $data= array();
            try
            {
                $sql = "SELECT * FROM Users WHERE username = '$UserName' AND identification='$identification' ";
                $result = mysqli_query($conexion, $sql);
                if ($result->num_rows > 0) 
                {
                    echo json_encode(  array( 'res' => array("success" => false,  "data" => $res,  "error" => array('title: user query, message: User already exists'))));
          
                } 
                else 
                {
                    echo json_encode(  array( 'res' => array("success" => true,  "data" => $res,  "error" => array('title: , message: '))));
                    
                }
            } 
            catch (Exception $ex)
            {
               
                echo json_encode(  array( 'res' => array('success' => false,  'data' => $res,  'error' => array('title: database error   , message: Error Consulting'))));
            }   
        }
    } 
    else 
    {
        echo json_encode(  array( 'res' => array('success' => false,  'data' => $res,  'error' => array('title: api fields , message: there are fields that do not exist'))));

          
    }
}

?>