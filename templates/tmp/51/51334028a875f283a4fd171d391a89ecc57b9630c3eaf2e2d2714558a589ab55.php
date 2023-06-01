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
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 32
            echo "                    <tr>
                        <td scope=\"row\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getTitle", [], "method", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 35
            echo twig_escape_filter($this->env, twig_striptags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getContent", [], "method", false, false, false, 35), 0, 25)), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getAuthor", [], "method", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getCreatedAt", [], "method", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td scope=\"row\">
                            <a href=\"../public/index.php?route=editArticle&articleId=";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 39), "html", null, true);
            echo "\">Modifier</a>
                            <a href=\"../public/index.php?route=deleteArticle&articleId=";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 40), "html", null, true);
            echo "\">Supprimer</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
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
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 56
            echo "                    <tr>
                        <td scope=\"row\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 57), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getPseudo", [], "method", false, false, false, 58), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 59
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getContent", [], "method", false, false, false, 59), 0, 25), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getCreatedAt", [], "method", false, false, false, 60), "html", null, true);
            echo "</td>
                        <td scope=\"row\">
                            <a href=\"../public/index.php?route=unflagComment&commentId=";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 62), "html", null, true);
            echo "\">Désignaler le commentaire</a>
                            <a href=\"../public/index.php?route=deleteComment&commentId=";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 63), "html", null, true);
            echo "\">Supprimer le commentaire</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["statusComments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 79
            echo "                    <tr>
                        <td scope=\"row\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 80), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getPseudo", [], "method", false, false, false, 81), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 82
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getContent", [], "method", false, false, false, 82), 0, 25), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getCreatedAt", [], "method", false, false, false, 83), "html", null, true);
            echo "</td>
                        <td scope=\"row\">
                            <a href=\"../public/index.php?route=validateComment&commentId=";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 85), "html", null, true);
            echo "\">Valider le commentaire</a>
                            <a href=\"../public/index.php?route=deleteComment&commentId=";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "method", false, false, false, 86), "html", null, true);
            echo "\">Supprimer le commentaire</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
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
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 102
            echo "                    <tr>
                        <td scope=\"row\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 103), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getPseudo", [], "method", false, false, false, 104), "html", null, true);
            echo "</td>
                        <td scope=\"row\">Créé le : ";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getCreatedAt", [], "method", false, false, false, 105), "html", null, true);
            echo "</td>
                        <td scope=\"row\">";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getRole", [], "method", false, false, false, 106), "html", null, true);
            echo "</td>
                        ";
            // line 107
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "getRole", [], "method", false, false, false, 107), "admin"))) {
                // line 108
                echo "                            <td scope=\"row\">compte admin</td>
                        ";
            } else {
                // line 110
                echo "                            <td scope=\"row\"><a href=\"../public/index.php?route=deleteUser&userId=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 110), "html", null, true);
                echo "\">Supprimer le compte</a></td>
                        ";
            }
            // line 112
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
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
        return array (  310 => 114,  303 => 112,  297 => 110,  293 => 108,  291 => 107,  287 => 106,  283 => 105,  279 => 104,  275 => 103,  272 => 102,  268 => 101,  255 => 90,  245 => 86,  241 => 85,  236 => 83,  232 => 82,  228 => 81,  224 => 80,  221 => 79,  217 => 78,  204 => 67,  194 => 63,  190 => 62,  185 => 60,  181 => 59,  177 => 58,  173 => 57,  170 => 56,  166 => 55,  153 => 44,  143 => 40,  139 => 39,  134 => 37,  130 => 36,  126 => 35,  122 => 34,  118 => 33,  115 => 32,  111 => 31,  94 => 17,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
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
                        <td scope=\"row\">{{ article.getTitle() }}</td>
                        <td scope=\"row\">{{ article.getContent()|slice(0, 25)|striptags }}</td>
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
                        <td scope=\"row\">{{ comment.getPseudo() }}</td>
                        <td scope=\"row\">{{ comment.getContent()|slice(0, 25) }}</td>
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
                        <td scope=\"row\">{{ comment.getPseudo() }}</td>
                        <td scope=\"row\">{{ comment.getContent()|slice(0, 25) }}</td>
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
                        <td scope=\"row\">{{ user.getPseudo() }}</td>
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
