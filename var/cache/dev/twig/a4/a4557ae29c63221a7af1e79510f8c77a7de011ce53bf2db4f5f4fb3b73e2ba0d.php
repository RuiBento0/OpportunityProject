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

/* ./base.html.twig */
class __TwigTemplate_577ff19853584ead35b6365787067ba5fb2636ebbe287e138089b01c59ce9fff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <title> Business </title>
        <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/business3.ico"), "html", null, true);
        echo "\">

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "   
    </head>

    <body id=\"body\">
    <!-- Top Bar Start -->
        <div class=\"topbar\">            
            <!-- Navbar -->
            <nav class=\"navbar-custom\" id=\"navbar-custom\">    
                <ul class=\"list-unstyled topbar-nav float-end mb-0\">
                    <li class=\"dropdown\">
                        <!-- Add fields here-->
                    </li><!--end topbar-language-->

                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle nav-user\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
                            aria-haspopup=\"false\" aria-expanded=\"false\">
                            <div class=\"d-flex align-items-center\">
                                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("uploads/userimg/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "photo", [], "any", false, false, false, 37)) . "")), "html", null, true);
        echo "\" alt=\"profile-user\" class=\"rounded-circle me-2 thumb-sm\" />
                                <div>
                                    <small class=\"d-none d-md-block font-11\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "userRole", [], "any", false, false, false, 39), "role", [], "any", false, false, false, 39), "html", null, true);
        echo "</small>
                                    <span class=\"d-none d-md-block fw-semibold font-12\" style=\"text-transform: capitalize\"> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
        echo " <i
                                            class=\"mdi mdi-chevron-down\"></i></span>
                                </div>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end\">
                            <a class=\"dropdown-item\" href=\"/profile/";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "\"><i class=\"ti ti-user font-16 me-1 align-text-bottom\"></i> Profile</a>
                             ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 47), "id", [], "any", true, true, false, 47)) {
            echo " 

                            ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "userRole", [], "any", false, false, false, 49), "role", [], "any", false, false, false, 49) == "SUPERADMIN")) {
                echo " 
                            <a class=\"dropdown-item\" href=\"/settings\"><i class=\"ti ti-settings font-16 me-1 align-text-bottom\"></i> Settings</a>
                            ";
            }
            // line 51
            echo " 

                            ";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "userRole", [], "any", false, false, false, 53), "role", [], "any", false, false, false, 53) == "USER")) {
                echo " 

                            ";
            }
            // line 55
            echo "  
                         ";
        }
        // line 57
        echo "                            <div class=\"dropdown-divider mb-0\"></div>
                            <a class=\"dropdown-item\" href=\"/logout\"><i class=\"ti ti-power font-16 me-1 align-text-bottom\"></i> Logout</a>
                        </div>
                    </li><!--end topbar-profile-->

                    ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 62), "id", [], "any", true, true, false, 62)) {
            echo " 

                            ";
            // line 64
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "userRole", [], "any", false, false, false, 64), "role", [], "any", false, false, false, 64) == "SUPERADMIN")) {
                echo " 
                    <li class=\"notification-list\">
                        <a class=\"nav-link arrow-none nav-icon offcanvas-btn\" href=\"/settings\"  type=\"button\" >
                            <i class=\"ti ti-settings ti-spin\"></i>
                        </a>
                    </li>
                    ";
            }
            // line 70
            echo " 

                            ";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "userRole", [], "any", false, false, false, 72), "role", [], "any", false, false, false, 72) == "USER")) {
                echo " 

                            ";
            }
            // line 74
            echo "  
                         ";
        }
        // line 75
        echo "   
                </ul><!--end topbar-nav-->

                <ul class=\"list-unstyled topbar-nav mb-0\">                        
                    <li>
                        <button class=\"nav-link button-menu-mobile nav-icon\" id=\"togglemenu\">
                            <i class=\"ti ti-menu-2\"></i>
                        </button>
                    </li> 
                                     
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
    <!-- Top Bar End -->

        <div class=\"main-menu-inner\">
            ";
        // line 92
        $this->loadTemplate("/sidebar.html.twig", "./base.html.twig", 92)->display($context);
        // line 93
        echo "        </div> 

        <div class=\"page-wrapper\">
            <div class=\"page-content-tab\">


            ";
        // line 100
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 101
            echo "                    <div class=\"alert alert-light alert-dismissible fade show border-0\" role=\"alert\">
                        ";
            // line 102
            echo twig_escape_filter($this->env, $context["notice"], "html", null, true);
            echo "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "flashes", [0 => "delete"], "method", false, false, false, 107));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 108
            echo "                    <div class=\"card-body\" style = \"position: absolute; width:300px; top: 10px; z-index: 10; right:10px; \"> 
                        <div class=\"alert custom-alert custom-alert-primary icon-custom-alert shadow-sm fade show\" style=\"background-color:white;\"role=\"alert\">                                            
                            <i class=\"mdi mdi-alert-outline alert-icon text-primary align-self-center font-30 me-3\"></i>
                            <div class=\"alert-text my-1\">
                                <h5 class=\"mb-1 fw-bold mt-0\">Message</h5>
                                <span> ";
            // line 113
            echo twig_escape_filter($this->env, $context["notice"], "html", null, true);
            echo "</span>
                            </div>                                        
                            <div class=\"alert-close\">
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        </div>                                                                                           
                    </div><!--end card-body--> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "

                ";
        // line 123
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "            </div>
        </div>
            
         ";
        // line 129
        $this->displayBlock('javascripts', $context, $blocks);
        // line 149
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"shortcut icon\" href=\"/images/logoheader.jpg\">
            <link href=\"https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.css\" rel=\"stylesheet\"/>
            <link href=\"/plugins/metric/dist/assets/plugins/dragula/dragula.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"assets/plugins/lightpicker/litepicker.css\" rel=\"stylesheet\" type=\"text/css\" />
            
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 123
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 124
        echo "            
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        echo "
        <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/js/teste.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/dragula/dragula.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/pages/dragula.init.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/pages/crm-index.init.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>

      <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js\"></script>

            <script>
            \$(document).ready(function () {
                \$('#pagination').DataTable();
            });
            </script>
    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 136,  320 => 135,  316 => 134,  312 => 133,  308 => 132,  304 => 131,  301 => 130,  294 => 129,  286 => 124,  279 => 123,  263 => 10,  256 => 9,  248 => 149,  246 => 129,  241 => 126,  239 => 123,  235 => 121,  221 => 113,  214 => 108,  210 => 107,  207 => 106,  197 => 102,  194 => 101,  189 => 100,  181 => 93,  179 => 92,  160 => 75,  156 => 74,  150 => 72,  146 => 70,  136 => 64,  131 => 62,  124 => 57,  120 => 55,  114 => 53,  110 => 51,  104 => 49,  99 => 47,  95 => 46,  86 => 40,  82 => 39,  77 => 37,  58 => 20,  56 => 9,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <title> Business </title>
        <link rel=\"icon\" href=\"{{ asset('img/business3.ico') }}\">

        {% block stylesheets %}
            <link rel=\"shortcut icon\" href=\"/images/logoheader.jpg\">
            <link href=\"https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.css\" rel=\"stylesheet\"/>
            <link href=\"/plugins/metric/dist/assets/plugins/dragula/dragula.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"assets/plugins/lightpicker/litepicker.css\" rel=\"stylesheet\" type=\"text/css\" />
            
        {% endblock %}
   
    </head>

    <body id=\"body\">
    <!-- Top Bar Start -->
        <div class=\"topbar\">            
            <!-- Navbar -->
            <nav class=\"navbar-custom\" id=\"navbar-custom\">    
                <ul class=\"list-unstyled topbar-nav float-end mb-0\">
                    <li class=\"dropdown\">
                        <!-- Add fields here-->
                    </li><!--end topbar-language-->

                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle nav-user\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
                            aria-haspopup=\"false\" aria-expanded=\"false\">
                            <div class=\"d-flex align-items-center\">
                                <img src=\"{{ asset('uploads/userimg/' ~ app.user.photo ~ '') }}\" alt=\"profile-user\" class=\"rounded-circle me-2 thumb-sm\" />
                                <div>
                                    <small class=\"d-none d-md-block font-11\">{{ app.user.userRole.role }}</small>
                                    <span class=\"d-none d-md-block fw-semibold font-12\" style=\"text-transform: capitalize\"> {{ app.user.name }} <i
                                            class=\"mdi mdi-chevron-down\"></i></span>
                                </div>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end\">
                            <a class=\"dropdown-item\" href=\"/profile/{{ app.user.id }}\"><i class=\"ti ti-user font-16 me-1 align-text-bottom\"></i> Profile</a>
                             {% if app.user.id is defined%} 

                            {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                            <a class=\"dropdown-item\" href=\"/settings\"><i class=\"ti ti-settings font-16 me-1 align-text-bottom\"></i> Settings</a>
                            {% endif %} 

                            {% if app.user.userRole.role == \"USER\" %} 

                            {% endif %}  
                         {% endif %}
                            <div class=\"dropdown-divider mb-0\"></div>
                            <a class=\"dropdown-item\" href=\"/logout\"><i class=\"ti ti-power font-16 me-1 align-text-bottom\"></i> Logout</a>
                        </div>
                    </li><!--end topbar-profile-->

                    {% if app.user.id is defined%} 

                            {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                    <li class=\"notification-list\">
                        <a class=\"nav-link arrow-none nav-icon offcanvas-btn\" href=\"/settings\"  type=\"button\" >
                            <i class=\"ti ti-settings ti-spin\"></i>
                        </a>
                    </li>
                    {% endif %} 

                            {% if app.user.userRole.role == \"USER\" %} 

                            {% endif %}  
                         {% endif %}   
                </ul><!--end topbar-nav-->

                <ul class=\"list-unstyled topbar-nav mb-0\">                        
                    <li>
                        <button class=\"nav-link button-menu-mobile nav-icon\" id=\"togglemenu\">
                            <i class=\"ti ti-menu-2\"></i>
                        </button>
                    </li> 
                                     
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
    <!-- Top Bar End -->

        <div class=\"main-menu-inner\">
            {% include '/sidebar.html.twig' %}
        </div> 

        <div class=\"page-wrapper\">
            <div class=\"page-content-tab\">


            {# pop up message Created #}
                {% for notice in app.flashes('notice') %}
                    <div class=\"alert alert-light alert-dismissible fade show border-0\" role=\"alert\">
                        {{ notice }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>  
                {% endfor %}

                {% for notice in app.flashes('delete') %}
                    <div class=\"card-body\" style = \"position: absolute; width:300px; top: 10px; z-index: 10; right:10px; \"> 
                        <div class=\"alert custom-alert custom-alert-primary icon-custom-alert shadow-sm fade show\" style=\"background-color:white;\"role=\"alert\">                                            
                            <i class=\"mdi mdi-alert-outline alert-icon text-primary align-self-center font-30 me-3\"></i>
                            <div class=\"alert-text my-1\">
                                <h5 class=\"mb-1 fw-bold mt-0\">Message</h5>
                                <span> {{ notice }}</span>
                            </div>                                        
                            <div class=\"alert-close\">
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        </div>                                                                                           
                    </div><!--end card-body--> 
                {% endfor %}


                {% block body %}
            
                {% endblock %}
            </div>
        </div>
            
         {% block javascripts %}

        <script src=\"{{ asset('plugins/metric/dist/assets/js/teste.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/plugins/dragula/dragula.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/pages/dragula.init.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/plugins/apexcharts/apexcharts.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/pages/crm-index.init.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/js/app.js') }}\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>

      <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js\"></script>

            <script>
            \$(document).ready(function () {
                \$('#pagination').DataTable();
            });
            </script>
    </body>
</html>
{% endblock %}

", "./base.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\base.html.twig");
    }
}
