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
                <h3 class="newFont"> ส่วนที่ 2 ตัวชี้วัดตามเกณฑ์การประเมินหน่วยงาน (9 ข้อ) จาก ทมอ. </h3>
            </div>
            <!-- สร้างตัวชี้วัก start -->

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="newFont">สร้างตัวชี้วัด</h3><br>
                        <hr><br>
                        <!-- <p class="card-description"> Basic form elements </p> -->
                        <form class="forms-sample">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="newFont">หัวข้อ</label>
                                    <input type="text" class="form-control" placeholder="หัวข้อตัวขี้วัด" required>
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
                                <div class="form-group col-md-2">
                                    <label class="newFont">คะแนนเต็ม</label>
                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="newFont">ประเภทการกรอก</label>
                                    <select class="form-control">
                                        <optgroup class="newFont">
                                            <option>กรอกรายเดือน</option>
                                            <option>กรอกรายปี</option>
                                           
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
            <!-- สร้างตัวชี้วัด end -->

            <!-- แสดงตัวชี้วัด start -->
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="newFont">ตัวชี้วัดปัจจุบัน</h3><br>
                        <hr><br>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-12">
                                <table class="table table-bordered newFont">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <h7 class="newFont">ลำดับ</h7>
                                            </th>
                                            <th scope="col">
                                                <h7 class="newFont">ตัวชี้วัด</h7>
                                            </th>
                                            <th scope="col">
                                                <h7 class="newFont">ผู้รับผิดชอบ</h7>
                                            </th>
                                            <th scope="col">
                                                <h7 class="newFont">คะแนนเต็ม</h7>
                                            </th>
                                            <th scope="col">
                                                <h7 class="newFont">ประเภทการกรอก</h7>
                                            </th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> ร้อยละผลสำเร็จการใช้งานระบบ DOMS (ตั้งแต่ มค. 64) </td>
                                            <td> พัชรินทร์  ภาวิกานนท์  </td>
                                            <td> 1 </td>
                                            <td> กรอกรายเดือน </td>
                                            <td><button class="btn btn-success"><i class="mdi mdi-grease-pencil"></i></button>
                                                <button class="btn  btn-danger"><i class="mdi mdi-delete"></i></button>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 2 </td>
                                            <td> ร้อยละการบันทึกงานประจำวันของพนักงาน </td>
                                            <td> พัชรินทร์  ภาวิกานนท์  </td>
                                            <td> 1 </td>
                                            <td> กรอกรายเดือน </td>
                                            <td><button class="btn btn-success"><i class="mdi mdi-grease-pencil"></i></button>
                                                <button class="btn  btn-danger"><i class="mdi mdi-delete"></i></button>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 3 </td>
                                            <td> ร้อยละของคะแนนประเมิน 5ส </td>
                                            <td> จารุพันธ์ุ  พรุเพ็ชรแก้ว</td>
                                            <td> 1 </td>
                                            <td> กรอกรายปี </td>
                                            <td><button class="btn btn-success"><i class="mdi mdi-grease-pencil"></i></button>
                                                <button class="btn  btn-danger"><i class="mdi mdi-delete"></i></button>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 4 </td>
                                            <td> ร้อยละของการประหยัดพลังงาน go green </td>
                                            <td> ธวัชชัย  ประดู่</td>
                                            <td> 1 </td>
                                            <td> กรอกรายเดือน </td>
                                            <td><button class="btn btn-success"><i class="mdi mdi-grease-pencil"></i></button>
                                                <button class="btn  btn-danger"><i class="mdi mdi-delete"></i></button>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 5 </td>
                                            <td> เว็บไซต์ หน่วยงานทั้งภาษาไทยและภาษาอังกฤษ </td>
                                            <td> ชัชวาล  นาคพันธุ์</td>
                                            <td> 2 </td>
                                            <td> กรอกรายปี</td>
                                            <td><button class="btn btn-success"><i class="mdi mdi-grease-pencil"></i></button>
                                                <button class="btn  btn-danger"><i class="mdi mdi-delete"></i></button>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 6 </td>
                                            <td> ร้อยละของการดำเนินงานและการใช้จ่ายงบประมาณตามแผนฯ ประจำปี </td>
                                            <td> เกษมาพร  ตัญบุญยกิจ</td>
                                            <td> 1 </td>
                                            <td> กรอกรายเดือน</td>
                                            <td><button class="btn btn-success"><i class="mdi mdi-grease-pencil"></i></button>
                                                <button class="btn  btn-danger"><i class="mdi mdi-delete"></i></button>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 7 </td>
                                            <td> การปฏิบัติตามหลักวินัยทางการเงิน </td>
                                            <td> จารุพันธ์ุ  พรุเพ็ชรแก้ว</td>
                                            <td> 1 </td>
                                            <td> กรอกรายเดือน</td>
                                            <td><button class="btn btn-success"><i class="mdi mdi-grease-pencil"></i></button>
                                                <button class="btn  btn-danger"><i class="mdi mdi-delete"></i></button>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 8 </td>
                                            <td> การเข้าร่วมกิจกรรมกลางของมหาวิทยาลัย </td>
                                            <td> ธันฐภัทร์  ดวงจันทร์</td>
                                            <td> 1 </td>
                                            <td> กรอกรายเดือน</td>
                                            <td><button class="btn btn-success"><i class="mdi mdi-grease-pencil"></i></button>
                                                <button class="btn  btn-danger"><i class="mdi mdi-delete"></i></button>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 9 </td>
                                            <td> ผลการประเมินคุณธรรม และความโปร่งใสในการดำเนินงานของหน่วยงาน </td>
                                            <td> </td>
                                            <td> 1 </td>
                                            <td> กรอกรายเดือน</td>
                                            <td><button class="btn btn-success"><i class="mdi mdi-grease-pencil"></i></button>
                                                <button class="btn  btn-danger"><i class="mdi mdi-delete"></i></button>
                                            </td>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- แสดงตัวชี้วัด end -->

        </div>
        @include('partials.footer')
    </div>
    <!-- Div nav & side -->
    </div>
    </div>


</body>