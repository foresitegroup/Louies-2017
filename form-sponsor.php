<?php
$salt = "LouiesSponsorForm";

if ($_POST['confirmationCAP'] == "") {
  if (
      $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
     )
  {
    $SendTo = "contactus@louieslast.org";
    $Subject = "Sponsor Enquery";
    $Headers = "From: Contact Form <sponsors@louieslast.org>\r\n";

    if ($_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
    $From .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
    
    if ($_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
      $Message .= "Name: " . $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    if ($_POST[md5('organization' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
      $Message .= "\nOrganization / Company: " . $_POST[md5('organization' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    if ($_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
      $Message .= "\nEmail: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    if ($_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
      $Message .= "\nPhone: " . $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])];

    if ($_POST['interest'] != "")
      $Message .= "\n\nWe are interested in: " . implode(", ", $_POST['interest']);

    if ($_POST['comment'] != "")
      $Message .= "\n\nComment\n" . $_POST['comment'] . "\n";

    $Message = stripslashes($Message);
  
    mail($SendTo, $Subject, $Message, $Headers);

    $feedback = "Thank you for your interest in sponsoring Louie's Last Regatta. We will contact you soon.";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 200 OK");
      echo $feedback;
    }
  } else {
    $feedback = "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 500 Internal Server Error");
      echo $feedback;
    }
  }
}
?>