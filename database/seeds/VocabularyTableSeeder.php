<?php

use Illuminate\Database\Seeder;
use App\News;
use App\Sidebar;
use App\Category;
use App\Categorychi;
use App\Menu;
use App\Vocabulary;

class VocabularyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$vietnamtrue = array('cá chép','khẩu vị','thèm ăn','thức ăn cao cấp','quán ăn nhật','thực phẩm ăn liền','trà sâm','rượu nhân sâm','nhân sâm','gia vị nhân tạo','nấu chín','cái tăm','uống rượu','quán ăn','món ăn','nước uống','đồ uống','món gỏi thịt','thịt khô','nước thịt','loại thịt cá','món canh cay','sản phẩm sữa','cà fê nguyên chất','sữa',' mì sợi lớn','đầu bếp','món ăn','Ya ua , sữa chua','ăn ngoài','ngô','cơm trrưa','mực',' dưa chuột','cái lò','rau ráu','trứng vịt','thịt vịt','cam','nấm linh chi','chất dinh dưỡng','dầu bếp','giá trị dinh dưỡng','ding dưỡng','kẹo kéo','ca hồi','rễ sen','hơi cay , hơi nồng','cá và sò','nước hầm đá',' hành tây','rượu tây','nơi chưng , cất','cửa hàng món âu','món tây / món âu','xà lách ngoại','xà lách ngoại','thuốc lá ngoại','nêm gia vị','hộp đựng gia vị','gia vị','thịt cừu','rượu thuốc','nước thuốc ( nước khoáng )','nước ép rau','rau');

    	$koreantrue = array('잉어','입맛','입맛다시다','일푸묘리','일식집','인스턴트식품','인삼차','인삼주','인삼','인공감료','익히다','이쑤시개','음수','음식점','음식물','음료수','음료','육회','육포','육수','육류','육개장:','유제품','원두커피','우유','우동','요리사','요리','요구르트','외식','옥수수','오찬','오징어','오이','오븐','오물오물','오리알','오리고기','오렌지','영지버섯','영양소','영양사','영양가','영양','엿','연어','연근','얼큰하다','어패류','어목','양파','양주','양조장','양식당','양식','양상추','양배추','양담배','양념하다','양념통','양념','양고기','약주','약수','야채주스','야채');

    	for ($i=0; $i < 66; $i++) { 
    		$vocabulary = new Vocabulary;
			$vocabulary->idCategorychi = 3;
			$vocabulary->audio = '0 - Copy ('.$i.').mp3';
			$vocabulary->images = $i.'.png';
			$vocabulary->vietnamtrue = $vietnamtrue[$i];
			$vocabulary->koreantrue = $koreantrue[$i];
			$vocabulary->save();
    	} 
	}
}
