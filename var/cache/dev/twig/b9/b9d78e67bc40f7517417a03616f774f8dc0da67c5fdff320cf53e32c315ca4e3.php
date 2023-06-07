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
class __TwigTemplate_04ea450b08be1f29a1f547bf42b867475e98d8d806a23032472ee3e6df566aba extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "work/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "work/index.html.twig", 1);
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
                                        <li class=\"breadcrumb-item active\">Work</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Work</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <form action=\"/business/work\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
        echo "...\" class=\"form-control\"></input>
                        </form>
                        </div>
                        <br>
                        <div class=\"row\">
                        <div class=\"col-12\">  
                          
                            <div class=\"card\"> 
                              
                                <div class=\"card-body\">
                                    <div class=\"kanban-board\">
                                        <div class=\"kanban-col\">
                                            <div class=\"kanban-main-card\">                                        
                                                <div class=\"kanban-box-title\">         
                                                    <h4 class=\"header-title mb-3\">Leads</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-left\" class=\"pb-1\">
                                                  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["leads"]);
        foreach ($context['_seq'] as $context["_key"] => $context["leads"]) {
            echo "  
                                                    <div class=\"card\" onclick=\"returnhrefshow('leads',";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leads"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo ")\">
                                              
                                                        <div class=\"card-body\">
                                                            <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leads"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-success\"></i>
                                                            <h5 class=\"my-1 font-14\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leads"], "name", [], "any", false, false, false, 58), "html", null, true);
            echo "</h5>
                                                            <p class=\"text-muted mb-2\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leads"], "idarea", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
            echo "</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"col-6 align-self-center\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leads"], "idstatus", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
            echo "</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class=\"col-6 align-self-center\">
                                                                    <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leads"], "iddepartment", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
            echo "</p>
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leads'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo " 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->
                                   

                                        <div class=\"kanban-col\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">Qualification</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1\">
                                                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["OppQualification"]);
        foreach ($context['_seq'] as $context["_key"] => $context["OppQualification"]) {
            // line 96
            echo "                                                    <div class=\"card\" onclick=\"returnhrefshow('opportunities',";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppQualification"], "id", [], "any", false, false, false, 96), "html", null, true);
            echo ")\">
                                                        <div class=\"card-body\">
                                                           <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppQualification"], "id", [], "any", false, false, false, 100), "html", null, true);
            echo "</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-information\"></i>
                                                            <h5 class=\"my-1 font-14\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppQualification"], "name", [], "any", false, false, false, 104), "html", null, true);
            echo "</h5>
                                                            <p class=\"text-muted mb-2\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppQualification"], "iddepartment", [], "any", false, false, false, 105), "name", [], "any", false, false, false, 105), "html", null, true);
            echo "</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"col-6 align-self-center\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppQualification"], "idstage", [], "any", false, false, false, 112), "name", [], "any", false, false, false, 112), "html", null, true);
            echo "</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class=\"col-6 align-self-center\">
                                                                    <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppQualification"], "iddepartment", [], "any", false, false, false, 119), "name", [], "any", false, false, false, 119), "html", null, true);
            echo "</p>
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OppQualification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo " 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->


                                       <div class=\"kanban-col\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">Proposal</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1\">
                                                ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["OppProposal"]);
        foreach ($context['_seq'] as $context["_key"] => $context["OppProposal"]) {
            // line 142
            echo "                                                    <div class=\"card\" onclick=\"returnhrefshow('opportunities',";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppProposal"], "id", [], "any", false, false, false, 142), "html", null, true);
            echo ")\">
                                                        <div class=\"card-body\">
                                                           <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppProposal"], "id", [], "any", false, false, false, 146), "html", null, true);
            echo "</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-warning\"></i>
                                                            <h5 class=\"my-1 font-14\">";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppProposal"], "name", [], "any", false, false, false, 150), "html", null, true);
            echo "</h5>
                                                            <p class=\"text-muted mb-2\">";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppProposal"], "iddepartment", [], "any", false, false, false, 151), "name", [], "any", false, false, false, 151), "html", null, true);
            echo "</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"col-6 align-self-center\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppProposal"], "idstage", [], "any", false, false, false, 158), "name", [], "any", false, false, false, 158), "html", null, true);
            echo "</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class=\"col-6 align-self-center\">
                                                                    <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppProposal"], "iddepartment", [], "any", false, false, false, 165), "name", [], "any", false, false, false, 165), "html", null, true);
            echo "</p>
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OppProposal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo " 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->

                                        <div class=\"kanban-col\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">Negotiation</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1\">
                                                ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["OppNegotiation"]);
        foreach ($context['_seq'] as $context["_key"] => $context["OppNegotiation"]) {
            // line 187
            echo "                                                    <div class=\"card\" onclick=\"returnhrefshow('opportunities',";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppNegotiation"], "id", [], "any", false, false, false, 187), "html", null, true);
            echo ")\">
                                                        <div class=\"card-body\">
                                                           <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppNegotiation"], "id", [], "any", false, false, false, 191), "html", null, true);
            echo "</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-warning\"></i>
                                                            <h5 class=\"my-1 font-14\">";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppNegotiation"], "name", [], "any", false, false, false, 195), "html", null, true);
            echo "</h5>
                                                            <p class=\"text-muted mb-2\">";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppNegotiation"], "iddepartment", [], "any", false, false, false, 196), "name", [], "any", false, false, false, 196), "html", null, true);
            echo "</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"col-6 align-self-center\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppNegotiation"], "idstage", [], "any", false, false, false, 203), "name", [], "any", false, false, false, 203), "html", null, true);
            echo "</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class=\"col-6 align-self-center\">
                                                                    <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppNegotiation"], "iddepartment", [], "any", false, false, false, 210), "name", [], "any", false, false, false, 210), "html", null, true);
            echo "</p>
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OppNegotiation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo " 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->
                                        
                                        <div class=\"kanban-col\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">Close Won</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1\">
                                                ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["OppClosedWon"]);
        foreach ($context['_seq'] as $context["_key"] => $context["OppClosedWon"]) {
            // line 232
            echo "                                                    <div class=\"card\" onclick=\"returnhrefshow('opportunities',";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppClosedWon"], "id", [], "any", false, false, false, 232), "html", null, true);
            echo ")\">
                                                        <div class=\"card-body\">
                                                           <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppClosedWon"], "id", [], "any", false, false, false, 236), "html", null, true);
            echo "</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-success\"></i>
                                                            <h5 class=\"my-1 font-14\">";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OppClosedWon"], "name", [], "any", false, false, false, 240), "html", null, true);
            echo "</h5>
                                                            <p class=\"text-muted mb-2\">";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppClosedWon"], "iddepartment", [], "any", false, false, false, 241), "name", [], "any", false, false, false, 241), "html", null, true);
            echo "</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"col-6 align-self-center\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppClosedWon"], "idstage", [], "any", false, false, false, 248), "name", [], "any", false, false, false, 248), "html", null, true);
            echo "</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class=\"col-6 align-self-center\">
                                                                    <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppClosedWon"], "iddepartment", [], "any", false, false, false, 255), "name", [], "any", false, false, false, 255), "html", null, true);
            echo "</p>
                                                                    </a>
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
                                                
                                            

                                        <div class=\"kanban-col\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">Close Lost</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1\">
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
                                                                <div class=\"col-6 align-self-center\">
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
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class=\"col-6 align-self-center\">
                                                                    <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">";
            // line 302
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OppClosedLost"], "iddepartment", [], "any", false, false, false, 302), "name", [], "any", false, false, false, 302), "html", null, true);
            echo "</p>
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OppClosedLost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
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

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"Appearance\" aria-labelledby=\"AppearanceLabel\">
                    <div class=\"offcanvas-header border-bottom\">
                      <h5 class=\"m-0 font-14\" id=\"AppearanceLabel\">Appearance</h5>
                      <button type=\"button\" class=\"btn-close text-reset p-0 m-0 align-self-center\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"offcanvas-body\">  
                        <h6>Account Settings</h6>
                        <div class=\"p-2 text-start mt-3\">
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch1\">
                                <label class=\"form-check-label\" for=\"settings-switch1\">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch2\" checked>
                                <label class=\"form-check-label\" for=\"settings-switch2\">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch3\">
                                <label class=\"form-check-label\" for=\"settings-switch3\">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class=\"p-2 text-start mt-3\">
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch4\">
                                <label class=\"form-check-label\" for=\"settings-switch4\">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch5\" checked>
                                <label class=\"form-check-label\" for=\"settings-switch5\">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch6\">
                                <label class=\"form-check-label\" for=\"settings-switch6\">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->               
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->

                    
                    <br><br>
     <footer class=\"footer text-center text-sm-start\">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Business <span class=\"text-muted d-none d-sm-inline-block float-end\">Crafted by Bento</span>
                </footer>

<script type=\"text/javascript\">

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
        return array (  536 => 308,  523 => 302,  513 => 295,  503 => 288,  499 => 287,  492 => 283,  484 => 279,  480 => 278,  461 => 261,  448 => 255,  438 => 248,  428 => 241,  424 => 240,  417 => 236,  409 => 232,  405 => 231,  388 => 216,  375 => 210,  365 => 203,  355 => 196,  351 => 195,  344 => 191,  336 => 187,  332 => 186,  315 => 171,  302 => 165,  292 => 158,  282 => 151,  278 => 150,  271 => 146,  263 => 142,  259 => 141,  241 => 125,  228 => 119,  218 => 112,  208 => 105,  204 => 104,  197 => 100,  189 => 96,  185 => 95,  167 => 79,  154 => 73,  144 => 66,  134 => 59,  130 => 58,  123 => 54,  115 => 49,  109 => 48,  85 => 27,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

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
                                        <li class=\"breadcrumb-item active\">Work</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Work</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <form action=\"/business/work\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"{% trans %}Search{% endtrans %}...\" class=\"form-control\"></input>
                        </form>
                        </div>
                        <br>
                        <div class=\"row\">
                        <div class=\"col-12\">  
                          
                            <div class=\"card\"> 
                              
                                <div class=\"card-body\">
                                    <div class=\"kanban-board\">
                                        <div class=\"kanban-col\">
                                            <div class=\"kanban-main-card\">                                        
                                                <div class=\"kanban-box-title\">         
                                                    <h4 class=\"header-title mb-3\">Leads</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-left\" class=\"pb-1\">
                                                  {% for leads in leads %}  
                                                    <div class=\"card\" onclick=\"returnhrefshow('leads',{{ leads.id }})\">
                                              
                                                        <div class=\"card-body\">
                                                            <div class=\"col-6 align-self-center\" >
                                                                        <a class=\"float-end\" href=\"#\">
                                                                            <p class=\"text-muted mb-2\">{{ leads.id }}</p>
                                                                        </a>
                                                            </div><!--end col-->
                                                            <i class=\"mdi mdi-circle-outline d-block mt-n2 font-14 text-success\"></i>
                                                            <h5 class=\"my-1 font-14\">{{ leads.name }}</h5>
                                                            <p class=\"text-muted mb-2\">{{ leads.idarea.name }}</p>
                                                            <div class=\"row justify-content-center\">
                                                                <div class=\"col-6 align-self-center\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">{{ leads.idstatus.name }}</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class=\"col-6 align-self-center\">
                                                                    <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">{{ leads.iddepartment.name }}</p>
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    {% endfor %} 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->
                                   

                                        <div class=\"kanban-col\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">Qualification</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1\">
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
                                                                <div class=\"col-6 align-self-center\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">{{ OppQualification.idstage.name }}</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class=\"col-6 align-self-center\">
                                                                    <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">{{ OppQualification.iddepartment.name }}</p>
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    {% endfor %} 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->


                                       <div class=\"kanban-col\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">Proposal</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1\">
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
                                                                <div class=\"col-6 align-self-center\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">{{ OppProposal.idstage.name }}</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class=\"col-6 align-self-center\">
                                                                    <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">{{ OppProposal.iddepartment.name }}</p>
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    {% endfor %} 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->

                                        <div class=\"kanban-col\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">Negotiation</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1\">
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
                                                                <div class=\"col-6 align-self-center\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">{{ OppNegotiation.idstage.name }}</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class=\"col-6 align-self-center\">
                                                                    <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">{{ OppNegotiation.iddepartment.name }}</p>
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    {% endfor %} 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->
                                        
                                        <div class=\"kanban-col\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">Close Won</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1\">
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
                                                                <div class=\"col-6 align-self-center\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">{{ OppClosedWon.idstage.name }}</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class=\"col-6 align-self-center\">
                                                                    <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">{{ OppClosedWon.iddepartment.name }}</p>
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    {% endfor %} 
                                                </div><!--end project-list-left-->
                                            </div><!--end /div-->
                                        </div><!--end kanban-col-->
                                                
                                            

                                        <div class=\"kanban-col\">
                                            <div class=\"kanban-main-card\">                                                    
                                                <div class=\"kanban-box-title\">
                                                    <h4 class=\"header-title mb-3\">Close Lost</h4>
                                                    <div class=\"dropdown kanban-main-dropdown\">
                                                        <a class=\"dropdown-toggle arrow-none\" id=\"drop1\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\"></a>
                                                    </div>
                                                </div>
                                                
                                                <div id=\"project-list-center-left\" class=\"pb-1\">
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
                                                                <div class=\"col-6 align-self-center\">
                                                                    <ul class=\"list-inline mb-0\">                                                                    
                                                                        <li class=\"list-item d-inline-block mr-2\">
                                                                            <a class=\"\" href=\"#\">
                                                                                <i class=\"mdi mdi-format-list-bulleted text-muted\"></i>
                                                                                <span class=\"text-muted font-weight-bold\">{{ OppClosedLost.idstage.name }}</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class=\"col-6 align-self-center\">
                                                                    <a class=\"float-end\" href=\"#\">
                                                                        <p class=\"text-muted mb-2\">{{ OppClosedLost.iddepartment.name }}</p>
                                                                    </a>
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

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"Appearance\" aria-labelledby=\"AppearanceLabel\">
                    <div class=\"offcanvas-header border-bottom\">
                      <h5 class=\"m-0 font-14\" id=\"AppearanceLabel\">Appearance</h5>
                      <button type=\"button\" class=\"btn-close text-reset p-0 m-0 align-self-center\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"offcanvas-body\">  
                        <h6>Account Settings</h6>
                        <div class=\"p-2 text-start mt-3\">
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch1\">
                                <label class=\"form-check-label\" for=\"settings-switch1\">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch2\" checked>
                                <label class=\"form-check-label\" for=\"settings-switch2\">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch3\">
                                <label class=\"form-check-label\" for=\"settings-switch3\">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class=\"p-2 text-start mt-3\">
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch4\">
                                <label class=\"form-check-label\" for=\"settings-switch4\">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch5\" checked>
                                <label class=\"form-check-label\" for=\"settings-switch5\">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch6\">
                                <label class=\"form-check-label\" for=\"settings-switch6\">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->               
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->

                    
                    <br><br>
     <footer class=\"footer text-center text-sm-start\">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Business <span class=\"text-muted d-none d-sm-inline-block float-end\">Crafted by Bento</span>
                </footer>

<script type=\"text/javascript\">

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
