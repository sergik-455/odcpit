<?php
error_reporting(E_ALL); @ini_set('display_errors', true);
	$pages = array(
		'0'	=> array('id' => '1', 'alias' => 'Главная', 'file' => '1.php'),
		'1'	=> array('id' => '2', 'alias' => 'О-нас', 'file' => '2.php'),
		'2'	=> array('id' => '3', 'alias' => 'График', 'file' => '3.php'),
		'3'	=> array('id' => '5', 'alias' => 'Контакты', 'file' => '5.php')
	);
	$forms = array(
		'5'	=> array(
			'd6a4dea1' => Array( 'email' => '', 'subject' => 'Inquiry from the web page', 'sentMessage' => 'Форма отправлена.', 'smtpEnable' => false, 'smtpHost' => null, 'smtpPort' => null, 'smtpEncryption' => null, 'smtpUsername' => null, 'smtpPassword' => null, 'fields' => array( array( 'fidx' => '0', 'name' => 'Название', 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'Эл. почта', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => 'Сообщение', 'type' => 'textarea', 'options' => '' ) ) )
		)
	);
	$langs = null;
	$def_lang = null;
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	$user_domain = 'bootstrap.hol.es';
	$show_comments = false;
	include dirname(__FILE__).'/functions.inc.php';
	$home_page = '1';
	list($page_id, $lang) = parse_uri();
	$user_key = "7vVC4TSIQqwMRrat+N+uWw==";
	$user_hash = "fd7a14a635c20fc9";
	$comment_callback = "http://uk.zyro.com/ru-RU/comment_callback/";
	$preview = false;
	$mod_rewrite = true;
	$page = isset($pages[$page_id]) ? $pages[$page_id] : null;
	if (!is_null($page)) {
		handleComments($page['id']);
		if (isset($_POST["wb_form_id"])) handleForms($page['id']);
	}
	ob_start();
	if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'news')
		include dirname(__FILE__).'/news.php';
	else if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'blog')
		include dirname(__FILE__).'/blog.php';
	else if ($page) {
		$fl = dirname(__FILE__).'/'.$page['file'];
		if (is_file($fl)) {
			ob_start();
			include $fl;
			$out = ob_get_clean();
			$ga_out = '';
			if ($lang && $langs) {
				foreach ($langs as $lang => $default) {
					$pageUri = getPageUri($page['id'], $lang);
					$out = str_replace(urlencode('{{lang_'.$lang.'}}'), $pageUri, $out);
				}
			}
			if (is_file($ga_file = dirname(__FILE__).'/ga_code') && $ga_code = file_get_contents($ga_file)) {
				$ga_out = str_replace('{{ga_code}}', $ga_code, file_get_contents(dirname(__FILE__).'/ga.html'));
			}
			$out = str_replace('{{ga_code}}', $ga_out, $out);
			$proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443 || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || isset($_SERVER['HTTP_X_HTTPS']) && $_SERVER['HTTP_X_HTTPS'] == 'on') ? 'https' : 'http';
			$out = str_replace('{{base_url}}', $proto.'://'.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost').'/', $out);
			header('Content-type: text/html; charset=utf-8', true);
			echo $out;
		}
	} else {
		header("Content-type: text/html; charset=utf-8", true, 404);
		if (is_file(dirname(__FILE__).'/404.html')) {
			include '404.html';
		} else {
			echo "<!DOCTYPE html>\n";
			echo "<html>\n";
			echo "<head>\n";
			echo "<title>404 Not found</title>\n";
			echo "</head>\n";
			echo "<body>\n";
			echo "404 Not found\n";
			echo "</body>\n";
			echo "</html>";
		}
	}
	ob_end_flush();

?>