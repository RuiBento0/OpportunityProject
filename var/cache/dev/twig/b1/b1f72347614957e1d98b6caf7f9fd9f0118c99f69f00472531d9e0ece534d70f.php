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

/* work/index.html.twig */
class __TwigTemplate_4f4279ddbe13a68c45005f9ee78c7db77fcfc64073ebc91ea43fe19e7c4baeee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "work/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "work/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "work/index.html.twig", 1);
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

<style>
.hovergray :hover{
    background-color:#f5f8fc;
}
</style>

<div class=\"page-wrapper\">

            <!-- Page Content-->
            ";
        // line 16
        echo "
                <div class=\"container-fluid\" style=\"width:100%;\">
                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"page-title-box\">
                                <div class=\"float-end\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">Business</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Work", [], "messages");
        echo "</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Work", [], "messages");
        echo "</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <form action=\"/business/work\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
        echo "...\" class=\"form-control\"></input>
                        </form>
                        </div>
                        <br>

                    <div class=\"row\" style=\"width:100%;\">
                        <div class=\"col-12\">                            
                            <div class=\"card\"> 
                                <div class=\"card-body\">
                                    <div class=\"kanban-board\">
                                        <div class=\"kanban-col\"style=\"max-width: 16%;\" >
                                            <div class=\"kanban-main-card\">                                        
                                                <div class=\"kanban-box-title\">         
                                                    <h4 class=\"header-title mb-3\">";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leads", [], "messages");
        echo "</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                <div id=\"project-list-left\" class=\"pb-1 hovergray\" style=\"width:100%\">

                                                  ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["leads"]);
        foreach ($context['_seq'] as $context["_key"] => $context["leads"]) {
            echo "  
                                                    <div class=\"card\" onclick=\"returnhrefshow('leads',";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leads"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo ")\">
                                                        <div class=\"card-body\">
                                                            <div class=\"col-6 align-self-center\" >
                                                                <a class=\"float-end\" href=\"\">
                                                                    <p class=\"text-muted mb-2\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leads"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "</p>
                                                                </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-success\"></i>
                                                            <h5 class=\"my-1 font-14\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leads"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "</h5>
                                                            <p class=\"text-muted mb-2\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leads"], "idarea", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leads"], "idstatus", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71), "html", null, true);
            echo "</span>
                                                                            </a>
                                                                        </li>
                                                                         <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leads"], "iddepartment", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
            echo "</p>
                                                                        </a>
                                                                    </ul>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leads'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo " 

                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->
                                   

                                        <div class=\"kanban-col\" style=\"max-width: 16%;\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Qualification", [], "messages");
        echo "</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1 hovergray\">
                                                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["OppQualification"]);
        foreach ($context['_seq'] as $context["_key"] => $context["OppQualification"]) {
            // line 100
            echo "                                                    <div class=\"card\" onclick=\"returnhrefshow('opportunities',";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppQualification"], "id", [], "any", false, false, false, 100), "html", null, true);
            echo ")\">
                                                        <div class=\"card-body\">
                                                           <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppQualification"], "id", [], "any", false, false, false, 104), "html", null, true);
            echo "</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-information\"></i>
                                                            <h5 class=\"my-1 font-14\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppQualification"], "name", [], "any", false, false, false, 108), "html", null, true);
            echo "</h5>
                                                            <p class=\"text-muted mb-2\">";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppQualification"], "iddepartment", [], "any", false, false, false, 109), "name", [], "any", false, false, false, 109), "html", null, true);
            echo "</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppQualification"], "idstage", [], "any", false, false, false, 116), "name", [], "any", false, false, false, 116), "html", null, true);
            echo "</span>
                                                                            </a>
                                                                        </li>
                                                                         <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppQualification"], "iddepartment", [], "any", false, false, false, 120), "name", [], "any", false, false, false, 120), "html", null, true);
            echo "</p>
                                                                        </a>
                                                                    </ul>
                                                                </div><!--end col-->
                                                               
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OppQualification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo " 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->


                                       <div class=\"kanban-col\"style=\"max-width: 16%;\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Proposal", [], "messages");
        echo "</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1 hovergray\">
                                                ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["OppProposal"]);
        foreach ($context['_seq'] as $context["_key"] => $context["OppProposal"]) {
            // line 145
            echo "                                                    <div class=\"card\" onclick=\"returnhrefshow('opportunities',";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppProposal"], "id", [], "any", false, false, false, 145), "html", null, true);
            echo ")\">
                                                        <div class=\"card-body\">
                                                           <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppProposal"], "id", [], "any", false, false, false, 149), "html", null, true);
            echo "</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-warning\"></i>
                                                            <h5 class=\"my-1 font-14\">";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppProposal"], "name", [], "any", false, false, false, 153), "html", null, true);
            echo "</h5>
                                                            <p class=\"text-muted mb-2\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppProposal"], "iddepartment", [], "any", false, false, false, 154), "name", [], "any", false, false, false, 154), "html", null, true);
            echo "</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppProposal"], "idstage", [], "any", false, false, false, 161), "name", [], "any", false, false, false, 161), "html", null, true);
            echo "</span>
                                                                            </a>
                                                                        </li>
                                                                        <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppProposal"], "iddepartment", [], "any", false, false, false, 165), "name", [], "any", false, false, false, 165), "html", null, true);
            echo "</p>
                                                                    </a>
                                                                    </ul>
                                                                </div><!--end col-->
                                                               
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OppProposal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo " 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->

                                        <div class=\"kanban-col\"style=\"max-width: 16%;\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Negotiation", [], "messages");
        echo "</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1 hovergray\">
                                                ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["OppNegotiation"]);
        foreach ($context['_seq'] as $context["_key"] => $context["OppNegotiation"]) {
            // line 189
            echo "                                                    <div class=\"card\" onclick=\"returnhrefshow('opportunities',";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppNegotiation"], "id", [], "any", false, false, false, 189), "html", null, true);
            echo ")\">
                                                        <div class=\"card-body\">
                                                           <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppNegotiation"], "id", [], "any", false, false, false, 193), "html", null, true);
            echo "</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-warning\"></i>
                                                            <h5 class=\"my-1 font-14\">";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppNegotiation"], "name", [], "any", false, false, false, 197), "html", null, true);
            echo "</h5>
                                                            <p class=\"text-muted mb-2\">";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppNegotiation"], "iddepartment", [], "any", false, false, false, 198), "name", [], "any", false, false, false, 198), "html", null, true);
            echo "</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppNegotiation"], "idstage", [], "any", false, false, false, 205), "name", [], "any", false, false, false, 205), "html", null, true);
            echo "</span>
                                                                            </a>
                                                                        </li>
                                                                         <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppNegotiation"], "iddepartment", [], "any", false, false, false, 209), "name", [], "any", false, false, false, 209), "html", null, true);
            echo "</p>
                                                                    </a>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OppNegotiation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo " 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->
                                        
                                        <div class=\"kanban-col\"style=\"max-width: 16%;\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close Won", [], "messages");
        echo "</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1 hovergray\">
                                                ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["OppClosedWon"]);
        foreach ($context['_seq'] as $context["_key"] => $context["OppClosedWon"]) {
            // line 233
            echo "                                                    <div class=\"card\" onclick=\"returnhrefshow('opportunities',";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppClosedWon"], "id", [], "any", false, false, false, 233), "html", null, true);
            echo ")\">
                                                        <div class=\"card-body\">
                                                           <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppClosedWon"], "id", [], "any", false, false, false, 237), "html", null, true);
            echo "</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-success\"></i>
                                                            <h5 class=\"my-1 font-14\">";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppClosedWon"], "name", [], "any", false, false, false, 241), "html", null, true);
            echo "</h5>
                                                            <p class=\"text-muted mb-2\">";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppClosedWon"], "iddepartment", [], "any", false, false, false, 242), "name", [], "any", false, false, false, 242), "html", null, true);
            echo "</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppClosedWon"], "idstage", [], "any", false, false, false, 249), "name", [], "any", false, false, false, 249), "html", null, true);
            echo "</span>
                                                                            </a>
                                                                        </li>
                                                                        <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">";
            // line 253
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppClosedWon"], "iddepartment", [], "any", false, false, false, 253), "name", [], "any", false, false, false, 253), "html", null, true);
            echo "</p>
                                                                    </a>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OppClosedWon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo " 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->
                                                
                                            

                                        <div class=\"kanban-col\"style=\"max-width: 16%;\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">";
        // line 271
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close Lost", [], "messages");
        echo "</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1 hovergray\">
                                                ";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["OppClosedLost"]);
        foreach ($context['_seq'] as $context["_key"] => $context["OppClosedLost"]) {
            // line 279
            echo "                                                    <div class=\"card\" onclick=\"returnhrefshow('opportunities',";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppClosedLost"], "id", [], "any", false, false, false, 279), "html", null, true);
            echo ")\">
                                                        <div class=\"card-body\">
                                                           <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppClosedLost"], "id", [], "any", false, false, false, 283), "html", null, true);
            echo "</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-danger\"></i>
                                                            <h5 class=\"my-1 font-14\">";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppClosedLost"], "name", [], "any", false, false, false, 287), "html", null, true);
            echo "</h5>
                                                            <p class=\"text-muted mb-2\">";
            // line 288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppClosedLost"], "iddepartment", [], "any", false, false, false, 288), "name", [], "any", false, false, false, 288), "html", null, true);
            echo "</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">";
            // line 295
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppClosedLost"], "idstage", [], "any", false, false, false, 295), "name", [], "any", false, false, false, 295), "html", null, true);
            echo "</span>
                                                                            </a>
                                                                        </li>
                                                                        <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">";
            // line 299
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppClosedLost"], "iddepartment", [], "any", false, false, false, 299), "name", [], "any", false, false, false, 299), "html", null, true);
            echo "</p>
                                                                    </a>
                                                                    </ul>
                                                                </div><!--end col-->
                                                              
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OppClosedLost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo " 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->
                                    </div><!--end kanban-board-->                                                                    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script> 

<script type=\"text/javascript\">

        \$(document).ready(function () {

            document.body.classList.toggle('enlarge-menu');

        });

    function myFunction() 
    {
        var input, filter, table, tr, td, i, TxtValue, x, flag;

        input = document.getElementById(\"myInput\");
        filter = input.value.toUpperCase();
        table = document.getElementById(\"myTable\");
        tr = table.getElementsByTagName(\"tr\");

        for (i = 0; i < tr.length; i++)
        {
            flag = 0;

            for (x = 0; x < tr[i].getElementsByTagName(\"td\").length-1; x++)
            {
                td = tr[i].getElementsByTagName(\"td\")[x];
                if (td) 
                {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) 
                    {
                        flag = 1;
                    } 
                }
            }
            if(flag==1)
            {
                tr[i].style.display = \"\";
            }
            else
            {
                tr[i].style.display = \"none\";
            }
        }
    }

     function returnhrefshow(entity, identity) {
         window.location.href = \"/business/\" + entity + \"/edit/\" + identity;
  }
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "work/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 307,  553 => 299,  546 => 295,  536 => 288,  532 => 287,  525 => 283,  517 => 279,  513 => 278,  503 => 271,  491 => 261,  476 => 253,  469 => 249,  459 => 242,  455 => 241,  448 => 237,  440 => 233,  436 => 232,  426 => 225,  416 => 217,  401 => 209,  394 => 205,  384 => 198,  380 => 197,  373 => 193,  365 => 189,  361 => 188,  351 => 181,  341 => 173,  326 => 165,  319 => 161,  309 => 154,  305 => 153,  298 => 149,  290 => 145,  286 => 144,  276 => 137,  265 => 128,  250 => 120,  243 => 116,  233 => 109,  229 => 108,  222 => 104,  214 => 100,  210 => 99,  200 => 92,  188 => 82,  174 => 75,  167 => 71,  157 => 64,  153 => 63,  146 => 59,  139 => 55,  133 => 54,  123 => 47,  107 => 34,  99 => 29,  93 => 26,  81 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}


<style>
.hovergray :hover{
    background-color:#f5f8fc;
}
</style>

<div class=\"page-wrapper\">

            <!-- Page Content-->
            {# <div class=\"page-content-tab\"> #}

                <div class=\"container-fluid\" style=\"width:100%;\">
                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"page-title-box\">
                                <div class=\"float-end\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">Business</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">{% trans %}Work{% endtrans %}</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">{% trans %}Work{% endtrans %}</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <form action=\"/business/work\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"{% trans %}Search{% endtrans %}...\" class=\"form-control\"></input>
                        </form>
                        </div>
                        <br>

                    <div class=\"row\" style=\"width:100%;\">
                        <div class=\"col-12\">                            
                            <div class=\"card\"> 
                                <div class=\"card-body\">
                                    <div class=\"kanban-board\">
                                        <div class=\"kanban-col\"style=\"max-width: 16%;\" >
                                            <div class=\"kanban-main-card\">                                        
                                                <div class=\"kanban-box-title\">         
                                                    <h4 class=\"header-title mb-3\">{% trans %}Leads{% endtrans %}</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                <div id=\"project-list-left\" class=\"pb-1 hovergray\" style=\"width:100%\">

                                                  {% for leads in leads %}  
                                                    <div class=\"card\" onclick=\"returnhrefshow('leads',{{ leads.id }})\">
                                                        <div class=\"card-body\">
                                                            <div class=\"col-6 align-self-center\" >
                                                                <a class=\"float-end\" href=\"\">
                                                                    <p class=\"text-muted mb-2\">{{ leads.id }}</p>
                                                                </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-success\"></i>
                                                            <h5 class=\"my-1 font-14\">{{ leads.name }}</h5>
                                                            <p class=\"text-muted mb-2\">{{ leads.idarea.name }}</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">{{ leads.idstatus.name }}</span>
                                                                            </a>
                                                                        </li>
                                                                         <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">{{ leads.iddepartment.name }}</p>
                                                                        </a>
                                                                    </ul>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    {% endfor %} 

                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->
                                   

                                        <div class=\"kanban-col\" style=\"max-width: 16%;\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">{% trans %}Qualification{% endtrans %}</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1 hovergray\">
                                                {% for OppQualification in OppQualification %}
                                                    <div class=\"card\" onclick=\"returnhrefshow('opportunities',{{ OppQualification.id }})\">
                                                        <div class=\"card-body\">
                                                           <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">{{ OppQualification.id }}</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-information\"></i>
                                                            <h5 class=\"my-1 font-14\">{{ OppQualification.name }}</h5>
                                                            <p class=\"text-muted mb-2\">{{ OppQualification.iddepartment.name }}</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">{{ OppQualification.idstage.name }}</span>
                                                                            </a>
                                                                        </li>
                                                                         <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">{{ OppQualification.iddepartment.name }}</p>
                                                                        </a>
                                                                    </ul>
                                                                </div><!--end col-->
                                                               
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    {% endfor %} 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->


                                       <div class=\"kanban-col\"style=\"max-width: 16%;\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">{% trans %}Proposal{% endtrans %}</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1 hovergray\">
                                                {% for OppProposal in OppProposal %}
                                                    <div class=\"card\" onclick=\"returnhrefshow('opportunities',{{ OppProposal.id }})\">
                                                        <div class=\"card-body\">
                                                           <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">{{ OppProposal.id }}</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-warning\"></i>
                                                            <h5 class=\"my-1 font-14\">{{ OppProposal.name }}</h5>
                                                            <p class=\"text-muted mb-2\">{{ OppProposal.iddepartment.name }}</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">{{ OppProposal.idstage.name }}</span>
                                                                            </a>
                                                                        </li>
                                                                        <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">{{ OppProposal.iddepartment.name }}</p>
                                                                    </a>
                                                                    </ul>
                                                                </div><!--end col-->
                                                               
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    {% endfor %} 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->

                                        <div class=\"kanban-col\"style=\"max-width: 16%;\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">{% trans %}Negotiation{% endtrans %}</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1 hovergray\">
                                                {% for OppNegotiation in OppNegotiation %}
                                                    <div class=\"card\" onclick=\"returnhrefshow('opportunities',{{ OppNegotiation.id }})\">
                                                        <div class=\"card-body\">
                                                           <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">{{ OppNegotiation.id }}</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-warning\"></i>
                                                            <h5 class=\"my-1 font-14\">{{ OppNegotiation.name }}</h5>
                                                            <p class=\"text-muted mb-2\">{{ OppNegotiation.iddepartment.name }}</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">{{ OppNegotiation.idstage.name }}</span>
                                                                            </a>
                                                                        </li>
                                                                         <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">{{ OppNegotiation.iddepartment.name }}</p>
                                                                    </a>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    {% endfor %} 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->
                                        
                                        <div class=\"kanban-col\"style=\"max-width: 16%;\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">{% trans %}Close Won{% endtrans %}</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1 hovergray\">
                                                {% for OppClosedWon in OppClosedWon %}
                                                    <div class=\"card\" onclick=\"returnhrefshow('opportunities',{{ OppClosedWon.id }})\">
                                                        <div class=\"card-body\">
                                                           <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">{{ OppClosedWon.id }}</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-success\"></i>
                                                            <h5 class=\"my-1 font-14\">{{ OppClosedWon.name }}</h5>
                                                            <p class=\"text-muted mb-2\">{{ OppClosedWon.iddepartment.name }}</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">{{ OppClosedWon.idstage.name }}</span>
                                                                            </a>
                                                                        </li>
                                                                        <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">{{ OppClosedWon.iddepartment.name }}</p>
                                                                    </a>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    {% endfor %} 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->
                                                
                                            

                                        <div class=\"kanban-col\"style=\"max-width: 16%;\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">{% trans %}Close Lost{% endtrans %}</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1 hovergray\">
                                                {% for OppClosedLost in OppClosedLost %}
                                                    <div class=\"card\" onclick=\"returnhrefshow('opportunities',{{ OppClosedLost.id }})\">
                                                        <div class=\"card-body\">
                                                           <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">{{ OppClosedLost.id }}</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-danger\"></i>
                                                            <h5 class=\"my-1 font-14\">{{ OppClosedLost.name }}</h5>
                                                            <p class=\"text-muted mb-2\">{{ OppClosedLost.iddepartment.name }}</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">{{ OppClosedLost.idstage.name }}</span>
                                                                            </a>
                                                                        </li>
                                                                        <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">{{ OppClosedLost.iddepartment.name }}</p>
                                                                    </a>
                                                                    </ul>
                                                                </div><!--end col-->
                                                              
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    {% endfor %} 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->
                                    </div><!--end kanban-board-->                                                                    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script> 

<script type=\"text/javascript\">

        \$(document).ready(function () {

            document.body.classList.toggle('enlarge-menu');

        });

    function myFunction() 
    {
        var input, filter, table, tr, td, i, TxtValue, x, flag;

        input = document.getElementById(\"myInput\");
        filter = input.value.toUpperCase();
        table = document.getElementById(\"myTable\");
        tr = table.getElementsByTagName(\"tr\");

        for (i = 0; i < tr.length; i++)
        {
            flag = 0;

            for (x = 0; x < tr[i].getElementsByTagName(\"td\").length-1; x++)
            {
                td = tr[i].getElementsByTagName(\"td\")[x];
                if (td) 
                {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) 
                    {
                        flag = 1;
                    } 
                }
            }
            if(flag==1)
            {
                tr[i].style.display = \"\";
            }
            else
            {
                tr[i].style.display = \"none\";
            }
        }
    }

     function returnhrefshow(entity, identity) {
         window.location.href = \"/business/\" + entity + \"/edit/\" + identity;
  }
</script>

{% endblock %} ", "work/index.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\work\\index.html.twig");
    }
}
