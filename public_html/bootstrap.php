<?php

use Monotek\Dependency\Dependency;

class TemplateEx extends Monotek\MiniTPL\Template
{
	public function load($filename) {
		$res = parent::load($filename);
		$json_file = $filename . ".json";
		$json_path = $this->_find_path($json_file);
		if ($json_path !== false) {
			$data = json_decode(@file_get_contents($json_path . $json_file), true);
			$this->assign($data);
		}
		return $res;
	}
}

Dependency::set("template", function() {
	$tpl = new TemplateEx;
	$tpl->set_compile_location("/dev/shm/" . $_SERVER['HTTP_HOST'] . "/", true);
	$tpl->add_default("development", true);
	return $tpl;
});

function issetor($a,$b) { return isset($a)?$a:$b; }
function now($t=false) { return date("Y-m-d H:i:s", ($t !== false) ? $t : time()); }
function array_keyval($arr, $key) {
	$retval = array();
	foreach ($arr as $v) {
		$retval[] = $v[$key];
	}
	return $retval;
}