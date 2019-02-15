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

class SidebarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			$sidebar = new Sidebar;
	        $sidebar->title = 'menu';
	        $sidebar->slug = 'menu';
	        $sidebar->status = 1;
	        $sidebar->save();

        	$sidebar = new Sidebar;
	        $sidebar->title = 'đề thi xuất khẩu lao động';
	        $sidebar->slug = 'de-thi-xuat-khau-lao-dong';
	        $sidebar->save();

	        $sidebar = new Sidebar;
	        $sidebar->title = 'ôn tập chuyên nghành sản xuất';
	        $sidebar->slug = 'on-tap-chuyen-nghanh-san-xuat';
	        $sidebar->save();
    }
}
