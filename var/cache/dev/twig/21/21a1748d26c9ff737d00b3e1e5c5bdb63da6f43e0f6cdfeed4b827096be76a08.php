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

/* pdf_generator/contacts.html.twig */
class __TwigTemplate_9d32706b4dc59ae8870c226a7b06b7977c793e7374545af4fb238c2533664d72 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/contacts.html.twig"));

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
    <h1>Contacts</h1>
  </div>
  <br>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone Number</th>
    </tr>
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 42
            echo "    <tr>
      <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
      <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
      <td>jonas@gmail.com</td>
      <td>1234567890</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    <!-- Add more rows as needed -->
  </table>
</body>
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pdf_generator/contacts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  106 => 44,  102 => 43,  99 => 42,  95 => 41,  54 => 2,  41 => 1,);
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
    <h1>Contacts</h1>
  </div>
  <br>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone Number</th>
    </tr>
{% for contact in contacts %}
    <tr>
      <td>{{ contact.id }}</td>
      <td>{{ contact.name }}</td>
      <td>jonas@gmail.com</td>
      <td>1234567890</td>
    </tr>
{% endfor %}
    <!-- Add more rows as needed -->
  </table>
</body>
</html>

{% endblock %}", "pdf_generator/contacts.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\pdf_generator\\contacts.html.twig");
    }
}
