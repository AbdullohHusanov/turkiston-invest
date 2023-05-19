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
    'min_digits' => ':attribute maydonida kamida :min raqamlar bo\'lishi kerak.',
    'missing' => ':attribute maydoni yo\'q bo\'lishi kerak.',
    'missing_if' => ':other :value bo\'lganda :attribute maydoni yo\'q bo\'lishi kerak.',
    'missing_unless' => 'Agar :other :value bo\'lmasa, :attribute maydoni yo\'q bo\'lishi kerak.',
    'missing_with' => ':values mavjud bo\'lganda :attribute maydoni bo\'lmasligi kerak.',
    'missing_with_all' => ':values mavjud bo\'lganda :attribute maydoni bo\'lmasligi kerak.',
    'multiple_of' => ':atribut maydoni :valuening karrali bo\'lishi kerak.',
    'not_in' => 'Tanlangan :atribut yaroqsiz.',
    'not_regex' => ':attribute maydoni formati yaroqsiz.',
    'numeric' => ':attribute maydoni raqam bo\'lishi kerak.',
    'password' => [
        'letters' => ':attribute maydonida kamida bitta harf bo\'lishi kerak.',
        'mixed' => ':attribute maydonida kamida bitta katta va bitta kichik harf bo\'lishi kerak.',
        'numbers' => ':attribute maydonida kamida bitta raqam bo\'lishi kerak.',
        'symbols' => ':attribute maydonida kamida bitta belgi bo\'lishi kerak.',
        'uncompromised' => 'Berilgan :atribut ma\'lumotlar sizib chiqishida paydo bo\'ldi. Boshqa :atributni tanlang.',
    ],
    'present' => ':attribute maydoni mavjud bo\'lishi kerak.',
    'prohibited' => ':atribut maydoni taqiqlangan.',
    'prohibited_if' => ':atribut maydoni:other :value bo\'lganda taqiqlanadi.',
    'prohibited_unless' => 'Agar :diger :values ichida bo\'lmasa, :attribute maydoni taqiqlanadi.',
    'prohibits' => ':attribute maydoni :other ning mavjud bo\'lishini taqiqlaydi.',
    'regex' => ':attribute maydoni formati yaroqsiz.',
    'required' => ':attribute maydoni shart.',
    'required_array_keys' => ':attribute maydonida :values uchun yozuvlar bo\'lishi kerak.',
    'required_if' => ':attribute maydoni :other :value bo\'lganda talab qilinadi.',
    'required_if_accepted' => ':other qabul qilinganda :attribute maydoni talab qilinadi.',
    'required_unless' => 'Agar :diger :values ichida bo\'lmasa, :attribute maydoni talab qilinadi.',
    'required_with' => ':values mavjud bo\'lganda :attribute maydoni talab qilinadi.',
    'required_with_all' => ':qiymatlar mavjud bo\'lganda :attribute maydoni talab qilinadi.',
    'required_without' => ':values mavjud bo\'lmaganda :attribute maydoni talab qilinadi.',
    'required_without_all' => 'Qiymatlardan hech biri mavjud bo\'lmaganda :attribute maydoni talab qilinadi.',
    'same' => ':attribute maydoni :other ga mos kelishi kerak.',
    'size' => [
        'array' => ':attribute maydonida :size elementlari bo\'lishi kerak.',
        'file' => ':attribute maydoni :size kilobayt bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :size bo\'lishi kerak.',
        'string' => ':attribute maydoni :size belgilar bo\'lishi kerak.',
    ],
    'starts_with' => ':attribute maydoni quyidagilardan biri bilan boshlanishi kerak: :values.',
    'string' => ':attribute maydoni qator bo\'lishi kerak.',
    'timezone' => ':attribute maydoni haqiqiy vaqt mintaqasi bo\'lishi kerak.',
    'unique' => ':atribut allaqachon olingan.',
    'uploaded' => ':atribut yuklanmadi.',
    'uppercase' => ':attribute maydoni katta harf bo\'lishi kerak.',
    'url' => ':attribute maydoni haqiqiy URL bo\'lishi kerak.',
    'ulid' => ':attribute maydoni haqiqiy ULID bo\'lishi kerak.',
    'uuid' => ':attribute maydoni haqiqiy UUID bo\'lishi kerak.',
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
