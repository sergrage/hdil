<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;


class AvatarUploadController extends Controller
{

// Осуществляет предпаказ и загрузку аватара на странице /fillprofile.

    public function avatarUpload(Request $request)
    {
    	$data = $request['image'];
    	// разбивает строку по разделителю и выдает массив из частей
		$image_array = explode(",", $data);
		$data = base64_decode($image_array[1]);

		$imageName = 'avatar' . time() . '.jpg';
		$imagePath = 'storage/avatarUploads/' . $imageName;
		file_put_contents($imagePath, $data);
	
		echo '<img src="' . $imagePath .'" class="img-thumbnail" />';

		$user = Auth::user();
		
		$user->update([
			'image' => $imagePath,
		]);
    }
}
