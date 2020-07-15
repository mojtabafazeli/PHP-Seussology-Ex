<?php 
require_once "db.php";
//grabbing book info from $_POST;
$book_title = $_POST["book_title"];
$book_title_sort = $_POST["book_title_sort"];
$book_year = $_POST["book_year"];
$book_pages = $_POST["book_pages"];
$book_description = $_POST["book_description"];

try {
    $sql = "INSERT INTO books (book_title, book_title_sort, book_pages,  book_year, book_description) VALUES (:book_title, :book_title_sort, :book_pages, :book_year, :book_description)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':book_title', $book_title, PDO::PARAM_STR);
    $stmt->bindValue(':book_title_sort', $book_title_sort, PDO::PARAM_STR);
    $stmt->bindValue(':book_year', $book_year, PDO::PARAM_STR);
    $stmt->bindValue(':book_pages', $book_pages, PDO::PARAM_STR);
    $stmt->bindValue(':book_description', $book_description, PDO::PARAM_STR);
    $stmt->execute();
    $last_id = $db->lastInsertId();
    echo $last_id;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
//redirecting to edit page
header("location: book.php?id=$last_id");

?>
