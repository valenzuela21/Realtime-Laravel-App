<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Events\OrderUpdated;

class OrderStatus extends Component
{
    public $order;

    public function mount()
    {
        $this->order = Order::orderBy('id', 'desc')->first();
    }

    #[On('echo:my-channel,OrderUpdated')]
    public function updateOrder()
    {
        $this->order = Order::orderBy('id', 'desc')->first();
    }

    public function render()
    {
        return view('livewire.order-status');
    }
}
