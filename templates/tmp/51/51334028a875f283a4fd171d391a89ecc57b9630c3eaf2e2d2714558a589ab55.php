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
            <div class=\"message\">
                <p class=\"message_text\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "add_article"], "method", false, false, false, 9), "html", null, true);
        echo "
                    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "edit_article"], "method", false, false, false, 10), "html", null, true);
        echo "
                    ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "delete_article"], "method", false, false, false, 11), "html", null, true);
        echo "
                    ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "add_comment"], "method", false, false, false, 12), "html", null, true);
        echo "
                    ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "flag_comment"], "method", false, false, false, 13), "html", null, true);
        echo "
                    ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "delete_comment"], "method", false, false, false, 14), "html", null, true);
        echo "
                    ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "delete_user"], "method", false, false, false, 15), "html", null, true);
        echo "
                    ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "validate_comment"], "method", false, false, false, 16), "html", null, true);
        echo "
                </p>
            </div>
            <h4>Articles</h4>
            <a class=\"margin bouton4\" href=\"../public/index.php?route=addArticle\">Nouvel article</a>
            <table class=\"table-responsive\">
                <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Pseudo</th>
                    <th scope=\"col\">Contenu</th>
                    <th scope=\"col\">Auteur</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Actions</th>
                </tr>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 31
            echo "                    <tr>
                        <td scope=\"row\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["article"], "getTitle", [], "method", false, false, false, 33);
            echo "</td>
                        <td scope=\"row\">";
            // line 34
            echo twig_striptags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getContent", [], "method", false, false, false, 34), 0, 25));
            echo "</td>
                        <td scope=\"row\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getAuthor", [], "method", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getCreatedAt", [], "method", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td scope=\"row\">
                            <a href=\"../public/index.php?route=editArticle&articleId=";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 38), "html", null, true);
            echo "\">Modifier</a>
                            <a href=\"../public/index.php?route=deleteArticle&articleId=";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 39), "html", null, true);
            echo "\">Supprimer</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </table>

            <h2>Commentaires signalés</h2>
            <table class=\"table-responsive\">
                <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Pseudo</th>
                    <th scope=\"col\">Message</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Actions</th>
                </tr>
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 55
            echo "                    <tr>
                        <td scope=\"row\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 56), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 57
            echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["comment"], "getPseudo", [], "method", false, false, false, 57)), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 58
            echo twig_escape_filter($this->env, twig_striptags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getContent", [], "method", false, false, false, 58), 0, 25)), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getCreatedAt", [], "method", false, false, false, 59), "html", null, true);
            echo "</td>
                        <td scope=\"row\">
                            <a href=\"../public/index.php?route=unflagComment&commentId=";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 61), "html", null, true);
            echo "\">Désignaler le commentaire</a>
                            <a href=\"../public/index.php?route=deleteComment&commentId=";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 62), "html", null, true);
            echo "\">Supprimer le commentaire</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </table>

            <h2>Commentaires à valider</h2>
            <table class=\"table-responsive\">
                <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Pseudo</th>
                    <th scope=\"col\">Message</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Actions</th>
                </tr>
                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["statusComments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 78
            echo "                    <tr>
                        <td scope=\"row\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 79), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 80
            echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["comment"], "getPseudo", [], "method", false, false, false, 80)), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 81
            echo twig_escape_filter($this->env, twig_striptags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getContent", [], "method", false, false, false, 81), 0, 25)), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getCreatedAt", [], "method", false, false, false, 82), "html", null, true);
            echo "</td>
                        <td scope=\"row\">
                            <a href=\"../public/index.php?route=validateComment&commentId=";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 84), "html", null, true);
            echo "\">Valider le commentaire</a>
                            <a href=\"../public/index.php?route=deleteComment&commentId=";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 85), "html", null, true);
            echo "\">Supprimer le commentaire</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </table>

            <h2>Utilisateurs</h2>
            <table class=\"table-responsive\">
                <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Pseudo</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Rôle</th>
                    <th scope=\"col\">Actions</th>
                </tr>
                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 101
            echo "                    <tr>
                        <td scope=\"row\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 102), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 103
            echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["user"], "getPseudo", [], "method", false, false, false, 103)), "html", null, true);
            echo "</td>
                        <td scope=\"row\">Créé le : ";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getCreatedAt", [], "method", false, false, false, 104), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getRole", [], "method", false, false, false, 105), "html", null, true);
            echo "</td>
                        ";
            // line 106
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "getRole", [], "method", false, false, false, 106), "admin"))) {
                // line 107
                echo "                            <td scope=\"row\">compte admin</td>
                        ";
            } else {
                // line 109
                echo "                            <td scope=\"row\"><a href=\"../public/index.php?route=deleteUser&userId=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 109), "html", null, true);
                echo "\">Supprimer le compte</a></td>
                        ";
            }
            // line 111
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
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
        return array (  309 => 113,  302 => 111,  296 => 109,  292 => 107,  290 => 106,  286 => 105,  282 => 104,  278 => 103,  274 => 102,  271 => 101,  267 => 100,  254 => 89,  244 => 85,  240 => 84,  235 => 82,  231 => 81,  227 => 80,  223 => 79,  220 => 78,  216 => 77,  203 => 66,  193 => 62,  189 => 61,  184 => 59,  180 => 58,  176 => 57,  172 => 56,  169 => 55,  165 => 54,  152 => 43,  142 => 39,  138 => 38,  133 => 36,  129 => 35,  125 => 34,  121 => 33,  117 => 32,  114 => 31,  110 => 30,  93 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Administration{% endblock %}
{% block content %}
    <div class=\"center\">
        <div class=\"content_center\">
            <h3>Administration</h3>
            <div class=\"message\">
                <p class=\"message_text\">
                    {{ session.show('add_article') }}
                    {{ session.show('edit_article') }}
                    {{ session.show('delete_article') }}
                    {{ session.show('add_comment') }}
                    {{ session.show('flag_comment') }}
                    {{ session.show('delete_comment') }}
                    {{ session.show('delete_user') }}
                    {{ session.show('validate_comment') }}
                </p>
            </div>
            <h4>Articles</h4>
            <a class=\"margin bouton4\" href=\"../public/index.php?route=addArticle\">Nouvel article</a>
            <table class=\"table-responsive\">
                <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Pseudo</th>
                    <th scope=\"col\">Contenu</th>
                    <th scope=\"col\">Auteur</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Actions</th>
                </tr>
                {% for article in articles %}
                    <tr>
                        <td scope=\"row\">{{ article.getId() }}</td>
                        <td scope=\"row\">{{ article.getTitle()|raw }}</td>
                        <td scope=\"row\">{{ article.getContent()|slice(0, 25)|striptags|raw }}</td>
                        <td scope=\"row\">{{ article.getAuthor() }}</td>
                        <td scope=\"row\">{{ article.getCreatedAt() }}</td>
                        <td scope=\"row\">
                            <a href=\"../public/index.php?route=editArticle&articleId={{ article.getId() }}\">Modifier</a>
                            <a href=\"../public/index.php?route=deleteArticle&articleId={{ article.getId() }}\">Supprimer</a>
                        </td>
                    </tr>
                {% endfor %}
            </table>

            <h2>Commentaires signalés</h2>
            <table class=\"table-responsive\">
                <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Pseudo</th>
                    <th scope=\"col\">Message</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Actions</th>
                </tr>
                {% for comment in comments %}
                    <tr>
                        <td scope=\"row\">{{ comment.getId() }}</td>
                        <td scope=\"row\">{{ comment.getPseudo()|raw|striptags }}</td>
                        <td scope=\"row\">{{ comment.getContent()|slice(0, 25)|raw|striptags }}</td>
                        <td scope=\"row\">{{ comment.getCreatedAt() }}</td>
                        <td scope=\"row\">
                            <a href=\"../public/index.php?route=unflagComment&commentId={{ comment.getId() }}\">Désignaler le commentaire</a>
                            <a href=\"../public/index.php?route=deleteComment&commentId={{ comment.getId() }}\">Supprimer le commentaire</a>
                        </td>
                    </tr>
                {% endfor %}
            </table>

            <h2>Commentaires à valider</h2>
            <table class=\"table-responsive\">
                <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Pseudo</th>
                    <th scope=\"col\">Message</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Actions</th>
                </tr>
                {% for comment in statusComments %}
                    <tr>
                        <td scope=\"row\">{{ comment.getId() }}</td>
                        <td scope=\"row\">{{ comment.getPseudo()|raw|striptags }}</td>
                        <td scope=\"row\">{{ comment.getContent()|slice(0, 25)|raw|striptags }}</td>
                        <td scope=\"row\">{{ comment.getCreatedAt() }}</td>
                        <td scope=\"row\">
                            <a href=\"../public/index.php?route=validateComment&commentId={{ comment.getId() }}\">Valider le commentaire</a>
                            <a href=\"../public/index.php?route=deleteComment&commentId={{ comment.getId() }}\">Supprimer le commentaire</a>
                        </td>
                    </tr>
                {% endfor %}
            </table>

            <h2>Utilisateurs</h2>
            <table class=\"table-responsive\">
                <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Pseudo</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Rôle</th>
                    <th scope=\"col\">Actions</th>
                </tr>
                {% for user in users %}
                    <tr>
                        <td scope=\"row\">{{ user.getId() }}</td>
                        <td scope=\"row\">{{ user.getPseudo()|raw|striptags }}</td>
                        <td scope=\"row\">Créé le : {{ user.getCreatedAt() }}</td>
                        <td scope=\"row\">{{ user.getRole() }}</td>
                        {% if user.getRole() == 'admin' %}
                            <td scope=\"row\">compte admin</td>
                        {% else %}
                            <td scope=\"row\"><a href=\"../public/index.php?route=deleteUser&userId={{ user.getId() }}\">Supprimer le compte</a></td>
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
            <a class=\"margin bouton4\" href=\"../public/index.php\">Accueil</a>
        </div>
    </div>
{% endblock content %}


", "administration.html.twig", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\administration.html.twig");
    }
}
