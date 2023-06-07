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

/* opportunities/show.html.twig */
class __TwigTemplate_eee423a3b259b5991a15993f8cf1367bf486236f6905f04f6a3f893a25ea7bfd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportunities/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "opportunities/show.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/opportunities\">opportunities</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Show</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Opportunity ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                                       
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form action=\"/business/opportunities\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-2 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Probability</label>
                                                    <div class=\"form-control\">
                                                    ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 53, $this->source); })()), "probability", [], "any", false, false, false, 53), "html", null, true);
        echo " % 
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Source</label>
                                                    <div class=\"form-control\">
                                                       ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 60, $this->source); })()), "idsource", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
        echo "
                                                    </div>
                                            </div>  
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Account</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 70, $this->source); })()), "idaccount", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">User</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 77, $this->source); })()), "iduser", [], "any", false, false, false, 77), "name", [], "any", false, false, false, 77), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Contact</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 84, $this->source); })()), "idcontact", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Close Date</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 95
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 95, $this->source); })()), "closedate", [], "any", false, false, false, 95), "Y-m-d"), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Department</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 102, $this->source); })()), "iddepartment", [], "any", false, false, false, 102), "name", [], "any", false, false, false, 102), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Stage</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 109, $this->source); })()), "idstage", [], "any", false, false, false, 109), "name", [], "any", false, false, false, 109), "html", null, true);
        echo " 
                                                    </div>
                                            </div>

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Amount</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 116, $this->source); })()), "amount", [], "any", false, false, false, 116), "html", null, true);
        echo " \$
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created By</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 127, $this->source); })()), "createdby", [], "any", false, false, false, 127), "name", [], "any", false, false, false, 127), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created At</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 134
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 134, $this->source); })()), "createdat", [], "any", false, false, false, 134), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Update By</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 145, $this->source); })()), "updatedby", [], "any", false, false, false, 145), "name", [], "any", false, false, false, 145), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated At</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 152
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 152, $this->source); })()), "updatedat", [], "any", false, false, false, 152), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Description</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 163, $this->source); })()), "description", [], "any", false, false, false, 163), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                        </div>

                                        <br>

                                       <div class=\"form-group\"> 
                                            <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0 \" onclick=\"window.history.back()\" >Back</a>
                                        </div>
                                        <div class=\"form-group\"> 
                                            <a href=\"/pdf/generator/opportunities/";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 175, $this->source); })()), "id", [], "any", false, false, false, 175), "html", null, true);
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
        return "opportunities/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 175,  269 => 163,  255 => 152,  245 => 145,  231 => 134,  221 => 127,  207 => 116,  197 => 109,  187 => 102,  177 => 95,  163 => 84,  153 => 77,  143 => 70,  130 => 60,  120 => 53,  110 => 46,  100 => 39,  82 => 24,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/opportunities\">opportunities</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Show</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Opportunity {{ opportunities.name }}</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                                       
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form action=\"/business/opportunities\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.name }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-2 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.id }}
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Probability</label>
                                                    <div class=\"form-control\">
                                                    {{ opportunities.probability }} % 
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Source</label>
                                                    <div class=\"form-control\">
                                                       {{ opportunities.idsource.name }}
                                                    </div>
                                            </div>  
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Account</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.idaccount.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">User</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.iduser.name }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Contact</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.idcontact.name }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Close Date</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.closedate|date('Y-m-d') }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Department</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.iddepartment.name }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Stage</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.idstage.name }} 
                                                    </div>
                                            </div>

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Amount</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.amount }} \$
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created By</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.createdby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Created At</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.createdat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Update By</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.updatedby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Updated At</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.updatedat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Description</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.description }}
                                                    </div>
                                            </div> 
                                            
                                        </div>

                                        <br>

                                       <div class=\"form-group\"> 
                                            <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0 \" onclick=\"window.history.back()\" >Back</a>
                                        </div>
                                        <div class=\"form-group\"> 
                                            <a href=\"/pdf/generator/opportunities/{{ opportunities.id}}\" type=\"submit\" target=\"_blank\"  style=\"float:right; margin-right:15px\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0 \">{% trans %}PDF{% endtrans %}</a>
                                        </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

{% endblock %}", "opportunities/show.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\opportunities\\show.html.twig");
    }
}
