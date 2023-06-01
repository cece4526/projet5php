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

/* add_article.html.twig */
class __TwigTemplate_8363629382a0de8a106426456d121373c44ff0d9ea7897cd3f4580e485818ce6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tinymce_scripts' => [$this, 'block_tinymce_scripts'],
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
        // line 2
        $context["title"] = "Nouvel article";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "add_article.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_tinymce_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script>
            tinymce.init({
                selector: '#contentAddArtticle',
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'help', 'wordcount'
                ],
                toolbar: 'undo redo | blocks | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
                });
        </script>";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
<h3>Nouvel article</h3>
<div> 
  ";
        // line 22
        echo twig_var_dump($this->env, $context, ...[0 => ($context["post"] ?? null)]);
        echo "
    ";
        // line 23
        $this->loadTemplate("form_article.html.twig", "add_article.html.twig", 23)->display($context);
        // line 24
        echo "    <a href=\"../public/index.php\">Retour à l'accueil</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "add_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  85 => 23,  81 => 22,  72 => 19,  54 => 4,  50 => 3,  45 => 1,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% set title = 'Nouvel article' %}
{% block tinymce_scripts %}
    <script>
            tinymce.init({
                selector: '#contentAddArtticle',
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'help', 'wordcount'
                ],
                toolbar: 'undo redo | blocks | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
                });
        </script>{% endblock %}
{% block content %}{{ title }}
<h3>Nouvel article</h3>
<div> 
  {{ dump(post)}}
    {% include 'form_article.html.twig' %}
    <a href=\"../public/index.php\">Retour à l'accueil</a>
</div>
{% endblock %}
{# <?php \$this->title = \"Nouvel article\"; ?>
<script>
      tinymce.init({selector: '#contentAddArtticle',
        plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars fullscreen insertdatetime media nonbreaking',
        'table emoticons template paste help'
        ],
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print preview media fullpage | ' +
        'forecolor backcolor emoticons | help',
        menu: {
        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
        },
        menubar: 'favs file edit view insert format tools table help'
      });</script>
<h3>Nouvel article</h3>
<div>
    <?php require 'form_article.php';?>
    <a href=\"../public/index.php\">Retour à l'accueil</a>
</div> #}
", "add_article.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\add_article.html.twig");
    }
}
