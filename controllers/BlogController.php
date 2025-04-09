<?php

class BlogController extends Controller {
    public function index() {
        if (!isset($_SESSION['user'])) {
            $this->view('blog', ['message' => 'Tin Tức']);
        } else {
            $this->view('blog', ['message' => 'Tin Tức, Xin chào ' . $_SESSION['user']['fullname'] . '!']);
        }
    }
}
