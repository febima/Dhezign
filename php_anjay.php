

$ = بيانات [
    "العلامات" => [
        "اكتب" => "مجموعة"،
        "البنود" => [
            "اكتب" => "السلسلة"
        ]،
    ]،
]؛
؟>

<؟ PHP
    $ كو = [
            "كو" => "HTTP //"،
            "عنوان" => "المنتج"،
            "اكتب" => "مجموعة"،
            "البند" => [
                "عنوان" => "المنتج"،
                "اكتب" => "وجوه"،
                "خصائص" => [
                    "الهوية" => [
                        "صفا" => "المعرف الفريد للمنتج"،
                        "اكتب" => "عدد"
                    ]،
                    "اسم" => [
                        "اكتب" => "السلسلة"
                    ]،
                    "السعر" => [
                        "اكتب" => "عدد"،
                        "الحد الأدنى" => 0،
                        "exclusiveMinimun" => صحيح
                    ]،
                    "العلامات" => [
                        "اكتب" => "مجموعة"،
                        "البنود" => [
                            "اكتب" => "السلسلة"
                        ]،
                        "minItems" => 1،
                        "uniqueItems" => صحيح
                    ]،
                    "demensions" => [
                        "اكتب" => "وجوه"،
                        "خصائص" => [
                            "طول" => ["نوع" => "عدد"]،
                            "عرض" => ["نوع" => "عدد"]،
                            "ارتفاع" => ["نوع" => "عدد"]
                        ]،
                        "المطلوب" => ["طول"، "عرض"، "ارتفاع"]
                    ]،
                    "warehouseLocation" => [
                        "صفا" => "إحداثيات مستودع عرض المنتج"،
                        "المرجع" => "HTTP //"
                    ]
                ]،
                "المطلوب" => ["ID"، "اسم"، "ثمن"]
            ]
    ]؛
؟>
<؟ PHP
$ cobaarray = [
    "الهوية" => 2،
    "اسم" => "نحت الجليد"،
    "السعر" => 12.50،
    "العلامات" => ["الباردة"، "الجليد"]،
    "demensions" => [
        "طول" => 7.0،
        "عرض" => 12.0،
        "ارتفاع" => 9.5
    ]،
    "الهوية" => 3،
    "اسم" => "ماوس الأزرق"،
    "السعر" => 12.00،
    "أبعاد" => [
        "طول" => 3.0،
        "عرض" => 2.9،
        "ارتفاع" => 2.0
    ]،
    "warehouseLocation" => [
        "العرض" => 65.9،
        "الطول" => -87.0
    ]
]
؟>
<؟ PHP
    $ برامجنا = [
        [
            "عنوان" => "المنتج"،
            "صفا" => "منتج ......."،
            "اكتب" => "وجوه"،
            "السعر" => "1000"،
            "لون" => ["الأحمر"، "الأخضر"]،
            "مطلوب" => ["ID"، "اسم"، "ثمن"]،
        ]،
        [
            "عنوان" => "المنتج 2"،
            "صفا" => "المنتج 2 ......."،
            "اكتب" => "وجوه"،
            "السعر" => "1000"،
            "لون" => ["الأحمر"، "الأخضر"]،
            "مطلوب" => ["ID"، "اسم"، "ثمن"]،
        ]،
    ]؛
    // var_dump ($ برامجنا)؛
    // خروج؛
؟>

<table>
    <tr>
        <ال> العنوان </ تشرين>
        <ال> الوصف </ تشرين>
        <ال> نوع </ تشرين>
        <ال> السعر </ تشرين>
        <ال> اللون </ تشرين>
        <ال> مطلوب </ تشرين>
    </ tr>
    <tr>
        <؟ PHP foreach ($ برامجنا كبيانات $):>
            <؟ PHP var_dump ($ البيانات)؛ ؟>
             <tr>
                <td> <فب صدى $ البيانات ['عنوان']؛؟ ؟> </ td>
                <td> <فب صدى $ البيانات ['وصف']؛؟ ؟> </ td>
                <td> <البيانات فب صدى $ ['نوع']؛؟ ؟> </ td>
                <td> <فب صدى $ البيانات ['سعر']؛؟ ؟> </ td>
                <td> <؟ PHP صدى تنهار ('<td> </ td>'، $ البيانات ['لون'])؟> </ td>
                <td> <؟ PHP صدى تنهار ('<td> </ td>'، $ البيانات ['مطلوب'])؟> </ td>
            </ tr>
        <؟ PHP endforeach؟>
    </ tr>
</ الجدول>
<؟ PHP foreach ($ برامجنا كبيانات $):>
            <مجموعة حقول>
                <أسطورة> <البيانات فب صدى $ ['عنوان']؛؟ ؟> </ أسطورة>
                فب صدى $ البيانات <['وصف']؛؟ ؟> <BR/>
                فب صدى $ البيانات <['نوع']؛؟ ؟> <BR/>
                فب صدى $ البيانات <['سعر']؛؟ ؟> <BR/>
            </ مجموعة حقول>
        <؟ PHP endforeach؟>