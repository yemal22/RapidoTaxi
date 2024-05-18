<?php
class ErrorController {
    public function index() {
        // Inclure le fichier d'en-tête
        include_once 'includes/header.php';

        // Afficher un message d'erreur générique
        ?>
        <div class="container mt-5">
            <h1>Erreur</h1>
            <p>Une erreur s'est produite. Veuillez réessayer plus tard.</p>
        </div>
        <?php

        // Inclure le fichier du pied de page
        include_once 'includes/footer.php';
    }
}
?>
