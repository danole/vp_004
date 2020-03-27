Изменить товар
<form action="{{route('updateSelectProduct')}}" method="post">
    {{ csrf_field()}}
    <p>Введите название товара</p>
    <input type="text" name="title" value="{{$changeTitle}}">
    <p>Введите категорию товара</p>
    <input type="number" name="category_id" value="{{$changeCategory_id}}">
    <p>Введите цену товара</p>
    <input type="number" name="price" value="{{$changePrice}}">
    <p>Введите путь к картинке</p>
    <input type="text" name="image" value="{{$changeImage}}">
    <p>Введите описание товара</p>
    <textarea name="description" cols="30" rows="10">{{$changeDescription}}</textarea><br><br>
    <input type="hidden" name="id" value="{{$changeId}}">
    <input type="submit" name="submit" value="Изменить товар"><br><br>
    @if(!empty($error))
        @foreach($error as $value)
            {{$value}}
        @endforeach
    @endif
</form>
<a href="{{route('admin')}}">На главную</a>
