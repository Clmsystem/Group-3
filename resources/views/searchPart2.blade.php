@include('header.menu')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Mitr&display=swap');

    /* adjust font this page */
    .newFont {
        font-family: 'Mitr', sans-serif;
    }

    /* adjust btn position */
    .button-position {
        float: right;
        margin: -8px;
    }

    /* adjust btn size */
    .btns {
        padding: 0.9rem 2em;
        font-size: 0.875rem;
    }

    /* adjust text position */
    td {
        text-align: center;
    }

    .tdleft {
        text-align: left;
    }

    th {
        text-align: center;
    }

    td.break {
        word-wrap: break-word;
        word-break: break-all;
        white-space: normal;
    }

    th.break {
        word-wrap: break-word;
        word-break: break-all;
        white-space: normal;
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
                <h3 class="newFont"> ส่วนที่ 2 ตัวชี้วัดตามเกณฑ์การประเมินหน่วยงาน (9 ข้อ) จาก ทมอ. </h3>
            </div>

            <!-- ------------------------------------------  ค้นหาตัวชี้วัด Start-  --------------------------------------------->

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="newFont">ค้นหาข้อมูล</h3><br>
                        <hr><br>
                        <form class="forms-sample" action="{{route('search')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="newFont">ปี</label>
                                    <select class="form-control" id="year" name="year">
                                        <optgroup class="newFont">
                                            <!-- <option>ทุกปี</option> -->
                                            <option value="1" {{ $year == 1 ? 'selected' : '' }}>2562</option>
                                            <option value="2" {{ $year == 2 ? 'selected' : '' }}>2563</option>
                                            <option value="3" {{ $year == 3 ? 'selected' : '' }}>2564</option>
                                            <option value="4" {{ $year == 4 ? 'selected' : '' }}>2565</option>
                                            <option {{ $year == 5 ? 'selected' : '' }}>2566</option>
                                            <option {{ $year == 6 ? 'selected' : '' }}>2567</option>
                                            <option {{ $year == 7 ? 'selected' : '' }}>2568</option>
                                            <option {{ $year == 8 ? 'selected' : '' }}>2569</option>
                                            <option {{ $year == 9 ? 'selected' : '' }}>2570</option>
                                            <option {{ $year == 10 ? 'selected' : '' }}>2571</option>
                                            <option {{ $year == 11 ? 'selected' : '' }}>2572</option>
                                            <option {{ $year == 12 ? 'selected' : '' }}>2573</option>
                                        </optgroup>
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <label class="newFont">เดือน</label>
                                    <select class="form-control" id="month" name="month">
                                        <optgroup class="newFont">
                                            <!-- <option>ทุกเดือน</option> -->
                                            
                                            <option value="1" {{ $month == 1 ? 'selected' : '' }}>มกราคม</option>
                                            <option value="2" {{ $month == 2 ? 'selected' : '' }}>กุมภาพันธ์</option>
                                            <option value="3" {{ $month == 3 ? 'selected' : '' }}>มีนาคม</option>
                                            <option value="4" {{ $month == 4 ? 'selected' : '' }}>เมษายน</option>
                                            <option value="5" {{ $month == 5 ? 'selected' : '' }}>พฤษภาคม</option>
                                            <option value="6" {{ $month == 6 ? 'selected' : '' }}>มิถุนายน</option>
                                            <option value="7" {{ $month == 7 ? 'selected' : '' }}>กรกฎาคม</option>
                                            <option value="8" {{ $month == 8 ? 'selected' : '' }}>สิงหาคม</option>
                                            <option value="9" {{ $month == 9 ? 'selected' : '' }}>กันยายน</option>
                                            <option value="10" {{ $month == 10 ? 'selected' : '' }}>ตุลาคม</option>
                                            <option value="11" {{ $month == 11 ? 'selected' : '' }}>พฤศจิกายน</option>
                                            <option value="12" {{ $month == 12 ? 'selected' : '' }}>ธันวาคม</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="button-position">
                                        <button type="submit" class="btn btn-inverse-primary btns ">ค้นหา</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------  ค้นหาตัวชี้วัด end-  --------------------------------------------->
            <!-- ------------------------------------------  แสดงตัวชี้วัด end-  --------------------------------------------->

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group col-md-12">

                        </div>
                        <div class="form-group col-md-12">
                            <h3 class="newFont">ตัวชี้วัดปัจจุบัน</h3><br>

                            <div class="button-position">
                                <button type="button" class="btn btn-inverse-primary btns2 ">ดาวน์โหลด</button>
                            </div>
                            <br>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12"></div>
                            <div class="col-md-12">
                                <table class="table table-bordered newFont">
                                    <thead>
                                        <tr class="d-flex">
                                            <th class="col-sm-6" scope="col">
                                                <h7 class="newFont">ตัวชี้วัด</h7>
                                            </th>
                                            <th class="col-sm-1" scope="col">
                                                <h7 class="newFont">คะแนนเต็ม</h7>
                                            </th>
                                            <th class="col-sm-1" scope="col">
                                                <h7 class="newFont">คะแนนที่ได้</h7>
                                            </th>
                                            <th class="col-sm-2" scope="col">
                                                <h7 class="newFont">ผู้รับผิดชอบ</h7>
                                            </th>
                                            <th class="col-sm-2" scope="col">
                                            </th>
                                        </tr>
                                    </thead>
                            
                                    <tbody>
                                        @foreach($showindicator as $i => $value)
                                        <tr class="d-flex">
                                            <td class="col-sm-6 tdleft break">{{$value->indicator_name}}</td>
                                            <td class="col-sm-1 break">{{$value->full_score}}</td>
                                            <td class="col-sm-1 break">{{$value->score}}</td>
                                            <td class="col-sm-2 tdleft break"> {{$value->name_employee}}</td>
                                            <th class="col-sm-2 break" scope="col">
                                                <button type="button" class="btn btn-inverse-primary btns2"><i class="mdi mdi-chart-bar"></i></button>
                                            </th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- <div class="col-md-1"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group col-md-12">

                        </div>
                        <div class="form-group col-md-12">
                            <h3 class="newFont">ตัวชี้วัดปัจจุบัน (รายปี)</h3><br>

                            <div class="button-position">
                                <button type="button" class="btn btn-inverse-primary btns2 ">ดาวน์โหลด</button>
                            </div>
                            <br>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12"></div>
                            <div class="col-md-12">
                                <table class="table table-bordered newFont">
                                    <thead>
                                        <tr class="d-flex">
                                            <th class="col-sm-6" scope="col">
                                                <h7 class="newFont">ตัวชี้วัด</h7>
                                            </th>
                                            <th class="col-sm-1" scope="col">
                                                <h7 class="newFont">คะแนนเต็ม</h7>
                                            </th>
                                            <th class="col-sm-1" scope="col">
                                                <h7 class="newFont">คะแนนที่ได้</h7>
                                            </th>
                                            <th class="col-sm-2" scope="col">
                                                <h7 class="newFont">ผู้รับผิดชอบ</h7>
                                            </th>
                                            <th class="col-sm-2" scope="col">
                                            </th>
                                        </tr>
                                    </thead>
                            
                                    <tbody>
                                        @foreach($showyear as $i => $value)
                                        <tr class="d-flex">
                                            <td class="col-sm-6 tdleft break">{{$value->indicator_name}}</td>
                                            <td class="col-sm-1 break">{{$value->full_score}}</td>
                                            <td class="col-sm-1 break">{{$value->score}}</td>
                                            <td class="col-sm-2 tdleft break"> {{$value->name_employee}}</td>
                                            <th class="col-sm-2 break" scope="col">
                                                <button type="submit" class="btn btn-inverse-primary btns2"><i class="mdi mdi-chart-bar"></i></button>
                                            </th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- <div class="col-md-1"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
            <!--------------------------------------------  แสดงตัวชี้วัด end   --------------------------------------------------->



        </div>
        @include('partials.footer')
    </div>
    <!-- Div nav & side -->
    </div>
    </div>
    </div>


</body>
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About