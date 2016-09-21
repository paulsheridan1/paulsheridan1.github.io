<!doctype html>
<html>

<head>
    <title>Anti-bullying</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">
</head>

<body>
    <div class="allbutfooter">
    <div class="accent" id="left"></div>
    <div class="accent" id="right"></div>
    <div class="container">
    <header>
        <h1 class="title">Anti-Bullying</h1>
    </header>
    <nav class="animated slideInDown">
        <ul>
            <a href="index.html">
                <li>Home</li>
            </a>
            <a href="page2.html">
                <li>More Information</li>
            </a>
            <a href="page3.html">
                <li>Help Line</li>
            </a>
            <a href="page4.html">
                <li>Gallery</li>
            </a>
            <a href="page5.php" class="active">
                <li>Contact Us</li>
            </a>
        </ul>
    </nav>
    <section class="main-content">
        <form method="get" action="page5.php">
        
            <label>Name</label>
            <input name="name" placeholder="e.g. John Smith">

            <label>Email</label>
            <input name="email" type="email" placeholder="e.g. john@example.com">

            <label>Message</label>
            <textarea name="message" placeholder="Message Here..."></textarea>

            <input id="submit" name="submit" type="submit" value="Submit">

        </form>
        
        <?php
            $name = (isset($_GET['name']) ? $_GET['name'] : null);
            $email = (isset($_GET['email']) ? $_GET['email'] : null);
            $message = (isset($_GET['message']) ? $_GET['message'] : null);
            $from = 'From: Bullying Contact'; 
            $to = 'EMAILGOESHERE'; 
            $subject = 'Hello';

            $body = "From: $name\n E-Mail: $email\n Message:\n $message";
        ?>        

       <?php 
        if (isset($_GET['submit']) ? $_GET['submit'] : null) {
            if (mail ($to, $subject, $body, $from)) { 
                echo '<p>Your message has been sent!</p>';
            } else { 
                echo '<p>Something went wrong, go back and try again!</p>'; 
            }
        }
        ?>
    </section>
    </div>
    </div>
    <footer>
        <p>Copyright &copy; 2015. Designed by Paul Sheridan</p>
    </footer>
    
    
</body>

</html>