@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Информация</h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Добавить</h5>
    </div>
    <div class="card-body">
        <form action="{{route('dashboard.info.update',$info->slug)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" >Инфо_категория</label>
                    <select name="infocategories" class="form-control"  required="">
                            @foreach (App\Models\InfoCategory::all() as $status)
                                <option value="{{ $status->id }}">{{ $status->name_ru}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col-md-8">
                    <label class="form-label" for="info_photo">Информация _фото</label>
                    <input class="form-control" name="info_photo" id="info_photo" type="file" placeholder="..." value="">
                </div>
            </div>
            <div class="row g-4 mt-1">
                <div class="col-md-4">
                    <label class="form-label" for="name_uz">Название Uz</label>
                    <input class="form-control" name="name_uz" id="name_uz" type="text" placeholder="..." required="" value="{{$info->name_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="name_ru">Название Ru</label>
                    <input class="form-control" name="name_ru" id="name_ru" type="text" placeholder="..." required="" value="{{$info->name_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="name_en">Название En</label>
                    <div class="input-group">
                        <input class="form-control" name="name_en" id="name_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$info->name_en}}">
                    </div>
                </div>
            </div>
            <div class="row g-4 ">
                <div class="col-md-4">
                    <label class="form-label" for="presentation_photo">Презентация_фото</label>
                    <input class="form-control" name="presentation_photo" id="presentation_photo" type="file" placeholder="..."  value="">
                </div>
                <div class="col-md-8">
                    <label class="form-label" for="link">Ссылка на видео</label>
                    <input class="form-control" name="link" id="link" type="text" placeholder="..." value="{{$info->link}}">
                </div>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Сохранить</button>
        </form>
    </div>
</div>

@endsection