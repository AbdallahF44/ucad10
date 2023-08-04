<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LocalizedContent;

class LocalizedContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $localizedContent = new LocalizedContent();

        $localizedContent->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'من نحن'
        ]);

        $localizedContent->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'كلية تنمية القدرات هي مؤسسة أكاديمية مستقلة تعمل تحت إشراف واعتماد وزارة التعليم العالي والبحث العلمي. تأسست عام 1999 لتقديم خدمة التعليم الفني والمهني للمجتمع الفلسطيني تحت مسمى كلية المجتمع العربي. ثم تحولت في عام 2009 إلى كلية جامعية تمنح درجة البكالوريوس والدبلومات المتوسطة والدبلومات المهنية في مختلف التخصصات والمجالات لتصبح إحدى منارات التعليم العالي في فلسطين. من أجل تحقيق رؤية الريادة والتميز ، تسعى الكلية إلى توطيد علاقاتها على المستويين الدولي والإقليمي من خلال مد جسور التعاون الأكاديمي والثقافي بين الكلية والمؤسسات التعليمية والأكاديمية الأخرى ، وكذلك المنظمات العربية والدولية',

        ]);

        $localizedContent->content_type = 0; // Set the foreign key value

        $localizedContent->save();
    }
}
