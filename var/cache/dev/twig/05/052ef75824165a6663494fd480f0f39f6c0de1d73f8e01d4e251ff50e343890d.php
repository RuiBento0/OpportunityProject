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
class __TwigTemplate_258cc84e18ef10308b5f623dc173268c4a9c0bdfb8177a31108e3a4ec93d8d40 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/contactshow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/contactshow.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\"  width=\"80\" alt=\"Logo\"/>
<body>
<div id=\"banner\">
  <h1>";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contacts Details", [], "messages");
        echo "</h1>
  </div>
  <br>
  <table>
    <tr>
      <td>Id</td>
      <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</td>
      <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Surname", [], "messages");
        echo "</td>
      <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 59, $this->source); })()), "surname", [], "any", false, false, false, 59), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account", [], "messages");
        echo "</td>
      <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 63, $this->source); })()), "accname", [], "any", false, false, false, 63), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created By", [], "messages");
        echo "</td>
      <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 67, $this->source); })()), "name_created", [], "any", false, false, false, 67), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        echo "</td>
      <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 71, $this->source); })()), "created_at", [], "any", false, false, false, 71), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update By", [], "messages");
        echo "</td>
      <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 75, $this->source); })()), "name_updated", [], "any", false, false, false, 75), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated At", [], "messages");
        echo "</td>
      <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 79, $this->source); })()), "updated_at", [], "any", false, false, false, 79), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    
    <tr>
      <td>";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "messages");
        echo "</td>
      <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages");
        echo "</td>
      <td>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 88, $this->source); })()), "emails", [], "any", false, false, false, 88), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone", [], "messages");
        echo "</td>
      <td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 92, $this->source); })()), "phones", [], "any", false, false, false, 92), "html", null, true);
        echo "</td>
    </tr>
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

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pdf_generator/contactshow.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  221 => 92,  217 => 91,  211 => 88,  207 => 87,  201 => 84,  197 => 83,  190 => 79,  186 => 78,  180 => 75,  176 => 74,  170 => 71,  166 => 70,  160 => 67,  156 => 66,  150 => 63,  146 => 62,  140 => 59,  136 => 58,  130 => 55,  126 => 54,  120 => 51,  111 => 45,  105 => 42,  63 => 2,  44 => 1,);
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
<img src=\"{{ imageSrc }}\"  width=\"80\" alt=\"Logo\"/>
<body>
<div id=\"banner\">
  <h1>{% trans %}Contacts Details{% endtrans %}</h1>
  </div>
  <br>
  <table>
    <tr>
      <td>Id</td>
      <td>{{ contacts.id }}</td>
    </tr>
    <tr>
      <td>{% trans %}Name{% endtrans %}</td>
      <td>{{ contacts.name }}</td>
    </tr>
    <tr>
      <td>{% trans %}Surname{% endtrans %}</td>
      <td>{{ contacts.surname }}</td>
    </tr>
    <tr>
      <td>{% trans %}Account{% endtrans %}</td>
      <td>{{ contacts.accname }}</td>
    </tr>
    <tr>
      <td>{% trans %}Created By{% endtrans %}</td>
      <td>{{ contacts.name_created }}</td>
    </tr>
    <tr>
      <td>{% trans %}Created At{% endtrans %}</td>
      <td>{{ contacts.created_at|date('Y-m-d H:i:s') }}</td>
    </tr>
    <tr>
      <td>{% trans %}Update By{% endtrans %}</td>
      <td>{{ contacts.name_updated }}</td>
    </tr>
    <tr>
      <td>{% trans %}Updated At{% endtrans %}</td>
      <td>{{ contacts.updated_at|date('Y-m-d H:i:s') }}</td>
    </tr>
    
    <tr>
      <td>{% trans %}Description{% endtrans %}</td>
      <td>{{ contacts.description }}</td>
    </tr>
    <tr>
      <td>{% trans %}Email{% endtrans %}</td>
      <td>{{ contacts.emails }}</td>
    </tr>
    <tr>
      <td>{% trans %}Phone{% endtrans %}</td>
      <td>{{ contacts.phones }}</td>
    </tr>
  </table>
</body>
<br>
    <footer class=\"footer text-center text-sm-start\">
              &copy; <script>
                    document.write(new Date().getFullYear())
            </script> Business 
    </footer>
</html>

{% endblock %}", "pdf_generator/contactshow.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\pdf_generator\\contactshow.html.twig");
    }
}
