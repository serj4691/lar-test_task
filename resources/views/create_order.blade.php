<div class="content">
    <div class="container">
        <form action="/new_save" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
            {{ csrf_field() }}
            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="begin">Начало</label>
                <div class="col-sm-9">
                  <input type="datetime-local" name="begin" class="form-control" id="begin" value="Carbon\Carbon::now()" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="finish">Закончен</label>
                <div class="col-sm-9">
                  <input type="datetime-local" name="finish" class="form-control" id="finish" value="" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="title">Описание</label>
                <div class="col-sm-9">
                  <input type="text" name="description" class="form-control" id="title" value="" style="width:800px"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="point">Точка назначения</label>
                <div class="col-sm-9">
                  <input type="text" name="appointment" class="form-control" id="point" value=""  style="width:500px"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="price">Стоимость</label>
                <div class="col-sm-9">
                  <input type="text" name="price" class="form-control" id="price" value="" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="user">Исполнитель</label>
                <div class="col-sm-9">
                    <select name="user" id="user" class="form-control">
                        <option value=""> -- Выберите --</option>
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