<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benue | Fashion Hube</title>

    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/forms.css">
</head>
<body>
    

    <div class="container">

        <form action="#">

            <div class="row">
                <h4>Register Now</h4>

                <div class="input-group input-group-icon">
                    <input type="text" placeholder="Full Name">
                    <div class="input-icon"><i class="fa-solid fa-user"></i></div>
                </div>

                <div class="input-group input-group-icon">
                    <input type="email" placeholder="Email Address">
                    <div class="input-icon"><i class="fa-solid fa-envelope"></i></div>
                </div>

                <div class="input-group input-group-icon">
                    <input type="password" placeholder="Password">
                    <div class="input-icon"><i class="fa-solid fa-key"></i></div>
                </div>

            </div>

            <div class="row">

                <div class="col-half">
                    <h4>Gender</h4>

                  <div class="input-group">

                    <select name="gender" id="">
                        <option selected>choose gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>

                  </div>

                </div>

            </div>


            <div class="row">
                <h4>Terms and Conditions</h4>
                <div class="input-group">
                  <input id="terms" type="checkbox"/>
                  <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the <a href="">privacy policy.</a></label>
                </div>
            </div>

            <div class="row">

                <div class="input-group">  

                    <h4>Already have an account?</h4>

                </div>
                
            </div> 

            <div class="row">

                <div class="input-group">

                    <button type="submit"><a href="login.html">Login</a></button>
                    <button type="submit"><a href="">Continue</a></button>

                </div>
                
            </div> 
            
        </form>

    </div>


</body>
</html>