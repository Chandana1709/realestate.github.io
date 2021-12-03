 



 <html>
<head>
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
                <img src="assets/img/home.png" alt="">
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
                         <a href="adminay.php" class="nav__link">
                            <i class='bx bx-box nav__icon' ></i> 
                            <span class="nav__name">Overview</span>
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

                          
                      <a href="fetch.php" class="nav__link">
                            <i class='bx bx-book-heart nav__icon'></i> 
                            <span class="nav__name">Favorites</span>
                        </a>

                        <a href="viewfeedback.php" class="nav__link">
                            <i class='bx bx-box nav__icon' ></i> 
                            <span class="nav__name">Feedback View</span>
                        </a>
                         <a href="blog.php" class="nav__link">
                            <i class='bx bx-bookmark nav__icon' ></i>
                            <span class="nav__name">Article </span>
                        </a>


                        <a href="index.html" class="nav__link">
                            <i class='bx bx-log-out nav__icon'></i>
                            <span class="nav__name">Logout</span>
                        </a>
                    </div>
                </div>
+
               
            </nav>
        </div>

       
        <!--===== MAIN JS =====-->
        

        <form name="myform" onsubmit="return validation()"  action="pinsert.php" method="POST" enctype="multipart/form-data">
    
<div class="container">
            <form class="form-horizontal" role="form">
                <br><br><br><h2>Add Property Form</h2><br>

                
                
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="seller_name" placeholder="Full Name" class="form-control" autofocus  required="required" >
                        <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-9">
                        <input type="text" id="city" name="city" placeholder="Enter City Of Your Property" class="form-control" required="required" >
                    </div>
                </div>
                 
                   <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Type of property </label>
                    <div class="col-sm-9">
                        <select id="type_of_property" name="type_of_property" class="form-control"  required="required" >
                            <option>select option</option>
                            <option value="Independent House">Independent House</option>
                            <option value="Villa">Villa</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Other">Other</option>
                           
                        </select>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="no of bedroom" class="col-sm-3 control-label">No of bedroom</label>
                    <div class="col-sm-9">
                        <select id="no_of_bedroom" name="no_of_bedroom" class="form-control" required="required">
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
                        <select id="no_of_bathroom" name="no_of_bathroom" class="form-control" required="required">
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
                        <select id="other_rooms" name="other_rooms" class="form-control" required="required">
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
                    <label for="no of floor" class="col-sm-3 control-label"></label>
                    <div class="col-sm-9"> <div class="form-group">
                    <label class="control-label col-sm-3">Balconie</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="balconies" name="balconies" id="balconies"value="Yes"required="required">Yes
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="balconies" id="balconies" value="No">No
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="parking" class="col-sm-3 control-label">Parking</label>
                    <div class="col-sm-9">
                
                        <select id="parking" name="parking" class="form-control" required="required">
                            <option>select option</option>
                            <option value="Reserved Parking">Reserved Parking</option>
                            <option value="Open Parking">Open Parking</option>
                            
                            
                           
                        </select>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label for="no of floor" class="col-sm-3 control-label">No of floor</label>
                    <div class="col-sm-9">
                        <select id="total_no_of_floor" name="total_no_of_floor" class="form-control" required="required">
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
                        <select id="floor_no" name="floor_no" class="form-control" required="required">
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
                        <select id="availability_status" name="availability_status" class="form-control" required="required">
                            <option>select option</option>
                            <option value="Ready to move">Ready to move</option>
                            <option value="Still in construction">Still in construction</option>
                            
                            
                           
                        </select>
                    </div>
                </div>
                <div class="form-group">
                     <div class="col-sm-9">
            <label for="age_of_property" class="col-sm-3 control-label">Age of the property</label>
            <input type="number" name="age_of_property" min="0" max="20"  value="0" class="form-input" required="required"/>
               </div>
           </div>
            <div class="form-group">
                    <label for="MobileNo" class="col-sm-3 control-label">Mobile No</label>
                    <div class="col-sm-9">
                        <input type ="text" name="MobileNo" id="MobileNo" pattern="[0-9]*" maxlength="10" minlength="10" placeholder = "MobileNo" required>
            
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
                        <input type="text" value ="&#x20B9" name="COST_OF_THE_PROPERTY" class="form-control" required="required">
                         </div>
                
            
               <div class="form-group " >
            <label for="images" class="col-sm-3">Upload Property Picture</label>
            <input type="file" id="images"   name="images" multiple/>
          </div>
                
                <br><div class="form-group">
          <label for="special_prop1" class="col-sm-3">Speaciality of your property</label>
          <textarea class="form-control"  name="special_prop1"rows="3" cols="6" style="height:auto"></textarea>
        </div>
      </div>
      <div class="one">
      <button type="submit" name="submit" value="submit"  class="btn btn-success active">Submit</button>
  </div>

            </form> 
            <script>
      var img=document.forms['myform']['images'];
      var validExt=["jpeg","png","jpg"];
      function validation(){
        if(img.value!=''){
          var img_ext=img.value.substring(img.value.lastIndexOf('.')+1);
          var result=validExt.includes(img_ext);
          if(result==false){
            alert("selected files is not an image...");
            return false;
          }
          else{
            if(parseFloat(img.files[0].size/(1024*1024))>=3)
            {
              alert("Files size must be smaller than 3 mb");
            }
          }
        }
          else{
            alert("no image is selected...");
            return false;
          }
      }

</script>
        </div>
        </form> 
<script src="assets/js/main.js"></script>
   
</body>
</head>