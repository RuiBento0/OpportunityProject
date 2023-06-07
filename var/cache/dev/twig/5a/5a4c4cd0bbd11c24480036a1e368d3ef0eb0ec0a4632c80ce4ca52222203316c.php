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

/* contacts/show.html.twig */
class __TwigTemplate_9cbc8d6f2f761cfa6ffc3ba36815b700280ae4cdfdb83bd4bbc8cf3f0c343e72 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "contacts/show.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/contacts\">Contacts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Show</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Contact ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                                       
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form action=\"/options/departments\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Surname</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 46, $this->source); })()), "surname", [], "any", false, false, false, 46), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-2 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created By</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 64, $this->source); })()), "createdby", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created At</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 71, $this->source); })()), "createdat", [], "any", false, false, false, 71), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Update By</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 82, $this->source); })()), "updatedby", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated At</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 89
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 89, $this->source); })()), "updatedat", [], "any", false, false, false, 89), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                         <div class=\"form-group row\">
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Account</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 100, $this->source); })()), "idaccount", [], "any", false, false, false, 100), "name", [], "any", false, false, false, 100), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <br>

                                        <div class=\"form-group\"> 
                                            <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0 \" onclick=\"window.history.back()\" >Back</a>
                                        </div>
                                        <div class=\"form-group\"> 
                                            <a href=\"/pdf/generator/contacts/";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112), "html", null, true);
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
        return "contacts/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 112,  182 => 100,  168 => 89,  158 => 82,  144 => 71,  134 => 64,  120 => 53,  110 => 46,  100 => 39,  82 => 24,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/contacts\">Contacts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Show</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Contact {{ contacts.name }}</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                                       
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form action=\"/options/departments\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    <div class=\"form-control\">
                                                        {{ contacts.name }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Surname</label>
                                                    <div class=\"form-control\">
                                                        {{ contacts.surname }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-2 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        {{ contacts.id }}
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created By</label>
                                                    <div class=\"form-control\">
                                                        {{ contacts.createdby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created At</label>
                                                    <div class=\"form-control\">
                                                        {{ contacts.createdat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Update By</label>
                                                    <div class=\"form-control\">
                                                        {{ contacts.updatedby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated At</label>
                                                    <div class=\"form-control\">
                                                        {{ contacts.updatedat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                         <div class=\"form-group row\">
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Account</label>
                                                    <div class=\"form-control\">
                                                        {{ contacts.idaccount.name }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <br>

                                        <div class=\"form-group\"> 
                                            <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0 \" onclick=\"window.history.back()\" >Back</a>
                                        </div>
                                        <div class=\"form-group\"> 
                                            <a href=\"/pdf/generator/contacts/{{ contacts.id}}\" type=\"submit\" target=\"_blank\"  style=\"float:right; margin-right:15px\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0 \">{% trans %}PDF{% endtrans %}</a>
                                        </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

{% endblock %}", "contacts/show.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\contacts\\show.html.twig");
    }
}
