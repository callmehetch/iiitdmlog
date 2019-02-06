<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>IIITDM - Files</title>
  </head>
  <body>
   

<img src="HWlogo1.png" style="background: #264F8F; width: 100%;  border: solid white 1px;" />

    
  <?php
    session_start();
      
      $name=$_POST['name'];
      $roll=$_POST['roll'];
      $phone=$_POST['phone'];
      $hostel=$_POST['hostel'];
      $room=$_POST['room'];
      $complaint=$_POST['complaint'];
      $curdate = date("r");
      $curdt =date("d/m/Y");
      $curdat = date("j/n/Y");
      require_once('connect.php');
      
      $sql = "INSERT INTO data (name,roll,phone,hostel,room,complaint,curdate,curdt,curdat) VALUES ('$name','$roll','$phone','$hostel','$room','$complaint','$curdate','$curdt','$curdat')";

          if($conn->query($sql)== TRUE){
              
              echo"
               <div class='container' style='padding-top: 10%'>
 <div style='text-align: center;'>
      <h3>
          Successfully Entered!!!
      </h3>
      <div class='row'>
      <div class='col-md-6' style='padding-top: 10%'>
  <a  href='index.php' class='btn btn-primary'><-Go Home</a>
     </div>
     <div class='col-md-6' style='padding-top: 10%'>
  <a  href='search.php' class='btn btn-primary'>Search-></a>
     </div></div></div>
      </div>
              ";
          }
      
      else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

      $conn->close();
          
    ?>
    


   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>