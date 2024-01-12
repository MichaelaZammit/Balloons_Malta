<?php

function check_login($con)
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM users WHERE id = '$id' LIMIT 1";

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    // Redirect to login
    header("Location: login.php");
    die;
}

function random_num($length)
{
    $text = "";
    if($length < 5)
    {
        $length = 5;
    }

    $len = rand(4, $length);

    for ($i = 0; $i < $len; $i++)
    {
        $text .= rand(0, 9);
    }

    return $text;
}

function addToCart($productId, $productName, $productPrice, $quantity = 1) {
    // If the cart doesn't exist in the session, create it
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // If the product is already in the cart, update the quantity
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity'] += $quantity;
    } else {
        // Otherwise, add a new item to the cart
        $_SESSION['cart'][$productId] = array(
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => $quantity
        );
    }
}


addToCart();

// Display the cart contents
echo "<h2>Cart Contents:</h2>";
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    echo "<ul>";
    foreach ($_SESSION['cart'] as $productId => $product) {
        echo "<li>{$product['name']} - Quantity: {$product['quantity']} - Price: \${$product['price']}</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Your cart is empty.</p>";
}


function addToWishlist($productId, $productName, $productPrice) {
    // If the wishlist doesn't exist in the session, create it
    if (!isset($_SESSION['wishlist'])) {
        $_SESSION['wishlist'] = array();
    }

    // If the product is not already in the wishlist, add it
    if (!isset($_SESSION['wishlist'][$productId])) {
        $_SESSION['wishlist'][$productId] = array(
            'name' => $productName,
            'price' => $productPrice
        );
    }
}


addToWishlist();

echo "<h2>Wishlist Contents:</h2>";
if (isset($_SESSION['wishlist']) && count($_SESSION['wishlist']) > 0) {
    echo "<ul>";
    foreach ($_SESSION['wishlist'] as $productId => $product) {
        echo "<li>{$product['name']} - Price: \${$product['price']}</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Your wishlist is empty.</p>";
}

// Function to add a comment to the database
function addComment($contentId, $userName, $commentText) {
    global $conn;

    $contentId = mysqli_real_escape_string($conn, $contentId);
    $userName = mysqli_real_escape_string($conn, $userName);
    $commentText = mysqli_real_escape_string($conn, $commentText);

    $sql = "INSERT INTO comments (content_id, user_name, comment_text) VALUES ('$contentId', '$userName', '$commentText')";
    
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to retrieve comments from the database
function getComments($contentId) {
    global $conn;

    $contentId = mysqli_real_escape_string($conn, $contentId);

    $sql = "SELECT * FROM comments WHERE content_id = '$contentId' ORDER BY created_at DESC";
    $result = $conn->query($sql);

    $comments = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $comments[] = $row;
        }
    }

    return $comments;
}


$contentId = 1; 
$userName = "JohnDoe";
$commentText = "Great Servies!";

// Add a comment
$result = addComment($contentId, $userName, $commentText);

// Display comments
$comments = getComments($contentId);

if ($result === true) {
    echo "Comment added successfully!";
} else {
    echo "Error: " . $result;
}

echo "<h2>Comments:</h2>";
foreach ($comments as $comment) {
    echo "<p><strong>{$comment['user_name']}</strong>: {$comment['comment_text']}</p>";
}
