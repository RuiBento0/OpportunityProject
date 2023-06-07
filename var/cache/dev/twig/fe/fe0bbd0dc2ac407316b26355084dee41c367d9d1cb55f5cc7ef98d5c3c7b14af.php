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

/* users/create.html.twig */
class __TwigTemplate_9f6d0b6e6415b63b420cc0866bcd811f9b95d1c2191dac2f8fbfaa9cf9a9664a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/create.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "users/create.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/authentication/users\">User</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Create</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Create User</h4>
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
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start');
        echo "
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Email</label>
                                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'row');
        echo "
                                            </div>
                                        </div>
                                        
                                        <div class=\"form-group row\">


                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Role</label>
                                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "userRole", [], "any", false, false, false, 54), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Password</label>
                                                   ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "password", [], "any", false, false, false, 59), 'row');
        echo "
                                            </div>
                                            
                                        </div>

                                        <br>
                                    <div class=\"form-group\">
                                            <a style=\"float:right; margin-right: 5px;\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\" >Back</a>                                                                                           
                                        </div>
                                    
                                        <div class=\"form-group\">
                                            <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">Create</button>                                                                                                                                                                                     
                                        </div>
                                        ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
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
        return "users/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 72,  129 => 59,  121 => 54,  109 => 45,  101 => 40,  94 => 36,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/authentication/users\">User</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Create</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Create User</h4>
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
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    {{ form_row(form.name) }}
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Email</label>
                                                    {{ form_row(form.email) }}
                                            </div>
                                        </div>
                                        
                                        <div class=\"form-group row\">


                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Role</label>
                                                    {{ form_row(form.userRole) }}
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Password</label>
                                                   {{ form_row(form.password) }}
                                            </div>
                                            
                                        </div>

                                        <br>
                                    <div class=\"form-group\">
                                            <a style=\"float:right; margin-right: 5px;\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\" >Back</a>                                                                                           
                                        </div>
                                    
                                        <div class=\"form-group\">
                                            <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">Create</button>                                                                                                                                                                                     
                                        </div>
                                        {{ form_end(form) }}
                                        </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

{% endblock %}", "users/create.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\users\\create.html.twig");
    }
}
