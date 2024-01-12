<?php
    $pagetitle = 'Contact';
    include 'src/includes/header.php';
?>
    <main>
        <div class="contactpagegrid">
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
            <div class="contactinfo">
                <div class="iconsdiv">
                    <i class="fa-solid fa-location-dot icons"></i>
                    <a class="textlink" href="https://www.google.com/maps/place/Kloosterveen/" target="_blank"><h3 class="socialtext">Kloosterveen, Assen</h3></a>
                </div>
                <div class="iconsdiv">
                    <i class="fa-solid fa-phone icons"></i>
                    <a class="textlink" href="tel:0616339892"><h3 class="socialtext">06 16339892</h3></a>
                </div>
                <div class="iconsdiv">
                    <i class="fa-solid fa-envelope icons"></i>
                    <a class="textlink" href="mailto:robinvanspijker@gmail.com" target="_blank"><h3 class="socialtext">robinvanspijker@gmail.com</h3></a>
                </div>
                <div class="socialdiv">
                    <a class="sociallink" href="https://discords.com/bio/p/rvspijker" target="_blank">
                        <div class="socialbutton">
                            <i class="fa-brands fa-discord socialicon"></i>
                        </div>
                    </a>
                    <a class="sociallink" href="https://github.com/rvspijker" target="_blank">
                        <div class="socialbutton">
                            <i class="fa-brands fa-github socialicon"></i>
                        </div>
                    </a>
                    <a class="sociallink" href="https://wa.me/31616339892" target="_blank">
                        <div class="socialbutton">
                            <i class="fa-brands fa-whatsapp socialicon"></i>
                        </div>
                    </a>
                    <a class="sociallink" href="https://github.com/rvspijker" target="_blank">
                        <div class="socialbutton">
                            <i class="fa-brands fa-github socialicon"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>  
    </main>
</body>
</html>