<?php include_once 'includes/header.php'; ?>
<body>
    <?php include_once 'includes/navbar.php'; ?>
    
    <div class="container mt-5">
        <h1>Ajouter une course</h1>
        <form action="index.php?page=add_course" method="post">
            <div class="form-group">
                <label for="point_depart">Point de départ</label>
                <input type="text" class="form-control" id="point_depart" name="point_depart" required>
            </div>
            <div class="form-group">
                <label for="point_arrivee">Point d'arrivée</label>
                <input type="text" class="form-control" id="point_arrive" name="point_arrive" required>
            </div>
            <div class="form-group">
                <label for="date_heure">Date et Heure</label>
                <input type="datetime-local" class="form-control" id="date_heure" name="date_heure" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

    <?php include_once 'includes/footer.php'; ?>
</body>
</html>
