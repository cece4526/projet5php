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

/* register.html.twig */
class __TwigTemplate_cf6d6cccf1859e75e25ac0a6bcb518451fee7eb059cb0464f9d25acfbe888e70 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Inscription";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h3>Inscription</h3>
<div>
    <form method=\"post\" action=\"../public/index.php?route=register\">
        <label for=\"pseudo\">Pseudo</label><br>
        <input type=\"text\" id=\"pseudo\" name=\"pseudo\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "get", [0 => "pseudo"], "method", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "get", [0 => "pseudo"], "method", false, false, false, 8), "")) : ("")), "html", null, true);
        echo "\"><br>
        ";
        // line 9
        (((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "pseudo", [], "array", true, true, false, 9) &&  !(null === (($__internal_compile_0 = ($context["errors"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["pseudo"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_1 = ($context["errors"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["pseudo"] ?? null) : null), "html", null, true))) : (print ("")));
        echo "
        <label for=\"password\">Mot de passe</label><br>
        <input type=\"password\" id=\"password\" name=\"password\"><br>
        ";
        // line 12
        (((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "array", true, true, false, 12) &&  !(null === (($__internal_compile_2 = ($context["errors"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["password"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_3 = ($context["errors"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["password"] ?? null) : null), "html", null, true))) : (print ("")));
        echo "
        <input type=\"submit\" value=\"Inscription\" id=\"submit\" name=\"submit\">
    </form>
    <a href=\"../public/index.php\">Retour à l'accueil</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  68 => 9,  64 => 8,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Inscription{% endblock %}
{% block content %}
<h3>Inscription</h3>
<div>
    <form method=\"post\" action=\"../public/index.php?route=register\">
        <label for=\"pseudo\">Pseudo</label><br>
        <input type=\"text\" id=\"pseudo\" name=\"pseudo\" value=\"{{ post.get('pseudo')|default('') }}\"><br>
        {{ errors['pseudo'] ?? '' }}
        <label for=\"password\">Mot de passe</label><br>
        <input type=\"password\" id=\"password\" name=\"password\"><br>
        {{ errors['password'] ?? '' }}
        <input type=\"submit\" value=\"Inscription\" id=\"submit\" name=\"submit\">
    </form>
    <a href=\"../public/index.php\">Retour à l'accueil</a>
</div>
{% endblock %}

{# <?php \$this->title = \"Inscription\"; ?>
<h3>Inscription</h3>
<div>
    <form method=\"post\" action=\"../public/index.php?route=register\">
        <label for=\"pseudo\">Pseudo</label><br>
        <input type=\"text\" id=\"pseudo\" name=\"pseudo\" value=\"<?php echo isset(\$post) ? htmlspecialchars(\$post->get('pseudo')): ''; ?>\"><br>
        <?php echo isset(\$errors['pseudo']) ? \$errors['pseudo'] : ''; ?>
        <label for=\"password\">Mot de passe</label><br>
        <input type=\"password\" id=\"password\" name=\"password\"><br>
        <?php echo isset(\$errors['password']) ? \$errors['password'] : ''; ?>
        <input type=\"submit\" value=\"Inscription\" id=\"submit\" name=\"submit\">
    </form>
    <a href=\"../public/index.php\">Retour à l'accueil</a>
</div> #}
", "register.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\register.html.twig");
    }
}
