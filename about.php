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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-1.png" alt="">
         <h3>why choose us?</h3>
         <p>สินค้าคุณภาพเยี่ยม คัดสรรมาเพื่อนักบาสเก็ตบอลตัวจริง<br>วัสดุพรีเมียม ทนทาน พร้อมลุยทุกสนาม<br>บริการเป็นกันเอง พร้อมให้คำแนะนำจากผู้เชี่ยวชาญ<br>มีสินค้าให้เลือกหลากหลายแบรนด์ดัง<br>เราเข้าใจความต้องการของนักบาสเก็ตบอล</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-2.png" alt="">
         <h3>what we provide?</h3>
         <p>มีสินค้าสำหรับนักบาสเก็ตบอลทุกระดับ<br>ให้คำแนะนำในการเลือกซื้ออุปกรณ์ที่เหมาะสม<br></p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">สมาชิก Admin</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pik-1.jpg" alt="">
         
      
         <h3>ธนกฤต เกิดแก้ว <br>66312169</h3>
      </div>

      <div class="box">
         <img src="images/pik-2.jpg" alt="">
         
        
         <h3>นราภัทร รอดอยู่ <br>66312756</h3>
      </div>

      <div class="box">
         <img src="images/pik-3.jpg" alt="">
        
        
         <h3>วรโชติ อำนวยโรจนจินดา <br>66314545</h3>
      </div>

      <div class="box">
         <img src="images/pik-4.png" alt="">
         
         
         <h3>ศุภวิชญ์ สุขมี <br>66315108</h3>
      </div>

      <div class="box">
         <img src="images/pik-5.jpg" alt="">
         
         
         <h3>อลงกรณ์ จันทร์สม <br>66315757</h3>
      </div>


   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>