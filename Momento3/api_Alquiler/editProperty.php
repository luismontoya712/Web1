<?php


$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'PUT') {

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
        $userid1 = $data->userid;
        $propertyId = $data->propertyId;
   
        // validacion de campos vacios
        if ($title == "" || $type == "" || $addess == "" || $rooms == "" || $price == ""  || $area == "" || $userid1== "" || $propertyId== "") 
        {
            echo json_encode(array('response' => 'the fields cannot be empty', 'state' => false));
        } 
        else
        { 
              // validacion de Campos numericos
            $validateprice = (is_numeric($price)) ? true : false;  
            $validaterooms = (is_numeric($rooms)) ? true : false;  
            $validatearea = (is_numeric($area)) ? true : false;  
            if ( $validateprice== false || $validaterooms== false  || $validatearea== false ) 
            {
                echo json_encode(array( 'res' => array('success' => false,  'data' => $res,  'error' => array('title: Format Invalid, message: the fields cannot be empty'))));
            }
            else
            {

                $sql = "SELECT * FROM properties WHERE propertyId = '$propertyId' and UserId = '$userid1' ";
                $result = mysqli_query($conexion, $sql);
                if ($result->num_rows <= 0) 
                {
                    echo json_encode(array( 'res' => array("success" => false,  "data" => $res,  "error" => array('title: Consulting property, message: property Not Exists '))));
                }
                else
                {
                    try
                    {
                        $sql="  UPDATE properties SET  title= '".$title."',
                        type= '".$type."',
                        addess= '".$addess."',
                        rooms= '".$rooms."',
                        price= '".$price."',
                        area= '".$area."',
                        userid= '".$userid1."'                       		 
                        WHERE propertyId= '".$propertyId."' and UserId='".$userid1."' ";
                        $result = mysqli_query($conexion, $sql);
                        if($result)
                        {
                            echo json_encode(array( 'res' => array("success" => true,  "data" => $res,  "error" => array('title: , message: '))));
                        }                     
                    } 
                    catch (Exception $ex)
                    {
                        echo json_encode(array( 'res' => array("success" => false,  "data" => $res,  "error" => array('title: updating property , message: error updating  property '))));
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