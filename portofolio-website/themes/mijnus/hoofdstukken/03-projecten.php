<?php require __DIR__ . '/../components/header.php'; ?>

<main>
    <section class="page-intro" id="projecten">
        <p class="eyebrow">02 / Projecten</p>
        <div>
            <h2>Werk met een reden.</h2>
            <p>Een selectie van webprojecten waarin ik design en development combineer. Ik werk graag aan websites die duidelijk, aantrekkelijk en prettig in gebruik zijn.</p>
        </div>
    </section>
    <section class="project-list">
        <article class="project">
            <img class="project-image" src="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/images/demofoto.png" alt="Voorbeeldbeeld van de portfolio website">
            <div class="project-content">
                <span class="tag">Webdesign / development</span>
                <h3>Roomus</h3>
                <p>Een responsive website waarin ik een heldere interface combineer met een rustige, toegankelijke uitstraling.</p>
                <div class="project-links">
                    <a class="button" href="https://38734.hosts2.ma-cloud.nl/roomus/" target="_blank" rel="noopener">Live website <span>↗</span></a>
                    <a class="button button-secondary" href="https://github.com/Jesper826/Roomus" target="_blank" rel="noopener">GitHub <span>↗</span></a>
                </div>
            </div>
        </article>

        <article class="project">
            <img class="project-image" src="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/images/demofoto.png" alt="Voorbeeldbeeld van de interactieve website">
            <div class="project-content">
                <span class="tag">HTML / CSS / JavaScript</span>
                <h3>Interactieve website</h3>
                <p>Een website waarin ik layout, styling en interactieve elementen combineer met JavaScript.</p>
                <div class="project-links">
                    <a class="button" href="#">Live website <span>↗</span></a>
                    <a class="button button-secondary" href="#">GitHub <span>↗</span></a>
                </div>
            </div>
        </article>

        <article class="project">
            <img class="project-image" src="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/images/demofoto.png" alt="Voorbeeldbeeld van de dynamische webapplicatie">
            <div class="project-content">
                <span class="tag">PHP / Laravel</span>
                <h3>Dynamische webapplicatie</h3>
                <p>Een beginnend backendproject waarin ik leer werken met PHP, Laravel en dynamische content.</p>
                <div class="project-links">
                    <a class="button" href="#">Live website <span>↗</span></a>
                    <a class="button button-secondary" href="#">GitHub <span>↗</span></a>
                </div>
            </div>
        </article>
    </section>
</main>

<?php require __DIR__ . '/../components/footer.php'; ?>