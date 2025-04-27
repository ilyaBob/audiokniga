@extends('admin.main')
@section('content')
    <main class="app-main">
        <div class="card card-primary card-outline mx-2 my-2">
            <div class="card-header">
                <div class="card-title">Создать книгу</div>
            </div>
            <form action="{{route("admin.books.store")}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <x-forms::input title="Название" name="title"/>
                    <x-forms::input title="Описание" name="description"/>
                    <x-forms::checkbox title="Активный" name="is_active"/>
                    <x-forms::input title="Год написания" name="age"/>
                    <x-forms::input title="Время" name="time"/>
                    <x-forms::input title="Номер в цикле" name="cycle_number"/>
                    <x-forms::input title="Цикл" name="cycle_id"/>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Создать</button>
                </div>
            </form>
        </div>
    </main>
@endsection

