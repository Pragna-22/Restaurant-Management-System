<html>
<head>
<title>Restaurant Management System</title>
<meta name="viewport" content="width=device-width" initial-scale="1.0">
<img src="img/res.gif" align="center" width="250px" height="250px">
<style type="text/css">
 body
 {
            background-color:black;
            background-size:cover;
            background-position: center;
            background-attachment:fixed;
            background-size:90%;    
     background: no repeat;}
        

h1{
      font-size: 400%;  
      text-align: center;
      color:white;
      font-family:sans-serif;
      position: fixed;
      top: 0;
      left:0;
      width: 100%;
      height: 10px;
}
    h2{
        font-size: 350%;
        text-align: center;
        color: white;
        font-family: monospace;
        position: fixed;
        top:250;
        width: 100%;
        height: 5px;
    }
    
    h3{
        font-size:250%;
        text-align: center;
        color:firebrick;
        font-family:sans-serif;
        position: fixed;
        top:500;
    }
     
    .container{
        text-align:center;
        margin-top: 360;
        bottom: 0;
    }
    .btn1{
        border: 1px solid red;
        background:orange;
        padding: 10px 20px;
        font-size: 20px;
        font-family:"monospace";
        cursor: pointer;
        margin: 10px;
    }
    .btn2{
        border: 1px solid red;
        background:orange;
        padding: 10px 20px;
        font-size: 20px;
        font-family:"monospace";
        cursor: pointer;
        margin: 10px;
        transition: 0.8s;
        position:relative;
        overflow: hidden;

        
    }
    .btn1:hover,.btn2:hover{
      color: teal;
    }
    .btn1:before{
        content: "";
        position: absolute;
        left: 0;
        width: 100%;
        background:orange;
        z-index: -1;
        transition: :0.8s;
    }
  .btn2:before{
        content: "";
        position: absolute;
        left: 0;
        width: 100%;
        background:orange;
        z-index: -1;
        transition: :0.8s;
    } 
</style>
</head>
<body>
<div class="container">
    
<button class="btn1" type="submit">Login</button>    
<button class="btn2">Sign-Up</button> 
<form action="login.php"></form>
  
    </div>
<center>
<h1><b>THE GOURMET KITCHEN</b></h1>
<h2><b>HELLO AND WELCOME!</b></h2>
<h3><b><marquee>PLEASE LOGIN OR SIGN-UP TO CONTINUE...</marquee></b></h3>
</center></body></html>

    