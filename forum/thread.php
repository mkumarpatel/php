
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Ragistration Form</title>
  </head>
  <body>
     <?php include'partails/_header.php'; ?>
     <?php include 'partails/_dbconnect.php';?>
       <?php  

        $id = $_GET['threadid'];
       $sql = "SELECT * FROM `cetagorise`WHERE id='$id'"; 
       $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
        $id=$row['category_id'];
        $title = $row['title'];
        $desc = $row['description'];
         }
        ?>
    
    

    <div class="container py-2 m-auto"> 3l 
      <div class="col-lg-8 m-auto">  
   <div class="jumbotron jumbotron p-3">
  <h1 class="display-5"><?php echo $title; ?></h1>
  <p class="lead"><?php echo  $desc; ?></p>
  <hr class="my-2">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
</div>
</div> 
 </div>

       <div class="container mb-5" id="ques">
        <h1 class="py-2">Discussions</h1>

    <!-- <?php
      error_reporting(0);
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `qus_table` WHERE cat_id=$id"; 
    $result = mysqli_query($conn, $sql);
    $noResult = true;
          $row = mysqli_fetch_assoc($result);
       while($row){
        $noResult = false;
        $id = $row['id'];
        $title = $row['title'];
        $desc = $row['description']; 
        $user_id = $row['user_id']; 
        $time = $row['timestamp']; 
        $sql2 = "SELECT user_email FROM `users` WHERE sno='$user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        
        echo '<div class="media my-3">
            <img src="img/userdefault.png" width="54px" class="mr-3" alt="...">
            <div class="media-body">'.
             '<h5 class="mt-0"> <a class="text-dark" href="thread.php?threadid=' . $id. '">'. $title . ' </a></h5>
                '. $desc . ' </div>'.'<div class="font-weight-bold my-0"> Asked by: '. $row2['user_email'] . ' at '. $time. '</div>'.
        '</div>';

        }
        ?>
   -->    </div>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
    
  </body>
</html>