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

/* users/show.html.twig */
class __TwigTemplate_9c4b60668332b3427d0297e6b7eeb985cfe39152b27cc6e9fc63d89c3956a023 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "users/show.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/authentication/users \">User</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Show</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">User ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                                       
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form action=\"/authentication/users\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Email</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                        </div>
                                        
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Role</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "userRole", [], "any", false, false, false, 58), "role", [], "any", false, false, false, 58), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">User Status</label>
                                                    <div class=\"form-control\">
                                                    ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "active", [], "any", false, false, false, 65) == 1)) {
            // line 66
            echo "                                                            Active
                                                    ";
        }
        // line 68
        echo "
                                                    ";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "active", [], "any", false, false, false, 69) == 0)) {
            // line 70
            echo "                                                            Disable
                                                    ";
        }
        // line 72
        echo "                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                            <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created At</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "createdat", [], "any", false, false, false, 86), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated At</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 93
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "updatedat", [], "any", false, false, false, 93), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                       

                                        </div>

                                        <br>

                                        <div class=\"form-group\"> 
                                            <button style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\"  onclick=\"window.history.back()\" >Back</button>                                                                                           
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
        return "users/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 93,  169 => 86,  158 => 78,  150 => 72,  146 => 70,  144 => 69,  141 => 68,  137 => 66,  135 => 65,  125 => 58,  112 => 48,  102 => 41,  84 => 26,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/authentication/users \">User</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Show</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">User {{ user.name }}</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                                       
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form action=\"/authentication/users\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    <div class=\"form-control\">
                                                        {{ user.name }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Email</label>
                                                    <div class=\"form-control\">
                                                        {{ user.email }}
                                                    </div>
                                            </div>
                                        </div>
                                        
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Role</label>
                                                    <div class=\"form-control\">
                                                        {{ user.userRole.role }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">User Status</label>
                                                    <div class=\"form-control\">
                                                    {% if user.active == 1 %}
                                                            Active
                                                    {% endif %}

                                                    {% if user.active == 0 %}
                                                            Disable
                                                    {% endif %}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        {{ user.id }}
                                                    </div>
                                            </div>
                                            
                                            <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created At</label>
                                                    <div class=\"form-control\">
                                                        {{ user.createdat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated At</label>
                                                    <div class=\"form-control\">
                                                        {{ user.updatedat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                       

                                        </div>

                                        <br>

                                        <div class=\"form-group\"> 
                                            <button style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\"  onclick=\"window.history.back()\" >Back</button>                                                                                           
                                        </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

{% endblock %}", "users/show.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\users\\show.html.twig");
    }
}
