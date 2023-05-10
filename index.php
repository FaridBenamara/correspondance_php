<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparaison des en-têtes CSV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Importer </h1>
    <form action="compare.php" method="post" enctype="multipart/form-data">
        <label for="csv1">Sélectionnez le 1 CSV :</label>
        <input type="file" name="csv1" id="csv1" required><br><br>

        <label for="csv2">Sélectionnez le 2 CSV :</label>
        <input type="file" name="csv2" id="csv2" required><br><br>

        <button type="submit">Comparer</button>
    </form>
</body>
</html>
