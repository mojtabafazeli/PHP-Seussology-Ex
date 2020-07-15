<?php 
require_once "db.php";

$wordToSearch = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $wordToSearch = test_input($_POST["title"]);
    $wordToSearch = "%$wordToSearch%";
} 

try {   
    $wordToSearch = "%$wordToSearch%";
    $sql = "SELECT * FROM books WHERE book_title LIKE :word OR book_description LIKE :word ORDER BY book_title";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':word', $wordToSearch, PDO::PARAM_STR);
    $stmt->execute();
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>