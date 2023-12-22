<?php

$selectedCategory = isset($_GET['category']) ? $_GET['category'] : '';
$searchQuery = isset($_GET['search']) ? $_GET['search'] : '';

$filteredBooks = array_filter($books, function ($book) use ($selectedCategory, $searchQuery) {
    $matchesCategory = empty($selectedCategory) || $book->getGenre() == $selectedCategory;
    $matchesSearch = empty($searchQuery) || stripos($book->getTitle(), $searchQuery) !== false || stripos($book->getAuthor(), $searchQuery) !== false;
    return $matchesCategory && $matchesSearch;
});

foreach ($filteredBooks as $book) {
    echo '<div class="book-card">';
    echo '<div class="card-body">';
    echo '<a href="reservation?id=' . $book->getId() . '"><h5 class="card-title">' . $book->getTitle() . '</h5></a>';
    echo '<p class="card-author">' . $book->getAuthor() . '</p>';
    echo '</div>';
    echo '</div>';
}
?>
