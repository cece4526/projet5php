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

/* base.html.twig */
class __TwigTemplate_7c06fa7325105066e6ef6f8f7f1c02e6d1d2bdfab176ee51247abee875b52317 extends Template
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
            'content' => [$this, 'block_content'],
            'tinymce_scripts' => [$this, 'block_tinymce_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/styles.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.tiny.cloud/1/iab8thdvc4jwel2j40erfp5seig46wsvno8047wc8q1o6h91/tinymce/6/tinymce.min.js\" referrerpolicy=\"origin\"></script>
</head>
<body id=\"color_body\">
    <header>
        <h1>Dupré Cédric</h1>
        <h2>la passion du dévellopement php/symfony</h2>
        ";
        // line 15
        $this->loadTemplate("menu.html.twig", "base.html.twig", 15)->display($context);
        // line 16
        echo "    </header>
    <section class=\"container\">
        ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "    </section>
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>

    ";
        // line 24
        $this->displayBlock('tinymce_scripts', $context, $blocks);
        // line 27
        echo "</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 24
    public function block_tinymce_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "        
    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  94 => 24,  88 => 18,  82 => 6,  76 => 27,  74 => 24,  67 => 19,  65 => 18,  61 => 16,  59 => 15,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}{% endblock %}</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/styles.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.tiny.cloud/1/iab8thdvc4jwel2j40erfp5seig46wsvno8047wc8q1o6h91/tinymce/6/tinymce.min.js\" referrerpolicy=\"origin\"></script>
</head>
<body id=\"color_body\">
    <header>
        <h1>Dupré Cédric</h1>
        <h2>la passion du dévellopement php/symfony</h2>
        {% include 'menu.html.twig' %}
    </header>
    <section class=\"container\">
        {% block content %}{% endblock %}
    </section>
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>

    {% block tinymce_scripts %}
        
    {% endblock %}
</body>
</html>
{# <!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}{% endblock %}</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/styles.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.tiny.cloud/1/iab8thdvc4jwel2j40erfp5seig46wsvno8047wc8q1o6h91/tinymce/6/tinymce.min.js\" referrerpolicy=\"origin\"></script>
</head>
<body id=\"color_body\">
    <header>
      <h1>Jean Forteroche</h1>
      <h2>Billet simple pour l'Alaska</h2>
    </header>
    <section class=\"container\">
        {% block  content %}{% endblock %}
    </section>
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
</body>
</html> #}
", "base.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\base.html.twig");
    }
}
