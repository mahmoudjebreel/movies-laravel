@extends('backend.dashboard')
@section('content')
    <div class="card-body py-4">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
            <!--begin::Table head-->
            <thead>
            <!--begin::Table row-->
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
{{--                <th class="min-w-125px">#</th>--}}
                <th class="min-w-125px">Name</th>
            </tr>
            <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="text-gray-600 fw-semibold">
            <!--begin::Table row-->
            @foreach($categories as $category)
                <tr>
{{--                    <td data-order="2023-09-22T22:10:00+03:00" >{{$loop->iteration}} </td>--}}
                    <td data-order="2023-09-22T22:10:00+03:00" >{{$category->name}} </td>

                </tr>
            @endforeach
            <!--end::Action=-->

            <!--end::Table row-->
            </tbody>

            <!--end::Table body-->
        </table>

        <!--end::Table-->
    </div>

@endsection
