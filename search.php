<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>IIITDM - Files</title>
    <style>
      
      
    body,html{
 
    margin: 0;
    padding: 0;
    background: #264F8F !important;
    }
        label{
            color: white;
          
        }

    .searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background-color: #353b48;
    border-radius: 30px;
    padding: 10px;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 450px;
    caret-color:#264F8F;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #264F8F;
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    }
      </style>
  </head>
  <body>
   

<img src="HWlogo1.png" style="background: #264F8F; width: 100%;  border: solid white 1px;" />
    
    
    

    
    
    <div class="container" style="padding-right: %">
        
        <div class="row">
           <div class="col-md-6">
               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                 <div class="container h-100" style="padding-top: 2%">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
         
          
          <input class="search_input" type="text" name="txtName" placeholder="Search...">
          <button  class="search_icon" type="submit" value="Send" name="submit"><i class="fas fa-search"></i></button>
           
        </div>
      </div>
    </div>
           </form>     
           </div> 
            
            
            
            
             <div class="col-md-6">
               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                 <div class="container h-100" style="padding-top: 2%">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="tytName" placeholder="SELECT * FROM data WHERE..........">
           <button  class="search_icon" type="submit" value="Send" name="submit"><i class="fas fa-quote-right"></i></button>
        </div>
      </div>
    </div> </form> 
               
           </div> 
            
        </div>
    </div>
   
    
    
    
    
    <div class="container" style="text-align: center">
      <a  href="index.php" class="btn btn-primary">Go Home</a>
    </div>
        <div class="container" style="text-align: center;padding-top:1%">
      <a  href="view.php" class="btn btn-primary">View All</a>
    </div>
    
    
      <?php
    
     if(isset($_POST["txtName"]))
{



    require_once('connect.php');


    $a = $_POST['txtName'];
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    $result = mysqli_query($conn,"SELECT * FROM data WHERE name like'%$a%'
          or roll like '%$a%'
          or hostel like '%$a%'
          or room like '%$a%'
          or complaint like '%$a%'
          or curdate like '%$a%'
          or curdt like '%$a%'
          or curdat like '%$a%'");

    ;




    if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
}

      
        if(mysqli_num_rows($result) == 0) {

            echo "Data not found";
           
        }

        else{
           $arr=array();
           $i=0;
           $count = mysqli_num_rows($result);
             while($i<$count){
              $row=mysqli_fetch_array($result);
              $arr[]=$row;
           $i++;
        }
        }

        foreach ($arr as $row) {
            echo '
             <div class="container" style="padding-top :1%; padding-left: 20%">
        <div class="col-md-8 order-md-1">
            <h3 class="mb-3" style="text-decoration: underline; text-align:center"></h3>
            <hr class="mb-4">
   ';
                echo $row['6'];
                
             echo   '
                      <hr class="mb-4">  
            <form>
                <div class="row">


                    <div class="col-md-6 mb-3">
                  <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="" value='.$row["0"].' readonly>

                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="roll">ROLL NO</label>
                        <input type="text" class="form-control" name="roll" id="roll" placeholder="" value='.$row["1"].' readonly>
                     
                    </div>
                </div>
            

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="number">Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+91</span>
                            </div>
                            <input type="text" class="form-control" name="phone" id="number" placeholder="" value='.$row["2"].' readonly>
                          
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="roomno">Hostel</label>
                        <input type="text" class="form-control" name="room" id="roomno" placeholder="" value='.$row["3"].' readonly>
                   
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="roomno">ROOM</label>
                        <input type="text" class="form-control" name="room" id="roomno" placeholder="" value='.$row["4"].' readonly>
                   
                    </div>

                </div>
     
                <div class="row">
                    
                 
                        <label for="roomno">Complaint</label>
                        <input type="text" class="form-control" style="height:100px;" name="room" id="roomno" placeholder="" value='.$row["5"].'>
                    
                    </div>
                   <hr class="mb-4">

            
            </form>
           
        </div>

    </div>  ';
            
              }
            
        
     }
      
      
      
      
     if(isset($_POST["tytName"]))
{



    require_once('connect.php');


    $b = $_POST['tytName'];
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    $result = mysqli_query($conn,"$b");




    if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
}

        $row = mysqli_fetch_row($result);
        if(mysqli_num_rows($result) == 0) {

            echo "Data not found";
           echo"* Or maybe your application couldn't be submitted due to your browser cache problem. Try filling form again using Incognito";
          
        }

      
              else{
           $arr=array();
           $i=0;
           $count = mysqli_num_rows($result);
             while($i<$count){
              $row=mysqli_fetch_array($result);
              $arr[]=$row;
           $i++;
        }
        }
               foreach ($arr as $row) {
            echo '
             <div class="container" style="padding-top :1%; padding-left: 20%">
        <div class="col-md-8 order-md-1">
            <h3 class="mb-3" style="text-decoration: underline; text-align:center"></h3>
            <hr class="mb-4">
   ';
                echo $row['6'];
                
              echo   '
                      <hr class="mb-4">  
            <form>
                <div class="row">


                    <div class="col-md-6 mb-3">
                  <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="" value='.$row["0"].' readonly>

                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="roll">ROLL NO</label>
                        <input type="text" class="form-control" name="roll" id="roll" placeholder="" value='.$row["1"].' readonly>
                     
                    </div>
                </div>
            

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="number">Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+91</span>
                            </div>
                            <input type="text" class="form-control" name="phone" id="number" placeholder="" value='.$row["2"].' readonly>
                          
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="roomno">Hostel</label>
                        <input type="text" class="form-control" name="room" id="roomno" placeholder="" value='.$row["3"].' readonly>
                   
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="roomno">ROOM</label>
                        <input type="text" class="form-control" name="room" id="roomno" placeholder="" value='.$row["4"].' readonly>
                   
                    </div>

                </div>
     
                <div class="row">
                    
                 
                        <label for="roomno">Complaint</label>
                        <input type="text" class="form-control" style="height:100px;" name="room" id="roomno" placeholder="" value='.$row["5"].'>
                    
                    </div>
                   <hr class="mb-4">

            
            </form>
           
        </div>

    </div>  ';
      }
            
        
     }
    
    ?>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>