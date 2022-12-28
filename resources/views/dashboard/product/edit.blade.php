@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Продукты </h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Добавить</h5>
    </div>
    <div class="card-body">
        <form action="{{route('dashboard.product.update', $product->slug)}}" method="POST" enctype="multipart/form-data">
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
                    <label class="form-label" >Название статуса</label>
                    <select name="newscategories" class="form-control"  required="">
                            @foreach (App\Models\NewsCategory::all() as $status)
                                <option value="{{ $status->id }}">{{ $status->name_ru}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="link">Ссылка на видео</label>
                    <div class="input-group">
                        <input class="form-control" name="link" id="link" type="text" placeholder="..." aria-describedby="inputGroupPrepend2"  value="{{$product->link}}">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="name_uz">Название Uz</label>
                    <input class="form-control" name="name_uz" id="name_uz" type="text" placeholder="..." required="" value="{{$product->name_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="name_ru">Название Ru</label>
                    <input class="form-control" name="name_ru" id="name_ru" type="text" placeholder="..." required="" value="{{$product->name_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="name_en">Название En</label>
                    <div class="input-group">
                        <input class="form-control" name="name_en" id="name_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$product->name_en}}">
                    </div>
                </div>
            </div>
            <img src="{{$product->photo}}" alt="" style="width: 300px; height: 300px; margin-left: 35rem"></td>
            <div class="row g-4 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..." value="">
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label for="discription_uz" class="form-label">Описание Uz</label>
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="discription_uz" required>{{$product->discription_uz}}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="discription_ru">Описание Ru</label>
                    <textarea class="ckeditor form-control" name="discription_ru" required>{{$product->discription_ru}}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="discription_en">Описание En</label>
                    <div class="input-group">
                        <textarea class="ckeditor form-control" name="discription_en" required>{{$product->discription_en}}</textarea>
                    </div>
                </div>
            </div>
            <img src="{{$product->instruct_photo}}" alt="" style="width: 300px; height: 300px; margin-left: 35rem"></td>
            <div class="row g-4 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="instruct_photo">Проинструктировать фото</label>
                    <input class="form-control" name="instruct_photo" id="instruct_photo" type="file" placeholder="..." value="">
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label for="discription_uz" class="form-label">Характеристика Uz</label>
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="charactiristic_uz">{{$product->charactiristic_uz}}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="discription_ru">Характеристика Ru</label>
                    <textarea class="ckeditor form-control" name="charactiristic_ru">{{$product->charactiristic_ru}}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="discription_en">Характеристика En</label>
                    <div class="input-group">
                        <textarea class="ckeditor form-control" name="charactiristic_en">{{$product->charactiristic_en}}</textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>

@endsection