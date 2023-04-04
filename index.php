<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <form action="badwords.php" method="GET">
            <div>
                <label for="paragraph" class="form-label">Paragrafo</label>
                <textarea name="paragraph" cols="30" rows="3"></textarea>
            </div>
            <div>
                <label for="badword">Parola da censurare</label>
                <input type="text" name="badword" placeholder="parola da censurare...">
            </div>
            <button type="submit">invia</button>
        </form>
    </main>
</body>

</html>