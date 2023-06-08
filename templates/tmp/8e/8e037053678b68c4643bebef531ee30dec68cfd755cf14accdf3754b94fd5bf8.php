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

/* profile.html.twig */
class __TwigTemplate_21e40e4eab50c696362a40bf746e11cedb54e3acc02cf66b903f3bc3c4a44a87 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon profil";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"content_center\">
        <h3>Profil</h3>
        ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "update_password"], "method", false, false, false, 6), "html", null, true);
        echo "
        <div class=\"content_center\">
            <h2>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "pseudo"], "method", false, false, false, 8), "html", null, true);
        echo "</h2>
            <p>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "role"], "method", false, false, false, 9), "html", null, true);
        echo "</p>
            <a id=\"bouton5\" href=\"../public/index.php?route=updatePassword\">Modifier son mot de passe</a>
            <br>
            ";
        // line 12
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "role"], "method", false, false, false, 12), "admin"))) {
            // line 13
            echo "                <p>compte admin</p>
            ";
        } else {
            // line 15
            echo "                <a id=\"bouton5\" href=\"../public/index.php?route=deleteAccount\">Supprimer mon compte</a>
            ";
        }
        // line 17
        echo "        </div>
        <br>
        <a class=\"bouton4\" href=\"../public/index.php\">Accueil</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  83 => 15,  79 => 13,  77 => 12,  71 => 9,  67 => 8,  62 => 6,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Mon profil{% endblock %}
{% block content %}
    <div class=\"content_center\">
        <h3>Profil</h3>
        {{ session.show('update_password') }}
        <div class=\"content_center\">
            <h2>{{ session.get('pseudo') }}</h2>
            <p>{{ session.get('role') }}</p>
            <a id=\"bouton5\" href=\"../public/index.php?route=updatePassword\">Modifier son mot de passe</a>
            <br>
            {% if session.get('role') == 'admin' %}
                <p>compte admin</p>
            {% else %}
                <a id=\"bouton5\" href=\"../public/index.php?route=deleteAccount\">Supprimer mon compte</a>
            {% endif %}
        </div>
        <br>
        <a class=\"bouton4\" href=\"../public/index.php\">Accueil</a>
    </div>
{% endblock %}
", "profile.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\profile.html.twig");
    }
}
