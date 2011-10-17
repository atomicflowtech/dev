<?
class Template{
	var $CI;
	function Template() {
        $this->CI =& get_instance();
    }
	
	function header() {
		$this->CI->load->view('template/header_view');
	}
	
	function nav() {
		$this->CI->load->view('template/nav_view');
	}
	
	function footer() {
		$this->CI->load->view('template/footer_view');
	}
}
?>