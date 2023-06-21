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
class __TwigTemplate_f705f3776a3550718f9f4aca687e073eae00c44bfb7b651ef24fe786454a6ce1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/opportunities.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/opportunities.html.twig"));

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
<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\"  width=\"80\" alt=\"Logo\"/>
<body>
  <div id=\"banner\">
    <h1>";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Opportunities", [], "messages");
        echo "</h1>
  </div>
  <br>
  <table>
    <tr>
      <th>ID</th>
      <th>";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</th>
      <th>";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account", [], "messages");
        echo "</th>
      <th>";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User", [], "messages");
        echo "</th>
      <th>";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact", [], "messages");
        echo "</th>
      <th>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stage", [], "messages");
        echo "</th>
      <th>";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Source", [], "messages");
        echo "</th>
      <th>";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Department", [], "messages");
        echo "</th>
      <th>";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "messages");
        echo "</th>
      <th>";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Probability", [], "messages");
        echo "</th>
      <th>";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "messages");
        echo "</th>
      <th>";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close Date", [], "messages");
        echo "</th>
    </tr>
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new RuntimeError('Variable "opportunities" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["opportunity"]) {
            // line 52
            echo "    <tr>
      <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
      <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
      <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunity"], "idaccount", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
      <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunity"], "iduser", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
      <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunity"], "idcontact", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
      <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunity"], "IdStage", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
      <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunity"], "idsource", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
      <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunity"], "iddepartment", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
      <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "amount", [], "any", false, false, false, 61), "html", null, true);
            echo " \$</td>
      <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "probability", [], "any", false, false, false, 62), "html", null, true);
            echo " %</td>
      <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "description", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
      <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunity"], "closedate", [], "any", false, false, false, 64), "Y-m-d"), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pdf_generator/opportunities.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 67,  204 => 64,  200 => 63,  196 => 62,  192 => 61,  188 => 60,  184 => 59,  180 => 58,  176 => 57,  172 => 56,  168 => 55,  164 => 54,  160 => 53,  157 => 52,  153 => 51,  148 => 49,  144 => 48,  140 => 47,  136 => 46,  132 => 45,  128 => 44,  124 => 43,  120 => 42,  116 => 41,  112 => 40,  108 => 39,  99 => 33,  93 => 30,  63 => 2,  44 => 1,);
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
<img src=\"{{ imageSrc }}\"  width=\"80\" alt=\"Logo\"/>
<body>
  <div id=\"banner\">
    <h1>{% trans %}Opportunities{% endtrans %}</h1>
  </div>
  <br>
  <table>
    <tr>
      <th>ID</th>
      <th>{% trans %}Name{% endtrans %}</th>
      <th>{% trans %}Account{% endtrans %}</th>
      <th>{% trans %}User{% endtrans %}</th>
      <th>{% trans %}Contact{% endtrans %}</th>
      <th>{% trans %}Stage{% endtrans %}</th>
      <th>{% trans %}Source{% endtrans %}</th>
      <th>{% trans %}Department{% endtrans %}</th>
      <th>{% trans %}Amount{% endtrans %}</th>
      <th>{% trans %}Probability{% endtrans %}</th>
      <th>{% trans %}Description{% endtrans %}</th>
      <th>{% trans %}Close Date{% endtrans %}</th>
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
<br>
    <footer class=\"footer text-center text-sm-start\">
              &copy; <script>
                    document.write(new Date().getFullYear())
            </script> Business 
    </footer>
</html>

{% endblock %}", "pdf_generator/opportunities.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\pdf_generator\\opportunities.html.twig");
    }
}
