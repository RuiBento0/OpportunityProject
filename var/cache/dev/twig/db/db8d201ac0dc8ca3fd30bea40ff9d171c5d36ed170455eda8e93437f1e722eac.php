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
class __TwigTemplate_d7f753dbe7e94ad8971ebb7270ee004352d8125f73b71977d23faa72e7dd7d80 extends Template
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
<img src=\"https://sosconsultoria.pt/wp-content/uploads/2017/02/header-logo.jpg\"  width=\"120\" height=\"70\" alt=\"Logo\"/>
<img src=\"https://127.0.0.1:8000/img/business.png\"  width=\"120\" height=\"70\" alt=\"Logo\"/>
<body>
  <div id=\"banner\" style=\"margin-top: 20px\">
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 45
            echo "    <tr>
      <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
      <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "name", [], "any", false, false, false, 47), "html", null, true);
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
        // line 53
        echo "    <!-- Add more rows as needed -->
  </table>
</body>
<br>
    <footer class=\"footer text-center text-sm-start\">
              &copy; <script>
                    document.write(new Date().getFullYear())
            </script> Business 
    </footer>
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
        return array (  121 => 53,  109 => 47,  105 => 46,  102 => 45,  98 => 44,  54 => 2,  41 => 1,);
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
<img src=\"https://sosconsultoria.pt/wp-content/uploads/2017/02/header-logo.jpg\"  width=\"120\" height=\"70\" alt=\"Logo\"/>
<img src=\"https://127.0.0.1:8000/img/business.png\"  width=\"120\" height=\"70\" alt=\"Logo\"/>
<body>
  <div id=\"banner\" style=\"margin-top: 20px\">
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
<br>
    <footer class=\"footer text-center text-sm-start\">
              &copy; <script>
                    document.write(new Date().getFullYear())
            </script> Business 
    </footer>
</html>
{% endblock %}", "pdf_generator/accounts.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\pdf_generator\\accounts.html.twig");
    }
}
