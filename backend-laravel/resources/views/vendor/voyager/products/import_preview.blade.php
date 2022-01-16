@extends('voyager::master')
@section('page_title', 'Import data confirmation')

@section('page_header')
<div class="container-fluid">
    <h1 class="page-title">
        <i class="voyager-upload"></i> Import data confirmation
    </h1>
    <a href="{{url('products')}}" class="btn btn-warning btn-add-new">
        <i class="voyager-back"></i> <span>Back</span>
    </a>

</div>
@stop
@section('content')
<div class="page-content browse container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <form action="{{url('products/confirm_import_data')}}" method="post" enctype="multipart/form-data">
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            @foreach ($data as $key => $d)
                            <li class="nav-item @if($loop->first){{'active'}}@endif">
                                <a class="nav-link @if($loop->first){{'active'}}@endif" data-toggle="tab"
                                    href="#panel-{{$key}}">{{$key}}</a>
                            </li>
                            @endforeach
                        </ul>
                        @csrf
                        <input type="hidden" name="import_data" value="{{$data->toJson()}}">
                        <input type="hidden" name="excel_name" value="{{$excel_name}}">
                        <div class="tab-content">
                            @foreach ($data as $key => $d)
                            <div class="tab-pane container  @if($loop->first){{'active'}}@endif" id="panel-{{$key}}"
                                role="tabpanel">
                                <div class="table-responsive">
                                    <table id="dataTable-{{$key}}" class=" dataTable table table-hover">
                                        <thead>
                                            <tr>
                                                @foreach ($d as $key2 => $s)
                                                @if($loop->first)
                                                <?php foreach ($s as $key3 => $value): ?>
                                                <th>{{$key3}}</th>

                                                <?php endforeach ?>
                                                @endif
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($d as $key2 => $s): ?>
                                            <tr>
                                                <?php foreach ($s as $key3 => $value): ?>
                                                <td>{{$value}}</td>

                                                <?php endforeach ?>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @endforeach
                        </div>


                    </div>
                    <div class="panel-footer">
                        @section('submit-buttons')
                        <button onclick="$('#voyager-loader').show();" type="submit"
                            class="btn btn-primary save">Submit</button>
                        @stop
                        @yield('submit-buttons')
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@stop

@push('javascript')
<script type="text/javascript">
    $('.dataTable').DataTable({responsive: true});
</script>
@endpush