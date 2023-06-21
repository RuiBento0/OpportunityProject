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
class __TwigTemplate_c80993450851cd31349329e2378a6a0852d815a5841ec945e3de7d1722d330df extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "support/reports.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "support/reports.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "support/reports.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
.button-container {
            display: flex;
            justify-content: center;
            align-items: flex-start; 
            height: 100px;
\t\t\tmargin-top:50px;
        }

        .button-wrapper {
            text-align: center;
            margin: 0 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #fff;
            color: #333;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
            transition: opacity 0.3s ease-in-out;
        }

        .button:hover {
            opacity: 0.7;
        }

        .explanation-container {
            display: flex;
            justify-content: center;
           
        }

        .explanation-box {
            width: 300px;
            height: 200px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            box-sizing: border-box;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
            margin: 0 10px;
        }
</style>




\t<div class=\"button-container\">
        <div class=\"button-wrapper\">
            <p>";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accounts Report", [], "messages");
        echo "</p>
\t\t\t<form action=\"/reports/accounts\">
                    <button class=\"button\">";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Report", [], "messages");
        echo "</button>
                </form>
        </div>
        <div class=\"button-wrapper\">
            <p>";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Converted Report", [], "messages");
        echo "</p>
            \t<form action=\"/reports/converted\">
                    <button class=\"button\">";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Report", [], "messages");
        echo "</button>
                </form>
        </div>
    </div>

    <div class=\"explanation-container\">
        <div class=\"explanation-box\">
            <h3>";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accounts Report", [], "messages");
        echo "</h3>
            <p>";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here you see all the accounts and the opportunities for each account.", [], "messages");
        echo "</p>
        </div>
        <div class=\"explanation-box\">
            <h3>";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Converted Report", [], "messages");
        echo "</h3>
            <p>";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here you see all the Opportunities Converted.", [], "messages");
        echo "</p>
        </div>
    </div>

        ";
        // line 97
        echo "  

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  171 => 97,  164 => 77,  160 => 76,  154 => 73,  150 => 72,  140 => 65,  135 => 63,  128 => 59,  123 => 57,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<style>
.button-container {
            display: flex;
            justify-content: center;
            align-items: flex-start; 
            height: 100px;
\t\t\tmargin-top:50px;
        }

        .button-wrapper {
            text-align: center;
            margin: 0 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #fff;
            color: #333;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
            transition: opacity 0.3s ease-in-out;
        }

        .button:hover {
            opacity: 0.7;
        }

        .explanation-container {
            display: flex;
            justify-content: center;
           
        }

        .explanation-box {
            width: 300px;
            height: 200px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            box-sizing: border-box;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
            margin: 0 10px;
        }
</style>




\t<div class=\"button-container\">
        <div class=\"button-wrapper\">
            <p>{% trans %}Accounts Report{% endtrans %}</p>
\t\t\t<form action=\"/reports/accounts\">
                    <button class=\"button\">{% trans %}Report{% endtrans %}</button>
                </form>
        </div>
        <div class=\"button-wrapper\">
            <p>{% trans %}Converted Report{% endtrans %}</p>
            \t<form action=\"/reports/converted\">
                    <button class=\"button\">{% trans %}Report{% endtrans %}</button>
                </form>
        </div>
    </div>

    <div class=\"explanation-container\">
        <div class=\"explanation-box\">
            <h3>{% trans %}Accounts Report{% endtrans %}</h3>
            <p>{% trans %}Here you see all the accounts and the opportunities for each account.{% endtrans %}</p>
        </div>
        <div class=\"explanation-box\">
            <h3>{% trans %}Converted Report{% endtrans %}</h3>
            <p>{% trans %}Here you see all the Opportunities Converted.{% endtrans %}</p>
        </div>
    </div>

        {# 
            <div class=\"button-container\">
                <h3>Report 1</h3> <!-- Added inline style to set the color to white -->
                <form action=\"/support/reports\">
                    <button href=\"/reports/accounts\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0\">{% trans %}Generate Report{% endtrans %}</button>
                </form>
            </div>
        </div>
        <div class=\"box\">
            <div class=\"button-container\">
                <h3>Report 2</h3> <!-- Added inline style to set the color to white -->
                <form action=\"/support/reports\">
                    <button href=\"/reports/converted\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0\">{% trans %}Generate Report{% endtrans %}</button>
                </form>
            </div>
        </div> #}
  

{% endblock %}", "support/reports.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\support\\reports.html.twig");
    }
}
