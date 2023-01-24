@extends('admin.layouts.master')
@section('title',settings()->website_title .' | '. __('words.userContact'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{__('words.userContact')}}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{route('admin.home')}}" class="text-muted">{{__('words.home')}}</a>
            </li>
            <li class="breadcrumb-item">
                <apan class="text-muted">{{__('words.show_userContact')}}</apan>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap py-5">
            <div class="card-title">
                <h3 class="card-title">{{__('words.show_userContacts')}}</h3>
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
                <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{__('words.user_name')}}</th>
                        <th>{{__('words.user_email')}}</th>
                        <th>{{__('words.user_phone')}}</th>
                        <th>{{__('words.user_subject')}}</th>
                        <th>{{__('words.user_massage')}}</th>
                        <th>{{__('words.created_at')}}</th>
                        <th>{{__('words.actions')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($usercontacts as $key => $userContact)
                        <tr>

                            <td>{{$key+1}}</td>
                            <td>{{ $userContact->name }}</td>
                            <td>{{$userContact->email}}</td>
                            <td>{{$userContact->phone}}</td>
                            <td>{{$userContact->subject}}</td>
                            <td>{{$userContact->massage}}</td>
                            <td>{{createdAtFormat($userContact->created_at)}}</td>
                            <td nowrap="nowrap">
                                @include('admin.components.form-controls', ['name'=>'userContact', 'value'=>$userContact,'role'=>'userContact'])
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            <!--end: Datatable-->
        </div>

    </div>
@endsection
