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

/* leads/list.html.twig */
class __TwigTemplate_3746ce30b41f70d21b353a1fa077bf6d43e351fe2a313ad560bffd1ed523b511 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leads/list.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "leads/list.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/accounts\">Leads</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Leads</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <p><input style=\"width: 300px;\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"Search...\" class=\"form-control\"></p><br>

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

  <table class=\"table table-hover\" style=\"text-align:center\">
            <thead class=\"table-secondary\">
                <tr>
                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "messages");
        echo "</th>
                <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        echo "</th>
                </tr>
            </thead>

            <tbody id=\"myTable\">
                <tr>

                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 57
            echo "
                        <td style=\"vertical-align: middle\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "name", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "name", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "account", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "createdby", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "amount", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>

                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                ";
            // line 66
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 66), "id", [], "any", true, true, false, 66)) {
                echo " 
                         ";
                // line 67
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "userRole", [], "any", false, false, false, 67), "role", [], "any", false, false, false, 67) == "SUPERADMIN")) {
                    echo " 
                        <a href=\"/leads/";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 68), "html", null, true);
                    echo "\">
                            <span class=\"btn btn-outline-info col-lg-3\" style=\"text-align: center\">Show</a></span>
                        <a href=\"/leads/edit/";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 70), "html", null, true);
                    echo "\">
                            <span class=\"btn btn-outline-success col-lg-3\" style=\"text-align: center\">Edit</a></span>
                        <a href=\"/leads/delete/";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 72), "html", null, true);
                    echo "\" onclick=\"return confirm('Are you sure you want to permanently remove this item?')\">
                                <span class=\"btn btn-outline-danger col-lg-3\" style=\"text-align: center\">Delete</a></span>
                        ";
                }
                // line 74
                echo " 

                         ";
                // line 76
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "userRole", [], "any", false, false, false, 76), "role", [], "any", false, false, false, 76) == "USER")) {
                    echo " 

                        <a href=\"/leads/";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 78), "html", null, true);
                    echo "\">
                            <span class=\"btn btn-outline-info col-lg-3  \" style=\"text-align: center;\">Show</a></span> 

                         ";
                }
                // line 81
                echo "  
                     ";
            }
            // line 82
            echo " 
                    </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
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
        return "leads/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 86,  206 => 82,  202 => 81,  195 => 78,  190 => 76,  186 => 74,  180 => 72,  175 => 70,  170 => 68,  166 => 67,  162 => 66,  155 => 62,  151 => 61,  147 => 60,  143 => 59,  139 => 58,  136 => 57,  132 => 56,  122 => 49,  118 => 48,  114 => 47,  110 => 46,  106 => 45,  102 => 44,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

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
                                        <li class=\"breadcrumb-item\"><a href=\"/accounts\">Leads</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Leads</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <p><input style=\"width: 300px;\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"Search...\" class=\"form-control\"></p><br>

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

  <table class=\"table table-hover\" style=\"text-align:center\">
            <thead class=\"table-secondary\">
                <tr>
                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">{% trans %}Name{% endtrans %}</th>
                <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">{% trans %}Status{% endtrans %}</th>
                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">{% trans %}Account{% endtrans %}</th>
                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">{% trans %}User{% endtrans %}</th>
                <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">{% trans %}Amount{% endtrans %}</th>
                <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">{% trans %}Actions{% endtrans %}</th>
                </tr>
            </thead>

            <tbody id=\"myTable\">
                <tr>

                {% for lead in leads %}

                        <td style=\"vertical-align: middle\">{{ lead.name }}</td>
                        <td style=\"vertical-align: middle\">{{ lead.name }}</td>
                        <td style=\"vertical-align: middle\">{{ lead.account }}</td>
                        <td style=\"vertical-align: middle\">{{ lead.createdby.name }}</td>
                        <td style=\"vertical-align: middle\">{{ lead.amount }}</td>

                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                {% if app.user.id is defined%} 
                         {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                        <a href=\"/leads/{{lead.id}}\">
                            <span class=\"btn btn-outline-info col-lg-3\" style=\"text-align: center\">Show</a></span>
                        <a href=\"/leads/edit/{{lead.id}}\">
                            <span class=\"btn btn-outline-success col-lg-3\" style=\"text-align: center\">Edit</a></span>
                        <a href=\"/leads/delete/{{lead.id}}\" onclick=\"return confirm('Are you sure you want to permanently remove this item?')\">
                                <span class=\"btn btn-outline-danger col-lg-3\" style=\"text-align: center\">Delete</a></span>
                        {% endif %} 

                         {% if app.user.userRole.role == \"USER\" %} 

                        <a href=\"/leads/{{lead.id}}\">
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

{% endblock %} ", "leads/list.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\leads\\list.html.twig");
    }
}
