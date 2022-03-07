@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('page_header')
<div class="container-fluid">
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> {{ $dataType->getTranslatedAttribute('display_name_plural') }}
    </h1>
    @can('add', app($dataType->model_name))
    <a href="{{ route('voyager.'.$dataType->slug.'.create') }}" class="btn btn-success btn-add-new">
        <i class="voyager-plus"></i> <span>{{ __('voyager::generic.add_new') }}</span>
    </a>
    @endcan
    @can('delete', app($dataType->model_name))
    @include('voyager::partials.bulk-delete')
    @endcan
    @can('edit', app($dataType->model_name))
    @if(!empty($dataType->order_column) && !empty($dataType->order_display_column))
    <a href="{{ route('voyager.'.$dataType->slug.'.order') }}" class="btn btn-primary btn-add-new">
        <i class="voyager-list"></i> <span>{{ __('voyager::bread.order') }}</span>
    </a>
    @endif
    @endcan
    @can('delete', app($dataType->model_name))
    @if($usesSoftDeletes)
    <input type="checkbox" @if ($showSoftDeleted) checked @endif id="show_soft_deletes" data-toggle="toggle"
        data-on="{{ __('voyager::bread.soft_deletes_off') }}" data-off="{{ __('voyager::bread.soft_deletes_on') }}">
    @endif
    @endcan
    @foreach($actions as $action)
    @if (method_exists($action, 'massAction'))
    @include('voyager::bread.partials.actions', ['action' => $action, 'data' => null])
    @endif
    @endforeach
    @include('voyager::multilingual.language-selector')
</div>
@stop

@section('content')

<div class="page-content browse container-fluid">
    @include('voyager::alerts')
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert" style="margin-bottom: 15px;">
        {{$error}}
    </div>
    @endforeach
    @if(session('error'))
    <div class="alert alert-danger" role="alert" style="margin-bottom: 15px;">
        {{session('error')}}
    </div>
    @endif
    @if(session('success'))
    <div class="alert alert-success" role="alert" style="margin-bottom: 15px;">
        {{session('success')}}
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-body">
                    @if ($isServerSide)
                    {{-- <form method="get" class="form-search">
                        <div id="search-input">
                            <div class="col-2">
                                <select id="search_key" name="key">
                                    @foreach($searchNames as $key => $name)
                                    <option value="{{ $key }}" @if($search->key == $key || (empty($search->key) && $key
                                        == $defaultSearchKey)) selected @endif>{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2">
                                <select id="filter" name="filter">
                                    <option value="contains" @if($search->filter == "contains") selected @endif>contains
                                    </option>
                                    <option value="equals" @if($search->filter == "equals") selected @endif>=</option>
                                </select>
                            </div>
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control"
                                    placeholder="{{ __('voyager::generic.search') }}" name="s"
                                    value="{{ $search->value }}">
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-lg" type="submit">
                                        <i class="voyager-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        @if (Request::has('sort_order') && Request::has('order_by'))
                        <input type="hidden" name="sort_order" value="{{ Request::get('sort_order') }}">
                        <input type="hidden" name="order_by" value="{{ Request::get('order_by') }}">
                        @endif
                    </form> --}}
                    @endif
                    <ul class="nav nav-pills" style="margin-bottom: 20px;">
                        <li class="nav-item {{($filterNotFound??true)?'active':''}}">
                            <a class="nav-link" aria-current="page" href="{{url('/transactions')}}">Semua</a>
                        </li>
                        <li class="nav-item {{request()->input('page_filter')=='selesai'?'active':''}}">
                            <a class="nav-link" href="{{url('/transactions')}}?page_filter=selesai">Selesai</a>
                        </li>
                        <li class="nav-item {{request()->input('page_filter')=='tidak_berhasil'?'active':''}}">
                            <a class="nav-link" href="{{url('/transactions')}}?page_filter=tidak_berhasil">Tidak
                                Berhasil</a>
                        </li>
                        <li class="nav-item {{request()->input('page_filter')=='berlangsung'?'active':''}}">
                            <a class="nav-link" href="{{url('/transactions')}}?page_filter=berlangsung">Berlangsung</a>
                        </li>

                    </ul>
                    {{-- <div class="table-responsive">
                        <table id="dataTable" class="table table-hover">
                            <thead>
                                <tr>
                                    @if($showCheckboxColumn)
                                    <th class="dt-not-orderable">
                                        <input type="checkbox" class="select_all">
                                    </th>
                                    @endif
                                    @foreach($dataType->browseRows as $row)
                                    <th>
                                        @if ($isServerSide && in_array($row->field, $sortableColumns))
                                        <a href="{{ $row->sortByUrl($orderBy, $sortOrder) }}">
                                            @endif
                                            {{ $row->getTranslatedAttribute('display_name') }}
                                            @if ($isServerSide)
                                            @if ($row->isCurrentSortField($orderBy))
                                            @if ($sortOrder == 'asc')
                                            <i class="voyager-angle-up pull-right"></i>
                                            @else
                                            <i class="voyager-angle-down pull-right"></i>
                                            @endif
                                            @endif
                                        </a>
                                        @endif
                                    </th>
                                    @endforeach
                                    <th class="actions text-right dt-not-orderable">{{ __('voyager::generic.actions') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dataTypeContent as $data)
                                <tr>
                                    @if($showCheckboxColumn)
                                    <td>
                                        <input type="checkbox" name="row_id" id="checkbox_{{ $data->getKey() }}"
                                            value="{{ $data->getKey() }}">
                                    </td>
                                    @endif
                                    @foreach($dataType->browseRows as $row)
                                    @php
                                    if ($data->{$row->field.'_browse'}) {
                                    $data->{$row->field} = $data->{$row->field.'_browse'};
                                    }
                                    @endphp
                                    <td>
                                        @if (isset($row->details->view))
                                        @include($row->details->view, ['row' => $row, 'dataType' => $dataType,
                                        'dataTypeContent' => $dataTypeContent, 'content' => $data->{$row->field},
                                        'action' => 'browse', 'view' => 'browse', 'options' => $row->details])
                                        @elseif($row->type == 'image')
                                        <img src="@if( !filter_var($data->{$row->field}, FILTER_VALIDATE_URL)){{ Voyager::image( $data->{$row->field} ) }}@else{{ $data->{$row->field} }}@endif"
                                            style="width:100px">
                                        @elseif($row->type == 'relationship')
                                        @include('voyager::formfields.relationship', ['view' => 'browse','options' =>
                                        $row->details])
                                        @elseif($row->type == 'select_multiple')
                                        @if(property_exists($row->details, 'relationship'))

                                        @foreach($data->{$row->field} as $item)
                                        {{ $item->{$row->field} }}
                                        @endforeach

                                        @elseif(property_exists($row->details, 'options'))
                                        @if (!empty(json_decode($data->{$row->field})))
                                        @foreach(json_decode($data->{$row->field}) as $item)
                                        @if (@$row->details->options->{$item})
                                        {{ $row->details->options->{$item} . (!$loop->last ? ', ' : '') }}
                                        @endif
                                        @endforeach
                                        @else
                                        {{ __('voyager::generic.none') }}
                                        @endif
                                        @endif

                                        @elseif($row->type == 'multiple_checkbox' && property_exists($row->details,
                                        'options'))
                                        @if (@count(json_decode($data->{$row->field})) > 0)
                                        @foreach(json_decode($data->{$row->field}) as $item)
                                        @if (@$row->details->options->{$item})
                                        {{ $row->details->options->{$item} . (!$loop->last ? ', ' : '') }}
                                        @endif
                                        @endforeach
                                        @else
                                        {{ __('voyager::generic.none') }}
                                        @endif

                                        @elseif(($row->type == 'select_dropdown' || $row->type == 'radio_btn') &&
                                        property_exists($row->details, 'options'))

                                        {!! $row->details->options->{$data->{$row->field}} ?? '' !!}

                                        @elseif($row->type == 'date' || $row->type == 'timestamp')
                                        @if ( property_exists($row->details, 'format') && !is_null($data->{$row->field})
                                        )
                                        {{
                                        \Carbon\Carbon::parse($data->{$row->field})->formatLocalized($row->details->format)
                                        }}
                                        @else
                                        {{ $data->{$row->field} }}
                                        @endif
                                        @elseif($row->type == 'checkbox')
                                        @if(property_exists($row->details, 'on') && property_exists($row->details,
                                        'off'))
                                        @if($data->{$row->field})
                                        <span class="label label-info">{{ $row->details->on }}</span>
                                        @else
                                        <span class="label label-primary">{{ $row->details->off }}</span>
                                        @endif
                                        @else
                                        {{ $data->{$row->field} }}
                                        @endif
                                        @elseif($row->type == 'color')
                                        <span class="badge badge-lg"
                                            style="background-color: {{ $data->{$row->field} }}">{{ $data->{$row->field}
                                            }}</span>
                                        @elseif($row->type == 'text')
                                        @include('voyager::multilingual.input-hidden-bread-browse')
                                        <div>{{ mb_strlen( $data->{$row->field} ) > 200 ?
                                            mb_substr($data->{$row->field}, 0, 200) . ' ...' : $data->{$row->field} }}
                                        </div>
                                        @elseif($row->type == 'text_area')
                                        @include('voyager::multilingual.input-hidden-bread-browse')
                                        <div>{{ mb_strlen( $data->{$row->field} ) > 200 ?
                                            mb_substr($data->{$row->field}, 0, 200) . ' ...' : $data->{$row->field} }}
                                        </div>
                                        @elseif($row->type == 'file' && !empty($data->{$row->field}) )
                                        @include('voyager::multilingual.input-hidden-bread-browse')
                                        @if(json_decode($data->{$row->field}) !== null)
                                        @foreach(json_decode($data->{$row->field}) as $file)
                                        <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}"
                                            target="_blank">
                                            {{ $file->original_name ?: '' }}
                                        </a>
                                        <br />
                                        @endforeach
                                        @else
                                        <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($data->{$row->field}) }}"
                                            target="_blank">
                                            Download
                                        </a>
                                        @endif
                                        @elseif($row->type == 'rich_text_box')
                                        @include('voyager::multilingual.input-hidden-bread-browse')
                                        <div>{{ mb_strlen( strip_tags($data->{$row->field}, '<b><i><u>') ) > 200 ?
                                                        mb_substr(strip_tags($data->{$row->field}, '<b><i><u>'), 0, 200)
                                                                    . ' ...' : strip_tags($data->{$row->field},
                                                                    '<b><i><u>') }}</div>
                                        @elseif($row->type == 'coordinates')
                                        @include('voyager::partials.coordinates-static-image')
                                        @elseif($row->type == 'multiple_images')
                                        @php $images = json_decode($data->{$row->field}); @endphp
                                        @if($images)
                                        @php $images = array_slice($images, 0, 3); @endphp
                                        @foreach($images as $image)
                                        <img src="@if( !filter_var($image, FILTER_VALIDATE_URL)){{ Voyager::image( $image ) }}@else{{ $image }}@endif"
                                            style="width:50px">
                                        @endforeach
                                        @endif
                                        @elseif($row->type == 'media_picker')
                                        @php
                                        if (is_array($data->{$row->field})) {
                                        $files = $data->{$row->field};
                                        } else {
                                        $files = json_decode($data->{$row->field});
                                        }
                                        @endphp
                                        @if ($files)
                                        @if (property_exists($row->details, 'show_as_images') &&
                                        $row->details->show_as_images)
                                        @foreach (array_slice($files, 0, 3) as $file)
                                        <img src="@if( !filter_var($file, FILTER_VALIDATE_URL)){{ Voyager::image( $file ) }}@else{{ $file }}@endif"
                                            style="width:50px">
                                        @endforeach
                                        @else
                                        <ul>
                                            @foreach (array_slice($files, 0, 3) as $file)
                                            <li>{{ $file }}</li>
                                            @endforeach
                                        </ul>
                                        @endif
                                        @if (count($files) > 3)
                                        {{ __('voyager::media.files_more', ['count' => (count($files) - 3)]) }}
                                        @endif
                                        @elseif (is_array($files) && count($files) == 0)
                                        {{ trans_choice('voyager::media.files', 0) }}
                                        @elseif ($data->{$row->field} != '')
                                        @if (property_exists($row->details, 'show_as_images') &&
                                        $row->details->show_as_images)
                                        <img src="@if( !filter_var($data->{$row->field}, FILTER_VALIDATE_URL)){{ Voyager::image( $data->{$row->field} ) }}@else{{ $data->{$row->field} }}@endif"
                                            style="width:50px">
                                        @else
                                        {{ $data->{$row->field} }}
                                        @endif
                                        @else
                                        {{ trans_choice('voyager::media.files', 0) }}
                                        @endif
                                        @else
                                        @include('voyager::multilingual.input-hidden-bread-browse')
                                        <span>{{ $data->{$row->field} }}</span>
                                        @endif
                                    </td>
                                    @endforeach
                                    <td class="no-sort no-click bread-actions">
                                        @foreach($actions as $action)
                                        @if (!method_exists($action, 'massAction'))
                                        @include('voyager::bread.partials.actions', ['action' => $action])
                                        @endif
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> --}}
                    <div class="container-fluid" id="webview" style="color:black;">
                        <div class="row">
                            @foreach($dataTypeContent as $data)
                            <div class="col-12 d-flex">
                                <div class="row">
                                    <div class="col-xs-2" style="display:inline-block">
                                        <img style="width: 100%;"
                                            src="{{url('/storage')}}/{{json_decode($data->transactionDetails->first()->product->images,true)[0]??''}}" />
                                    </div>
                                    <div class="col-xs-8" style="display: inline-block;vertical-align:top;">
                                        <h4 class="border border-danger border-2
                                    text-danger
                                    rounded-3
                                    px-2
                                    py-1" style="display:inline-block;">{{$data->status->name}}</h4>
                                        <span>#{{$data->uuid}}</span><br>
                                        <span>Customer : {{$data->customer_name}} /
                                            <a target="_blank"
                                                href="https://wa.me/{{'62'.substr($data->customer_phone,1)}}">
                                                {{$data->customer_phone}}
                                            </a>
                                        </span>
                                        <br>
                                        <span>Address : {{$data->shipping_address}}, {{$data->shipping_postal_code}},
                                            {{$data->city->name}}</span>
                                        <br>
                                        <span>
                                            Barang :
                                            @php
                                            $details = array();
                                            foreach($data->transactionDetails as $td){
                                            array_push($details, $td->product->name.'('.$td->qty.') x Rp.
                                            '.number_format($td->price,'0',',','.'));
                                            }
                                            @endphp
                                            {{implode(', ',$details)}}
                                        </span>
                                        <br>
                                        <span style="font-weight: bold">Total : </span>
                                        <span> Rp. {{number_format($data->grand_total,"0",',','.')}}</span>
                                    </div>
                                    <div class="col-xs-2">

                                        @foreach($actions as $action)
                                        @if (!method_exists($action, 'massAction'))
                                        @include('voyager::bread.partials.actions', ['action' => $action])
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    @if ($isServerSide)
                    <div class="pull-left">
                        <div role="status" class="show-res" aria-live="polite">{{ trans_choice(
                            'voyager::generic.showing_entries', $dataTypeContent->total(), [
                            'from' => $dataTypeContent->firstItem(),
                            'to' => $dataTypeContent->lastItem(),
                            'all' => $dataTypeContent->total()
                            ]) }}</div>
                    </div>
                    <div class="pull-right">
                        {{ $dataTypeContent->appends([
                        's' => $search->value,
                        'filter' => $search->filter,
                        'key' => $search->key,
                        'order_by' => $orderBy,
                        'sort_order' => $sortOrder,
                        'showSoftDeleted' => $showSoftDeleted,
                        ])->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Single delete modal --}}
<div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{
                    strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
            </div>
            <div class="modal-footer">
                <form action="#" id="delete_form" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger pull-right delete-confirm"
                        value="{{ __('voyager::generic.delete_confirm') }}">
                </form>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{
                    __('voyager::generic.cancel') }}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{{-- Modal Detail Transaksi --}}
<div class="modal fade" id="detailTransaksiModal" tabindex="-1" role="dialog"
    aria-labelledby="detailTransaksiModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="display: inline-block;font-size:20px;padding-bottom:0;" class="modal-title"
                    id="detailTransaksiModalLabel">Detail Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="border border-danger rounded row py-3 w-100" style="margin: 0 auto;">
                    <div class="col-xs-8">
                        <table>
                            <tbody>
                                <tr>
                                    <th scope="row">Nomor Invoice:</th>
                                    <td id="dt-uuid"></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="pt-2">Tanggal:</th>
                                    <td class="pt-2" id="dt-date-view"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-xs-4">
                        <span class="text-danger">
                            <p class="mb-2">Tujuan Pengiriman</p>
                        </span>
                        <h6 class="text-black mb-0" id="dt-customer-name"></h6>
                        <p class="mb-0" id="dt-customer-phone"></p>
                        <p class="mb-0" id="dt-customer-address">
                        </p>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table pt-2">
                        <thead>
                            <tr>
                                <th scope="col" class="py-2 text-center">Nama Produk</th>
                                <th scope="col" class="py-2 text-center">Jumlah</th>
                                <th scope="col" class="py-2 text-center">Berat</th>
                                <th scope="col" class="py-2 text-center">Harga</th>
                                <th scope="col" class="py-2 text-center">Sub total</th>
                            </tr>
                        </thead>
                        <tbody id="dt-transaction-detail">

                        </tbody>
                    </table>

                    <div class="d-flex justify-content-around mt-3">
                        <div class="text-right col-sm-9 col-xs-9 fw-bold">
                            <span>
                                <p>Subtotal</p>
                            </span>
                            <span>
                                <p>Biaya Pengiriman</p>
                            </span>
                            <p>Total</p>
                            <span>
                                <p>Jenis Pengiriman</p>
                            </span>
                        </div>
                        <div class="text-right">
                            <span>
                                <p>
                                    Rp.
                                    <span style="margin-right: 8px;" id="dt-subtotal"></span>
                                </p>
                            </span>
                            <span>
                                <p>
                                    Rp.
                                    <span style="margin-right: 8px;" id="dt-shippingcost"></span>
                                </p>
                            </span>
                            <p style="font-weight: bold;">
                                Rp.
                                <span style="margin-right: 8px;" id="dt-grandtotal"></span>
                            </p>
                            <p><span id="dt-shipping"></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{-- /.modal detail transaksi --}}
{{-- modal shipping --}}
<div class="modal" id="shippingModal" tabindex="-1" role="dialog">
    <form method="post" action="{{url('/transactions')}}/shipping_no">
        {{ csrf_field() }}

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="display: inline-block;font-size:20px;padding-bottom:0;" class="modal-title"
                        id="shippingModalLabel">Shipping</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="ms-key" name="_key">
                    <input type="hidden" id="ms-uuid" name="uuid">
                    <label for="ms-shipping-no">Input Nomor Resi</label>
                    <input type="text" class="form-control" name="shipping_no" id="ms-shipping-no">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </form>

</div>

<div class="modal fade" id="finishModal" tabindex="-1" role="dialog" aria-labelledby="finishModalLabel"
    aria-hidden="true">
    <form id="formFinishTransaction" method="post" action="{{url('/transactions')}}/finish_transaction">
        {{ csrf_field() }}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Selesaikan Transaksi
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menyelesaikan transaksi ini?
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="mf-key" name="_key">
                    <input type="hidden" id="mf-uuid" name="uuid">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="btnFinishDisabled" class="btn btn-success btn-ok">Ya</button>
                </div>
            </div>
        </div>
    </form>
</div>
{{-- /.modal shipping --}}
@stop

@section('css')
@if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
<link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">
@endif
@stop

@section('javascript')
<script>
    $("#formFinishTransaction").submit(function(e){
        $(this).find("#btnFinishDisabled").prop('disabled', true);
    })
    var btnFinishDisabled = false;
    function setBtnFinishDisabled(value){
        btnFinishDisabled = value;
        $("#btnFinishDisabled").prop("disabled",btnFinishDisabled)
    }
</script>


<!-- DataTables -->
@if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
<script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
@endif
<script>
    $(document).ready(function () {
            @if (!$dataType->server_side)
                var table = $('#dataTable').DataTable({!! json_encode(
                    array_merge([
                        "order" => $orderColumn,
                        "language" => __('voyager::datatable'),
                        "columnDefs" => [
                            ['targets' => 'dt-not-orderable', 'searchable' =>  false, 'orderable' => false],
                        ],
                    ],
                    config('voyager.dashboard.data_tables', []))
                , true) !!});
            @else
                $('#search-input select').select2({
                    minimumResultsForSearch: Infinity
                });
            @endif

            @if ($isModelTranslatable)
                $('.side-body').multilingual();
                //Reinitialise the multilingual features when they change tab
                $('#dataTable').on('draw.dt', function(){
                    $('.side-body').data('multilingual').init();
                })
            @endif
            $('.select_all').on('click', function(e) {
                $('input[name="row_id"]').prop('checked', $(this).prop('checked')).trigger('change');
            });
        });


        var deleteFormAction;
        $('td').on('click', '.delete', function (e) {
            $('#delete_form')[0].action = '{{ route('voyager.'.$dataType->slug.'.destroy', '__id') }}'.replace('__id', $(this).data('id'));
            $('#delete_modal').modal('show');
        });

        @if($usesSoftDeletes)
            @php
                $params = [
                    's' => $search->value,
                    'filter' => $search->filter,
                    'key' => $search->key,
                    'order_by' => $orderBy,
                    'sort_order' => $sortOrder,
                ];
            @endphp
            $(function() {
                $('#show_soft_deletes').change(function() {
                    if ($(this).prop('checked')) {
                        $('#dataTable').before('<a id="redir" href="{{ (route('voyager.'.$dataType->slug.'.index', array_merge($params, ['showSoftDeleted' => 1]), true)) }}"></a>');
                    }else{
                        $('#dataTable').before('<a id="redir" href="{{ (route('voyager.'.$dataType->slug.'.index', array_merge($params, ['showSoftDeleted' => 0]), true)) }}"></a>');
                    }

                    $('#redir')[0].click();
                })
            })
        @endif
        $('input[name="row_id"]').on('change', function () {
            var ids = [];
            $('input[name="row_id"]').each(function() {
                if ($(this).is(':checked')) {
                    ids.push($(this).val());
                }
            });
            $('.selected_ids').val(ids);
        });
</script>
@stop

@push('javascript')

<style>
    .nav-pills .nav-item a {
        border-radius: 12px;
    }

    .nav-pills .active a {
        background-color: #841C26 !important;
    }

    .border {
        border: 1px solid #dee2e6 !important
    }

    .border-0 {
        border: 0 !important
    }

    .border-top {
        border-top: 1px solid #dee2e6 !important
    }

    .border-top-0 {
        border-top: 0 !important
    }

    .border-end {
        border-right: 1px solid #dee2e6 !important
    }

    .border-end-0 {
        border-right: 0 !important
    }

    .border-bottom {
        border-bottom: 1px solid #dee2e6 !important
    }

    .border-bottom-0 {
        border-bottom: 0 !important
    }

    .border-start {
        border-left: 1px solid #dee2e6 !important
    }

    .border-start-0 {
        border-left: 0 !important
    }

    .border-primary {
        border-color: #0d6efd !important
    }

    .border-secondary {
        border-color: #6c757d !important
    }

    .border-success {
        border-color: #198754 !important
    }

    .border-info {
        border-color: #0dcaf0 !important
    }

    .border-warning {
        border-color: #ffc107 !important
    }

    .border-danger {
        border-color: #dc3545 !important
    }

    .border-light {
        border-color: #f8f9fa !important
    }

    .border-dark {
        border-color: #212529 !important
    }

    .border-white {
        border-color: #fff !important
    }

    .border-1 {
        border-width: 1px !important
    }

    .border-2 {
        border-width: 2px !important
    }

    .border-3 {
        border-width: 3px !important
    }

    .border-4 {
        border-width: 4px !important
    }

    .border-5 {
        border-width: 5px !important
    }

    .w-25 {
        width: 25% !important
    }

    .w-50 {
        width: 50% !important
    }

    .w-75 {
        width: 75% !important
    }

    .w-100 {
        width: 100% !important
    }

    .w-auto {
        width: auto !important
    }

    .mw-100 {
        max-width: 100% !important
    }

    .rounded-0 {
        border-radius: 0 !important
    }

    .rounded-1 {
        border-radius: .2rem !important
    }

    .rounded-2 {
        border-radius: .25rem !important
    }

    .rounded-3 {
        border-radius: .3rem !important
    }

    .rounded-circle {
        border-radius: 50% !important
    }

    .rounded-pill {
        border-radius: 50rem !important
    }

    .rounded-top {
        border-top-left-radius: .25rem !important;
        border-top-right-radius: .25rem !important
    }

    .rounded-end {
        border-top-right-radius: .25rem !important;
        border-bottom-right-radius: .25rem !important
    }

    .rounded-bottom {
        border-bottom-right-radius: .25rem !important;
        border-bottom-left-radius: .25rem !important
    }

    .rounded-start {
        border-bottom-left-radius: .25rem !important;
        border-top-left-radius: .25rem !important
    }

    .px-0 {
        padding-right: 0 !important;
        padding-left: 0 !important
    }

    .px-1 {
        padding-right: .25rem !important;
        padding-left: .25rem !important
    }

    .px-2 {
        padding-right: .5rem !important;
        padding-left: .5rem !important
    }

    .px-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important
    }

    .px-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important
    }

    .px-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important
    }

    .py-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .py-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .py-2 {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important
    }

    .py-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important
    }

    .py-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important
    }

    .py-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important
    }
</style>
<script>
    //modal
    $('#detailTransaksiModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var invoice_no = button.data('invoice-no') // Extract info from data-* attributes
        var date_view = button.data('date-view')
        var customer_name = button.data('customer-name')
        var customer_phone = button.data('customer-phone')
        var address = button.data('address')
        var subtotal = button.data('subtotal')
        var shipping_cost = button.data('shipping-cost')
        var grand_total = button.data('grand-total')
        var details = button.data('details');
        var shipping = button.data('shipping');
        details = details.replaceAll("'",'"');
        var json_details = JSON.parse(details);
        var table_detail = "";
        for (var i = 0; i < json_details.length; i++){
            var detail_product_name = json_details[i].name;
            var detail_product_qty = json_details[i].qty;
            var detail_product_weight = json_details[i].weight;
            var detail_product_price = json_details[i].price;
            var detail_product_total = detail_product_price*detail_product_qty;
            table_detail+="<tr>";

            table_detail+="<td class='py-2'>";
            table_detail+=detail_product_name;
            table_detail+="</td>";

            table_detail+="<td class='py-2'>";
            table_detail+=detail_product_qty;
            table_detail+="</td>";

            table_detail+="<td class='py-2'>";
            table_detail+=detail_product_weight+' gr';
            table_detail+="</td>";

            table_detail+="<td class='py-2' style='text-align:right;'>";
            table_detail+=numberWithCommas(detail_product_price);
            table_detail+="</td>";

            table_detail+="<td class='py-2' style='text-align:right;'>";
            table_detail+=numberWithCommas(detail_product_total);
            table_detail+="</td>";

            table_detail+="</tr>";

        }   


        var modal = $(this);
        $('#dt-uuid').html(invoice_no);
        $('#dt-date-view').html(date_view);
        $('#dt-customer-name').html(customer_name);
        $('#dt-customer-phone').html(customer_phone);
        $('#dt-customer-address').html(address);
        $('#dt-subtotal').html(subtotal);
        $('#dt-grandtotal').html(grand_total);
        $('#dt-shippingcost').html(shipping_cost);
        $('#dt-grandtotal').html(grand_total);
        $('#dt-transaction-detail').html(table_detail);
        $('#dt-shipping').html(shipping);
    });
    $('#shippingModal').on('show.bs.modal',function(event){
        var button = $(event.relatedTarget) // Button that triggered the modal
        var invoice_no = button.data('invoice-no') // Extract info from data-* attributes
        var key = button.data('key') // Extract info from data-* attributes
        $('#ms-uuid').val(invoice_no);
        $('#ms-key').val(key);
    });
    $('#finishModal').on('show.bs.modal',function(event){
        setBtnFinishDisabled(false);
        var button = $(event.relatedTarget) // Button that triggered the modal
        var invoice_no = button.data('invoice-no') // Extract info from data-* attributes
        var key = button.data('key') // Extract info from data-* attributes
        $('#mf-uuid').val(invoice_no);
        $('#mf-key').val(key);
    });

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}
</script>
@endpush