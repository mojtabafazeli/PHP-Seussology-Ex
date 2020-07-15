<?php
require "search.php";
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
        <div class="text-center">
            <form clas="form flex-grow" method="post" action="index.php">
                <h2 class="heading text-center display-2 mx-auto mt-5">Books</h2>
                <div class="form-group flex-grow">
                    <input name="title" id="title" class="search rounded-pill border-danger mb-3 px-3 py-2" type="search" placeholder="search books titles..." value="">
                    <button class="btn btn-warning ml-3 font-weight-bold search-button" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="list">
            <div class="books">
                <?php foreach($books as $book): ?>
                <a href="book.php?id=<?php echo $book['book_id']; ?>" 
                class="book">
                <?php if($book['book_image'] != null ) : ?>
                    <img class="book-image" src="book-covers/<?php echo $book['book_image']?>" alt="<?php echo $book["book_title"]?>">
                <?php else : ?>
                    <div class="book-image-placeholder">
                       <?php echo $book["book_title"]; ?> 
                    </div>
                <?php endif; ?>
                </a>
                <?php endforeach; ?>
                
            </div>
        </div>
    </div>
</body>

</htmL>