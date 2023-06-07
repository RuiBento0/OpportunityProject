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

/* authentication/authentication.html.twig */
class __TwigTemplate_e73eda2776ea50c3047139687d524a9e90152d96a87821f65acce48c0f345466 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authentication/authentication.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "authentication/authentication.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/authentication\">Authentication</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Authentication</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                <div class=\"row\" style=\"width: 40%;\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-6\">                      
                                            <h4 class=\"card-title\">Authentication Details</h4>             
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
                                                <td><a href=\"/authentication/users\">Users</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/authentication/users\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/authentication/roles\">Roles</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/authentication/roles\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div><!--end row-->


                    <div class=\"row\" style=\"width: 40%;\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-6\">                      
                                            <h4 class=\"card-title\">Options Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->

                                <div class=\"card-body\">    
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">
                                            <thead class=\"thead-light\">

                                            </thead>
                                            <tbody>

                                            

                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div><!--end row-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authentication/authentication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/authentication\">Authentication</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Authentication</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                <div class=\"row\" style=\"width: 40%;\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-6\">                      
                                            <h4 class=\"card-title\">Authentication Details</h4>             
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
                                                <td><a href=\"/authentication/users\">Users</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/authentication/users\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/authentication/roles\">Roles</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/authentication/roles\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div><!--end row-->


                    <div class=\"row\" style=\"width: 40%;\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-6\">                      
                                            <h4 class=\"card-title\">Options Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->

                                <div class=\"card-body\">    
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">
                                            <thead class=\"thead-light\">

                                            </thead>
                                            <tbody>

                                            

                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div><!--end row-->

{% endblock %}", "authentication/authentication.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\authentication\\authentication.html.twig");
    }
}
