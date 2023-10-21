<div id="mapid" style="width: 1170px; height: 1100px;"></div>
<script>
	var mymap = L.map('mapid').setView([-6.8983847, 107.6187697], 15);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);

	var icon_sekolah = L.icon({
		iconUrl: '<?= base_url('icon/taman.png') ?>',
		iconSize: [35, 50], // size of the icon
	});

	<?php foreach ($mebel as $key => $value) { ?>
		L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>], {
				icon: icon_sekolah
			}).addTo(mymap)
			.bindPopup("<b>Nama : <?= $value->nama ?></b><br/>" +
				"Alamat : <?= $value->alamat ?><br/>" +
				"Keterangan : <?= $value->ket ?><br/>");
	<?php } ?>
</script>