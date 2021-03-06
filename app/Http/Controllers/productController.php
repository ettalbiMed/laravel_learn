<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class productController extends Controller
{
        /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
        //$this->middleware('auth');
    }

    public function index() {
        $products = $this->productRepository->all();
        dd($products[0]->categories[0]->id);

        return view('home',$products);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $fields = array("reference" => "vice 35 MM", "designation" => "un moteur de telechargement de materiels", "user_id" => 1);
        $save = $this->productRepository->create($fields);
        if($save)
            return $save;

        return null;
        

        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        $product = $this->productRepository->find($id, ['id', 'reference'],array('id'=> 1, 'reference'=> "Gabrielle Rutherford DVM"));
        dd($product);
        return view('product',$product);
        
        //
    }

    public function get_by_filter(Request $request) 
    {

        //array('id'=> 1, 'reference'=> "Gabrielle Rutherford DVM")
        $products = $this->productRepository->criteria(['id', 'reference'],[['id', '>', '0'],['reference', 'like', 'Gabrielle Rutherford DVM']]);
        dd($products);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id, ['id', 'reference']);
        return view('product',$product);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fields = array("reference" => "vice 41 MM", "designation" => "un moteur de telechargement de materiels", "user_id" => 1);
        $save = $this->productRepository->update($id, $fields);
        if($save)
            return $save;

        return null;
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $save = $this->productRepository->delete($id);
        if($save)
            return $save;

        return null;
        //
    }
}
