<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CodeWithHarry</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
</head>
<body style="margin:auto;">
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Table Updates</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <input type="hidden" name="snoedit" id="snoedit">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="editname" name="editname">
          </div>
           <label for="recipient-name" class="col-form-label">Email</label>
            <input type="text" class="form-control" id="editemail"name="editemail">
          
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea class="form-control" id="editdes" name="editdes"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"name="update">Update</button>
      </div>
    </div>
  </div>
</div>

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
   <?php
    $conn = mysqli_connect('localhost','root','','harry');

        if(!$conn){

          die("sorry we faild to connect:-". mysqli_connect_error());
        }
          if(isset($_GET['delete'])){
            $sno = $_GET['delete'];
            $delete = true;
            $sql = "DELETE FROM `notes` WHERE `sno` = $sno";
            $result = mysqli_query($conn, $sql);
          }
          // if(isset($_POST['upadet'])){
        if($_SERVER['REQUEST_METHOD']=='POST'){
          if(isset($_POST['snoedit'])){
            $sno=$_POST['snoedit'];
            $name=$_POST['nameedit'];
            $email=$_POST['emailedit'];
            $des=$_POST['desedit'];

            $edit="UPDATE data SET name='$name',email='$email',des='$des' where `data`.`id`=$sno";
             $result=mysqli_query($conn,$edit);
             if($result){
              $update= true;
        

          }else{

             echo "connection is successfuly <br>";
           }
          
          }else{
         $name=$_POST['name'];
         $email=$_POST['email'];
         $des=$_POST['des'];

        $ins="INSERT INTO data (`name`,`email`,`des`)VALUES('$name','$email','$des')";

          $result=mysqli_query($conn,$ins);

          if($result){
               $insert = true;
            }else{
            echo "the record was not inserted successfuln because of this error---->".mysqli_error($conn);
          }
      } 
    }
    
   ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
    <div class="col-lg-8">
   <form class="m-auto"action="" method="post">
   	 <h3 class="text-center">Conection With Submit Form</h3>
   	<label class="text-start text-dark fs-5">name</label><br>
   	 <input class="w-100 p-1" type="text" name="name"><br>
   	 <label class="text-start text-dark fs-5">Email</label><br>
   	 <input class="w-100 p-1" type="email" name="email"><br>
   	 <label class="text-start text-dark fs-5">Description</label><br>
   	 <textarea class="w-100 h-100" rows="6" name="des"></textarea><br>
     <button class="py-2 px-5 btn btn-primary" type="submit" name="submit">Save</button>
   </form>
 </div>
   <div class="col-lg-3"></div>
  </div>
        
     <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">sr.no.</th>
      <th scope="col">name</th>
      <th scope="col">Email</th>
      <th scope="col">Description</th>
       <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     <?php
        $conn = mysqli_connect('localhost','root','','harry');

        $sel= "SELECT * FROM `data`";
        $exe=mysqli_query($conn,$sel);
         $num=mysqli_num_rows($exe);
        echo $num;
        $sno=0;
        while ($fecth=mysqli_fetch_assoc($exe)) {
          $sno=$sno+1;
      ?>    
    <tr>
      <td> <?php echo $sno;?> </td>
      <td> <?php echo $fecth['name']; ?></td>
      <td> <?php echo $fecth['email']; ?> </td>
      <td> <?php echo $fecth['des'];  ?></td>
       <td>
           <?php
            // $conn=mysqli_connect('localhost','root','','harry');
            //  $nid=$_GET['nid'];
            //  $del= "DELETE FROM `data` where `id`='$nid'";
            //    mysqli_query($conn,$del);
            //  ?>
          <button type='submit'   id="$fecth['nid'].">Delete</button>
          <button type="submit" id= "$fecth['id']." data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@getbootstrap"class="edit">Edit</button>
          <?php
            }
           ?>
       </td>
    </tr>
  </tbody>
</table>
 </div>
</body>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
 <script type="text/javascript">
   edits=document.getElementsByClassName('edit');
    Array.from(edits).forEach((element)=>{
          element.addEventListener("click",(e)=>{

               console.log("edit",);
               tr=e.target.parentNode.parentNode;
               name=tr.getElementsByTagName("td")[1].innerText;
               email=tr.getElementsByTagName("td")[2].innerText;
               des=tr.getElementsByTagName("td")[3].innerText;
               console.log(name,email,des);
                editname.value=name;
                editemail.value=email;
                editdes.value=des;
                 snoedit.value=e.target.id;
                $('#editmodal').modal(toggle);
            })
      })

          deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/crud/index.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })

      
 </script>
</html>