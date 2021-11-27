<?php
    require ("html/header.html");
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="alert alert-dismissible alert-secondary">
                    <h4 class="alert-heading m-lg-4 text-center">Add Product</h4>
                </div>
                <form action="insert.php" method="post">
                    <div class="form-group">
                        <label for="designation" class="form-label mt-4">Designation</label>
                        <input type="text" class="form-control" name="designation">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label mt-4">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="prix" class="form-label mt-4">Prix</label>
                        <input type="number" class="form-control" name="prix">
                    </div>
                    <fieldset class="form-group">
                        <label class="mt-4">Type</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="type"  value="u" checked="">
                                Unité
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="type" value="p">
                                Pieds
                            </label>
                        </div>
                    </fieldset>
                    <div class="form-group">
                        <label for="date" class="form-label mt-4">Date de Fabrication</label>
                        <input type="date" class="form-control" name="date">
                    </div>
                    <div class="form-group">
                        <label for="photo" class="form-label mt-4">Photo</label>
                        <input type="file" class="form-control" name="photo">
                    </div>
                    <div class="form-group">
                        <label for="Categorie" class="form-label mt-4">Category</label>
                        <select class="form-select" name="Categorie">
                            <option value="1">Choose a category</option>
                            <option value="2">Category 1</option>
                            <option value="3">Category 2</option>
                            <option value="4">Category 3</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <input type="submit" name="valider" value="Valider" class="btn btn-dark m-5 w-25 ">
                        <input type="reset" name="annuler" value="Annuler" class="btn btn-secondary w-25 m-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

