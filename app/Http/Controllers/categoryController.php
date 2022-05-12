<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
        /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    protected $categoryRepository;

    public function __construct(ProductRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        //$this->middleware('auth');
    }

    public function index() {
        $categories = $this->categoryRepository->all();

        return view('home',$categories);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $fields = array("name" => "vice 35 MM", "user_id" => 1);
        $save = $this->categoryRepository->create($fields);
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
        $category = $this->categoryRepository->find($id, ['id', 'name'],array('id'=> 1, 'name'=> "Gabrielle Rutherford DVM"));
        dd($category);
        return view('category',$category);
        
        //
    }

    public function get_by_filter(Request $request) 
    {

        //array('id'=> 1, 'reference'=> "Gabrielle Rutherford DVM")
        $categories = $this->category->criteria(['id', 'name'],[['id', '>', '0'],['name', 'like', 'Gabrielle Rutherford DVM']]);
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
        $category = $this->categoryRepository->find($id, ['id', 'name']);
        return view('category',$category);
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
        $fields = array("name" => "vice 41 MM", "user_id" => 1);
        $save = $this->categoryRepository->update($id, $fields);
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
        $save = $this->categoryRepository->delete($id);
        if($save)
            return $save;

        return null;
        //
    }
}
