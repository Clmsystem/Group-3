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
                                        <option>มิถุนายน</option>                                            <option>กรกฎาคม</option>
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
                                                <th class="col-sm-4" scope="col">
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
                                                <th class="col-sm-2" scope="col">
                                                <h7 class="newFont">คะแนนที่ได้</h7>
                                                </th>
                                                <th class="col-sm-2" scope="col">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="d-flex">
                                                <td class="col-sm-4"> ร้อยละผลสำเร็จการใช้งานระบบ DOMS (ตั้งแต่ มค. 64) </td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-4"> ร้อยละการบันทึกงานประจำวันของพนักงาน </td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-4"> ร้อยละของคะแนนประเมิน 5ส </td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-4"> ร้อยละของการประหยัดพลังงาน go green </td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-4"> เว็บไซต์ หน่วยงานทั้งภาษาไทยและภาษาอังกฤษ</td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-4"> ร้อยละของการดำเนินงานและการใช้จ่ายงบประมาณตามแผนฯ ประจำปี</td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-4">การปฏิบัติตามหลักวินัยทางการเงิน</td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-4">การเข้าร่วมกิจกรรมกลางของมหาวิทยาลัย</td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                </td>
                                                <td class="col-sm-2">
                                                    <button type="submit" class="btn btn-warning mr-2 newFont" data-toggle="modal" data-target="#modalAction">แก้ไข</button>
                                                </td>
                                            </tr>

                                            <tr class="d-flex">
                                                <td class="col-sm-4">ผลการประเมินคุณธรรม และความโปร่งใสในการดำเนินงานของหน่วยงาน</td>
                                                <td class="col-sm-1"> 1 </td>
                                                <td class="col-sm-1">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                                </td>
                                                <td class="col-sm-2">
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
                            <div class="form-group col-md-4">
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

           <!--------------------------------------------  แก้ไขข้อมูลตัวชี้วัด ---------------------------------------------------->

           <div class="modal fade" id="modalAction" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <br>
                            <h2 class="modal-title newFont" id="exampleModalLabel">แก้ไขผลตัวชี้วัด</h2>
                            <form class="forms-sample">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="newFont">หัวข้อ</label>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="newFont">คะแนนเต็ม</label>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="newFont">ผล</label>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="newFont">ร้อยละผลสำเร็จ</label>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="newFont">คะแนนที่ได้</label>
                                </div>
                                <div class="col-md-4"> 
                                    <div class="newFont">1. ร้อยละผลสำเร็จการใช้งานระบบ DOMS (เริ่มตั้งแต่ มค.64)</div>
                                </div>
                                <div class="col-md-2"> 
                                    <div class="newFont">1</div>
                                </div>
                                <div class="col-md-2"> 
                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                </div>
                                <div class="col-md-2"> 
                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                </div>
                                <div class="col-md-2"> 
                                <div class="newFont">1</div>
                                </div>
                                <div class="col-md-4"> 
                                    <div class="newFont">2. ร้อยละการบันทึกงานประจำวันของพนักงาน</div>
                                </div>
                                <div class="col-md-2"> 
                                    <div class="newFont">1</div>
                                </div>
                                <div class="col-md-2"> 
                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                </div>
                                <div class="col-md-2"> 
                                    <input type="text" class="form-control" placeholder="ตัวเลข" required>
                                </div>
                                <div class="col-md-2"> 
                                <div class="newFont">1</div>
                                </div>
                               
                            </div>
                        </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                <h7 class="newFont">ยกเลิก</ย>
                            </button>
                            <button type="button" class="btn btn-primary" >
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


</body>