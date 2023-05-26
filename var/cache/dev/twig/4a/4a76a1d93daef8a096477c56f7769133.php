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

/* proj/blackjack.html.twig */
class __TwigTemplate_8c5ac52991ec737277d1a43c3507a1c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/blackjack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/blackjack.html.twig"));

        $this->parent = $this->loadTemplate("/proj/projbase.html.twig", "proj/blackjack.html.twig", 1);
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

        echo "Project";
        
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

    ";
        // line 8
        if ((((isset($context["finished"]) || array_key_exists("finished", $context) ? $context["finished"] : (function () { throw new RuntimeError('Variable "finished" does not exist.', 8, $this->source); })()) == "yes") && ((isset($context["money"]) || array_key_exists("money", $context) ? $context["money"] : (function () { throw new RuntimeError('Variable "money" does not exist.', 8, $this->source); })()) >= ((isset($context["number_of_hands"]) || array_key_exists("number_of_hands", $context) ? $context["number_of_hands"] : (function () { throw new RuntimeError('Variable "number_of_hands" does not exist.', 8, $this->source); })()) * 10)))) {
            // line 9
            echo "    <h3> Do you want to play another round or quit and save your results?</h3>
    <div class=\"cards\">
    <a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("set_up");
            echo "\"><button class=\"btn\">New Round</button></a>
    <a href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_db_by_id", ["id" => 1]);
            echo "\"><button class=\"btn\">Quit</button></a></div>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ((((isset($context["finished"]) || array_key_exists("finished", $context) ? $context["finished"] : (function () { throw new RuntimeError('Variable "finished" does not exist.', 15, $this->source); })()) == "yes") && ((isset($context["money"]) || array_key_exists("money", $context) ? $context["money"] : (function () { throw new RuntimeError('Variable "money" does not exist.', 15, $this->source); })()) < ((isset($context["number_of_hands"]) || array_key_exists("number_of_hands", $context) ? $context["number_of_hands"] : (function () { throw new RuntimeError('Variable "number_of_hands" does not exist.', 15, $this->source); })()) * 10)))) {
            // line 16
            echo "    <h3> Game over! Press quit to save your results!</h3>
    <div class=\"cards\"><a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_db_by_id", ["id" => 1]);
            echo "\"><button class=\"btn\">Quit</button></a></div>
    ";
        }
        // line 19
        echo "
    <table>
    <th>Dealer</th>
    <tr><td>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dealer"]) || array_key_exists("dealer", $context) ? $context["dealer"] : (function () { throw new RuntimeError('Variable "dealer" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 24
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/cards/" . $context["card"]) . ".svg")), "html", null, true);
            echo "\" width=\"100px\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </td></tr>
    <tr><td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dealerHand"]) || array_key_exists("dealerHand", $context) ? $context["dealerHand"] : (function () { throw new RuntimeError('Variable "dealerHand" does not exist.', 27, $this->source); })()), "blackJackPoints", [], "any", false, false, false, 27), "html", null, true);
        echo "</td></tr>
    </table>

    <h1>Dealer must hit until 17</h1>
    <div style=\"display: flex;justify-content: space-around;\">
    ";
        // line 32
        echo twig_include($this->env, $context, "flash.html.twig");
        echo "
    </div>
    <div style=\"display: flex\">
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hands"]) || array_key_exists("hands", $context) ? $context["hands"] : (function () { throw new RuntimeError('Variable "hands" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hand"]) {
            // line 36
            echo "        <table>
        <th>Hand ";
            // line 37
            echo twig_escape_filter($this->env, ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 37, $this->source); })()) + 1), "html", null, true);
            echo "</th>
        <tr><td>
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cards"]) || array_key_exists("cards", $context) ? $context["cards"] : (function () { throw new RuntimeError('Variable "cards" does not exist.', 39, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 39, $this->source); })()), [], "array", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 40
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/cards/" . $context["card"]) . ".svg")), "html", null, true);
                echo "\" width=\"100px\">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "</td></tr>
        <tr><td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hand"], "blackJackPoints", [], "any", false, false, false, 42), "html", null, true);
            echo "</td></tr>
        <tr><td>Current bet: ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bets"]) || array_key_exists("bets", $context) ? $context["bets"] : (function () { throw new RuntimeError('Variable "bets" does not exist.', 43, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 43, $this->source); })()), [], "array", false, false, false, 43), "html", null, true);
            echo "</td><tr>
        ";
            // line 44
            if (((twig_get_attribute($this->env, $this->source, $context["hand"], "blackJackPoints", [], "any", false, false, false, 44) < 21) && (twig_get_attribute($this->env, $this->source, (isset($context["done"]) || array_key_exists("done", $context) ? $context["done"] : (function () { throw new RuntimeError('Variable "done" does not exist.', 44, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 44, $this->source); })()), [], "array", false, false, false, 44) == "no"))) {
                // line 45
                echo "        <tr><td>
            <form method=\"post\" action=\"";
                // line 46
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bj_hit");
                echo "\">
            <input type=\"number\" name=\"hand\" value=";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 47, $this->source); })()), "html", null, true);
                echo " hidden=\"true\">
            <input type=\"submit\" name=\"do_it\" value=\"Hit\">
            </form>
            <form method=\"post\" action=\"";
                // line 50
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bj_stand");
                echo "\">
            <input type=\"number\" name=\"stand\" value=";
                // line 51
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 51, $this->source); })()), "html", null, true);
                echo " hidden=\"true\">
            <input type=\"submit\" name=\"do_it\" value=\"Stand\">
            </form></td></tr>
        ";
            }
            // line 55
            echo "        ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 55, $this->source); })()) + 1);
            // line 56
            echo "        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </div>

    <table>
    <th>Player: ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "</th>
    <th>Statistics:</th>
    <th>Deck:</th>
    <tr>
    <td>Current balance: ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["money"]) || array_key_exists("money", $context) ? $context["money"] : (function () { throw new RuntimeError('Variable "money" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "<br>
    Games played: ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["games_played"]) || array_key_exists("games_played", $context) ? $context["games_played"] : (function () { throw new RuntimeError('Variable "games_played" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "</td>
    <td>Chance of next card is 10 or higher:<br> 
    <h3>";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["stat"]) || array_key_exists("stat", $context) ? $context["stat"] : (function () { throw new RuntimeError('Variable "stat" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "%</h3><br></td>
    <td>Cards left in deck: ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["left"]) || array_key_exists("left", $context) ? $context["left"] : (function () { throw new RuntimeError('Variable "left" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "</td>
    </tr>
    </table>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "proj/blackjack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 69,  249 => 68,  244 => 66,  240 => 65,  233 => 61,  228 => 58,  221 => 56,  218 => 55,  211 => 51,  207 => 50,  201 => 47,  197 => 46,  194 => 45,  192 => 44,  188 => 43,  184 => 42,  181 => 41,  172 => 40,  168 => 39,  163 => 37,  160 => 36,  156 => 35,  150 => 32,  142 => 27,  139 => 26,  130 => 24,  126 => 23,  120 => 19,  115 => 17,  112 => 16,  110 => 15,  107 => 14,  102 => 12,  98 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/proj/projbase.html.twig\" %}

{% block title %}Project{% endblock %}

{% block body %}
    <h1>BlackJack<hr></h1>

    {% if finished == \"yes\" and money >= (number_of_hands * 10)%}
    <h3> Do you want to play another round or quit and save your results?</h3>
    <div class=\"cards\">
    <a href=\"{{ path('set_up') }}\"><button class=\"btn\">New Round</button></a>
    <a href=\"{{ path('update_db_by_id', {'id' : 1}) }}\"><button class=\"btn\">Quit</button></a></div>
    {% endif %}

    {% if finished == \"yes\" and money < (number_of_hands * 10)%}
    <h3> Game over! Press quit to save your results!</h3>
    <div class=\"cards\"><a href=\"{{ path('update_db_by_id', {'id' : 1}) }}\"><button class=\"btn\">Quit</button></a></div>
    {% endif %}

    <table>
    <th>Dealer</th>
    <tr><td>
    {% for card in dealer %}
        <img src=\"{{ asset('img/cards/'~ card ~'.svg') }}\" width=\"100px\">
    {% endfor %}
    </td></tr>
    <tr><td>{{ dealerHand.blackJackPoints }}</td></tr>
    </table>

    <h1>Dealer must hit until 17</h1>
    <div style=\"display: flex;justify-content: space-around;\">
    {{ include('flash.html.twig') }}
    </div>
    <div style=\"display: flex\">
    {% for hand in hands %}
        <table>
        <th>Hand {{ i + 1 }}</th>
        <tr><td>
        {% for card in cards[i] %}
            <img src=\"{{ asset('img/cards/'~ card ~'.svg') }}\" width=\"100px\">
        {% endfor %}</td></tr>
        <tr><td>{{ hand.blackJackPoints }}</td></tr>
        <tr><td>Current bet: {{bets[i]}}</td><tr>
        {% if (hand.blackJackPoints < 21) and (done[i] == \"no\") %}
        <tr><td>
            <form method=\"post\" action=\"{{ path('bj_hit') }}\">
            <input type=\"number\" name=\"hand\" value={{ i }} hidden=\"true\">
            <input type=\"submit\" name=\"do_it\" value=\"Hit\">
            </form>
            <form method=\"post\" action=\"{{ path('bj_stand') }}\">
            <input type=\"number\" name=\"stand\" value={{ i }} hidden=\"true\">
            <input type=\"submit\" name=\"do_it\" value=\"Stand\">
            </form></td></tr>
        {% endif %}
        {% set i = i +1 %}
        </table>
    {% endfor %}
    </div>

    <table>
    <th>Player: {{ name }}</th>
    <th>Statistics:</th>
    <th>Deck:</th>
    <tr>
    <td>Current balance: {{ money }}<br>
    Games played: {{ games_played }}</td>
    <td>Chance of next card is 10 or higher:<br> 
    <h3>{{ stat }}%</h3><br></td>
    <td>Cards left in deck: {{ left }}</td>
    </tr>
    </table>



{% endblock %}", "proj/blackjack.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/proj/blackjack.html.twig");
    }
}
