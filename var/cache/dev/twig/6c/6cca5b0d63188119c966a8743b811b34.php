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

/* dealer/all-dealers.html.twig */
class __TwigTemplate_6ccf862aa4b00cbdb205c8c94e21af7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/proj/projbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dealer/all-dealers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dealer/all-dealers.html.twig"));

        $this->parent = $this->loadTemplate("/proj/projbase.html.twig", "dealer/all-dealers.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "All books";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Dealer<hr></h1>
";
        // line 7
        echo twig_include($this->env, $context, "flash.html.twig");
        echo "

    </aside>
<main class=\"main\">
<table>
<th>Hands played:</th>
<th>Hands won:</th>
<th>Hands lost:</th>
<th>Hands push:</th>
<th>Edit/Delete:</th>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dealers"]) || array_key_exists("dealers", $context) ? $context["dealers"] : (function () { throw new RuntimeError('Variable "dealers" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dealer"]) {
            // line 18
            echo "    <tr>
    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsPlayed", [], "method", false, false, false, 19), "html", null, true);
            echo "</td>
    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsWon", [], "method", false, false, false, 20), "html", null, true);
            echo "</td>
    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsLost", [], "method", false, false, false, 21), "html", null, true);
            echo "</td>
    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsPush", [], "method", false, false, false, 22), "html", null, true);
            echo "</td>
    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dealer"], "getId", [], "method", false, false, false, 23), "html", null, true);
            echo "</td>
    ";
            // line 26
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dealer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</table><hr>
</main>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dealer/all-dealers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 28,  131 => 26,  127 => 23,  123 => 22,  119 => 21,  115 => 20,  111 => 19,  108 => 18,  104 => 17,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/proj/projbase.html.twig\" %}

{% block title %}All books{% endblock %}

{% block body %}
<h1>Dealer<hr></h1>
{{ include('flash.html.twig') }}

    </aside>
<main class=\"main\">
<table>
<th>Hands played:</th>
<th>Hands won:</th>
<th>Hands lost:</th>
<th>Hands push:</th>
<th>Edit/Delete:</th>
{% for dealer in dealers %}
    <tr>
    <td>{{ dealer.getHandsPlayed() }}</td>
    <td>{{ dealer.getHandsWon() }}</td>
    <td>{{ dealer.getHandsLost() }}</td>
    <td>{{ dealer.getHandsPush() }}</td>
    <td>{{ dealer.getId() }}</td>
    {# <td><h2><a href=\"{{ path('update_by_id', {'id' : book.getId()}) }}\"> <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a> / 
    <a href=\"{{ path('delete_by_id', {'id' : book.getId()}) }}\"> <i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a></h2></td> #}
    </tr>
    {% endfor %}
</table><hr>
</main>
</div>
{% endblock %}", "dealer/all-dealers.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/dealer/all-dealers.html.twig");
    }
}
