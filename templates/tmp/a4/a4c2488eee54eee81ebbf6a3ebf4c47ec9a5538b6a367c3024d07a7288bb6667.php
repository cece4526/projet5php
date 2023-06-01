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

/* edit_article.html.twig */
class __TwigTemplate_8f586b12622b7fa7eab1941e3d532da07023a626b5f82b483076e0d4b8af8d6e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "edit_article.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier l'article";
    }

    // line 3
    public function block_tinymce_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<script>
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
</script>
";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <h3>Editer un article</h3>
    <div>
        ";
        // line 23
        $this->loadTemplate("form_article.html.twig", "edit_article.html.twig", 23)->display($context);
        // line 24
        echo "        <a href=\"../public/index.php\">Retour à l'accueil</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "edit_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  86 => 23,  82 => 21,  78 => 20,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Modifier l'article{% endblock %}
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
</script>
{% endblock %}
{% block content %}
    <h3>Editer un article</h3>
    <div>
        {% include 'form_article.html.twig' %}
        <a href=\"../public/index.php\">Retour à l'accueil</a>
    </div>
{% endblock %}

{# <?php \$this->title = \"Modifier l'article\"; ?>
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
<h3>Editer un article</h3>
<div>
    <?php require 'form_article.php';?>
    <a href=\"../public/index.php\">Retour à l'accueil</a>
</div> #}
", "edit_article.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\edit_article.html.twig");
    }
}
