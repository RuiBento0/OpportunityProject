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

/* opportunities/list.html.twig */
class __TwigTemplate_2e9dafc2578277c923c5a6f3debbb76f2247287e3d97fff22ef1975081a7ff14 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportunities/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "opportunities/list.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/accounts\">Opportunities</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Opportunities</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <p><input style=\"width: 300px;\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"Search...\" class=\"form-control\"></p><br>

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


  <table class=\"table table-hover\" style=\"text-align:center\">
            <thead class=\"table-secondary\">
                <tr>
                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Probability", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close Date", [], "messages");
        echo "</th>

                <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        echo "</th>
                </tr>
            </thead>

            <tbody id=\"myTable\">
                <tr>

                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["opportunity"]) {
            // line 59
            echo "
                        <td style=\"vertical-align: middle\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "amount", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "probability", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "description", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "closedate", [], "any", false, false, false, 64), "Y-m-d"), "html", null, true);
            echo "</td>

                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                 ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 68), "id", [], "any", true, true, false, 68)) {
                echo " 
                         ";
                // line 69
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "userRole", [], "any", false, false, false, 69), "role", [], "any", false, false, false, 69) == "SUPERADMIN")) {
                    echo " 
                        <a href=\"/opportunities/";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "id", [], "any", false, false, false, 70), "html", null, true);
                    echo "\">
                            <span class=\"btn btn-outline-info col-lg-3\" style=\"text-align: center\">Show</a></span>
                        <a href=\"/opportunities/edit/";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "id", [], "any", false, false, false, 72), "html", null, true);
                    echo "\">
                            <span class=\"btn btn-outline-success col-lg-3\" style=\"text-align: center\">Edit</a></span>
                        <a href=\"/opportunities/delete/";
                    // line 74
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "id", [], "any", false, false, false, 74), "html", null, true);
                    echo "\" onclick=\"return confirm('Are you sure you want to permanently remove this item?')\">
                                <span class=\"btn btn-outline-danger col-lg-3\" style=\"text-align: center\">Delete</a></span>
                        ";
                }
                // line 76
                echo " 

                         ";
                // line 78
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "userRole", [], "any", false, false, false, 78), "role", [], "any", false, false, false, 78) == "USER")) {
                    echo " 

                        <a href=\"/opportunities/";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "id", [], "any", false, false, false, 80), "html", null, true);
                    echo "\">
                            <span class=\"btn btn-outline-info col-lg-3  \" style=\"text-align: center;\">Show</a></span> 

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
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
        return "opportunities/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 88,  208 => 84,  204 => 83,  197 => 80,  192 => 78,  188 => 76,  182 => 74,  177 => 72,  172 => 70,  168 => 69,  164 => 68,  157 => 64,  153 => 63,  149 => 62,  145 => 61,  141 => 60,  138 => 59,  134 => 58,  124 => 51,  119 => 49,  115 => 48,  111 => 47,  107 => 46,  103 => 45,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/accounts\">Opportunities</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Opportunities</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <p><input style=\"width: 300px;\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"Search...\" class=\"form-control\"></p><br>

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


  <table class=\"table table-hover\" style=\"text-align:center\">
            <thead class=\"table-secondary\">
                <tr>
                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">{% trans %}Name{% endtrans %}</th>
                <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">{% trans %}Amount{% endtrans %}</th>
                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">{% trans %}Probability{% endtrans %}</th>
                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">{% trans %}Description{% endtrans %}</th>
                <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">{% trans %}Close Date{% endtrans %}</th>

                <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">{% trans %}Actions{% endtrans %}</th>
                </tr>
            </thead>

            <tbody id=\"myTable\">
                <tr>

                {% for opportunity in opportunities %}

                        <td style=\"vertical-align: middle\">{{ opportunity.name }}</td>
                        <td style=\"vertical-align: middle\">{{ opportunity.amount }}</td>
                        <td style=\"vertical-align: middle\">{{ opportunity.probability }}</td>
                        <td style=\"vertical-align: middle\">{{ opportunity.description }}</td>
                        <td style=\"vertical-align: middle\">{{ opportunity.closedate|date('Y-m-d') }}</td>

                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                 {% if app.user.id is defined%} 
                         {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                        <a href=\"/opportunities/{{opportunity.id}}\">
                            <span class=\"btn btn-outline-info col-lg-3\" style=\"text-align: center\">Show</a></span>
                        <a href=\"/opportunities/edit/{{opportunity.id}}\">
                            <span class=\"btn btn-outline-success col-lg-3\" style=\"text-align: center\">Edit</a></span>
                        <a href=\"/opportunities/delete/{{opportunity.id}}\" onclick=\"return confirm('Are you sure you want to permanently remove this item?')\">
                                <span class=\"btn btn-outline-danger col-lg-3\" style=\"text-align: center\">Delete</a></span>
                        {% endif %} 

                         {% if app.user.userRole.role == \"USER\" %} 

                        <a href=\"/opportunities/{{opportunity.id}}\">
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

{% endblock %} ", "opportunities/list.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\opportunities\\list.html.twig");
    }
}
