<?php

class Tricks extends CIF_Controller {

    public $layout = 'full';
    public $module = 'tricks';
    public $model = 'Blog_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index($offset = 0) {

        config('pagination_limit', 8);
        $this->load->library('pagination');
        $config['total_rows'] = $this->{$this->model}->get(TRUE);
        $config['suffix'] = '?' . http_build_query($_GET);
        $config['base_url'] = site_url('tricks/index/');
        $config['per_page'] = config('pagination_limit');
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        if ($this->uri->segment(2))
            $this->{$this->model}->offset = $offset;

        $data['total'] = $config['total_rows'];
        $this->{$this->model}->limit = config('pagination_limit');
        $data['items'] = $this->{$this->model}->get();
        $this->load->view($this->module, $data);
    }

    public function trick($permalink) {

        $data = array();
        if (!$permalink)
            show_404();

        $this->db->where('permalink', $permalink)->set("visits", "visits + 1", FALSE)->update('blog');

        $this->{$this->model}->permalink = $permalink;
        $data['item'] = $this->{$this->model}->get()[0];
        if (!$data['item'])
            show_404();
        config('title', config('title') . ' - ' . $data['item']->title);

        $this->load->view('trick', $data);
    }

}
