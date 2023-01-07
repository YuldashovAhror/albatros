@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Новости </h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Изменить</h5>
        <img style="margin-left: 10rem; width: 300px; height: 300px;" src="{{$new->photo}}" alt="">
    </div>
    <div class="card-body">
        <form action="{{route('dashboard.news.update', $new->slug)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" >Название статуса</label>
                    <select name="newscategories" class="form-control"  required="">
                            @foreach (App\Models\NewsCategory::all() as $status)
                                <option value="{{ $status->id }}">{{ $status->name_ru}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="date">Даты</label>
                    <input class="form-control" name="date" id="date" type="date" placeholder="..." required="" value="{{$new->date}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="link">Ссылка на видео</label>
                    <div class="input-group">
                        <input class="form-control" name="link" id="link" type="text" placeholder="..." aria-describedby="inputGroupPrepend2"  value="{{$new->link}}">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="title_uz">Название Uz</label>
                    <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" min="2000" max="2099" value="{{$new->title_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="title_ru">Название Ru</label>
                    <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$new->title_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="title_en">Название En</label>
                    <div class="input-group">
                        <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$new->title_en}}">
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..."  value="">
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label for="discription_uz" class="form-label">Описание Uz</label>
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="discription_uz" required>{{$new->discription_uz}}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="discription_ru">Описание Ru</label>
                    <textarea class="ckeditor form-control" name="discription_ru" required>{{$new->discription_ru}}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="discription_en">Описание En</label>
                    <div class="input-group">
                        <textarea class="ckeditor form-control" name="discription_en" required>{{$new->discription_en}}</textarea>
                    </div>
                </div>
            </div>
            <img style="margin-left: 10rem; width: 300px; height: 300px;" src="{{$new->photo_2}}" alt="">
            <div class="row g-4 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="photo_2">Фото 2</label>
                    <input class="form-control" name="photo_2" id="photo_2" type="file" placeholder="..." value="">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>

@endsection