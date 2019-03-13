
<div class="about">
  <div class="container">
    <div class="about-head">
    @if (Session::has('success'))
      <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Information !</h4>
          {{Session::get('success')}}
      </div>
    @elseif (Session::has('error'))
      <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Information !</h4>
          {{Session::get('error')}}
      </div>
    @endif
    <h2>Tambah Komentar</h2>
      <p>Tambahkan komentar anda disini</p>
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
