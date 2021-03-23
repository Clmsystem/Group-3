  
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

            <!-- ------------------------------------------  สร้างตัวชี้วัด Start-  --------------------------------------------->

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="newFont">สร้างตัวชี้วัด</h3><br>
                        <hr><br>
                        <form class="forms-sample">
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label class="newFont">หัวข้อ</label>
                                    <input type="text" class="form-control" placeholder="หัวข้อตัวขี้วัด" required>
                                </div>
                                
                                <div class="form-group col-md-2">
                                    <label class="newFont">คะแนนเต็ม</label>
                                    <input type="text" class="form-control" placeholder="ตัวเลข" value="" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="newFont">ประเภทการกรอก</label>
                                    <select class="form-control">
                                        <optgroup class="newFont">
                                            <option>เลือกประเภทการกรอก</option>
                                            <option>รายเดือน</option>
                                            <option>รายปี</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="newFont">ผู้รับผิดชอบ</label>
                                    <select class="form-control">
                                        <optgroup class="newFont">
                                            <option>เลือกผู้รับผิดชอบ</option>
                                            <option>พัชรินทร์  ภาวิกานนท์ </option>
                                            <option>เกษมาพร  ตัญบุญยกิจ</option>
                                            <option>จารุพันธุ์ พรุเพ็ชรแก้ว</option>
                                            <option>ธวัชชัย  ประดู่</option>
                                            <option>ชัชวาล  นาคพันธุ์</option>
                                            <option>ธันฐภัทร์  ดวงจันทร์</option>
                                            <option>อมราพร ชุมชนะ</option>
                                            <option>อาภรณ์ ไชยสุวรรณ</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group col-md-9"></div>
                                <div class="form-group col-md-3">
                                    <div class="button-position">
                                        <button type="submit" class="btn btn-gradient-primary mr-2 newFont">เพิ่มตัวชี้วัด</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------  สร้างตัวชี้วัด end-  --------------------------------------------->

            <!-- ------------------------------------------  แสดงตัวชี้วัด end-  --------------------------------------------->

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="newFont">ตัวชี้วัดปัจจุบัน</h3><br>
                        <hr><br>
                        <div class="row">
                            <!-- <div class="col-md-1"></div> -->
                            <div class="col-md-12">
                                <table class="table table-bordered newFont break ">
                                    <thead>
                                        <tr class="d-flex">
                                            
                                            <th class="col-sm-5 break" scope="col">
                                                <h7 class="newFont">ตัวชี้วัด</h7>
                                            </th>
                                            
                                            <th class="col-sm-2 break" scope="col">
                                                <h7 class="newFont">คะแนนเต็ม</h7>
                                            </th>
                                            <th class="col-sm-2 break" scope="col">
                                                <h7 class="newFont">ประเภทการกรอก</h7>
                                            </th>
                                            <th class="col-sm-2 break" scope="col">
                                                <h7 class="newFont">ผู้รับผิดชอบ</h7>
                                            </th>
                                            <th class="col-sm-1 break" scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($shindicator_month  as $i => $value)
                                   
                                        <tr class="d-flex">
                                            
                                            <td class="col-sm-5 tdleft break"> {{$value->indicator_name}} </td>
                                            <td class="col-sm-2 break"> {{$value->fullscore}} </td>

                                            @if ($value->indicator_type == 0)
                                            <td class="col-sm-2 break">รายปี</td>
                                            @elseif ($value->indicator_type ==1 )
                                            <td class="col-sm-2 break">รายเดือน</td>
                                            @endif
                                            <td class="col-sm-2 tdleft break"> {{$value->name_employee}} </td>
                                            <td class="col-sm-1 break"><button class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#modalAction"><i class="mdi mdi-grease-pencil launch-modal"></i></button>                       
                                            </td>
                                        </tr>
                                    @endforeach
                                    @foreach($shindicator_year  as $i => $value)
                                        <tr class="d-flex">
                                            
                                            <td class="col-sm-5 tdleft break"> {{$value->indicator_name}} </td>
                                            <td class="col-sm-2 break"> {{$value->fullscore}} </td>
                                            @if ($value->indicator_type == 0)
                                            <td class="col-sm-2 break">รายปี</td>
                                            @elseif ($value->indicator_type ==1 )
                                            <td class="col-sm-2 break">รายเดือน</td>
                                            @endif
                                            <td class="col-sm-2 tdleft break"> {{$value->name_employee}} </td>
                                            <td class="col-sm-1 break"><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalAction"><i class="mdi mdi-grease-pencil launch-modal"></i></button>
                                            </td>
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

            <!--------------------------------------------  แก้ไขตัวชี้วัด Start ---------------------------------------------------->

            <div class="modal fade" id="modalAction" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <br>
                            <h2 class="modal-title newFont" id="exampleModalLabel">แก้ไขตัวชี้วัด</h2>
                            <form class="forms-sample">
                                <hr><br>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="newFont">หัวข้อ</label>
                                        <input type="text" class="form-control" placeholder="หัวข้อตัวขี้วัด" value="" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="newFont">คะแนนเต็ม</label>
                                        <input type="text" class="form-control" placeholder="ตัวเลข" value="" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                    <label class="newFont">ประเภทการกรอก</label>
                                    <select class="form-control">
                                        <optgroup class="newFont">
                                            <option>เลือกประเภทการกรอก</option>
                                            <option>รายเดือน</option>
                                            <option>รายปี</option>
                                        </optgroup>
                                    </select>
                                </div>
                                    <div class="form-group col-md-2">
                                        <label class="newFont">ผู้รับผิดชอบ</label>
                                        <select class="form-control">
                                            <optgroup class="newFont">
                                                <option>เลือกผู้รับผิดชอบ</option>
                                                <option>พัชรินทร์  ภาวิกานนท์ </option>
                                                <option>เกษมาพร  ตัญบุญยกิจ</option>
                                                <option>จารุพันธ์ุ  พรุเพ็ชรแก้ว</option>
                                                <option>ธวัชชัย  ประดู่</option>
                                                <option>ชัชวาล  นาคพันธุ์</option>
                                                <option>ธันฐภัทร์  ดวงจันทร์</option>
                                                <option>อมราพร ชุมชนะ</option>
                                                <option>อาภรณ์ ไชยสุวรรณ</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                <h7 class="newFont">ยกเลิก</ย>
                            </button>
                            <button type="button" class="btn btn-primary">
                                <h7 class="newFont">บันทึก</h7>
                            </button>
                        </div>
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
