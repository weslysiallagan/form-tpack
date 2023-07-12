@extends('admin.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <!-- DONUT CHART -->
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Donut Chart</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  
<!-- Page specific script -->
@push('js')
<script>
    $(function () {
      /* ChartJS
       * -------
       * Here we will create a few charts using ChartJS
       */
  
      //-------------
      //- DONUT CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
      var data;
  
      $.ajax({
        url: '/komponen/getAllKomponen',
        type: 'get',
        async: false,
        success: function(response){
          data = response.komponen;
          // console.log(response.komponen)
        },
        error: function(err){
          console.log(err);
        }
      })
  
      var label = [];
      data.forEach(element => {
        label.push(element.nama_komponen);
      });
      
      var donutData        = {
        labels: label,
        datasets: [
          {
            data: [700,500,400,600,300,100,200],
            backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#000000'],
          }
        ]
      }
      var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })
    })
  </script>
  @endpush
    <!-- /.card -->
  
@endsection
