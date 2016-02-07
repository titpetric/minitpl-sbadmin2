<?php

error_reporting(E_ALL ^ E_NOTICE);

include("vendor/autoload.php");
include("bootstrap.php");

class Page extends \Monotek\Dependency\Inject
{
	public $inject = array("template");

	public function run()
	{
		$tpl = $this->getTemplate();

		$pages = array_map(function($s) {
			$file = "pages/" . basename($s);
			$page = str_replace(".html", "", basename($s));
			$link = "/" . $page;
			$title = ucfirst($page);

			$icon_file = $s . ".icon";
			$icon = trim(@file_get_contents($icon_file));

			return compact("icon", "page", "title", "link", "file");
		}, glob("templates/pages/*.html"));

		$pages = array_combine(array_keyval($pages, "page"), $pages);
		$path = $this->getPath();

		$page = $pages['blank'];
		if (isset($path[0]) && isset($pages[$path[0]])) {
			$page = $pages[$path[0]];
		}

//echo '<pre>';var_dump($path, $page, $pages);die;

		$tpl->load("index.tpl");
		$tpl->assign(compact("pages", "page"));
		$tpl->render();
	}

	public function getPath()
	{
		$path = $_SERVER['REQUEST_URI'];
		$path = explode("?", $path);
		$path = trim($path[0], "/");
		$path = explode("/", $path);
		return $path;
	}
}

$page = new Page;
$page->run();
