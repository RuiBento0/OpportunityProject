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

/* accounts/show.html.twig */
class __TwigTemplate_b0216e55d15de4fe10c58900db04b9539542b5e8b96cc831046a61e23bbf36e0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accounts/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "accounts/show.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/accounts\">Accounts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Show</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Show ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
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
                                            <div class=\"col-md-8 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created By</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 55, $this->source); })()), "createdby", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created At</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 62, $this->source); })()), "createdat", [], "any", false, false, false, 62), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated By</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 72, $this->source); })()), "updatedBy", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated At</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 79, $this->source); })()), "updatedAt", [], "any", false, false, false, 79), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Description</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 89, $this->source); })()), "description", [], "any", false, false, false, 89), "html", null, true);
        echo "
                                                    </div>
                                            </div> 

                                             <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Departments</label>
                                                    <div class=\"form-control\">
                                                    ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 96, $this->source); })()), "departments", [], "any", false, false, false, 96));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 97
            echo "                                                        <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 97), "html", null, true);
            echo "</p>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                                                        
                                                    </div>
                                            </div> 
                                        </div>
                                        <br>
                                    </form>
                                        <form>
                                        
                                        <div class=\"form-group\"> 
                                            <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0 \" onclick=\"window.history.back()\" >Back</a>
                                        </div>
                                        <div class=\"form-group\"> 
                                            <a href=\"/pdf/generator/accounts/";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111), "html", null, true);
        echo "\" type=\"submit\" target=\"_blank\"  style=\"float:right; margin-right:15px\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0 \">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PDF", [], "messages");
        echo "</a>
                                        </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

<script type=\"text/javascript\">

            \$(document).ready(function () {
            document.body.classList.toggle('enlarge-menu');
        });
    
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "accounts/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 111,  191 => 99,  182 => 97,  178 => 96,  168 => 89,  155 => 79,  145 => 72,  132 => 62,  122 => 55,  109 => 45,  99 => 38,  82 => 24,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/accounts\">Accounts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Show</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Show {{ accounts.name }}</h4>
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
                                            <div class=\"col-md-8 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    <div class=\"form-control\">
                                                        {{ accounts.name }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        {{ accounts.id }}
                                                    </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created By</label>
                                                    <div class=\"form-control\">
                                                        {{ accounts.createdby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created At</label>
                                                    <div class=\"form-control\">
                                                        {{ accounts.createdat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated By</label>
                                                    <div class=\"form-control\">
                                                        {{ accounts.updatedBy.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated At</label>
                                                    <div class=\"form-control\">
                                                        {{ accounts.updatedAt|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Description</label>
                                                    <div class=\"form-control\">
                                                        {{ accounts.description }}
                                                    </div>
                                            </div> 

                                             <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Departments</label>
                                                    <div class=\"form-control\">
                                                    {% for department in accounts.departments %}
                                                        <p>{{ department.name }}</p>
                                                    {% endfor %}
                                                        
                                                    </div>
                                            </div> 
                                        </div>
                                        <br>
                                    </form>
                                        <form>
                                        
                                        <div class=\"form-group\"> 
                                            <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0 \" onclick=\"window.history.back()\" >Back</a>
                                        </div>
                                        <div class=\"form-group\"> 
                                            <a href=\"/pdf/generator/accounts/{{ accounts.id}}\" type=\"submit\" target=\"_blank\"  style=\"float:right; margin-right:15px\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0 \">{% trans %} PDF{% endtrans %}</a>
                                        </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

<script type=\"text/javascript\">

            \$(document).ready(function () {
            document.body.classList.toggle('enlarge-menu');
        });
    
    </script>
{% endblock %}", "accounts/show.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\accounts\\show.html.twig");
    }
}
