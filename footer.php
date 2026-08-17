<link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>">

<footer class="main-footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="<?= base_url('src/logo.png') ?>" alt="Logo du site de cuisine" class="footer-site-logo">
                <span class="footer-site-title">Brawl Kitchen</span>
            </div>
            <ul class="footer-links">
                <li><a href="<?= site_url('brawlkitchen') ?>" class="footer-link">Accueil</a></li>
                <li><?= anchor('recettes', 'Recettes', ['class' => 'nav-link']) ?></li>
                <li><a href="#" class="footer-link">À propos</a></li>
                <li><a href="#" class="footer-link">Contact</a></li>
            </ul>
            <div class="footer-social">
                <a href="#" class="footer-icon" title="Facebook">
                    <img src="<?= base_url('src/svg/logos/facebook.svg')?>" alt="Facebook" class="footer-logo">
                </a>
                <a href="#" class="footer-icon" title="Instagram">
                    <img src="<?= base_url('src/svg/logos/instagram.svg')?>" alt="Instagram" class="footer-logo">
                </a>
                <a href="#" class="footer-icon" title="YouTube">
                    <img src="<?= base_url('src/svg/logos/youtube.svg')?>" alt="YouTube" class="footer-logo">
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Brawl Kitchen. Tous droits réservés.</p>
        </div>
    </footer>