@extends('admin.layouts.admin')
@section('title','الأقسام')
@section('content')
<section class="py-5">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-light p-3">
            <li href="" class="breadcrumb-item" aria-current="page">
                الأقسام
            </li>
        </ol>
    </nav>
    <div class="section_content content_view">
        <div class="up_element">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                إضافة
            </button>
            @include('admin.department.create-modal')
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>القسم الأب</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $department)
                        
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $department->name }}</td>
                        <td>{{ $department->main?->name??'-' }}</td>
                        <td class="d-flex gap-2">
                            <button type="button" class="btn btn-info btn-sm text-white mx-1" data-bs-toggle="modal" data-bs-target="#edit{{ $department->id }}">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{ $department->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            
                            @include('admin.department.edit-modal',['department'=>$department])
                            @include('admin.department.delete-modal',['department'=>$department])
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $departments->links() }}
        </div>
    </div>
</section>
@endsection