@include('header.menu')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Mitr&display=swap');

    .newFont {
        font-family: 'Mitr', sans-serif;
    }

    .button-position {
        float: right;
        margin: -8px;
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
                        <h3 class="newFont">ส่วนที่ 2 ตัวชี้วัดตามเกณฑ์การประเมินหน่วยงาน (9 ข้อ) จาก ทมอ.</h3><br>
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
                               
                        <hr><br>
                        <!-- <p class="card-description"> Basic form elements </p> -->
                        <form class="forms-sample">
                            <div class="row">
                                <!-- <div class="col-md-1"></div> -->
                                <div class="col-md-12">
                                    <table class="table table-bordered newFont">
                                        <thead>
                                            <tr class="d-flex">
                                                <th class="col-sm-5" scope="col">
                                                    <h7 class="newFont">หัวข้อ</h7>
                                                </th>
                                                
                                                <th class="col-sm-1" scope="col">
                                                    <h7 class="newFont">คะแนนเต็ม</h7>
                                                </th>
                                                <th class="col-sm-1" scope="col">
                                                    <h7 class="newFont">ผล</h7>
                                                </th>
                                                <th class="col-sm-2" scope="col">
                                                    <h7 class="newFont">ร้อยละผลสำเร็จ</h7>
                                                </th>
                                                <th class="col-sm-1" scope="col">
                                                <h7 class="newFont">คะแนนที่ได้</h7>
                                                </th>
                                                <th class="col-sm-2" scope="col">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="d-flex">
                                                <td class="col-sm-5"> ร้อยละผลสำเร็จการใช้งานระบบ DOMS (ตั้งแต่ มค. 64) </td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-1">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-5"> ร้อยละการบันทึกงานประจำวันของพนักงาน </td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-1">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-5"> ร้อยละของคะแนนประเมิน 5ส </td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-1">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-5"> ร้อยละของการประหยัดพลังงาน go green </td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-1">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-5"> เว็บไซต์ หน่วยงานทั้งภาษาไทยและภาษาอังกฤษ</td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-1">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-5"> ร้อยละของการดำเนินงานและการใช้จ่ายงบประมาณตามแผนฯ ประจำปี</td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-1">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-5">การปฏิบัติตามหลักวินัยทางการเงิน</td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-1">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-5">การเข้าร่วมกิจกรรมกลางของมหาวิทยาลัย</td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-1">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-5">ผลการประเมินคุณธรรม และความโปร่งใสในการดำเนินงานของหน่วยงาน</td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-1">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                    <!-- <div class="col-md-1"></div> -->
                                </div>
                            </div>

                            <div class="form-group col-md-12"></div>
                            <div class="form-group col-md-8"></div>
                            <div class="form-group col-md-12">
                                <div class="button-position">
                                    <button type="submit" class="btn btn-gradient-primary mr-2 newFont" >บันทึก</button>
                                    <button type="submit" class="btn btn-light mr-2 newFont">ยกเลิก</button>
                               </div>
                            </div> 
                        </form>
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