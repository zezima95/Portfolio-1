<?php
function relax() {
    ;

}

if(!empty($_FILES['files']['name'][0])) {

	$files = $_FILES['files'];

	$uploaded = array();
	$failed = array();

	$allowed = array('txt', 'jpg','mp3','mkv','mov','mp4','mpg','wmv','doc','docx','pdf','rtf','txt','wps','mpa','ogg','wav','wma','7z','rar','zip','bin','iso','csv','apk','bin','exe','jar','bmp','gif','ico','jpeg','png','html','php','asp','ppt','pptx','xlr','xls','3gp','avi','flv','m4v');

	foreach($files['name'] as $position => $file_name) {
		# code...
		$file_tmp = $files['tmp_name'][$position];
		$file_size = $files['size'][$position];
		$file_error = $files['error'][$position];

		$file_ext = explode('.', $file_name);
		$file_ext = strtolower(end($file_ext));

		if(in_array($file_ext, $allowed)) {

			if($file_error === 0) {

				if($file_size <= 2097152) {

					$file_name_new = uniqid('', true) . '.' . $file_ext;
					$file_destination = 'download/' . $file_name_new;

					if(move_uploaded_file($file_tmp, $file_destination)) {
						$uploaded[$position] = $file_destination;
					} else {
						$failed[$position] = "[{$file_name}] failed to upload";
					}

				} else {
					$failed[$position] = "[{$file_name}] is too large.";
				}

			} else {
				$failed[$position] = "[{$file_name}] failed to upload with code {$file_error}";
			}

		} else {
					$failed[$position] = "[{$file_name}] file extention '{$file_ext}' is not allowed";
		}
	}
	if(!empty($uploaded)) {
		print_r($uploaded);
		exit();
	}

	if(!empty($failed)) {
		print_r($failed);
	}

}
else ;