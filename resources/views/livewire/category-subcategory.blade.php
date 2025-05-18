<div>
<<<<<<< HEAD
    <label for="category_id" class="fw-bold mb-2">Slect A Category For Your Product</label>

    <select class="form-control mb-2" name="category_id" wire:model.live="selectedCategory">
        <option value="">Select A Category</option>
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->category_name}}</option>
        @endforeach
    </select>


    <label for="subcategory_id" class="fw-bold mb-2">Slect A Sbu-Category For Your Product</label>

    <select class="form-control mb-2" name="subcategory_id">
        <option value="">Select A Sub Category</option>
        @foreach ($subcategories as $subcategory)
        <option value="{{$subcategory->id}}">{{$subcategory->subcategory_name}}</option>
        @endforeach
    </select> 
=======
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <h2>Our category subcategory livewire component </h2>
>>>>>>> 110997d776896d3591ccdd5dbb17958366d915b4
</div>
