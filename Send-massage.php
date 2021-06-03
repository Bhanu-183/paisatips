<?php
if (isset($_POST['submit'])) {
    $to = "pradeepparmar8949@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = " Name: " . $name . "\nSubject : " . $subject . " \nMassege:" . "\n" . $_POST['message'];
    $headers = "From:" . $from;
    "From:" . $to;
    $mail_status =  mail($to, $subject, $message, $headers);

    if ($mail_status) {
        echo '<script>swal({
        title: "Message Sent",
        text: "Your message can be sent",
        type: "success"
    }).then(function() {
        window.location = "contact.html";
    });
     </script>';
    } else {
        echo '<script>swal("Message Not Sent");</script>';
    }
}
