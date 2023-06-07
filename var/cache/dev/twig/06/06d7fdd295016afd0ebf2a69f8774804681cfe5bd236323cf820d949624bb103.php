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

/* /index.html.twig */
class __TwigTemplate_342f8b764eb6fafd832194882dde381f402949edfe57a65d0bcf60a4340ea543 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
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
                                        <li class=\"breadcrumb-item active\">Business</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Business</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row justify-content-center\">
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"card report-card\">
                                <div class=\"card-body\">
                                    <div class=\"row d-flex justify-content-center\">
                                        <div class=\"col\">
                                            <p class=\"text-dark mb-1 fw-semibold\">Accounts</p>
                                            <h4 class=\"my-1\">
                                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["accountscount"]);
        foreach ($context['_seq'] as $context["_key"] => $context["accountscount"]) {
            // line 37
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accountscount"], "counter", [], "any", false, false, false, 37), "html", null, true);
            echo "
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accountscount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                            </h4>
                                        </div>
                                        <div class=\"col-auto align-self-center\">
                                            <div class=\"bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle\">
                                                <i data-feather=\"layers\" class=\"align-self-center text-muted icon-sm\"></i>  
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"card report-card\">
                                <div class=\"card-body\">
                                    <div class=\"row d-flex justify-content-center\">                                                
                                        <div class=\"col\">
                                            <p class=\"text-dark mb-1 fw-semibold\">New Accounts</p>
                                            <h4 class=\"my-1\">
                                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["newcountaccounts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["newcountaccounts"]) {
            // line 58
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newcountaccounts"], "counter", [], "any", false, false, false, 58), "html", null, true);
            echo "
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newcountaccounts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                                            </h4>     
                                        </div>
                                        <div class=\"col-auto align-self-center\">
                                            <div class=\"bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle\">
                                                <i data-feather=\"check-square\" class=\"align-self-center text-muted icon-sm\"></i>  
                                            </div>
                                        </div> 
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                         
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"card report-card\">
                                <div class=\"card-body\">
                                    <div class=\"row d-flex justify-content-center\">
                                        <div class=\"col\">  
                                            <p class=\"text-dark mb-1 fw-semibold\">New Opportunities</p>  
                                            <h4 class=\"my-1\">
                                            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["newcountopportunities"]);
        foreach ($context['_seq'] as $context["_key"] => $context["newcountopportunities"]) {
            // line 79
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newcountopportunities"], "counter", [], "any", false, false, false, 79), "html", null, true);
            echo "
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newcountopportunities'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                            </h4>   
                                        </div>
                                        <div class=\"col-auto align-self-center\">
                                            <div class=\"bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle\">
                                                <i data-feather=\"dollar-sign\" class=\"align-self-center text-muted icon-sm\"></i>  
                                            </div>
                                        </div> 
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"card report-card\">
                                <div class=\"card-body\">
                                    <div class=\"row d-flex justify-content-center\">                                                
                                        <div class=\"col\">
                                            <p class=\"text-dark mb-1 fw-semibold\">New Leads</p>
                                            <h4 class=\"my-1\">
                                            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["newcountleads"]);
        foreach ($context['_seq'] as $context["_key"] => $context["newcountleads"]) {
            // line 100
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newcountleads"], "counter", [], "any", false, false, false, 100), "html", null, true);
            echo "
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newcountleads'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                            </h4>   
                                        </div>
                                        <div class=\"col-auto align-self-center\">
                                            <div class=\"bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle\">
                                                <i data-feather=\"dollar-sign\" class=\"align-self-center text-muted icon-sm\"></i>  
                                            </div>
                                        </div> 
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                               
                    </div><!--end row-->

                    <div class=\"row\">
                        
                        <div class=\"col-lg-4\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Calendar</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">
                                    <div class=\"dash-datepick\">
                                        <input type=\"hidden\" id=\"light_datepicker\"/>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    
                    <div class=\"col-md-6 col-lg-8\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Monthly Trends</h4>                   
                                        </div><!--end col-->                                      
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-xxl-6\">
                                            <div id=\"email_report\" class=\"apex-charts\"></div>
                                        </div><!--end col-->
                                        <div class=\"col-xxl-6 align-self-center\">
                                            <ul class=\"list-unstyled\">
                                                <li class=\"list-item mb-2\">
                                                    <i class=\"fas fa-play text-primary me-2\"></i>Leads
                                                </li>
                                                <li class=\"list-item mb-2\">
                                                    <i class=\"fas fa-play text-info me-2\"></i>Opportunities
                                                </li>
                                                <li class=\"list-item\">
                                                    <i class=\"fas fa-play me-2\" style=\"color: #fdb5c8;\"></i>Wins
                                                </li>
                                            </ul>
                                            <button type=\"button\" class=\"btn btn-sm btn-de-primary\">View Details <i class=\"mdi mdi-arrow-right\"></i></button>
                                        </div><!--end col-->
                                    </div> <!--end row--> 
                                    <div class=\"text-center mt-4\">
                                        <h6 class=\"bg-light-alt py-3 px-2 mb-0\">
                                            <i data-feather=\"calendar\" class=\"align-self-center icon-xs me-1\"></i>
                                            01 January to 31 Janaury 2021
                                        </h6>
                                    </div>  
                                </div><!--end card-body-->
                            </div><!--end  card-->                                                                                                          
                        </div><!--end col-->
                    </div>  <!--end row--> 

                 
                           
                    <div class=\"row\">
                        <div class=\"col-lg-8\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Users</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table mb-0\">
                                            <thead class=\"thead-light\">
                                                <tr>
                                                    <th onclick=\"sortTable(0)\" style=\"cursor: pointer\">";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users", [], "messages");
        echo "</th>
                                                    <th onclick=\"sortTable(1)\" style=\"cursor: pointer\">";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages");
        echo "</th>
                                                    <th onclick=\"sortTable(3)\" style=\"cursor: pointer\">";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role", [], "messages");
        echo "</th>
                                                    <th onclick=\"sortTable(4)\" style=\"cursor: pointer\">";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "messages");
        echo "</th>
                                                    <th>";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        echo "</th>
                                                </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                                <tr>
                                                    ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 201, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 202
            echo "                                                        <td><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("uploads/userimg/" . twig_get_attribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 202)) . "")), "html", null, true);
            echo "\" alt=\"profile-user\" class=\"rounded-circle me-2 thumb-sm\" />";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 202), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 203), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "userRole", [], "any", false, false, false, 204), "role", [], "any", false, false, false, 204), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 205
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "active", [], "any", false, false, false, 205) == 1)) {
                echo "Active";
            }
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "active", [], "any", false, false, false, 205) == 0)) {
                echo "Disable";
            }
            echo "</td>

                                                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                                    ";
            // line 209
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 209), "id", [], "any", true, true, false, 209)) {
                // line 210
                echo "                                                        <a href=\"options/user/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 210), "html", null, true);
                echo "\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                        <a href=\"options/user/delete/";
                // line 211
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 211), "html", null, true);
                echo "\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                    ";
            }
            // line 212
            echo " 
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "                                    
                                            </tbody>
                                        </table> 
                                        <div class=\"col-auto\" style=\"float:right\">
                                            <nav aria-label=\"...\">
                                                <ul class=\"pagination pagination-sm mb-0\">
                                                    <li class=\"page-item disabled\">
                                                        <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Previous</a>
                                                    </li>
                                                    <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\" href=\"#\">2 <span class=\"sr-only\">(current)</span></a>
                                                    </li>
                                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\" href=\"#\">Next</a>
                                                    </li>
                                                </ul><!--end pagination-->
                                            </nav><!--end nav-->       
                                        </div> <!--end col-->
                                    </div>  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                    <div class=\"col-lg-4\">
                            <div class=\"card\">   
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Activity</h4>                      
                                        </div><!--end col-->
                                        <div class=\"col-auto\"> 
                                            <div class=\"dropdown\">
                                                <a href=\"#\" class=\"btn btn-sm btn-outline-light dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                    All<i class=\"las la-angle-down ms-1\"></i>
                                                </a>
                                                <div class=\"dropdown-menu dropdown-menu-end\">
                                                    <a class=\"dropdown-item\" href=\"#\">Purchases</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Emails</a>
                                                </div>
                                            </div>          
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->  

                                <div class=\"card-body p-0\"> 
                                    <div class=\"p-3\" style=\"height: 425px;\" data-simplebar>
                                        <div class=\"activity\">
                                            <div class=\"activity-info\">
                                                <div class=\"icon-info-activity\">
                                                    <i class=\"las la-user-clock bg-soft-primary\"></i>
                                                </div>
                                                <div class=\"activity-info-text\">
                                                    <div class=\"d-flex justify-content-between align-items-center\">
                                                        <p class=\"text-muted mb-0 font-13 w-75\"><span>Donald</span> 
                                                            updated the status of <a href=\"\">Refund #1234</a> to awaiting customer response
                                                        </p>
                                                        <small class=\"text-muted\">10 Min ago</small>
                                                    </div>    
                                                </div>
                                            </div>   

                                            <div class=\"activity-info\">
                                                <div class=\"icon-info-activity\">
                                                    <i class=\"mdi mdi-timer-off bg-soft-primary\"></i>
                                                </div>
                                                <div class=\"activity-info-text\">
                                                    <div class=\"d-flex justify-content-between align-items-center\">
                                                        <p class=\"text-muted mb-0 font-13 w-75\"><span>Lucy Peterson</span> 
                                                            was added to the group, group name is <a href=\"\">Overtake</a>
                                                        </p>
                                                        <small class=\"text-muted\">50 Min ago</small>
                                                    </div>    
                                                </div>
                                            </div>   

                                            <div class=\"activity-info\">
                                                <div class=\"icon-info-activity\">
                                                    <img src=\"assets/images/users/user-5.jpg\" alt=\"\" class=\"rounded-circle thumb-sm\">
                                                </div>
                                                <div class=\"activity-info-text\">
                                                    <div class=\"d-flex justify-content-between align-items-center\">
                                                        <p class=\"text-muted mb-0 font-13 w-75\"><span>Joseph Rust</span> 
                                                            opened new showcase <a href=\"\">Mannat #112233</a> with theme market
                                                        </p>
                                                        <small class=\"text-muted\">10 hours ago</small>
                                                    </div>    
                                                </div>
                                            </div>   

                                            <div class=\"activity-info\">
                                                <div class=\"icon-info-activity\">
                                                    <i class=\"mdi mdi-clock-outline bg-soft-primary\"></i>
                                                </div>
                                                <div class=\"activity-info-text\">
                                                    <div class=\"d-flex justify-content-between align-items-center\">
                                                        <p class=\"text-muted mb-0 font-13 w-75\"><span>Donald</span> 
                                                            updated the status of <a href=\"\">Refund #1234</a> to awaiting customer response
                                                        </p>
                                                        <small class=\"text-muted\">Yesterday</small>
                                                    </div>    
                                                </div>
                                            </div>   
                                            <div class=\"activity-info\">
                                                <div class=\"icon-info-activity\">
                                                    <i class=\"mdi mdi-alert-outline bg-soft-primary\"></i>
                                                </div>
                                                <div class=\"activity-info-text\">
                                                    <div class=\"d-flex justify-content-between align-items-center\">
                                                        <p class=\"text-muted mb-0 font-13 w-75\"><span>Lucy Peterson</span> 
                                                            was added to the group, group name is <a href=\"\">Overtake</a>
                                                        </p>
                                                        <small class=\"text-muted\">14 Nov 2019</small>
                                                    </div>    
                                                </div>
                                            </div> 
                                            <div class=\"activity-info\">
                                                <div class=\"icon-info-activity\">
                                                    <img src=\"assets/images/users/user-4.jpg\" alt=\"\" class=\"rounded-circle thumb-sm\">
                                                </div>
                                                <div class=\"activity-info-text\">
                                                    <div class=\"d-flex justify-content-between align-items-center\">
                                                        <p class=\"text-muted mb-0 font-13 w-75\"><span>Joseph Rust</span> 
                                                            opened new showcase <a href=\"\">Mannat #112233</a> with theme market
                                                        </p>
                                                        <small class=\"text-muted\">15 Nov 2019</small>
                                                    </div>    
                                                </div>
                                            </div>                                                                                                                                      
                                        </div><!--end activity-->
                                    </div><!--end analytics-dash-activity-->
                                </div>  <!--end card-body-->                                     
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
                 
                <!--Start Footer-->
                <!-- Footer Start -->
                <br><br>
                 <footer class=\"footer text-center text-sm-start\">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Business <span class=\"text-muted d-none d-sm-inline-block float-end\">Crafted by Bento</span>
                </footer>
                <!-- end Footer -->                
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->   
        <script src=\"assets/plugins/lightpicker/litepicker.js\"></script>
        <script src=\"assets/plugins/apexcharts/apexcharts.min.js\"></script>
        <script src=\"assets/pages/projects-index.init.js\"></script>
        <!-- App js -->
        <script src=\"assets/js/app.js\"></script>

    </body>
    <!--end body-->
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 215,  363 => 212,  358 => 211,  353 => 210,  351 => 209,  339 => 205,  335 => 204,  331 => 203,  324 => 202,  320 => 201,  311 => 195,  307 => 194,  303 => 193,  299 => 192,  295 => 191,  204 => 102,  195 => 100,  191 => 99,  171 => 81,  162 => 79,  158 => 78,  138 => 60,  129 => 58,  125 => 57,  105 => 39,  96 => 37,  92 => 36,  59 => 5,  52 => 4,  35 => 1,);
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
                                        <li class=\"breadcrumb-item active\">Business</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Business</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row justify-content-center\">
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"card report-card\">
                                <div class=\"card-body\">
                                    <div class=\"row d-flex justify-content-center\">
                                        <div class=\"col\">
                                            <p class=\"text-dark mb-1 fw-semibold\">Accounts</p>
                                            <h4 class=\"my-1\">
                                            {% for accountscount in accountscount %}
                                            {{ accountscount.counter }}
                                            {% endfor %}
                                            </h4>
                                        </div>
                                        <div class=\"col-auto align-self-center\">
                                            <div class=\"bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle\">
                                                <i data-feather=\"layers\" class=\"align-self-center text-muted icon-sm\"></i>  
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"card report-card\">
                                <div class=\"card-body\">
                                    <div class=\"row d-flex justify-content-center\">                                                
                                        <div class=\"col\">
                                            <p class=\"text-dark mb-1 fw-semibold\">New Accounts</p>
                                            <h4 class=\"my-1\">
                                            {% for newcountaccounts in newcountaccounts %}
                                            {{ newcountaccounts.counter }}
                                            {% endfor %}
                                            </h4>     
                                        </div>
                                        <div class=\"col-auto align-self-center\">
                                            <div class=\"bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle\">
                                                <i data-feather=\"check-square\" class=\"align-self-center text-muted icon-sm\"></i>  
                                            </div>
                                        </div> 
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                         
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"card report-card\">
                                <div class=\"card-body\">
                                    <div class=\"row d-flex justify-content-center\">
                                        <div class=\"col\">  
                                            <p class=\"text-dark mb-1 fw-semibold\">New Opportunities</p>  
                                            <h4 class=\"my-1\">
                                            {% for newcountopportunities in newcountopportunities %}
                                            {{ newcountopportunities.counter }}
                                            {% endfor %}
                                            </h4>   
                                        </div>
                                        <div class=\"col-auto align-self-center\">
                                            <div class=\"bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle\">
                                                <i data-feather=\"dollar-sign\" class=\"align-self-center text-muted icon-sm\"></i>  
                                            </div>
                                        </div> 
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"card report-card\">
                                <div class=\"card-body\">
                                    <div class=\"row d-flex justify-content-center\">                                                
                                        <div class=\"col\">
                                            <p class=\"text-dark mb-1 fw-semibold\">New Leads</p>
                                            <h4 class=\"my-1\">
                                            {% for newcountleads in newcountleads %}
                                            {{ newcountleads.counter }}
                                            {% endfor %}
                                            </h4>   
                                        </div>
                                        <div class=\"col-auto align-self-center\">
                                            <div class=\"bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle\">
                                                <i data-feather=\"dollar-sign\" class=\"align-self-center text-muted icon-sm\"></i>  
                                            </div>
                                        </div> 
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                               
                    </div><!--end row-->

                    <div class=\"row\">
                        
                        <div class=\"col-lg-4\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Calendar</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">
                                    <div class=\"dash-datepick\">
                                        <input type=\"hidden\" id=\"light_datepicker\"/>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    
                    <div class=\"col-md-6 col-lg-8\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Monthly Trends</h4>                   
                                        </div><!--end col-->                                      
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-xxl-6\">
                                            <div id=\"email_report\" class=\"apex-charts\"></div>
                                        </div><!--end col-->
                                        <div class=\"col-xxl-6 align-self-center\">
                                            <ul class=\"list-unstyled\">
                                                <li class=\"list-item mb-2\">
                                                    <i class=\"fas fa-play text-primary me-2\"></i>Leads
                                                </li>
                                                <li class=\"list-item mb-2\">
                                                    <i class=\"fas fa-play text-info me-2\"></i>Opportunities
                                                </li>
                                                <li class=\"list-item\">
                                                    <i class=\"fas fa-play me-2\" style=\"color: #fdb5c8;\"></i>Wins
                                                </li>
                                            </ul>
                                            <button type=\"button\" class=\"btn btn-sm btn-de-primary\">View Details <i class=\"mdi mdi-arrow-right\"></i></button>
                                        </div><!--end col-->
                                    </div> <!--end row--> 
                                    <div class=\"text-center mt-4\">
                                        <h6 class=\"bg-light-alt py-3 px-2 mb-0\">
                                            <i data-feather=\"calendar\" class=\"align-self-center icon-xs me-1\"></i>
                                            01 January to 31 Janaury 2021
                                        </h6>
                                    </div>  
                                </div><!--end card-body-->
                            </div><!--end  card-->                                                                                                          
                        </div><!--end col-->
                    </div>  <!--end row--> 

                 
                           
                    <div class=\"row\">
                        <div class=\"col-lg-8\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Users</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table mb-0\">
                                            <thead class=\"thead-light\">
                                                <tr>
                                                    <th onclick=\"sortTable(0)\" style=\"cursor: pointer\">{% trans %}Users{% endtrans %}</th>
                                                    <th onclick=\"sortTable(1)\" style=\"cursor: pointer\">{% trans %}Email{% endtrans %}</th>
                                                    <th onclick=\"sortTable(3)\" style=\"cursor: pointer\">{% trans %}Role{% endtrans %}</th>
                                                    <th onclick=\"sortTable(4)\" style=\"cursor: pointer\">{% trans %}Status{% endtrans %}</th>
                                                    <th>{% trans %}Actions{% endtrans %}</th>
                                                </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                                <tr>
                                                    {% for user in users %}
                                                        <td><img src=\"{{ asset('uploads/userimg/' ~ user.photo ~ '') }}\" alt=\"profile-user\" class=\"rounded-circle me-2 thumb-sm\" />{{ user.name }}</td>
                                                        <td>{{ user.email }}</td>
                                                        <td>{{ user.userRole.role }}</td>
                                                        <td>{% if user.active == 1 %}Active{% endif %}{% if user.active == 0 %}Disable{% endif %}</td>

                                                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                                    {% if app.user.id is defined%}
                                                        <a href=\"options/user/edit/{{ user.id }}\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                        <a href=\"options/user/delete/{{ user.id }}\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                    {% endif %} 
                                                        </td>
                                                    </tr>
                                                {% endfor %}                                    
                                            </tbody>
                                        </table> 
                                        <div class=\"col-auto\" style=\"float:right\">
                                            <nav aria-label=\"...\">
                                                <ul class=\"pagination pagination-sm mb-0\">
                                                    <li class=\"page-item disabled\">
                                                        <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Previous</a>
                                                    </li>
                                                    <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\" href=\"#\">2 <span class=\"sr-only\">(current)</span></a>
                                                    </li>
                                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\" href=\"#\">Next</a>
                                                    </li>
                                                </ul><!--end pagination-->
                                            </nav><!--end nav-->       
                                        </div> <!--end col-->
                                    </div>  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                    <div class=\"col-lg-4\">
                            <div class=\"card\">   
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Activity</h4>                      
                                        </div><!--end col-->
                                        <div class=\"col-auto\"> 
                                            <div class=\"dropdown\">
                                                <a href=\"#\" class=\"btn btn-sm btn-outline-light dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                    All<i class=\"las la-angle-down ms-1\"></i>
                                                </a>
                                                <div class=\"dropdown-menu dropdown-menu-end\">
                                                    <a class=\"dropdown-item\" href=\"#\">Purchases</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Emails</a>
                                                </div>
                                            </div>          
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->  

                                <div class=\"card-body p-0\"> 
                                    <div class=\"p-3\" style=\"height: 425px;\" data-simplebar>
                                        <div class=\"activity\">
                                            <div class=\"activity-info\">
                                                <div class=\"icon-info-activity\">
                                                    <i class=\"las la-user-clock bg-soft-primary\"></i>
                                                </div>
                                                <div class=\"activity-info-text\">
                                                    <div class=\"d-flex justify-content-between align-items-center\">
                                                        <p class=\"text-muted mb-0 font-13 w-75\"><span>Donald</span> 
                                                            updated the status of <a href=\"\">Refund #1234</a> to awaiting customer response
                                                        </p>
                                                        <small class=\"text-muted\">10 Min ago</small>
                                                    </div>    
                                                </div>
                                            </div>   

                                            <div class=\"activity-info\">
                                                <div class=\"icon-info-activity\">
                                                    <i class=\"mdi mdi-timer-off bg-soft-primary\"></i>
                                                </div>
                                                <div class=\"activity-info-text\">
                                                    <div class=\"d-flex justify-content-between align-items-center\">
                                                        <p class=\"text-muted mb-0 font-13 w-75\"><span>Lucy Peterson</span> 
                                                            was added to the group, group name is <a href=\"\">Overtake</a>
                                                        </p>
                                                        <small class=\"text-muted\">50 Min ago</small>
                                                    </div>    
                                                </div>
                                            </div>   

                                            <div class=\"activity-info\">
                                                <div class=\"icon-info-activity\">
                                                    <img src=\"assets/images/users/user-5.jpg\" alt=\"\" class=\"rounded-circle thumb-sm\">
                                                </div>
                                                <div class=\"activity-info-text\">
                                                    <div class=\"d-flex justify-content-between align-items-center\">
                                                        <p class=\"text-muted mb-0 font-13 w-75\"><span>Joseph Rust</span> 
                                                            opened new showcase <a href=\"\">Mannat #112233</a> with theme market
                                                        </p>
                                                        <small class=\"text-muted\">10 hours ago</small>
                                                    </div>    
                                                </div>
                                            </div>   

                                            <div class=\"activity-info\">
                                                <div class=\"icon-info-activity\">
                                                    <i class=\"mdi mdi-clock-outline bg-soft-primary\"></i>
                                                </div>
                                                <div class=\"activity-info-text\">
                                                    <div class=\"d-flex justify-content-between align-items-center\">
                                                        <p class=\"text-muted mb-0 font-13 w-75\"><span>Donald</span> 
                                                            updated the status of <a href=\"\">Refund #1234</a> to awaiting customer response
                                                        </p>
                                                        <small class=\"text-muted\">Yesterday</small>
                                                    </div>    
                                                </div>
                                            </div>   
                                            <div class=\"activity-info\">
                                                <div class=\"icon-info-activity\">
                                                    <i class=\"mdi mdi-alert-outline bg-soft-primary\"></i>
                                                </div>
                                                <div class=\"activity-info-text\">
                                                    <div class=\"d-flex justify-content-between align-items-center\">
                                                        <p class=\"text-muted mb-0 font-13 w-75\"><span>Lucy Peterson</span> 
                                                            was added to the group, group name is <a href=\"\">Overtake</a>
                                                        </p>
                                                        <small class=\"text-muted\">14 Nov 2019</small>
                                                    </div>    
                                                </div>
                                            </div> 
                                            <div class=\"activity-info\">
                                                <div class=\"icon-info-activity\">
                                                    <img src=\"assets/images/users/user-4.jpg\" alt=\"\" class=\"rounded-circle thumb-sm\">
                                                </div>
                                                <div class=\"activity-info-text\">
                                                    <div class=\"d-flex justify-content-between align-items-center\">
                                                        <p class=\"text-muted mb-0 font-13 w-75\"><span>Joseph Rust</span> 
                                                            opened new showcase <a href=\"\">Mannat #112233</a> with theme market
                                                        </p>
                                                        <small class=\"text-muted\">15 Nov 2019</small>
                                                    </div>    
                                                </div>
                                            </div>                                                                                                                                      
                                        </div><!--end activity-->
                                    </div><!--end analytics-dash-activity-->
                                </div>  <!--end card-body-->                                     
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
                 
                <!--Start Footer-->
                <!-- Footer Start -->
                <br><br>
                 <footer class=\"footer text-center text-sm-start\">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Business <span class=\"text-muted d-none d-sm-inline-block float-end\">Crafted by Bento</span>
                </footer>
                <!-- end Footer -->                
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->   
        <script src=\"assets/plugins/lightpicker/litepicker.js\"></script>
        <script src=\"assets/plugins/apexcharts/apexcharts.min.js\"></script>
        <script src=\"assets/pages/projects-index.init.js\"></script>
        <!-- App js -->
        <script src=\"assets/js/app.js\"></script>

    </body>
    <!--end body-->
</html>

{% endblock %}", "/index.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\index.html.twig");
    }
}
