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

/* db/all-db.html.twig */
class __TwigTemplate_06d7cfefd46dc9a3cb0ed2bc9bf71390 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "db/all-db.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "db/all-db.html.twig"));

        $this->parent = $this->loadTemplate("/proj/projbase.html.twig", "db/all-db.html.twig", 1);
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

        echo "Stats";
        
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
        echo "<h1>Game stats<hr></h1>
";
        // line 7
        echo twig_include($this->env, $context, "flash.html.twig");
        echo "

    </aside>
<main class=\"main\">
<h2> Dealer (all time) stats </h2>
<table>
<th>Hands played:</th>
<th>Hands won:</th>
<th>Hands lost:</th>
<th>Hands push:</th>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dealers"]) || array_key_exists("dealers", $context) ? $context["dealers"] : (function () { throw new RuntimeError('Variable "dealers" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dealer"]) {
            // line 18
            echo "    <tr>
    ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsPlayed", [], "any", false, false, false, 19) > 0)) {
                // line 20
                echo "    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsPlayed", [], "method", false, false, false, 20), "html", null, true);
                echo "</td>
    <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsWon", [], "method", false, false, false, 21) / twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsPlayed", [], "method", false, false, false, 21)) * 100), 1, "floor"), "html", null, true);
                echo " % (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsWon", [], "method", false, false, false, 21), "html", null, true);
                echo " ) </td>
    <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsLost", [], "method", false, false, false, 22) / twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsPlayed", [], "method", false, false, false, 22)) * 100), 1, "floor"), "html", null, true);
                echo " % (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsLost", [], "method", false, false, false, 22), "html", null, true);
                echo " ) </td>
    <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsPush", [], "method", false, false, false, 23) / twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsPlayed", [], "method", false, false, false, 23)) * 100), 1, "floor"), "html", null, true);
                echo " % (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsPush", [], "method", false, false, false, 23), "html", null, true);
                echo " )</td>
    ";
            } else {
                // line 25
                echo "    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsPlayed", [], "method", false, false, false, 25), "html", null, true);
                echo "</td>
    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsWon", [], "method", false, false, false, 26), "html", null, true);
                echo " (0%)</td>
    <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsLost", [], "method", false, false, false, 27), "html", null, true);
                echo " (0%)</td>
    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dealer"], "getHandsPush", [], "method", false, false, false, 28), "html", null, true);
                echo " (0%)</td>
    ";
            }
            // line 30
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dealer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</table><hr>

<h2>Players</h2>
<table>
<th>Name:</th>
<th>Money:</th>
<th>Rounds played:</th>
<th>Id:</th>
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 41
            echo "    <tr>
    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "getName", [], "method", false, false, false, 42), "html", null, true);
            echo "</td>
    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "getMoney", [], "method", false, false, false, 43), "html", null, true);
            echo "</td>
    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "getRoundsPlayed", [], "method", false, false, false, 44), "html", null, true);
            echo "</td>
    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "getId", [], "method", false, false, false, 45), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</table><hr>
</main>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "db/all-db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 48,  191 => 45,  187 => 44,  183 => 43,  179 => 42,  176 => 41,  172 => 40,  162 => 32,  155 => 30,  150 => 28,  146 => 27,  142 => 26,  137 => 25,  130 => 23,  124 => 22,  118 => 21,  113 => 20,  111 => 19,  108 => 18,  104 => 17,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/proj/projbase.html.twig\" %}

{% block title %}Stats{% endblock %}

{% block body %}
<h1>Game stats<hr></h1>
{{ include('flash.html.twig') }}

    </aside>
<main class=\"main\">
<h2> Dealer (all time) stats </h2>
<table>
<th>Hands played:</th>
<th>Hands won:</th>
<th>Hands lost:</th>
<th>Hands push:</th>
{% for dealer in dealers %}
    <tr>
    {% if dealer.getHandsPlayed > 0 %}
    <td>{{ dealer.getHandsPlayed() }}</td>
    <td>{{ ((dealer.getHandsWon() / dealer.getHandsPlayed()) * 100)|round(1, 'floor') }} % ({{ dealer.getHandsWon() }} ) </td>
    <td>{{ ((dealer.getHandsLost() / dealer.getHandsPlayed()) * 100)|round(1, 'floor') }} % ({{ dealer.getHandsLost() }} ) </td>
    <td>{{ ((dealer.getHandsPush() / dealer.getHandsPlayed()) * 100)|round(1, 'floor') }} % ({{ dealer.getHandsPush() }} )</td>
    {% else %}
    <td>{{ dealer.getHandsPlayed() }}</td>
    <td>{{ dealer.getHandsWon() }} (0%)</td>
    <td>{{ dealer.getHandsLost() }} (0%)</td>
    <td>{{ dealer.getHandsPush() }} (0%)</td>
    {% endif %}
    </tr>
    {% endfor %}
</table><hr>

<h2>Players</h2>
<table>
<th>Name:</th>
<th>Money:</th>
<th>Rounds played:</th>
<th>Id:</th>
{% for player in players %}
    <tr>
    <td>{{ player.getName()}}</td>
    <td>{{ player.getMoney() }}</td>
    <td>{{ player.getRoundsPlayed() }}</td>
    <td>{{ player.getId() }}</td>
    </tr>
    {% endfor %}
</table><hr>
</main>
</div>
{% endblock %}", "db/all-db.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/db/all-db.html.twig");
    }
}
