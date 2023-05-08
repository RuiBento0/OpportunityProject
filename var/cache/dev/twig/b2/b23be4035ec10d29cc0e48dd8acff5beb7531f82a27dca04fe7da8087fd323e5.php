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

/* contacts/list.html.twig */
class __TwigTemplate_9b611cbe45e074f7d0e65aa51f7dbeeababd340c83991df91c12d9a73690c544 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contacts/list.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">CRM Central</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/contact\">Contacts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Contacts</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <p><input style=\"width: 300px;\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"Search...\" class=\"form-control\"></p><br>

                        <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Contacts Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">                                    
                                    <div class=\"table-responsive\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Customer Name</th>
                                                <th>Email</th>
                                                <th>Phone No</th>  
                                                <th>Lead  Score</th>                                                  
                                                <th>Company</th>
                                                <th>Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td>Donald Gardner</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>68</td>
                                                <td>Starbucks coffee</td>
                                                <td>
                                                    <a href=\"#\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                    <a href=\"#\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                    <a href=\"#\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>Matt Rosales</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>112</td>
                                                <td>Mac Donald</td>
                                                <td>                                                       
                                                    <a href=\"#\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                    <a href=\"#\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                    <a href=\"#\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>Michael Hill</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>64</td>
                                                <td>Life Good</td>
                                                <td>                                                       
                                                    <a href=\"#\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                    <a href=\"#\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                    <a href=\"#\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>Nancy Flanary</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>124</td>
                                                <td>Flipcart</td>
                                                <td>                                                       
                                                    <a href=\"#\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                    <a href=\"#\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                    <a href=\"#\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>Dorothy Key</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>33</td>
                                                <td>Adidas</td>                                             
                                                <td>                                                       
                                                    <a href=\"#\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                    <a href=\"#\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                    <a href=\"#\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>Joseph Cross</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>84</td>
                                                <td>Reebok</td>
                                                <td>                                                       
                                                    <a href=\"#\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                    <a href=\"#\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                    <a href=\"#\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                                                                            
                                            </tbody>
                                        </table>                    
                                    </div>  
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <button class=\"btn btn-outline-light btn-sm px-4 \">+ Add New</button>
                                        </div><!--end col-->      
                                        <div class=\"col-auto\">
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
                                    </div><!--end row-->                                     
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                               
                    </div><!--end row-->

  <table class=\"table table-hover\" style=\"text-align:center\">
            <thead class=\"table-secondary\">
                <tr>
                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">Name</th>
                <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Account</th>
                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Email</th>
                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Phone</th>
                ";
        // line 169
        echo "                <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">Actions</th>
                </tr>
            </thead>

            <tbody id=\"myTable\">
                <tr>

                ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 177
            echo "
                        <td style=\"vertical-align: middle\">";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "name", [], "any", false, false, false, 178), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "surname", [], "any", false, false, false, 178), "html", null, true);
            echo "</td>
                        ";
            // line 180
            echo "                        <td style=\"vertical-align: middle\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "idaccount", [], "any", false, false, false, 180), "name", [], "any", false, false, false, 180), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "idaccount", [], "any", false, false, false, 181), "name", [], "any", false, false, false, 181), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "idaccount", [], "any", false, false, false, 182), "name", [], "any", false, false, false, 182), "html", null, true);
            echo "</td>
                        ";
            // line 188
            echo "                        <td style=\"-webkit-user-select: none; vertical-align: middle\">


                     ";
            // line 191
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 191), "id", [], "any", true, true, false, 191)) {
                echo " 
                         ";
                // line 192
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 192, $this->source); })()), "user", [], "any", false, false, false, 192), "userRole", [], "any", false, false, false, 192), "role", [], "any", false, false, false, 192) == "SUPERADMIN")) {
                    echo " 
                        <a href=\"/contacts/";
                    // line 193
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 193), "html", null, true);
                    echo "\">
                            <span class=\"btn btn-outline-info col-lg-3\" style=\"text-align: center\">Show</a></span>
                        <a href=\"/contacts/edit/";
                    // line 195
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 195), "html", null, true);
                    echo "\">
                            <span class=\"btn btn-outline-success col-lg-3\" style=\"text-align: center\">Edit</a></span>
                        <a href=\"/contacts/delete/";
                    // line 197
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 197), "html", null, true);
                    echo "\" onclick=\"return confirm('Are you sure you want to permanently remove this item?')\">
                                <span class=\"btn btn-outline-danger col-lg-3\" style=\"text-align: center\">Delete</a></span>
                        ";
                }
                // line 199
                echo " 

                         ";
                // line 201
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "user", [], "any", false, false, false, 201), "userRole", [], "any", false, false, false, 201), "role", [], "any", false, false, false, 201) == "USER")) {
                    echo " 

                        <a href=\"/contacts/";
                    // line 203
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 203), "html", null, true);
                    echo "\">
                            <span class=\"btn btn-outline-info col-lg-3  \" style=\"text-align: center;\">Show</a></span> 

                         ";
                }
                // line 206
                echo "  
                     ";
            }
            // line 207
            echo " 
                    </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "            </tbody>
    </table>

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
        return "contacts/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 211,  307 => 207,  303 => 206,  296 => 203,  291 => 201,  287 => 199,  281 => 197,  276 => 195,  271 => 193,  267 => 192,  263 => 191,  258 => 188,  254 => 182,  250 => 181,  245 => 180,  239 => 178,  236 => 177,  232 => 176,  223 => 169,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">CRM Central</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/contact\">Contacts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Contacts</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <p><input style=\"width: 300px;\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"Search...\" class=\"form-control\"></p><br>

                        <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Contacts Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">                                    
                                    <div class=\"table-responsive\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Customer Name</th>
                                                <th>Email</th>
                                                <th>Phone No</th>  
                                                <th>Lead  Score</th>                                                  
                                                <th>Company</th>
                                                <th>Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td>Donald Gardner</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>68</td>
                                                <td>Starbucks coffee</td>
                                                <td>
                                                    <a href=\"#\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                    <a href=\"#\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                    <a href=\"#\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>Matt Rosales</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>112</td>
                                                <td>Mac Donald</td>
                                                <td>                                                       
                                                    <a href=\"#\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                    <a href=\"#\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                    <a href=\"#\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>Michael Hill</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>64</td>
                                                <td>Life Good</td>
                                                <td>                                                       
                                                    <a href=\"#\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                    <a href=\"#\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                    <a href=\"#\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>Nancy Flanary</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>124</td>
                                                <td>Flipcart</td>
                                                <td>                                                       
                                                    <a href=\"#\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                    <a href=\"#\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                    <a href=\"#\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>Dorothy Key</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>33</td>
                                                <td>Adidas</td>                                             
                                                <td>                                                       
                                                    <a href=\"#\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                    <a href=\"#\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                    <a href=\"#\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>Joseph Cross</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>84</td>
                                                <td>Reebok</td>
                                                <td>                                                       
                                                    <a href=\"#\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                    <a href=\"#\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                    <a href=\"#\"><i class=\"las la-trash-alt text-secondary font-16\"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                                                                            
                                            </tbody>
                                        </table>                    
                                    </div>  
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <button class=\"btn btn-outline-light btn-sm px-4 \">+ Add New</button>
                                        </div><!--end col-->      
                                        <div class=\"col-auto\">
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
                                    </div><!--end row-->                                     
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                               
                    </div><!--end row-->

  <table class=\"table table-hover\" style=\"text-align:center\">
            <thead class=\"table-secondary\">
                <tr>
                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">Name</th>
                <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Account</th>
                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Email</th>
                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Phone</th>
                {# <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Created At</th>
                <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Created At</th>
                <th onclick=\"sortTable(5)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Created By</th>
                <th onclick=\"sortTable(6)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Updated By</th> #}
                <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">Actions</th>
                </tr>
            </thead>

            <tbody id=\"myTable\">
                <tr>

                {% for contact in contacts %}

                        <td style=\"vertical-align: middle\">{{ contact.name }} {{ contact.surname }}</td>
                        {# <td style=\"vertical-align: middle\">{{ contact.iduser.name }}</td> #}
                        <td style=\"vertical-align: middle\">{{ contact.idaccount.name }}</td>
                        <td style=\"vertical-align: middle\">{{ contact.idaccount.name }}</td>
                        <td style=\"vertical-align: middle\">{{ contact.idaccount.name }}</td>
                        {# <td style=\"vertical-align: middle\">{{ contact.createdat|date('Y-m-d H:i:s') }}</td>
                        <td style=\"vertical-align: middle\">{{ contact.createdat|date('Y-m-d H:i:s') }}</td>
                        <td style=\"vertical-align: middle\">{{ contact.createdby.name }}</td>
                        <td style=\"vertical-align: middle\">{{ contact.updatedby.name }}</td>
 #}
                        <td style=\"-webkit-user-select: none; vertical-align: middle\">


                     {% if app.user.id is defined%} 
                         {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                        <a href=\"/contacts/{{contact.id}}\">
                            <span class=\"btn btn-outline-info col-lg-3\" style=\"text-align: center\">Show</a></span>
                        <a href=\"/contacts/edit/{{contact.id}}\">
                            <span class=\"btn btn-outline-success col-lg-3\" style=\"text-align: center\">Edit</a></span>
                        <a href=\"/contacts/delete/{{contact.id}}\" onclick=\"return confirm('Are you sure you want to permanently remove this item?')\">
                                <span class=\"btn btn-outline-danger col-lg-3\" style=\"text-align: center\">Delete</a></span>
                        {% endif %} 

                         {% if app.user.userRole.role == \"USER\" %} 

                        <a href=\"/contacts/{{contact.id}}\">
                            <span class=\"btn btn-outline-info col-lg-3  \" style=\"text-align: center;\">Show</a></span> 

                         {% endif %}  
                     {% endif %} 
                    </td>
                    </tr>
                {% endfor %}
            </tbody>
    </table>

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

{% endblock %} ", "contacts/list.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\contacts\\list.html.twig");
    }
}
