<div class="content">
    <div class="container">
        @foreach ($orders as $order)
            <div><a href="list_order/{{ $order->id }}">{{ $order->published_at }} - {{ $order->finished_at ? $order->finished_at : 'в процессе' }} | {{ $order->appointment }} | {{ $order->price }} | {{ $order->finished_at ? 'завершен' : 'в процессе' }} | {{ $order->user->title }}</a></div>
        @endforeach
    </div>
</div>