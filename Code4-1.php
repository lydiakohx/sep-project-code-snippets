<?php
    foreach($restaurants as $restaurant) {
?>
        <article class="restaurant">
            <img class="restaurant_img" src="<?='./views/uploaded_images/'.$restaurant['image']?>" alt="<?=$restaurant['image']?>">
            <aside class="restaurantDetails">
                <h3><a href="./views/customer/viewRestaurant.php?id=<?=$restaurant["id"]?>"><?=$restaurant['name']?></a></h3>
                <i><?=$restaurant['address']?></i><br><br>
                Opened from <?=date("h:i A",strtotime($restaurant["open_hours"]))?> to <?=date("h:i A",strtotime($restaurant["close_hours"]))?><br><br>
                Type of cuisine: <strong><?=$restaurant['cuisine']?></strong><br>
                Website: <a href="<?=$restaurant['website']?>" target="_blank"><?=$restaurant['website']?></a><br>
            </aside>
        </article>
<?php         
    }
?>