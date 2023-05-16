<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home.html.twig */
class __TwigTemplate_a0a602da772fe4a41d624007591b021417ea01049f71f1c1f9ee70f11b53d1a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"message\">
    <p class=\"message_text\">
        ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "register"], "method", false, false, false, 6), "html", null, true);
        echo "
        <?php  ?>
        <?php echo \$this->session->show('login'); ?>
        <?php echo \$this->session->show('logout'); ?>
        <?php echo \$this->session->show('delete_account'); ?>
        <?php echo \$this->session->show('add_comment'); ?>
        <?php echo \$this->session->show('flag_comment'); ?>
        <?php echo \$this->session->show('delete_comment'); ?>
    </p>
</div>
<?php
if (\$this->session->get('pseudo')) {?>
    <nav id=\"menu_dir\" class=\"col navbar navbar-expand-lg\">
        <button id=\"button_menu\" class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\">
            <span class=\"button\">Menu</span>
        </button>
        <div id=\"navbarContent\" class=\"collapse navbar-collapse menu_dir\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item active\"><a class=\" nav-link bouton4\" href=\"../public/index.php?route=logout\">Déconnexion</a></li>
                <li class=\"nav-item active\"><a class=\" nav-link bouton4\" href=\"../public/index.php?route=profile\">Profil</a></li>
                <?php if(\$this->session->get('role') === 'admin') { ?>
                <li class=\"nav-item active\"><a class=\" nav-link bouton4\" href=\"../public/index.php?route=administration\">Administration</a></li>
            </ul>
        </div>
                <?php } ?>
    </nav>
    <?php
} 
else {
    ?>
    <nav id=\"menu_dir\" class=\"col navbar navbar-expand-lg\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\">
            <span class=\"button\">Menu</span>
        </button>
        <div id=\"navbarContent\" class=\"collapse navbar-collapse menu_dir\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item active\"><a class=\" nav-link bouton4\" href=\"../public/index.php?route=register\">Inscription</a></li>
                <li class=\"nav-item active\"><a class=\" nav-link bouton4\" href=\"../public/index.php?route=login\">Connexion</a></li>
            </ul>
        </div>
    </nav>
    <?php
}
?>
<?php
       
foreach(\$allArticles as \$article)
{
    ?>
    <article class=\" card card_home_center color_article\" style=\"background-color: #cfd3ce; border: none;\">
        <div class=\"card_home_border card-body card_home_width card_home_color\">
            <h2 class=\"card-title h2\"><?php echo htmlspecialchars(\$article->getTitle());?></h2>
            <p class=\"card-text\"><?php echo substr(strip_tags(\$article->getContent(), \"<br><strong><em><p>\"), 0, 150);?></p>
            <a href=\"../public/index.php?route=article&articleId=<?php echo htmlspecialchars(\$article->getId());?>\">lire la suite...</a>
            
            <p class=\"card-text\"><?php echo htmlspecialchars(\$article->getAuthor());?></p>
            <p class=\"card-text\"><?php echo htmlspecialchars(\$article->getCreatedAt());?></p>
        </div>        
    </article>
    <br>
    <?php
}
?>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 6,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Accueil{% endblock %}
{% block content %}
<div class=\"message\">
    <p class=\"message_text\">
        {{ session.show('register') }}
        <?php  ?>
        <?php echo \$this->session->show('login'); ?>
        <?php echo \$this->session->show('logout'); ?>
        <?php echo \$this->session->show('delete_account'); ?>
        <?php echo \$this->session->show('add_comment'); ?>
        <?php echo \$this->session->show('flag_comment'); ?>
        <?php echo \$this->session->show('delete_comment'); ?>
    </p>
</div>
<?php
if (\$this->session->get('pseudo')) {?>
    <nav id=\"menu_dir\" class=\"col navbar navbar-expand-lg\">
        <button id=\"button_menu\" class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\">
            <span class=\"button\">Menu</span>
        </button>
        <div id=\"navbarContent\" class=\"collapse navbar-collapse menu_dir\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item active\"><a class=\" nav-link bouton4\" href=\"../public/index.php?route=logout\">Déconnexion</a></li>
                <li class=\"nav-item active\"><a class=\" nav-link bouton4\" href=\"../public/index.php?route=profile\">Profil</a></li>
                <?php if(\$this->session->get('role') === 'admin') { ?>
                <li class=\"nav-item active\"><a class=\" nav-link bouton4\" href=\"../public/index.php?route=administration\">Administration</a></li>
            </ul>
        </div>
                <?php } ?>
    </nav>
    <?php
} 
else {
    ?>
    <nav id=\"menu_dir\" class=\"col navbar navbar-expand-lg\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\">
            <span class=\"button\">Menu</span>
        </button>
        <div id=\"navbarContent\" class=\"collapse navbar-collapse menu_dir\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item active\"><a class=\" nav-link bouton4\" href=\"../public/index.php?route=register\">Inscription</a></li>
                <li class=\"nav-item active\"><a class=\" nav-link bouton4\" href=\"../public/index.php?route=login\">Connexion</a></li>
            </ul>
        </div>
    </nav>
    <?php
}
?>
<?php
       
foreach(\$allArticles as \$article)
{
    ?>
    <article class=\" card card_home_center color_article\" style=\"background-color: #cfd3ce; border: none;\">
        <div class=\"card_home_border card-body card_home_width card_home_color\">
            <h2 class=\"card-title h2\"><?php echo htmlspecialchars(\$article->getTitle());?></h2>
            <p class=\"card-text\"><?php echo substr(strip_tags(\$article->getContent(), \"<br><strong><em><p>\"), 0, 150);?></p>
            <a href=\"../public/index.php?route=article&articleId=<?php echo htmlspecialchars(\$article->getId());?>\">lire la suite...</a>
            
            <p class=\"card-text\"><?php echo htmlspecialchars(\$article->getAuthor());?></p>
            <p class=\"card-text\"><?php echo htmlspecialchars(\$article->getCreatedAt());?></p>
        </div>        
    </article>
    <br>
    <?php
}
?>
{% endblock %}
", "home.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\home.html.twig");
    }
}
