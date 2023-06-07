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

/* reset_password/createpassword.html.twig */
class __TwigTemplate_faa821e6cc078a2d67e912cb23e4ed9a8d38936ff602ff0f7d4c49275a1d8bdd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/createpassword.html.twig"));

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

<body id=\"body\" class=\"auth-page\" style=\"background-image: url('.png'); background-size: cover; background-position: center center;\">
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
                                    <h4 class=\"mt-3 mb-1 fw-semibold text-white font-18\">New Password</h4>   
                                    <p class=\"mb-0\" style=\"color:white\">Create your password!</p>  
                                </div>
                            </div>
                            <div class=\"card-body pt-0\">
                                <form class=\"my-4\" method=\"POST\" action=\"/password/";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\">
                                    <div class=\"form-group mb-3\">
                                        <label class=\"form-label\" for=\"createpassword\">Create password</label>
                                        <input type=\"password\" class=\"form-control\" name=\"createpassword\" style=\"border-color:#608E34\"> </input>
                                        <br>
                                        </div><!--end form-group--> 

                                    <div class=\"form-group mb-0 row\">
                                        <div class=\"col-12\">
                                            <button class=\"btn btn-primary w-100\" type=\"submit\" style=\"background-color:#608E34 ; border-color:#608E34\">Create <i class=\"fas fa-sign-in-alt ms-1\"></i></button>
                                        </div><!--end col--> 
                                    </div> <!--end form-group-->  
                                                          
                                </form><!--end form-->
                                <div class=\"text-center text-muted\">
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
        return "reset_password/createpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 7,  108 => 6,  72 => 34,  50 => 14,  48 => 6,  41 => 1,);
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

<body id=\"body\" class=\"auth-page\" style=\"background-image: url('.png'); background-size: cover; background-position: center center;\">
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
                                    <h4 class=\"mt-3 mb-1 fw-semibold text-white font-18\">New Password</h4>   
                                    <p class=\"mb-0\" style=\"color:white\">Create your password!</p>  
                                </div>
                            </div>
                            <div class=\"card-body pt-0\">
                                <form class=\"my-4\" method=\"POST\" action=\"/password/{{token}}\">
                                    <div class=\"form-group mb-3\">
                                        <label class=\"form-label\" for=\"createpassword\">Create password</label>
                                        <input type=\"password\" class=\"form-control\" name=\"createpassword\" style=\"border-color:#608E34\"> </input>
                                        <br>
                                        </div><!--end form-group--> 

                                    <div class=\"form-group mb-0 row\">
                                        <div class=\"col-12\">
                                            <button class=\"btn btn-primary w-100\" type=\"submit\" style=\"background-color:#608E34 ; border-color:#608E34\">Create <i class=\"fas fa-sign-in-alt ms-1\"></i></button>
                                        </div><!--end col--> 
                                    </div> <!--end form-group-->  
                                                          
                                </form><!--end form-->
                                <div class=\"text-center text-muted\">
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

</html>", "reset_password/createpassword.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\reset_password\\createpassword.html.twig");
    }
}