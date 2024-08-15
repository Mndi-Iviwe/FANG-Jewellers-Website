<?php
    $db_name = 'mysql:host=localhost;dbname=fangjewellerz_db';
    $db_username = 'root';
    $db_password = 'GoldMobber_26';

    $conn = new PDO($db_name,$db_username,$db_password);

    if ($conn){
        echo "connected";
    }

    function unique_id(){
        $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $char_length = strlen($char);
        $randomstring = '';
        for($i = 0; $i < 20; $i++){
            $randomstring.=$char[mt_rand(0, $char_length - 1)];
        }
        return $randomstring;
    }
?>