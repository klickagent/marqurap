<?php
    /// Validate input
    // Check if password matches
    if ($_POST['password'] != 'geheim' ) {
      die('Password mismatch');
    }

    // Check the rest
    if (empty($_POST['name'])  || empty($_POST['email']) ||
        empty($_POST['web'])   || empty($_POST['prio'])  ||
        empty($_POST['date'])  || empty($_POST['repro'])  ||
        empty($_POST['text']) ) 
    {
        die("Input validation failed");
    }

    // Fill POST infos into key-value store
    $entry = array(
        'name'     => trim($_POST['name']),
        'email'    => trim($_POST['email']),
        'web'      => trim($_POST['web']),
        'prio'     => $_POST['prio'],
        'date'     => $_POST['date'],
        //'bug'      => $_POST['bugList'],
        //'callback' => $_POST['callback'],
        'repro'    => $_POST['repro'],
        'report'   => $_POST['text'],
    );

    //// Store input
    // Create directory
    $base_dir = "./uploads";
    $user_dir = $base_dir . "/" . $entry['name'][0];

    if(! is_dir($base_dir)) {
	$old_umask = umask(0);
        mkdir($base_dir, 0777);
	umask($old_umask);
    }

    if(! is_dir($user_dir)) {
	$old_umask = umask(0);
	
        mkdir($user_dir, 0777);
	umask($old_umask);

    }

    // Generate mostly unique name
    $file = $entry['name'] . '_' . time() . '.txt';
    $fileHandler = fopen($user_dir . "/" . $file, 'w');

    // Create/Append to file
    foreach ($entry as $key => $value) {
        fwrite($fileHandler, "$key: $value\n");
    }
    fclose($fileHandler);

    // Store picture
    $upload_dir = $user_dir;
    $upload_file = $upload_dir . "/" . $_FILES['userfile']['name'];

    if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file)) {
            die('Failed to upload file :(');               
    }

    /// Send email
    /// using PHPMailer from https://github.com/PHPMailer/PHPMailer
    require('class.phpmailer.php');

    $mail = new PHPMailer();
     
    $mail->From     = 'bug@zhaw.ch';
    $mail->AddAddress($entry['email']);
    $mail->Subject  = 'Neuer Bug Eintrag';
    $mail->AddEmbeddedImage($upload_file, 'screenshot', 'screenshot');
    $mail->Body     = 'Es gibt einen neuen Bug-Report: \n\n' . 
                      'Name: ' . $entry['name'] . '\n\n' .
                      //'Type: ' . $entry['type'] . '\n\n' .
                      //$cb ? ('Rückruf: ' . $tel) : 'Kein Rückruf' . '\n\n' .
                      'EMail: ' . $entry['email'] . '\n\n' .
                      'Web: ' . $entry['web'] . '\n\n' .
                      'Date: ' . $entry['date']. '\n\n' .
                      'Prio: ' . $entry['prio'] . '\n\n' .
                      'Text: ' . $entry['report'];
                      
    if(!$mail->Send()) {
            die('Failed to send Email :(');
    } else {
            $msg = 'Success!';
    }


?>
