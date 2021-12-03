<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Modak&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
      
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
      
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <title>Update</title>
    <style>
 div.one{
        margin-top:10px;
        margin-left:210px;
        text-align:left;
      }
    </style>
</head>

  <body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="assets/img/home" alt="">
            </div>
        </header>
 <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='bx bxs-user nav__icon'></i> 
                        <span class="nav__logo-name">Admin</span>
                    </a>

                    <div class="nav__list">
                        <a href="admindashboard.php" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="adminviewprofile.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Users</span>
                        </a>
                        
                        <a href="propadd.php" class="nav__link">
                            <i class='bx bx-home nav__icon' ></i>
                            <span class="nav__name"> Add Property </span>
                        </a>
                        
                            <a href="up2.php" class="nav__link">
                            <i class='bx bx-pencil nav__icon' ></i>
                            <span class="nav__name">Update/Delete</span></a>

                          
                      
                       <a href="newadreg.html" class="nav__link">
                            <i class='bx bx-user-plus nav__icon'></i> 
                            <span class="nav__name">Add Admin</span>
                        </a>

                          
                      <a href="interested.php" class="nav__link">
                            <i class='bx bx-book-heart nav__icon'></i> 
                            <span class="nav__name">Favorites</span>
                        </a>

                        <a href="viewfeedback.php" class="nav__link">
                            <i class='bx bx-box nav__icon' ></i> 
                            <span class="nav__name">Feedback View</span>
                        </a>

                        <a href="home.html" class="nav__link">
                            <i class='bx bx-log-out nav__icon'></i>
                            <span class="nav__name">Logout</span>
                        </a>
                    </div>
                </div>

               
            </nav>
        </div>

       
        <!--===== MAIN JS =====-->
        
<?php
$servername="localhost";
$username="root";
$password="";
$database="realestate";
$PID=$_GET['property_id'];

$conn=new mysqli($servername,$username,$password,$database);
if(count($_POST)>0) {
mysqli_query($conn,"update property set property_id='$PID', seller_name='" . $_POST['seller_name'] . "', city='". $_POST['city'] . "', type_of_property='". $_POST['type_of_property'] . "',no_of_bedroom='" . $_POST['no_of_bedroom'] . "', no_of_bathroom='". $_POST['no_of_bathroom'] . "',other_rooms='". $_POST['other_rooms']. "', balconies='". $_POST['balconies'] . "', parking='" .$_POST['parking'] ."', total_no_of_floor='" .$_POST['total_no_of_floor'] ."', floor_no='" .$_POST['floor_no'] ."', availability_status='" .$_POST['availability_status'] ."', age_of_property='". $_POST['age_of_property'] . "', MobileNo='". $_POST['MobileNo'] . "',SIZE_OF_PROPERTY='". $_POST['SIZE_OF_PROPERTY'] . "',COST_OF_THE_PROPERTY='". $_POST['COST_OF_THE_PROPERTY'] . "',special_prop1='" .$_POST['special_prop1'] ."' where  property_id='$PID'");

}
$result = mysqli_query($conn,"select * from property where property_id='$PID'");
$r= mysqli_fetch_array($result);
?>

   
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<h1>
 Update property</h1>



    
       <form name="myform"  action="" method="POST" enctype="multipart/form-data">
        <div class="container">
            <form class="form-horizontal" role="form">
                <br><br><br><h2>Add Property Form</h2><br>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Property Id</label>
                    <div class="col-sm-9">
      <input type="text" id="property_id" name="property_id" placeholder="" class="form-control"  disabled value="<?php echo $r['property_id']; ?>">
      </div>
                </div>
             
                   
<div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
<input type="text" id="seller_name" name="seller_name" placeholder="Full Name" class="form-control" value="<?php echo $r['seller_name']; ?>"> 
                        <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
                    </div>
                </div>
             
  <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-9">
                        <input type="text" id="city" name="city" placeholder="Enter City Of Your Property" class="form-control" required="required" value="<?php echo $r['city']; ?>">  
                    </div>
                </div>
                           
 <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Type of property </label>
                    <div class="col-sm-9">
                        <select id="type_of_property" name="type_of_property" class="form-control"  required="required" value="<?php echo $r['type_of_property']; ?>"> 
                            <option>select option</option>
                            <option value="Independent House"></option>
                            <option value="Villa">Villa</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Other">Other</option>
                           
                        </select>
                    </div>
                </div> 
 
<div class="form-group">
                    <label for="no of bedroom" class="col-sm-3 control-label">No of bedroom</label>
                    <div class="col-sm-9">
                        <select id="no_of_bedroom" name="no_of_bedroom" class="form-control" required="required" value="<?php echo $r['no_of_bedroom']; ?>">  >
                            <option>select option</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="More">More</option>
                             </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="no of bathroom" class="col-sm-3 control-label">No of bathroom</label>
                    <div class="col-sm-9">
                        <select id="no_of_bathroom" name="no_of_bathroom" class="form-control" required="required" value="<?php echo $r['no_of_bathroom']; ?>">  
                            <option>select option</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="More">More</option>
                            
                           
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="other rooms" class="col-sm-3 control-label">Other rooms</label>
                    <div class="col-sm-9">
                        <select id="other_rooms" name="other_rooms" class="form-control" required="required" value="<?php echo $r['other_rooms']; ?>"> 
                            <option>select option</option>
                            <option value="Living Room">Living Room</option>
                            <option value="Dinning Room">Dinning Room</option>
                              <option value="Study Room">Study Room</option>
                               <option value="Drawing Room">Drawing Room</option>
                            <option value="Other">Other</option>
                            
                           
                        </select>
                    </div>
                </div>

                 
              <div class="form-group">
                    <label class="control-label col-sm-3">Balconie</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="balconies" name="balconies" id="balconies"value="Yes"required="required"value="<?php echo $r['balconies']; ?>">Yes
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="balconies" id="balconies" value="No" value="<?php echo $r['balconies']; ?>">No
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="parking" class="col-sm-3 control-label">No of floor</label>
                    <div class="col-sm-9">
            <select id="parking" name="parking" class="form-control" required="required" value="<?php echo $r['reserved_parking']; ?>">
                            <option>select option</option>
                            <option value="Reserved Parking">Reserved Parking</option>
                            <option value="Open Parking">Open Parking</option>
                            
                            
                           
                        </select>
                    </div>
                </div>
                  
                     <div class="form-group">
                    <label for="no of floor" class="col-sm-3 control-label">No of floor</label>
                    <div class="col-sm-9">
                        <select id="total_no_of_floor" name="total_no_of_floor" class="form-control" required="required" value="<?php echo $r['total_no_of_floor']; ?>">
                            <option>select option</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="More">More</option>
                            
                           
                        </select>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="floor_no" class="col-sm-3 control-label">Floor no</label>
                    <div class="col-sm-9">
                        <select id="floor_no" name="floor_no" class="form-control" required="required" value="<?php echo $r['floor_no']; ?>">   
                            <option>select option</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="More">More</option>
                            
                           
                        </select>
                    </div>
                </div>
                     <div class="form-group">
                    <label for="availability_status" class="col-sm-3 control-label">Availability Status</label>
                    <div class="col-sm-9">
                        <select id="availability_status" name="availability_status" class="form-control" required="required" value="<?php echo $r['availability_status']; ?>">  
                            <option>select option</option>
                            <option value="Ready to move">Ready to move</option>
                            <option value="Still in construction">Still in construction</option>
                            
                            
                           
                        </select>
                    </div>
                </div>
                    <div class="form-group">
                     <div class="col-sm-9">
            <label for="age_of_property" class="col-sm-3 control-label">Age of the property</label>
            <input type="number" name="age_of_property" min="0" max="20"  value="0" class="form-input" required="required" value="<?php echo $r['age_of_property']; ?>"> 
               </div>
           </div>
            <div class="form-group">
                    <label for="MobileNo" class="col-sm-3 control-label">Mobile No</label>
                    <div class="col-sm-9">
                        <input type ="text" name="MobileNo" id="MobileNo"  pattern="[0-9]*" maxlength="10" minlength="10" placeholder = "MobileNo" required>
            
            
                </div>
           </div>
           <div class="form-group">
                    <label for="SIZE_OF_PROPERTY" class="col-sm-3 control-label">Size Of Property</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Enter in sqft" name="SIZE_OF_PROPERTY" class="form-control" required="required">
            
                </div>
           </div>
            
            <div class="form-group">
                    <label for="COST_OF_THE_PROPERTY" class="col-sm-3 control-label">Cost Of Property</label>
                    <div class="col-sm-9">
                        <input type="text" value =" &#x20B9" name="COST_OF_THE_PROPERTY" class="form-control" required="required">
            
            
                </div>
           </div>
            
                
            

          
 
          


                <br><div class="form-group">
          <label for="special_prop1" class="col-sm-3">Speaciality of your property</label>
          <textarea class="form-control"  name="special_prop1"rows="3" cols="6" style="height:auto" value="<?php echo $r['special_prop1']; ?>"> </textarea>
        </div>
      </div>
      <div class="one">
      <button type="submit" name="submit" value="submit" onclick="checkupdate()" class="btn btn-success active">Submit</button>
  </div>

      
            

<br>
<br>


            
   

    <script>
  function checkupdate()
  {
    return confirm('Your record has been updated sucessfully')
  }

</script>
        </form>

<script src="assets/js/main.js"></script>
</body>
</html>