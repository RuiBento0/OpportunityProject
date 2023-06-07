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

/* accounts/create.html.twig */
class __TwigTemplate_ce6023a2874444318b596ecda10ca14f2bd1396e19437a84158ac6d9ed5357d4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accounts/create.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "accounts/create.html.twig", 1);
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
        echo "<form method=\"POST\">
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"page-title-box\">
                                <div class=\"float-end\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">Business</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/business/accounts\">Accounts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Create</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Create Account</h4>
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
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), 'row');
        echo "
                                            </div>
                                        </div>
                                        
                                        <div class=\"form-group row\">
                                            <div class=\"col-lg-4 col-6\">
                                                <label class=\"form-label mt-2\" for=\"pro-end-date\">User</label>
                                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "iduser", [], "any", false, false, false, 37), 'row');
        echo "
                                            </div><!--end col--> 
                                        
                                            <div class=\"col-lg-4 col-6\">
                                                <label class=\"form-label mt-2\" for=\"pro-end-date\">Type</label>
                                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "idtype", [], "any", false, false, false, 42), 'row');
        echo "
                                            </div><!--end col--> 
                                        
                                            <div class=\"col-lg-4 col-6\">
                                                <label class=\"form-label mt-2\" for=\"pro-end-date\">Area</label>
                                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "idarea", [], "any", false, false, false, 47), 'row');
        echo "
                                            </div><!--end col--> 

                                        </div>

                                         <div class=\"form-group row\">
                                            <div class=\"col-lg-12 col-6\">
                                                <label class=\"form-label mt-2\" for=\"pro-end-date\"></label>
                                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "description", [], "any", false, false, false, 55), 'row');
        echo "
                                            </div><!--end col--> 
                                        </div>

                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

                    <div class=\"row\">
                    <div class=\"col-12 col-lg-8 mx-auto\">
                        <div style=\"width:100%; display:inline-block; float:right;margin-left:15px\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"col-lg-4 col-6\">
                                        <div class=\"checkbox-row\">
                                            <label class=\"form-label mt-2\" for=\"pro-end-date\">Departments</label>
                                             ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "departments", [], "any", false, false, false, 72), 'row', ["attr" => ["class" => "custom-checkbox"]]);
        // line 76
        echo "
                                        </div>
                                    </div> <!--end container-->
                                </div> <!--end card-body-->
                            </div> <!--end card-body-->
                        </div> <!--end col-->                        
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
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'rest');
        echo "
                            <div class=\"form-group\">
                                <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">Create</button>                                                                                                                                                                                     
                            </div>                 
                        </div> <!--end col-->                                          
                    </div><!--end row-->
    ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), 'form_end');
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
width: 210px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
}

.textboxemail{
width: 195px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
}

.textboxaddress{
width: 190px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
margin-right: 10px;
display: inline-block;
}

.custom-checkbox input[type=\"checkbox\"] {
    position: absolute;
    opacity: 0;
}

.custom-checkbox label {
    position: relative;
    padding-left: 25px;x
    cursor: pointer;
    display: inline-block;
    margin-bottom: 10px;
    width: 40%;
}

.custom-checkbox label:before {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    width: 20px;
    height: 20px;
    border: 2px solid #ccc;
    background-color: #fff;
    border-radius: 4px;
}

.custom-checkbox input[type=\"checkbox\"]:checked + label:before {
    background-color: #688c34;
    border-color: #688c34;
}

.custom-checkbox label:after {
    content: \"✔\";
    position: absolute;
    top: -1px;
    left: 3px;
    font-size: 16px;
    color: #fff;
    display: none;
}

.custom-checkbox input[type=\"checkbox\"]:checked + label:after {
    display: block;
}


</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "accounts/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 133,  202 => 127,  149 => 76,  147 => 72,  127 => 55,  116 => 47,  108 => 42,  100 => 37,  90 => 30,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

{% block body %}
<form method=\"POST\">
    {{ form_start(form) }}
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"page-title-box\">
                                <div class=\"float-end\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"/index\">Business</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item\"><a href=\"/business/accounts\">Accounts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Create</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Create Account</h4>
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
                                        </div>
                                        
                                        <div class=\"form-group row\">
                                            <div class=\"col-lg-4 col-6\">
                                                <label class=\"form-label mt-2\" for=\"pro-end-date\">User</label>
                                                {{ form_row(form.iduser) }}
                                            </div><!--end col--> 
                                        
                                            <div class=\"col-lg-4 col-6\">
                                                <label class=\"form-label mt-2\" for=\"pro-end-date\">Type</label>
                                                {{ form_row(form.idtype) }}
                                            </div><!--end col--> 
                                        
                                            <div class=\"col-lg-4 col-6\">
                                                <label class=\"form-label mt-2\" for=\"pro-end-date\">Area</label>
                                                {{ form_row(form.idarea) }}
                                            </div><!--end col--> 

                                        </div>

                                         <div class=\"form-group row\">
                                            <div class=\"col-lg-12 col-6\">
                                                <label class=\"form-label mt-2\" for=\"pro-end-date\"></label>
                                                {{ form_row(form.description) }}
                                            </div><!--end col--> 
                                        </div>

                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

                    <div class=\"row\">
                    <div class=\"col-12 col-lg-8 mx-auto\">
                        <div style=\"width:100%; display:inline-block; float:right;margin-left:15px\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"col-lg-4 col-6\">
                                        <div class=\"checkbox-row\">
                                            <label class=\"form-label mt-2\" for=\"pro-end-date\">Departments</label>
                                             {{ form_row(form.departments, {
                                                        'attr': {
                                                            'class': 'custom-checkbox',
                                                        }
                                            }) }}
                                        </div>
                                    </div> <!--end container-->
                                </div> <!--end card-body-->
                            </div> <!--end card-body-->
                        </div> <!--end col-->                        
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
width: 210px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
}

.textboxemail{
width: 195px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
}

.textboxaddress{
width: 190px;
height: 30px;
padding: 5px;
border: 1px solid #e8ebf3;
border-radius: 4px;
margin-bottom: 5px;
font-size: .8125rem;
margin-right: 10px;
display: inline-block;
}

.custom-checkbox input[type=\"checkbox\"] {
    position: absolute;
    opacity: 0;
}

.custom-checkbox label {
    position: relative;
    padding-left: 25px;x
    cursor: pointer;
    display: inline-block;
    margin-bottom: 10px;
    width: 40%;
}

.custom-checkbox label:before {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    width: 20px;
    height: 20px;
    border: 2px solid #ccc;
    background-color: #fff;
    border-radius: 4px;
}

.custom-checkbox input[type=\"checkbox\"]:checked + label:before {
    background-color: #688c34;
    border-color: #688c34;
}

.custom-checkbox label:after {
    content: \"✔\";
    position: absolute;
    top: -1px;
    left: 3px;
    font-size: 16px;
    color: #fff;
    display: none;
}

.custom-checkbox input[type=\"checkbox\"]:checked + label:after {
    display: block;
}


</style>

{% endblock %}", "accounts/create.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\accounts\\create.html.twig");
    }
}
