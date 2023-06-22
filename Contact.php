<?php
$meta_Titlle = 'Contact';
$meta_Description = 'Formulaire dinformation';
include 'header.php';
?>


<form action="https://httpbin.org/post" method="post">

    <div>
        <h2>formulaire de renseignement</h2>
        <label for="Nom">Nom</label>
        <input type="text" id="Nom" name="le nom de l'utilisateur">
    </div>
    <div>
        <label for="Prenom">Prénom</label>
        <input type="text" id="Nom" name="le prénom de l'utilisateur">
    </div>
    <div>
        <label for="Adresse">Adresse</label>
        <input type="text" id="Adresse" name="l'adresse de l'utilisateur">
    </div>
    <div>
        <label for="mail">Mail</label>
        <input type="email" id="mail" name="le mail de l'utilisateur">
    </div>
    <div>
        <label for="msg">Message</label>
        <textarea id="msg" name="utilisateur message" name="le message de l'utilisateur"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>

<?php
include 'Footer.php';
?>



