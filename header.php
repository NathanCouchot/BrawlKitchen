<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>">
    <title>Brawl Kitchen</title>
    <link rel="icon" type="image/png" href="<?= base_url('src/logo.png') ?>">
</head>
<body>
    <nav class="main-nav">
        <div class="nav-container">
            <a href="<?= site_url('brawlkitchen') ?>" style="text-decoration:none; color:inherit;">
                <div class="logo-title">
                    <img src="<?= base_url('src/logo.png') ?>" alt="Logo du site" class="site-logo">
                    <span class="site-title">Brawl Kitchen</span>
                </div>
            </a>
            <ul class="nav-links center-links">
                <li><a href="<?= site_url('brawlkitchen') ?>" class="nav-link">Accueil</a></li>
                <li><?= anchor('recettes', 'Recettes', ['class' => 'nav-link']) ?></li>
                <li><a href="#" class="nav-link">À propos</a></li>
            </ul>
            
            <div class="search-wrapper">
                <form action="<?= site_url('search') ?>" method="get" class="search-container" id="searchContainer">
                    <div class="search-input-container">
                        <button type="button" class="close-search" id="closeSearch">
                            <img src="<?= base_url('src/svg/close.svg') ?>" alt="Fermer" style="width: 16px; height: 16px;">
                        </button>
                        <input type="text" name="q" class="search-input" placeholder="Rechercher..." required>
                    </div>
                    <button type="submit" class="nav-icon" id="searchToggle">
                        <img src="<?= base_url('src/svg/search.svg') ?>" alt="Rechercher">
                    </button>
                </form>
            </div>
            
            <div class="right-nav-content">
                <div class="nav-divider"></div>
                
                <ul class="nav-links end-link">
                    <li><a href="#" class="nav-link">Contact</a></li>
                </ul>
                
                <div class="nav-icons">
                    <a href="#" class="nav-icon" title="Facebook">
                        <img src="<?= base_url('src/svg/logos/facebook.svg') ?>" alt="Facebook" class="nav-logo">
                    </a>
                    <a href="#" class="nav-icon" title="Instagram">
                        <img src="<?= base_url('src/svg/logos/instagram.svg') ?>" alt="Instagram" class="nav-logo">
                    </a>
                    <a href="#" class="nav-icon" title="YouTube">
                        <img src="<?= base_url('src/svg/logos/youtube.svg') ?>" alt="YouTube" class="nav-logo">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
    <script>
const searchContainer = document.getElementById('searchContainer');
const searchToggle = document.getElementById('searchToggle');
const closeSearch = document.getElementById('closeSearch');

searchToggle.addEventListener('click', (e) => {
    if (!searchContainer.classList.contains('active')) {
        e.preventDefault(); 
        searchContainer.classList.add('active');
        searchContainer.querySelector('.search-input').focus();
    }
});

closeSearch.addEventListener('click', () => {
    searchContainer.classList.remove('active');
});
    </script>
</body>
</html>