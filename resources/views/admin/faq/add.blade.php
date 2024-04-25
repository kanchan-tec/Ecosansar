@extends('layouts.vertical', ['title' => 'FAQ Add', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/select2/dist/css/select2.min.css', 'node_modules/daterangepicker/daterangepicker.css', 'node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css', 'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css', 'node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css', 'node_modules/flatpickr/dist/flatpickr.min.css'])
@endsection

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Add', 'page_title' => 'FAQ Add'])

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">
                <form action="{{ route('Faq.save') }}" method="POST">
                    @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Date Range -->
                        <div class="mb-3">
                            <label for="simpleinput" class="form-label">Question</label>
                            <input type="text" id="question" name="question" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- Date Range Picker With Times -->
                        <div class="mb-3">
                            <label for="simpleinput" class="form-label">Answer</label>
                            <input type="text" id="answer" name="answer" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </div>
                </div>
            </form>


            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@endsection

@section('script')
    @vite(['resources/js/pages/form-advanced.init.js'])
@endsection
