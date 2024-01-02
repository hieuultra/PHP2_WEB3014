<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController
{
    public function index()
    {
        echo "ds category";
    }
    public function addData()
    {
        $name = 'Giày thể thao';
        $slug = 'giay-the-thao';
        $showMenu = 0;
        $desc = "something";

        $model = new Category();
        $model->cate_name = $name;
        $model->slug = $slug;
        $model->show_menu = $showMenu;
        $model->desc = $desc;

        $model->save();
    }
    public function editData()
    {
        $id = 4;
        $name = 'Túi da';
        $slug = 'tui-da';

        $model = Category::find($id);
        $model->cate_name = $name;
        $model->slug = $slug;
        $model->save();
    }
    public function delete()
    {
        $id = $_GET['id'];
        Category::destroy($id);
    }
}
