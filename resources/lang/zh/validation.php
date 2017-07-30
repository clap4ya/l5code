<?php

/**
 * The file downloaded from
 * https://github.com/caouecs/Laravel-lang/blob/master/ko/validation.php
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */
    'accepted' => ':attribute 不同意乙方.',
    'active_url' => ':attribute 不是有效的url',
    'after' => ':attribute 值 这不是第 :date 天的日子.',
    'alpha' => ':attribute 值 包含文字在内的值.',
    'alpha_dash' => ':attribute 数值包括文字、数字、-.',
    'alpha_num' => ':attribute 值中包含文字和数字以外的值.',
    'array' => ':attribute 不是有效的列表类型.',
    'before' => ':attribute 值 :date 这不是以前的日子.',
    'between' => [
        'numeric' => ':attribute 值 :min ~ :max 离谱儿.',
        'file' => ':attribute 值 :min ~ :max 跳过kb.',
        'string' => ':attribute 值 :min ~ :max 不是文字.',
        'array' => ':attribute 值 :min ~ :max 价钱超出范围.',
    ],
    'boolean' => ':attribute 值 不共戴天.',
    'confirmed' => ':attribute 和 :attribute 确认值不同.',
    'date' => ':attribute 值无效.',
    'date_format' => ':attribute 值 :format 值不匹配.',
    'different' => ':attribute 值 :other 彼此不同.',
    'digits' => ':attribute 值 :digits 不是个位数.',
    'digits_between' => ':attribute 值 :min ~ :max 跳出位数.',
    'distinct' => ':attribute 值 有重复的项目.',
    'email' => ':attribute 值 无效的电子邮件地址.',
    'exists' => ':attribute 值 不存在相应资源.',
    'filled' => ':attribute 值 没有价格.',
    'image' => ':attribute 值 不是图像.',
    'in' => ':attribute 值 无效.',
    'in_array' => ':attribute 值 :other 不是本地的因素.',
    'integer' => ':attribute 值 不是整数.',
    'ip' => ':attribute 值 无效的ip地址.',
    'json' => ':attribute 值 无效的JSON字符串.',
    'max' => [
        'numeric' => ':attribute 值 大于 :max.',
        'file' => ':attribute 值 大于 :max KB.',
        'string' => ':attribute 值 大于 :max 字多.',
        'array' => ':attribute 值 大于 :max 个要多.',
    ],
    'mimes' => ':attribute 值 :values 另一种格式.',
    'min' => [
        'numeric' => ':attribute 值 少于 :min.',
        'file' => ':attribute 值 少于 :min KB.',
        'string' => ':attribute 值 少于 :min 个字.',
        'array' => ':attribute 值  少于 :max 个.',
    ],
    'not_in' => ':attribute 值 无效.',
    'numeric' => ':attribute 值 不是数字.',
    'present' => ':attribute 没有价格.',
    'regex' => ':attribute 值 格式无效.',
    'required' => ':attribute 值 没有价格.',
    'required_if' => ':attribute 值 没有价格 (:other 值 :value 天是必需的).',
    'required_unless' => ':attribute 值 没有价格 (:other 值 不是 :value 而是必需的).',
    'required_with' => ':attribute 值 没有价格 (:values 值 有的时候是必需的).',
    'required_with_all' => ':attribute 值 没有价格 (:values 值 有的时候是必需的).',
    'required_without' => ':attribute 值 没有价格 (:values 值 必不可少的部分).',
    'required_without_all' => ':attribute 值 没有价格 (:values 值 必不可少的部分).',
    'same' => ':attribute 值 :other 价格不一样.',
    'size' => [
        'numeric' => ':attribute 值 :size 不是的.',
        'file' => ':attribute 值 :size 不是本意.',
        'string' => ':attribute 值 :size 不是文字.',
        'array' => ':attribute 值 :max 不是狗崽子.',
    ],
    'string' => ':attribute 值 不是文字.',
    'timezone' => ':attribute 值 不是有效的时间段.',
    'unique' => ':attribute 值 已经在使用中.',
    'url' => ':attribute 值 不是有效的url.',

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

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
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
        'title' => '标题',
        'content' => '正文',
        'tags' => '标记',
        'files' => '文件',
        'files.*' => '文件',
        'parent_id' => '父母回帖',
//        'name' => '이름',
//        'email' => '이메일',
//        'password' => '비밀번호',
//        'password_confirmation' => '비밀번호 확인',
    ],
];