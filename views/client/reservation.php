<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #00023a;
            font-size: 16px;
            padding: 0;
            margin: 0;
            background-color: #f8f9fa;
        }

        .container-fluid {
            padding: 0px 180px;
        }

        h1 {
            font-size: 40px;
            font-weight: 800;
            line-height: 60px;
        }

        p {
            font-size: 20px;
            line-height: 40px;
        }

        /* Navbar styling */
        .navbar {
            background-color: #2a2b6a;
            padding: 15px 0;
        }

        .navbar-brand img {
            max-width: 100%;
            height: auto;
        }

        .navbar-toggler {
            border: none;
            background-color: transparent;
        }

        .navbar-toggler-icon {
            background-color: #fff;
            border-radius: 3px;
        }

        .form-inline .input-group {
            width: 100%;
        }

        .form-control {
            border-radius: 20px;
        }

        .input-group-text {
            background-color: #2a2b6a;
            border: none;
            border-radius: 20px;
        }

        .navbar-nav .nav-item {
            margin-right: 15px;
        }

        .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-nav .nav-link:hover {
            color: #fff;
            text-decoration: underline;
        }

        .navbar-nav.ms-5 {
            margin-left: auto;
        }

        .navbar-nav.ms-5 .nav-item {
            margin-right: 0;
        }

        .navbar-nav.ms-5 .nav-link img {
            max-width: 100%;
            height: auto;
        }

        /* Reservation Section */
        main {
            padding: 50px 0;
        }

        .reservation {
            text-align: center;
            margin-bottom: 30px;
        }

        .reservation h2 {
            font-size: 36px;
            color: #333;
        }

        .book_reservation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .book {
            flex: 1 0 2px;
            margin: 0 10px 20px;
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
        }

        .book img {
            margin-top: 20px;
            width: 20%;
            height: auto;
        }

        .book_info {
            padding: 20px;
        }

        .book_info h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .book_info p {
            color: #555;
            margin-bottom: 5px;
        }

        .form-container {
            flex: 1 0 300px;
            margin: 0 10px;
            background-color: #b8c4fe;
            max-width: 500px;
            padding: 30px 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            color: #007bff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .description {
            text-align: center;
        }

        .description .paragraph {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }
    </style>

</head>

<body>
    <main>
        <div class="reservation">
            <h2>RESERVATION</h2>
            <div class="book_reservation">
                <div class="book">
                    
                    <div class="book_info">
                        <h3><?= $book->getTitle();?></h3>
                        <p class="author"><?= $book->getAuthor();?></p>
                        <p class="pg"><?= $book->getAuthor();?></p>
                    </div>
                    <div class="description">
                        <p class="paragraph">
                            <?php echo $row['book_description'] ?>
                        </p>
                    </div>
                </div>
                <div class="form-container">
                    <h2 class="text-center text-white">Reservation Information</h2>
                    <form action="../../controllers/etudiant/ajouterReservation.php" method="post">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['book_id'] ?>" required>
                        <div class="form-group">
                            <label for="start_date">FROM:</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>
                        <div class="form-group">
                            <label for="end_date">TO:</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                        </div>
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Reserve Now</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="container">
            <h2>Feed-Back</h2>
            <div class="feed-back">
                <img src="/assets/img/Saly-6.png" alt="" />
                <div class="all_comments">
                    <div class="first_comment">
                        <div class="profil01 d-flex">
                            <img src="/assets/img/profil01.png" alt="profil01 img" />
                            <div class="profil_info">
                                <p>Ghizlane ANDERSON</p>
                                <p><small>2 Weeks ago</small></p>
                            </div>
                        </div>
                        <div class="comment">
                            VERY INSPIRING BOOK, I LEARNED A LOT OF THINGS FROM THIS BOOK
                            <div class="like_replay">
                                <img src="/assets/img/the-mark.png" alt="" />
                                <img src="/assets/img/repondez-1.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="second_comment">
                        <div class="profil02 d-flex">
                            <img src="/assets/img/profil02.png" alt="profil02 img" />
                            <div class="profil_info">
                                <p>Phillipe SADIQUI</p>
                                <p><small>3 Weeks ago</small></p>
                            </div>
                        </div>
                        <div class="comment">
                            Thanks For Giving Us The Opportunity To Read Science Book Like
                            This One
                            <div class="like_replay">
                                <img src="/assets/img/the-mark.png" alt="" />
                                <img src="/assets/img/repondez-1.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>