<?php $this->title = 'Administration'; ?>
p
<div class="center">
    <div class="content_center">
        <h3>Administration</h3>
        <a class="margin bouton4" href="../public/index.php">Accueil</a>
        <div class="message">
            <p class="message_text">
                <?php echo $this->session->show('add_article');?>
                <?php echo $this->session->show('edit_article'); ?>
                <?php echo $this->session->show('delete_article'); ?>
                <?php echo $this->session->show('add_comment'); ?>
                <?php echo $this->session->show('flag_comment'); ?>
                <?php echo $this->session->show('delete_comment'); ?>
                <?php echo $this->session->show('delete_user'); ?>
                <?php echo $this->session->show('validate_comment'); ?>
            </p>
        </div>
        <h4>Articles</h4>
        <a class="margin bouton4" href="../public/index.php?route=addArticle">Nouvel article</a>
        <table class="table-responsive">
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Pseudo</th>
                <th scope="row">Contenu</th>
                <th scope="row">Auteur</th>
                <th scope="row">Date</th>
                <th scope="row">Actions</th>
            </tr>
            <?php
            foreach ($articles as $article)
            {
                ?>
                <tr>
                    <td scope="col"><?php echo htmlspecialchars($article->getId());?></td>
                    <td scope="col"><?php echo htmlspecialchars($article->getTitle());?></a></td>
                    <td scope="col"><?php echo substr(strip_tags($article->getContent()), 0, 150);?></td>
                    <td scope="col"><?php echo htmlspecialchars($article->getAuthor());?></td>
                    <td scope="col">Créé le : <?php echo htmlspecialchars($article->getCreatedAt());?></td>
                    <td scope="col">
                        <a href="../public/index.php?route=editArticle&articleId=<?php echo $article->getId(); ?>">Modifier</a>
                        <a href="../public/index.php?route=deleteArticle&articleId=<?php echo $article->getId(); ?>">Supprimer</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

        <h2>Commentaires signalés</h2>
        <table class="table-responsive">
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Pseudo</th>
                <th scope="row">Message</th>
                <th scope="row">Date</th>
                <th scope="row">Actions</th>
            </tr>
            <?php
            foreach ($comments as $comment)
            {?>
                <tr>
                    <td scope="col"><?php echo htmlspecialchars($comment->getId());?></td>
                    <td scope="col"><?php echo htmlspecialchars($comment->getPseudo());?></td>
                    <td scope="col"><?php echo substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
                    <td scope="col">Créé le : <?php echo htmlspecialchars($comment->getCreatedAt());?></td>
                    <td scope="col">
                        <a href="../public/index.php?route=unflagComment&commentId=<?php echo $comment->getId(); ?>">Désignaler le commentaire</a>
                        <a href="../public/index.php?route=deleteComment&commentId=<?php echo $comment->getId(); ?>">Supprimer le commentaire</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

        <h2>Commentaires a valider</h2>
        <table class="table-responsive">
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Pseudo</th>
                <th scope="row">Message</th>
                <th scope="row">Date</th>
                <th scope="row">Actions</th>
            </tr>
            <?php
            foreach ($statusComments as $comment)
            {?>
                <tr>
                    <td scope="col"><?php echo htmlspecialchars($comment->getId());?></td>
                    <td scope="col"><?php echo htmlspecialchars($comment->getPseudo());?></td>
                    <td scope="col"><?php echo substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
                    <td scope="col">Créé le : <?php echo htmlspecialchars($comment->getCreatedAt());?></td>
                    <td scope="col">
                        <a href="../public/index.php?route=validateComment&commentId=<?php echo $comment->getId(); ?>">Valider le commentaire</a>
                        <a href="../public/index.php?route=deleteComment&commentId=<?php echo $comment->getId(); ?>">Supprimer le commentaire</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

        <h2>Utilisateurs</h2>
        <table class="table-responsive">
            <tr class="td_color">
                <th scope="row">Id</th>
                <th scope="row">Pseudo</th>
                <th scope="row">Date</th>
                <th scope="row">Rôle</th>
                <th scope="row">Actions</th>
            </tr>
            <?php
            foreach ($users as $user)
            {
                ?>
                <tr>
                    <td scope="col"><?php echo htmlspecialchars($user->getId());?></td>
                    <td scope="col"><?php echo htmlspecialchars($user->getPseudo());?></td>
                    <td scope="col">Créé le : <?php echo htmlspecialchars($user->getCreatedAt());?></td>
                    <td scope="col"><?php echo htmlspecialchars($user->getRole());?></td>
                    <?php if($user->getRole() === 'admin') { ?>
                        <td scope="col">compte admin</td>
                    <?php }else{?>
                        <td scope="col"><a href="../public/index.php?route=deleteUser&userId=<?php echo $user->getId(); ?>">Supprimer le compte</a></td>
                    <?php } ?>    
                    </tr>
                <?php
            }
            ?>
        </table>    
        <a class="margin bouton4" href="../public/index.php">Accueil</a>
    </div>
</div>
