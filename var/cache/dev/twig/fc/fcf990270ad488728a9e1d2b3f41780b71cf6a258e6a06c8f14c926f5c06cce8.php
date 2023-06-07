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

/* business/contacts.html.twig */
class __TwigTemplate_ebadf20209fcdb02ba85a0918af15a582977a6c07170ec006e0c10724a9570a5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "business/contacts.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "business/contacts.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/contacts\">Contacts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Contacts</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <form action=\"/business/contacts/create\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
        echo "...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Contacts", [], "messages");
        echo "</button>
                            <a href=\"/pdf/generator/contacts\" type=\"submit\" target=\"_blank\" style=\"float:right; width:10%; margin-right:5px\"class=\"btn btn-outline-danger\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export PDF", [], "messages");
        echo "</a>
                            <a href=\"/excel/generator/contacts\" type=\"submit\" target=\"_blank\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-success\">";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export Excel", [], "messages");
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
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 63
            echo "
                                                            <td style=\"vertical-align: middle\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                                            <td style=\"vertical-align: middle\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "surname", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                                            ";
            // line 67
            echo "                                                            <td style=\"vertical-align: middle\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "idaccount", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                                                            <td style=\"vertical-align: middle\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "idaccount", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                                                            <td style=\"vertical-align: middle\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "idaccount", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                                                            ";
            // line 75
            echo "                                                            <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                                        ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 77), "id", [], "any", true, true, false, 77)) {
                echo " 
                                                            ";
                // line 78
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "userRole", [], "any", false, false, false, 78), "role", [], "any", false, false, false, 78) == "SUPERADMIN")) {
                    echo " 
                                                                <a href=\"contacts/show/";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 79), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                                <a href=\"contacts/edit/";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 80), "html", null, true);
                    echo "\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                                <a href=\"contacts/delete/";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 81), "html", null, true);
                    echo "\"><i class=\"las la-trash-alt text-secondary font-16\" onclick=\"return confirm('are you sure?')\"></i></a>
                                                            ";
                }
                // line 82
                echo " 

                                                            ";
                // line 84
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "userRole", [], "any", false, false, false, 84), "role", [], "any", false, false, false, 84) == "USER")) {
                    echo " 
                                                                    <a href=\"contacts/show/";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 85), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
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
        return "business/contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 91,  204 => 87,  200 => 86,  195 => 85,  191 => 84,  187 => 82,  182 => 81,  178 => 80,  174 => 79,  170 => 78,  166 => 77,  162 => 75,  158 => 69,  154 => 68,  149 => 67,  143 => 65,  139 => 64,  136 => 63,  132 => 62,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/contacts\">Contacts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Contacts</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <form action=\"/business/contacts/create\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"{% trans %}Search{% endtrans %}...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">{% trans %}Create Contacts{% endtrans %}</button>
                            <a href=\"/pdf/generator/contacts\" type=\"submit\" target=\"_blank\" style=\"float:right; width:10%; margin-right:5px\"class=\"btn btn-outline-danger\">{% trans %}Export PDF{% endtrans %}</a>
                            <a href=\"/excel/generator/contacts\" type=\"submit\" target=\"_blank\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-success\">{% trans %}Export Excel{% endtrans %}</a>
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

                                                            <td style=\"vertical-align: middle\">{{ contact.id }}</td>
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

{% endblock %} ", "business/contacts.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\business\\contacts.html.twig");
    }
}
