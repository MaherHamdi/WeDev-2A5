<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="../../assets/css/reservationTable.css" rel="stylesheet">



<div class="container">

    <div class="table-wrapper ">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type de ticket</th>
                    <th>Date de reservation</th>
                    <th>Prix</th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listeres as $reservation) {
                ?>
                    <tr>
                        <td><?php echo $reservation['id_res'] ?></td>
                        <td><?php echo $reservation['nomticket'] ?></td>
                        <td><?php echo $reservation['date'] ?></td>
                        <td><?php echo $reservation['prix_res'] ?></td>
                        <td style="text-align: right;">
                            <a href="modifierReservation.php" class="text-dark font-weight-bold text-xs" data-toggle="modal" data-target="#modifierModal"><i class="fas fa-pencil-alt text-dark me-2"></i>
                                Editer
                            </a>
                            <a style="margin: 0px 30px 0px 40px;" href="" class="text-danger font-weight-bold text-xs "> <i class="far fa-trash-alt me-2"></i>
                                Supprimer
                            </a>

                            <div class="modal fade" id="modifierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="modal-title">Modifier votre profil</div>
                                            <button style="background-color: transparent; border:none;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <span style="font-size: 13px;">Nom</span>
                                                    <input type="date" name="nom" class="form-control" id="" value="" required>
                                                </div>
                                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                                    <span style="font-size: 13px;">Prenom</span>
                                                    <input type="text" class="form-control" name="prenom" id="" value="" required>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button class="buttonCancel" type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                            <button name="submit" type="submit" class="buttonReservation">Modifier</button>
                                            <style>
                                                .buttonReservation {
                                                    background: #ffb03b;
                                                    border: 0;
                                                    padding: 10px 24px;
                                                    color: #fff;
                                                    transition: 0.4s;
                                                    border-radius: 50px;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>

                    </tr>
                <?php } ?>
            <tbody>
        </table>
    </div>


</div>


</section>