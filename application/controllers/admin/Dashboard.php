<?php

class Dashboard extends CIF_Controller {

    public $layout = 'full';
    public $module = 'dashboard';
    public $model = 'users';

    public function index() {
        $this->permission();
        $data['users'] = $this->db->get('users')->num_rows();
        $data['categories'] = $this->db->get('categories')->num_rows();
        $data['recipes'] = $this->db->get('recipes')->num_rows();
        $data['tricks'] = $this->db->get('blog')->num_rows();
        $data['visitors'] = config('visitors');

        $data['recipes_review'] = $this->db
                        ->join('users', 'users.user_id = recipes.user_id', 'inner')
                        ->select('recipes.*, users.username as username')
                        ->where('recipes.status', 'inactive')
                        ->get('recipes')->result();

        $this->load->view($this->module, $data);
    }

}
