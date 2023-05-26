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

/* api.html.twig */
class __TwigTemplate_68cc092d5aeb5ccb4c0a85d012352305 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "api.html.twig", 1);
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

        echo "Api";
        
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
        echo "    <h1>Api<hr></h1>
    <h4>Dagens citat:</h4>
    <p>Läs ett slumpässigt utvalt citat, visa dagens datum.</p>
    <div><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quote");
        echo "\"><button>Random quote</button></a></div><hr>

    <h4>Visa kortlek:</h4>
    <p>Visa kortleken sorterad efter färg och valör.
    <div><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deck_api");
        echo "\"><button>Show sorted deck</button></a></div><hr>

    <h4>Blanda kortlek:</h4>
    <p>Blanda kortleken och lägg tillbaka alla dragna kort.</p>
    <form method=\"post\" action=\"\">
    <p>
        <input type=\"submit\" name=\"Shuffle\" value=\"Shuffle\"
            onClick=\"this.form.action='";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shuffle_api");
        echo "';\">
    </p>
    </form><hr>

    <h4>Dra ett kort:</h4>
    <p> Dra ett slumpässigt kort från kortleken.</p>
        <form method=\"post\" action=\"\">
    <p>
        <input type=\"submit\" name=\"Draw single card\" value=\"Draw single card\"
            onClick=\"this.form.action='";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_api");
        echo "';\">
    </p>
    </form><hr>

    <h4>Dra flera kort:</h4>
    <p>Välj hur många slumpässigt valda kort du vill dra från kortleken.</p>
    <form method=\"post\" action=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("many_api");
        echo "\">
    <input type=\"number\" name=\"cards\" min=\"1\" max=\"99\" value=\"1\">
    <input type=\"submit\" name=\"do_it\" value=\"Draw cards\">
    </form><hr>

    <h4>Aktuell ställning i kortspelet 21:</h4>
    <div><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_api");
        echo "\"><button>Kortspelet 21</button></a></div><hr>

    <h4>Se befintliga böcker i bilblioteket:</h4>
    <div><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_books_api");
        echo "\"><button>Library</button></a></div><hr>

    <h4>Visa bok via ISBN:</h4>
    <div><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_by_isbn", ["isbn" => 112233]);
        echo "\"><button>Book by ISBN</button></a></div><hr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "api.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 47,  146 => 44,  140 => 41,  131 => 35,  122 => 29,  110 => 20,  100 => 13,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Api{% endblock %}

{% block body %}
    <h1>Api<hr></h1>
    <h4>Dagens citat:</h4>
    <p>Läs ett slumpässigt utvalt citat, visa dagens datum.</p>
    <div><a href=\"{{ path('quote') }}\"><button>Random quote</button></a></div><hr>

    <h4>Visa kortlek:</h4>
    <p>Visa kortleken sorterad efter färg och valör.
    <div><a href=\"{{ path('deck_api') }}\"><button>Show sorted deck</button></a></div><hr>

    <h4>Blanda kortlek:</h4>
    <p>Blanda kortleken och lägg tillbaka alla dragna kort.</p>
    <form method=\"post\" action=\"\">
    <p>
        <input type=\"submit\" name=\"Shuffle\" value=\"Shuffle\"
            onClick=\"this.form.action='{{ path('shuffle_api') }}';\">
    </p>
    </form><hr>

    <h4>Dra ett kort:</h4>
    <p> Dra ett slumpässigt kort från kortleken.</p>
        <form method=\"post\" action=\"\">
    <p>
        <input type=\"submit\" name=\"Draw single card\" value=\"Draw single card\"
            onClick=\"this.form.action='{{ path('single_api') }}';\">
    </p>
    </form><hr>

    <h4>Dra flera kort:</h4>
    <p>Välj hur många slumpässigt valda kort du vill dra från kortleken.</p>
    <form method=\"post\" action=\"{{ path('many_api') }}\">
    <input type=\"number\" name=\"cards\" min=\"1\" max=\"99\" value=\"1\">
    <input type=\"submit\" name=\"do_it\" value=\"Draw cards\">
    </form><hr>

    <h4>Aktuell ställning i kortspelet 21:</h4>
    <div><a href=\"{{ path('game_api') }}\"><button>Kortspelet 21</button></a></div><hr>

    <h4>Se befintliga böcker i bilblioteket:</h4>
    <div><a href=\"{{ path('all_books_api') }}\"><button>Library</button></a></div><hr>

    <h4>Visa bok via ISBN:</h4>
    <div><a href=\"{{ path('book_by_isbn', {'isbn' : 112233}) }}\"><button>Book by ISBN</button></a></div><hr>
{% endblock %}", "api.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/api.html.twig");
    }
}
