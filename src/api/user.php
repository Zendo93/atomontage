<?php
    require '../../vendor/autoload.php';
    $database = new Dibi\Connection([
        'driver'   => 'mysqli',
        'host'     => 'localhost',
        'port'     =>  4000,     
        'username' => 'root',
        'password' => 'admin',
        'database' => 'atomontage',
    ]);
    
    $result = $database->query('INSERT INTO [user] 
                                (`first_name`, `last_name`, `password`, `city`, `state`, `zip`) 
                                VALUES 
                                (%s, %s, %s, %s, %s, %s)',
                                htmlspecialchars($_POST["first_name"]),
                                htmlspecialchars($_POST["last_name"]),
                                htmlspecialchars($_POST["password"]),
                                htmlspecialchars($_POST["city"]),
                                htmlspecialchars($_POST["state"]),
                                htmlspecialchars($_POST["zip"])
                            );
?>