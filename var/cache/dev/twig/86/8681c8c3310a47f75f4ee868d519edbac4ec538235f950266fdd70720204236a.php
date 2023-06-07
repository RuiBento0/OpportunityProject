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

/* @BabDevPagerfanta/semantic_ui.html.twig */
class __TwigTemplate_1007acb0e03725b475cdcaba3cf394fd1ec87905dfe86fb60b9135abf8c698dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'previous_page_message' => [$this, 'block_previous_page_message'],
            'next_page_message' => [$this, 'block_next_page_message'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Pagerfanta/semantic_ui.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BabDevPagerfanta/semantic_ui.html.twig"));

        $this->parent = $this->loadTemplate("@Pagerfanta/semantic_ui.html.twig", "@BabDevPagerfanta/semantic_ui.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_previous_page_message($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "previous_page_message"));

        // line 4
        $macros["__internal_parse_4"] = $this->loadTemplate("@BabDevPagerfanta/macros.html.twig", "@BabDevPagerfanta/semantic_ui.html.twig", 4)->unwrap();
        // line 5
        echo twig_call_macro($macros["__internal_parse_4"], "macro_resolve_previous_page_message", [(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 5, $this->source); })())], 5, $context, $this->getSourceContext());
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_next_page_message($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "next_page_message"));

        // line 9
        $macros["__internal_parse_5"] = $this->loadTemplate("@BabDevPagerfanta/macros.html.twig", "@BabDevPagerfanta/semantic_ui.html.twig", 9)->unwrap();
        // line 10
        echo twig_call_macro($macros["__internal_parse_5"], "macro_resolve_next_page_message", [(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 10, $this->source); })())], 10, $context, $this->getSourceContext());
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BabDevPagerfanta/semantic_ui.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 10,  76 => 9,  69 => 8,  62 => 5,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- extends '@Pagerfanta/semantic_ui.html.twig' -%}

{%- block previous_page_message -%}
    {%- from '@BabDevPagerfanta/macros.html.twig' import resolve_previous_page_message -%}
    {{- resolve_previous_page_message(options) -}}
{%- endblock previous_page_message -%}

{%- block next_page_message -%}
    {%- from '@BabDevPagerfanta/macros.html.twig' import resolve_next_page_message -%}
    {{- resolve_next_page_message(options) -}}
{%- endblock next_page_message -%}
", "@BabDevPagerfanta/semantic_ui.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\vendor\\babdev\\pagerfanta-bundle\\templates\\semantic_ui.html.twig");
    }
}
