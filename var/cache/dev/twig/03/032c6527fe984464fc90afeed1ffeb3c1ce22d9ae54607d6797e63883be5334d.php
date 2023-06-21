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
class __TwigTemplate_5b4500868bf4a4903d048c08be523ff7f0756c60811b2a6d8292bbc2e3e859a3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportunities/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportunities/edit.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "opportunities/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/opportunities\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Opportunities", [], "messages");
        echo "</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "messages");
        echo "</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "messages");
        echo " ";
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
                                    <form method=\"POST\">
                                    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
                                        <div class=\"form-group row\">
                                          <div class=\"col-md-5 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</label>
                                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), 'row');
        echo "
                                            </div>

                                             <div class=\"col-md-2 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Probability", [], "messages");
        echo "</label>
                                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "probability", [], "any", false, false, false, 43), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-5 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "messages");
        echo "</label>
                                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "amount", [], "any", false, false, false, 48), 'row');
        echo "
                                            </div>

                                             <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "messages");
        echo "</label>
                                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "product", [], "any", false, false, false, 53), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Department", [], "messages");
        echo "</label>
                                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "id_department", [], "any", false, false, false, 58), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Source", [], "messages");
        echo "</label>
                                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "id_source", [], "any", false, false, false, 63), 'row');
        echo "
                                            </div>

                                             <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User", [], "messages");
        echo "</label>
                                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "id_user", [], "any", false, false, false, 68), 'row');
        echo "
                                            </div>


                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account", [], "messages");
        echo "</label>
                                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "id_account", [], "any", false, false, false, 74), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact", [], "messages");
        echo "</label>
                                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "id_contact", [], "any", false, false, false, 79), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-6 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close Date", [], "messages");
        echo "</label>
                                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "closedate", [], "any", false, false, false, 84), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-6 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stage", [], "messages");
        echo "</label>
                                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "id_stage", [], "any", false, false, false, 89), 'row');
        echo "
                                            </div>


                                            <div class=\"col-md-12 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "messages");
        echo "</label>
                                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "description", [], "any", false, false, false, 95), 'row');
        echo "
                                            </div>
                                           
                                        </div>
                                     
                                        <br>
                                    <div class=\"form-group\">
                                            <a style=\"float:right; margin-right: 5px;\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\" >";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back", [], "messages");
        echo "</a>                                                                                           
                                        </div>
                                    
                                        <div class=\"form-group\">
                                            <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "messages");
        echo "</button>                                                                                                                                                                                     
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

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  267 => 108,  262 => 106,  255 => 102,  245 => 95,  241 => 94,  233 => 89,  229 => 88,  222 => 84,  218 => 83,  211 => 79,  207 => 78,  200 => 74,  196 => 73,  188 => 68,  184 => 67,  177 => 63,  173 => 62,  166 => 58,  162 => 57,  155 => 53,  151 => 52,  144 => 48,  140 => 47,  133 => 43,  129 => 42,  122 => 38,  118 => 37,  112 => 34,  97 => 24,  91 => 21,  86 => 19,  74 => 9,  68 => 4,  58 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/opportunities\">{% trans %}Opportunities{% endtrans %}</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">{% trans %}Edit{% endtrans %}</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">{% trans %}Edit {% endtrans %} {{ opportunities.name }}</h4>
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
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Name{% endtrans %}</label>
                                                    {{ form_row(form.name) }}
                                            </div>

                                             <div class=\"col-md-2 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Probability{% endtrans %}</label>
                                                    {{ form_row(form.probability) }}
                                            </div>

                                            <div class=\"col-md-5 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Amount{% endtrans %}</label>
                                                    {{ form_row(form.amount) }}
                                            </div>

                                             <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Product{% endtrans %}</label>
                                                    {{ form_row(form.product) }}
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Department{% endtrans %}</label>
                                                    {{ form_row(form.id_department) }}
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Source{% endtrans %}</label>
                                                    {{ form_row(form.id_source) }}
                                            </div>

                                             <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}User{% endtrans %}</label>
                                                    {{ form_row(form.id_user) }}
                                            </div>


                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Account{% endtrans %}</label>
                                                    {{ form_row(form.id_account) }}
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Contact{% endtrans %}</label>
                                                    {{ form_row(form.id_contact) }}
                                            </div>

                                            <div class=\"col-md-6 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Close Date{% endtrans %}</label>
                                                    {{ form_row(form.closedate) }}
                                            </div>

                                            <div class=\"col-md-6 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Stage{% endtrans %}</label>
                                                    {{ form_row(form.id_stage) }}
                                            </div>


                                            <div class=\"col-md-12 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Description{% endtrans %}</label>
                                                    {{ form_row(form.description) }}
                                            </div>
                                           
                                        </div>
                                     
                                        <br>
                                    <div class=\"form-group\">
                                            <a style=\"float:right; margin-right: 5px;\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\" >{% trans %}Back{% endtrans %}</a>                                                                                           
                                        </div>
                                    
                                        <div class=\"form-group\">
                                            <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">{% trans %}Edit{% endtrans %}</button>                                                                                                                                                                                     
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
