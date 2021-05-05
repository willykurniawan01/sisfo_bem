<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'nama'=>'about',
            'value'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, possimus, ipsam sequi aspernatur magnam placeat maiores architecto aperiam cum atque ratione consectetur beatae quo hic, totam maxime fugit nisi aut? Hic culpa error voluptatem! Quos praesentium animi expedita ut quam vero minima, quis fuga laudantium possimus minus optio, hic molestiae unde provident dolorum nisi. Illo atque, est quasi veniam ab quas aliquid nostrum dolore, ea asperiores sint perspiciatis dolorem iste iusto suscipit alias beatae odit et sunt numquam quo cupiditate, ipsum consequuntur optio? Soluta a tempore aliquam rem assumenda esse eum quis sit, officia ab, totam voluptatibus. Distinctio, fugit officiis. Assumenda magnam ex ad eius fuga, libero modi quis quia. Suscipit dolore labore ad cupiditate aspernatur quas esse corporis eos perspiciatis fuga ea beatae eligendi nam illo expedita, repellat officiis, architecto nobis neque velit ullam quae sint. Libero voluptate aperiam accusantium voluptatibus harum ducimus. Aliquid, unde pariatur. Itaque harum debitis in deserunt officia sit consequatur nulla cum, labore est porro, maxime sunt quam unde beatae autem ducimus, voluptatibus officiis velit tempora molestias! Ullam officiis sint tempore blanditiis velit vero eaque? Reiciendis, deserunt molestiae rem commodi velit eius debitis facere ipsam eaque, minima nesciunt consectetur quasi illum similique quos aliquid nihil!'
        ]);

        Setting::create([
            'nama'=>'about_pic',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'blog_pic',
            'value'=>''
        ]);


        Setting::create([
            'nama'=>'gallery_pic',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'quote',
            'value'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quaerat culpa, dolores cupiditate assumenda sequi neque id? Dolorem, sed earum!'
        ]);

        Setting::create([
            'nama'=>'quote_bg',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'quote_author',
            'value'=>'BEM SAR'
        ]);

        Setting::create([
            'nama'=>'instagram',
            'value'=>'https://www.instagram.com/bem.sar/'
        ]);

        Setting::create([
            'nama'=>'facebook',
            'value'=>'https://www.facebook.com/sekretariat.bemsar.3'
        ]);

        Setting::create([
            'nama'=>'alamat',
            'value'=>'Jl. Pendidikan No.17, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28293'
        ]);

        Setting::create([
            'nama'=>'phone',
            'value'=>'0895630011329'
        ]);

        Setting::create([
            'nama'=>'email',
            'value'=>'bem@sar.ac.id'
        ]);

       

        Setting::create([
            'nama'=>'latitude',
            'value'=>'0.44820427589049355'
        ]);

        Setting::create([
            'nama'=>'longitude',
            'value'=>'101.39838934521136'
        ]);
        


    }
}
