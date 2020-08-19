<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedCategoriesDate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories=[
            [
            'name'=>'技术交流',
            'description'=>'解答疑难，分享经验'
            ],
            [
                'name'=>'天下杂谈',
                'description'=>'谈古今，聊科技'
            ],
            [
                'name'=>'心情分享',
                'description'=>'心情分享'
            ],
            [
                'name'=>'灌水专区',
                'description'=>'茁壮成长'
            ],
            [
                'name'=>'商业合作',
                'description'=>'商业合作'
            ],
            [
                'name'=>'开源项目',
                'description'=>'开源项目，学习你我'
            ],
            [
                'name'=>'前端和视觉设计',
                'description'=>'代码与审美的结合'
            ],
            [
                'name'=>'个人创业',
                'description'=>'踩坑经验'
            ],
            [
                'name'=>'极客哪些事',
                'description'=>'论强迫症与洁癖的养成'
            ],
            [
                'name'=>'科技智趣生活',
                'description'=>'科技改变生活'
            ], 
            [
                'name'=>'爱旅游爱摄影',
                'description'=>'记录生活的美'
            ],  
            [
                'name'=>'汽车之家',
                'description'=>'汽车之家，你想要的车这都有'
            ],  
            [
                'name'=>'极简生活',
                'description'=>'享受生活的小简单'
            ],  
            [
                'name'=>'产品经理',
                'description'=>'论产品经理的七万万中做法'
            ],     
        ];
        DB::table('categories')->insert( $categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}
