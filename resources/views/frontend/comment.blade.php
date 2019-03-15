<!-- <div class="features" id="foo">
  <div class="container">
    <h3>Komentar</h3>
      <div class="features-grids">
        @foreach($comments as $comment)
          <div class="col-md-3 feature-grid">
            <div class="feature">
              <div class="feature1">
                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <h5>{{$comment->name}}</h5>
              </div>
              <div class="feature2">
                <p>{{$comment->comment}}</p>
              </div>
            </div>
          </div>
        @endforeach
          <div class="clearfix"></div>

      </div>

  </div>
</div> -->
<div class="features">
  <div class="container">
  <div class="row">
    <div class="col-md-4">
        <h3>Komentar</h3>
        <div class="features-grids">
          <section class="slider">
    				<div class="flexslider">
    					<ul class="slides">
                  @foreach($comments as $comment)
                  <li>
                        <div class="feature">
                          <div class="feature1">
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                            <h5>{{$comment->name}}</h5>
                          </div>
                          <div class="feature2">
                            <p>{{$comment->comment}}</p>
                          </div>
                        </div>
                  </li>
                  @endforeach
    					</ul>
    				</div>
    			</section>
          <script defer src="{{asset('frontend/js/jquery.flexslider.js')}}"></script>
    			  <script type="text/javascript">
    					$(function(){
    					  SyntaxHighlighter.all();
    					});
    					$(window).load(function(){
    					  $('.flexslider').flexslider({
    						animation: "slide",
    						start: function(slider){
    						  $('body').removeClass('loading');
    						}
    					  });
    					});
    			  </script>
        </div>
    </div>
    <div class="col-md-8 text-center">
        <div class="about-head">
        @if (Session::has('success'))
          <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Sukses !</h4>
              {{Session::get('success')}}
          </div>
        @elseif (Session::has('error'))
          <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Error !</h4>
              {{Session::get('error')}}
          </div>
        @endif
        <h3>Tambah Komentar</h3>
          <p>Tambahkan komentar anda pada kolom di bawah ini</p>
        </div>
        <div class="row">
          <form action="{{url('komentar')}}" method="POST">
            {{ csrf_field() }}
            <div class="col-md-4"></div>
            <div class="col-md-8">
               <div class="form_details">
                  <input type="text" class="form-control" placeholder="Nama anda" name="name">
                  <textarea class="form-control" placeholder="Komentar" name="comment"></textarea>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="form_details sub-button">
               <input type="submit" value="Kirim Komentar" aria-hidden="true">
            </div>
          </form>
        </div>
    </div>
  </div>
</div>
</div>
