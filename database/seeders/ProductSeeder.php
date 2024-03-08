<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product ;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::create([
            'title' =>  json_encode(['ar' => 'Light Blue',
                                     'en' => 'Light Blue',
                                     'tr' => 'Light Blue'
                                     ]) ,
            'description' =>  json_encode(['ar' => 'يحتوي هذا العطر الرائع والنظيف على رائحة حمضيات عطرية تنضح بأناقة مريحة للرجال الواثقين.',
                                           'en' => 'This cool, clean fragrance has an aromatic citrus scent that exudes relaxed elegance for the self assured man.',
                                           'tr' => 'Bu serin, temiz koku, kendine güvenen erkekler için rahat bir zarafet yayan aromatik bir narenciye kokusuna sahiptir.

                                           '
                                           ]) ,
            'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
            'category_id'=> 1,
            'slug'=> 101,
            'price'=> 53.34,
            'quantity'=> 10,
            'status'=> 1,
        ]);
        Product::create([
            'title' =>  json_encode(['ar' => 'The One',
                                     'en' => 'The One',
                                     'tr' => 'The One'
                                     ]) ,
            'description' =>  json_encode(['ar' => '   عطر متطور وذكوري ينضح بهالة دافئة وحارة. يخلق الافتتاح الطازج للجريب فروت والريحان رائحة جذابة وآسرة مع قلب حار من الزنجبيل والهيل وقاعدة غنية من العنبر والتبغ. هذه العطور مثالية لأولئك الذين يقدرون مزيجا من النضارة والدفء والرقة في عطرهم. إنه أحد أشهر العطور في مجموعة. ',
                                           'en' =>'Dolce & Gabbana The One Cologne is a sophisticated and masculine fragrance that exudes a warm and spicy aura. With its fresh opening of grapefruit and basil, followed by a spicy heart of ginger and cardamom, and a rich base of amber and tobacco, it creates an alluring and captivating scent. This cologne is perfect for those who appreciate a blend of freshness, warmth, and sophistication in their fragrance. Its one of the most popular fragrances in the Dolce & Gabbana collection.',
                                           'tr' => 'Dolce & Gabbana The One Cologne, sıcak ve baharatlı bir aura yayan sofistike ve erkeksi bir kokudur. Greyfurt ve fesleğenin taze açılışı, ardından zencefil ve kakulenin baharatlı kalbi ve zengin kehribar ve tütün tabanı ile çekici ve büyüleyici bir koku yaratır. Bu kolonya, kokularında tazelik, sıcaklık ve incelik karışımını takdir edenler için mükemmeldir. Dolce & Gabbana koleksiyonundaki en popüler kokulardan biridir.'
                                           ]) ,
            'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
            'category_id'=> 1,
            'slug'=> 102,
            'price'=> 59.82,
            'quantity'=> 10,
            'status'=> 1,
        ]);
        Product::create([
            'title' =>  json_encode(['ar' => 'K ',
                                     'en' => 'K ',
                                     'tr' => 'K '
                                     ]) ,
            'description' =>  json_encode(['ar' => 'عطر عطري خشبي للرجال تم إطلاقه في عام 2020 خلف أنف دافني بوجي وناتالي لورسون. يهدف إلى أن يرتديه الإنسان ، وهو عطر خشبي وحار يتم التأكيد عليه من خلال الفواكه والترابية والحلوة ، مما يبرز الشهوانية الذكورية والغموض والمرح الراقي الذي يجسد السحر الإيطالي.',
                                           'en' =>'Dolce and Gabbana K perfume is a woody aromatic fragrance for men launched in 2020 behind the nosed of Daphné Bugey and Nathalie Lorson. Intended to be worn by man, it is a woody and spicy fragrance that is underscored by fruity, earthy and sweet accords, projecting masculine sensuality, mystique and refined joviality that exemplifies Italian Glamour.',
                                           'tr' => 'Dolce and Gabbana K perfume, 2020`de Daphné Bugey ve Nathalie Lorson`ın burunlarının arkasında piyasaya sürülen erkekler için odunsu aromatik bir kokudur. İnsan tarafından giyilmesi amaçlanan, meyvemsi, dünyevi ve tatlı akorlarla vurgulanan, İtalyan Glamour`unu örnekleyen erkeksi duygusallığı, gizemi ve rafine neşeyi yansıtan odunsu ve baharatlı bir kokudur.'
                                           ]) ,
            'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
            'category_id'=> 1,
            'slug'=> 103,
            'price'=> 32.20,
            'quantity'=> 10,
            'status'=> 1,
        ]);
        Product::create([
            'title' =>  json_encode(['ar' => ' Intenso ',
                                     'en' => ' Intenso ',
                                     'tr' => ' Intenso '
                                     ]) ,
            'description' =>  json_encode(['ar' => '  عطور رجالية جذابة تتميز بالعطريات الطازجة والأطباق الخشبية الغنية. يثير هذا العطر القوة والثقة والرجولة من خلال مزج الأناقة الكلاسيكية مع الرجولة العصرية.',
                                           'en' =>'Intenso is a compelling men`s perfume featuring fresh aromatics and rich woody accords. This fragrance evokes strength, confidence and virility by blending classic elegance with modern masculinity.',
                                           'tr' => 'Intenso, taze aromatikler ve zengin odunsu akorlar içeren ilgi çekici bir erkek kolonyasıdır. Bu koku, klasik zarafeti modern erkeklikle harmanlayarak güç, güven ve erkekliği çağrıştırıyor.'
                                           ]) ,
            'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
            'category_id'=> 1,
            'slug'=> 104,
            'price'=> 64.51,
            'quantity'=> 10,
            'status'=> 1,
        ]);
        Product::create([
            'title' =>  json_encode(['ar' => ' Light Blue Eau Intense ',
                                     'en' => ' Light Blue Eau Intense ',
                                     'tr' => ' Light Blue Eau Intense '
                                     ]) ,
            'description' =>  json_encode(['ar' => 'عطر خشبي مائي للرجال يتميز باتفاقيات حمضية. تم إطلاق الرائحة في عام 2017 خلف أنف ألبرتو موريلاس. يفتح برائحة الجريب فروت المجمد وبرتقال اليوسفي ، حيث يستمد منه صفات الحمضيات. القلب لديه اتفاق بحري مالح بالإضافة إلى العرعر. تجلب القاعدة خشب المسك والعنبر إلى المزيج.',
                                           'en' =>'woody aquatic fragrance for men featuring citrusy accords. The scent launched in 2017 behind the nose of Alberto Morillas. It opens with the scents of frozen grapefruit and mandarin orange, which is where it derives it citrus qualities. The heart has a salty marine accord in addition to juniper. The base brings musk and amber wood into the mix.',
                                           'tr' => 'Narenciye akordeonlarına sahip erkekler için odunsu su kokusu. Koku 2017 yılında Alberto Morillas`ın burnunun arkasından piyasaya sürüldü. Dondurulmuş greyfurt ve mandalina kokularıyla açılıyor ve narenciye niteliklerini buradan alıyor. Kalbin ardıçlara ek olarak tuzlu bir deniz anlaşması vardır. Taban, karışıma misk ve kehribar ağacı getiriyor.'
                                           ]) ,
            'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
            'category_id'=> 1,
            'slug'=> 105,
            'price'=> 67.03,
            'quantity'=> 10,
            'status'=> 1,
        ]);
    //
    Product::create([
        'title' =>  json_encode(['ar' => ' Eternity',
                                 'en' => ' Eternity',
                                 'tr' => ' Eternity'
                                 ]) ,
        'description' =>  json_encode(['ar' => 'عطر زهري قوي يمكن ارتداؤه طوال اليوم. كان هذا العطر المفضل لدى المعجبين لأكثر من 30 عاما. لا عجب أنه تم تسميته "الخلود" - يمكنك ارتدائه كل يوم وما زلت تشعر بالتنويم المغناطيسي كما كنت في اليوم الذي جربته فيه لأول مرة!',
                                       'en' =>'strong, floral fragrance that can be worn all day long. This fragrance has been a fan favorite for over 30 years. It’s no wonder it was named “Eternity”--you can wear it every day and still feel as hypnotized as you were the day you first experienced it!',
                                       'tr' => 'Gün boyu giyilebilen güçlü, çiçeksi koku. Bu koku, 30 yılı aşkın bir süredir hayranların favorisi olmuştur. "Sonsuzluk" olarak adlandırılmasına şaşmamalı - onu her gün giyebilir ve yine de ilk deneyimlediğiniz günkü gibi hipnotize olmuş hissedebilirsiniz!'
                                      ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 2,
        'slug'=> 106,
        'price'=> 35.31,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => ' Obsession  ',
                                 'en' => ' Obsession  ',
                                 'tr' => ' Obsession  '
                                 ]) ,
        'description' =>  json_encode(['ar' => 'عطر خشبي شرقي دائم معزز بعناصر من التوابل والعنبر والأعشاب العطرية.',
                                       'en' =>'an enduring, woody, oriental scent that is further enhanced by elements of spice, amber, and aromatic herbs',
                                       'tr' => 'baharat, kehribar ve aromatik bitki elementleriyle daha da zenginleştirilmiş kalıcı, odunsu, oryantal bir koku'
                                       ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 2,
        'slug'=> 107,
        'price'=> 36.03,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => ' Ck One  ',
                                 'en' => ' Ck One  ',
                                 'tr' => ' Ck One  '
                                 ]) ,
        'description' =>  json_encode(['ar' => 'له رائحة نظيفة تمنحك الطاقة وتجعلك تشعر أنه يمكنك تناولها في اليوم.يتميز بنفحات خضراء عطرية ممزوجة بمكونات حمضيات مثل الليمون والأناناس والبابايا وبرتقال اليوسفي لخلق رائحة منعشة ونظيفة مثالية لفصل الصيف.',
                                       'en' =>'It has a clean scent that will give you energy and make you feel like you can take on the day.features aromatic green notes combined with citrus notes like lemon, pineapple, papaya, and mandarin orange to create a fresh, clean scent that`s perfect for summer.',
                                       'tr' => 'Limon, ananas, papaya ve mandalina gibi narenciye notaları ile birleştirilmiş aromatik yeşil notalar ile yaz için mükemmel taze, temiz bir koku yaratmak için size enerji verecek ve güne devam edebileceğinizi hissettirecek temiz bir kokuya sahiptir.'
                                       ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 2,
        'slug'=> 108,
        'price'=> 38.91,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => ' Eternity Aqua  ',
                                 'en' => ' Eternity Aqua  ',
                                 'tr' => ' Eternity Aqua  '
                                 ]) ,
        'description' =>  json_encode(['ar' => 'يجمع بين المكونات الخضراء النابضة بالحياة وهشاشة الخيار المبرد ، مما يخلق فتحة منعشة توقظ الحواس. تضيف إضافة فلفل سيتشوان لمسة من التوابل والمكائد ، مما يجسد الطبيعة المعاصرة والديناميكية للإنسان الحديث. مع مزيجها من العناصر الخضراء والمائية ، يجسد خيارا عطريا متطورا وواثقا للرجل المميز.',
                                       'en' =>'combines vibrant green notes with the crispness of chilled cucumber, creating a refreshing opening that awakens the senses. The addition of Sichuan pepper adds a touch of spice and intrigue, embodying the contemporary and dynamic nature of the modern man. With its combination of green and aquatic elements,  epitomizes a sophisticated and confident fragrance choice for the discerning gentleman.',
                                       'tr' => 'Canlı yeşil notaları soğutulmuş salatalığın gevrekliğiyle birleştirerek duyuları uyandıran ferahlatıcı bir açılış yaratır. Sichuan biberinin eklenmesi, modern insanın çağdaş ve dinamik doğasını somutlaştıran bir baharat ve entrika dokunuşu katıyor. Yeşil ve su unsurlarının kombinasyonu ile, seçici beyefendi için sofistike ve kendinden emin bir koku seçimini özetler.'
                                       ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 2,
        'slug'=> 109,
        'price'=> 41.08,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => ' Ck One Summer Daze   ',
                                 'en' => ' Ck One Summer Daze   ',
                                 'tr' => ' Ck One Summer Daze   '
                                 ]) ,
        'description' =>  json_encode(['ar' => 'ماء تواليت للجنسين يتميز برائحة عطرية وفاكهية تسبب الإدمان. هذا العطر مستوحى من الرحلات البرية الصيفية',
                                      'en' =>'a unisex eau de toilette that has an addictive aromatic and fruity scent profile. This fragrance draws inspiration from summer road trips.',
                                       'tr' => 'Bağımlılık yapan aromatik ve meyvemsi bir koku profiline sahip unisex bir eau de toilette. Bu koku, yaz yolculuklarından ilham alıyor.'
                                       ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 2,
        'slug'=> 110,
        'price'=> 26.66,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => ' Escape   ',
                                 'en' => ' Escape   ',
                                 'tr' => ' Escape   '
                                 ]) ,
        'description' =>  json_encode(['ar' => 'تمتزج المكونات العليا للشمام والجريب فروت والبرغموت مع نفحات البحر والبتولا وإكليل الجبل وخشب الصندل لخلق رائحة تبدأ برائحة منعشة وتتحول إلى شيء ترابي.',
                                      'en' =>'the melon, grapefruit and bergmot top notes mingle with sea notes, birch, rosemary and sandalwood to create a scent that starts with a zesty fragrance and transforms into something earthy..',
                                       'tr' => 'Kavun, greyfurt ve bergmot üst notaları, deniz notaları, huş ağacı, biberiye ve sandal ağacı ile karışarak lezzetli bir koku ile başlayıp dünyevi bir şeye dönüşen bir koku yaratıyor..'
                                       ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 2,
        'slug'=> 111,
        'price'=> 29.55,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => ' Eternity Reflections   ',
                                 'en' => ' Eternity Reflections   ',
                                 'tr' => ' Eternity Reflections   '
                                 ]) ,
        'description' =>  json_encode(['ar' => 'سوف يروق هذا العطر لحبك للهواء الطلق لأنه يضعك في حالة مزاجية للنسائم الخفيفة وسماء الصيف والغابات الخضراء وأنت تتنفس مزيجه الرائع.',
                                      'en' =>'this fragrance will appeal to your love for the outdoors as it places you in the mood for light breezes, summer skies and green forests as you breathe in its luscious blend of notes.                                      ',
                                       'tr' => 'Bu koku, tatlı nota karışımını solurken sizi hafif esintiler, yaz gökyüzü ve yeşil ormanlar havasına sokarken dış mekan sevginize hitap edecek.'
                                        ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 2,
        'slug'=> 112,
        'price'=> 33.51,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    //
    Product::create([
        'title' =>  json_encode(['ar' => ' Cool Water   ',
                                 'en' => ' Cool Water   ',
                                 'tr' => ' Cool Water   '
                                 ]) ,
        'description' =>  json_encode(['ar' => 'مغرية ومنعشة ،، عطر مائي عطري للرجال ، هل تريد ترك انطباع أول رائع في كل مكان تذهب إليه؟ لا مزيد من البحث: الماء البارد هو العطر المناسب لك.',
                                      'en' =>'Alluring and fresh ,,an aromatic aquatic fragrance for men,  Want to make a great first impression everywhere you go? Look no further: Cool Water is the right perfume for you.',
                                       'tr' => 'Çekici ve taze, erkekler için aromatik bir su kokusu, Gittiğiniz her yerde harika bir ilk izlenim bırakmak ister misiniz? Başka yerde aramanıza gerek yok: Cool Water sizin için doğru parfüm'
                                        ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 3,
        'slug'=> 113,
        'price'=> 33.15,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => ' Davidoff Adventure',
                                 'en' => ' Davidoff Adventure',
                                 'tr' => ' Davidoff Adventure'
                                 ]) ,
        'description' =>  json_encode(['ar' => 'يظهر إلهام الطبيعة في هذا العطر الخشبي الحمضي. يبدأ برتقال اليوسفي والليمون والليمون في المكونات العليا ، مضيفا الروائح الحارة من الفلفل وأوراق الشاي والرفيق. مشروب تقليدي في أمريكا الجنوبية ، ماتي عشبي للغاية ويعتقد أنه يحمل العديد من الفوائد لصحة المرء. المكونات الوسطى هي الفلفل الحلزوني والسمسم. مكونات المكونات الأساسية التي تكمل الباقة هي المسك الأبيض ونجيل الهند والأرز. متين وعطري ، هذا العطر سيكمل أي مناسبة.',
                                      'en' =>'the inspiration of nature shows in this citrus, woody fragrance. Mandarin orange, lemon, and lime start the top notes, adding spicy aromas of pepper, tea leaf, and mate. A traditional South American drink, mate is very grassy and thought to hold many benefits to one’s health. Middle notes are pimento and sesame. Base note components completing the bouquet are white musk, vetiver, and cedar. Rugged and aromatic, this perfume will compliment any occasion.',
                                       'tr' => 'Doğanın ilhamı bu narenciye, odunsu kokuda kendini gösterir. Mandalina, limon ve misket limonu üst notalara başlar ve baharatlı biber, çay yaprağı ve mate aromaları ekler. Geleneksel bir Güney Amerika içeceği olan mate çok çimenlidir ve kişinin sağlığına birçok faydası olduğu düşünülmektedir. Orta notalar yenibahar ve susamdır. Buketi tamamlayan alt nota bileşenleri beyaz misk, vetiver ve sedirdir. Sağlam ve aromatik olan bu parfüm her duruma iltifat edecek.'
                                        ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 3,
        'slug'=> 114,
        'price'=> 20.36,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => ' Davidoff Run Wild',
                                 'en' => ' Davidoff Run Wild',
                                 'tr' => ' Davidoff Run Wild'
                                 ]) ,
        'description' =>  json_encode(['ar' => 'يمزج هذا العطر الديناميكي بين الألوان العطرية والخضراء والحارة للحصول على رائحة جريئة وساحرة تضمن إيقاف الناس في مساراتهم',
                                      'en' =>'This dynamic perfume mixes aromatic, green and spicy accords for a bold and charming scent that`s guaranteed to stop people in their tracks',
                                       'tr' => 'Bu dinamik parfüm, aromatik, yeşil ve baharatlı akorleri bir araya getirerek cesur ve büyüleyici bir koku elde eder'
                                        ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 3,
        'slug'=> 115,
        'price'=> 28.82,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => 'The Game',
                                 'en' => 'The Game',
                                 'tr' => 'The Game'
                                 ]) ,
        'description' =>  json_encode(['ar' => 'تمتزج المكونات الأساسية العميقة والحسية من خشب الأبنوس وتبقى معك طوال الليل. عطري خشبي وعطري ، هذا العطر لعام 2012 مثالي لقضاء ليلة أنيقة في المدينة أو أمسية خاصة في المنزل. ',
                                      'en' =>'The deep, sensual ebony wood base note blends in and stays with you all night long. Woody and aromatic, this 2012 fragrance is ideal for an elegant night on the town or a special evening at home.',
                                       'tr' => 'Derin, şehvetli abanoz ağacı alt nota, uyum sağlar ve tüm gece boyunca sizinle kalır. Odunsu ve aromatik olan bu 2012 kokusu, şehirde zarif bir gece veya evde özel bir akşam için idealdir.'
                                        ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 3,
        'slug'=> 116,
        'price'=> 25.22,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => 'Cool Water Intense',
                                 'en' => 'Cool Water Intense',
                                 'tr' => 'Cool Water Intense'
                                 ]) ,
        'description' =>  json_encode(['ar' => 'تمتزج المكونات الأساسية العميقة والحسية من خشب الأبنوس وتبقى معك طوال الليل. عطري خشبي وعطري ، هذا العطر لعام 2012 مثالي لقضاء ليلة أنيقة في المدينة أو أمسية خاصة في المنزل. ',
                                      'en' =>'Make it feel like a day at the beach without ever leaving your office when you`re wearing Cool Water Intense, a revitalizing men`s fragrance',
                                       'tr' => 'Canlandırıcı bir erkek kokusu olan Cool Water Intensei kullanırken ofisinizden hiç çıkmadan plajda bir gün geçiriyormuş gibi hissedin'
                                    ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 3,
        'slug'=> 117,
        'price'=> 46.12,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => 'Cool Water Intense',
                                 'en' => 'Cool Water Intense',
                                 'tr' => 'Cool Water Intense'
                                 ]) ,
        'description' =>  json_encode(['ar' => 'تمتزج المكونات الأساسية العميقة والحسية من خشب الأبنوس وتبقى معك طوال الليل. عطري خشبي وعطري ، هذا العطر لعام 2012 مثالي لقضاء ليلة أنيقة في المدينة أو أمسية خاصة في المنزل. ',
                                      'en' =>'Make it feel like a day at the beach without ever leaving your office when you`re wearing Cool Water Intense, a revitalizing men`s fragrance',
                                       'tr' => 'Canlandırıcı bir erkek kokusu olan Cool Water Intensei kullanırken ofisinizden hiç çıkmadan plajda bir gün geçiriyormuş gibi hissedin'
                                    ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 3,
        'slug'=> 118,
        'price'=> 46.12,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => 'Acqua Di Gio',
                                 'en' => 'Acqua Di Gio',
                                 'tr' => 'Acqua Di Gio'
                                 ]) ,
        'description' =>  json_encode(['ar' => 'بنفحة واحدة ستعتقد أنك خرجت للتو من السباحة الباردة في مياه المحيط الزرقاء مع الندى الطازج المتشبث برفق ببشرتك',
                                      'en' =>'With one whiff of Acqua Di Gio, you`ll think you`ve just emerged from a cool swim in blue ocean waters with fresh dew clinging lightly to your skin',
                                       'tr' => 'Acqua Di Gio`nun bir kokusuyla, mavi okyanus sularında serin bir yüzmeden yeni çıktığınızı ve cildinize hafifçe yapışan taze çiy ile yeni çıktığınızı düşüneceksiniz'
                                    ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 4,
        'slug'=> 119,
        'price'=> 46.12,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => 'Armani Code',
                                 'en' => 'Armani Code',
                                 'tr' => 'Armani Code'
                                 ]) ,
        'description' =>  json_encode(['ar' => 'عطر فريد من نوعه وجريء مثالي لليالي المواعدة الرومانسية والمناسبات الخاصة في زجاجة عطر أرماني كود',
                                      'en' =>'A luscious, bold unique fragrance perfect for romantic date nights and special events awaits in a bottle of Armani Code perfume',
                                       'tr' => 'Romantik randevu geceleri ve özel etkinlikler için mükemmel, tatlı, cesur ve eşsiz bir koku bir şişe Armani Code parfümde sizi bekliyor'
                                    ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 4,
        'slug'=> 120,
        'price'=> 68.48,
        'quantity'=> 10,
        'status'=> 1,
    ]);

    Product::create([
        'title' =>  json_encode(['ar' => 'Stronger With You',
                                 'en' => 'Stronger With You',
                                 'tr' => 'Stronger With You'
                                 ]) ,
        'description' =>  json_encode(['ar' => 'المكونات الخشبية الأساسية من الكستناء والأرز وخشب الكهرمان دافئة بالفانيليا للحصول على لمسة نهائية تدوم طويلا.',
                                      'en' =>'    Woody base notes of chestnut, cedar and amberwood are warmed with vanilla for a long-lasting finish',
                                       'tr' => 'Kestane, sedir ve amber ağacının odunsu alt notaları, uzun süre kalıcı bir bitiş için vanilya ile ısıtılır.'
                                    ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 4,
        'slug'=> 121,
        'price'=> 97.31,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => 'Emporio Armani',
                                 'en' => 'Emporio Armani',
                                 'tr' => 'Emporio Armani'
                                 ]) ,
        'description' =>  json_encode(['ar' => '  عطر كلاسيكي ومتطور يبدأ بلمسة حمضيات عطرية ، تتناقص ببطء إلى نغمات خشبية غنية. تتميز كولونيا إمبوريو أرماني بالأناقة وهي متعددة الاستخدامات بما يكفي لمواسم ومناسبات متعددة.',
                                      'en' =>'a classic and sophisticated scent that opens with an aromatic citrus burst, tapering slowly into rich woody undertones. Emporio Armani cologne projects elegance and is versatile enough for multiple seasons and occasions.',
                                       'tr' => 'Aromatik bir narenciye patlamasıyla açılan, yavaş yavaş zengin odunsu alt tonlara doğru sivrilen klasik ve sofistike bir koku. Emporio Armani kolonyası zarafeti yansıtır ve birden fazla mevsim ve durum için yeterince çok yönlüdür.'
                                    ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 4,
        'slug'=> 122,
        'price'=> 97.31,
        'quantity'=> 10,
        'status'=> 1,
    ]);
    Product::create([
        'title' =>  json_encode(['ar' => 'Emporio Armani Diamonds',
                                 'en' => 'Emporio Armani Diamonds',
                                 'tr' => 'Emporio Armani Diamonds'
                                 ]) ,
        'description' =>  json_encode(['ar' => 'يجمع بين الخشب والحمضيات والتوابل للحصول على رائحة غنية وغريبة تظهر ثقتك بنفسك وجاذبيتك. المكونات العليا من البرغموت الحمضي وخشب الغاياك تفتح الرائحة مع شرارة من الطاقة الترابية.',
                                      'en' =>'combines woody, citrus and spicy accords for a rich and exotic scent that demonstrates your confidence and charisma. Top notes of citrus bergamot and guaiac wood open the scent with a spark of earthy energy.',
                                       'tr' => 'odunsu, narenciye ve baharatlı akordeonları, kendinize olan güveninizi ve karizmanızı gösteren zengin ve egzotik bir koku için birleştirir. Narenciye, bergamot ve guaiac ağacının üst notaları, kokuyu dünyevi bir enerji kıvılcımıyla açar.'
                                    ]) ,
        'image' => 'https://i.pinimg.com/474x/5c/de/e2/5cdee2a68fd7f8d16f87bda43b70e39f--designer-perfumes-dolce-gabbana.jpg',
        'category_id'=> 4,
        'slug'=> 123,
        'price'=> 40.16,
        'quantity'=> 10,
        'status'=> 1,
    ]);



}

}
