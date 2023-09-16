<?php

namespace App\Livewire;

use App\Models\TestModel;
use Livewire\Component;

class Counter extends Component
{
    public $testModel;

    public function __construct()
    {
        $this->testModel = TestModel::findOrFail(1);
    }
    public function increment()
    {
        $testModel = TestModel::findOrFail(1);
        $testModel->number++;
        $testModel->save();
    }

    public function decrement()
    {
        echo "<h1>asdas<h1>";
    }
    public function render()
    {
        $count = TestModel::findOrFail(1)->number;
        return view('livewire.counter',compact('count'));
    }
}
