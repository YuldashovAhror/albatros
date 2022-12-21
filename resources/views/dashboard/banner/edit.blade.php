@extends('layouts.dashboard.main')
@section('content')
{{-- @dd('asd') --}}
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Баннер </h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Изменить</h5>
    </div>
    <div class="card-body">
        <form action="{{route('dashboard.banner.update', $banner->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4">
                <div class="col-md-4" style="margin-top: 12rem">
                    <label class="form-label" >Название статуса</label>
                    <select name="products" class="form-control"  required="">
                        @foreach (App\Models\Product::all() as $products)
                            <option value="{{ $products->id }}">{{ $products->name_ru}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="photo">Фото</label>
                    <td><img src="{{$banner->photo}}" alt="" style="width: 200px; height: 200px; padding-bottom: 10px"></td>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..." value="">
                </div>
                <div class="col-md-4">
                    <label class="mobile_photo" for="photo">Мобильный Фото</label>
                    <td><img src="{{$banner->mobile_photo}}" alt="" style="width: 200px; height: 200px; padding-bottom: 10px"></td>
                    <input class="form-control" name="mobile_photo" id="mobile_photo" type="file" placeholder="..."  value="">
                </div>
            </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>

@endsection