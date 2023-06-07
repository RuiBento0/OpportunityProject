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
class __TwigTemplate_47e7d0960185b32a999319b8521de5fa465d47ca16cb7d5d8fcfe201da088ef1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "business/accounts.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "business/accounts.html.twig", 1);
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
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
        echo "...\" class=\"form-control\"></input>
                            <button type=\"submit\" style=\"float:right\"class=\"btn btn-outline-secondary\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Accounts", [], "messages");
        echo "</button>
                            <a href=\"/pdf/generator/accounts\" type=\"submit\" target=\"_blank\" style=\"float:right; width:10%; margin-right:5px\"class=\"btn btn-outline-danger\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export PDF", [], "messages");
        echo "</a>
                            <a href=\"/excel/generator/accounts\" type=\"submit\" target=\"_blank\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-success\">";
        // line 31
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
                                            <h4 class=\"card-title\">Accounts Details</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->

                        <div class=\"row\">
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            echo " 
                        <div class=\"col-lg-4\">                            
                            <div class=\"card\">                               
                                <div class=\"card-body\"> 
                                    <div class=\"media mb-3\">
                                        <div class=\"media-body align-self-center\"> 
       
                                            <h4 class=\"mt-0 mb-0 font-16\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "name", [], "any", false, false, false, 54), "html", null, true);
            echo "
                                            </h4>
                                            <p class=\"text-muted mb-0 font-12\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "</p>                                                                                                                                      
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class=\"list-unstyled mb-2\">
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Address</b> : 
                                                                                                                                ";
            // line 64
            echo "
                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> :
                                                                                                                                ";
            // line 69
            echo "
                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : 
                                                                                                                                ";
            // line 73
            echo "                                        
                                    </ul>                                                                     
                                    <div>
                                    ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 76), "id", [], "any", true, true, false, 76)) {
                echo " 
                                        ";
                // line 77
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "userRole", [], "any", false, false, false, 77), "role", [], "any", false, false, false, 77) == "SUPERADMIN")) {
                    echo " 
                                            <a href=\"accounts/show/";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 78), "html", null, true);
                    echo "\"><button class=\"btn btn-sm btn-de-primary\">Show</button></a>                                                       
                                            <a href=\"accounts/edit/";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 79), "html", null, true);
                    echo "\"><button class=\"btn btn-sm btn-de-primary\">Edit</button></a>
                                            <a href=\"accounts/delete/";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 80), "html", null, true);
                    echo "\"><button class=\"btn btn-sm btn-de-primary\" onclick=\"return confirm('are you sure?')\">Delete</button></a>
                                        ";
                }
                // line 81
                echo " 

                                        ";
                // line 83
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "userRole", [], "any", false, false, false, 83), "role", [], "any", false, false, false, 83) == "USER")) {
                    echo " 
                                                <a href=\"accounts/show/";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 84), "html", null, true);
                    echo "\"><i class=\"mdi mdi-eye-outline text-secondary font-16\"></i></a>
                                        ";
                }
                // line 85
                echo "  
                                    ";
            }
            // line 86
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
        // line 92
        echo " 
                </div>
                </div>
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
                    </div>
                </div>
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
        return array (  205 => 92,  193 => 86,  189 => 85,  184 => 84,  180 => 83,  176 => 81,  171 => 80,  167 => 79,  163 => 78,  159 => 77,  155 => 76,  150 => 73,  146 => 69,  142 => 64,  134 => 56,  129 => 54,  117 => 47,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  64 => 8,  59 => 4,  52 => 3,  35 => 1,);
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
                            <a href=\"/pdf/generator/accounts\" type=\"submit\" target=\"_blank\" style=\"float:right; width:10%; margin-right:5px\"class=\"btn btn-outline-danger\">{% trans %}Export PDF{% endtrans %}</a>
                            <a href=\"/excel/generator/accounts\" type=\"submit\" target=\"_blank\" style=\"float:right; width:12%; margin-right:5px\"class=\"btn btn-outline-success\">{% trans %}Export Excel{% endtrans %}</a>
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
                                        <li class=\"\"><i data-feather=\"calendar\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b>Address</b> : 
                                                                                                                                {# {% for adresses in accounts.adresses %}
                                                                                                                                    {{ adresses.adresses }}
                                                                                                                                {% endfor %}</li> #}

                                        <li class=\"mt-2\"><i data-feather=\"phone\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> phone </b> :
                                                                                                                                {# {% for phones in accounts.phone %}
                                                                                                                                    {{ phones.phone }}
                                                                                                                                {% endfor %}</li> #}

                                        <li class=\"mt-2\"><i data-feather=\"mail\" class=\"align-self-center icon-xs icon-dual me-1\"></i> <b> Email </b> : 
                                                                                                                                {# {% for emails in accounts.email %}
                                                                                                                                    {{ emails.email }}
                                                                                                                                {% endfor %}</li></li> #}                                        
                                    </ul>                                                                     
                                    <div>
                                    {% if app.user.id is defined%} 
                                        {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                                            <a href=\"accounts/show/{{ account.id }}\"><button class=\"btn btn-sm btn-de-primary\">Show</button></a>                                                       
                                            <a href=\"accounts/edit/{{ account.id }}\"><button class=\"btn btn-sm btn-de-primary\">Edit</button></a>
                                            <a href=\"accounts/delete/{{ account.id }}\"><button class=\"btn btn-sm btn-de-primary\" onclick=\"return confirm('are you sure?')\">Delete</button></a>
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
                </div>
                </div>
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
                    </div>
                </div>
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
