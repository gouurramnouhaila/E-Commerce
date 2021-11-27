<?php
    require("connexion.php");
    require ("html/header.html");

    $query = 'SELECT * FROM produits WHERE numProd='.$_GET['numProd'];
    $produit = mysqli_fetch_row(mysqli_query($con,$query));

?>


<html>
<head>
    <title>Modification de l'adresse d'un propriétaire</title>
    <meta charset="utf-8">
</head>
<body>
    <form action="update.php?numProd="<?php echo $produit[0]; ?> method="post" class="form-group container mt-5">
        <table>
        <thead>
            <tr>
                <th>
                    <h3>Modifier un Produit</h3>
                </th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <input type="hidden" name="numProd" value="<?php echo $produit[0]; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label  class="col-sm-2 col-form-label">Designation</label>
            </td>
            <td>
                <input type="text" name="designation" value="<?php echo $produit[1]; ?>" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                <label>Description</label>
            </td>
            <td>
                <textarea name="description" class="form-control">
                    <?php echo $produit[2]; ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label>Prix</label>
            </td>
            <td>
                <input type="number" name="prix" value="<?php echo $produit[3]; ?>" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                <label>Type</label>
            </td>
            <td>
                a poids<input type="radio" name="type" value="p" <?php echo ($produit[4] == 'p') ? 'checked="checked"':'';?>  class="form-check-input">
                A unit <input type="radio" name="type" value="u" <?php echo ($produit[4] == 'u') ? 'checked="checked"':'';?>  class="form-check-input">
            </td>
        </tr>
        <tr>
            <td>
                <label>Date de Fabrication</label>
            </td>
            <td>
                <input type="date" name="date" value="<?php echo $produit[5]; ?>" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Photo</td>
            <td>
                <input type="file" name="photo" value="<?php echo $produit[6]; ?>" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Categorie</td>
            <td>
                <select name="Categorie" class="form-select">
                    <option value="0">choisir a</option>
                    <option value="1" <?php if($produit[7] == 1) echo"selected"; ?>>categorie1</option>
                    <option value="2" <?php if($produit[7] == 3) echo"selected"; ?>>categorie2</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="valider" value="modifier" class="btn btn-warning mt-3">
            </td>
            <td>
                <input type="reset" name="annuler" value="annuler" class="btn btn-secondary mt-3">
            </td>
        </tr>
        </tbody>
    </form>
</body>
</html>


