<div class="content">
    <div class="container">
        <form action="/edit_save/{{$order->id}}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <input type="hidden" class="form-control" name="order_id" value="{{$order->id}}" />
            <div>Начало - {{ $order->published_at }}</div> 
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="finish">Закончен</label>
                <div class="col-sm-9">
                  <input type="date" name="finish" class="form-control" id="finish" value="{{$order->finished_at ?  $order->finished_at : 'В процессе'}}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="title">Описание</label>
                <div class="col-sm-9">
                  <input type="text" name="description" class="form-control" id="title" value="{{$order->description}}" style="width:800px"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="point">Точка назначения</label>
                <div class="col-sm-9">
                  <input type="text" name="appointment" class="form-control" id="point" value="{{$order->appointment}}"  style="width:500px"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="price">Стоимость</label>
                <div class="col-sm-9">
                  <input type="text" name="price" class="form-control" id="price" value="{{$order->price}}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="user">Исполнитель</label>
                <div class="col-sm-9">
                    <select name="user" id="user" class="form-control">
                        <option value="{{ $order->get_user->id }}"> {{$order->get_user->title ? $order->get_user->title : 'Не назначен'}}</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->title }}</option>
                        @endforeach 
                    </select>  
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Сохранить</button>  
        </form>
    </div>
</div>