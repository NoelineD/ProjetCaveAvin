<main class="container">
    <p class="h2">Merci de saisir vos informations de connexion :</p>
    <br>
    <form method="post" action="index.php?entite=user&action=verif">
        <label for="email">Votre identifiant : </label>
        <input type="text" id="email" name="email" value="<?= $email?>">
        <br>
        <label for="password">Votre mot de passe : </label>
        <input type="password" id="password" name="password">
        <br>
        <button>Envoyer</button>
        <?= '<span class="erreur">'.$erreur.'</span>' ?>
    </form>
</main>