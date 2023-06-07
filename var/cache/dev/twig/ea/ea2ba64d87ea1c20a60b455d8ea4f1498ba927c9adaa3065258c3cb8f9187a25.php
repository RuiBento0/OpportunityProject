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

/* base.html.twig */
class __TwigTemplate_ce6ff1874cac6add1f2013d2bb6474d492ca4ed3248517b78ecbd6c500f7ca43 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta content=\"Premium Multipurpose Admin & Dashboard Template\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        
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
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("uploads/userimg/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "photo", [], "any", false, false, false, 40)) . "")), "html", null, true);
        echo "\" alt=\"profile-user\" class=\"rounded-circle me-2 thumb-sm\" />
                                <div>
                                    <small class=\"d-none d-md-block font-11\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "userRole", [], "any", false, false, false, 42), "role", [], "any", false, false, false, 42), "html", null, true);
        echo "</small>
                                    <span class=\"d-none d-md-block fw-semibold font-12\" style=\"text-transform: capitalize\"> ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
        echo " <i
                                            class=\"mdi mdi-chevron-down\"></i></span>
                                </div>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end\">
                            <a class=\"dropdown-item\" href=\"/profile/";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), "html", null, true);
        echo "\"><i class=\"ti ti-user font-16 me-1 align-text-bottom\"></i> Profile</a>
                             ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 50), "id", [], "any", true, true, false, 50)) {
            echo " 

                            ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "userRole", [], "any", false, false, false, 52), "role", [], "any", false, false, false, 52) == "SUPERADMIN")) {
                echo " 
                            <a class=\"dropdown-item\" href=\"/options\"><i class=\"ti ti-settings font-16 me-1 align-text-bottom\"></i> Settings</a>
                            ";
            }
            // line 54
            echo " 

                            ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "userRole", [], "any", false, false, false, 56), "role", [], "any", false, false, false, 56) == "USER")) {
                echo " 

                            ";
            }
            // line 58
            echo "  
                         ";
        }
        // line 60
        echo "                            <div class=\"dropdown-divider mb-0\"></div>
                            <a class=\"dropdown-item\" href=\"/logout\"><i class=\"ti ti-power font-16 me-1 align-text-bottom\"></i> Logout</a>
                        </div>
                    </li><!--end topbar-profile-->

                    ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 65), "id", [], "any", true, true, false, 65)) {
            echo " 

                            ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "userRole", [], "any", false, false, false, 67), "role", [], "any", false, false, false, 67) == "SUPERADMIN")) {
                echo " 
                    <li class=\"notification-list\">
                        <a class=\"nav-link arrow-none nav-icon offcanvas-btn\" href=\"/options\"  type=\"button\" >
                            <i class=\"ti ti-settings ti-spin\"></i>
                        </a>
                    </li>
                    ";
            }
            // line 73
            echo " 

                            ";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "userRole", [], "any", false, false, false, 75), "role", [], "any", false, false, false, 75) == "USER")) {
                echo " 

                            ";
            }
            // line 77
            echo "  
                         ";
        }
        // line 78
        echo "   
                </ul><!--end topbar-nav-->

                <ul class=\"list-unstyled topbar-nav mb-0\">                        
                    <li>
                        <button class=\"nav-link button-menu-mobile nav-icon\" id=\"togglemenu\">
                            <i class=\"ti ti-menu-2\"></i>
                        </button>
                    </li> 
                    <li class=\"hide-phone app-search\">
                        <form role=\"search\" action=\"#\" method=\"get\">
                            <input type=\"search\" name=\"search\" class=\"form-control top-search mb-0\" placeholder=\"Type text...\">
                            <button type=\"submit\"><i class=\"ti ti-search\"></i></button>
                        </form>
                    </li>                       
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
    <!-- Top Bar End -->

        <div class=\"main-menu-inner\">
            ";
        // line 100
        $this->loadTemplate("/sidebar.html.twig", "base.html.twig", 100)->display($context);
        // line 101
        echo "        </div> 

        <div class=\"page-wrapper\">
            <div class=\"page-content-tab\">


            ";
        // line 108
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 108));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 109
            echo "                    <div class=\"alert alert-light alert-dismissible fade show border-0\" role=\"alert\">
                        ";
            // line 110
            echo twig_escape_filter($this->env, $context["notice"], "html", null, true);
            echo "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "
                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "flashes", [0 => "delete"], "method", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 116
            echo "                    <div class=\"card-body\" style = \"position: absolute; width:300px; top: 10px; z-index: 10; right:10px; \"> 
                        <div class=\"alert custom-alert custom-alert-primary icon-custom-alert shadow-sm fade show\" style=\"background-color:white;\"role=\"alert\">                                            
                            <i class=\"mdi mdi-alert-outline alert-icon text-primary align-self-center font-30 me-3\"></i>
                            <div class=\"alert-text my-1\">
                                <h5 class=\"mb-1 fw-bold mt-0\">Message</h5>
                                <span> ";
            // line 121
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
        // line 129
        echo "

                ";
        // line 131
        $this->displayBlock('body', $context, $blocks);
        // line 134
        echo "            </div>
        </div>
            
         ";
        // line 137
        $this->displayBlock('javascripts', $context, $blocks);
        // line 150
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            <link rel=\"shortcut icon\" href=\"/images/logoheader.jpg\">
            <link href=\"/plugins/metric/dist/assets/plugins/dragula/dragula.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"assets/plugins/lightpicker/litepicker.css\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 131
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 132
        echo "            
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 137
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 138
        echo "
        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/js/teste.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/dragula/dragula.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/pages/dragula.init.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/pages/crm-index.init.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
      
    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 144,  328 => 143,  324 => 142,  320 => 141,  316 => 140,  312 => 139,  309 => 138,  302 => 137,  294 => 132,  287 => 131,  273 => 14,  266 => 13,  258 => 150,  256 => 137,  251 => 134,  249 => 131,  245 => 129,  231 => 121,  224 => 116,  220 => 115,  217 => 114,  207 => 110,  204 => 109,  199 => 108,  191 => 101,  189 => 100,  165 => 78,  161 => 77,  155 => 75,  151 => 73,  141 => 67,  136 => 65,  129 => 60,  125 => 58,  119 => 56,  115 => 54,  109 => 52,  104 => 50,  100 => 49,  91 => 43,  87 => 42,  82 => 40,  62 => 22,  60 => 13,  51 => 7,  43 => 1,);
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

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta content=\"Premium Multipurpose Admin & Dashboard Template\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        {% block stylesheets %}
            <link rel=\"shortcut icon\" href=\"/images/logoheader.jpg\">
            <link href=\"/plugins/metric/dist/assets/plugins/dragula/dragula.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"assets/plugins/lightpicker/litepicker.css\" rel=\"stylesheet\" type=\"text/css\" />
        {% endblock %}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        
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
                            <a class=\"dropdown-item\" href=\"/options\"><i class=\"ti ti-settings font-16 me-1 align-text-bottom\"></i> Settings</a>
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
                        <a class=\"nav-link arrow-none nav-icon offcanvas-btn\" href=\"/options\"  type=\"button\" >
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
                    <li class=\"hide-phone app-search\">
                        <form role=\"search\" action=\"#\" method=\"get\">
                            <input type=\"search\" name=\"search\" class=\"form-control top-search mb-0\" placeholder=\"Type text...\">
                            <button type=\"submit\"><i class=\"ti ti-search\"></i></button>
                        </form>
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
      
    </body>
</html>
{% endblock %}

", "base.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\base.html.twig");
    }
}
