<?php 

class Menu_model extends CI_Model
{
    public function actionMenu($name, $status) {
        
        if ($name == "Lamp" and $status == "Off") {
            $this->db->where('name', $name);
            $result = $this->db->update('menu', ['status' => 'On', 'button' => 'Turn off']);
            redirect('user');
        } elseif ($name == "Lamp" and $status == "On") {
            $this->db->where('name', $name);
            $result = $this->db->update('menu', ['status' => 'Off', 'button' => 'Turn On']);
            redirect('user');
        } else if ($name == "Fan" and $status == "Off") {
            $this->db->where('name', $name);
            $result = $this->db->update('menu', ['status' => 'On', 'button' => 'Turn off']);
            redirect('user');
        } elseif ($name == "Fan" and $status == "On") {
            $this->db->where('name', $name);
            $result = $this->db->update('menu', ['status' => 'Off', 'button' => 'Turn On']);
            redirect('user');
        }
    }
}

?>