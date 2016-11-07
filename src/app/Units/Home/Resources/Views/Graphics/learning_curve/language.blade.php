@extends('core::template.layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-graphic">
                <div class="content">
                    <div id="lc-language" class="ct-chart"></div>
                    <div class="footer">
                        <hr>
                        <div class="stats">
                            <i class="ti-star"></i> Source: GitHub and Stackoverflow
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function () {
            Highcharts.chart('lc-language', {
                colors: ["#7cb5ec", "#f7a35c", "#90ee7e", "#7798bf", "#aaeeee", "#a5aad9", "#2b908f", "#55bf3b", "#df5353", "#7798bf", "#aaeeee"],
                chart: {
                    backgroundColor: null,
                    type: 'column'
                },
                title: {
                    text: 'Learning Curve - {{ $language->language['name'] }}',
                    style: {
                        fontSize: '16px',
                        fontWeight: 'bold',
                        textTransform: 'uppercase'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:11px; color: {point.color}">{point.key}</span><br>',
                    pointFormatter: function () {
                        return Highcharts.numberFormat(this.y, 0, '', '.');
                    },
                    borderWidth: 0,
                    backgroundColor: 'rgba(255, 255, 255, 0.8)',
                    shadow: false
                },
                legend: {
                    itemStyle: {
                        fontWeight: 'bold',
                        fontSize: '13px'
                    },
                    enabled: false
                },
                xAxis: {
                    gridLineWidth: 1,
                    labels: {
                        rotation: -45,
                        style: {
                            fontSize: '12px'
                        }
                    },
                    categories: []
                },
                yAxis: {
                    minorTickInterval: 'auto',
                    title: {
                        style: {
                            textTransform: 'uppercase'
                        },
                        text: 'Total of stars'
                    },
                    labels: {
                        style: {
                            fontSize: '12px'
                        }
                    }
                },
                plotOptions: {
                    candlestick: {
                        lineColor: '#404048'
                    },
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            formatter: function () {
                                return Highcharts.numberFormat(this.y, 0, '', '.');
                            }
                        }
                    }
                },
                credits: {
                    enabled: false
                },

                series: [{
                    name: 'Stars',
                    colorByPoint: true,
                    data: []
                }]
            });
        });
    </script>
@endsection