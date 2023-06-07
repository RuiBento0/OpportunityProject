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

/* business/opportunities.html.twig */
class __TwigTemplate_f832d7135cb16a123bd0067359b7df05f7d633db9d661ae67a030ae2986a4a65 extends Template
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
        // line 5
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "business/opportunities.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "business/opportunities.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"page-wrapper\">

            <!-- Page Content-->
            ";
        // line 13
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/opportunities\">Opportunities</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">List</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                         <form action=\"/business/opportunities/create\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
        echo "...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Opportunity", [], "messages");
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
                                            <h4 class=\"card-title\">Opportunities Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">                                    
                                    <div class=\"table-responsive\" style=\"\">


                                <table class=\"table mb-0\">
                                    <thead>
                                        <tr>
                                        <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</th>
                                        <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "messages");
        echo "</th>
                                        <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Probability", [], "messages");
        echo "</th>
                                        <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stages", [], "messages");
        echo "</th>
                                        <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close Date", [], "messages");
        echo "</th>

                                        <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        echo "</th>
                                        </tr>
                                    </thead>

                                <tbody id=\"myTable\">
                                            <tr>

                                            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["opportunity"]) {
            // line 69
            echo "
                                                <td style=\"vertical-align: middle\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                                                <td style=\"vertical-align: middle\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "amount", [], "any", false, false, false, 71), "html", null, true);
            echo " \$</td>
                                                <td style=\"vertical-align: middle\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "probability", [], "any", false, false, false, 72), "html", null, true);
            echo " %</td>
                                                <td style=\"vertical-align: middle\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunity"], "IdStage", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                                                <td style=\"vertical-align: middle\">";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "closedate", [], "any", false, false, false, 74), "Y-m-d"), "html", null, true);
            echo "</td>

                                                <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                            ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 78), "id", [], "any", true, true, false, 78)) {
                echo " 
                                                ";
                // line 79
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "userRole", [], "any", false, false, false, 79), "role", [], "any", false, false, false, 79) == "SUPERADMIN")) {
                    echo " 
                                                    <a href=\"/business/opportunities/show/";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "id", [], "any", false, false, false, 80), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                    <a href=\"/business/opportunities/edit/";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "id", [], "any", false, false, false, 81), "html", null, true);
                    echo "\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                    <a href=\"/business/opportunities/delete/";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "id", [], "any", false, false, false, 82), "html", null, true);
                    echo "\"><i class=\"las la-trash-alt text-secondary font-16\" onclick=\"return confirm('are you sure?')\"></i></a>
                                                ";
                }
                // line 83
                echo " 

                                                ";
                // line 85
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "userRole", [], "any", false, false, false, 85), "role", [], "any", false, false, false, 85) == "USER")) {
                    echo " 
                                                        <a href=\"/business/opportunities/show/";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "id", [], "any", false, false, false, 86), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
                                                ";
                }
                // line 87
                echo "  
                                            ";
            }
            // line 88
            echo " 
                                                </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
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
        return "business/opportunities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 92,  214 => 88,  210 => 87,  205 => 86,  201 => 85,  197 => 83,  192 => 82,  188 => 81,  184 => 80,  180 => 79,  176 => 78,  169 => 74,  165 => 73,  161 => 72,  157 => 71,  153 => 70,  150 => 69,  146 => 68,  136 => 61,  131 => 59,  127 => 58,  123 => 57,  119 => 56,  115 => 55,  91 => 34,  87 => 33,  65 => 13,  59 => 8,  52 => 7,  35 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("



{% extends \"base.html.twig\" %}

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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/opportunities\">Opportunities</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">List</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                         <form action=\"/business/opportunities/create\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"{% trans %}Search{% endtrans %}...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">{% trans %}Create Opportunity{% endtrans %}</button>
                        </form>
                        </div>
                        <br>
                        <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Opportunities Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">                                    
                                    <div class=\"table-responsive\" style=\"\">


                                <table class=\"table mb-0\">
                                    <thead>
                                        <tr>
                                        <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">{% trans %}Name{% endtrans %}</th>
                                        <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">{% trans %}Amount{% endtrans %}</th>
                                        <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">{% trans %}Probability{% endtrans %}</th>
                                        <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">{% trans %}Stages{% endtrans %}</th>
                                        <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">{% trans %}Close Date{% endtrans %}</th>

                                        <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">{% trans %}Actions{% endtrans %}</th>
                                        </tr>
                                    </thead>

                                <tbody id=\"myTable\">
                                            <tr>

                                            {% for opportunity in opportunities %}

                                                <td style=\"vertical-align: middle\">{{ opportunity.name }}</td>
                                                <td style=\"vertical-align: middle\">{{ opportunity.amount }} \$</td>
                                                <td style=\"vertical-align: middle\">{{ opportunity.probability }} %</td>
                                                <td style=\"vertical-align: middle\">{{ opportunity.IdStage.name }}</td>
                                                <td style=\"vertical-align: middle\">{{ opportunity.closedate|date('Y-m-d') }}</td>

                                                <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                            {% if app.user.id is defined%} 
                                                {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                                                    <a href=\"/business/opportunities/show/{{ opportunity.id }}\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                    <a href=\"/business/opportunities/edit/{{ opportunity.id }}\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                    <a href=\"/business/opportunities/delete/{{ opportunity.id }}\"><i class=\"las la-trash-alt text-secondary font-16\" onclick=\"return confirm('are you sure?')\"></i></a>
                                                {% endif %} 

                                                {% if app.user.userRole.role == \"USER\" %} 
                                                        <a href=\"/business/opportunities/show/{{ opportunity.id }}\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
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

{% endblock %} ", "business/opportunities.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\business\\opportunities.html.twig");
    }
}
