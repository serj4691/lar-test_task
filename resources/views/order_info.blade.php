<div class="content">
    <div class="container">
        <div><a href="/order_edit/{{ $order->id }}">Номер заказа - {{ $order->id }}</a></div>
        <div>Начало - {{ $order->published_at }}</div> 
        <div>Закончен - {{ $order->finished_at ?  $order->finished_at : 'В процессе' }}</div>   
        <div>Описание - {{ $order->description }}</div>
        <div>Точка назначения - {{ $order->appointment }}</div>
        <div>Стоимость - {{ $order->price }}</div>
        <div>Исполнитель - {{ $order->user->title ? $order->user->title : 'Не назначен'}}</div>    
    </div>
</div>