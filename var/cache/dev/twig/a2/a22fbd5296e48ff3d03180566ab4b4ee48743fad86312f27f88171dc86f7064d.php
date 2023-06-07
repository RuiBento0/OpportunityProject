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

/* security/login.html.twig */
class __TwigTemplate_c287d446cf4008c8e5376887eca95f6b83221bbe923ef96df274ed3b916772ac extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<title> Business </title>
";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
<body id=\"body\" class=\"auth-page card-bg\">
   <!-- Log In page -->
    <div class=\"container-fluid\">
        <div class=\"row vh-100\">
            <div class=\"col-12\">
                <div class=\"card-body p-0\">
                    <div class=\"row d-flex align-items-center\">
                        <div class=\"col-md-5 col-xl-3 col-lg-4\">
                            <div class=\"card mb-0 border-0\">
                                <div class=\"card-body p-0\">
                                    <div class=\"text-center p-3\">
                                        <a href=\"/login\" class=\"logo logo-admin\">
                                            <img src=\"img/CRM2.png\" height=\"50\" alt=\"logo\" class=\"auth-logo\">
                                        </a>
                                        <h4 class=\"mt-3 mb-1 fw-semibold font-18\">Business</h4>   
                                        <p class=\"text-muted  mb-0\">Sign in to continue.</p>  
                                    </div>
                                </div><!--end card-body-->
                                <div class=\"card-body pt-0\">                                    
                                    <form action=\"/login\"class=\"my-4\" method=\"POST\">  
                                        <input class=\"form-control\" style=\"margin-bottom:10px; border-color:#608E34\" 
                                            type=\"email\" 
                                            value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\" 
                                            name=\"email\" 
                                            id=\"inputEmail\" 
                                            class=\"bg-transparent block mt-10 mx-auto border-b-2 w-1/5 h-20 text-2xl outline-none\" 
                                            placeholder=\"Email\"
                                            autocomplete=\"email\" 
                                            required 
                                            autofocus
                                        >



                                        <input class=\"form-control\" style=\"margin-bottom:10px; border-color:#608E34\"
                                            type=\"password\" 
                                            name=\"password\" 
                                            id=\"inputPassword\" 
                                            class=\"bg-transparent block mt-10 mx-auto border-b-2 w-1/5 h-20 text-2xl outline-none\" 
                                            autocomplete=\"current-password\" 
                                            placeholder=\"Password\"
                                            required
                                        >

                                        <input 
                                            type=\"hidden\" 
                                            name=\"_csrf_token\"
                                            value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                        >
            
                                        <div class=\"form-group row mt-3\">
                                            <div class=\"col-sm-6\">
                                               
                                            </div><!--end col--> 
                                            <div class=\"col-sm-6 text-end\">
                                                <a href=\"/resetpassword\" class=\"text-muted font-13\"><i class=\"dripicons-lock\"></i> Forgot password?</a>                                    
                                            </div><!--end col--> 
                                        </div><!--end form-group--> 
            
                                        <div class=\"form-group mb-0 row\" >
                                            <div class=\"col-12\" >
                                                <div class=\"d-grid mt-3\" >
                                                    <button class=\"btn btn-primary\" type=\"submit\" style=\"background-color:#608E34 ; border-color:#608E34\" >Log In <i class=\"fas fa-sign-in-alt ms-1\" ></i></button>
                                                </div>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                    <hr class=\"hr-dashed mt-4\">
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class=\"col-md-7 col-xl-9 col-lg-8  p-0 vh-100 d-flex justify-content-center auth-bg\" style=\"background-size: cover;background-repeat: no-repeat; background-image: url('/img/sss.jpg')\">
                            <div class=\"accountbg d-flex align-items-center\"> 
                               ";
        // line 94
        echo "                            </div><!--end /div-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <!-- App js -->
 ";
        // line 105
        echo "</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "            ";
        // line 6
        echo "            <link href=\"/plugins/metric/dist/assets/plugins/dragula/dragula.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.css\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 6,  173 => 5,  166 => 4,  156 => 105,  145 => 94,  116 => 60,  88 => 35,  63 => 12,  61 => 4,  58 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}
<title> Business </title>
{% block stylesheets %}
            {# <link rel=\"shortcut icon\" href=\"/images/logoheader.jpg\"> #}
            <link href=\"/plugins/metric/dist/assets/plugins/dragula/dragula.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/app.css\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}

<body id=\"body\" class=\"auth-page card-bg\">
   <!-- Log In page -->
    <div class=\"container-fluid\">
        <div class=\"row vh-100\">
            <div class=\"col-12\">
                <div class=\"card-body p-0\">
                    <div class=\"row d-flex align-items-center\">
                        <div class=\"col-md-5 col-xl-3 col-lg-4\">
                            <div class=\"card mb-0 border-0\">
                                <div class=\"card-body p-0\">
                                    <div class=\"text-center p-3\">
                                        <a href=\"/login\" class=\"logo logo-admin\">
                                            <img src=\"img/CRM2.png\" height=\"50\" alt=\"logo\" class=\"auth-logo\">
                                        </a>
                                        <h4 class=\"mt-3 mb-1 fw-semibold font-18\">Business</h4>   
                                        <p class=\"text-muted  mb-0\">Sign in to continue.</p>  
                                    </div>
                                </div><!--end card-body-->
                                <div class=\"card-body pt-0\">                                    
                                    <form action=\"/login\"class=\"my-4\" method=\"POST\">  
                                        <input class=\"form-control\" style=\"margin-bottom:10px; border-color:#608E34\" 
                                            type=\"email\" 
                                            value=\"{{ last_username }}\" 
                                            name=\"email\" 
                                            id=\"inputEmail\" 
                                            class=\"bg-transparent block mt-10 mx-auto border-b-2 w-1/5 h-20 text-2xl outline-none\" 
                                            placeholder=\"Email\"
                                            autocomplete=\"email\" 
                                            required 
                                            autofocus
                                        >



                                        <input class=\"form-control\" style=\"margin-bottom:10px; border-color:#608E34\"
                                            type=\"password\" 
                                            name=\"password\" 
                                            id=\"inputPassword\" 
                                            class=\"bg-transparent block mt-10 mx-auto border-b-2 w-1/5 h-20 text-2xl outline-none\" 
                                            autocomplete=\"current-password\" 
                                            placeholder=\"Password\"
                                            required
                                        >

                                        <input 
                                            type=\"hidden\" 
                                            name=\"_csrf_token\"
                                            value=\"{{ csrf_token('authenticate') }}\"
                                        >
            
                                        <div class=\"form-group row mt-3\">
                                            <div class=\"col-sm-6\">
                                               
                                            </div><!--end col--> 
                                            <div class=\"col-sm-6 text-end\">
                                                <a href=\"/resetpassword\" class=\"text-muted font-13\"><i class=\"dripicons-lock\"></i> Forgot password?</a>                                    
                                            </div><!--end col--> 
                                        </div><!--end form-group--> 
            
                                        <div class=\"form-group mb-0 row\" >
                                            <div class=\"col-12\" >
                                                <div class=\"d-grid mt-3\" >
                                                    <button class=\"btn btn-primary\" type=\"submit\" style=\"background-color:#608E34 ; border-color:#608E34\" >Log In <i class=\"fas fa-sign-in-alt ms-1\" ></i></button>
                                                </div>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                    <hr class=\"hr-dashed mt-4\">
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class=\"col-md-7 col-xl-9 col-lg-8  p-0 vh-100 d-flex justify-content-center auth-bg\" style=\"background-size: cover;background-repeat: no-repeat; background-image: url('/img/sss.jpg')\">
                            <div class=\"accountbg d-flex align-items-center\"> 
                               {#  <div class=\"account-title text-center text-white\">
                                    <img src=\"img/CRM2.png\" alt=\"\" class=\"thumb-sm\">
                                    <h4 class=\"mt-3 text-white\">Welcome To <span class=\"text-warning\">Business</span> </h4>
                                    <h1 class=\"text-white\">Let's Get Started</h1>
                                    <p class=\"font-18 mt-3\">Every contact we have with a customer influences whether or not they´ll come back.</p>
                                    <p class=\"font-18 mt-3\">We have to be great every time or we´ll lose them.</p>
                                    <div class=\"border w-25 mx-auto border-warning\"></div>
                                </div> #}
                            </div><!--end /div-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <!-- App js -->
 {#    <script src=\"assets/js/app.js\"></script>
     #}
</body>

</html>
{% endblock %}", "security/login.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\security\\login.html.twig");
    }
}
