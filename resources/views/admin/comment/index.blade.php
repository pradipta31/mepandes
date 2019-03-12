@extends('layouts.master')
@section('content')
<div class="container-fluid">
  <br>
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
  <div class="row">
    <div class="span11">
      <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data Komentar Pengunjung</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th width="350px">Komentar</th>
                  <th>Status</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach($comments as $comment)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$comment->name}}</td>
                    <td>{{$comment->comment}}</td>
                    <td>
                      @if($comment->status == 'nothing')
                      <span class="label label-warning">Dipertimbangkan</span>
                      @elseif($comment->status == 'approved')
                      <span class="label label-success">Disetujui</span>
                      @elseif($comment->status == 'disapprove')
                      <span class="label label-danger">Tidak Disetujui</span>
                      @endif
                    </td>
                    <td>
                      @if($comment->status == 'nothing')
                        <a href="javascript:void(0);" class="btn btn-success btn-sm" onclick="approve('{{$comment->id}}');">
                          <i class="fa fa-check"></i>
                          Setujui
                        </a>
                        <a href="javascript:void(0)" class="btn btn-danger btn-sm"  onclick="disApprove('{{$comment->id}}');">
                          <i class="fa fa-ban"></i>
                          Tidak Setuju
                        </a>
                      @elseif($comment->status == 'approved')
                      <span class="label label-success">Disetujui</span>
                      @elseif($comment->status == 'disapprove')
                      <span class="label label-danger">Tidak Disetujui</span>
                      @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>
</div>
<form class="hidden" action="" method="post" id="formApprove">
    {{ csrf_field() }}
</form>
<form class="hidden" action="" method="post" id="formNotApprove">
    {{ csrf_field() }}
</form>
@endsection
@section('js')
  <script src="{{asset('backend/bootbox.min.js')}}"></script>
  <script type="text/javascript">
  function approve(id){
          bootbox.confirm("<h5>Anda yakin ingin menyetujui komentar ini ?</h5>", function(result){
              if (result) {
                  $('#formApprove').attr('action', '{{url('admin/comment/approve')}}/'+id);
                  $('#formApprove').submit();
              }
          });
      }

      function disApprove(id){
          bootbox.confirm("<h5>Anda yakin tidak ingin menyetujui komentar ini ?</h5>", function(result){
              if (result) {
                  $('#formNotApprove').attr('action', '{{url('admin/comment/disapprove')}}/'+id);
                  $('#formNotApprove').submit();
              }
          });
      }
  </script>
@endsection
