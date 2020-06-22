<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porąbani - sprzedaż drewna</title>
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
    <div class="picture">
        <img src="images/bgc.jpg"> </div>
    <header>
        <div class="home">
            <a href="index.html">Porąbani</a>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="about.html">O nas</a></li>
                <li><a href="contact.html">Kontakt</a></li>

            </ul>
        </nav>
    </header>
    <section>
        <div class="forCon">
    <h1>Masz pytania? Napisz do nas!</h1>
</div>
        <div class="contactForm">
            <form class="contact-form" action="contactform.php" method="POST"></form>
            <input class="form-control" type="text" name="name" placeholder="Imie i Nazwisko">
            <input class="form-control" type="text" name="mail" placeholder="Twój e-mail">
            <input class="form-control" type="text" name="subject" placeholder="Temat">
            <textarea name="message" class="form-control" placeholder="Wiadomość"></textarea>
            <input type="submit" class="form-controlSubmit" value="Wyślij wiadomość">

        </div>
    </section>
    <footer>Adrian Tokarz © 2020</footer>

</body>

</html>