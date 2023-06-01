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

/* login.html.twig */
class __TwigTemplate_2a26a129f25310ccebba82b970f37a0c475ae623d8a43dd1c1ce8b4ea26f8de9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<script type=\"module\" src=\"js/main.js\"></script>
<h3>Connexion</h3>
";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "error_login"], "method", false, false, false, 6), "html", null, true);
        echo "
<div>
    <form method=\"post\" action=\"../public/index.php?route=login\">
        <label for=\"pseudo\">Pseudo</label><br>
        <input type=\"text\" id=\"login\" name=\"pseudo\" value=";
        // line 10
        if (array_key_exists("post", $context)) {
            echo " post ";
        }
        echo "><br>
        <label for=\"password\">Mot de passe</label><br>
        <input type=\"password\" id=\"password\" name=\"password\"><br>
        <input type=\"submit\" value=\"Connexion\" id=\"submit\" name=\"submit\">
    </form>
    <a href=\"../public/index.php\">Retour à l'accueil</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  62 => 6,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Connexion{% endblock %}
{% block content %}
<script type=\"module\" src=\"js/main.js\"></script>
<h3>Connexion</h3>
{{ session.show('error_login') }}
<div>
    <form method=\"post\" action=\"../public/index.php?route=login\">
        <label for=\"pseudo\">Pseudo</label><br>
        <input type=\"text\" id=\"login\" name=\"pseudo\" value={% if post is defined %} post {% endif %}><br>
        <label for=\"password\">Mot de passe</label><br>
        <input type=\"password\" id=\"password\" name=\"password\"><br>
        <input type=\"submit\" value=\"Connexion\" id=\"submit\" name=\"submit\">
    </form>
    <a href=\"../public/index.php\">Retour à l'accueil</a>
</div>
{% endblock %}
{# <?php \$this->title = \"Connexion\"; ?>
<script type=\"module\" src=\"js/main.js\"></script>
<h3>Connexion</h3>
<?php echo \$this->session->show('error_login'); ?>
<div>
    <form method=\"post\" action=\"../public/index.php?route=login\">
        <label for=\"pseudo\">Pseudo</label><br>
        <input type=\"text\" id=\"login\" name=\"pseudo\" value=\"<?php echo isset(\$post) ? htmlspecialchars(\$post->get('pseudo')): ''; ?>\"><br>
        <label for=\"password\">Mot de passe</label><br>
        <input type=\"password\" id=\"password\" name=\"password\"><br>
        <input type=\"submit\" value=\"Connexion\" id=\"submit\" name=\"submit\">
    </form>
    <a href=\"../public/index.php\">Retour à l'accueil</a>
</div> #}
", "login.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\login.html.twig");
    }
}
