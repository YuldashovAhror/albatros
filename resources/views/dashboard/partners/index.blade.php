@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Категория новостей </h3>
</div>
{{-- @dd($newscats) --}}
<div class="card">
    <div class="card-header pb-0">
        <h5>Добавить</h5>
    </div>
    <div class="card-body">
        <form action="{{route('dashboard.partners.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-4">
                <div class="col-md-12 mb-3">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..." required=""  value="">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Статус Список</h3>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header">
                <h5>Список</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Фото</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                        <?php
                        $num = 1;
                        ?>
                        <tbody>
                    @foreach ($partners as $partner)
                    <tbody>
                        <tr>
                            <th scope="row">{{$num++}}</th>
                            <td><img src="{{$partner->photo}}" alt="" style="width: 100px; height: 100px;"></td>
                            <td>
                                <form action="{{route('dashboard.partners.edit', $partner->id)}}" method="GET" style="display: inline;">
                                    <button class="btn btn-xs btn-primary" type="submit"><i data-feather="edit"></i></button>
                                </form>
                                
                                    <button class="btn btn-xs btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{$partner->id}}" data-bs-original-title="" title=""><i data-feather="trash-2"></i></button>
                            </td>
                            <div class="modal fade" id="exampleModalCenter{{$partner->id}}" tabindex="-1" aria-labelledby="exampleModalCenter" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Rostan ham o'chirmoqchimisiz</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Закрывать</button>
                                        <form action="{{route('dashboard.partners.destroy', $partner->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit"  data-bs-original-title="" title="">Удалить</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    </tbody>    
                    @endForeach
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection