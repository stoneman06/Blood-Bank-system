<html>

<head>


<style>

.header {
  overflow:hidden;
  background-color: #931b1b;
  background: transparent;
  top: 0;
  width:100%;
  padding: 0px 5px;
  color:#FF0404  ;
  z-index: 999;
  position:sticky;
  backdrop-filter: blur(3px);
  -webkit-backdrop-filter: blur(3px);
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

/* Style the header links */
.header a {
  float: left;
  color: #a72626;
  text-align: center;
  padding-left: 25px;
  padding-right: 25px;
  text-decoration: none;
  font-size: 20px;
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
  color:#FF0404  ;
  padding-bottom: 3px;
}

/* Change the background color on mouse-over */
/* .header a:hover {
  background-color: #ddd;
  color: black;
} */




/* Float the link section to the right */
.header-right {
  float: right;
  margin-top: 10px;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
/* Style the active/current link*/
a.act{
background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
color: white;
border-radius:30px;
}
a.logo2{
  background-color: #333;
}
</style>
</head>

<body>
  <div class="header">
    <a href="index.php" class="logo"<?php if($active=='home') echo "class='logo2'"; ?>>
    <img src="image/logo1.png" alt="logo" style = " height:50px; ">
    </a>
    <div class="header-right">
     
    <a href="donate_blood.php"  <?php if($active=='donate') echo "class='act'"; ?>>Donate Blood</a>
    <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a>
    <a href="why_donate_blood.php"  <?php if($active=='why') echo "class='act'"; ?>>FAQs</a>
    <a href="about_us.php"  <?php if($active=='about') echo "class='act'"; ?> >About Us</a>
    <!-- <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contact Us</a> -->
    </div>
  </div>

</body>
</html>
