<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            'name' => 'Jeepney',
            'manufacturer' => 'NutsRV',
            'description' => '駐車が楽にできるスリムボディに、選べるレイアウト、選べる家具色、上位機種と同じ「高断熱コンポジットパネル」を採用！そして家庭用エアコンがノンストレスで使用可能な、電装システム「エボライト」も標準装備！',
            'image_path' => 'cars/jeepney.jpg',
            'price' => '8129000',
        ]);

        Car::create([
            'name' => 'LEBEN DC',
            'manufacturer' => 'TOWAモータース',
            'description' => 'レーベンのボディサイズは全長4850mm×全幅1950mm×全高2850mm。このコンパクトなボディに上質な家具と充実した装備を詰め込みました。街乗りでも使いやすいサイズでありながら、高性能を実感できる国産コンパクトキャブコンです。',
            'image_path' => 'cars/leben.jpg',
            'price' => '9500000',
        ]);

        Car::create([
            'name' => 'NINJA',
            'manufacturer' => 'ダイレクトカーズ',
            'description' => 'ダイナミックなエクステリアデザインが特徴的なキャンピングカーNINJA。キレのあるスタイリッシュなボディラインは人を引きつけ、ルーフエンドの大きなスポイラーが全体的なシルエットを引き締める。その完成されたボディに、実は特別なからくりが・・・',
            'image_path' => 'cars/ninja.jpg',
            'price' => '13480000',
        ]);

        Car::create([
            'name' => 'Trip Log Base Black Edition',
            'manufacturer' => 'ダイレクトカーズ',
            'description' => '落ち着いた上品なインテリアから、ダイナミックなアウトドアフィールドへとスムーズにつながる。この対峠する空間の融合が、Trip Log Base Black Edition によって生まれた新たな世界観。最上級のキャンピングカーを目指し、進化を続けてきたフラッグシップモデルとしての価値も存分に発揮している。',
            'price' => '16490000',
        ]);
        Car::create([
            'name' => 'BADEN',
            'manufacturer' => 'トイファクトリー',
            'description' => 'キャンピングカー専門誌『オートキャンパー』の2010年アワードで、ベスト1に輝いた『BADEN（バーデン）』。先鋭クリエイター入魂の『SSS DESIGN』で彩られた室内には、対面ダイネットや常設リヤベッド、大容量の天井収納庫といった人気装備を備えています。このモデルには、トイファクトリーが今まで培ったテクノロジー、そしてフラッグシップとしての誇りと情熱を注ぎ込んでいます',
            'image_path' => 'cars/baden.jpg',
            'price' => '7290000',
        ]);

        Car::create([
            'name' => 'ACE-G',
            'manufacturer' => 'AtoZ',
            'description' => 'スライドアウトして広くなった空間は新たな可能性を感じさせてくれる「エース・ジー」',
            'image_path' => 'cars/ace_g.jpg',
            'price' => '10780000',
        ]);

        Car::create([
            'name' => 'ZIL',
            'manufacturer' => 'Vantech',
            'description' => '誕生から25年を越え、5代目となったZiL。魅力的なライフスタイルの象徴であり、忘れることのできない特別な旅を約束する存在です。洗練されたデザインと最新機能が搭載され、心を虜にする過去最大の進化を遂げました。圧倒的な充実機能と細部にわたるこだわりがラグジュアリーな輝きを放ちます。クラス最大級のリビングルームで、贅沢なひとときをお過ごしいください。',
            'image_path' => 'cars/zil.jpg',
            'price' => '11800000',
        ]);

        Car::create([
            'name' => 'Osteria',
            'manufacturer' => 'ダイレクトカーズ',
            'description' => 'ダイレクトカーズのコンパクトキャブコン「オステリア」は全長4850×全幅1920mmと、アルファードと同等のボディサイズを採用しつつも6人乗車6人就寝を可能としたファミリータイプ。インテリアはルーフ部分のLED照明使いやシートの差し色のイエローなど全体に明るい雰囲気。ルームエアコンも標準装備しコストパフォーマンスにも優れ、幅広い世代に支持されそうだ。',
            'image_path' => 'cars/osteria.jpg',
            'price' => '7980000',
        ]);

        Car::create([
            'name' => 'LIBERTY 50DB',
            'manufacturer' => 'ANNEX',
            'description' => '2023年にプロトタイプが発表され、2024に正式に発売開始となったアネックスのキャブコン「リバティ 50DB」。発売に際して徹底的に考えられた装備内容となっており、全長5m弱、全幅2m以下というサイズは取り回しが良く、狭い駐車場でも困らない。低く抑えられたバンクルーフ形状やボディ幅内に装着できるサイドオーニングなど、走行時の空気抵抗の少なさも特筆すべき点で、車両総重量も3tほどと軽量化されている。',
            'image_path' => 'cars/liberty_50db.jpg',
            'price' => '8600000',
        ]);

        Car::create([
            'name' => 'Puppy 480',
            'manufacturer' => 'キャンパー厚木',
            'description' => '“はじめての喜びをこれからも” をキャッチフレーズに、キャンピングカーの購入を検討している皆さんに、多くの”はじめて”を経験してもらおうと、これまでにないコンセプトのオリジナルキャブコンを製作しています。',
            'image_path' => 'cars/puppy_480.jpg',
            'price' => '8624000',
        ]);


    }
}
