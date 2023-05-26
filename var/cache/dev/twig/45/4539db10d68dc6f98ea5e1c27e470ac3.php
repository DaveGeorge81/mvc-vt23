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

/* /proj/database.html.twig */
class __TwigTemplate_480139d9a069720714612a627c6f9593 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/proj/database.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/proj/database.html.twig"));

        $this->parent = $this->loadTemplate("/proj/projbase.html.twig", "/proj/database.html.twig", 1);
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

        echo "About";
        
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
        echo "    <h1>Database<hr></h1>
<img style=\"margin: auto; display: block\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/proj/er-bj.png"), "html", null, true);
        echo "\" width=\"500\" alt=\"ER-diagram blackjack\">
<p>Som vi ser i bilden ovan innehåller databasen två tabeller: Player och Dealer. Player-tabellen sparar varje spelares namn, pengar och
hur många rundor som spelades. Dealer-tabellen sparar statistik om banken, hur många givar den har haft och hur många av dessa som varit vinst, förlust och
push (när spelaren och banken har samma värde).</p>

<p>Som synes så har tabellerna ingen relation till varandra. Jag försökte initialt komma på tabeller som kunde stå i relation till varanda, men det var lättare
sagt än gjort med tanke på vad jag sparar till databasen. Som databas valde jag SQLite då det var vad jag jobbat med i tidigare kursmoment och eftersom tiden var
begränsad valde jag att lägga den på att utveckla kortspelet istället för att sätta mig in i hur jag skulle gjort med t ex MariaDB. Precis som i kursmoment lyckades
jag inte få till några enhetstester mot databasen, jag har läst instruktionerna åtaliga gånger, men jag får inte rätsida på det. Så det blev inga enhetstester mot 
databasen även denna gång. Kanske man vågar hoppas på en genomgång av detta i framtida kurser?</p>

<p>Att jobba med databasen via ORM är inget jag är jätteförtjust i. Det beror nog mest på att jag känner mig betydligt tryggare med att jobba
på det sätt vi gjorde i databaskursen. Det är möjligt att min åsikt ändras om jag arbetar mer med ORM. Men som jag skrev i kursmoment 05 så är ORM ett bra sätt om
man vill slippa jobba med sql-kod. En annan fördel med ORM är att det blir en mellanhand mellan relationsdatabasen och den objektorienterade programmeringen. Jag uppelver
det som att det blir mindre kod att skriva i och med alla metoder skapas per automatik när man lägger upp tabellen i doctrine. Jag har inte provat att göra några joins i ORM
då mina tabeller inte riktigt gav den möjligheten, men det utförs lite annorlunda än i SQL om jag förstod det rätt. Det går att göra på flera sätt. Men jag tycker det verkar
enklast att bara ändra i entity-klassen genom att lägga till getter/setter-metoder som kopplar till den andra tabellen, med en ny konstruktor som skapar en ArrayCollection i andra
tabellen. Återigen eftersom jag känner mig mer bekväm med SQL känns det mycket enklare att joina på det sättet.</p>

<p>Nackdelarna med att jobba med ORM istället för ren SQL handlar väl främst i mitt fall om okunskap. Jag upplever att jag har mycket bättre koll på vad som visas upp och hur det
visas upp när jag jobbar som vi gjorde i databaskursen. I min player-lista hade jag t ex velat sortera spelarna efter hur mycket pengar de hade, men jag lyckades inte komma på hur.
Rimligen borde ju detta gå, annars ser jag inte riktigt någon vinning i ORM. Men i SQL är det väldigt enkelt att bara ha med ett \"ORDER BY\". Överlag upplever jag ORM som lite av en
light-variant av att jobba med databaser. Men det kanske bara är ett första intryck, ju mer jag lär mig kanske får mig att ändra uppfattning.</p>

<img style=\"margin: auto; display: block\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/proj/joker.png"), "html", null, true);
        echo "\" width=\"600\" alt=\"joker cards\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "/proj/database.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/proj/projbase.html.twig\" %}

{% block title %}About{% endblock %}

{% block body %}
    <h1>Database<hr></h1>
<img style=\"margin: auto; display: block\" src=\"{{ asset('img/proj/er-bj.png') }}\" width=\"500\" alt=\"ER-diagram blackjack\">
<p>Som vi ser i bilden ovan innehåller databasen två tabeller: Player och Dealer. Player-tabellen sparar varje spelares namn, pengar och
hur många rundor som spelades. Dealer-tabellen sparar statistik om banken, hur många givar den har haft och hur många av dessa som varit vinst, förlust och
push (när spelaren och banken har samma värde).</p>

<p>Som synes så har tabellerna ingen relation till varandra. Jag försökte initialt komma på tabeller som kunde stå i relation till varanda, men det var lättare
sagt än gjort med tanke på vad jag sparar till databasen. Som databas valde jag SQLite då det var vad jag jobbat med i tidigare kursmoment och eftersom tiden var
begränsad valde jag att lägga den på att utveckla kortspelet istället för att sätta mig in i hur jag skulle gjort med t ex MariaDB. Precis som i kursmoment lyckades
jag inte få till några enhetstester mot databasen, jag har läst instruktionerna åtaliga gånger, men jag får inte rätsida på det. Så det blev inga enhetstester mot 
databasen även denna gång. Kanske man vågar hoppas på en genomgång av detta i framtida kurser?</p>

<p>Att jobba med databasen via ORM är inget jag är jätteförtjust i. Det beror nog mest på att jag känner mig betydligt tryggare med att jobba
på det sätt vi gjorde i databaskursen. Det är möjligt att min åsikt ändras om jag arbetar mer med ORM. Men som jag skrev i kursmoment 05 så är ORM ett bra sätt om
man vill slippa jobba med sql-kod. En annan fördel med ORM är att det blir en mellanhand mellan relationsdatabasen och den objektorienterade programmeringen. Jag uppelver
det som att det blir mindre kod att skriva i och med alla metoder skapas per automatik när man lägger upp tabellen i doctrine. Jag har inte provat att göra några joins i ORM
då mina tabeller inte riktigt gav den möjligheten, men det utförs lite annorlunda än i SQL om jag förstod det rätt. Det går att göra på flera sätt. Men jag tycker det verkar
enklast att bara ändra i entity-klassen genom att lägga till getter/setter-metoder som kopplar till den andra tabellen, med en ny konstruktor som skapar en ArrayCollection i andra
tabellen. Återigen eftersom jag känner mig mer bekväm med SQL känns det mycket enklare att joina på det sättet.</p>

<p>Nackdelarna med att jobba med ORM istället för ren SQL handlar väl främst i mitt fall om okunskap. Jag upplever att jag har mycket bättre koll på vad som visas upp och hur det
visas upp när jag jobbar som vi gjorde i databaskursen. I min player-lista hade jag t ex velat sortera spelarna efter hur mycket pengar de hade, men jag lyckades inte komma på hur.
Rimligen borde ju detta gå, annars ser jag inte riktigt någon vinning i ORM. Men i SQL är det väldigt enkelt att bara ha med ett \"ORDER BY\". Överlag upplever jag ORM som lite av en
light-variant av att jobba med databaser. Men det kanske bara är ett första intryck, ju mer jag lär mig kanske får mig att ändra uppfattning.</p>

<img style=\"margin: auto; display: block\" src=\"{{ asset('img/proj/joker.png') }}\" width=\"600\" alt=\"joker cards\">

{% endblock %}", "/proj/database.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/proj/database.html.twig");
    }
}
