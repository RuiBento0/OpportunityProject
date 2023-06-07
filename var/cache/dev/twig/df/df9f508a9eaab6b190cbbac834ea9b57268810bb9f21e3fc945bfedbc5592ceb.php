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

/* business/accounts.html.twig */
class __TwigTemplate_10d97a1d7cf438bbf1376d1d681a509e88b444644be8101b81abf89e9beeb53f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "business/accounts.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "business/accounts.html.twig", 1);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/accounts\">Accounts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Accounts</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <form action=\"/business/accounts/create\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
        echo "...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Accounts", [], "messages");
        echo "</button>
                            <a href=\"/pdf/generator/accounts\" type=\"submit\" target=\"_blank\" style=\"float:right; width:10%; margin-right:20px\"class=\"btn btn-outline-danger\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PDF", [], "messages");
        echo "</a>
                            <a href=\"/excel/generator/accounts\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-success\">";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export Excel", [], "messages");
        echo "</a>
                            <a href=\"/excel/upload/accounts\" type=\"submit\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-blue\">";
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
                                            <h4 class=\"card-title\">Accounts Details</h4>             
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
                                                    <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; cursor: pointer\" style=\"margin:auto\" scope=\"col\">Adresses</th>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 64
            echo "
                                                            <td style=\"vertical-align: middle\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                                            <td style=\"vertical-align: middle\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "name", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                                            <td style=\"vertical-align: middle\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "phones", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                                                            <td style=\"vertical-align: middle\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "emails", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                                                            <td style=\"vertical-align: middle\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "addresses", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                                                            <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                                        ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 72), "id", [], "any", true, true, false, 72)) {
                echo " 
                                                            ";
                // line 73
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "userRole", [], "any", false, false, false, 73), "role", [], "any", false, false, false, 73) == "SUPERADMIN")) {
                    echo " 
                                                                <a href=\"accounts/show/";
                    // line 74
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 74), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                                <a href=\"accounts/edit/";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 75), "html", null, true);
                    echo "\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                                <a href=\"accounts/delete/";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 76), "html", null, true);
                    echo "\"><i class=\"las la-trash-alt text-secondary font-16\" onclick=\"return confirm('are you sure?')\"></i></a>
                                                            ";
                }
                // line 77
                echo " 

                                                            ";
                // line 79
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "userRole", [], "any", false, false, false, 79), "role", [], "any", false, false, false, 79) == "USER")) {
                    echo " 
                                                                    <a href=\"accounts/show/";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 80), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
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
        return "business/accounts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 86,  203 => 82,  199 => 81,  194 => 80,  190 => 79,  186 => 77,  181 => 76,  177 => 75,  173 => 74,  169 => 73,  165 => 72,  159 => 69,  155 => 68,  151 => 67,  147 => 66,  143 => 65,  140 => 64,  136 => 63,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  65 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/accounts\">Accounts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Accounts</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->

                        <form action=\"/business/accounts/create\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"{% trans %}Search{% endtrans %}...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">{% trans %}Create Accounts{% endtrans %}</button>
                            <a href=\"/pdf/generator/accounts\" type=\"submit\" target=\"_blank\" style=\"float:right; width:10%; margin-right:20px\"class=\"btn btn-outline-danger\">{% trans %} PDF{% endtrans %}</a>
                            <a href=\"/excel/generator/accounts\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-success\">{% trans %}Export Excel{% endtrans %}</a>
                            <a href=\"/excel/upload/accounts\" type=\"submit\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-blue\">{% trans %}Import Excel{% endtrans %}</a>
                        </form>
                        </div>
                        <br>
                        <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">                      
                                            <h4 class=\"card-title\">Accounts Details</h4>             
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
                                                    <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; cursor: pointer\" style=\"margin:auto\" scope=\"col\">Adresses</th>
                                                    <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; cursor: pointer\" style=\"margin:auto\" scope=\"col\">Email</th>
                                                    <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; cursor: pointer\" style=\"margin:auto\" scope=\"col\">Phone</th>
                                                    <th style=\"margin:auto\" scope=\"col\">Actions</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody id=\"myTable\">
                                                    <tr>

                                                    {% for account in accounts %}

                                                            <td style=\"vertical-align: middle\">{{ account.id }}</td>
                                                            <td style=\"vertical-align: middle\">{{ account.name }}</td>
                                                            <td style=\"vertical-align: middle\">{{ account.phones }}</td>
                                                            <td style=\"vertical-align: middle\">{{ account.emails }}</td>
                                                            <td style=\"vertical-align: middle\">{{ account.addresses }}</td>
                                                            <td style=\"-webkit-user-select: none; vertical-align: middle\">

                                                        {% if app.user.id is defined%} 
                                                            {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                                                                <a href=\"accounts/show/{{ account.id }}\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>                                                       
                                                                <a href=\"accounts/edit/{{ account.id }}\"><i class=\"las la-pen text-secondary font-16\"></i></a>
                                                                <a href=\"accounts/delete/{{ account.id }}\"><i class=\"las la-trash-alt text-secondary font-16\" onclick=\"return confirm('are you sure?')\"></i></a>
                                                            {% endif %} 

                                                            {% if app.user.userRole.role == \"USER\" %} 
                                                                    <a href=\"accounts/show/{{ account.id }}\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
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

{% endblock %} ", "business/accounts.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\business\\accounts.html.twig");
    }
}
