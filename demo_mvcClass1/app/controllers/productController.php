<?php 
    namespace App\controllers;
    //require_once 'app/models/product.php';
    use App\models\Product;
    use eftec\bladeone\BladeOne;
    class ProductController extends Product{
        public $views;
        function __construct(){
            $views = "app/views";
            $cache = "app/cache";
            $this->views = new BladeOne($views, $cache, BladeOne::MODE_AUTO);     
        }

        function listProduct(){
            //$pro = new Product();
            $product = $this->getAllProduct();
            //var_dump($product);
           // require_once 'app/views/product/list.php';
            return $this->views->run('product.show', ['pro' => $product]);
        }
        function index(){
            echo "day là trang test";
        }
    
        function addProduct(){
            return $this->views->run('product.add');
        }

        function addPro(){
            //$pro = new Product();
           // if(isset($_POST['save'])){
                $productModel = new Product();
                echo $_POST['name'];
                $productModel->add($_POST['name'], $_POST['price']);
                header ("location: http://localhost/PHP2/WD18309/demo_mvcClass1/list");  

           // }
            
        }
            function getProductById($id){
           // $id = $value['id'];           
            //echo $_GET['id'];
           $product = $this->getProById($id);
           var_dump($product);
           return $this->views->run('product.update', ['product' => $product]);
            //include_once 'app/views/product/updateProduct.php';
        }

            function update($id){    
                $productModel = new Product();
                $productModel->updatePro($id, $_POST['name'], $_POST['price']);
                header ("location: ".route('list'));  
        }

        function delete(){
                $productModel = new Product();
                $productModel->del($_GET['id']); 
                header ("location: list");
            }  
    
    }

   
?>