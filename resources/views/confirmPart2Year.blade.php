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

th {
    text-align: center;
}

.tdleft {
    text-align: left;
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
                        <h3 class="newFont">ยืนยันข้อมูล ประจำปีงบประมาณ พ.ศ.
                            <?php echo date("Y") + 543; ?></h3>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <!-- <label class="newFont">เดือน</label> -->
                                <form action="{{route('confirm_year')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <select id="client_id" type="dropdown-toggle" class="form-control newFont "
                                        name="year">
                                        <optgroup class="newFont">
                                            <!-- <option value="0">ทุกปี</option> -->
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
                            <div class="form-group col-md-3">
                                <div>
                                    <button type="submit" data-toggle="modal"
                                        class="btn btn-gradient-primary mr-4 newFont">ค้นหา</button>
                                </div>
                            </div>

                            <hr>

                            <div class="col-md-12">
                                <hr>
                                <table class="table table-bordered newFont">
                                    <thead>
                                        <tr class="d-flex">
                                            <th class="col-sm-5 break" scope="col">
                                                <h7 class="newFont">หัวข้อ</h7>
                                            </th>

                                            <th class="col-sm-1 " scope="col">
                                                <h7 class="newFont">คะแนนเต็ม</h7>
                                            </th>
                                            <th class="col-sm-1 break" scope="col">
                                                <h7 class="newFont">ผล</h7><br><br>
                                            </th>
                                            <th class="col-sm-2 break" scope="col">
                                                <h7 class="newFont">ร้อยละผลสำเร็จ</h7>
                                            </th>
                                            <th class="col-sm-1 " scope="col">
                                                <h7 class="newFont">คะแนนที่ได้</h7>
                                            </th>
                                            <th class="col-sm-2 " scope="col">
                                                <h7 class="newFont">ผู้รับผิดชอบ</h7>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($indicator_year as $i => $item)
                                        <tr class="d-flex">
                                            <td class="col-sm-5 tdleft break"> {{$item->indicator_name}} </td>
                                            <td class="col-sm-1"> {{$item->full_score}} </td>
                                            <td class="col-sm-1 break">{{$item->result}}</td>
                                            <td class="col-sm-2"> {{$item->percent}} </td>
                                            <td class="col-sm-1"> {{$item->score}}</td>
                                            <td class="col-sm-2 tdleft"> {{$item->name_employee}} </td>

                                        </tr>
                                        @endforeach
                                        <!-- @foreach($indicator_year as $i => $item)
                                        <tr class="d-flex">
                                            <td class="col-sm-5 tdleft break"> {{$item->indicator_name}} </td>
                                            <td class="col-sm-1"> {{$item->full_score}} </td>
                                            <td class="col-sm-1 break">{{$item->score}}</td>
                                            <td class="col-sm-2"> {{$item->percent}} </td>
                                            <td class="col-sm-1"></td>
                                            <td class="col-sm-2 tdleft"> {{$item->name_employee}} </td>
                                        </tr>
                                        @endforeach -->
                                    </tbody>
                                </table>
                                <!-- <div class="col-md-1"></div> -->
                            </div>
                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-12">
                                <div class="button-position">
                                    <button type="submit" data-toggle="modal"
                                        class="btn btn-secondary mr-4 newFont">ยกเลิก</button>
                                </div>
                                <div class="button-position">
                                    <button type="submit" data-toggle="modal"
                                        class="btn btn-gradient-primary mr-4 newFont">ยืนยันข้อมูล</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            @include('partials.footer')
        </div>
        <!-- Div nav & side -->
    </div>
    </div>
    </div>

</body>