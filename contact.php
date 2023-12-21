<?php
    $pagetitle = 'Contact';
    include 'src/includes/header.php';
?>
    <main>
        <form class="contactform" action="src/formhandlers/mail.php" method="POST">
            <h1 class="formtitle">Contact Me</h1>
            <label for="name">Name</label>
            <input class="contactinput" id="name" type="text" name="name">
            <label for="email">Email</label>
            <input class="contactinput" id="email" type="email" name="email">
            <label for="message">Message</label>
            <textarea class="message contactinput" id="message" type="text" name="msg"></textarea>
            <button class="contactsubmit" type="submit"><h2>Submit</h2></button>
        </form>
    </main>
</body>
</html>