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

/* roles/show.html.twig */
class __TwigTemplate_3da4f6e7c45ec7aa6a244a61c5f05525d10b5e4c278275961bd3757761ab4b8b extends Template
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
        return "./base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "roles/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "roles/show.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/authentication/roles\">Roles</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Show</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 26, $this->source); })()), "role", [], "any", false, false, false, 26), "html", null, true);
        echo "</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                                       
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form action=\"/authentication/roles\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 41, $this->source); })()), "role", [], "any", false, false, false, 41), "html", null, true);
        echo "
                                                    </div>

                                                    
                                            </div>
                                            
                                            

                                             <div class=\"col-md-1 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-5 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">User Status</label>
                                                    <div class=\"form-control\">
                                                    ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 59, $this->source); })()), "active", [], "any", false, false, false, 59) == 1)) {
            // line 60
            echo "                                                            Active
                                                    ";
        }
        // line 62
        echo "
                                                    ";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 63, $this->source); })()), "active", [], "any", false, false, false, 63) == 0)) {
            // line 64
            echo "                                                            Disable
                                                    ";
        }
        // line 66
        echo "                                                    </div>
                                            </div>

                                        </div>
                                            <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created By</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 75, $this->source); })()), "createdby", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created At</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 82, $this->source); })()), "createdat", [], "any", false, false, false, 82), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Update By</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 94, $this->source); })()), "updatedby", [], "any", false, false, false, 94), "name", [], "any", false, false, false, 94), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated At</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 101
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 101, $this->source); })()), "updateat", [], "any", false, false, false, 101), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        

                                        <br>

                                        <div class=\"form-group\"> 
                                            <button style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\">Back</button>                                                                                           
                                        </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "roles/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 101,  177 => 94,  162 => 82,  152 => 75,  141 => 66,  137 => 64,  135 => 63,  132 => 62,  128 => 60,  126 => 59,  116 => 52,  102 => 41,  84 => 26,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

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
                                        <li class=\"breadcrumb-item\"><a href=\"/authentication/roles\">Roles</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Show</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">{{ role.role }}</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                                       
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form action=\"/authentication/roles\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    <div class=\"form-control\">
                                                        {{ role.role }}
                                                    </div>

                                                    
                                            </div>
                                            
                                            

                                             <div class=\"col-md-1 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        {{ role.id }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-5 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">User Status</label>
                                                    <div class=\"form-control\">
                                                    {% if role.active == 1 %}
                                                            Active
                                                    {% endif %}

                                                    {% if role.active == 0 %}
                                                            Disable
                                                    {% endif %}
                                                    </div>
                                            </div>

                                        </div>
                                            <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created By</label>
                                                    <div class=\"form-control\">
                                                        {{ role.createdby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created At</label>
                                                    <div class=\"form-control\">
                                                        {{ role.createdat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Update By</label>
                                                    <div class=\"form-control\">
                                                        {{ role.updatedby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated At</label>
                                                    <div class=\"form-control\">
                                                        {{ role.updateat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        

                                        <br>

                                        <div class=\"form-group\"> 
                                            <button style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\">Back</button>                                                                                           
                                        </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

{% endblock %}", "roles/show.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\roles\\show.html.twig");
    }
}
