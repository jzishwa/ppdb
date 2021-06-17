<?php


class About extends Controller
{

    public function index()
    {
        echo 'about/index';
    }

    public function page()
    {
        echo 'about/page';
    }

    public function parameter($id)
    {
        echo 'about/parameter/' . $id;
    }
}
