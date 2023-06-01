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
        echo "    <div class=\"message\">
        <p class=\"message_text\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "register"], "method", false, false, false, 6), "html", null, true);
        echo "
            ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "logout"], "method", false, false, false, 7), "html", null, true);
        echo "
            ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "delete_account"], "method", false, false, false, 8), "html", null, true);
        echo "
            ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "add_comment"], "method", false, false, false, 9), "html", null, true);
        echo "
            ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "flag_comment"], "method", false, false, false, 10), "html", null, true);
        echo "
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "login"], "method", false, false, false, 11), "html", null, true);
        echo "
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "delete_comment"], "method", false, false, false, 12), "html", null, true);
        echo "
        </p>
    </div>
    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "pseudo"], "method", false, false, false, 15)) {
            // line 16
            echo "        <nav id=\"menu_dir\" class=\"col navbar navbar-expand-lg\">
            <button id=\"button_menu\" class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\">
                <span class=\"button\">Menu</span>
            </button>
            <div id=\"navbarContent\" class=\"collapse navbar-collapse menu_dir\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\"><a class=\"nav-link bouton4\" href=\"../public/index.php?route=logout\">Déconnexion</a></li>
                    <li class=\"nav-item active\"><a class=\"nav-link bouton4\" href=\"../public/index.php?route=profile\">Profil</a></li>
                    ";
            // line 24
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "role"], "method", false, false, false, 24), "admin"))) {
                // line 25
                echo "                        <li class=\"nav-item active\"><a class=\"nav-link bouton4\" href=\"../public/index.php?route=administration\">Administration</a></li>
                    ";
            }
            // line 27
            echo "                </ul>
            </div>
        </nav>
    ";
        } else {
            // line 31
            echo "        <nav id=\"menu_dir\" class=\"col navbar navbar-expand-lg\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\">
                <span class=\"button\">Menu</span>
            </button>
            <div id=\"navbarContent\" class=\"collapse navbar-collapse menu_dir\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\"><a class=\"nav-link bouton4\" href=\"../public/index.php?route=register\">Inscription</a></li>
                    <li class=\"nav-item active\"><a class=\"nav-link bouton4\" href=\"../public/index.php?route=login\">Connexion</a></li>
                </ul>
            </div>
        </nav>
    ";
        }
        // line 43
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allArticles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 44
            echo "        <article class=\"card card_home_center color_article\" style=\"background-color: #cfd3ce; border: none;\">
            <div class=\"card_home_border card-body card_home_width card_home_color\">
                <h2 class=\"card-title h2\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getTitle", [], "method", false, false, false, 46), "html", null, true);
            echo "</h2>
                <p class=\"card-text\">";
            // line 47
            echo twig_escape_filter($this->env, twig_striptags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getContent", [], "method", false, false, false, 47), 0, 50)), "html", null, true);
            echo "</p>
                <a href=\"../public/index.php?route=article&articleId=";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 48), "html", null, true);
            echo "\">lire la suite...</a>
                <p class=\"card-text\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getAuthor", [], "method", false, false, false, 49), "html", null, true);
            echo "</p>
                <p class=\"card-text\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getCreatedAt", [], "method", false, false, false, 50), "html", null, true);
            echo "</p>
            </div>        
        </article>
        <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  155 => 50,  151 => 49,  147 => 48,  143 => 47,  139 => 46,  135 => 44,  130 => 43,  116 => 31,  110 => 27,  106 => 25,  104 => 24,  94 => 16,  92 => 15,  86 => 12,  82 => 11,  78 => 10,  74 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Accueil{% endblock %}
{% block content %}
    <div class=\"message\">
        <p class=\"message_text\">
            {{ session.show('register') }}
            {{ session.show('logout') }}
            {{ session.show('delete_account') }}
            {{ session.show('add_comment') }}
            {{ session.show('flag_comment') }}
            {{ session.show('login') }}
            {{ session.show('delete_comment') }}
        </p>
    </div>
    {% if session.get('pseudo') %}
        <nav id=\"menu_dir\" class=\"col navbar navbar-expand-lg\">
            <button id=\"button_menu\" class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\">
                <span class=\"button\">Menu</span>
            </button>
            <div id=\"navbarContent\" class=\"collapse navbar-collapse menu_dir\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\"><a class=\"nav-link bouton4\" href=\"../public/index.php?route=logout\">Déconnexion</a></li>
                    <li class=\"nav-item active\"><a class=\"nav-link bouton4\" href=\"../public/index.php?route=profile\">Profil</a></li>
                    {% if session.get('role') == 'admin' %}
                        <li class=\"nav-item active\"><a class=\"nav-link bouton4\" href=\"../public/index.php?route=administration\">Administration</a></li>
                    {% endif %}
                </ul>
            </div>
        </nav>
    {% else %}
        <nav id=\"menu_dir\" class=\"col navbar navbar-expand-lg\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\">
                <span class=\"button\">Menu</span>
            </button>
            <div id=\"navbarContent\" class=\"collapse navbar-collapse menu_dir\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\"><a class=\"nav-link bouton4\" href=\"../public/index.php?route=register\">Inscription</a></li>
                    <li class=\"nav-item active\"><a class=\"nav-link bouton4\" href=\"../public/index.php?route=login\">Connexion</a></li>
                </ul>
            </div>
        </nav>
    {% endif %}
    {% for article in allArticles %}
        <article class=\"card card_home_center color_article\" style=\"background-color: #cfd3ce; border: none;\">
            <div class=\"card_home_border card-body card_home_width card_home_color\">
                <h2 class=\"card-title h2\">{{ article.getTitle() }}</h2>
                <p class=\"card-text\">{{ article.getContent()|slice(0,50)|striptags }}</p>
                <a href=\"../public/index.php?route=article&articleId={{ article.getId() }}\">lire la suite...</a>
                <p class=\"card-text\">{{ article.getAuthor() }}</p>
                <p class=\"card-text\">{{ article.getCreatedAt() }}</p>
            </div>        
        </article>
        <br>
    {% endfor %}
{% endblock %}

", "home.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\home.html.twig");
    }
}
