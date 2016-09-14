<?php
	function droplist($data){
		foreach ($data as $key => $val){
			$id  = $val["LangId"];
			$name = $val["LangName"];
		echo "<option value='$id'> $name </option>";
		}
	}