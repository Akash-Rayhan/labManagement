<?php

namespace App\Http\Controllers;

use App\Category;
use App\HardWare;
use App\Http\Requests\CategoryRequest;

use App\Http\Requests\HardWareRequest;
use App\Http\Requests\SubCategoryRequest;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class LabController extends Controller
{
    public function addCategory(){
        return view('addCategory');
    }

    public function storeCategory(CategoryRequest $request){
        $validated = $request->validated();
        Category::create($validated);
        return back()->with('success','Category saved successfully!');
    }

    public function addSubCategory(){
        $data['categories'] = Category::all();
        return view('addSubCategory',$data);
    }

    public function storeSubCategory(SubCategoryRequest $request){
        $validated = $request->validated();
        SubCategory::create($validated);
        return back()->with('success','SubCategory saved successfully!');
    }


    public function addHardWare(){
        $data['subcategories'] = SubCategory::all();

        return view('addHardWare',$data);
    }

    public function storeHardWare(HardWareRequest $request){
        $validated = $request->validated();
        try {
            DB::beginTransaction();
            HardWare::create($validated);
            DB::commit();
            //return back()->with('success','HardWare saved successfully!');
            return redirect(route('hardWareList'));
        } catch (\Exception $e) {
//           dd($e);
            DB::rollBack();
            return redirect()->back()->with('success', __('Something went wrong'));
        }
    }

    public function hardWareList(){
        $data['hardWares'] = HardWare::all();
        return view('hardWareList',$data);
    }

    public function deleteHardWare($id){
        $hardWare = HardWare::find($id);
        $hardWare->delete();
        return redirect(route('hardWareList'));
    }

    public function editHardWare($id){
        $data['subcategories'] = SubCategory::all();
        $data['hardWare'] = HardWare::find($id);
        return view('editHardWare',$data);
    }

    public function updateHardWare(HardWareRequest $request,$id){
        $hardWare = HardWare::find($id);
        $validated = $request->validated();
        $hardWare->name = $validated['name'];
        $hardWare->subcategory_id = $validated['subcategory_id'];
        $hardWare->quantity = $validated['quantity'];
        $hardWare->save();
        return redirect(route('hardWareList'));

    }

    public function searchFilter(Request $request){
        $data['categories'] = Category::all();

        $data['subcategories'] = SubCategory::where('category_id',$request->category_id)->get();
        $data['filteredSubcategories'] = SubCategory::where('id',$request->subcategory_id)->get();
        $data['filteredHardwares'] = HardWare::where('subcategory_id',$request->subcategory_id)->get();
        return view('welcome',$data);
    }

}
