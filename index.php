<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textrovert</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
</head>
<body background="image.png" >
    <h2 class="top">The World for Introverts!</h2>
    <div ><a href="hlp.txt">Help!</a> </div>
    <div> <a href="https://forms.gle/Q4cxkKVqTwnZt9UC7">Feedback</a> </div>
    <div class="wrapper">
        <section class="form signup">
            <header>Textrovert</header>
            <form action="#" enctype="multiple/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                
                <div class="field">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Last Name" required>
                </div>
            </div>
                <div class="field">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Enter your email Name" required>
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password"  placeholder="Password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field">
                    <label>Select image</label>
                    <input type="file" name ="image" required>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already have an account? <a href="login.php">Signin now</a></div>
        </section>
    </div>
    <script src="javascript/password.js"></script>
    <script src="javascript/signup.js"></script>
    
</body>
</html>