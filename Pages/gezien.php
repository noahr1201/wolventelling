<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wolven Telling 🐺</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+15&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.html">
                <img src="/Images/logo.svg" alt="Logo van een wolf" width="80" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end links" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Pages/gezien.php">Ik heb een wolf gezien!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Pages/kaart.php">Kaart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Pages/contact.php">Contact</a>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="content-wrapper">
            <div class="image-content">
                <img src="/Images/uitroepteken.svg" alt="Image" width="250" height="250">
            </div>
            <div class="text-content">
                <h1>WAAR HEB JE EEN WOLF GEZIEN?!?!</h1>
                <p>Vul het formulier in om een wolf te melden.</p>
                <form action="../PHP/process_gezien.php" method="post">
                    <div class="mb-3">
                        <label for="naam" class="form-label">Naam</label>
                        <input type="text" class="form-control" id="naam" name="naam" required>
                    </div>
                    <div class="mb-3">
                        <label for="plaats" class="form-label">Plaats</label>
                        <select class="form-select" id="plaats" name="plaats" required>
                            <option value="1C (Waddeneilanden)">1C (Waddeneilanden)</option>
                            <option value="1D (Friesland)">1D (Friesland)</option>
                            <option value="1E (Groningen)">1E (Groningen)</option>
                            <option value="2C (Noord-Holland)">2C (Noord-Holland)</option>
                            <option value="2D (Flevoland)">2D (Flevoland)</option>
                            <option value="2E (Drenthe)">2E (Drenthe)</option>
                            <option value="3B (Zuid-Holland)">3B (Zuid-Holland)</option>
                            <option value="3C (Utrecht)">3C (Utrecht)</option>
                            <option value="3D (Overijssel)">3D (Overijssel)</option>
                            <option value="4C (Gelderland)">4C (Gelderland)</option>
                            <option value="5A (Zeeland)">5A (Zeeland)</option>
                            <option value="5C (Noord-Brabant)">5C (Noord-Brabant)</option>
                            <option value="5D (Limburg)">5D (Limburg)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="datum" class="form-label">Datum</label>
                        <input type="date" class="form-control" id="datum" name="datum" required>
                    </div>
                    <div class="mb-3">
                        <label for="hoeveel" class="form-label">Hoeveel zag je er?</label>
                        <input type="number" class="form-control" id="hoeveel" name="hoeveel" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Verstuur</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>
</html>