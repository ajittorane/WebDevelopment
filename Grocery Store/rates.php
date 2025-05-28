<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Rates</title>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/style.css">

   <style>
 .rates {
    text-align: center;
    padding: 20px;
    background-color: #f8f8f8;
    font-size: 150%;
}

/* Scrollable Table Container */
.table-container {
    width: 100%;
    max-height: 400px; /* Adjust height as needed */
    overflow: auto; /* Enables both horizontal and vertical scrolling */
    margin-top: 20px;
    border: 0;
}

/* Table Styling */
.rates-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 700px; /* Ensures table does not shrink */
}

/* Table Header and Cells */
.rates-table th, 
.rates-table td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
    font-size: 140%;
    white-space: nowrap; /* Prevents text from wrapping */
}

/* Sticky Table Header */
.rates-table th {
    background-color: #4CAF50;
    color: white;
    position: sticky;
    top: 0;
    z-index: 2;
}

/* Ensures smooth scrolling and visibility */
.table-container::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}

.table-container::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.table-container::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 5px;
}

.table-container::-webkit-scrollbar-thumb:hover {
    background: #555;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    .rates-table th, 
    .rates-table td {
        font-size: 120%;
        padding: 10px;
    }
}


   </style>

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="rates">

   <div class="table-container">
   <h1 class="title">Vegetable Rates</h1>

      <table class="rates-table">
         <tr>
            <th>Vegetable</th>
            <th>Price (1 kg)(किलो)</th>
            <th>Price (500g)(अर्धा किलो)</th>
            <th>Price (250g)(पाव किलो)</th>
         </tr>
         <tr>
            <td>Tomato(टोमॅटो)</td>
            <td>₹40</td>
            <td>₹20</td>
            <td>₹10</td>
         </tr>
         <tr>
            <td>Potato(बटाटा)</td>
            <td>₹30</td>
            <td>₹15</td>
            <td>₹8</td>
         </tr>
         <tr>
            <td>Onion(कांदा)</td>
            <td>₹35</td>
            <td>₹18</td>
            <td>₹9</td>
         </tr>
         <tr>
            <td>Carrot(गाजर)</td>
            <td>₹50</td>
            <td>₹25</td>
            <td>₹12</td>
         </tr>
         <tr>
            <td>Bitter Gourd(कारले)</td>
            <td>₹20</td>
            <td>₹10</td>
            <td>₹5</td>
         </tr>
         <tr>
            <td>Brinjal(वांगी)</td>
            <td>₹45</td>
            <td>₹22</td>
            <td>₹11</td>
         </tr>
         <tr>
            <td>Capsicum(शिमला मिर्च)</td>
            <td>₹60</td>
            <td>₹30</td>
            <td>₹15</td>
         </tr>
         <tr>
            <td>Cabbage(कोबी)</td>
            <td>₹25</td>
            <td>₹13</td>
            <td>₹7</td>
         </tr>
         <tr>
            <td>Cauliflower(फुलकोबी)</td>
            <td>₹25</td>
            <td>₹13</td>
            <td>₹7</td>
         </tr>
         <tr>
            <td>Lady Finger(भेंडी)</td>
            <td>₹25</td>
            <td>₹13</td>
            <td>₹7</td>
         </tr>
         <tr>
            <td>Peas(वाटाना)</td>
            <td>₹25</td>
            <td>₹13</td>
            <td>₹7</td>
         </tr>
         <tr>
            <td>Red Papper(लाल मिरची)</td>
            <td>₹25</td>
            <td>₹13</td>
            <td>₹7</td>
         </tr>
         <tr>
            <td>Green Papper(हिरवी मिरची)</td>
            <td>₹25</td>
            <td>₹13</td>
            <td>₹7</td>
         </tr>
         <tr>
            <td>Mint(पुदीना)</td>
            <td>₹25</td>
            <td>₹13</td>
            <td>₹7</td>
         </tr>
         <tr>
            <td>Garlic(लसुन)</td>
            <td>₹25</td>
            <td>₹13</td>
            <td>₹7</td>
         </tr>
         <tr>
            <td>Ginger(आले)</td>
            <td>₹25</td>
            <td>₹13</td>
            <td>₹7</td>
         </tr>
         <tr>
            <td>Fenugreek Leaves(मेथी)</td>
            <td>₹25</td>
            <td>₹13</td>
            <td>₹7</td>
         </tr>
        
         <tr>
            <td>Coriander Leaves(कोथिंबीर)</td>
            <td>₹30</td>
            <td>₹15</td>
            <td>₹7</td>
         </tr>
         <tr>
            <td>Lemon(लिंबू)</td>
            <td>₹30</td>
            <td>₹15</td>
            <td>₹7</td>
         </tr>
        
      </table>

      <h1 class="title">Fruits Rates</h1>
      <table class="rates-table">
         <tr>
            <th>Fruits</th>
            <th>Price (1 kg)(किलो)</th>
            <th>Price (500g)(अर्धा किलो)</th>
            <th>Price (250g)(पाव किलो)</th>
         </tr>
      
        
        
      </table>

      <?php
         
      {
         echo '<p class="empty">no rates available!</p>';
      }
   ?>
   </div>
</section>


<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
