@extends('admin.main')
@section('content')
    <main class="app-main">
        <div class="card card-primary card-outline mx-2 my-2">
            <div class="card-header">
                <div class="card-title">Обновить книгу</div>
            </div>
            <form action="{{route("admin.books.update", $book->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <x-forms::input title="Название" name="title" value="{{$book->title}}"/>
                    <x-forms::input title="Описание" name="description" value="{{$book->description}}"/>
                    <x-forms::checkbox title="Активный" name="is_active" value="{{$book->is_active}}"/>
                    <x-forms::input title="Год написания" name="age" value="{{$book->age}}"/>
                    <x-forms::input title="Время" name="time" value="{{$book->time}}"/>
                    <x-forms::input title="Номер в цикле" name="cycle_number" value="{{$book->cycle_number}}"/>
                    <x-forms::input title="Цикл" name="cycle_id" value="{{$book->cycle_id}}"/>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Обновить</button>
                </div>
            </form>
        </div>
    </main>
@endsection

