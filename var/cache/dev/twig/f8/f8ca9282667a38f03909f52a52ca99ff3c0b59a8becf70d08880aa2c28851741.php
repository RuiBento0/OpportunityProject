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

/* leads/show.html.twig */
class __TwigTemplate_bcd9f30fdb946081d1cba784422c8cdbca398fc1b17ffc305f68acbe14e134ae extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leads/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "leads/show.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/leads\">Leads</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Show</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Lead ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                                       
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form action=\"/business/leads\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-2 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Status</label>
                                                    <div class=\"form-control\">
                                                    ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 53, $this->source); })()), "idstatus", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Source</label>
                                                    <div class=\"form-control\">
                                                       ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 60, $this->source); })()), "idsource", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
        echo "
                                                    </div>
                                            </div>  
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Account</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 70, $this->source); })()), "account", [], "any", false, false, false, 70), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">user</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 77, $this->source); })()), "iduser", [], "any", false, false, false, 77), "name", [], "any", false, false, false, 77), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Area</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 88, $this->source); })()), "idarea", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Department</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 95, $this->source); })()), "iddepartment", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Amount</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 102, $this->source); })()), "amount", [], "any", false, false, false, 102), "html", null, true);
        echo " \$
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created By</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 113, $this->source); })()), "createdby", [], "any", false, false, false, 113), "name", [], "any", false, false, false, 113), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created At</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 120
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 120, $this->source); })()), "createdat", [], "any", false, false, false, 120), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Update By</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 131, $this->source); })()), "updatedby", [], "any", false, false, false, 131), "name", [], "any", false, false, false, 131), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated At</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 138
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 138, $this->source); })()), "updatedat", [], "any", false, false, false, 138), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Description</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 149, $this->source); })()), "description", [], "any", false, false, false, 149), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                        </div>

                                        <br>

                                        <div class=\"form-group\"> 
                                            <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0 \" onclick=\"window.history.back()\" >Back</a>
                                        </div>
                                        <div class=\"form-group\"> 
                                            <a href=\"/pdf/generator/leads/";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 161, $this->source); })()), "id", [], "any", false, false, false, 161), "html", null, true);
        echo "\" type=\"submit\" target=\"_blank\"  style=\"float:right; margin-right:15px\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0 \">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PDF", [], "messages");
        echo "</a>
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
        return "leads/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 161,  249 => 149,  235 => 138,  225 => 131,  211 => 120,  201 => 113,  187 => 102,  177 => 95,  167 => 88,  153 => 77,  143 => 70,  130 => 60,  120 => 53,  110 => 46,  100 => 39,  82 => 24,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/leads\">Leads</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Show</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Lead {{ leads.name }}</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                                       
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form action=\"/business/leads\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    <div class=\"form-control\">
                                                        {{ leads.name }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-2 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        {{ leads.id }}
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Status</label>
                                                    <div class=\"form-control\">
                                                    {{ leads.idstatus.name }}
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Source</label>
                                                    <div class=\"form-control\">
                                                       {{ leads.idsource.name }}
                                                    </div>
                                            </div>  
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Account</label>
                                                    <div class=\"form-control\">
                                                        {{ leads.account }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">user</label>
                                                    <div class=\"form-control\">
                                                        {{ leads.iduser.name }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Area</label>
                                                    <div class=\"form-control\">
                                                        {{ leads.idarea.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Department</label>
                                                    <div class=\"form-control\">
                                                        {{ leads.iddepartment.name }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Amount</label>
                                                    <div class=\"form-control\">
                                                        {{ leads.amount }} \$
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created By</label>
                                                    <div class=\"form-control\">
                                                        {{ leads.createdby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created At</label>
                                                    <div class=\"form-control\">
                                                        {{ leads.createdat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Update By</label>
                                                    <div class=\"form-control\">
                                                        {{ leads.updatedby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated At</label>
                                                    <div class=\"form-control\">
                                                        {{ leads.updatedat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Description</label>
                                                    <div class=\"form-control\">
                                                        {{ leads.description }}
                                                    </div>
                                            </div> 
                                            
                                        </div>

                                        <br>

                                        <div class=\"form-group\"> 
                                            <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0 \" onclick=\"window.history.back()\" >Back</a>
                                        </div>
                                        <div class=\"form-group\"> 
                                            <a href=\"/pdf/generator/leads/{{ leads.id}}\" type=\"submit\" target=\"_blank\"  style=\"float:right; margin-right:15px\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0 \">{% trans %}PDF{% endtrans %}</a>
                                        </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

{% endblock %}", "leads/show.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\leads\\show.html.twig");
    }
}
