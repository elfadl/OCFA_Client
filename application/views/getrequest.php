<?php 
if ($q != "") {
	$data = $q;
	$cari = $this->db->query("SELECT * FROM t_user WHERE (id_user LIKE '%$data%' OR name LIKE '%$data%' OR username LIKE '%$data%' OR email LIKE '%$data%') && (up_req = 1 OR expired IS NULL)")->result();
}
else{

	$cari = $this->db->query("SELECT * FROM t_user WHERE up_req = 1 OR expired IS NULL")->result();
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
					<th data-priority="3">Name</th>
					<th data-priority="1">Email</th>
					<th data-priority="3">Phone</th>
					<th data-priority="3">Expired Day</th>
					<th data-priority="6" colspan="2" class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				 $no =1; foreach ($cari as $key => $isi):
				 ?>
				<tr>
					<th><?php echo $no++;?></th>
					<td><?php echo $isi->resto_id;?></td>
					<td><?php echo $isi->id_user?></td>
					<td><?php echo ucwords($isi->name);?></td>
					<td><?php echo ($isi->email);?></td>
					<td><?php echo ($isi->phone);?></td>
					<td><?php 
						$exp = $isi->expired;
						if($exp == null){
							if($this->db->where("id_user",$isi->id_user)->get("t_user")->row()->type == "gold"){
								echo "NULL";
							}else{
								echo "Unlimited";
							}
						}else{
							echo date('d-m-Y',strtotime($exp));
						}
					?></td>
					<td>
						<?php $id_user = $isi->id_user;?>
						<a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});upgrade('<?=$id_user ?>')" class="btn btn-warning btn-single">Accept</a>
					</td>
					<td>
						<?php 
						if($isi->up_req == 2){
							echo form_open('foodspot/unrejectRequest');
							?>
							<input type="hidden" name="id" value="<?php echo $isi->id_user;?>">
							<button class="btn btn-danger btn-single">Unreject</button>
							<?php
						}else{
							echo form_open('foodspot/rejectRequest');
						?>
							<input type="hidden" name="id" value="<?php echo $isi->id_user;?>">
							<button type = "submit" class="btn btn-danger btn-single">Reject</button>
						<?php }echo form_close();?>
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


