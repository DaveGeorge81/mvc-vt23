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

/* dealer/update-dealer.html.twig */
class __TwigTemplate_9cdd89439b992cc24152640c2431a2aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dealer/update-dealer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dealer/update-dealer.html.twig"));

        $this->parent = $this->loadTemplate("/proj/projbase.html.twig", "dealer/update-dealer.html.twig", 1);
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

        echo "Update dealer";
        
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
        echo "    <h1>Update dealer<hr></h1>
<main class=\"main\">
    <form method=\"post\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dealer_update");
        echo "\">
    <fieldset>
    <legend>Hands played:</legend>
    <div><input type=\"number\" name=\"id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dealer"]) || array_key_exists("dealer", $context) ? $context["dealer"] : (function () { throw new RuntimeError('Variable "dealer" does not exist.', 11, $this->source); })()), "getid", [], "method", false, false, false, 11), "html", null, true);
        echo "\" readonly hidden></div>
    <div><input type=\"number\" name=\"played\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["db_dealer"]) || array_key_exists("db_dealer", $context) ? $context["db_dealer"] : (function () { throw new RuntimeError('Variable "db_dealer" does not exist.', 12, $this->source); })()), "getHandsPlayed", [], "method", false, false, false, 12), "html", null, true);
        echo "\"></div></fieldset>
    <fieldset>
    <legend>Hands won:</legend>
    <input type=\"number\" name=\"won\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["db_dealer"]) || array_key_exists("db_dealer", $context) ? $context["db_dealer"] : (function () { throw new RuntimeError('Variable "db_dealer" does not exist.', 15, $this->source); })()), "getHandsWon", [], "method", false, false, false, 15), "html", null, true);
        echo "\"></fieldset>
    <fieldset>
    <legend>Hands lost:</legend>
    <input type=\"number\" name=\"lost\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["db_dealer"]) || array_key_exists("db_dealer", $context) ? $context["db_dealer"] : (function () { throw new RuntimeError('Variable "db_dealer" does not exist.', 18, $this->source); })()), "getHandsLost", [], "method", false, false, false, 18), "html", null, true);
        echo "\"></fieldset>
    <fieldset>
    <legend>Hands push:</legend>
    <input type=\"number\" name=\"push\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["db_dealer"]) || array_key_exists("db_dealer", $context) ? $context["db_dealer"] : (function () { throw new RuntimeError('Variable "db_dealer" does not exist.', 21, $this->source); })()), "getHandsPush", [], "method", false, false, false, 21), "html", null, true);
        echo "\"></fieldset>
    <div class=\"cards\"><br><input type=\"submit\" name=\"do_it\" value=\"Update dealer\"></div>
    </form><hr>
</main>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dealer/update-dealer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 21,  114 => 18,  108 => 15,  102 => 12,  98 => 11,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/proj/projbase.html.twig\" %}

{% block title %}Update dealer{% endblock %}

{% block body %}
    <h1>Update dealer<hr></h1>
<main class=\"main\">
    <form method=\"post\" action=\"{{ path('dealer_update') }}\">
    <fieldset>
    <legend>Hands played:</legend>
    <div><input type=\"number\" name=\"id\" value=\"{{ dealer.getid() }}\" readonly hidden></div>
    <div><input type=\"number\" name=\"played\" value=\"{{ db_dealer.getHandsPlayed() }}\"></div></fieldset>
    <fieldset>
    <legend>Hands won:</legend>
    <input type=\"number\" name=\"won\" value=\"{{ db_dealer.getHandsWon() }}\"></fieldset>
    <fieldset>
    <legend>Hands lost:</legend>
    <input type=\"number\" name=\"lost\" value=\"{{ db_dealer.getHandsLost() }}\"></fieldset>
    <fieldset>
    <legend>Hands push:</legend>
    <input type=\"number\" name=\"push\" value=\"{{ db_dealer.getHandsPush() }}\"></fieldset>
    <div class=\"cards\"><br><input type=\"submit\" name=\"do_it\" value=\"Update dealer\"></div>
    </form><hr>
</main>
</div>


{% endblock %}", "dealer/update-dealer.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/dealer/update-dealer.html.twig");
    }
}
