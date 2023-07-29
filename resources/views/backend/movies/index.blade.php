@extends('backend.dashboard')
@section('title','Index Movies')
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
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Movies List</h1>
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
                            <li class="breadcrumb-item text-muted">Movies Management</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Movies</li>
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
                                    <!--end::Svg Icon-->
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <form action="{{ route('movies.index') }}" method="GET" class="mb-3">
                                                <div class="input-group">
                                                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>

                                                    <!--end::Svg Icon-->
                                                    <input type="text" name="keyword" class="form-control form-control-solid w-250px ps-14" placeholder="Search Movies"/>
                                                </div>
                                            </form>
                                        </div>

                                    <!--end::Search-->
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Card title-->
                            <!--begin::Card toolbar-->

                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                    <!--begin::Filter-->

                                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                        <span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor" />
															<path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor" />
															<path opacity="0.3" d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="currentColor" />
														</svg>
													</span>
                                        <!--end::Svg Icon-->Export</button>
                                    <!--end::Export-->
                                    <!--begin::Add user-->
{{--                                    @can('categories-create')--}}
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
															<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
														</svg>
													</span>
                                        <!--end::Svg Icon-->Add Movie</button>
{{--                                    @endcan--}}
                                    <!--end::Add user-->
                                </div>

                                <!--end::Toolbar-->

{{--                                <!--begin::Group actions-->--}}
{{--                                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">--}}
{{--                                    <div class="fw-bold me-5">--}}
{{--                                        <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>--}}
{{--                                    <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>--}}
{{--                                </div>--}}
                                <!--end::Group actions-->
                                <!--begin::Modal - Adjust Balance-->
                                <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bold">Export Movie</h2>
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
                                                <form id="kt_modal_export_users_form" class="form" action="#">

                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Select Export Format:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="select" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                            <option></option>
                                                            <option name ="excel" value="excel">Excel</option>
                                                            <option name ="pdf" value="pdf">PDF</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="text-center">
                                                        <a href="{{route('categories.index')}}" type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancel</a>
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
                                            <!--end::Modal body-->
                                        </div>
                                        <!--end::Modal content-->
                                    </div>
                                    <!--end::Modal dialog-->
                                </div>
                                <!--end::Modal - New Card-->
                                <!--begin::Modal - Add task-->
                                <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->

                                            <div class="modal-header" id="kt_modal_add_user_header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bold">Add Movie</h2>
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
                                                <form id="kt_modal_add_user_form" class="form" action="{{route('movies.store')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <!--begin::Scroll-->
                                                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fw-semibold fs-6 mb-2">Name</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0"/>
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fw-semibold fs-6 mb-2">Description</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="description" id="description" rows="3"></textarea>
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fw-semibold fs-6 mb-2">Image</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="file" name="image" class="form-control form-control-solid mb-3 mb-lg-0"/>
                                                            <!--end::Input-->
                                                        </div>


                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fw-semibold fs-6 mb-2">Year</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" name="year" class="form-control form-control-solid mb-3 mb-lg-0"/>
                                                            <!--end::Input-->
                                                        </div>

                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fw-semibold fs-6 mb-2">Rating</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="number" name="rating" min="1" max="5" class="form-control form-control-solid mb-3 mb-lg-0"/>
                                                            <!--end::Input-->
                                                        </div>


                                                    </div>
                                                    <!--end::Scroll-->
                                                    <!--begin::Actions-->
                                                    <div class="text-center pt-15">
                                                        <a href="{{route('movies.index')}}" type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancel</a>
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
{{--                                    <th class="w-10px pe-2">--}}
{{--                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">--}}
{{--                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />--}}
{{--                                        </div>--}}
{{--                                    </th>--}}
                                    <th class="min-w-125px">#</th>
                                    <th class="min-w-125px">Name</th>
                                    <th class="min-w-125px">Description</th>
                                    <th class="min-w-125px">year</th>
                                    <th class="min-w-125px">Image</th>
                                    <th class="min-w-125px">Rating</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="text-gray-600 fw-semibold">
                                <!--begin::Table row-->
                                @foreach($movies as $movie)
                                <tr>
                                    <!--begin::Checkbox-->
{{--                                    <td>--}}
{{--                                        <div class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                            <input type="checkbox" name="selectedCategories[]" value="{{ $category->id }}">--}}

{{--                                        </div>--}}
{{--                                    </td>--}}
                                    <!--end::Checkbox-->
                                    <!--begin::User=-->
                                        <!--begin::User details-->
                                    <td data-order="2023-09-22T22:10:00+03:00" >{{$movie->id}} </td>
                                    <td data-order="2023-09-22T22:10:00+03:00" >{{$movie->name}} </td>
                                    <td data-order="2023-09-22T22:10:00+03:00" >{{$movie->description}} </td>
                                    <td data-order="2023-09-22T22:10:00+03:00" >{{$movie->year}} </td>
                                    <td data-order="2023-09-22T22:10:00+03:00"><img width="80" height="90px" src="{{asset('storage/'.$movie->image)}}"></td>
                                    <td data-order="2023-09-22T22:10:00+03:00" >   @if ($movie->rating != '')
                                            @for ($i = 0; $i < 5; $i++)
                                                <li class="list-inline-item m-0"><i class="{{ round($movie->rating) <= $i ? 'far' : 'fas' }} fa-star fa-sm text-warning"></i></li>
                                            @endfor
                                        @else
                                            <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                                            <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                                            <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                                            <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                                            <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                                        @endif </td>
                                        <!--begin::User details-->


                                    <td class="text-end">
{{--                                        @can('categories-show')--}}
                                        <a href="{{route('movies.show',$movie->id)}}" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
{{--                                        @endcan--}}
{{--                                        @can('categories-edit')--}}
                                        <a href="{{route('movies.edit',$movie->id)}}" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
{{--                                       @endcan--}}
{{--                                       @can('categories-delete')--}}
                                        <form action="{{ route('movies.destroy', $movie->id) }}" method="post" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">
                                            @csrf
                                            @method('delete')
                                            <button class="dropdown-item" href="javascript:void(0);">
                                                Delete</button>
                                        </form>
{{--                                        @endcan--}}
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
                            {!! $movies->links() !!}
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

@endsection
