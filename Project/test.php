<?php 
session_start();
//echo $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
     <link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        #show{
            display: none;
        }
    </style>
</head>
<body>
<div class="container">
<h2>Example: Comment System with Ajax, PHP & MySQL</h2>
<input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required />
<input type="text" name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5" required/>
<input type="submit" name="submit" onclick="add()" class="btn btn-primary" value="Post Comment" />
<div class="card" id="show">
<div class="card-body">
<div id="poster"></div>
<div id="showComments"></div>
</div>
<div class="card-footer" style="height: 50px;">
 <div style="float: right;" id="date"></div>   
</div>
</div>
</div>
<script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
        function add(){
            document.getElementById("show").style.display ='block';
            var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;
            var name=document.getElementById('name').value;
             var comment=document.getElementById('comment').value;
            document.getElementById('poster').innerHTML="Posted by"+" "+"<?php echo $_SESSION['email']; ?>";
            document.getElementById('showComments').innerHTML=comment;
            document.getElementById('date').innerHTML="Posted at"+ today;
        }


</script>

</body>
</html>
