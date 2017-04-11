<?php
class Pagination{
	public $_config = array(
		// initialize $_config
        'current_page'  => 1, 
        'total_record'  => 1, 
        'total_page'    => 1, 
        'limit'         => 10, // number of news on a page
        'start'         => 0, 
        'link_full'     => '',// Link full in format of .../page={page}
        'link_first'    => '',// Link of the first page
    );

  	/*
     * Initialize attribute for pagination
     */
    function init($config = array())
    {
    	if($config['current_page']>0){
			$this->_config['current_page'] = $config['current_page'];

    	}
		$this->_config['total_record'] = $config['total_record'];
		$this->_config['total_page'] = ceil($config['total_record']/$config['limit']); 
		$this->_config['limit'] = $config['limit'];
		$this->_config['start'] = ($this->_config['current_page']-1)*$config['limit'];
		$this->_config['link_full'] = $config['link_full'];
		$this->_config['link_first'] = $config['link_first'];
    }

	/*
     * print pagination button
     */
    function html(){
    	$result = '';
		if($this->_config['current_page']  == 1){  
			// current page = 1
			$previous = $this->_config['link_first'];
			$next = $this->_config['link_full'].($this->_config['current_page']+1);
			$result = "<a href=".$next." class='btn btn-primary'>Tiếp theo</a>";
		} else if ($this->_config['current_page'] >1 && $this->_config['current_page'] < $this->_config['total_page']){
			// current page > 2 and < total pages
			$previous = $this->_config['link_full'].($this->_config['current_page']-1);
			$next = $this->_config['link_full'].($this->_config['current_page']+1);
			$result = "<a href=".$previous." class='btn btn-primary'>Trang trước</a>
					<a href=".$next." class='btn btn-primary'>Trang sau</a>";
		} else if ($this->_config['current_page']==$this->_config['total_page']){
			// current page = total page
			$previous = $this->_config['link_full'].($this->_config['current_page']-1);
			$next = $this->_config['link_full'].$this->_config['current_page'];
			$result = "<a href=".$previous." class='btn btn-primary'>Trang trước</a>";	
		} else {
			$result = 'No results for this page.';
		}
		return $result;
    }

}
?>