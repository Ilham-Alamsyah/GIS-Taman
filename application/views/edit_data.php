<div class="col-sm-7">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Lokasi Taman Bandung
        </div>
        <div class="panel-body">
            <div id="mapid" style="width: 100%; height: 400px;"></div>
        </div>
    </div>
</div>


<div class="col-sm-5">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Edit Data Taman Bandung
        </div>
        <div class="panel-body">
            <?php
            //validasi data tidak boleh kosong
            echo validation_errors('<div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

            //notifikasi pesan data berhasil disimpan
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            echo form_open('mebel/edit/' . $mebel->id);
            ?>
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" name="nama" value="<?= $mebel->nama ?>" placeholder="Nama" />
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" value="<?= $mebel->alamat ?>" placeholder="Alamat" />
            </div>

            <div class="form-group">
                <label>Latitiude</label>
                <input id="Latitude" class="form-control" name="latitude" value="<?= $mebel->latitude ?>" placeholder="Latitude" readonly />
            </div>

            <div class="form-group">
                <label>Longitude</label>
                <input id="Longitude" class="form-control" name="longitude" value="<?= $mebel->longitude ?>" placeholder="Longitude" readonly />
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input class="form-control" name="ket" value="<?= $mebel->ket ?>" placeholder="Keterangan" />
            </div>

            <div class="form-group">
                <label></label>
                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                <button type="reset" class="btn btn-sm btn-success">Reset</button>
            </div>

            <?php echo form_close(); ?>


        </div>
    </div>
</div>


<script>
    var curLocation = [0, 0];
    if (curLocation[0] == 0 && curLocation[1] == 0) {
        curLocation = [<?= $wisata->latitude ?>, <?= $wisata->longitude ?>];
    }

    var mymap = L.map('mapid').setView([<?= $wisata->latitude ?>, <?= $wisata->longitude ?>], 15);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11'
    }).addTo(mymap);

    mymap.attributionControl.setPrefix(false);
    var marker = new L.marker(curLocation, {
        draggable: 'true'
    });

    marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        $("#Latitude").val(position.lat);
        $("#Longitude").val(position.lng).keyup();
    });

    $("#Latitude, #Longitude").change(function() {
        var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        mymap.panTo(position);
    });
    mymap.addLayer(marker);
</script>