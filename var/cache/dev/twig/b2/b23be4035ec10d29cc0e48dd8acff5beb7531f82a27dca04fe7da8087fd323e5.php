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

/* contacts/list.html.twig */
class __TwigTemplate_9b611cbe45e074f7d0e65aa51f7dbeeababd340c83991df91c12d9a73690c544 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contacts/list.html.twig", 1);
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
                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">Name</th>
                <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Account</th>
                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Email</th>
                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Phone</th>
                ";
        // line 16
        echo "                <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">Actions</th>
                </tr>
            </thead>

            <tbody id=\"myTable\">
                <tr>

                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 24
            echo "
                        <td style=\"vertical-align: middle\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "surname", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                        ";
            // line 27
            echo "                        <td style=\"vertical-align: middle\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "idaccount", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "idaccount", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "idaccount", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                        ";
            // line 35
            echo "                        <td style=\"-webkit-user-select: none; vertical-align: middle\">


                    ";
            // line 39
            echo "                        ";
            // line 40
            echo "                        <a href=\"/contact/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
                            <span class=\"btn btn-outline-info col-lg-3\" style=\"text-align: center\">Show</a></span>
                        <a href=\"/contact/edit/";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
                            <span class=\"btn btn-outline-success col-lg-3\" style=\"text-align: center\">Edit</a></span>
                        <a href=\"/contact/delete/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to permanently remove this item?')\">
                                <span class=\"btn btn-outline-danger col-lg-3\" style=\"text-align: center\">Delete</a></span>
                        ";
            // line 47
            echo "
                        ";
            // line 49
            echo "
";
            // line 52
            echo "
                        ";
            // line 54
            echo "                    ";
            // line 55
            echo "                    </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contacts/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 58,  138 => 55,  136 => 54,  133 => 52,  130 => 49,  127 => 47,  122 => 44,  117 => 42,  111 => 40,  109 => 39,  104 => 35,  100 => 29,  96 => 28,  91 => 27,  85 => 25,  82 => 24,  78 => 23,  69 => 16,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

  <table class=\"table table-hover\" style=\"text-align:center\">
            <thead class=\"table-secondary\">
                <tr>
                <th onclick=\"sortTable(0)\" style=\"-webkit-user-select: none; width: 5%; cursor: pointer\" style=\"width: 5%\" scope=\"col\">Name</th>
                <th onclick=\"sortTable(1)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Account</th>
                <th onclick=\"sortTable(2)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Email</th>
                <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Phone</th>
                {# <th onclick=\"sortTable(3)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Created At</th>
                <th onclick=\"sortTable(4)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Created At</th>
                <th onclick=\"sortTable(5)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Created By</th>
                <th onclick=\"sortTable(6)\" style=\"-webkit-user-select: none; width: 6%; cursor: pointer\" style=\"width: 6%\" scope=\"col\">Updated By</th> #}
                <th style=\"width: 19%;cursor: default; -webkit-user-select: none;\" scope=\"col\">Actions</th>
                </tr>
            </thead>

            <tbody id=\"myTable\">
                <tr>

                {% for contact in contacts %}

                        <td style=\"vertical-align: middle\">{{ contact.name }} {{ contact.surname }}</td>
                        {# <td style=\"vertical-align: middle\">{{ contact.iduser.name }}</td> #}
                        <td style=\"vertical-align: middle\">{{ contact.idaccount.name }}</td>
                        <td style=\"vertical-align: middle\">{{ contact.idaccount.name }}</td>
                        <td style=\"vertical-align: middle\">{{ contact.idaccount.name }}</td>
                        {# <td style=\"vertical-align: middle\">{{ contact.createdat|date('Y-m-d H:i:s') }}</td>
                        <td style=\"vertical-align: middle\">{{ contact.createdat|date('Y-m-d H:i:s') }}</td>
                        <td style=\"vertical-align: middle\">{{ contact.createdby.name }}</td>
                        <td style=\"vertical-align: middle\">{{ contact.updatedby.name }}</td>
 #}
                        <td style=\"-webkit-user-select: none; vertical-align: middle\">


                    {# {% if app.user.id is defined%} #}
                        {# {% if app.user.userRole.roles == \"SUPERADMIN\" %} #}
                        <a href=\"/contact/{{contact.id}}\">
                            <span class=\"btn btn-outline-info col-lg-3\" style=\"text-align: center\">Show</a></span>
                        <a href=\"/contact/edit/{{contact.id}}\">
                            <span class=\"btn btn-outline-success col-lg-3\" style=\"text-align: center\">Edit</a></span>
                        <a href=\"/contact/delete/{{contact.id}}\" onclick=\"return confirm('Are you sure you want to permanently remove this item?')\">
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
{% endblock %} ", "contacts/list.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\contacts\\list.html.twig");
    }
}
