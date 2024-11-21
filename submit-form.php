<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Submit</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">
    </head>

    <body>

        <!-- <?php
            if($_POST)['from']!="" and $_POST['subject']!="" and $_POST['message']!="" {
            $to = "c.birkners@gmx.de";
            $subject = $_POST['subject'];
            $from = "From: ";
            $from .= $_POST['from'];
            $from .= " <";
            $from .= $_POST ['mail'];
            $from .= ">\n";
            $from .= "Reply-To: ";
            $from .= $_POST['mail'];
            $from .= "Content-Type: text/html\n";
            $text = $_POST ['message'];

            mail($to, $subject, $text, $from);
            echo "Vielen Dank";
            } else {
                echo "Please";
            }
        ?>  -->

        <div class="navbar"id="mynavbar">

        <nav>
                <ul>
                    <li><a class="burger" href="">Menu</a></li>
                    <li><a class="menu" href="#">About</a></li>
                    <li><a class="menu" href="#services">Services</a></li>
                    <li><a class="menu" href="#publications">Publications</a></li>
                    <li><a class="menu" href="#sit">Syria in Transition</a></li>
                    <li><a class="menu" href="#testimonials">Testimonials</a></li>
                    <li><a class="menu" href="#contact">Contact</a></li>
                </ul>
                <a class="logo" href="#top"><img src="img/CMS logo .jpg" alt="Conflict Mediation Solutions"></a>
            </nav>
        </div>
    
        <div class="bright-back">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $subject = $_POST["subject"];
                $email = $_POST["email"];
                $message = $_POST["message"];
                
                // Send the email (you may use a library like PHPMailer or a built-in function like mail())
                // For example:
                mail("c.birkners@gmx.de", $subject, $message, "From:" . $email);
                
                echo "Thank you, $name, for reaching out to us! We will get back to you as soon as possible.";
            } else {
                header("Location: index.html"); // Redirect to the contact form if accessed directly
            }
            ?>
        </div>


    </body>

</html>

