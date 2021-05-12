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
                <h3 class="newFont"> กราฟตัวชี้วัด ปีงบประมาณ </h3>

            </div>

            <div class="row">
                <div class="col">
                    <!-- <div id="chart-month">
                    </div> -->
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
</body>
<!-- chart-year -->