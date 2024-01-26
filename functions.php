<?php

function genPassword($lenght){
    $pwd_gen = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';
    $generated_pass = '';
    for ($i = 0; $i < $lenght; $i++) {
        $generated_pass .= $pwd_gen[rand(0, strlen($pwd_gen) - 1)];
    }
    return $generated_pass;
}
?>