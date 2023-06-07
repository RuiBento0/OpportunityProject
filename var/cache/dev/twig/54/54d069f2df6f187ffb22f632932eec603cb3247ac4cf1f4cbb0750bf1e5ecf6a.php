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
class __TwigTemplate_ccf9253a2eacbb5691da916d1a904f7df189e91475e7000520c113d77263dcee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
<script type=\"text/javascript\">
    \$(document).ready(function () {
        document.body.classList.toggle('enlarge-menu');

        \$('#imageToUpload').change(function () {
            var fileName = \$(this).val().split('\\\\').pop();
            \$('#removeFileButton').show();
            \$('#removeSubmitButton').show();

            // Get the selected file
            var file = \$(this)[0].files[0];

            // Create a FileReader to read the image file
            var reader = new FileReader();

            // Set the callback function when the file is loaded
            reader.onload = function (e) {
                // Update the image source with the new file data
                \$('#profilePicture').attr('src', e.target.result);
            };

            // Read the image file as a data URL
            reader.readAsDataURL(file);
        });

        \$('#removeFileButton').click(function () {
            \$('#imageToUpload').val('');
            \$('#removeFileButton').hide();
            \$('#removeSubmitButton').hide();

            // Reset the image source to the default image URL
            \$('#profilePicture').attr('src', '../uploads/userimg/";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "photo", [], "any", false, false, false, 36), "html", null, true);
        echo "');
        });
    });
</script>


    <body id=\"body\">
        

    <div class=\"page-wrapper\">

        <!-- Page Content-->
        <div class=\"page-content-tab\">

            <div class=\"container-fluid\">
                <!-- Page-Title -->

                <!-- end page title end breadcrumb -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"met-profile\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 align-self-center mb-lg-0\">
                                            <div class=\"met-profile-main\">
                                                 <form action=\"/profile/";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                                                     <div class=\"met-profile-main-pic\">
                                                         <img src=\"../uploads/userimg/";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "photo", [], "any", false, false, false, 64), "html", null, true);
        echo "\" alt=\"\" height=\"110\" class=\"rounded-circle\" id=\"profilePicture\">
                                                         <label for=\"imageToUpload\" class=\"met-profile_main-pic-change\">
                                                             <i class=\"fas fa-camera\"></i>
                                                         </label>
                                                     </div>

                                                     <input type=\"file\" id=\"imageToUpload\" name=\"imageToUpload\" class=\"custom-file-input\">
                                                     <button type=\"submit\" id=\"removeSubmitButton\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 remove-file-button\">Submit</button>
                                                     <button type=\"button\" id=\"removeFileButton\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 remove-file-button\">Remove</button>
                                                     <input type=\"text\" id=\"UserId\" name=\"UserId\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
        echo "\" hidden>
                                                 </form>
                                                <div class=\"met-profile_user-detail\">
                                                    <h5 class=\"met-user-name\" style=\"text-transform: capitalize;\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76), "html", null, true);
        echo "</h5> 
                                                    <p class=\"mb-0 met-user-name-post\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "userRole", [], "any", false, false, false, 77), "role", [], "any", false, false, false, 77), "html", null, true);
        echo "</p> <br>                                             
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
                                                    <form action=\"/profile/";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107), "html", null, true);
        echo "\" method=\"POST\">                       
                                                        <div class=\"form-group mb-3 row\">
                                                            <label class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\">Name</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "html", null, true);
        echo "\" style=\" border-color:#608E34\">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class=\"form-group mb-3 row\">
                                                            <label class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\">Email Address</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <div class=\"input-group\">
                                                                    <span class=\"input-group-text\" style=\" border-color:#608E34\"><i class=\"las la-at\"></i></span>
                                                                    <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "email", [], "any", false, false, false, 120), "html", null, true);
        echo "\" placeholder=\"Email\" aria-describedby=\"basic-addon1\" style=\" border-color:#608E34\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group mb-3 row\">
                                                            <div class=\"col-lg-9 col-xl-8 offset-lg-3\">
                                                                <button type=\"submit\" class=\"btn btn-primary\" style=\"background-color: #608E34; border-color: #608E34\">Submit</button>
                                                            </div>
                                                        </div>
                                                        </form>                                                  
                                                    </div>                                            
                                                </div>
                                            </div> <!--end col--> 
                                            <div class=\"col-lg-6 col-xl-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-header\">
                                                        <h4 class=\"card-title\">Change Password</h4>
                                                    </div><!--end card-header-->
                                                    <div class=\"card-body\" >
                                                    <form action=\"/profile/";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139), "html", null, true);
        echo "\" method=\"POST\">
                                                        <div class=\"form-group mb-3 row\">
                                                            <label  class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\" style=\"border-color:#608E34\">Current Password</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <input name=\"passwordOld\" id=\"passwordOld\" class=\"form-control\" type=\"password\" placeholder=\"Password\" style=\" border-color:#608E34\">
                                                                <a href=\"/resetpassword\" class=\"text-muted font-13\"><i class=\"dripicons-lock\"></i> Forgot password?</a> 
                                                            </div>
                                                            
                                                        </div>
                                                        <div class=\"form-group mb-3 row\">
                                                            <label class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\">New Password</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <input name=\"passwordNew\" id=\"passwordNew\" class=\"form-control\" type=\"password\" placeholder=\"New Password\" style=\" border-color:#608E34\">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class=\"form-group mb-3 row\">
                                                            <div class=\"col-lg-9 col-xl-8 offset-lg-3\">
                                                                <button type=\"submit\" class=\"btn btn-primary\" style=\"background-color: #608E34; border-color: #608E34\">Change Password</button>
                                                            </div>
                                                        </div>
                                                        </form>
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
                
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <script src=\"assets/plugins/tobii/tobii.min.js\"></script>
    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>

</body>

</html>

<style>
    .custom-file-input {
        display: none;
    }

    .remove-file-button {
        display: none;
        margin-left: 10px;
    }
    
</style>
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
        return array (  226 => 139,  204 => 120,  192 => 111,  185 => 107,  159 => 84,  149 => 77,  145 => 76,  139 => 73,  127 => 64,  122 => 62,  93 => 36,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<script type=\"text/javascript\">
    \$(document).ready(function () {
        document.body.classList.toggle('enlarge-menu');

        \$('#imageToUpload').change(function () {
            var fileName = \$(this).val().split('\\\\').pop();
            \$('#removeFileButton').show();
            \$('#removeSubmitButton').show();

            // Get the selected file
            var file = \$(this)[0].files[0];

            // Create a FileReader to read the image file
            var reader = new FileReader();

            // Set the callback function when the file is loaded
            reader.onload = function (e) {
                // Update the image source with the new file data
                \$('#profilePicture').attr('src', e.target.result);
            };

            // Read the image file as a data URL
            reader.readAsDataURL(file);
        });

        \$('#removeFileButton').click(function () {
            \$('#imageToUpload').val('');
            \$('#removeFileButton').hide();
            \$('#removeSubmitButton').hide();

            // Reset the image source to the default image URL
            \$('#profilePicture').attr('src', '../uploads/userimg/{{ app.user.photo }}');
        });
    });
</script>


    <body id=\"body\">
        

    <div class=\"page-wrapper\">

        <!-- Page Content-->
        <div class=\"page-content-tab\">

            <div class=\"container-fluid\">
                <!-- Page-Title -->

                <!-- end page title end breadcrumb -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"met-profile\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 align-self-center mb-lg-0\">
                                            <div class=\"met-profile-main\">
                                                 <form action=\"/profile/{{ app.user.id }}\" method=\"POST\" enctype=\"multipart/form-data\">
                                                     <div class=\"met-profile-main-pic\">
                                                         <img src=\"../uploads/userimg/{{ app.user.photo }}\" alt=\"\" height=\"110\" class=\"rounded-circle\" id=\"profilePicture\">
                                                         <label for=\"imageToUpload\" class=\"met-profile_main-pic-change\">
                                                             <i class=\"fas fa-camera\"></i>
                                                         </label>
                                                     </div>

                                                     <input type=\"file\" id=\"imageToUpload\" name=\"imageToUpload\" class=\"custom-file-input\">
                                                     <button type=\"submit\" id=\"removeSubmitButton\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 remove-file-button\">Submit</button>
                                                     <button type=\"button\" id=\"removeFileButton\" class=\"btn btn-de-danger btn-sm text-light px-4 mt-3 remove-file-button\">Remove</button>
                                                     <input type=\"text\" id=\"UserId\" name=\"UserId\" value=\"{{ app.user.name }}\" hidden>
                                                 </form>
                                                <div class=\"met-profile_user-detail\">
                                                    <h5 class=\"met-user-name\" style=\"text-transform: capitalize;\">{{ app.user.name }}</h5> 
                                                    <p class=\"mb-0 met-user-name-post\">{{ app.user.userRole.role }}</p> <br>                                             
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
                                                    <form action=\"/profile/{{ app.user.id }}\" method=\"POST\">                       
                                                        <div class=\"form-group mb-3 row\">
                                                            <label class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\">Name</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" value=\"{{ app.user.name }}\" style=\" border-color:#608E34\">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class=\"form-group mb-3 row\">
                                                            <label class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\">Email Address</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <div class=\"input-group\">
                                                                    <span class=\"input-group-text\" style=\" border-color:#608E34\"><i class=\"las la-at\"></i></span>
                                                                    <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" value=\"{{ app.user.email }}\" placeholder=\"Email\" aria-describedby=\"basic-addon1\" style=\" border-color:#608E34\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group mb-3 row\">
                                                            <div class=\"col-lg-9 col-xl-8 offset-lg-3\">
                                                                <button type=\"submit\" class=\"btn btn-primary\" style=\"background-color: #608E34; border-color: #608E34\">Submit</button>
                                                            </div>
                                                        </div>
                                                        </form>                                                  
                                                    </div>                                            
                                                </div>
                                            </div> <!--end col--> 
                                            <div class=\"col-lg-6 col-xl-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-header\">
                                                        <h4 class=\"card-title\">Change Password</h4>
                                                    </div><!--end card-header-->
                                                    <div class=\"card-body\" >
                                                    <form action=\"/profile/{{ app.user.id }}\" method=\"POST\">
                                                        <div class=\"form-group mb-3 row\">
                                                            <label  class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\" style=\"border-color:#608E34\">Current Password</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <input name=\"passwordOld\" id=\"passwordOld\" class=\"form-control\" type=\"password\" placeholder=\"Password\" style=\" border-color:#608E34\">
                                                                <a href=\"/resetpassword\" class=\"text-muted font-13\"><i class=\"dripicons-lock\"></i> Forgot password?</a> 
                                                            </div>
                                                            
                                                        </div>
                                                        <div class=\"form-group mb-3 row\">
                                                            <label class=\"col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label\">New Password</label>
                                                            <div class=\"col-lg-9 col-xl-8\">
                                                                <input name=\"passwordNew\" id=\"passwordNew\" class=\"form-control\" type=\"password\" placeholder=\"New Password\" style=\" border-color:#608E34\">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class=\"form-group mb-3 row\">
                                                            <div class=\"col-lg-9 col-xl-8 offset-lg-3\">
                                                                <button type=\"submit\" class=\"btn btn-primary\" style=\"background-color: #608E34; border-color: #608E34\">Change Password</button>
                                                            </div>
                                                        </div>
                                                        </form>
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
                
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <script src=\"assets/plugins/tobii/tobii.min.js\"></script>
    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>

</body>

</html>

<style>
    .custom-file-input {
        display: none;
    }

    .remove-file-button {
        display: none;
        margin-left: 10px;
    }
    
</style>
{% endblock %}
", "profile/index.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\profile\\index.html.twig");
    }
}
