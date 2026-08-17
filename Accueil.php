<link rel="stylesheet" href="<?= base_url('assets/recettes_liste.css') ?>">

<div class="recipe-list-container">
    <h1>Nos Recettes Populaires</h1>
    <div class="recipe-grid">
        <?php foreach ($plats as $plat): ?>
            <div class="recipe-item-card">
               <a href="<?= site_url('recettes/' . $plat['id'])?>" class="recipe-link">
                    <img src="<?= esc(base_url('src/images/') . $plat['image_url']) ?>" class="recipe-image" alt="<?= esc($plat['nom']) ?>">
                    <div class="card-content">
                        <h2 class="recipe-title-link"><?= esc($plat['nom']) ?></h2>
                        <p class="recipe-details"><?= esc($plat['description']) ?></p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>