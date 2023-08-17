<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $article = new Article();

        $article->setTranslations('title', [
            'en' => 'article1',
            'ar' => '1مقالة'
        ]);

        $article->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'كلية تنمية القدرات هي مؤسسة أكاديمية مستقلة تعمل تحت إشراف واعتماد وزارة التعليم العالي والبحث العلمي. تأسست عام 1999 لتقديم خدمة التعليم الفني والمهني للمجتمع الفلسطيني تحت مسمى كلية المجتمع العربي. ثم تحولت في عام 2009 إلى كلية جامعية تمنح درجة البكالوريوس والدبلومات المتوسطة والدبلومات المهنية في مختلف التخصصات والمجالات لتصبح إحدى منارات التعليم العالي في فلسطين. من أجل تحقيق رؤية الريادة والتميز ، تسعى الكلية إلى توطيد علاقاتها على المستويين الدولي والإقليمي من خلال مد جسور التعاون الأكاديمي والثقافي بين الكلية والمؤسسات التعليمية والأكاديمية الأخرى ، وكذلك المنظمات العربية والدولية',

        ]);
        $article->status=1;
        $article->type = 1; 

        $article->save();


        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'من نحن'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'كلية تنمية القدرات هي مؤسسة أكاديمية مستقلة تعمل تحت إشراف واعتماد وزارة التعليم العالي والبحث العلمي. تأسست عام 1999 لتقديم خدمة التعليم الفني والمهني للمجتمع الفلسطيني تحت مسمى كلية المجتمع العربي. ثم تحولت في عام 2009 إلى كلية جامعية تمنح درجة البكالوريوس والدبلومات المتوسطة والدبلومات المهنية في مختلف التخصصات والمجالات لتصبح إحدى منارات التعليم العالي في فلسطين. من أجل تحقيق رؤية الريادة والتميز ، تسعى الكلية إلى توطيد علاقاتها على المستويين الدولي والإقليمي من خلال مد جسور التعاون الأكاديمي والثقافي بين الكلية والمؤسسات التعليمية والأكاديمية الأخرى ، وكذلك المنظمات العربية والدولية',

        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();


        $article = new Article();

        $article->setTranslations('title', [
            'en' => 'article2',
            'ar' => '2مقالة'
        ]);

        $article->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'كلية تنمية القدرات هي مؤسسة أكاديمية مستقلة تعمل تحت إشراف واعتماد وزارة التعليم العالي والبحث العلمي. تأسست عام 1999 لتقديم خدمة التعليم الفني والمهني للمجتمع الفلسطيني تحت مسمى كلية المجتمع العربي. ثم تحولت في عام 2009 إلى كلية جامعية تمنح درجة البكالوريوس والدبلومات المتوسطة والدبلومات المهنية في مختلف التخصصات والمجالات لتصبح إحدى منارات التعليم العالي في فلسطين. من أجل تحقيق رؤية الريادة والتميز ، تسعى الكلية إلى توطيد علاقاتها على المستويين الدولي والإقليمي من خلال مد جسور التعاون الأكاديمي والثقافي بين الكلية والمؤسسات التعليمية والأكاديمية الأخرى ، وكذلك المنظمات العربية والدولية',

        ]);
        $article->status=1;
        $article->type = 1; 

        $article->save();




        $article = new Article();

        $article->setTranslations('title', [
            'en' => 'article3',
            'ar' => '3مقالة'
        ]);

        $article->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'كلية تنمية القدرات هي مؤسسة أكاديمية مستقلة تعمل تحت إشراف واعتماد وزارة التعليم العالي والبحث العلمي. تأسست عام 1999 لتقديم خدمة التعليم الفني والمهني للمجتمع الفلسطيني تحت مسمى كلية المجتمع العربي. ثم تحولت في عام 2009 إلى كلية جامعية تمنح درجة البكالوريوس والدبلومات المتوسطة والدبلومات المهنية في مختلف التخصصات والمجالات لتصبح إحدى منارات التعليم العالي في فلسطين. من أجل تحقيق رؤية الريادة والتميز ، تسعى الكلية إلى توطيد علاقاتها على المستويين الدولي والإقليمي من خلال مد جسور التعاون الأكاديمي والثقافي بين الكلية والمؤسسات التعليمية والأكاديمية الأخرى ، وكذلك المنظمات العربية والدولية',

        ]);
        $article->status=1;
        $article->type = 1; 

        $article->save();

        $article = new Article();

        $article->setTranslations('title', [
            'en' => 'article4',
            'ar' => '4مقالة'
        ]);

        $article->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'كلية تنمية القدرات هي مؤسسة أكاديمية مستقلة تعمل تحت إشراف واعتماد وزارة التعليم العالي والبحث العلمي. تأسست عام 1999 لتقديم خدمة التعليم الفني والمهني للمجتمع الفلسطيني تحت مسمى كلية المجتمع العربي. ثم تحولت في عام 2009 إلى كلية جامعية تمنح درجة البكالوريوس والدبلومات المتوسطة والدبلومات المهنية في مختلف التخصصات والمجالات لتصبح إحدى منارات التعليم العالي في فلسطين. من أجل تحقيق رؤية الريادة والتميز ، تسعى الكلية إلى توطيد علاقاتها على المستويين الدولي والإقليمي من خلال مد جسور التعاون الأكاديمي والثقافي بين الكلية والمؤسسات التعليمية والأكاديمية الأخرى ، وكذلك المنظمات العربية والدولية',

        ]);
        $article->status=1;
        $article->type = 1; 
        $article->save();


        $article = new Article();
        $article->setTranslations('title', [
            'en' => 'Continuous Learning',
            'ar' => 'التعليم المستمر',
        ]);

        $article->setTranslations('content', [
            'en' => 'Established in the early 1990s as a community outreach program, the Center for Continuing Education (CCE) is still functioning as Birzeit University’s community service arm working in the areas of educational reform, professional and organizational development, enterprising & entrepreneurship and capacity building for the current and future work.

            CCE endeavors to empower the local community and create sustainable development impact.  The underlying principles upon which CCE stands are innovation and creativity, teamwork, continuous learning and development, cooperation, knowledge sharing and partnerships, respect and integrity.  CCE is fully aware that these foundations are the basis of success and survival required of any individual or organization today, and more importantly in the future.',
            'ar' =>'عمل مركز التعليم المستمر منذ تأسيسه عام 1991 م في مجالين رئيسيين، الأول الإجتماعي والذي تضمن أنشطة وبرامج ومشروعات إستهدفت تنمية المجتمع ورفاهيته، والثاني الإقتصادي والذي تضمن برامج ومشروعات إستهدفت المساهمة في النمو الإقتصادي في السياق الفلسطيني.

            ويعتبر المركز مساهماً رئيسياً في إحداث الأثر الإيجابي في هذين المجالين على النحو التالي:
            
            أن يكون النظام التعليمي المحلي قادراً على تخريج شباب ذوي معرفة علمية وثقافة واسعة، مبدعين في عملهم، منتمين لمجتمعهم، قادرين على دفع عجلة الإقتصاد المحلي وقيادة التغيرات الإجتماعية لتحقيق دولة فلسطينية مزدهرة.
            أن تصبح المجتمعات المحلية قادرة على دعم رفاهية جميع أفرادها بمن فيهم الفقراء وذوي الإعاقة والنساء والشباب والأطفال من خلال بناء قدراتهم المعرفية والمهنية وتعزيز مشاركاتهم المجتمعية واكسابهم مهارات التعبير عن أولوياتهم وتحقيق تطلعاتهم.
            أن تتمكنالشركات الخاصة من المنافسة في الأسواق المحلية والإقليمية، ومن تقديم منتجات ذات جودة عالية لعملائها -قادرة على النمو باستمرار، والمساهمة في خلق فرص عمل جديدة للشباب الفلسطيني.
            ولكي يتمكن مركز التعليم المستمر من إحداث ذلك فإنه يتخصص في تقديم خدمات التدريب، والإستشارات، وخدمات تطوير الأبحاث والدراسات للأفراد ولمؤسسات المجتمع المختلفة.
            
            ',

        ]);
        $article->status=1;
        $article->type = 0; 

        $article->save();


        // News
        
        $news = new Article();

        $news->setTranslations('title', [
            'en' => 'news1',
            'ar' => 'الخبر الأول'
        ]);

        $news->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'كلية تنمية القدرات هي مؤسسة أكاديمية مستقلة تعمل تحت إشراف واعتماد وزارة التعليم العالي والبحث العلمي. تأسست عام 1999 لتقديم خدمة التعليم الفني والمهني للمجتمع الفلسطيني تحت مسمى كلية المجتمع العربي. ثم تحولت في عام 2009 إلى كلية جامعية تمنح درجة البكالوريوس والدبلومات المتوسطة والدبلومات المهنية في مختلف التخصصات والمجالات لتصبح إحدى منارات التعليم العالي في فلسطين. من أجل تحقيق رؤية الريادة والتميز ، تسعى الكلية إلى توطيد علاقاتها على المستويين الدولي والإقليمي من خلال مد جسور التعاون الأكاديمي والثقافي بين الكلية والمؤسسات التعليمية والأكاديمية الأخرى ، وكذلك المنظمات العربية والدولية',

        ]);
        $news->status=1;
        $news->type = 3; 

        $news->save();




        $news = new Article();

        $news->setTranslations('title', [
            'en' => 'news2',
            'ar' => 'الخبر الثاني'
        ]);

        $news->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'كلية تنمية القدرات هي مؤسسة أكاديمية مستقلة تعمل تحت إشراف واعتماد وزارة التعليم العالي والبحث العلمي. تأسست عام 1999 لتقديم خدمة التعليم الفني والمهني للمجتمع الفلسطيني تحت مسمى كلية المجتمع العربي. ثم تحولت في عام 2009 إلى كلية جامعية تمنح درجة البكالوريوس والدبلومات المتوسطة والدبلومات المهنية في مختلف التخصصات والمجالات لتصبح إحدى منارات التعليم العالي في فلسطين. من أجل تحقيق رؤية الريادة والتميز ، تسعى الكلية إلى توطيد علاقاتها على المستويين الدولي والإقليمي من خلال مد جسور التعاون الأكاديمي والثقافي بين الكلية والمؤسسات التعليمية والأكاديمية الأخرى ، وكذلك المنظمات العربية والدولية',

        ]);
        $news->status=1;
        $news->type = 3; 
        $news->save();


        $news = new Article();

        $news->setTranslations('title', [
            'en' => 'news3',
            'ar' => 'الخبر الثالث'
        ]);

        $news->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'كلية تنمية القدرات هي مؤسسة أكاديمية مستقلة تعمل تحت إشراف واعتماد وزارة التعليم العالي والبحث العلمي. تأسست عام 1999 لتقديم خدمة التعليم الفني والمهني للمجتمع الفلسطيني تحت مسمى كلية المجتمع العربي. ثم تحولت في عام 2009 إلى كلية جامعية تمنح درجة البكالوريوس والدبلومات المتوسطة والدبلومات المهنية في مختلف التخصصات والمجالات لتصبح إحدى منارات التعليم العالي في فلسطين. من أجل تحقيق رؤية الريادة والتميز ، تسعى الكلية إلى توطيد علاقاتها على المستويين الدولي والإقليمي من خلال مد جسور التعاون الأكاديمي والثقافي بين الكلية والمؤسسات التعليمية والأكاديمية الأخرى ، وكذلك المنظمات العربية والدولية',

        ]);
        $news->status=1;
        $news->type = 3; 
        $news->save();


        // Announcements
        
        $announcement = new Article();

        $announcement->setTranslations('title', [
            'en' => 'announcement1',
            'ar' => 'الإعلان الأول'
        ]);

        $announcement->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'كلية تنمية القدرات هي مؤسسة أكاديمية مستقلة تعمل تحت إشراف واعتماد وزارة التعليم العالي والبحث العلمي. تأسست عام 1999 لتقديم خدمة التعليم الفني والمهني للمجتمع الفلسطيني تحت مسمى كلية المجتمع العربي. ثم تحولت في عام 2009 إلى كلية جامعية تمنح درجة البكالوريوس والدبلومات المتوسطة والدبلومات المهنية في مختلف التخصصات والمجالات لتصبح إحدى منارات التعليم العالي في فلسطين. من أجل تحقيق رؤية الريادة والتميز ، تسعى الكلية إلى توطيد علاقاتها على المستويين الدولي والإقليمي من خلال مد جسور التعاون الأكاديمي والثقافي بين الكلية والمؤسسات التعليمية والأكاديمية الأخرى ، وكذلك المنظمات العربية والدولية',

        ]);
        $announcement->status=1;
        $announcement->type = 2; 

        $announcement->save();




        $announcement = new Article();

        $announcement->setTranslations('title', [
            'en' => 'announcement2',
            'ar' => 'ألإعلان الثاني'
        ]);

        $announcement->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'كلية تنمية القدرات هي مؤسسة أكاديمية مستقلة تعمل تحت إشراف واعتماد وزارة التعليم العالي والبحث العلمي. تأسست عام 1999 لتقديم خدمة التعليم الفني والمهني للمجتمع الفلسطيني تحت مسمى كلية المجتمع العربي. ثم تحولت في عام 2009 إلى كلية جامعية تمنح درجة البكالوريوس والدبلومات المتوسطة والدبلومات المهنية في مختلف التخصصات والمجالات لتصبح إحدى منارات التعليم العالي في فلسطين. من أجل تحقيق رؤية الريادة والتميز ، تسعى الكلية إلى توطيد علاقاتها على المستويين الدولي والإقليمي من خلال مد جسور التعاون الأكاديمي والثقافي بين الكلية والمؤسسات التعليمية والأكاديمية الأخرى ، وكذلك المنظمات العربية والدولية',

        ]);
        $announcement->status=1;
        $announcement->type = 2; 
        $announcement->save();


        $announcement = new Article();

        $announcement->setTranslations('title', [
            'en' => 'announcement3',
            'ar' => 'الإعلان الثالث'
        ]);

        $announcement->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'كلية تنمية القدرات هي مؤسسة أكاديمية مستقلة تعمل تحت إشراف واعتماد وزارة التعليم العالي والبحث العلمي. تأسست عام 1999 لتقديم خدمة التعليم الفني والمهني للمجتمع الفلسطيني تحت مسمى كلية المجتمع العربي. ثم تحولت في عام 2009 إلى كلية جامعية تمنح درجة البكالوريوس والدبلومات المتوسطة والدبلومات المهنية في مختلف التخصصات والمجالات لتصبح إحدى منارات التعليم العالي في فلسطين. من أجل تحقيق رؤية الريادة والتميز ، تسعى الكلية إلى توطيد علاقاتها على المستويين الدولي والإقليمي من خلال مد جسور التعاون الأكاديمي والثقافي بين الكلية والمؤسسات التعليمية والأكاديمية الأخرى ، وكذلك المنظمات العربية والدولية',

        ]);
        $announcement->status=1;
        $announcement->type = 2; 
        $announcement->save();


    }
}
