<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Seussology</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
        <header class="text-center">
            <img class="logo w-50 mt-5 " src="images/seussology-logo.svg" alt="logo">
            <nav class="mt-4">
                <ul class="nav justify-content-around">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><h2>Home</h2></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="newbook.php"><h2>New Book</h2></a>
                    </li>
                </ul>
            </nav>
        </header>
    <h1 class="heading text-center display-2 mx-auto mt-5">Add Book</h1>
    <section class="edit-book">
      <form class="book-form mx-auto p-3" action="new.php" method="post">
        <div class="form-row">
          <div class="col-12 mb-3">
            <label>Title</label>
            <input type="text" class="form-control" name="book_title" id="" value="" required>
          </div>
        </div>

        <div class="form-row">
          <div class="col-12 mb-3">
            <label>Sort Title</label>
            <input type="text" class="form-control" name="book_title_sort" id="" value="">
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label>Published Year</label>
            <input type="text" class="form-control" name="book_year" value="" required>
          </div>
          <div class="col-md-6 mb-3">
            <label>Number of Pages</label>
            <input type="text" class="form-control" name="book_pages" value="">
          </div>
        </div>
        <div class="form-row">
          <div class="col-12 mb-3">
            <label>Book Description</label>
            <textarea name="book_description" class="form-control" required></textarea>
          </div>
        </div>

        <button class="btn btn-primary" type="submit">Add Book</button>
      </form>
    </section>
  </main>
</body>

</html>