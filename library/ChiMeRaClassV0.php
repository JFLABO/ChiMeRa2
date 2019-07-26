<?php
/**
 * ChiMeRaの関数群 試作　第1版　(Alpha-01)
 * [Framework MicroCode] @Cafe around Tokyo Skytree 2019
 * @link       http://jflabo.org
 *
 * @category   internet_system
 * @package    JFLABO
 * @copyright  JFLABO
 * @license    JFLABO  License Ver. 3.0
 * @version    a-0.3
 * @link       http://pjfs.biz
 * @access     public
 */

/**
 * ChiMeRaの関数群
 * @category   internet_system
 * @package    JFLABO
 * @copyright  JFLABO  Tokitaka Abe
 * @license    JFLABO  License Ver. 3.0
 * @version    a-0.3.7
 * GitKraken Thank You!!
 */
class ChiMeRa_emacs_class{
		//分かりやすさ重視でwebディレクトリにdataファイルを置いてありますが
		//セキュリティを高めたければwebアクセス出来ないところに移動してください

private $data_source = "./data/emacs_turorial_jp.chimera";
private $data_source_b = "./data/your_note.chimera";
private $data_source_c = "./data/hinagata1.chimera";
private $data_source_d = "./data/hinagata2.chimera";
private $data_source_e = "./data/necessary_thing.chimera";
private $data_source_f = "./data/hinagata4.chimera";
private $data_source_g = "./data/hinagata5.chimera";
private $data_source_h = "./data/hinagata6.chimera";
private $data_source_i = "./data/hinagata7.chimera";
private $data_source_j = "./data/hinagata8.chimera";
private $data_source_k = "./data/hinagata9.chimera";
private $data_source_l = "./data/hinagata10.chimera";
private $data_source_m = "./data/hinagata11.chimera";
private $data_source_n = "./data/hinagata12.chimera";

function log($m){

$d=date("Y/m/d H:i:s") ;
$ip=$_SERVER["REMOTE_ADDR"] ;
$acstr="{date:".$d.",ip:,".$ip.",mes:".$m."}\n";
$a = fopen("data/ac.log", a);
 @fwrite($a,$acstr);
  fclose($a);

}
function show_list(){
	  //右のメニュータイルに表示するリンクを変えたいときはここを編集してください
	  echo '<a href="./?param=JFLABO::ChiMeRa::Your Note">Your Note</a><BR>';
	  echo '<a href="./?param=EmacsTips チュートリアル 2013">Emacs Tutorial</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata">ひながた</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata2">ひながた2</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::necessary_thing">あなたに必要なもの</a><BR><BR>';

	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata4">社内ニュース</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata5">経営方針</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata6">企画部</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata7">営業部</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata8">技術部</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata9">IR情報</a><BR><br>';

	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata10">問題提起・課題</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata11">推薦図書</a><BR><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata12">[R&D]</a><BR><BR>';

	  echo '<a href="./api/json.php?param=JFLABO::ChiMeRa::necessary_thing">[JSON]</a> ';
  	  echo '<a href="./api/xmlapi.php?param=JFLABO::ChiMeRa::necessary_thing">[XML]</a><BR>';

	  echo '<a href="./freebie/emacs_Tips.pdf" target="_blank">[Tips01]</a><BR>';
  	  echo '<a href="./freebie/emacs_tips_2.pdf" target="_blank">[Tips02]</a><BR><BR>';

}

public $title="JFLABO::ChiMeRa->EmacsTips チュートリアル 2013";
//ページタイトルを変えたいときはここを編集してください
function get_title(){
			$mystring = $_GET['param'];
			$findme   = '#';
			$pos = strpos($mystring, $findme);
			$this->title=$pos;
			/*
			if(isset($_GET['param'])){
					if($_GET['param']=="EmacsTips チュートリアル 2013"){
							$this->title="JFLABO::ChiMeRa->EmacsTips チュートリアル 2013";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Your Note"){
							$this->title="JFLABO::ChiMeRa->Your Note";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata"){
							$this->title="JFLABO::ChiMeRa->Hinagata";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata2"){
							$this->title="JFLABO::ChiMeRa->Hinagata2";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata3"){
							$this->title="JFLABO::ChiMeRa->necessary_thing";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata4"){
							$this->title="JFLABO::ChiMeRa->Hinagata4";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata5"){
							$this->title="JFLABO::ChiMeRa->Hinagata5";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata6"){
							$this->title="JFLABO::ChiMeRa->Hinagata6";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata7"){
							$this->title="JFLABO::ChiMeRa->Hinagata7";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata8"){
							$this->title="JFLABO::ChiMeRa->Hinagata8";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata9"){
							$this->title="JFLABO::ChiMeRa->Hinagata9";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata10"){
							$this->title="JFLABO::ChiMeRa->Hinagata10";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata11"){
							$this->title="JFLABO::ChiMeRa->Hinagata11";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata12"){
							$this->title="JFLABO::ChiMeRa->Hinagata12";
					}else{
							//
					}
			}else{
					//
			}
			*/
			return $this->title;
}

	function show_file(){
			//不正実行対策の為ファイル名は登録制　
			//安全な場合はファイル名可変に変更する案もある
			if(isset($_GET['param'])){
					if($_GET['param']=="EmacsTips チュートリアル 2013"){
							$S=file_get_contents($this->data_source);
							$this->title="JFLABO::ChiMeRa->EmacsTips チュートリアル 2013";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Your Note"){
							$S=file_get_contents($this->data_source_b);
							$this->title="JFLABO::ChiMeRa->Your Note";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata"){
							$S=file_get_contents($this->data_source_c);
							$this->title="JFLABO::ChiMeRa->Hinagata";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata2"){
							$S=file_get_contents($this->data_source_d);
							$this->title="JFLABO::ChiMeRa->Hinagata2";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::necessary_thing"){
							$S=file_get_contents($this->data_source_e);
							$this->title="JFLABO::ChiMeRa->necessary_thing";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata4"){
							$S=file_get_contents($this->data_source_f);
							$this->title="JFLABO::ChiMeRa->Hinagata4";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata5"){
							$S=file_get_contents($this->data_source_g);
							$this->title="JFLABO::ChiMeRa->Hinagata5";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata6"){
							$S=file_get_contents($this->data_source_h);
							$this->title="JFLABO::ChiMeRa->Hinagata6";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata7"){
							$S=file_get_contents($this->data_source_i);
							$this->title="JFLABO::ChiMeRa->Hinagata7";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata8"){
							$S=file_get_contents($this->data_source_j);
							$this->title="JFLABO::ChiMeRa->Hinagata8";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata9"){
							$S=file_get_contents($this->data_source_k);
							$this->title="JFLABO::ChiMeRa->Hinagata9";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata10"){
							$S=file_get_contents($this->data_source_l);
							$this->title="JFLABO::ChiMeRa->Hinagata10";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata11"){
							$S=file_get_contents($this->data_source_m);
							$this->title="JFLABO::ChiMeRa->Hinagata11";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata12"){
							$S=file_get_contents($this->data_source_n);
							$this->title="JFLABO::ChiMeRa->Hinagata12";
					}else{
							$S=file_get_contents($this->data_source);
					}
			}else{
							$S=file_get_contents($this->data_source_b);
			}


	  //ここから下はコンピュータさん向けの処理の依頼です。動いていれば理解しようとしなくてもいいです。
	  $sep="--- -- -- -- --";
      	  $ar_bdy=explode("\n",$S);
	  $stack_ptr;

	  //チャプタの取得
	  for($i=0;$i<count($ar_bdy);$i++){
	    $sep_d= substr($ar_bdy[$i],0,mb_strlen($sep));
	    if($sep_d==$sep){
	      $stack[]=array($i,$ar_bdy[$i-1]);
	    }
	  }

	  //チャプタブロック化
	  for($j=0;$j<count($stack);$j++){
	    if($j==count($stack)-1){
	      for($k=$stack[$j][0]+1;$k<count($ar_bdy);$k++){
		$CPT_block[$j][]=$ar_bdy[$k];
	      }
	    }else{
	      for($k=$stack[$j][0]+1;$k<$stack[$j+1][0]-2;$k++){
		$CPT_block[$j][]=$ar_bdy[$k];
	      }
	    }
	   }

	  //タイトルの取得

	  //ディスクリプションブロックの取得

	  //日付の取得
	    $str="";
	    $title_m="チャプターリスト(インデックス)";
	    $cpt=1;
	    foreach($stack as $val){
	      //$title_m_2=str_replace('チャプターリスト(インデックス)");', '', $title_m);
	      //$title_m_2=str_replace('");">', '', $title_m2);
	      $v=$val[1];
	      $v = str_replace(array("\r\n", "\r", "\n"), '', $v);
	      $str=$str.'<a href="#'.$cpt.'" onclick="reset_title(\''.$v.'\');" data-ajax=\'false\'>'.$cpt.": ".$val[1]."</a><br>";
	      $cpt++;
	    }
//HTML ダンプ　ヒアドキュメント表記
echo <<< OBJ
<div style="margin-left:5px;margin-right:5px;width:{};background-color:white;vertical-align:middle;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-moz-box-shadow: 1px 1px 3px #000;-webkit-box-shadow: 1px 1px 3px #000;">
	<div style="padding:5px 0px 0px 0px; height:5px;background-color:orange;width:100%;"></div>
    <li style="padding:15px 5px 2px 10px;text-align:left;vertical-align:middle;list-style-type:none;">
<span style="padding:5px 10px 2px 0px;text-align:left;vertical-align:middle;font-weight: bold;">$title_m</span></li>
    <hr style="height:1px;margin:1px 10px;">

<li style="padding:5px 5px 2px 10px;text-align:left;vertical-align:middle;list-style-type:none;">
<a href="editor.php" class="ui-btn"  data-transition="slide" data-ajax="false">編集</a>
<span style="padding:5px 10px 2px 0px;font-size:14px;text-align:left;vertical-align:middle;">$str</span></li><br>

<a href="editor.php" class="ui-btn"  data-transition="slide" data-ajax="false">編集</a>
</div><BR /><br />
OBJ;

	  $p=0;
	  foreach($stack as $title){
	    // $str=echo_lines($CPT_block);
	    $str="";
	    foreach($CPT_block[$p] as $val){
	      $str=$str.$val."<br>";
				$date_text = $str;
				//YYYY/MM/DDの日付形式を抽出する
				preg_match('|\d{4}\/\d{1,2}\/\d{1,2}|', $date_text, $date_match);
				preg_match("/([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])/", $date_text,$tm);
	    }
	    $q=$p+1;

echo <<< OBJ
<div style="margin-left:5px;margin-right:5px;width:{};background-color:white;vertical-align:middle;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-moz-box-shadow: 1px 1px 3px #000;-webkit-box-shadow: 1px 1px 3px #000;"><a name="$q"> </a>
	<div style="padding:5px 0px 0px 0px; height:5px;background-color:orange;width:100%;"></div>
    <li style="padding:15px 5px 2px 10px;text-align:left;vertical-align:middle;list-style-type:none;">
<span style="padding:5px 10px 2px 0px;text-align:left;vertical-align:middle;font-weight: bold;">$title[1]</span></li>
    <hr style="height:1px;margin:1px 10px;">
		<span style="padding:5px 10px 2px 0px;font-size:14px;float:right;text-align:right;width:100%;vertical-align:middle;">$date_match[0] $tm[0]</span><BR>

<li style="padding:5px 5px 2px 10px;text-align:left;vertical-align:middle;list-style-type:none;">
<span style="padding:5px 10px 2px 0px;font-size:14px;text-align:left;vertical-align:middle;">$str</span></li><br>
</div><BR /><br />
OBJ;
$p++;
	  }
	}
		function show_anq(){

$title="政治家、自治体はもっとITを活用して意見聴取を行い問題解決に向けて努力するべきだ";
$str="
<form action='anq02.php' method='POST' data-ajax='false'>
<input type='image' id='YES' name='yes_btn' alt='Login' src='img/btn/YES.png'>
<input type='image' id='Q' name='wakaranai_btn' alt='Login' src='img/btn/Q.png'>
<input type='image' id='NO' name='no_btn' alt='Login' src='img/btn/NO.png'>
</form>";
echo <<< OBJ
<div style="margin-left:5px;margin-right:5px;width:{};background-color:white;vertical-align:middle;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-moz-box-shadow: 1px 1px 3px #000;-webkit-box-shadow: 1px 1px 3px #000;"><a name="$q"> </a>
	<div style="padding:5px 0px 0px 0px; height:5px;background-color:orange;width:100%;"></div>
    <li style="padding:15px 5px 2px 10px;text-align:left;vertical-align:middle;list-style-type:none;">
<span style="padding:5px 10px 2px 0px;text-align:left;vertical-align:middle;font-weight: bold;">$title</span></li>
    <hr style="height:1px;margin:1px 10px;">
		<span style="padding:5px 10px 2px 0px;font-size:14px;float:right;text-align:right;width:100%;vertical-align:middle;">$date_match[0] $tm[0]</span><BR>

<li style="padding:5px 5px 2px 10px;text-align:left;vertical-align:middle;list-style-type:none;">
<span style="padding:5px 10px 2px 0px;font-size:14px;text-align:left;vertical-align:middle;">$str
<HR>
This is Infomation Technology.<BR>
JFLABOの研究レポートを参考にして、組織会社でビジネスしたい<BR>
有志からの課金:5000円（2次利用可能）<BR>

<a href="http://jflabo.org/pay/">ビジネスインテリジェンス(商用知財)購入ページ</a>
</span></li><br>
</div><BR /><br />
OBJ;
		
		}
		function export_json_file(){

		}

		function export_xml_file(){

		}

}
