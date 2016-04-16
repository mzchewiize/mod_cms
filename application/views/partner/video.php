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
   <form method="post" action="<?php echo site_url('backend/submit_video');?>" enctype="multipart/form-data">
   <div class="form-group">
    
  <label>แก้ไขพื้นหลังเมนู Video </label> 
    <div class="">
        <div class="file-preview-thumbnails">
          <div class="file-preview-frame" style="width: 285px;" id="preview-1459598613320-0" data-fileindex="0">
             <img src="<?php echo base_url();?>webroot/upload/<?php echo $page_video[0]['page3_photo_1'];?>" 
              class="file-preview-image" 
              style="width:auto;height:160px;">   
          </div>
        </div>
        <div class="clearfix"></div><div class="file-preview-status text-center text-success"></div>
      <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
    </div>

      <label class="control-label">Select File</label>
      <input id="input-2" name="page3_photo_1" type="file" class="file" data-show-upload="false" data-show-caption="true">
      <br/><br/>
      <hr/>
      <label>เพิ่มแก้ไขลิ้ง Video สูงสุด 15 รายการ</label> 
  
      <div class="row">

        <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text1_text"  value="<?php echo @$page_video[0]['text1_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text1_label"  value="<?php echo @$page_video[0]['text1_label'];?>"/><br/>
        </div>
         <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text2_text"  value="<?php echo @$page_video[0]['text2_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text2_label"  value="<?php echo @$page_video[0]['text2_label'];?>"/><br/>
        </div>
         <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text3_text"  value="<?php echo @$page_video[0]['text3_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text3_label"  value="<?php echo @$page_video[0]['text3_label'];?>"/><br/>
        </div>
         <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text4_text"  value="<?php echo @$page_video[0]['text4_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text4_label"  value="<?php echo @$page_video[0]['text4_label'];?>"/><br/>
        </div>
         <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text5_text"  value="<?php echo @$page_video[0]['text5_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text5_label"  value="<?php echo @$page_video[0]['text5_label'];?>"/><br/>
        </div>
         <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text6_text"  value="<?php echo @$page_video[0]['text6_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text6_label"  value="<?php echo @$page_video[0]['text6_label'];?>"/><br/>
        </div>
         <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text7_text"  value="<?php echo @$page_video[0]['text7_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text7_label"  value="<?php echo @$page_video[0]['text7_label'];?>"/><br/>
        </div>
         <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text8_text"  value="<?php echo @$page_video[0]['text8_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text8_label"  value="<?php echo @$page_video[0]['text8_label'];?>"/><br/>
        </div>
         <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text9_text"  value="<?php echo @$page_video[0]['text9_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text9_label"  value="<?php echo @$page_video[0]['text9_label'];?>"/><br/>
        </div>
       <!--   <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text10_text"  value="<?php echo @$page_video[0]['text10_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text10_label"  value="<?php echo @$page_video[0]['text10_label'];?>"/><br/>
        </div>
          <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text11_text"  value="<?php echo @$page_video[0]['text11_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text11_label"  value="<?php echo @$page_video[0]['text11_label'];?>"/><br/>
        </div>
          <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text12_text"  value="<?php echo @$page_video[0]['text12_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text12_label"  value="<?php echo @$page_video[0]['text12_label'];?>"/><br/>
        </div>
          <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text13_text"  value="<?php echo @$page_video[0]['text13_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text13_label"  value="<?php echo @$page_video[0]['text13_label'];?>"/><br/>
        </div>
          <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text14_text"  value="<?php echo @$page_video[0]['text14_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text14_label"  value="<?php echo @$page_video[0]['text14_label'];?>"/><br/>
        </div>
      <div class="col-md-6">
          <label>หัวข้อ Video </label>
          <input type="text" class="form-control"name="text15_text"  value="<?php echo @$page_video[0]['text15_text'];?>">
        </div>
        <div class="col-md-6">
          <label>Link media</label>
          <input type="text" class="form-control" name="text15_label"  value="<?php echo @$page_video[0]['text15_label'];?>"/><br/>
        </div> -->
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
