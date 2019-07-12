<?php

if (isset($_POST['submit'])) {
$name = $_POST['full'];
$mailFrom = $_POST['mejl'];
$message = $_POST['area'];

$mailTo = "yukajunior007@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}