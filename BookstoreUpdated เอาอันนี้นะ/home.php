<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bookstore</title>
  <style>
    .book-item {
      display: inline-block;
      margin: 10px;
      width: 250px;
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center; /* Center content within book items */
    }
    .book-item img {
      width: 100%;
      height: 200px; /* Adjust image height as needed */
    }
    .book-item p {
      margin-bottom: 5px;
    }
  </style>
</head>
<body>

<header>
  <h1>Welcome to Our Bookstore!</h1>
</header>

<main>
  <?php

  // Include the connection file (assuming it's in the same directory)
  require 'connection.php';

  // Specify table name
  $table_name = "books";

  // Define SQL query to fetch data
  $sql = "SELECT * FROM $table_name";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div class='book-item'>";

      // Check if image path exists before displaying (assuming 'image' column is added)
      if (isset($row['image']) && !empty($row['image'])) {
        echo "<img src='" . $row['image'] . "' alt='" . $row['Title'] . "'>";
      } else {
        echo "<p>**Image not available**</p>";
      }

      echo "<p><b>Title:</b> " . (isset($row['Title']) ? $row['Title'] : 'Not specified') . "</p>";
      echo "<p><b>Author:</b> " . (isset($row['Author']) ? $row['Author'] : 'Not specified') . "</p>";
      echo "<p><b>Genre:</b> " . (isset($row['Genre']) ? $row['Genre'] : 'Not specified') . "</p>";
      echo "<p><b>Rating:</b> " . (isset($row['Rating']) ? $row['Rating'] : 'Not specified') . "</p>";
      echo "<p><b>Price:</b> " . (isset($row['Price']) ? $row['Price'] . ' USD' : 'Not specified') . "</p>";

      // Add the form and hidden input field here
      echo "<form action='add_to_cart.php' method='post'>";
      echo "<input type='hidden' name='book_id' value='" . $row['BookID'] . "'>"; // Replace 'id' with your actual book ID field name
      echo "<button type='submit'>Add to Cart</button>";
      echo "</form>";

      echo "</div>";
    }
  } else {
    echo "No books found";
  }

  mysqli_close($conn);

  ?>
</main>

</body>
</html>