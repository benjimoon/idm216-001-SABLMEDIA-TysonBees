<?php 

include '_components/prices.php';
$id = $row['catID'];
$site_url = site_url();
include_once __DIR__ . '/_components/header.php';

?>
<div class="main-confirm">
    <div class="menu">
    <div class="menu__item">
            <img src="<?php echo site_url();?><?php echo $row['image_path2']?>" alt="" class="menu__item--image">
                <h2 class="menu__item--name"><?php echo $row['title']; ?></h2>
                <p class="menu__item--price">$<?php echo $row['price']; ?></p>
                <form id="delete-form-<?php echo $row['id']; ?>" action='<?php echo "{$site_url}/_includes/delete-item.php" ?>' method='POST'>
    <input type='hidden' name='orderID' value='<?php echo "{$row['id']}"; ?>'/>
    <button type='submit' style='display: none;'></button>
</form>
           
            </div>
        </div>
    </div>
</div>
