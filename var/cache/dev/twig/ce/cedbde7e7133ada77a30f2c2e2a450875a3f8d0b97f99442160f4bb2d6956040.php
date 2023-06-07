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

/* contacts/new.html.twig */
class __TwigTemplate_b6d58e4b983914b083b7a3e33aaf2ae97c7fd954e3ca05aa230cf9d8b4de04e4 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contacts/new.html.twig", 1);
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
                 <div class=\"container-fluid\">
                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"page-title-box\">
                                <div class=\"float-end\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">Business</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/contacts\">Contacts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">New</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Create Contact</h4>
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
                                            <div class=\"col-md-6 mb-3\">
                                                <input type=\"text\" placeholder=\"First Name\" class=\"form-control\" name=\"First_Name\" id=\"First_Name\">
                                            </div>
                                            <div class=\"col-md-6 mb-3\">
                                                <input type=\"text\" placeholder=\"Last Name\" class=\"form-control\" name=\"Last_Name\" id=\"Last_Name\">
                                            </div>
                                        </div>
                                        
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                <input type=\"email\" placeholder=\"Email\" class=\"form-control\" name=\"Email\" id=\"Email\">
                                            </div>
                                            <div class=\"col\">
                                            <button class=\"btn btn-outline-light btn-sm px-4 \">+ Add New</button>
                                            </div><!--end col-->  
                                                                                        
                                            <div class=\"col-md-6 mb-3\">
                                                <input type=\"text\" placeholder=\"Address\" class=\"form-control\" name=\"Adress\" id=\"Adress\">
                                            </div>
                                            <div class=\"col\">
                                            <button class=\"btn btn-outline-light btn-sm px-4 \">+ Add New</button>
                                            </div><!--end col-->  
                                        </div>

                                        <div class=\"form-group row\">
                                            <div class=\"col-md-3 mb-3\">
                                                <input type=\"text\" placeholder=\"Post\" class=\"form-control\" name=\"Post\" id=\"Post\">
                                            </div>
                                            <div class=\"col-md-3 mb-3\">
                                                <input type=\"text\" placeholder=\"Post\" class=\"form-control\" name=\"Post\" id=\"Post\">
                                            </div>
                                            <div class=\"col-md-3 mb-3\">
                                                <input type=\"text\" placeholder=\"Phone No\" class=\"form-control\" name=\"Phone_No\" id=\"Phone_No\">
                                            </div>   
                                            <div class=\"col\">
                                            <button class=\"btn btn-outline-light btn-sm px-4 \">+ Add New</button>
                                            </div><!--end col-->                                         
                                        </div>                                        
                                        <div class=\"form-group\">
                                            <button class=\"btn btn-de-primary btn-sm text-light px-4 mt-3 mb-0\">Save</button> 
                                            <button class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0\">Cancel</button>                                                                                           
                                        </div>

                                         <div class=\"form-group row\">

                                         </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

                </div><!-- container -->

                
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contacts/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 

{% block body %}

<div class=\"page-wrapper\">

            <!-- Page Content-->
                 <div class=\"container-fluid\">
                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"page-title-box\">
                                <div class=\"float-end\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">Business</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/contacts\">Contacts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">New</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Create Contact</h4>
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
                                            <div class=\"col-md-6 mb-3\">
                                                <input type=\"text\" placeholder=\"First Name\" class=\"form-control\" name=\"First_Name\" id=\"First_Name\">
                                            </div>
                                            <div class=\"col-md-6 mb-3\">
                                                <input type=\"text\" placeholder=\"Last Name\" class=\"form-control\" name=\"Last_Name\" id=\"Last_Name\">
                                            </div>
                                        </div>
                                        
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                <input type=\"email\" placeholder=\"Email\" class=\"form-control\" name=\"Email\" id=\"Email\">
                                            </div>
                                            <div class=\"col\">
                                            <button class=\"btn btn-outline-light btn-sm px-4 \">+ Add New</button>
                                            </div><!--end col-->  
                                                                                        
                                            <div class=\"col-md-6 mb-3\">
                                                <input type=\"text\" placeholder=\"Address\" class=\"form-control\" name=\"Adress\" id=\"Adress\">
                                            </div>
                                            <div class=\"col\">
                                            <button class=\"btn btn-outline-light btn-sm px-4 \">+ Add New</button>
                                            </div><!--end col-->  
                                        </div>

                                        <div class=\"form-group row\">
                                            <div class=\"col-md-3 mb-3\">
                                                <input type=\"text\" placeholder=\"Post\" class=\"form-control\" name=\"Post\" id=\"Post\">
                                            </div>
                                            <div class=\"col-md-3 mb-3\">
                                                <input type=\"text\" placeholder=\"Post\" class=\"form-control\" name=\"Post\" id=\"Post\">
                                            </div>
                                            <div class=\"col-md-3 mb-3\">
                                                <input type=\"text\" placeholder=\"Phone No\" class=\"form-control\" name=\"Phone_No\" id=\"Phone_No\">
                                            </div>   
                                            <div class=\"col\">
                                            <button class=\"btn btn-outline-light btn-sm px-4 \">+ Add New</button>
                                            </div><!--end col-->                                         
                                        </div>                                        
                                        <div class=\"form-group\">
                                            <button class=\"btn btn-de-primary btn-sm text-light px-4 mt-3 mb-0\">Save</button> 
                                            <button class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0\">Cancel</button>                                                                                           
                                        </div>

                                         <div class=\"form-group row\">

                                         </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

                </div><!-- container -->

                
{% endblock %}", "contacts/new.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\contacts\\new.html.twig");
    }
}
