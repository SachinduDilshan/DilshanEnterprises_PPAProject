<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/account.css">
    <title> Login Page | Sign-up Page</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
        <form action="Handlers/userhandler.php" method="post">
              <input type="text" name="fname" placeholder="Full Name" required/>
      
              <input type="text" name="cnumber" placeholder="Mobile Phone Number" required/>

              <input type="text" name="shopname" placeholder="Name of the Shop" />

              <input type="text" name="address" placeholder="Your Address" />
      
              <input type="email" name="email" placeholder="Enter your email..." />
      
              <input type="password" name="password" placeholder="Password" />
  
              <input type="password" name= "cpassword" placeholder="Confirm The Password" /><br><br>
              
                <button class="reg-btn">Register</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Log In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>

                </div>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <p style="color: azure; font-style:Italic;">I am agree to the <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
            </p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Customer!</h1>
                    <p>Please register with your details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/account.js"></script>
</body>

</html>