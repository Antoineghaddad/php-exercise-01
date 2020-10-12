
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login page | Registeration Page</title>
    <style>

      *{
      padding:0;
      margin:0;
      box-sizing: border-box;
      font-family: sans-serif;
      
      
      }
      header{
          background-image: url('registration_banner.jpg');
          height:30vh;
          background-size: cover;
      }
      /* body starts here */
      body .form-control{
          width:90%;
          border-color: #cad1db;;
          height:40px; 
          margin-top:1%;
          font-size: 16px;
            
      }
      body{
          background-color:#d5dcd5;
      }
      body h1{
          color:#2054aa;
          font-size:30px;
         
      }
      h1.title{
          text-align: center;
          margin-top:5%;
      }.title span{
          color:black;
          font-style: italic;
      }
      
      .form-reg{
          font-weight: bold;
      }
      
      .content{
          margin:5% auto;
          max-width:80%;
          display:flex;
         justify-content: space-around;
         border:1px white solid;
         padding:30px 10px;
         background-color:white;
      
      }
      #button{
          margin-top:5%;
          border:2px rgb(33, 55, 78) solid;
          padding:5px 20px;
          font-weight: bold;
          width:90%;
          height:40px;
          background-color:#2054aa;
          color:white;
          border-radius:7%;  
      }
      #button:hover{
          color:#2054aa;
          background-color:white;
      }
      
      .form-control:hover {
          outline: none;
          animation-name: scale;
          animation-duration: 0.5s;
          animation-iteration-count: infinite;
          animation-fill-mode: forwards;
      }
      footer hr{
        width:70%;
        margin:20px auto;
        opacity:0.4;
      }
      footer p{
        margin-left:43%;
        opacity:0.4;
        padding:15px 20px;
        font-size: 13px;
      }
      body{
        position:relative;
      }
      img{
        height:30%;
        width:30%;
        position:absolute;
        top:55%;
        left:57%;
        
      }
      form{
        margin-left:4%;
      }

      .password{
        color:red;
      }
      
      @keyframes scale {
          0% {
              transform: scale(1.1, 1.1);
          }
          100%{
              transform: scale(1.1, 1.1);
          }
      }
      
      #button:hover{
          outline: none;
          animation-name: scale;
          animation-duration: 0.5s;
          animation-iteration-count: infinite;
          animation-fill-mode: forwards;
      }
      @keyframes title {
          0% {
              transform: scale(1.1, 1.1);
          }
          100%{
              transform: scale(1.1, 1.1);
          }
      }   
          </style>
</head>

<body>
<header>

</header>
<main>  
  <h1 class="title"><span>New User?</span> Follow the Steps Below.</h1>
<div class="content">
<form method="POST" action="safe.php"> 
  <div class="flex-box1">
  <h1 class="registeration-title">1.Registration fields:</h1>
<div class="form-reg">
<label class="label" for="name">Full-name:
<input type="text" id="name" class="form-control"   name="name" placeholder="Full-name.">
</label>
</div>

<div class="form-reg">
  <label class="label" for="username">Username:
   <input type="text" id="username" class="form-control" name="username" required placeholder="Username.">
  </label>
</div>

<div class="form-reg">
  <label class="label" for="password">Password:
   <input type="password" id="password" class="form-control" name="password" required placeholder="Password.">
  </label>
</div>
<?php
if(strlen($_POST["password"])<6){
  echo "<p class='password'>Password should at least contain 6 characters</p>";
}
?>

<div class="form-reg">
  <label class="label" for="confirm-password">Confirm-Password:
   <input type="password" id="confirm-password" class="form-control" name="confirm-password" required placeholder="Confirm password.">
  </label>
</div>
<?php
if(strcmp($_POST["password"],$_POST["confirm-password"])!=0){
   echo "<p class='confirm'>Username and Password doesn't match</p>";
}

?>


<div class="form-reg">
  <label class="label" for="email">E-mail:
   <input type="email" id="email" class="form-control" name="email" placeholder="Email." required>
  </label>
</div>

<div class="form-reg">
  <label class="label" for="phone">Telephone:
   <input type="tel" id="phone" class="form-control"name="phone" required placeholder="Phone number.">
  </label>
</div> 

<div class="form-reg">
  <label class="label" for="date">Date-of-Birth:
   <input type="date" class="form-control" id="date" name="date."required >
  </label>
</div>

<div class="form-reg">
  <label class="label" for="social">Social Security Number:
   <input type="text" class="form-control" id="social" name="social" required placeholder="Security Number.">
  </label>
  <input id="button" type="submit" name="submit" value="Register" />
  <?php
  if($_GET["error"]==1){
    echo "<p class='login'>Wrong Username or Password</p>";
}
?>
</div>
</div>
</form>
<div class="flex-box2">
  <form method="POST" action="safe.php">
 <h1 class="registeration-title1">2.Log In fields:</h1>   
<div class="form-reg">
    <label class="label" for="username2">Username:
     <input type="text" id="username2" class="form-control" name="username2" placeholder="Username.">
    </label>
  </div>
  
  <div class="form-reg">
    <label class="label" for="password2">Password:
     <input type="password" id="password2" class="form-control" name="password2" placeholder="Password.">
    </label>
    <input id="button" type="submit" name="submit" value="Login" />
  </div>
</div>
</form>
<div class="logo">
  <img src="register-now.jpg" alt="register">
</div>
</div>
</main>
<footer>
  <hr>
  <p>Copyright © 2020</p>
</footer>
<script>
  var pass=document.getElementById("password");
  var conf=document.getElementById("confirm-password");
  var button=document.getElementById("button");
  button.addEventListener("click" , function(){
if ( pass.value !== conf.value){
    pass.style.borderColor="blue";
    conf.style.borderColor="blue";
    alert("your password didn't match")
}

});
</script>
</body>
</div>
</html>

