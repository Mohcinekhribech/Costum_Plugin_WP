<?php
/*
 * Plugin Name: Feedback
 * Author:    Mohcine
 */
 function  feedbackForm(){
    $content = '
    <script src="https://cdn.tailwindcss.com"></script>
    <form method="post">
    <label>Note (0 - 5)</label>
    <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-500  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="Note" placeholder="Note" type="number" min=0 max=5>
    <label>Remarque</label>
    <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-500  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="Remarque" placeholder="Remarque" type="text">
    <input class="appearance-none block  bg-gray-50 text-gray-700 border border-gray-500 w-[100px] rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="submit">
    </form>';
    return $content;
 }
 function test(){
     global $wpdb;
     if(isset($_POST['Note'])&&isset($_POST['Remarque'])){
        $table = $wpdb->prefix .'feedback';
        $data = array(
        'Note'=>$_POST['Note'],
        'Remarque'=>$_POST['Remarque']
     );
     $wpdb->insert($table,$data);
     }
     
 }
 add_shortcode('feedback','feedbackForm');
 add_action('wp_head','test');
 
function database_creation(){
    global $wpdb;
    $feedback = $wpdb->prefix .'feedback';
    $charset = $wpdb->get_charset_collate;
    $feedback_det = "CREATE TABLE ".$feedback."(
        feedbackId int not null auto_increment primary key,
        Note int,
        Remarque varchar(250)
    ) $charset;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($feedback_det);   
}
register_activation_hook(__FILE__,'database_creation');