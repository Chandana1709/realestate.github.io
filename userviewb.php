<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title></title>
    <style>
    body{
  font-family:'Montserrat', sans-serif;
  background-image: url('');
  background-repeat: no-repeat;

}

    .title{
        text-align:center;
         border-radius:10px;
        background: #ecf0f1;
        padding:20 px;
        width:600px;
        height:4.5em;
        font-size:1.6em;
        font-family:montserrat;
        margin-top:20px;
        margin-left:400px;
    }
    .content{
        border-radius:10px;
        background: #ecf0f1;
        border:#ccc 1px solid;
        padding:20 px;
        width:1200px;
        font-size:1.6em;
        font-family:montserrat;
        height:20em;
        margin-top:20px;
        margin-left:80px;
    }
    .editbtn{
       display:inline-block;
        padding:10px;
        background:#ecf0f1;
        margin-bottom:15px;
        font-weight:bold;
        color:rgb(120, 120, 120);
        border:none;
        outline:none;
        border-radius:3px;
        cursor:pointer;
        transition:ease .3s;
        float:left;
        margin-left:400px;
    }
    .editbtn:hover{
        background:orange;
        color:black;
    }
    .deletebtn{
        display:inline-block;
        padding:10px;
        background:#ecf0f1;
        margin-bottom:15px;
        font-weight:bold;
        color:rgb(120, 120, 120);
        border:none;
        outline:none;
        border-radius:3px;
        cursor:pointer;
        transition:ease .3s;
        float:left;
        margin-left:400px;
        }
        .deletebtn:hover{
        background:orange;
        color:black;
    }
        .homebtn{
        display:inline-block;
        padding:10px;
        background:#ecf0f1;
        margin-bottom:15px;
        font-weight:bold;
        color:rgb(120, 120, 120);
        border:none;
        outline:none;
        border-radius:3px;
        cursor:pointer;
        transition:ease .3s;
        margin-left:600px;
        text-decoration: none;
        }
    .homebtn:hover{
        background:orange;
        color:white;
    }
    
    </style>
</head>
<body>

   <div class="container mt-5">

        <?php foreach($query as $q){?>
            <div class="title">
                <h1><?php echo $q['title'];?></h1>

                
            </div>
            <br><br><br>
            <textarea readonly name="content" class="content" cols="30" rows="10"><?php echo $q['content']?></textarea>
        <?php } ?>    
        <br><br>
        
                   <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                                    </form>
        

       
   </div>


</body>
</html>
