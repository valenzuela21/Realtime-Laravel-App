<?php

namespace App\Console\Commands;

use App\Events\OrderUpdated;
use App\Models\Order;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Console\Command;
use function Laravel\Prompts\confirm;
use function Laravel\Prompts\info;
use function Laravel\Prompts\select;
class ChangeStatusOrderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'changestatusorder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        //
        info('Change status order');
        $confirmed = confirm('Vamos a crear un order nuevo');
        if (!$confirmed) {
            return;
        }
        $order = new Order();
        $order->save();
        $status = "pending";
        while ($status != 'exit') {
            $status = select(
                label: 'A que estado cambiamos el order?',
                options: ['pending', 'processing', 'completed', 'declined', 'exit']
            );

            if ($status == 'exit') {
                break;
            }
            $order->status = $status;
            $order->save();
            //event(new OrderUpdated("Order status changed to $status"));
            broadcast(new OrderUpdated("Order status changed to $status"));

        }
    }
}
