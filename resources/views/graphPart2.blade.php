@include('header.menu')

  <style>
        @import url('https://fonts.googleapis.com/css2?family=Mitr&display=swap');
        /* adjust font this page */
        .newFont {
            font-family: 'Mitr', sans-serif;
        }
        .newFonts {
            font-family: 'Mitr', sans-serif;
            font-size: 50px !important;
        }
        .dropdown .dropdown-menu .dropdown-item {
            font-size: 0.8rem;
            padding: 0;
        }
        /* adjust btn position */
        .button-position {
            float: right;
            margin: -8px;
        }
        td.break {
            word-wrap: break-word;
            /* word-break: break-all; */
            white-space: normal;
        }
        /* adjust btn size */
        .btns {
            padding: 0.9rem 2em;
            font-size: 0.875rem;
        }
    </style>

</head>
<body>
    <!-- ------------------------------------------  include  --------------------------------------------->

    @include('partials.navbar')
    @include('partials.sidebar')
    <!-- ------------------------------------------  include  --------------------------------------------->
    
    <div class="main-panel">
      <div class="content-wrapper">
          <div class="page-header">
                <h3 class="newFont">ส่วนที่ 2 กราฟตัวชี้วัดตามเกณฑ์การประเมินหน่วยงาน (9 ข้อ) จาก ทมอ.</h3>
          </div>
          
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  @foreach($showindicator as $i => $value)
                  <div class="page-header">
                    <h4 class="newFont"> {{$value->indicator_name}}</h4>
                    <h4 class="newFont"> ผู้รับผิดชอบ  : {{$value->name_employee}}</h4>
                  </div>
                  @endforeach 
                  <div class="row">
                    <div class="col">
                      <div id="chart-month">
                      </div>
                    </div>
                  </div>
                </div>
                
          </div>
          
      </div>
      
    </div>
</body>
<!-- chart-year -->


<!-- chart-quarter -->
<!-- <script>
    var optionsQuarter = {
          series: [{
          name: 'Net Profit',
          data: [30, 55, 67]
        },],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Q1'],
        },
        fill: {
          opacity: 1
        },
    };
        var chartQuarter = new ApexCharts(document.querySelector("#chart-quarter"), optionsQuarter);
        chartQuarter.render();
</script> -->
<!-- chart-month -->
<script>
    var optionsMonth = {
          series: [{
          name: 'คะแนนที่ได้',
          data: [1, 1, 0.5, 0.75, 1, 1, 1, 1, 0.9,0.25,1,1]
        },],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Oct','Nov','Dec','Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        },
        fill: {
          opacity: 1
        },
    };
        var chartQuarter = new ApexCharts(document.querySelector("#chart-month"), optionsMonth);
        chartQuarter.render();
</script>
