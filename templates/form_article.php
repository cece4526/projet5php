<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>

<form method="post" action="../public/index.php?route=<?php echo $route; ?>">
    <label for="title">Titre</label><br>
    <input type="text" id="title" name="title" value="<?php echo isset($post) ? htmlspecialchars($post->get('title')): ''; ?>"><br>
    <?php echo isset($errors['title']) ? $errors['title'] : ''; ?>
    <label for="content">Contenu</label><br>
    <textarea id="contentAddArtticle" name="content"><?php echo isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
    <?php echo isset($errors['content']) ? $errors['content'] : ''; ?>
    <input type="submit" value="<?php echo $submit; ?>" id="submit" name="submit">
</form>
