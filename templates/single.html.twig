<?php $this->title ="Article"; ?>
<div class="text-center"><a class="margin bouton4" href="../public/index.php">Accueil</a></div>
<article class="card_home_border card_home_width card_home_color">
    <h2><?php echo htmlspecialchars($article->getTitle());?></h2>
    <p><?php echo strip_tags($article->getContent(), '<br><strong><em><p><iframe>');?></p>
    <p><?php echo htmlspecialchars($article->getAuthor());?></p>
    <p>Créé le : <?php echo htmlspecialchars($article->getCreatedAt());?></p>
</article>
<?php if($this->session->get('role') === 'admin') { ?>
    <div class='actions'>
        <a class="bouton4" href="../public/index.php?route=editArticle&articleId=<?php echo $article->getId(); ?>">Modifier</a>
        <a class="bouton4" href="../public/index.php?route=deleteArticle&articleId=<?php echo $article->getId(); ?>">Supprimer</a>
    </div>
<?php } ?>

<div id="comments" class="text-left" style="margin-left: 50px;">
    <?php if($this->session->get('role') === 'user' OR $this->session->get('role') === 'admin') {?>
        <h3>Ajouter un commentaire</h3> 
        <?php include 'Form_comment.php'; ?> 
    <?php }?>
    <h3>Commentaires</h3>
    <?php
    foreach($allComments as $comment){
        if($comment->getStatus() == 1 && $comment->isFlag() == 0) {?>
                <div class="card_home_border card_home_color">
                <h4><?php echo htmlspecialchars($comment->getPseudo());?></h4>
                <p><?php echo htmlspecialchars($comment->getContent());?></p>
                <p>Posté le <?php echo htmlspecialchars($comment->getCreatedAt());?></p>
                <?php
                if($comment->isFlag()) {?>
                    <p>Ce commentaire a déjà été signalé</p>
                <?php } 
                elseif ($this->session->get('pseudo') == $comment->getPseudo() OR $this->session->get('role') === 'admin') { ?>
                    <p><a class="bouton4" href="../public/index.php?route=flagComment&commentId=<?php echo $comment->getId(); ?>">Signaler le commentaire</a></p>
                    <p><a class="bouton4" href="../public/index.php?route=deleteComment&commentId=<?php echo $comment->getId(); ?>">Supprimer le commentaire</a></p>
                <?php }
                else { ?>
                    <p><a class="bouton4" href="../public/index.php?route=flagComment&commentId=<?php echo $comment->getId(); ?>">Signaler le commentaire</a></p>
                <?php } ?>
                </div>
        <?php }
    }
        ;?> 
</div>
<a class="margin bouton4" href="../public/index.php">Accueil</a>
