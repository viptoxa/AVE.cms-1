<?
//Update module Gallery
$gallery = $AVE_DB->Real_Query("
	SELECT ModulPfad
	FROM " . PREFIX . "_module
	WHERE ModulPfad = 'gallery'
") -> FetchRow();

if ($gallery -> ModulPfad == "gallery")
{
	$check = $AVE_DB->Real_Query("
		SELECT image_status
		FROM " . PREFIX . "_modul_gallery_images
	",false) -> _result;
	if($check === false)
	{
		$AVE_DB->Real_Query("
			ALTER TABLE `".PREFIX."_modul_gallery_images`
			ADD
				`image_status`
			enum('1','0') NOT NULL DEFAULT '1' AFTER
				`image_link`
			";
	}
}
?>