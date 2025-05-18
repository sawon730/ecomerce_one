<?php

namespace App\Livewire;

<<<<<<< HEAD
use App\Models\Category;
use App\Models\Subcategory;
=======
>>>>>>> 110997d776896d3591ccdd5dbb17958366d915b4
use Livewire\Component;

class CategorySubcategory extends Component
{
<<<<<<< HEAD
    public $categories = [];
    public $selectedCategory;
    public $subcategories = [];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updatedSelectedCategory($categoryId)
    {
        
        $this->subcategories = Subcategory::where('category_id', $categoryId)->get();
    }

=======
>>>>>>> 110997d776896d3591ccdd5dbb17958366d915b4
    public function render()
    {
        return view('livewire.category-subcategory');
    }
}
<<<<<<< HEAD



=======
>>>>>>> 110997d776896d3591ccdd5dbb17958366d915b4
