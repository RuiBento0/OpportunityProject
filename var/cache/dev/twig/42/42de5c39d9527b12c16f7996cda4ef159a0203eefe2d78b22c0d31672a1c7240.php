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

/* business/convertedoptions.html copy.twig */
class __TwigTemplate_546affebb01595716068f943abfeb3985fac2b3872f6b436a42d7b8ab5b72532 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "business/convertedoptions.html copy.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "business/convertedoptions.html copy.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "business/convertedoptions.html copy.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("opportunities", [], "messages");
        echo "</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Converted", [], "messages");
        echo "</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Converted Opportunity", [], "messages");
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

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Department", [], "messages");
        echo "</label>
                                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "id_department", [], "any", false, false, false, 39), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stage", [], "messages");
        echo "</label>
                                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "id_stage", [], "any", false, false, false, 44), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-3 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Source", [], "messages");
        echo "</label>
                                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "id_source", [], "any", false, false, false, 49), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Probability", [], "messages");
        echo "</label>
                                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "probability", [], "any", false, false, false, 54), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-3 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "messages");
        echo "</label>
                                                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "product", [], "any", false, false, false, 59), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close Date", [], "messages");
        echo "</label>
                                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "closedate", [], "any", false, false, false, 64), 'row');
        echo "
                                            </div>


  ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'rest');
        echo "


                                            <div class=\"row\">
                                            <div class=\"col-md-12 mb-3\">
                                                <div style=\"width:100%; display:inline-block; float:right;margin-left:15px\">
                                                    <div class=\"card\">
                                                        <div class=\"card-body\">
                                                        ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 76, $this->source); })()), 'form_start');
        echo "
                                                        <p><b>";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account", [], "messages");
        echo "</b></p>
                                                            <div class=\"form-group row\">
                                                                <div class=\"col-md-6 mb-6\">
                                                                        <label for=\"projectName\" class=\"form-label\">";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</label>
                                                                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 81, $this->source); })()), "name", [], "any", false, false, false, 81), 'row');
        echo "
                                                                </div>

                                                                <div class=\"col-md-6 mb-6\">
                                                                        <label for=\"projectName\" class=\"form-label\">";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("NIF", [], "messages");
        echo "</label>
                                                                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 86, $this->source); })()), "NIF", [], "any", false, false, false, 86), 'row');
        echo "
                                                                </div>

                                                                <div class=\"col-md-6 mb-6\">
                                                                        <label for=\"projectName\" class=\"form-label\">";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Area", [], "messages");
        echo "</label>
                                                                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 91, $this->source); })()), "idarea", [], "any", false, false, false, 91), 'row');
        echo "
                                                                </div>

                                                                <div class=\"col-md-6 mb-6\">
                                                                        <label for=\"projectName\" class=\"form-label\">";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", [], "messages");
        echo "</label>
                                                                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 96, $this->source); })()), "idtype", [], "any", false, false, false, 96), 'row');
        echo "
                                                                </div>

                                                            
                                                                   <div class=\"row\">
                                                                        <div class=\"col-md-12 mb-6 \">    
                                                                        <label class=\"form-label \" for=\"pro-end-date\">";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Departments", [], "messages");
        echo "</label>                                                        
                                                                                <div class=\"card\">
                                                                                    <div class=\"card-body\">                                                                                                                                                                     
                                                                                            <div class=\"checkbox-row\">                                                                                        
                                                                                                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 106, $this->source); })()), "departments", [], "any", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["departments"]) {
            // line 107
            echo "                                                                                                    <tr>
                                                                                                        <td>";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["departments"], 'row', ["attr" => ["class" => "custom-checkbox"]]);
            // line 112
            echo "</td>
                                                                                                    </tr>
                                                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                                                                                    </div> <!--end card-body-->
                                                                                </div> <!--end card-body-->
                                                                            </div> <!--end col-->                        
                                                                        </div> <!--end col-->                                          
                                                                    </div><!--end row-->                                        
                                                               
                                                                
                                                            </div>

                                                                <div class=\"form-group row\">
                                                                    <div class=\"col-md-12 mb-6\">
                                                                            <label for=\"projectName\" class=\"form-label\">";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "messages");
        echo "</label>
                                                                            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 127, $this->source); })()), "description", [], "any", false, false, false, 127), 'row');
        echo "
                                                                    </div>
                                                            </div> <!--end container-->
                                                            
                                                        </div> <!--end card-body-->
                                                    </div> <!--end card-body-->
                                                </div> <!--end col-->                        
                                            </div> <!--end col--> 
                                            <p><b>";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account Info", [], "messages");
        echo "</b></p>
                                                            <div class=\"col-12 col-lg-12\">
                                                                <div style=\"width:50%; display:inline-block; float:right;margin-left:15px\">
                                                                    <div class=\"card\">
                                                                        <div class=\"card-body\">
                                                                            <div id=\"containerphone\">
                                                                                <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('phone')\">";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add Phone Field", [], "messages");
        echo "</button>
                                                                            </div> <!--end container-->
                                                                        </div> <!--end card-body-->
                                                                    </div> <!--end card-body-->
                                                                </div> <!--end col-->
                                                                <div class=\"card\">
                                                                    <div class=\"card-body\">
                                                                        
                                                                            <div id=\"containeremail\">
                                                                                <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('email')\">";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add Email Field", [], "messages");
        echo "</button>
                                                                            </div> <!--end container-->
                                                                        </div> <!--end card-body-->
                                                                    </div> <!--end card-body-->
                                                                
                                                            </div> <!--end col-->                                          
                                                        </div><!--end row-->

                                                        <div class=\"row\">
                                                            <div class=\"col-12 col-lg-12\">
                                                                <div style=\"width:100%; display:inline-block; float:right;margin-left:15px\">
                                                                    <div class=\"card\">
                                                                        <div class=\"card-body\">
                                                                            <div id=\"containeraddress\">
                                                                                <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('address')\">";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add Address Field", [], "messages");
        echo "</button>
                                                                            </div> <!--end container-->
                                                                        </div> <!--end card-body-->
                                                                    </div> <!--end card-body-->
                                                                </div> <!--end col-->                        
                                                            </div> <!--end col-->                                          
                                                        </div><!--end row-->                                         
                                        </div><!--end row-->
 ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 172, $this->source); })()), 'rest');
        echo "
                                        <div class=\"row\">
                                            <div class=\"col-md-12 mb-3\">
                                                <div style=\"width:100%; display:inline-block; float:right;margin-left:15px\">
                                                    <div class=\"card\">
                                                        <div class=\"card-body\">
                                                        ";
        // line 178
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form3"]) || array_key_exists("form3", $context) ? $context["form3"] : (function () { throw new RuntimeError('Variable "form3" does not exist.', 178, $this->source); })()), 'form_start');
        echo "
                                                        <p><b>Contact</b></p>
                                                            <div class=\"form-group row\">
                                                                <div class=\"col-md-6 mb-6\">
                                                                        <label for=\"projectName\" class=\"form-label\">";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</label>
                                                                        ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form3"]) || array_key_exists("form3", $context) ? $context["form3"] : (function () { throw new RuntimeError('Variable "form3" does not exist.', 183, $this->source); })()), "name", [], "any", false, false, false, 183), 'row');
        echo "
                                                                </div>

                                                                <div class=\"col-md-6 mb-6\">
                                                                        <label for=\"projectName\" class=\"form-label\">";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Surname", [], "messages");
        echo "</label>
                                                                        ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form3"]) || array_key_exists("form3", $context) ? $context["form3"] : (function () { throw new RuntimeError('Variable "form3" does not exist.', 188, $this->source); })()), "surname", [], "any", false, false, false, 188), 'row');
        echo "
                                                                </div>
                                                                
                                                            </div>

                                                                <div class=\"form-group row\">
                                                                    <div class=\"col-md-12 mb-6\">
                                                                            <label for=\"projectName\" class=\"form-label\">";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "messages");
        echo "</label>
                                                                            ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form3"]) || array_key_exists("form3", $context) ? $context["form3"] : (function () { throw new RuntimeError('Variable "form3" does not exist.', 196, $this->source); })()), "description", [], "any", false, false, false, 196), 'row');
        echo "
                                                                    </div>
                                                            </div> <!--end container-->
                                                        </div> <!--end card-body-->
                                                    </div> <!--end card-body-->
                                                </div> <!--end col-->                        
                                            </div> <!--end col--> 
                                            <p><b>";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact Info", [], "messages");
        echo "</b></p>
                                                            <div class=\"col-12 col-lg-12\">
                                                                <div style=\"width:50%; display:inline-block; float:right;margin-left:15px\">
                                                                    <div class=\"card\">
                                                                        <div class=\"card-body\">
                                                                            <div id=\"containerphone2\">
                                                                                <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('phone')\">";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add Phone Field", [], "messages");
        echo "</button>
                                                                            </div> <!--end container-->
                                                                        </div> <!--end card-body-->
                                                                    </div> <!--end card-body-->
                                                                </div> <!--end col-->
                                                                <div class=\"card\">
                                                                    <div class=\"card-body\">
                                                                        
                                                                            <div id=\"containeremail2\">
                                                                                <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('email')\">";
        // line 218
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add Email Field", [], "messages");
        echo "</button>
                                                                            </div> <!--end container-->
                                                                        </div> <!--end card-body-->
                                                                    </div> <!--end card-body-->
                                                                
                                                            </div> <!--end col-->                                          
                                                        </div><!--end row-->

                                                        <div class=\"row\">
                                                            <div class=\"col-12 col-lg-12\">
                                                                <div style=\"width:100%; display:inline-block; float:right;margin-left:15px\">
                                                                    <div class=\"card\">
                                                                        <div class=\"card-body\">
                                                                            <div id=\"containeraddress2\">
                                                                                <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('address')\">";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add Address Field", [], "messages");
        echo "</button>
                                                                            </div> <!--end container-->
                                                                        </div> <!--end card-body-->
                                                                    </div> <!--end card-body-->
                                                                </div> <!--end col-->                        
                                                            </div> <!--end col-->                                          
                                                        </div><!--end row-->                                         
                                        </div><!--end row-->



                                        </div>
                                    </div> <!--end card-body-->                                           
                                </div><!--end card-->
                            </div> <!--end col-->                                          
                        </div><!--end row-->
                       ";
        // line 250
        echo "                                     ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form3"]) || array_key_exists("form3", $context) ? $context["form3"] : (function () { throw new RuntimeError('Variable "form3" does not exist.', 250, $this->source); })()), 'rest');
        echo "          
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"form-group\">
                            <a style=\"float:right; margin-right: 5px;\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\" >";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back", [], "messages");
        echo "</a>                                                                                           
                        </div>
                            <div class=\"form-group\">
                            <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Convert", [], "messages");
        echo "</button>                                                                                                                                                                                     
                        </div>                
                        </div> <!--end col-->                                          
                    </div><!--end row-->
                   
                    ";
        // line 262
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), 'form_end');
        echo "
                   
                    ";
        // line 264
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 264, $this->source); })()), 'form_end');
        echo "
                   
                    ";
        // line 266
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form3"]) || array_key_exists("form3", $context) ? $context["form3"] : (function () { throw new RuntimeError('Variable "form3" does not exist.', 266, $this->source); })()), 'form_end');
        echo "
                    </form>


                        <br>

 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>

<script type=\"text/javascript\">


        \$(document).ready(function () {
            
            document.body.classList.toggle('enlarge-menu');
        });

let CreateInputAddress = null;
let CreateInputCity = null;
let CreateInputPostalCode = null;





function addInputField(fieldadded) {
      const container = document.getElementById(\"container\" + fieldadded);
      
      const deleteButton = document.createElement(\"button\");
      deleteButton.classList.add(\"las\");
      deleteButton.classList.add(\"la-trash-alt\");
      deleteButton.classList.add(\"deletebutton\");

      if (fieldadded === \"phone\") {
        const CreateInput = document.createElement(\"input\");
        CreateInput.classList.add(\"textboxphone\");
        CreateInput.name = fieldadded + '[]';
        container.appendChild(CreateInput).placeholder = \"Phone\";
           deleteButton.addEventListener(\"click\", function() {
            container.removeChild(CreateInput);
            container.removeChild(deleteButton);
        });
      }

      if (fieldadded === \"email\") {
        const CreateInput = document.createElement(\"input\");
        CreateInput.classList.add(\"textboxemail\");
        CreateInput.name = fieldadded + '[]';
        container.appendChild(CreateInput).placeholder = \"Email\";
           deleteButton.addEventListener(\"click\", function() {
            container.removeChild(CreateInput);
            container.removeChild(deleteButton);
        });
      }

      if (fieldadded === \"address\") {
        const CreateInputAddress = document.createElement(\"input\");
        const CreateInputCity = document.createElement(\"input\");
        const CreateInputPostalCode = document.createElement(\"input\");

        CreateInputAddress.classList.add(\"textboxaddress\");
        CreateInputCity.classList.add(\"textboxaddress\");
        CreateInputPostalCode.classList.add(\"textboxaddress\");

        CreateInputAddress.name = fieldadded + 'address' + '[]';
        CreateInputCity.name = fieldadded + 'city' + '[]';
        CreateInputPostalCode.name = fieldadded + 'postalcode' + '[]';

        CreateInputAddress.placeholder = \"Address\";
        CreateInputCity.placeholder = \"City\";
        CreateInputPostalCode.placeholder = \"Postal Code\";

        container.appendChild(CreateInputAddress);
        container.appendChild(CreateInputCity);
        container.appendChild(CreateInputPostalCode);

          deleteButton.addEventListener(\"click\", function() {
         
                event.preventDefault();
                container.removeChild(CreateInputAddress);
                container.removeChild(CreateInputCity);
                container.removeChild(CreateInputPostalCode);
                container.removeChild(deleteButton);
        });
      }

      container.appendChild(deleteButton);
    }
</script>

<style>
.deletebutton {
border: none;
outline: none;
background: none;
font-size: 20px;
color: red;
}

.textboxphone{
width: 195px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
}

.textboxemail{
width: 185px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
}

.textboxaddress{
width: 177px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
margin-right: 10px;
display: inline-block;
}

</style>
            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "business/convertedoptions.html copy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 266,  490 => 264,  485 => 262,  477 => 257,  471 => 254,  463 => 250,  444 => 232,  427 => 218,  415 => 209,  406 => 203,  396 => 196,  392 => 195,  382 => 188,  378 => 187,  371 => 183,  367 => 182,  360 => 178,  351 => 172,  340 => 164,  323 => 150,  311 => 141,  302 => 135,  291 => 127,  287 => 126,  274 => 115,  266 => 112,  264 => 108,  261 => 107,  257 => 106,  250 => 102,  241 => 96,  237 => 95,  230 => 91,  226 => 90,  219 => 86,  215 => 85,  208 => 81,  204 => 80,  198 => 77,  194 => 76,  183 => 68,  176 => 64,  172 => 63,  165 => 59,  161 => 58,  154 => 54,  150 => 53,  143 => 49,  139 => 48,  132 => 44,  128 => 43,  121 => 39,  117 => 38,  110 => 34,  97 => 24,  91 => 21,  86 => 19,  74 => 9,  68 => 4,  58 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/opportunities\">{% trans %}opportunities{% endtrans %}</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">{% trans %}Converted{% endtrans %}</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">{% trans %}Converted Opportunity{% endtrans %}</h4>
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

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Department{% endtrans %}</label>
                                                    {{ form_row(form.id_department) }}
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Stage{% endtrans %}</label>
                                                    {{ form_row(form.id_stage) }}
                                            </div>

                                            <div class=\"col-md-3 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Source{% endtrans %}</label>
                                                    {{ form_row(form.id_source) }}
                                            </div>

                                            <div class=\"col-md-4 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Probability{% endtrans %}</label>
                                                    {{ form_row(form.probability) }}
                                            </div>

                                            <div class=\"col-md-3 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Product{% endtrans %}</label>
                                                    {{ form_row(form.product) }}
                                            </div>

                                            <div class=\"col-md-4 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">{% trans %}Close Date{% endtrans %}</label>
                                                    {{ form_row(form.closedate) }}
                                            </div>


  {{ form_rest(form) }}


                                            <div class=\"row\">
                                            <div class=\"col-md-12 mb-3\">
                                                <div style=\"width:100%; display:inline-block; float:right;margin-left:15px\">
                                                    <div class=\"card\">
                                                        <div class=\"card-body\">
                                                        {{ form_start(form2) }}
                                                        <p><b>{% trans %}Account{% endtrans %}</b></p>
                                                            <div class=\"form-group row\">
                                                                <div class=\"col-md-6 mb-6\">
                                                                        <label for=\"projectName\" class=\"form-label\">{% trans %}Name{% endtrans %}</label>
                                                                        {{ form_row(form2.name) }}
                                                                </div>

                                                                <div class=\"col-md-6 mb-6\">
                                                                        <label for=\"projectName\" class=\"form-label\">{% trans %}NIF{% endtrans %}</label>
                                                                        {{ form_row(form2.NIF) }}
                                                                </div>

                                                                <div class=\"col-md-6 mb-6\">
                                                                        <label for=\"projectName\" class=\"form-label\">{% trans %}Area{% endtrans %}</label>
                                                                        {{ form_row(form2.idarea) }}
                                                                </div>

                                                                <div class=\"col-md-6 mb-6\">
                                                                        <label for=\"projectName\" class=\"form-label\">{% trans %}Type{% endtrans %}</label>
                                                                        {{ form_row(form2.idtype) }}
                                                                </div>

                                                            
                                                                   <div class=\"row\">
                                                                        <div class=\"col-md-12 mb-6 \">    
                                                                        <label class=\"form-label \" for=\"pro-end-date\">{% trans %}Departments{% endtrans %}</label>                                                        
                                                                                <div class=\"card\">
                                                                                    <div class=\"card-body\">                                                                                                                                                                     
                                                                                            <div class=\"checkbox-row\">                                                                                        
                                                                                                {% for departments in form2.departments %}
                                                                                                    <tr>
                                                                                                        <td>{{ form_row(departments, {
                                                                                                                            'attr': {
                                                                                                                                'class': 'custom-checkbox',
                                                                                                                            }
                                                                                                                }) }}</td>
                                                                                                    </tr>
                                                                                                {% endfor %}
                                                                                    </div> <!--end card-body-->
                                                                                </div> <!--end card-body-->
                                                                            </div> <!--end col-->                        
                                                                        </div> <!--end col-->                                          
                                                                    </div><!--end row-->                                        
                                                               
                                                                
                                                            </div>

                                                                <div class=\"form-group row\">
                                                                    <div class=\"col-md-12 mb-6\">
                                                                            <label for=\"projectName\" class=\"form-label\">{% trans %}Description{% endtrans %}</label>
                                                                            {{ form_row(form2.description) }}
                                                                    </div>
                                                            </div> <!--end container-->
                                                            
                                                        </div> <!--end card-body-->
                                                    </div> <!--end card-body-->
                                                </div> <!--end col-->                        
                                            </div> <!--end col--> 
                                            <p><b>{% trans %}Account Info{% endtrans %}</b></p>
                                                            <div class=\"col-12 col-lg-12\">
                                                                <div style=\"width:50%; display:inline-block; float:right;margin-left:15px\">
                                                                    <div class=\"card\">
                                                                        <div class=\"card-body\">
                                                                            <div id=\"containerphone\">
                                                                                <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('phone')\">{% trans %}Add Phone Field{% endtrans %}</button>
                                                                            </div> <!--end container-->
                                                                        </div> <!--end card-body-->
                                                                    </div> <!--end card-body-->
                                                                </div> <!--end col-->
                                                                <div class=\"card\">
                                                                    <div class=\"card-body\">
                                                                        
                                                                            <div id=\"containeremail\">
                                                                                <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('email')\">{% trans %}Add Email Field{% endtrans %}</button>
                                                                            </div> <!--end container-->
                                                                        </div> <!--end card-body-->
                                                                    </div> <!--end card-body-->
                                                                
                                                            </div> <!--end col-->                                          
                                                        </div><!--end row-->

                                                        <div class=\"row\">
                                                            <div class=\"col-12 col-lg-12\">
                                                                <div style=\"width:100%; display:inline-block; float:right;margin-left:15px\">
                                                                    <div class=\"card\">
                                                                        <div class=\"card-body\">
                                                                            <div id=\"containeraddress\">
                                                                                <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('address')\">{% trans %}Add Address Field{% endtrans %}</button>
                                                                            </div> <!--end container-->
                                                                        </div> <!--end card-body-->
                                                                    </div> <!--end card-body-->
                                                                </div> <!--end col-->                        
                                                            </div> <!--end col-->                                          
                                                        </div><!--end row-->                                         
                                        </div><!--end row-->
 {{ form_rest(form2) }}
                                        <div class=\"row\">
                                            <div class=\"col-md-12 mb-3\">
                                                <div style=\"width:100%; display:inline-block; float:right;margin-left:15px\">
                                                    <div class=\"card\">
                                                        <div class=\"card-body\">
                                                        {{ form_start(form3) }}
                                                        <p><b>Contact</b></p>
                                                            <div class=\"form-group row\">
                                                                <div class=\"col-md-6 mb-6\">
                                                                        <label for=\"projectName\" class=\"form-label\">{% trans %}Name{% endtrans %}</label>
                                                                        {{ form_row(form3.name) }}
                                                                </div>

                                                                <div class=\"col-md-6 mb-6\">
                                                                        <label for=\"projectName\" class=\"form-label\">{% trans %}Surname{% endtrans %}</label>
                                                                        {{ form_row(form3.surname) }}
                                                                </div>
                                                                
                                                            </div>

                                                                <div class=\"form-group row\">
                                                                    <div class=\"col-md-12 mb-6\">
                                                                            <label for=\"projectName\" class=\"form-label\">{% trans %}Description{% endtrans %}</label>
                                                                            {{ form_row(form3.description) }}
                                                                    </div>
                                                            </div> <!--end container-->
                                                        </div> <!--end card-body-->
                                                    </div> <!--end card-body-->
                                                </div> <!--end col-->                        
                                            </div> <!--end col--> 
                                            <p><b>{% trans %}Contact Info{% endtrans %}</b></p>
                                                            <div class=\"col-12 col-lg-12\">
                                                                <div style=\"width:50%; display:inline-block; float:right;margin-left:15px\">
                                                                    <div class=\"card\">
                                                                        <div class=\"card-body\">
                                                                            <div id=\"containerphone2\">
                                                                                <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('phone')\">{% trans %}Add Phone Field{% endtrans %}</button>
                                                                            </div> <!--end container-->
                                                                        </div> <!--end card-body-->
                                                                    </div> <!--end card-body-->
                                                                </div> <!--end col-->
                                                                <div class=\"card\">
                                                                    <div class=\"card-body\">
                                                                        
                                                                            <div id=\"containeremail2\">
                                                                                <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('email')\">{% trans %}Add Email Field{% endtrans %}</button>
                                                                            </div> <!--end container-->
                                                                        </div> <!--end card-body-->
                                                                    </div> <!--end card-body-->
                                                                
                                                            </div> <!--end col-->                                          
                                                        </div><!--end row-->

                                                        <div class=\"row\">
                                                            <div class=\"col-12 col-lg-12\">
                                                                <div style=\"width:100%; display:inline-block; float:right;margin-left:15px\">
                                                                    <div class=\"card\">
                                                                        <div class=\"card-body\">
                                                                            <div id=\"containeraddress2\">
                                                                                <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('address')\">{% trans %}Add Address Field{% endtrans %}</button>
                                                                            </div> <!--end container-->
                                                                        </div> <!--end card-body-->
                                                                    </div> <!--end card-body-->
                                                                </div> <!--end col-->                        
                                                            </div> <!--end col-->                                          
                                                        </div><!--end row-->                                         
                                        </div><!--end row-->



                                        </div>
                                    </div> <!--end card-body-->                                           
                                </div><!--end card-->
                            </div> <!--end col-->                                          
                        </div><!--end row-->
                       {#  {{ form_end(form) }}
                        </form> #}
                                     {{ form_rest(form3) }}          
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"form-group\">
                            <a style=\"float:right; margin-right: 5px;\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\" >{% trans %}Back{% endtrans %}</a>                                                                                           
                        </div>
                            <div class=\"form-group\">
                            <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">{% trans %}Convert{% endtrans %}</button>                                                                                                                                                                                     
                        </div>                
                        </div> <!--end col-->                                          
                    </div><!--end row-->
                   
                    {{ form_end(form) }}
                   
                    {{ form_end(form2) }}
                   
                    {{ form_end(form3) }}
                    </form>


                        <br>

 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>

<script type=\"text/javascript\">


        \$(document).ready(function () {
            
            document.body.classList.toggle('enlarge-menu');
        });

let CreateInputAddress = null;
let CreateInputCity = null;
let CreateInputPostalCode = null;





function addInputField(fieldadded) {
      const container = document.getElementById(\"container\" + fieldadded);
      
      const deleteButton = document.createElement(\"button\");
      deleteButton.classList.add(\"las\");
      deleteButton.classList.add(\"la-trash-alt\");
      deleteButton.classList.add(\"deletebutton\");

      if (fieldadded === \"phone\") {
        const CreateInput = document.createElement(\"input\");
        CreateInput.classList.add(\"textboxphone\");
        CreateInput.name = fieldadded + '[]';
        container.appendChild(CreateInput).placeholder = \"Phone\";
           deleteButton.addEventListener(\"click\", function() {
            container.removeChild(CreateInput);
            container.removeChild(deleteButton);
        });
      }

      if (fieldadded === \"email\") {
        const CreateInput = document.createElement(\"input\");
        CreateInput.classList.add(\"textboxemail\");
        CreateInput.name = fieldadded + '[]';
        container.appendChild(CreateInput).placeholder = \"Email\";
           deleteButton.addEventListener(\"click\", function() {
            container.removeChild(CreateInput);
            container.removeChild(deleteButton);
        });
      }

      if (fieldadded === \"address\") {
        const CreateInputAddress = document.createElement(\"input\");
        const CreateInputCity = document.createElement(\"input\");
        const CreateInputPostalCode = document.createElement(\"input\");

        CreateInputAddress.classList.add(\"textboxaddress\");
        CreateInputCity.classList.add(\"textboxaddress\");
        CreateInputPostalCode.classList.add(\"textboxaddress\");

        CreateInputAddress.name = fieldadded + 'address' + '[]';
        CreateInputCity.name = fieldadded + 'city' + '[]';
        CreateInputPostalCode.name = fieldadded + 'postalcode' + '[]';

        CreateInputAddress.placeholder = \"Address\";
        CreateInputCity.placeholder = \"City\";
        CreateInputPostalCode.placeholder = \"Postal Code\";

        container.appendChild(CreateInputAddress);
        container.appendChild(CreateInputCity);
        container.appendChild(CreateInputPostalCode);

          deleteButton.addEventListener(\"click\", function() {
         
                event.preventDefault();
                container.removeChild(CreateInputAddress);
                container.removeChild(CreateInputCity);
                container.removeChild(CreateInputPostalCode);
                container.removeChild(deleteButton);
        });
      }

      container.appendChild(deleteButton);
    }
</script>

<style>
.deletebutton {
border: none;
outline: none;
background: none;
font-size: 20px;
color: red;
}

.textboxphone{
width: 195px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
}

.textboxemail{
width: 185px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
}

.textboxaddress{
width: 177px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
margin-right: 10px;
display: inline-block;
}

</style>
            
{% endblock %}", "business/convertedoptions.html copy.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\business\\convertedoptions.html copy.twig");
    }
}
