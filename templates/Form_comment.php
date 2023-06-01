<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>

<form method="post" action="../public/index.php?route=<?php echo $route; ?>&articleId=<?php echo htmlspecialchars($article->getId()); ?>">
    <label for="pseudo">Pseudo</label><br>
    <input type="text" id="pseudo" name="pseudo" value="<?php echo isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
    <?php echo isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
    <label for="content">Message</label><br>
    <textarea id="content" name="content"><?php echo isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
    <?php echo isset($errors['content']) ? $errors['content'] : ''; ?>
    <input type="submit" value="<?php echo $submit; ?>" id="submit" name="submit">
</form>
