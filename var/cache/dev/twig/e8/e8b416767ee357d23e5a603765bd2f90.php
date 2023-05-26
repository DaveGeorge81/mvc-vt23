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

/* game21.html.twig */
class __TwigTemplate_92e96020c064420ce917ab7f5d7bd416 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game21.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game21.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game21.html.twig", 1);
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

        echo "Game21";
        
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
        echo "<h1>Kortspelet 21<hr></h1>

";
        // line 8
        echo twig_include($this->env, $context, "flash.html.twig");
        echo "
";
        // line 9
        if ((((isset($context["playerMoney"]) || array_key_exists("playerMoney", $context) ? $context["playerMoney"] : (function () { throw new RuntimeError('Variable "playerMoney" does not exist.', 9, $this->source); })()) <= 0) || ((isset($context["cpuMoney"]) || array_key_exists("cpuMoney", $context) ? $context["cpuMoney"] : (function () { throw new RuntimeError('Variable "cpuMoney" does not exist.', 9, $this->source); })()) <= 0))) {
            // line 10
            echo "    <h2>GAME OVER!</h2>
    <div class=\"cards\"><a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("init");
            echo "\"><button>Start a new game!</button></a><hr></div>
";
        }
        // line 13
        echo "<table>
<th>Players Hand:</th>
<th>Dealers Hand:</th>
<tr>
<td>";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["playerCards"]) || array_key_exists("playerCards", $context) ? $context["playerCards"] : (function () { throw new RuntimeError('Variable "playerCards" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 18
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/cards/" . $context["card"]) . ".svg")), "html", null, true);
            echo "\" width=\"100px\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</td>
<td>";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cpuCards"]) || array_key_exists("cpuCards", $context) ? $context["cpuCards"] : (function () { throw new RuntimeError('Variable "cpuCards" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 21
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/cards/" . $context["card"]) . ".svg")), "html", null, true);
            echo "\" width=\"100px\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</td></tr>
<tr>
<td>Card values: ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["playerPoints"]) || array_key_exists("playerPoints", $context) ? $context["playerPoints"] : (function () { throw new RuntimeError('Variable "playerPoints" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</td>
<td>Card values: ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["cpuPoints"]) || array_key_exists("cpuPoints", $context) ? $context["cpuPoints"] : (function () { throw new RuntimeError('Variable "cpuPoints" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</td>
</tr>
<th>Players Money: ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["playerMoney"]) || array_key_exists("playerMoney", $context) ? $context["playerMoney"] : (function () { throw new RuntimeError('Variable "playerMoney" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</th>
<th>Dealers Money: ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["cpuMoney"]) || array_key_exists("cpuMoney", $context) ? $context["cpuMoney"] : (function () { throw new RuntimeError('Variable "cpuMoney" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</th>
</table><hr>

";
        // line 31
        if ((((isset($context["playerPoints"]) || array_key_exists("playerPoints", $context) ? $context["playerPoints"] : (function () { throw new RuntimeError('Variable "playerPoints" does not exist.', 31, $this->source); })()) < 21) && ((isset($context["done"]) || array_key_exists("done", $context) ? $context["done"] : (function () { throw new RuntimeError('Variable "done" does not exist.', 31, $this->source); })()) == "no"))) {
            // line 32
            echo "    <div class=\"cards\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hit");
            echo "\"><button>Hit!</button></a>
    <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cpuHit");
            echo "\"><button>Stay!</button></a></div>
";
        }
        // line 35
        echo "
";
        // line 36
        if (((((isset($context["done"]) || array_key_exists("done", $context) ? $context["done"] : (function () { throw new RuntimeError('Variable "done" does not exist.', 36, $this->source); })()) == "yes") && ((isset($context["playerMoney"]) || array_key_exists("playerMoney", $context) ? $context["playerMoney"] : (function () { throw new RuntimeError('Variable "playerMoney" does not exist.', 36, $this->source); })()) > 0)) && ((isset($context["cpuMoney"]) || array_key_exists("cpuMoney", $context) ? $context["cpuMoney"] : (function () { throw new RuntimeError('Variable "cpuMoney" does not exist.', 36, $this->source); })()) > 0))) {
            // line 37
            echo "    <div class=\"cards\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("make-bet");
            echo "\"><button>Next round!</button></a></div>
";
        }
        // line 39
        echo "
<h2> Number of cards left: ";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["numberOfCards"]) || array_key_exists("numberOfCards", $context) ? $context["numberOfCards"] : (function () { throw new RuntimeError('Variable "numberOfCards" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</h2>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game21.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 40,  187 => 39,  181 => 37,  179 => 36,  176 => 35,  171 => 33,  166 => 32,  164 => 31,  158 => 28,  154 => 27,  149 => 25,  145 => 24,  141 => 22,  132 => 21,  128 => 20,  125 => 19,  116 => 18,  112 => 17,  106 => 13,  101 => 11,  98 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Game21{% endblock %}

{% block body %}
<h1>Kortspelet 21<hr></h1>

{{ include('flash.html.twig') }}
{% if (playerMoney <= 0) or (cpuMoney <= 0) %}
    <h2>GAME OVER!</h2>
    <div class=\"cards\"><a href=\"{{ path('init') }}\"><button>Start a new game!</button></a><hr></div>
{% endif %}
<table>
<th>Players Hand:</th>
<th>Dealers Hand:</th>
<tr>
<td>{% for card in playerCards %}
        <img src=\"{{ asset('img/cards/'~ card ~'.svg') }}\" width=\"100px\">
    {% endfor %}</td>
<td>{% for card in cpuCards %}
        <img src=\"{{ asset('img/cards/'~ card ~'.svg') }}\" width=\"100px\">
    {% endfor %}</td></tr>
<tr>
<td>Card values: {{ playerPoints }}</td>
<td>Card values: {{ cpuPoints }}</td>
</tr>
<th>Players Money: {{ playerMoney }}</th>
<th>Dealers Money: {{ cpuMoney }}</th>
</table><hr>

{% if (playerPoints < 21) and (done == \"no\") %}
    <div class=\"cards\"><a href=\"{{ path('hit') }}\"><button>Hit!</button></a>
    <a href=\"{{ path('cpuHit') }}\"><button>Stay!</button></a></div>
{% endif %}

{% if (done == \"yes\") and (playerMoney > 0) and (cpuMoney > 0) %}
    <div class=\"cards\"><a href=\"{{ path('make-bet') }}\"><button>Next round!</button></a></div>
{% endif %}

<h2> Number of cards left: {{ numberOfCards }}</h2>


{% endblock %}", "game21.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/game21.html.twig");
    }
}
