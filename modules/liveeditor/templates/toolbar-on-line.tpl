    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Результат настройки панели (toolbar) в реальном времени</title>

	<script src="/admin/templates/default/js/jquery-1.7.1.js" type="text/javascript"></script>
    <script src="/admin/templates/default/js/jquery.cookie.js" type="text/javascript"></script>
	<script src="/admin/liveeditor/scripts/language/ru-RU/editor_lang.js" type="text/javascript"></script>
    <script src="/admin/liveeditor/scripts/innovaeditor.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/webfont/1.0.30/webfont.js" type="text/javascript"></script>
    <script src="/admin/liveeditor/scripts/common/webfont.js" type="text/javascript"></script>
    </head>
    <body>
    <textarea class="mousetrap" id="onlineContent" rows="4" cols="30" style="width: 100%; height:200px;"></textarea>
     <script type="text/javascript">
	document.write(($.cookie("live_make_toolbar")));
	 </script>
     </body>
     </html>