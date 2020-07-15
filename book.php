<?php 
require_once "db.php";

$book_id = $_GET["id"];
try {
    //retrieving book info   
    $sql = "SELECT * FROM books WHERE book_id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $book_id, PDO::PARAM_STR);
    $stmt->execute();
    $book = $stmt->fetch(PDO::FETCH_ASSOC);
    //retrieving quotes
    $sql = "SELECT * FROM quotes WHERE book_id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $book_id, PDO::PARAM_STR);
    $stmt->execute();
    $quotes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Seussology</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header class="text-center">
            <img class="logo w-50 mt-5 " src="images/seussology-logo.svg" alt="logo">
            <nav class="mt-4">
                <ul class="nav justify-content-around">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <h2>Home</h2>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="newbook.php">
                            <h2>New Book</h2>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="">
            </header>
            <h1 class="heading text-center display-2 mx-auto mt-5"><?php echo $book['book_title']; ?></h1>
                           
            <section class="book-details">
                <div class="edit-button float-right">
                    <a class="alert btn-warning font-weight-bold px-3 py-1" href="editbook.php?id=<?php echo $book_id?>">Edit</a>
                </div> 
                <?php if($book['book_image'] != null ) : ?>
                <img class="book-image" src="book-covers/<?php echo $book['book_image']?>"
                    alt="<?php echo $book["book_title"]?>">
                <?php else : ?>
                <div class="book-image-placeholder">
                    <?php echo $book["book_title"]; ?>
                </div>
                <?php endif; ?>
                <div class="book-details-content">

                    <h2 class="book-details-title">About the Book</h2>
                    <p><?php echo $book['book_description']; ?></p>
                    <div class="book-details-stats">
                        <span>Published: <?php echo $book['book_year']; ?></span>
                        <span>Pages: <?php echo $book['book_pages']; ?></span>
                    </div>
                    <h3 class="book-details-title mb-2">Book Quotes</h3>
                    <div class="book-details-quotes">
                        <?php if($quotes): ?>
                            <?php foreach ($quotes as $quote) : ?>
                                <blockquote class=""><?php echo $quote['quote'] ?></blockquote>
                            <?php endforeach; ?>
                            <?php else: ?>
                                <p>No quotes available!</p>
                        <?php endif;?>
                    </div>
                </div>
            </section>

</body>

</html>