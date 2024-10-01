<?php 

    
    function randomPassword($length) {
        $characters = 'abcdefghiklmnopqrstuvxyzABCDEFGHIKLMNOPQRSTUVXYZ1234567890!"$%^&*';
        $charactersLength = strlen($characters);
    
        $password = '';
    
        for ($i = 0; $i < $length; $i++) { 
            $password .= $characters[rand(0, $charactersLength - 1)];
        }
    
        return $password;
    }
?>