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

/* options/options.html.twig */
class __TwigTemplate_d70eef132b7d5055450ca4acdacbbab70857615888b5eb9dffdea03d7c55952a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "options/options.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "options/options.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "options/options.html.twig", 1);
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
        echo "
   <div class=\"page-wrapper\">

            <!-- Page Content-->
            ";
        // line 9
        echo "
                <div class=\"container-fluid\">
                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"page-title-box\">
                                <div class=\"float-end\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">Business</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/options\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "messages");
        echo "</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List", [], "messages");
        echo "</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "messages");
        echo "</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                <div class=\"row\" style=\"width: 40%;\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-6\">                      
                                            <h4 class=\"card-title\">";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings Details", [], "messages");
        echo "</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->

                                <div class=\"card-body\">    
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">
                                            <thead class=\"thead-light\">

                                            </thead>
                                            <tbody>
        
                                            <tr>
                                                <td><a href=\"/options/departments\">";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Departments", [], "messages");
        echo "</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/departments\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/categories\">";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categories", [], "messages");
        echo "</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/categories\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/entities\">";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entities", [], "messages");
        echo "</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/entities\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                             <tr>
                                                <td><a href=\"/options/priorities\">";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Priorities", [], "messages");
        echo "</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/priorities\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/status\">";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "messages");
        echo "</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/status\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/stages\">";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stages", [], "messages");
        echo "</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/stages\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/area\">";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Area", [], "messages");
        echo "</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/area\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/accountstype\">";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accounts Type", [], "messages");
        echo "</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/accountstype\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                             <tr>
                                                <td><a href=\"/options/campaign\">";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Campaign", [], "messages");
        echo "</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/campaign\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/sources\">";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sources", [], "messages");
        echo "</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/sources\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div><!--end row-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "options/options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 110,  206 => 103,  196 => 96,  186 => 89,  176 => 82,  166 => 75,  156 => 68,  146 => 61,  136 => 54,  126 => 47,  109 => 33,  97 => 24,  91 => 21,  86 => 19,  74 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 

{% block body %}

   <div class=\"page-wrapper\">

            <!-- Page Content-->
            {# <div class=\"page-content-tab\"> #}

                <div class=\"container-fluid\">
                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"page-title-box\">
                                <div class=\"float-end\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">Business</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/options\">{% trans %}Settings{% endtrans %}</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">{% trans %}List{% endtrans %}</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">{% trans %}Settings{% endtrans %}</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                <div class=\"row\" style=\"width: 40%;\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-6\">                      
                                            <h4 class=\"card-title\">{% trans %}Settings Details{% endtrans %}</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->

                                <div class=\"card-body\">    
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">
                                            <thead class=\"thead-light\">

                                            </thead>
                                            <tbody>
        
                                            <tr>
                                                <td><a href=\"/options/departments\">{% trans %}Departments{% endtrans %}</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/departments\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/categories\">{% trans %}Categories{% endtrans %}</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/categories\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/entities\">{% trans %}Entities{% endtrans %}</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/entities\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                             <tr>
                                                <td><a href=\"/options/priorities\">{% trans %}Priorities{% endtrans %}</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/priorities\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/status\">{% trans %}Status{% endtrans %}</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/status\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/stages\">{% trans %}Stages{% endtrans %}</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/stages\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/area\">{% trans %}Area{% endtrans %}</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/area\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/accountstype\">{% trans %}Accounts Type{% endtrans %}</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/accountstype\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                             <tr>
                                                <td><a href=\"/options/campaign\">{% trans %}Campaign{% endtrans %}</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/campaign\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/sources\">{% trans %}Sources{% endtrans %}</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/sources\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div><!--end row-->

{% endblock %}", "options/options.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\options\\options.html.twig");
    }
}
