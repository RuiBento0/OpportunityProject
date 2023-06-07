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

/* pdf_generator/opportunities.html.twig */
class __TwigTemplate_41f84b422f2fa4ac457ff6f89b62c9873783346307bfe8ebff1f1e4f39dfeac4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/opportunities.html.twig"));

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
    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 11px;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <div id=\"banner\">
    <h1>opportunities</h1>
  </div>
  <br>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Account</th>
      <th>User</th>
      <th>Contact</th>
      <th>Stage</th>
      <th>Source</th>
      <th>Department</th>
      <th>Amount</th>
      <th>Probability</th>
      <th>Description</th>
      <th>Close Date</th>
    </tr>
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["opportunity"]) {
            // line 51
            echo "    <tr>
      <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
      <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
      <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunity"], "idaccount", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
      <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunity"], "iduser", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
      <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunity"], "idcontact", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
      <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunity"], "IdStage", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
      <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunity"], "idsource", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
      <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunity"], "iddepartment", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
      <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "amount", [], "any", false, false, false, 60), "html", null, true);
            echo " \$</td>
      <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "probability", [], "any", false, false, false, 61), "html", null, true);
            echo " %</td>
      <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "description", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
      <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "closedate", [], "any", false, false, false, 63), "Y-m-d"), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    <!-- Add more rows as needed -->
  </table>
</body>
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pdf_generator/opportunities.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  164 => 66,  155 => 63,  151 => 62,  147 => 61,  143 => 60,  139 => 59,  135 => 58,  131 => 57,  127 => 56,  123 => 55,  119 => 54,  115 => 53,  111 => 52,  108 => 51,  104 => 50,  54 => 2,  41 => 1,);
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
    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 11px;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <div id=\"banner\">
    <h1>opportunities</h1>
  </div>
  <br>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Account</th>
      <th>User</th>
      <th>Contact</th>
      <th>Stage</th>
      <th>Source</th>
      <th>Department</th>
      <th>Amount</th>
      <th>Probability</th>
      <th>Description</th>
      <th>Close Date</th>
    </tr>
{% for opportunity in opportunities %}
    <tr>
      <td>{{ opportunity.id }}</td>
      <td>{{ opportunity.name }}</td>
      <td>{{ opportunity.idaccount.name }}</td>
      <td>{{ opportunity.iduser.name }}</td>
      <td>{{ opportunity.idcontact.name }}</td>
      <td>{{ opportunity.IdStage.name }}</td>
      <td>{{ opportunity.idsource.name }}</td>
      <td>{{ opportunity.iddepartment.name }}</td>
      <td>{{ opportunity.amount }} \$</td>
      <td>{{ opportunity.probability }} %</td>
      <td>{{ opportunity.description }}</td>
      <td>{{ opportunity.closedate|date('Y-m-d') }}</td>
    </tr>
{% endfor %}
    <!-- Add more rows as needed -->
  </table>
</body>
</html>

{% endblock %}", "pdf_generator/opportunities.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\pdf_generator\\opportunities.html.twig");
    }
}
