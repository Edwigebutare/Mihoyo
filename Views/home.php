<?php
  $this->layout('template', ['title' => 'TP Mihoyo']);
?>
<h1><?= $this->e($gameName) ?></h1>

<h2>Liste des personnages</h2>
<div class="cards-container">
    <?php foreach($listPersonnage as $p): ?>
        <div class="card">
            <img src="<?= htmlspecialchars($p->getUrlImg()) ?>" alt="<?= htmlspecialchars($p->getName()) ?>">
            <div class="card-name"><?= htmlspecialchars($p->getName()) ?></div>
            <div class="card-options">
                <a href="#">✏️</a>
                <a href="#">🗑️</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>