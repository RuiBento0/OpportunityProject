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
class __TwigTemplate_efda0f3a0a23909bd8e3985a798bb12d25adcf4d9242bea07d852791cbff19f1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "options/options.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "options/options.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">CRM Central</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/options\">Options</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Options</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
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

                                            <tr>
                                                <td><a href=\"/options/users\">Users</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/users\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/roles\">Roles</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/roles\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>
        
                                            <tr>
                                                <td><a href=\"/options/departments\">Departments</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/departments\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/categories\">Categories</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/categories\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/entities\">Entities</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/entities\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                             <tr>
                                                <td><a href=\"/options/priorities\">Priorities</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/priorities\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/status\">Status</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/status\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/stages\">Stages</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/stages\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/area\">Area</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/area\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/accountstype\">Accounts Type</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/accountstype\"><i class=\"las la-pen text-secondary font-16\"></i></a>
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
        return "options/options.html.twig";
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
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">CRM Central</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/options\">Options</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Options</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
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

                                            <tr>
                                                <td><a href=\"/options/users\">Users</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/users\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/roles\">Roles</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/roles\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>
        
                                            <tr>
                                                <td><a href=\"/options/departments\">Departments</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/departments\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/categories\">Categories</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/categories\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/entities\">Entities</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/entities\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                             <tr>
                                                <td><a href=\"/options/priorities\">Priorities</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/priorities\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/status\">Status</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/status\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/stages\">Stages</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/stages\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/area\">Area</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/area\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href=\"/options/accountstype\">Accounts Type</td>
                                                <td align=\"left\">                                                       
                                                    <a href=\"/options/accountstype\"><i class=\"las la-pen text-secondary font-16\"></i></a>
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

{% endblock %}", "options/options.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\options\\options.html.twig");
    }
}
