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

    'accepted' => ' :attribute қабылдануы керек.',
    'active_url' => ' :attribute жарамды URL мекенжайы емес.',
    'after' => ' :attribute мәні :date күнінен кейінгі күн болуы керек.',
    'alpha' => ' :attribute тек әріптерден тұруы керек.',
    'alpha_dash' => ' :attribute тек әріптерден, сандардан және сызықшалардан тұруы керек.',
    'alpha_num' => ' :attribute тек әріптерден және сандардан тұруы керек.',
    'array' => ' :attribute жиым болуы керек.',
    'before' => ' :attribute мәні :date күнінен кейінгі күн болуы керек.',
    'between' => [
        'numeric' => ' :attribute мәні :min және :max аралығында болуы керек.',
        'file' => ' :attribute көлемі :min және :max килобайт аралығында болуы керек.',
        'string' => ' :attribute тармағы :min және :max аралығындағы таңбалардан тұруы керек.',
        'array' => ' :attribute жиымы :min және :max аралығындағы элементтерден тұруы керек.',
    ],
    'boolean' => ' :attribute жолы шын немесе жалған мән болуы керек.',
    'confirmed' => ' :attribute растауы сәйкес емес.',
    'date' => ' :attribute жарамды күн емес.',
    'date_format' => ' :attribute пішімі :format пішіміне сай емес.',
    'different' => ' :attribute және :other әр түрлі болуы керек.',
    'digits' => ' :attribute мәні :digits сан болуы керек.',
    'digits_between' => ' :attribute мәні :min және :max аралығындағы сан болуы керек.',
    'distinct' => ' :attribute жолында қосарланған мән бар.',
    'email' => ' :attribute жарамды электрондық пошта мекенжайы болуы керек.',
    'exists' => ' таңдалған :attribute жарамсыз.',
    'filled' => ' :attribute жолы толтырылуы керек.',
    'image' => ' :attribute кескін болуы керек.',
    'in' => ' таңдалған :attribute жарамсыз.',
    'in_array' => ' :attribute жолы :other ішінде жоқ.',
    'integer' => ' :attribute бүтін сан болуы керек.',
    'ip' => ' :attribute жарамды IP мекенжайы болуы керек.',
    'json' => ' :attribute жарамды JSON тармағы болуы керек.',
    'max' => [
        'numeric' => ' :attribute мәні :max мәнінен көп болмауы керек.',
        'file' => ' :attribute мәні :max килобайттан көп болмауы керек.',
        'string' => ' :attribute тармағы :max таңбадан ұзын болмауы керек.',
        'array' => ' :attribute жиымының құрамы :max элементтен аспауы керек.',
    ],
    'mimes' => ' :attribute мынадай файл түрі болуы керек: :values.',
    'min' => [
        'numeric' => ' :attribute кемінде :min болуы керек.',
        'file' => ' :attribute көлемі кемінде :min килобайт болуы керек.',
        'string' => ' :attribute кемінде :min таңбадан тұруы керек.',
        'array' => ' :attribute кемінде :min элементтен тұруы керек.',
    ],
    'not_in' => ' таңдалған :attribute жарамсыз.',
    'numeric' => ' :attribute сан болуы керек.',
    'present' => ' :attribute болуы керек.',
    'regex' => ' :attribute пішімі жарамсыз.',
    'required' => ' :attribute жолы толтырылуы керек.',
    'required_if' => ' :attribute жолы :other мәні :value болған кезде толтырылуы керек.',
    'required_unless' => ' :attribute жолы :other мәні :values ішінде болмағанда толтырылуы керек.',
    'required_with' => ' :attribute жолы :values болғанда толтырылуы керек.',
    'required_with_all' => ' :attribute жолы :values болғанда толтырылуы керек.',
    'required_without' => ' :attribute жолы :values болмағанда толтырылуы керек.',
    'required_without_all' => ' :attribute жолы ешбір :values болмағанда толтырылуы керек.',
    'same' => ' :attribute және :other сәйкес болуы керек.',
    'size' => [
        'numeric' => ' :attribute көлемі :size болуы керек.',
        'file' => ' :attribute көлемі :size килобайт болуы керек.',
        'string' => ' :attribute тармағы :size таңбадан тұруы керек.',
        'array' => ' :attribute жиымы :size элементтен тұруы керек.',
    ],
    'string' => ' :attribute тармақ болуы керек.',
    'timezone' => ' :attribute жарамды аймақ болуы керек.',
    'unique' => ' :attribute бұрын алынған.',
    'url' => ' :attribute пішімі жарамсыз.',

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
            'rule-name' => 'басқа хабар',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'test_name' => 'Сынақ атауы',
        'test_description' => 'Сынақ сипаттамасы',
        'test_locale' => 'Тілі',
        'image' => 'Кескін',
        'result_text_under_image' => 'Кескін астындағы нәтиже мәтіні',
        'short_text' => 'Қысқа мәтін',
    ],

];
