<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>IIITDM - Files</title>
  </head>
  <body>
   

<img src="HWlogo1.png" style="background: #264F8F; width: 100%;  border: solid white 1px;" />
  <div class="container">
  <div class="row" >
  <div class="col-md-10">
      <a class="btn btn-primary" href="search.php">Search</a></div>
 <div class="col-md-2">
        <a class="btn btn-primary" href="index.php">Go Home</a></div></div>
     </div>
     

<?php


    require_once('connect.php');

        $conn = mysqli_connect($servername, $username, $password,$dbname);
    
     $gender="M";
     $status="1";
    $result = mysqli_query($conn,"SELECT * FROM data");


     if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
}



        if(mysqli_num_rows($result) == 0) {

            echo "No Data";

            
            
            exit;
        }

        else {
            $arr=array();
           $i=0;
           $count = mysqli_num_rows($result);
             while($i<$count){
              $row=mysqli_fetch_array($result);
              $arr[]=$row;
           $i++;
        }

            }

    ?>
    
    
<div class="container-fluid" style="padding: 0">

<div class="col-lg-12" style="padding: 0; margin-bottom: 50px">


    

                     


</div>
<div class="container-fluid">

    
<table class="table table-hover" >
    <tr>

      <th style="padding-left:  4em; background-color: #264F8F; color:#fff;"> Name </th>
      <th style="padding-left:  6.5em;  background-color: #264F8F; color:#fff;">Roll </th>
      <th style="padding-left:  4em;  background-color: #264F8F; color:#fff;"> Date </th>
      <th style="padding-left:  4em;  background-color: #264F8F; color:#fff;"> Check </th>

    </tr>


    <?php
      foreach ($arr as $row) {


       ?>
        <tr>
        
          <td style="padding-left:  4em;">
          <?php echo $row["name"]  ;  ?>
          </td>
           <td style="padding-left:  4em;">
            <?php echo  $row["roll"]; ?>
          </td>
           <td style="padding-left:  4em;">
            <?php echo  $row["curdt"]; ?>
          </td>
         
  <td style="padding-left:  4em;">
            <button class="btn btn-primary" id="<?php echo($row["curdate"]) ?>" onclick="view(this.id,' <?php echo  $row["0"]; ?>','<?php echo  $row["roll"]; ?>',' <?php echo  $row["phone"]; ?>',' <?php echo  $row["hostel"]; ?>', '<?php echo  $row["room"]; ?>',' <?php echo  $row["complaint"]; ?>')"> Check</button>          
          </td>


        </tr>

    <?php
      }
     ?>


    </table>

</div>
</div>
    
    
    
    
    
<div id="id03" class="w3-modal" >
      <div class="w3-modal-content" style = "height : 600px">

        <header class="w3-container w3-indigo">

<input type="hidden" name="id" id="userid3">
          <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-display-topright">&times;</span>
          <h2>Details</h2>
        </header>

                   <hr class="mb-4">  
            <form>
               <div class="container">
                <div class="row">


                    <div class="col-md-6 mb-3">
                  <label for="name">Name:</label>
                        <input type="text" class="form-control" name="a" id="a" placeholder="" readonly>

                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="roll">ROLL NO</label>
                        <input type="text" class="form-control" name="b" id="b" placeholder="" readonly>
                     
                    </div>
                </div>
            

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="number">Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+91</span>
                            </div>
                            <input type="text" class="form-control" name="c" id="c" placeholder="" value='.$row["2"].' readonly>
                          
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="roomno">Hostel</label>
                        <input type="text" class="form-control" name="d" id="d" placeholder="" value='.$row["3"].' readonly>
                   
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="roomno">ROOM</label>
                        <input type="text" class="form-control" name="e" id="e" placeholder="" value='.$row["4"].' readonly>
                   
                    </div>

                </div>
     
                <div class="row">
                    
                 
                        <label for="roomno">Complaint :</label>
                        <input type="text" class="form-control" style="height:100px;" name="f" id="f" placeholder="" value='.$row["5"].'>
                    
                    </div>
                   <hr class="mb-4">

            </div>
            </form>
           
        </div>

    </div> 



      <script type="text/javascript">


  function view(id,a,b,c,d,e,f) {
document.getElementById('id03').style.display='block'
    document.getElementById("a").value= a;
    document.getElementById("b").value= b;
     document.getElementById("c").value= c;
     document.getElementById("d").value= d;
     document.getElementById("e").value= e;
       document.getElementById("f").value= f;
  }



</script>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>