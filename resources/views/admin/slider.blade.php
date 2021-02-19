@extends('admin.layouts.default')
@section('content')

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center col-12">
                    <h1>Slider</h1>
                    <button class="btn btn-primary">Add New</button>
                </div>
                @if(session('status'))
                <p id="message" class="alert alert-success"> {{ session('status') }} </p>
                @endif
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Text</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $slider)
                        <tr>
                            <td class="text-center"><img src="/assets/admin/dist/img/slider/{{$slider['image']}}" style="height: 10vw;"></td>
                            <td>{{ $slider['title'] }}</td>
                            <td>{{ $slider['sub_title'] }}</td>
                            <td>{{ $slider['text'] }}</td>
                            <td>
                                <a href="#"><span><i class="fas fa-arrow-up"></i></span></a>
                                <a href="#"><span><i class="far fa-eye-slash"></i></span></a>
                                <a href="#"><span><i class="fas fa-pen"></i></span></a>
                                <a href="#"><span><i class="fas fa-arrow-down"></i></span></a>
                                <a id="deletion" href="{{route('slider.delete',$slider->id)}}" data-toggle="modal" data-target="#myModal"><span><i class="fas fa-times-circle"></i></span></a>
                            </td>
                            <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="modalTitle">Are you sure you want to delete this item?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="return confirmation();">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Text</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
@section('script')

<script src="/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    $(function () {
        $("#example2").DataTable({
            paging: true,
            lengthChange: false,
            searching: false,
            ordering: true,
            info: true,
            autoWidth: false,
            responsive: true,
        });
    });
</script>
<script src="/assets/js/admin.js"></script>

@endsection
