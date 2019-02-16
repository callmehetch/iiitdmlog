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
   <a class="btn btn-primary" href="search.php">Search</a>
     <div class="container" style="padding-top : 1%;">
        <div class="col-md-8 order-md-1">
            <h3 class="mb-3" style="text-decoration: underline; text-align:center">Log - Form</h3>
            <hr class="mb-4">

            <form class="needs-validation" onsubmit="return validate();" action="success.php  " method="post" autocomplete="off">
                <div class="row">


                    <div class="col-md-6 mb-3">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="" value=''>

                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="roll">ROLL NO</label>
                        <input type="text" class="form-control" name="roll" id="roll" placeholder="" value=''>
      
                    </div>
                </div>
            

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="number">Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+91</span>
                            </div>
                            <input type="text" class="form-control" name="phone" id="number" placeholder="">
                   
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="hostel">Hostel</label>
                        <select class="custom-select d-block w-100" name="hostel" id="hostel">
                            <option value="">Choose...</option>
                            <option>Ashwatha</option>
                            <option>Ashoka</option>
                            <option>Banyan</option>
                            <option>Lotus</option>
                            <option>Jasmine</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="room">ROOM NO</label>
                        <input type="text" class="form-control" name="room" id="room" placeholder="" value="">
                  
                    </div>

                </div>
 <div class="row">


                    <div class="col-md-6 mb-3">
                        <label for="idate">Date:</label>
                        <input type="date" class="form-control" name="idate" id="idate" placeholder="" value=''>
                    </div>
               <div class="col-md-4 mb-3">
                        <label for="iput">Complaint</label>
                        <select class="custom-select d-block w-100" name="iput" id="iput">
                            <option value="">Choose...</option>
                            <option>Late Entry</option>
                            <option>Drinking</option>
                            <option>Ragging</option>
                            <option>Malpractice in Exam</option>
                            <option>Unauthorized material in rooms</option>
                        </select>
                    </div>
                </div>
 


                <hr class="mb-4">
                <div class="row">
                    
                 
                        <label for="complaint">Complaint Details</label>
                        <input type="text" class="form-control" style="height:100px;" name="complaint" id="complaint" placeholder="" value="">
                    </div>
                    <div class="row">
                    
                 
                        <label for="punishment">Punishment</label>
                        <input type="text" class="form-control" style="height:100px;" name="punishment" id="punishment" placeholder="" value="">
                    </div>
                   <hr class="mb-4">

                <button class="btn btn-primary " type="submit" style="width : 30%;  ">Submit</button>
            </form>
           

        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>