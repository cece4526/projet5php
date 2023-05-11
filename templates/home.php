<?php $this->title="Accueil";?>
<div class="message">
    <p class="message_text">
        <?= $this->session->show('register'); ?>
        <?= $this->session->show('login'); ?>
        <?= $this->session->show('logout'); ?>
        <?= $this->session->show('delete_account'); ?>
        <?= $this->session->show('add_comment'); ?>
        <?= $this->session->show('flag_comment'); ?>
        <?= $this->session->show('delete_comment'); ?>
    </p>
</div>
<?php
if ($this->session->get('pseudo')) {?>
    <nav id="menu_dir" class="col navbar navbar-expand-lg">
        <button id="button_menu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
            <span class="button">Menu</span>
        </button>
        <div id="navbarContent" class="collapse navbar-collapse menu_dir">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class=" nav-link bouton4" href="../public/index.php?route=logout">Déconnexion</a></li>
                <li class="nav-item active"><a class=" nav-link bouton4" href="../public/index.php?route=profile">Profil</a></li>
                <?php if($this->session->get('role') === 'admin') { ?>
                <li class="nav-item active"><a class=" nav-link bouton4" href="../public/index.php?route=administration">Administration</a></li>
            </ul>
        </div>
        <?php } ?>
    </nav>
    <?php
} 
else {
    ?>
    <nav id="menu_dir" class="col navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
            <span class="button">Menu</span>
        </button>
        <div id="navbarContent" class="collapse navbar-collapse menu_dir">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class=" nav-link bouton4" href="../public/index.php?route=register">Inscription</a></li>
                <li class="nav-item active"><a class=" nav-link bouton4" href="../public/index.php?route=login">Connexion</a></li>
            </ul>
        </div>
    </nav>
    <?php
}
?>
<?php
       
foreach($allArticles as $article)
{
    ?>
    <article class=" card card_home_center color_article" style="background-color: #cfd3ce; border: none;">
        <div class="card_home_border card-body card_home_width card_home_color">
            <h2 class="card-title h2"><?=htmlspecialchars($article->getTitle());?></h2>
            <p class="card-text"><?=substr(strip_tags($article->getContent(), "<br><strong><em><p>"), 0, 150);?></p>
            <a href="../public/index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>">lire la suite...</a>
            
            <p class="card-text"><?=htmlspecialchars($article->getAuthor());?></p>
            <p class="card-text"><?=htmlspecialchars($article->getCreatedAt());?></p>
        </div>        
    </article>
    <br>
    <?php
}
?>