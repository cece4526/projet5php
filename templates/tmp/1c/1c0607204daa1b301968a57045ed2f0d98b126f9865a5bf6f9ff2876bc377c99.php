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

/* update_password.html.twig */
class __TwigTemplate_2dfe671d93b56849e965a7e39c0de507446ccd4aa51cc2c684da04cab81cb15c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["title"] = "Modifier mot de passe";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "
<h3>Changer de mot de passe</h3>
<div>
    <p>Le mot de passe de ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "pseudo"], "method", false, false, false, 6), "html", null, true);
        echo " sera modifié</p>
    <form method=\"post\" action=\"../public/index.php?route=updatePassword\">
        <label for=\"password\">Mot de passe</label><br>
        <input type=\"password\" id=\"password\" name=\"password\"><br>
        <input type=\"submit\" value=\"Mettre à jour\" id=\"submit\" name=\"submit\">
    </form>
</div>
<br>
<a href=\"../public/index.php\">Retour à l'accueil</a>

";
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "update_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 2,  47 => 6,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set title = 'Modifier mot de passe' %}
{% block title %}{{ title }}{% endblock %}

<h3>Changer de mot de passe</h3>
<div>
    <p>Le mot de passe de {{ session.get('pseudo') }} sera modifié</p>
    <form method=\"post\" action=\"../public/index.php?route=updatePassword\">
        <label for=\"password\">Mot de passe</label><br>
        <input type=\"password\" id=\"password\" name=\"password\"><br>
        <input type=\"submit\" value=\"Mettre à jour\" id=\"submit\" name=\"submit\">
    </form>
</div>
<br>
<a href=\"../public/index.php\">Retour à l'accueil</a>

{# <?php \$this->title = 'Modifier mot mot de passe'; ?> #}
{# <h3>Changer de mot de passe</h3>
<div>
    <p>Le mot de passe de <?php echo \$this->session->get('pseudo'); ?> sera modifié</p>
    <form method=\"post\" action=\"../public/index.php?route=updatePassword\">
        <label for=\"password\">Mot de passe</label><br>
        <input type=\"password\" id=\"password\" name=\"password\"><br>
        <input type=\"submit\" value=\"Mettre à jour\" id=\"submit\" name=\"submit\">
    </form>
</div>
<br>
<a href=\"../public/index.php\">Retour à l'accueil</a> #}
", "update_password.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\update_password.html.twig");
    }
}
