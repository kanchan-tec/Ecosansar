@extends('layouts.vertical', ['title' => 'Add', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
@include('layouts.shared/page-title', ['sub_title' => 'Add', 'page_title' => 'Add'])




<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Date Range Picker</h4>
                <p class="text-muted mb-0">
                    A JavaScript component for choosing date ranges, dates and times.
                </p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Date Range -->
                        <div class="mb-3">
                            <label class="form-label">Date Range</label>
                            <input type="text" class="form-control date" id="singledaterange"
                                data-toggle="date-picker" data-cancel-class="btn-warning">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- Date Range Picker With Times -->
                        <div class="mb-3">
                            <label class="form-label">Date Range Picker With Times</label>
                            <input type="text" class="form-control date" id="daterangetime"
                                data-toggle="date-picker" data-time-picker="true"
                                data-locale="{'format': 'DD/MM hh:mm A'}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- Single Date Picker -->
                        <div>
                            <label class="form-label">Single Date Picker</label>
                            <input type="text" class="form-control date" id="birthdatepicker"
                                data-toggle="date-picker" data-single-date-picker="true">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- Predefined Date Ranges -->
                        <div>
                            <label class="form-label">Predefined Date Ranges</label>
                            <div id="reportrange" class="form-control" data-toggle="date-picker-range"
                                data-target-display="#selectedValue" data-cancel-class="btn-light">
                                <i class="ri-calendar-2-line"></i>&nbsp;
                                <span id="selectedValue"></span> <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@endsection

@section('script')
    @vite(['resources/js/pages/form-advanced.init.js'])
@endsection
