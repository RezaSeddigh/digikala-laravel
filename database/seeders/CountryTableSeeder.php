<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        $countries = [
            'آذربایجان', 'آرژانتین', 'آفریقای جنوبی', 'آلبانی', 'آلمان', 'آنگولا', 'اتریش',
            'اردن', 'ازبکستان', 'اسپانیا', 'استرالیا', 'استونی', 'افغانستان', 'الجزایر',
            'امارات متحده عربی', 'اندونزی', 'اوگاندا', 'اوکراین', 'ایالات متحده آمریکا', 'ایتالیا',
            'ایسلند', 'ایران', 'باکستان', 'باهاما', 'بحرین', 'بنگلادش', 'باربادوس', 'بلاروس',
            'بلژیک', 'بلیز', 'بنین', 'بوتان', 'بولیوی', 'بوسنی و هرزگوین', 'بوتسوانا', 'برزیل',
            'بلغارستان', 'بورکینافاسو', 'بروندی', 'پاپوا گینه نو', 'پاراگوئه', 'پالائو', 'پاناما',
            'پرتغال', 'پرو', 'پرتغال', 'پرو', 'تاجیکستان', 'تانزانیا', 'تایلند', 'ترکیه', 'ترکمنستان',
            'توگو', 'تونگا', 'ترینیداد و توباگو', 'تونس', 'تووالو', 'جمهوری چک', 'چاد', 'چین',
            'دانمارک', 'دومینیکا', 'دومینیکن', 'رواندا', 'روسیه', 'رومانی', 'زامبیا', 'زیمبابوه',
            'ژاپن', 'ساحل عاج', 'ساموآ', 'سان مارینو', 'سائوتومه و پرینسیپ', 'سری‌لانکا', 'سنت کیتس و نویس',
            'سنت لوسیا', 'سنت وینسنت و گرنادین‌ها', 'سنگال', 'سنگاپور', 'سوئد', 'سویس', 'سومالی',
            'سوریه', 'سیرالئون', 'صربستان', 'عراق', 'عربستان سعودی', 'عمان', 'غنا', 'فلسطین', 'فلیپین',
            'فنلاند', 'فیجی', 'قرقیزستان', 'قزاقستان', 'قطر', 'کامبوج', 'کامبوج', 'کامرون', 'کانادا',
            'کاستاریکا', 'کرواسی', 'کوبا', 'کویت', 'کومور', 'کنگو', 'کنیا', 'کیریباتی', 'گابن', 'گامبیا',
            'گرجستان', 'گرنادا', 'گواتمالا', 'گویان', 'گینه', 'گینه بیسائو', 'لائوس', 'لبنان', 'لسوتو',
            'لیبریا', 'لیبی', 'لیتوانی', 'لیختن اشتاین', 'لوکزامبورگ', 'مالاوی', 'مالزی', 'مالدیو',
            'مالی', 'مالت', 'مجارستان', 'مراکش', 'مغولستان', 'مقدونیه شمالی', 'مکزیک', 'موریتانی',
            'موریس', 'موزامبیک', 'مولداوی', 'موناکو', 'مونته‌نگرو', 'میانمار', 'نامیبیا', 'نائورو',
            'نپال', 'نیجر', 'نیجریه', 'نروژ', 'نیوزلند', 'هائیتی', 'هند', 'هندوراس', 'هلند',
            'یمن', 'یونان'
        ];
        foreach ($countries as $country)
            Country::query()->create(['name' => $country]);

    }
}
