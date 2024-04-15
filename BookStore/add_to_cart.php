PHP
<?php

session_start();

// Get the book ID from the form submission
$book_id = $_POST['book_id'];

// If the cart session variable doesn't exist, create it as an empty array
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

// Add the book ID to the cart array (consider checking for duplicates if needed)
array_push($_SESSION['cart'], $book_id);

// Redirect back to the main page (bookstore.html)
header("Location: bookstore.html");

?>