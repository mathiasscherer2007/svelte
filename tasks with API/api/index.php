<?php
header("Access-Control-Allow-Origin: http://localhost:5173"); // your Svelte dev server origin
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

if(isset($_SERVER["REQUEST_METHOD"])){

    $method = $_SERVER["REQUEST_METHOD"];

    if ($method === "POST"){
        require "create_task.php";
    } else if ($method === "GET"){
        require "get_task.php";
    } else if ($method === "PATCH"){
        require "update_task.php";
    }  else if ($method === "DELETE"){
        require "delete_task.php";
    } else {
        http_response_code(400);
    }

}

?>
