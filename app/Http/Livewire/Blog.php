<?php

namespace App\Http\Livewire;

// use Carbon\Carbon;
use App\Models\Trip;
use Livewire\Component;
// use Illuminate\Support\Facades\DB;

class Blog extends Component
{
    public $title="A Title";
    public $body="Writing";
    public $publish_at;
    public $blogs;


    public function render()
    {
        $this->blogs = Trip::all();
        return view('livewire.blog', [

            'blogs' => $this->blogs,

        ]);
    }
}
