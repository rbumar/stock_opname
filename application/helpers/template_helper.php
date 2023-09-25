<?php 

if (!function_exists('load_template')) {
    function load_template($view, $data = []) {
        $CI =& get_instance();
        $CI->load->view('layout', ['content_view' => $view, 'data' => $data]);
    }
}

?>