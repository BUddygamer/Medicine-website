<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>MEDICAL</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
            padding: 10px;
            border: solid 0.5px;
            border-color: rgba(0, 0, 0, 0.452);
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }
        .navbar a {
            color: rgba(18, 18, 18, 0.84);
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 17px;
        }
        .navbar a:hover {
            background-color: #068df452;
            color: rgba(0, 79, 249, 0.788);
            cursor: pointer;
        }
        .navbar .icon {
            display: none;
        }
        .navbar img {
            height: 40px;
            margin-right: auto;
            cursor: pointer;
        }
        @media screen and (max-width: 600px) {
            .navbar a {
                display: none;
            }
            .navbar a.icon {
                display: block;
                float: right;
            }
        }
        @media screen and (max-width: 600px) {
            .navbar.responsive {
                position: relative;
            }
            .navbar.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .navbar.responsive a {
                display: block;
                text-align: left;
            }
        }
        .frist_block {
            padding: 20px;
        }
        .hg {
            margin-top: 55px;
            margin-left: 270px;
            font-size: 15px;
        }
        .s{
          margin-top: 35px; 
          margin-left: 270px; 
        }
        .s input[type=text] {
            padding: 10px;
            font-size: 20px;
            width: 800px;
            border-radius: 20px;
        }
        .s input[type=submit]{
            padding: 11px;
            font-size: 19px;
            border-radius: 22px;
            cursor: pointer;
        }
        .s input[type=submit]:hover{
            background-color: blueviolet;
            color: white;
        }
        .second_block {
            padding: 20px;
            gap: 50px;
            display: flex;
            margin-left: 70px;
            margin-right: 40px;
        }
        .third_block{
            padding: 20px;
        }
        .card_1, .card_2, .card_3, .card_4, .card_5, .card_6, .card_7 {
            cursor: pointer;
        }
        .card_1 {
            width: 140px;
            height: 100px;
        }
        .card_1 img, .card_2 img, .card_3 img, .card_4 img, .card_5 img, .card_6 img, .card_7 img {
            width: 100%;
        }
        .card_2 {
            width: 160px;
            height: 130px;
        }
        .card_3 {
            width: 174px;
            height: 145px;
        }
        .card_3 img {
            width: 110%;
        }
        .card_4, .card_5, .card_6, .card_7 {
            width: 160px;
            height: 130px;
        }
        .card_1:hover, .card_2:hover, .card_3:hover, .card_4:hover, .card_5:hover, .card_6:hover, .card_7:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .scroll-container {
            overflow-x: auto;
            white-space: nowrap;
            padding: 10px;
            -ms-overflow-style: none;  
            scrollbar-width: none;  
        }
        .scroll-container::-webkit-scrollbar { 
            display: none;  
        }
        .scroll-container img {
            padding: 10px;
        }

        .fourth_block{
            padding: 20px;
        }

        .fourth_block h1{
           font-size: 40px;
           margin-left: 35px;

        } 

        .card{
            display: flex;
            gap: 20px;
            margin-left: 40px;
            margin-top: 40px;
        }
      .fiveth_block{
        padding: 20px;
      }
    .fiveth_block  h1{
           font-size: 40px;
           margin-left: 35px;

        } 

        .shop{
            display: flex;
            gap: 30px;
            margin-left: 40px;
            margin-top: 40px;
        }

        .s1{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .s1 img{
            width: 50%;
            padding-left: 35px;
            padding-top: 10px;
        }

        .s1:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
       
        .w h3{
            text-align: center;
            cursor: pointer;
            
        }
        .s2{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .s2 img{
            width: 50%;
            padding-left: 35px;
            padding-top: 30px;
        }

        

        .s2:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
        
        .w2 h3{
            text-align: center;
            cursor: pointer;
        }

        .s3{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .s3 img{
            width: 50%;
            padding-left: 35px;
            padding-top: 25px;
        }

        

        .s3:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
        
        .w3 h3{
            text-align: center;
            cursor: pointer;
        }

        .s4{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .s4 img{
            width: 50%;
            padding-left: 35px;
            padding-top: 40px;
        }

        

        .s4:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
        
        .w4 h3{
            text-align: center;
            cursor: pointer;
        }

        .s5{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .s5 img{
            width: 50%;
            padding-left: 35px;
            padding-top: 30px;
        }

        

        .s5:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
        
        .w5 h3{
            text-align: center;
            cursor: pointer;
        }

        .s6{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .s6 img{
            width: 40%;
            padding-left: 44px;
            padding-top: 19px;
        }

        

        .s6:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
        
        .w6 h3{
            text-align: center;
            cursor: pointer;
        }

        .s7{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .s7 img{
            width: 40%;
            padding-left: 45px;
            padding-top: 25px;
        }

        

        .s7:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
        
        .w7 h3{
            text-align: center;
            cursor: pointer;
        }

        .s8{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .s8 img{
            width: 50%;
            padding-left: 35px;
            padding-top: 28px;
        }

        

        .s8:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
        
        .w8 h3{
            text-align: center;
            cursor: pointer;
        }
         .six_block{
            padding: 20px;
         }
        .head_3 h1{
           font-size: 40px;
           margin-left: 35px;

        } 



        .new{
            display: flex;
            gap: 50px;
            margin-left: 60px;
            margin-top: 40px;
        }
        .m h3{
            font-size: medium;
            text-align: center;
            cursor: pointer;
        }

        .n:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
        
        .n{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .n img{
            width: 70%;
            padding-left: 20px;
            padding-top: 20px;
        }

       

        
        
        .n2{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .n2:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
        .m2 h3{
            font-size: medium;
            text-align: center;
            cursor: pointer;
        }

        .n2 img{
            width: 50%;
            padding-left: 35px;
            padding-top: 35px;
        }

     
        .n3{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .n3:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
        .m3 h3{
            font-size: medium;
            text-align: center;
            cursor: pointer;
        }

        .n3 img{
            width: 70%;
            padding-left: 25px;
            padding-top: 20px;
        }
        
        .n4{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .n4:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
        .m4 h3{
            font-size: medium;
            text-align: center;
            cursor: pointer;
        }

        .n4 img{
            width: 60%;
            padding-left: 30px;
            padding-top: 30px;
        }

        .n5{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .n5:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
        .m5 h3{
            font-size: medium;
            text-align: center;
            cursor: pointer;
        }

        .n5 img{
            width: 70%;
            padding-left: 25px;
            padding-top: 20px;
        }

        .n6{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .n6:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
        .m6 h3{
            font-size: medium;
            text-align: center;
            cursor: pointer;
        }

        .n6 img{
            width: 65%;
            padding-left: 26px;
            padding-top: 30px;
        }

     

        .n7{
            width: 150px;
            height: 140px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .n7:hover{
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
           
        }
        .m7 h3{
            font-size: medium;
            text-align: center;
            cursor: pointer;
        }

        .n7 img{
            width: 70%;
            padding-left: 20px;
            padding-top: 20px;
        }

     
        .footer {
            background-color: #ADD8E6;
            color: black;
            padding: 20px;
            text-align: center;
        }
        .footer a {
            color: black;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer .social-icons {
            margin: 20px 0;
        }
        .footer .social-icons a {
            color: black;
            margin: 0 10px;
            font-size: 24px;
            display: inline-block;
        }

     


     

     

        
        

    </style>
</head>
<body>

<div class="navbar" id="myNavbar">
    <img src="logo2.jpg" alt="Company Logo">
    <a href="#home">Home</a>
    <a href="#medicine">Medicine</a>
    <a class='fas fa-user-circle' style='font-size:24px' href="login.php"></a>
    <a class="fa fa-shopping-cart" style="font-size:24px"></a>
    <a href="javascript:void(0);" class="icon" onclick="toggleNavbar()">&#9776;</a>
</div>

<div class="frist_block">
    <div class="hg">
        <h1>What are you looking for?</h1>
    </div>
    <div class="s">
        <input type="text" placeholder="Search for..." name="search" >
        <input type="submit" value="Search" >
    </div>
</div>

<div class="second_block">
    <div class="card_1">
        <img src="dav.jpg" alt="m1">
    </div>
    <div class="card_2">
        <img src="dva2.jpg" alt="m2">
    </div>
    <div class="card_3">
        <img src="dva3.jpg" alt="m3">
    </div>
    <div class="card_4">
        <img src="dva4.jpg" alt="m4">
    </div>
    <div class="card_5">
        <img src="dva5.jpg" alt="m5">
    </div>
    <div class="card_6">
        <img src="dva6.jpg" alt="m6">
    </div>
    <div class="card_7">
        <img src="dva7.jpg" alt="m7">
    </div>
</div>

<div class="third_block">
    <div class="scroll-container">
        <img src="ww.jpg" alt="1" width="700" height="300"style='cursor: pointer;'>
        <img src="ww2.jpg" alt="2" width="700" height="300"style='cursor: pointer;'>
        <img src="ww3.jpg" alt="3" width="700" height="300"style='cursor: pointer;'>
        <img src="ww4.jpg" alt="4" width="700" height="300"style='cursor: pointer;'>
        <img src="ww5.jpg" alt="5" width="700" height="300"style='cursor: pointer;'>
        <img src="ww6.jpg" alt="6" width="700" height="300"style='cursor: pointer;'>
    </div>
</div>

<div class="fourth_block">
    <div class="heading_1">
        <h1>Lab Tests</h1>
    </div>
    <div class="card">
        <div class="f1">
            <img src="f1.jpg" alt="f1" style='cursor: pointer;'>
        </div>
        <div class="f2">
            <img src="f2.jpg" alt="f2" style='cursor: pointer;'>
        </div>
        <div class="f3">
            <img src="f3.jpg" alt="f3" style='cursor: pointer;'>
        </div>
        <div class="f4">
            <img src="f4.jpg" alt="f4" style='cursor: pointer;'>
        </div>
        <div class="f5">
            <img src="f5.jpg" alt="f5" style='cursor: pointer;'>
        </div>
        <div class="f2">
            <img src="f6.jpg" alt="f6" style='cursor: pointer;'>
        </div>
    </div>
</div>

<div class="fiveth_block">
    <div class="heading_2">
        <h1>Shop by Categories</h1>
    </div>
    <div class="shop">
        <div class="w">
    <div class="s1">
            <img src="s1.jpg" alt="s1" style=' cursor:pointer;' >
        </div>
        <h3>Must Haves</h3>
        </div>
        <div class="w2">
        <div class="s2">
            <img src="s2.jpg" alt="s2"  style='cursor:pointer;' >
        </div>
        <h3>Elderly Care</h3>
        </div>

        <div class="w3">
        <div class="s3">
            <img src="s3.jpg" alt="s3"  style='cursor:pointer;' >
        </div>
        <h3>Personal Care</h3>
        </div>
        <div class="w4">
        <div class="s4">
            <img src="s4.jpg" alt="s4"  style='cursor:pointer;' >
        </div>
        <h3>Healthcare devices</h3>
        </div>
        <div class="w5">
        <div class="s5">
            <img src="s5.jpg" alt="s5"  style='cursor:pointer;' >
        </div>
        <h3>Health Food And<br>Drinks</h3>
        </div>
        <div class="w6">
        <div class="s6">
            <img src="s6.jpg" alt="s6"  style='cursor:pointer;' >
        </div>
        <h3>Skin Care</h3>
        </div>
        <div class="w7">
        <div class="s7">
            <img src="s7.jpg" alt="s7"  style='cursor:pointer;' >
        </div>
        <h3>Mother And Baby<br>Care</h3>
        </div>
        <div class="w8">
        <div class="s8">
            <img src="s8.jpg" alt="s8"  style='cursor:pointer;' >
        </div>
        <h3>Accessories &<br>Wearables</h3>
        </div>
    </div>
</div>

<div class="six_block">
    <div class="head_3">
        <h1>New Launches</h1>
    </div>
   <div class="new">
   <div class="m">
        <div class="n">
            <img src="n.jpg" alt="n"  style='cursor:pointer;' >
        </div>
        <h3> Softovac Liquifibre <br>₹213</h3>
        </div>
        <div class="m2">
        <div class="n2">
            <img src="n2.jpg" alt="n2"  style='cursor:pointer;' >
        </div>
        <h3> Liveasy Wellness <br>₹163</h3>
        </div>
        <div class="m3">
        <div class="n3">
            <img src="n3.jpg" alt="n3"  style='cursor:pointer;' >
        </div>
        <h3> Liveasy Wellness <br>₹163</h3>
        </div>
        <div class="m4">
        <div class="n4">
            <img src="n4.jpg" alt="n4"  style='cursor:pointer;' >
        </div>
        <h3> Liveasy Wellness <br>₹163</h3>
        </div>
        <div class="m5">
        <div class="n5">
            <img src="n5.jpg" alt="n5"  style='cursor:pointer;' >
        </div>
        <h3> Liveasy Wellness <br>₹163</h3>
        </div>
        <div class="m6">
        <div class="n6">
            <img src="n6.jpg" alt="n6"  style='cursor:pointer;' >
        </div>
        <h3> Liveasy Wellness <br>₹163</h3>
        </div>
        <div class="m7">
        <div class="n7">
            <img src="n7.jpg" alt="n7"  style='cursor:pointer;' >
        </div>
        <h3> Liveasy Wellness <br>₹163</h3>
        </div>
   </div>
   </div>

   

</div>
<div class="footer">
<p>&copy; 2024 Medical Website. All rights reserved.</p>
        <p>
            <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
        </p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>

<script>
    let scrollContainer = document.querySelector('.scroll-container');
    let images = document.querySelectorAll('.scroll-container img');
    let currentIndex = 0;
    let imageCount = images.length;

    function changeImage() {
        currentIndex = (currentIndex + 1) % imageCount;
        scrollContainer.scrollLeft = images[currentIndex].offsetLeft;
    }

    setInterval(changeImage, 2000);


   var interval = setInterval(function(){
    alert("Please login for more!!");
   },30000);

</script>

</body>
</html>
