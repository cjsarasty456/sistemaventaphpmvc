<!-- pagina que se carga automaticamente -->
<h1>Hola mundo</h1>
<?php
    /*
    para la navegación amigable con el archivo .htaccess se 
    captura los valores ingresado en la url despues de la url raíz
    y se almacena en la variable url
    si viene vacio se coloca el enlace predeterminado home/index
    controller home vista index
    empty indica que si una variable no existe, pero con el simbolo !
    se esta negando la condición
    */
    $url=!empty($_GET['url']) ? $_GET['url']: 'home/index';
    /*función explode convierte el string en un arreglo utilizando
    como delimitador el / para separar los datos incluidos en ella
    el primer valor llama al controlador
    el segundo valor llama la función dentro del controlador
    apartir del tercero incluye los parametros
    */
    $arrUrl=explode("/",$url); 
    // echo $url
    //se alamcena los valores en la variable
    $controller=$arrUrl[0];
    $method=!empty($arrUrl[1]) ? $arrUrl[1]: 'index';
    $params[]="";
    // unset($params[0],$params[1]);
    //se verifica si en la cadena vienen parametros
    //se recorre el arreglo para almacenarlo
    if(!empty($arrUrl[2])){
        for($i=2; $i<count($arrUrl); $i++){
            array_push($params,$arrUrl[$i]);
        }
    }
    // print_r($arrUrl);
    echo "controlador: ".$controller." método: ".$method." parametro: ";
    print_r($params);
?>

