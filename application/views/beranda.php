<div class="content-padder content-background">
    <div class="uk-section-small uk-section-default header">
        <div class="uk-container uk-container-large">
            <h2><span class="ion-speedometer"></span> Beranda</h2>
            <p>
                Selamat Datang, <?= $this->session->userdata('nama') ?>, <?= $judul ?>
            </p>
        </div>
    </div>
    <div class="uk-section-small">
        <div class="uk-container uk-container-large">
            <div id="mapid"></div>
        </div>
    </div>


    <script type="text/javascript">
        var data = [
            <?php
            foreach ($RS as $key => $r) { ?> {
                    "lokasi": [<?= $r->latitudeRS ?>, <?= $r->longitudeRS ?>],
                    "kecamatan": "<?= $r->kecamatanRS ?>",
                    "keterangan": "<?= $r->keteranganRS ?>",
                    "tempat": "<?= $r->lokasiRS ?>",
                    "kategori": "<?= $r->kategoriRS ?>"
                },
            <?php } ?>
        ];


        var map = new L.Map('mapid', {
            zoom: 12,
            center: new L.latLng([-5.4284972, 105.2006981])
        });
        map.addLayer(new L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11'
        }));

        var markersLayer = new L.LayerGroup();
        map.addLayer(markersLayer);

        var controlSearch = new L.Control.Search({
            position: 'topleft',
            layer: markersLayer,
            initial: false,
            zoom: 25,
            marker: false
        });

        map.addControl(new L.Control.Search({

            layer: markersLayer,
            initial: false,
            collapsed: true,
        }));

        var rsia = L.icon({
            iconUrl: '<?= base_url('public/icon/rsia.png') ?>',
            iconSize: [30, 30]
        });

        var rsumum = L.icon({
            iconUrl: '<?= base_url('public/icon/rsumum.png') ?>',
            iconSize: [30, 30]
        });

        var rsmata = L.icon({
            iconUrl: '<?= base_url('public/icon/rsmata.png') ?>',
            iconSize: [30, 30]
        });

        var icons = "";
        for (i in data) {
            var kecamatan = data[i].kecamatan;
            var lokasi = data[i].lokasi;
            var tempat = data[i].tempat;
            var keterangan = data[i].keterangan;
            var kategori = data[i].kategori;

            if (kategori == "rsia") {
                icons = rsia;
            } else if (kategori == "rsumum") {
                icons = rsumum;
            } else if (kategori == "rsmata") {
                icons = rsmata;
            }

            var marker = new L.Marker(new L.latLng(lokasi), {
                title: kecamatan,
                icon: icons
            });
            marker.bindPopup('<b>Kecamatan: ' + kecamatan + ' <br> Lokasi: ' + tempat + '<br> Keterangan: ' + keterangan + '</b>');
            markersLayer.addLayer(marker);
        }

        var geojsonFeature = {
            "type": "Feature",
            "properties": {
                "name": "Coors Field",
                "amenity": "Baseball Stadium",
                "popupContent": "This is where the Rockies play!"
            },
            "geometry": {
                "type": "LineString",
                "coordinates": [
                    [105.2607589, -5.4218931],
                    [105.26116199853158, -5.4141985509265504, ],
                    [105.26244945886943, -5.413685864131807],
                    [105.26111908318697, -5.411720560724808],
                    [105.26159115197753, -5.408644420833071],
                    [105.26335068108095, -5.408601696585809],
                    [105.2636510884931, -5.405653714308225],
                    [105.26236362815527, -5.405055571224728],
                    [105.26232071281069, -5.403688384815398],
                    [105.26390858056068, -5.402321195320102],
                    [105.26293568386252, -5.401626463327201],
                    [105.26516728176969, -5.397311246217106],
                    [105.26692681089807, -5.386330803096737],
                    [105.26799969447089, -5.385647188998491],
                    [105.27048878445738, -5.386245351219527],
                    [105.27151875272764, -5.384365410828207, ],
                    [105.27370743530196, -5.383724520729498, ],
                    [105.27447991150468, -5.381289132193716],
                    [105.2757438, -5.3829289]
                ]
            }
        };
        L.geoJSON(geojsonFeature).addTo(map);
        L.control.scale().addTo(map);
    </script>