<?php
function encryptor($action,$string){
    $output= false;
    $encrypt_method = "AES-256-CBC";

    $secret_key="bernik#technology_sampreeti";
    $secret_iv = 'beatnik$technolgoy@sampreeti';
    $key = hash('sha256',$secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
            // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

        //do the encyption given text/string/number
    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
            //decrypt the given text/string/number
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

function currentUserId(){
    return encryptor('decrypt', request()->session()->get('userId'));
}

function currentUser(){
    return encryptor('decrypt', request()->session()->get('roleIdentity'));

}
