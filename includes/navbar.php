<nav class="navbar navbar-expand-lg navbar-dark text-black " data-scroll-header >
    <div class="container">
        <a class="navbar-brand rapido" href="index.php"><span class="rapido"></span>Taxi<span class="taxi">RAPIDO</span>Express<span></span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-lg-2" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">
                <li class="nav-item">
                    <a class="nav-link text-black" href="index.php?page=dashboard">Tableau de bord</a>
                </li>
                <li class="nav-item dropdown text-black">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Gestion des courses</a>
                    <ul class="dropdown-menu dropdown-menu-dark action">
                        <li class="dropdown-item">
                            <a class="nav-link text-black" href="index.php?page=add_course">Ajouter une course</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-black" href="index.php?page=assign_driver">Affecter un chauffeur</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-black" href="index.php?page=finish_course">Terminer une course</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="index.php?page=aide">Aide</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="index.php?page=contact">Contatez-nous</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php
                // Vérifier si l'utilisateur est connecté
                if (isset($_SESSION['user_id'])) {
                    // Afficher le lien de déconnexion si l'utilisateur est connecté
                    echo '<li class="nav-item bg-danger rounded-2"><a class="nav-link" href="logout.php">Déconnexion</a></li>';
                } else {
                    // Afficher le lien de connexion si l'utilisateur n'est pas connecté
                    echo '<li class="nav-item bg-primary rounded-2"><a class="nav-link" href="login.php">Connexion</a></li>';
                    echo '<li class="nav-item bg-warning rounded-2 "><a class="nav-link" href="register.php">Inscription</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>   
</nav>
