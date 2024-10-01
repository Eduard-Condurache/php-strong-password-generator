<?php 
    $random_password = '';
    $password_length = 0;

    if (isset($_GET['password_lenght'])) { 
        $password_length = intval($_GET['password_lenght']);
        echo "La password è stata inserita";
    }

    function randomPassword($length) {
        $characters = 'abcdefghiklmnopqrstuvxyzABCDEFGHIKLMNOPQRSTUVXYZ1234567890!"$%^&*';
        $charactersLength = strlen($characters);

        $password = '';

        for ($i = 0; $i < $length; $i++) { 
            $password .= $characters[rand(0, $charactersLength - 1)];
        }

        return $password;
    }

    $random_password = randomPassword($password_length);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Strong Password Generator</title>
    </head>
    <body>
        <form method="GET">
            <div>
                <label for="password">
                    Lunghezza password: 
                </label>
                <input type="number" name="password_lenght">
            </div>
            
            <div>
                <input type="submit" value="Genera random password">
            </div>
            <div>
                <p>Lunghezza password: <?php echo $password_length ?></p>
                <p>Password generata: <?php  echo $random_password ?></p>
            </div>
        </form>
    </body>
</html>