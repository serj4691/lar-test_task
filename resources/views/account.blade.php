<div class="content">
    <div class="container">
        <h3>{{ $users->title }}</h3>
        @foreach ($orders as $order)
            <div>{{ $order->published_at }} - {{ $order->finished_at ? $order->finished_at : 'в процессе' }} | {{ $order->appointment }} | {{ $order->price }} | {{ $order->finished_at ? 'завершен' : 'в процессе' }}</div>
        @endforeach
    </div>
</div>