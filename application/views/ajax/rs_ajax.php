<div class="uk-overflow-auto">
	<table class="uk-table uk-table-justify uk-table-divider">
		<thead>
			<tr>
                    <th>NO</th>
					<th>NAMA KECAMATAN</th>
					<th>LOKASI</th>
					<th>KETERANGAN</th>
					<th>LATITUDE</th>
					<th>LONGITUDE</th>
					<th>KATEGORI</th>
					
					<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
        <?php if( ! empty($rumah_sakit)) {
            ?>
            <?php 
            $no=1;
			foreach($rumah_sakit as $r){ 
				
			?>
				
				<tr>
					<td width="40px"><?=$no?></td>
					<td><?=$r->kecamatanRS?></td>
					<td><?=$r->lokasiRS?></td>
					<td><?=$r->keteranganRS?></td>
					<td><?=$r->latitudeRS?></td>
					<td><?=$r->longitudeRS?></td>
					<td><?=$r->kategoriRS?></td>
					<td>
                    <a href="#" class="uk-icon-link uk-margin-small-right" id="formedit" uk-icon="file-edit"
                    data-id="<?=$r->idRS?>"
                    data-kecamatan="<?=$r->kecamatanRS?>"
                    data-lokasi="<?=$r->lokasiRS?>"
                    data-latitude="<?=$r->latitudeRS?>"
                    data-longitude="<?=$r->longitudeRS?>"
                    data-keterangan="<?=$r->keteranganRS?>"
                    data-kategori="<?=$r->kategoriRS?>"
					 
					></a>
					<a href="#" class="uk-icon-link" uk-icon="trash" id="hapusdata" 
					data-id="<?=$r->idRS?>"
                    data-kecamatan="<?=$r->kecamatanRS?>"></a>
				
					</td>
				</tr>
			<?php $no++; } 
            }else{
            ?>
            <tr><td colspan="9" class="no-records">No records</td></tr>
            <?php } ?>
		</tbody>
	</table>
    
	</div>
    <ul class="uk-pagination" uk-margin-small-right>
    <?php echo $pagelinks?>
    </ul>
    
    
