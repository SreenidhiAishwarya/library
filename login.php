<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Library Management System</title>

<style>
body{
background-image:url("lib.jpg");
background-size:cover;
opacity:1;
}
.container{
animation:fadein 2s;
}
@keyframes fadein{
from{
opacity:0;}
to {opacity:1;}}
form {
    border: 0px;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 5px 18px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
 	 box-shadow: 4px 4px 5px #ccc;
}

button {
    background-color: #008800;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
     box-shadow: 4px 4px 5px #099518;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color:#f00000 ;
     box-shadow: 4px 4px 5px #f44336;
}
.container {
    width:400px;
    height:400px;
    margin-left:200px;
}
@media screen and (max-width: 300px) {
    span.pass {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.relative{
position:relative;
top:100px;
left:150px;

}
.text{
position:absolute;
top:80px;
left:160px;

}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}


.container1 {
    padding: 10px;
}
.container1 > input[type=text]{
width:50%;
font-size:20px;
margin-left:153px;
}
.container1 > input[type=password]{
width:50%;
font-size:20px;
margin-left:153px;
}
.container1 > button{
width:30%;
font-size:20px;
margin-left:220px;
}

span.psw {
    float: right;
    padding-top: 16px;
}


.modal {
    display: none; 
    position: fixed;
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4); 
    padding-top: 60px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 50%; 
}

.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
p{
 font-size:25px; color:white;font-family:courier;font-weight:bold;margin:0 auto;display:inline-block;width:100%;height:50px;opacity:1;background-color:black;}
</style>

</head>
<body>
<center><p><img src="psg1.png" alt="psg" style="width:50px;height:50px;">PSG Institute Of Technology And Applied Research</p></center>
<div class="pull-right" style="font-weight:bold;font-size:30px;">
<span class="glyphicon glyphicon-user" style="color:white;"></span><button class="pull-right" onclick="document.getElementById('id01').style.display='block'" style="top:0;color:white;width:auto;font-size:25px;padding-top:0;padding:0px;background-color:#000099;">ADMIN</button>

<div id="id01" class="modal">
  <form class="modal-content animate" action="adminconn.php"  method="post">
         <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
          

    <div class="container1" >
<center><h1><b>Login !</b></h1></center>
 
<input type="text" placeholder="Enter Username" id="nm" name="uname" required>

<input type="password" id="ps" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" >Login</button>
          </div>
      
    </div>
  </form>
</div>
<script type="text/javascript"s>
function hell()
{
if(document.getElementById("nm").value=="admin" && document.getElementById("ps")=="psg")
{
alert('valid');
location.href="admin.html";
}
else
{
alert('Invalid Admin');
}
}
</script>
<script>
var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>
<div class="container">
<div class="relative">
<img id="image"src="opn.jpg" alt="openbook" style="width:600px;height:600px;">
<div class="text" id="txt">
<center><h1 style="font-family:courier;font-weight:bold; "><i>LOGIN</i></h1></center>
	 
	 <form action="Front.php" method="get">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        
    <button type="submit">Login</button>
    <button type="button" class="cancelbtn">Cancel</button>
    </form>
    </div>
    </div>
    </div>

    </body>
</html>
