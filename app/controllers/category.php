<?php 
class category extends DController
{
    
    public function __construct(){
        $data = array();
        $message = array();
        parent::__construct();
    }
    public function list_category(){
        $this->load->view('header');
        $categorymodel=$this->load->model('categorymodel');
        $table_category_product = 'tbl_category_product';
        $data['category']=$categorymodel->category($table_category_product);
        $this->load->view('category',$data);
        $this->load->view('footer');
    }
    public function cateById(){
        $this->load->view('header');
        $categorymodel=$this->load->model('categorymodel');
        $id = 2;
        $table_category_product = 'tbl_category_product';
        $data['categorybyid']=$categorymodel->categorybyid($table_category_product,$id);
        $this->load->view('categorybyid',$data);
        $this->load->view('footer');
    }
    public function addcategory()
    {
        $this->load->view('addcategory');
    }
    public function insertcategory(){
        $categorymodel=$this->load->model('categorymodel');
        $table_category_product = 'tbl_category_product';
        $title = $_POST['title'];
        $desc = $_POST['description'];
        $data = array(
            'title_category_product' => $title,
            'desc_category_product' => $desc
        );
        $result = $categorymodel->insertcategory($table_category_product,$data);
        if($result==1){
            $message['msg']="Thêm dữ liệu thành công";
        }else{
            $message['msg'] = "Thêm dữ liệu thất bại";
        }
        $this->load->view('addcategory',$message['msg']);
        
    }
    public function updatecategory(){
        $categorymodel=$this->load->model('categorymodel');
        $table_category_product = 'tbl_category_product';
        // $title = $_POST['title'];
        // $desc = $_POST['description'];
        $id=3;
        $cond = "tbl_category_product.id_category_product='$id'";
        $data = array(
            'title_category_product' => 'title_category_product',
            'desc_category_product' => 'desc_category_product'
        );
        $result = $categorymodel->updatecategory($table_category_product,$data,$cond);
        if($result==1){
            echo"Cập nhật thành công";
        }else{
            echo "Cập nhật thất bại";
        }
        
    }
    public function deletecategory(){
        $categorymodel=$this->load->model('categorymodel');
        $table_category_product = 'tbl_category_product';
        // $title = $_POST['title'];
        // $desc = $_POST['description'];
        // $id=3;
        $cond = "id_category_product=3";
        $result = $categorymodel->deletecategory($table_category_product,$cond);
        if($result==1){
            echo"Xóa thành công";
        }else{
            echo "Xóa thất bại";
        }
        
    }
}

