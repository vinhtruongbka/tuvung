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

class CategorychiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  $categoryChi = new Categorychi;
        // $categoryChi->idCategory = 1;
        // $categoryChi->title = 'những từ chuyên nghành ẩm thực phần một';
        // $categoryChi->slug = 'nhung-tu-chuyen-nghanh-am-thuc-phan-mot';
        // // $category->status = 1;
        // $categoryChi->save();
        
        $categoryChi = new Categorychi;
        $categoryChi->idCategory = 2;
        $categoryChi->title = 'ôn tập tiếng hàn xuất khẩu lao động phần đọc hiểu từ câu 1 đến câu 40';
        $categoryChi->slug = 'on-tap-tieng-han-xuat-khau-lao-dong-phan-doc-hieu-tu-cau-1-den-cau-40';
        $categoryChi->status = 2;
        $categoryChi->save();
    }
}
