<!-- customers Review -->
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey hidden-xs" style="background-image:url('back_image.jpg');>


  <div class="row hidden-xs">
    <div class="col-sm-5">
    <img src="images/about_image/logo.jpg" class="img-rounded contact-img" width="304" height="236" alt="Best Dentist">
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-4 form-group">

          <input class="form-control" id="name"  placeholder="Name" type="text" ng-model="name" required>
        </div>
        <div class="col-sm-4 form-group">

          <input class="form-control" id="email"  placeholder="Email"  ng-model="email" required>
        </div>
        <div class="col-sm-4 form-group">

          <input class="form-control" id="phone"  placeholder="phone"  ng-model="phone"  required>
        </div>
      </div>

      <textarea class="form-control" id="comments" placeholder="Comment" ng-model="comments" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button type = "button" class = "btn btn-primary form-control" ng-show = "btnInsert" ng-click = "insertData()"><span class = "glyphicon glyphicon-save"></span> Submit</button>
           </div>
           <br /><br />
     				<div ng-model = "message" ng-show = "msgBox" class = "alert alert-info">{{message}}</div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey visible-xs"  >
<h3 class="text-center visible-xs">CONTACT</h3>
  <div class="cnt visible-xs">
    <h4>Contact us and we'll get back to you within 24 hours.</h4>
    <h4><span class="glyphicon glyphicon-map-marker visible-xs"></span> Una, Himachal</h4>
    <h4><span class="glyphicon glyphicon-phone visible-xs"></span> +91 9882279691</h4>
    <h4><span class="glyphicon glyphicon-envelope visible-xs"></span> myemail@gmail.com.com</h4>
<h2 class="text-center">Give your Details</h2>
<input class="form-control" id="name" name="name" placeholder="Name" type="text" required><br>
<input class="form-control" id="email" name="email" placeholder="Email" type="email" required><br>
<input class="form-control" id="phone" name="phone" placeholder="phone" type="number" required><br>
<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
<button class="btn btn-default pull-right" type="submit" value="{{btnName}}" ng-click="insertdata()">Send</button>

  </div>

</div>