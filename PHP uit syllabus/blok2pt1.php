<head>
    <title>Blok 2!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/heart icon.gif" type="image/gif">
    <!--Kijk Tomi, als je hem opent in Firefox, dan pulseert het hartje!-->
</head>

<body>
    <h1>BLOK 2</h1>
    <h2>Opdracht: 1.1 - WHAT IS OOP?</h2>
    <p>Leg in je eigen woorden uit wat het verschil is tussen flat PHP en Object Oriented Programming?<br> Let wel,
        eigen woorden: Ik heb het idee dat de OOP op een vergelijkbare manier werkt als classes in CSS/html. Je maakt
        een apart blokje/object waarin vanalles aangemaakt wordt en afspeelt. Vervolgens kun je dit object op
        verschillende plekken vaker doen 'afspelen'.</p>
    <p>Leg in je eigen woorden uit welke vier voordelen Object Oriented Programming heeft ten opzicht van flat PHP.<br>
        VIER? 1. Herbruiken van toepassingen. 2. Overzicht creëren in je code. 3. Volgens W3 is het sneller en
        makkelijker uit te voeren. 4. Niet alleen hoef je jezelf niet alsmaar te herhalen, maar dit zorgt er ook voor
        dat de code makkelijker te de-buggen is.</p>
    <p>Leg in je eigen woorden uit wat de twee hoofdonderdelen zijn van Object Oriented Programming?<br> Classes en
        objects. Een class is dus wat ik met CSS vergeleek, een pakketje met allemaal bruikbare onderdelen. De object
        zijn deze onderdelen. Dit kunnen variabelen met berekeningen zijn, of functies die vervolgens toegepast worden.
        Enz enz.</p>
    <p>Leg in je eigen woorden uit wat het verschil is tussen een Class en een Object?<br> Ik hoop dat ik deze vraag
        duidelijk genoeg heb beantwoord hierboven.</p>
    <p>Leg in je eigen woorden uit wat er overgeërfd wordt van een Class als een object aangemaakt wordt?<br> Volgens W3
        erft een object alle properties en behaviors van de class, maar elk object heeft eigen values voor de
        properties.</p>
    <p>Bedenk zelf een voorbeeld van een Class en bijbehorende Objecten anders dan afgebeeld op W3SCHOOLS.<br> Class:
        Games. Objects: Mario Sunshine, Bloodborne, Shadow of the Colossus en Doki Doki Literature Club.</p>
    <br>
    <h2>Opdracht: 1.2 - Classes and Objects</h2>
    <p>Objecten erven dingen van elkaar over. Leg uit in je eigen woorden uit wat het verschil is tussen objecten?<br>
        Je kunt meerdere objecten maken op basis van een class. Je kunt deze objecten andere namen geven dan elkaar en
        dan de class. Vervolgens kun je de veriabelen/properties binnen je objecten aanpassen. Je verandert dan deze
        objecten, maar de class blijft precies zoals hij was.</p>
    <p>Wat is de meest basic Syntax definitie van een Class? Uit welke drie onderdelen bestaat deze Syntax?<br> class
        className {Properties en methods}. Zo ongeveer. 1. Je roept aan dat je een class aanmaakt. 2. Deze krijgt een
        naam waarmee je de class later weer op kan roepen/een object uit kan maken. 3. Properties en methods die in deze
        class komen te zitten. </p>
    <p>Hoe worden variables en functions in een Class genoemd?<br> Properties en methods.</p>
    <p>Uit welke twee verschillende soorten fundamentele onderdelen kan de body van een Class bestaan?<br> Volgens mij
        is het antwoord weer properties en methods.</p>
    <p>Hoeveel objects kunnen er van een Class gemaakt worden?<br> Minstens 1.</p>
    <p>Welke keyword gebruik je om je object mee aan te maken?<br> $naam = new className();. Keyword is new, dacht ik?
    </p>
    <p>Waar wordt het “$this” keyword voor gebruikt?<br> Wordt gebruikt IN methods om te refereren naar de huidige
        object.</p>
    <p>Hoe kan je een property van binnen in de Class veranderen versus buiten de klasse?<br> Binnen: $this->property =
        nieuweValue; <br> Buiten: $objectName->property = nieuweValue;</p>
    <p>Waar kun je de keyword instanceOf voor gebruiken?<br> instanceOf kun je gebruiken om te checken of een object
        onderdeel is van een specifieke class.</p>
    <br>
    <h2>Opdracht: 1.3 - Constructor</h2>
    <p>Leg uit waar een Constructor voor gebruikt wordt en wat het voordeel is?<br> Vergelijkbaar met dat een functie
        een parameter (of meer) heeft die je invult wanneer je de functie oproept, heb je bij een class met de construct
        dat je twee 'parameters' die de properties aanpast. In deze voorbeelden wordt construct gebruikt om met een
        functie direct twee parameters ($name en $color) toe te wijzen aan met name en color. Ik vergeet het aller
        belangrijkste bijna: wanneer een object wordt aangemaakt van de class, dan wordt een functie met construct
        direct aangeroepen. Dit kan dus waarschijnlijk ook op andere manier gebruikt worden dan alleen het toewijzen van
        parameters.</p>
    <p>Hoe ziet de basic syntax van de Constructor eruit?<br> function __construct(parameter1, parameter 2, enz){dingen
        die
        gebeuren in de functie}.</p>
    <br>
    <h2>Opdracht: 1.4 - Access Modifiers</h2>
    <p>Welke drie Access Modifier bestaan er?<br> Public, protected en private.</p>
    <p>Wat zijn hun verschillende rollen?<br> Ze zorgen ervoor dat onderdelen in sommige lagen wel toegankelijk zijn en
        anderen niet.</p>
    <p>Op welke twee onderdelen van een Class kan je Access Modifiers gebruiken?<br> properties en methods.</p>
    <p>Wat denk je dat het nut is van Access Modifiers in een “echte” applicatie?<br> Meer controle over (en juist
        gebruiken van) variabelen.</p>
    <br>
    <h2>Opdracht: 1.5 - Inheritance</h2>
    <p>Wat is Inheritance?<br> When a class derives from another class.</p>
    <p>Wat is het verschil tussen een Child Class en een Parent Class?<br> De child heeft alles geërfd van de parent,
        maar vervolgens kun je de child aanpassen. Vervolgens zijn ze niet hetzelfde meer.</p>
    <p>Welke keyword wordt gebruikt om aan te geven dat er Inheritance plaatsvindt? Wat is de basis Syntax van
        Inheritance in zijn geheel?<br> extends. class naamChildClass extends naamParentClass {dingen die nieuw zijn in
        de Child}</p>
    <p>Hoe kan je Inherited Methods Overridden? Wat is het nu hiervan denk je?<br> In het voorbeeld op w3 wordt een
        volledig nieuwe class geschreven, in principe. Maar het voorbeeld laat zien dat het letterlijk OVER de andere
        dingen heenschrijft. Zo voegt het de propertie weight toe, maar verandert het ook de intro functie.</p>
    <p>Waar wordt de Final keyword voor gebruikt?<br> Wanneer een property of method final toegewezen krijgt, dan kan
        deze onmogelijk ge-enherit worden. In de voorbeelden op w3 resulteert dit in een error.</p>
    <br>
    <h2>Opdracht: 1.6 - Class Constants</h2>
    <p>Wat is het nut van een Class Constant?<br> Als ik de beperkte informatie hierover op w3 begrijp, is het niet
        anders dan andere constants. Het komt eropneer dat de constant aangemaakt wordt en vervolgens nooit meer
        veranderd wordt. Ik weet niet of dit overdraagd naar een child, maar het nut is dat als iets altijd hetzelfde
        werkt of is, dat dit ook niet veranderd kan worden en dus beperk je hiermee de mogelijkheid tot fouten.</p>
    <p>Hoe declareer je een Class Constant?<br> 'const' vóór je 'variabele' of property. Dit is dan geen variabele meer,
        maar een constante.</p>
    <p>Hoe verschilt een Class Constant van een Class Property?<br> Dat deze niet meer veranderd kan worden. Een normale
        Property kan nog wel veranderd worden.</p>
    <p>Hoe access je een Class Constant van buiten de Class?<br> In het eerste voorbeeld op w3 wordt duidelijk buiten de
        class classnaam::constantnaam gebruikt om de constant in de class aan te roepen.</p>
    <p>Hoe access je een Class Constant van binnen de Class?<br> In het tweede voorbeeld wordt ook :: gebruikt, maar dan
        met self ervoor ipv classnaam. In weze gebeurt in beide gevallen hetzelfde.</p>
    <br>
    <h2>Opdracht: 1.7 - Static Methods</h2>
    <p>Wat is het verschil tussen een Static Method en een reguliere Class Method?<br> Normaliter moet er eerst een
        instance/object aangemaakt worden van een class voor de inhoud gebruikt kan worden. Wanneer een onderdeel van
        een class static is, dan kan deze direct gebruikt/aangeroepen worden zonder eerst een instance of object te
        maken van de class. Ook kan een static method gebruikt worden in een andere method, maar ook binnen dezelfde
        class met self::className.</p>
    <p>Hoe ziet de Syntax van een Static Method eruit?<br> Je zet 'static' voor 'function', vervolgens roep je hem aan
        met Classname::staticMethod();</p>
    <p>Hoe gebruik je de Static Method? <br> Met Classname::staticMethod();</p>
    <br>
    <h2>Opdracht: 1.8 - Static Properties</h2>
    <p>Wat is het verschil tussen een Static Property en een reguliere Property?<br> Hier geldt eigenlijk hetzelfde als
        voor de classes. Gebruik static zodat properties op andere plekken gebruikt kunnen worden.</p>
    <p>Hoe declareer je een Static Property?<br> Ook op dezelfde manier. Door static voor de declared naam van de
        property te zetten.</p>
    <p>Hoe gebruik je een Static Property <b>binnen</b> een Class?<br> className::$propertyName; , maar in dit geval kun
        je ook 'this' doen ipv 'className'.</p>
    <p>Hoe gebruik je een Static Property <b>buiten</b> een Class?<br> className::$propertyName;</p>
    <br>

</body>