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

/* pdf_generator/leads.html.twig */
class __TwigTemplate_20e9e816b11b79dc91118f0af6b1ee8afcb70a9d94daf745200626842dd7090c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/leads.html.twig"));

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
      font-size: 15px;
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
    <h1>Leads</h1>
  </div>
  <br>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Account</th>
      <th>User</th>
      <th>Area</th>
      <th>Status</th>
      <th>Source</th>
      <th>Department</th>
      <th>Amount</th>
      <th>Description</th>
    </tr>
";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 49
            echo "    <tr>
      <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
      <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "name", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
      <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "account", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
      <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "iduser", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
      <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "idarea", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
      <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "idstatus", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
      <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "idsource", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
      <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "iddepartment", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
      <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "amount", [], "any", false, false, false, 58), "html", null, true);
            echo " \$</td>
      <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "description", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    <!-- Add more rows as needed -->
  </table>
</body>
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pdf_generator/leads.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  154 => 62,  145 => 59,  141 => 58,  137 => 57,  133 => 56,  129 => 55,  125 => 54,  121 => 53,  117 => 52,  113 => 51,  109 => 50,  106 => 49,  102 => 48,  54 => 2,  41 => 1,);
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
      font-size: 15px;
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
    <h1>Leads</h1>
  </div>
  <br>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Account</th>
      <th>User</th>
      <th>Area</th>
      <th>Status</th>
      <th>Source</th>
      <th>Department</th>
      <th>Amount</th>
      <th>Description</th>
    </tr>
{% for lead in leads %}
    <tr>
      <td>{{ lead.id }}</td>
      <td>{{ lead.name }}</td>
      <td>{{ lead.account }}</td>
      <td>{{ lead.iduser.name }}</td>
      <td>{{ lead.idarea.name }}</td>
      <td>{{ lead.idstatus.name }}</td>
      <td>{{ lead.idsource.name }}</td>
      <td>{{ lead.iddepartment.name }}</td>
      <td>{{ lead.amount }} \$</td>
      <td>{{ lead.description }}</td>
    </tr>
{% endfor %}
    <!-- Add more rows as needed -->
  </table>
</body>
</html>

{% endblock %}", "pdf_generator/leads.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\pdf_generator\\leads.html.twig");
    }
}
