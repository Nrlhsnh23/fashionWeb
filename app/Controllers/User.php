<?php

namespace App\Controllers;
use App\Models\ProductModel; 
use App\Models\VisitorModel; 

use App\Controllers\BaseController;

class User extends BaseController
{
   public function __construct() {
    $this->productModel = new ProductModel();
    $this->VisitorModel = new VisitorModel();
}

public function index()
{
    return view('/base/baseHome');
}

public function fashion()
{
    $products = $this->productModel->where('category', 'Tren_Fashion')->findAll();
    $product = $this->productModel->where('category', 'Tren_Fashion')->orderBy('id', 'desc')->first();

    $data = [
        'products' => $products,
        'product' => $product
    ];

    return view('base/baseFashion', $data);
}

public function beauty()
{
    $products = $this->productModel->where('category', 'Beauty')->findAll();
    $product = $this->productModel->where('category', 'Beauty')->orderBy('id', 'desc')->first();

    $data = [
        'products' => $products,
        'product' => $product
    ];

    return view('base/baseBeauty', $data);
}

public function lifestyle()
{
    $products = $this->productModel->where('category', 'Life_Culture')->findAll();
    $product = $this->productModel->where('category', 'Life_Culture')->orderBy('id', 'desc')->first();

    $data = [
        'products' => $products,
        'product' => $product
    ];

    return view('base/baseLifestyle', $data);
}

public function home()
{
    $products = $this->productModel->orderBy('id', 'desc')->findAll();

    $payload = [
        'products' => $products
    ];

    return view('base/baseHome', $payload);
}

public function detail($id)
{
    $product = $this->productModel->where('id', $id)->first();
    $products = $this->productModel->orderBy('id', 'desc')->findAll(1);

    $data = [
        'product' => $product,
        'products' => $products
    ];

    if($id != 0){
        $payload = [
            "id_product" => $id,
            "category" => $product['category'],
            "date_visit" => date('Y-m-d')      
        ];

        $this->VisitorModel->insert($payload);
    }

    return view('base/detailProduct', $data);
}

// logic untuk search 
public function search()
    {

        $product = new ProductModel();
        $cari = $this->request->getGet('cari');
        
        $data = $product->searchByName($cari)->findAll();
        return view('base/baseSearch', ['data' => $data]);
    
    }


}
