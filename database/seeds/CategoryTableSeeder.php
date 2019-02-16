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
        $sidebar = Sidebar::where('title','tin tức trang chủ')->first();
        $category = new Category;
        $category->idSidebar = $sidebar->id;
        $category->title = 'Hiển thị trang chủ';
        $category->slug = 'hiển thị trang chủ';
        $category->status = 2;
        $category->save();
    }
}
