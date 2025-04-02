<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>


<style>

/* Dropdown Styling */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    color: white;
    padding:0px;
    text-decoration: none;
    display: inline-block;
}

/* Dropdown Content */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 180px;
    z-index: 1;
    border-radius: 5px;
}

.dropdown-content a {
  
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    transition: background-color 0.3s ease-in-out;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

/* Show dropdown on hover */
.dropdown:hover .dropdown-content {
    display: block;
   
}


</style>

<header class="header">

   <div class="flex">

      <a href="home.php" class="logo">Groco<span>.</span></a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="shop.php">Shop</a>
         <div class="dropdown">
            <a href="orders.php" class="dropbtn">Orders</a>
            <div class="dropdown-content">
               <a href="user_cancelled_orders.php">Cancelled Orders</a>
            </div>
         </div>

         <a href="rates.php">Rates</a>
         <a href="about.php">About</a>
         <a href="contact.php">Contact</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <a href="search_page.php" class="fas fa-search"></a>
         
         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
         ?>
         <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?= $count_wishlist_items->rowCount(); ?>)</span></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $count_cart_items->rowCount(); ?>)</span></a>
      </div>

      <div class="profile">

      
         <?php
         
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>


         <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
         <p><?= $fetch_profile['name']; ?></p>
         <a href="user_profile_update.php" class="btn">update profile</a>
         <a href="logout.php" class="delete-btn">logout</a>
        
      </div>

   </div>

</header>