<div id="wrapper">
<?php $this->load->view('subview/sidebar'); ?>

  <div id="page-wrapper">
      <div class="row">
          <div class="col-lg-12">
                <div class="row" style="margin-top:50px;">
                   <h3 class="page-header" style="margin-top:-10px">แก้ไขหน้าแรก<br/>
                   </h3>
               </div>
           </div>
      </div>
   <form method="post" action="<?php echo site_url('backend/submit_home');?>" enctype="multipart/form-data">
   <div class="form-group">
    
    <label>แก้ไขรูปที่ 1 </label> 
    <div class="">
        <div class="file-preview-thumbnails">
          <div class="file-preview-frame" style="width: 285px;" id="preview-1459598613320-0" data-fileindex="0">
             <img src="<?php echo base_url();?>webroot/upload/<?php echo $page_1[0]['page1_photo_1'];?>" 
              class="file-preview-image" 
              style="width:auto;height:160px;">   
          </div>
        </div>
        <div class="clearfix"></div><div class="file-preview-status text-center text-success"></div>
      <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
    </div>

      <label class="control-label">Select File</label>
      <input id="input-2" name="page1_photo_1" type="file" class="file" data-show-upload="false" data-show-caption="true">
      <div class="row">
        <div class="col-md-8">
          <label>ข้อความ</label>
          <input type="text" class="form-control"name="text1_label_01"  value="<?php echo @$page_1[0]['text1_label_01'];?>">
        </div>
        <div class="col-md-4">
          <label>สีพื้นหลังของข้อความ</label>
          <input type="text" class="form-control make_picker" name="text1_label_color_01"  value="<?php echo @$page_1[0]['text1_label_color_01'];?>"/><br/>
        </div>
          <div class="col-md-8">
          <label>ข้อความ </label>
          <input type="text" class="form-control"name="text1_label_02"  value="<?php echo @$page_1[0]['text1_label_02'];?>">
        </div>
        <div class="col-md-4">
          <label>สีพื้นหลังของข้อความ</label>
          <input type="text" class="form-control make_picker" name="text1_label_color_02"  value="<?php echo @$page_1[0]['text1_label_color_02'];?>"/><br/>
        </div>
          <div class="col-md-8">
          <label>ข้อความ </label>
          <input type="text" class="form-control"name="text1_label_03"  value="<?php echo @$page_1[0]['text1_label_03'];?>">
        </div>
        <div class="col-md-4">
          <label>สีพื้นหลังของข้อความ </label>
          <input type="text" class="form-control make_picker" name="text1_label_color_03"  value="<?php echo @$page_1[0]['text1_label_color_03'];?>"/><br/>
        </div>
      </div>
  
     <label>แก้ไขรูปที่ 2 </label> 
     <div class="">
        <div class="file-preview-thumbnails">
          <div class="file-preview-frame" style="width: 285px;" id="preview-1459598613320-0" data-fileindex="0">
             <img src="<?php echo base_url();?>webroot/upload/<?php echo $page_1[0]['page1_photo_2'];?>" 
              class="file-preview-image" 
              style="width:auto;height:160px;">   
          </div>
        </div>
        <div class="clearfix"></div><div class="file-preview-status text-center text-success"></div>
      <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
    </div>

      <label class="control-label">Select File</label>
      <input id="input-2" name="page1_photo_2" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
       <div class="row">
        <div class="col-md-8">
          <label>ข้อความ</label>
          <input type="text" class="form-control"name="text2_label_01"  value="<?php echo @$page_1[0]['text2_label_01'];?>">
        </div>
        <div class="col-md-4">
          <label>สีพื้นหลังของข้อความ</label>
          <input type="text" class="form-control make_picker" name="text2_label_color_01"  value="<?php echo @$page_1[0]['text2_label_color_01'];?>"/><br/>
        </div>
          <div class="col-md-8">
          <label>ข้อความ </label>
          <input type="text" class="form-control" name="text2_label_02"  value="<?php echo @$page_1[0]['text2_label_02'];?>">
        </div>
        <div class="col-md-4">
          <label>สีพื้นหลังของข้อความ</label>
          <input type="text" class="form-control make_picker" name="text2_label_color_02"  value="<?php echo @$page_1[0]['text2_label_color_02'];?>"/><br/>
        </div>
          <div class="col-md-8">
          <label>ข้อความ</label>
          <input type="text" class="form-control" name="text2_label_03"  value="<?php echo @$page_1[0]['text2_label_03'];?>">
        </div>
        <div class="col-md-4">
          <label>สีพื้นหลังของข้อความ</label>
          <input type="text" class="form-control make_picker" name="text2_label_color_03"  value="<?php echo @$page_1[0]['text2_label_color_03'];?>"/><br/>
        </div>
      </div>

      <label>แก้ไขรูปที่ 3 </label> 
      <div class="">
        <div class="file-preview-thumbnails">
          <div class="file-preview-frame" style="width: 285px;" id="preview-1459598613320-0" data-fileindex="0">
             <img src="<?php echo base_url();?>webroot/upload/<?php echo $page_1[0]['page1_photo_3'];?>" 
              class="file-preview-image" 
              style="width:auto;height:160px;">   
          </div>
        </div>
        <div class="clearfix"></div>    <div class="file-preview-status text-center text-success"></div>
      <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
     </div>
      
      <label class="control-label">Select File</label>
      <input id="input-2" name="page1_photo_3" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
      
      <div class="row">
        <div class="col-md-8">
          <label>ข้อความ</label>
          <input type="text" class="form-control"name="text3_label_01"  value="<?php echo $page_1[0]['text3_label_01'];?>">
        </div>
        <div class="col-md-4">
          <label>สีพื้นหลังของข้อความ</label>
          <input type="text" class="form-control make_picker" name="text3_label_color_01"  value="<?php echo $page_1[0]['text3_label_color_01'];?>"/><br/>
        </div>
        <div class="col-md-8">
          <label>ข้อความ</label>
          <input type="text" class="form-control"name="text3_label_02"  value="<?php echo $page_1[0]['text3_label_02'];?>">
        </div>
        <div class="col-md-4">
          <label>สีพื้นหลังของข้อความ</label>
          <input type="text" class="form-control make_picker" name="text3_label_color_02"  value="<?php echo $page_1[0]['text3_label_color_02'];?>"/><br/>
        </div>
        <div class="col-md-8">
          <label>ข้อความ</label>
          <input type="text" class="form-control"name="text3_label_03"  value="<?php echo $page_1[0]['text3_label_03'];?>">
        </div>
        <div class="col-md-4">
          <label>สีพื้นหลังของข้อความ</label>
          <input type="text" class="form-control make_picker" name="text3_label_color_03"  value="<?php echo $page_1[0]['text3_label_color_03'];?>"/><br/>
        </div>
      </div>
      <br/>
     <input type="submit" class="btn btn-info" value="บันทึก">
   </div>       
  </form>

  </div>   
</div>
</div>

</body>
</html>
<script>
$(function() {
$('.make_picker').colorpicker({
  format: 'hex'
});
});
</script>
