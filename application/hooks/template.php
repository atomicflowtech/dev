<?
class Template{
	var $CI;
	function Template() {
        $this->CI =& get_instance();
    }
	
	function header() {
		$this->CI->load->view('header_view');
	}
	
	function nav() {
		$this->CI->load->view('nav_view');
	}
	
	function footer() {
		$this->CI->load->view('footer_view');
	}
}
?>