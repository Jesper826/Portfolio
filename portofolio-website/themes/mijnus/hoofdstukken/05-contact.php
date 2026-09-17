<?php require __DIR__ . '/../components/header.php'; ?>

<main>
    <section class="contact-layout" id="contact">
        <div>
            <p class="eyebrow">05 / Contact</p>
            <h2>Een idee? Laten we praten.</h2>
            <p>Heb je een vraag of wil je samenwerken aan een project? Neem contact op via een van de kanalen hieronder.</p>
        </div>
        <div class="contact-details">
            <a href="mailto:jesperzakeliijk1@gmail.com">
                <span>Email</span>
                jesperzakelijk1@gmail.com
            </a>

            <a href="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/hoofdstukken/01-over-mij.php">
                <span>Portfolio</span>
                Terug naar home
            </a>
        </div>
    </section>
</main>

<?php require __DIR__ . '/../components/footer.php'; ?>
