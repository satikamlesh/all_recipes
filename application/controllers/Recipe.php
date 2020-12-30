<?php

class Recipe extends CIF_Controller {

    public $layout = 'full';
    public $module = 'recipe';
    public $model = 'Recipes_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index($permalink = null) {
        $this->data = array();
        if (!$permalink)
            show_404();

        $this->db->where('permalink', $permalink)->set("visited", "visited + 1", FALSE)->update('recipes');

        $this->data['item'] = $this->db
                        ->join('categories', 'categories.category_id = recipes.category_id')
                        ->select('recipes.*, categories.title as category_title, categories.permalink as category_permalink')
                        ->where("recipes.permalink", urldecode($permalink))->get('recipes')->row();
        $this->data['related_items'] = $this->db
                        ->join('categories', 'categories.category_id = recipes.category_id', 'inner')
                        ->select('recipes.*, categories.title as category_title,categories.permalink as category_permalink')
                        ->limit('3')
                        ->where('recipes.status', 'active')
                        ->where('recipes.permalink !=', $permalink)
                        ->where('recipes.category_id', $this->data['item']->category_id)
                        ->get('recipes')->result();
        
        $this->data['user'] = $this->db
                        ->where('users.user_id', $this->data['item']->user_id)
                        ->get('users')->row();

        $this->data['categories'] = $this->db
                        ->join('icons', 'icons.icon_id = categories.icon_id', 'inner')
                        ->select('categories.*,icons.icon, (SELECT COUNT(*) FROM recipes where categories.category_id = recipes.category_id) as count')->order_by('category_id', 'rand')->limit('21')->get('categories')->result();

        $this->data['popular_recipes'] = $this->db
                        ->select('recipes.*')
                        ->where('recipes.status', 'active')
                        ->limit('4')
                        ->order_by('visited', 'desc')
                        ->get('recipes')->result();
        if (!$this->data['item'])
            show_404();

        config('title', config('title') . ' - ' . $this->data['item']->title);

        $this->load->view($this->module, $this->data);
    }

}
