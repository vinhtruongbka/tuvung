<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;
use App\Sidebar;
use App\Category;
use App\Categorychi;
use App\Menu;
use App\Vocabulary;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $category = new Category;
        // $category->idSidebar = 6;
        // $category->title = 'chuyên nghành';
        // $category->slug = 'chuyen-nghanh';
        // // $category->status = 1;
        // $category->save();
        
        $category = new Category;
        $category->idSidebar = 6;
        $category->title = 'xkld-Đọc';
        $category->slug = 'xkld-doc';
        // $category->status = 1;
        $category->save();

    }
}
