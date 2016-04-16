<?php
@session_start(); 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Backend extends CI_Controller {
    var $css = array(
        'webroot/css/my_style.css',
        'webroot/css/bootstrap-theme.min.css',
        'webroot/css/multiple-select.css',
        'webroot/css/jquery-ui.css',
        'webroot/css/bootstrap.min.css',
        'webroot/css/bootstrap-wysihtml5.css',
        'webroot/css/wysiwyg-color.css',
        'webroot/css/flags.css',
        'webroot/css/flexslider.css',
        'webroot/css/timeline.css',
        'webroot/css/sb-admin-2.css',
        'webroot/css/metisMenu.css',
        'webroot/css/pnotify.custom.css',
        'webroot/css/fine-uploader.css',
        'webroot/css/fine-uploader.min.css',
        'webroot/css/fine-uploader-new.css',
        'webroot/css/fine-uploader-gallery.css',
        'webroot/fonts/font-awesome.css',
        'webroot/css/bootstrap-markdown.min.css',
         'webroot/css/bootstrap-colorpicker.css'

    );
    
    var $jscript = array(
        'webroot/js/wysihtml5-0.3.0.js',
        'webroot/js/jquery-1.7.2.min.js',
        'webroot/js/prettify.js',
        'webroot/js/bootstrap.min.js',
        'webroot/js/bootstrap-wysihtml5.js',
        'webroot/js/jquery.flagstrap.js',
        'webroot/js/jquery.validate.js',
        'webroot/js/sb-admin-2.js',
        'webroot/js/metisMenu.js',
        'webroot/js/pnotify.custom.js',
        'webroot/js/bootstrap-wysiwyg.js',
        'webroot/js/bootstrap-markdown.js',
        'webroot/js/jquery.highlight.js',
        'webroot/js/iframe.xss.response.js',
        'webroot/js/fine-uploader.js',
        'webroot/js/fine-uploader.min.js',
          'webroot/js/bootstrap-colorpicker.js'
    );

    var $admin_data = array();

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url','util'));
        $this->load->model('admin_model');
        $this->admin_data = $this->session->userdata('partner');
        $this->root_path =$_SERVER['SERVER_NAME'].'/newsite/';
    }

    public function index($error = '') 
    {
        if(!$this->session->userdata('partner'))
        {
             return redirect('main/login');
        }
    }

    function main_content()
    {
        if(!$this->session->userdata('partner'))
        {
             return redirect('main/login');
        }
        else
        {
            $header['css'] = $this->css;
            $header['jscript'] = $this->jscript;
            $header['header_user'] = $this->admin_data;
            $data = 'htest';
            $this->load->view('template/header', $header);
            $this->load->view('partner/module_photos',$data);
            $this->load->view('template/footer');
        }
    }

    function images_upload($_FILES)
    {
 
        if(!empty($_FILES['name']))
        {
            if(copy($_FILES["tmp_name"],$_SERVER['DOCUMENT_ROOT'].'/newsite/admin/webroot/upload/'.$_FILES["name"]))
            {
                $file_name = $_FILES['name'];
            }
            return $file_name;
        }
    }

    function home()
    {
        if(!$this->session->userdata('partner'))
        {
             return redirect('main/login');
        }
        else
        {
            $header['css'] = $this->css;
            $header['jscript'] = $this->jscript;
            $header['header_user'] = $this->admin_data;
            $data['page_1'] =  $this->admin_model->get_where_data(array('id' => 1),'home'); 
           
       
            $this->load->view('template/header', $header);
            $this->load->view('partner/home',$data);
            $this->load->view('template/footer');
        }
    }
    function submit_home()
    {
        $images = array();
          
        $home_content =  $this->admin_model->get_where_data(array('id' => 1),'home'); 
       
           
        foreach($_FILES as $photos) 
        {   
            $file_name = $this->images_upload($photos);
            $images[] = $file_name;
        }

        $page1_photo_1 = ($images[0] ? $images[0]:$home_content[0]['page1_photo_1']);
        $page1_photo_2 = ($images[1] ? $images[1]:$home_content[0]['page1_photo_2']);
        $page1_photo_3 = ($images[2] ? $images[2]:$home_content[0]['page1_photo_2']);
      
        $a_set_data = array(
            'page1_photo_1' => $page1_photo_1,
            'page1_photo_2' => $page1_photo_2,
            'page1_photo_3' => $page1_photo_3,
            'text1_label_01' => $this->input->post('text1_label_01'),
            'text1_label_color_01' => $this->input->post('text1_label_color_01'),
            'text1_label_02' => $this->input->post('text1_label_02'),
            'text1_label_color_02' => $this->input->post('text1_label_color_02'),
            'text1_label_03' => $this->input->post('text1_label_03'),
            'text1_label_color_03' => $this->input->post('text1_label_color_03'),
            'text2_label_01' => $this->input->post('text2_label_01'),
            'text2_label_color_01' => $this->input->post('text2_label_color_01'),
            'text2_label_02' => $this->input->post('text2_label_02'),
            'text2_label_color_02' => $this->input->post('text2_label_color_02'),
            'text2_label_03' => $this->input->post('text2_label_03'),
            'text2_label_color_03' => $this->input->post('text2_label_color_03'),
            'text3_label_01' => $this->input->post('text3_label_01'),
            'text3_label_color_01' => $this->input->post('text3_label_color_01'),
            'text3_label_02' => $this->input->post('text3_label_02'),
            'text3_label_color_02' => $this->input->post('text3_label_color_02'),
            'text3_label_03' => $this->input->post('text3_label_03'),
            'text3_label_color_03' => $this->input->post('text3_label_color_03')
        );

        $update_data = $this->admin_model->update_data($a_set_data, 'home', array('id' => 1));
       
        $file_arrays = '{
            "setting":
            {
                "duration":5,
                "hideTipsWhenUsingDevice":true
            },
            "data":
            [
                {
                    "imageurl":"http://'.$this->root_path.'admin/webroot/upload/'.$page1_photo_1.',
                    "deviceImageurl":"http://'.$this->root_path.'admin/webroot/upload/'.@$page1_photo_1.',
                    "imageAlign":"ct",
                    "x":100,
                    "y":250,
                    "align":"left,top",
                    "deviceX":50,
                    "deviceY":450,
                    "deviceAlign":"left,bottom",
                    "gap":5,
                    "text":
                    [
                        {
                            "title": '.@$this->input->post('text1_label_01').',
                            "bgColor": '.@$this->input->post('text1_label_color_01').',
                            "bgAlpha":0.9,
                            "fontSize":30,
                            "textColor":"0xffffff",
                            "textWidth":450
                        },
                        {
                            "title": '.@$this->input->post('text1_label_02').',
                            "bgColor":'.@$this->input->post('text1_label_color_02').',
                            "bgAlpha":0.9,
                            "fontSize":18,
                            "textColor":"0x121212",
                            "textWidth":450
                        },
                        {
                            "title": '.@$this->input->post('text1_label_03').',
                            "bgColor": '.@$this->input->post('text1_label_color_03').',
                            "bgAlpha":0.9,
                            "fontSize":18,
                            "textColor":"0xffffff",
                            "textWidth":350
                        }
                    ]
                },
                {
                    "imageurl":"http://'.$this->root_path.'admin/webroot/upload/'.@$page1_photo_2.',
                    "deviceImageurl":"http://'.$this->root_path.'admin/webroot/upload/'.@$page1_photo_2.',
                    "imageAlign":"ct",
                    "x":100,
                    "y":200,
                    "align":"right,top",
                    "deviceX":50,
                    "deviceY":450,
                    "deviceAlign":"left,bottom",
                    "gap":5,
                    "text":
                    [
                        {
                            "title": '.@$this->input->post('text2_label_01').',
                            "bgColor": '.@$this->input->post('text2_label_color_01').',
                            "link":"gallery-style3",
                            "bgAlpha":0.95,
                            "fontSize":30,
                            "textColor":"0xffffff",
                            "textWidth":450
                        },
                        {
                            "title": '.@$this->input->post('text2_label_02').',
                            "bgColor": '.@$this->input->post('text2_label_color_02').',
                            "bgAlpha":0.95,
                            "fontSize":18,
                            "textColor":"0xffffff",
                            "textWidth":370
                        },
                        {
                            "title": '.@$this->input->post('text2_label_03').',
                            "bgColor": '.@$this->input->post('text2_label_color_03').',
                            "bgAlpha":0.95,
                            "fontSize":18,
                            "textColor":"0x121212",
                            "textWidth":400
                        }
                    ]
                },
                {
                    "imageurl":"http://'.$this->root_path.'admin/webroot/upload/'.@$page1_photo_3.',
                    "deviceImageurl":"http://'.$this->root_path.'admin/webroot/upload/'.@$page1_photo_3.',
                    "imageAlign":"ct",
                    "x":50,
                    "y":200,
                    "align":"right,top",
                    "deviceX":50,
                    "deviceY":450,
                    "deviceAlign":"left,bottom",
                    "gap":5,
                    "text":
                        [
                            {
                            "title": '.@$this->input->post('text3_label_01').',
                            "bgColor": '.@$this->input->post('text3_label_color_01').',
                            "link":"gallery-style3",
                            "bgAlpha":0.95,
                            "fontSize":30,
                            "textColor":"0xffffff",
                            "textWidth":450
                            },
                            {
                                "title": '.@$this->input->post('text3_label_02').',
                                "bgColor": '.@$this->input->post('text3_label_color_02').',
                                "bgAlpha":0.95,
                                "fontSize":18,
                                "textColor":"0xffffff",
                                "textWidth":370
                            },
                            {
                                "title": '.@$this->input->post('text3_label_03').',
                                "bgColor": '.@$this->input->post('text3_label_color_03').',
                                "bgAlpha":0.95,
                                "fontSize":18,
                                "textColor":"0x121212",
                                "textWidth":400
                            }
                        ]
                    }
                ]
            }
        ';
   
        $fp = fopen('../data/json/slideshow.json', 'w');
        fwrite($fp, $file_arrays);
        fclose($fp);
        
        if($update_data)
        {
             echo "<script>
                alert('Content has been updated');
                window.location.href='home';
            </script>";
        }

    }
    
    function add_item_new()
    {
        $add_new_item = array('item_name' => $this->input->get('pcode_value'));
        $this->admin_model->insert_data($add_new_item, $this->input->get('table'));;
        redirect("backend/".$this->input->get('reload_page'));
    }

    function add_photo_album()
    {
        $album_id = $this->uri->segment(3);

        $header['css'] = $this->css;
        $header['jscript'] = $this->jscript;
        $header['header_user'] = $this->admin_data;
        $data['photos'] = $this->admin_model->get_where_data(array('ref_code' => $album_id),'item_image');
        $this->load->view('template/header', $header);
        $this->load->view('partner/partner_content_add', $data);
        $this->load->view('template/footer');
    }

    function photo()
    {
        if(!$this->session->userdata('partner'))
        {
             return redirect('main/login');
        }
        else
        {

            $header['css'] = $this->css;
            $header['jscript'] = $this->jscript;
            $header['header_user'] = $this->admin_data;
            $data['partner_content'] =  $this->admin_model->get_where_data(array(),'item_type');
            
            $this->regenerate_menu();
           
            $this->load->view('template/header', $header);
            $this->load->view('partner/partner_content',$data);
            $this->load->view('template/footer');
        }
    }

    private function regenerate_menu()
    {
        @$partner_content =  $this->admin_model->get_where_data(array(),'item_type');
     
        foreach($partner_content as $pid)
        {
            @$all_images[$pid['item_name']] = $this->admin_model->get_where_data(
                    array('ref_code' => $pid['item_id']),'item_image');
        }
      
        $count=0;
        if(!empty($all_images))
        {
             foreach($all_images as $key => $value)
        {
             $grades[] = array(
                'id' => $key,
                'name' => $key,
                'src' =>  'data/json/gallery/gallery-'.$count.'.json',
                'bg'   => 'data/images/bg/bg.jpg',
                'bgCoverAlpha'=>  0.9,
                'module' =>  'gallery'
            ); 

            foreach($value as $image_s)
            {
                 @$photo_in_album[$count][] = array(
                    "title" => $key,
                    "thumburl" => "http://".$this->root_path."admin/webroot/files/".$image_s['uuid'].'/'.$image_s['image'],
                    "imageurl" => "http://".$this->root_path."admin/webroot/files/".$image_s['uuid'].'/'.$image_s['image'],
                    "thumbWidth" => 450
                );
            }        

            $to_array_s = array(@$photo_in_album);
            $myString_s = json_encode($to_array_s); 
            $myString_s = str_replace("\/","/",$myString_s);
            $myString_s = str_replace('"','\\"',$myString_s);
            $myString_s = str_replace('[','',$myString_s);
            $myString_s = str_replace(']','',$myString_s);
         
            $gallery = '{
                    "setting":
                    {
                        "gap":1,
                        "duration":8,
                        "thumbHeight":300,
                        "textWidth":1152,
                        "isZoomIn":true,
                        "autoPlay":true,
                        "isVerticalFit":false,
                        "needHomeButton":true,
                        "needDownloadButton":true,
                        "needInfoButton":true,
                        "needPinterestButton":true,
                        "showTip":true,
                        "tipOverAlpha":0.9,
                        "tipOutAlpha":0.9,
                        "tipType":2,
                        "tipOffsetX":10,
                        "tipBgAlpha":1,
                        "tipBgColor":"0x212121",
                        "tipTitleColor":"0xffffff",
                        "tipTitleFontSize":18,
                        "isBlur":true
                    },

                    "data":
                    [
                        '.$myString_s.'
                    ]
                }';
             
             $tmp_file_s = '../data/json/gallery/gallery-'.$count.'.json';
             $fs_s = fopen($tmp_file_s, 'w');
             fwrite($fs_s, $gallery);
             fclose($fs_s);
            
            $count++;
        }

      
       
     
        $to_array = array($grades);
        $myString = json_encode($to_array); 
        $myString = str_replace("\/","/",$myString);
        $myString = str_replace('"','\\"',$myString);
        $myString = str_replace('[[','',$myString);
        $myString = str_replace(']]','',$myString);
     
        $menu_array = '{
            "data":
            [
                {
                    "id":"home",
                    "name":"HOME",
                    "src":"data/json/slideshow.json",
                    "bg":"data/images/bg/bg.jpg",
                    "module":"slideshow"
                },
                {
                    "id": "gallery",
                    "name": "PHOTOS",
                    "childmenus":
                    [
                        '.$myString.'
                    ]
                },
                {
                 
                    "id":"videos",
                    "name":"VIDEOS",
                    "src":"data/json/portfolio/portfolio-1-row.json",
                    "bg":"https://scontent.fbkk5-3.fna.fbcdn.net/hphotos-xpt1/v/t1.0-9/10522765_552816308163976_6344434715902621027_n.jpg?oh=77a8a0d362d114358280d7a407b31d9e&oe=57B3E86F",
                    "bgCoverAlpha":0.3,
                    "module":"portfolio"
                 },
                {
                  "id":"download",
                  "name":"DOWNLOAD",
                  "src":"data/json/team.json",
                  "bg":"https://scontent.fbkk5-3.fna.fbcdn.net/hphotos-xfa1/v/l/t1.0-9/11212756_676225889156350_8379377158316746617_n.jpg?oh=d740d150d38ef124d4518ea710cbfa0b&oe=57BDA4E6",
                  "bgCoverAlpha":0.8,
                  "module":"team"
                },
                 {
                    "id":"about",
                    "name":"ABOUT-US",
                    "src":"data/json/about.json",
                    "bg":"https://scontent.fbkk5-3.fna.fbcdn.net/hphotos-xpf1/v/t1.0-9/996733_379394918839450_1798553459_n.jpg?oh=b33573863ad19d39a4af17ce2f9191af&oe=577D33D3",
                    "bgCoverAlpha":0.3,
                    "module":"about"
                },
                 {
                    "id":"contact",
                    "name":"CONTACT",
                    "src":"data/json/contact.json",
                    "bg":"https://scontent.fbkk5-3.fna.fbcdn.net/hphotos-xfa1/v/t1.0-9/1001640_379395905506018_1204204467_n.jpg?oh=e09ff2ce1e2e548d09c1697f8aaf9b57&oe=5779AE2E",
                    "bgCoverAlpha":0.3,
                    "module":"contact"
                }
            ]
        }';



     $tmp_file = '../data/json/menu.json';
     $fs = fopen($tmp_file, 'w');
     fwrite($fs, $menu_array);
     fclose($fs);
        }
       
    }

    function video()
    {
        if(!$this->session->userdata('partner'))
        {
             return redirect('main/login');
        }
        else
        {

            $header['css'] = $this->css;
            $header['jscript'] = $this->jscript;
            $header['header_user'] = $this->admin_data;
            $data['page_video'] =  $this->admin_model->get_where_data(array('id' => 1),'videos'); 
           
            $this->load->view('template/header', $header);
            $this->load->view('partner/video',$data);
            $this->load->view('template/footer');
        }
    }

    function submit_video()
    {
        //update file menu.json
        //update video.json
      $images = array();
          
        $video_content =  $this->admin_model->get_where_data(array('id' => 1),'videos'); 
       
           
        foreach($_FILES as $photos) 
        {   
            $file_name = $this->images_upload($photos);
            $images[] = $file_name;
        }

        $page3_photo_1 = ($images[0] ? $images[0]:$video_content[0]['page3_photo_1']);
      
        $a_set_data = array(
            'page3_photo_1' => $page3_photo_1,
            'text1_label' => @$this->input->post('text1_label'),
            'text1_text' => @$this->input->post('text1_text'),
            'text2_text' => @$this->input->post('text2_text'),
            'text2_label' => @$this->input->post('text2_label'),
            'text3_text' => @$this->input->post('text3_text'),
            'text3_label' => @$this->input->post('text3_label'),
            'text4_text' => @$this->input->post('text4_text'),
            'text4_label' => @$this->input->post('text4_label'),
            'text5_text' => @$this->input->post('text5_text'),
            'text5_label' => @$this->input->post('text5_label'),
            'text6_text' => @$this->input->post('text6_text'),
            'text6_label' => @$this->input->post('text6_label'),
            'text7_text' => @$this->input->post('text7_text'),
            'text7_label' => @$this->input->post('text7_label'),
            'text8_text' => @$this->input->post('text8_text'),
            'text8_label' => @$this->input->post('text8_label'),
            'text9_text' => @$this->input->post('text9_text'),
            'text9_label' => @$this->input->post('text9_label'),
            'text10_text' => @$this->input->post('text10_text'),
            'text10_label' => @$this->input->post('text10_label'),
            'text11_text' => @$this->input->post('text11_text'),
            'text11_label' => @$this->input->post('text11_label'),
            'text12_text' => @$this->input->post('text12_text'),
            'text12_label' => @$this->input->post('text12_label'),
            'text13_text' => @$this->input->post('text13_text'),
            'text13_label' => @$this->input->post('text13_label'),
            'text14_text' => @$this->input->post('text14_text'),
            'text14_label' => @$this->input->post('text14_label'),
            'text15_text' => @$this->input->post('text15_text'),
            'text15_label' => @$this->input->post('text15_label')
        );

        $update_data = $this->admin_model->update_data($a_set_data, 'videos', array('id' => 1));
        
        if($this->input->post('text1_label') && $this->input->post('text1_text') !="")
        {
            if($this->input->post('text1_label')!="")
            {
              $v_youtube_1 = $this->explode_youtube($this->input->post('text1_label'));    
            }
            $phase_1 = 
                    '                 
                        "title":"'.@$this->input->post('text1_text').'",
                        "thumburl":"http://img.youtube.com/vi/'.$v_youtube_1.'/hqdefault.jpg",
                        "videoWidth":1018,
                        "videoHeight":573,
                        "videourl":"'.@$this->input->post('text1_label').'",
                        "videoType":"youtube"
                    ';
        }
        
        if($this->input->post('text2_label') && $this->input->post('text2_text') !="")
        {
            if($this->input->post('text2_label')!="")
            {
              $v_youtube_2 = $this->explode_youtube($this->input->post('text2_label'));    
            }
             $phase_2 = 
                    '                  
                        "title":"'.@$this->input->post('text2_text').'",
                        "thumburl":"http://img.youtube.com/vi/'.$v_youtube_2.'/hqdefault.jpg",
                        "videoWidth":1018,
                        "videoHeight":573,
                        "videourl":"'.@$this->input->post('text2_label').'",
                        "videoType":"youtube"
                    ';
        }

        if($this->input->post('text3_label') && $this->input->post('text3_text') !="")
        {
            if($this->input->post('text3_label')!="")
            {
              $v_youtube_3 = $this->explode_youtube($this->input->post('text3_label'));    
            }
            $phase_3 = 
                    '                 
                        "title":"'.@$this->input->post('text3_text').'",
                        "thumburl":"http://img.youtube.com/vi/'.$v_youtube_3.'/hqdefault.jpg",
                        "videoWidth":1018,
                        "videoHeight":573,
                        "videourl":"'.@$this->input->post('text3_label').'",
                        "videoType":"youtube"
                    ';
        }   
        if($this->input->post('text4_label') && $this->input->post('text4_text') !="")
        {
            if($this->input->post('text4_label')!="")
            {
              $v_youtube_4 = $this->explode_youtube($this->input->post('text4_label'));    
            } 
            $phase_4 = 
                    '                  
                        "title":"'.@$this->input->post('text4_text').'",
                        "thumburl":"http://img.youtube.com/vi/'.$v_youtube_4.'/hqdefault.jpg",
                        "videoWidth":1018,
                        "videoHeight":573,
                        "videourl":"'.@$this->input->post('text4_label').'",
                        "videoType":"youtube"
                    ';
        }   
        if($this->input->post('text5_label') && $this->input->post('text5_text') !="")
        {
           if($this->input->post('text5_label')!="")
            {
              $v_youtube_5 = $this->explode_youtube($this->input->post('text5_label'));    
            } 
            $phase_5 = 
                    '                  
                        "title":"'.@$this->input->post('text1_text').'",
                        "thumburl":"http://img.youtube.com/vi/'.$v_youtube_5.'/hqdefault.jpg",
                        "videoWidth":1018,
                        "videoHeight":573,
                        "videourl":"'.@$this->input->post('text5_label').'",
                        "videoType":"youtube"
                    ';
        }   
        if($this->input->post('text6_label') && $this->input->post('text6_text') !="")
        {
            $v_youtube_6 = $this->explode_youtube($this->input->post('text6_label'));
            $phase_6 = 
                    '                  
                        "title":"'.@$this->input->post('text6_text').'",
                        "thumburl":"http://img.youtube.com/vi/'.$v_youtube_6.'/hqdefault.jpg",
                        "videoWidth":1018,
                        "videoHeight":573,
                        "videourl":"'.@$this->input->post('text6_label').'",
                        "videoType":"youtube"
                    ';
        }   
        if($this->input->post('text7_label') && $this->input->post('text7_text') !="")
        {
            $v_youtube_7 = $this->explode_youtube($this->input->post('text7_label'));
            $phase_7 = 
                    '                  
                        "title":"'.@$this->input->post('text7_text').'",
                        "thumburl":"http://img.youtube.com/vi/'.$v_youtube_7.'/hqdefault.jpg",
                        "videoWidth":1018,
                        "videoHeight":573,
                        "videourl":"'.@$this->input->post('text7_label').'",
                        "videoType":"youtube"
                    ';
        }   
        if($this->input->post('text8_label') && $this->input->post('text8_text') !="")
        {
            $v_youtube_8 = $this->explode_youtube($this->input->post('text8_label'));
            $phase_8 = 
                    '                
                        "title":"'.@$this->input->post('text8_text').'",
                        "thumburl":"http://img.youtube.com/vi/'.$v_youtube_8.'/hqdefault.jpg",
                        "videoWidth":1018,
                        "videoHeight":573,
                        "videourl":"'.@$this->input->post('text8_label').'",
                        "videoType":"youtube"
                    ';
        }   
        if($this->input->post('text9_label') && $this->input->post('text9_text') !="")
        {
            $v_youtube_9 = $this->explode_youtube($this->input->post('text9_label'));
            $phase_9 = 
                    '                  
                        "title":"'.@$this->input->post('text9_text').'",
                        "thumburl":"http://img.youtube.com/vi/'.$v_youtube_9.'/hqdefault.jpg",
                        "videoWidth":1018,
                        "videoHeight":573,
                        "videourl":"'.@$this->input->post('text9_label').'",
                        "videoType":"youtube"
                    ';
        }   
       
        $count=0;
           
            $video_array ='
            {
                "setting":
                {
                    "gap":30,
                    "thumbWidth":350,
                    "thumbHeight":350,
                    "row":1,
                    "useShadow":true,
                    "showTips":false,
                    "deviceShowTips":true,
                    "readMoreLabel":"WATCH VIDEO"
                },

                "data":
                [   
                    {
                        '.$phase_1.'
                    },
                    {
                        '.$phase_2.'
                    },
                    {
                        '.$phase_3.'
                    },
                    {
                        '.$phase_4.'
                    },
                    {
                        '.$phase_5.'
                    },
                    {
                        '.$phase_6.'
                    },
                    {
                        '.$phase_7.'
                    },
                    {
                        '.$phase_8.'
                    },
                    {
                        '.$phase_9.'
                    }
                ]
            }
            ';
                 $tmp_file = '../data/json/portfolio/portfolio-1-row.json';
                 $fs = fopen($tmp_file, 'w');
                 fwrite($fs, $video_array);
                 fclose($fs);
    
        if($update_data)
        {
             echo "<script>
                alert('Content has been updated');
                window.location.href='video';
            </script>";
        }
        else
        {
              echo "<script>
                window.location.href='video';
            </script>";
        }


    }

    private function explode_youtube($url)
    {
         $output = explode('?v=',$url);
         return $output[1];
     }
    function download()
    {
         if(!$this->session->userdata('partner'))
        {
             return redirect('main/login');
        }
        else
        {

            $header['css'] = $this->css;
            $header['jscript'] = $this->jscript;
            $header['header_user'] = $this->admin_data;
            $data['page_download'] =  $this->admin_model->get_where_data(array('id' => 1),'download'); 
        
            $this->load->view('template/header', $header);
            $this->load->view('partner/download',$data);
            $this->load->view('template/footer');
        }
    }

    function submit_download()
    {
      $images = array();
        
        foreach($_FILES as $photos) 
        {   
            $file_name = $this->images_upload($photos);
            $images[] = $file_name;
        }
       
        $home_content =  $this->admin_model->get_where_data(array('id' => 1),'download'); 
        $a_set_data = array(
            // 'page4_photo_1' => ($images[0] ? $images[0]:$home_content[0]['page4_photo_1']),
            // 'page4_photo_2' =>  ($images[1] ? $images[1]:$home_content[0]['page4_photo_2']),
             'page4_file_2' =>  ($images[0] ? $images[0]:$home_content[0]['page4_file_2']),
            //'page4_photo_3' => ($images[3] ? $images[3]:$home_content[0]['page4_photo_3']),
            'page4_file_3' =>  ($images[1] ? $images[1]:$home_content[0]['page4_file_3']),
           // 'page4_photo_4' => ($images[5] ? $images[5]:$home_content[0]['page4_photo_4']),
            'page4_file_4' => ($images[2] ? $images[2]:$home_content[0]['page4_file_4']),
            //'page4_photo_5' => ($images[7] ? $images[7]:$home_content[0]['page4_photo_5']),
            'page4_file_5' => ($images[3] ? $images[3]:$home_content[0]['page4_file_5']),
            //'page4_photo_6' => ($images[9] ? $images[9]:$home_content[0]['page4_photo_6']),
            //'page4_file_6' => $this->input->post('page4_file_6'),
            //'page4_photo_7' => ($images[10] ? $images[10]:$home_content[0]['page4_photo_7']),
            //'page4_file_7' => $this->input->post('page4_file_7'),
              
        );
        $update_data = $this->admin_model->update_data($a_set_data, 'download', array('id' => 1));
        // get content after update
        $home_content_up =  $this->admin_model->get_where_data(array('id' => 1),'download'); 
        
        $download_array ='{
                "setting":
                {
                    "itemWidth":700,
                    "itemHeight":50,
                    "gap":25,
                    "moreLabel":"Click",

                    "imageWidth":300,
                    "imageHeight":300
                },

                "data":
                [
                    {
                        "name":"กฏกติกาการแข่งขัน MEGA CREW",
                        "preview":"<a href=\'http://'.$this->root_path.'admin/webroot/upload/'.$home_content_up[0]['page4_file_2'].'\'>Download</a>",
                        "description":"<a href=\'http://'.$this->root_path.'admin/webroot/upload/'.$home_content_up[0]['page4_file_2'].'\'>Download</a>",
                        "imageurl":"http://www.hhithailand.com/admin/webroot/upload/megacrew.png"
                    },
                    {
                        "name":"กฏกติกาการแข่งขันประเภททีม CREW PERFORMANCE RULE",
                        "preview":"<a href=\'http://'.$this->root_path.'admin/webroot/upload/'.$home_content_up[0]['page4_file_3'].'\'>Download</a>",
                        "description":"<a href=\'http://'.$this->root_path.'admin/webroot/upload/'.$home_content_up[0]['page4_file_3'].'\'>Download</a>",
                        "imageurl":"http://www.hhithailand.com/admin/webroot/upload/crew.jpg"
                    },
                    {
                        "name":"FORM REGISTER TEAM & MEGE CREW",
                        "preview":"<a href=\'http://'.$this->root_path.'admin/webroot/upload/'.$home_content_up[0]['page4_file_4'].'\'>Download</a>",
                        "description":"<a href=\'http://'.$this->root_path.'admin/webroot/upload/'.$home_content_up[0]['page4_file_4'].'\'>Download</a>",
                        "imageurl":"http://www.hhithailand.com/admin/webroot/upload/regis.png"
                    },
                    {
                        "name":"MEGA CREW REGISTER FORM ",
                        "preview":"<a href=\'http://'.$this->root_path.'admin/webroot/upload/'.$home_content_up[0]['page4_file_5'].'\'>Download</a>",
                        "description":"<a href=\'http://'.$this->root_path.'admin/webroot/upload/'.$home_content_up[0]['page4_file_5'].'\'>Download</a>",
                         "imageurl":"http://www.hhithailand.com/admin/webroot/upload/mega.png"
                    }
                ]
            }';
             $tmp_file = '../data/json/team.json';
             $fs = fopen($tmp_file, 'w');
             fwrite($fs, $download_array);
             fclose($fs);


        if($update_data)
        {
             echo "<script>
                alert('Content has been updated');
                window.location.href='download';
            </script>";
        }
        else
        {
            echo "<script>
                window.location.href='download';
            </script>";
        }
    }



    function aboutus()
    {
         if(!$this->session->userdata('partner'))
        {
             return redirect('main/login');
        }
        else
        {

            $header['css'] = $this->css;
            $header['jscript'] = $this->jscript;
            $header['header_user'] = $this->admin_data;
       
            $this->load->view('template/header', $header);
            $this->load->view('partner/module_photos');
            $this->load->view('template/footer');
        }
    }

    function contactus()
    {
         if(!$this->session->userdata('partner'))
        {
             return redirect('main/login');
        }
        else
        {

            $header['css'] = $this->css;
            $header['jscript'] = $this->jscript;
            $header['header_user'] = $this->admin_data;
       
            $this->load->view('template/header', $header);
            $this->load->view('partner/module_photos');
            $this->load->view('template/footer');
        }
    }


    function set_cover()
    {
        #clear all cover by ref_code 
        $this->admin_model->Update_data(array('cover'=> 0), 'item_image', array('ref_code' => $this->input->GET('ref_code')));
        #then set cover status by image_item_id
        $this->admin_model->Update_data(array('cover'=> 1), 'item_image', array('item_image_id' => $this->input->GET('id')));        
    }
    
    function submit_removed_content()
    {
        //find all images in this album
        $all_images = $this->admin_model->get_where_data(array('ref_code' => $this->input->get('id')),'item_image');
        //unlink all images
        foreach ($all_images as $images)
        {
            unlink(realpath('admin/webroot/files/'.$images['uuid'].'/'.$images['image']));
        }

        // remove images in album
        $this->admin_model->delete_data(array('ref_code' => $this->input->get('id')), 'item_image');
        // remove album name
        $this->admin_model->delete_data(array('item_id' => $this->input->get('id')), 'item_type');
    }

  
    function manual_delete_photo()
    { 
        unlink(realpath('admin/webroot/files/'.$this->input->get('uuid').'/'.$this->input->get('image')));
        $this->admin_model->delete_data(array('item_image_id' => $this->input->get('id')), 'item_image');        
    }

    function photos()
    {
         if(!$this->session->userdata('partner'))
        {
             return redirect('main/login');
        }
        else
        {

            $header['css'] = $this->css;
            $header['jscript'] = $this->jscript;
            $header['header_user'] = $this->admin_data;
       
            $this->load->view('template/header', $header);
            $this->load->view('partner/module_photos');
            $this->load->view('template/footer');
        }
    }

}