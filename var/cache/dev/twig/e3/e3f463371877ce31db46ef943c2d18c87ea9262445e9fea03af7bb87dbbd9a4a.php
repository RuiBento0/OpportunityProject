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

/* business/convertedoptions.html.twig */
class __TwigTemplate_6a795664e62943fd2ce651497a92683942a85fdafb04fa9a8812437a04f83de7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "business/convertedoptions.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "business/convertedoptions.html.twig", 1);
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
                                        <li class=\"breadcrumb-item active\">Converted</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Converted Opportunity</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form method=\"POST\">
                                    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Close Date</label>
                                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "closedate", [], "any", false, false, false, 39), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-3 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Department</label>
                                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "id_department", [], "any", false, false, false, 44), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Contact</label>
                                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "id_contact", [], "any", false, false, false, 49), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Stage</label>
                                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "id_stage", [], "any", false, false, false, 54), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-3 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Source</label>
                                                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "id_source", [], "any", false, false, false, 59), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Probability</label>
                                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "probability", [], "any", false, false, false, 64), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Product</label>
                                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "product", [], "any", false, false, false, 69), 'row');
        echo "
                                            </div>
                                        </div>

                                        <br>
                                        
                                    
                                        <div class=\"form-group\">
                                            <a style=\"float:right; margin-right: 5px;\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\" >Back</a>                                                                                           
                                        </div>
                                    
                                        <div class=\"form-group\">
                                            <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">Convert</button>                                                                                                                                                                                     
                                        </div>
                                        ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
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
        return "business/convertedoptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 83,  148 => 69,  140 => 64,  132 => 59,  124 => 54,  116 => 49,  108 => 44,  100 => 39,  92 => 34,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item active\">Converted</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Converted Opportunity</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form method=\"POST\">
                                    {{ form_start(form) }}
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Close Date</label>
                                                    {{ form_row(form.closedate) }}
                                            </div>

                                            <div class=\"col-md-3 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Department</label>
                                                    {{ form_row(form.id_department) }}
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Contact</label>
                                                    {{ form_row(form.id_contact) }}
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Stage</label>
                                                    {{ form_row(form.id_stage) }}
                                            </div>

                                            <div class=\"col-md-3 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Source</label>
                                                    {{ form_row(form.id_source) }}
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Probability</label>
                                                    {{ form_row(form.probability) }}
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Product</label>
                                                    {{ form_row(form.product) }}
                                            </div>
                                        </div>

                                        <br>
                                        
                                    
                                        <div class=\"form-group\">
                                            <a style=\"float:right; margin-right: 5px;\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\" >Back</a>                                                                                           
                                        </div>
                                    
                                        <div class=\"form-group\">
                                            <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">Convert</button>                                                                                                                                                                                     
                                        </div>
                                        {{ form_end(form) }}
                                        </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

{% endblock %}", "business/convertedoptions.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\business\\convertedoptions.html.twig");
    }
}
