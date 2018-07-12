<div class="contact-wrapper">
<div class="contact-title">
    <h1>CONTACT</h1>
    <h2>Vraag maar raak!</h2>

</div>
<div class="contact-form">
    <form id="contact-form" action="index.php" method="post">
        <input type="text" name="contact_name" class="form-control" placeholder="Naam" required><br>
        <input type="email" name="contact_email" class="form-control" placeholder="Email" required><br>

        <textarea name="contact_message" id="text-area" class="form-control" rows="4" placeholder="Bericht" required></textarea><br>

        <button type="button" onclick="cancel()" class="form-control" id="submit">ANNULEER</button>
        <input type="submit" id="submit" name="contact_submit" class="form-control" value="VERSTUUR">

    </form>

</div>
</div>