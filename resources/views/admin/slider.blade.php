@extends('admin.layouts.default')
@section('content')

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between col-12">
                    <h1>Slider</h1>
                    <button class="btn btn-primary h-25 align-self-baseline">Add New</button>
                </div>
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
                                <a href="#"><span><i class="fas fa-times-circle"></i></span></a>
                            </td>
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

@endsection
