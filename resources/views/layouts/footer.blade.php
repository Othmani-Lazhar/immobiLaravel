<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="../about.blade.php">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="../agents.blade.php">Agents</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="../blog.blade.php">Blog</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="../contact.blade.php">Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p>Get notified about the latest properties in our marketplace.</p>
                    <form class="form-inline" role="form">
                            <input type="text" placeholder="Enter Your email address" class="form-control">
                                <button class="btn btn-success" type="button">Notify Me!</button></form>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="{{asset('img/facebook.png')}}" alt="facebook"></a>
                    <a href="#"><img src="{{asset('img/twitter.png')}}" alt="twitter"></a>
                    <a href="#"><img src="{{asset('img/linkedin.png')}}" alt="linkedin"></a>
                    <a href="#"><img src="{{asset('img/instagram.png')}}" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>Bootstrap Realestate Inc.</b><br>
<span class="glyphicon glyphicon-map-marker"></span> 8290 Walk Street, Australia <br>
<span class="glyphicon glyphicon-envelope"></span> hello@bootstrapreal.com<br>
<span class="glyphicon glyphicon-earphone"></span> (123) 456-7890</p>
            </div>
        </div>
<p class="copyright">Copyright 2013. All rights reserved.	</p>


</div></div>




<!-- Modal -->
<div id="siguppop" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">

                    <h4>Sign Up</h4>

                        {!!Form::open(array('url' => '/register', 'method'=>'POST', 'files' => true))!!}
                        <div class="col-sm-6 login">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">User Name</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>




                    </div>
                        <div class="col-sm-6 login">
                <div class="form-group">
                   <img class="img-rounded"  width="200" height="200" id="image" name="image"/>
                    <input type="file" id="files"   name="img" />
                </div>
                  </div>
                        <button type="submit" class="btn btn-success col-lg-12">Sign Up</button>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>          
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href=''">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->

<script>
    document.getElementById("files").onchange = function () {
        var reader = new FileReader();

        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image").src = e.target.result;
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };
</script>

</body>
</html>



