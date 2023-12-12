


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../assets/img/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
<style>
          /* Background image*/
        body{
          background-color: #000000;
        }
        .background{
          position: relative;
          z-index: -1;
          position: fixed;
          width: 100%;
        }
        /*  LOGO*/
        .logo{
          width: 8rem;
          z-index: 1;
          position: fixed;
        }

        /*  LOGIN-FORM*/
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
          width: 360px;
          padding: 8% 0 0;
          margin: auto;
          position: relative;
          right:27rem;
          top:3rem;
        }
        .login-text{
          color: #c00808;
          font-size:xx-large ;
          font-weight: bolder;
          margin-bottom: 4rem;
        }
        .form {
          position: relative;
          z-index: 1;
          background: #FFFFFF;
          max-width: 360px;
          margin: 0 auto 100px;
          padding: 45px;
          text-align: center;
          box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
          border-radius: 1rem;
          height: 27rem;
        }
        .form input {
          font-family: "Roboto", sans-serif;
          outline: 0;
          background: #f2f2f2;
          width: 100%;
          border: 0;
          margin: 0 0 15px;
          padding: 15px;
          box-sizing: border-box;
          font-size: 14px;
        }
        .form button {
          font-family: "Roboto", sans-serif;
          text-transform: uppercase;
          outline: 0;
          background:#c00808;
          width: 100%;
          border: 0;
          padding: 15px;
          color: #FFFFFF;
          font-size: 14px;
          -webkit-transition: all 0.3 ease;
          transition: all 0.3 ease;
          cursor: pointer;
        }
        .form .register-form {
          display: none;
        }
        .container {
          position: relative;
          z-index: 1;
          max-width: 300px;
          margin: 0 auto;
        }
        .container:before, .container:after {
          content: "";
          display: block;
          clear: both;
        }
        .container .info {
          margin: 50px auto;
          text-align: center;
        }
        .container .info h1 {
          margin: 0 0 15px;
          padding: 0;
          font-size: 36px;
          font-weight: 300;
          color: #1a1a1a;
        }
        .container .info span {
          color: #4d4d4d;
          font-size: 12px;
        }
        .container .info span a {
          color: #000000;
          text-decoration: none;
        }
        .container .info span .fa {
          color: #EF3B3A;
        }

</style>
<body class="">
<img src="../assets/img/Logo.png" class="rounded float-start logo" alt="...">
    <img src="../assets/img/college.jpg" class="img-fluid- background" alt="...">
   
    <!--LOGIN FORM-->
   <div class="login-page">
    <div class="form">
        <p class="login-text">Log In</p>
      <form class="register-form">
        <input type="text" placeholder="name"/>
        <input type="password" placeholder="password"/>
        <input type="text" placeholder="email address"/>
        <button>create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>
      <form  class="login-form" role="form text-left" method="POST" action="logincode.php">
        <input type="text" placeholder="username"  aria-label="Email" name="username" aria-describedby="email-addon" required />
        <input type="password" placeholder="password" aria-label="Password" name="password" aria-describedby="password-addon" required/>
        <div>
           <!-- <?php echo $message; ?> -->
        </div>
        <button type="submit" name="sub" value="Login" > Login</button>
      </form>
    </div>
  </div>


    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
     <?php include('../include/footer.html'); ?>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  </main>
 
</body>

</html>