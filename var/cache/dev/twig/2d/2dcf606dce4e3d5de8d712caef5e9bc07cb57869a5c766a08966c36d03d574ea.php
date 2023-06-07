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
class __TwigTemplate_2b87ce02f9bbd73111578932f9ffe195b6801d8f378e68c463affb82ba61ad0f extends Template
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
                            <a href=\"/pdf/generator/leads\" type=\"submit\" target=\"_blank\" style=\"float:right; width:10%; margin-right:20px\"class=\"btn btn-outline-danger\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PDF", [], "messages");
        echo "</a>
                            <a href=\"/excel/generator/leads\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-success\">";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export Excel", [], "messages");
        echo "</a>
                            <a href=\"/excel/upload/leads\" type=\"submit\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-blue\">";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import Excel", [], "messages");
        echo "</a>
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
                                        <table class=\"table mb-0\" id=\"pagination\">
                                            <thead>
                                            <tr>
                                            <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Id", [], "messages");
        echo "</th>
                                            <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</th>
                                            <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account", [], "messages");
        echo "</th>
                                            <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User", [], "messages");
        echo "</th>
                                            <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Area", [], "messages");
        echo "</th>
                                            <th onclick=\"sortTable(6)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "messages");
        echo "</th>
                                            <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        echo "</th>
                                            </tr>
                                            </thead>
                                            <tbody id=\"myTable\">
                                                    <tr>

                                                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 65
            echo "
                                                        <td style=\"vertical-align: middle\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                                        <td style=\"vertical-align: middle\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                                                        <td style=\"vertical-align: middle\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "account", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                                                        <td style=\"vertical-align: middle\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "iduser", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                                                        <td style=\"vertical-align: middle\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "idarea", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>                   
                                                        <td style=\"vertical-align: middle\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "idstatus", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                                                        
                                                        
                                
                                                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 77), "id", [], "any", true, true, false, 77)) {
                echo " 
                                        ";
                // line 78
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "userRole", [], "any", false, false, false, 78), "role", [], "any", false, false, false, 78) == "SUPERADMIN")) {
                    echo " 
                                            <a href=\"leads/show/";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 79), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                            <a href=\"leads/edit/";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 80), "html", null, true);
                    echo "\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                            <a href=\"leads/delete/";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 81), "html", null, true);
                    echo "\"><i class=\"las la-trash-alt text-secondary font-16\" onclick=\"return confirm('are you sure?')\"></i></a>
                                        ";
                }
                // line 82
                echo " 
                                        
                                        ";
                // line 84
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "userRole", [], "any", false, false, false, 84), "role", [], "any", false, false, false, 84) == "USER")) {
                    echo " 
                                                <a href=\"leads/show/";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 85), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
                                        ";
                }
                // line 86
                echo "  
                                ";
            }
            // line 87
            echo " 
                                    </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                             </tbody>
                            </table>
                                                             
                                    </div>  
                                    <div class=\"row\">
                                        <form  class=\"col\">
                                           
                                        </form>
                                             
                                                                   
                                    </div><!--end row-->                                     
                                </div><!--end card-body--> 
                            </div><!--end card-->   
                        </div> <!--end col-->                               
                    </div><!--end row-->
                    

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
        return array (  241 => 91,  232 => 87,  228 => 86,  223 => 85,  219 => 84,  215 => 82,  210 => 81,  206 => 80,  202 => 79,  198 => 78,  194 => 77,  185 => 71,  181 => 70,  177 => 69,  173 => 68,  169 => 67,  165 => 66,  162 => 65,  158 => 64,  149 => 58,  145 => 57,  141 => 56,  137 => 55,  133 => 54,  129 => 53,  125 => 52,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                            <a href=\"/pdf/generator/leads\" type=\"submit\" target=\"_blank\" style=\"float:right; width:10%; margin-right:20px\"class=\"btn btn-outline-danger\">{% trans %}PDF{% endtrans %}</a>
                            <a href=\"/excel/generator/leads\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-success\">{% trans %}Export Excel{% endtrans %}</a>
                            <a href=\"/excel/upload/leads\" type=\"submit\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-blue\">{% trans %}Import Excel{% endtrans %}</a>
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
                                        <table class=\"table mb-0\" id=\"pagination\">
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
                        </div> <!--end col-->                               
                    </div><!--end row-->
                    

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
