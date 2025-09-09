<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conflict Mediation Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">
</head>

<body>
    <div class="navbar"id="mynavbar">

            <nav>
                <ul>
                    <li><a class="menu" href="https://cms-consulting.co.uk">Home</a></li>
                </ul>
                <a class="logo" href="#top"><img src="img/CMS logo .jpg" alt="Conflict Mediation Solutions"></a>
            </nav>

        </div>
        <div class="bright-back">
        
        <p><i>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($_POST["honeypot"])) {

                die("Spam-Formularübermittlung erkannt.");
                }   

                $name = $_POST["name"];
                $email = $_POST["email"];
                $subject = $_POST["subject"];
                $message = $_POST["message"];

                mail("cmswebmail@proton.me", $subject, $message, "From:" . $email);
                    
                echo "Thank you, $name, for reaching out to us!";
            } else {
                echo "Please try again";
            }
        ?>
        </i></p>
        <a href="https://cms-consulting.co.uk">Go back</a>
        
        </div>


</body>



</html>