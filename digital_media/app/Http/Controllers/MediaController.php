<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
	{
        # menggunakan model Student untuk select data
		$medias = Media::all();

		if (!empty($medias)) {
			$response = [
				'message' => 'Menampilkan Data Semua Media',
				'data' => $medias,
			];
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data tidak ada'
			];
			return response()->json($response, 404);
		}
	}

	public function store(Request $request) 
	{

		$medias = Media::create($request->all());

		$response = [
			'message' => 'Data Media Berhasil Dibuat',
			'data' => $medias,
		];

		return response()->json($response, 201);
	}

	public function show($id)
	{
		$medias = Media::find($id);

		if ($medias) {
			$response = [
				'message' => 'Get detail student',
				'data' => $medias
			];
	
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];
			
			return response()->json($response, 404);
		}
	}

	public function update(Request $request, $id)
	{
		$medias = Media::find($id);

		if ($medias) {
			$response = [
				'message' => 'Media is updated',
				'data' => $medias->update($request->all())
			];
	
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
	}

	public function destroy($id)
	{
		$medias = Media::find($id);

		if ($medias) {
			$response = [
				'message' => 'Media is delete',
				'data' => $medias->delete()
			];

			return response()->json($response, 200); 
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
	}
}