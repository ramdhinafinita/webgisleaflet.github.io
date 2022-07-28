<?php
	// $wfsUrl = file_get_contents("http://geoportal.slemankab.go.id/geoserver/geonode/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=geonode:analisis_resiko_bencana_gunung_api&outputFormat=json");

	$wfsUrl = file_get_contents("http://localhost:8081/geoserver/SLEMAN_COV19/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=SLEMAN_COV19%3AJALAN_LN_ALL_SLEMAN_Proj&outputFormat=application%2Fjson");

	header('Content-type: application/json');
	echo ($wfsUrl);
	# Jika terdapat &maxFeatures=50 pada url wfs geojson, dihapus supaya jumlah feature tidak dibatasi
?>