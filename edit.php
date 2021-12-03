<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        width:500px;
        height:2.5em;
        font-size:2em;
        font-family:montserrat;
        margin-top:20px;
        margin-left:400px;
    }
    .content{
        border-radius:10px;
        background: #ecf0f1;
        border:#ccc 1px solid;
        padding:20 px;
        width:1300px;
        font-size:1.2em;
        font-family:montserrat;
        height:20em;
        margin-top:20px;
        margin-left:80px;
    }
    .btn{
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
        }
        .btn:hover{
        background:orange;
        color:black;
    }s

    
    
    
    </style>
    <title></title>
    
</head>
<body>

   <div class="container mt-5">
        <?php foreach($query as $q){ ?>
            <form method="POST">
                <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                <input type="text" placeholder="Blog Title" class="title" name="title" value="<?php echo $q['title']?>">
                <textarea name="content" class="content" cols="30" rows="10"><?php echo $q['content']?></textarea>
                <br><br><br>
                 
                <button class="btn" name="update">Update</button>
            </form>
        <?php } ?>    
   </div>

    </body>
</html>
