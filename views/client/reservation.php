<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .book-details-card {
            max-width: 600px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .book-details-card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #dee2e6;
        }

        .book-details-card .card-body {
            padding: 15px;
        }

        .book-details-card h5 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .book-details-card p {
            font-size: 1rem;
            color: #6c757d;
            margin-bottom: 0;
        }

        .reservation-form {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="book-details-card">
            <img src="path-to-your-book-image-folder/<?php ?>" class="card-img-top" alt="Book Image">
            <div class="card-body">
                <h5 class="card-title"><?php echo $book->getTitle(); ?></h5>
                <p class="card-author"><?php echo $book->getAuthor(); ?></p>
                <p class="card-genre"><?php echo $book->getGenre(); ?></p>
                <p class="card-description"><?php echo $book->getDescription(); ?></p>

                <form action="reserver" method="POST" class="reservation-form">
                    <input type="hidden" value="<?= $book->getId() ?> " name="id">
                    <?php if ($book->getAvailableCopies() < 1) { ?>
                    <button type="submit" class="btn btn-primary" disabled>Reserve Book</button>
                    <?php
                    }else{?>
                    <button type="submit" class="btn btn-primary">Reserve Book</button>
                    <?php }?>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>