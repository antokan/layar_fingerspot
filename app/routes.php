<?php 

$app->get('/', function ($request, $response) {

	$pegawai = App\Models\Pegawai::find(1);

	var_dump($pegawai->pegawai_nama);

    // $response->getBody()->write("Hello World");

    // return $response;
});