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

/* pdf_generator/accounts.html.twig */
class __TwigTemplate_f091661fd807352640e25cfc517a3098685e21fdc7eb0458efeb8c7ce597e869 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/accounts.html.twig"));

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
    <h1>Accounts</h1>
  </div>
  <br>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Adress</th>
    </tr>
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 43
            echo "    <tr>
      <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
      <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
      <td>jonas@gmail.com</td>
      <td>1234567890</td>
      <td>Rua do Cão</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    <!-- Add more rows as needed -->
  </table>
</body>
</html>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pdf_generator/accounts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 51,  107 => 45,  103 => 44,  100 => 43,  96 => 42,  54 => 2,  41 => 1,);
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
    <h1>Accounts</h1>
  </div>
  <br>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Adress</th>
    </tr>
{% for account in accounts %}
    <tr>
      <td>{{ account.id }}</td>
      <td>{{ account.name }}</td>
      <td>jonas@gmail.com</td>
      <td>1234567890</td>
      <td>Rua do Cão</td>
    </tr>
{% endfor %}
    <!-- Add more rows as needed -->
  </table>
</body>
</html>



{% endblock %}", "pdf_generator/accounts.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\pdf_generator\\accounts.html.twig");
    }
}
