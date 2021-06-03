<?php
if (isset($_POST['submit'])) {
	$to = "bhanukrishnaprasad3333@gmail.com";
	$from = $_POST['email'];
	$name = $_POST['name'];
	$number = $_POST['number'];
	$star = $_POST['star'];
	$subject = "Review";
	$message = $name . "\n number: " . $number . "\nStar:" . $star . "\nReview:" . $_POST['review'];
	$headers = "From:" . $from;
	$headers2 = "From:" . $to;
	mail($to, $subject, $message, $headers);
	mail($from, $subject2, $message2, $headers2);
	echo "<script>alert('Your review has been sucessfully sent');
        window.location.href='index.html';  
        </script>";
}
