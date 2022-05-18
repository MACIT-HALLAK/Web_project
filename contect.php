<?php require "sablon/header.php";
require "sablon/navbar.php";

if (isset($_POST['submit'])) {

    // ini_set('SMTP','myserver');
    // ini_set('smtp_port',25);

    // $to = 'hlaqm8169@gmail.com'; // dark masteryo
    // $subject = $_POST['name']; // عنوان الرساله من dark masteryo
    // $message = $_POST['message']; //الرساله بتنسيق html من dark masteryo
    // $headers = "From:" . $_POST['email']  . "\r\n";
    // $esend = mail($to, $subject, $message, $headers);
    // if ($esend) {
    //     echo "تم ارسال الرساله بنجاح";
    // } else {
    //     echo "للأسف لم يتم ارسال الرساله";
    // }
}
?>
<div class="container-iletisim ">
    <h2>Write Us</h2>
    <form action="contect.php" method="POST">
        <input type="email" name="email" id="email" placeholder="E-postanızı giriniz">
        <input type="text" name="name" id="name" placeholder="İsminizi girinizi">
        <textarea name="message" id="message" cols="30" rows="10" placeholder="mesajinizi buraya yazınız"></textarea>
        <input type="submit" name="submit" value="Göndre">
    </form>
</div>
<?php require "sablon/footer.php" ?>