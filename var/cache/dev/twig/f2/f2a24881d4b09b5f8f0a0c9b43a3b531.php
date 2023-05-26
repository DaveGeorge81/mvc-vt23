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

/* proj/bet.html.twig */
class __TwigTemplate_e2ca1e5da88b867c2a825b5af672ba65 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/bet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/bet.html.twig"));

        $this->parent = $this->loadTemplate("/proj/projbase.html.twig", "proj/bet.html.twig", 1);
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

        echo "Start";
        
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
        echo "    <h1>BlackJack<hr></h1>

    <h2> Your current balance: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["money"]) || array_key_exists("money", $context) ? $context["money"] : (function () { throw new RuntimeError('Variable "money" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h2>

    <h3>Place your bets (minimun bet is 10)</h3>
    <div class=\"cards\">
    <form method=\"post\" action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("set_bet");
        echo "\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hands"]) || array_key_exists("hands", $context) ? $context["hands"] : (function () { throw new RuntimeError('Variable "hands" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hand"]) {
            // line 14
            echo "        Hand ";
            echo twig_escape_filter($this->env, ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 14, $this->source); })()) + 1), "html", null, true);
            echo ":
        <input min=\"10\" id=\"hand";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\"  name=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\" step=\"10\" type=\"number\" max=";
            echo twig_escape_filter($this->env, (isset($context["money"]) || array_key_exists("money", $context) ? $context["money"] : (function () { throw new RuntimeError('Variable "money" does not exist.', 15, $this->source); })()), "html", null, true);
            echo " value=\"10\" />
        ";
            // line 16
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 16, $this->source); })()) + 1);
            // line 17
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "<br>
    <input type=\"submit\" class=\"btn\" name=\"do_it\" value=\"Place bets\">
    </form></div>

<script src=\"https://code.jquery.com/jquery-3.7.0.js\"></script>
<script>
let max = ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["money"]) || array_key_exists("money", $context) ? $context["money"] : (function () { throw new RuntimeError('Variable "money" does not exist.', 23, $this->source); })()), "html", null, true);
        echo ";
let \$inputs = \$(\"input:not(:submit)\");

function sumInputs(\$inputs) {
    let sum = 0;

    \$inputs.each(function() {
    sum += parseInt(\$(this).val(), 0);
    });

    return sum;
}

\$inputs.on('input', function(e) {
    let \$this = \$(this);
    let sum = sumInputs(\$inputs.not(function(i, el) {
    return el === e.target;
    }));
    let value = parseInt(\$this.val(), 10) || 0;
    if(sum + value > max) \$this.val(max - sum);
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "proj/bet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 23,  122 => 17,  120 => 16,  112 => 15,  107 => 14,  103 => 13,  99 => 12,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/proj/projbase.html.twig\" %}

{% block title %}Start{% endblock %}

{% block body %}
    <h1>BlackJack<hr></h1>

    <h2> Your current balance: {{ money }}</h2>

    <h3>Place your bets (minimun bet is 10)</h3>
    <div class=\"cards\">
    <form method=\"post\" action=\"{{ path('set_bet') }}\">
    {% for hand in hands %}
        Hand {{ i + 1 }}:
        <input min=\"10\" id=\"hand{{ i }}\"  name=\"{{ i }}\" step=\"10\" type=\"number\" max={{ money }} value=\"10\" />
        {% set i = i +1 %}
    {% endfor %}<br>
    <input type=\"submit\" class=\"btn\" name=\"do_it\" value=\"Place bets\">
    </form></div>

<script src=\"https://code.jquery.com/jquery-3.7.0.js\"></script>
<script>
let max = {{ money }};
let \$inputs = \$(\"input:not(:submit)\");

function sumInputs(\$inputs) {
    let sum = 0;

    \$inputs.each(function() {
    sum += parseInt(\$(this).val(), 0);
    });

    return sum;
}

\$inputs.on('input', function(e) {
    let \$this = \$(this);
    let sum = sumInputs(\$inputs.not(function(i, el) {
    return el === e.target;
    }));
    let value = parseInt(\$this.val(), 10) || 0;
    if(sum + value > max) \$this.val(max - sum);
});
</script>
{% endblock %}", "proj/bet.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/proj/bet.html.twig");
    }
}
