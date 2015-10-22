<?php
	echo $this->db->where('id_user',$id)->get('t_user')->row()->type;
?>