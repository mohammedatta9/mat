@extends('admin.layouts.admin')
@section('title')
الاعدادات
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">الاعدادات</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.settings.update')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="website_name">اسم الموقع</label>
                        <input type="text" name="website_name" id="website_name" class="form-control" value="{{old('website_name', setting('website_name'))}}">
                    </div>
                    <div class="form-group">
                        <label for="link">رابط الموقع</label>
                        <input type="text" name="link" id="link" class="form-control" value="{{old('link', setting('link'))}}">
                    </div>
                    <div class="form-group">
                        <label for="website_active">حالة الموقع</label>
                        <select name="website_active" id="website_active" class="form-control">
                            <option value="1" {{old('website_active', setting('website_active')) == 1 ? 'selected' : ''}}>مفعل</option>
                            <option value="0" {{old('website_active', setting('website_active')) == 0 ? 'selected' : ''}}>غير مفعل</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="website_inactive_message">رسالة تعطيل الموقع</label>
                        <textarea name="website_inactive_message" id="website_inactive_message" class="form-control">{{old('website_inactive_message', setting('website_inactive_message'))}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </form>
            </div>
        </div>
    </div>
</div>

@stop