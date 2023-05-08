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

/* leads/new.html.twig */
class __TwigTemplate_d46182919444214db8bae663f7c05cb9cc695eb6543f10aaa119943b487947cd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leads/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "leads/new.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">CRM Central</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/leads\">Leads</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">New</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Create Lead</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-6\">
                                            <form>
                                                <div class=\"form-group\">
                                                    <label for=\"leadName\" class=\"form-label\">Lead Name :</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"leadName\" aria-describedby=\"emailHelp\" placeholder=\"Enter lead name\">
                                                </div><!--end form-group-->
                                                <div class=\"form-group\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-3 col-6 mb-2 mb-lg-0\">
                                                            <label class=\"form-label mt-2\" for=\"pro-amount\">Lead Amount</label>
                                                            <input type=\"text\" class=\"form-control\" id=\"pro-amount\" placeholder=\"amount\">
                                                        </div><!--end col-->
                                                        <div class=\"col-lg-3 col-6 mb-2 mb-lg-0\">
                                                            <label class=\"form-label mt-2\" for=\"pro-department\">Departments</label>
                                                            <select class=\"form-select\">
                                                                <option>-Select-</option>
                                                                <option>30 Day</option>
                                                                <option>3 Month</option>
                                                                <option>1 Year</option>
                                                            </select>
                                                        </div><!--end col-->
                                                        <div class=\"col-lg-3 col-6\">
                                                            <label class=\"form-label mt-2\" for=\"pro-campaign\">Campaign</label>
                                                            <select class=\"form-select\">
                                                                <option>-Select-</option>
                                                                <option>30 Day</option>
                                                                <option>3 Month</option>
                                                                <option>1 Year</option>
                                                            </select>
                                                        </div><!--end col-->
                                                        <div class=\"col-lg-3 col-6\">
                                                            <label class=\"form-label mt-2\" for=\"pro-area\">Area</label>
                                                            <select class=\"form-select\">
                                                                <option>-Select-</option>
                                                                <option>Energy</option>
                                                                <option>Telecommunications</option>
                                                                <option>Automobile</option>
                                                                <option>Real Estate</option>
                                                                <option>Services</option>
                                                            </select>
                                                        </div><!--end col-->                                                        
                                                    </div><!--end row-->
                                                </div><!--end form-group-->
                                                <div class=\"form-group\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-6 mb-2 mb-lg-0\">
                                                            <label class=\"form-label mt-2\" for=\"pro-account\">Lead Account</label>
                                                            <select class=\"form-select\">
                                                                <option>--Select--</option>
                                                                <option>Rui</option>
                                                            </select>
                                                        </div><!--end col-->
                                                        <div class=\"col-lg-3 col-6\">
                                                            <label class=\"form-label mt-2\" for=\"pro-status\">Status</label>
                                                            <select class=\"form-select\">
                                                                <option>-Select-</option>
                                                                <option>New</option>
                                                                <option>Assigned</option>
                                                                <option>Pending</option>
                                                                <option>Closed</option>
                                                                <option>Rejected</option>
                                                                <option>Duplicate</option>
                                                            </select>
                                                        </div><!--end col-->
                                                        <div class=\"col-lg-3 col-6\">
                                                            <label class=\"form-label mt-2\" for=\"pro-source\">Source</label>
                                                            <select class=\"form-select\">
                                                                <option>-Select-</option>
                                                                <option>Call</option>
                                                                <option>Email</option>
                                                                <option>Existing Customer</option>
                                                                <option>Partner</option>
                                                                <option>Website</option>                                                               
                                                            </select>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end form-group-->
                                                <div class=\"form-group mb-3\">
                                                    <label class=\"form-label mt-2\" for=\"pro-description\">Description</label>
                                                    <textarea class=\"form-control\" rows=\"5\" id=\"pro-description\"  placeholder=\"writing here..\"></textarea>
                                                </div><!--end form-group-->
                                                
                                                <button type=\"submit\" class=\"btn btn-de-primary btn-sm\">Create Lead</button>
                                                <button type=\"button\" class=\"btn btn-de-danger btn-sm\">Cancel</button>
                                            </form>  <!--end form-->
                                        </div><!--end col-->
                                        <div class=\"col-lg-5 ms-auto align-self-center\">
                                            <form>
                                                <div class=\"form-group\">
                                                    <label for=\"pro-avatar\">Project Avatar</label>
                                                    <img src=\"assets/images/small/project-3.jpg\" alt=\"\" class=\"thumb-lg rounded mx-3\">
                                                    <label class=\"btn btn-de-primary btn-sm text-light\">
                                                        Change Avatar <input type=\"file\" hidden>
                                                    </label>
                                                </div><!--end form-group-->
                                                <h5 class=\"fw-normal my-5\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</h5>
                                                <div class=\"form-group\">
                                                    <label  class=\"form-label\" for=\"team-leader\">Project team members</label>
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\">
                                                            <img src=\"assets/images/users/user-10.jpg\" alt=\"user\" class=\"rounded-circle thumb-xs\">
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <img src=\"assets/images/users/user-9.jpg\" alt=\"user\" class=\"rounded-circle thumb-xs\">
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <img src=\"assets/images/users/user-8.jpg\" alt=\"user\" class=\"rounded-circle thumb-xs\">
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <img src=\"assets/images/users/user-5.jpg\" alt=\"user\" class=\"rounded-circle thumb-xs\">
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <img src=\"assets/images/users/user-4.jpg\" alt=\"user\" class=\"rounded-circle thumb-xs\">
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <a href=\"\" class=\"user-avatar\">
                                                                <span class=\"thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle fw-semibold\">+6</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <input id=\"add-member\" type=\"file\" name=\"files[]\" multiple style='display: none;'>
                                                </div><!--end form-group-->
                                            </form>
                                        </div><!--end col-->
                                    </div><!--end row-->                                                                              
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
                   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "leads/new.html.twig";
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
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">CRM Central</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/leads\">Leads</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">New</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Create Lead</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-6\">
                                            <form>
                                                <div class=\"form-group\">
                                                    <label for=\"leadName\" class=\"form-label\">Lead Name :</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"leadName\" aria-describedby=\"emailHelp\" placeholder=\"Enter lead name\">
                                                </div><!--end form-group-->
                                                <div class=\"form-group\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-3 col-6 mb-2 mb-lg-0\">
                                                            <label class=\"form-label mt-2\" for=\"pro-amount\">Lead Amount</label>
                                                            <input type=\"text\" class=\"form-control\" id=\"pro-amount\" placeholder=\"amount\">
                                                        </div><!--end col-->
                                                        <div class=\"col-lg-3 col-6 mb-2 mb-lg-0\">
                                                            <label class=\"form-label mt-2\" for=\"pro-department\">Departments</label>
                                                            <select class=\"form-select\">
                                                                <option>-Select-</option>
                                                                <option>30 Day</option>
                                                                <option>3 Month</option>
                                                                <option>1 Year</option>
                                                            </select>
                                                        </div><!--end col-->
                                                        <div class=\"col-lg-3 col-6\">
                                                            <label class=\"form-label mt-2\" for=\"pro-campaign\">Campaign</label>
                                                            <select class=\"form-select\">
                                                                <option>-Select-</option>
                                                                <option>30 Day</option>
                                                                <option>3 Month</option>
                                                                <option>1 Year</option>
                                                            </select>
                                                        </div><!--end col-->
                                                        <div class=\"col-lg-3 col-6\">
                                                            <label class=\"form-label mt-2\" for=\"pro-area\">Area</label>
                                                            <select class=\"form-select\">
                                                                <option>-Select-</option>
                                                                <option>Energy</option>
                                                                <option>Telecommunications</option>
                                                                <option>Automobile</option>
                                                                <option>Real Estate</option>
                                                                <option>Services</option>
                                                            </select>
                                                        </div><!--end col-->                                                        
                                                    </div><!--end row-->
                                                </div><!--end form-group-->
                                                <div class=\"form-group\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-6 mb-2 mb-lg-0\">
                                                            <label class=\"form-label mt-2\" for=\"pro-account\">Lead Account</label>
                                                            <select class=\"form-select\">
                                                                <option>--Select--</option>
                                                                <option>Rui</option>
                                                            </select>
                                                        </div><!--end col-->
                                                        <div class=\"col-lg-3 col-6\">
                                                            <label class=\"form-label mt-2\" for=\"pro-status\">Status</label>
                                                            <select class=\"form-select\">
                                                                <option>-Select-</option>
                                                                <option>New</option>
                                                                <option>Assigned</option>
                                                                <option>Pending</option>
                                                                <option>Closed</option>
                                                                <option>Rejected</option>
                                                                <option>Duplicate</option>
                                                            </select>
                                                        </div><!--end col-->
                                                        <div class=\"col-lg-3 col-6\">
                                                            <label class=\"form-label mt-2\" for=\"pro-source\">Source</label>
                                                            <select class=\"form-select\">
                                                                <option>-Select-</option>
                                                                <option>Call</option>
                                                                <option>Email</option>
                                                                <option>Existing Customer</option>
                                                                <option>Partner</option>
                                                                <option>Website</option>                                                               
                                                            </select>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end form-group-->
                                                <div class=\"form-group mb-3\">
                                                    <label class=\"form-label mt-2\" for=\"pro-description\">Description</label>
                                                    <textarea class=\"form-control\" rows=\"5\" id=\"pro-description\"  placeholder=\"writing here..\"></textarea>
                                                </div><!--end form-group-->
                                                
                                                <button type=\"submit\" class=\"btn btn-de-primary btn-sm\">Create Lead</button>
                                                <button type=\"button\" class=\"btn btn-de-danger btn-sm\">Cancel</button>
                                            </form>  <!--end form-->
                                        </div><!--end col-->
                                        <div class=\"col-lg-5 ms-auto align-self-center\">
                                            <form>
                                                <div class=\"form-group\">
                                                    <label for=\"pro-avatar\">Project Avatar</label>
                                                    <img src=\"assets/images/small/project-3.jpg\" alt=\"\" class=\"thumb-lg rounded mx-3\">
                                                    <label class=\"btn btn-de-primary btn-sm text-light\">
                                                        Change Avatar <input type=\"file\" hidden>
                                                    </label>
                                                </div><!--end form-group-->
                                                <h5 class=\"fw-normal my-5\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</h5>
                                                <div class=\"form-group\">
                                                    <label  class=\"form-label\" for=\"team-leader\">Project team members</label>
                                                    <ul class=\"list-inline\">
                                                        <li class=\"list-inline-item\">
                                                            <img src=\"assets/images/users/user-10.jpg\" alt=\"user\" class=\"rounded-circle thumb-xs\">
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <img src=\"assets/images/users/user-9.jpg\" alt=\"user\" class=\"rounded-circle thumb-xs\">
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <img src=\"assets/images/users/user-8.jpg\" alt=\"user\" class=\"rounded-circle thumb-xs\">
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <img src=\"assets/images/users/user-5.jpg\" alt=\"user\" class=\"rounded-circle thumb-xs\">
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <img src=\"assets/images/users/user-4.jpg\" alt=\"user\" class=\"rounded-circle thumb-xs\">
                                                        </li>
                                                        <li class=\"list-inline-item\">
                                                            <a href=\"\" class=\"user-avatar\">
                                                                <span class=\"thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle fw-semibold\">+6</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <input id=\"add-member\" type=\"file\" name=\"files[]\" multiple style='display: none;'>
                                                </div><!--end form-group-->
                                            </form>
                                        </div><!--end col-->
                                    </div><!--end row-->                                                                              
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
                   
{% endblock %}", "leads/new.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\leads\\new.html.twig");
    }
}
