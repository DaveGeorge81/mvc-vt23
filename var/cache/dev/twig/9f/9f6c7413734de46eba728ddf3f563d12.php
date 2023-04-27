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

/* report.html.twig */
class __TwigTemplate_650b070136375238094c0adee138600b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
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

        echo "Report";
        
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
        echo "<h1>Redovisningstexter<hr></h1>
<div class=\"two-col-layout\">
    <aside class=\"aside\">
        <h4>Innehåll:</h4>
    <ul>
        <li><a href=\"#kmom01\">kmom01</a></li>
        <li><a href=\"#kmom02\">kmom02</a></li>
        <li><a href=\"#kmom03\">kmom03</a></li>
        <li><a href=\"#kmom04\">kmom04</a></li>
        <li><a href=\"#kmom05\">kmom05</a></li>
        <li><a href=\"#kmom06\">kmom06</a></li>
        <li><a href=\"#kmom10\">kmom10</a></li>
    </ul>
    </aside>
    <main class=\"main\">
        <section><h2 id=\"kmom01\">kmom01</h2>
        <p>Första veckan i kursen Objektorienterade webbteknoligier, eller som den även förkortas till; mvc. Mina förkunskaper gällande objektoriernterad programmering
        är relativt begränsade. Jag läste oopython-kursen tidigare i vår, och det var i början ganska krångligt att greppa. Men känner ändå att jag fick rätsida på
        det under kursens gång. Det är ett litet annat tankesätt när man jobbar obejktorienterat, men tror ändå att jag har kommit att föredra det.</p>

        <p>I PHP räcker det inte med att bara skapa klasser, man måste även skapa ett så kallat namespace. Man kan se namespace som en mapp eller katalog vari koden körs. Detta 
        för att klassnamnen inte ska krocka med andra klasser. Detta är något jag inte kände igen från oopython-kursen, men verkar hittills inte krångligare än att man anger sitt
        namespace i början i sina controller-filer. I detta första kursmoment uppelver jag inte att vi mer än skrapat på ytan då de klasser vi skapat i princip enbart består av routes
        till de olika sidorna vi skapat. Men antar att vi kommer gå djupare med att skapa objekt i våra klasser i framtida kursmoment.</p>

        <p>Den struktur som vi byggt upp med hjälp av Symfony påminner en del om express som vi använde i databaskursen, men jag kan även se vissa likheter med flask som vi använde i 
        oopython. Det är alltid lite rörigt i början när man inte är helt van vid kodstrukturen, men det ska nog inte vara några problem att använda detta. En del av kraven var dock lite
        kluriga att få till. Var tvungen att gå tillbaka och titta på en och två gånger hur jag gjort i webtec-kursen i höstas. Man glömmer ganska snabbt när man inte använder något, och 
        PHP har jag knappt använt sedan dess. Men samtidigt är inte startsträckan särskilt lång när väl börjar tänka tillbaka på vad man lärt sig tidigare. </p>

        <p>Artikeln \"PHP The Right Way\" var ganska överväldigande och handen på hjärtat läste jag inte igenom den rad för rad. Något jag fann intressant var varför vi använder templates,
        det är inte första gången vi arbetar med detta och har väl egentligen aldrig reflekterat över varför vi faktiskt gör det. Jag fick här en ganska bra förklaring att det underlättar
        att separera koden och det som presenteras på webbsidan då det blir mer överskådlig, inte minst om man jobbar i team och en sitter med koden på serversidan och en annan med designen
        på klientsidan. Jag fick även lite mer kött på benen gällande det här med namespace, som jag bekrev ovan.</p>

        <p>Veckans TIL har precis som alltid vid kursuppstart varit en hel del. Men det jag nog känner mest för är att jag ökat min förståelse för GIT. Vi använde det i design-kursen i höstas,
        men jag kände mig väldigt osäker varenda vecka på hur jag skulle göra, och den skrivna guiden var ganska rörig att leta sig igenom vecka efter vecka. Mikales git-guide på youtube var
        väldigt mycket enklare att ta till sig och jag känner mig betydligt säkrare på git efter att ha sett den.</p>


        <hr>
        <h2 id=\"kmom02\">kmom02</h2>
        <p>Den här veckan har vi jobbat vidare med klasser i php. Vi har skapat en kortlek med lite olika funktioner. Jag tyckte egentligen inte det var så svårt att greppa,
        men det tog väldigt lång tid att komma igång och jag gjorde det nog initialt betydligt svårare än vad som hade behövts.</p>

        <p>Arv, interface, composition och trait var mestadels nytt för mig. Vi har pratat om arv i oopython och composition så det kände jag mig ändå lite bekant med. Arv är 
        när man skapar en klass som tar allt som klassen den ärver av, men kan lägga till vissa saker utan att det påverkar själva huvudklassen. I mitt fall gjorde jag ett arv
        på Card-klassen när jag skapade CardGraphic. I CardGraphic la jag till en array där kortets värde kan kopplas till en specifik bild. Composition är som ett beroende. Att den
        ena klassen inte kan existera utan den andra. Här valde jag att låta både DeckOfCards och CardHand vara sådana konstruktioner. En kortlek kan inte finnas om det inte finns några kort
        och en hand med kort kan inte heller den finnas om det inte finns några kort. Interface var nytt för mig och jag kom inte riktigt på hur jag skulle implementera det i mina klasser. Men
        man kan i alla fall säga att ett interface är en typ samling av metoder en klass ska innehålla, men inte hur de ska implementeras. Som jag förstod det så innebär detta t ex att jag inte 
        hade behövt hårdkoda CardGraphic i min DeckOfCards, utan att man kan göra det mer flexibelt med interface. Som jag skrev fick jag aldrig ritkigt ihop koden med interface, så jag fick nöja
        mig med att hårdkoda denna gång. Trait är något som gör att en klass kan återanväda kod från ett trait utan att behöva implemetera det i själva metoden. Detta används ofta i språk där
        klasser inte kan ärva från mer än en klass. Även detta var något jag inte riktigt fick koll på exakt hur jag skulle göra, utan tänker att jag kanske får återkomma till det i senare kursmoment.</p>

        <p>Som jag skrev i början av texten hade jag väldigt svårt att komma igång med detta. Det var svårt att veta exakt var jag skulle börja när det var såpass öppna instruktioner. Jag började i alla fall
        med att skapa klassen Card, och därefter CardGraphic, CardHand och DeckOfCards. Det tog mig ganska lång tid att komma underfund med hur jag skulle göra för att skapa kortleken så att alla kort fanns med.
        När den väl var skapad kom nästa stora problem. Att ta bort kort från leken. Initialt gjorde jag det rätt mycket mer komplicerat än vad det behövde vara. Jag hade numrerat alla kort, och tänkt att jag då
        slumpar fram ett nummer mellan 0-51 och tar bort kortet med det numret. För att inte samma kort skulle försöka tas bort mer än en gång la jag varje draget nummer i en array som \"random\" sen exkluderade.
        Jag märkte dock att detta ibland genererade ett null-värde. Efter åtskilliga timmars felsökning utan framgång kom jag på att det var mycket enklare att bara blanda leken och ta bort de översta korten. Denna
        metod gav inte några slumpässiga null-värden som tur var så när jag väl ändrade detta så löste jag de andra uppgifterna. API-delen var inte så svår, men jag fick klura lite på hur jag skulle göra med
        sessionen. Först hade jag tänkt att kortleken till API-delen inte skulle innhålla CardGraphic utan vanliga Card. Problemet var att jag ville behålla sessionen oavsett om man tittade i api-delen eller 
        på card-sidan. För att lösa detta fick jag skapa nya getAsString-metoder som jag kallade getAsStringJson för att rätt data skulle visas berode på var man kollar.</p>

        <p>Överlag är jag ganska nöjd med slutresultatet av kursmomentet, men jag är lite missnöjd över att det tog mig så lång tid att färdigställa. Jag hoppas på bättre flyt i kmom03. Förbättringspotentialen
        ser jag främst i att jag kanske kunde implementerat ett interface så att jag inte behövt hårdkoda i DeckOfCards och kanske något trait då många metoder är samma i de olika klasserna. Det var som sagt ganska 
        klurig att göra en sån här fri uppgift, men jag känner ändå att jag har lärt mig mycket och kan tänka mig att detta är ett bra sätt att träna på hur det kan vara i en framtida yrkesroll.</p>

        <p>Veckans TIL blir det fortsatta arbetet med symfony och då framför allt hur man kan jobba med sesisonen, men även lite mer förståelse för hur POST och GET fungerar. </p>

        
        <hr>
        <h2 id=\"kmom03\">kmom03</h2>
        <p>Denna vecka har vi fått utveckla ett eget kortspel. Som en del i detta skulle vi göra både ett flödesschema och skriva psuedokod. Flödesschemat var relativt enkelt att göra då jag tyckte det
        kändes ganska logiskt hur man skulle rita upp det. Eftersom jag gjorde det innan jag började skriva koden blev det inte exakt som i slutända men det är väl lite det som är tanken, att man har ett skal att
        utgå från som man senare kan finslipa ju mer man jobbar med det. Psuedokoden tyckte jag var lite klurigare. Det var inte helt lätt att bestämma vad jag skulle fokusera på, i ett par fall kom jag inte på hur 
        jag skulle få fram det jag skulle koda i psuedokoden, t ex om spelaren vill stanna eller dra ett nytt kort. Jag valde därför enbart att skriva psuedokod för banken spelrunda. Det kändes mer logisk då jag vet
        när banken stannar eller drar ett nytt kort. Det finns lite olika sätt att skriva psuedokod på, men jag skriva den som kommentarer man sedan kan ta in i källfilen när man ska koda. Det tycker jag känns som ett
        anävndbart sätt att använda psuedokoden på och något jag förmodligen kommer använda mig av i framtiden. Jag har väl inte riktigt kommit in i problemlösningstankesättet riktigt ännu utan oftast sätter jag igång och
        börjar koda direkt. Det blir då ofta att man gör lite här och lite där och sen i slutändan måste ändra en massa, så jag kan absolut se fördelar med att jobba så här.</p>

        <p>Jag valde att göra kortspelet 21. Det var inte så svårt att komma igång och låta spelaren dra kort. Den koden hade jag ju redan från kmom02. Det jag tyckte var svårast var faktiskt hur jag skulle få spelet att se
        Ess som både 1 och 14. Jag tänkte som vanligt i mer avancerade banor än jag behövde, men kom tillslut fram till att det enklaste vore att spela essen som 14 så länge inte poängen överstiger 21. Efter lite klurande kom
        jag fram till att detta enklast löstes med en while-loop. Jag är inte jättevan vid att arbeta med while-loopar då jag tenderar att luta mig mot if-satser och for-loopar. Men i detta fallet var det smidigare med en while-loop.
        Att sen låta datorn spela en runda var inte heller det särskilt svårt. Även här insåg jag att en while-loop också kunde vara på sin plats. Så länge datorns poäng understiger 17 dras ett nytt kort. Jag hade först tänkt
        att jag skulle göra samtliga extra-krav, för jag tyckte de verkade lagom utmanande. Dessvärre drog jag på mig kraftig förklylning vilket gjorde att jag inte hann med alla. Jag lyckades dock lägga in att man kan satsa pengar
        och att man spelar tills dess att antingen banken eller spelaren är bankrutt. Jag främst att bara jobba med de klasser vi skapade i kmom02. Men när jag skulle implementera betting-funktionen tänkte jag att det vore smidigt
        att skapa en Player-klass också. Det blev en ganska liten klass, men hade kunnat utvecklas mer om man gör spelet mer avancerat. Det jag tyckte var absolut svårast var att försöka hålla controller-filerna så små som möjligt.
        Tycker inte att jag skriver mycket kod där egentligen men en while-loop här och en eller två if-satser där så känns de inte så magra längre. Dock så består koden i controller-filerna mest av kallandet på metoder så det kanske
        inte är så farligt ändå? Men det är nog den främsta förbättringspotentialen jag ser med mitt arbete. Designen är jag relativt nöjd med. Hade kunnat göra knapparna lite snyggare t ex, men css-styling tar ofta lång tid och tyvärr
        oftast det som hamnar längst ner på prioriteringslistan.</p>

        <p>Jag känner att jag börjar få lite bättre grepp om symfony nu. Twig, controller och class-filerna är inga problem. Men ibland glömmer man lite i vilka filer man gör vad. Jag satt förgäves och letade efter var jag implementerat
        flash-meddelanden nånstans för att se så jag inte gjort något fel då min css-kod inte ville fungera. Var säker på att de skulle ligga i antingen app.js eller index.html eller någon sådan fil. Men tillslut visade det sig att det var
        en vanlig twig-fil det låg i. Förmodligen rörde jag ihop det med toast-meddelande från webapp-kursen. Jag känner också att jag tycker POST och GET metoderna börjar falla mer och mer på plats nu. När jag skapade post-formuläret för 
        att kunna satsa pengar behövde jag inte ens kolla på min gamla kod, det föll sig helt naturligt hur jag skulle göra, så det känns bra.</p>

        <p>Veckans TIL har kanske inte så mycket med just symfony att göra, det är mer själva problemlösningstankesättet jag känner jag fått förståelse för. Men också att jag lärt mig använda while-loopar på ett användbart sätt.</p>

        <hr>
        <h2 id=\"kmom04\">kmom04</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <hr>
        <h2 id=\"kmom05\">kmom05</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <hr>
        <h2 id=\"kmom06\">kmom06</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <hr>
        <h2 id=\"kmom10\">kmom10</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>
        <hr></section>
        </main>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Report{% endblock %}

{% block body %}
<h1>Redovisningstexter<hr></h1>
<div class=\"two-col-layout\">
    <aside class=\"aside\">
        <h4>Innehåll:</h4>
    <ul>
        <li><a href=\"#kmom01\">kmom01</a></li>
        <li><a href=\"#kmom02\">kmom02</a></li>
        <li><a href=\"#kmom03\">kmom03</a></li>
        <li><a href=\"#kmom04\">kmom04</a></li>
        <li><a href=\"#kmom05\">kmom05</a></li>
        <li><a href=\"#kmom06\">kmom06</a></li>
        <li><a href=\"#kmom10\">kmom10</a></li>
    </ul>
    </aside>
    <main class=\"main\">
        <section><h2 id=\"kmom01\">kmom01</h2>
        <p>Första veckan i kursen Objektorienterade webbteknoligier, eller som den även förkortas till; mvc. Mina förkunskaper gällande objektoriernterad programmering
        är relativt begränsade. Jag läste oopython-kursen tidigare i vår, och det var i början ganska krångligt att greppa. Men känner ändå att jag fick rätsida på
        det under kursens gång. Det är ett litet annat tankesätt när man jobbar obejktorienterat, men tror ändå att jag har kommit att föredra det.</p>

        <p>I PHP räcker det inte med att bara skapa klasser, man måste även skapa ett så kallat namespace. Man kan se namespace som en mapp eller katalog vari koden körs. Detta 
        för att klassnamnen inte ska krocka med andra klasser. Detta är något jag inte kände igen från oopython-kursen, men verkar hittills inte krångligare än att man anger sitt
        namespace i början i sina controller-filer. I detta första kursmoment uppelver jag inte att vi mer än skrapat på ytan då de klasser vi skapat i princip enbart består av routes
        till de olika sidorna vi skapat. Men antar att vi kommer gå djupare med att skapa objekt i våra klasser i framtida kursmoment.</p>

        <p>Den struktur som vi byggt upp med hjälp av Symfony påminner en del om express som vi använde i databaskursen, men jag kan även se vissa likheter med flask som vi använde i 
        oopython. Det är alltid lite rörigt i början när man inte är helt van vid kodstrukturen, men det ska nog inte vara några problem att använda detta. En del av kraven var dock lite
        kluriga att få till. Var tvungen att gå tillbaka och titta på en och två gånger hur jag gjort i webtec-kursen i höstas. Man glömmer ganska snabbt när man inte använder något, och 
        PHP har jag knappt använt sedan dess. Men samtidigt är inte startsträckan särskilt lång när väl börjar tänka tillbaka på vad man lärt sig tidigare. </p>

        <p>Artikeln \"PHP The Right Way\" var ganska överväldigande och handen på hjärtat läste jag inte igenom den rad för rad. Något jag fann intressant var varför vi använder templates,
        det är inte första gången vi arbetar med detta och har väl egentligen aldrig reflekterat över varför vi faktiskt gör det. Jag fick här en ganska bra förklaring att det underlättar
        att separera koden och det som presenteras på webbsidan då det blir mer överskådlig, inte minst om man jobbar i team och en sitter med koden på serversidan och en annan med designen
        på klientsidan. Jag fick även lite mer kött på benen gällande det här med namespace, som jag bekrev ovan.</p>

        <p>Veckans TIL har precis som alltid vid kursuppstart varit en hel del. Men det jag nog känner mest för är att jag ökat min förståelse för GIT. Vi använde det i design-kursen i höstas,
        men jag kände mig väldigt osäker varenda vecka på hur jag skulle göra, och den skrivna guiden var ganska rörig att leta sig igenom vecka efter vecka. Mikales git-guide på youtube var
        väldigt mycket enklare att ta till sig och jag känner mig betydligt säkrare på git efter att ha sett den.</p>


        <hr>
        <h2 id=\"kmom02\">kmom02</h2>
        <p>Den här veckan har vi jobbat vidare med klasser i php. Vi har skapat en kortlek med lite olika funktioner. Jag tyckte egentligen inte det var så svårt att greppa,
        men det tog väldigt lång tid att komma igång och jag gjorde det nog initialt betydligt svårare än vad som hade behövts.</p>

        <p>Arv, interface, composition och trait var mestadels nytt för mig. Vi har pratat om arv i oopython och composition så det kände jag mig ändå lite bekant med. Arv är 
        när man skapar en klass som tar allt som klassen den ärver av, men kan lägga till vissa saker utan att det påverkar själva huvudklassen. I mitt fall gjorde jag ett arv
        på Card-klassen när jag skapade CardGraphic. I CardGraphic la jag till en array där kortets värde kan kopplas till en specifik bild. Composition är som ett beroende. Att den
        ena klassen inte kan existera utan den andra. Här valde jag att låta både DeckOfCards och CardHand vara sådana konstruktioner. En kortlek kan inte finnas om det inte finns några kort
        och en hand med kort kan inte heller den finnas om det inte finns några kort. Interface var nytt för mig och jag kom inte riktigt på hur jag skulle implementera det i mina klasser. Men
        man kan i alla fall säga att ett interface är en typ samling av metoder en klass ska innehålla, men inte hur de ska implementeras. Som jag förstod det så innebär detta t ex att jag inte 
        hade behövt hårdkoda CardGraphic i min DeckOfCards, utan att man kan göra det mer flexibelt med interface. Som jag skrev fick jag aldrig ritkigt ihop koden med interface, så jag fick nöja
        mig med att hårdkoda denna gång. Trait är något som gör att en klass kan återanväda kod från ett trait utan att behöva implemetera det i själva metoden. Detta används ofta i språk där
        klasser inte kan ärva från mer än en klass. Även detta var något jag inte riktigt fick koll på exakt hur jag skulle göra, utan tänker att jag kanske får återkomma till det i senare kursmoment.</p>

        <p>Som jag skrev i början av texten hade jag väldigt svårt att komma igång med detta. Det var svårt att veta exakt var jag skulle börja när det var såpass öppna instruktioner. Jag började i alla fall
        med att skapa klassen Card, och därefter CardGraphic, CardHand och DeckOfCards. Det tog mig ganska lång tid att komma underfund med hur jag skulle göra för att skapa kortleken så att alla kort fanns med.
        När den väl var skapad kom nästa stora problem. Att ta bort kort från leken. Initialt gjorde jag det rätt mycket mer komplicerat än vad det behövde vara. Jag hade numrerat alla kort, och tänkt att jag då
        slumpar fram ett nummer mellan 0-51 och tar bort kortet med det numret. För att inte samma kort skulle försöka tas bort mer än en gång la jag varje draget nummer i en array som \"random\" sen exkluderade.
        Jag märkte dock att detta ibland genererade ett null-värde. Efter åtskilliga timmars felsökning utan framgång kom jag på att det var mycket enklare att bara blanda leken och ta bort de översta korten. Denna
        metod gav inte några slumpässiga null-värden som tur var så när jag väl ändrade detta så löste jag de andra uppgifterna. API-delen var inte så svår, men jag fick klura lite på hur jag skulle göra med
        sessionen. Först hade jag tänkt att kortleken till API-delen inte skulle innhålla CardGraphic utan vanliga Card. Problemet var att jag ville behålla sessionen oavsett om man tittade i api-delen eller 
        på card-sidan. För att lösa detta fick jag skapa nya getAsString-metoder som jag kallade getAsStringJson för att rätt data skulle visas berode på var man kollar.</p>

        <p>Överlag är jag ganska nöjd med slutresultatet av kursmomentet, men jag är lite missnöjd över att det tog mig så lång tid att färdigställa. Jag hoppas på bättre flyt i kmom03. Förbättringspotentialen
        ser jag främst i att jag kanske kunde implementerat ett interface så att jag inte behövt hårdkoda i DeckOfCards och kanske något trait då många metoder är samma i de olika klasserna. Det var som sagt ganska 
        klurig att göra en sån här fri uppgift, men jag känner ändå att jag har lärt mig mycket och kan tänka mig att detta är ett bra sätt att träna på hur det kan vara i en framtida yrkesroll.</p>

        <p>Veckans TIL blir det fortsatta arbetet med symfony och då framför allt hur man kan jobba med sesisonen, men även lite mer förståelse för hur POST och GET fungerar. </p>

        
        <hr>
        <h2 id=\"kmom03\">kmom03</h2>
        <p>Denna vecka har vi fått utveckla ett eget kortspel. Som en del i detta skulle vi göra både ett flödesschema och skriva psuedokod. Flödesschemat var relativt enkelt att göra då jag tyckte det
        kändes ganska logiskt hur man skulle rita upp det. Eftersom jag gjorde det innan jag började skriva koden blev det inte exakt som i slutända men det är väl lite det som är tanken, att man har ett skal att
        utgå från som man senare kan finslipa ju mer man jobbar med det. Psuedokoden tyckte jag var lite klurigare. Det var inte helt lätt att bestämma vad jag skulle fokusera på, i ett par fall kom jag inte på hur 
        jag skulle få fram det jag skulle koda i psuedokoden, t ex om spelaren vill stanna eller dra ett nytt kort. Jag valde därför enbart att skriva psuedokod för banken spelrunda. Det kändes mer logisk då jag vet
        när banken stannar eller drar ett nytt kort. Det finns lite olika sätt att skriva psuedokod på, men jag skriva den som kommentarer man sedan kan ta in i källfilen när man ska koda. Det tycker jag känns som ett
        anävndbart sätt att använda psuedokoden på och något jag förmodligen kommer använda mig av i framtiden. Jag har väl inte riktigt kommit in i problemlösningstankesättet riktigt ännu utan oftast sätter jag igång och
        börjar koda direkt. Det blir då ofta att man gör lite här och lite där och sen i slutändan måste ändra en massa, så jag kan absolut se fördelar med att jobba så här.</p>

        <p>Jag valde att göra kortspelet 21. Det var inte så svårt att komma igång och låta spelaren dra kort. Den koden hade jag ju redan från kmom02. Det jag tyckte var svårast var faktiskt hur jag skulle få spelet att se
        Ess som både 1 och 14. Jag tänkte som vanligt i mer avancerade banor än jag behövde, men kom tillslut fram till att det enklaste vore att spela essen som 14 så länge inte poängen överstiger 21. Efter lite klurande kom
        jag fram till att detta enklast löstes med en while-loop. Jag är inte jättevan vid att arbeta med while-loopar då jag tenderar att luta mig mot if-satser och for-loopar. Men i detta fallet var det smidigare med en while-loop.
        Att sen låta datorn spela en runda var inte heller det särskilt svårt. Även här insåg jag att en while-loop också kunde vara på sin plats. Så länge datorns poäng understiger 17 dras ett nytt kort. Jag hade först tänkt
        att jag skulle göra samtliga extra-krav, för jag tyckte de verkade lagom utmanande. Dessvärre drog jag på mig kraftig förklylning vilket gjorde att jag inte hann med alla. Jag lyckades dock lägga in att man kan satsa pengar
        och att man spelar tills dess att antingen banken eller spelaren är bankrutt. Jag främst att bara jobba med de klasser vi skapade i kmom02. Men när jag skulle implementera betting-funktionen tänkte jag att det vore smidigt
        att skapa en Player-klass också. Det blev en ganska liten klass, men hade kunnat utvecklas mer om man gör spelet mer avancerat. Det jag tyckte var absolut svårast var att försöka hålla controller-filerna så små som möjligt.
        Tycker inte att jag skriver mycket kod där egentligen men en while-loop här och en eller två if-satser där så känns de inte så magra längre. Dock så består koden i controller-filerna mest av kallandet på metoder så det kanske
        inte är så farligt ändå? Men det är nog den främsta förbättringspotentialen jag ser med mitt arbete. Designen är jag relativt nöjd med. Hade kunnat göra knapparna lite snyggare t ex, men css-styling tar ofta lång tid och tyvärr
        oftast det som hamnar längst ner på prioriteringslistan.</p>

        <p>Jag känner att jag börjar få lite bättre grepp om symfony nu. Twig, controller och class-filerna är inga problem. Men ibland glömmer man lite i vilka filer man gör vad. Jag satt förgäves och letade efter var jag implementerat
        flash-meddelanden nånstans för att se så jag inte gjort något fel då min css-kod inte ville fungera. Var säker på att de skulle ligga i antingen app.js eller index.html eller någon sådan fil. Men tillslut visade det sig att det var
        en vanlig twig-fil det låg i. Förmodligen rörde jag ihop det med toast-meddelande från webapp-kursen. Jag känner också att jag tycker POST och GET metoderna börjar falla mer och mer på plats nu. När jag skapade post-formuläret för 
        att kunna satsa pengar behövde jag inte ens kolla på min gamla kod, det föll sig helt naturligt hur jag skulle göra, så det känns bra.</p>

        <p>Veckans TIL har kanske inte så mycket med just symfony att göra, det är mer själva problemlösningstankesättet jag känner jag fått förståelse för. Men också att jag lärt mig använda while-loopar på ett användbart sätt.</p>

        <hr>
        <h2 id=\"kmom04\">kmom04</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <hr>
        <h2 id=\"kmom05\">kmom05</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <hr>
        <h2 id=\"kmom06\">kmom06</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

        <hr>
        <h2 id=\"kmom10\">kmom10</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>
        <hr></section>
        </main>
    </div>
{% endblock %}", "report.html.twig", "/home/david/dbwebb-kurser/mvc/me/report/templates/report.html.twig");
    }
}
