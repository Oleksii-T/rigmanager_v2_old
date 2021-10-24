<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

trait UploadTrait {

	protected function upload($file, $folder='')
	{
		$storage = Storage::disk('attachments');
		$fileNewName = $storage->putFile($folder, new File($file));
		$relativePath = str_replace(base_path().'/', '', $storage->path($fileNewName));
		return [
			'type' => explode('/', $file->getMimeType())[0],
			'original_name' => $file->getClientOriginalName(),
			'name' => $fileNewName,
			'path' => $relativePath,
			'size' => $file->getSize()
		];
	}

}

