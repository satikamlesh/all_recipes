<?php

class Home extends CIF_Controller {

    public $layout = 'full';
    public $module = 'home';
    public $model = 'Recipes_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index() {
        $data['tricks'] = $this->db
                        ->limit('6')
                        ->order_by('blog_id', 'desc')
                        ->get('blog')->result();
        $data['sliders'] = $this->db
                        ->join('recipes', 'recipes.recipe_id = sliders.recipe_id', 'inner')
                        ->join('users', 'users.user_id = recipes.user_id', 'inner')
                        ->select('users.*, sliders.*, recipes.title as recipe_title,recipes.permalink as recipe_permalink, recipes.serves as recipe_serves, recipes.cooking_time as recipe_cooking_time')
                        ->where('recipes.status', 'active')
                        ->limit('8')
                        ->order_by('slider_id', 'desc')
                        ->get('sliders')->result();

        $data['categories'] = $this->db
                ->join('icons', 'icons.icon_id = categories.icon_id', 'inner')
                ->select('categories.*,icons.icon, (SELECT COUNT(*) FROM recipes where categories.category_id = recipes.category_id) as count')
                ->order_by('category_id', 'rand')
                ->limit('21')
                ->get('categories')
                ->result();


        $data['latest_recipes'] = $this->db
                        ->join('categories', 'categories.category_id = recipes.category_id', 'inner')
                        ->join('users', 'users.user_id = recipes.user_id', 'inner')
                        ->select('recipes.*, users.*, categories.title as category_title, categories.permalink as category_permalink')
                        ->where('recipes.status', 'active')
                        ->limit('24')
                        ->order_by('recipe_id', 'desc')
                        ->get('recipes')->result();

        $data['popular_recipes'] = $this->db
                        ->select('recipes.*')
                        ->where('recipes.status', 'active')
                        ->limit('4')
                        ->order_by('visited', 'desc')
                        ->get('recipes')->result();
        $data['popular_authors'] = $this->db->order_by('(SELECT COUNT(*) FROM recipes WHERE recipes.user_id = users.user_id)', "DESC")->group_by("users.user_id")->get("users", 9)->result();
//Get cagtegories data in search
        $cats[''] = 'Choose All Categories';
        foreach ($this->db->get('categories')->result() as $cat) {
            $cats[$cat->category_id] = $cat->title;
        }
        $data['cats'] = $cats;

        $this->load->view($this->module, $data);
    }

    public function search($offset = 0) {
        $count = $this->db
                        ->select("COUNT(*) AS count")
                        ->like('title', $this->input->get('title'), 'both')
                        ->where('recipes.status', 'active')
                        ->get('recipes')
                        ->row()->count;
        $this->data['count'] = $count;
        // PAGINATION
        config('pagination_limit', 12);
        $this->load->library('pagination');
        $config['base_url'] = site_url('home/search/');
        $config['total_rows'] = $count;
        $config['per_page'] = config('pagination_limit');
        $config['reuse_query_string'] = TRUE;
        if ($this->uri->segment(2))
            $this->db->offset = $offset;
        $this->pagination->initialize($config);
        $this->data['pagination'] = $this->pagination->create_links();
        $this->db->limit($config['per_page'], $offset);
        $this->data['items'] = $this->db
                ->select("COUNT(*) AS count")
                ->like('title', $this->input->get('title'), 'both')
                ->select('recipes.*')
                ->where('recipes.status', 'active')
                ->get('recipes')
                ->result();
        $this->load->view('search', $this->data);
    }

    public function contact() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');
        $data['success'] = false;

        if ($this->form_validation->run() == TRUE) {
            @mail(config('webmaster_email'), config('title'), ""
                            . "Full Name: $_POST[name]\n"
                            . "Email: $_POST[email]\n"
                            . "Message: $_POST[message]\n"
                            . "");
            $data['success'] = true;
        }
        $this->load->view('contact', $data);
    }

    public function newsletters() {
        //        NEWSLETTERS
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[newsletters.email]');
        if ($this->form_validation->run() == TRUE) {
            $this->layout = 'ajax';
            $this->db->insert('newsletters', [
                'email' => $this->input->post('email')
            ]);
            $data['success'] = true;
            echo "<p><i class='fa fa-check-circle'></i> Your email has been added to our newsletter</p>";
            exit();
        }
        if ($_POST && validation_errors()) {
            $this->layout = 'ajax';
            echo "<p class='error-msg'><i class='fa fa-times-circle'></i> The Email field must contain a unique value.</p>";
            exit();
        }
    }

}
