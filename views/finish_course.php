<?php include_once 'includes/header.php';?>
<body>
    <?php include_once 'includes/navbar.php';?>
    
    <div class="container mt-6">
        <h1>Terminer une course en cours</h1>
        <form action="index.php?page=assign_driver" method="post" id="assignDriverForm">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Course</th>
                        <th>Point de départ</th>
                        <th>Point d'arrivée</th>
                        <th>Date et heure</th>
                        <th>Chauffeur</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($courses as $course): ?>
                        <tr>
                            <td><?php echo $course['course_id']; ?></td>
                            <td><?php echo $course['point_depart']; ?></td>
                            <td><?php echo $course['point_arrive']; ?></td>
                            <td><?php echo $course['date_heure']; ?></td>
                            <td>
                                <?php 
                                $chauffeur_id = $course['chauffeur_id']; 
                                $courseChauf = ""; 
                                foreach ($chauffeurs as $chauffeur) {
                                    if($chauffeur['chauffeur_id']==$chauffeur_id):
                                        $courseChauf = $chauffeur['nom'] . ' ' . $chauffeur['prenom'];
                                        break;
                                    endif;
                                }
                                echo $courseChauf;
                                ?>
                            </td>
                            <td><a class="btn btn-primary btn-sm" href="index.php?page=update_status&amp;id=<?php echo $course['course_id'] ?>&amp;cid=<?php echo $course['chauffeur_id'] ?>" >Terminer</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
        </form>
    </div>

    <?php include_once 'includes/footer.php'; ?>
</body>
</html>
