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

/* form_article.html.twig */
class __TwigTemplate_78a3a8b7bdfe22df16f7dbb4738d68c4369b99d61b9d1c4086f1943664a41739 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["route"] = (((array_key_exists("post", $context) && twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "get", [0 => "id"], "method", false, false, false, 1))) ? (("editArticle&articleId=" . twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "get", [0 => "id"], "method", false, false, false, 1))) : ("addArticle"));
        // line 2
        $context["submit"] = (((0 === twig_compare(($context["route"] ?? null), "addArticle"))) ? ("Envoyer") : ("Mettre à jour"));
        // line 3
        echo "
<form method=\"post\" action=\"../public/index.php?route=";
        // line 4
        echo twig_escape_filter($this->env, ($context["route"] ?? null), "html", null, true);
        echo "\">
    <label for=\"title\">Titre</label><br>
    <input type=\"text\" id=\"title\" name=\"title\" value=\"";
        // line 6
        echo ((array_key_exists("post", $context)) ? (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "get", [0 => "title"], "method", false, false, false, 6))) : (""));
        echo "\"><br>
    ";
        // line 7
        (((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", true, true, false, 7) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 7)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true))) : (print ("")));
        echo "
    <label for=\"content\">Contenu</label><br>
    <textarea id=\"contentAddArtticle\" name=\"content\">";
        // line 9
        echo ((array_key_exists("post", $context)) ? (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "get", [0 => "content"], "method", false, false, false, 9))) : (""));
        echo "</textarea><br>
    ";
        // line 10
        (((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", true, true, false, 10) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 10)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 10), "html", null, true))) : (print ("")));
        echo "
    <input type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["submit"] ?? null), "html", null, true);
        echo "\" id=\"submit\" name=\"submit\">
</form>
";
    }

    public function getTemplateName()
    {
        return "form_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  62 => 10,  58 => 9,  53 => 7,  49 => 6,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set route = (post is defined and post.get('id')) ? 'editArticle&articleId=' ~ post.get('id') : 'addArticle' %}
{% set submit = (route == 'addArticle') ? 'Envoyer' : 'Mettre à jour' %}

<form method=\"post\" action=\"../public/index.php?route={{ route }}\">
    <label for=\"title\">Titre</label><br>
    <input type=\"text\" id=\"title\" name=\"title\" value=\"{{ post is defined ? post.get('title')|e : '' }}\"><br>
    {{ errors.title ?? '' }}
    <label for=\"content\">Contenu</label><br>
    <textarea id=\"contentAddArtticle\" name=\"content\">{{ post is defined ? post.get('content')|e : '' }}</textarea><br>
    {{ errors.content ?? '' }}
    <input type=\"submit\" value=\"{{ submit }}\" id=\"submit\" name=\"submit\">
</form>
", "form_article.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\form_article.html.twig");
    }
}
