<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute maydoni qabul qilinishi kerak.',
    'accepted_if' => ':attribute maydoni :o\'zga :value bo\'lganda qabul qilinishi kerak.',
    'active_url' => ':attribute maydoni haqiqiy URL bo\'lishi kerak.',
    'after' => ':attribute maydoni :datedan keyingi sana bo\'lishi kerak.',
    'after_or_equal' => ':attribute maydoni :date sanasidan keyingi yoki unga teng bo\'lishi kerak.',
    'alpha' => ':attribute maydonida faqat harflar bo\'lishi kerak.',
    'alpha_dash' => ':attribute maydonida faqat harflar, raqamlar, tire va pastki chiziq bo\'lishi kerak.',
    'alpha_num' => ':attribute maydonida faqat harflar va raqamlar bo\'lishi kerak.',
    'array' => ':attribute maydoni massiv bo\'lishi kerak.',
    'ascii' => ':attribute maydonida faqat bir baytli alfanumerik belgilar va belgilar bo\'lishi kerak.',
    'before' => ':attribute maydoni :date dan oldingi sana bo\'lishi kerak.',
    'before_or_equal' => ':attribute maydoni :datedan oldingi yoki unga teng bo\'lishi kerak.',
    'between' => [
        'array' => ':attribute maydonida :min va :max orasida bo\'lishi kerak.',
        'file' => ':attribute maydoni :min va :max kilobaytlar orasida bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :min va :max orasida bo\'lishi kerak',
        'string' => ':attribute maydoni :min va :max belgilar orasida bo\'lishi kerak.',
    ],
    'boolean' => ':attribute maydoni rost yoki noto\'g\'ri bo\'lishi kerak.',
    'confirmed' => ':attribute maydonini tasdiqlash mos kelmaydi.',
    'current_password' => 'Parol noto\'g\'ri.',
    'date' => ':attribute maydoni haqiqiy sana bo\'lishi kerak.',
    'date_equals' => ':attribute maydoni :date ga teng sana bo\'lishi kerak.',
    'date_format' => ':attribute maydoni :format formatiga mos kelishi kerak.',
    'decimal' => ':attribute maydonida :onlik kasrlar bo\'lishi kerak.',
    'declined' => ':attribute maydoni rad etilishi kerak.',
    'declined_if' => ':attribute maydoni :other :value bo\'lganda rad etilishi kerak.',
    'different' => ':attribute maydoni va :other har xil bo\'lishi kerak.',
    'digits' => ':attribute maydoni :digits digits bo\'lishi kerak.',
    'digits_between' => ':attribute maydoni :min va :max raqamlari orasida bo\'lishi kerak.',
    'dimensions' => ':attribute maydonida rasm o\'lchamlari noto\'g\'ri.',
    'distinct' => ':attribute maydoni ikki nusxadagi qiymatga ega.',
    'doesnt_end_with' => ':attribute maydoni quyidagilardan biri bilan tugamasligi kerak: :values.',
    'doesnt_start_with' => ':attribute maydoni quyidagilardan biri bilan boshlanmasligi kerak: :values.',
    'email' => ':attribute maydoni to\'g\'ri elektron pochta manzili bo\'lishi kerak.',
    'ends_with' => ':attribute maydoni quyidagilardan biri bilan tugashi kerak: :values.',
    'enum' => 'Tanlangan :atribut yaroqsiz.',
    'exists' => 'Tanlangan :atribut yaroqsiz.',
    'file' => ':attribute maydoni fayl bo\'lishi kerak.',
    'filled' => ':attribute maydonida qiymat bo\'lishi kerak.',
    'gt' => [
        'array' => ':attribute maydonida :value dan ortiq bo\'lishi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan katta bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :value dan katta bo\'lishi kerak.',
        'string' => ':attribute maydoni :value belgilaridan katta bo\'lishi kerak.',
    ],
    'gte' => [
        'array' => ':attribute maydonida :value elementi yoki undan ko\'p bo\'lishi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan katta yoki teng bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :value dan katta yoki teng bo\'lishi kerak.',
        'string' => ':attribute maydoni :value belgilaridan katta yoki teng bo\'lishi kerak.',
    ],
    'image' => ':attribute maydoni rasm bo\'lishi kerak.',
    'in' => 'Tanlangan :atribut yaroqsiz.',
    'in_array' => ':attribute maydoni :other ichida bo\'lishi kerak.',
    'integer' => ':attribute maydoni butun son bo\'lishi kerak.',
    'ip' => ':attribute maydoni haqiqiy IP manzil bo\'lishi kerak.',
    'ipv4' => ':attribute maydoni haqiqiy IPv4 manzili bo\'lishi kerak.',
    'ipv6' => ':attribute maydoni haqiqiy IPv6 manzili bo\'lishi kerak.',
    'json' => ':attribute maydoni haqiqiy JSON qatori bo\'lishi kerak.',
    'lowercase' => ':attribute maydoni kichik bo\'lishi kerak.',
    'lt' => [
        'array' => ':attribute maydonida :value elementidan kamroq bo\'lishi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan kichik bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :value dan kichik bo\'lishi kerak.',
        'string' => ':attribute maydoni :value belgilardan kichik bo\'lishi kerak.',
    ],
    'lte' => [
        'array' => ':attribute maydonida :value dan ortiq bo\'lmasligi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan kichik yoki teng bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :value dan kichik yoki teng bo\'lishi kerak.',
        'string' => ':attribute maydoni :value belgilaridan kichik yoki teng bo\'lishi kerak.',
    ],
    'mac_address' => ':attribute maydoni to\'g\'ri MAC manzili bo\'lishi kerak.',
    'max' => [
        'array' => ':attribute maydonida :max dan ortiq elementlar bo\'lmasligi kerak.',
        'file' => ':attribute maydoni :max kilobaytdan katta bo\'lmasligi kerak.',
        'numeric' => ':attribute maydoni :max dan katta bo\'lmasligi kerak',
        'string' => ':attribute maydoni :max belgilardan katta bo‘lmasligi kerak.',
    ],
    'max_digits' => ':attribute maydonida :max dan ortiq raqam bo\'lmasligi kerak.',
    'mimes' => ':attribute maydoni :values turidagi fayl bo\'lishi kerak.',
    'mimetypes' => ':attribute maydoni :values turidagi fayl bo\'lishi kerak.',
    'min' => [
        'array' => ':attribute maydonida kamida :min elementlar bo\'lishi kerak.',
        'file' => ':attribute maydoni kamida :min kilobayt bo\'lishi kerak.',
        'numeric' => ':attribute maydoni kamida :min bo\'lishi kerak',
        'string' => ':attribute maydoni kamida :min belgidan iborat bo\'lishi kerak.',
    ],
    'мин_дигиц ъ = > ъ:attribute майдонида камида :мин рақамлар бо\ъ лиши керак.ъ',
    'missing ъ = > ъ:attribute майдони ё\ъ қ бо\ъ лиши керак.ъ',
    'миссинг_иф  = > ъ:other :value бо\ъ лганда :attribute майдони ё\ъ қ бо\ъ лиши керак.ъ',
    'миссинг_унлесс = > ъ Агар :other :value бо\ъ лмаса, :attribute майдони ё\ъ қ бо\ъ лиши керак.ъ',
    'миссинг_wитҳ  = > ъ:values мавжуд бо\ъ лганда :attribute майдони бо\ъ лмаслиги керак.ъ',
    'миссинг_wитҳ_алл = > ъ:values мавжуд бо\ъ лганда :attribute майдони бо\ъ лмаслиги керак.ъ',
    'мултипле_оф  = > ъ:атрибут майдони :валуенинг каррали бо\ъ лиши керак.ъ',
    'нот_ин  = > ъ Танланган :атрибут яроқсиз.ъ',
    'нот_регех  = > ъ:attribute майдони формати яроқсиз.ъ',
    'numeric  = > ъ:attribute майдони рақам бо\ъ лиши керак.ъ',
    'password ' => [
        'letters' => ':attribute майдонида камида битта ҳарф бо\ъ лиши керак.',
        'mixed' => ':attribute майдонида камида битта катта ва битта кичик ҳарф бо\ъ лиши керак.',
        'numbers' => ':attribute майдонида камида битта рақам бо\ъ лиши керак.',
        'symbols' => ':attribute майдонида камида битта белги бо\ъ лиши керак.',
        'uncompromised' => ' Берилган :attribute ма\ъ лумотлар сизиб чиқишида пайдо бо\ъ лди. Бошқа :атрибутни танланг.',
    ],
    'present' => ':attribute майдони мавжуд бўлиши керак.',
    'prohibited' => ':attribute майдони тақиқланган.',
    'prohibited_if' => ':attribute майдони:other :value бўлганда тақиқланади.',
    'prohibited_unless' => 'Агар :дигер :values ичида бўлмаса, :attribute майдони тақиқланади.',
    'prohibits' => ':attribute майдони :other нинг мавжуд бўлишини тақиқлайди.',
    'regex' => ':attribute майдони формати яроқсиз.',
    'required' => ':attribute майдони шарт.',
    'required_array_keys' => ':attribute майдонида :values учун ёзувлар бўлиши керак.',
    'required_if' => ':attribute майдони :other :value бўганда талаб қилинади.',
    'required_if_accepted' => ':other қабул қилинганда :attribute майдони талаб қилинади.',
    'required_unless' => ' Агар :дигер :values ичида бўлмаса, :attribute майдони талаб қилинади.',
    'required_with' => 'ъ:values мавжуд бўлганда :attribute майдони талаб қилинади.ъ',
    'required_with_all' =>':values мавжуд бўлганда :attribute майдони талаб қилинади.',
    'required_without' => ':values мавжуд бўлмаганда :attribute майдони талаб қилинади.',
    'required_without_all' => 'Қийматлардан ҳеч бири мавжуд бўлмаганда :attribute майдони талаб қилинади.',
    'same' => ':attribute майдони :other га мос келиши керак.',
    'size' => [
    'array' => ':attribute майдонида :size элементлари бўлиши керак.',
    'file' => ':attribute майдони :size килобайт бўлиши керак.',
    'numeric' => ':attribute майдони :size бўлиши керак.',
    'string' => ':attribute майдони :size белгилар бўлиши керак.',
],
    'starts_with' => ':attribute майдони қуйидагилардан бири билан бошланиши керак: :values.',
    'string' => ':attribute майдони қатор бўлиши керак.',
    'timezone' => ':attribute майдони ҳақиқий вақт минтақаси бўлиши керак.',
    'unique' => ':attribute aллақачон олинган.',
    'uploaded' => ':attribute юкланмади.',
    'uppercase' => ':attribute майдони катта ҳарф бўлиши керак.',
    'url' => ':attribute майдони ҳақиқий УРЛ бўлиши керак.',
    'ulid' => ':attribute майдони ҳақиқий УЛИД бўлиши керак.',
    'uuid' => ':attribute майдони ҳақиқий УУИД бўлиши керак.',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
    'attribute-name' => [
        'rule-name' => 'maxsus xabar',
    ],
],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
