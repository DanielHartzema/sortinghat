<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://use.fontawesome.com/1a4d35d4d9.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Sorting Hat</title>
    <?php include 'assets/includes/connect.php'; ?>
</head>
<body>
  <?php
    include 'assets/includes/nav.php';
  ?>
  <a id="button"></a>

  <div class="parallaxKlein">
      <div class="TekstMiddenKlein">
          <h1 class="groot">Sign Up</h1>
      </div>
  </div>

  <div class="tekst" id="contact">
    <section id="contact">
    <?php
    include 'assets/includes/register.php';
    ?>
    <br>
    <div class="wrapper">
        <p>Please fill in this form to create an account.</p>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label>First name</label>
                <input type="text" name="firstname" class="form-control" require>
            </div>
            <div>
                <label>Last name</label>
                <input type="text" name="lastname" class="form-control" require>
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" class="form-control" require>
            </div> 
            <div>
                <label>Age</label>
                <input type="number" name="age" class="form-control" require>
            </div> 
            <div>
                <label for="about">About</label>
                <textarea type="text" name="about" class="form-control" placeholder="Write something about yourself.." require></textarea>
            </div>     
            <div>
                <label>Password</label>
                <input type="password" name="password" class="form-control" require>
            </div>
            <div>
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" require>
            </div><br>
            <div>
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p class="already">Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
    </section>  
  </div>
  
  <script src="assets/js/script.js"></script>

  <?php
    include 'assets/includes/footer.php';
  ?>

</body>
</html> 