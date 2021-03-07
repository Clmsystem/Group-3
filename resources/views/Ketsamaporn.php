<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ระบบรายงานผลการดำเนินงาน</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <style>
.container {
    height: 200px;
    display: flex;
    /* align-items: ; */
    margin-left: 25%;
    margin-top: 10% ;
    /* justify-content: center; */
}
  </style>
  <body>
   
      <!-- partial:partials/_navbar.html -->
      
      <div class="container-fluid content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <button type="submit" class="btn btn-dark mr-2 float-right" >แก้ไข</button>
                    <h4 class="card-title">ส่วนที่ 2</h4>
                    <p class="card-description"> ตัวชี้วัดตามเกณฑ์การประเมินหน่วยงาน (9 ข้อ) จาก ทมอ. </p>
                    <form class="forms-sample">
                      <div class="form-group row">
                        <div class="col-md-4"> 
                        <label for="exampleInputUsername2" class="col-form-label"><b>ตัวชี้วัด</b></label>
                          <div>1. ร้อยละการบันทึกงานประจำวันของพนักงาน</div>
                        </div>
                        <div class="col-md-2"> 
                        <label for="exampleInputUsername2" class="col-form-label"><b>ผล</b></label>
                          <input type="text" class="form-control"   id="exampleInputUsername2" placeholder="ผล">
                        </div>
                        <div class="col-md-2"> 
                          <label for="exampleInputUsername2" class="col-form-label"><b>ร้อยละผลสำเร็จ</b></label>
                            <input type="text" class="form-control" id="exampleInputUsername2" placeholder="ร้อยละผลสำเร็จ">
                        </div>
                        <div class="col-md-2"> 
                          <label for="exampleInputUsername2" class="col-form-label"><b>คะแนนที่ได้ </b></label>
                            <input type="text" class="form-control" id="exampleInputUsername2" placeholder="คะแนนที่ได้">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-4"> 
                        
                          <div>2. ร้อยละของการดำเนินงานและการใช้จ่ายงบประมาณตามแผนฯ ประจำปี</div>
                        </div>
                        <div class="col-md-2"> 
                        
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="ผล">
                        </div>
                        <div class="col-md-2"> 
                         
                            <input type="text" class="form-control" id="exampleInputUsername2" placeholder="ร้อยละผลสำเร็จ">
                        </div>
                        <div class="col-md-2"> 
                          
                            <input type="text" class="form-control" id="exampleInputUsername2" placeholder="คะแนนที่ได้">
                        </div>
                      </div>
                      
                       
                      <button type="submit" class="btn btn-gradient-primary mr-2" onclick="pad()">บันทึก</button>
                      <button type="submit" class="btn btn-light" onclick="pad2()" >ยกเลิก</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <!-- page-body-wrapper ends -->
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<script>
    pad = () =>{
      // alert("dsd");
      window.location.href = '/Ketsamaporn';
    }
    pad2 = () =>{
      window.location.href = '/index';
    }
</script>