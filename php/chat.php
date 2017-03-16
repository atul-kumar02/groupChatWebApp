<?php
session_start(); // Includes Login Script
?>
<!DOCTYPE html>
<html>
<head>
  <title>chat app</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css"/>
  
  
</head>
<body>
  <script src="../javascript/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../javascript/main1.js"></script>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up Please</h1>
          
          <form action="adduser.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="name" />
            </div>
        
           <!-- <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>-->
          </div>

          <div class="field-wrap">
            <label>
              UserName<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="username"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password" pattern=".{5,}" required title="minimum 5 characters required"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="login.php" method="post">
          
            <div class="field-wrap">
            <label>
              UserName<span class="req">*</span>
            </label>
            <input type="text" name="username" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
         
          
          <input type="submit" name="submit" class="button button-block" value="submit">
          
          </form>

        </div>
        
        
      </div><!-- tab-content -->
      
</div> 
</body>

</html>




