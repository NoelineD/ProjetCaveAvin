<main class="container">
    <p class="h2">Entrer vos informations</p>
    <br>
    <form method="post" action="index.php?entite=user&action=create">
        <label for="nom">Votre nom : </label>
        <input type="text" id="nom" name="nom">
        <br>
        <label for="prenom">Votre prénom : </label>
        <input type="text" id="prenom" name="prenom">
        <br>
        <label for="email">Votre mail : </label>
        <input type="text" id="email" name="email">
        <br>
        <label for="id_psw">Votre mot de passe : </label>
        <input type="password" id="password" name="password">
        <br>
        <button>Envoyer</button>
    </form>
</main>