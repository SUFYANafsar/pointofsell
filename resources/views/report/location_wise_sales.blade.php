@extends('layouts.app')
@section('title', __('report.location_wise_sales'))

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>{{ __('report.location_wise_sales')}}</h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row no-print">
        <div class="col-md-12">
            @component('components.filters', ['title' => __('report.filters')])
              {!! Form::open(['url' => action([\App\Http\Controllers\ReportController::class, 'getLocationWiseSales']), 'method' => 'get', 'id' => 'location_wise_sales_form' ]) !!}
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('location_wise_sales_date_range',__('report.date_range') .  ':') !!}
                        {!! Form::text('date_range', null, ['placeholder' => __('lang_v1.select_a_date_range'), 'class' => 'form-control', 'id' => 'location_wise_sales_date_range', 'readonly']); !!}
                    </div>
                </div>
                <div class="col-sm-12">
                  <button type="submit" class="tw-dw-btn tw-dw-btn-primary tw-text-white pull-right">@lang('report.apply_filters')</button>
                </div> 
                {!! Form::close() !!}
            @endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            @component('components.widget', ['class' => 'box-primary'])
                @slot('title')
                    @lang('report.location_wise_sales') @show_tooltip(__('tooltip.location_wise_sales'))
                @endslot
                <div id="location_wise_sales_chart_container">
                    {!! $chart->container() !!}
                </div>
            @endcomponent
        </div>
    </div>
    <div class="row no-print">
        <div class="col-sm-12">
            <button type="button" class="tw-dw-btn tw-dw-btn-primary tw-text-white pull-right" 
            aria-label="Print" onclick="window.print();"
            ><i class="fa fa-print"></i> @lang( 'messages.print' )</button>
        </div>
    </div>

</section>
<!-- /.content -->

@endsection

@section('javascript')
    <script src="{{ asset('js/report.js?v=' . $asset_v) }}"></script>
    {!! $chart->script() !!}
    <script type="text/javascript">
        $(document).ready(function() {
            // Date range picker
            $('#location_wise_sales_date_range').daterangepicker(
                dateRangeSettings,
                function(start, end) {
                    $('#location_wise_sales_date_range').val(start.format(moment_date_format) + ' ~ ' + end.format(moment_date_format));
                    refreshChart();
                }
            );
            $('#location_wise_sales_date_range').on('cancel.daterangepicker', function(ev, picker) {
                $('#location_wise_sales_date_range').val('');
                refreshChart();
            });

            // Form submit handler
            $('#location_wise_sales_form').on('submit', function(e) {
                e.preventDefault();
                refreshChart();
            });

            // Store chart instance
            var locationWiseSalesChartInstance = null;
            
            // Function to find and store chart instance
            function findChartInstance() {
                if (typeof Highcharts !== 'undefined' && Highcharts.charts) {
                    // Find chart in our container
                    var container = $('#location_wise_sales_chart_container');
                    for (var i = 0; i < Highcharts.charts.length; i++) {
                        if (Highcharts.charts[i] && Highcharts.charts[i].renderTo) {
                            var chartElement = $(Highcharts.charts[i].renderTo);
                            if (container.find(chartElement).length > 0 || container.is(chartElement)) {
                                locationWiseSalesChartInstance = Highcharts.charts[i];
                                break;
                            }
                        }
                    }
                }
            }
            
            // Function to refresh chart via AJAX
            function refreshChart() {
                var date_range = $('#location_wise_sales_date_range').val();
                
                $.ajax({
                    url: "{{ action([\App\Http\Controllers\ReportController::class, 'getLocationWiseSalesAjax']) }}",
                    method: 'GET',
                    data: {
                        date_range: date_range
                    },
                    success: function(response) {
                        // Find chart instance if not already found
                        if (!locationWiseSalesChartInstance) {
                            findChartInstance();
                        }
                        
                        if (locationWiseSalesChartInstance) {
                            // Update xAxis categories (labels)
                            locationWiseSalesChartInstance.xAxis[0].setCategories(response.labels, false);
                            
                            // Update series data and type
                            locationWiseSalesChartInstance.series.forEach(function(series, index) {
                                if (response.series[index]) {
                                    // Update series type if needed
                                    if (response.series[index].type && series.type !== response.series[index].type) {
                                        series.update({
                                            type: response.series[index].type
                                        }, false);
                                    }
                                    // Update data
                                    series.setData(response.series[index].data, false);
                                }
                            });
                            
                            // Redraw chart
                            locationWiseSalesChartInstance.redraw();
                        } else {
                            // If chart not found, reload page
                            location.reload();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error refreshing chart:', error);
                    }
                });
            }
            
            // Find chart instance after a short delay to ensure it's rendered
            setTimeout(function() {
                findChartInstance();
            }, 2000);

            // Auto-refresh chart every 10 seconds
            var chartRefreshInterval = setInterval(function() {
                refreshChart();
            }, 10000);
        });
    </script>
@endsection

