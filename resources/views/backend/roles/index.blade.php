@extends('backend.dashboard')
@section('title','Index Role')
@section('styles')

@endsection
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Roles List</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Role Management</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Roles</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>

                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-6">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <form action="{{ route('roles.index') }}" method="GET" class="mb-3">
                                        <div class="input-group">
                                                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>

                                            <!--end::Svg Icon-->
                                            <input type="text" name="keyword" class="form-control form-control-solid w-250px ps-14" placeholder="Search Role"/>
                                        </div>
                                    </form>

                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->

                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                    <!--begin::Filter-->

                                    <!--end::Export-->
                                    <!--begin::Add user-->
                                    @can('role-create')
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                 <span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
															<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
														</svg>
													</span>
                                        <!--end::Svg Icon-->Add Role</button>
                                    @endcan
                                    <!--end::Add user-->
                                </div>

                                <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header" id="kt_modal_add_user_header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bold">Add Role</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                    <span class="svg-icon svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
																			<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
																		</svg>
																	</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                <!--begin::Form-->
                                                <form id="kt_modal_add_user_form" class="form" action="{{route('roles.store')}}" method="POST">
                                                    @csrf
                                                    <!--begin::Scroll-->
                                                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fw-semibold fs-6 mb-2">Name</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
{{--                                                            <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Please Enter The Role Name" />--}}
                                                            {!! Form::text('name', null, array('placeholder' => 'Please Enter The Role Name','class' => 'form-control form-control-solid mb-3 mb-lg-0')) !!}

                                                            <!--end::Input-->
                                                        </div>

                                                        <div class="fv-row mb-7 fv-plugins-icon-container">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                                <span class="required">{{ __('Permission') }}</span>
                                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                                   aria-label="Enter the contact's name." data-bs-original-title="Enter the contact's name."
                                                                   data-kt-initialized="1"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
{{--                                                            <input type="checkbox" class="form-check-input" name="select-all" id="select-all" />--}}
{{--                                                            <label class="form-check-label" for="select-all">select all</label>--}}
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    @foreach ($permission as $value)
                                                                        <div class="form-check m-2 form-switch">
                                                                            <input type="checkbox" name="permission[{{ $value->id }}]" class="form-check-input"
                                                                                   value="{{ $value->name }}" id="{{ $value->id }}">
                                                                            <label class="form-check-label" for="{{ $value->id }}">{{ $value->name }}</label>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <!--end::Input-->
                                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                                        </div>
                                                        <!--begin::Row-->

                                                    </div>
                                                    <!--end::Scroll-->
                                                    <!--begin::Actions-->
                                                    <div class="text-center pt-15">
                                                        <a href="{{route('roles.index')}}" type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancel</a>
                                                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                            <span class="indicator-label">Submit</span>
                                                            <span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </form>
                                                <!--end::Form-->

                                            </div>

                                            <!--end::Form-->

                                            <!--end::Modal body-->
                                        </div>

                                        <!--end::Modal content-->
                                    </div>
                                    <!--end::Modal dialog-->
                                </div>

                                <!--end::Modal - Add task-->
                            </div>

                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body py-4">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                <!--begin::Table head-->
                                <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">#</th>
                                    <th class="min-w-125px">Name</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="text-gray-600 fw-semibold">
                                <!--begin::Table row-->
                                @foreach($roles as $role)
                                <tr>

                                    <td data-order="2023-09-22T22:10:00+03:00" >{{$loop->iteration}} </td>
                                    <td data-order="2023-09-22T22:10:00+03:00" >{{$role->name}} </td>
                                    <td class="text-end">
                                        @can('role-show')
                                        <a href="{{route('roles.show',$role->id)}}" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                                        @endcan
                                        @can('role-edit')
                                        <a href="{{route('roles.edit',$role->id)}}" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                                        @endcan
                                        @can('role-delete')
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="post" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">
                                            @csrf
                                            @method('delete')
                                            <button class="dropdown-item" href="javascript:void(0);">
                                                Delete</button>
                                        </form>
                                        @endcan
                                    </td>

                                </tr>
                                @endforeach
                                    <!--end::Action=-->

                                <!--end::Table row-->
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <tfoot>
                    <div class="d-flex flex-stack flex-wrap pt-10">
                        <!--begin::Pages-->
                        <ul class="pagination">
                            {!! $roles->links() !!}
                        </ul>
                        <!--end::Pages-->
                    </div>
                    </tfoot>
                    <!--end::Card-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>

        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2023&copy;</span>
                    <a href="#" target="_blank" class="text-gray-800 text-hover-primary">Mahmoud Jebreel</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <!--end::Menu-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>

@endsection
@section('scripts')
    <script src="{{asset('backend/assets/plugins/select2.min.js')}}"></script>
    <script>
        $('.select2').select2({
            width:'100%',
        });
    </script>
@endsection
