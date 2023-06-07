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

/* contacts/create.html.twig */
class __TwigTemplate_1dc73c83b3a7fbd10c470aa59f645662532c22d451a62f3df23a71eee6ab3ff9 extends Template
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
        return "./base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/create.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "contacts/create.html.twig", 1);
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
<form method=\"POST\">
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
<div class=\"page-wrapper\">

            <!-- Page Content-->
            ";
        // line 11
        echo "
                <div class=\"container-fluid\">
                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"page-title-box\">
                                <div class=\"float-end\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">Business</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/business/contacts\">Contacts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Create</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\"></h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Surname</label>
                                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "surname", [], "any", false, false, false, 43), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-16 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Description</label>
                                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-16 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">User</label>
                                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "iduser", [], "any", false, false, false, 53), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-16 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Account</label>
                                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "idaccount", [], "any", false, false, false, 58), 'row');
        echo "
                                            </div><!--end col--> 
                                        </div>

                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

                    <div class=\"row\">
                    <div class=\"col-12 col-lg-8 mx-auto\">
                        <div style=\"width:50%; display:inline-block; float:right;margin-left:15px\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div id=\"containerphone\">
                                        <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('phone')\">Add Phone Field</button>
                                    </div> <!--end container-->
                                </div> <!--end card-body-->
                            </div> <!--end card-body-->
                        </div> <!--end col-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                
                                    <div id=\"containeremail\">
                                        <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('email')\">Add Email Field</button>
                                    </div> <!--end container-->
                                </div> <!--end card-body-->
                            </div> <!--end card-body-->
                        
                    </div> <!--end col-->                                          
                </div><!--end row-->

                <div class=\"row\">
                    <div class=\"col-12 col-lg-8 mx-auto\">
                        <div style=\"width:100%; display:inline-block; float:right;margin-left:15px\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div id=\"containeraddress\">
                                        <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('address')\">Add Address Field</button>
                                    </div> <!--end container-->
                                </div> <!--end card-body-->
                            </div> <!--end card-body-->
                        </div> <!--end col-->                        
                    </div> <!--end col-->                                          
                </div><!--end row-->
                            
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"form-group\">
                                <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\" >Back</a>                                                                                           
                            </div>
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), 'rest');
        echo "
                            <div class=\"form-group\">
                                <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">Create</button>                                                                                                                                                                                     
                            </div>                 
                        </div> <!--end col-->                                          
                    </div><!--end row-->
    ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_end');
        echo "
</form>


<script type=\"text/javascript\">

        \$(document).ready(function () {

            document.body.classList.toggle('enlarge-menu');

        });
</script>

<script>
let CreateInputAddress = null;
let CreateInputCity = null;
let CreateInputPostalCode = null;



function addInputField(fieldadded) {
      const container = document.getElementById(\"container\" + fieldadded);
      
      const deleteButton = document.createElement(\"button\");
      deleteButton.classList.add(\"las\");
      deleteButton.classList.add(\"la-trash-alt\");
      deleteButton.classList.add(\"deletebutton\");

      if (fieldadded === \"phone\") {
        const CreateInput = document.createElement(\"input\");
        CreateInput.classList.add(\"textboxphone\");
        CreateInput.name = fieldadded + '[]';
        container.appendChild(CreateInput).placeholder = \"Phone\";
           deleteButton.addEventListener(\"click\", function() {
            container.removeChild(CreateInput);
            container.removeChild(deleteButton);
        });
      }

      if (fieldadded === \"email\") {
        const CreateInput = document.createElement(\"input\");
        CreateInput.classList.add(\"textboxemail\");
        CreateInput.name = fieldadded + '[]';
        container.appendChild(CreateInput).placeholder = \"Email\";
           deleteButton.addEventListener(\"click\", function() {
            container.removeChild(CreateInput);
            container.removeChild(deleteButton);
        });
      }

      if (fieldadded === \"address\") {
        const CreateInputAddress = document.createElement(\"input\");
        const CreateInputCity = document.createElement(\"input\");
        const CreateInputPostalCode = document.createElement(\"input\");

        CreateInputAddress.classList.add(\"textboxaddress\");
        CreateInputCity.classList.add(\"textboxaddress\");
        CreateInputPostalCode.classList.add(\"textboxaddress\");

        CreateInputAddress.name = fieldadded + 'address' + '[]';
        CreateInputCity.name = fieldadded + 'city' + '[]';
        CreateInputPostalCode.name = fieldadded + 'postalcode' + '[]';

        CreateInputAddress.placeholder = \"Address\";
        CreateInputCity.placeholder = \"City\";
        CreateInputPostalCode.placeholder = \"Postal Code\";

        container.appendChild(CreateInputAddress);
        container.appendChild(CreateInputCity);
        container.appendChild(CreateInputPostalCode);

          deleteButton.addEventListener(\"click\", function() {
         
                event.preventDefault();
                container.removeChild(CreateInputAddress);
                container.removeChild(CreateInputCity);
                container.removeChild(CreateInputPostalCode);
                container.removeChild(deleteButton);
        });
      }

      container.appendChild(deleteButton);
    }
</script>

<style>
.deletebutton {
border: none;
outline: none;
background: none;
font-size: 20px;
color: red;
}

.textboxphone{
width: 195px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
}

.textboxemail{
width: 185px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
}

.textboxaddress{
width: 177px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
margin-right: 10px;
display: inline-block;
}

</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contacts/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 115,  185 => 109,  131 => 58,  123 => 53,  115 => 48,  107 => 43,  99 => 38,  70 => 11,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

{% block body %}

<form method=\"POST\">
    {{ form_start(form) }}
<div class=\"page-wrapper\">

            <!-- Page Content-->
            {# <div class=\"page-content-tab\"> #}

                <div class=\"container-fluid\">
                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"page-title-box\">
                                <div class=\"float-end\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">Business</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/business/contacts\">Contacts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Create</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\"></h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Name</label>
                                                    {{ form_row(form.name) }}
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Surname</label>
                                                    {{ form_row(form.surname) }}
                                            </div>

                                            <div class=\"col-md-16 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Description</label>
                                                    {{ form_row(form.description) }}
                                            </div>

                                            <div class=\"col-md-16 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">User</label>
                                                    {{ form_row(form.iduser) }}
                                            </div>

                                            <div class=\"col-md-16 mb-6\">
                                                    <label for=\"projectName\" class=\"form-label\">Account</label>
                                                    {{ form_row(form.idaccount) }}
                                            </div><!--end col--> 
                                        </div>

                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

                    <div class=\"row\">
                    <div class=\"col-12 col-lg-8 mx-auto\">
                        <div style=\"width:50%; display:inline-block; float:right;margin-left:15px\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div id=\"containerphone\">
                                        <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('phone')\">Add Phone Field</button>
                                    </div> <!--end container-->
                                </div> <!--end card-body-->
                            </div> <!--end card-body-->
                        </div> <!--end col-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                
                                    <div id=\"containeremail\">
                                        <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('email')\">Add Email Field</button>
                                    </div> <!--end container-->
                                </div> <!--end card-body-->
                            </div> <!--end card-body-->
                        
                    </div> <!--end col-->                                          
                </div><!--end row-->

                <div class=\"row\">
                    <div class=\"col-12 col-lg-8 mx-auto\">
                        <div style=\"width:100%; display:inline-block; float:right;margin-left:15px\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div id=\"containeraddress\">
                                        <button type=\"button\" style=\"float:right\" class=\"btn btn-de-success btn-sm text-light px-4 mb-0\" onclick=\"addInputField('address')\">Add Address Field</button>
                                    </div> <!--end container-->
                                </div> <!--end card-body-->
                            </div> <!--end card-body-->
                        </div> <!--end col-->                        
                    </div> <!--end col-->                                          
                </div><!--end row-->
                            
                    <div class=\"row\">
                        <div class=\"col-12 col-lg-8 mx-auto\">
                            <div class=\"form-group\">
                                <a style=\"float:right\" class=\"btn btn-de-secondary btn-sm text-light px-4 mt-3 mb-0\" onclick=\"window.history.back()\" >Back</a>                                                                                           
                            </div>
                        {{ form_rest(form)}}
                            <div class=\"form-group\">
                                <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">Create</button>                                                                                                                                                                                     
                            </div>                 
                        </div> <!--end col-->                                          
                    </div><!--end row-->
    {{ form_end(form)}}
</form>


<script type=\"text/javascript\">

        \$(document).ready(function () {

            document.body.classList.toggle('enlarge-menu');

        });
</script>

<script>
let CreateInputAddress = null;
let CreateInputCity = null;
let CreateInputPostalCode = null;



function addInputField(fieldadded) {
      const container = document.getElementById(\"container\" + fieldadded);
      
      const deleteButton = document.createElement(\"button\");
      deleteButton.classList.add(\"las\");
      deleteButton.classList.add(\"la-trash-alt\");
      deleteButton.classList.add(\"deletebutton\");

      if (fieldadded === \"phone\") {
        const CreateInput = document.createElement(\"input\");
        CreateInput.classList.add(\"textboxphone\");
        CreateInput.name = fieldadded + '[]';
        container.appendChild(CreateInput).placeholder = \"Phone\";
           deleteButton.addEventListener(\"click\", function() {
            container.removeChild(CreateInput);
            container.removeChild(deleteButton);
        });
      }

      if (fieldadded === \"email\") {
        const CreateInput = document.createElement(\"input\");
        CreateInput.classList.add(\"textboxemail\");
        CreateInput.name = fieldadded + '[]';
        container.appendChild(CreateInput).placeholder = \"Email\";
           deleteButton.addEventListener(\"click\", function() {
            container.removeChild(CreateInput);
            container.removeChild(deleteButton);
        });
      }

      if (fieldadded === \"address\") {
        const CreateInputAddress = document.createElement(\"input\");
        const CreateInputCity = document.createElement(\"input\");
        const CreateInputPostalCode = document.createElement(\"input\");

        CreateInputAddress.classList.add(\"textboxaddress\");
        CreateInputCity.classList.add(\"textboxaddress\");
        CreateInputPostalCode.classList.add(\"textboxaddress\");

        CreateInputAddress.name = fieldadded + 'address' + '[]';
        CreateInputCity.name = fieldadded + 'city' + '[]';
        CreateInputPostalCode.name = fieldadded + 'postalcode' + '[]';

        CreateInputAddress.placeholder = \"Address\";
        CreateInputCity.placeholder = \"City\";
        CreateInputPostalCode.placeholder = \"Postal Code\";

        container.appendChild(CreateInputAddress);
        container.appendChild(CreateInputCity);
        container.appendChild(CreateInputPostalCode);

          deleteButton.addEventListener(\"click\", function() {
         
                event.preventDefault();
                container.removeChild(CreateInputAddress);
                container.removeChild(CreateInputCity);
                container.removeChild(CreateInputPostalCode);
                container.removeChild(deleteButton);
        });
      }

      container.appendChild(deleteButton);
    }
</script>

<style>
.deletebutton {
border: none;
outline: none;
background: none;
font-size: 20px;
color: red;
}

.textboxphone{
width: 195px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
}

.textboxemail{
width: 185px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
}

.textboxaddress{
width: 177px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
margin-right: 10px;
display: inline-block;
}

</style>

{% endblock %}", "contacts/create.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\contacts\\create.html.twig");
    }
}
