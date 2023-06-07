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

/* priorities/show.html.twig */
class __TwigTemplate_199994a5170f8074944a29e6e93e6a1b05a0702ee44a63d1ab15653de022233b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "priorities/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "priorities/show.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/options\">Options</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/options/priorities\">Priority</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Show</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-2 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">id</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Status</label>
                                                    <div class=\"form-control\">
                                                    ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 54, $this->source); })()), "active", [], "any", false, false, false, 54) == 1)) {
            // line 55
            echo "                                                            Active
                                                    ";
        }
        // line 57
        echo "
                                                    ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 58, $this->source); })()), "active", [], "any", false, false, false, 58) == 0)) {
            // line 59
            echo "                                                            Disable
                                                    ";
        }
        // line 61
        echo "                                                    </div>
                                            </div>
                                            </div>

                                            <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created By</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 70, $this->source); })()), "createdby", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created At</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 77, $this->source); })()), "createdat", [], "any", false, false, false, 77), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Update By</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 88, $this->source); })()), "updatedby", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated At</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 95
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 95, $this->source); })()), "updatedat", [], "any", false, false, false, 95), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <br>
                                    </form>
                                    <form action=\"/options/priorities\">
                                        <div class=\"form-group\">
                                            <a style=\"float:right; margin-right: 5px;\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\" >Back</a>
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
        return "priorities/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 95,  171 => 88,  157 => 77,  147 => 70,  136 => 61,  132 => 59,  130 => 58,  127 => 57,  123 => 55,  121 => 54,  111 => 47,  101 => 40,  84 => 26,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/options\">Options</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/options/priorities\">Priority</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Show</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">{{ priority.name }}</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    <div class=\"form-control\">
                                                        {{ priority.name }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-2 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">id</label>
                                                    <div class=\"form-control\">
                                                        {{ priority.id }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Status</label>
                                                    <div class=\"form-control\">
                                                    {% if priority.active == 1 %}
                                                            Active
                                                    {% endif %}

                                                    {% if priority.active == 0 %}
                                                            Disable
                                                    {% endif %}
                                                    </div>
                                            </div>
                                            </div>

                                            <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created By</label>
                                                    <div class=\"form-control\">
                                                        {{ priority.createdby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created At</label>
                                                    <div class=\"form-control\">
                                                        {{ priority.createdat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Update By</label>
                                                    <div class=\"form-control\">
                                                        {{ priority.updatedby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated At</label>
                                                    <div class=\"form-control\">
                                                        {{ priority.updatedat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <br>
                                    </form>
                                    <form action=\"/options/priorities\">
                                        <div class=\"form-group\">
                                            <a style=\"float:right; margin-right: 5px;\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\" >Back</a>
                                        </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

{% endblock %}", "priorities/show.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\priorities\\show.html.twig");
    }
}
