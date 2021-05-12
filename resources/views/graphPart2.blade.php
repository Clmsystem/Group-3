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


<body>
    <!-- ------------------------------------------  include  --------------------------------------------->

    @include('partials.navbar')
    @include('partials.sidebar')
    <!-- ------------------------------------------  include  --------------------------------------------->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="newFont"> กราฟตัวชี้วัด <?= $name ?> ปีงบประมาณ <?= $year ?> </h3>

            </div>

            <div class="row">
                <div class="col">
                    <div id="chart-month">
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
</body>
<!-- chart-year -->
<script>
$('select').selectpicker();
var optionsYear = {
    series: [{
            name: 'Q1',
            data: [30, 40, 50]
        },
        {
            name: 'Q2',
            data: [54, 85, 40]
        },
        {
            name: 'Q3',
            data: [43, 63, 50]
        }
    ],
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
        categories: ['2562', '2563', '2564'],
    },
    // yaxis: {
    //   title: {
    //     text: '$ (thousands)'
    //   }
    // },
    fill: {
        opacity: 1
    },
    tooltip: {
        y: {
            formatter: function(val) {
                return val
            }
        }
    }
};
var chart = new ApexCharts(document.querySelector("#chart-year"), optionsYear);
chart.render();
</script>
<!-- chart-quarter -->
<script>
var optionsQuarter = {
    series: [{
        name: 'Net Profit',
        data: [30, 55, 67]
    }, ],
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
        categories: ['Q1', 'Q2', 'Q3'],
    },
    fill: {
        opacity: 1
    },
};
var chartQuarter = new ApexCharts(document.querySelector("#chart-quarter"), optionsQuarter);
chartQuarter.render();
</script>
<!-- chart-month -->
<script>
var optionsMonth = {
    series: [{
        name: 'คะแนนเต็ม',
        data: [<?= (int)$m0 ?>, <?= (int)$m1 ?>, <?= (int)$m2 ?>, <?= (int)$m3 ?>, <?= (int)$m4 ?>,
            <?= (int)$m5 ?>, <?= (int)$m6 ?>, <?= (int)$m7 ?>, <?= (int)$m8 ?>, <?= (int)$m9 ?>,
            <?= (int)$m10 ?>, <?= (int)$m11 ?>
        ]
    }, {
        name: 'คะแนนที่ได้',
        data: [<?= (float)$s0 ?>, <?= (float)$s1 ?>, <?= (float)$s2 ?>, <?= (float)$s3 ?>,
            <?= (float)$s4 ?>,
            <?= (float)$s5 ?>, <?= (float)$s6 ?>, <?= (float)$s7 ?>, <?= (float)$s8 ?>,
            <?= (float)$s9 ?>,
            <?= (float)$s10 ?>, <?= (float)$s11 ?>
        ]
    }],
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
        categories: ['Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
    },
    fill: {
        opacity: 1
    },
};
var chartQuarter = new ApexCharts(document.querySelector("#chart-month"), optionsMonth);
chartQuarter.render();
</script>