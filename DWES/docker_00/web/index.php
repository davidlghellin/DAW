<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=proyecto;host=db;';
$user = 'gestor';
$password = 'secreto';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'SUCCESSFULLY CONNECTED TO MYSQL </br>';
    
    $sql = 'SELECT * FROM usuarios_pass';
    $sth = $dbh->prepare($sql);
    $sth->execute();
    $arr = $sth->fetchAll();
    
    // TestDataBase -> test -> idx:1,name:Alice,age:22
    echo 'User: ' . $arr[0][1] . ' pass: ' . $arr[0][2];
    echo '</br>';

    // TestDataBase -> test -> idx:2,name:Bob,age:23
    echo 'User: ' . $arr[1][1] . ' pass: ' . $arr[1][2];

    echo '</br>';

    phpinfo();
    
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>