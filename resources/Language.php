<?php

enum Language: string
{
    case java = 'Java';
    case php = 'PHP';
    case c = 'C';
    case csharp = 'C#';
    case cpp = 'C++';

    public function getLanguageValueByValue(Language $language) : string
    {
        return match($language) {
            Language::java => 'Java',
            Language::php => 'PHP',
            Language::c => 'C',
            Language::csharp => 'C#',
            Language::cpp => 'C++'
        };
    }
}

/* $lang =  Language::from('PHP');
var_dump($lang->name);
echo Language::java->value; 
echo Language::from('C#')->name === 'csharp'; */