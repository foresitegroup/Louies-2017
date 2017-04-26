<?php
include_once "inc/fintoozler.php";
$salt = "LouiesContactForm";

if ($_POST['confirmationCAP'] == "") {
  if (
      $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
     )
  {
    // If mailing list box is checked, add them
    if (isset($_POST['mailinglist'])) {
      $data = array(
        'email'  => $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])],
        'status' => 'subscribed'
      );
      
      function syncMailchimp($data) {
        global $apiKey, $listId;

        $memberId = md5(strtolower($data['email']));
        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

        $json = json_encode(array(
          'email_address' => $data['email'],
          'status'        => $data['status']
        ));

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $httpCode;
      }

      syncMailchimp($data);
    }
    
    // Create the email and send it
    $SendTo = "contactus@louieslast.org";
    $Subject = "Message From Contact Form";
    $Headers = "From: Contact Form <contact@louieslast.org>\r\n";

    if ($_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
    $Headers .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";

    $Message = "";
    
    if ($_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
      $Message .= "Name: " . $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    if ($_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
      $Message .= "\nEmail: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    if ($_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
      $Message .= "\nPhone: " . $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])];

    if (isset($_POST['interest']))
      $Message .= "\n\nI am interested in: " . implode(", ", $_POST['interest']);

    if ($_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
      $Message .= "\n\nQuestions, Comments, Message\n" . $_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

    $Message = stripslashes($Message);
  
    mail($SendTo, $Subject, $Message, $Headers);

    $feedback = "Thank you for your interest in Louie's Last Regatta. We will contact you soon.";

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