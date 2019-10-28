
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ออกเลขคำสั่ง</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!-- form start -->
           <form role="form" action="insert_dc.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                		<label>เรื่อง</label>
                    <textarea class="form-control" rows="5" name="detail_cmd" placeholder="ข้อความ" required></textarea>
            			</div>
                  <div class="form-group">
                   <label>หน่วยงาน</label>
                   <select class="form-control" name="department" required>
                     <option value="">เลือก</option>
                     <option value="สำนักการช่าง">สำนักการช่าง</option>
                     <option value="สำนักการคลัง">สำนักการคลัง</option>
                     <option value="สำนักการศึกษา">สำนักการศึกษา</option>
                     <option value="กองสาธารณสุขฯ">กองสาธารณสุขฯ</option>
                     <option value="กองการแพทย์">กองการแพทย์</option>
                     <option value="กองการประปา">กองการประปา</option>
                     <option value="กองวิชาการและแผนงาน">กองวิชาการ</option>
                     <option value="กองสวัสดิการ">กองสวัสดิการ</option>
                     <option value="สำนักปลัดเทศบาล">สำนักปลัดเทศบาล</option>
                     <option value="หน่วยงานตรวจสอบภายใน">หน่วยงานตรวจสอบภายใน</option>
                     <option value="สถานธนานุบาล">สถานธนานุบาล</option>
                   </select>
                 </div>
                 <div class="form-group">
                  <label>ผู้ลงนาม</label>
                  <select class="form-control" name="signer" required>
                    <option value="">เลือก</option>
                    <option value="นางสาวสมใจ สุวรรณศุภพนา">นางสาวสมใจ สุวรรณศุภพนา</option>
                    <option value="นายกวี ตันสุคตานนท์">นายกวี ตันสุคตานนท์</option>
                    <option value="นายถาวร จิรพัฒนโสภณ">นายถาวร จิรพัฒนโสภณ</option>
                    <option value="นางสมจิตต์ สุทธางกูร">นางสมจิตต์ สุทธางกูร</option>
                    <option value="นายธวัชชัย ทองมั่ง">นายธวัชชัย ทองมั่ง</option>
                    <option value="นางสาวชุติมา สนิทเปรม">นางสาวชุติมา สนิทเปรม</option>

                  </select>
                </div>
                <div class="form-group">
                 <label>ตำแหน่ง</label>
                 <select class="form-control" name="position" required>
                   <option value="">เลือก</option>
                   <option value="นายกเทศมนตรีนครภูเก็ต">นายกเทศมนตรีนครภูเก็ต</option>
                   <option value="รองนายกเทศมนตรี ปฏิบัติราชการแทน นายกเทศมนตรีนครภูเก็ต">รองนายกเทศมนตรี ปฏิบัติราชการแทน นายกเทศมนตรีนครภูเก็ต</option>
                   <option value="รองนายกเทศมนตรี รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต">รองนายกเทศมนตรี รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต</option>
                   <option value="ปลัดเทศบาล ปฏิบัติราชการแทน นายกเทศมนตรีนครภูเก็ต">ปลัดเทศบาล ปฏิบัติราชการแทน นายกเทศมนตรีนครภูเก็ต</option>
                   <option value="ปลัดเทศบาล รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต">ปลัดเทศบาล รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต</option>
                   <option value="รองปลัดเทศบาล รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต">รองปลัดเทศบาล ปฏิบัติราชการแทน นายกเทศมนตรีนครภูเก็ต</option>

                 </select>
               </div>
                </div>
                <!-- /.card-body -->
      	<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        <button type="submit" class="btn btn-primary">บันทึก</button>
      </div>
              </form>
            </div>
      </div>

    </div>
  </div>



  <div class="modal fade" id="edit_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">แก้ไขคำสั่ง</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <!-- form start -->
             <form role="form" action="edit_dc.php" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label>เลขที่</label>
                        <input type="text" name="id_cmd" id="id_cmd" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                      <label>ลงวันที่</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="fa fa-calendar"></i>
                          </span>
                        </div>
                          <input type="date" name="date_cmd" id="date_cmd" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                  		<label>เรื่อง</label>
                        <input type="hidden" class="form-control" name="id" id="id" placeholder="ข้อความ" readonly>
                      <textarea class="form-control" rows="5"  name="detail_cmd" id="detail_cmd" placeholder="ข้อความ" required></textarea>
              			</div>
                    <div class="form-group">
                     <label>หน่วยงาน</label>
                     <select class="form-control" name="department" id="department" required>
                       <option value="">เลือก</option>
                       <option value="สำนักการช่าง">สำนักการช่าง</option>
                       <option value="สำนักการคลัง">สำนักการคลัง</option>
                       <option value="สำนักการศึกษา">สำนักการศึกษา</option>
                       <option value="กองสาธารณสุขฯ">กองสาธารณสุขฯ</option>
                       <option value="กองการแพทย์">กองการแพทย์</option>
                       <option value="กองการประปา">กองการประปา</option>
                       <option value="กองวิชาการและแผนงาน">กองวิชาการ</option>
                       <option value="กองสวัสดิการ">กองสวัสดิการ</option>
                       <option value="สำนักปลัดเทศบาล">สำนักปลัดเทศบาล</option>
                       <option value="หน่วยงานตรวจสอบภายใน">หน่วยงานตรวจสอบภายใน</option>
                       <option value="สถานธนานุบาล">สถานธนานุบาล</option>
                     </select>
                   </div>
                   <div class="form-group">
                    <label>ผู้ลงนาม</label>
                    <select class="form-control" name="signer" id="signer" required>
                      <option value="">เลือก</option>
                      <option value="นางสาวสมใจ สุวรรณศุภพนา">นางสาวสมใจ สุวรรณศุภพนา</option>
                      <option value="นายกวี ตันสุคตานนท์">นายกวี ตันสุคตานนท์</option>
                      <option value="นายถาวร จิรพัฒนโสภณ">นายถาวร จิรพัฒนโสภณ</option>
                      <option value="นางสมจิตต์ สุทธางกูร">นางสมจิตต์ สุทธางกูร</option>
                      <option value="นายธวัชชัย ทองมั่ง">นายธวัชชัย ทองมั่ง</option>
                      <option value="นางสาวชุติมา สนิทเปรม">นางสาวชุติมา สนิทเปรม</option>

                    </select>
                  </div>
                  <div class="form-group">
                   <label>ตำแหน่ง</label>
                   <select class="form-control" name="position" id="Position" required>
                     <option value="">เลือก</option>
                     <option value="นายกเทศมนตรีนครภูเก็ต">นายกเทศมนตรีนครภูเก็ต</option>
                     <option value="รองนายกเทศมนตรี ปฏิบัติราชการแทน นายกเทศมนตรีนครภูเก็ต">รองนายกเทศมนตรี ปฏิบัติราชการแทน นายกเทศมนตรีนครภูเก็ต</option>
                     <option value="รองนายกเทศมนตรี รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต">รองนายกเทศมนตรี รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต</option>
                     <option value="ปลัดเทศบาล ปฏิบัติราชการแทน นายกเทศมนตรีนครภูเก็ต">ปลัดเทศบาล ปฏิบัติราชการแทน นายกเทศมนตรีนครภูเก็ต</option>
                     <option value="ปลัดเทศบาล รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต">ปลัดเทศบาล รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต</option>
                     <option value="รองปลัดเทศบาล รักษาราชการแทน นายกเทศมนตรีนครภูเก็ต">รองปลัดเทศบาล ปฏิบัติราชการแทน นายกเทศมนตรีนครภูเก็ต</option>

                   </select>
                 </div>
                  </div>
                  <!-- /.card-body -->
        	<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
          <button type="submit" class="btn btn-primary">บันทึก</button>
          </div>
                </form>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="uploadfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">เพิ่มไฟล์</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <!-- form start -->
               <form role="form" action="addfilepdf.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="form-group">
                      <label for="exampleFormControlFile1">เลือกไฟล์</label>
                      <input type="hidden" class="form-control" name="idd" id="idd" placeholder="ข้อความ" readonly>
                      <input type="file" class="form-control-file"  name="fileupload" id="fileupload">
                    </div>

                    </div>
                    <!-- /.card-body -->
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
            <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
                  </form>
            </div>
          </div>
        </div>
      </div>
