<?php require __DIR__ . '/../components/header.php'; ?>

<main>
    <section class="home-grid" id="over-mij">
        <div class="home-copy">
            <p class="eyebrow">Portfolio / 2026</p>
            <h1><em>Jesper</em> software developer</h1>
            <p>Mijn naam is Jepser van Niekerk. Ik ben Software Developer met een sterke interesse in webdesign. Ik vind het leuk om websites te ontwerpen en deze vervolgens zelf te bouwen. Ik ben momenteel ook bezig met beter worden in backend.</p>
            <a class="button" href="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/hoofdstukken/03-projecten.php">Bekijk mijn werk <span>↗</span></a>
            <div class="home-meta">Software Developer · Web · Nederland</div>
        </div>
        <img class="profile-photo" src="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/images/fotomezelf.png" alt="Portret van Jesper van Niekerk">
    </section>
    <section>
        <h5 class="eyebrow">Mijn favorieten projecten op een rijtje.</h3>
            <article class="project project-feature">
                <div class="project-copy">
                    <span class="tag">Webdesign / development</span>
                    <h3>Roomus</h3>
                    <p class="project-description">Voor Roomus heb ik een vernieuwd websiteconcept ontworpen met een focus op een moderne, professionele en gebruiksvriendelijke uitstraling. Het bestaande design sloot naar mijn mening niet volledig aan bij de identiteit en doelgroep van Roomus. Daarom heb ik de website opnieuw vormgegeven, met extra aandacht voor visuele consistentie, duidelijke navigatie en een sterke gebruikerservaring.</p>
                    <a class="button-git" href="https://38734.hosts2.ma-cloud.nl/roomus/" target="_blank" rel="noopener">Website link <span>↗</span></a>
                    <a class="button-git" href="https://github.com/Jesper826/Roomus" target="_blank" rel="noopener">Github link <span>↗</span></a>
                </div>
                <img class="project-photo" src="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/images/roomus.png" alt="Voorbeeld van de Roomus website">
            </article>
            <article class="project project-feature">
                <div class="project-copy">
                    <span class="tag">React / Laravel / Vite</span>
                    <h3>Laravel projecten</h3>
                    <p class="project-description">Ik ontwikkelde drie webapplicaties met Laravel, PHP, React, TypeScript, Inertia.js, Tailwind CSS en Vite: een awardplatform, een space-programming-applicatie en een T-shirtwebsite.</p>
                    <a class="button-git" href="https://github.com/Jesper826/M8_Prog/blob/main/README.md" target="_blank" rel="noopener">Info <span>↗</span></a>
                    <a class="button-git" href="https://github.com/Jesper826/M8_Prog" target="_blank" rel="noopener">GitHub <span>↗</span></a>
                </div>
                <img class="project-photo" src="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/images/laravel.png" alt="Screenshot van Github">
            </article>
            <article class="project project-feature">
                <div class="project-copy">
                    <span class="tag">PHP / Arduino</span>
                    <h3>Econest</h3>
                    <p class="project-description">In dit project gebruikten we PHP en Arduino om een eenvoudige IoT-applicatie te ontwikkelen. In de applicatie konden we gegevens van ons modelhuisje verzamelen en verwerken.</p>
                    <a class="button-git" href="https://38406.hosts2.ma-cloud.nl/y1/EcoNest/index.php" target="_blank" rel="noopener">Website link <span>↗</span></a>
                    <a class="button-git" href="https://github.com/Jesper826/EcoNest" target="_blank" rel="noopener">GitHub link <span>↗</span></a>
                </div>
                <img class="project-photo" src="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/images/econest.png" alt="Voorbeeldbeeld van de dynamische webapplicatie">
            </article>
    </section>
</main>

<?php require __DIR__ . '/../components/footer.php'; ?>