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

/* reset_password/request.html.twig */
class __TwigTemplate_66767f354d7671b3fefd12c511f17caeffa5ea63f5175717608cef102ff67890 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<title> Business </title>
<head>
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body id=\"body\" class=\"auth-page\" style=\"background-image: url('p-1.png'); background-size: cover; background-position: center center;\">
    <!-- Log In page -->
    <div class=\"container\">
        <div class=\"row vh-100 d-flex justify-content-center\">
            <div class=\"col-12 align-self-center\">
                <div class=\"row\">
                    <div class=\"col-lg-5 mx-auto\">
                        <div class=\"card\">
                            <div class=\"card-body p-0 auth-header-box\" style=\"background-color:#608E34 ; border-color:#608E34\">
                                <div class=\"text-center p-3\">
                                    <a href=\"/login\" class=\"logo logo-admin\">
                                        <img src=\"img/CRM2.png\" height=\"50\" alt=\"logo\" class=\"auth-logo\">
                                    </a>
                                    <h4 class=\"mt-3 mb-1 fw-semibold text-white font-18\">Reset Password</h4>   
                                    <p class=\"mb-0\" style=\"color:white\">Enter your Email and instructions will be sent to you!</p>  
                                </div>
                            </div>
                            <div class=\"card-body pt-0\">
                                <form class=\"my-4\" method=\"POST\" action=\"/resetpassword\">
                                    <div class=\"form-group mb-3\">
                                        <label class=\"form-label\" for=\"username\">Email</label>
                                        <input type=\"email\" class=\"form-control\" name=\"email\" style=\"border-color:#608E34\"> </input>
                                        <br>
                                        </div><!--end form-group--> 

                                    <div class=\"form-group mb-0 row\">
                                        <div class=\"col-12\">
                                            <button class=\"btn btn-primary w-100\" type=\"submit\" style=\"background-color:#608E34 ; border-color:#608E34\">Reset <i class=\"fas fa-sign-in-alt ms-1\"></i></button>
                                        </div><!--end col--> 
                                    </div> <!--end form-group-->  
                                                          
                                </form><!--end form-->
                                <div class=\"text-center text-muted\">
                                    <p class=\"mb-1\">Remember It ?  <a href=\"/login\"  style=\"color:#608E34\">Sign in here</a></p>
                                </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
    
</body>

</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
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
        return "reset_password/request.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 7,  106 => 6,  50 => 14,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<title> Business </title>
<head>
{% block stylesheets %}
            <link rel=\"shortcut icon\" href=\"/images/logoheader.jpg\">
            <link href=\"/plugins/metric/dist/assets/plugins/dragula/dragula.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.css\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}
</head>

<body id=\"body\" class=\"auth-page\" style=\"background-image: url('p-1.png'); background-size: cover; background-position: center center;\">
    <!-- Log In page -->
    <div class=\"container\">
        <div class=\"row vh-100 d-flex justify-content-center\">
            <div class=\"col-12 align-self-center\">
                <div class=\"row\">
                    <div class=\"col-lg-5 mx-auto\">
                        <div class=\"card\">
                            <div class=\"card-body p-0 auth-header-box\" style=\"background-color:#608E34 ; border-color:#608E34\">
                                <div class=\"text-center p-3\">
                                    <a href=\"/login\" class=\"logo logo-admin\">
                                        <img src=\"img/CRM2.png\" height=\"50\" alt=\"logo\" class=\"auth-logo\">
                                    </a>
                                    <h4 class=\"mt-3 mb-1 fw-semibold text-white font-18\">Reset Password</h4>   
                                    <p class=\"mb-0\" style=\"color:white\">Enter your Email and instructions will be sent to you!</p>  
                                </div>
                            </div>
                            <div class=\"card-body pt-0\">
                                <form class=\"my-4\" method=\"POST\" action=\"/resetpassword\">
                                    <div class=\"form-group mb-3\">
                                        <label class=\"form-label\" for=\"username\">Email</label>
                                        <input type=\"email\" class=\"form-control\" name=\"email\" style=\"border-color:#608E34\"> </input>
                                        <br>
                                        </div><!--end form-group--> 

                                    <div class=\"form-group mb-0 row\">
                                        <div class=\"col-12\">
                                            <button class=\"btn btn-primary w-100\" type=\"submit\" style=\"background-color:#608E34 ; border-color:#608E34\">Reset <i class=\"fas fa-sign-in-alt ms-1\"></i></button>
                                        </div><!--end col--> 
                                    </div> <!--end form-group-->  
                                                          
                                </form><!--end form-->
                                <div class=\"text-center text-muted\">
                                    <p class=\"mb-1\">Remember It ?  <a href=\"/login\"  style=\"color:#608E34\">Sign in here</a></p>
                                </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
    
</body>

</html>", "reset_password/request.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\reset_password\\request.html.twig");
    }
}
