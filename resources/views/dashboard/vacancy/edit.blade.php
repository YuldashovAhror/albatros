@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Вакансия </h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Добавить</h5>
    </div>
    <div class="card-body">
        <form action="{{route('dashboard.vacancy.update',$vacancy->slug)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="name_uz">Название Uz</label>
                    <input class="form-control" name="name_uz" id="name_uz" type="text" placeholder="..." required="" min="2000" max="2099" value="{{$vacancy->name_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="name_ru">Название Ru</label>
                    <input class="form-control" name="name_ru" id="name_ru" type="text" placeholder="..." required="" value="{{$vacancy->name_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="name_en">Название En</label>
                    <div class="input-group">
                        <input class="form-control" name="name_en" id="name_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$vacancy->name_en}}">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label for="discription_uz" class="form-label">Описание Uz</label>
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="discription_uz" required>{{$vacancy->discription_uz}}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="discription_ru">Описание Ru</label>
                    <textarea class="ckeditor form-control" name="discription_ru" required>{{$vacancy->discription_ru}}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="discription_en">Описание En</label>
                    <div class="input-group">
                        <textarea class="ckeditor form-control" name="discription_en" required>{{$vacancy->discription_en}}</textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>
@endsection