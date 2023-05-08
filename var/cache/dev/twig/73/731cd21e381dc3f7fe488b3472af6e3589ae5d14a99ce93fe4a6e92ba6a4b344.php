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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/sidebar.html.twig"));

        // line 1
        echo "  <div class=\"leftbar-tab-menu\">
    <div class=\"main-icon-menu\" style=\"background-color:#608E34\">
        <a href=\"/index\" class=\"logo logo-metrica d-block text-center\">
            <span>
                <img src=\"img/CRM2.png\" alt=\"logo-small\" class=\"logo-sm\">
            </span>
        </a>
        <div class=\"main-icon-menu-body\" >
            <div class=\"position-reletive h-100\" data-simplebar style=\"overflow-x: hidden;\">
                <ul class=\"nav nav-tabs\" role=\"tablist\" id=\"tab-menu\">
                    <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Home Page\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaDashboard\" id=\"dashboard-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-smart-home menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                    <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Apps\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaApps\" id=\"apps-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-apps menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Imports\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaPages\" id=\"pages-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-files menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                     <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Security\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaAuthentication\" id=\"authentication-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-shield-lock menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

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
               CRM Central
                </span>
            </a><!--end logo-->
        </div><!--end topbar-left-->
        <!--end logo-->
        <div class=\"menu-body navbar-vertical tab-content\" data-simplebar>
            <div id=\"MetricaDashboard\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\"
                aria-labelledby=\"dasboard-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">Home Page</h6>
                </div>

                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/index\">Home</a>
                    </li><!--end nav-item-->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"crypto-index.html\">Graphics</a>
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
                                Contacts
                            </a>
                            <div class=\"collapse \" id=\"sidebarAnalytics\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a href=\"/contacts/list\" class=\"nav-link \">List</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a href=\"/contacts/create\" class=\"nav-link \">New</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarAnalytics-->
                        </li><!--end nav-item-->
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#sidebarCRM\" data-bs-toggle=\"collapse\" role=\"button\"
                                aria-expanded=\"false\" aria-controls=\"sidebarCRM\">
                                Accounts
                            </a>
                            <div class=\"collapse \" id=\"sidebarCRM\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/accounts/list\">List</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/accounts/create\">New</a>
                                    </li><!--end nav-item-->
                                    
                                </ul><!--end nav-->
                            </div><!--end sidebarCRM-->
                        </li><!--end nav-item-->

                        ";
        // line 134
        echo "
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#sidebarLeads\" data-bs-toggle=\"collapse\" role=\"button\"
                                aria-expanded=\"false\" aria-controls=\"sidebarLeads\">
                                Leads
                            </a>
                            <div class=\"collapse \" id=\"sidebarLeads\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/leads/list\">List</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/leads/create\">New</a>
                                    </li><!--end nav-item-->
                                   
                                </ul><!--end nav-->
                            </div><!--end sidebarLeads-->
                        </li><!--end nav-item-->

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#sidebarOpportunities\" data-bs-toggle=\"collapse\" role=\"button\"
                                aria-expanded=\"false\" aria-controls=\"sidebarOpportunities\">
                                Opportunities
                            </a>
                            <div class=\"collapse \" id=\"sidebarOpportunities\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/opportunities/list\">List</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/opportunities/create\">New</a>
                                    </li><!--end nav-item-->
                                   
                                </ul><!--end nav-->
                            </div><!--end sidebarOpportunities-->
                        </li><!--end nav-item-->
                        
                        
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->
            </div><!-- end Crypto -->

            

            <div id=\"MetricaPages\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\" aria-labelledby=\"pages-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">imports</h6>
                </div>
                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/import\">import</a>
                    </li><!--end nav-item-->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"pages-profile.html\">All imported Files</a>
                    </li><!--end nav-item-->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/Import/Confirm\">Import Configuration</a>
                    </li><!--end nav-item-->
                </ul><!--end nav-->
            </div><!-- end Pages -->


             <div id=\"MetricaAuthentication\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\"
                aria-labelledby=\"authentication-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">Options</h6>
                </div>
                 <div class=\"collapse navbar-collapse\" id=\"sidebarCollapse\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/Options\">Options User</a>
                        </li><!--end nav-item-->
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#sidebarForms\" data-bs-toggle=\"collapse\" role=\"button\"
                                aria-expanded=\"false\" aria-controls=\"sidebarForms\">
                                Import Options
                            </a>
                            
                            <div class=\"collapse \" id=\"sidebarForms\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"auth-login-alt.html\">Accounts Options</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"auth-register.html\">Contacts Options</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"auth-register-alt.html\">Product Options</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"auth-login-alt.html\">Import Templates</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarCRM-->
                        </li><!--end nav-item-->
                                                        
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#sidebarProjects\" data-bs-toggle=\"collapse\" role=\"button\"
                                aria-expanded=\"false\" aria-controls=\"sidebarProjects\">
                                Admin Options
                            </a>
                            <div class=\"collapse \" id=\"sidebarProjects\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/Options/Users\">Users</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/Options/Field\">Field Options</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/Options/Website\">Website Settings</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/Options/advanced\">More Options</a>
                                    </li><!--end nav-item--> 
                                </ul><!--end nav-->
                            </div><!--end sidebarCRM-->
                        </li><!--end nav-item-->
                    </div>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"auth-recover-pw-alt.html\">Change Password</a>
                    </li><!--end nav-item-->
                </ul><!--end nav-->
            </div><!-- end Authentication-->

        </div>
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  158 => 134,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <div class=\"leftbar-tab-menu\">
    <div class=\"main-icon-menu\" style=\"background-color:#608E34\">
        <a href=\"/index\" class=\"logo logo-metrica d-block text-center\">
            <span>
                <img src=\"img/CRM2.png\" alt=\"logo-small\" class=\"logo-sm\">
            </span>
        </a>
        <div class=\"main-icon-menu-body\" >
            <div class=\"position-reletive h-100\" data-simplebar style=\"overflow-x: hidden;\">
                <ul class=\"nav nav-tabs\" role=\"tablist\" id=\"tab-menu\">
                    <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Home Page\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaDashboard\" id=\"dashboard-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-smart-home menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                    <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Apps\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaApps\" id=\"apps-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-apps menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Imports\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaPages\" id=\"pages-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-files menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                     <li class=\"nav-item\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Security\" data-bs-trigger=\"hover\">
                        <a href=\"#MetricaAuthentication\" id=\"authentication-tab\" class=\"nav-link\" style=\"background-color:#608E34\">
                            <i class=\"ti ti-shield-lock menu-icon\"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

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
               CRM Central
                </span>
            </a><!--end logo-->
        </div><!--end topbar-left-->
        <!--end logo-->
        <div class=\"menu-body navbar-vertical tab-content\" data-simplebar>
            <div id=\"MetricaDashboard\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\"
                aria-labelledby=\"dasboard-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">Home Page</h6>
                </div>

                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/index\">Home</a>
                    </li><!--end nav-item-->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"crypto-index.html\">Graphics</a>
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
                                Contacts
                            </a>
                            <div class=\"collapse \" id=\"sidebarAnalytics\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a href=\"/contacts/list\" class=\"nav-link \">List</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a href=\"/contacts/create\" class=\"nav-link \">New</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarAnalytics-->
                        </li><!--end nav-item-->
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#sidebarCRM\" data-bs-toggle=\"collapse\" role=\"button\"
                                aria-expanded=\"false\" aria-controls=\"sidebarCRM\">
                                Accounts
                            </a>
                            <div class=\"collapse \" id=\"sidebarCRM\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/accounts/list\">List</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/accounts/create\">New</a>
                                    </li><!--end nav-item-->
                                    
                                </ul><!--end nav-->
                            </div><!--end sidebarCRM-->
                        </li><!--end nav-item-->

                        {# <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#sidebarProducts\" data-bs-toggle=\"collapse\" role=\"button\"
                                aria-expanded=\"false\" aria-controls=\"sidebarProducts\">
                                Products
                            </a>
                            <div class=\"collapse \" id=\"sidebarProducts\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"products/list\">List</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/products/create\">New</a>
                                    </li><!--end nav-item-->
                                   
                                </ul><!--end nav-->
                            </div><!--end sidebarProducts-->
                        </li><!--end nav-item--> #}

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#sidebarLeads\" data-bs-toggle=\"collapse\" role=\"button\"
                                aria-expanded=\"false\" aria-controls=\"sidebarLeads\">
                                Leads
                            </a>
                            <div class=\"collapse \" id=\"sidebarLeads\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/leads/list\">List</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/leads/create\">New</a>
                                    </li><!--end nav-item-->
                                   
                                </ul><!--end nav-->
                            </div><!--end sidebarLeads-->
                        </li><!--end nav-item-->

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#sidebarOpportunities\" data-bs-toggle=\"collapse\" role=\"button\"
                                aria-expanded=\"false\" aria-controls=\"sidebarOpportunities\">
                                Opportunities
                            </a>
                            <div class=\"collapse \" id=\"sidebarOpportunities\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/opportunities/list\">List</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/opportunities/create\">New</a>
                                    </li><!--end nav-item-->
                                   
                                </ul><!--end nav-->
                            </div><!--end sidebarOpportunities-->
                        </li><!--end nav-item-->
                        
                        
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->
            </div><!-- end Crypto -->

            

            <div id=\"MetricaPages\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\" aria-labelledby=\"pages-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">imports</h6>
                </div>
                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/import\">import</a>
                    </li><!--end nav-item-->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"pages-profile.html\">All imported Files</a>
                    </li><!--end nav-item-->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/Import/Confirm\">Import Configuration</a>
                    </li><!--end nav-item-->
                </ul><!--end nav-->
            </div><!-- end Pages -->


             <div id=\"MetricaAuthentication\" class=\"main-icon-menu-pane tab-pane\" role=\"tabpanel\"
                aria-labelledby=\"authentication-tab\">
                <div class=\"title-box\">
                    <h6 class=\"menu-title\">Options</h6>
                </div>
                 <div class=\"collapse navbar-collapse\" id=\"sidebarCollapse\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/Options\">Options User</a>
                        </li><!--end nav-item-->
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#sidebarForms\" data-bs-toggle=\"collapse\" role=\"button\"
                                aria-expanded=\"false\" aria-controls=\"sidebarForms\">
                                Import Options
                            </a>
                            
                            <div class=\"collapse \" id=\"sidebarForms\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"auth-login-alt.html\">Accounts Options</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"auth-register.html\">Contacts Options</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"auth-register-alt.html\">Product Options</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"auth-login-alt.html\">Import Templates</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarCRM-->
                        </li><!--end nav-item-->
                                                        
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#sidebarProjects\" data-bs-toggle=\"collapse\" role=\"button\"
                                aria-expanded=\"false\" aria-controls=\"sidebarProjects\">
                                Admin Options
                            </a>
                            <div class=\"collapse \" id=\"sidebarProjects\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/Options/Users\">Users</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/Options/Field\">Field Options</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/Options/Website\">Website Settings</a>
                                    </li><!--end nav-item-->
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/Options/advanced\">More Options</a>
                                    </li><!--end nav-item--> 
                                </ul><!--end nav-->
                            </div><!--end sidebarCRM-->
                        </li><!--end nav-item-->
                    </div>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"auth-recover-pw-alt.html\">Change Password</a>
                    </li><!--end nav-item-->
                </ul><!--end nav-->
            </div><!-- end Authentication-->

        </div>
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>", "/sidebar.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\sidebar.html.twig");
    }
}
