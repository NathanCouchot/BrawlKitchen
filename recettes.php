<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?= base_url('assets/recettes_liste.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/add_style.css') ?>">
</head>
<body>
    <div style="margin: 20px;">
        <button onclick="openModal()" class="button">Ajouter une recette</button>
    </div>

    <div id="addRecipeModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Ajouter une recette</h2>
            <form id="recipeForm" method="post" action="<?= site_url('recettes/save') ?>" enctype="multipart/form-data">
                <div>
                    <label>Nom:</label>
                    <input type="text" name="nom" required>
                </div>
                <div>
                    <label>Catégorie:</label>
                    <select name="categorie" required>
                        <option value="Entrée">Entrée</option>
                        <option value="Plat">Plat</option>
                        <option value="Dessert">Dessert</option>
                    </select>
                </div>
                <div>
                    <label>Difficulté:</label>
                    <select name="difficulte" required>
                        <option value="Facile">Facile</option>
                        <option value="Moyen">Moyen</option>
                        <option value="Difficile">Difficile</option>
                    </select>
                </div>
                <div>
                    <label>Temps de préparation (minutes):</label>
                    <input type="number" name="temps_preparation_minutes" required min="1">
                </div>
                <div>
                    <label>Description:</label>
                    <textarea name="description" required></textarea>
                </div>
                <div>
                    <label>Image:</label>
                    <input type="file" name="image" accept="image/*" required>
                </div>
                 <div>
                    <label>MDP:</label>
                    <input type="password" name="mdp" required>
                </div>
                <button type="submit">Enregistrer</button>
            </form>
        </div>
    </div>

    <div class="recipe-list-container">
        <h2 class="section-title">Entrées</h2>
             
        <div class="recipe-grid">
            <?php foreach ($entrees as $entree): ?>
                <div class="recipe-item-card">
                    <a href="<?= site_url('recettes/' . $entree['id'])?>" class="recipe-link">
                        <img src="<?= esc(base_url('src/images/') . $entree['image_url']) ?>" class="recipe-image" alt="<?= esc($entree['nom']) ?>">
                        <div class="card-content">
                            <h2 class="recipe-title-link"><?= esc($entree['nom']) ?></h2>
                            <p class="recipe-details"><?= esc($entree['description']) ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="pagination">
            <a href="<?= site_url('recettes') . '?entree_offset=' . max(0, $entreeOffset - 3); ?>" class="btn btn-secondary">Entrées précédentes</a>
            <a href="<?= site_url('recettes') . '?entree_offset=' . ($entreeOffset + 3); ?>" class="btn btn-secondary">Entrées suivantes</a>
        </div>

        <h2 class="section-title">Plats</h2>
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

        <div class="pagination">
            <a href="<?= site_url('recettes') . '?plat_offset=' . max(0, $platOffset - 6); ?>" class="btn btn-secondary">Plats précédents</a>
            <a href="<?= site_url('recettes') . '?plat_offset=' . ($platOffset + 6); ?>" class="btn btn-secondary">Plats suivants</a>
        </div>

        <h2 class="section-title">Desserts</h2>
        <div class="recipe-grid">
            <?php foreach ($desserts as $dessert): ?>
                <div class="recipe-item-card">
                    <a href="<?= site_url('recettes/' . $dessert['id'])?>" class="recipe-link">
                        <img src="<?= esc(base_url('src/images/') . $dessert['image_url']) ?>" class="recipe-image" alt="<?= esc($dessert['nom']) ?>">
                        <div class="card-content">
                            <h2 class="recipe-title-link"><?= esc($dessert['nom']) ?></h2>
                            <p class="recipe-details"><?= esc($dessert['description']) ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="pagination">
            <a href="<?= site_url('recettes') . '?dessert_offset=' . max(0, $dessertOffset - 9); ?>" class="btn btn-secondary">Desserts précédents</a>
            <a href="<?= site_url('recettes') . '?dessert_offset=' . ($dessertOffset + 9); ?>" class="btn btn-secondary">Desserts suivants</a>
        </div>

    </div>

    <?php if (session()->has('errors')) : ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session('errors') as $error) : ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>

    <?php if (session()->has('error')) : ?>
        <div class="alert alert-danger">
            <?= session('error') ?>
        </div>
    <?php endif ?>

    <?php if (session()->has('success')) : ?>
        <div class="alert alert-success">
            <?= session('success') ?>
        </div>
    <?php endif ?>

    <script>
        function openModal() {
            document.getElementById('addRecipeModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('addRecipeModal').style.display = 'none';
        }
      
        window.onclick = function(event) {
            if (event.target == document.getElementById('addRecipeModal')) {
                closeModal();
            }
        }
    </script>
</body>
</html>