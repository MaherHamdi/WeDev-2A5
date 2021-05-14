<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<section section id="" class="contact">

  <div class="container mt-3">
    <div class="section-title">
      <div class=" position-relative">
        <form id="formAvatar" action="photoProfil.php" method="POST" enctype="multipart/form-data" >
          <label>
            <input id="fileAvatar" type="file" name="avatar" style="display: none;">
            <a style="padding:20px 0 0 78px;" class="btn btn-sm btn-icon-only bg-gradient-light position-absolute">
              <i class="fas fa-pen-square top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Image"></i>
            </a>
          </label>
          <img style="  box-shadow: 0px 0px 4px #000000;" src="../../assets/img/posts/<?php echo $res['image']; ?>" alt="Avatar" class="avatar border-radius-lg ">
        </form>
      </div>
      <style>
        .fa-pen-square {
          font-size: 25px;
          color: #444444;


        }

        .avatar {
          vertical-align: middle;
          width: 100px;
          height: 100px;
          border-radius: 50%;
        }
      </style>

      <h2><span><?php echo  $res['nom'] ?></span><?php echo " " . $res['prenom'] ?></h2>
    </div>
    <div class="info-wrap">
      <div style="padding-left: 90px;" class="row">
        <div class="col-lg-4 col-md-6 info">
          <i class="bi bi-geo-alt"></i>
          <h4>Adresse:</h4>
          <p><?php echo $res['adresse'] ?></p>
        </div>


        <div class="col-lg-4 col-md-6 info mt-4 mt-lg-0">
          <i class="bi bi-envelope"></i>
          <h4>Email:</h4>
          <p><?php echo $res['email'] ?></p>
        </div>

        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
          <i class="bi bi-phone"></i>
          <h4>Telephone:</h4>
          <p><?php echo $res['phone'] ?></p>
        </div>
      </div>
    </div>

    <form action="modifierprofile.php" method="post" class="php-email-form">
      <div class="row">
        <div class="col-md-6 form-group">
          <span style="font-size: 13px;">Nom</span>
          <input type="text" name="nom" class="form-control" id="" value="<?php echo $res['nom'] ?>" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <span style="font-size: 13px;">Prenom</span>
          <input type="text" class="form-control" name="prenom" id="" value="<?php echo $res['prenom'] ?>" required>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-md-6 form-group">
          <span style="font-size: 13px;">username</span>
          <input disabled="disabled" type="text" name="username" class="form-control" id="" value="<?php echo $res['username'] ?>" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">

          <span style="font-size: 13px;">Adresse email</span>
          <input disabled="disabled" type="email" name="email" class="form-control" id="" value="<?php echo $res['email'] ?>" required>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-md-6 form-group">
          <span style="font-size: 13px;">Mot de passe</span>
          <input type="password" class="form-control" name="password" id="" value="<?php echo $res['password'] ?>" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <span style="font-size: 13px;">Telephone</span>
          <input placeholder="ecrire votre numero de telephone" type="text" class="form-control" name="phone" id="" value="<?php echo $res['phone'] ?>">
        </div>
      </div>
      <div class="form-group mt-2">
        <span style="font-size: 13px;">Adresse postale</span>
        <input placeholder="ecrire votre adresse postal" type="text" class="form-control" name="adresse" value="<?php echo $res['adresse'] ?>">
      </div>
      <style>
        input[type="text"]:disabled {
          background: rgb(247, 244, 244);
        }

        input[type="email"]:disabled {
          background: rgb(247, 244, 244);
        }
      </style>
      <input class="input" type="hidden" name="id" value="<?php echo $res['id'] ?>">
      <br>
      <div class="text-center"><button class="buttonModifier" data-toggle="modal" data-target="#verifierModal" type="button">Modifier votre profil</button></div>



      <div class="modal fade" id="verifierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div class="modal-title">Modifier votre profil</div>
              <button style="background-color: transparent; border:none;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Êtes-vous sûr de vouloir modifier votre profil?
            </div>
            <div class="modal-footer">
              <button class="buttonCancel" type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
              <button name="submit" type="submit" class="btn btn-primary">Modifier</button>
            </div>
          </div>
        </div>
      </div>



    </form>


  </div>


  <!-- Modal -->


<script>
  document.getElementById("fileAvatar").onchange = function() {
    document.getElementById("formAvatar").submit();
};
</script>





  </html>