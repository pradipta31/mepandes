<div class="features">
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
          <!-- <div class="styled-pagination text-center">
                <ul class="clearfix"> -->
                    {!! $comments->links() !!}
                <!-- </ul>
            </div> -->
      </div>
  </div>
</div>
