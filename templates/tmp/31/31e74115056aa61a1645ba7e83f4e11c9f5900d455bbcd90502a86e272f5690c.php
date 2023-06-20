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
        echo "    <div>
    <a href=\"images/dupre_cedric.png\">Mon Curriculum Vitae</a>
    </div>
    <div class=\"message\">
        <p class=\"message_text\">
            ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "register"], "method", false, false, false, 9), "html", null, true);
        echo "
            ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "logout"], "method", false, false, false, 10), "html", null, true);
        echo "
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "delete_account"], "method", false, false, false, 11), "html", null, true);
        echo "
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "add_comment"], "method", false, false, false, 12), "html", null, true);
        echo "
            ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "flag_comment"], "method", false, false, false, 13), "html", null, true);
        echo "
            ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "login"], "method", false, false, false, 14), "html", null, true);
        echo "
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "delete_comment"], "method", false, false, false, 15), "html", null, true);
        echo "
        </p>
    </div>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allArticles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "        <article class=\"card card_home_center color_article\" style=\"background-color: #cfd3ce; border: none;\">
            <div class=\"card_home_border card-body card_home_width card_home_color\">
                <h2 class=\"card-title h2\">";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["article"], "getTitle", [], "method", false, false, false, 21);
            echo "</h2>
                <p class=\"card-text\">";
            // line 22
            echo twig_striptags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getContent", [], "method", false, false, false, 22), 0, 50));
            echo "</p>
                <a href=\"../public/index.php?route=article&articleId=";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 23), "html", null, true);
            echo "\">lire la suite...</a>
                <p class=\"card-text\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["article"], "getAuthor", [], "method", false, false, false, 24);
            echo "</p>
                ";
            // line 25
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "getUpdateAt", [], "method", false, false, false, 25), null))) {
                // line 26
                echo "                    <p class=\"card-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getCreatedAt", [], "method", false, false, false, 26), "html", null, true);
                echo "</p>
                ";
            } else {
                // line 28
                echo "                    <p class=\"card-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getUpdateAt", [], "method", false, false, false, 28), "html", null, true);
                echo "</p>
                ";
            }
            // line 30
            echo "            </div>        
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
        return array (  133 => 30,  127 => 28,  121 => 26,  119 => 25,  115 => 24,  111 => 23,  107 => 22,  103 => 21,  99 => 19,  95 => 18,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Accueil{% endblock %}
{% block content %}
    <div>
    <a href=\"images/dupre_cedric.png\">Mon Curriculum Vitae</a>
    </div>
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
    {% for article in allArticles %}
        <article class=\"card card_home_center color_article\" style=\"background-color: #cfd3ce; border: none;\">
            <div class=\"card_home_border card-body card_home_width card_home_color\">
                <h2 class=\"card-title h2\">{{ article.getTitle()|raw }}</h2>
                <p class=\"card-text\">{{ article.getContent()|slice(0,50)|striptags|raw }}</p>
                <a href=\"../public/index.php?route=article&articleId={{ article.getId() }}\">lire la suite...</a>
                <p class=\"card-text\">{{ article.getAuthor()|raw }}</p>
                {% if article.getUpdateAt() == NULL %}
                    <p class=\"card-text\">{{ article.getCreatedAt() }}</p>
                {% else %}
                    <p class=\"card-text\">{{ article.getUpdateAt() }}</p>
                {% endif %}
            </div>        
        </article>
        <br>
    {% endfor %}
{% endblock %}

", "home.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\home.html.twig");
    }
}
