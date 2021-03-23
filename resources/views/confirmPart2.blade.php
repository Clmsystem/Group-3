  
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
                        <h3 class="newFont">ยืนยันข้อมูล</h3>
                        <form class="forms-sample">
                            <div class="row">
                                <div class="form-group col-md-4">
                                <label class="newFont">เดือน</label>
                                    <select class="form-control">
                                        <optgroup class="newFont">
                                            <option>ทุกเดือน</option>
                                            <option>มกราคม</option>
                                            <option>กุมภาพันธ์</option>
                                            <option>มีนาคม</option>
                                            <option>เมษายน</option>
                                            <option>พฤษภาคม</option>
                                            <option>มิถุนายน</option>
                                            <option>กรกฎาคม</option>
                                            <option>สิงหาคม</option>
                                            <option>กันยายน</option>
                                            <option>ตุลาคม</option>
                                            <option>พฤศจิกายน</option>
                                            <option>ธันวาคม</option>
                                        </optgroup>
                                    </select>
                                </div>
                                
                                <div class="col-md-12">
                                <table class="table table-bordered newFont">
                                    <thead>
                                        <tr class="d-flex">
                                            <th class="col-sm-6 break" scope="col">
                                                <h7 class="newFont">ตัวชี้วัด</h7>
                                            </th>
                                            <th class="col-sm-1 " scope="col">
                                                <h7 class="newFont">คะแนนเต็ม</h7>
                                            </th>
                                            <th class="col-sm-1 " scope="col">
                                                <h7 class="newFont">คะแนนที่ได้</h7>
                                            </th>
                                            <th class="col-sm-2 break" scope="col">
                                                <h7 class="newFont">ผู้รับผิดชอบ</h7>
                                            </th>
                                            <th class="col-sm-2 break" scope="col">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($month as $i => $item)
                                        <tr class="d-flex">
                                            <td  class="col-sm-6 tdleft break"> {{$item->indicator_name}} </td>
                                            <td class="col-sm-1"> {{$item->fullscore}} </td>
                                            <td class="col-sm-1"> {{$item->score}} </td>
                                            <td class="col-sm-2 tdleft"> {{$item->name_employee}} </td>
                                            <td class="col-sm-2"><button type="submit" class="btn btn-gradient-primary  mr-4 newFont">ยืนยัน</button></td>
                                        </tr>
                                    @endforeach
                                    @foreach($year as $i => $item)
                                        <tr class="d-flex">
                                            <td  class="col-sm-6 tdleft break"> {{$item->indicator_name}} </td>
                                            <td class="col-sm-1"> {{$item->fullscore}} </td>
                                            <td class="col-sm-1"> {{$item->score}} </td>
                                            <td class="col-sm-2 tdleft"> {{$item->name_employee}} </td>
                                            <td class="col-sm-2"><button type="submit" class="btn btn-gradient-primary  mr-4 newFont">ยืนยัน</button></td>
                                        </tr>
                                    @endforeach    
                                    </tbody>
                                </table>
                                <!-- <div class="col-md-1"></div> -->
                            </div>


                                <div class="form-group col-md-12"></div>
                               
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
