<?php
namespace app\nine_style_people;

use utils\common;

class Page
{
	public function __construct(){
	}
	
	static function create(){  
		static $instance ;  
        if (!$instance){  
			$instance = new Page();  
        }  
        return $instance;  
    }
	
	public static function Index($page)
	{
		if ($page == null) {
			$page = "index";
		}
		// echo $page;
		echo ((new common())->tpl("nine_style_people", $page, null));
	}
}
?>