<?php 
function mytheme_enqueue_asstes(){
    //load theme stylesheet
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());

    wp_enqueue_script('mytheme-script', get_template_diretory_uri().'/js/script.js', array('jquery'),false,true,);

    
}
?>