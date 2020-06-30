<?php



$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {

    require_once 'conexion.php';
    $request = file_get_contents('php://input');
    $data = json_decode($request);
    $res=array();
  
    function validarCataracteresname($name)
    {
        $Nopermitidos = '¡@#$%&?¿¡';
        $cont=0;

        for ($i=0; $i<strlen($name); $i++)
        {
            $caracter1=substr($name,$i,1);        
            for ($j=0; $j<strlen($Nopermitidos); $j++)
            {
                $caracter2=substr($Nopermitidos,$j,1);
                if ($caracter1==$caracter2)
                {
                    $cont=$cont + 1;
                }
            }              
        }
        return $cont;    
    }

  
    function validarCataracterespass($password)
    {
        $permitidos = '¡@#$%&?¿¡*';
        $cont=0;

        for ($i=0; $i<strlen($password); $i++)
        {
            $caracter1=substr($password,$i,1);        
            for ($j=0; $j<strlen($permitidos); $j++)
            {
                $caracter2=substr($permitidos,$j,1);
                if ($caracter1==$caracter2)
                {
                    $cont=$cont + 1;
                }
            }              
        }
        return $cont;    
    }  

     
    function validarEamil_1($email)
    {
        $permitidos = '@';
        $cont=0;

        for ($i=0; $i<strlen($email); $i++)
        {
            $caracter1=substr($email,$i,1);  
                 
            for ($j=0; $j<strlen($permitidos); $j++)
            {
                $caracter2=substr($permitidos,$j,1);

                if ($caracter1==$caracter2)
                {
                    $cont=$cont + 1;
                }
            }              
        }
        return $cont;    
    }
    
       
    if (isset($data->name) || isset($data->lastname) || isset($data->email) || isset($data->typeid) 
        || isset($data->identification) || isset($data->password) || isset($data->username)) 
    {
       
        $name = $data->name;
        $lastname = $data->lastname;
        $email = $data->email;
        $typeid = $data->typeid;
        $username = $data->username;
        $identification = $data->identification;
        $password = $data->password;

             
        // validacion de campos vacios
        if ($name == "" || $lastname == "" || $email == "" || $typeid == "" || $username == ""  || $identification == "" || $password == "") 
        {
            echo json_encode(array( 'res' => array('success' => false,  'data' => $res,  'error' => array('title: Format Invalid, message: the fields cannot be empty'))));
        } 
        else
        { 
              // validacion de longitud de campos y caracteres
            if ( strlen($name)>40 || strlen($lastname)>40 || validarCataracteresname($name)!=0 || validarCataracteresname($lastname)!=0)            
            {
              
                echo json_encode(array( 'res' => array('success' => false,  'data' => $res,  'error' => array('title: Format Invalid, message: Name or lastName with invalid length or contain these characters (¡, @, #, $, %, &, ?, ¿, ¡)'))));

            }
            else
            {
                // validacion de formato de email                   
                $term_email = substr($email, -4);   
                if ((validarEamil_1($email)==0)  || (substr($email,0,1) == "@") || (($term_email != ".com") && ($term_email !=".net"))) 
                {
                    echo json_encode(array( 'res' => array('success' => false,  'data' => $res,  'error' => array('title: Format Invalid, message: Email format Invalid'))));

                }
                else 
                {
                    // validacion de Tipo de Identidicacion
                    if($typeid=='cedula' || $typeid=='pasaporte'  )
                    {
                        echo json_encode(array( 'res' => array('success' => false,  'data' => $res,  'error' => array('title: incorrect dates, message: change ( Cedula: CC, pasaporte: Pas) '))));
                    }
                    else 
                    {
                        //Validacion de Identificacion
                        $validateidentificationcc= (is_numeric($identification)) ? true : false;                                                                 
                        if(($typeid=='pas' && strlen($identification)>10) || ($typeid=='cc' && $validateidentificationcc== false) )
                        {
                            
                            echo json_encode(array( 'res' => array('success' => false,  'data' => $res,  'error' => array('title: Format Invalid, message: Identification Format Invalid '))));

                        }
                        else
                        {
                            // validacion de clave                            
                            if( (strlen($password)<8 || strlen($password)>16) || (validarCataracterespass($password)<2) )
                            {
                                echo json_encode(array( 'res' => array('success' => false,  'data' => $res,  'error' => array('title: Format Invalid, message: Password Format Invalid '))));
                            }
                            else 
                            { 
                                
                                try
                                {
                                    $sql = "INSERT INTO users(Name,LastName,Email,TypeId,Identification,Password,UserName)
                                            VALUES ('{$name}','{$lastname}', '{$email}' , '{$typeid}' , '{$identification}', '{$password}', '{$username}' )";
                                    $result = mysqli_query($conexion, $sql);
                                    if($result)
                                    {
                                        echo json_encode(  array( 'res' => array('success' => true,  'data' => $res,  'error' => array('title: , message: '))));
                                    }                                    
                                } 
                                catch (Exception $ex)
                                {
                                    echo json_encode(  array( 'res' => array('success' => false,  'data' => $res,  'error' => array('title: user registration  , message: error registering user '))));
                                    
                                }    
                            }
                        }                        
                    
                    }

                }  
            }
                                     
        }
    } 
    else 
    {
        echo json_encode(  array( 'res' => array('success' => false,  'data' => $res,  'error' => array('title: fields  , message: some fields do not exist '))));
       
    }
}

?>