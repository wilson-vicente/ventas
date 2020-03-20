<?php

class Conf_model extends CI_Model
{
	public function verUsuario($args=array())
	{
		$tmp = $this->db
					->select("*")
					->from("csd.usuario")
					->order_by("usu_nombre")
					->get();

		if ($tmp->num_rows() > 0) {
			if(isset($args['usuario'])  && $args['usuario'] > 0) {
				return $tmp->row();
			} else {
				return $tmp->result();
			}
		}	
	}

	public function guardarUsuario($args=array()) {
		
		if (isset($args['usuario']) && !empty($args['usuario'])) {
			$this->db->set('usu_nombre', $args['usuario']);
		}
		
		if (isset($args['correo']) && !empty($args['correo'])) {
			$this->db->set('usu_correo', $args['correo']);	
		}
		
		if ($this->db->insert('csd.usuario')) {
			return true;
		}

		return false; 
		
		# $this->db->reset_query();
		# $this->db->affected_rows();
		#  $this->db->insert_id();
	}
}
?>
