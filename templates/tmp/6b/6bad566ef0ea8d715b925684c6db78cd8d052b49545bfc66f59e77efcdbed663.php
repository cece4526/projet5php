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

/* error_500.html.twig */
class __TwigTemplate_05fef920cebe9aa383236b33dc95aaf554cc00cf71d721777262787c9d362aa7 extends Template
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
        echo "error 500
";
        // line 2
        if (($context["e"] ?? null)) {
            echo " ";
            echo twig_var_dump($this->env, $context, ...[0 => ($context["e"] ?? null)]);
            echo " ";
        }
    }

    public function getTemplateName()
    {
        return "error_500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("error 500
{% if e %} {{dump(e)}} {% endif %}", "error_500.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\error_500.html.twig");
    }
}
