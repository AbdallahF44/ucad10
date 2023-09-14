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
            'ar'=>'كلية تنمية القدرات الجامعية هي كلية تمنح درجة البكالوريوس والدبلوم المتوسط تعمل بإشراف وزارة التربية والتعليم العالي، أنشأت كأول كلية في مدينة خانيونس في عام 1984 م لتقدم خدمة التعليم التقني والمهني للمجتمع الفلسطيني في مختلف المجالات، وكان هدفها الأول تخريج الكوادر الفنية المؤهلة علمياً وعملياً للعمل في مختلف المجالات ، حيث تتيح الكلية للطلبة خريجي الثانوية العامة والعاملين في مؤسسات المجتمع المدني والخاصة اكتساب المهارات التقنية والفنية ومواكبة التطور المتلاحق الذي يشهده العالم.
            ومن خلال هذه الخدمات الإلكترونية تسعى الكلية أن تخرج أجيالاً قادرة على الانخراط في سوق العمل الفلسطيني وتقديم ما هو نافع للمجتمع الفلسطيني.
            '
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();



        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'كلمة عميد الكلية'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar'=>'الحمد لله رب العالمين ، والصلاة والسلام علي المبعوث رحمة للعالمين ، سيدنا محمد وعلي آله وصحبه أجمعيين وبعد : أبنائي الطلبة لا شك في أن الجامعات قاطرات تقدم لأممها ، تأخذ بيدها، وتوجه مسارها، بل وتحدد لها مصيرها ومستقبلها. ونحن في كلية تنمية القدرات نعي جيداَ طبيعة الدور الذي يتعين علينا القيام به، كما ندرك حجم وجسامة المسؤوليات الملقاة على كاهلنا ، لذا فإننا لا ندخر جهداً من أجل أن نكون في طليعة مؤسسات التعليم العالي الفلسطيني وفاء بواجباتنا ، وتحقيقاً لطموحاتنا .
            وقد حبانا الله قدراً من الموارد والإمكانات البشرية والمادية التي نسعى جاهدين لحسن استثمارها ، تعظيماً للمنفعة منها ، وتنمية لآفاق الرقي المتاحة أمامنا؛ لذا كان من الواجب علينا أن نتقدم ونتحرك في كافة الاتجاهات ، ونطرق كافة السبل من أجل أن نلحق بركب التقدم والتطور الهائل في عالم لا يعترف بالانغلاق والانطواء على النفس ، وأن نكون من طلائع الكليات التي تعتمد أحدث التقنيات في تقديم وظيفة التعليم لأبنائها ، وأفضل معينات البحث العلمي المتميز ، وأرقى خدمة لمجتمع ناشئ يطمح دائما إلى الأفضل والأرقى ، فضلاً عن دور فاعل ومميز على مستوى البيئة العلمية ، وعليه نسأل الله سبحانه أن يوفقنا لكل ما فيه من خير و تقدم وازدهار لتحقيق أهداف رسمناها وأمال توقعناها ورسالة تبنيناها .
            '
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();

        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'الرؤية والرسالة'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar'=>'تسعى كلية تنمية القدرات الجامعية  أن تكون كلية جامعية رائدة ومتميزة في برامجها الأكاديمية، وخدمة المجتمع وتعزيز ثقافة الجودة
            • رسالة الكلية:
            كلية تنمية القدرات الجامعية  هي مؤسسة تعليم عال مستقلة، تهدف إلى إعداد جيل فاعل من قادة المستقبل مزودين بالمعرفة والمهارات وتكنولوجيا المعلومات ولديهم القدرة على التعلم المستمر من خلال تعزيز القدرات وتحسين نوعية البرامج الأكاديمية، وربط الكلية بالمجتمع في إطار الثقافة الفلسطينية ومبادئ حقوق الإنسان.
            '
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();

        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'الأهداف العامة'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar'=>'تتمثل أهداف الكلية فيما يلي :
            • تعزيز التطوير المؤسسي لكلية تنمية القدرات الجامعية  من خلال تحسين كفاءة وجودة الكادر الأكاديمي والإداري المساند للعملية التعليمية والبحث العلمي وخدمة المجتمع.
            • تحسين جودة البرامج الأكاديمية المختلفة في كلية تنمية القدرات الجامعية لتلبية احتياجات  سوق العمل والمجتمع.
            • المساهمة في تنمية المجتمع الفلسطيني من خلال التشبيك مع المؤسسات والمراكز البحثية والمؤسسات المجتمعية وتقديم الخدمات الاستشارية و البحثية و الإدارية و التكنولوجية والتعليمية والعمل التطوعي.
            '
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();


        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'مجلس الكلية'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar'=>'يتولى مجلس الكلية ما يلي ضمن السياسات العامة والتخطيط العام للكلية  /
            1- إقرار الأنظمة الأكاديمية التي تطبق على الطلبة.
            2- إقرار الخطط الدراسية والمناهج المقدمة من رؤساء الأقسام.
            3- إقرار منح الشهادات للطلبة اللذين استوفوا شروط الحصول عليها.
            4- إقرار الفصل من الكلية للطلاب اللذين استحقوا ذلك.
            5- بحث القضايا الطلابية التي يعرضها رئيس المجلس.
            6- القيام بتنفيذ السياسة العامة للكلية في النواحي الأكاديمية والبحث العلمي.
            7 – العمل على الحفاظ على الشخصية العربية الإسلامية للكلية سواء أكان ذلك في المناهج الأكاديمية أو النشاطات الثقافية أو الاجتماعية أو البرامج غير المنهجية.
            8- توثيق صلات الكلية بالجامعات والكليات الأخرى بالمجتمع المحلي ومؤسساته بما يضمن إحداث تفاعل إيجابي بين الكلية ومجتمعها.
            9- وضع وإقرار سياسة قبول الطلاب وتحديد أعدادهم في كل قسم أو برنامج في الكلية.
            10- تشكيل مجالس ولجان النظام والجزاءات بالنسبة لأعضاء الهيئة التدريسية والإدارية والعاملين والطلبة وفق الأنظمة والتعليمات الخاصة الصادرة بذلك.
            11- تقييم أداء الكلية بشكل دوري بما يتضمن تطويرها وتلبيتها لحاجات المجتمع وبناء عقلية علمية ذات رسوخ حضاري متميز.
            12- منح الدرجات العلمية ومعادلة الشهادات والدرجات العلمية الصادرة من الجامعات والكليات الأخرى واقتراح منح الدرجة الفخرية.
            '
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();


        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'عن الشئون الأكاديمية'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar'=>'انطلاقاً من رؤية الكلية ورسالتها الواضحة وحرصها الشديد في المساهمة الفاعلة في تطوير المجتمع الفلسطيني، وتعزيز دورها الريادي في تطوير وتفعيل القوى البشرية الفلسطينية، تواصل الشئون الأكاديمية تقديم الخدمة التعليمية لطلبة الكلية، وتعمل باستمرار علي رفع كفاءة وجودة التعليم في شتى المجالات الأكاديمية، والإدارية، وتمارس الشئون الأكاديمية دورها في الإشراف، والتوجيه، والتطوير للأنشطة الأكاديمية في الكلية من خلال أقسام الكلية والمراكز التطويرية المختلفة.
            يقوم نائب العميد للشئون الأكاديمية بالأعمال والصلاحيات التي كلف بها بموجب قوانين وأنظمة الكلية إلى جانب ما يكلفه به العميد من أعمال وصلاحيات أخرى وبصورة خاصة ما يلي:
            1.	الإشراف على أعمال الأقسام وجميع الوحدات الأكاديمية بما في ذلك مراكز خدمة المجتمع.
            2.	القيام بإجراء دراسات تهدف لتقييم وتطوير المناهج والخطط والبرامج المنهجية اللامنهجية وتحديد متطلبات الكلية من أعضاء هيئة تدريس والأبنية والمختبرات واللوازم الأخرى واقتراح افتتاح أقسام جديدة ودراسة كل ما يتعلق بسياسة القبول للطلاب ومتابعة قضايا الخرجين.
            3.	الإشراف على شئون المكتبة.
            4.	الإشراف على قسم شئون الطلبة.
            5.	الإشراف على قسم القبول والتسجيل.
            6.	الإشراف على أعضاء الهيئة التدريسية.
            7.	الإشراف على قسم الجودة والنوعية.
            8.	يقوم مقام عميد الكلية ويمارس جميع صلاحياته في حال غياب العميد.
            '
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();

        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'خدمات مميزة'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar'=>'خدمات مميزة
            • تتم الدراسة التطبيقية في مختبرات الحاسب الآلي المجهزة بأحدث الأجهزة والمرتبط بشبكة للإنترنت .
            • استخدام الأساليب العلمية في التعليم والتدريب ، متمثلة في الأجهزة الحديثة والأجهزة السمعية والبصرية وكذلك وسائل العرض الحديثة .
            • يستطيع الطالب استخدام شبكة الإنترنت للحصول على خدمات مختلفة منها : التسجيل والاستعلام عن الدرجات .
            • تقديم خدمات المكتبة المركزية بما توفره من كتب ومراجع لكل طالب وطالبة ملتحق بالكلية بصورة ميسرة .
            • تنظيم الأنشطة الرياضية وتطوير المهارات الرياضية للطلبة ، حيث تحتوي على العديد من الملاعب والصالات الرياضية .
            حوافز :
            • يستطيع خريجو الكلية العمل في مختلف المجالات ، وكافة المؤسسات العامة والخاصة ، على حد سواء ، من خلال سعي إدارة الكلية الدؤوب واتصالها بالمؤسسات العامة والخاصة المختلفة ؛ لتوفير فرص عمل للخريجين ، كما تساعدهم بتقديم الاستشارات والاقتراحات بعد تخرجهم .
            • تعطي الكلية أولوية لخريجيها في وظائفها الشاغرة .
            • يقوم قسم شئون الطلبة بتقديم العديد من المنح والمساعدات للطلبة .
            • تقدم شهادات تقديرية لطلبتها المبدعين ، والحاصلين على درجة الامتياز .
            • يمكن للطلبة الخريجين المتفوقين الالتحاق ببرامج البكالوريوس بالكلية أو بجامعات الوطن لإكمال الدراسة الجامعية حسب نظام التجسير.
            • توفر وحدة الخريجين في الكلية فرص للطلبة لتنمية مهاراتهم ، وتحسين فرص حصولهم على عمل بعد التخرج.
            '
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();


        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'اعتمادات الكلية'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar'=>'– مشروع نشر ثقافة الجودة بين الأكاديميين والعاملين الإداريين بالكلية .
            – مشروع تطوير البيئة التدريسية .
            – مشروع جودة عضو هيئة التدريس .
            – مشروع جودة الإدارة الجامعية .
            – مشروع جودة المساقات التدريسية .
            '
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();

        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'عن القبول والتسجيل '
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar'=>'يهدف قسم القبول والتسجيل إلى تقديم كافة الخدمات المتعلقة بقبول الطلبة وتسجيلهم ومتابعة حالتهم الأكاديمية طيلة فترة الدراسة ومن ثم تخريجهم حسب النظام الأكاديمي المعمول به في الكلية .
            المهام والمسئوليات الرئيسية :
            • المشاركة في استقبال الطلبة الجدد وإرشادهم في بداية كل عام دراسي .
            • تنسيق الطلبة بالتخصصات المختلفة حسب مفاتيح التنسيق المعمول به .
            • مساعدة الطلبة في تسجيل مساقاتهم والحصول على جداولهم الفصلية ، وما يتبع ذلك من عمليات سحب وإضافة وتغيير الشعب والانسحاب من الدراسة .
            • استخراج البطاقات الجامعية للطلبة .
            • إعداد ملفات للطلبة المقبولين بالكلية تتضمن الوثائق المطلوبة .
            • استخراج كافة الأوراق الثبوتية التي يحتاجها الطالب كشهادة القيد وكشف الدرجات والإفادات ووصف المساقات .
            • استلام وتنفيذ طلبات التأجيل والتحويل من تخصص لآخر وطلبات إعادة القيد ، وكذلك طلبات سحب الفصل الدراسي .
            • إعداد الجداول الفصلية بالتعاون مع الأقسام الأكاديمية ، وكذلك إعداد الجداول الخاصة بالامتحانات النهائية .
            • متابعة الوضع الأكاديمي للطلبة من حيت المعدل التراكمي ، وفصل الطلبة الواجب فصلهم حسب النظام الأكاديمي .
            • المساهمة في حل القضايا الطلابية سواء المحوسبة أو الورقية .
            • إرشاد الطلبة وتعريفهم بالنظام الأكاديمي ، بالتعاون مع الشئون الأكاديمية والأقسام الأكاديمية .
            • استكمال إجراءات تخريج الطلبة وحصولهم على شهاداتهم .
            '
            
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();


        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'كيف تختار تخصصك'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar'=>'اختيار التخصص المناسب
            يعد اختيار التخصص الدراسي من أهم الخطوات في حياة الطالب لما يترتب عليه من تحديد أسلوب الدراسة والاتجاهات المهنية المستقبلية، ويأتي الاختيار السليم القائم على أسس ثابتة بمثابة حماية من عثرات المشوار الدراسي، كما يوفر مزيدا من التميز والنجاح في المستقبل. يواجه الطالب أحيانا عددا من العوائق التي تمنعه من تسجيل التخصص الملائم، بسبب نقص المعلومات عن التخصصات المتاحة، أو الخضوع لرغبات الآخرين، إلى جانب التقصير لدى المدرسة في تحفيز الطالب على معرفة ظروف المهن المختلفة واكتشاف مهاراته الذاتية، كما يكاد ينعدم هذا الجانب التثقيفي لدى العديد من جامعاتنا فلا تقام ندوات أو لقاءات أو احتفاليات ملائمة للتعريف بنوعية الدراسة ومجالات التخصصات المختلفة، لذا فكل تلك العوامل تسبب نقصا في المعلومات لدى الطالب المقدم على المرحلة الجامعية، يضاف إلى ذلك تأثير المجتمع والثقافة السائدة فيه والتي أحيانا ما تـُخضع الطالب لإرادتها وتوجه اختياراته نحو مجالات معينة دون غيرها، أما أكثر العوائق التي تقف في وجه الطالب فهي اعتماد الكليات على مجموع الدرجات في المرحلة الثانوية دون الالتفات إلى قياس المهارات والقدرات.
            • خطوات أولية
            قبل اختيار التخصص الجامعي لا بد من الاستعداد لهذه الخطوة مبكرا بالتفكير والاجتهاد من أجل الوصول إلى قرار هام في حياة الطالب، ويفضل اتخاذ بعض الخطوات التي تساعد على ذلك مثل:
            • التحرر من تأثير الآخرين : بأن يخرج الطالب نفسه من سيطرة الآخرين أو الخضوع لرغباتهم، لكي يكون قراره ناتجا عن إرادته كليا ويتحمل مسؤوليته بنفسه.
            • الاستشارة: لن يستطيع أي طالب أن يصل إلى قرار مناسب بشأن تخصصه الجامعي إلا بالحصول على قدر كاف من المعلومات عن ذاته أولا ثم عن مجالات التخصص ثانيا، وهذه المعلومات لن تتوافر لديه وحده، بل يساهم في ذلك مساندة الأهل والمعلمين في المدرسة والأصدقاء، وذلك طلبا لما لديهم من معلومات وليس لإسناد مهمة الاختيار إليهم.
            • اكتشاف الذات: من أهم المراحل التي لابد لها أن تبدأ في مرحلة مبكرة هي اكتشاف الطالب لمهاراته وقدراته في سن مبكرة وتحديد ما يناسبها من تخصص، ويساعد في اكتشاف المهارات الذاتية أمور قد ترشده، مثل الهوايات والأنشطة التي مارسها، وتقديره في المرحلة الثانوية.
            • أسس الاختيار
            بعد مرحلة الاستعداد تأتي لحظة اختيار التخصص الجامعي والتي يجب على الطالب أن يراعي فيها عددا من الأمور منها:
            • البحث عن التميز: من أهم الأهداف التي لابد على الطالب أن يراعيها هو البحث عن التميز في مجال التخصص، وأحيانا ما يظن بعض الطلاب المتفوقين أن مجموعهم العالي قد يخلق منهم متميزين في دراستهم الجامعية، وهذا ليس شرطا بالضرورة، فالمميزين هم من تواجدوا في مكانهم الصحيح، ومارسوا إبداعهم في مجال العمل.
            • الصورة بعد 10 سنوات: من ضمن الاعتبارات التي لابد على الطالب أن يعيها هي أن يرسم صورة للمجال الذي سيختاره بعد عشر سنوات، كيف سيكون الحال؟ وهو ما سيضطره تلقائيا إلى التفكير في تنمية مهاراته أثناء الدراسة.
            • المهارة قبل الشهادة: بعض الطلاب يجعلون من شهادة التخرج أكبر همهم، غير أن هذا التفكير يؤدي إلى تخرج طالب غير مميز، لذا لا بد للطالب قبل اختيار تخصصه أن يفكر في المهارات التي عليه أن يتعلمها إلى جانب الدراسة الجامعية، فعلى سبيل المثال قد يتخصص الطالب في اللغة الانجليزية، لكن من أجل توسيع مجال عمله يعقد النية على دراسة السكرتارية أو الموارد البشرية.. أو أن يخطط طالب الصحافة لحضور دورات سيحتاجها سواء كانت في الترجمة أو في التصميم بالكمبيوتر .. وكل هذه النقاط لابد أن تدور في رأس الطالب لحظة اتخاذ قراره.
            • أسباب ممنوعة
            إلى جانب ذلك فهناك عدد من الأسباب الواجب تحاشيها عند اختيار التخصص الجامعي نظرا لكونها غير موضوعية ومضللة للطالب المقبل على هذه المرحلة الهامة في حياته، من ضمن تلك الأسباب اختيار التخصص للبقاء مع الأصدقاء الانسياق وراء ما يروج في المجتمع دون تقص للحقائق البحث عن الوجاهة الانصياع لرغبات الأسرة ضد رغبة الطالب التأثر بالدعاية سواء داخل الكليات أو خارجها وفي النهاية تظل هذه الخطوة ذات أهمية في حياة الطالب المهنية والتعليمية، وتحتاج إلى اهتمام جاد وسعي للحصول على أكبر قدر من المعلومات والبدء في سن مبكرة في اكتشاف مهارات الذات.
            '
            
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();



        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'الطلبة الجدد'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar'=>'شـــروط الـــقـــبـول والـتـسـجيــل:
            – أن يكون الطالب حاصلاً على شهادة الثانوية العامة ، أو ما يعادلها.
            – قدم طلبات الالتحاق في الكلية على النماذج الخاصة إلي قسم القبول والتسجيل ، وفق المواعيد التي يعلن عنها في حينه ، مرفقة بالوثائق المطلوبة .
            – يحدد مجلس الكلية عدد الطلاب الذين يقبلون طلابا نظاميين في الكلية كل عام دراسي.
            – يقبل الطلاب حسب معدلاتهم في شهادة الثانوية العامة وطبقاً : للمؤشرات ، والمعايير التي تحددها وزارة التعليم العالي ولجنة القبول بالكلية .
            طـريـقـة تـقـديــم طـلـب الالـتـحاق:
            يتم استلام طلبات الالتحاق للدرجات الأكاديمية من قسم القبول والتسجيل في مقر كلية تنمية القدرات الجامعية الكائن بمحافظة خانيونس  - حي الأمل - الهلال الأحمر الفلسطيني  من الساعة الثامنة صباحاً وحتى الساعة الثالثة مساءً ما عدا أيام الجمعة والسبت  لقاء رسم قدره 20 دينار أردني غير مستردة  .
            الوثـائـق الـمـطلـوبة لتقديم الـطلـب :
            1. صورة مصدقة عن كشف علامات الشهادة الثانوية العامة.
            2. صورة مصدقة عن شهادة الميلاد.
            3. صورة عن الهوية الشخصية .
            4. أربع صور شخصية .
            ملاحظات عامة :
            على الطالب متابعة التعليمات التي يصدرها قسم القبول و التسجيل من خلال موقعنا الالكتروني و الصحف المحلية.
            '
            
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();

        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'كيف تلتحق بالكلية'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar'=>'خطوات الالتحاق بكلية تنمية القدرات 
            عزيزي الطالب …. عزيزتي الطالبة ….
            مرحباً بك  في كليتك كلية تنمية القدرات ، ويسرنا أن تكون واحداً من طلابنا أو طالباتنا  كما و يسعدنا اهتمامك وحرصك على الالتحاق بكليتنا الغراء ، فيما يلي الخطوات التي ينبغي أن تقوم بها من أجل تيسير التحاقك  :
            المرحلة الأولى / التعرف على كلية تنمية القدرات وبرامجها الأكاديمية : 
            • توجه إلى مرشدي الكلية في المكان المخصص لاستقبال الطلبة في الحرم الجامعي للاستفادة من إرشاداتهم ونصائحهم ، وذلك بمجرد ظهور نتائج امتحانات الثانوية العامة وفتح باب القبول في الكلية .
            • استلم النشرة التعريفية الخاصة بالكلية واقرأها جيداً للتعرف على جميع المعلومات اللازمة للالتحاق بالكلية ، وكذلك للتعرف على البرامج الأكاديمية التي بإمكانك الالتحاق بها .
            المرحلة الثانية / الالتحاق بالكلية :
            • توجه إلى قسم المالية لدفع رسوم طلب الالتحاق وقيمتها 20 دينار غير مستردة ، وتسلم إيصالاً بذلك ، مع حساب خاص للدخول إلى خدمات الطلبة على موقع الكلية .
            • التزم بتعبئة كافة البيانات المطلوبة في طلب الالتحاق مع تحري الدقة وخصوصاً في تحديد الاختصاصات التي ترغب الالتحاق بها وفق رغبتك وأولوياتك .
            المرحلة الثالثة / القبول والتسجيل في الكلية :
            
            • ستظهر نتيجة القبول مباشرة فور اعتماد الطلب بناء علي أولويات رغبات الطالب وقدرة التخصصات الاستيعابية .
            • توجه إلي قسم المالية لدفع رسوم الساعات الدراسية للفصل الدراسي حتى تتمكن من تسجيل المساقات حسب الخطة الدراسية النموذجية لكل تخصص وستحصل علي جدولك الدراسي
            • تعرف على أماكن القاعات الدراسية المذكورة في الجدول الدراسي بالإضافة إلى كافة مرافق الكلية ، وذلك بالاستعانة بمرشدي الكلية لتجنب حدوث أي ارباك عند بداية الفصل الدراسي الجديد.
            • الوثائق المطلوبة لإتمام التسجيل : 
            يقوم الطالب بمراجعة قسم القبول والتسجيل لاستكمال ملفه من خلال تقديم الأوراق الثبوتية التالية: 
            1. صورة مصدقة عن شهادة الثانوية العامة أو ما يعادلها .
            2. صورة عن الهوية الشخصية أو جواز السفر .
            3. (4) صور شخصية .
            4. التوقيع على نموذج طلب التحاق مطبوع .
            المرحلة الرابعة / استصدار البطاقة الجامعية :
            • يتقدم الطالب لاستخراج بطاقة جامعية بحيث يتم إحضار صور شخصية للطالب ، وذلك لكل طالب سدد الرسوم الدراسية .
            • يستلم الطالب بطاقته الجامعية من قسم القبول والتسجيل خلال أسبوع من تقديمه للطلب.
            ملاحظة :
            على الطالب الاحتفاظ بالبطاقة الجامعية لتسهيل جميع معاملاته في الكلية ، ليتمكن من دخول قاعات الامتحان وفي حال فقدانها ينبغي إبلاغ قسم القبول
            '
            
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();


        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'أسئلة شائعة'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar'=>'ما هو التقويم الأكاديمي ؟ 
            عبارة عن التواريخ المهمة في حياة الطالب أثناء الدراسة في الكلية، وهي تاريخ بداية الدراسة ونهايتها ونهاية الإضافة والسحب والانسحاب وتقديم طلبات التأجيل
            ما عدد الساعات المسوح تسجيلها بالفصل الدراسي ؟  
            • الحد الأعلى للساعات التي يدرسها الطالب في الفصل الدراسي العادي (21) ساعة معتمدة .
            • الحد الأدنى للساعات التي يدرسها الطالب في الفصل الدراسي (12) ساعة معتمدة، ويجور أن يقلّ الحد الأدنى للساعات عن ذلك في فصل التخرّج أو لأسباب خاصة يقبلها منسق التخصص.
            • الحد الأعلى للعبء الدراسي في الفصلي الصيفي هي (12) ساعات معتمدة، ولا يجوز أن يزيد العبء الدراسي في الفصل الصيفي للطالب الخريج بأيّ حال من الأحوال عن (15) ساعة معتمدة.
            كيف يمكن سحب وإضافة المساقات وما هي مواعيدها ؟ 
            الحذف والإضافة تتم عبر المسجلين الموجودين في صالة القبول والتسجيل، وتكون مواعيد الإضافة أول أسبوعين من بداية الدراسة، أمّا السحب فيستمر حتى أول ثلاثة أسابيع منذ بداية الدراسة.
            أحتاج إلى استشارة دراسية، لمن أتوجّه ؟   
            إلى المرشد الأكاديمي ( رئيس القسم ) لكل اختصاص ضمن الأقسام الأكاديمية.
            ما هو المعدل التراكمي ؟  
            هو المعدل لجميع الفصول والمساقات التي تم دراستها.
            ما هو التحذير الأكاديمي ؟ 
            يُحذّر الطالب إذا حصل على معدل تراكمي أقل من (60%) عدا الفصل الأول للدراسة، وعلى الطالب إلغاء التحذير في مدة أقصاها فصلين دراسيين وإلاّ يُفصل من الكلية  ، حيث إنّه لا يُسمح للطالب المحذّر بالتسجيل أكثر من (15) ساعة.
            هل يمكن للطالب تأجيل دراسته الجامعية ؟  
            بإمكان الطالب تأجيل دراسته لمدة فصلين دراسيين متتالين أو متباعدين وبإمكان الطالب زيادة مدة التأجيل ولكن بشرط موافقة العميد .
            ما هي الحالات التي يُفصَل بها الطالب من الكلية ؟ 
            يفصل الطالب إذا :
            * حصل على معدل تراكمي أقل من (50%) في الفصل الأول
            * حصل على معدل أقل من( 55 % )في أيّ فصل بعد الفصل الأول
            * لم يتمكن من رفع التحذير خلال فصلين متتاليين .
            ماذا يعني السحب، الإضافة، الانسحاب وكيف يمكن تنفيذ هذه العلميات ؟ 
            السحب : إلغاء تسجيل مساق أو آخر مع احتفاظ الطالب برسومه وخلال فترة السحب .
            الإضافة : تسجيل مساق أو آخر خلال بعد انتهاء التسجيل وخلال فترة محددة. :  السحب
            الانسحاب : إلغاء تسجيل مساق أو آخر مع فقدان الطالب لرسومه وخلال فترة الانسحاب، والتي تبدأ من نهاية السحب حتى أسبوع قبل بدء الامتحانات النهائية
            ماذا تعني هذه المصطلحات : راسب، غير مكتمل، منسحب ؟
            راسب : عدم نجاح الطالب في الامتحان.
            غير مكتمل : عدم التقدّم للامتحان النهائي للمساق مع تقديم عذر.
            منسحب : الانسحاب من المساق بعد نهاية مدة السحب.
            '
            
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();



        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'إرشادات الطلبة'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar'=>'حقوق الطالب : 
            • توفير البيئة الدراسية المناسبة لتحقيق الاستيعاب والدراسة بيسر وسهولة ، من خلال توفير كافة الإمكانات التعليمية المتاحة لخدمة هذا الهدف .
            • الحصول على المادة العلمية والمعرف المرتبطة بالمساقات التي يدرسها الطالب .
            • الاطلاع على الخطط الدراسية المتاحة والجداول الدراسية قبل الدراسة ، وإجراء تسجيله في المساقات التي يتيحها له النظام .
            • التزام أعضاء هيئة التدريس بالكلية بمواعيد وأوقات المحاضرات واستيفاء الساعات العلمية والعملية لها ، وعدم إلغاء المحاضرات أو تغيير أوقاتها إلا في حالة الضرورة وبعد الإعلان عن ذلك على أن يتم تعويضها لاحقاً .
            • الاستفسار والمناقشة العلمية اللائقة مع أعضاء الهيئة التدريسية دون رقابة أو عقوبة ، ما لم يتجاوز النقاش ما تقتضيه الآداب العامة بحدود اللياقة والسلوك .
            • معرفة نتائجه التي حصل عليها في الامتحانات الفصلية والنهائية التي تقدم لها ، وحقه في مراجعة درجته وفق ما يتيحه له النظام .
            واجبات الطالب :
            • يسهم الطالب في الحفاظ على بيئة تعليمية آمنة ومنتظمة .
            • أن يكون على علم بجميع أنظمة ولوائح الكلية وأن يلتزم بها .
            • دفع الاستحقاقات المالية المقررة سواءً أكانت رسوم دراسية أو خدمات طلابية أو غرامات أو خلافه .
            • التقيد بنظام الامتحانات والتزام الهدوء فيها وعدم محاولة الغش أو الشروع فيه .
            • عدم القيام – قولاً وفعلاً  –  بما يتنافى  مع الدين الإسلامي أو الشرف أو الكرامة أو السلوك الحسن أو المساس بسمعة الكلية .
            • المحافظة على منشآت الكلية والأجهزة والمواد والكتب وإرجاع ما استعير منها في الوقت المحدد بدون أي تبديد أو إتلاف .
            • عدم توزيع النشرات أو إصدار مجلات حائطية أو نشر إعلان في الكلية دون التنسيق مع الجهات المختصة .
            • احترام كل منتسبي الكلية ( مدرسين وموظفين وطلبة ) وعدم الإساءة إليهم أو أهانتهم بالقول أو الفعل .
            • الامتثال للعقوبة التي توقع عليه من الجهات المختصة .
            • الامتناع عن حمل أي نوع من أنواع الأسلحة أثناء وجوده بالحرم الجامعي أو في مهمة لتمثيل الكلية .
            • الاطلاع على كل ما تنشره الكلية من لوائح وإرشادات بما في ذلك ما ينشر في لوحات الإعلانات بالكلية وعدم جواز الاحتجاج بجهله بما ينشر فيها.
            '
           
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();

        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'عن الجودة والنوعية'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar'=>'انطلاقا من رؤية الكلية ورسالتها وأهدافها وخطتها الإستراتيجية ، وتعزيزاً لدورها الإيجابي والفعال في التعليم العالي على الصعيدين الفلسطيني والعربي ، قرر مجلس الكلية بتاريخ 1/8/2012 تفعيل ” قسم الجودة والنوعية ” من أجل تحقيق الجودة الشاملة والتطوير المستمر لمنظومة التعليم الجامعي لتمكين الكلية من تحقيق مستويات عالية من الأداء التعليمي والبحثي والخدماتي التي تتوافق مع المعايير المحلية والإقليمية والعالمية والتي تؤهل الكلية للحصول على الاعتماد محلياً وإقليمياً ، وذلك من خلال المشاريع التي أطلقتها لتحقيق الأهداف المتمثلة في نشر ثقافة الجودة الشاملة بالكلية .'
           
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();

        
        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'أهداف قسم الجودة والنوعية'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' => '– وضع الاستراتيجيات العامة لتطبيق الجودة الشاملة .
            – تنفيذ السياسات العامة وقواعد عمل التطوير الشامل التي يضعها مجلس الكلية .
            – توفير المعلومات للإدارة العليا بالكلية عن نتائج جهود الجودة الشاملة .
            – تنسيق الجهود بين الأقسام والتخصصات المختلفة لتنفيذ أهداف الجودة الشاملة .
            – وضع الخطط القصيرة والبعيدة المدة لتطبيق برامج وأهداف الجودة الشاملة .
            – متابعة تطوير الجودة الشاملة علي مستوي الأقسام والتخصصات المختلفة بالكلية .
            – وضع برامج لقياس وتقويم الأداء في مجالات الجودة الشاملة .
            – إقامة الدورات وورش العمل والندوات والمؤتمرات الخاصة بالجودة الشاملة .
            – تقديم الدعم الفني للأقسام ومساعدة الكلية في الحصول علي الاعتماد الأكاديمي لبرامجها
            – التواصل مع دائرة الاعتماد والجودة بوزارة التربية والتعليم الفلسطينية .
            '
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();


        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'إصدارات قسم الجودة'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' => 'إصدارات قسم الجودة
            – دليل الشكل الفني لأسئلة الامتحانات .
            – نموذج إعداد أسئلة الامتحانات .
            – نموذج تحليل الامتحانات .
            – استمارة تقييم كتاب جامعي .
            – استمارة تقييم محاضر جامعي .
            – استمارة تقييم الخدمات الطلابية ( المكتبة الجامعية – الكافتريا )
            – استمارة تقييم مشروع تخرج .
            – استمارة تقييم التدريب الميداني .
            – استمارة تقييم فعاليات مؤتمر أو يوم دراسي .
            '
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();


        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'مشاريع تطويرية'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' => '– مشروع نشر ثقافة الجودة بين الأكاديميين والعاملين الإداريين بالكلية .
            – مشروع تطوير البيئة التدريسية .
            – مشروع جودة عضو هيئة التدريس .
            – مشروع جودة الإدارة الجامعية .
            – مشروع جودة المساقات التدريسية .
            '
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();


        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'تسجيل المساقات الدراسية'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' => 'قبل بداية الفصل الدراسي بحسب التعليمات'
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();


        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'طلبات الغير مكتمل'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' => 'خلال أسبوعين من تاريخ عقد الامتحان النهائي'
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();


        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'مراجعة علامة أي مساق'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' => 'خلال أسبوعين من تاريخ ظهور نتيجة المساق'
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();

        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'إضافة أو سحب أي مساق'
        ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'قبل إتمام إجراءات التخرج وبحد أقصى خلال سنة من إنهاء متطلبات التخرج'
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();

        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'إعادة دراسة أي مساق'
                ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'خلال ثلاثة  أسابيع من بداية الفصل الدراسي'
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();


        $article1 = new Article();

        $article1->setTranslations('title', [
            'en' => 'who we are',
            'ar' => 'طلبات تأجيل الدراسة'
          ]);

        $article1->setTranslations('content', [
            'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
            'ar' =>'بداية التسجيل للفصل الدراسي وحتي نهاية فترة التسجيل'
        ]);
        $article1->status=1;
        $article1->type = 0; 

        $article1->save();



        // $article1 = new Article();

        // $article1->setTranslations('title', [
        //     'en' => 'who we are',
        //     'ar' => 'ورشة عمل بعنوان إعداد الاختبار الجيد.'
        //   ]);

        // $article1->setTranslations('content', [
        //     'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
        //     'ar' =>'أعضاء هيئة التدريس'
        // ]);
        // $article1->status=1;
        // $article1->type = 0; 

        // $article1->save();


        // $article1 = new Article();

        // $article1->setTranslations('title', [
        //     'en' => 'who we are',
        //     'ar' => 'ورشة عمل بعنوان طرائق تدريس حديثة.'
        //   ]);

        // $article1->setTranslations('content', [
        //     'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
        //     'ar' =>'أعضاء هيئة التدريس'
        // ]);
        // $article1->status=1;
        // $article1->type = 0; 

        // $article1->save();

        // $article1 = new Article();

        // $article1->setTranslations('title', [
        //     'en' => 'who we are',
        //     'ar' => 'ورشة عمل بعنوان تقنيات التعليم الحديثة وعلاقتها بالتحصيل الأكاديمي'
        //   ]);

        // $article1->setTranslations('content', [
        //     'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
        //     'ar' =>'أعضاء هيئة التدريس'
        // ]);
        // $article1->status=1;
        // $article1->type = 0; 

        // $article1->save();

        // $article1 = new Article();

        // $article1->setTranslations('title', [
        //     'en' => 'who we are',
        //     'ar' => 'دورة لآلية استخدام برامج الحاسوب وباقة الأوفيس'
        // ]);

        // $article1->setTranslations('content', [
        //     'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
        //     'ar' =>'الهيئة الإدارية والعاملون'
        // ]);
        // $article1->status=1;
        // $article1->type = 0; 

        // $article1->save();


        // $article1 = new Article();

        // $article1->setTranslations('title', [
        //     'en' => 'who we are',
        //     'ar' => 'دورة لتنمية المهارات الإدارية'
        // ]);

        // $article1->setTranslations('content', [
        //     'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
        //     'ar' =>'الهيئة الإدارية والعاملون'
        // ]);
        // $article1->status=1;
        // $article1->type = 0; 

        // $article1->save();

        // $article1 = new Article();

        // $article1->setTranslations('title', [
        //     'en' => 'who we are',
        //     'ar' => 'ورشة عمل لآلية عرض الأبحاث وورق العمل'
        // ]);

        // $article1->setTranslations('content', [
        //     'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
        //     'ar' =>'الباحثون والأكاديميون بالكلية'
        // ]);
        // $article1->status=1;
        // $article1->type = 0; 

        // $article1->save();

        // $article1 = new Article();

        // $article1->setTranslations('title', [
        //     'en' => 'who we are',
        //     'ar' => 'ورشة عمل بعنوان إدارة الأزمة'
        // ]);

        // $article1->setTranslations('content', [
        //     'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
        //     'ar' =>'الهيئة الإدارية والعاملون'
        // ]);
        // $article1->status=1;
        // $article1->type = 0; 

        // $article1->save();




        // $article1 = new Article();

        // $article1->setTranslations('title', [
        //     'en' => 'who we are',
        //     'ar' => 'يوم دراسي في الجودة بالكليات الخاصة'
        // ]);

        // $article1->setTranslations('content', [
        //     'en' => 'Ability Development College is an independent academic institution operating under the supervision and accreditation of the Ministry of Higher Education and Scientific Research. It was established in 1999 to provide technical and vocational education service to the Palestinian community under the name of Arab Community College. Then, in 2009, it was transformed into a university college that awards bachelor degree, intermediate diplomas and vocational diplomas in various majors and fields to become one of the lighthouses of higher education in Palestine. In order to achieve a vision of leadership and excellence, the college seeks to consolidate its relations at the international and regional levels by building bridges of academic and cultural cooperation between the college and other educational and academic institutions, as well as Arab and International organizations.',
        //     'ar' =>'الباحثون المهتمون'
        // ]);
        // $article1->status=1;
        // $article1->type = 0; 

        // $article1->save();

        // WorkshopSeeder.php

$workshops = [
    [
        'title' => [
            'en' => 'Workshop Title 1',
            'ar' => 'ورشة عمل بعنوان إعداد الاختبار الجيد.'

        ],
        'content' => [
            'en' => 'Workshop content...',
            'ar' =>'أعضاء هيئة التدريس',
        ],
        'status' => 1,
        'type' => 0,
    ],
    // Add more workshops here...
    [
        'title' => [
            'en' => 'Workshop Title 1',
        'ar' => 'ورشة عمل بعنوان طرائق تدريس حديثة.',
    ],
        'content' => [
            'en' => 'Workshop content...',
            'ar' =>'أعضاء هيئة التدريس',
    ],
        'status' => 1,
        'type' => 0,
    ],


    [
        'title' => [
            'en' => 'Workshop Title 1',
            'ar' => 'ورشة عمل بعنوان تقنيات التعليم الحديثة وعلاقتها بالتحصيل الأكاديمي',
        ],
        'content' => [
            'en' => 'Workshop content...',
            'ar' => 'أعضاء هيئة التدريس',
        ],
        'status' => 1,
        'type' => 0,
    ],


    [
        'title' => [
            'en' => 'Workshop Title 1',
            'ar' => 'دورة لآلية استخدام برامج الحاسوب وباقة الأوفيس',
        ],
        'content' => [
            'en' => 'Workshop content...',
            'ar' => 'الهيئة الإدارية والعاملون',
        ],
        'status' => 1,
        'type' => 0,
    ],

    
    [
        'title' => [
            'en' => 'Workshop Title 1',
            'ar' => 'دورة لتنمية المهارات الإدارية',
        ],
        'content' => [
            'en' => 'Workshop content...',
            'ar' => 'الهيئة الإدارية والعاملون',
        ],
        'status' => 1,
        'type' => 0,
    ],


    
    [
        'title' => [
            'en' => 'Workshop Title 1',
            'ar' => 'ورشة عمل لآلية عرض الأبحاث وورق العمل',
        ],
        'content' => [
            'en' => 'Workshop content...',
            'ar' => 'الباحثون والأكاديميون بالكلية',
        ],
        'status' => 1,
        'type' => 0,
    ],

    
    [
        'title' => [
            'en' => 'Workshop Title 1',
            'ar' => 'ورشة عمل بعنوان إدارة الأزمة',
        ],
        'content' => [
            'en' => 'Workshop content...',
            'ar' => 'الهيئة الإدارية والعاملون',
        ],
        'status' => 1,
        'type' => 0,
    ],
    [
        'title' => [
            'en' => 'Workshop Title 1',
            'ar' => 'يوم دراسي في الجودة بالكليات الخاصة	الباحثون المهتمون',
        ],
        'content' => [
            'en' => 'Workshop content...',
            'ar' => 'الباحثون المهتمون',
        ],
        'status' => 1,
        'type' => 0,
    ],
    
];

foreach ($workshops as $workshopData) {
    $workshop = new Article();
    $workshop->setTranslations('title', $workshopData['title']);
    $workshop->setTranslations('content', $workshopData['content']);
    $workshop->status = $workshopData['status'];
    $workshop->type = $workshopData['type'];
    $workshop->save();
}





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
