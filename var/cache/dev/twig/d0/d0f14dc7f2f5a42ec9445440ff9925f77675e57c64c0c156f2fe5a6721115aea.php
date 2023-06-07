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

/* support/reports.html.twig */
class __TwigTemplate_fbf6bad17cb1482c5aa01ee86339b7840dd5bee322c46cc18898b0f59ce89bc3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "support/reports.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "support/reports.html.twig", 1);
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
     <form action=\"/support/reports\">
                                        <div class=\"form-group\">
                                            <a href=\"/reports/accounts\" style=\"float:left; margin-right: 5px;\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0\">Report</a>                                                                                           
                                        </div>
                                        <div class=\"form-group\">
                                            <a href=\"/reports/converted\" style=\"float:left; margin-right: 5px;\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0\">Report</a>                                                                                         
                                        </div>
                                    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "support/reports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

     <form action=\"/support/reports\">
                                        <div class=\"form-group\">
                                            <a href=\"/reports/accounts\" style=\"float:left; margin-right: 5px;\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0\">Report</a>                                                                                           
                                        </div>
                                        <div class=\"form-group\">
                                            <a href=\"/reports/converted\" style=\"float:left; margin-right: 5px;\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0\">Report</a>                                                                                         
                                        </div>
                                    </form>
{% endblock %} ", "support/reports.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\support\\reports.html.twig");
    }
}
