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

/* index.html.twig */
class __TwigTemplate_0c2659842b022fbfea2c9fea1b59eb291a285fcd22467112258b199c0d3182d6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
                                            <p class=\"text-dark mb-1 fw-semibold\">";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accounts", [], "messages");
        echo "</p>
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
                                            <p class=\"text-dark mb-1 fw-semibold\">";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New Accounts", [], "messages");
        echo "</p>
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
                                            <p class=\"text-dark mb-1 fw-semibold\">";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New Opportunities", [], "messages");
        echo "</p>  
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
                                            <p class=\"text-dark mb-1 fw-semibold\">";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New Leads", [], "messages");
        echo "</p>
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
                                            <h4 class=\"card-title\">";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Monthly Trends", [], "messages");
        echo "</h4>                   
                                        </div><!--end col-->                                      
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                         <div class=\"row py-2\">
                                            
                                                
                                                    <div class=\"card-body\">
                                                        <canvas id=\"chDonut3\"></canvas>
                                                    </div>
                                                
                                            
                                        </div>
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
                                            <h4 class=\"card-title\">";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users", [], "messages");
        echo "</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table mb-0\" >
                                            <thead class=\"thead-light\">
                                                <tr>
                                                    <th onclick=\"sortTable(0)\" style=\"cursor: pointer\">";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users", [], "messages");
        echo "</th>
                                                    <th onclick=\"sortTable(1)\" style=\"cursor: pointer\">";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages");
        echo "</th>
                                                    <th onclick=\"sortTable(3)\" style=\"cursor: pointer\">";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role", [], "messages");
        echo "</th>
                                                    <th onclick=\"sortTable(4)\" style=\"cursor: pointer\">";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "messages");
        echo "</th>
                                                    <th>";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        echo "</th>
                                                </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                                <tr>
                                                    ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 171, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 172
            echo "                                                        <td><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("uploads/userimg/" . twig_get_attribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 172)) . "")), "html", null, true);
            echo "\" alt=\"profile-user\" class=\"rounded-circle me-2 thumb-sm\" />";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 172), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 173), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "userRole", [], "any", false, false, false, 174), "role", [], "any", false, false, false, 174), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 175
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "active", [], "any", false, false, false, 175) == 1)) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active", [], "messages");
            }
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "active", [], "any", false, false, false, 175) == 0)) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable", [], "messages");
            }
            echo "</td>

                                                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                                    ";
            // line 179
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 179), "id", [], "any", true, true, false, 179)) {
                // line 180
                echo "                                                        <a href=\"/authentication/users/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 180), "html", null, true);
                echo "\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                        <a href=\"/authentication/users/delete/";
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 181), "html", null, true);
                echo "\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                    ";
            }
            // line 182
            echo " 
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
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
        
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/chart.js"), "html", null, true);
        echo "\"></script>

    

    <script type=\"text/javascript\">
            
            var colors = ['#007bff','#fd3c97','#00FF00','#c3e6cb','#dc3545','#6c757d'];
            var donutOptions = {
            cutoutPercentage: 85, 
            legend: {position:'bottom', padding:5, labels: {pointStyle:'circle', usePointStyle:true}}
            };
            var chDonutData3 = {
                labels: ['";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leads", [], "messages");
        echo "', '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Opportunities", [], "messages");
        echo "', '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wins(Opportunities)", [], "messages");
        echo "'],
                datasets: [
                {
                    backgroundColor: colors.slice(0,2),
                    borderWidth: 0,
                    data: [";
        // line 218
        echo twig_escape_filter($this->env, (isset($context["countleads"]) || array_key_exists("countleads", $context) ? $context["countleads"] : (function () { throw new RuntimeError('Variable "countleads" does not exist.', 218, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["countopportunities"]) || array_key_exists("countopportunities", $context) ? $context["countopportunities"] : (function () { throw new RuntimeError('Variable "countopportunities" does not exist.', 218, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["countopportunitieswon"]) || array_key_exists("countopportunitieswon", $context) ? $context["countopportunitieswon"] : (function () { throw new RuntimeError('Variable "countopportunitieswon" does not exist.', 218, $this->source); })()), "html", null, true);
        echo "]
                }
                ]
            };

            var chDonut3 = document.getElementById(\"chDonut3\");
                if (chDonut3) {
                    new Chart(chDonut3, {
                        type: 'pie',
                        data: chDonutData3,
                        options: donutOptions
                    });
                }


           
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 218,  402 => 213,  387 => 201,  369 => 185,  360 => 182,  355 => 181,  350 => 180,  348 => 179,  336 => 175,  332 => 174,  328 => 173,  321 => 172,  317 => 171,  308 => 165,  304 => 164,  300 => 163,  296 => 162,  292 => 161,  280 => 152,  248 => 123,  225 => 102,  216 => 100,  212 => 99,  207 => 97,  189 => 81,  180 => 79,  176 => 78,  171 => 76,  153 => 60,  144 => 58,  140 => 57,  135 => 55,  117 => 39,  108 => 37,  104 => 36,  99 => 34,  68 => 5,  58 => 4,  35 => 1,);
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
                                            <p class=\"text-dark mb-1 fw-semibold\">{% trans %}Accounts{% endtrans %}</p>
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
                                            <p class=\"text-dark mb-1 fw-semibold\">{% trans %}New Accounts{% endtrans %}</p>
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
                                            <p class=\"text-dark mb-1 fw-semibold\">{% trans %}New Opportunities{% endtrans %}</p>  
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
                                            <p class=\"text-dark mb-1 fw-semibold\">{% trans %}New Leads{% endtrans %}</p>
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
                                            <h4 class=\"card-title\">{% trans %}Monthly Trends{% endtrans %}</h4>                   
                                        </div><!--end col-->                                      
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                         <div class=\"row py-2\">
                                            
                                                
                                                    <div class=\"card-body\">
                                                        <canvas id=\"chDonut3\"></canvas>
                                                    </div>
                                                
                                            
                                        </div>
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
                                            <h4 class=\"card-title\">{% trans %}Users{% endtrans %}</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table mb-0\" >
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
                                                        <td>{% if user.active == 1 %}{% trans %}Active{% endtrans %}{% endif %}{% if user.active == 0 %}{% trans %}Disable{% endtrans %}{% endif %}</td>

                                                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                                    {% if app.user.id is defined%}
                                                        <a href=\"/authentication/users/edit/{{ user.id }}\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                        <a href=\"/authentication/users/delete/{{ user.id }}\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
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
        
    <script src=\"{{ asset('js/chart.js') }}\"></script>

    

    <script type=\"text/javascript\">
            
            var colors = ['#007bff','#fd3c97','#00FF00','#c3e6cb','#dc3545','#6c757d'];
            var donutOptions = {
            cutoutPercentage: 85, 
            legend: {position:'bottom', padding:5, labels: {pointStyle:'circle', usePointStyle:true}}
            };
            var chDonutData3 = {
                labels: ['{% trans %} Leads {% endtrans %}', '{% trans %} Opportunities {% endtrans %}', '{% trans %} Wins(Opportunities) {% endtrans %}'],
                datasets: [
                {
                    backgroundColor: colors.slice(0,2),
                    borderWidth: 0,
                    data: [{{ countleads }}, {{ countopportunities }}, {{ countopportunitieswon }}]
                }
                ]
            };

            var chDonut3 = document.getElementById(\"chDonut3\");
                if (chDonut3) {
                    new Chart(chDonut3, {
                        type: 'pie',
                        data: chDonutData3,
                        options: donutOptions
                    });
                }


           
    </script>

{% endblock %}", "index.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\index.html.twig");
    }
}
