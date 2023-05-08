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

/* accounts/list.html.twig */
class __TwigTemplate_309294f02e0b28308f39304341c91c58989766f97286b3529fc575e7b4ba6705 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accounts/list.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "accounts/list.html.twig", 1);
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
        echo "<div class=\"page-wrapper\">

            <!-- Page Content-->
            ";
        // line 8
        echo "
                <div class=\"container-fluid\">
                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"page-title-box\">
                                <div class=\"float-end\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">CRM Central</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/accounts\">Accounts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Accounts</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                        
                        <p><input style=\"width: 300px;\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"Search...\" class=\"form-control\"></p><br>

                        <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Accounts Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                        <div class=\"row\">
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
                                            <h4 class=\"mt-0 mb-0 font-16\">Dorothy Key 
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">New York USA</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                                                     
                                    <div>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Show</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Edit</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Delete</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
                                            <h4 class=\"mt-0 mb-0 font-16\">Donald Gardner 
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">Dealer, Washington</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                                                      
                                    <div>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Show</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Edit</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Delete</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
                                            <h4 class=\"mt-0 mb-0 font-16\">Joseph Cross 
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">Tokyo Japan</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                                                       
                                    <div>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Show</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Edit</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Delete</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class=\"row\">
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
                                            <h4 class=\"mt-0 mb-0 font-16\">Nancy Flanary
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">Sydeny Australia</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                                                      
                                    <div>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Send SMS</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Send Email</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
                                            <h4 class=\"mt-0 mb-0 font-16\">Sherron Nelson 
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">Berlin, Germany</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                                                     
                                    <div>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Send SMS</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Send Email</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
                                            <h4 class=\"mt-0 mb-0 font-16\">Richard Curtis 
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">Dealer, Washington</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                                                      
                                    <div>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Send SMS</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Send Email</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                    </div><!--end row-->

  <table class=\"table table-hover\" style=\"text-align:center\">
            <thead class=\"table-secondary\">
                <tr>
                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created By", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        echo "</th>
                <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        echo "</th>
                </tr>
            </thead>

            <tbody id=\"myTable\">
                <tr>

                ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 192, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 193
            echo "
                        <td style=\"vertical-align: middle\">";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "name", [], "any", false, false, false, 194), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["account"], "createdby", [], "any", false, false, false, 195), "name", [], "any", false, false, false, 195), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 196
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "createdat", [], "any", false, false, false, 196), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>

                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                 ";
            // line 200
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 200), "id", [], "any", true, true, false, 200)) {
                echo " 
                         ";
                // line 201
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "user", [], "any", false, false, false, 201), "userRole", [], "any", false, false, false, 201), "role", [], "any", false, false, false, 201) == "SUPERADMIN")) {
                    echo " 
                        <a href=\"/account/";
                    // line 202
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 202), "html", null, true);
                    echo "\">
                            <span class=\"btn btn-outline-info col-lg-3\" style=\"text-align: center\">Show</a></span>
                        <a href=\"/account/edit/";
                    // line 204
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 204), "html", null, true);
                    echo "\">
                            <span class=\"btn btn-outline-success col-lg-3\" style=\"text-align: center\">Edit</a></span>
                        <a href=\"/account/delete/";
                    // line 206
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 206), "html", null, true);
                    echo "\" onclick=\"return confirm('Are you sure you want to permanently remove this item?')\">
                                <span class=\"btn btn-outline-danger col-lg-3\" style=\"text-align: center\">Delete</a></span>
                        ";
                }
                // line 208
                echo " 

                         ";
                // line 210
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "user", [], "any", false, false, false, 210), "userRole", [], "any", false, false, false, 210), "role", [], "any", false, false, false, 210) == "USER")) {
                    echo " 

                        <a href=\"/account/";
                    // line 212
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 212, $this->source); })()), "id", [], "any", false, false, false, 212), "html", null, true);
                    echo "\">
                            <span class=\"btn btn-outline-info col-lg-3  \" style=\"text-align: center;\">Show</a></span> 

                         ";
                }
                // line 215
                echo "  
                     ";
            }
            // line 216
            echo " 
                    </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "            </tbody>
    </table>
<br><br>
     <footer class=\"footer text-center text-sm-start\">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> CRM Central <span class=\"text-muted d-none d-sm-inline-block float-end\">Crafted by Bento</span>
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
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "accounts/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 220,  328 => 216,  324 => 215,  317 => 212,  312 => 210,  308 => 208,  302 => 206,  297 => 204,  292 => 202,  288 => 201,  284 => 200,  277 => 196,  273 => 195,  269 => 194,  266 => 193,  262 => 192,  252 => 185,  248 => 184,  244 => 183,  240 => 182,  64 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './base.html.twig' %} 

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
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">CRM Central</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/accounts\">Accounts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Accounts</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                        
                        <p><input style=\"width: 300px;\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"Search...\" class=\"form-control\"></p><br>

                        <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Accounts Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                        <div class=\"row\">
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
                                            <h4 class=\"mt-0 mb-0 font-16\">Dorothy Key 
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">New York USA</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                                                     
                                    <div>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Show</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Edit</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Delete</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
                                            <h4 class=\"mt-0 mb-0 font-16\">Donald Gardner 
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">Dealer, Washington</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                                                      
                                    <div>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Show</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Edit</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Delete</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
                                            <h4 class=\"mt-0 mb-0 font-16\">Joseph Cross 
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">Tokyo Japan</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                                                       
                                    <div>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Show</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Edit</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Delete</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class=\"row\">
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
                                            <h4 class=\"mt-0 mb-0 font-16\">Nancy Flanary
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">Sydeny Australia</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                                                      
                                    <div>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Send SMS</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Send Email</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
                                            <h4 class=\"mt-0 mb-0 font-16\">Sherron Nelson 
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">Berlin, Germany</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                                                     
                                    <div>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Send SMS</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Send Email</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
                                            <h4 class=\"mt-0 mb-0 font-16\">Richard Curtis 
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">Dealer, Washington</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                                                      
                                    <div>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Send SMS</button>
                                        <button type=\"button\" class=\"btn btn-sm btn-de-primary\">Send Email</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                    </div><!--end row-->

  <table class=\"table table-hover\" style=\"text-align:center\">
            <thead class=\"table-secondary\">
                <tr>
                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">{% trans %}Name{% endtrans %}</th>
                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">{% trans %}Created By{% endtrans %}</th>
                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">{% trans %}Created At{% endtrans %}</th>
                <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">{% trans %}Actions{% endtrans %}</th>
                </tr>
            </thead>

            <tbody id=\"myTable\">
                <tr>

                {% for account in accounts %}

                        <td style=\"vertical-align: middle\">{{ account.name }}</td>
                        <td style=\"vertical-align: middle\">{{ account.createdby.name }}</td>
                        <td style=\"vertical-align: middle\">{{ account.createdat|date('Y-m-d H:i:s') }}</td>

                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                 {% if app.user.id is defined%} 
                         {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                        <a href=\"/account/{{account.id}}\">
                            <span class=\"btn btn-outline-info col-lg-3\" style=\"text-align: center\">Show</a></span>
                        <a href=\"/account/edit/{{account.id}}\">
                            <span class=\"btn btn-outline-success col-lg-3\" style=\"text-align: center\">Edit</a></span>
                        <a href=\"/account/delete/{{account.id}}\" onclick=\"return confirm('Are you sure you want to permanently remove this item?')\">
                                <span class=\"btn btn-outline-danger col-lg-3\" style=\"text-align: center\">Delete</a></span>
                        {% endif %} 

                         {% if app.user.userRole.role == \"USER\" %} 

                        <a href=\"/account/{{contact.id}}\">
                            <span class=\"btn btn-outline-info col-lg-3  \" style=\"text-align: center;\">Show</a></span> 

                         {% endif %}  
                     {% endif %} 
                    </td>
                    </tr>
                {% endfor %}
            </tbody>
    </table>
<br><br>
     <footer class=\"footer text-center text-sm-start\">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> CRM Central <span class=\"text-muted d-none d-sm-inline-block float-end\">Crafted by Bento</span>
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
</script>

{% endblock %} ", "accounts/list.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\accounts\\list.html.twig");
    }
}
