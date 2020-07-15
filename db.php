<?php 
try {
    $dsn = 'mysql:host=localhost;dbname=seussology';
    $db = new pdo($dsn, 'root', '');
} catch(PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>