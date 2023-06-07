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

/* pdf_generator/leadshow.html.twig */
class __TwigTemplate_237081cfed7c0e7ec7620103669ae5b39bdf20f5380e55a039abcc4913dd4040 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/leadshow.html.twig"));

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
  <h1>Leads Details</h1>
  </div>
  <br>
  <table>
    <tr>
      <td>Id</td>
      <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Status</td>
      <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 58, $this->source); })()), "idstatus", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Stage</td>
      <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 62, $this->source); })()), "idsource", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Area</td>
      <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 66, $this->source); })()), "idarea", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Department</td>
      <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 70, $this->source); })()), "iddepartment", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Amount</td>
      <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 74, $this->source); })()), "amount", [], "any", false, false, false, 74), "html", null, true);
        echo " \$</td>
    </tr>
    <tr>
      <td>Account</td>
      <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 78, $this->source); })()), "account", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>User</td>
      <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 82, $this->source); })()), "iduser", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Created By</td>
      <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 86, $this->source); })()), "createdby", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Created At</td>
      <td>";
        // line 90
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 90, $this->source); })()), "createdat", [], "any", false, false, false, 90), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Update By</td>
      <td>";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 94, $this->source); })()), "updatedBy", [], "any", false, false, false, 94), "name", [], "any", false, false, false, 94), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Updated At</td>
      <td>";
        // line 98
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 98, $this->source); })()), "updatedAt", [], "any", false, false, false, 98), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    
    <tr>
      <td>Description</td>
      <td>";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 103, $this->source); })()), "description", [], "any", false, false, false, 103), "html", null, true);
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
        return "pdf_generator/leadshow.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 103,  188 => 98,  181 => 94,  174 => 90,  167 => 86,  160 => 82,  153 => 78,  146 => 74,  139 => 70,  132 => 66,  125 => 62,  118 => 58,  111 => 54,  104 => 50,  54 => 2,  41 => 1,);
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
  <h1>Leads Details</h1>
  </div>
  <br>
  <table>
    <tr>
      <td>Id</td>
      <td>{{ leads.id }}</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>{{ leads.name }}</td>
    </tr>
    <tr>
      <td>Status</td>
      <td>{{ leads.idstatus.name }}</td>
    </tr>
    <tr>
      <td>Stage</td>
      <td>{{ leads.idsource.name }}</td>
    </tr>
    <tr>
      <td>Area</td>
      <td>{{ leads.idarea.name }}</td>
    </tr>
    <tr>
      <td>Department</td>
      <td>{{ leads.iddepartment.name }}</td>
    </tr>
    <tr>
      <td>Amount</td>
      <td>{{ leads.amount }} \$</td>
    </tr>
    <tr>
      <td>Account</td>
      <td>{{ leads.account }}</td>
    </tr>
    <tr>
      <td>User</td>
      <td>{{ leads.iduser.name }}</td>
    </tr>
    <tr>
      <td>Created By</td>
      <td>{{ leads.createdby.name }}</td>
    </tr>
    <tr>
      <td>Created At</td>
      <td>{{ leads.createdat|date('Y-m-d H:i:s') }}</td>
    </tr>
    <tr>
      <td>Update By</td>
      <td>{{ leads.updatedBy.name }}</td>
    </tr>
    <tr>
      <td>Updated At</td>
      <td>{{ leads.updatedAt|date('Y-m-d H:i:s') }}</td>
    </tr>
    
    <tr>
      <td>Description</td>
      <td>{{ leads.description }}</td>
    </tr>
  </table>
</body>
</html>

{% endblock %}", "pdf_generator/leadshow.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\pdf_generator\\leadshow.html.twig");
    }
}
