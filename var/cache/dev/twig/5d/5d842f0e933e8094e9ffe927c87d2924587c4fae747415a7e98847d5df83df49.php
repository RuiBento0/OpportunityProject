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

/* pdf_generator/contactshow.html.twig */
class __TwigTemplate_abd65cb5378de17089a426e7d18f8d3b48a9c1ff27648abdb8e7c64abd38269d extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/contactshow.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
  <title>Business</title>
  <style>
    #banner {
      background-color: #608E34;
      padding: 5px;
      text-align: center;
      font-size: 12px;
      border-radius: 10px;
      color: white;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    table td, table th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    table th {
      background-color: #f2f2f2;
      font-weight: bold;
    }

    h1 {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<div id=\"banner\">
  <h1>Contacts Details</h1>
  </div>
  <br>
  <table>
    <tr>
      <td>Id</td>
      <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Surname</td>
      <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 58, $this->source); })()), "surname", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Created By</td>
      <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 62, $this->source); })()), "createdby", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Created At</td>
      <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 66, $this->source); })()), "createdat", [], "any", false, false, false, 66), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Update By</td>
      <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 70, $this->source); })()), "updatedBy", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Updated At</td>
      <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 74, $this->source); })()), "updatedAt", [], "any", false, false, false, 74), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    
    <tr>
      <td>Description</td>
      <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 79, $this->source); })()), "description", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
    </tr>
  </table>
</body>
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pdf_generator/contactshow.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  154 => 79,  146 => 74,  139 => 70,  132 => 66,  125 => 62,  118 => 58,  111 => 54,  104 => 50,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<!DOCTYPE html>
<html>
<head>
  <title>Business</title>
  <style>
    #banner {
      background-color: #608E34;
      padding: 5px;
      text-align: center;
      font-size: 12px;
      border-radius: 10px;
      color: white;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    table td, table th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    table th {
      background-color: #f2f2f2;
      font-weight: bold;
    }

    h1 {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<div id=\"banner\">
  <h1>Contacts Details</h1>
  </div>
  <br>
  <table>
    <tr>
      <td>Id</td>
      <td>{{ contacts.id }}</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>{{ contacts.name }}</td>
    </tr>
    <tr>
      <td>Surname</td>
      <td>{{ contacts.surname }}</td>
    </tr>
    <tr>
      <td>Created By</td>
      <td>{{ contacts.createdby.name }}</td>
    </tr>
    <tr>
      <td>Created At</td>
      <td>{{ contacts.createdat|date('Y-m-d H:i:s') }}</td>
    </tr>
    <tr>
      <td>Update By</td>
      <td>{{ contacts.updatedBy.name }}</td>
    </tr>
    <tr>
      <td>Updated At</td>
      <td>{{ contacts.updatedAt|date('Y-m-d H:i:s') }}</td>
    </tr>
    
    <tr>
      <td>Description</td>
      <td>{{ contacts.description }}</td>
    </tr>
  </table>
</body>
</html>

{% endblock %}", "pdf_generator/contactshow.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\pdf_generator\\contactshow.html.twig");
    }
}
