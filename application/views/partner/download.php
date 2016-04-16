    <div id="wrapper">
   <?php $this->load->view('subview/sidebar'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                      <div class="row" style="margin-top:50px;">
                         <h3 class="page-header" style="margin-top:-10px">แก้ไขหน้าDownload<br/>
                         </h3>
                     </div>
                 </div>
            </div>
         <form method="post" action="<?php echo site_url('backend/submit_download');?>" enctype="multipart/form-data">
               <div class="form-group">
                 
                    <label><b>Download Files</b></label> <br/>
                  <hr/>
                  <!-- <label>แก้ไขรูปที่ 2 </label> 
                  <div class="">
                    <div class="file-preview-thumbnails">
                      <div class="file-preview-frame" style="width: 285px;" id="preview-1459598613320-0" data-fileindex="0">
                         <img src="<?php echo base_url();?>webroot/upload/<?php echo $page_download[0]['page4_photo_2'];?>" 
                          class="file-preview-image" 
                          style="width:auto;height:160px;">   
                      </div>
                    </div>
                    <div class="clearfix"></div>    <div class="file-preview-status text-center text-success"></div>
                  <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
                </div> -->
              <!--     <label class="control-label">Select File</label>
                  <input id="input-2" name="page4_photo_2" type="file" class="file" multiple data-show-upload="false" data-show-caption="true"> -->
                  <label>แก้ไขล้ิง file 1 </label> 
                Filename ปัจุบัน : <?php echo $page_download[0]['page4_file_2'];?>
                  <input id="input-2" name="page4_file_2" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">

                <!--   <input type="text" class="form-control" name="page4_file_2" 
                  value="<?php echo $page_download[0]['page4_file_2'];?>"  style="width:400px;"/><br/>
                 -->
                <!-- <label>แก้ไขรูปที่ 3 </label> 
                <div class="">
                    <div class="file-preview-thumbnails">
                      <div class="file-preview-frame" style="width: 285px;" id="preview-1459598613320-0" data-fileindex="0">
                         <img src="<?php echo base_url();?>webroot/upload/<?php echo $page_download[0]['page4_photo_3'];?>" 
                          class="file-preview-image" 
                          style="width:auto;height:160px;">   
                      </div>
                    </div>
                    <div class="clearfix"></div>    <div class="file-preview-status text-center text-success"></div>
                  <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
                </div>
                  <label class="control-label">Select File</label>
                  <input id="input-2" name="page4_photo_3" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
                  --><label>แก้ไขล้ิง file 2 </label>

                  Filename ปัจุบัน : <?php echo $page_download[0]['page4_file_3'];?>
                  <input id="input-2" name="page4_file_3" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">

         <!--          <input type="text" class="form-control" name="page4_file_3" 
                  value="<?php echo $page_download[0]['page4_file_3'];?>"  style="width:400px;"/><br/>
 -->
              <!--   <label>แก้ไขรูปที่ 4 </label> 
                  <label class="control-label">Select File</label>
                  <div class="">
                    <div class="file-preview-thumbnails">
                      <div class="file-preview-frame" style="width: 285px;" id="preview-1459598613320-0" data-fileindex="0">
                         <img src="<?php echo base_url();?>webroot/upload/<?php echo $page_download[0]['page4_photo_4'];?>" 
                          class="file-preview-image" 
                          style="width:auto;height:160px;">   
                      </div>
                    </div>
                    <div class="clearfix"></div>    <div class="file-preview-status text-center text-success"></div>
                  <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
                </div>
                  <input id="input-2" name="page4_photo_4" type="file" class="file" multiple data-show-upload="false" data-show-caption="true"> -->
                  <label>แก้ไขล้ิง file 3 </label> 
                  Filename ปัจุบัน : <?php echo $page_download[0]['page4_file_4'];?>
                  <input id="input-2" name="page4_file_4" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">

                <!--   <input type="text" class="form-control" name="page4_file_4" 
                  value="<?php echo $page_download[0]['page4_file_4'];?>" style="width:400px;"/><br/>
 -->
                 <!--  <label>แก้ไขรูปที่ 5 </label> 
                  <div class="">
                    <div class="file-preview-thumbnails">
                      <div class="file-preview-frame" style="width: 285px;" id="preview-1459598613320-0" data-fileindex="0">
                         <img src="<?php echo base_url();?>webroot/upload/<?php echo $page_download[0]['page4_photo_5'];?>" 
                          class="file-preview-image" 
                          style="width:auto;height:160px;">   
                      </div>
                    </div>
                    <div class="clearfix"></div>    <div class="file-preview-status text-center text-success"></div>
                  <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
                </div>
                  <label class="control-label">Select File</label>
                  <input id="input-2" name="page4_photo_5" type="file" class="file" multiple data-show-upload="false" data-show-caption="true"> -->
                  <label>แก้ไขล้ิง file 4 </label>

                Filename ปัจุบัน : <?php echo $page_download[0]['page4_file_5'];?>
                  <input id="input-2" name="page4_file_5" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
                <!--    <input type="text" class="form-control" name="page4_file_5" 
                  value="<?php echo $page_download[0]['page4_file_5'];?>" style="width:400px;"/><br/>
                 -->
                 
                 
                 <input type="submit" class="btn btn-info" value="บันทึก">
               </div>       
        </form>

        </div>   
   </div>
</div>
    
</body>
</html>
 