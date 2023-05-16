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
    <script src=\"https://cdn.tiny.cloud/1/ye3lj6zon9s9sgu48dzjieh2sgfp3h7xt5xoowgbfypcz3uw/tinymce/5/tinymce.min.js\" referrerpolicy=\"origin\"></script>
</head>
<body id=\"color_body\">
    <header>
      <h1>Jean Forteroche</h1>
      <h2>Billet simple pour l'Alaska</h2>
    </header>
    <section class=\"container\">
        ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "    </section>
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  72 => 6,  62 => 18,  60 => 17,  46 => 6,  39 => 1,);
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
    <script src=\"https://cdn.tiny.cloud/1/ye3lj6zon9s9sgu48dzjieh2sgfp3h7xt5xoowgbfypcz3uw/tinymce/5/tinymce.min.js\" referrerpolicy=\"origin\"></script>
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
</html>
", "base.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\base.html.twig");
    }
}
