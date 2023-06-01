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

/* form_comment.php */
class __TwigTemplate_aeb78a0096ab1e9b112c59b23e257388c905074b3b0eeebc9fb8bfecb3cc4310 extends Template
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
        echo "<?php
\$route = isset(\$post) && \$post->get('id') ? 'editComment' : 'addComment';
\$submit = \$route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>

<form method=\"post\" action=\"../public/index.php?route=<?php echo \$route; ?>&articleId=<?php echo htmlspecialchars(\$article->getId()); ?>\">
    <label for=\"pseudo\">Pseudo</label><br>
    <input type=\"text\" id=\"pseudo\" name=\"pseudo\" value=\"<?php echo isset(\$post) ? htmlspecialchars(\$post->get('pseudo')): ''; ?>\"><br>
    <?php echo isset(\$errors['pseudo']) ? \$errors['pseudo'] : ''; ?>
    <label for=\"content\">Message</label><br>
    <textarea id=\"content\" name=\"content\"><?php echo isset(\$post) ? htmlspecialchars(\$post->get('content')): ''; ?></textarea><br>
    <?php echo isset(\$errors['content']) ? \$errors['content'] : ''; ?>
    <input type=\"submit\" value=\"<?php echo \$submit; ?>\" id=\"submit\" name=\"submit\">
</form>
";
    }

    public function getTemplateName()
    {
        return "form_comment.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
\$route = isset(\$post) && \$post->get('id') ? 'editComment' : 'addComment';
\$submit = \$route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>

<form method=\"post\" action=\"../public/index.php?route=<?php echo \$route; ?>&articleId=<?php echo htmlspecialchars(\$article->getId()); ?>\">
    <label for=\"pseudo\">Pseudo</label><br>
    <input type=\"text\" id=\"pseudo\" name=\"pseudo\" value=\"<?php echo isset(\$post) ? htmlspecialchars(\$post->get('pseudo')): ''; ?>\"><br>
    <?php echo isset(\$errors['pseudo']) ? \$errors['pseudo'] : ''; ?>
    <label for=\"content\">Message</label><br>
    <textarea id=\"content\" name=\"content\"><?php echo isset(\$post) ? htmlspecialchars(\$post->get('content')): ''; ?></textarea><br>
    <?php echo isset(\$errors['content']) ? \$errors['content'] : ''; ?>
    <input type=\"submit\" value=\"<?php echo \$submit; ?>\" id=\"submit\" name=\"submit\">
</form>
", "form_comment.php", "C:\\wamp64\\www\\cours php\\projet5php\\templates\\Form_comment.php");
    }
}
