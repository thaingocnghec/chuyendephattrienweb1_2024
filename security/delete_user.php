<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

if (!empty($_GET['id'])){
    $id = decrypt($_GET['id']);
    $userModel->deleteUserById($id);//Delete existing user
}

function decrypt($encrypted_string){
    $encryption_key = "W3docs";
    $iv_length = openssl_cipher_iv_length("AES-128-CBC");
    $options = 0;
    $encryption_iv = '1234567891011121';
    $decryption = openssl_decrypt(base64_decode($encrypted_string), "AES-128-CBC", $encryption_key, $options, $encryption_iv);
    return $decryption;
}

header('location: list_users.php');
?>