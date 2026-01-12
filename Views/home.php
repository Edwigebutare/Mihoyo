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
                <a href="index.php?action=edit-perso&id=<?= $this->e($p->getId()) ?>">✏️</a>
                <a href="index.php?action=del-perso&id=<?= $this->e($p->getId()) ?>">🗑️</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>