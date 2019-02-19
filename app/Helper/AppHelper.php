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

  function countView($ip)
  {
    $user_ip = Useronline::where('ip',$ip)->first();
    $tg=time();
    $tgout=900;
    $tgnew=$tg - $tgout;

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
    Useronline::where('tgtmp','<',$tgnew)->delete();

    $countView = Useronline::where('tgtmp','>',$tgnew)->count();
    
    return $countView;
  }

?>