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

/* form_comment.html.twig */
class __TwigTemplate_0c20723544550957f0d62054c0f14f134e4f9dd071c265b1f7cef4654c6f753b extends Template
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
        $context["route"] = (((array_key_exists("post", $context) && twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "get", [0 => "id"], "method", false, false, false, 1))) ? ("editComment") : ("addComment"));
        // line 2
        $context["submit"] = (((0 === twig_compare(($context["route"] ?? null), "addComment"))) ? ("Ajouter") : ("Mettre à jour"));
        // line 3
        echo "<form method=\"post\" action=\"../public/index.php?route=";
        echo twig_escape_filter($this->env, ($context["route"] ?? null), "html", null, true);
        echo "&articleId=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "getId", [], "method", false, false, false, 3), "html", null, true);
        echo "\">
    <label for=\"pseudo\">Pseudo</label><br>
    <input type=\"text\" id=\"pseudo\" name=\"pseudo\" value=\"";
        // line 5
        echo ((array_key_exists("post", $context)) ? (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "get", [0 => "pseudo"], "method", false, false, false, 5))) : (""));
        echo "\"><br>
    ";
        // line 6
        (((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "pseudo", [], "array", true, true, false, 6) &&  !(null === (($__internal_compile_0 = ($context["errors"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["pseudo"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_1 = ($context["errors"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["pseudo"] ?? null) : null), "html", null, true))) : (print ("")));
        echo "
    <label for=\"content\">Message</label><br>
    <textarea id=\"content\" name=\"content\">";
        // line 8
        echo ((array_key_exists("post", $context)) ? (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "get", [0 => "content"], "method", false, false, false, 8))) : (""));
        echo "</textarea><br>
    ";
        // line 9
        (((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "array", true, true, false, 9) &&  !(null === (($__internal_compile_2 = ($context["errors"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["content"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_3 = ($context["errors"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["content"] ?? null) : null), "html", null, true))) : (print ("")));
        echo "
    <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["submit"] ?? null), "html", null, true);
        echo "\" id=\"submit\" name=\"submit\">
</form>";
    }

    public function getTemplateName()
    {
        return "form_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  62 => 9,  58 => 8,  53 => 6,  49 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set route = post is defined and post.get('id') ? 'editComment' : 'addComment' %}
{% set submit = route == 'addComment' ? 'Ajouter' : 'Mettre à jour' %}
<form method=\"post\" action=\"../public/index.php?route={{ route }}&articleId={{ article.getId() }}\">
    <label for=\"pseudo\">Pseudo</label><br>
    <input type=\"text\" id=\"pseudo\" name=\"pseudo\" value=\"{{ post is defined ? post.get('pseudo')|e : '' }}\"><br>
    {{ errors['pseudo'] ?? '' }}
    <label for=\"content\">Message</label><br>
    <textarea id=\"content\" name=\"content\">{{ post is defined ? post.get('content')|e : '' }}</textarea><br>
    {{ errors['content'] ?? '' }}
    <input type=\"submit\" value=\"{{ submit }}\" id=\"submit\" name=\"submit\">
</form>", "form_comment.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\Form_comment.html.twig");
    }
}
