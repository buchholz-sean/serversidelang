<div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Contact Us</h1>
        <form action="/contact/formRecv" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="emailinput" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleSelect1">Subject</label>
            <select class="form-control" id="exampleSelect1" name="subject">
              <option>I want to know more about SSL</option>
              <option>I have a question about Front-End Dev</option>
              <option>I want to hire you!</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleTextarea">Your Message</label>
            <textarea class="form-control" id="exampleTextarea" name="message" rows="3"></textarea>
          </div>
          <fieldset class="form-group">
            <legend>Experience level</legend>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                Beginner (What is HTML?)
              </label>
            </div>
            <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                Intermediate (I know some CSS and JavaScript)
              </label>
            </div>
            <div class="form-check disabled">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3">
                Advanced (I write my own frameworks)
              </label>
            </div>
          </fieldset>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="newsletter">
              Sign me up for the newsletter!
            </label>
          </div>
          <p>
              <button type="submit" class="btn btn-primary" id="submit">Submit</button>
          </p>
        </form>
      </div>

</div> <!-- /container -->
