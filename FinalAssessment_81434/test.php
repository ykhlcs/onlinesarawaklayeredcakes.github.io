<?php
// Establish database connection
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert product data into the database
function addProduct($name, $description, $price) {
    global $conn;
    $query = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', $price)";
    mysqli_query($conn, $query);
    // Handle errors and success messages as needed
}

// Retrieve product data from the database
function getProducts() {
    global $conn;
    $query = "SELECT * FROM products";
    $result = mysqli_query($conn, $query);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $products;
}

// Add item to the shopping cart
function addToCart($productId, $quantity) {
    global $conn;
    $query = "INSERT INTO cart (product_id, quantity) VALUES ($productId, $quantity)";
    mysqli_query($conn, $query);
    // Handle errors and success messages as needed
}

// Retrieve shopping cart data from the database
function getCartItems() {
    global $conn;
    $query = "SELECT * FROM cart";
    $result = mysqli_query($conn, $query);
    $cartItems = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $cartItems;
}

// Update shopping cart item quantity
function updateCartItemQuantity($cartItemId, $quantity) {
    global $conn;
    $query = "UPDATE cart SET quantity = $quantity WHERE cart_id = $cartItemId";
    mysqli_query($conn, $query);
    // Handle errors and success messages as needed
}

// Remove item from the shopping cart
function removeCartItem($cartItemId) {
    global $conn;
    $query = "DELETE FROM cart WHERE cart_id = $cartItemId";
    mysqli_query($conn, $query);
    // Handle errors and success messages as needed
}

// Close database connection
mysqli_close($conn);
?>
