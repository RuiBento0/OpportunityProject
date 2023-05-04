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

/* opportunities/index.html.twig */
class __TwigTemplate_9f34d51ce1de73d204bfefaacf62ef19cb226d82d9cc95ead666266be01b3164 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportunities/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "opportunities/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"example-wrapper\">
    <h1>Hello </h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("C:/Users/RuiMiguelCarvalhoBen/Documents/symfony-cli/my_project/src/Controller/OpportunitiesController.php", 0), "html", null, true);
        echo "\">src/Controller/OpportunitiesController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("C:/Users/RuiMiguelCarvalhoBen/Documents/symfony-cli/my_project/templates/opportunities/index.html.twig", 0), "html", null, true);
        echo "\">templates/opportunities/index.html.twig</a></code></li>
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "opportunities/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  67 => 10,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"example-wrapper\">
    <h1>Hello </h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ 'C:/Users/RuiMiguelCarvalhoBen/Documents/symfony-cli/my_project/src/Controller/OpportunitiesController.php'|file_link(0) }}\">src/Controller/OpportunitiesController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ 'C:/Users/RuiMiguelCarvalhoBen/Documents/symfony-cli/my_project/templates/opportunities/index.html.twig'|file_link(0) }}\">templates/opportunities/index.html.twig</a></code></li>
    </ul>
</div>
{% endblock %}
", "opportunities/index.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\opportunities\\index.html.twig");
    }
}
