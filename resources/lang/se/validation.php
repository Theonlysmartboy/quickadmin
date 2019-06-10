<?php

return [
    'accepted'             => ':attribute måste vara accepterat.',
    'active_url'           => ':attribute är inte en giltig URL.',
    'after'                => ':attribute måste vara ett datum efter :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => ':attribute får bara innehålla bokstäver.',
    'alpha_dash'           => ':attribute får bara innehålla bokstäver, nummer och bindestreck.',
    'alpha_num'            => ':attribute får bara innehålla bokstäver och nummer.',
    'latin'                => 'The :attribute may only contain ISO basic Latin alphabet letters.',
    'array'                => ':attribute måste vara en lista (array).',
    'before'               => ':attribute måste vara ett datum före :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => ':attribute måste vara mellan :min och :max.',
        'file'    => ':attribute måste vara mellan :min och :max kilobytes.',
        'string'  => ':attribute måste vara mellan :min och :max antal tecken.',
        'array'   => ':attribute måste ha mellan :min och :max saker.',
    ],
    'boolean'              => ':attribute fältet måste vara sant eller falskt.',
    'confirmed'            => ':attribute matchar inte.',
    'date'                 => ':attribute är inte ett giltigt datum.',
    'date_format'          => ':attribute matchar inte formatet :format.',
    'different'            => ':attribute och :other måste vara olika.',
    'digits'               => ':attribute måste vara :digits siffror.',
    'digits_between'       => ':attribute  måste vara mellan :min och :max antal siffror.',
    'dimensions'           => ':attribute har ogiltiga bild dimensioner.',
    'distinct'             => ':attribute fältet har ett duplicerat värde.',
    'email'                => ':attribute måste vara en giltig email adress.',
    'exists'               => 'Det valda :attribute är ogiltigt.',
    'file'                 => ':attribute måste vara en fil.',
    'filled'               => ':attribute är obligatoriskt.',
    'gt'                   => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte'                  => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'                => ':attribute  måste vara en bild.',
    'in'                   => 'Det valda :attribute är ogiltigt.',
    'in_array'             => ':attribute finns ej i :other.',
    'integer'              => ':attribute måste vara ett heltal.',
    'ip'                   => ':attribute måste vara en giltig IP adress.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => ':attribute måste vara giltig JSON',
    'lt'                   => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte'                  => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => ':attribute får inte vara större än :max.',
        'file'    => ':attribute får inte vara större än :max kilobytes.',
        'string'  => ':attribute får inte vara större än :max tecken.',
        'array'   => ':attribute får inte ha mer än :max saker.',
    ],
    'mimes'                => ':attribute måste vara en file av typ :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ':attribute måste vara minst :min.',
        'file'    => ':attribute måste vara minst :min kilobytes.',
        'string'  => ':attribute måste vara minst :min tecken.',
        'array'   => ':attribute måste ha minst :min saker.',
    ],
    'not_in'               => 'Det valda :attribute är ogiltigt.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':attribute måste vara ett nummer.',
    'present'              => ':attribute fältet måste vara ifyllt.',
    'regex'                => ':attribute formatet är ogiltigt.',
    'required'             => ':attribute fältet är obligatoriskt.',
    'required_if'          => ':attribute är obligatoriskt när :other är :value.',
    'required_unless'      => ':attribute fältet är obligatoriskt om inte :other är i :values.',
    'required_with'        => ':attribute fältet är obligatoriskt när :values är angivet.',
    'required_with_all'    => ':attribute fältet är obligatoriskt när :values är angivet.',
    'required_without'     => ':attribute fältet är obligatoriskt när :values inte är angivet.',
    'required_without_all' => ':attribute fältet är obligatoriskt när inga av :values är angivna.',
    'same'                 => ':attribute och :other måste matcha.',
    'size'                 => [
        'numeric' => ':attribute måste vara :size.',
        'file'    => ':attribute måste vara :size kilobytes.',
        'string'  => ':attribute måste vara :size tecken.',
        'array'   => ':attribute måste innehålla :size saker.',
    ],
    'string'               => ':attribute måste vara :size text.',
    'timezone'             => ':attribute måste vara en :size giltig zon.',
    'unique'               => ':attribute är redan taget.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => ':attribute formatet är ogiltigt.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [],
];
