<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\product;


class ProductController extends BaseController
{
    public function addForm()
    {
        // lấy dữ liệu từ bảng danh mục
        $cates = Category::all();
        $this->render('product.add-form', ["cates" => $cates]);
    }
    public function saveAdd()
    {
        $requestData = $_POST;
        $imgFile = $_FILES['image'];

        $model = new Product();

        // quy trình bình thường
        // gán các giá trị của form cho các thuộc tính của instance
        // các thuộc tình phải trùng tên với các cột trong bảng mà model đại diện
        // $model->name = $requestData['name'];
        // $model->cate_id = $requestData['cate_id'];
        // $model->price = $requestData['price'];
        // $model->short_desc = $requestData['short_desc'];
        // $model->detail = $requestData['detail'];
        // $model->star = $requestData['star'];
        // $model->views = $requestData['views'];

        $model->fill($requestData);

        $filename = "";
        // nếu có ảnh up lên thì lưu ảnh
        if ($imgFile['size'] > 0) {
            $filename = uniqid() . '-' . $imgFile['name'];
            move_uploaded_file($imgFile['tmp_name'], './public/uploads/' . $filename);
            $filename = 'public/uploads/' . $filename;
        }
        $model->image = $filename;
        $model->save();
        header('location: ./');
    }
    public function remove()
    {
        $removeId = isset($_GET['id']) ? $_GET['id'] : null;
        if (!$removeId) {
            header("location: ./?msg=không đủ thông tin để xóa");
            die;
        }
        // kiểm tra xem id có thật hay không
        $model = Product::find($removeId);

        if (!$model) {
            $msg = "id không tồn tại!";
        } else {
            Product::destroy($removeId);
            $msg = "Xóa sản phẩm thành công";
        }

        header("location: ./?msg=$msg");
        die;
    }
}
