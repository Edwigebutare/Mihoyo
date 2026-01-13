<?php
$this->layout('template', ['title' => 'Ajouter un personnage']);
?>

<h1>Ajouter un personnage</h1>

<form method="post" action="">
    <div class="form-group">
        <label for="id">ID du personnage</label>
        <input type="text" id="id" name="id" placeholder="p001" required>
    </div>

    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" placeholder="Iansan" required>
    </div>

    <div class="form-group">
        <label for="element">Élément</label>
        <input type="text" id="element" name="element" placeholder="Pyro" required>
    </div>

    <div class="form-group">
        <label for="unitclass">Classe</label>
        <input type="text" id="unitclass" name="unitclass" placeholder="Claymore" required>
    </div>

    <div class="form-group">
        <label for="origin">Origine</label>
        <input type="text" id="origin" name="origin" placeholder="Mondstadt" required>
    </div>

    <div class="form-group">
        <label for="rarity">Rareté</label>
        <input type="number" id="rarity" name="rarity" min="1" max="5" required>
    </div>

    <div class="form-group">
        <label for="url_img">URL de l'image</label>
        <input type="text" id="url_img" name="url_img" placeholder="https://..." required>
    </div>

    <button type="submit">Ajouter</button>
</form>
