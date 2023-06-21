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

/* sidebar.html.twig */
class __TwigTemplate_0b5534aed16ebaf64c54b584b7d0be752e51d05291fac48821bb8de5bc214e3f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 1
        echo " ";
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
  <div class=\"leftbar-tab-menu\">
    <div class=\"main-icon-menu\" style=\"background-color:#608E34\">
        <a href=\"/index\" class=\"logo logo-metrica d-block text-center\">
            <span>
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Business.png"), "html", null, true);
        echo "\" alt=\"logo-small\" class=\"logo-sm\" />
            </span>
        </a>
        <div class=\"main-icon-menu-body\" >
            <div class=\"position-reletive h-100\" data-simplebar style=\"overflow-x: hidden;\">
                <ul class=\"nav nav-tabs\" role=\"tablist\" id=\"tab-menu\">
                    <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Dashboard\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaDashboard\" id=\"dashboard-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-smart-home menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                    <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Apps\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaApps\" id=\"apps-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-apps menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 23), "id", [], "any", true, true, false, 23)) {
            echo " 

                         ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "userRole", [], "any", false, false, false, 25), "role", [], "any", false, false, false, 25) == "SUPERADMIN")) {
                echo " 
                        <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Settings\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaPages\" id=\"pages-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-files menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                     <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Authentication\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaAuthentication\" id=\"authentication-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-shield-lock menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                        ";
            }
            // line 36
            echo " 

                         ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "userRole", [], "any", false, false, false, 38), "role", [], "any", false, false, false, 38) == "USER")) {
                echo " 

                         ";
            }
            // line 40
            echo "  
                     ";
        }
        // line 41
        echo " 

                </ul><!--end nav-->
            </div><!--end /div-->
        </div><!--end main-icon-menu-body-->
        <div class=\"pro-metrica-end\">
            
        </div><!--end pro-metrica-end-->
    </div>
    <!--end main-icon-menu-->

    <div class=\"main-menu-inner\">
        <!-- LOGO -->
        <div class=\"topbar-left\">
            <a href=\"/index\" class=\"logo\">
                <span style=\"
                font-size:22px;
                \"
                class=\"card-title\"
                >
               Business
                </span>
            </a><!--end logo-->
        </div><!--end topbar-left-->
        <!--end logo-->
        <div class=\"menu-body navbar-vertical tab-content\" data-simplebar>
            <div id=\"MetricaDashboard\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\"
                aria-labelledby=\"dasboard-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard", [], "messages");
        echo "</h6>
                </div>

                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/business/index\">Business</a>
                    </li><!--end nav-item-->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/business/work\">";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Work", [], "messages");
        echo "</a>
                    </li><!--end nav-item-->
                 
                </ul><!--end nav-->
            </div><!-- end Dashboards -->

            <div id=\"MetricaApps\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\"
                aria-labelledby=\"apps-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apps", [], "messages");
        echo "</h6>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"sidebarCollapse\">
                    <!-- Navigation -->
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#sidebarAnalytics\" data-bs-toggle=\"collapse\" role=\"button\"
                                aria-expanded=\"false\" aria-controls=\"sidebarAnalytics\">
                                Business
                            </a>
                            <div class=\"collapse \" id=\"sidebarAnalytics\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a href=\"/business/contacts\" class=\"nav-link \">";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contacts", [], "messages");
        echo "</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a href=\"/business/accounts\" class=\"nav-link \">";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accounts", [], "messages");
        echo "</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a href=\"/business/opportunities\" class=\"nav-link \">";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Opportunities", [], "messages");
        echo "</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a href=\"/business/leads\" class=\"nav-link \">";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leads", [], "messages");
        echo "</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarAnalytics-->
                        </li><!--end nav-item-->                   
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->


                 <div class=\"collapse navbar-collapse\" id=\"sidebarCrypto\">
                    <!-- Navigation -->
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                             <a class=\"nav-link\" href=\"#sidebarCRM\" data-bs-toggle=\"collapse\" role=\"button\"
                                        aria-expanded=\"false\" aria-controls=\"sidebarCRM\">
                                ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Support", [], "messages");
        // line 126
        echo "                            </a>
                            <div class=\"collapse \" id=\"sidebarCRM\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a href=\"/support/reports\" class=\"nav-link \">";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reports", [], "messages");
        echo "</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarAnalytics-->
                        </li><!--end nav-item-->                   
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->
            </div><!-- end Crypto -->

            
                        ";
        // line 140
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 140), "id", [], "any", true, true, false, 140)) {
            echo " 
                        
                         ";
            // line 142
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142), "userRole", [], "any", false, false, false, 142), "role", [], "any", false, false, false, 142) == "SUPERADMIN")) {
                echo " 
                        <div id=\"MetricaPages\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\" aria-labelledby=\"pages-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">";
                // line 145
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "messages");
                echo "</h6>
                </div>
                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/list\">";
                // line 149
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Settings", [], "messages");
                echo "</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/locations\">";
                // line 152
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Locations", [], "messages");
                echo "</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/departments\">";
                // line 155
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Departments", [], "messages");
                echo "</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/categories\">";
                // line 158
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categories", [], "messages");
                echo "</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/entities\">";
                // line 161
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entities", [], "messages");
                echo "</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/priorities\">";
                // line 164
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Priorities", [], "messages");
                echo "</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/status\">";
                // line 167
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "messages");
                echo "</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/stages\">";
                // line 170
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stages", [], "messages");
                echo "</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/area\">";
                // line 173
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Area", [], "messages");
                echo "</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/accountstype\">";
                // line 176
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accounts Type", [], "messages");
                echo "</a>
                                    </li><!--end nav-item--> 
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/campaign\">";
                // line 179
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Campaign", [], "messages");
                echo "</a>
                                    </li><!--end nav-item--> 
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/source\">";
                // line 182
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Source", [], "messages");
                echo "</a>
                                    </li><!--end nav-item--> 
                                </ul><!--end nav-->
            </div><!-- end Pages -->
                        ";
            }
            // line 186
            echo " 

                         ";
            // line 188
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188), "userRole", [], "any", false, false, false, 188), "role", [], "any", false, false, false, 188) == "USER")) {
                echo " 

                         ";
            }
            // line 190
            echo "  
                     ";
        }
        // line 191
        echo " 
            

                        ";
        // line 194
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 194), "id", [], "any", true, true, false, 194)) {
            echo " 

                         ";
            // line 196
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 196, $this->source); })()), "user", [], "any", false, false, false, 196), "userRole", [], "any", false, false, false, 196), "role", [], "any", false, false, false, 196) == "SUPERADMIN")) {
                echo " 
                        <div id=\"MetricaAuthentication\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\"
                            aria-labelledby=\"authentication-tab\">
                            <div class=\"title-box\">
                                <h6 class=\"menu-title\">";
                // line 200
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Authentication", [], "messages");
                echo "</h6>
                            </div>
                             <div class=\"collapse navbar-collapse\" id=\"sidebarCollapse\">
                                <ul class=\"navbar-nav\">
                                        <li class=\"nav-item\" >
                                            <a class=\"nav-link\" href=\"/authentication/list\">";
                // line 205
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Authentications", [], "messages");
                echo "</a>
                                        </li><!--end nav-item-->
                                        <li class=\"nav-item\" >
                                            <a class=\"nav-link\" href=\"/authentication/users\">";
                // line 208
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users", [], "messages");
                echo "</a>
                                        </li><!--end nav-item-->
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"/authentication/roles\">";
                // line 211
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Roles", [], "messages");
                echo "</a>
                                        </li><!--end nav-item-->
                        
                                 </ul><!--end nav-->
                             </div><!-- end Authentication-->
                        ";
            }
            // line 216
            echo " 

                         ";
            // line 218
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 218, $this->source); })()), "user", [], "any", false, false, false, 218), "userRole", [], "any", false, false, false, 218), "role", [], "any", false, false, false, 218) == "USER")) {
                echo " 

                         ";
            }
            // line 220
            echo "  
                     ";
        }
        // line 221
        echo " 

        </div>
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  418 => 221,  414 => 220,  408 => 218,  404 => 216,  395 => 211,  389 => 208,  383 => 205,  375 => 200,  368 => 196,  363 => 194,  358 => 191,  354 => 190,  348 => 188,  344 => 186,  336 => 182,  330 => 179,  324 => 176,  318 => 173,  312 => 170,  306 => 167,  300 => 164,  294 => 161,  288 => 158,  282 => 155,  276 => 152,  270 => 149,  263 => 145,  257 => 142,  252 => 140,  239 => 130,  233 => 126,  231 => 125,  213 => 110,  207 => 107,  201 => 104,  195 => 101,  178 => 87,  166 => 78,  155 => 70,  124 => 41,  120 => 40,  114 => 38,  110 => 36,  95 => 25,  90 => 23,  70 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% block body %} 
  <div class=\"leftbar-tab-menu\">
    <div class=\"main-icon-menu\" style=\"background-color:#608E34\">
        <a href=\"/index\" class=\"logo logo-metrica d-block text-center\">
            <span>
            <img src=\"{{ asset('img/Business.png') }}\" alt=\"logo-small\" class=\"logo-sm\" />
            </span>
        </a>
        <div class=\"main-icon-menu-body\" >
            <div class=\"position-reletive h-100\" data-simplebar style=\"overflow-x: hidden;\">
                <ul class=\"nav nav-tabs\" role=\"tablist\" id=\"tab-menu\">
                    <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Dashboard\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaDashboard\" id=\"dashboard-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-smart-home menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                    <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Apps\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaApps\" id=\"apps-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-apps menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    {% if app.user.id is defined%} 

                         {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                        <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Settings\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaPages\" id=\"pages-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-files menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                     <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Authentication\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaAuthentication\" id=\"authentication-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-shield-lock menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                        {% endif %} 

                         {% if app.user.userRole.role == \"USER\" %} 

                         {% endif %}  
                     {% endif %} 

                </ul><!--end nav-->
            </div><!--end /div-->
        </div><!--end main-icon-menu-body-->
        <div class=\"pro-metrica-end\">
            
        </div><!--end pro-metrica-end-->
    </div>
    <!--end main-icon-menu-->

    <div class=\"main-menu-inner\">
        <!-- LOGO -->
        <div class=\"topbar-left\">
            <a href=\"/index\" class=\"logo\">
                <span style=\"
                font-size:22px;
                \"
                class=\"card-title\"
                >
               Business
                </span>
            </a><!--end logo-->
        </div><!--end topbar-left-->
        <!--end logo-->
        <div class=\"menu-body navbar-vertical tab-content\" data-simplebar>
            <div id=\"MetricaDashboard\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\"
                aria-labelledby=\"dasboard-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">{% trans %}Dashboard{% endtrans %}</h6>
                </div>

                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/business/index\">Business</a>
                    </li><!--end nav-item-->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/business/work\">{% trans %}Work{% endtrans %}</a>
                    </li><!--end nav-item-->
                 
                </ul><!--end nav-->
            </div><!-- end Dashboards -->

            <div id=\"MetricaApps\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\"
                aria-labelledby=\"apps-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">{% trans %}Apps{% endtrans %}</h6>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"sidebarCollapse\">
                    <!-- Navigation -->
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#sidebarAnalytics\" data-bs-toggle=\"collapse\" role=\"button\"
                                aria-expanded=\"false\" aria-controls=\"sidebarAnalytics\">
                                Business
                            </a>
                            <div class=\"collapse \" id=\"sidebarAnalytics\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a href=\"/business/contacts\" class=\"nav-link \">{% trans %}Contacts{% endtrans %}</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a href=\"/business/accounts\" class=\"nav-link \">{% trans %}Accounts{% endtrans %}</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a href=\"/business/opportunities\" class=\"nav-link \">{% trans %}Opportunities{% endtrans %}</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a href=\"/business/leads\" class=\"nav-link \">{% trans %}Leads{% endtrans %}</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarAnalytics-->
                        </li><!--end nav-item-->                   
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->


                 <div class=\"collapse navbar-collapse\" id=\"sidebarCrypto\">
                    <!-- Navigation -->
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                             <a class=\"nav-link\" href=\"#sidebarCRM\" data-bs-toggle=\"collapse\" role=\"button\"
                                        aria-expanded=\"false\" aria-controls=\"sidebarCRM\">
                                {% trans %}Support{% endtrans %}
                            </a>
                            <div class=\"collapse \" id=\"sidebarCRM\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a href=\"/support/reports\" class=\"nav-link \">{% trans %}Reports{% endtrans %}</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarAnalytics-->
                        </li><!--end nav-item-->                   
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->
            </div><!-- end Crypto -->

            
                        {% if app.user.id is defined%} 
                        
                         {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                        <div id=\"MetricaPages\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\" aria-labelledby=\"pages-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">{% trans %}Settings{% endtrans %}</h6>
                </div>
                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/list\">{% trans %}All Settings{% endtrans %}</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/locations\">{% trans %}Locations{% endtrans %}</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/departments\">{% trans %}Departments{% endtrans %}</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/categories\">{% trans %}Categories{% endtrans %}</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/entities\">{% trans %}Entities{% endtrans %}</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/priorities\">{% trans %}Priorities{% endtrans %}</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/status\">{% trans %}Status{% endtrans %}</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/stages\">{% trans %}Stages{% endtrans %}</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/area\">{% trans %}Area{% endtrans %}</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/accountstype\">{% trans %}Accounts Type{% endtrans %}</a>
                                    </li><!--end nav-item--> 
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/campaign\">{% trans %}Campaign{% endtrans %}</a>
                                    </li><!--end nav-item--> 
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/source\">{% trans %}Source{% endtrans %}</a>
                                    </li><!--end nav-item--> 
                                </ul><!--end nav-->
            </div><!-- end Pages -->
                        {% endif %} 

                         {% if app.user.userRole.role == \"USER\" %} 

                         {% endif %}  
                     {% endif %} 
            

                        {% if app.user.id is defined%} 

                         {% if app.user.userRole.role == \"SUPERADMIN\" %} 
                        <div id=\"MetricaAuthentication\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\"
                            aria-labelledby=\"authentication-tab\">
                            <div class=\"title-box\">
                                <h6 class=\"menu-title\">{% trans %}Authentication{% endtrans %}</h6>
                            </div>
                             <div class=\"collapse navbar-collapse\" id=\"sidebarCollapse\">
                                <ul class=\"navbar-nav\">
                                        <li class=\"nav-item\" >
                                            <a class=\"nav-link\" href=\"/authentication/list\">{% trans %}All Authentications{% endtrans %}</a>
                                        </li><!--end nav-item-->
                                        <li class=\"nav-item\" >
                                            <a class=\"nav-link\" href=\"/authentication/users\">{% trans %}Users{% endtrans %}</a>
                                        </li><!--end nav-item-->
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"/authentication/roles\">{% trans %}Roles{% endtrans %}</a>
                                        </li><!--end nav-item-->
                        
                                 </ul><!--end nav-->
                             </div><!-- end Authentication-->
                        {% endif %} 

                         {% if app.user.userRole.role == \"USER\" %} 

                         {% endif %}  
                     {% endif %} 

        </div>
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>

{% endblock %}", "sidebar.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\sidebar.html.twig");
    }
}
