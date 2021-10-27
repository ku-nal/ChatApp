<?php
session_start();
if(isset($_SESSION['unique_id'])){
  header("location: users.php");
}
?>

<?php include_once "header.php" ?>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#">
        <div class="error-txt"></div>
          
        <div class="field">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="Submit" value="Continue to Chat">
        </div>
        </form>
        <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
      </section>
    </div>
    <script src="Javascript/pass-show-hide.js"></script>
    <script src="Javascript/login.js"></script>
    </body>
</html>
            
