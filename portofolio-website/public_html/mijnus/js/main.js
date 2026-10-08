(() => {
    const translations = {
        'Home': 'Home',
        '01 Home': '01 Home',
        'Projecten': 'Projects',
        '02 Projecten': '02 Projects',
        '02 / Projecten': '02 / Projects',
        'Opleiding': 'Education',
        '03 Opleiding': '03 Education',
        '03 / Over mij': '03 / About me',
        'Skills': 'Skills',
        '04 Skills': '04 Skills',
        '04 / Toolkit': '04 / Toolkit',
        'Contact': 'Contact',
        '05 Contact': '05 Contact',
        '05 / Contact': '05 / Contact',
        'English': 'Nederlands',
        'Portfolio / 2026': 'Portfolio / 2026',
        'software developer': 'software developer',
        'Mijn naam is Jepser van Niekerk. Ik ben Software Developer met een sterke interesse in webdesign. Ik vind het leuk om websites te ontwerpen en deze vervolgens zelf te bouwen. Ik ben momenteel ook bezig met beter worden in backend.': 'My name is Jepser van Niekerk. I am a Software Developer with a strong interest in web design. I enjoy designing websites and then building them myself. I am also currently improving my backend skills.',
        'Bekijk mijn werk': 'View my work',
        'Mijn favorieten projecten op een rijtje.': 'My favorite projects at a glance.',
        'Website link': 'Website link',
        'Github link': 'GitHub link',
        'info link': 'Info link',
        'Een selectie van webprojecten waarin ik design en development combineer. Ik werk graag aan websites die duidelijk, aantrekkelijk en prettig in gebruik zijn.': 'A selection of web projects in which I combine design and development. I enjoy working on websites that are clear, attractive and pleasant to use.',
        'Werk met een reden.': 'Work with purpose.',
        'Voorbeeldbeeld van de beginner website': 'Preview of the beginner website',
        'Dit is een van mijn eerste projecten die ik ooit heb gemaakt. Het is een eenvoudige website die ik heb gebouwd met HTML en CSS. In de website probeer ik te kijken in de toekomst en stel ik mijn doelen vast.': 'This is one of the first projects I ever made. It is a simple website I built with HTML and CSS. On the website, I look into the future and define my goals.',
        'Live website': 'Live website',
        'Url lijst': 'URL list',
        'Een repository met verschillende JavaScript widgets die ik heb ontwikkeld. In de repository vind je een verzameling van url\'s naar de verschillende widgets.': 'A repository with various JavaScript widgets I developed. The repository contains a collection of URLs to the different widgets.',
        'Ik ontwikkelde drie webapplicaties met Laravel, PHP, React, TypeScript, Inertia.js, Tailwind CSS en Vite: een awardplatform, een space-programming-applicatie en een T-shirtwebsite.': 'I developed three web applications with Laravel, PHP, React, TypeScript, Inertia.js, Tailwind CSS and Vite: an awards platform, a space programming application and a T-shirt website.',
        'In dit project heb ik een basiswebsite neergezet met vite. Ik onderzocht hoe ik een project opzetten en stopte er een paar basis widgets in.': 'In this project I created a basic website with Vite. I researched how to set up a project and added a few basic widgets.',
        'Ik ontwikkelde samen met een klasgenoot een muziekinstrument waarbij je via knoppen de beat en toon kon aanpassen. LED\'s gaven de status aan en een LDR veranderde de beat bij licht.': 'Together with a classmate, I developed a musical instrument whose beat and tone could be adjusted with buttons. LEDs showed the status and an LDR changed the beat when exposed to light.',
        'In dit project ontwikkelde ik een database-applicatie met PHP, SQLite en Dataclasses. Ik onderzocht hoe ik data kon opslaan en ophalen uit een database.': 'In this project I developed a database application with PHP, SQLite and dataclasses. I researched how to store and retrieve data from a database.',
        'In dit project gebruikten we PHP en Arduino om een eenvoudige IoT-applicatie te ontwikkelen. In de applicatie konden we gegevens van ons modelhuisje verzamelen en verwerken.': 'In this project we used PHP and Arduino to develop a simple IoT application. The application collected and processed data from our model house.',
        'In dit project hebben we een website gemaakt waarin je de games van andere studenten kunt bekijken en spelen.': 'In this project we created a website where you can view and play games made by other students.',
        'Leren door te maken.': 'Learning by making.',
        'Ik volg de opleiding Software Developer. Mijn interesse ligt bij webdevelopment, waarbij ik de front en back end technieken combineer om gebruiksvriendelijke websites te maken.': 'I am studying Software Development. My interest lies in web development, where I combine front-end and back-end techniques to create user-friendly websites.',
        'Een technische opleiding waarin ik leer programmeren, websites bouwen en werken met databases en frameworks.': 'A technical education where I learn to program, build websites and work with databases and frameworks.',
        'Ik vind front-end het leukste onderdeel van webdevelopment, omdat ik het makkelijker vind om vanuit de gebruiker te denken.': 'I enjoy front-end the most because it is easier for me to think from the user’s perspective.',
        'Back-end vind ik ook erg interessant, omdat het om de logica en functionaliteit van een website gaat.': 'I also find back-end very interesting because it focuses on the logic and functionality of a website.',
        'Blijven leren': 'Keep learning',
        'Ik ben nog lerend in het vak en gebruik feedback en nieuwe projecten om mijn technische vaardigheden verder te ontwikkelen.': 'I am still learning and use feedback and new projects to further develop my technical skills.',
        'Mijn manier van werken.': 'My way of working.',
        'Ik leer graag door websites te ontwerpen en ze daarna zelf te bouwen. Webdesign heeft mijn grootste interesse, maar ik ontwikkel mij ook steeds verder in code.': 'I enjoy learning by designing websites and then building them myself. Web design is my main interest, but I am also continuously improving my coding skills.',
        'Geadvanceerd': 'Advanced',
        'basis': 'Basic',
        'Beginner': 'Beginner',
        'Werkhouding': 'Work ethic',
        'Ik combineer mijn skills voor design met mijn technische basis. Mijn doel is om steeds zelfstandiger complete websites en webapplicaties te bouwen.': 'I combine my design skills with my technical foundation. My goal is to become increasingly independent in building complete websites and web applications.',
        'Samenwerken': 'Collaborate',
        'Een idee? Laten we praten.': 'Have an idea? Let’s talk.',
        'Heb je een vraag of wil je samenwerken aan een project? Neem contact op via een van de kanalen hieronder.': 'Do you have a question or would you like to collaborate on a project? Get in touch through one of the channels below.',
        'Terug naar home': 'Back to home',
        'Portfolio / Software Developer': 'Portfolio / Software Developer'
    };

    const reverseTranslations = Object.fromEntries(
        Object.entries(translations).map(([dutch, english]) => [english, dutch])
    );
    const button = document.getElementById('language-toggle');
    const language = localStorage.getItem('portfolio-language') || 'nl';

    function translate(languageCode) {
        const dictionary = languageCode === 'en' ? translations : reverseTranslations;
        const walker = document.createTreeWalker(document.body, NodeFilter.SHOW_TEXT);
        const textNodes = [];
        while (walker.nextNode()) {
            if (!walker.currentNode.parentElement.closest('script, style')) {
                textNodes.push(walker.currentNode);
            }
        }

        textNodes.forEach((node) => {
            const text = node.nodeValue.trim();
            if (dictionary[text]) {
                node.nodeValue = node.nodeValue.replace(text, dictionary[text]);
            }
        });

        document.documentElement.lang = languageCode;
        button.textContent = languageCode === 'en' ? 'Nederlands' : 'English';
        button.setAttribute('aria-label', languageCode === 'en'
            ? 'Translate portfolio to Dutch'
            : 'Translate portfolio to English');
        localStorage.setItem('portfolio-language', languageCode);
    }

    translate(language);
    button.addEventListener('click', () => {
        translate(document.documentElement.lang === 'nl' ? 'en' : 'nl');
    });
})();