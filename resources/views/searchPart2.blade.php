  
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
                        <form class="forms-sample">
                            <div class="row">
                                <div class="form-group col-md-6">
                                <label class="newFont">ปี</label>
                                    <select class="form-control">
                                        <optgroup class="newFont">
                                            <option>ทุกปี</option>
                                            <option>2558</option>
                                            <option>2559</option>
                                            <option>2560</option>
                                            <option>2562</option>
                                            <option>2563</option>
                                            <option>2564</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
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

                                <div class="form-group col-md-12"></div>
                                <div class="form-group col-md-12">
                                    <div class="button-position">
                                        <button type="submit" class="btn btn-gradient-primary mr-4 newFont">ค้นหา</button>
                                        
                                    </div>
                                    <div class="button-position">
                                        <button type="submit" class="btn btn-gradient-primary mr-4 newFont">ดาวน์โหลด</button>
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
                        <h3 class="newFont">ตัวชี้วัดปัจจุบัน</h3><br>
                        <hr><br>
                        <div class="row">
                            <!-- <div class="col-md-1"></div> -->
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
                                    @foreach($showindicator_year  as $i => $value)
                                        <tr class="d-flex">
                                            <td class="col-sm-6">{{$value->indicator_name}}</td>
                                            <td class="col-sm-1">{{$value->fullscore}}</td>
                                            <td class="col-sm-1">{{$value->score}}</td>
                                            <td class="col-sm-2"> {{$value->name_employee}}</td>
                                            <th class="col-sm-2" scope="col">                                 
                                                <button type="button" class="Pbtn btn btn-primary"><i class="mdi mdi-chart-bar"></i></button>
                                            </th>
                                        </tr>
                                        @endforeach
                                        
                                        @foreach($showindicator_month  as $i => $value)
                                        <tr class="d-flex">
                                            <td class="col-sm-6">{{$value->indicator_name}}</td>
                                            <td class="col-sm-1">{{$value->fullscore}}</td>
                                            <td class="col-sm-1">{{$value->score}}</td>
                                            <td class="col-sm-2"> {{$value->name_employee}}</td>
                                            <th class="col-sm-2" scope="col">                                 
                                                <button type="button" class="Pbtn btn btn-primary"><i class="mdi mdi-chart-bar"></i></button>
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
