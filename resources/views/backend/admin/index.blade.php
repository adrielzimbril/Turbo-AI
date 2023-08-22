@extends('backend.layout.content')
@section('title', 'Dashboard')
@section('vendor-style')
  <link rel="stylesheet" href="{{asset('backend/libs/apex-charts/apex-charts.css')}}" />
@endsection

@section('content')
  <div class="row my-4">
    <div class="col-lg-3 col-sm-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start">
            <div class="badge rounded bg-label-info p-2 me-3 rounded">
              {!! get_svg_icon('wallet-alt', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
            </div>
            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
              <div class="me-2">
                <h6 class="mb-0">
                  ${{ number_format($total_sales) }}</h6>
                <small class="text-muted">{{__('Total sales')}}</small>
              </div>

              {!! percentageChange($sales_previous_week, $sales_this_week) !!}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start">
            <div class="badge rounded bg-label-warning p-2 me-3 rounded">
              {!! get_svg_icon('notebook-alt', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
            </div>
            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
              <div class="me-2">
                <h6 class="mb-0">{{$words_this_week}}</h6>
                <small class="text-muted">{{__('Words Generated')}}</small>
              </div>

              {!! percentageChange($words_previous_week, $words_this_week) !!}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start">
            <div class="badge rounded bg-label-danger p-2 me-3 rounded">
              {!! get_svg_icon('gallery-wide', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
            </div>
            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
              <div class="me-2">
                <h6 class="mb-0">
                  {{$images_this_week}}</h6>
                <small class="text-muted">{{__('Images Generated')}}</small>
              </div>

              {!! percentageChange($images_previous_week, $images_this_week) !!}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start">
            <div class="badge rounded bg-label-primary p-2 me-3 rounded">
              {!! get_svg_icon('user-group-alt', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
            </div>
            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
              <div class="me-2">
                <h6 class="mb-0">
                  {{$users_this_week}}</h6>
                <small class="text-muted">{{__('New users')}} </small>
              </div>

              {!! percentageChange($images_previous_week, $images_this_week) !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex row-cols-1 row-cols-xl-2 gap-3 mb-4">
    <div class="col">
      <h5 class="mb-0">{{__('Revenue')}}</h5>
      <div class="card">
        <div class="card-body p-3">
          <div id="chart-daily-sales"></div>
        </div>
      </div>
    </div>
    <div class="col">
      <h5 class="mb-0">{{__('Generated Content')}}</h5>
      <div class="card">
        <div class="card-body p-3">
          <div id="chart-daily-usages"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex row-cols-1 my-4">
    <div class="col">
      <h5 class="mb-0">{{__('Activity')}}</h5>
      <div class="card">
        <div class="card-body pb-0">
          <ul class="timeline ms-1 mb-0">
            @foreach($activity as $notif)
              <li class="timeline-item timeline-item-transparent ps-4">
                @php
                  $color = 'secondary';
                if ($notif->activity_type == 'Subscribed') {
                  $color = 'success';
                } elseif ($notif->activity_type == 'Cancelled') {
                  $color = 'danger';
                } elseif ($notif->activity_type == ('Sent')) {
                  $color = 'info';
                } elseif ($notif->activity_type == ('Updated')) {
                  $color = 'primary';
                }
                @endphp
                <span class="timeline-point timeline-point-{{$color}}"></span>
                <div class="timeline-event">
                  <div class="timeline-header">
                    <h6 class="mb-0 fw-normal">{{$notif->activity_title}}</h6>
                    <small class="text-muted">{{$notif->created_at->diffForHumans()}}</small>
                  </div>
                  @if( isset( $notif->activity_title ))
                    <p class="mb-2 fw-semibold">
                      {{$notif->activity_type}} {{__('by')}} {{$notif->user ? $notif->user->fullName() : '' }}
                    </p>
                  @endif
                </div>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex row-cols-1 my-4">
    <div class="col">
      <h5 class="card-title m-0 me-2">{{__('Latest Transactions')}}</h5>
      <div class="card">
        <div class="table-responsive">
          <table class="table table-borderless">
            <thead class="border-bottom">
            <tr>
              <th>{{__('Method')}}</th>
              <th>{{__('Info')}}</th>
              <th>{{__('Plan')}}</th>
              <th>{{__('Words')}}</th>
              <th>{{__('Images')}}</th>
              <th>{{__('Status')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
              <tr>
                <td>
                  <div class="d-flex justify-content-start align-items-center">
                    <div class="me-3">
                      <img
                        src="{{asset($order->payment_type == 'Credit, Debit Card' ? 'media/img/icons/payments/stripe.svg' :  'media/img/icons/payments/paypal.svg')}}"
                        alt="{{$order->payment_type}}"
                        height="30">
                    </div>
                    <div class="d-flex flex-column">
                      <p class="mb-0 fw-semibold">{{$order->price}} {{currency()->symbol}}</p>
                      <small class="text-muted">{{$order->payment_type}}</small>
                    </div>
                  </div>
                </td>
                <td>
                  {{ucwords($order->type)}}
                </td>
                <td>
                  {{ucwords(@$order->plan->name ?? 'Ended Plan')}}
                </td>
                <td>
                  {{(@$order->plan->total_words == '-1' ? 'Unlimited' : @$order->plan->words) ?? '-'}}
                </td>
                <td>
                  {{(@$order->plan->total_images == '-1' ? 'Unlimited' : @$order->plan->total_images) ?? '-'}}
                </td>
                <td>
                  <span
                    class="badge bg-label-{{$order->status == 'Success' ? 'success' : 'danger'}}">{{$order->status}}</span>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('page-script')
  <script src="{{asset('backend/libs/apex-charts/apexcharts.js')}}?v{{getSetting('script_version')}}-1807200231247"></script>
  <script>
    (() => {
      "use strict";

      let dailySalesChartOptions = {
        series: [{
          name: "Sales",
          data: [
              @foreach(json_decode($daily_sales) as $sales)
            [{{strtotime($sales->days) * 1000}}, {{$sales->sums}}],
            @endforeach
          ]
        }],
        chart: {
          id: "area-datetime",
          height: 250,
          parentHeightOffset: 0,
          type: "area",
          zoom: {
            enabled: false
          },
          toolbar: {
            show: false
          }
        },
        colors: ["#165df5", "#165df5"],
        grid: {
          borderColor: "#dbdade",
          xaxis: {
            lines: {
              show: true
            }
          }
        },
        dataLabels: {
          enabled: false
        },
        legend: {
          show: true,
          position: "top",
          horizontalAlign: "start"
        },
        stroke: {
          show: false,
          curve: "straight"
        },
        fill: {
          opacity: 1,
          type: "solid"
        },
        xaxis: {
          type: "datetime",
          labels: {
            style: {
              fontSize: "12px"
            }
          },
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          }
        },
        yaxis: {
          labels: {
            style: {
              fontSize: "12px"
            }
          },
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          }
        },
        tooltip: {
          x: {
            format: "dd MMM yyyy"
          }
        }
      };

      let chart = new ApexCharts(document.querySelector("#chart-daily-sales"), dailySalesChartOptions);
      chart.render();

      const dailyUsageChartOptions = {
        colors: ["#165df5", "#9f35cb"],
        chart: {
          height: 250,
          type: "bar",
          stacked: true,
          parentHeightOffset: 0,
          toolbar: {
            show: false
          }
        },
        stroke: {
          show: true,
          colors: ["transparent"]
        },
        plotOptions: {
          bar: {
            columnWidth: "18px",
            colors: {
              backgroundBarColors: ["#9f35cb29"],
              backgroundBarRadius: 4
            }
          }
        },
        grid: {
          borderColor: "#dbdade",
          xaxis: {
            lines: {
              show: true
            }
          }
        },
        series: [{
          name: "Words",
          data: [@foreach(json_decode($daily_usages) as $usage)'{{(int)$usage->sumsWord}}',@endforeach]
        }, {
          name: "Images",
          data: [@foreach(json_decode($daily_usages) as $usage) '{{(int)$usage->sumsImage}}',@endforeach]
        }],
        xaxis: {
          categories: [@foreach(json_decode($daily_usages) as $usage) '{{$usage->days}}',@endforeach],
          labels: {
            style: {
              fontSize: "12px"
            }
          },
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          }
        },
        yaxis: {
          labels: {
            style: {
              fontSize: "12px"
            }
          },
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          }
        },
        dataLabels: {
          enabled: false
        },
        legend: {
          show: true,
          position: "top",
          horizontalAlign: "start"
        },
        fill: {
          opacity: 1
        }
      };

      chart = new ApexCharts(document.querySelector("#chart-daily-usages"), dailyUsageChartOptions);
      chart.render();

    })();
  </script>

@endsection
