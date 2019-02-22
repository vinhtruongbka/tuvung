<?php 
use App\Useronline;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

function fooBar(){
        return 'it works!';
    }

function randomVietnam($answer,$arrayAnswer,$keyString){
      $answers=array($answer->$keyString);
      $flag = 3;

      $arrayNumber = array();
      for ($i=0; $i < count($arrayAnswer) ; $i++) { 
      	array_push($arrayNumber, $i);
      }
      for ($i=0; $i <$flag ; $i++) {
      	$key = array_rand($arrayNumber);
      	unset($arrayNumber[$key]);
      	if ($arrayAnswer[$key]->$keyString != $answer->$keyString) {
      		array_push($answers, $arrayAnswer[$key]->$keyString);
      	}else{
      		$flag = $flag+1;
      	}
      };
      $answersValue = array();;
      for ($i=0; $i <4 ; $i++) { 
        array_push($answersValue, array_random($answers));
        $index = array_search($answersValue[$i], $answers);
        unset($answers[$index]);
      }
      return $answersValue;
	}

   function get_user_ip() {
        if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
          $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip_address = $_SERVER['REMOTE_ADDR'];
        }
        return $ip_address;
    }

  function countView()
  {
    $ip = get_user_ip();
    $user_ip = Useronline::where('ip',$ip)->first();
    $tg=time();
    $tgout=900;
    $tgnew=$tg - $tgout;
    $tgDelete = $tg - 86400;

    if ($user_ip == null) {
      $useronline = new Useronline();
      $useronline->ip = $ip;
      $useronline->tgtmp = $tg;
      $useronline->save();
    } else {
       DB::table('useronline')
        ->where('ip', $ip)
        ->update([
          'tgtmp' => $tg,
        ]);
    };
    Useronline::where('tgtmp','<',$tgDelete)->delete();

    $useronline_visit = Useronline::where('ip',$ip)->first();
    $countView = Useronline::where('tgtmp','>',$tgnew)->count();
    $last_visit_day = date('z', $useronline_visit->tgtmp)+1;
    $last_visit_year = date('Y', $useronline_visit->tgtmp);
    $today = date('z') + 1;
    $todayLast = date('z');
    $yearDay = date('Y');

    $countDay = Useronline::whereRaw($last_visit_day.' = '.$today.' AND '.$last_visit_year.' = '.$yearDay)->count();
    $yesterday = Useronline::whereRaw($last_visit_day.' = '.$todayLast.' AND '.$last_visit_year.' = '.$yearDay)->count();
    $visits = array('countDay' => $countDay,'yesterday'=>$yesterday,'countView'=>$countView );
    return $visits;
  }



?>