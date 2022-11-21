<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Ragistration Form</title>
  </head>
  <body>
     <?php include'partails/_header.php'; ?>
     <?php include 'partails/_dbconnect.php' ?>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/random/1920x700/?coding,pythan" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/random/1920x700/?programing,dovelper" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/random/1920x700/?microsoft,coding" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
     <div class="container">
       <h3 class="text-center">Welcome to Wscube Tech</h3>
       <div class="row">
          <?php include 'partails\_dbconnect.php';?>
          <?php
               
              $sql= "SELECT * FROM `cetagorise`";
              $result=mysqli_query($conn,$sql);
                 $row=mysqli_fetch_assoc($result);
               while($row){
                $id=$row['category_id'];
                $cat=$row['category_name'];
                $des=$row['category_des'];
             echo '<div class="col-lg-4">
            <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x900/?'.$cat.',pythan" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href ="thridviews.php?catid='.$id.'">'.$cat.'</a></h5>
              <p class="card-text">'.substr($des,0,90).'</p>
              <a href="thridviews.php?catid='.$id.' class="btn btn-primary">View Threads</a>
            </div>
          </div>
         </div>';
               }
            ?>
         
       </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
    
  </body>
</html>