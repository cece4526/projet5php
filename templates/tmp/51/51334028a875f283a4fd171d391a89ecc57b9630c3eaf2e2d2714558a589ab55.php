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

/* administration.html.twig */
class __TwigTemplate_fc24a704c21b202545dae5463d327b641a0506faf3f69e13ea24c22561f05fe8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "administration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Administration";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"center\">
        <div class=\"content_center\">
            <h3>Administration</h3>
            <a class=\"margin bouton4\" href=\"../public/index.php\">Accueil</a>
            <div class=\"message\">
                <p class=\"message_text\">
                    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "add_article"], "method", false, false, false, 10), "html", null, true);
        echo "
                    ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "edit_article"], "method", false, false, false, 11), "html", null, true);
        echo "
                    ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "delete_article"], "method", false, false, false, 12), "html", null, true);
        echo "
                    ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "add_comment"], "method", false, false, false, 13), "html", null, true);
        echo "
                    ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "flag_comment"], "method", false, false, false, 14), "html", null, true);
        echo "
                    ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "delete_comment"], "method", false, false, false, 15), "html", null, true);
        echo "
                    ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "delete_user"], "method", false, false, false, 16), "html", null, true);
        echo "
                    ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "validate_comment"], "method", false, false, false, 17), "html", null, true);
        echo "
                    ";
        // line 26
        echo "                </p>
            </div>
            <h4>Articles</h4>
            <a class=\"margin bouton4\" href=\"../public/index.php?route=addArticle\">Nouvel article</a>
            <table class=\"table-responsive\">
                <tr>
                    <th scope=\"row\">Id</th>
                    <th scope=\"row\">Pseudo</th>
                    <th scope=\"row\">Contenu</th>
                    <th scope=\"row\">Auteur</th>
                    <th scope=\"row\">Date</th>
                    <th scope=\"row\">Actions</th>
                </tr>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 40
            echo "                    <tr>
                        <td scope=\"col\"> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 41), "html", null, true);
            echo " </td>
                        <td scope=\"col\"> ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getTitle", [], "method", false, false, false, 42), "html", null, true);
            echo " </td>
                        <td scope=\"col\"> ";
            // line 43
            echo twig_escape_filter($this->env, twig_striptags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "method", false, false, false, 43), 0, 25)), "html", null, true);
            echo " </td>
                        <td scope=\"col\"> ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getAuthor", [], "method", false, false, false, 44), "html", null, true);
            echo " </td>
                        <td scope=\"col\"> ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getCreatedAt", [], "method", false, false, false, 45), "html", null, true);
            echo " </td>
                        <td scope=\"col\">
                            <a href=\"../public/index.php?route=editArticle&articleId= ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 47), "html", null, true);
            echo "\">Modifier</a>
                            <a href=\"../public/index.php?route=deleteArticle&articleId= ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 48), "html", null, true);
            echo "\">Supprimer</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </table>

            <h2>Commentaires signalés</h2>
            <table class=\"table-responsive\">
                <tr>
                    <th scope=\"row\">Id</th>
                    <th scope=\"row\">Pseudo</th>
                    <th scope=\"row\">Message</th>
                    <th scope=\"row\">Date</th>
                    <th scope=\"row\">Actions</th>
                </tr>
                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 64
            echo "                    <tr>
                        <td scope=\"col\"> ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 65), "html", null, true);
            echo " </td>
                        <td scope=\"col\"> ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getPseudo", [], "any", false, false, false, 66), "html", null, true);
            echo " </td>
                        <td scope=\"col\"> ";
            // line 67
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "method", false, false, false, 67), 0, 25), "html", null, true);
            echo " </td>
                        <td scope=\"col\"> ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getCreatedAt", [], "method", false, false, false, 68), "html", null, true);
            echo " </td>
                        <td scope=\"col\">
                            <a href=\"../public/index.php?route=unflagComment&commentId= ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 70), "html", null, true);
            echo " \">Désignaler le commentaire</a>
                            <a href=\"../public/index.php?route=deleteComment&commentId= ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 71), "html", null, true);
            echo " \">Supprimer le commentaire</a>>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            </table>

            <h2>Commentaires a valider</h2>
            <table class=\"table-responsive\">
                <tr>
                    <th scope=\"row\">Id</th>
                    <th scope=\"row\">Pseudo</th>
                    <th scope=\"row\">Message</th>
                    <th scope=\"row\">Date</th>
                    <th scope=\"row\">Actions</th>
                </tr>
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["statusComments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 87
            echo "                    <tr>
                        <td scope=\"col\"> ";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 88), "html", null, true);
            echo " </td>
                        <td scope=\"col\"> ";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getPseudo", [], "any", false, false, false, 89), "html", null, true);
            echo " </td>
                        <td scope=\"col\"> ";
            // line 90
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "method", false, false, false, 90), 0, 25), "html", null, true);
            echo " </td>
                        <td scope=\"col\"> ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getCreatedAt", [], "method", false, false, false, 91), "html", null, true);
            echo " </td>
                        <td scope=\"col\">
                            <a href=\"../public/index.php?route=validateComment&commentId= ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 93), "html", null, true);
            echo " \">Valider le commentaire</a>
                            <a href=\"../public/index.php?route=deleteComment&commentId= ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 94), "html", null, true);
            echo " \">Supprimer le commentaire</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            </table>

            <h2>Utilisateurs</h2>
            <table class=\"table-responsive\">
                <tr class=\"td_color\">
                    <th scope=\"row\">Id</th>
                    <th scope=\"row\">Pseudo</th>
                    <th scope=\"row\">Date</th>
                    <th scope=\"row\">Rôle</th>
                    <th scope=\"row\">Actions</th>
                </tr>
                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 110
            echo "                    <tr>
                        <td scope=\"col\"> ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 111), "html", null, true);
            echo " </td>
                        <td scope=\"col\"> ";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getPseudo", [], "method", false, false, false, 112), "html", null, true);
            echo " </td>
                        <td scope=\"col\">Créé le : ";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getCreatedAt", [], "method", false, false, false, 113), "html", null, true);
            echo " </td>
                        <td scope=\"col\"> ";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getRole", [], "method", false, false, false, 114), "html", null, true);
            echo " </td>
                        ";
            // line 115
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "getRole", [], "method", false, false, false, 115), "admin"))) {
                // line 116
                echo "                            <td scope=\"col\">compte admin</td>
                        ";
            } else {
                // line 118
                echo "                            <td scope=\"col\"><a href=\"../public/index.php?route=deleteUser&userId= ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 118), "html", null, true);
                echo " \">Supprimer le compte</a></td>
                        ";
            }
            // line 119
            echo " 
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "            </table>    
            <a class=\"margin bouton4\" href=\"../public/index.php\">Accueil</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 122,  305 => 119,  299 => 118,  295 => 116,  293 => 115,  289 => 114,  285 => 113,  281 => 112,  277 => 111,  274 => 110,  270 => 109,  257 => 98,  247 => 94,  243 => 93,  238 => 91,  234 => 90,  230 => 89,  226 => 88,  223 => 87,  219 => 86,  206 => 75,  196 => 71,  192 => 70,  187 => 68,  183 => 67,  179 => 66,  175 => 65,  172 => 64,  168 => 63,  155 => 52,  145 => 48,  141 => 47,  136 => 45,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  117 => 40,  113 => 39,  98 => 26,  94 => 17,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Administration{% endblock %}
{% block content %}
    <div class=\"center\">
        <div class=\"content_center\">
            <h3>Administration</h3>
            <a class=\"margin bouton4\" href=\"../public/index.php\">Accueil</a>
            <div class=\"message\">
                <p class=\"message_text\">
                    {{ session.show('add_article') }}
                    {{ session.show('edit_article') }}
                    {{ session.show('delete_article') }}
                    {{ session.show('add_comment') }}
                    {{ session.show('flag_comment') }}
                    {{ session.show('delete_comment') }}
                    {{ session.show('delete_user') }}
                    {{ session.show('validate_comment')}}
                    {# <?php echo \$this->session->show('add_article');?>
                    <?php echo \$this->session->show('edit_article'); ?>
                    <?php echo \$this->session->show('delete_article'); ?>
                    <?php echo \$this->session->show('add_comment'); ?>
                    <?php echo \$this->session->show('flag_comment'); ?>
                    <?php echo \$this->session->show('delete_comment'); ?>
                    <?php echo \$this->session->show('delete_user'); ?>
                    <?php echo \$this->session->show('validate_comment'); ?> #}
                </p>
            </div>
            <h4>Articles</h4>
            <a class=\"margin bouton4\" href=\"../public/index.php?route=addArticle\">Nouvel article</a>
            <table class=\"table-responsive\">
                <tr>
                    <th scope=\"row\">Id</th>
                    <th scope=\"row\">Pseudo</th>
                    <th scope=\"row\">Contenu</th>
                    <th scope=\"row\">Auteur</th>
                    <th scope=\"row\">Date</th>
                    <th scope=\"row\">Actions</th>
                </tr>
                {% for article in articles %}
                    <tr>
                        <td scope=\"col\"> {{ article.getId() }} </td>
                        <td scope=\"col\"> {{ article.getTitle() }} </td>
                        <td scope=\"col\"> {{ article.content()|slice(0,25)|striptags }} </td>
                        <td scope=\"col\"> {{ article.getAuthor() }} </td>
                        <td scope=\"col\"> {{ article.getCreatedAt() }} </td>
                        <td scope=\"col\">
                            <a href=\"../public/index.php?route=editArticle&articleId= {{ article.getId() }}\">Modifier</a>
                            <a href=\"../public/index.php?route=deleteArticle&articleId= {{ article.getId() }}\">Supprimer</a>
                        </td>
                    </tr>
                {% endfor %}
            </table>

            <h2>Commentaires signalés</h2>
            <table class=\"table-responsive\">
                <tr>
                    <th scope=\"row\">Id</th>
                    <th scope=\"row\">Pseudo</th>
                    <th scope=\"row\">Message</th>
                    <th scope=\"row\">Date</th>
                    <th scope=\"row\">Actions</th>
                </tr>
                {% for comment in comments %}
                    <tr>
                        <td scope=\"col\"> {{ comment.getId() }} </td>
                        <td scope=\"col\"> {{ comment.getPseudo }} </td>
                        <td scope=\"col\"> {{ comment.content()|slice(0,25) }} </td>
                        <td scope=\"col\"> {{ comment.getCreatedAt() }} </td>
                        <td scope=\"col\">
                            <a href=\"../public/index.php?route=unflagComment&commentId= {{ comment.getId() }} \">Désignaler le commentaire</a>
                            <a href=\"../public/index.php?route=deleteComment&commentId= {{ comment.getId() }} \">Supprimer le commentaire</a>>
                        </td>
                    </tr>
                {% endfor %}
            </table>

            <h2>Commentaires a valider</h2>
            <table class=\"table-responsive\">
                <tr>
                    <th scope=\"row\">Id</th>
                    <th scope=\"row\">Pseudo</th>
                    <th scope=\"row\">Message</th>
                    <th scope=\"row\">Date</th>
                    <th scope=\"row\">Actions</th>
                </tr>
                {% for comment in statusComments %}
                    <tr>
                        <td scope=\"col\"> {{ comment.getId() }} </td>
                        <td scope=\"col\"> {{ comment.getPseudo }} </td>
                        <td scope=\"col\"> {{ comment.content()|slice(0,25) }} </td>
                        <td scope=\"col\"> {{ comment.getCreatedAt() }} </td>
                        <td scope=\"col\">
                            <a href=\"../public/index.php?route=validateComment&commentId= {{ comment.getId() }} \">Valider le commentaire</a>
                            <a href=\"../public/index.php?route=deleteComment&commentId= {{ comment.getId() }} \">Supprimer le commentaire</a>
                        </td>
                    </tr>
                {% endfor %}
            </table>

            <h2>Utilisateurs</h2>
            <table class=\"table-responsive\">
                <tr class=\"td_color\">
                    <th scope=\"row\">Id</th>
                    <th scope=\"row\">Pseudo</th>
                    <th scope=\"row\">Date</th>
                    <th scope=\"row\">Rôle</th>
                    <th scope=\"row\">Actions</th>
                </tr>
                {% for user in users %}
                    <tr>
                        <td scope=\"col\"> {{ user.getId() }} </td>
                        <td scope=\"col\"> {{ user.getPseudo() }} </td>
                        <td scope=\"col\">Créé le : {{ user.getCreatedAt() }} </td>
                        <td scope=\"col\"> {{ user.getRole() }} </td>
                        {% if user.getRole() == 'admin'%}
                            <td scope=\"col\">compte admin</td>
                        {% else %}
                            <td scope=\"col\"><a href=\"../public/index.php?route=deleteUser&userId= {{ user.getId() }} \">Supprimer le compte</a></td>
                        {% endif %} 
                    </tr>
                {% endfor %}
            </table>    
            <a class=\"margin bouton4\" href=\"../public/index.php\">Accueil</a>
        </div>
    </div>
{% endblock content %}
{# <?php \$this->title = 'Administration'; ?>
<div class=\"center\">
    <div class=\"content_center\">
        <h3>Administration</h3>
        <a class=\"margin bouton4\" href=\"../public/index.php\">Accueil</a>
        <div class=\"message\">
            <p class=\"message_text\">
                <?php echo \$this->session->show('add_article');?>
                <?php echo \$this->session->show('edit_article'); ?>
                <?php echo \$this->session->show('delete_article'); ?>
                <?php echo \$this->session->show('add_comment'); ?>
                <?php echo \$this->session->show('flag_comment'); ?>
                <?php echo \$this->session->show('delete_comment'); ?>
                <?php echo \$this->session->show('delete_user'); ?>
                <?php echo \$this->session->show('validate_comment'); ?>
            </p>
        </div>
        <h4>Articles</h4>
        <a class=\"margin bouton4\" href=\"../public/index.php?route=addArticle\">Nouvel article</a>
        <table class=\"table-responsive\">
            <tr>
                <th scope=\"row\">Id</th>
                <th scope=\"row\">Pseudo</th>
                <th scope=\"row\">Contenu</th>
                <th scope=\"row\">Auteur</th>
                <th scope=\"row\">Date</th>
                <th scope=\"row\">Actions</th>
            </tr>
            <?php
            foreach (\$articles as \$article)
            {
                ?>
                <tr>
                    <td scope=\"col\"><?php echo htmlspecialchars(\$article->getId());?></td>
                    <td scope=\"col\"><?php echo htmlspecialchars(\$article->getTitle());?></a></td>
                    <td scope=\"col\"><?php echo substr(strip_tags(\$article->getContent()), 0, 150);?></td>
                    <td scope=\"col\"><?php echo htmlspecialchars(\$article->getAuthor());?></td>
                    <td scope=\"col\">Créé le : <?php echo htmlspecialchars(\$article->getCreatedAt());?></td>
                    <td scope=\"col\">
                        <a href=\"../public/index.php?route=editArticle&articleId=<?php echo \$article->getId(); ?>\">Modifier</a>
                        <a href=\"../public/index.php?route=deleteArticle&articleId=<?php echo \$article->getId(); ?>\">Supprimer</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

        <h2>Commentaires signalés</h2>
        <table class=\"table-responsive\">
            <tr>
                <th scope=\"row\">Id</th>
                <th scope=\"row\">Pseudo</th>
                <th scope=\"row\">Message</th>
                <th scope=\"row\">Date</th>
                <th scope=\"row\">Actions</th>
            </tr>
            <?php
            foreach (\$comments as \$comment)
            {?>
                <tr>
                    <td scope=\"col\"><?php echo htmlspecialchars(\$comment->getId());?></td>
                    <td scope=\"col\"><?php echo htmlspecialchars(\$comment->getPseudo());?></td>
                    <td scope=\"col\"><?php echo substr(htmlspecialchars(\$comment->getContent()), 0, 150);?></td>
                    <td scope=\"col\">Créé le : <?php echo htmlspecialchars(\$comment->getCreatedAt());?></td>
                    <td scope=\"col\">
                        <a href=\"../public/index.php?route=unflagComment&commentId=<?php echo \$comment->getId(); ?>\">Désignaler le commentaire</a>
                        <a href=\"../public/index.php?route=deleteComment&commentId=<?php echo \$comment->getId(); ?>\">Supprimer le commentaire</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

        <h2>Commentaires a valider</h2>
        <table class=\"table-responsive\">
            <tr>
                <th scope=\"row\">Id</th>
                <th scope=\"row\">Pseudo</th>
                <th scope=\"row\">Message</th>
                <th scope=\"row\">Date</th>
                <th scope=\"row\">Actions</th>
            </tr>
            <?php
            foreach (\$statusComments as \$comment)
            {?>
                <tr>
                    <td scope=\"col\"><?php echo htmlspecialchars(\$comment->getId());?></td>
                    <td scope=\"col\"><?php echo htmlspecialchars(\$comment->getPseudo());?></td>
                    <td scope=\"col\"><?php echo substr(htmlspecialchars(\$comment->getContent()), 0, 150);?></td>
                    <td scope=\"col\">Créé le : <?php echo htmlspecialchars(\$comment->getCreatedAt());?></td>
                    <td scope=\"col\">
                        <a href=\"../public/index.php?route=validateComment&commentId=<?php echo \$comment->getId(); ?>\">Valider le commentaire</a>
                        <a href=\"../public/index.php?route=deleteComment&commentId=<?php echo \$comment->getId(); ?>\">Supprimer le commentaire</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

        <h2>Utilisateurs</h2>
        <table class=\"table-responsive\">
            <tr class=\"td_color\">
                <th scope=\"row\">Id</th>
                <th scope=\"row\">Pseudo</th>
                <th scope=\"row\">Date</th>
                <th scope=\"row\">Rôle</th>
                <th scope=\"row\">Actions</th>
            </tr>
            <?php
            foreach (\$users as \$user)
            {
                ?>
                <tr>
                    <td scope=\"col\"><?php echo htmlspecialchars(\$user->getId());?></td>
                    <td scope=\"col\"><?php echo htmlspecialchars(\$user->getPseudo());?></td>
                    <td scope=\"col\">Créé le : <?php echo htmlspecialchars(\$user->getCreatedAt());?></td>
                    <td scope=\"col\"><?php echo htmlspecialchars(\$user->getRole());?></td>
                    <?php if(\$user->getRole() === 'admin') { ?>
                        <td scope=\"col\">compte admin</td>
                    <?php }else{?>
                        <td scope=\"col\"><a href=\"../public/index.php?route=deleteUser&userId=<?php echo \$user->getId(); ?>\">Supprimer le compte</a></td>
                    <?php } ?>    
                    </tr>
                <?php
            }
            ?>
        </table>    
        <a class=\"margin bouton4\" href=\"../public/index.php\">Accueil</a>
    </div>
</div> #}
", "administration.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\administration.html.twig");
    }
}
