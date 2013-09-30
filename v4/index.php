<html>
    <title>This is a cool Bugfiler</title>
    
    
    <body>
        <h1> Please submit your bug down there, fill in whatever you can</h1>
        <form enctype="multipart/form-data" action="processing.php" method="POST"> <br />
            Screenshot waehlen: <input name="screene" type="file" required><br />
            Prioritaet: 1 <input required name="prio" type="range" min="0" max="10" step="1" value="4"> 10<br /> 
            Bug-Typ: <select required name="type"><option>Fish-Bug</option>
                <option>Vogel-Bug</option></select><br />
            Rueckruf erforderlich: <input  type="checkbox" name="callback"><br />
            Reproduzierbar: Ja <input value='yes' type="radio" name="rep"> Nein 
                <input value="no" type="radio" name="rep"> <br />
            Datum: <input required type="datetime" name="datum"><br />
            Password: <input required type="password" name="password"> <br />
            e-Mail: <input required type="email" name="email"><br />
            Youre Webside: <input required type="website" name="web"> <br />
        
            <?php
            require_once('recaptchalib.php');
$publickey = "6LcrK-gSAAAAALZvh9e6zHja0K9DlqZ_zsfdAcHQ"; // you got this from the signup page
echo recaptcha_get_html($publickey); 
?>
            <input type="submit" name="submit" value="Send Bug" />

            </form>
    </body>
</html>

text = 'Password: '.$_POST['password'].'\n Prio:'.$_POST['prio'].'\n Type: '.$_POST['type'].'\n Callback: '.$_POST['callback']
.'\n Reproduzierbar: $_POST;