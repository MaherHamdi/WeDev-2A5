<section id="reservation" class="book-a-table">
    <div class="container">

      <div class="section-title">
        <h2>Reserver <span>une ticket</span></h2>
        <p>Veuillez remplir ce formulaire pour reserver votre ticket</p>
      </div>

      <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
        <div class="row">
    
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
        <select name="type" class="form-control">
<option value="type">Select type</option>
<option value="type">type 1</option>
<option value="type">Select type</option>
<div class="validate"></div>

        </select>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
    
            <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
            <div class="input-group-prepend">
            <span class="input-group-text">0.00</span>

  </div>
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your
            reservation. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Reserver Maintenant</button></div>
      </form>

    </div>
  </section>