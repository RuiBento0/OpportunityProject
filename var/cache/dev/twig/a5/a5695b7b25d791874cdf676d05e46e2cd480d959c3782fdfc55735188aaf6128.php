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

/* profile/index.html.twig */
class __TwigTemplate_4879f42b57bd6ac0cb23c4d439e818a63500f579e950ac0e2650d6fdfe0d4ac8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
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
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <title> Business </title>
        <link rel=\"icon\" href=\"img/CRM2.ico\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta content=\"Premium Multipurpose Admin & Dashboard Template\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    </head>

    <body id=\"body\">
        

    <div class=\"page-wrapper\">

        <!-- Page Content-->


            <div class=\"container-fluid\">
                <!-- Page-Title -->
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"page-title-box\">
                            <div class=\"float-end\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"/index\">Business</a></li>
                                    <li class=\"breadcrumb-item active\">Profile</li>
                                </ol>
                            </div>
                            <h4 class=\"page-title\">Profile</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"met-profile\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 align-self-center mb-3 mb-lg-0\">
                                            <div class=\"met-profile-main\">
                                            <form action=\"/profile/";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                                                <div class=\"met-profile-main-pic\">
                                                    <img src=\"../uploads/userimg/";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "photo", [], "any", false, false, false, 62), "html", null, true);
        echo "\" alt=\"\" height=\"110\" class=\"rounded-circle\">
                                                    <span class=\"met-profile_main-pic-change\">
                                                        <i class=\"fas fa-camera\">

                                                        </i>
                                                    </span>
                                                </div>
                                                <input type=\"file\" id=\"imageToUpload\" name=\"imageToUpload\">
                                                <input type=\"text\" id=\"UserId\" name=\"UserId\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
        echo "\" hidden>


                                                        <input type=\"submit\" name=\"submit\" value=\"Submit\">
                                                </form>
                                                <div class=\"met-profile_user-detail\">
                                                    <h5 class=\"met-user-name\" style=\"text-transform: capitalize\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76), "html", null, true);
        echo "</h5>                                                        
                                                    <p class=\"mb-0 met-user-name-post\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "userRole", [], "any", false, false, false, 77), "role", [], "any", false, false, false, 77), "html", null, true);
        echo "</p>                                                        
                                                </div>
                                            </div>                                                
                                        </div><!--end col-->
                                        
                                        <div class=\"col-lg-4 ms-auto align-self-center\">
                                            <ul class=\"list-unstyled personal-detail mb-0\">
                                                <li class=\"mt-2\"><i class=\"las la-envelope text-secondary font-22 align-middle mr-2\"></i> <b> Email </b> : ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "email", [], "any", false, false, false, 84), "html", null, true);
        echo " </li>                                                   
                                            </ul>
                                           </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end f_profile-->                                                                                
                            </div><!--end card-body-->  
                            <div class=\"card-body p-0\">    
                                <!-- Nav tabs -->
                                                                             
                                    <div class=\"tab-pane p-3\" id=\"Settings\" role=\"tabpanel\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6 col-xl-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-header\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col\">                      
                                                                <h4 class=\"card-title\">Personal Information</h4>                      
                                                            </div><!--end col-->                                                       
                                                        </div>  <!--end row-->                                  
                                                    </div><!--end card-header-->
                                                    <div class=\"card-body\">                       
                                                        <div class=\"form-group mb-3 row\">
                                                            <label class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\">Name</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <input class=\"form-control\" type=\"text\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "name", [], "any", false, false, false, 109), "html", null, true);
        echo "\" style=\" border-color:#608E34\">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class=\"form-group mb-3 row\">
                                                            <label class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\">Email Address</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <div class=\"input-group\">
                                                                    <span class=\"input-group-text\" style=\" border-color:#608E34\"><i class=\"las la-at\"></i></span>
                                                                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118), "email", [], "any", false, false, false, 118), "html", null, true);
        echo "\" placeholder=\"Email\" aria-describedby=\"basic-addon1\" style=\" border-color:#608E34\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group mb-3 row\">
                                                            <div class=\"col-lg-9 col-xl-8 offset-lg-3\">
                                                                <button type=\"submit\" class=\"btn btn-primary\" style=\"background-color: #608E34; border-color: #608E34\">Submit</button>
                                                            </div>
                                                        </div>                                                    
                                                    </div>                                            
                                                </div>
                                            </div> <!--end col--> 
                                            <div class=\"col-lg-6 col-xl-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-header\">
                                                        <h4 class=\"card-title\">Change Password</h4>
                                                    </div><!--end card-header-->
                                                    <div class=\"card-body\" > 
                                                        <div class=\"form-group mb-3 row\">
                                                            <label class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\" style=\"border-color:#608E34\">Current Password</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <input class=\"form-control\" type=\"password\" placeholder=\"Password\" style=\" border-color:#608E34\">
                                                                <a href=\"/resetpassword\" class=\"text-muted font-13\"><i class=\"dripicons-lock\"></i> Forgot password?</a> 
                                                            </div>
                                                            
                                                        </div>
                                                        <div class=\"form-group mb-3 row\">
                                                            <label class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\">New Password</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <input class=\"form-control\" type=\"password\" placeholder=\"New Password\" style=\" border-color:#608E34\">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class=\"form-group mb-3 row\">
                                                            <div class=\"col-lg-9 col-xl-8 offset-lg-3\">
                                                                <button type=\"submit\" class=\"btn btn-primary\" style=\"background-color: #608E34; border-color: #608E34\">Change Password</button>
                                                            </div>
                                                        </div>   
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div> <!-- end col -->                                                                              
                                        </div><!--end row-->
                                    </div>
                                </div>        
                            </div> <!--end card-body-->                            
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!-- container -->

            <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"Appearance\" aria-labelledby=\"AppearanceLabel\">
                    <div class=\"offcanvas-header border-bottom\">
                      <h5 class=\"m-0 font-14\" id=\"AppearanceLabel\">Appearance</h5>
                      <button type=\"button\" class=\"btn-close text-reset p-0 m-0 align-self-center\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"offcanvas-body\">  
                        <h6>Account Settings</h6>
                        <div class=\"p-2 text-start mt-3\">
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch1\">
                                <label class=\"form-check-label\" for=\"settings-switch1\">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch2\" checked>
                                <label class=\"form-check-label\" for=\"settings-switch2\">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch3\">
                                <label class=\"form-check-label\" for=\"settings-switch3\">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class=\"p-2 text-start mt-3\">
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch4\">
                                <label class=\"form-check-label\" for=\"settings-switch4\">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch5\" checked>
                                <label class=\"form-check-label\" for=\"settings-switch5\">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch6\">
                                <label class=\"form-check-label\" for=\"settings-switch6\">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->               
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->
                 
                <!--Start Footer-->
                <!-- Footer Start -->
                <footer class=\"footer text-center text-sm-start\">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Business <span class=\"text-muted d-none d-sm-inline-block float-end\">by Bento</span>
                </footer>
                <!-- end Footer -->                
                <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <script src=\"assets/plugins/tobii/tobii.min.js\"></script>
    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
    <script>
        const tobii = new Tobii()
    </script>

    <script type=\"text/javascript\">

            \$(document).ready(function () {
            document.body.classList.toggle('enlarge-menu');
        });
    
    </script>

</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "            <link rel=\"shortcut icon\" href=\"/images/logoheader.jpg\">
            <link href=\"/plugins/metric/dist/assets/plugins/dragula/dragula.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.css\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 16,  327 => 15,  193 => 118,  181 => 109,  153 => 84,  143 => 77,  139 => 76,  130 => 70,  119 => 62,  114 => 60,  75 => 23,  73 => 15,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <title> Business </title>
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
        

    <div class=\"page-wrapper\">

        <!-- Page Content-->


            <div class=\"container-fluid\">
                <!-- Page-Title -->
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"page-title-box\">
                            <div class=\"float-end\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"/index\">Business</a></li>
                                    <li class=\"breadcrumb-item active\">Profile</li>
                                </ol>
                            </div>
                            <h4 class=\"page-title\">Profile</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"met-profile\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 align-self-center mb-3 mb-lg-0\">
                                            <div class=\"met-profile-main\">
                                            <form action=\"/profile/{{ app.user.id }}\" method=\"POST\" enctype=\"multipart/form-data\">
                                                <div class=\"met-profile-main-pic\">
                                                    <img src=\"../uploads/userimg/{{ app.user.photo }}\" alt=\"\" height=\"110\" class=\"rounded-circle\">
                                                    <span class=\"met-profile_main-pic-change\">
                                                        <i class=\"fas fa-camera\">

                                                        </i>
                                                    </span>
                                                </div>
                                                <input type=\"file\" id=\"imageToUpload\" name=\"imageToUpload\">
                                                <input type=\"text\" id=\"UserId\" name=\"UserId\" value=\"{{ app.user.name }}\" hidden>


                                                        <input type=\"submit\" name=\"submit\" value=\"Submit\">
                                                </form>
                                                <div class=\"met-profile_user-detail\">
                                                    <h5 class=\"met-user-name\" style=\"text-transform: capitalize\">{{ app.user.name }}</h5>                                                        
                                                    <p class=\"mb-0 met-user-name-post\">{{ app.user.userRole.role }}</p>                                                        
                                                </div>
                                            </div>                                                
                                        </div><!--end col-->
                                        
                                        <div class=\"col-lg-4 ms-auto align-self-center\">
                                            <ul class=\"list-unstyled personal-detail mb-0\">
                                                <li class=\"mt-2\"><i class=\"las la-envelope text-secondary font-22 align-middle mr-2\"></i> <b> Email </b> : {{ app.user.email }} </li>                                                   
                                            </ul>
                                           </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end f_profile-->                                                                                
                            </div><!--end card-body-->  
                            <div class=\"card-body p-0\">    
                                <!-- Nav tabs -->
                                                                             
                                    <div class=\"tab-pane p-3\" id=\"Settings\" role=\"tabpanel\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6 col-xl-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-header\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col\">                      
                                                                <h4 class=\"card-title\">Personal Information</h4>                      
                                                            </div><!--end col-->                                                       
                                                        </div>  <!--end row-->                                  
                                                    </div><!--end card-header-->
                                                    <div class=\"card-body\">                       
                                                        <div class=\"form-group mb-3 row\">
                                                            <label class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\">Name</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <input class=\"form-control\" type=\"text\" value=\"{{ app.user.name }}\" style=\" border-color:#608E34\">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class=\"form-group mb-3 row\">
                                                            <label class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\">Email Address</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <div class=\"input-group\">
                                                                    <span class=\"input-group-text\" style=\" border-color:#608E34\"><i class=\"las la-at\"></i></span>
                                                                    <input type=\"text\" class=\"form-control\" value=\"{{ app.user.email }}\" placeholder=\"Email\" aria-describedby=\"basic-addon1\" style=\" border-color:#608E34\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group mb-3 row\">
                                                            <div class=\"col-lg-9 col-xl-8 offset-lg-3\">
                                                                <button type=\"submit\" class=\"btn btn-primary\" style=\"background-color: #608E34; border-color: #608E34\">Submit</button>
                                                            </div>
                                                        </div>                                                    
                                                    </div>                                            
                                                </div>
                                            </div> <!--end col--> 
                                            <div class=\"col-lg-6 col-xl-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-header\">
                                                        <h4 class=\"card-title\">Change Password</h4>
                                                    </div><!--end card-header-->
                                                    <div class=\"card-body\" > 
                                                        <div class=\"form-group mb-3 row\">
                                                            <label class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\" style=\"border-color:#608E34\">Current Password</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <input class=\"form-control\" type=\"password\" placeholder=\"Password\" style=\" border-color:#608E34\">
                                                                <a href=\"/resetpassword\" class=\"text-muted font-13\"><i class=\"dripicons-lock\"></i> Forgot password?</a> 
                                                            </div>
                                                            
                                                        </div>
                                                        <div class=\"form-group mb-3 row\">
                                                            <label class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\">New Password</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <input class=\"form-control\" type=\"password\" placeholder=\"New Password\" style=\" border-color:#608E34\">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class=\"form-group mb-3 row\">
                                                            <div class=\"col-lg-9 col-xl-8 offset-lg-3\">
                                                                <button type=\"submit\" class=\"btn btn-primary\" style=\"background-color: #608E34; border-color: #608E34\">Change Password</button>
                                                            </div>
                                                        </div>   
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div> <!-- end col -->                                                                              
                                        </div><!--end row-->
                                    </div>
                                </div>        
                            </div> <!--end card-body-->                            
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!-- container -->

            <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"Appearance\" aria-labelledby=\"AppearanceLabel\">
                    <div class=\"offcanvas-header border-bottom\">
                      <h5 class=\"m-0 font-14\" id=\"AppearanceLabel\">Appearance</h5>
                      <button type=\"button\" class=\"btn-close text-reset p-0 m-0 align-self-center\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"offcanvas-body\">  
                        <h6>Account Settings</h6>
                        <div class=\"p-2 text-start mt-3\">
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch1\">
                                <label class=\"form-check-label\" for=\"settings-switch1\">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch2\" checked>
                                <label class=\"form-check-label\" for=\"settings-switch2\">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch3\">
                                <label class=\"form-check-label\" for=\"settings-switch3\">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class=\"p-2 text-start mt-3\">
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch4\">
                                <label class=\"form-check-label\" for=\"settings-switch4\">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch mb-2\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch5\" checked>
                                <label class=\"form-check-label\" for=\"settings-switch5\">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"settings-switch6\">
                                <label class=\"form-check-label\" for=\"settings-switch6\">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->               
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->
                 
                <!--Start Footer-->
                <!-- Footer Start -->
                <footer class=\"footer text-center text-sm-start\">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Business <span class=\"text-muted d-none d-sm-inline-block float-end\">by Bento</span>
                </footer>
                <!-- end Footer -->                
                <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <script src=\"assets/plugins/tobii/tobii.min.js\"></script>
    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
    <script>
        const tobii = new Tobii()
    </script>

    <script type=\"text/javascript\">

            \$(document).ready(function () {
            document.body.classList.toggle('enlarge-menu');
        });
    
    </script>

</body>

</html>
{% endblock %}
", "profile/index.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\profile\\index.html.twig");
    }
}
