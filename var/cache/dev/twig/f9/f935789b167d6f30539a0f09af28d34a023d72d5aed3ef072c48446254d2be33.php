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

/* pdf_generator/opportunitieshow.html.twig */
class __TwigTemplate_b9442f32b2db541cb09f235dc5e554105473ab49155a921e663a068b63eccfc1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/opportunitieshow.html.twig"));

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
  <h1>opportunities Details</h1>
  </div>
  <br>
  <table>
    <tr>
      <td>Id</td>
      <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Probability</td>
      <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 58, $this->source); })()), "probability", [], "any", false, false, false, 58), "html", null, true);
        echo " %</td>
    </tr>
    <tr>
      <td>Stage</td>
      <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 62, $this->source); })()), "idsource", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Account</td>
      <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 66, $this->source); })()), "idaccount", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>User</td>
      <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 70, $this->source); })()), "iduser", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Contact</td>
      <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 74, $this->source); })()), "idcontact", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Created By</td>
      <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 78, $this->source); })()), "createdby", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Created At</td>
      <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 82, $this->source); })()), "createdat", [], "any", false, false, false, 82), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Update By</td>
      <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 86, $this->source); })()), "updatedBy", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>Updated At</td>
      <td>";
        // line 90
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 90, $this->source); })()), "updatedAt", [], "any", false, false, false, 90), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    
    <tr>
      <td>Description</td>
      <td>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 95, $this->source); })()), "description", [], "any", false, false, false, 95), "html", null, true);
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
        return "pdf_generator/opportunitieshow.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  182 => 95,  174 => 90,  167 => 86,  160 => 82,  153 => 78,  146 => 74,  139 => 70,  132 => 66,  125 => 62,  118 => 58,  111 => 54,  104 => 50,  54 => 2,  41 => 1,);
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
  <h1>opportunities Details</h1>
  </div>
  <br>
  <table>
    <tr>
      <td>Id</td>
      <td>{{ opportunities.id }}</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>{{ opportunities.name }}</td>
    </tr>
    <tr>
      <td>Probability</td>
      <td>{{ opportunities.probability }} %</td>
    </tr>
    <tr>
      <td>Stage</td>
      <td>{{ opportunities.idsource.name }}</td>
    </tr>
    <tr>
      <td>Account</td>
      <td>{{ opportunities.idaccount.name }}</td>
    </tr>
    <tr>
      <td>User</td>
      <td>{{ opportunities.iduser.name }}</td>
    </tr>
    <tr>
      <td>Contact</td>
      <td>{{ opportunities.idcontact.name }}</td>
    </tr>
    <tr>
      <td>Created By</td>
      <td>{{ opportunities.createdby.name }}</td>
    </tr>
    <tr>
      <td>Created At</td>
      <td>{{ opportunities.createdat|date('Y-m-d H:i:s') }}</td>
    </tr>
    <tr>
      <td>Update By</td>
      <td>{{ opportunities.updatedBy.name }}</td>
    </tr>
    <tr>
      <td>Updated At</td>
      <td>{{ opportunities.updatedAt|date('Y-m-d H:i:s') }}</td>
    </tr>
    
    <tr>
      <td>Description</td>
      <td>{{ opportunities.description }}</td>
    </tr>
  </table>
</body>
</html>

{% endblock %}", "pdf_generator/opportunitieshow.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\pdf_generator\\opportunitieshow.html.twig");
    }
}
