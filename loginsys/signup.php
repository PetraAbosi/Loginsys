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
    <form class="form" action="process.php" method="post">
        <div class="form_header">
            <h2>Sign Up Form</h2>
            <p><span style="color: #FFA07A">Become part of the holistic community!</span></p>
        </div>        
    <div class="container">
        <label for="firstName">First Name</label>
        <input type="text" class="form_input" id="fName" name="fname" oninput = "validateFirstName();" placeholder="Your first name..." required>
    </div>
    <div class="container">
        <label for="middleName">Middle Name</label>
        <input type="text" class="form_input"  id="midname" name="midname" oninput= "validateMiddleName()"placeholder="Your middle name..." required>
        </div>
    <div class="container">
        <label for="lastName">Last Name</label>
        <input type="text" class="form_input"  id="lastName" name="lname" oninput= "validateLastName()"placeholder="Your last name..." required>
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
            <label for="password2">Confirm Password</label>
            <input type="text" class="form_input"  id="password2" name="password2" oninput= "validatepassword()"placeholder="Your password again..." required>
            </div>        
            <div class="container">
                <p>Gender</p>
                <input type="radio" id="male" name="gender" value="M" required>
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="F" required>
            <label for="female">Female</label><br>
            </div>
    <div class="container">
            <input type="submit" class="form_submit" name="submit" id ="submit" value= "Submit"> 
             </div>
            </div>
            <script>src="form.js"</script>
    
</body>
</html>