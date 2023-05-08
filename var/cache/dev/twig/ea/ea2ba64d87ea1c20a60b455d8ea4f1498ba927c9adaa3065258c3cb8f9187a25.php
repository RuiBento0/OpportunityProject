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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <title> CRM Central </title>
        <link rel=\"icon\" href=\"img/CRM2.ico\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta content=\"Premium Multipurpose Admin & Dashboard Template\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
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
                    
                    <li class=\"dropdown notification-list\">
                        <a class=\"nav-link dropdown-toggle arrow-none nav-icon\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
                            aria-haspopup=\"false\" aria-expanded=\"false\">
                            <i class=\"ti ti-mail\"></i>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-lg pt-0\">
                        
                            <h6 class=\"dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center\">
                                Emails <span class=\"badge bg-soft-primary badge-pill\">3</span>
                            </h6> 
                            <div class=\"notification-menu\" data-simplebar>
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">2 min ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <img src=\"/images/users/user-1.jpg\" alt=\"\" class=\"thumb-sm rounded-circle\">
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Your order is placed</h6>
                                            <small class=\"text-muted mb-0\">Dummy text of the printing and industry.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">10 min ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <img src=\"/images/users/user-4.jpg\" alt=\"\" class=\"thumb-sm rounded-circle\">
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Meeting with designers</h6>
                                            <small class=\"text-muted mb-0\">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">40 min ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <img src=\"/images/users/user-2.jpg\" alt=\"\" class=\"thumb-sm rounded-circle\">
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">UX 3 Task complete.</h6>
                                            <small class=\"text-muted mb-0\">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">1 hr ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <img src=\"/images/users/user-5.jpg\" alt=\"\" class=\"thumb-sm rounded-circle\">
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Your order is placed</h6>
                                            <small class=\"text-muted mb-0\">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">2 hrs ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <img src=\"/images/users/user-3.jpg\" alt=\"\" class=\"thumb-sm rounded-circle\">
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Payment Successfull</h6>
                                            <small class=\"text-muted mb-0\">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                            </div>
                            <!-- All-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item text-center text-primary\">
                                View all <i class=\"fi-arrow-right\"></i>
                            </a>
                        </div>
                    </li>

                    <li class=\"dropdown notification-list\">
                        <a class=\"nav-link dropdown-toggle arrow-none nav-icon\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
                            aria-haspopup=\"false\" aria-expanded=\"false\">
                            <i class=\"ti ti-bell\"></i>
                            <span class=\"alert-badge\"></span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-lg pt-0\">
                        
                            <h6 class=\"dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center\">
                                Notifications <span class=\"badge bg-soft-primary badge-pill\">2</span>
                            </h6> 
                            <div class=\"notification-menu\" data-simplebar>
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">2 min ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <i class=\"ti ti-chart-arcs\"></i>
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Your order is placed</h6>
                                            <small class=\"text-muted mb-0\">Dummy text of the printing and industry.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">10 min ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <i class=\"ti ti-device-computer-camera\"></i>
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Meeting with designers</h6>
                                            <small class=\"text-muted mb-0\">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">40 min ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">                                                    
                                            <i class=\"ti ti-diamond\"></i>
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">UX 3 Task complete.</h6>
                                            <small class=\"text-muted mb-0\">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">1 hr ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <i class=\"ti ti-drone\"></i>
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Your order is placed</h6>
                                            <small class=\"text-muted mb-0\">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">2 hrs ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <i class=\"ti ti-users\"></i>
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Payment Successfull</h6>
                                            <small class=\"text-muted mb-0\">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                            </div>
                            <!-- All-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item text-center text-primary\">
                                View all <i class=\"fi-arrow-right\"></i>
                            </a>
                        </div>
                    </li>

                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle nav-user\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
                            aria-haspopup=\"false\" aria-expanded=\"false\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <small class=\"d-none d-md-block font-11\">

                                    </small>
                                    <span class=\"d-none d-md-block fw-semibold font-12\">";
        // line 209
        echo "<i class=\"mdi mdi-chevron-down\"></i></span>
                                </div>
                            </div>
                        </a> 
                        <div class=\"dropdown-menu dropdown-menu-end\">
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"ti ti-user font-16 me-1 align-text-bottom\"></i> Profile</a>
                            <a class=\"dropdown-item\" href=\"/options\"><i class=\"ti ti-settings font-16 me-1 align-text-bottom\"></i> Settings</a>
                            <div class=\"dropdown-divider mb-0\"></div>
                            <a class=\"dropdown-item\" href=\"/logout\"><i class=\"ti ti-power font-16 me-1 align-text-bottom\"></i> Logout</a>
                        </div>
                    </li><!--end topbar-profile-->
                    <li class=\"notification-list\">
                        <a class=\"nav-link arrow-none nav-icon offcanvas-btn\" href=\"/options\"  type=\"button\" >
                            <i class=\"ti ti-settings ti-spin\"></i>
                        </a>
                    </li>   
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
        // line 246
        $this->loadTemplate("/sidebar.html.twig", "./base.html.twig", 246)->display($context);
        // line 247
        echo "        </div> 

        <div class=\"page-wrapper\">
            <div class=\"page-content-tab\">


            ";
        // line 254
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 254, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 254));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 255
            echo "                    <div class=\"alert alert-light alert-dismissible fade show border-0\" role=\"alert\">
                        ";
            // line 256
            echo twig_escape_filter($this->env, $context["notice"], "html", null, true);
            echo "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "
                ";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 261, $this->source); })()), "flashes", [0 => "delete"], "method", false, false, false, 261));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 262
            echo "                    <div class=\"card-body\" style = \"position: absolute; width:300px; top: 10px; z-index: 10; right:10px; \"> 
                        <div class=\"alert custom-alert custom-alert-primary icon-custom-alert shadow-sm fade show\" style=\"background-color:white;\"role=\"alert\">                                            
                            <i class=\"mdi mdi-alert-outline alert-icon text-primary align-self-center font-30 me-3\"></i>
                            <div class=\"alert-text my-1\">
                                <h5 class=\"mb-1 fw-bold mt-0\">Message</h5>
                                <span> ";
            // line 267
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
        // line 275
        echo "

                ";
        // line 277
        $this->displayBlock('body', $context, $blocks);
        // line 280
        echo "            </div>
        </div>
            
         ";
        // line 283
        $this->displayBlock('javascripts', $context, $blocks);
        // line 294
        echo "    </body>
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"shortcut icon\" href=\"/images/logoheader.jpg\">
            <link href=\"/plugins/metric/dist/assets/plugins/dragula/dragula.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.css\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 277
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 278
        echo "            
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 283
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 284
        echo "
        <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/js/teste.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/dragula/dragula.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/pages/dragula.init.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/pages/crm-index.init.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
      
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
        return array (  432 => 290,  428 => 289,  424 => 288,  420 => 287,  416 => 286,  412 => 285,  409 => 284,  402 => 283,  394 => 278,  387 => 277,  374 => 12,  367 => 11,  357 => 294,  355 => 283,  350 => 280,  348 => 277,  344 => 275,  330 => 267,  323 => 262,  319 => 261,  316 => 260,  306 => 256,  303 => 255,  298 => 254,  290 => 247,  288 => 246,  249 => 209,  57 => 19,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <title> CRM Central </title>
        <link rel=\"icon\" href=\"img/CRM2.ico\">
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
                    
                    <li class=\"dropdown notification-list\">
                        <a class=\"nav-link dropdown-toggle arrow-none nav-icon\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
                            aria-haspopup=\"false\" aria-expanded=\"false\">
                            <i class=\"ti ti-mail\"></i>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-lg pt-0\">
                        
                            <h6 class=\"dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center\">
                                Emails <span class=\"badge bg-soft-primary badge-pill\">3</span>
                            </h6> 
                            <div class=\"notification-menu\" data-simplebar>
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">2 min ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <img src=\"/images/users/user-1.jpg\" alt=\"\" class=\"thumb-sm rounded-circle\">
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Your order is placed</h6>
                                            <small class=\"text-muted mb-0\">Dummy text of the printing and industry.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">10 min ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <img src=\"/images/users/user-4.jpg\" alt=\"\" class=\"thumb-sm rounded-circle\">
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Meeting with designers</h6>
                                            <small class=\"text-muted mb-0\">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">40 min ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <img src=\"/images/users/user-2.jpg\" alt=\"\" class=\"thumb-sm rounded-circle\">
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">UX 3 Task complete.</h6>
                                            <small class=\"text-muted mb-0\">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">1 hr ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <img src=\"/images/users/user-5.jpg\" alt=\"\" class=\"thumb-sm rounded-circle\">
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Your order is placed</h6>
                                            <small class=\"text-muted mb-0\">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">2 hrs ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <img src=\"/images/users/user-3.jpg\" alt=\"\" class=\"thumb-sm rounded-circle\">
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Payment Successfull</h6>
                                            <small class=\"text-muted mb-0\">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                            </div>
                            <!-- All-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item text-center text-primary\">
                                View all <i class=\"fi-arrow-right\"></i>
                            </a>
                        </div>
                    </li>

                    <li class=\"dropdown notification-list\">
                        <a class=\"nav-link dropdown-toggle arrow-none nav-icon\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
                            aria-haspopup=\"false\" aria-expanded=\"false\">
                            <i class=\"ti ti-bell\"></i>
                            <span class=\"alert-badge\"></span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-lg pt-0\">
                        
                            <h6 class=\"dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center\">
                                Notifications <span class=\"badge bg-soft-primary badge-pill\">2</span>
                            </h6> 
                            <div class=\"notification-menu\" data-simplebar>
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">2 min ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <i class=\"ti ti-chart-arcs\"></i>
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Your order is placed</h6>
                                            <small class=\"text-muted mb-0\">Dummy text of the printing and industry.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">10 min ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <i class=\"ti ti-device-computer-camera\"></i>
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Meeting with designers</h6>
                                            <small class=\"text-muted mb-0\">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">40 min ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">                                                    
                                            <i class=\"ti ti-diamond\"></i>
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">UX 3 Task complete.</h6>
                                            <small class=\"text-muted mb-0\">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">1 hr ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <i class=\"ti ti-drone\"></i>
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Your order is placed</h6>
                                            <small class=\"text-muted mb-0\">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href=\"#\" class=\"dropdown-item py-3\">
                                    <small class=\"float-end text-muted ps-2\">2 hrs ago</small>
                                    <div class=\"media\">
                                        <div class=\"avatar-md bg-soft-primary\">
                                            <i class=\"ti ti-users\"></i>
                                        </div>
                                        <div class=\"media-body align-self-center ms-2 text-truncate\">
                                            <h6 class=\"my-0 fw-normal text-dark\">Payment Successfull</h6>
                                            <small class=\"text-muted mb-0\">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                            </div>
                            <!-- All-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item text-center text-primary\">
                                View all <i class=\"fi-arrow-right\"></i>
                            </a>
                        </div>
                    </li>

                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle nav-user\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
                            aria-haspopup=\"false\" aria-expanded=\"false\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <small class=\"d-none d-md-block font-11\">

                                    </small>
                                    <span class=\"d-none d-md-block fw-semibold font-12\">{# {{app.user.email}}  #}<i class=\"mdi mdi-chevron-down\"></i></span>
                                </div>
                            </div>
                        </a> 
                        <div class=\"dropdown-menu dropdown-menu-end\">
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"ti ti-user font-16 me-1 align-text-bottom\"></i> Profile</a>
                            <a class=\"dropdown-item\" href=\"/options\"><i class=\"ti ti-settings font-16 me-1 align-text-bottom\"></i> Settings</a>
                            <div class=\"dropdown-divider mb-0\"></div>
                            <a class=\"dropdown-item\" href=\"/logout\"><i class=\"ti ti-power font-16 me-1 align-text-bottom\"></i> Logout</a>
                        </div>
                    </li><!--end topbar-profile-->
                    <li class=\"notification-list\">
                        <a class=\"nav-link arrow-none nav-icon offcanvas-btn\" href=\"/options\"  type=\"button\" >
                            <i class=\"ti ti-settings ti-spin\"></i>
                        </a>
                    </li>   
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
      
        {% endblock %}
    </body>
</html>

", "./base.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\base.html.twig");
    }
}
