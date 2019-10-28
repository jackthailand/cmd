
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ลงรับหนังสือ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!-- form start -->
           <form role="form" action="insert_pr_dr.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>เลขหนังสือ</label>
                    <input type="text" class="form-control" name="id_doc_in" id="exampleFormControlInput1" placeholder="ข้อความ" required>
                  </div>
                  <div class="form-group">
                  <label>ลงวันที่</label>
                  <input id="datepicker2" width="276" name="date_doc" />
                    <script>
                        $('#datepicker2').datepicker({
                      format: 'yyyy-mm-dd'
                    });
                    </script>
                  </div>

                  <div class="form-group">
                		<label>จาก</label>
                		<input type="text" class="form-control" name="text_from" id="exampleFormControlInput1" placeholder="ข้อความ" required>
            			</div>
            			<div class="form-group">
                		<label>ถึง</label>
                		<input type="text" class="form-control" name="text_to" id="exampleFormControlInput1" placeholder="ข้อความ" required>
            			</div>
            			<div class="form-group">
                		<label>เรื่อง</label>
                    <textarea class="form-control" rows="5" id="comment" name="text_subject" placeholder="ข้อความ" required></textarea>
            			</div>
            			<div class="form-group">
                		<label>ชื่อผู้ใช้งาน</label>
                		<input type="text" class="form-control" name="text_NameUser" id="exampleFormControlInput1" placeholder="ข้อความ" required>
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
</div>
<!-- daterangepicker -->
