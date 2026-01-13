<?php
$this->layout('template', ['title' => 'Ajouter un élément']);
?>

<h1>Ajouter un élément</h1>

<form method="post" action="">
    <div class="form-group">
        <label for="name">Nom de l'élément</label>
        <input type="text" id="name" name="name" placeholder="Pyro" required>
    </div>

    <div class="form-group">
        <label for="url_img">URL de l'image</label>
        <input type="text" id="url_img" name="url_img" placeholder="https://..." required>
    </div>

    <div class="form-group">
        <label for="type">Type</label>
        <select id="type" name="type" required>
            <option value="">-- Sélectionnez un type --</option>
            <option value="feu">Feu</option>
            <option value="eau">Eau</option>
            <option value="vent">Vent</option>
            <option value="terre">Terre</option>
            <option value="electro">Electro</option>
        </select>
    </div>

    <button type="submit">Ajouter</button>
</form>
