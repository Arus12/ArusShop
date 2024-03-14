<?php
class getContent
{
    public $page = "mainPage";
    public function get_content()
    {
        if (isset($_GET['page'])) {
            $this->page = $_GET['page'];
        }
        return print(file_get_contents("./html/$this->page.html"));
    }
    public function get_products(){
        $products_html = file_get_contents("./html/products.html");
        return print($products_html);
    }
}
