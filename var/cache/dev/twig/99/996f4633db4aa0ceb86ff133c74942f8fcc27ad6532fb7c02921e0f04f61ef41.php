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

/* opportunities/edit.html.twig */
class __TwigTemplate_ed4aeeff79ae9b1b7aa1738ba3bcdf51ae677d235f32704bd40bed3ad55d6a18 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportunities/edit.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "opportunities/edit.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/opportunities\">Opportunities</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Edit</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Edit </h4>
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
                                          <div class=\"col-md-5 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), 'row');
        echo "
                                            </div>

                                             <div class=\"col-md-2 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Probability</label>
                                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "probability", [], "any", false, false, false, 43), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-5 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Amount</label>
                                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "amount", [], "any", false, false, false, 48), 'row');
        echo "
                                            </div>

                                             <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Product</label>
                                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "product", [], "any", false, false, false, 53), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Department</label>
                                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "id_department", [], "any", false, false, false, 58), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Source</label>
                                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "id_source", [], "any", false, false, false, 63), 'row');
        echo "
                                            </div>

                                             <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">User</label>
                                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "id_user", [], "any", false, false, false, 68), 'row');
        echo "
                                            </div>


                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Account</label>
                                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "id_account", [], "any", false, false, false, 74), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Contact</label>
                                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "id_contact", [], "any", false, false, false, 79), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-6 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Close Date</label>
                                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "closedate", [], "any", false, false, false, 84), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-6 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Stage</label>
                                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "id_stage", [], "any", false, false, false, 89), 'row');
        echo "
                                            </div>


                                            <div class=\"col-md-12 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Description</label>
                                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "description", [], "any", false, false, false, 95), 'row');
        echo "
                                            </div>
                                           
                                        </div>
                                     
                                        <br>
                                    <div class=\"form-group\">
                                            <a style=\"float:right; margin-right: 5px;\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\" >Back</a>                                                                                           
                                        </div>
                                    
                                        <div class=\"form-group\">
                                            <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">Edit</button>                                                                                                                                                                                     
                                        </div>
                                        ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_end');
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
        return "opportunities/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 108,  189 => 95,  180 => 89,  172 => 84,  164 => 79,  156 => 74,  147 => 68,  139 => 63,  131 => 58,  123 => 53,  115 => 48,  107 => 43,  99 => 38,  92 => 34,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/opportunities\">Opportunities</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Edit</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Edit </h4>
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
                                          <div class=\"col-md-5 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    {{ form_row(form.name) }}
                                            </div>

                                             <div class=\"col-md-2 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Probability</label>
                                                    {{ form_row(form.probability) }}
                                            </div>

                                            <div class=\"col-md-5 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Amount</label>
                                                    {{ form_row(form.amount) }}
                                            </div>

                                             <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Product</label>
                                                    {{ form_row(form.product) }}
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Department</label>
                                                    {{ form_row(form.id_department) }}
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Source</label>
                                                    {{ form_row(form.id_source) }}
                                            </div>

                                             <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">User</label>
                                                    {{ form_row(form.id_user) }}
                                            </div>


                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Account</label>
                                                    {{ form_row(form.id_account) }}
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Contact</label>
                                                    {{ form_row(form.id_contact) }}
                                            </div>

                                            <div class=\"col-md-6 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Close Date</label>
                                                    {{ form_row(form.closedate) }}
                                            </div>

                                            <div class=\"col-md-6 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Stage</label>
                                                    {{ form_row(form.id_stage) }}
                                            </div>


                                            <div class=\"col-md-12 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Description</label>
                                                    {{ form_row(form.description) }}
                                            </div>
                                           
                                        </div>
                                     
                                        <br>
                                    <div class=\"form-group\">
                                            <a style=\"float:right; margin-right: 5px;\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\" >Back</a>                                                                                           
                                        </div>
                                    
                                        <div class=\"form-group\">
                                            <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">Edit</button>                                                                                                                                                                                     
                                        </div>
                                        {{ form_end(form) }}
                                        </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

{% endblock %}", "opportunities/edit.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\opportunities\\edit.html.twig");
    }
}
