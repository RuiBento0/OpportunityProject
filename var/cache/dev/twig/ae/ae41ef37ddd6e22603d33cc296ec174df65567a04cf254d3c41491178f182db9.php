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
class __TwigTemplate_8988dcc949d3455dd2034ceb87ab25b53a41fea1038d39e772645ee2d158adda extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/createpassword.html.twig"));

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
                                    <h4 class=\"mt-3 mb-1 fw-semibold text-white font-18\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New Password", [], "messages");
        echo "</h4>   
                                    <p class=\"mb-0\" style=\"color:white\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create your password!", [], "messages");
        echo "</p>  
                                </div>
                            </div>
                            <div class=\"card-body pt-0\">
                                <form class=\"my-4\" method=\"POST\" action=\"/password/";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\">
                                    <div class=\"form-group mb-3\">
                                        <label class=\"form-label\" for=\"createpassword\">";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create password", [], "messages");
        echo "</label>
                                        <input type=\"password\" class=\"form-control\" name=\"createpassword\" style=\"border-color:#608E34\"> </input>
                                        <br>
                                        </div><!--end form-group--> 

                                    <div class=\"form-group mb-0 row\">
                                        <div class=\"col-12\">
                                            <button class=\"btn btn-primary w-100\" type=\"submit\" style=\"background-color:#608E34 ; border-color:#608E34\">";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create", [], "messages");
        echo "<i class=\"fas fa-sign-in-alt ms-1\"></i></button>
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  136 => 7,  126 => 6,  96 => 43,  86 => 36,  81 => 34,  74 => 30,  70 => 29,  53 => 14,  51 => 6,  44 => 1,);
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
                                    <h4 class=\"mt-3 mb-1 fw-semibold text-white font-18\">{% trans %}New Password{% endtrans %}</h4>   
                                    <p class=\"mb-0\" style=\"color:white\">{% trans %}Create your password!{% endtrans %}</p>  
                                </div>
                            </div>
                            <div class=\"card-body pt-0\">
                                <form class=\"my-4\" method=\"POST\" action=\"/password/{{token}}\">
                                    <div class=\"form-group mb-3\">
                                        <label class=\"form-label\" for=\"createpassword\">{% trans %}Create password{% endtrans %}</label>
                                        <input type=\"password\" class=\"form-control\" name=\"createpassword\" style=\"border-color:#608E34\"> </input>
                                        <br>
                                        </div><!--end form-group--> 

                                    <div class=\"form-group mb-0 row\">
                                        <div class=\"col-12\">
                                            <button class=\"btn btn-primary w-100\" type=\"submit\" style=\"background-color:#608E34 ; border-color:#608E34\">{% trans %}Create{% endtrans %}<i class=\"fas fa-sign-in-alt ms-1\"></i></button>
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
