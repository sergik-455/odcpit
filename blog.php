<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.20" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1454623228" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1454623228" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_main" style="height: 360px;">
	
<div id="wb_element_instance66" class="wb_element"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li><a href="%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F/" target="_self" title="Главная">Главная</a></li><li><a href="%D0%9E-%D0%BD%D0%B0%D1%81/" target="_self" title="О нас">О нас</a></li><li><a href="%D0%93%D1%80%D0%B0%D1%84%D0%B8%D0%BA/" target="_self" title="График">График</a></li><li><a href="%D0%9A%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D1%8B/" target="_self" title="Контакты">Контакты</a></li></ul><script type="text/javascript"> (function() { var isOpen = false, elem = $('#wb_element_instance66'), btn = elem.children('.btn-collapser').eq(0); btn.on('click', function() { if (elem.hasClass('collapse-expanded')) { isOpen = false; elem.removeClass('collapse-expanded'); } else { isOpen = true; elem.addClass('collapse-expanded'); } }); elem.find('ul').each(function() { var ul = $(this); if (ul.parent('li').length > 0) { ul.parent('li').eq(0).children('a').on('click', function() { if (!isOpen) return true; if (ul.css('display') !== 'block') ul.css({display: 'block'}); else ul.css({display: ''}); return false; }); } }); })(); </script></div><div id="wb_element_instance67" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Международный аэропорт</h4></div><div id="wb_element_instance68" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><span class="wb-stl-highlight">"Можем ли мы представить, что самолеты в ночном небе, как падающие звезды? Я мог бы загадать желание прямо сейчас, прямо сейчас."</span></p></div><div id="wb_element_instance69" class="wb_element"><img alt="" src="gallery_gen/96d6f2e7e1f705ab5e59c84a6dc009b2_124x99.png"></div><div id="wb_element_instance70" class="wb_element"><div></div></div><div id="wb_element_instance71" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2016 <a href="http://bootstrap.hol.es">bootstrap.hol.es</a></p></div><div id="wb_element_instance72" class="wb_element"><div class="wb-stl-footer" style="white-space: nowrap;">На базе <i class="icon-wb-logo"></i><a href="http://zyro.com/examples/" target="_blank" title="Zyro - Website Builder">Zyro</a></div><script type="text/javascript">
				var _siteProBadge = _siteProBadge || [];
				_siteProBadge.push({hash: "df51e06f0e8a25a1daf11adaab0dc7c2", cont: "wb_element_instance72"});

				(function() {
					var script = document.createElement("script");
					var src = "http://zyro.com/examples/getjs/";
					script.type = "text/javascript";
					script.async = true;
					script.src = src.replace(/http.*:/, location.protocol);
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(script, s);
				})();
				</script></div><div id="wb_element_instance73" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance73");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance73").hide();
				});
			</script>
			<?php
				}
			?>
			</div><div id="wb_element_instance74" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(0);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>
