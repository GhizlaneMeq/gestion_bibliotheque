<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      margin-top: 50px;
    }

    #searchForm {
      margin-bottom: 20px;
    }

    #searchResults {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .book-card {
      max-width: 300px;
      border: 1px solid #dee2e6;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .book-card:hover {
      transform: scale(1.05);
    }

    .book-card img {
      width: 100%;
      height: auto;
      border-bottom: 1px solid #dee2e6;
    }

    .book-card .card-body {
      padding: 15px;
    }

    .book-card h5 {
      font-size: 1.25rem;
      margin-bottom: 10px;
    }

    .book-card p {
      font-size: 0.9rem;
      color: #6c757d;
      margin-bottom: 0;
    }
  </style>
</head>

<body>

  <div class="container">
    <select id="categoryFilter" class="form-select mb-3">
      <option value="" selected>All Categories</option>
      <option value="Fiction">Fiction</option>
      <option value="Dystopian">Dystopian</option>
      <!-- Add more categories as needed -->
    </select>
    <form id="searchForm" action="search" method="GET" class="mb-3">
      <div class="input-group">
        <input type="text" name="search" id="search" class="form-control" placeholder="Search by Book Name or Author" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
        <button type="button" class="btn btn-primary">Search</button>
      </div>
    </form>

    <div id="searchResults">
      <?php
      foreach ($books as $book) {
        // You can customize this part based on your design
        echo '<div class="book-card">';
        // echo '<img src="path-to-your-book-image-folder/' . $book->getImage() . '" class="card-img-top" alt="Book Image">';
        echo '<div class="card-body">';
        echo '<a href="reservation?id=' . $book->getId() . '"><h5 class="card-title">' . $book->getTitle() . '</h5></a>';
        echo '<p class="card-author">' . $book->getAuthor() . '</p>';
        // Add more details as needed
        echo '</div>';
        echo '</div>';
      } ?>
    </div>
  </div>

  <script>
document.addEventListener('DOMContentLoaded', function () {
    var categoryFilter = document.getElementById('categoryFilter');
    var searchForm = document.getElementById('searchForm');
    var searchResults = document.getElementById('searchResults');

    categoryFilter.addEventListener('change', function () {
        updateResults();
    });

    searchForm.addEventListener('submit', function (event) {
        event.preventDefault();
        updateResults();
    });

    function updateResults() {
        var selectedCategory = categoryFilter.value;
        var searchQuery = document.getElementById('search').value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                searchResults.innerHTML = xhr.responseText;
            }
        };

        var url = 'filter?category=' + encodeURIComponent(selectedCategory) + '&search=' + encodeURIComponent(searchQuery);
        xhr.open('GET', url, true);
        xhr.send();
    }
});
</script>


</body>

</html>