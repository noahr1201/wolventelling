<?php
require_once '../PHP/db_Config.php';

if (!$mysqli) {
  die("Database connection failed: " . mysqli_connect_error());
}

$query = "SELECT naam, plaats, datum, hoeveel FROM Sightings";
$result = $mysqli->query($query);

if (!$result) {
  die("Query failed: " . $mysqli->error);
}
?>

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
  <link rel="stylesheet" href="/CSS/map.css">
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
            <a class="nav-link" href="/index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Pages/gezien.php">Ik heb een wolf gezien!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/Pages/kaart.php">Kaart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Pages/contact.php">Contact</a>
        </ul>
      </div>
    </div>
  </nav>
  <div class="content">
    <div class="content-wrapper">
      <div class="map-grid">
        <div class="tile" style="grid-column: 1; grid-row: 1;">
          <span class="number">1A</span>
          <img src="/Images/1A.jpg" alt="1A">
        </div>
        <div class="tile" style="grid-column: 2; grid-row: 1;">
          <span class="number">1B</span>
          <img src="/Images/1B.jpg" alt="1B">
        </div>
        <div class="tile" style="grid-column: 3; grid-row: 1;">
          <span class="number">1C</span>
          <img src="/Images/1C.jpg" alt="1C">
        </div>
        <div class="tile" style="grid-column: 4; grid-row: 1;">
          <span class="number">1D</span>
          <img src="/Images/1D.jpg" alt="1D">
        </div>
        <div class="tile" style="grid-column: 5; grid-row: 1;">
          <span class="number">1E</span>
          <img src="/Images/1E.jpg" alt="1E">
        </div>
        <div class="tile" style="grid-column: 1; grid-row: 2;">
          <span class="number">2A</span>
          <img src="/Images/2A.jpg" alt="2A">
        </div>
        <div class="tile" style="grid-column: 2; grid-row: 2;">
          <span class="number">2B</span>
          <img src="/Images/2B.jpg" alt="2B">
        </div>
        <div class="tile" style="grid-column: 3; grid-row: 2;">
          <span class="number">2C</span>
          <img src="/Images/2C.jpg" alt="2C">
        </div>
        <div class="tile" style="grid-column: 4; grid-row: 2;">
          <span class="number">2D</span>
          <img src="/Images/2D.jpg" alt="2D">
        </div>
        <div class="tile" style="grid-column: 5; grid-row: 2;">
          <span class="number">2E</span>
          <img src="/Images/2E.jpg" alt="2E">
        </div>
        <div class="tile" style="grid-column: 1; grid-row: 3;">
          <span class="number">3A</span>
          <img src="/Images/3A.jpg" alt="3A">
        </div>
        <div class="tile" style="grid-column: 2; grid-row: 3;">
          <span class="number">3B</span>
          <img src="/Images/3B.jpg" alt="3B">
        </div>
        <div class="tile" style="grid-column: 3; grid-row: 3;">
          <span class="number">3C</span>
          <img src="/Images/3C.jpg" alt="3C">
        </div>
        <div class="tile" style="grid-column: 4; grid-row: 3;">
          <span class="number">3D</span>
          <img src="/Images/3D.jpg" alt="3D">
        </div>
        <div class="tile" style="grid-column: 5; grid-row: 3;">
          <span class="number">3E</span>
          <img src="/Images/3E.jpg" alt="3E">
        </div>
        <div class="tile" style="grid-column: 1; grid-row: 4;">
          <span class="number">4A</span>
          <img src="/Images/4A.jpg" alt="4A">
        </div>
        <div class="tile" style="grid-column: 2; grid-row: 4;">
          <span class="number">4B</span>
          <img src="/Images/4B.jpg" alt="4B">
        </div>
        <div class="tile" style="grid-column: 3; grid-row: 4;">
          <span class="number">4C</span>
          <img src="/Images/4C.jpg" alt="4C">
        </div>
        <div class="tile" style="grid-column: 4; grid-row: 4;">
          <span class="number">4D</span>
          <img src="/Images/4D.jpg" alt="4D">
        </div>
        <div class="tile" style="grid-column: 5; grid-row: 4;">
          <span class="number">4E</span>
          <img src="/Images/4E.jpg" alt="4E">
        </div>
        <div class="tile" style="grid-column: 1; grid-row: 5;">
          <span class="number">5A</span>
          <img src="/Images/5A.jpg" alt="5A">
        </div>
        <div class="tile" style="grid-column: 2; grid-row: 5;">
          <span class="number">5B</span>
          <img src="/Images/5B.jpg" alt="5B">
        </div>
        <div class="tile" style="grid-column: 3; grid-row: 5;">
          <span class="number">5C</span>
          <img src="/Images/5C.jpg" alt="5C">
        </div>
        <div class="tile" style="grid-column: 4; grid-row: 5;">
          <span class="number">5D</span>
          <img src="/Images/5D.jpg" alt="5D">
        </div>
        <div class="tile" style="grid-column: 5; grid-row: 5;">
          <span class="number">5E</span>
          <img src="/Images/5E.jpg" alt="5E">
        </div>
        <div class="tile" style="grid-column: 1; grid-row: 6;">
          <span class="number">6A</span>
          <img src="/Images/6A.jpg" alt="6A">
        </div>
        <div class="tile" style="grid-column: 2; grid-row: 6;">
          <span class="number">6B</span>
          <img src="/Images/6B.jpg" alt="6B">
        </div>
        <div class="tile" style="grid-column: 3; grid-row: 6;">
          <span class="number">6C</span>
          <img src="/Images/6C.jpg" alt="6C">
        </div>
        <div class="tile" style="grid-column: 4; grid-row: 6;">
          <span class="number">6D</span>
          <img src="/Images/6D.jpg" alt="6D">
        </div>
        <div class="tile" style="grid-column: 5; grid-row: 6;">
          <span class="number">6E</span>
          <img src="/Images/6E.jpg" alt="6E">
        </div>
      </div>
      <div class="text-content ms-3">
        <h1>Kaart (WAAR zijn wolven?!?!)</h1>
        <table>
          <tr>
            <th>Naam</th>
            <th>Plaats</th>
            <th>Datum</th>
            <th>Hoeveel</th>
          </tr>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?php echo htmlspecialchars($row['naam']); ?></td>
              <td><?php echo htmlspecialchars($row['plaats']); ?></td>
              <td><?php echo htmlspecialchars($row['datum']); ?></td>
              <td><?php echo htmlspecialchars($row['hoeveel']); ?></td>
            </tr>
          <?php endwhile; ?>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
</body>
</html>