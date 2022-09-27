@extends('admin.layouts.admin')
@section('title','الأعضاء')
@section('content')
<section class="py-5">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-light p-3">
            <li href="" class="breadcrumb-item" aria-current="page">
                الأعضاء
            </li>
        </ol>
    </nav>
    <div class="section_content content_view">
        <div class="info_holder d-flex align-items-center gap-2 mb-2">
            <div class="up_element">
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                    إضافة
                </a>
            </div>
            <button class="btn btn-green">اعضاء مفعلين: 5</button>
            <button class="btn btn-danger">اعضاء غير مفعلين: 0</button>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>الجوال</th>
                        <th>الإيميل</th>
                        <th>المدينة</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)

                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->city?->name }}</td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-secondary btn-sm">الطلبات: 2</button>
                            <a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-info btn-sm text-white mx-1"> <i class="fa-solid fa-pen"></i></a>
                            <a href="{{ route('admin.users.show',$user->id) }}" class="btn btn-success btn-sm text-white mx-1"> <i class="fa-solid fa-eye"></i></a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{ $user->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                            @include('admin.user.delete-modal',['user'=>$user])
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</section>
@endsection
