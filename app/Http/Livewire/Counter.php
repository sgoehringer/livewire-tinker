<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class Counter extends Component
{
    public $count = 10;
    public $time;


    public function increment($now)
    {
    		
    		// Get the current count
    		$val = $this->count;

    		// Increment it
    		$val++;

    		// Return it
    		$this->count = $val;

    		// Get the time, return it, and send it to message
        $time = $this->time = Carbon::now()->toDayDateTimeString();

        Log::channel('slack-info')->info('Counter Up: '.$val.' and it was '.$time);
    }

    public function decrement()
    {

    		// Get the current count
    		$val = $this->count;

    		// Decrease it
    		$val--;

    		// Return it
    		$this->count = $val;

    		// Get the time, return it, and send it to message
        $time = $this->time = Carbon::now()->toDayDateTimeString();

        Log::channel('slack-info')->info('Counter Down: '.$val.' and it was '.$time);
    }

    public function render()
    {

        $this->time = strval(Carbon::now());

        return view('livewire.counter');
    }
}