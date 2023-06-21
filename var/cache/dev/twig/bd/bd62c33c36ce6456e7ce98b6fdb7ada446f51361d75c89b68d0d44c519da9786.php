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

/* area/show.html.twig */
class __TwigTemplate_4f133e95cb18d8c5a297d97c548caf7602fc157d77565eafd65a0a06e2064c5f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "area/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "area/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "area/show.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/options\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "messages");
        echo "</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/options/area\">";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Area", [], "messages");
        echo "</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show", [], "messages");
        echo "</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Area", [], "messages");
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["area"]) || array_key_exists("area", $context) ? $context["area"] : (function () { throw new RuntimeError('Variable "area" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                                       
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form action=\"/options/area\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["area"]) || array_key_exists("area", $context) ? $context["area"] : (function () { throw new RuntimeError('Variable "area" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "
                                                    </div>

                                                    
                                            </div>

                                             <div class=\"col-md-1 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["area"]) || array_key_exists("area", $context) ? $context["area"] : (function () { throw new RuntimeError('Variable "area" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-5 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                    ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, (isset($context["area"]) || array_key_exists("area", $context) ? $context["area"] : (function () { throw new RuntimeError('Variable "area" does not exist.', 57, $this->source); })()), "active", [], "any", false, false, false, 57) == 1)) {
            // line 58
            echo "                                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active", [], "messages");
            // line 59
            echo "                                                    ";
        }
        // line 60
        echo "
                                                    ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, (isset($context["area"]) || array_key_exists("area", $context) ? $context["area"] : (function () { throw new RuntimeError('Variable "area" does not exist.', 61, $this->source); })()), "active", [], "any", false, false, false, 61) == 0)) {
            // line 62
            echo "                                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable", [], "messages");
            // line 63
            echo "                                                    ";
        }
        // line 64
        echo "                                                    </div>
                                            </div>

                                        </div>
                                        
                                            
                                            <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created By", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["area"]) || array_key_exists("area", $context) ? $context["area"] : (function () { throw new RuntimeError('Variable "area" does not exist.', 75, $this->source); })()), "createdby", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["area"]) || array_key_exists("area", $context) ? $context["area"] : (function () { throw new RuntimeError('Variable "area" does not exist.', 82, $this->source); })()), "createdat", [], "any", false, false, false, 82), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update By", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["area"]) || array_key_exists("area", $context) ? $context["area"] : (function () { throw new RuntimeError('Variable "area" does not exist.', 93, $this->source); })()), "updatedby", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated At", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 100
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["area"]) || array_key_exists("area", $context) ? $context["area"] : (function () { throw new RuntimeError('Variable "area" does not exist.', 100, $this->source); })()), "updatedat", [], "any", false, false, false, 100), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>


                                        <br>

                                        <div class=\"form-group\"> 
                                           <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0 \" onclick=\"window.history.back()\" >";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back", [], "messages");
        echo "</a>
                                        </div>
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
        return "area/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 110,  228 => 100,  223 => 98,  215 => 93,  210 => 91,  198 => 82,  193 => 80,  185 => 75,  180 => 73,  169 => 64,  166 => 63,  163 => 62,  161 => 61,  158 => 60,  155 => 59,  152 => 58,  150 => 57,  145 => 55,  137 => 50,  125 => 41,  120 => 39,  102 => 26,  96 => 23,  91 => 21,  86 => 19,  74 => 9,  68 => 4,  58 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/options\">{% trans %}Settings{% endtrans %}</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/options/area\">{% trans %}Area{% endtrans %}</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">{% trans %}Show{% endtrans %}</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">{% trans %}Area{% endtrans %}  {{ area.name }}</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                                       
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <form action=\"/options/area\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Name{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ area.name }}
                                                    </div>

                                                    
                                            </div>

                                             <div class=\"col-md-1 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        {{ area.id }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-5 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %} Status{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                    {% if area.active == 1 %}
                                                            {% trans %}Active{% endtrans %}
                                                    {% endif %}

                                                    {% if area.active == 0 %}
                                                            {% trans %}Disable{% endtrans %}
                                                    {% endif %}
                                                    </div>
                                            </div>

                                        </div>
                                        
                                            
                                            <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Created By{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ area.createdby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Created At{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ area.createdat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Update By{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ area.updatedby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Updated At{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ area.updatedat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>


                                        <br>

                                        <div class=\"form-group\"> 
                                           <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0 \" onclick=\"window.history.back()\" >{% trans %}Back{% endtrans %}</a>
                                        </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

{% endblock %}", "area/show.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\area\\show.html.twig");
    }
}
