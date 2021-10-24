<?php

namespace App\Traits;

trait TranslationTrait
{
    /**
     * @param $field
     * @param $locale
     * @return \Illuminate\Database\Eloquent\HigherOrderBuilderProxy|mixed|string
     */
    public function getFieldTranslation($field, $locale = null)
    {
        $translation = $this->translations()
        ->where('locale', $locale ?? app()->getLocale())
        ->where('field', $field)
        ->first();
        
        if ($translation) {
            return $translation->value;
        } elseif (!$translation && $locale) {
            return null;
        }

        $translation = $this->translations()
            ->where('locale', 'en')
            ->where('field', $field)
            ->first();

        if ($translation) {
            return $translation->value;
        }
        return null;
    }

    /**
     * @param $translations
     */
    public function saveTranslations($translations)
    {
        foreach ($translations as $field_name => $data) {
            foreach ($data as $locale => $value) {
                if ($value) {
                    $this->translations()->updateOrCreate(
                        [
                            'locale' => $locale,
                            'field' => $field_name
                        ],
                        [
                            'locale' => $locale,
                            'field' => $field_name,
                            'value' => $value
                        ]
                    );
                }
            }
        }
    }

    public function getAllFieldTranslations($field)
    {
        $data = [];
        $translations = $this->translations()
            ->where('field', $field)
            ->get()
            ->keyBy('locale');

        foreach ($translations as $locale => $translation) {
            $data[$locale][] = $translation->value;
        }
        return $data;
    }
}
