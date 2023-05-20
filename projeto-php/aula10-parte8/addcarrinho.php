<?php
require "vendor/autoload.php";

session_start();

$id = $_GET["id"];

add_carrinho($id);

header("location:carrinho.php");