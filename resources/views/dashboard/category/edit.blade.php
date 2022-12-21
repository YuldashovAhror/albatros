@extends('layouts.dashboard.main')
@section('content')
{{-- @dd('asd') --}}
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Категория </h3>
</div>
<div class="card">
    <div class="card-header pb-0">
    <h5>Изменить</h5>
        <div class="card-header pb-0">
            <img  src="{{$category->photo}}" alt="">
        </div>
    <div class="card-body">
        <form action="{{route('dashboard.category.update', $category->slug)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4">
                <div class="col-md-8">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..." value="">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" >Бренд статуса</label>
                    <select name="brends" class="form-control"  required="">
                            @foreach (App\Models\Brend::all() as $brend)
                                <option value="{{ $brend->id }}">{{ $brend->name_ru}}</option>
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="name_uz">Название Uz</label>
                    <input class="form-control" name="name_uz" id="name_uz" type="text" placeholder="..." required="" min="2000" max="2099" value="{{$category->name_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="name_ru">Название Ru</label>
                    <input class="form-control" name="name_ru" id="name_ru" type="text" placeholder="..." required="" value="{{$category->name_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="name_en">Название En</label>
                    <div class="input-group">
                        <input class="form-control" name="name_en" id="name_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$category->name_en}}">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>

@endsection