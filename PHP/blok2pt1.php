<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blok 2 part 1!</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="img/heart icon.gif" type="image/gif">
        <!--Kijk Tomi, als je hem opent in Firefox, dan pulseert het hartje!-->
</head>

<body>
        <div class="top" id=top style="margin-top:30px;">
                BLOK 2 - Niveau 1
        </div>
        <div class="mark" id=mark>
                <a href="https://codegorilla.nl/"><img src="img/CG.png" alt="CG logo" style="height:100px;"></a>
        </div>
        <ul class="menu" id=menu>
                <li><a href="index.php">Home</a></li>
                <li><a href="blok1.php">Blok 1</a></li>
                <li><a href="blok2pt1.php">Blok 2 (1/3)</a></li>
                <li><a href="blok2pt2.php">Blok 2 (2/3)</a></li>
                <li><a href="blok2EindOpdr.php">Blok 2 (3/3)</a></li>
        </ul>

        <div class="main">
                <h2>Opdracht: 1.1 - WHAT IS OOP?</h2>
                <p><span style="font-weight: bold">Leg in je eigen woorden uit wat het verschil is tussen flat PHP en
                                Object
                                Oriented Programming?</span><br><span style="font-size:18px">Let wel,
                                eigen woorden: Ik heb het idee dat de OOP op een vergelijkbare manier werkt als classes
                                in CSS/html. Je
                                maakt
                                een apart blokje/object waarin vanalles aangemaakt wordt en afspeelt. Vervolgens kun je
                                dit object op
                                verschillende plekken vaker doen 'afspelen'.</span></p>
                <p><span style="font-weight: bold">Leg in je eigen woorden uit welke vier voordelen Object Oriented
                                Programming
                                heeft ten opzicht van flat PHP.</span><br><span style="font-size:18px">
                                VIER? 1. Herbruiken van toepassingen. 2. Overzicht creëren in je code. 3. Volgens W3 is
                                het sneller en
                                makkelijker uit te voeren. 4. Niet alleen hoef je jezelf niet alsmaar te herhalen, maar
                                dit zorgt er ook
                                voor
                                dat de code makkelijker te de-buggen is.</span></p>
                <p><span style="font-weight: bold">Leg in je eigen woorden uit wat de twee hoofdonderdelen zijn van
                                Object
                                Oriented Programming?</span><br><span style="font-size:18px"> Classes en
                                objects. Een class is dus wat ik met CSS vergeleek, een pakketje met allemaal bruikbare
                                onderdelen. De
                                object
                                zijn deze onderdelen. Dit kunnen variabelen met berekeningen zijn, of functies die
                                vervolgens toegepast
                                worden.
                                Enz enz.</span></p>
                <p><span style="font-weight: bold">Leg in je eigen woorden uit wat het verschil is tussen een Class en
                                een
                                Object?</span><br><span style="font-size:18px"> Ik hoop dat ik deze vraag
                                duidelijk genoeg heb beantwoord hierboven.</span></p>
                <p><span style="font-weight: bold">Leg in je eigen woorden uit wat er overgeërfd wordt van een Class als
                                een
                                object aangemaakt wordt?</span><br><span style="font-size:18px"> Volgens W3
                                erft een object alle properties en behaviors van de class, maar elk object heeft eigen
                                values voor de
                                properties.</span></p>
                <p><span style="font-weight: bold">Bedenk zelf een voorbeeld van een Class en bijbehorende Objecten
                                anders dan
                                afgebeeld op W3SCHOOLS.</span><br><span style="font-size:18px"> Class:
                                Games. Objects: Mario Sunshine, Bloodborne, Shadow of the Colossus en Doki Doki
                                Literature Club.</span>
                </p>
                <br>
                <h2>Opdracht: 1.2 - Classes and Objects</h2>
                <p><span style="font-weight: bold">Objecten erven dingen van elkaar over. Leg uit in je eigen woorden
                                uit wat
                                het verschil is tussen objecten?</span><br><span style="font-size:18px">
                                Je kunt meerdere objecten maken op basis van een class. Je kunt deze objecten andere
                                namen geven dan
                                elkaar en
                                dan de class. Vervolgens kun je de veriabelen/properties binnen je objecten aanpassen.
                                Je verandert dan
                                deze
                                objecten, maar de class blijft precies zoals hij was.</span></p>
                <p><span style="font-weight: bold">Wat is de meest basic Syntax definitie van een Class? Uit welke drie
                                onderdelen bestaat deze Syntax?</span><br><span style="font-size:18px"> class
                                className {Properties en methods}. Zo ongeveer. 1. Je roept aan dat je een class
                                aanmaakt. 2. Deze
                                krijgt een
                                naam waarmee je de class later weer op kan roepen/een object uit kan maken. 3.
                                Properties en methods die
                                in deze
                                class komen te zitten. </span></p>
                <p><span style="font-weight: bold">Hoe worden variables en functions in een Class
                                genoemd?</span><br><span style="font-size:18px"> Properties en methods.</span></p>
                <p><span style="font-weight: bold">Uit welke twee verschillende soorten fundamentele onderdelen kan de
                                body van
                                een Class bestaan?</span><br><span style="font-size:18px"> Volgens mij
                                is het antwoord weer properties en methods.</span></p>
                <p><span style="font-weight: bold">Hoeveel objects kunnen er van een Class gemaakt
                                worden?</span><br><span style="font-size:18px"> Minstens 1.</span></p>
                <p><span style="font-weight: bold">Welke keyword gebruik je om je object mee aan te
                                maken?</span><br><span style="font-size:18px"> $naam = new className();. Keyword is new,
                                dacht ik?
                        </span></p>
                <p><span style="font-weight: bold">Waar wordt het “$this” keyword voor gebruikt?</span><br><span
                                style="font-size:18px"> Wordt gebruikt IN methods om te refereren naar de huidige
                                object.</span></p>
                <p><span style="font-weight: bold">Hoe kan je een property van binnen in de Class veranderen versus
                                buiten de
                                klasse?</span><br><span style="font-size:18px"> Binnen: $this->property =
                                nieuweValue; <br> Buiten: $objectName->property = nieuweValue;</span></p>
                <p><span style="font-weight: bold">Waar kun je de keyword instanceOf voor gebruiken?</span><br><span
                                style="font-size:18px"> instanceOf kun je gebruiken om te checken of een object
                                onderdeel is van een specifieke class.</span></p>
                <br>
                <h2>Opdracht: 1.3 - Constructor</h2>
                <p><span style="font-weight: bold">Leg uit waar een Constructor voor gebruikt wordt en wat het voordeel
                                is?</span><br><span style="font-size:18px"> Vergelijkbaar met dat een functie
                                een parameter (of meer) heeft die je invult wanneer je de functie oproept, heb je bij
                                een class met de
                                construct
                                dat je twee 'parameters' die de properties aanpast. In deze voorbeelden wordt construct
                                gebruikt om met
                                een
                                functie direct twee parameters ($name en $color) toe te wijzen aan met name en color. Ik
                                vergeet het
                                aller
                                belangrijkste bijna: wanneer een object wordt aangemaakt van de class, dan wordt een
                                functie met
                                construct
                                direct aangeroepen. Dit kan dus waarschijnlijk ook op andere manier gebruikt worden dan
                                alleen het
                                toewijzen van
                                parameters.</span></p>
                <p><span style="font-weight: bold">Hoe ziet de basic syntax van de Constructor eruit?</span><br><span
                                style="font-size:18px"> function __construct(parameter1, parameter 2, enz){dingen
                                die
                                gebeuren in de functie}.</span></p>
                <br>
                <h2>Opdracht: 1.4 - Access Modifiers</h2>
                <p><span style="font-weight: bold">Welke drie Access Modifier bestaan er?</span><br><span
                                style="font-size:18px"> Public, protected en private.</span></p>
                <p><span style="font-weight: bold">Wat zijn hun verschillende rollen?</span><br><span
                                style="font-size:18px"> Ze
                                zorgen ervoor dat onderdelen in sommige lagen wel toegankelijk zijn en
                                anderen niet.</span></p>
                <p><span style="font-weight: bold">Op welke twee onderdelen van een Class kan je Access Modifiers
                                gebruiken?</span><br><span style="font-size:18px"> properties en methods.</span></p>
                <p><span style="font-weight: bold">Wat denk je dat het nut is van Access Modifiers in een “echte”
                                applicatie?</span><br><span style="font-size:18px"> Meer controle over (en juist
                                gebruiken van) variabelen.</span></p>
                <br>
                <h2>Opdracht: 1.5 - Inheritance</h2>
                <p><span style="font-weight: bold">Wat is Inheritance?</span><br><span style="font-size:18px"> When a
                                class
                                derives from another class.</span></p>
                <p><span style="font-weight: bold">Wat is het verschil tussen een Child Class en een Parent
                                Class?</span><br><span style="font-size:18px"> De child heeft alles geërfd van de
                                parent,
                                maar vervolgens kun je de child aanpassen. Vervolgens zijn ze niet hetzelfde
                                meer.</span></p>
                <p><span style="font-weight: bold">Welke keyword wordt gebruikt om aan te geven dat er Inheritance
                                plaatsvindt?
                                Wat is de basis Syntax van
                                Inheritance in zijn geheel?</span><br><span style="font-size:18px"> extends. class
                                naamChildClass
                                extends naamParentClass {dingen die nieuw zijn in
                                de Child}</span></p>
                <p><span style="font-weight: bold">Hoe kan je Inherited Methods Overridden? Wat is het nu hiervan denk
                                je?</span><br><span style="font-size:18px"> In het voorbeeld op w3 wordt een
                                volledig nieuwe class geschreven, in principe. Maar het voorbeeld laat zien dat het
                                letterlijk OVER de
                                andere
                                dingen heenschrijft. Zo voegt het de propertie weight toe, maar verandert het ook de
                                intro
                                functie.</span></p>
                <p><span style="font-weight: bold">Waar wordt de Final keyword voor gebruikt?</span><br><span
                                style="font-size:18px"> Wanneer een property of method final toegewezen krijgt, dan kan
                                deze onmogelijk ge-enherit worden. In de voorbeelden op w3 resulteert dit in een
                                error.</span></p>
                <br>
                <h2>Opdracht: 1.6 - Class Constants</h2>
                <p><span style="font-weight: bold">Wat is het nut van een Class Constant?</span><br><span
                                style="font-size:18px"> Als ik de beperkte informatie hierover op w3 begrijp, is het
                                niet
                                anders dan andere constants. Het komt eropneer dat de constant aangemaakt wordt en
                                vervolgens nooit meer
                                veranderd wordt. Ik weet niet of dit overdraagd naar een child, maar het nut is dat als
                                iets altijd
                                hetzelfde
                                werkt of is, dat dit ook niet veranderd kan worden en dus beperk je hiermee de
                                mogelijkheid tot
                                fouten.</span></p>
                <p><span style="font-weight: bold">Hoe declareer je een Class Constant?</span><br><span
                                style="font-size:18px">
                                'const' vóór je 'variabele' of property. Dit is dan geen variabele meer,
                                maar een constante.</span></p>
                <p><span style="font-weight: bold">Hoe verschilt een Class Constant van een Class
                                Property?</span><br><span style="font-size:18px"> Dat deze niet meer veranderd kan
                                worden. Een normale
                                Property kan nog wel veranderd worden.</span></p>
                <p><span style="font-weight: bold">Hoe access je een Class Constant van buiten de Class?</span><br><span
                                style="font-size:18px"> In het eerste voorbeeld op w3 wordt duidelijk buiten de
                                class classnaam::constantnaam gebruikt om de constant in de class aan te roepen.</span>
                </p>
                <p><span style="font-weight: bold">Hoe access je een Class Constant van binnen de Class?</span><br><span
                                style="font-size:18px"> In het tweede voorbeeld wordt ook :: gebruikt, maar dan
                                met self ervoor ipv classnaam. In weze gebeurt in beide gevallen hetzelfde.</span></p>
                <br>
                <h2>Opdracht: 1.7 - Static Methods</h2>
                <p><span style="font-weight: bold">Wat is het verschil tussen een Static Method en een reguliere Class
                                Method?</span><br><span style="font-size:18px"> Normaliter moet er eerst een
                                instance/object aangemaakt worden van een class voor de inhoud gebruikt kan worden.
                                Wanneer een
                                onderdeel van
                                een class static is, dan kan deze direct gebruikt/aangeroepen worden zonder eerst een
                                instance of object
                                te
                                maken van de class. Ook kan een static method gebruikt worden in een andere method, maar
                                ook binnen
                                dezelfde
                                class met self::className.</span></p>
                <p><span style="font-weight: bold">Hoe ziet de Syntax van een Static Method eruit?</span><br><span
                                style="font-size:18px"> Je zet 'static' voor 'function', vervolgens roep je hem aan
                                met Classname::staticMethod();</span></p>
                <p><span style="font-weight: bold">Hoe gebruik je de Static Method?</span><br><span
                                style="font-size:18px"> Met
                                Classname::staticMethod();</span></p>
                <br>
                <h2>Opdracht: 1.8 - Static Properties</h2>
                <p><span style="font-weight: bold">Wat is het verschil tussen een Static Property en een reguliere
                                Property?</span><br><span style="font-size:18px"> Hier geldt eigenlijk hetzelfde als
                                voor de classes. Gebruik static zodat properties op andere plekken gebruikt kunnen
                                worden.</span></p>
                <p><span style="font-weight: bold">Hoe declareer je een Static Property?</span><br><span
                                style="font-size:18px">
                                Ook op dezelfde manier. Door static voor de declared naam van de
                                property te zetten.</span></p>
                <p><span style="font-weight: bold">Hoe gebruik je een Static Property <b>binnen</b> een
                                Class?</span><br><span style="font-size:18px"> className::$propertyName; , maar in dit
                                geval kun
                                je ook 'this' doen ipv 'className'.</span></p>
                <p><span style="font-weight: bold">Hoe gebruik je een Static Property <b>buiten</b> een
                                Class?</span><br><span style="font-size:18px"> className::$propertyName;</span></p>
                <br>
        </div>
        <div class="socials" id=socials>
                <a href="https://www.linkedin.com/in/lennart-claus/"><img src="img/LinkedIn.png" alt="LinkedIn"
                                style="height:40px;"></a><br>
                <a href="https://github.com/MadFalc/CG.git"><img src="img/github.png" alt="Github"
                                style="height:40px;"></a>
        </div>
</body>

</html>