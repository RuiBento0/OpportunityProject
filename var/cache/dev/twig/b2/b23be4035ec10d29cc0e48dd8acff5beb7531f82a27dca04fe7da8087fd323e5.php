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
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">Business</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/contact\">Contacts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Contacts</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <form action=\"/options/contacts/create\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
        echo "...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Contacts", [], "messages");
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
                                            <h4 class=\"card-title\">Contacts Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">                                    
                                    <div class=\"table-responsive\" style=\"\">
                                        <table class=\"table mb-0\">
                                            <thead>
                                            <tr>
                                                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; cursor: pointer\" style=\"margin:auto\" scope=\"col\">Id</th>
                                                <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; cursor: pointer\" style=\"margin:auto\" scope=\"col\">Name</th>
                                                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; cursor: pointer\" style=\"margin:auto\" scope=\"col\">Account</th>
                                                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; cursor: pointer\" style=\"margin:auto\" scope=\"col\">Email</th>
                                                <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; cursor: pointer\" style=\"margin:auto\" scope=\"col\">Phone</th>
                                                <th style=\"margin:auto\" scope=\"col\">Actions</th>
                                            </tr><!--end tr-->
                                            </thead>
                                            <tbody id=\"myTable\">
                                                    <tr>

                                                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 61
            echo "
                                                            <td style=\"vertical-align: middle\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "idaccount", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                                            <td style=\"vertical-align: middle\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "surname", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                                            ";
            // line 65
            echo "                                                            <td style=\"vertical-align: middle\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "idaccount", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                                            <td style=\"vertical-align: middle\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "idaccount", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                                            <td style=\"vertical-align: middle\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "idaccount", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                                                            ";
            // line 73
            echo "                                                            <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                                        ";
            // line 75
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 75), "id", [], "any", true, true, false, 75)) {
                echo " 
                                                            ";
                // line 76
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "userRole", [], "any", false, false, false, 76), "role", [], "any", false, false, false, 76) == "SUPERADMIN")) {
                    echo " 
                                                                <a href=\"contacts/show/";
                    // line 77
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 77), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                                <a href=\"contacts/edit/";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 78), "html", null, true);
                    echo "\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                                <a href=\"contacts/delete/";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 79), "html", null, true);
                    echo "\"><i class=\"las la-trash-alt text-secondary font-16\" onclick=\"return confirm('are you sure?')\"></i></a>
                                                            ";
                }
                // line 80
                echo " 

                                                            ";
                // line 82
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "userRole", [], "any", false, false, false, 82), "role", [], "any", false, false, false, 82) == "USER")) {
                    echo " 
                                                                    <a href=\"contacts/show/";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 83), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
                                                            ";
                }
                // line 84
                echo "  
                                                        ";
            }
            // line 85
            echo " 
                                                        </td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                                                </tbody>
                                        </table>
                                                             
                                    </div>  
                                    <div class=\"row\">
                                        <form  class=\"col\">
                                           
                                        </form>
                                             
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
        return array (  205 => 89,  196 => 85,  192 => 84,  187 => 83,  183 => 82,  179 => 80,  174 => 79,  170 => 78,  166 => 77,  162 => 76,  158 => 75,  154 => 73,  150 => 67,  146 => 66,  141 => 65,  135 => 63,  131 => 62,  128 => 61,  124 => 60,  91 => 30,  87 => 29,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/contact\">Contacts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Contacts</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <form action=\"/options/contacts/create\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"{% trans %}Search{% endtrans %}...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">{% trans %}Create Contacts{% endtrans %}</button>
                        </form>
                        </div>
                        <br>
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
                                    <div class=\"table-responsive\" style=\"\">
                                        <table class=\"table mb-0\">
                                            <thead>
                                            <tr>
                                                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; cursor: pointer\" style=\"margin:auto\" scope=\"col\">Id</th>
                                                <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; cursor: pointer\" style=\"margin:auto\" scope=\"col\">Name</th>
                                                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; cursor: pointer\" style=\"margin:auto\" scope=\"col\">Account</th>
                                                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; cursor: pointer\" style=\"margin:auto\" scope=\"col\">Email</th>
                                                <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; cursor: pointer\" style=\"margin:auto\" scope=\"col\">Phone</th>
                                                <th style=\"margin:auto\" scope=\"col\">Actions</th>
                                            </tr><!--end tr-->
                                            </thead>
                                            <tbody id=\"myTable\">
                                                    <tr>

                                                    {% for contact in contacts %}

                                                            <td style=\"vertical-align: middle\">{{ contact.idaccount.id }}</td>
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
                                                                <a href=\"contacts/show/{{ contact.id }}\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                                <a href=\"contacts/edit/{{ contact.id }}\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                                <a href=\"contacts/delete/{{ contact.id }}\"><i class=\"las la-trash-alt text-secondary font-16\" onclick=\"return confirm('are you sure?')\"></i></a>
                                                            {% endif %} 

                                                            {% if app.user.userRole.role == \"USER\" %} 
                                                                    <a href=\"contacts/show/{{ contact.id }}\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
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
