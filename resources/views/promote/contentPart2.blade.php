@include('header.menu')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Mitr&display=swap');

    .newFont {
        font-family: 'Mitr', sans-serif;
    }

    .btns {
        padding: 0.9rem 2em;
        font-size: 0.875rem;
    }

    td {
        text-align: center;
    }

    .tdleft {
        text-align: left;
    }

    th {
        text-align: center;
    }

    .button-position {
        float: right;
        margin: -8px;
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

    @include('partials.navbar')
    @include('partials.sidebar')


    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="newFont"> แบบฟอร์มประเมินของฝ่ายบริหารและธุรการทั่วไป </h3>

            </div>
            <!-- แบบฟอร์มส่วนที่ 2 start -->

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="newFont">ส่วนที่ 2 ตัวชี้วัดตามเกณฑ์การประเมินหน่วยงาน (9 ข้อ) จาก ทมอ.</h3>
                        <br>
                        <div class="form-group col-md-4">
                            <label class="newFont">เดือน</label>
                            <form action="{{route('search')}}" method="POST" enctype="multipart/form-data">
                                <select id="client_id" type="dropdown-toggle" class="form-control" name="month">
                                    <optgroup class="newFont">
                                        <option value="0">ทุกเดือน</option>
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

                        <hr><br>
                        <!-- <p class="card-description"> Basic form elements </p> -->

                        <div class="row">
                            <!-- <div class="col-md-1"></div> -->
                            <div class="col-md-12">
                                <table class="table table-bordered newFont">
                                    <thead>
                                        <tr class="d-flex">
                                            <th class="col-sm-5 break" scope="col">
                                                <h7 class="newFont">หัวข้อ</h7>
                                            </th>

                                            <th class="col-sm-1 " scope="col">
                                                <h7 class="newFont">คะแนนเต็ม</h7>
                                            </th>
                                            <th class="col-sm-2 break" scope="col">
                                                <h7 class="newFont">ผล</h7><br><br>
                                                <h9 class="newFont" style="color:red">*กรอกผลที่คำนวณแล้ว</h9>
                                            </th>
                                            <th class="col-sm-2 break" scope="col">
                                                <h7 class="newFont">ร้อยละผลสำเร็จ</h7>
                                            </th>
                                            <th class="col-sm-1 " scope="col">
                                                <h7 class="newFont">คะแนนที่ได้</h7>
                                            </th>
                                            <th class="col-sm-1 break" scope="col">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($indicator_month as $i => $value)
                                        <tr class="d-flex">
                                            <form method="post" action="{{route('update')}}">
                                                @csrf
                                                <td class="col-sm-5 tdleft break"> {{$value->indicator_name}} </td>
                                                <td class="col-sm-1 break"> {{$value->full_score}} </td>
                                                <td class="col-sm-2 break">
                                                    <input type="text" name="result" value="{{$value->result}}" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2 break">
                                                    <input type="text" name="percent" value="{{$value->percent}}" class="form-control" placeholder="ตัวเลข" required>
                                                    <input type="hidden" name="key" value="{{$value->indicator_month_id}}" class="form-control" placeholder="ตัวเลข">
                                                </td>
                                                <td class="col-sm-1 break">{{$value->score}}
                                                </td>
                                                <td class="col-sm-1 break">
                                                    <button type="submit" class="btn btn-success btn-sm newFont" data-toggle="modal" data-target="#modalAction"><i class="mdi mdi-content-save"></i></button>
                                                </td>
                                            </form>
                                        </tr>
                                        @endforeach
                                        @foreach($indicator_year as $i => $value)
                                        <tr class="d-flex">
                                            <form method="post" action="{{route('update2')}}">
                                                @csrf
                                                <td class="col-sm-5 tdleft break"> {{$value->indicator_name}} </td>
                                                <td class="col-sm-1 break"> {{$value->full_score}} </td>
                                                <td class="col-sm-2 break">
                                                    <input type="text" name="result" value="{{$value->result}}" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" name="percent" value="{{$value->percent}}" class="form-control" placeholder="ตัวเลข" required>
                                                    <input type="hidden" name="key" value="{{$value->indicator_year_id}}" class="form-control" placeholder="ตัวเลข">
                                                </td>
                                                <td class="col-sm-1">{{$value->score}}
                                                </td>
                                                <td class="col-sm-1">
                                                    <button type="submit" class="btn btn-success btn-sm newFont" data-toggle="modal" data-target="#modalAction"><i class="mdi mdi-content-save"></i></button>
                                                </td>
                                            </form>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- <div class="col-md-1"></div> -->
                            </div>
                        </div>

                        <div class="form-group col-md-12"></div>
                        <div class="form-group col-md-8"></div>
                        <!-- <div class="form-group col-md-12">
                                <div class="button-position">
                                    <button type="submit" class="btn btn-gradient-primary mr-2 newFont" >บันทึก</button>
                                    <button type="submit" class="btn btn-light mr-2 newFont">ยกเลิก</button>
                               </div>
                            </div>  -->

                    </div>
                </div>
            </div>
            <!-- สร้างตัวชี้วัด end -->

        </div>
        @include('partials.footer')
    </div>
    <!-- Div nav & side -->
    </div>
    </div>
</body>
<script>
    // function myfuction($fullscore,$result){
    //     return $fullscore*$result
    // }
    var select = document.getElementById('client_id');
    select.addEventListener('change', function() {
        this.form.submit();
    }, false);
</script>


</script>