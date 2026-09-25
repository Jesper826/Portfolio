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
        <figure class="portrait">
            <img src="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/images/demofoto.png" alt="Abstract zwart demoportret">
        </figure>
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
                    <span class="tag">PHP / SQLite</span>
                    <h3>Dynamische database</h3>
                    <p class="project-description">Een beginnend backendproject waarin ik leer werken met PHP en SQLite.</p>
                    <a class="button-git" href="https://38734.hosts2.ma-cloud.nl/roomus/" target="_blank" rel="noopener">info link <span>↗</span></a>
                    <a class="button-git" href="https://github.com/Jesper826/m6prog_digipost/blob/main/README.md" target="_blank" rel="noopener">Github link <span>↗</span></a>
                </div>
                <img class="project-photo" src="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/images/demofoto.png" alt="Demo-afbeelding van de dynamische webapplicatie">
            </article>
            <article class="project project-feature">
                <div class="project-copy">
                    <span class="tag">PHP / SQLite</span>
                    <h3>DigiPost</h3>
                    <p class="project-description">DigiPost is een PHP-webapplicatie waarmee gebruikers digitale berichten kunnen versturen, ontvangen en beheren. De applicatie maakt gebruik van een database om gebruikers en berichten overzichtelijk op te slaan.</p>
                    <a class="button-git" href="https://github.com/Jesper826/m6prog_digipost/blob/main/README.md" target="_blank" rel="noopener">info link <span>↗</span></a>
                    <a class="button-git" href="https://github.com/Jesper826/m6prog_digipost" target="_blank" rel="noopener">Github link <span>↗</span></a>
                </div>
                <img class="project-photo" src="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/images/digipost.png" alt="Demo-afbeelding van de dynamische webapplicatie">
            </article>
    </section>
</main>

<?php require __DIR__ . '/../components/footer.php'; ?>