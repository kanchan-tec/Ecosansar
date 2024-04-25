@extends('layouts.vertical', ['title' => 'FAQ List', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite([
        'node_modules/datatables.net-bs5/css/dataTables.bootstrap5.min.css',
        'node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css',
        'node_modules/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css',
        'node_modules/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css',
        'node_modules/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css',
        'node_modules/datatables.net-select-bs5/css/select.bootstrap5.min.css',
    ])
@endsection

@section('content')
@include('layouts.shared/page-title',['page_title' => 'FAQ List','sub_title' => 'List'])

<div class="row">
    <div class="col-12">
        <div class="card">
            {{--  <div class="card-header">

            </div>  --}}
            <div class="card-body">
                <div class="mt-3">
                    <a class="" href="{{ route('Faq.add') }}">
                    {{--  <button class="btn btn-primary btn-block waves-effect waves-light" id="login" type="submit">{{ __('Login') }}</button>  --}}
                    <button class="btn btn-primary float-end" type="submit">Add</button>
                </a>
                </div>
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th><strong>Sr. No</strong></th>
                            <th><strong>Question</strong></th>
                            <th><strong>Answer</strong></th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach ($result as $dat)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $dat->question }}</td>
                                <td>{{ $dat->answer }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div> <!-- end row-->

@endsection

@section('script')
@vite(['resources/js/pages/datatable.init.js'])

@endsection
