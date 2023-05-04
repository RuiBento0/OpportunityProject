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

/* accounts/index.html.twig */
class __TwigTemplate_fc63317b5566d72939babb10143425cf101b1b54f96d03eba7bd80d1be6d4134 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accounts/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accounts/index.html.twig", 1);
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

                        <td style=\"-webkit-user-select: none; vertical-align: middle\"></td>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
                </tr>
            </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "accounts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 26,  101 => 21,  97 => 20,  93 => 19,  90 => 18,  86 => 17,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 

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

                        <td style=\"-webkit-user-select: none; vertical-align: middle\"></td>

                {% endfor %}

                </tr>
            </tbody>
    </table>
{% endblock %} ", "accounts/index.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\accounts\\index.html.twig");
    }
}
