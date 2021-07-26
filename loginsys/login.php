<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    
   <link rel="stylesheet" href="form.css" type="text/css">
    
  
</head>
<body>
    <div class="wrap">
    <form class="form" action="loginsys.php" method="post">

        <div class="form_header">
            <h2>Log In Form</h2>
            <p><span style="color: #FFA07A">ZEEPAY</span></p>
        </div>

    <div class="container">
            <label for="email">Email</label>
            <input type="email" class="form_input" id="email" name="email" oninput="validateEmail()" placeholder="studentname@ashesi.edu.gh"required>
        </div>
    
        <div class="container">
            <label for="password">Password</label>
            <input type="text" class="form_input"  id="password" name="password" oninput= "validatepassword()"placeholder="Your password..." required>
            </div>

    <div class="container">
            <input type="submit" class="form_submit" name="login" id ="login" value= "Submit"> 
             </div>
    <div class ="form_footer">
     <span style="color: #FFA07A">Don't have an account?</span> <a href="signup.php"><span style="color:#663399; block-size: 2px;">Sign Up</span></a>
    </div>
</div>
<script>src="form.js"</script>
</body>
</html>