<!DOCTYPE html>
<html>
<head>
    <title>Categories PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<div id="kt_app_content_container" class="app-container container-xxl">
    <h1>Categories</h1>
    <div class="card-body py-4">
        <table class="table align-middle table-row-dashed fs-6 gy-5">
            <thead>
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-125px">ID</th>
                <th class="min-w-125px">Name</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
            @foreach($categories as $category)
                <tr>
                    <td data-order="2023-09-22T22:10:00+03:00" >{{$category->id}} </td>
                    <td data-order="2023-09-22T22:10:00+03:00" >{{$category->name}} </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

