@extends('admin.layout.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Категории</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.categories.create') }}" class="btn bg-navy btn-flat mb-3">Добавить категорию</a>
                @if( $categories->isNotEmpty() )
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th>Название</th>
                                <th>Slug</th>
                                <th>Записей</th>
                                <th style="width: 40px">#</th>

{{--                                <th>Миниатюра</th>--}}
{{--                                <th>Заголовок</th>--}}
{{--                                <th>Категория</th>--}}
{{--                                <th>Метки</th>--}}
{{--                                <th>Дата</th>--}}
{{--                                <th>Автор</th>--}}
{{--                                <th style="width: 40px">#</th>--}}
                            </tr>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-red">55%</span></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p>Категории пока не добавлены</p>
                @endif
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        {{ $categories->links() }}

    </section>
    <!-- /.content -->
@endsection
