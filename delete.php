<?php 
require_once "db.php";

$book_id = $_GET["book_id"];
echo $book_id;

try {
    //deleting the quotes
    delete("quotes");
    //deleting the book
    delete("books");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

function delete($collection) {
    global $db, $book_id;
    $sql = "DELETE FROM $collection WHERE book_id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $book_id, PDO::PARAM_STR);
    $stmt->execute();
}

header("location: index.php");

?>
