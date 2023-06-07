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

/* options/roles.html.twig */
class __TwigTemplate_707ddff95183957a9893a4f733f6c7382a3ede2847869ec2d72313f57416b1ca extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "options/roles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "options/roles.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/options\">Options</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Roles</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Roles</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <div style=\"margin-top:0px; margin-bottom:20px;padding-left:10px; padding-right:25px\">
                        <form action=\"/options/roles/create\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
        echo "...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Role", [], "messages");
        echo "</button>
                        </form>
                        </div>
                        
                        <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Roles Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                <br>
                    <div class=\"row\" style=\"width: 90%; margin: auto;\">
                        
                                <div class=\"card-body\">    
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\" style=\"text-align:center\">
                        <thead class=\"table-secondary\">
                            <tr>
                            <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Id", [], "messages");
        echo "</th>
                            <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role", [], "messages");
        echo "</th>
                            <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "messages");
        echo "</th>
                            <th style=\"width: 10%;cursor: default; -webkit-user-select: none;\" scope=\"col\">";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        echo "</th>
                            </tr>
                        </thead>

                        <tbody id=\"myTable\">
                            <tr>
                            
                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 64
            echo "                            
                                    <td style=\"vertical-align: middle\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                    <td style=\"vertical-align: middle\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "role", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                    <td style=\"vertical-align: middle\">";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, $context["role"], "active", [], "any", false, false, false, 67) == 1)) {
                echo "Active";
            }
            if ((twig_get_attribute($this->env, $this->source, $context["role"], "active", [], "any", false, false, false, 67) == 0)) {
                echo "Disable";
            }
            echo "</td>

                                    <td style=\"-webkit-user-select: none; vertical-align: middle\">
  
                                    ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 71), "id", [], "any", true, true, false, 71)) {
                // line 72
                echo "                                    <a href=\"role/show/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 72), "html", null, true);
                echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
                                    <a href=\"role/edit/";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 73), "html", null, true);
                echo "\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                    <a href=\"role/delete/";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 74), "html", null, true);
                echo "\"><i class=\"las la-trash-alt text-secondary font-16\" onclick=\"return confirm('are you sure?')\"></i></a>
                                    ";
            }
            // line 76
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
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
        return "options/roles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 79,  182 => 76,  177 => 74,  173 => 73,  168 => 72,  166 => 71,  154 => 67,  150 => 66,  146 => 65,  143 => 64,  139 => 63,  129 => 56,  125 => 55,  121 => 54,  117 => 53,  92 => 31,  88 => 30,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 

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
                                        <li class=\"breadcrumb-item\"><a href=\"/options\">Options</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Roles</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Roles</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <div style=\"margin-top:0px; margin-bottom:20px;padding-left:10px; padding-right:25px\">
                        <form action=\"/options/roles/create\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"{% trans %}Search{% endtrans %}...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">{% trans %}Create Role{% endtrans %}</button>
                        </form>
                        </div>
                        
                        <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Roles Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                <br>
                    <div class=\"row\" style=\"width: 90%; margin: auto;\">
                        
                                <div class=\"card-body\">    
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\" style=\"text-align:center\">
                        <thead class=\"table-secondary\">
                            <tr>
                            <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">{% trans %}Id{% endtrans %}</th>
                            <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">{% trans %}Role{% endtrans %}</th>
                            <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">{% trans %}Status{% endtrans %}</th>
                            <th style=\"width: 10%;cursor: default; -webkit-user-select: none;\" scope=\"col\">{% trans %}Actions{% endtrans %}</th>
                            </tr>
                        </thead>

                        <tbody id=\"myTable\">
                            <tr>
                            
                            {% for role in roles %}
                            
                                    <td style=\"vertical-align: middle\">{{ role.id }}</td>
                                    <td style=\"vertical-align: middle\">{{ role.role }}</td>
                                    <td style=\"vertical-align: middle\">{% if role.active == 1 %}Active{% endif %}{% if role.active == 0 %}Disable{% endif %}</td>

                                    <td style=\"-webkit-user-select: none; vertical-align: middle\">
  
                                    {% if app.user.id is defined%}
                                    <a href=\"role/show/{{ role.id }}\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
                                    <a href=\"role/edit/{{ role.id }}\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                    <a href=\"role/delete/{{ role.id }}\"><i class=\"las la-trash-alt text-secondary font-16\" onclick=\"return confirm('are you sure?')\"></i></a>
                                    {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
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

{% endblock %} ", "options/roles.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\options\\roles.html.twig");
    }
}
