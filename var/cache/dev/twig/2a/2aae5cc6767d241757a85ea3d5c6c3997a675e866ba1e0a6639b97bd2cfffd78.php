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

/* accounts/list.html.twig */
class __TwigTemplate_309294f02e0b28308f39304341c91c58989766f97286b3529fc575e7b4ba6705 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accounts/list.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "accounts/list.html.twig", 1);
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
        echo "<div class=\"page-wrapper\">

            <!-- Page Content-->
            ";
        // line 8
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
                                        <li class=\"breadcrumb-item\"><a href=\"/accounts\">Accounts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Accounts</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                        
                        <form action=\"/options/contacts/create\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
        echo "...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Accounts", [], "messages");
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
                                            <h4 class=\"card-title\">Accounts Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->







                        <div class=\"row\">
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            echo " 
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
       
                                            <h4 class=\"mt-0 mb-0 font-16\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "name", [], "any", false, false, false, 58), "html", null, true);
            echo "
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Address</b> : ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</li>
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> : ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "</li>
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "name", [], "any", false, false, false, 66), "html", null, true);
            echo "</li>                                        
                                    </ul>                                                                     
                                    <div>
                                    ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 69), "id", [], "any", true, true, false, 69)) {
                echo " 
                                        ";
                // line 70
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "userRole", [], "any", false, false, false, 70), "role", [], "any", false, false, false, 70) == "SUPERADMIN")) {
                    echo " 
                                            <a href=\"accounts/show/";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 71), "html", null, true);
                    echo "\"><a class=\"btn btn-sm btn-de-primary\">Show</a></a>                                                       
                                            <a href=\"accounts/edit/";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 72), "html", null, true);
                    echo "\"><a class=\"btn btn-sm btn-de-primary\">Edit</a></a>
                                            <a href=\"accounts/delete/";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 73), "html", null, true);
                    echo "\"><a class=\"btn btn-sm btn-de-primary\" onclick=\"return confirm('are you sure?')\">Delete</a></a>
                                        ";
                }
                // line 74
                echo " 

                                        ";
                // line 76
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "userRole", [], "any", false, false, false, 76), "role", [], "any", false, false, false, 76) == "USER")) {
                    echo " 
                                                <a href=\"accounts/show/";
                    // line 77
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 77), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
                                        ";
                }
                // line 78
                echo "  
                                    ";
            }
            // line 79
            echo " 
                                    </div>
                     
                                </div><!--end card-body-->                                                                      
                            </div>  <!--end card-->  
                                            
                        </div><!--end col-->
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo " 
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
        return "accounts/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 86,  191 => 79,  187 => 78,  182 => 77,  178 => 76,  174 => 74,  169 => 73,  165 => 72,  161 => 71,  157 => 70,  153 => 69,  147 => 66,  143 => 65,  139 => 64,  132 => 60,  127 => 58,  115 => 51,  90 => 29,  86 => 28,  64 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './base.html.twig' %} 

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
                                        <li class=\"breadcrumb-item\"><a href=\"/accounts\">Accounts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">List</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Accounts</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                        
                        <form action=\"/options/contacts/create\">
                            <input type=\"text\" style=\"float:left; width:300px\" id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"{% trans %}Search{% endtrans %}...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">{% trans %}Create Accounts{% endtrans %}</button>
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







                        <div class=\"row\">
                        {% for account in accounts %} 
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
       
                                            <h4 class=\"mt-0 mb-0 font-16\">{{ account.name }}
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">{{ account.name }}</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Address</b> : {{ account.name }}</li>
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> : {{ account.name }}</li>
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : {{ account.name }}</li>                                        
                                    </ul>                                                                     
                                    <div>
                                    {% if app.user.id is defined%} 
                                        {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                                            <a href=\"accounts/show/{{ account.id }}\"><a class=\"btn btn-sm btn-de-primary\">Show</a></a>                                                       
                                            <a href=\"accounts/edit/{{ account.id }}\"><a class=\"btn btn-sm btn-de-primary\">Edit</a></a>
                                            <a href=\"accounts/delete/{{ account.id }}\"><a class=\"btn btn-sm btn-de-primary\" onclick=\"return confirm('are you sure?')\">Delete</a></a>
                                        {% endif %} 

                                        {% if app.user.userRole.role == \"USER\" %} 
                                                <a href=\"accounts/show/{{ account.id }}\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
                                        {% endif %}  
                                    {% endif %} 
                                    </div>
                     
                                </div><!--end card-body-->                                                                      
                            </div>  <!--end card-->  
                                            
                        </div><!--end col-->
         {% endfor %} 
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

{% endblock %} ", "accounts/list.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\accounts\\list.html.twig");
    }
}
