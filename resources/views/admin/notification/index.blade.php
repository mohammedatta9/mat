@extends('admin.layouts.admin')
@section('title','إشعارات الاعضاء')
@section('content')
<section class="py-5">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-light p-3">
            <li href="" class="breadcrumb-item" aria-current="page">
            إشعارات الاعضاء
            </li>
        </ol>
    </nav>
    <div class="section_content content_view">
        <div class="up_element">
           
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>الاشعار</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notifications as $city)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $notification->notifiable->name }}</td>
                        <td>{{ $notification->data['title']}}</td>
                        
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $notifications->links() }}
        </div>
    </div>
</section>
@endsection