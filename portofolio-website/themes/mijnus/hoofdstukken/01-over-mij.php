<?php require __DIR__ . '/../components/header.php'; ?>

<main>
    <section class="home-grid" id="over-mij">
        <div class="home-copy">
            <p class="eyebrow">Portfolio / 2026</p>
            <h1>Jesper<em> software developer</em></h1>
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
    <article class="project"><span class="tag">Webdesign / development</span>
        <h3>Frontend website 1</h3>
        <p class="project-description">Hier komt mijn eerste project waarin ik laat zien dat ik gevorderd ben in frontend development.</p>
        <a class="button-git" href="#">Github link <span>↗</span></a>
    </article>
    <article class="project"><span class="tag">HTML / CSS / JavaScript</span>
        <h3>Interactieve website</h3>
        <p class="project-description">Een website waarin ik layout, styling en interactieve elementen combineer met JavaScript.</p>
        <a class="button-git" href="#">Github link <span>↗</span></a>
    </article>
    <article class="project"><span class="tag">PHP / Laravel</span>
        <h3>Dynamische webapplicatie</h3>
        <p class="project-description">Een beginnend backendproject waarin ik leer werken met PHP, Laravel en dynamische content.</p>
        <a class="button-git" href="#">Github link <span>↗</span></a>
    </article>
    </section>
</main>

<?php require __DIR__ . '/../components/footer.php'; ?>