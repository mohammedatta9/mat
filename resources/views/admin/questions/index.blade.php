@extends('admin.layouts.admin')
@section('title','الاسئلة')
@section('content')
<section class="py-5">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-light p-3">
            <li href="" class="breadcrumb-item" aria-current="page">
                الأسئلة
            </li>
        </ol>
    </nav>
    <div class="section_content content_view">
        <div class="up_element">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                إضافة
            </button>
            @include('admin.questions.create-modal')
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>عنوان السؤال</th>
                        <th>الجواب</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $question)
                        
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $question->name }}</td>
                        <td>{{ $question->result }}</td>
                         <td class="d-flex gap-2">
                            <button type="button" class="btn btn-info btn-sm text-white mx-1" data-bs-toggle="modal" data-bs-target="#edit{{ $question->id }}">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{ $question->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            
                            @include('admin.questions.edit-modal',['question'=>$question])
                            @include('admin.questions.delete-modal',['question'=>$question])
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $questions->links() }}
        </div>
    </div>
</section>
@endsection