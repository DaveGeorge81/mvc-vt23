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

/* bet.html.twig */
class __TwigTemplate_8a16038ca74f43593caaed1c48fab6f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bet.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bet.html.twig", 1);
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

        echo "Bet";
        
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
        echo "    <h1>Place your bets<hr></h1>

    <table>
    <th>Players money:</th>
    <th>Dealers money:</th>
    <tr>
    <td>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["playerMoney"]) || array_key_exists("playerMoney", $context) ? $context["playerMoney"] : (function () { throw new RuntimeError('Variable "playerMoney" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</td>
    <td>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["cpuMoney"]) || array_key_exists("cpuMoney", $context) ? $context["cpuMoney"] : (function () { throw new RuntimeError('Variable "cpuMoney" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</td>
    </tr>
    </table>
    <div class=\"cards\">
    <h4>How much will you bet this round?</h4>
    <form method=\"post\" action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bet");
        echo "\">
    <input type=\"number\" name=\"amount\" min=\"10\" max=";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["playerMoney"]) || array_key_exists("playerMoney", $context) ? $context["playerMoney"] : (function () { throw new RuntimeError('Variable "playerMoney" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " step=\"10\" value=\"10\">
    <input type=\"submit\" name=\"do_it\" value=\"Place bet\">
    </form><hr></div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "bet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 19,  108 => 18,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Bet{% endblock %}

{% block body %}
    <h1>Place your bets<hr></h1>

    <table>
    <th>Players money:</th>
    <th>Dealers money:</th>
    <tr>
    <td>{{ playerMoney }}</td>
    <td>{{ cpuMoney }}</td>
    </tr>
    </table>
    <div class=\"cards\">
    <h4>How much will you bet this round?</h4>
    <form method=\"post\" action=\"{{ path('bet') }}\">
    <input type=\"number\" name=\"amount\" min=\"10\" max={{ playerMoney }} step=\"10\" value=\"10\">
    <input type=\"submit\" name=\"do_it\" value=\"Place bet\">
    </form><hr></div>

{% endblock %}", "bet.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/bet.html.twig");
    }
}
