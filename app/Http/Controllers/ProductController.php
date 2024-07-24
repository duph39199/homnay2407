<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $view;
    public function __construct()
    {
        $this->view = [];
    }
    public function index()
    {
        //
        //  khởi tạo model
        $objPro = new Product();
        $this->view['listPro'] = $objPro->loadDataWithPager();
        // truy van + logic
        $objCate = new Category();
        $listCate = $objCate->loadAllCate();
        $arrayCate = [];
        foreach ($listCate as $value){
            $arrayCate[$value->id] = $value->name;
        }
        $this->view['listCate'] =  $arrayCate;
        // dd($this->view['listPro']);
        return view('product.index', $this->view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $objCate = new Category();
        $this->view['listCate'] = $objCate->loadAllCate();
        return view('product.create', $this->view);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $validate = $request->validate(
            [
                'name'=> ['required', 'string', 'max:255'],
                'price'=> ['required', 'integer', 'min:1'],
                'quantity'=> ['required', 'integer', 'min:1'],
                'image'=> ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
                'category_id'=> ['required', 'exists:categories,id']
            ],
            [
                'name.required'=>'Trường tên không được bỏ trống',
                'name.string'=>'Tên bắt buộc là chuỗi',
                'name.max'=>'Trường tên không được vượt quá 255 ký tự',

                'price.required'=>'Truong price khong duoc bo trong',
                'price.integer'=>'Truong gia phai la so nguyen',
                'price.min'=>'Truong ten khong duoc < 1',

                'quantity.required'=>'Truong quantity khong duoc bo trong',
                'quantity.integer'=>'Truong gia phai la so nguyen',
                'quantity.min'=>'Truong ten khong duoc < hon 1',

                'image.required'=>'Truong anh khong duoc bo trong',
                'image.image'=>'Truong gia phai la so nguyen',
                'image.mimes'=>'Truong anh bat buoc phai laf duoi .igf, png, jpeg',
                'image.max'=>'Truong anh khong qua 2048kb',

                'category_id.required'=>'Truong anh khong duoc bo trong',
                'category_id.exists'=>'Truong category_id phai chon',
            ]
        );

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }
}