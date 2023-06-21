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
class __TwigTemplate_c412f19b01d65714798f1c7d659f75525da02487a4d35147674cc758103978e4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportunities/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportunities/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "opportunities/show.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show", [], "messages");
        echo "</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Opportunity", [], "messages");
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
                                    <form action=\"/business/opportunities\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</label>
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
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Probability", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                    ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 53, $this->source); })()), "probability", [], "any", false, false, false, 53), "html", null, true);
        echo " % 
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Source", [], "messages");
        echo "</label>
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
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 70, $this->source); })()), "idaccount", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(">User", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 77, $this->source); })()), "iduser", [], "any", false, false, false, 77), "name", [], "any", false, false, false, 77), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                    ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["opportunities"] ?? null), "idcontact", [], "any", false, true, false, 84), "name", [], "any", true, true, false, 84)) {
            // line 85
            echo "                                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 85, $this->source); })()), "idcontact", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
            echo "
                                                    ";
        }
        // line 87
        echo "                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close Date", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 97
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 97, $this->source); })()), "closedate", [], "any", false, false, false, 97), "Y-m-d"), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Department", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 104, $this->source); })()), "iddepartment", [], "any", false, false, false, 104), "name", [], "any", false, false, false, 104), "html", null, true);
        echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stage", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 111, $this->source); })()), "idstage", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "html", null, true);
        echo " 
                                                    </div>
                                            </div>

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 118, $this->source); })()), "amount", [], "any", false, false, false, 118), "html", null, true);
        echo " \$
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created By", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 129, $this->source); })()), "createdby", [], "any", false, false, false, 129), "name", [], "any", false, false, false, 129), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 136
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 136, $this->source); })()), "createdat", [], "any", false, false, false, 136), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update By", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 147, $this->source); })()), "updatedby", [], "any", false, false, false, 147), "name", [], "any", false, false, false, 147), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated At", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 154
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 154, $this->source); })()), "updatedat", [], "any", false, false, false, 154), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 165, $this->source); })()), "description", [], "any", false, false, false, 165), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                        </div>

                                        <br>

                                       <div class=\"form-group\"> 
                                            <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0 \" onclick=\"window.history.back()\" >";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back", [], "messages");
        echo "</a>
                                        </div>
                                        <div class=\"form-group\"> 
                                            <a href=\"/pdf/generator/opportunities/";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 177, $this->source); })()), "id", [], "any", false, false, false, 177), "html", null, true);
        echo "\" type=\"submit\" target=\"_blank\"  style=\"float:right; margin-right:15px\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0 \">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PDF", [], "messages");
        echo "</a>
                                        </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->

                            <p><b>";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Relative Opportunities", [], "messages");
        echo "</b></p>
                             ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["oldopp"]) || array_key_exists("oldopp", $context) ? $context["oldopp"] : (function () { throw new RuntimeError('Variable "oldopp" does not exist.', 184, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["opportunities"]) {
            echo " 
                                
                                <button type=\"button\" class=\"collapsible111\">";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "name", [], "any", false, false, false, 186), "html", null, true);
            echo "</button>
                                <div class=\"content\">
                                <div class=\"card\">
                                <div class=\"card-body\">
                                    <form>
                                        <div class=\"form-group row\">
                                             <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 193
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "name", [], "any", false, false, false, 195), "html", null, true);
            echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-2 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "id", [], "any", false, false, false, 202), "html", null, true);
            echo "
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 207
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Probability", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                    ";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "probability", [], "any", false, false, false, 209), "html", null, true);
            echo " % 
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 214
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Source", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                       ";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "idsource", [], "any", false, false, false, 216), "name", [], "any", false, false, false, 216), "html", null, true);
            echo "
                                                    </div>
                                            </div>  
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 224
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "idaccount", [], "any", false, false, false, 226), "name", [], "any", false, false, false, 226), "html", null, true);
            echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\"";
            // line 231
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(">User", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "iduser", [], "any", false, false, false, 233), "name", [], "any", false, false, false, 233), "html", null, true);
            echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 238
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                   

                                                    ";
            // line 242
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "idcontact", [], "any", false, true, false, 242), "name", [], "any", true, true, false, 242)) {
                // line 243
                echo "                                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "idcontact", [], "any", false, false, false, 243), "name", [], "any", false, false, false, 243), "html", null, true);
                echo "
                                                    ";
            }
            // line 245
            echo "                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 253
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close Date", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 255
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "closedate", [], "any", false, false, false, 255), "Y-m-d"), "html", null, true);
            echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 260
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Department", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "iddepartment", [], "any", false, false, false, 262), "name", [], "any", false, false, false, 262), "html", null, true);
            echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 267
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stage", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 269
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "idstage", [], "any", false, false, false, 269), "name", [], "any", false, false, false, 269), "html", null, true);
            echo " 
                                                    </div>
                                            </div>

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 274
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "amount", [], "any", false, false, false, 276), "html", null, true);
            echo " \$
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 285
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created By", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "createdby", [], "any", false, false, false, 287), "name", [], "any", false, false, false, 287), "html", null, true);
            echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 292
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 294
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "createdat", [], "any", false, false, false, 294), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 303
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update By", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "updatedby", [], "any", false, false, false, 305), "name", [], "any", false, false, false, 305), "html", null, true);
            echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 310
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated At", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 312
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "updatedat", [], "any", false, false, false, 312), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 321
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 323
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "description", [], "any", false, false, false, 323), "html", null, true);
            echo "
                                                    </div>
                                            </div> 
                                            
                                        </div>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        
                                </div>
                                <br>
                                <br>
                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunities'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 334
        echo " 
                        </div> <!--end col-->                                        
                    </div><!--end row-->
<script type=\"text/javascript\">

            \$(document).ready(function () {
            document.body.classList.toggle('enlarge-menu');
        });
    
    </script>

<script>
var coll = document.getElementsByClassName(\"collapsible111\");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener(\"click\", function() {
    this.classList.toggle(\"active\");
    var content = this.nextElementSibling;
    if (content.style.display === \"block\") {
      content.style.display = \"none\";
    } else {
      content.style.display = \"block\";
    }
  });
}
</script>

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<style>

.collapsible111 {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active1, .collapsible111:hover {
  background-color: #555;
}

.collapsible111:after {
  content: '\\02795'; /* Ícone '+' ou '-' */
  float: right;
  font-size: 12px;
  transform: rotate(0deg);
  transition: transform 0.3s;
}

.active1:after {
  transform: rotate(90deg);
}



.content {
   padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
  
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  629 => 334,  611 => 323,  606 => 321,  594 => 312,  589 => 310,  581 => 305,  576 => 303,  564 => 294,  559 => 292,  551 => 287,  546 => 285,  534 => 276,  529 => 274,  521 => 269,  516 => 267,  508 => 262,  503 => 260,  495 => 255,  490 => 253,  480 => 245,  474 => 243,  472 => 242,  465 => 238,  457 => 233,  452 => 231,  444 => 226,  439 => 224,  428 => 216,  423 => 214,  415 => 209,  410 => 207,  402 => 202,  392 => 195,  387 => 193,  377 => 186,  370 => 184,  366 => 183,  355 => 177,  349 => 174,  337 => 165,  332 => 163,  320 => 154,  315 => 152,  307 => 147,  302 => 145,  290 => 136,  285 => 134,  277 => 129,  272 => 127,  260 => 118,  255 => 116,  247 => 111,  242 => 109,  234 => 104,  229 => 102,  221 => 97,  216 => 95,  206 => 87,  200 => 85,  198 => 84,  193 => 82,  185 => 77,  180 => 75,  172 => 70,  167 => 68,  156 => 60,  151 => 58,  143 => 53,  138 => 51,  130 => 46,  120 => 39,  115 => 37,  97 => 24,  91 => 21,  86 => 19,  74 => 9,  68 => 4,  58 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item active\">{% trans %}Show{% endtrans %}</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">{% trans %}Opportunity {% endtrans %} {{ opportunities.name }}</h4>
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
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Name{% endtrans %}</label>
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
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Probability{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                    {{ opportunities.probability }} % 
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Source{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                       {{ opportunities.idsource.name }}
                                                    </div>
                                            </div>  
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Account{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.idaccount.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\"{% trans %}>User{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.iduser.name }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Contact{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                    {% if  opportunities.idcontact.name  is defined %}
                                                            {{ opportunities.idcontact.name }}
                                                    {% endif %}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Close Date{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.closedate|date('Y-m-d') }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Department{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.iddepartment.name }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Stage{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.idstage.name }} 
                                                    </div>
                                            </div>

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Amount{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.amount }} \$
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Created By{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.createdby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Created At{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.createdat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Update By{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.updatedby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Updated At{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.updatedat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Description{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.description }}
                                                    </div>
                                            </div> 
                                            
                                        </div>

                                        <br>

                                       <div class=\"form-group\"> 
                                            <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0 \" onclick=\"window.history.back()\" >{% trans %}Back{% endtrans %}</a>
                                        </div>
                                        <div class=\"form-group\"> 
                                            <a href=\"/pdf/generator/opportunities/{{ opportunities.id}}\" type=\"submit\" target=\"_blank\"  style=\"float:right; margin-right:15px\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0 \">{% trans %}PDF{% endtrans %}</a>
                                        </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->

                            <p><b>{% trans %}Relative Opportunities{% endtrans %}</b></p>
                             {% for opportunities in oldopp %} 
                                
                                <button type=\"button\" class=\"collapsible111\">{{ opportunities.name }}</button>
                                <div class=\"content\">
                                <div class=\"card\">
                                <div class=\"card-body\">
                                    <form>
                                        <div class=\"form-group row\">
                                             <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Name{% endtrans %}</label>
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
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Probability{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                    {{ opportunities.probability }} % 
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Source{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                       {{ opportunities.idsource.name }}
                                                    </div>
                                            </div>  
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Account{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.idaccount.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\"{% trans %}>User{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.iduser.name }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Contact{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                   

                                                    {% if  opportunities.idcontact.name  is defined %}
                                                            {{ opportunities.idcontact.name }}
                                                    {% endif %}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Close Date{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.closedate|date('Y-m-d') }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Department{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.iddepartment.name }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Stage{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.idstage.name }} 
                                                    </div>
                                            </div>

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Amount{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.amount }} \$
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Created By{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.createdby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Created At{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.createdat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Update By{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.updatedby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Updated At{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.updatedat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Description{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ opportunities.description }}
                                                    </div>
                                            </div> 
                                            
                                        </div>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        
                                </div>
                                <br>
                                <br>
                             {% endfor %} 
                        </div> <!--end col-->                                        
                    </div><!--end row-->
<script type=\"text/javascript\">

            \$(document).ready(function () {
            document.body.classList.toggle('enlarge-menu');
        });
    
    </script>

<script>
var coll = document.getElementsByClassName(\"collapsible111\");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener(\"click\", function() {
    this.classList.toggle(\"active\");
    var content = this.nextElementSibling;
    if (content.style.display === \"block\") {
      content.style.display = \"none\";
    } else {
      content.style.display = \"block\";
    }
  });
}
</script>

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<style>

.collapsible111 {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active1, .collapsible111:hover {
  background-color: #555;
}

.collapsible111:after {
  content: '\\02795'; /* Ícone '+' ou '-' */
  float: right;
  font-size: 12px;
  transform: rotate(0deg);
  transition: transform 0.3s;
}

.active1:after {
  transform: rotate(90deg);
}



.content {
   padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
  
}
{% endblock %}", "opportunities/show.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\opportunities\\show.html.twig");
    }
}
