<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Http\Request;

class EditJobCategoryComponent extends Component
{
    public $category;
    public function mount($id){
        $this->category = Category::find($id);
    }

    public function updateCategory( $id,Request $request)
    {
        $data = $request->validate([
            'cat_name' =>'required',
        ]);
        $category = Category::findOrFail($id);
        $category->cat_name = $request->cat_name;        
        $category->save();
        session()->flash('message', 'Category Updated successfully !');
            return redirect()->route('jobcatList');
    }

    public function render()
    {
        return view('livewire.edit-job-category-component');
    }
}
