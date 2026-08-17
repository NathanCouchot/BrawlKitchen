<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($recipe['nom']) ?> - BrawlKitchen</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/recettes.css') ?>">
</head>
<body>
    <div class="recipe-card">
        <h1 class="recipe-title"><?= esc($recipe['nom']) ?></h1>

<div class="recipe-meta">
    <div class="difficulty"><?= esc($recipe['difficulte']) ?></div>
    <div class="time"><?= esc($recipe['temps_preparation_minutes']) ?></div>
</div>

<div class="recipe-hero-image">
    <img src="<?= esc(base_url('src/images/') . $recipe['image_url']) ?>" class="hero-image">
</div>

<p class="recipe-description">
    <?= esc($recipe['description']) ?>
</p>  
    
      
</body>
</html>