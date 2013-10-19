<html>
    <body>
<?php





    
    
                require_once('recaptchalib.php');

    
    
    $privatekey = "6LcrK-gSAAAAAJBlQGVwvc3Q1Fu7v-4pW_ZqW5JP";
    $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

    if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
        echo 'wrong captcha <br />';
        echo '<a href="javascript:history.back()">Back</a>';
    } else {
        echo 'processing<br />';
        $dir = '/var/www/upload';
        $fname = $_POST['email'].'_'.$_POST['web'].'_'.rand(1,100000);
        mkdir($dir, 7777);
        $text = 'Password: '.$_POST['password'].'--- Prio:'.$_POST['prio'].'--- Type: '.$_POST['type'].'--- Callback: '.$_POST['callback'].'
            --- Reproduzierbar: '.$_POST['rep'].'--- Date:'.$_POST['datum'].'---';        
        file_put_contents($dir.'/'.$fname.'.txt', $text);
        $info = pathinfo($_FILES['screene']['name']);
        $ext = $info['extension']; // get the extension of the file
        $newname = $fname.'.'.$ext;
        $target = $dir."/".$newname;
        move_uploaded_file( $_FILES['screene']['tmp_name'], $target);
        echo '<a href="javascript:history.back()">Back</a>';
        // Your code here to handle a successful verification
    }


 ?></body>
</html>
