@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Бренд </h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Изменить</h5>
        <div class="card-header pb-0">
            <img  src="{{$brend->photo}}" alt="">
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('dashboard.brend.update', $brend->slug)}}" method="POST" enctype="multipart/form-data">
            {{-- @dd('asd') --}}
            @csrf
            {{ method_field('put') }}
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..." value="">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="brend_number">Номер марки</label>
                    <div class="input-group">
                        <input class="form-control" name="brend_number" id="brend_number" type="number" placeholder="..." aria-describedby="inputGroupPrepend2" min="1" max="9"  value="{{$brend->brend_number}}">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="link">Ссылка на видео</label>
                    <div class="input-group">
                        <input class="form-control" name="link" id="link" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$brend->link}}">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="name_uz">Название Uz</label>
                    <input class="form-control" name="name_uz" id="name_uz" type="text" placeholder="..." required="" min="2000" max="2099" value="{{$brend->name_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="name_ru">Название Ru</label>
                    <input class="form-control" name="name_ru" id="name_ru" type="text" placeholder="..." required="" value="{{$brend->name_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="name_en">Название En</label>
                    <div class="input-group">
                        <input class="form-control" name="name_en" id="name_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$brend->name_en}}">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label for="discription_uz" class="form-label">Описание Uz</label>
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="discription_uz" required>{{$brend->discription_uz}}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="discription_ru">Описание Ru</label>
                    <textarea class="ckeditor form-control" name="discription_ru" required>{{$brend->discription_ru}}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="discription_en">Описание En</label>
                    <div class="input-group">
                        <textarea class="ckeditor form-control" name="discription_en" required>{{$brend->discription_en}}</textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>

@endsection