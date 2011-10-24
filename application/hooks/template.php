<?php
class Template{
	var $CI;
	function Template() {
        $this->CI =& get_instance();
    }
	
	function head() {
		$this->CI->load->library('parser');
		$data = array(
            'page_title' => 'AtomicFlow Creative Tech Dev Site',
            'page_description' => 'The Official Development Site of AtomicFlow'
            );
		$this->CI->parser->parse('template/header_view', $data);
	}
	
	function header() {
		$this->CI->load->view('template/nav_view');
	}
	
	function footer() {
		$this->CI->load->view('template/footer_view');
	}
}
?>