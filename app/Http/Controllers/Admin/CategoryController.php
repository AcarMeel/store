<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::all();
      //  dd($categories);
      return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request,[
          'name'=>'required|unique:categories|max:255',
          'color'=>'required'
          ]);

          $category= Category::create([
            'name'=>$request->get('name'),
            'slug'=>str_slug($request->get('name')),
            'description'=>$request->get('description'),
            'color'=>$request->get('color')
            ]);

            $message= $category ? 'Category was added succesfully' : 'Could not add the new category';

            return redirect()->route('admin.category.index')->with('message',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,Category $category)
    {
        $category->fill($request->all());
        $category->slug=str_slug($request->get('name'));
        $updated=$category->save();
        $message= $updated ? 'Category was updated succesfully' : 'Could not update the new category';

        return redirect()->route('admin.category.index')->with('message',$message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Category $category)
    {
      $deleted = $category->delete();
      $message = $deleted ? 'Category was removed succesfully' : 'Could not remove category';
        return redirect()->route('admin.category.index')->with('message',$message);
    }
}
