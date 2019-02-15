<?php

use Illuminate\Database\Seeder;
use App\News;
use App\Sidebar;
use App\Category;
use App\Categorychi;
use App\Menu;
use App\Vocabulary;
use App\Address;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $address = new Address();
       $address->content = '<p>Giấy phép ĐKKD Số :16C8002820 cấp bởi Phòng Tài Chính - Kế Hoạch huyện Lục Yên – Yên Bái.</p>
				<p>Mã số thuế: 8405130763 cấp bởi CCT huyện Lục Yên – Yên Bái.</p>
				<p>Liên hệ: Lã Thạch Sanh.</p>
                <p>Địa Chỉ: Thôn 8 - Minh Chuẩn – Lục Yên – Yên Bái.</p>
                <p>Tel: 0943 383 814 - Email: tuvungtienghan@gmail.com</p>
                <p>Copyright © 2015-2019</p>';
       $address->images = 'bocongthuong.PNG';
       $address->save();
    }
}
