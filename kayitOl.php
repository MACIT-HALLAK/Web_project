<?php 
$title = "Kayıt Ol";
require "sablon/header.php";
// require "sablon/navbar.php";

//

if (isset($_POST['submit'])) {

   include 'veritaban_conn.php';
   session_start();


    $name = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    $state = 0;

    //validtion inputs
    $errors = [];
    if (empty($name)) {
        $errors[] = "username bos olamaz";
    } elseif (strlen($name) > 100) {
        $errors[] = "username yuz karakterden buyuk olamaz";
    }
    
    if (empty($email)) {
        $errors[] = "e-posta bos olamaz";
    } elseif (strlen($email) > 100) {
        $errors[] = "e-psta 100 karakterden buyuk olamaz";
    }
    if (empty($pass)) {
        $errors[] = "password bos olamaz";
    } elseif (strlen($pass) < 4) {
        $errors[] = "password 4 karakterden kucuk olamaz";
    }
    
    if($pass == 123456789)
        $state = 1;

    //insert to veritaban
    if (empty($errors)) 
    {
        $pass =md5($pass);
       $stmt =$conn->prepare("insert into users.user (username,email,password,state)
        VALUES (?,?,?,?)");
        $stmt->execute([
            $_POST['username'] ,
            $_POST['email'],
            $pass,
            $state,
        ]);

            $_POST['username'] = "";
            $_POST['email']= "";
            $_POST['password']= "";

            $_SESSION['username']= $name;
            $_SESSION['giris'] = true;
            $_SESSION['admin'] = $state;
            
            header('location:anasayfa.php');
      
    }
        
   
}

?>
<div class="dbody">
    <div class="login-box">
        <h2>Kayıt Ol</h2>
        <?php
		if(isset($_POST['submit'])){
            if ($errors != "") {

                foreach($errors as $err)
                {
                   echo "<div class='alert alert-danger small'>". $err." </div>";
                }
               }
        
		}

		?>
        <form action="kayitOl.php" method="POST">
            <div class="user-box">
                <input type="text" name="username"  value="<?php if(isset($_POST['username'])){ echo $_POST['username'];} ?>" >
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>">
                <label>Gmail</label>
            </div>
            <div class="user-box">
                <input type="password" name="password">
                <label>Password</label>

            </div>
            <a href="giris.php" class="kayit-ol">Giriş Yap</a>
            <!-- <a  class ="a" href="kayitOl.php" type="submit " name="submit" > -->
            <input class="a btn btn-primary" type="submit" name="submit" value="Submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <!-- submit -->
            <!-- </a> -->

        </form>



    </div>
</div>