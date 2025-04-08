<?php
class ErrorController extends Controller {
    public function Error404() {
        http_response_code(404);
        $this->view("error/404");
    }
    public function Error500() {
        http_response_code(500);
        $this->view("error/500");
    }
}