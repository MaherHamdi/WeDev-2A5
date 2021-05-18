<section id="reservation" class="book-a-table">
  <div class="container">
    <div class="section-title">
      <h2>Reserver <span>une ticket</span></h2>
      <p>Veuillez remplir ce formulaire pour reserver votre ticket</p>
    </div>
    <form action="ajouter_reservation.php" method="POST" class="php-email-form">

      <div class="row">
        
        <div class="col-lg-4 col-md-6 form-group mt-3">
          <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3">
          <?php
          $ops = '';
          $pdo = new PDO('mysql:host=localhost;dbname=belevedere', 'root', '');
          $stmt = $pdo->query("SELECT * from ticket");
          //$stmt = $pdo->execute();
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $ops .= "<option value='" . $row['prix_ticket'] . "'>" . $row['nomticket'] . "</option>";
          }
          ?>
          <input type="hidden" name="id_user" value="<?php echo $res['id'] ?>">
          <select name="type_ticket" id="totalprix" class="form-control">
            <?php echo $ops; ?>

          </select>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3">

          <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" required>
          <div class="input-group-prepend">
            <p><span class="input-group-text total">0</span></p>
          </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
          <script>
            var $dropdown = $('#totalprix');
            $dropdown.on('change', calculateCount);
            var $input = $('#people');
            
            $input.on('keyup change', calculateCount);

            function calculateCount() {
              var dropDownValue = $dropdown.find('option:selected');
              var inputValue = parseInt($input.val());
              var getvalue = $("#totalprix").val();
              console.log(inputValue);
              if (isNaN(inputValue)) {
                var total = 0;
              } else {
                var total = getvalue * inputValue;
              }
              $(".total").html(total);
            }
          </script>

        </div>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="votre avis concerant notre service!!"></textarea>
      </div>
      
      <div class="text-center"><button type="submit" name="reserver">Reserver Maintenant</button></div>
    </form>

  </div>
</section>