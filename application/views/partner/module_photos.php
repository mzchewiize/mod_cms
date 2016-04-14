      <div id="wrapper">
   <?php $this->load->view('subview/sidebar'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                      <div class="row" style="margin-top:50px;">
                         <h3 class="page-header" style="margin-top:-10px">Define content infomation<br/>
                        <small>A description of your space displayed on your public page.</small>
                         </h3>
                     </div>
                 </div>
            </div>
    <form method="post" action="<?php echo site_url('wizcationpartner/submit_information');?>" role="form" id="infoProfile"  enctype="multipart/form-data">
   
   <div class="row">
            <label>Add a photo</label> <span>Guests love photos that highlight the features of your space.</span>
            <div class="col-lg-12">
        <script type="text/template" id="qq-simple-thumbnails-template">
        <div class="qq-uploader-selector qq-uploader qq-gallery" qq-drop-area-text="Drop files here">
            <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
            </div>
            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                <span class="qq-upload-drop-area-text-selector"></span>
            </div>
            <div class="qq-upload-button-selector qq-upload-button">
                <div>Upload a file</div>
            </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
            <ul class="qq-upload-list-selector qq-upload-list" role="region" aria-live="polite" aria-relevant="additions removals">
                <li>
                    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                    <div class="qq-progress-bar-container-selector qq-progress-bar-container">
                        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                    </div>
                    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                    <div class="qq-thumbnail-wrapper">
                        <img class="qq-thumbnail-selector" qq-max-size="120" qq-server-scale>
                    </div>
                    <button type="button" class="qq-upload-cancel-selector qq-upload-cancel">X</button>
                    <button type="button" class="qq-upload-retry-selector qq-upload-retry">
                        <span class="qq-btn qq-retry-icon" aria-label="Retry"></span>
                        Retry
                    </button>

                    <div class="qq-file-info">
                        <div class="qq-file-name">
                            <span class="qq-upload-file-selector qq-upload-file"></span>
                            <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                        </div>
                        <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                        <span class="qq-upload-size-selector qq-upload-size"></span>
                        <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">
                            <span class="qq-btn qq-delete-icon" aria-label="Delete"></span>
                        </button>
                        <button type="button" class="qq-btn qq-upload-pause-selector qq-upload-pause">
                            <span class="qq-btn qq-pause-icon" aria-label="Pause"></span>
                        </button>
                        <button type="button" class="qq-btn qq-upload-continue-selector qq-upload-continue">
                            <span class="qq-btn qq-continue-icon" aria-label="Continue"></span>
                        </button>
                    </div>
                </li>
            </ul>

            <dialog class="qq-alert-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Close</button>
                </div>
            </dialog>

            <dialog class="qq-confirm-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">No</button>
                    <button type="button" class="qq-ok-button-selector">Yes</button>
                </div>
            </dialog>

            <dialog class="qq-prompt-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <input type="text">
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Cancel</button>
                    <button type="button" class="qq-ok-button-selector">Ok</button>
                </div>
            </dialog>
        </div>
    </script>
      <div id="fine-uploader-gallery"></div>
            </div>
        </div>   
        <br/><br/>
            
        <div class="clearfix"></div>
        <input type="submit" class="btn btn-primary" value="Save">
        <input type="button" class="btn btn-danger" value="Cancel">
        <br/><br/>
        </form>

               </div>   </div>
    </div>
    
</body>
</html>
  <script>
    $(document).ready(function(){
        $('#content_discount').on('change',function(){
            var price = $('#content_price').val();
            var content_discount = $(this).val()/100;
            var percent = price * content_discount;
            var price_after_discount = price - percent;
            $("#content_price_discount").val(Math.floor(price_after_discount));
        });
    });

    var property_code = $('#property_code').val();
    var ref_code = $('#ref_code').val();
    var galleryUploader = new qq.FineUploader({
        element: document.getElementById("fine-uploader-gallery"),      
        template: 'qq-simple-thumbnails-template',
        request: {
            endpoint: '../../webroot/endpoint.php?property_code='+property_code+'&ref_code='+ref_code
        },
        thumbnails: {
            placeholders: {
                waitingPath: '../../webroot/placeholders/waiting-generic.png',
                notAvailablePath: '../../webroot/placeholders/not_available-generic.png'
            }
        },
        deleteFile: {
            enabled: true,
            method: "DELETE",
            endpoint: '../../webroot/endpoint.php'
        },
        cors: {
            expected: true
        },
        chunking: {
            enabled: true
        },
        resume: {
            enabled: true
        },
        validation: {
            itemLimit: 5,
            sizeLimit: 15000000
        },
        forceMultipart: {
            enabled: true
        },
        validation: {
            allowedExtensions: ['jpeg', 'jpg', 'gif', 'png']
        },
        failedUploadTextDisplay: {
            mode: 'default',
            responseProperty: 'error',
        }
    });
 </script>