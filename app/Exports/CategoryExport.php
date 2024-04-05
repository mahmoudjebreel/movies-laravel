<?php

namespace App\Exports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CategoryExport implements FromCollection, WithHeadings
{
    use Exportable;

    public function query()
    {
        return Category::query();
    }

    protected $categories;

    public function __construct($categories)
    {
        $this->categories = $categories;
    }

    public function collection()
    {
        return $this->categories->map(function ($category) {
            return [
                'id' => $category->id,
                'name' => $category->name,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'id',
            'name',
        ];
    }
}
