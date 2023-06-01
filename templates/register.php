<?php $this->title = "Inscription"; ?>
<h3>Inscription</h3>
<div>
    <form method="post" action="../public/index.php?route=register">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?php echo isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
        <?php echo isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <?php echo isset($errors['password']) ? $errors['password'] : ''; ?>
        <input type="submit" value="Inscription" id="submit" name="submit">
    </form>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>
