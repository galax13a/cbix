<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Page;

class Pages extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $title, $slug, $content, $meta_title, $meta_keywords, $meta_description, $featured_image, $active;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.pages.view', [
            'pages' => Page::with('user')->latest()

                ->where('user_id', auth()->id())
                ->where(function ($query) use ($keyWord) {     
                    $query->where('name', 'LIKE', $keyWord)        
                    ->orWhere('slug', 'LIKE', $keyWord); 
                })->paginate(10)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->title = null;
		$this->slug = null;
		$this->content = null;
		$this->meta_title = null;
		$this->meta_keywords = null;
		$this->meta_description = null;
		$this->featured_image = null;
		$this->active = null;
    }

    public function store()
    {
        $this->validate([
		'title' => 'required',
		'slug' => 'required',
		'content' => 'required',
		'active' => 'required',
        ]);

        Page::create([ 
			'name' => $this-> name,
			'title' => $this-> title,
			'slug' => $this-> slug,
			'content' => $this-> content,
			'meta_title' => $this-> meta_title,
			'meta_keywords' => $this-> meta_keywords,
			'meta_description' => $this-> meta_description,
			'featured_image' => $this-> featured_image,
			'active' => $this-> active
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Page Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Page::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->title = $record-> title;
		$this->slug = $record-> slug;
		$this->content = $record-> content;
		$this->meta_title = $record-> meta_title;
		$this->meta_keywords = $record-> meta_keywords;
		$this->meta_description = $record-> meta_description;
		$this->featured_image = $record-> featured_image;
		$this->active = $record-> active;
    }

    public function update()
    {
        $this->validate([
		'title' => 'required',
		'slug' => 'required',
		'content' => 'required',
		'active' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Page::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'title' => $this-> title,
			'slug' => $this-> slug,
			'content' => $this-> content,
			'meta_title' => $this-> meta_title,
			'meta_keywords' => $this-> meta_keywords,
			'meta_description' => $this-> meta_description,
			'featured_image' => $this-> featured_image,
			'active' => $this-> active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Page Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Page::where('id', $id)->delete();
        }
    }
}