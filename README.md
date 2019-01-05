Nikla Hallberg

Inlämningsuppgift 2 - Shopping Version 2 "CRUD"

Individuell

Betygsnivå: IG/G/VG
Mål

Målet med uppgiften är att utvärdera dina kunskaper i följande moment:

Grundläggande SQL
Arbeta mot databas med PDO i PHP
Formulärhantering
Sessionshantering/Användarhantering
Funktioner i PHP
Fil och mappstruktur

Detta är en standard för hur strukturen för projektet ska se ut. Har du flera includes eller flera css-filer så är det ok att lägga till dessa, huvudsaken är att strukturen följer detta mappmönster. Du får alltså ha fler filer än vad som listas nedan.
Din inlämning måste följa strukturen nedan annars får du automatisk komplettering. Din mapp som du har din uppgift i måste heta enligt namnmönstret nedan. Din css sak ligga i en mapp som heter css och själva filen ska heta style.css. Om du har några bilder kopplade till din inlämning ska de ligga i en mapp som heter images. Om du har bilder så ska dessa vara i en rimlig storlek och du ska inte skicka med en 10mb stor bakgrundsbild som inte behövs (tumregel är att bilderna kan vara max 1mb, men gärna max 500kb). Inlämningen ska ha en fil som heter README.md, d.v.s. filen heter README med stora bokstäver och filformatet är .md (det är ungefär som en vanlig .txt). I denna fil ska enbart ditt namn skrivas längst upp i filen, det är det enda som krävs av den filen. index.php ska vara första sidan man kommer till. Resterande sidor som inte är index.php ska ligga i en mapp som heter views.

📂 fornamn_efternamn_crud
📂 css
📃 style.css
📂 images
📃 image.png/image.jpg/image.svg
📂 includes/partials
📃 database_connection.php
📃 functions.php
📂 views
📃 checkout.php
📃 confirm.php
📃 login.php
📃 index.php
📃 README.md
📃 database.sql
När du är klar med uppgiften så zippar du hela mappen med valfritt komprimeringsprogram (både Mac & Windows har inbyggda komprimeringsprogram, högerklicka på mappen så får du upp information om det)

//

Du ska även skicka med en kopia av din databas: database.sql

//

Uppgiftsbeskrivning

Denna uppgift bygger vidare på den föregående uppgiften (01_shopping.md) där vi nu ska fokusera på att lagra användaren och användarens kundkorg permanent i en databas. Detta så att informationen kan lagras permanent och kan delas mellan olika datorer och browsers.

Nedan i kravspecifikationen finns ett antal egenskaper som applikationen ska ha. Hur du implementerar dessa är upp till dig bara de uppfyller egenskaperna. Om du vill göra någon mindre ändring är det troligtvis OK bara de följer egenskaperna nedan. Det huvudsakliga är detta:

Kundkorgens innehåll lagras i databasen
Användarens kontaktinformation och inloggingsuppgifter lagras i databasen
Användaren förblir inloggad via en session
Användarens lösenord lagras inte i klartext i databasen (måste vara krypterat, detta går vi igenom på ett lektionstillfälle)
Produkterna måste inte vara lagrade i databasen men det är en bra idé. Det kan dock vara lättare till en början att inte lagra produkterna i databasen.
Egenskaper

Egenskap: Lista produkter

För att kunna spara produkter till kundkorgen behöver användaren först kunna se alla produkter som finns tillgängliga på ett överskådligt och responsivt sätt.
Scenario: Visa webbshoppens samtliga produkter

Givet: att användaren besöker produktsidan

Så: visas en lista med samtliga produkter

Egenskap: Lägga till produkt till kundkorg

Vi behöver kunna lagra en kundkorg under en längre tid. Det räcker inte att vi har sessioner. För att låta användaren kunna kolla kundkorgen på flera olika enheter behöver vi lagra kundkorgen permanent i en databas.
Scenario: Lägg till en produkt i kundkorgen

Givet: att en användare besöker produktsidan

Och: trycker på "Lägg till i kundkorg" eller liknande knapp som tillhör en specifik produkt

Så: uppdateras kundkorgen med korrekt antal artiklar av tillagd produkt (lagras i databasen)

Egenskap: Ta bort en produkt från kundkorg

Användaren ska kunna ångra sig och ta bort en produkt som användaren har lagt i kundkorgen
Scenario: Ta bort en produkt från kundkorgen

Givet: att en användare besöker produktsidan

Och: trycker på "X"/"Ta bort"/"Remove" eller liknande knapp som tillhör en specifik produkt

Så: tas artikeln/artiklarna bort från kundkorgen (uppdateras i databasen).

Egenskap: Gå till kassan / Checkout

För att användaren ska kunna kolla igenom sin kundkorg så att allting stämmer vill vi ha en "Gå till kassan"/"Checkout"-sida där all nödvändig information sammanställs och presenteras på ett lättläsligt och lättillgängligt sätt. Detta är det sista stegen innan vi beställer våra produkter.
Scenario: Gå till kassan

Givet: att en användare har lagt till produkter i kundkorgen

Och: trycker på knappen "Gå till kassan"/"Checkout"

Så: omdirigeras användaren till översiktssidan

Scenario: Översiktsida

Givet: att användaren har tryckt på knappen "Gå till kassan"/"Checkout"

Och: blivit omdirigerad till översiktssidan/"Checkout"

Så: visas en sammanfattning av antalet produkter som användaren vill beställa samt användarens kontaktinformation

Egenskap: Beställ produkter

Det är viktigt att få bekräftelse på att ordern har gått igenom och att användaren får feedback. Därför vill vi ha en sista sida som tackar användaren och bekräftar att ordern gått igenom.
Scenario: Beställ produkter

Givet: att användaren har kollat igenom så att all information stämmer

Och: trycker på knappen "Beställ"/"Order"

Så: blir användare omdirigerad till bekräftelsesidan

Egenskap: Användarinloggning

För att kunna spara en specifik användares kundkorg behöver vi kunna spara och verifera att användaren är den som den säger att den är, vi behöver en inloggningsfunktion för att kunna spara flera användares kundkorgar.
Scenario: Användaren vill logga in

Givet: att användaren besöker inloggningssidan

Så: visas ett inloggningsformulär med två inputfält där användaren kan fylla i användarnamn/email samt lösenord, samt en knapp för att skicka formuläret.

Scenario: Användaren loggar in

Givet: att användaren besöker inloggningssidan

Och: fyller i användarnamn/email samt lösenord

När: användaren klickar på "Logga in"/"Log in"

Så: loggas användaren in och tas till produktsidan och användare förblir inloggad via en session

Egenskap: Registrera användare

För att kunna logga in behöver vi kunna registrera en ny användare. Applikationen behöver en registreringsfunktion.
Scenario: Användaren vill registrera sig

Givet: att användaren besöker registreringssidan

Så: visas ett registreringsformulär med två inputfält där användaren kan fylla i användarnamn/email samt lösenord, samt en knapp för att skicka formuläret.

Scenario: Användaren registrerar sig

Givet: att användaren besöker registreringssidan

Och: fyller i användarnamn/email samt lösenord

När: användaren klickar på "Registrera"/"Register"

Så: registreras användaren och tas till inloggningssidan eller loggas in direkt och tas till produktsidan

Bedömning

G/VG baseras på hur väl upplagd koden är och i vilken grad du utnyttjar programmeringsspråket. Vidare baseras det till stor del på att man självständigt implementerar en stor del av lösningen. Du ska också visa att du kan på egen hand tänka på vilka säkerhetsrisker som finns i applikationen samt hur dessa ska åtgärdas. Du ska också för ett högre betyg ta egna besult gällande databasstrukturen samt använda dig av mer avancerade funktioner i SQL på egen hand.

Väl upplagd kod. Detta innefattar konsekvent namngivning av variabler, korrekt intabbning av koden och en logisk kodföljd. Detta omfattar såväl HTML, CSS som PHP.
Förmåga att välja och använda rätt funktionalitet för rätt ändamål gällande variabler, loopar, statements och funktioner på ett smart sätt.
Förmåga att kommentera kod när det behövs och att kommentera på ett tydligt sätt som hjälper läsaren av koden att förstå vad koden ska utfärda.
Förmåga att lägga upp en databasstruktur som passar ändamålet.
Inlämning

Inlämningsformat: .zip (alla andra format resulterar i försenad inlämning och komplettering)
Namnformat för inlämning: fornamn_efternamn_crud.zip
Inlämningen sker endast via inlämningsyta på zenit
Tid för inlämning: måndag 2/11 23.55