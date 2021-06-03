<?php 
if(isset($_POST['submit'])){
    $to = "bhanukrishnaprasad3333@gmail.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $name ."\nSubject : ". $subject. " \nMassege:" . "\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "<script>alert('Your query is succesfully sent');
        window.location.href='contact.html';  
        </script>";
 
}
?>