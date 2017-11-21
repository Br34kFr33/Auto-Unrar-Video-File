<?php
include 'config.php';

//Delete annoying files
$files = glob('/home/Transfer/*/*/*.{avi,mkv,mp4}', GLOB_BRACE);
	foreach ($files as $file) {
		if (stripos($file, 'sample') || stripos($file, 'trailer') || stripos($file, '[extra') !== false || stripos($file, '[featurette') !== false){
		unlink($file);
		}
}

//Delete annoying files (better check here as well)
$files = glob('/home/Transfer/*/*/*/*.{avi,mkv,mp4}', GLOB_BRACE);
	foreach ($files as $file) {
		if (stripos($file, 'sample') || stripos($file, 'trailer') || stripos($file, '[extra') !== false || stripos($file, '[featurette') !== false){
		unlink($file);
		}
}

//Unrar or Move TV Show in no directory
$files = glob('/home/Transfer/TV/*.{r00,avi,mkv,mp4,}', GLOB_BRACE);
	foreach ($files as $file) {
		if (stripos($file,'.r00') !== false) {
		$string="unrar e '$file' $TV";
                  exec($string);
		} else {
		shell_exec("mv " . escapeshellarg($file) . " " . escapeshellarg($TV));
		}	
}

//Unrar or Move TV Show
$files = glob('/home/Transfer/TV/*/*.{r00,avi,mkv,mp4,}', GLOB_BRACE);
	foreach ($files as $file) {
		if (stripos($file,'.r00') !== false) {
		$string="unrar e '$file' $TV";
                  exec($string);
		} else {
		shell_exec("mv " . escapeshellarg($file) . " " . escapeshellarg($TV));
		}	
}

//Unrar or Move TV Seasons
$files = glob('/home/Transfer/TV/*/*/*.{r00,avi,mkv,mp4,}', GLOB_BRACE);
	foreach ($files as $file) {
		if (stripos($file,'.r00') !== false) {
		$string="unrar e '$file' $TV";
                  exec($string);
		} else {
		shell_exec("mv " . escapeshellarg($file) . " " . escapeshellarg($TV));
		}	
}

//Unrar or Move Scene Movie
$files = glob('/home/Transfer/Scene/*/*.{r00,avi,mkv,mp4,}', GLOB_BRACE);
	foreach ($files as $file) {
		if (stripos($file,'.r00') !== false) {
		$string="unrar e '$file' $Scene";
                  exec($string);
		} else {
		shell_exec("mv " . escapeshellarg($file) . " " . escapeshellarg($Scene));
		}	
}
//Unrar or Move P2P Movie
$files = glob('/home/Transfer/P2P/*/*.{r00,avi,mkv,mp4,}', GLOB_BRACE);
	foreach ($files as $file) {
		if (stripos($file,'.r00') !== false) {
		$string="unrar e '$file' $P2P";
                  exec($string);
		} else {
		shell_exec("mv " . escapeshellarg($file) . " " . escapeshellarg($P2P));
		}	
}

//Delete all files and directories afterwards
shell_exec("rm -rf /home/Transfer/TV/*");
shell_exec("rm -rf /home/Transfer/Scene/*");
shell_exec("rm -rf /home/Transfer/P2P/*");
?>
