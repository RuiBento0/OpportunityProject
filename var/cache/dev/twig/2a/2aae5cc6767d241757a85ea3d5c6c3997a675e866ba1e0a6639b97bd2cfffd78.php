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

/* accounts/list.html.twig */
class __TwigTemplate_309294f02e0b28308f39304341c91c58989766f97286b3529fc575e7b4ba6705 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accounts/list.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "accounts/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <table class=\"table table-hover\" style=\"text-align:center\">
            <thead class=\"table-secondary\">
                <tr>
                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created By", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        echo "</th>
                <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        echo "</th>
                </tr>
            </thead>

            <tbody id=\"myTable\">
                <tr>

                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 18
            echo "
                        <td style=\"vertical-align: middle\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["account"], "createdby", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "createdat", [], "any", false, false, false, 21), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>

                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                ";
            // line 26
            echo "                        ";
            // line 27
            echo "                        <a href=\"/account/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\">
                            <span class=\"btn btn-outline-info col-lg-3\" style=\"text-align: center\">Show</a></span>
                        <a href=\"/account/edit/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">
                            <span class=\"btn btn-outline-success col-lg-3\" style=\"text-align: center\">Edit</a></span>
                        <a href=\"/account/delete/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to permanently remove this item?')\">
                                <span class=\"btn btn-outline-danger col-lg-3\" style=\"text-align: center\">Delete</a></span>
                        ";
            // line 34
            echo "
                        ";
            // line 36
            echo "
";
            // line 39
            echo "
                        ";
            // line 41
            echo "                    ";
            // line 42
            echo "                    </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "accounts/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  137 => 42,  135 => 41,  132 => 39,  129 => 36,  126 => 34,  121 => 31,  116 => 29,  110 => 27,  108 => 26,  101 => 21,  97 => 20,  93 => 19,  90 => 18,  86 => 17,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './base.html.twig' %} 

{% block body %}
  <table class=\"table table-hover\" style=\"text-align:center\">
            <thead class=\"table-secondary\">
                <tr>
                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">{% trans %}Name{% endtrans %}</th>
                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">{% trans %}Created By{% endtrans %}</th>
                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">{% trans %}Created At{% endtrans %}</th>
                <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">{% trans %}Actions{% endtrans %}</th>
                </tr>
            </thead>

            <tbody id=\"myTable\">
                <tr>

                {% for account in accounts %}

                        <td style=\"vertical-align: middle\">{{ account.name }}</td>
                        <td style=\"vertical-align: middle\">{{ account.createdby.name }}</td>
                        <td style=\"vertical-align: middle\">{{ account.createdat|date('Y-m-d H:i:s') }}</td>

                        <td style=\"-webkit-user-select: none; vertical-align: middle\">

                {# {% if app.user.id is defined%} #}
                        {# {% if app.user.userRole.roles == \"SUPERADMIN\" %} #}
                        <a href=\"/account/{{account.id}}\">
                            <span class=\"btn btn-outline-info col-lg-3\" style=\"text-align: center\">Show</a></span>
                        <a href=\"/account/edit/{{account.id}}\">
                            <span class=\"btn btn-outline-success col-lg-3\" style=\"text-align: center\">Edit</a></span>
                        <a href=\"/account/delete/{{account.id}}\" onclick=\"return confirm('Are you sure you want to permanently remove this item?')\">
                                <span class=\"btn btn-outline-danger col-lg-3\" style=\"text-align: center\">Delete</a></span>
                        {# {% endif %} #}

                        {# {% if app.user.userRole.roles == \"VIEWER\" %} #}

{#                         <a href=\"/tickets/{{contact.id}}\">
                            <span class=\"btn btn-outline-info col-lg-3  \" style=\"text-align: center;\">Show</a></span> #}

                        {# {% endif %}  #}
                    {# {% endif %} #}
                    </td>
                    </tr>
                {% endfor %}
            </tbody>
    </table>
{% endblock %} ", "accounts/list.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\accounts\\list.html.twig");
    }
}
