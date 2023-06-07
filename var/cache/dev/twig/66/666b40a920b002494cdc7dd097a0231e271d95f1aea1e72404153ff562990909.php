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

/* business/leads.html.twig */
class __TwigTemplate_6ec44f504e331df5f7c2432d9e77fb4c87c812bca45083b78d33fcd067b79fea extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "business/leads.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "business/leads.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/leads\">Leads</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Leads</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <form action=\"/business/leads/create\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
        echo "...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Leads", [], "messages");
        echo "</button>
                        </form>
                        </div>
                        <br>
                        <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Leads Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">                                    
                                    <div class=\"table-responsive\" style=\"\">
                                        <table class=\"table mb-0\">
                                            <thead>
                                            <tr>
                                            <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Id", [], "messages");
        echo "</th>
                                            <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</th>
                                            <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account", [], "messages");
        echo "</th>
                                            <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User", [], "messages");
        echo "</th>
                                            <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Area", [], "messages");
        echo "</th>
                                            <th onclick=\"sortTable(6)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "messages");
        echo "</th>
                                            <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        echo "</th>
                                            </tr>
                                            </thead>
                                            <tbody id=\"myTable\">
                                                    <tr>

                                                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 62
            echo "
                                                        <td style=\"vertical-align: middle\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                                        <td style=\"vertical-align: middle\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                                        <td style=\"vertical-align: middle\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "account", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                                        <td style=\"vertical-align: middle\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "iduser", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                                        <td style=\"vertical-align: middle\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "idarea", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>                   
                                                        <td style=\"vertical-align: middle\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "idstatus", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                                                        
                                                        
                                
                                                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                ";
            // line 74
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 74), "id", [], "any", true, true, false, 74)) {
                echo " 
                                        ";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "userRole", [], "any", false, false, false, 75), "role", [], "any", false, false, false, 75) == "SUPERADMIN")) {
                    echo " 
                                            <a href=\"leads/show/";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 76), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                            <a href=\"leads/edit/";
                    // line 77
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 77), "html", null, true);
                    echo "\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                            <a href=\"leads/delete/";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 78), "html", null, true);
                    echo "\"><i class=\"las la-trash-alt text-secondary font-16\" onclick=\"return confirm('are you sure?')\"></i></a>
                                        ";
                }
                // line 79
                echo " 
                                        
                                        ";
                // line 81
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "userRole", [], "any", false, false, false, 81), "role", [], "any", false, false, false, 81) == "USER")) {
                    echo " 
                                                <a href=\"leads/show/";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 82), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
                                        ";
                }
                // line 83
                echo "  
                                ";
            }
            // line 84
            echo " 
                                    </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                             </tbody>
                            </table>
                                                             
                                    </div>  
                                    <div class=\"row\">
                                        <form  class=\"col\">
                                           
                                        </form>
                                             
                                                                   
                                    </div><!--end row-->                                     
                                </div><!--end card-body--> 
                            </div><!--end card--> 
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
                        </div> <!--end col-->                               
                    </div><!--end row-->
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
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "business/leads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 88,  220 => 84,  216 => 83,  211 => 82,  207 => 81,  203 => 79,  198 => 78,  194 => 77,  190 => 76,  186 => 75,  182 => 74,  173 => 68,  169 => 67,  165 => 66,  161 => 65,  157 => 64,  153 => 63,  150 => 62,  146 => 61,  137 => 55,  133 => 54,  129 => 53,  125 => 52,  121 => 51,  117 => 50,  113 => 49,  91 => 30,  87 => 29,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/leads\">Leads</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Leads</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <form action=\"/business/leads/create\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"{% trans %}Search{% endtrans %}...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">{% trans %}Create Leads{% endtrans %}</button>
                        </form>
                        </div>
                        <br>
                        <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Leads Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">                                    
                                    <div class=\"table-responsive\" style=\"\">
                                        <table class=\"table mb-0\">
                                            <thead>
                                            <tr>
                                            <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">{% trans %}Id{% endtrans %}</th>
                                            <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">{% trans %}Name{% endtrans %}</th>
                                            <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">{% trans %}Account{% endtrans %}</th>
                                            <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">{% trans %}User{% endtrans %}</th>
                                            <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">{% trans %}Area{% endtrans %}</th>
                                            <th onclick=\"sortTable(6)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">{% trans %}Status{% endtrans %}</th>
                                            <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">{% trans %}Actions{% endtrans %}</th>
                                            </tr>
                                            </thead>
                                            <tbody id=\"myTable\">
                                                    <tr>

                                                    {% for lead in leads %}

                                                        <td style=\"vertical-align: middle\">{{ lead.id }}</td>
                                                        <td style=\"vertical-align: middle\">{{ lead.name }}</td>
                                                        <td style=\"vertical-align: middle\">{{ lead.account }}</td>
                                                        <td style=\"vertical-align: middle\">{{ lead.iduser.name }}</td>
                                                        <td style=\"vertical-align: middle\">{{ lead.idarea.name }}</td>                   
                                                        <td style=\"vertical-align: middle\">{{ lead.idstatus.name }}</td>
                                                        
                                                        
                                
                                                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                {% if app.user.id is defined%} 
                                        {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                                            <a href=\"leads/show/{{ lead.id }}\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                            <a href=\"leads/edit/{{ lead.id }}\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                            <a href=\"leads/delete/{{ lead.id }}\"><i class=\"las la-trash-alt text-secondary font-16\" onclick=\"return confirm('are you sure?')\"></i></a>
                                        {% endif %} 
                                        
                                        {% if app.user.userRole.role == \"USER\" %} 
                                                <a href=\"leads/show/{{ lead.id }}\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
                                        {% endif %}  
                                {% endif %} 
                                    </td>
                                    </tr>
                                {% endfor %}
                             </tbody>
                            </table>
                                                             
                                    </div>  
                                    <div class=\"row\">
                                        <form  class=\"col\">
                                           
                                        </form>
                                             
                                                                   
                                    </div><!--end row-->                                     
                                </div><!--end card-body--> 
                            </div><!--end card--> 
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
                        </div> <!--end col-->                               
                    </div><!--end row-->
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
</script>

{% endblock %} 
", "business/leads.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\business\\leads.html.twig");
    }
}
