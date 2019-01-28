<?php
    $title = 'Simple Guides: FAQ';
    include 'includes/header.php';
?>
    <div id="main">
      <section id="q1" class="text-secondary">
        <div class="container">
          <h2 class="display-4 text-center">Frequently asked questions</h2>
          <h2 class="display-5 text-center">Question 1</h2>
          <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dignissimos? Cumque atque repudiandae consequatur consequuntur minus quasi? Ea autem in, temporibus nemo, nulla ratione sunt obcaecati facilis consectetur repudiandae repellat.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, recusandae dignissimos assumenda eaque aliquam aspernatur explicabo est pariatur, dicta dolores fugiat consequatur sequi, animi ipsam. Itaque facere consectetur excepturi dignissimos.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, recusandae dignissimos assumenda eaque aliquam aspernatur explicabo est pariatur, dicta dolores fugiat consequatur sequi, animi ipsam. Itaque facere consectetur excepturi dignissimos.</p>
          </div>
        </div>
      </section>
      <section id="q2" class="text-secondary">
        <div class="container">
          <h2 class="display-5 text-center">Question 2</h2>
          <div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dignissimos? Cumque atque repudiandae consequatur consequuntur minus quasi? Ea autem in, temporibus nemo, nulla ratione sunt obcaecati facilis consectetur repudiandae repellat.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, recusandae dignissimos assumenda eaque aliquam aspernatur explicabo est pariatur, dicta dolores fugiat consequatur sequi, animi ipsam. Itaque facere consectetur excepturi dignissimos.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, recusandae dignissimos assumenda eaque aliquam aspernatur explicabo est pariatur, dicta dolores fugiat consequatur sequi, animi ipsam. Itaque facere consectetur excepturi dignissimos.</p>
        </div>
        </div>
      </section>
      <section id="q3" class="text-secondary">
        <div class="container">
          <h2 class="display-5 text-center">Question 3</h2>
          <div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dignissimos? Cumque atque repudiandae consequatur consequuntur minus quasi? Ea autem in, temporibus nemo, nulla ratione sunt obcaecati facilis consectetur repudiandae repellat.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, recusandae dignissimos assumenda eaque aliquam aspernatur explicabo est pariatur, dicta dolores fugiat consequatur sequi, animi ipsam. Itaque facere consectetur excepturi dignissimos.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, recusandae dignissimos assumenda eaque aliquam aspernatur explicabo est pariatur, dicta dolores fugiat consequatur sequi, animi ipsam. Itaque facere consectetur excepturi dignissimos.</p>
        </div>
        </div>
      </section>
      <section id="q4" class="text-secondary">
        <div class="container">
          <h2 class="display-5 text-center">Question 4</h2>
          <div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dignissimos? Cumque atque repudiandae consequatur consequuntur minus quasi? Ea autem in, temporibus nemo, nulla ratione sunt obcaecati facilis consectetur repudiandae repellat.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, recusandae dignissimos assumenda eaque aliquam aspernatur explicabo est pariatur, dicta dolores fugiat consequatur sequi, animi ipsam. Itaque facere consectetur excepturi dignissimos.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, recusandae dignissimos assumenda eaque aliquam aspernatur explicabo est pariatur, dicta dolores fugiat consequatur sequi, animi ipsam. Itaque facere consectetur excepturi dignissimos.</p>
        </div>
        </div>
      </section>
    </div>
    <section id="contact">
      <div class="container">
        <div class="row text-secondary">
          <div class="col-md-12 border border-secondary rounded p-5">
            <h2 class="display-4 text-center">Ask a question or send a message</h2>
            <form  name="contactForm" id="contactForm" method="post" 
              onSubmit = "return validateForm();" action="includes/message.php">
              <div id="error1" class="bg-warning"></div>
              <br><br>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required>
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="message">Message or Question</label>
                <textarea class="form-control" name="message" id="message" rows="10" cols="40" placeholder="Enter Text" required></textarea>
              </div>
              <button type="reset" class="btn btn-outline-secondary">Clear</button>
              <button type="submit" id="submit1" class="btn btn-outline-primary">Submit</button>
            </form>
          </div>
        </div>
        <!-- end .row -->
      </div>
      <!-- end .container -->
    </section>
<?php
  include 'includes/footer.php';
?>