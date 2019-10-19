class ClassicOptions {            
    function getOptions() {         
        $options = get_option('classic_options');            
        if (!is_array($options)) {          
            $options['ashu_logo'] = '';      
            update_option('classic_options', $options);         
        }   
        return $options;      
    }   
    function init() {   
        if(isset($_POST['classic_save'])) {   
            $options = ClassicOptions::getOptions();   
            $options['ashu_logo'] = stripslashes($_POST['ashu_logo']);      
            update_option('classic_options', $options);   
        } else {   
            ClassicOptions::getOptions();         
        }   
        add_theme_page("主题设置", "主题设置", 'edit_themes', basename(__FILE__), array('ClassicOptions', 'display'));         
    }   
    function display() {        
        $options = ClassicOptions::getOptions(); ?>         
        <form method="post" enctype="multipart/form-data" name="classic_form" id="classic_form">         
        <div class="wrap">         
        <h2><?php _e('主题设置'); ?></h2>   
        <p>   
        <label>   
            <input type="text" size="80"  name="ashu_logo" id="ashu_logo" value="<?php echo($options['ashu_logo']); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
        </label>   
        </p>                           
        <p class="submit">    
            <input type="submit" name="classic_save" value="<?php _e('保存设置'); ?>" />         
        </p>         
    </div>         
</form>         
<?php         
    }       
}         
add_action('admin_menu', array('ClassicOptions', 'init')); 
wp_enqueue_script('my-upload', get_bloginfo( 'stylesheet_directory' ) . '/js/upload.js');   
//加载上传图片的js(wp自带)   
wp_enqueue_script('thickbox');   
//加载css(wp自带)   
wp_enqueue_style('thickbox'); 