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

/* pdf_generator/accountshow.html.twig */
class __TwigTemplate_912839852a1e5c45c50404895a431cf8d694ea966f6e54c5608fc96784b8ba80 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/accountshow.html.twig"));

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
  <title>Tickets Central</title>
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
  <h1>Accounts Details</h1>
  </div>
  <br>
  <table>
    <tr>
      <td>Id</td>
      <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Created By</td>
      <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 58, $this->source); })()), "createdby", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Created At</td>
      <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 62, $this->source); })()), "createdat", [], "any", false, false, false, 62), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Update By</td>
      <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 66, $this->source); })()), "updatedBy", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Updated At</td>
      <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 70, $this->source); })()), "updatedAt", [], "any", false, false, false, 70), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Departments</td>
      <td>";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 74, $this->source); })()), "departments", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 75
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 75), "html", null, true);
            echo "<br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "</td>
    </tr>
    <tr>
      <td>Description</td>
      <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), "html", null, true);
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
        return "pdf_generator/accountshow.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  165 => 80,  159 => 76,  150 => 75,  146 => 74,  139 => 70,  132 => 66,  125 => 62,  118 => 58,  111 => 54,  104 => 50,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<!DOCTYPE html>
<html>
<head>
  <title>Tickets Central</title>
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
  <h1>Accounts Details</h1>
  </div>
  <br>
  <table>
    <tr>
      <td>Id</td>
      <td>{{ accounts.id }}</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>{{ accounts.name }}</td>
    </tr>
    <tr>
      <td>Created By</td>
      <td>{{ accounts.createdby.name }}</td>
    </tr>
    <tr>
      <td>Created At</td>
      <td>{{ accounts.createdat|date('Y-m-d H:i:s') }}</td>
    </tr>
    <tr>
      <td>Update By</td>
      <td>{{ accounts.updatedBy.name }}</td>
    </tr>
    <tr>
      <td>Updated At</td>
      <td>{{ accounts.updatedAt|date('Y-m-d H:i:s') }}</td>
    </tr>
    <tr>
      <td>Departments</td>
      <td>{% for department in accounts.departments %}
            {{ department.name }}<br>
        {% endfor %}</td>
    </tr>
    <tr>
      <td>Description</td>
      <td>{{ accounts.description }}</td>
    </tr>
  </table>
</body>
</html>

{% endblock %}", "pdf_generator/accountshow.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\pdf_generator\\accountshow.html.twig");
    }
}
