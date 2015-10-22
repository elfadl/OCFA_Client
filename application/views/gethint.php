<?php 
if ($q != "") {
	$data = $q;
	$cari = $this->db->query("SELECT * FROM t_data_resto WHERE id_resto LIKE '%$data%' OR nm_resto LIKE '%$data%' OR desc_resto LIKE '%$data%'")->result();
}
else{

	$cari = $this->db->query("SELECT * FROM t_data_resto")->result();
}
if ($cari!=null) {
?>
<div class="panel-body">
							
	<div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
	
		<table cellspacing="0" class="table table-small-font table-bordered table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th data-priority="1">FoodSpot Id</th>
					<th data-priority="1">User Id</th>
					<th data-priority="3">FoodSpot Name</th>
					<th data-priority="1">Member Type</th>
					<th data-priority="3">Expired Day</th>
					<th data-priority="3">FoodSpot Category</th>
					<th data-priority="6" colspan="2" class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				 $no =1; foreach ($cari as $key => $isi):
				 ?>
				<tr>
					<th><?php echo $no++;?></th>
					<td><?php echo $isi->id_resto;?></td>
					<td><?php echo $this->db->where('resto_id',$isi->id_resto)->get('t_user')->row()->id_user?></td>
					<td><?php echo ucwords($isi->nm_resto);?></td>
					<td><?php 
						$tipe = $this->db->where('resto_id',$isi->id_resto)->get('t_user')->row()->type;
						if($tipe == "free"){
							echo "Free Member";
						}else{
							echo "Gold Member";
						}
					?></td>
					<td><?php 
						$exp = $this->db->where('resto_id',$isi->id_resto)->get('t_user')->row()->expired;
						if($exp == null){
							echo "Unlimited";
						}else{
							echo date('d-m-Y',strtotime($exp));
						}
					?></td>
					<td>
						<?php
							$k2 = $isi->id_kat;
							$ktok = explode(",", $k2);
							$sumk = count($ktok)-1;
							for ($i=0; $i <= $sumk ; $i++) { 
								//echo $ktok[$i];
								
								$kat = $this->db->where('id_kat', $ktok[$i])->get('t_kategori')->result();
								foreach ($kat as $key => $cat) {
									echo $cat->nama_kat."<br>";
								}
							}
							//echo $cat;
						?>
					</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $isi->id_resto;?>">
						<?php echo form_open('page/detFs');?>
							<input type="hidden" name="id" value="<?= $isi->id_resto;?>">
							<button class="btn btn-warning btn-single">Detail</button>
						<?php echo form_close(); ?>
					</td>
					<td>
						<?php echo form_open('foodspot/delFs');?>
							<input type="hidden" name="id" value="<?= $isi->id_resto;?>">
							<button class="btn btn-danger btn-single">Delete</button>
						<?php echo form_close();?>
					</td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>
							
	</div>
	
	<script type="text/javascript">
	// This JavaScript Will Replace Checkboxes in dropdown toggles
	jQuery(document).ready(function($)
	{
		setTimeout(function()
		{
			$(".checkbox-row input").addClass('cbr');
			cbr_replace();
		}, 0);
	});
	</script>
		
	
</div>
<?php }else{
	echo "<label>No Data Inserted</label>";
}?>