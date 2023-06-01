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

/* single.html.twig */
class __TwigTemplate_70beb8b5a14ed7ca83a02dea62a78b6f0955ddb147ad58a99c8bd6eb2c8c6d6d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "single.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Article";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"text-center\"><a class=\"margin bouton4\" href=\"../public/index.php\">Accueil</a></div>
<article class=\"card_home_border card_home_width card_home_color\">
    <h2>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "getTitle", [], "method", false, false, false, 6), "html", null, true);
        echo "</h2>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "getContent", [], "method", false, false, false, 7)), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "getAuthor", [], "method", false, false, false, 8), "html", null, true);
        echo "</p>
    <p>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "getCreatedAt", [], "method", false, false, false, 9), "html", null, true);
        echo "</p>
</article>
";
        // line 11
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "role"], "method", false, false, false, 11), "admin"))) {
            // line 12
            echo "<div class=\"actions\">
    <a class=\"bouton4\" href=\"../public/index.php?route=editArticle&articleId=";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "getId", [], "method", false, false, false, 13), "html", null, true);
            echo "\">Modifier</a>
    <a class=\"bouton4\" href=\"../public/index.php?route=deleteArticle&articleId=";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "getId", [], "method", false, false, false, 14), "html", null, true);
            echo "\">Supprimer</a>
</div>
";
        }
        // line 17
        echo "
<div id=\"comments\" class=\"text-left\" style=\"margin-left: 50px;\">
    ";
        // line 19
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "role"], "method", false, false, false, 19))) {
            // line 20
            echo "    <h3>Ajouter un commentaire</h3>
    ";
            // line 21
            $this->loadTemplate("form_comment.html.twig", "single.html.twig", 21)->display($context);
            // line 22
            echo "    ";
        }
        // line 23
        echo "    <h3>Commentaires</h3>
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allComments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 25
            echo "    ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["comment"], "getStatus", [], "method", false, false, false, 25), 1)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["comment"], "isFlag", [], "method", false, false, false, 25), 0)))) {
                // line 26
                echo "    <div class=\"card_home_border card_home_color\">
        <h4>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getAuthor", [], "method", false, false, false, 27), "html", null, true);
                echo "</h4>
        <p>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getContent", [], "method", false, false, false, 28), "html", null, true);
                echo "</p>
        <p>Posté le ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getCreatedAt", [], "method", false, false, false, 29), "html", null, true);
                echo "</p>
        ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["comment"], "isFlag", [], "method", false, false, false, 30)) {
                    // line 31
                    echo "        ";
                }
                // line 32
                echo "    </div>
    ";
            }
            // line 34
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</div>
<a class=\"margin bouton4\" href=\"../public/index.php\">Accueil</a>
";
    }

    public function getTemplateName()
    {
        return "single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 35,  142 => 34,  138 => 32,  135 => 31,  133 => 30,  129 => 29,  125 => 28,  121 => 27,  118 => 26,  115 => 25,  111 => 24,  108 => 23,  105 => 22,  103 => 21,  100 => 20,  98 => 19,  94 => 17,  88 => 14,  84 => 13,  81 => 12,  79 => 11,  74 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Article{% endblock %}
{% block content %}
<div class=\"text-center\"><a class=\"margin bouton4\" href=\"../public/index.php\">Accueil</a></div>
<article class=\"card_home_border card_home_width card_home_color\">
    <h2>{{ article.getTitle() }}</h2>
    <p>{{ article.getContent()|striptags }}</p>
    <p>{{ article.getAuthor() }}</p>
    <p>{{ article.getCreatedAt() }}</p>
</article>
{% if session.get('role') == 'admin' %}
<div class=\"actions\">
    <a class=\"bouton4\" href=\"../public/index.php?route=editArticle&articleId={{ article.getId() }}\">Modifier</a>
    <a class=\"bouton4\" href=\"../public/index.php?route=deleteArticle&articleId={{ article.getId() }}\">Supprimer</a>
</div>
{% endif %}

<div id=\"comments\" class=\"text-left\" style=\"margin-left: 50px;\">
    {% if session.get('role') is not null %}
    <h3>Ajouter un commentaire</h3>
    {% include 'form_comment.html.twig' %}
    {% endif %}
    <h3>Commentaires</h3>
    {% for comment in allComments %}
    {% if comment.getStatus() == 1 and comment.isFlag() == 0 %}
    <div class=\"card_home_border card_home_color\">
        <h4>{{ comment.getAuthor() }}</h4>
        <p>{{ comment.getContent() }}</p>
        <p>Posté le {{ comment.getCreatedAt() }}</p>
        {% if comment.isFlag() %}
        {% endif %}
    </div>
    {% endif %}
    {% endfor %}
</div>
<a class=\"margin bouton4\" href=\"../public/index.php\">Accueil</a>
{% endblock %}

", "single.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\single.html.twig");
    }
}
