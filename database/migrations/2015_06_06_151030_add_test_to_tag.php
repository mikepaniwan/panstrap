<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Tag as Tag;

class AddTestToTag extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$tags = [
			['อาหารไทย','อาหารอีสาน','ห้องครัว','ตีท้ายครัว','ขนมไทย'],
			['แมว','หมา','เพนกวิ้น','เสือ','จิงโจ้','สิงโต'],
			['ขาตั้ง','เลนส์','แฟรช','Nikon','Canon'],
			['นารูโตะ','วันพีช','โดจิน','Hentai','บลีช'],
			['มือถือ','เพจเจอร์','คอมพิวเตอร์','โน้ตบุ๊ค','ไอแพด'],
			['เพศสัมพันธ์','เกย์','เหล้า เมายา','เด็กกระโปก','ล้างตู้เย็น'],
			['ปฏิสนธิ','ฟิสิกส์','เคมี','ชีววิทยา','บอลส์']
		];

		foreach($tags as $key => $tag) {
			foreach($tag as $t) {
				$new_tag = new Tag;
				$new_tag->category_id = $key+1;
				$new_tag->name = $t;
				$new_tag->save();
			}
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
