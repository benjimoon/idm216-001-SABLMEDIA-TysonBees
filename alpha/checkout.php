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


$query= "SELECT amount FROM users WHERE user = {$user['id']}";
$result = mysqli_query($db_connection, $query);
$count = $user['amount'] + 1;



echo "$" . $orderTotalPrice;


?>

<a href="<?php echo "{$site_url}/confirmation.php" ?>">pay</a>