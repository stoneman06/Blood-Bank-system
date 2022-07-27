<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  </style>
</head>

<body>
  <div class="header">
    <?php
    $active = "home";
    include('head.php'); ?>

  </div>

  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;   ">
    <div class="container">
      <div id="content-wrap" style="padding-bottom:75px;">
        <br>
        <h1 style="text-align:center;font-size:45px;">Welcome to BloodBank & Donor Management System</h1>
        <br>
        <div class="w3-container" style="display:flex ;flex-direction:column;margin:5px;align-items:center">
            <div class="w3-show-inline-block">
              <button onclick="window.location='donate_blood.php'" class="btn btn-primary">Donate Blood</button>
              <button onclick="window.location='need_blood.php'" class="btn btn-primary" style="margin: 0px 25px 0px 25px;">Request</button>
              <button onClick="document.getElementById('down').scrollIntoView();"class="btn btn-primary">Donate Fund</button>
            </div><br>
          </div>
        <div class="row">
          
          <div class="col-lg-4 mb-4">
            <div class="card">
              <h4 class="card-header card text-white" style="background-color:#8b1a1a;">The need for blood</h4>

              <p class="card-body overflow-auto" style="padding-left:2%;height:330px;text-align:left;">
                <?php
                include 'conn.php';
                $sql = $sql = "select * from pages where page_type='needforblood'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['page_data'];
                  }
                }

                ?>
              </p>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <h4 class="card-header card text-white" style="background-color:#8b1a1a;">Blood Tips</h4>

              <p class="card-body overflow-auto" style="padding-left:2%;height:330px;text-align:left;">
                <?php
                include 'conn.php';
                $sql = $sql = "select * from pages where page_type='bloodtips'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['page_data'];
                  }
                }

                ?>
              </p>

            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <h4 class="card-header card text-white" style="background-color:#8b1a1a;">Who you could Help</h4>

              <p class="card-body overflow-auto" style="padding-left:2%;height:330px;text-align:left;">
                <?php
                include 'conn.php';
                $sql = $sql = "select * from pages where page_type='whoyouhelp'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['page_data'];
                  }
                }

                ?>
              </p>


            </div>
          </div>
        </div>
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image\slider2.jpg" alt="image\slider2.jpg" width="100%" height="500">
            </div>
            <div class="carousel-item">
              <img src="image\slider1.jpg" alt="image\slider1.jpg" width="100%" height="500">
            </div>
            <div class="carousel-item">
              <img src="image\slider3.jpg" alt="image\slider3.jpg" width="100%" height="500">
            </div>

          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>

        <br><br>
        <h1>Blood Donors</h1>

        <div class="row" style="justify-content: center;">
          <?php
          include 'conn.php';
          $sql = "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 6";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <div class="col-lg-4 col-sm-6 portfolio-item"><br>
                <div class="card" style="width:300px">
                  <img class="card-img-top" src="image\avatar.png" alt="Card image" style="width:100%;height:300px">
                  <div class="card-body">
                    <h3 class="card-title"><?php echo $row['donor_name']; ?></h3>
                    <p class="card-text">
                      <b>Blood Group : </b> <b><?php echo $row['blood_group']; ?></b><br>
                      <b>Mobile No. : </b> <?php echo $row['donor_number']; ?><br>
                      <b>Gender : </b><?php echo $row['donor_gender']; ?><br>
                      <b>Age : </b> <?php echo $row['donor_age']; ?><br>
                      <b>Address : </b> <?php echo $row['donor_address']; ?><br>
                    </p>

                  </div>
                </div>
              </div>
          <?php }
          } ?>
        </div>
        <br><br>
        <!-- /.row -->


        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4" style=" align-items: center; flex-direction: column; justify-content: center;">
          <div class="col-md-8" style="display: flex;flex-direction: column;align-items: center;">
            <h4>Donate Funds</h4>
            <p>
              <?php
              include 'conn.php';
              $sql = $sql = "select * from pages where page_type='universal'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row['page_data'];
                }
              }

              ?></p>
          </div>
          <!-- <div class="col-md-4"> -->
            <div id="down">
          <form style="padding:14px 10px 9px 10px;border: 1px solid green; border-radius:5px;transition: .42s;">
            <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JWoEh3ak3o9vbR" async> </script>
          </form>
            </div>
          <style>
            form:hover {
              background-color: #20c997;
            }
          </style>
          <!-- </div> -->
        </div>

      </div>
    </div>
    <?php include('footer.php'); ?>
  </div>

</body>

</html>