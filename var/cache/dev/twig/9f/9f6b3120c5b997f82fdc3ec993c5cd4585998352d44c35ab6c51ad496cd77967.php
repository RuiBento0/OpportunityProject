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

/* accounts/edit.html.twig */
class __TwigTemplate_6953f58dd6604b0fca5281c04ca14c01cb95292b13969873ac9fe280ff53b366 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accounts/edit.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "accounts/edit.html.twig", 1);
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
<div class=\"page-wrapper\">

            <!-- Page Content-->
            ";
        // line 10
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/accounts\">Accounts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Edit </li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Edit ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "</h4>
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
                                                    <label for=\"projectName\" class=\"form-label\">Type</label>
                                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "idtype", [], "any", false, false, false, 43), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Area</label>
                                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "idarea", [], "any", false, false, false, 48), 'row');
        echo "
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">User</label>
                                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "iduser", [], "any", false, false, false, 53), 'row');
        echo "
                                            </div>

                                             <div class=\"col-md-16 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Description</label>
                                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "description", [], "any", false, false, false, 58), 'row');
        echo "
                                            </div>
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
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "departments", [], "any", false, false, false, 74), 'row', ["attr" => ["class" => "custom-checkbox"]]);
        // line 78
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
                        
                            <div class=\"form-group\">
                                <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">Edit</button>                                                                                                                                                                                     
                            </div>                 
                        </div> <!--end col-->                                          
                    </div><!--end row-->

            ";
        // line 137
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), 'form_end');
        echo "
            </form>

<script type=\"text/javascript\">

        \$(document).ready(function () {

            document.body.classList.toggle('enlarge-menu');


            ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phones"]) || array_key_exists("phones", $context) ? $context["phones"] : (function () { throw new RuntimeError('Variable "phones" does not exist.', 147, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 148
            echo "                addInputFieldWithValue(\"phone\", \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "phone", [], "any", false, false, false, 148), "html", null, true);
            echo "\");
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "
            ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["emails"]) || array_key_exists("emails", $context) ? $context["emails"] : (function () { throw new RuntimeError('Variable "emails" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 152
            echo "                addInputFieldWithValue(\"email\", \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "email", [], "any", false, false, false, 152), "html", null, true);
            echo "\");
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "
            ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) || array_key_exists("addresses", $context) ? $context["addresses"] : (function () { throw new RuntimeError('Variable "addresses" does not exist.', 155, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 156
            echo "                AddAdress(\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, false, 156), "html", null, true);
            echo "\" ,\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 156), "html", null, true);
            echo "\" ,\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "postal_code", [], "any", false, false, false, 156), "html", null, true);
            echo "\");
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "          
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

function addInputFieldWithValue(fieldadded, valuetoadd) {

    const CreateInput = document.createElement(\"input\");
    CreateInput.name = fieldadded + '[]';
    if(fieldadded == \"phone\" ){
    CreateInput.classList.add(\"textboxphone\");
    }
    
    if(fieldadded == \"email\" ){
    CreateInput.classList.add(\"textboxemail\");
    }

    if(fieldadded == \"address\" ){
    CreateInputAddress.classList.add(\"textboxaddress\");
    CreateInputCity.classList.add(\"textboxaddress\");
    CreateInputPostalCode.classList.add(\"textboxaddress\");
    }

    CreateInput.value=valuetoadd;

    const container = document.getElementById(\"container\" + fieldadded);
    container.appendChild(CreateInput);
    
    const deleteButton = document.createElement(\"button\");
    deleteButton.classList.add(\"las\");
    deleteButton.classList.add(\"la-trash-alt\");
    deleteButton.classList.add(\"deletebutton\");

    
    deleteButton.addEventListener(\"click\", function() {
        container.removeChild(CreateInput);
        container.removeChild(deleteButton);
    });
    container.appendChild(deleteButton);
}

function AddAdress(fieldAddress, fieldCity, fieldPostalCode) {
    
        const CreateInputAddress = document.createElement(\"input\");
        const CreateInputCity = document.createElement(\"input\");
        const CreateInputPostalCode = document.createElement(\"input\");
        const container = document.getElementById(\"containeraddress\");

        CreateInputAddress.classList.add(\"textboxaddress\");
        CreateInputCity.classList.add(\"textboxaddress\");
        CreateInputPostalCode.classList.add(\"textboxaddress\");

        CreateInputAddress.name = 'address' + 'address' + '[]';
        CreateInputCity.name = 'address' + 'city' + '[]';
        CreateInputPostalCode.name = 'address' + 'postalcode' + '[]';

        CreateInputAddress.placeholder = \"Address\";
        CreateInputCity.placeholder = \"City\";
        CreateInputPostalCode.placeholder = \"Postal Code\";

        CreateInputAddress.value=fieldAddress;
        CreateInputCity.value=fieldCity;
        CreateInputPostalCode.value=fieldPostalCode;

        container.appendChild(CreateInputAddress);
        container.appendChild(CreateInputCity);
        container.appendChild(CreateInputPostalCode);

        const deleteButton = document.createElement(\"button\");
        deleteButton.classList.add(\"las\");
        deleteButton.classList.add(\"la-trash-alt\");
        deleteButton.classList.add(\"deletebutton\");

        deleteButton.addEventListener(\"click\", function() {
        container.removeChild(CreateInput);
        container.removeChild(deleteButton);
        });
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
width: 185px;
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
        return "accounts/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 158,  265 => 156,  261 => 155,  258 => 154,  249 => 152,  245 => 151,  242 => 150,  233 => 148,  229 => 147,  216 => 137,  155 => 78,  153 => 74,  134 => 58,  126 => 53,  118 => 48,  110 => 43,  102 => 38,  86 => 25,  69 => 10,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
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
                                        <li class=\"breadcrumb-item\"><a href=\"/business/accounts\">Accounts</a>
                                        </li><!--end nav-item-->
                                        <li class=\"breadcrumb-item active\">Edit </li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Edit {{ accounts.name }}</h4>
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
                                                    <label for=\"projectName\" class=\"form-label\">Type</label>
                                                    {{ form_row(form.idtype) }}
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Area</label>
                                                    {{ form_row(form.idarea) }}
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">User</label>
                                                    {{ form_row(form.iduser) }}
                                            </div>

                                             <div class=\"col-md-16 mb-3\">
                                                    <label for=\"projectName\" class=\"form-label\">Description</label>
                                                    {{ form_row(form.description) }}
                                            </div>
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
                        
                            <div class=\"form-group\">
                                <button type=\"submit\" style=\"float:right; margin-right:15px\" class=\"btn btn-de-success btn-sm text-light px-4 mt-3 mb-0\">Edit</button>                                                                                                                                                                                     
                            </div>                 
                        </div> <!--end col-->                                          
                    </div><!--end row-->

            {{ form_end(form) }}
            </form>

<script type=\"text/javascript\">

        \$(document).ready(function () {

            document.body.classList.toggle('enlarge-menu');


            {% for phone in phones %}
                addInputFieldWithValue(\"phone\", \"{{ phone.phone }}\");
            {% endfor %}

            {% for email in emails %}
                addInputFieldWithValue(\"email\", \"{{ email.email }}\");
            {% endfor %}

            {% for address in addresses %}
                AddAdress(\"{{ address.address }}\" ,\"{{ address.city }}\" ,\"{{ address.postal_code }}\");
            {% endfor %}
          
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

function addInputFieldWithValue(fieldadded, valuetoadd) {

    const CreateInput = document.createElement(\"input\");
    CreateInput.name = fieldadded + '[]';
    if(fieldadded == \"phone\" ){
    CreateInput.classList.add(\"textboxphone\");
    }
    
    if(fieldadded == \"email\" ){
    CreateInput.classList.add(\"textboxemail\");
    }

    if(fieldadded == \"address\" ){
    CreateInputAddress.classList.add(\"textboxaddress\");
    CreateInputCity.classList.add(\"textboxaddress\");
    CreateInputPostalCode.classList.add(\"textboxaddress\");
    }

    CreateInput.value=valuetoadd;

    const container = document.getElementById(\"container\" + fieldadded);
    container.appendChild(CreateInput);
    
    const deleteButton = document.createElement(\"button\");
    deleteButton.classList.add(\"las\");
    deleteButton.classList.add(\"la-trash-alt\");
    deleteButton.classList.add(\"deletebutton\");

    
    deleteButton.addEventListener(\"click\", function() {
        container.removeChild(CreateInput);
        container.removeChild(deleteButton);
    });
    container.appendChild(deleteButton);
}

function AddAdress(fieldAddress, fieldCity, fieldPostalCode) {
    
        const CreateInputAddress = document.createElement(\"input\");
        const CreateInputCity = document.createElement(\"input\");
        const CreateInputPostalCode = document.createElement(\"input\");
        const container = document.getElementById(\"containeraddress\");

        CreateInputAddress.classList.add(\"textboxaddress\");
        CreateInputCity.classList.add(\"textboxaddress\");
        CreateInputPostalCode.classList.add(\"textboxaddress\");

        CreateInputAddress.name = 'address' + 'address' + '[]';
        CreateInputCity.name = 'address' + 'city' + '[]';
        CreateInputPostalCode.name = 'address' + 'postalcode' + '[]';

        CreateInputAddress.placeholder = \"Address\";
        CreateInputCity.placeholder = \"City\";
        CreateInputPostalCode.placeholder = \"Postal Code\";

        CreateInputAddress.value=fieldAddress;
        CreateInputCity.value=fieldCity;
        CreateInputPostalCode.value=fieldPostalCode;

        container.appendChild(CreateInputAddress);
        container.appendChild(CreateInputCity);
        container.appendChild(CreateInputPostalCode);

        const deleteButton = document.createElement(\"button\");
        deleteButton.classList.add(\"las\");
        deleteButton.classList.add(\"la-trash-alt\");
        deleteButton.classList.add(\"deletebutton\");

        deleteButton.addEventListener(\"click\", function() {
        container.removeChild(CreateInput);
        container.removeChild(deleteButton);
        });
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
width: 185px;
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

{% endblock %}", "accounts/edit.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\accounts\\edit.html.twig");
    }
}
