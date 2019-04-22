<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{

    public function getSubMenu()
    {
        //join dari tabel ke tabel
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
        from `user_sub_menu` JOIN `user_menu`
        on `user_sub_menu`.`menu_id` = `user_menu`.`id`

        ";
        return $this->db->query($query)->result_array();
    }

    // public function getDataMenuById($id)
    // {
    //     return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    // }


}
