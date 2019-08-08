<?php
//variables
				$dir = 'cias/';
				
				
				//$files = scandir($dir);
				//scanne le dossier et retire les ..
				$files = array_diff(scandir($dir), array('..', '.'));
				
				foreach($files as $value)
				{
					$currfile = $dir.$value;
					$size = filesize($currfile);
					$size = FileSizeConvert($size);
					echo "<tr><td>".$value."</td>
					<td>".$size."</td>
					<td><form action=\"qrgen.php\" style=\"display:inline-block\">
						<button class=\"btn btn-success\" style=\"margin-left: 5px;\" type=\"submit\"><i class=\"fa fa-qrcode\" style=\"font-size: 15px;\"></i></button>
						<input type=\"hidden\" name=\"filedl\" value=\"".$value."\">
					</form>
					<form action=\"filerename.php\" style=\"display:inline-block\">
						<button class=\"btn btn-warning\" type=\"submit\"><i class=\"fa fa-filter\"></i></button>
						<input type=\"hidden\" name=\"filern\" value=\"".$value."\"></form>
					</td></tr>";
				}
				
				
				
				/**
* Converts bytes into human readable file size.
*
* @param string $bytes
* @return string human readable file size (2,87 Мб)
* @author Mogilev Arseny
*/
function FileSizeConvert($bytes)
{
    $bytes = floatval($bytes);
        $arBytes = array(
            0 => array(
                "UNIT" => "TB",
                "VALUE" => pow(1024, 4)
            ),
            1 => array(
                "UNIT" => "GB",
                "VALUE" => pow(1024, 3)
            ),
            2 => array(
                "UNIT" => "MB",
                "VALUE" => pow(1024, 2)
            ),
            3 => array(
                "UNIT" => "KB",
                "VALUE" => 1024
            ),
            4 => array(
                "UNIT" => "B",
                "VALUE" => 1
            ),
        );

    foreach($arBytes as $arItem)
    {
        if($bytes >= $arItem["VALUE"])
        {
            $result = $bytes / $arItem["VALUE"];
            $result = str_replace(".", "," , strval(round($result, 2)))." ".$arItem["UNIT"];
            break;
        }
    }
    return $result;
}
				