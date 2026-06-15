
<?php
If($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $phone = htmlspecialchars($_POST["phone"]);
  $message = htmlspecialchars($_POST["message"]);
  
  $to = "amonwangila@gmail.com"; //  Put Amon or Nehemiah’s Gmail here
  $subject = "BOBTVWebsite:New message from $name";
  $body = "You got a new message:\n\nName: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";
  $headers = "From: noreply@bobtvmedia.epizy.com\r\nReply-To: $email";
  
  If(mail($to, $subject, $body, $headers)) {
    Echo "<script>alert('Message sent! We will contact you soon.'); Window.location='index.html#contact';</script>";
  } else {
    Echo "<script>alert('Oops, sending failed. Please WhatsApp 0717907438 instead.'); window.location=index.html#contact';</script>";
  }
} else {
  Header("Location:index.html");
}
?>

