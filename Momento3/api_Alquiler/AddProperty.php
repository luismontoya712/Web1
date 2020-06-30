<?php


$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {

    require_once 'conexion.php';
    $request = file_get_contents('php://input');
    $data = json_decode($request);
    $res=array();
  
    if (isset($data->title) || isset($data->type) || isset($data->addess) || isset($data->rooms) 
        || isset($data->price) || isset($data->area)  || isset($data->userid) ) 
    {
       
        $title = $data->title;
        $type = $data->type;
        $addess = $data->addess;
        $rooms = $data->rooms;
        $price = $data->price;
        $area = $data->area;
        $userid = $data->userid;

        
   
        // validacion de campos vacios
        if ($title == "" || $type == "" || $addess == "" || $rooms == "" || $price == ""  || $area == "" || $userid=="" ) 
        {
            echo json_encode(array( 'res' => array('success' => false,  'data' => $res,  'error' => array('title: Format Invalid, message: the fields cannot be empty'))));
        } 
        else
        { 
              // validacion de Campos numericos
            $validateprice = (is_numeric($price)) ? true : false;  
            $validaterooms = (is_numeric($rooms)) ? true : false; 
            $validatearea = (is_numeric($area)) ? true : false;        

            
            if ( $validateprice== false || $validaterooms== false  || $validatearea== false ) 
            {
                
                echo json_encode(array( 'res' => array("success" => false,  "data" => $res,  "error" => array('title: Format Invalid, message: room, prices or area are not numerical '))));
            }
            else
            {

                $sql = "SELECT * FROM Users WHERE userId = '$userid' ";
                $result = mysqli_query($conexion, $sql);
                if ($result->num_rows <= 0) 
                {
                    echo json_encode(array( 'res' => array("success" => false,  "data" => $res,  "error" => array('title: Consulting user, message: User Not Exists '))));
                }
                else
                {
                    try
                    {
                        $sql = "INSERT INTO properties(Title,Type,Addess,Rooms,Price,Area,Userid)
                                 VALUES ('{$title}','{$type}','{$addess}','{$rooms}','{$price}','{$area}','{$userid}') ";
                        $result = mysqli_query($conexion, $sql);
                        if($result)
                        {                             
                             echo json_encode(array( 'res' => array("success" => true,  "data" => $res,  "error" => array('title: , message: '))));
                        }                     
                    } 
                    catch (Exception $ex)
                    {
                        
                        echo json_encode(array( 'res' => array("success" => false,  "data" => $res,  "error" => array('title: property registration, message: error registering property '))));
                    }    
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