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

/* authentication/roles.html.twig */
class __TwigTemplate_5702a508f69074bc2756af3c0ee7bbfe757064baf47876182959bd04eb9fd3b8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authentication/roles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "authentication/roles.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/options\">Authentication</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Roles</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Authentication</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <div style=\"margin-top:0px; margin-bottom:20px;padding-left:10px; padding-right:25px\">
                        <form action=\"/authentication/role/create\">
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role", [], "messages");
        echo "</th>
                                                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "messages");
        echo "</th>
                                                <th style=\"width: 10%;cursor: default; -webkit-user-select: none;\" scope=\"col\">";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        echo "</th>
                                            </tr><!--end tr-->
                                            </thead>
                                            <tbody id=\"myTable\">
                                                    <tr>

                                                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 59
            echo "                            
                                                        <td style=\"vertical-align: middle\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                                        <td style=\"vertical-align: middle\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "role", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                                        <td style=\"vertical-align: middle\">";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, $context["role"], "active", [], "any", false, false, false, 62) == 1)) {
                echo "Active";
            }
            if ((twig_get_attribute($this->env, $this->source, $context["role"], "active", [], "any", false, false, false, 62) == 0)) {
                echo "Disable";
            }
            echo "</td>

                                                        <td style=\"-webkit-user-select: none; vertical-align: middle\">
  
                                                            ";
            // line 66
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 66), "id", [], "any", true, true, false, 66)) {
                // line 67
                echo "                                                                <a href=\"role/show/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 67), "html", null, true);
                echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
                                                                <a href=\"role/edit/";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 68), "html", null, true);
                echo "\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                                <a href=\"role/delete/";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 69), "html", null, true);
                echo "\"><i class=\"las la-trash-alt text-secondary font-16\" onclick=\"return confirm('are you sure?')\"></i></a>
                                                            ";
            }
            // line 71
            echo "                                                        </td>
                                                    </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                                </tbody>
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
        return "authentication/roles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 74,  177 => 71,  172 => 69,  168 => 68,  163 => 67,  161 => 66,  149 => 62,  145 => 61,  141 => 60,  138 => 59,  134 => 58,  125 => 52,  121 => 51,  117 => 50,  113 => 49,  92 => 31,  88 => 30,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/options\">Authentication</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Roles</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Authentication</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <div style=\"margin-top:0px; margin-bottom:20px;padding-left:10px; padding-right:25px\">
                        <form action=\"/authentication/role/create\">
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
                                <div class=\"card-body\">                                    
                                    <div class=\"table-responsive\" style=\"\">
                                        <table class=\"table mb-0\">
                                            <thead>
                                            <tr>
                                                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">{% trans %}Id{% endtrans %}</th>
                                                <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">{% trans %}Role{% endtrans %}</th>
                                                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; cursor: pointer\" scope=\"col\">{% trans %}Status{% endtrans %}</th>
                                                <th style=\"width: 10%;cursor: default; -webkit-user-select: none;\" scope=\"col\">{% trans %}Actions{% endtrans %}</th>
                                            </tr><!--end tr-->
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

{% endblock %} ", "authentication/roles.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\authentication\\roles.html.twig");
    }
}
