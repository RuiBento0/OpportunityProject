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
class __TwigTemplate_4789d10e6a96fb97e9b23922e102e59de773135c6abdeacb57fdbe3ce0a84e04 extends Template
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
                            <a href=\"/pdf/generator/contacts\" type=\"submit\" target=\"_blank\" style=\"float:right; width:10%; margin-right:20px\"class=\"btn btn-outline-danger\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PDF", [], "messages");
        echo "</a>
                            <a href=\"/excel/generator/contacts\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-success\">";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export Excel", [], "messages");
        echo "</a>
                            <a href=\"/excel/upload/contacts\" type=\"submit\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-blue\">";
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
                                            <h4 class=\"card-title\">Contacts Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class=\"card-body\">                                    
                                    <div class=\"table-responsive\" style=\"\">
                                        <table class=\"table mb-0\" id=\"pagination\">
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
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 64
            echo "
                                                            <td style=\"vertical-align: middle\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                                            <td style=\"vertical-align: middle\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "name", [], "any", false, false, false, 66), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "surname", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                                            ";
            // line 68
            echo "                                                            <td style=\"vertical-align: middle\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "accname", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                                                            <td style=\"vertical-align: middle\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "phones", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                                                            <td style=\"vertical-align: middle\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "emails", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                                                            <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                                        ";
            // line 73
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 73), "id", [], "any", true, true, false, 73)) {
                echo " 
                                                            ";
                // line 74
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "userRole", [], "any", false, false, false, 74), "role", [], "any", false, false, false, 74) == "SUPERADMIN")) {
                    echo " 
                                                                <a href=\"contacts/show/";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 75), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                                <a href=\"contacts/edit/";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 76), "html", null, true);
                    echo "\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                                <a href=\"contacts/delete/";
                    // line 77
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 77), "html", null, true);
                    echo "\"><i class=\"las la-trash-alt text-secondary font-16\" onclick=\"return confirm('are you sure?')\"></i></a>
                                                            ";
                }
                // line 78
                echo " 

                                                            ";
                // line 80
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "userRole", [], "any", false, false, false, 80), "role", [], "any", false, false, false, 80) == "USER")) {
                    echo " 
                                                                    <a href=\"contacts/show/";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 81), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
                                                            ";
                }
                // line 82
                echo "  
                                                        ";
            }
            // line 83
            echo " 
                                                        </td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                                                </tbody>
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
        return array (  215 => 87,  206 => 83,  202 => 82,  197 => 81,  193 => 80,  189 => 78,  184 => 77,  180 => 76,  176 => 75,  172 => 74,  168 => 73,  162 => 70,  158 => 69,  153 => 68,  147 => 66,  143 => 65,  140 => 64,  136 => 63,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                            <a href=\"/pdf/generator/contacts\" type=\"submit\" target=\"_blank\" style=\"float:right; width:10%; margin-right:20px\"class=\"btn btn-outline-danger\">{% trans %} PDF{% endtrans %}</a>
                            <a href=\"/excel/generator/contacts\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-success\">{% trans %}Export Excel{% endtrans %}</a>
                            <a href=\"/excel/upload/contacts\" type=\"submit\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-blue\">{% trans %}Import Excel{% endtrans %}</a>
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
                                        <table class=\"table mb-0\" id=\"pagination\">
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
                                                            <td style=\"vertical-align: middle\">{{ contact.accname }}</td>
                                                            <td style=\"vertical-align: middle\">{{ contact.phones }}</td>
                                                            <td style=\"vertical-align: middle\">{{ contact.emails }}</td>
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
