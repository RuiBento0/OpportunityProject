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
class __TwigTemplate_b76d1ff26419b8dcc6fee580bf9a16bbc4f61494f4616b973c85994994ba7df7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accounts/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accounts/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "accounts/show.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/accounts\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accounts", [], "messages");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show", [], "messages");
        echo " ";
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
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</label>
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
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created By", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 55, $this->source); })()), "createdby", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        echo "</label>
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
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated By", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 72, $this->source); })()), "updatedBy", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true);
        echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated At", [], "messages");
        echo "</label>
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
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "messages");
        echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 89, $this->source); })()), "description", [], "any", false, false, false, 89), "html", null, true);
        echo "
                                                    </div>
                                            </div> 

                                             <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Departments", [], "messages");
        echo "</label>
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
                                            <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0 \" onclick=\"window.history.back()\" >";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back", [], "messages");
        echo "</a>
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
                        <p><b>";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Relative Contact", [], "messages");
        echo "</b></p>
                             ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 117, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            echo " 
                                
                                <button type=\"button\" class=\"collapsible111\">";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "name", [], "any", false, false, false, 119), "html", null, true);
            echo "</button>
                                <div class=\"content\">
                                <div class=\"card\">
                                <div class=\"card-body\">
                                    <form>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-8 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "name", [], "any", false, false, false, 128), "html", null, true);
            echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 135), "html", null, true);
            echo "
                                                    </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 143
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created By", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "createdby", [], "any", false, false, false, 145), "html", null, true);
            echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 150
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 152
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "created_at", [], "any", false, false, false, 152), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                                    </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 160
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated By", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "updateby", [], "any", false, false, false, 162), "html", null, true);
            echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 167
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated At", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 169
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "updated_at", [], "any", false, false, false, 169), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                                    </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 177
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "description", [], "any", false, false, false, 179), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo " 

                             <p><b>";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Relative Opportunities", [], "messages");
        echo "</b></p>
                             ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["opportunities"]);
        foreach ($context['_seq'] as $context["_key"] => $context["opportunities"]) {
            echo " 
                                
                                <button type=\"button\" class=\"collapsible111\">";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "name", [], "any", false, false, false, 196), "html", null, true);
            echo "</button>
                                <div class=\"content\">
                                <div class=\"card\">
                                <div class=\"card-body\">
                                    <form>
                                        <div class=\"form-group row\">
                                             <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 203
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "name", [], "any", false, false, false, 205), "html", null, true);
            echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-2 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "id", [], "any", false, false, false, 212), "html", null, true);
            echo "
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 217
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Probability", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                    ";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "probability", [], "any", false, false, false, 219), "html", null, true);
            echo " % 
                                                    </div>
                                            </div>

                                             <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 224
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Source", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                       ";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "idsource", [], "any", false, false, false, 226), "name", [], "any", false, false, false, 226), "html", null, true);
            echo "
                                                    </div>
                                            </div>  
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 234
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "idaccount", [], "any", false, false, false, 236), "name", [], "any", false, false, false, 236), "html", null, true);
            echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\"";
            // line 241
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(">User", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "iduser", [], "any", false, false, false, 243), "name", [], "any", false, false, false, 243), "html", null, true);
            echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 248
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                   

                                                    ";
            // line 252
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "idcontact", [], "any", false, true, false, 252), "name", [], "any", true, true, false, 252)) {
                // line 253
                echo "                                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "idcontact", [], "any", false, false, false, 253), "name", [], "any", false, false, false, 253), "html", null, true);
                echo "
                                                    ";
            }
            // line 255
            echo "                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 263
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close Date", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 265
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "closedate", [], "any", false, false, false, 265), "Y-m-d"), "html", null, true);
            echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 270
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Department", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 272
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "iddepartment", [], "any", false, false, false, 272), "name", [], "any", false, false, false, 272), "html", null, true);
            echo "
                                                    </div>
                                            </div>

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 277
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stage", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "idstage", [], "any", false, false, false, 279), "name", [], "any", false, false, false, 279), "html", null, true);
            echo " 
                                                    </div>
                                            </div>

                                            <div class=\"col-md-3 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 284
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "amount", [], "any", false, false, false, 286), "html", null, true);
            echo " \$
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 295
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created By", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 297
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "createdby", [], "any", false, false, false, 297), "name", [], "any", false, false, false, 297), "html", null, true);
            echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 302
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 304
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "createdat", [], "any", false, false, false, 304), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 313
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update By", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 315
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunities"], "updatedby", [], "any", false, false, false, 315), "name", [], "any", false, false, false, 315), "html", null, true);
            echo "
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 320
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated At", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 322
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "updatedat", [], "any", false, false, false, 322), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
            // line 331
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "messages");
            echo "</label>
                                                    <div class=\"form-control\">
                                                        ";
            // line 333
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunities"], "description", [], "any", false, false, false, 333), "html", null, true);
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
        // line 344
        echo " 
                        </div> <!--end col-->                                        
                    </div><!--end row-->


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script> 

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
        return "accounts/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 344,  634 => 333,  629 => 331,  617 => 322,  612 => 320,  604 => 315,  599 => 313,  587 => 304,  582 => 302,  574 => 297,  569 => 295,  557 => 286,  552 => 284,  544 => 279,  539 => 277,  531 => 272,  526 => 270,  518 => 265,  513 => 263,  503 => 255,  497 => 253,  495 => 252,  488 => 248,  480 => 243,  475 => 241,  467 => 236,  462 => 234,  451 => 226,  446 => 224,  438 => 219,  433 => 217,  425 => 212,  415 => 205,  410 => 203,  400 => 196,  393 => 194,  389 => 193,  385 => 191,  366 => 179,  361 => 177,  350 => 169,  345 => 167,  337 => 162,  332 => 160,  321 => 152,  316 => 150,  308 => 145,  303 => 143,  292 => 135,  282 => 128,  277 => 126,  267 => 119,  260 => 117,  256 => 116,  246 => 111,  240 => 108,  229 => 99,  220 => 97,  216 => 96,  211 => 94,  203 => 89,  198 => 87,  187 => 79,  182 => 77,  174 => 72,  169 => 70,  158 => 62,  153 => 60,  145 => 55,  140 => 53,  129 => 45,  119 => 38,  114 => 36,  97 => 24,  91 => 21,  86 => 19,  74 => 9,  68 => 4,  58 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/accounts\">{% trans %}Accounts{% endtrans %}</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">{% trans %}Show{% endtrans %}</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">{% trans %}Show{% endtrans %} {{ accounts.name }}</h4>
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
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Name{% endtrans %}</label>
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
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Created By{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ accounts.createdby.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Created At{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ accounts.createdat|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Updated By{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ accounts.updatedBy.name }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Updated At{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ accounts.updatedAt|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Description{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ accounts.description }}
                                                    </div>
                                            </div> 

                                             <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Departments{% endtrans %}</label>
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
                                            <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0 \" onclick=\"window.history.back()\" >{% trans %}Back{% endtrans %}</a>
                                        </div>
                                        <div class=\"form-group\"> 
                                            <a href=\"/pdf/generator/accounts/{{ accounts.id}}\" type=\"submit\" target=\"_blank\"  style=\"float:right; margin-right:15px\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0 \">{% trans %} PDF{% endtrans %}</a>
                                        </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        <p><b>{% trans %}Relative Contact{% endtrans %}</b></p>
                             {% for contact in contacts %} 
                                
                                <button type=\"button\" class=\"collapsible111\">{{ contact.name }}</button>
                                <div class=\"content\">
                                <div class=\"card\">
                                <div class=\"card-body\">
                                    <form>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-8 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Name{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ contact.name }}
                                                    </div>
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Id</label>
                                                    <div class=\"form-control\">
                                                        {{ contact.id }}
                                                    </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Created By{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ contact.createdby }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Created At{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ contact.created_at|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Updated By{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ contact.updateby }}
                                                    </div>
                                            </div> 
                                            
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Updated At{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ contact.updated_at|date('Y-m-d H:i:s') }}
                                                    </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">

                                            <div class=\"col-md-12 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Description{% endtrans %}</label>
                                                    <div class=\"form-control\">
                                                        {{ contact.description }}
                                                    </div>
                                            </div> 


                                        </div>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        
                                </div>
                                <br>
                                <br>
                             {% endfor %} 

                             <p><b>{% trans %}Relative Opportunities{% endtrans %}</b></p>
                             {% for opportunities in opportunities %} 
                                
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


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script> 

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
{% endblock %}", "accounts/show.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\accounts\\show.html.twig");
    }
}
