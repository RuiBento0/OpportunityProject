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

/* /sidebar.html.twig */
class __TwigTemplate_429a0f56b19c0b4b36227d89a6b7867b35523a6606aa0c8fbdc785fa6eda3ae0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/sidebar.html.twig"));

        // line 1
        echo " ";
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
  <div class=\"leftbar-tab-menu\">
    <div class=\"main-icon-menu\" style=\"background-color:#608E34\">
        <a href=\"/index\" class=\"logo logo-metrica d-block text-center\">
            <span>
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Business23.png"), "html", null, true);
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
                        <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Pages\" data-bs-trigger=\"hover\">
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
                    <h6 class=\"menu-title\">Dashboard</h6>
                </div>

                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/index\">Business</a>
                    </li><!--end nav-item-->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/work\">Work</a>
                    </li><!--end nav-item-->
                 
                </ul><!--end nav-->
            </div><!-- end Dashboards -->

            <div id=\"MetricaApps\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\"
                aria-labelledby=\"apps-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">Apps</h6>
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
                                        <a href=\"/business/contacts\" class=\"nav-link \">Contacts</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a href=\"/business/accounts\" class=\"nav-link \">Accounts</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a href=\"/business/opportunities\" class=\"nav-link \">Opportunities</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a href=\"/business/leads\" class=\"nav-link \">Leads</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarAnalytics-->
                        </li><!--end nav-item-->                   
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->
            </div><!-- end Crypto -->

            
                        ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 120), "id", [], "any", true, true, false, 120)) {
            echo " 
                        
                         ";
            // line 122
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "userRole", [], "any", false, false, false, 122), "role", [], "any", false, false, false, 122) == "SUPERADMIN")) {
                echo " 
                        <div id=\"MetricaPages\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\" aria-labelledby=\"pages-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">Pages</h6>
                </div>
                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options\">All Options</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/locations\">Locations</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/departments\">Departments</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/categories\">Categories</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/entities\">Entities</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/priorities\">Priorities</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/status\">Status</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/stages\">Stages</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/area\">Area</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/accountstype\">Accounts Type</a>
                                    </li><!--end nav-item--> 
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/campaign\">Campaign</a>
                                    </li><!--end nav-item--> 
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/source\">Source</a>
                                    </li><!--end nav-item--> 
                                </ul><!--end nav-->
            </div><!-- end Pages -->
                        ";
            }
            // line 166
            echo " 

                         ";
            // line 168
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168), "userRole", [], "any", false, false, false, 168), "role", [], "any", false, false, false, 168) == "USER")) {
                echo " 

                         ";
            }
            // line 170
            echo "  
                     ";
        }
        // line 171
        echo " 
            

                        ";
        // line 174
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 174), "id", [], "any", true, true, false, 174)) {
            echo " 

                         ";
            // line 176
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "userRole", [], "any", false, false, false, 176), "role", [], "any", false, false, false, 176) == "SUPERADMIN")) {
                echo " 
                        <div id=\"MetricaAuthentication\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\"
                            aria-labelledby=\"authentication-tab\">
                            <div class=\"title-box\">
                                <h6 class=\"menu-title\">Authentication</h6>
                            </div>
                             <div class=\"collapse navbar-collapse\" id=\"sidebarCollapse\">
                                <ul class=\"navbar-nav\">
                                    <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"/authentication/users\">Users</a>
                                        </li><!--end nav-item-->
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"/authentication/roles\">Roles</a>
                                        </li><!--end nav-item-->
                        
                                 </ul><!--end nav-->
                             </div><!-- end Authentication-->
                        ";
            }
            // line 193
            echo " 

                         ";
            // line 195
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "user", [], "any", false, false, false, 195), "userRole", [], "any", false, false, false, 195), "role", [], "any", false, false, false, 195) == "USER")) {
                echo " 

                         ";
            }
            // line 197
            echo "  
                     ";
        }
        // line 198
        echo " 

        </div>
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  308 => 198,  304 => 197,  298 => 195,  294 => 193,  273 => 176,  268 => 174,  263 => 171,  259 => 170,  253 => 168,  249 => 166,  201 => 122,  196 => 120,  115 => 41,  111 => 40,  105 => 38,  101 => 36,  86 => 25,  81 => 23,  61 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% block body %} 
  <div class=\"leftbar-tab-menu\">
    <div class=\"main-icon-menu\" style=\"background-color:#608E34\">
        <a href=\"/index\" class=\"logo logo-metrica d-block text-center\">
            <span>
            <img src=\"{{ asset('img/Business23.png') }}\" alt=\"logo-small\" class=\"logo-sm\" />
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
                        <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Pages\" data-bs-trigger=\"hover\">
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
                    <h6 class=\"menu-title\">Dashboard</h6>
                </div>

                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/index\">Business</a>
                    </li><!--end nav-item-->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/work\">Work</a>
                    </li><!--end nav-item-->
                 
                </ul><!--end nav-->
            </div><!-- end Dashboards -->

            <div id=\"MetricaApps\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\"
                aria-labelledby=\"apps-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">Apps</h6>
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
                                        <a href=\"/business/contacts\" class=\"nav-link \">Contacts</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a href=\"/business/accounts\" class=\"nav-link \">Accounts</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a href=\"/business/opportunities\" class=\"nav-link \">Opportunities</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a href=\"/business/leads\" class=\"nav-link \">Leads</a>
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
                    <h6 class=\"menu-title\">Pages</h6>
                </div>
                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options\">All Options</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/locations\">Locations</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/departments\">Departments</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/categories\">Categories</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/entities\">Entities</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/priorities\">Priorities</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/status\">Status</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/stages\">Stages</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/area\">Area</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/accountstype\">Accounts Type</a>
                                    </li><!--end nav-item--> 
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/campaign\">Campaign</a>
                                    </li><!--end nav-item--> 
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/options/source\">Source</a>
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
                                <h6 class=\"menu-title\">Authentication</h6>
                            </div>
                             <div class=\"collapse navbar-collapse\" id=\"sidebarCollapse\">
                                <ul class=\"navbar-nav\">
                                    <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"/authentication/users\">Users</a>
                                        </li><!--end nav-item-->
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"/authentication/roles\">Roles</a>
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

{% endblock %}", "/sidebar.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\sidebar.html.twig");
    }
}
