<?php



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Librery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "DM Sans", sans-serif;
    }

    body {
      background-image: url(/assets/img/marionette-bg\ 1.png);
      background-repeat: no-repeat;
      background-size: cover;
    }

    nav {
      background-color: #2a2b6a;
    }

    .navbar .navbar-nav .nav-item .nav-link {
      color: white;
      font-weight: 600;
    }

    input {
      border: none;
    }

    /* first section  */

    .btn {
      border: 1px solid #5c45fd;
      color: #5c45fd;
    }

    .btn:hover {
      background-color: #5c45fd;
      color: #ffffff;
    }

    .container {
      line-height: 40px;
    }

    .description-home {
      margin-top: 185px;
    }

    .card-img-top {
      border: solid black;
      width: 70%;
      height: 70%;
    }

    .card-body {
      text-align: left;
    }

    .dropdown {
      background-color: none;
    }

    #dropdownMenuButton1 {
      background-color: rgb(100, 186, 248);
    }

    footer {
      width: 100%;
      padding: 5% 10%;
      background-color: #d5e6ff;
      margin-top: 150px;
    }

    .copy img {
      margin-right: 15px;
      width: 100%;
      height: auto;
    }

    .rows {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 2rem;
      justify-content: center;
      align-items: center;
    }

    .copy h1 {
      font-size: 15px;
      color: #0f2137;
      font-weight: 400;
      letter-spacing: 2px;
      margin-bottom: 10px;
      margin-top: 10px;
    }

    .copy p {
      font-size: small;
    }

    .det-foot h1 {
      font-weight: 600;
      font-size: large;
      margin-bottom: 30px;
      vertical-align: middle;
    }

    .det-foot a {
      margin-bottom: 10px;
      display: inline-flex;
    }

    .det-foot li img {
      width: 20px;
      height: 20px;
      vertical-align: middle;
      margin-top: 2px;
      margin-right: 10px;
    }

    .det-foot .tweet {
      width: 20px;
      height: 17px;
      vertical-align: middle;
      margin-top: 2px;
      margin-right: 10px;
    }
  </style>
</head>

<body>
  
  <div class="categories d-flex justify-content-center gap-1 mb-5">
    <h2>Filter BY &nbsp;</h2>

    <div class="row g-3">
      <div class="col-md-4">
        <label for="category" class="form-label">Category:</label>
        <select class="form-control" id="category" name="category_id">
          <option value="" selected disabled>All Categories</option>
          <option value="1">Maths</option>
          <option value="2">Physics</option>
          <option value="3">Geology</option>
          <option value="4">Divers</option>
        </select>
      </div>


    </div>
  </div>



  <section class="container text-center p-1 bg-light">
    <div class="row">
      <?php foreach($books as $book): ?>
        <div class="card02 col-sm-12 col-md-6 col-lg-3">
          <a href="reservation?id=<?=$book->getId() ?>"><img src="../public/img/The_Great_Gatsby.jpg" class="card-img-top" alt="book_image" width="100%" /></a>
          <div class="card-body">
            <h5 class="card-title"><?=$book->getTitle() ?></h5>
            <p class="card-star"><?=$book->getAuthor() ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  <footer>
    <div class="rows">
      <div class="copy">
        <a href="#" class="logo" aria-label="Read more"><img src="../..assets/img/logo.png" alt="#"></a>
        <h1>Terms of use | Privacy</h1>
        <p>Copyright by 2019 YourName, Inc</p>
      </div>
      <div class="det-foot">
        <h1>About Us</h1>
        <ul>
          <li><a href="#" aria-label="Read more">Support Center</a></li>
          <li><a href="#" aria-label="Read more">Customer Support</a></li>
          <li><a href="#" aria-label="Read more">About Us</a></li>
          <li><a href="#" aria-label="Read more">Copyright</a></li>
        </ul>
      </div>
      <div class="det-foot">
        <h1>Our Information</h1>
        <ul>
          <li><a href="#" aria-label="Read more">Return Policy</a></li>
          <li><a href="#" aria-label="Read more">Privacy Policy</a></li>
          <li><a href="#" aria-label="Read more">Terms & Conditions</a></li>
          <li><a href="#" aria-label="Read more">Site Map</a></li>
        </ul>
      </div>
      <div class="det-foot">
        <h1>My Account</h1>
        <ul>
          <li><a href="#" aria-label="Read more">Press inquiries</a></li>
          <li><a href="#" aria-label="Read more">Social media</a></li>
          <li><a href="#" aria-label="Read more">directories</a></li>
          <li><a href="#" aria-label="Read more">Images & B-roll</a></li>
        </ul>
      </div>
      <div class="det-foot">
        <h1>Connect</h1>
        <ul>
          <li><a href="#" aria-label="Read more"><img src="../..assets/img/Group-3.png" alt="#">Facebook</a>
          </li>
          <li><a href="#" aria-label="Read more"><img src="../..assets/img/Group22.png" alt="#" class="tweet">Twitter</a>
          </li>
          <li><a href="#" aria-label="Read more"><img src="../..assets/img/Group-1.png" alt="#">Github</a></li>
          <li><a href="#" aria-label="Read more"><img src="../..assets/img/Group-2.png" alt="#">Dribble</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="../..https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script>
    function filterBooks() {
      // Get the selected category
      var category = document.getElementById('category').value;

      // Create an XMLHttpRequest object
      var xhr = new XMLHttpRequest();

      // Define the AJAX request
      xhr.open('GET', 'filter_books.php?category=' + category, true);

      // Set up a callback function to handle the response
      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          // Update the book display with the new data
          document.getElementById('book-container').innerHTML = xhr.responseText;
        }
      };

      // Send the request
      xhr.send();
    }
  </script>

</body>

</html>