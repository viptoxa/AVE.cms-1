<?php
 $small = '
<script type="text/javascript">
var oEdit' . $field_id . ' = new InnovaEditor("oEdit' . $field_id . '");
oEdit' . $field_id . '.css = "/admin/liveeditor/styles/default.css"; 
oEdit' . $field_id . '.fileBrowser = "/admin/liveeditor/assetmanager/asset.php";
oEdit' . $field_id . '.width = "' . $AVE_Document->_textarea_width_small . '";
oEdit' . $field_id . '.height = "' . $AVE_Document->_textarea_height_small . '";
oEdit' . $field_id . '.groups = [["group1", "", [""]]];
oEdit' . $field_id . '.REPLACE("small-editor[' . $field_id . ']");
</script>
';
 $innova = array (2 =>"$small");
 ?>