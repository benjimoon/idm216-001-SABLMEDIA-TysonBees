<?php
include_once 'app.php';
$site_url = site_url();


// ($user['isGuest']==0) ? "success": redirect_to('/auth/login.php') ;

$orderTotal = 0;
// $order = get_order_by_user_id($user['id']);
$order = get_order_by_user_id($user);


if ($order->num_rows > 0) {
    echo '<ul class="cart-item-list">';
    while($row = $order->fetch_assoc()) {
        include '_components/checkout-item.php';
    } // End while loop
    echo '</ul>';
} 


global $db_connection;
   
$query= "UPDATE orders SET status = 'archived' WHERE userID = {$user['id']} AND status = 'active'";
$result = mysqli_query($db_connection, $query);

$query = "SELECT amount FROM users WHERE id = {$user['id']}";
$result = mysqli_query($db_connection, $query);

$amount = $user['amount'];
$amount += 1;

$query= "UPDATE users SET amount = {$amount} WHERE id = {$user['id']}";
$result = mysqli_query($db_connection, $query);
?>

<a href="<?php echo "{$site_url}/index.php" ?>">X</a>