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
class __TwigTemplate_f62257be6a5519dc23b1357e4f5fcd80bff5fdc0b9270ef76af1caeb4cd2b62a extends Template
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
                        
                    
                    <div class=\"col-md-12 col-lg-8\">
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
                                        </div><!--end col-->
                                    </div> <!--end row--> 
                                </div><!--end card-body-->
                            </div><!--end  card-->                                                                                                          
                        </div><!--end col-->
                    </div>  <!--end row--> 

                 
                           
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
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
                                        <table class=\"table mb-0\" id=\"pagination\">
                                            <thead class=\"thead-light\">
                                                <tr>
                                                    <th onclick=\"sortTable(0)\" style=\"cursor: pointer\">";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users", [], "messages");
        echo "</th>
                                                    <th onclick=\"sortTable(1)\" style=\"cursor: pointer\">";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages");
        echo "</th>
                                                    <th onclick=\"sortTable(3)\" style=\"cursor: pointer\">";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role", [], "messages");
        echo "</th>
                                                    <th onclick=\"sortTable(4)\" style=\"cursor: pointer\">";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "messages");
        echo "</th>
                                                    <th>";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        echo "</th>
                                                </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                                <tr>
                                                    ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 178, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 179
            echo "                                                        <td><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("uploads/userimg/" . twig_get_attribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 179)) . "")), "html", null, true);
            echo "\" alt=\"profile-user\" class=\"rounded-circle me-2 thumb-sm\" />";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 179), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 180), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "userRole", [], "any", false, false, false, 181), "role", [], "any", false, false, false, 181), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 182
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "active", [], "any", false, false, false, 182) == 1)) {
                echo "Active";
            }
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "active", [], "any", false, false, false, 182) == 0)) {
                echo "Disable";
            }
            echo "</td>

                                                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                                    ";
            // line 186
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 186), "id", [], "any", true, true, false, 186)) {
                // line 187
                echo "                                                        <a href=\"options/user/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 187), "html", null, true);
                echo "\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                        <a href=\"options/user/delete/";
                // line 188
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 188), "html", null, true);
                echo "\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                    ";
            }
            // line 189
            echo " 
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                                    
                                            </tbody>
                                        </table> 
                                    </div>  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                </div><!-- container -->

               
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

        <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/js/litepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/js/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/js/projects-index.init.js"), "html", null, true);
        echo "\"></script>
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
        return array (  382 => 217,  378 => 216,  374 => 215,  349 => 192,  340 => 189,  335 => 188,  330 => 187,  328 => 186,  316 => 182,  312 => 181,  308 => 180,  301 => 179,  297 => 178,  288 => 172,  284 => 171,  280 => 170,  276 => 169,  272 => 168,  204 => 102,  195 => 100,  191 => 99,  171 => 81,  162 => 79,  158 => 78,  138 => 60,  129 => 58,  125 => 57,  105 => 39,  96 => 37,  92 => 36,  59 => 5,  52 => 4,  35 => 1,);
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
                        
                    
                    <div class=\"col-md-12 col-lg-8\">
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
                                        </div><!--end col-->
                                    </div> <!--end row--> 
                                </div><!--end card-body-->
                            </div><!--end  card-->                                                                                                          
                        </div><!--end col-->
                    </div>  <!--end row--> 

                 
                           
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
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
                                        <table class=\"table mb-0\" id=\"pagination\">
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
                                    </div>  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                </div><!-- container -->

               
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

        <script src=\"{{ asset('plugins/metric/dist/assets/js/litepicker.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/js/apexcharts.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/js/projects-index.init.js') }}\"></script>
    </body>
    <!--end body-->
</html>

{% endblock %}", "/index.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\index.html.twig");
    }
}
