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

/* menu.html.twig */
class __TwigTemplate_a17dd7b66a151b0be4cca3a051a52955776aacbab5e0af4cdda3c6d09758e87f extends Template
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
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "pseudo"], "method", false, false, false, 1)) {
            // line 2
            echo "        <nav id=\"menu_dir\" class=\"col navbar navbar-expand-lg\">
            <button id=\"button_menu\" class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\">
                <span class=\"button\">Menu</span>
            </button>
            <div id=\"navbarContent\" class=\"collapse navbar-collapse menu_dir\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\"><a class=\"nav-link bouton4\" href=\"../public/index.php?route=logout\">Déconnexion</a></li>
                    <li><a class=\"nav-item active\" href=\"../public/index.php\">Accueil</a></li>
                    <li class=\"nav-item active\"><a class=\"nav-link bouton4\" href=\"../public/index.php?route=profile\">Profil</a></li>
                    ";
            // line 11
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "role"], "method", false, false, false, 11), "admin"))) {
                // line 12
                echo "                        <li class=\"nav-item active\"><a class=\"nav-link bouton4\" href=\"../public/index.php?route=administration\">Administration</a></li>
                    ";
            }
            // line 14
            echo "                </ul>
            </div>
        </nav>
    ";
        } else {
            // line 18
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
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  57 => 14,  53 => 12,  51 => 11,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {% if session.get('pseudo') %}
        <nav id=\"menu_dir\" class=\"col navbar navbar-expand-lg\">
            <button id=\"button_menu\" class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\">
                <span class=\"button\">Menu</span>
            </button>
            <div id=\"navbarContent\" class=\"collapse navbar-collapse menu_dir\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\"><a class=\"nav-link bouton4\" href=\"../public/index.php?route=logout\">Déconnexion</a></li>
                    <li><a class=\"nav-item active\" href=\"../public/index.php\">Accueil</a></li>
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
", "menu.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\menu.html.twig");
    }
}
