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
class __TwigTemplate_2da54e7eb2d0325d789a6f1340ddfe67a14a675e325ae9509a50881ea309b38a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "   
    </head>

    <body id=\"body\">
    <!-- Top Bar Start -->
        <div class=\"topbar\">            
            <!-- Navbar -->
            <nav class=\"navbar-custom\" id=\"navbar-custom\">    
                <ul class=\"list-unstyled topbar-nav float-end mb-0\">

                    <div class=\"dropdown\">
                    <a class=\"nav-link dropdown-toggle arrow-none nav-icon\"  role=\"button\" id=\"languageDropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/language/traducao.png"), "html", null, true);
        echo "\" style=\"width:24px\">
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"languageDropdown\">
                        <a class=\"dropdown-item\" href=\"/business/lang/en\">
                        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/language/en.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"thumb-xxs rounded-circle\">
                        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English", [], "messages");
        // line 40
        echo "                        </a>
                        <a class=\"dropdown-item\" href=\"/business/lang/pt\">
                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/language/pt.png"), "html", null, true);
        echo "\" alt=\"\" class=\"thumb-xxs rounded-circle\">
                        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Portuguese", [], "messages");
        // line 44
        echo "                        </a>
                    </div>
                    </div>

                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle nav-user\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
                            aria-haspopup=\"false\" aria-expanded=\"false\">
                            <div class=\"d-flex align-items-center\">
                                <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("uploads/userimg/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "photo", [], "any", false, false, false, 52)) . "")), "html", null, true);
        echo "\" alt=\"profile-user\" class=\"rounded-circle me-2 thumb-sm\" />
                                <div>
                                    <small class=\"d-none d-md-block font-11\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "userRole", [], "any", false, false, false, 54), "role", [], "any", false, false, false, 54), "html", null, true);
        echo "</small>
                                    <span class=\"d-none d-md-block fw-semibold font-12\" style=\"text-transform: capitalize\"> ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
        echo " <i
                                            class=\"mdi mdi-chevron-down\"></i></span>
                                </div>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end\">
                            <a class=\"dropdown-item\" href=\"/profile/";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "\"><i class=\"ti ti-user font-16 me-1 align-text-bottom\"></i>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile", [], "messages");
        echo "</a>
                             ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 62), "id", [], "any", true, true, false, 62)) {
            echo " 

                            ";
            // line 64
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "userRole", [], "any", false, false, false, 64), "role", [], "any", false, false, false, 64) == "SUPERADMIN")) {
                echo " 
                            <a class=\"dropdown-item\" href=\"/options/list\"><i class=\"ti ti-settings font-16 me-1 align-text-bottom\"></i>";
                // line 65
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "messages");
                echo "</a>
                            ";
            }
            // line 66
            echo " 

                            ";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "userRole", [], "any", false, false, false, 68), "role", [], "any", false, false, false, 68) == "USER")) {
                echo " 

                            ";
            }
            // line 70
            echo "  
                         ";
        }
        // line 72
        echo "                            <div class=\"dropdown-divider mb-0\"></div>
                            <a class=\"dropdown-item\" href=\"/logout\"><i class=\"ti ti-power font-16 me-1 align-text-bottom\"></i>";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout", [], "messages");
        echo "</a>
                        </div>
                    </li><!--end topbar-profile-->

                    ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 77), "id", [], "any", true, true, false, 77)) {
            echo " 

                            ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "userRole", [], "any", false, false, false, 79), "role", [], "any", false, false, false, 79) == "SUPERADMIN")) {
                echo " 
                    <li class=\"notification-list\">
                        <a class=\"nav-link arrow-none nav-icon offcanvas-btn\" href=\"/options/list\"  type=\"button\" >
                            <i class=\"ti ti-settings ti-spin\"></i>
                        </a>
                    </li>
                    ";
            }
            // line 85
            echo " 

                            ";
            // line 87
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "userRole", [], "any", false, false, false, 87), "role", [], "any", false, false, false, 87) == "USER")) {
                echo " 

                            ";
            }
            // line 89
            echo "  
                         ";
        }
        // line 90
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
        // line 107
        $this->loadTemplate("/sidebar.html.twig", "base.html.twig", 107)->display($context);
        // line 108
        echo "        </div> 

        <div class=\"page-wrapper\">
            <div class=\"page-content-tab\">


            ";
        // line 115
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 116
            echo "                    <div class=\"alert alert-light alert-dismissible fade show border-0\" role=\"alert\">
                        ";
            // line 117
            echo twig_escape_filter($this->env, $context["notice"], "html", null, true);
            echo "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "flashes", [0 => "delete"], "method", false, false, false, 122));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 123
            echo "                    <div class=\"card-body\" style = \"position: absolute; width:300px; top: 10px; z-index: 10; right:10px; \"> 
                        <div class=\"alert custom-alert custom-alert-primary icon-custom-alert shadow-sm fade show\" style=\"background-color:white;\"role=\"alert\">                                            
                            <i class=\"mdi mdi-alert-outline alert-icon text-primary align-self-center font-30 me-3\"></i>
                            <div class=\"alert-text my-1\">
                                <h5 class=\"mb-1 fw-bold mt-0\">Message</h5>
                                <span> ";
            // line 128
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
        // line 136
        echo "

                ";
        // line 138
        $this->displayBlock('body', $context, $blocks);
        // line 141
        echo "            </div>
        </div>
            </div>
         ";
        // line 144
        $this->displayBlock('javascripts', $context, $blocks);
        // line 180
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"shortcut icon\" href=\"/images/logoheader.jpg\">
            <link href=\"/css/datatables.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/plugins/dragula/dragula.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/plugins/lightpicker/litepicker.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric//dist/assets/plugins/select/selectr.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            ";
        // line 20
        echo "            
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 139
        echo "            
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
        echo " 
        ";
        // line 147
        echo "        ";
        // line 148
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datatables.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/googleapis.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/select/selectr.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/huebee/huebee.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/datepicker/datepicker-full.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/imask/imask.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/pages/forms-advanced.js"), "html", null, true);
        echo "\"></script>

          
        

            <script  type=\"text/javascript\">

            
            \$(document).ready(function () {

                \$('#pagination').DataTable();

                

            });


            </script>



    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  399 => 156,  395 => 155,  391 => 154,  387 => 153,  383 => 152,  379 => 151,  375 => 150,  371 => 149,  366 => 148,  364 => 147,  361 => 145,  351 => 144,  340 => 139,  330 => 138,  319 => 20,  308 => 10,  298 => 9,  287 => 180,  285 => 144,  280 => 141,  278 => 138,  274 => 136,  260 => 128,  253 => 123,  249 => 122,  246 => 121,  236 => 117,  233 => 116,  228 => 115,  220 => 108,  218 => 107,  199 => 90,  195 => 89,  189 => 87,  185 => 85,  175 => 79,  170 => 77,  163 => 73,  160 => 72,  156 => 70,  150 => 68,  146 => 66,  141 => 65,  137 => 64,  132 => 62,  126 => 61,  117 => 55,  113 => 54,  108 => 52,  98 => 44,  96 => 43,  92 => 42,  88 => 40,  86 => 39,  82 => 38,  75 => 34,  61 => 22,  59 => 9,  54 => 7,  46 => 1,);
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
            <link href=\"/css/datatables.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/plugins/dragula/dragula.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/plugins/lightpicker/litepicker.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric//dist/assets/plugins/select/selectr.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            {# <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\"> #}
            
        {% endblock %}
   
    </head>

    <body id=\"body\">
    <!-- Top Bar Start -->
        <div class=\"topbar\">            
            <!-- Navbar -->
            <nav class=\"navbar-custom\" id=\"navbar-custom\">    
                <ul class=\"list-unstyled topbar-nav float-end mb-0\">

                    <div class=\"dropdown\">
                    <a class=\"nav-link dropdown-toggle arrow-none nav-icon\"  role=\"button\" id=\"languageDropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img src=\"{{ asset('img/language/traducao.png') }}\" style=\"width:24px\">
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"languageDropdown\">
                        <a class=\"dropdown-item\" href=\"/business/lang/en\">
                        <img src=\"{{ asset('img/language/en.jpg') }}\" alt=\"\" class=\"thumb-xxs rounded-circle\">
                        {% trans %}English{% endtrans %}
                        </a>
                        <a class=\"dropdown-item\" href=\"/business/lang/pt\">
                        <img src=\"{{ asset('img/language/pt.png') }}\" alt=\"\" class=\"thumb-xxs rounded-circle\">
                        {% trans %}Portuguese{% endtrans %}
                        </a>
                    </div>
                    </div>

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
                            <a class=\"dropdown-item\" href=\"/profile/{{ app.user.id }}\"><i class=\"ti ti-user font-16 me-1 align-text-bottom\"></i>{% trans %} Profile{% endtrans %}</a>
                             {% if app.user.id is defined%} 

                            {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                            <a class=\"dropdown-item\" href=\"/options/list\"><i class=\"ti ti-settings font-16 me-1 align-text-bottom\"></i>{% trans %} Settings{% endtrans %}</a>
                            {% endif %} 

                            {% if app.user.userRole.role == \"USER\" %} 

                            {% endif %}  
                         {% endif %}
                            <div class=\"dropdown-divider mb-0\"></div>
                            <a class=\"dropdown-item\" href=\"/logout\"><i class=\"ti ti-power font-16 me-1 align-text-bottom\"></i>{% trans %} Logout{% endtrans %}</a>
                        </div>
                    </li><!--end topbar-profile-->

                    {% if app.user.id is defined%} 

                            {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                    <li class=\"notification-list\">
                        <a class=\"nav-link arrow-none nav-icon offcanvas-btn\" href=\"/options/list\"  type=\"button\" >
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
            </div>
         {% block javascripts %}
 
        {# <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script> #}
        {# <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js\"></script>  #}
        <script src=\"{{ asset('js/datatables.js') }}\"></script>
        <script src=\"{{ asset('js/googleapis.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/js/app.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/plugins/select/selectr.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/plugins/huebee/huebee.pkgd.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/plugins/datepicker/datepicker-full.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/plugins/moment/moment.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/plugins/imask/imask.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/pages/forms-advanced.js') }}\"></script>

          
        

            <script  type=\"text/javascript\">

            
            \$(document).ready(function () {

                \$('#pagination').DataTable();

                

            });


            </script>



    </body>
</html>
{% endblock %}

", "base.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\base.html.twig");
    }
}
