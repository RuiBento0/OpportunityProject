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

/* leads/list.html.twig */
class __TwigTemplate_3746ce30b41f70d21b353a1fa077bf6d43e351fe2a313ad560bffd1ed523b511 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leads/list.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "leads/list.html.twig", 1);
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
        echo "
  <table class=\"table table-hover\" style=\"text-align:center\">
            <thead class=\"table-secondary\">
                <tr>
                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created By", [], "messages");
        echo "</th>
                <th onclick=\"sortTable(5)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        echo "</th>
                <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        echo "</th>
                </tr>
            </thead>

            <tbody id=\"myTable\">
                <tr>

                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 22
            echo "
                        <td style=\"vertical-align: middle\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "account", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "amount", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "createdby", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "createdat", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>

                        <td style=\"-webkit-user-select: none; vertical-align: middle\"></td>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                </tr>
            </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "leads/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  126 => 28,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  103 => 22,  99 => 21,  89 => 14,  85 => 13,  81 => 12,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

{% block body %}

  <table class=\"table table-hover\" style=\"text-align:center\">
            <thead class=\"table-secondary\">
                <tr>
                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">{% trans %}Name{% endtrans %}</th>
                <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">{% trans %}Account{% endtrans %}</th>
                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">{% trans %}Amount{% endtrans %}</th>
                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 8%; cursor: pointer\" style=\"width: 8%\" scope=\"col\">{% trans %}Description{% endtrans %}</th>
                <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">{% trans %}Created By{% endtrans %}</th>
                <th onclick=\"sortTable(5)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">{% trans %}Created At{% endtrans %}</th>
                <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">{% trans %}Actions{% endtrans %}</th>
                </tr>
            </thead>

            <tbody id=\"myTable\">
                <tr>

                {% for lead in leads %}

                        <td style=\"vertical-align: middle\">{{ lead.name }}</td>
                        <td style=\"vertical-align: middle\">{{ lead.account }}</td>
                        <td style=\"vertical-align: middle\">{{ lead.amount }}</td>
                        <td style=\"vertical-align: middle\">{{ lead.description }}</td>
                        <td style=\"vertical-align: middle\">{{ lead.createdby.name }}</td>
                        <td style=\"vertical-align: middle\">{{ lead.createdat|date('Y-m-d H:i:s') }}</td>

                        <td style=\"-webkit-user-select: none; vertical-align: middle\"></td>

                {% endfor %}

                </tr>
            </tbody>
    </table>
{% endblock %} ", "leads/list.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\leads\\list.html.twig");
    }
}
