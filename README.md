# DonkeyPower – Undervisningsportal (Kildekode)

Velkommen til GitHub-repositoryet for vores UX/UI-eksamensprojekt: **Donkey Power Undervisningsportal**. 

Dette repository indeholder udelukkende de custom-udviklede kode-moduler, der er anvendt til re-designed af portalen for at imødekomme vores kravspecifikationer og persona-behov.

### Arkitektonisk afgrænsning
I overensstemmelse med god it-praksis for versionsstyring anvendes GitHub her specifikt til kildekode og ikke som en generisk backup af et CMS-system. WordPress-corefiler, SQL-databaser samt standard-plugins (såsom Tutor LMS og GamiPress) er derfor udeladt, så fokus forbliver 100% på vores egne tekniske tilpasninger.

### Indhold i dette repository:
* `/style.css`: Ekstra CSS anvendt til at etablere vores fokuserede 1-kolonne layout samt overskrive tema-begrænsninger.
* `/shortcodes.php`: Custom PHP-shortcodes, der driver integrationen og logikken mellem LMS- og gamification-elementerne.
* `/script.js`: Frontend-JavaScript, der styrer de interaktive HTML-elementer på platformen.

### Bemærkning vedrørende CSS-arkitektur (`!important`)
Der er bevidst anvendt `!important` på tværs af vores custom stylesheet. Dette er et strategisk valg for effektivt at kunne gennemtvinge de nødvendige WCAG 2.1-kontrastkrav og tvinge layoutet på plads ved at overskrive de låste, præ-definerede stilregler i Astra-temaets core-filer.

---
*Den fulde, levende prototype kan tilgås og testes i realtid på: http://dpowerlearning.infinityfreeapp.com/*