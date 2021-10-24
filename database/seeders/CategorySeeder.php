<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = $this->getTags();

        foreach ($categories as $category) {
            $data = $category['data'];
            if (!isset($data['slug'])) {
                $data['slug'] = transliteration($category['translations']['name']['en']);
            }
            DB::table('categories')->insert($data);
            foreach ($category['translations'] as $field => $translations) {
                foreach ($translations as $locale => $value) {
                    $translation = [
                        'translatable_id' => $category['data']['id'],
                        'translatable_type' => 'App\Models\Category',
                        'locale' => $locale,
                        'field' => $field,
                        'value' => $value
                    ];
                    DB::table('translations')->insert($translation);
                }
            }
        }
    }

    private function getTags() 
    {
        return [
            //other
                [
                    'data' => [
                        'id' => 1,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Інше',
                            'ru' => 'Другое',
                            'en' => 'Other'
                        ]
                    ]
                ],
            // bits
                [
                    'data' => [
                        'id' => 2,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Бурові долота',
                            'ru' => 'Буровые долота',
                            'en' => 'Drilling Bits'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 3,
                        'category_id' => 2,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Біцентричен долото',
                            'ru' => 'Бицентричное долото',
                            'en' => 'Bicentric bits'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 4,
                        'category_id' => 2,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Дошки відвороту доліт',
                            'ru' => 'Доски отворота долот',
                            'en' => 'Bit breakers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 5,
                        'category_id' => 2,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Вимірювальній пристрій (діаметомер)',
                            'ru' => 'Измерительный прибор (диаметр)',
                            'en' => 'Measuring devices (Diameter)'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 6,
                        'category_id' => 2,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Лопасні долота',
                            'ru' => 'Лопастные долота',
                            'en' => 'Wing bits'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 7,
                        'category_id' => 2,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Насадки',
                            'ru' => 'Насадки',
                            'en' => 'Bit nozzles'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 8,
                        'category_id' => 2,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Пневмоударні долота',
                            'ru' => 'Пневмоударные долота',
                            'en' => 'Pneumopercussion bits'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 9,
                        'category_id' => 2,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Шарошечні',
                            'ru' => 'Шарошечные',
                            'en' => 'Cone bits'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 10,
                        'category_id' => 2,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Штирьові долота',
                            'ru' => 'Штыревые',
                            'en' => 'Carbide bits'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 11,
                        'category_id' => 2,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'PDC долота',
                            'ru' => 'PDC долота',
                            'en' => 'PDC bits'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 12,
                        'category_id' => 2,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'TSP долота',
                            'ru' => 'TSP долота',
                            'en' => 'TSP bits'
                        ]
                    ]
                ],
            // pipes
                [
                    'data' => [
                        'id' => 13,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Бурові труби',
                            'ru' => 'Буровые трубы',
                            'en' => 'Drilling pipes'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 14,
                        'category_id' => 13,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Беззамкові бурові труби',
                            'ru' => 'Беззамковые трубы',
                            'en' => 'DP with slip-joints'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 15,
                        'category_id' => 13,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Облегшені бурові труби (ЛБТ)',
                            'ru' => 'Облегченные буровые трубы (ЛБТ)',
                            'en' => 'Lightweight DP'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 16,
                        'category_id' => 13,
                        'thread' => '1',
                        'slug' => 'pipe-float-collars'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Зворотні клапани',
                            'ru' => 'Обратные клапаны',
                            'en' => 'Float collars'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 17,
                        'category_id' => 13,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Патрубки',
                            'ru' => 'Патрубки',
                            'en' => 'Pipe Joints'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 18,
                        'category_id' => 13,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Перевідники',
                            'ru' => 'Переводники',
                            'en' => 'Crossovers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 19,
                        'category_id' => 18,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Дампферні перевідники',
                            'ru' => 'Дампферные переводники',
                            'en' => 'Dampe crossovers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 20,
                        'category_id' => 13,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Прокладки',
                            'ru' => 'Прокладки',
                            'en' => 'Packer rubbers for pipe connection'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 21,
                        'category_id' => 13,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Стабілізатори',
                            'ru' => 'Стабилизаторы',
                            'en' => 'Stabilizers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 22,
                        'category_id' => 13,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Стандартні бурові труби',
                            'ru' => 'Стандартные буровые трубы',
                            'en' => 'Standsrt drilling pipes'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 23,
                        'category_id' => 13,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Важкі бурові труби (ТБТ)',
                            'ru' => 'Тяжелые буровые трубы (ТБТ)',
                            'en' => 'HWDP'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 24,
                        'category_id' => 13,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Обважені бурові труби (ОБТ)',
                            'ru' => 'Утяжеленные буровые трубы (УБТ)',
                            'en' => 'DC'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 25,
                        'category_id' => 24,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'прямі лопасті',
                            'ru' => 'Прямые лопости',
                            'en' => 'Slick'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 26,
                        'category_id' => 24,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Спіральні лопасті',
                            'ru' => 'Спиральные лопасти',
                            'en' => 'Spiral'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 27,
                        'category_id' => 13,
                        'thread' => '1',
                        'slug' => 'pipe-filters'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Фільтри',
                            'ru' => 'Фильтры',
                            'en' => 'Filters'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 28,
                        'category_id' => 13,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Центратори',
                            'ru' => 'Центраторы',
                            'en' => 'Centralizers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 29,
                        'category_id' => 13,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Шаблони',
                            'ru' => 'Шаблоны',
                            'en' => 'Drifts'
                        ]
                    ]
                ],
            // rigs
                [
                    'data' => [
                        'id' => 30,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Бурові установки',
                            'ru' => 'Буровые установки',
                            'en' => 'Drilling rig'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 31,
                        'category_id' => 30,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Анкера та оттяжки',
                            'ru' => 'Анкера и оттяжки',
                            'en' => 'Stakedowns & span ropes'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 32,
                        'category_id' => 30,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'кабіна бурильника',
                            'ru' => 'Кабина бурильщика',
                            'en' => 'Drillers house'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 33,
                        'category_id' => 30,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Мачта',
                            'ru' => 'Мачта',
                            'en' => 'Mast'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 34,
                        'category_id' => 30,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'МБУ',
                            'ru' => 'МБУ',
                            'en' => 'MDU'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 35,
                        'category_id' => 30,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Мостки',
                            'ru' => 'Мостки',
                            'en' => 'Cat walks'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 36,
                        'category_id' => 30,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Основа',
                            'ru' => 'Основа',
                            'en' => 'Substructure'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 37,
                        'category_id' => 30,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Майданчик верхового',
                            'ru' => 'Палатья',
                            'en' => 'Monkey board'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 38,
                        'category_id' => 30,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Приміщення на основі',
                            'ru' => 'Помещения на основании',
                            'en' => 'Dog houses'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 39,
                        'category_id' => 30,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Рельса',
                            'ru' => 'Рельса',
                            'en' => 'Rails'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 40,
                        'category_id' => 30,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Система монтажу та демонтажу',
                            'ru' => 'Система монтажа и демонтажа',
                            'en' => 'Rig up & down systems'
                        ]
                    ]
                ],
            // pumps
                [
                    'data' => [
                        'id' => 41,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Насоси для бурової',
                            'ru' => 'Насосы для буровой',
                            'en' => 'Pumps for rig'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 42,
                        'category_id' => 41,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Дозувальні насоси',
                            'ru' => 'Дозировочные насосы',
                            'en' => 'Injection pumps'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 43,
                        'category_id' => 41,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Гідравлічні компоненти',
                            'ru' => 'Гидравлические компоненты',
                            'en' => 'Hydraulic components'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 44,
                        'category_id' => 43,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Гідромотори',
                            'ru' => 'Гидромоторы',
                            'en' => 'Hydraulic actuators'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 45,
                        'category_id' => 43,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Гідронасоси',
                            'ru' => 'Гидронасосы',
                            'en' => 'Hydraulic pulsers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 46,
                        'category_id' => 43,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Регулятори тиску',
                            'ru' => 'Регуляторы давления',
                            'en' => 'Hydraulic controllers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 47,
                        'category_id' => 41,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Бурові насоси',
                            'ru' => 'Буровые насосы',
                            'en' => 'Mud pumps'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 48,
                        'category_id' => 47,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Двигун',
                            'ru' => 'Двигатель',
                            'en' => 'Engine'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 49,
                        'category_id' => 47,
                        'thread' => '1',
                        'slug' => 'pump-float-collar'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Зворотні клапани',
                            'ru' => 'Обратные клапаны',
                            'en' => 'Float collars'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 50,
                        'category_id' => 47,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Пульт бур. насоса',
                            'ru' => 'Пульт бур. насосы',
                            'en' => 'Pump controll unit'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 51,
                        'category_id' => 47,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Підпірний насос',
                            'ru' => 'Подпорный насос',
                            'en' => 'Supercharger pumps'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 52,
                        'category_id' => 47,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Пневмокомпенсатор',
                            'ru' => 'Пневмокомпенсатор',
                            'en' => 'Pneumatic components'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 53,
                        'category_id' => 47,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Фільтр лінї всмоктування',
                            'ru' => 'Фильтр линии всасывания',
                            'en' => 'Suction line filters'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 54,
                        'category_id' => 47,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Фільт лінії нагнітання',
                            'ru' => 'Фильт линии нагнетания',
                            'en' => 'Pressure line filters'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 55,
                        'category_id' => 47,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Запобіжний клапан',
                            'ru' => 'Предохранительный клана',
                            'en' => 'Safe valves'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 56,
                        'category_id' => 47,
                        'thread' => '1',
                        'slug' => 'pumps-cooling'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Система охолодження',
                            'ru' => 'Система охлаждения',
                            'en' => 'Cooling system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 57,
                        'category_id' => 47,
                        'thread' => '1',
                        'slug' => 'd-pumps-components'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Компоненти',
                            'ru' => 'Компоненты',
                            'en' => 'Components'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 58,
                        'category_id' => 41,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Поршневі насоси',
                            'ru' => 'Поршневые насосы',
                            'en' => 'Positive displacement pumps'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 59,
                        'category_id' => 41,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Центробіжні насоси',
                            'ru' => 'Центробежные насосы',
                            'en' => 'Centrifugal type pumps'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 60,
                        'category_id' => 41,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Плунжерні насоси',
                            'ru' => 'Плунжерные насосы',
                            'en' => 'Plunger pumps'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 61,
                        'category_id' => 41,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Занурювальні',
                            'ru' => 'Погружные',
                            'en' => 'Sinking pumps'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 62,
                        'category_id' => 41,
                        'thread' => '1',
                        'slug' => 'pump-components'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Компоненти',
                            'ru' => 'Компоненты',
                            'en' => 'Components'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 63,
                        'category_id' => 62,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Компенсатори',
                            'ru' => 'Компенсаторы',
                            'en' => 'Compensators'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 64,
                        'category_id' => 62,
                        'thread' => '1',
                        'slug' => 'pump-comp-float-collar'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Зворотні клапани',
                            'ru' => 'Обратные клапаны',
                            'en' => 'Float collars'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 65,
                        'category_id' => 62,
                        'thread' => '1',
                        'slug' => 'pump-filters'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Фільтри',
                            'ru' => 'Фильры',
                            'en' => 'Filters'
                            ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 66,
                        'category_id' => 62,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Втулки',
                            'ru' => 'Втулки',
                            'en' => 'Barrels'
                        ]
                    ]
                ],
            // mud and circulation
                [
                    'data' => [
                        'id' => 67,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Буровий розчин та циркуляція',
                            'ru' => 'Буровой раствор и циркуляция',
                            'en' => 'Drilling mud & circulation'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 68,
                        'category_id' => 67,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Буферна ємкість',
                            'ru' => 'Буферная емкость',
                            'en' => 'Buffer tunk'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 69,
                        'category_id' => 67,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Задвижки',
                            'ru' => 'Задвижки',
                            'en' => 'Dampers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 70,
                        'category_id' => 67,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Компресори',
                            'ru' => 'Компрессоры',
                            'en' => 'Compressors'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 71,
                        'category_id' => 67,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Лінії високого тиску',
                            'ru' => 'Линии высокого давления',
                            'en' => 'Hight pressure lines'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 72,
                        'category_id' => 67,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Маніфольди',
                            'ru' => 'Манифольды',
                            'en' => 'Manifolds'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 73,
                        'category_id' => 67,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Системи очистки',
                            'ru' => 'Система очистки бур. раствора',
                            'en' => 'Mud clearing Systems'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 74,
                        'category_id' => 73,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Вібросита',
                            'ru' => 'Виросита',
                            'en' => 'Shale shakers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 75,
                        'category_id' => 73,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Дегазатори',
                            'ru' => 'Дегазаторы',
                            'en' => 'Degassers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 76,
                        'category_id' => 73,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Муло відокремлювачі',
                            'ru' => 'Ило отделители',
                            'en' => 'Desilters'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 77,
                        'category_id' => 73,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Піско відокремлювачі',
                            'ru' => 'Песко отделители',
                            'en' => 'Desenders'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 78,
                        'category_id' => 67,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Системи переробки та утилізації',
                            'ru' => 'Системы переработки и утилизации',
                            'en' => 'Mud recycling sustem'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 79,
                        'category_id' => 67,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Системи приготування',
                            'ru' => 'Системы приготовления',
                            'en' => 'Mud treatment systems'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 80,
                        'category_id' => 79,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Міксери',
                            'ru' => 'Миксеры',
                            'en' => 'Mixers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 81,
                        'category_id' => 79,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Гідроциклони',
                            'ru' => 'Гидроциклоны',
                            'en' => 'Mud cones'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 82,
                        'category_id' => 79,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'БПР',
                            'ru' => 'БПР',
                            'en' => 'Mixing unit'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 83,
                        'category_id' => 67,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Системи зверігання',
                            'ru' => 'Система зранения бур. раствора',
                            'en' => 'Mud storage'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 84,
                        'category_id' => 83,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Ємкості',
                            'ru' => 'Емкости',
                            'en' => 'Tanks'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 85,
                        'category_id' => 67,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Стояк',
                            'ru' => 'Стояк',
                            'en' => 'Standpipe'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 86,
                        'category_id' => 67,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Фільтри',
                            'ru' => 'Фильтры',
                            'en' => 'Filters'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 87,
                        'category_id' => 67,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Шламові насоси',
                            'ru' => 'Шламовые насосы',
                            'en' => 'Trash pumps'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 88,
                        'category_id' => 67,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Шланги',
                            'ru' => 'Шланги',
                            'en' => 'Hoses'
                        ]
                    ]
                ],
            // geo-physical borehole survey
                [
                    'data' => [
                        'id' => 89,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'ГДС',
                            'ru' => 'ГИС',
                            'en' => 'Geo-physical borehole survey'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 90,
                        'category_id' => 89,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Інструмент для відбору керна',
                            'ru' => 'Инструмент для отбора керна',
                            'en' => 'Coring equipment'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 91,
                        'category_id' => 90,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Кернові ящики',
                            'ru' => 'Керновые ящики',
                            'en' => 'Coring boxes'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 92,
                        'category_id' => 90,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Керновідбірний снаряд',
                            'ru' => 'Керноотборный снаряд',
                            'en' => 'Coring BBL'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 93,
                        'category_id' => 90,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'керноприймаяі',
                            'ru' => 'Керноприемники',
                            'en' => 'Coring recievers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 94,
                        'category_id' => 90,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Колонкові труби',
                            'ru' => 'Колонковые трубы',
                            'en' => 'Coring pipes'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 95,
                        'category_id' => 90,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Коронки',
                            'ru' => 'Коронки',
                            'en' => 'Coring bits'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 96,
                        'category_id' => 89,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Каротаж',
                            'ru' => 'Каротаж',
                            'en' => 'Well logging'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 97,
                        'category_id' => 96,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Відеокаротаж',
                            'ru' => 'Видеокаротаж',
                            'en' => 'Video logging'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 98,
                        'category_id' => 96,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Дод. обладнання',
                            'ru' => 'Доп. оборудование',
                            'en' => 'Additional equipment'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 99,
                        'category_id' => 96,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Інклінометрія',
                            'ru' => 'Инклометрия',
                            'en' => 'Continuous directional survay'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 100,
                        'category_id' => 96,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Кавернометрія',
                            'ru' => 'Кавернометрия',
                            'en' => 'Caliper log'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 101,
                        'category_id' => 96,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Каротажні станції',
                            'ru' => 'Каротажные станции',
                            'en' => 'Logging unit'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 102,
                        'category_id' => 96,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Котушки',
                            'ru' => 'Катушки',
                            'en' => 'Coils'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 103,
                        'category_id' => 96,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Лебідки',
                            'ru' => 'Лебедки',
                            'en' => 'Winches'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 104,
                        'category_id' => 96,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Магнітна розвідка',
                            'ru' => 'Магниторазведка',
                            'en' => 'Magnetic logging'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 105,
                        'category_id' => 96,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Напрямок руху води',
                            'ru' => 'Направления движения воды',
                            'en' => 'Water flow survay'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 106,
                        'category_id' => 96,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Радіометрія',
                            'ru' => 'Радиометрия',
                            'en' => 'Radiometrics'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 107,
                        'category_id' => 96,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Витратометрія',
                            'ru' => 'расхорометрия',
                            'en' => 'Flow survay'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 108,
                        'category_id' => 96,
                        'thread' => '1',
                        'slug' => 'logging-data-recording-system'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Реєструючі системи',
                            'ru' => 'Регестрирующие системы',
                            'en' => 'Data recording system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 109,
                        'category_id' => 96,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Сейсморозвідка',
                            'ru' => 'Сейсморазведка',
                            'en' => 'Seismic measurments'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 110,
                        'category_id' => 96,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Фотометрія та нефелометрія',
                            'ru' => 'Фотометрия и нефелометрия',
                            'en' => 'Photometry & nephelometry'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 111,
                        'category_id' => 96,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Електророзвідка',
                            'ru' => 'Электроразведка',
                            'en' => 'Geoelectric survay'
                        ]
                    ]
                ],
            // Addition equipent and electrics
                [
                    'data' => [
                        'id' => 112,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Додаткове обладнання та електрика',
                            'ru' => 'Дополнительное оборудование и электрика',
                            'en' => 'Additional equipment and electrics'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 113,
                        'category_id' => 112,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Заточне обладнання',
                            'ru' => 'Заточное оборудование',
                            'en' => 'Tool grinding machimery'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 114,
                        'category_id' => 113,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Ручні заточні машинки',
                            'ru' => 'Ручные заточные машинки',
                            'en' => 'Manual tool grinding machinery'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 115,
                        'category_id' => 113,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Заточні ковпачки',
                            'ru' => 'Заточные калпачки',
                            'en' => 'Grinding caps'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 116,
                        'category_id' => 112,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Керхер',
                            'ru' => 'Керхкр',
                            'en' => 'Washing machines'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 117,
                        'category_id' => 112,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Машинні ключі',
                            'ru' => 'Машинные ключи',
                            'en' => 'Wrenches'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 118,
                        'category_id' => 112,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Підпорки бетонні для ліній',
                            'ru' => 'Подпорки бетонные для линий',
                            'en' => 'Concrete pillar for lines holding'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 119,
                        'category_id' => 112,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Різак',
                            'ru' => 'Резак',
                            'en' => 'Cutters'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 120,
                        'category_id' => 112,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Сварка',
                            'ru' => 'Сварка',
                            'en' => 'Welding'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 121,
                        'category_id' => 120,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Газосварка',
                            'ru' => 'газосварка',
                            'en' => 'Gas welding machine'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 122,
                        'category_id' => 120,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Газосварка',
                            'ru' => 'Электросварка',
                            'en' => 'Electric welding machine'
                        ]
                    ]
                ],
            // DHM
                [
                    'data' => [
                        'id' => 123,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Забойні двигуни',
                            'ru' => 'Забойные двигателя',
                            'en' => 'DHM'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 124,
                        'category_id' => 123,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Обертальні',
                            'ru' => 'Вращательные',
                            'en' => 'Rotational'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 125,
                        'category_id' => 123,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Пневматичні',
                            'ru' => 'Ударные',
                            'en' => 'Percussion'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 126,
                        'category_id' => 123,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Пневматичні',
                            'ru' => 'Пневматические',
                            'en' => 'Pneumatic'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 127,
                        'category_id' => 123,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Гідравлічні',
                            'ru' => 'Гидравлические',
                            'en' => 'PDM'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 128,
                        'category_id' => 123,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Електричні',
                            'ru' => 'Электрические',
                            'en' => 'Electrical'
                        ]
                    ]
                ],
            // parts
                [
                    'data' => [
                        'id' => 129,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Запчастини',
                            'ru' => 'Запчасти',
                            'en' => 'Parts'
                        ]
                    ]
                ],
            // Measuring equipment & parameter monitoring
                [
                    'data' => [
                        'id' => 130,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Вимірювальне обладнання та контроль параметрів',
                            'ru' => 'Измерительное оборудование и контроль параметров',
                            'en' => 'Measuring equipment & parameter monitoring'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 131,
                        'category_id' => 130,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Датчики',
                            'ru' => 'Датчики',
                            'en' => 'Sensors'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 132,
                        'category_id' => 130,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Інструменти для вимірювання',
                            'ru' => 'Инструменты для измерения',
                            'en' => 'Tools for measuring'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 133,
                        'category_id' => 130,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Кабелі',
                            'ru' => 'Кабеля',
                            'en' => 'Cables'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 134,
                        'category_id' => 130,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Камери',
                            'ru' => 'Камеры',
                            'en' => 'Cameras'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 135,
                        'category_id' => 130,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Реєструюче обладнання',
                            'ru' => 'Регистрационное оборудование',
                            'en' => 'Data recording system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 136,
                        'category_id' => 130,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Спеціальне обладнання ГДС',
                            'ru' => 'Специальное оборудования ГДС',
                            'en' => 'Special logging equipment'
                        ]
                    ]
                ],
            // Stubilizers
                [
                    'data' => [
                        'id' => 137,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Калібратори',
                            'ru' => 'Калибраторы',
                            'en' => 'Stubilizers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 138,
                        'category_id' => 137,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Лопасні розширювачі (КЛС)',
                            'ru' => 'Лопастные (КЛС)',
                            'en' => 'Blade stubilizers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 139,
                        'category_id' => 137,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Пневмоударні',
                            'ru' => 'Пневмоударные',
                            'en' => 'Pneumopercussion stubilizers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 140,
                        'category_id' => 137,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Розсувні',
                            'ru' => 'Развдижные',
                            'en' => 'Expanding stubilizers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 141,
                        'category_id' => 137,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Шарошечні',
                            'ru' => 'Шарошечные',
                            'en' => 'Pin&roller stubilizers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 142,
                        'category_id' => 137,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Шарошки для разширювачей',
                            'ru' => 'Шарошки для расширителей',
                            'en' => 'Cones & rollers for stubilizers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 143,
                        'category_id' => 137,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'PDC',
                            'ru' => 'PDC',
                            'en' => 'PDC stubilizers'
                        ]
                    ]
                ],
            // camp
                [
                    'data' => [
                        'id' => 145,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Кампус',
                            'ru' => 'Кампус',
                            'en' => 'Camp'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 146,
                        'category_id' => 145,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Душова',
                            'ru' => 'Душевая',
                            'en' => 'Shower'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 147,
                        'category_id' => 145,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Дитлові будиночки',
                            'ru' => 'Жилые домики',
                            'en' => 'Houses'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 148,
                        'category_id' => 145,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Кухня',
                            'ru' => 'Кухня',
                            'en' => 'Kitchen'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 149,
                        'category_id' => 145,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Мед. частина',
                            'ru' => 'Мед. часть',
                            'en' => 'Docktor house'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 150,
                        'category_id' => 145,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Туалети',
                            'ru' => 'Туалеты',
                            'en' => 'WC'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 151,
                        'category_id' => 145,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Електрика',
                            'ru' => 'Электрика',
                            'en' => 'Electrics'
                        ]
                    ]
                ],
            // casing and cementing
                [
                    'data' => [
                        'id' => 152,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Кріплення свердловин та цементаж',
                            'ru' => 'Крепления скважин и цементаж',
                            'en' => 'Casing & cementing'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 153,
                        'category_id' => 152,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Башмак',
                            'ru' => 'Башмак',
                            'en' => 'Shoe'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 154,
                        'category_id' => 152,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Обсадні труби',
                            'ru' => 'Обсадные трубы',
                            'en' => 'Casing pipes'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 155,
                        'category_id' => 152,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Оснастка',
                            'ru' => 'Оснастка',
                            'en' => 'Casing hardware'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 156,
                        'category_id' => 155,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Муфти',
                            'ru' => 'Муфты',
                            'en' => 'Boxes'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 157,
                        'category_id' => 155,
                        'thread' => '1',
                        'slug' => 'casing-float-collars'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Зворотні клапани',
                            'ru' => 'Обратные клапаны',
                            'en' => 'Float collars'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 158,
                        'category_id' => 155,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Пробки направляючі',
                            'ru' => 'Пробки направляющие',
                            'en' => 'Shoe guide plungs'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 159,
                        'category_id' => 155,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Центратори та турбулізатори',
                            'ru' => 'Центраторы и турбулизаторы',
                            'en' => 'Centralisera & turbulizers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 160,
                        'category_id' => 152,
                        'thread' => '1',
                        'slug' => 'casing-pipe-joints'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Патрубки',
                            'ru' => 'Патрубки',
                            'en' => 'Pipe joints'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 161,
                        'category_id' => 152,
                        'thread' => '1',
                        'slug' => 'casing-crossovers'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Перевідники',
                            'ru' => 'Переводники',
                            'en' => 'Crossovers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 162,
                        'category_id' => 152,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Скребки',
                            'ru' => 'Скребок',
                            'en' => 'Scratcher'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 163,
                        'category_id' => 152,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Цементаж',
                            'ru' => 'Цементаж',
                            'en' => 'Cementing'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 164,
                        'category_id' => 163,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Корзини цементажні',
                            'ru' => 'Корзины цументировочные',
                            'en' => 'Cementing baskets'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 165,
                        'category_id' => 163,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'МСЦ',
                            'ru' => 'МСЦ',
                            'en' => 'DV colars'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 166,
                        'category_id' => 163,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Проведення цементажу через стінгер',
                            'ru' => 'Проведения цементирования через стингер',
                            'en' => 'Cementing equipment using stinger'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 167,
                        'category_id' => 163,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Установка цементажних мостів',
                            'ru' => 'Установка цементных мостов',
                            'en' => 'Equipment for cementing bridge'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 168,
                        'category_id' => 163,
                        'thread' => '1',
                        'slug' => 'cementing-float-collars'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Зворотні клапани',
                            'ru' => 'Обратные клапаны',
                            'en' => 'Float collars'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 169,
                        'category_id' => 163,
                        'thread' => '1',
                        'slug' => 'casing-packer-assembly'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Пакери та комплектуючі',
                            'ru' => 'Пакеры и комплектующие',
                            'en' => 'Packer assembly'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 170,
                        'category_id' => 163,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Пробки цументажні',
                            'ru' => 'Пробки цементажные',
                            'en' => 'Cementing bpungs'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 171,
                        'category_id' => 163,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Упорне кільце',
                            'ru' => 'Упорное кольцо',
                            'en' => 'Cement baffle collar'
                        ]
                    ]
                ],
            // emergency response
                [
                    'data' => [
                        'id' => 172,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Ліквідация аварій',
                            'ru' => 'Ликцидация аварий',
                            'en' => 'Emergency responce'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 174,
                        'category_id' => 174,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Аварійні клапани',
                            'ru' => 'Ловильный инструмент',
                            'en' => 'Emergency valves'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 175,
                        'category_id' => 174,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Ванна',
                            'ru' => 'Ванна',
                            'en' => 'Bath'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 176,
                        'category_id' => 174,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'ловильний інструмент',
                            'ru' => 'Ловильный инструмент',
                            'en' => 'Fishing tools'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 177,
                        'category_id' => 176,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Колоколи',
                            'ru' => 'Колокола',
                            'en' => 'Overshots'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 178,
                        'category_id' => 176,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Магніти',
                            'ru' => 'Магниты',
                            'en' => 'Magnetic'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 179,
                        'category_id' => 176,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Метчики',
                            'ru' => 'Метчики',
                            'en' => 'Taper tap'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 180,
                        'category_id' => 174,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Печатка',
                            'ru' => 'Печатка',
                            'en' => 'Sigils'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 181,
                        'category_id' => 174,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Фрез',
                            'ru' => 'Фрез',
                            'en' => 'Junk mills'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 182,
                        'category_id' => 174,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Шламоуловлювач',
                            'ru' => 'Шламоуловитель',
                            'en' => 'Junk backets'
                        ]
                    ]
                ],
            // Lubricants
                [
                    'data' => [
                        'id' => 183,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Лубрикант',
                            'ru' => 'Лубрикант',
                            'en' => 'Lubricants'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 184,
                        'category_id' => 183,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Для бурових труб',
                            'ru' => 'Для буровых труб',
                            'en' => 'For DP'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 185,
                        'category_id' => 183,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Для ключей',
                            'ru' => 'Для ключей',
                            'en' => 'For tongs'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 186,
                        'category_id' => 183,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'для насосів',
                            'ru' => 'Для насосов',
                            'en' => 'For pump'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 187,
                        'category_id' => 183,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'для НКТ',
                            'ru' => 'Для НКТ',
                            'en' => 'For tubing'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 188,
                        'category_id' => 183,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Для обсадних труб',
                            'ru' => 'Для обсадных труб',
                            'en' => 'For casing'
                        ]
                    ]
                ],
            // tubbing 
                [
                    'data' => [
                        'id' => 189,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'НКТ та остнастка',
                            'ru' => 'НКТ и оснастка',
                            'en' => 'Tubing equipment'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 190,
                        'category_id' => 189,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Клапан збивний',
                            'ru' => 'Клапан сбивной',
                            'en' => 'Knock-off valve'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 191,
                        'category_id' => 189,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Колтюбінг',
                            'ru' => 'Колтюбинг',
                            'en' => 'Coil tubing'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 192,
                        'category_id' => 189,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'НКТ',
                            'ru' => 'НКТ',
                            'en' => 'Tubing'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 193,
                        'category_id' => 189,
                        'thread' => '1',
                        'slug' => 'tubbing-pipe-joints'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Патрубки',
                            'ru' => 'Патрубки',
                            'en' => 'Pipe joints'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 194,
                        'category_id' => 189,
                        'thread' => '1',
                        'slug' => 'tubbing-crossovers'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => '',
                            'ru' => 'Перевідники',
                            'en' => 'Crossovers'
                        ]
                    ]
                ],
            // wellhead
                [
                    'data' => [
                        'id' => 195,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Обланання устя',
                            'ru' => 'Оборудование устья',
                            'en' => 'Wellhead equipment'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 196,
                        'category_id' => 195,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Колонна головка',
                            'ru' => 'Колонная головка',
                            'en' => 'Casing spool'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 197,
                        'category_id' => 195,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Фонтанна арматура',
                            'ru' => 'Фонтанная арматура',
                            'en' => 'X-mass tree'
                        ]
                    ]
                ],
            // packer
                [
                    'data' => [
                        'id' => 198,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Пакері та комплектуючі',
                            'ru' => 'Пакеры и комплектующие',
                            'en' => 'Packer assembly'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 199,
                        'category_id' => 198,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Насоси для накачки пакера',
                            'ru' => 'Насосы для накачки пакера',
                            'en' => 'Pumps'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 200,
                        'category_id' => 198,
                        'thread' => '1',
                        'slug' => 'packer-float-collars'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Зворотні клапани',
                            'ru' => 'Обратные клапана',
                            'en' => 'Float collars'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 201,
                        'category_id' => 198,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Стандартні пакери',
                            'ru' => 'Стандартные пакеры',
                            'en' => 'Standart packer'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 202,
                        'category_id' => 198,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Трубки для надування пакеру',
                            'ru' => 'Трубки для надувания пакера',
                            'en' => 'Pipes'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 203,
                        'category_id' => 198,
                        'thread' => '1',
                        'slug' => 'packer-hoses'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Шланги ін\'єкційні',
                            'ru' => 'Шланги иньекционные',
                            'en' => 'Hoses'
                        ]
                    ]
                ],
            // air utils
                [
                    'data' => [
                        'id' => 204,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Пневмосистема',
                            'ru' => 'Пневмосистема',
                            'en' => 'Air utility'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 205,
                        'category_id' => 204,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Повітряний провід',
                            'ru' => 'Воздухо провод',
                            'en' => 'Air lines'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 206,
                        'category_id' => 204,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Повітрянний резервуар',
                            'ru' => 'Воздушные резервуар',
                            'en' => 'Air tanks'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 207,
                        'category_id' => 204,
                        'thread' => '1',
                        'slug' => 'air-compensators'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Компенсатори',
                            'ru' => 'Компенсаторы',
                            'en' => 'Compensators'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 208,
                        'category_id' => 204,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Осушувач повітря',
                            'ru' => 'Осушитель воздуха',
                            'en' => 'Air driers'
                        ]
                    ]
                ],
            // BOP
                [
                    'data' => [
                        'id' => 209,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Противикідне обладнання',
                            'ru' => 'Противофонтанное оборудование',
                            'en' => 'Blow out prevention system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 210,
                        'category_id' => 209,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Блоки управління ПВО',
                            'ru' => 'Блоки управления ПВО',
                            'en' => 'BOP control unit'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 211,
                        'category_id' => 210,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Гідроаккумулятори',
                            'ru' => 'Гидроаккумуляторы',
                            'en' => 'Hydroacumulators'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 212,
                        'category_id' => 210,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Ручні',
                            'ru' => 'Ручные',
                            'en' => 'Manual control unit'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 213,
                        'category_id' => 210,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Дистанційне керування',
                            'ru' => 'ДИстанционное управление',
                            'en' => 'Remote control unit'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 214,
                        'category_id' => 209,
                        'thread' => '1',
                        'slug' => 'bop-degassers'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Дегазаторы',
                            'ru' => 'Дегазаторы',
                            'en' => 'Degassers'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 215,
                        'category_id' => 209,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Засувки, котушки, клапана',
                            'ru' => 'Задвижки, катушки, клапана',
                            'en' => 'Valves & wheels'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 216,
                        'category_id' => 209,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Лінії',
                            'ru' => 'Линии',
                            'en' => 'Lines'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 217,
                        'category_id' => 216,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Глушіння',
                            'ru' => 'Глушения',
                            'en' => 'Kill'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 218,
                        'category_id' => 216,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Дроселювання',
                            'ru' => 'Дросселирования',
                            'en' => 'Chock'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 219,
                        'category_id' => 209,
                        'thread' => '1',
                        'slug' => 'bop-manifolds'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Маніфольди',
                            'ru' => 'Манифольды',
                            'en' => 'Manifolds'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 220,
                        'category_id' => 219,
                        'thread' => '1',
                        'slug' => 'manifolds-kill'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Глушіння',
                            'ru' => 'Глушения',
                            'en' => 'Kill'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 221,
                        'category_id' => 219,
                        'thread' => '1',
                        'slug' => 'manifolds-chock'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Дроселювання',
                            'ru' => 'Дросселирования',
                            'en' => 'Chock'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 222,
                        'category_id' => 209,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Плашки',
                            'ru' => 'Плашки',
                            'en' => 'Rams'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 223,
                        'category_id' => 222,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Глухі',
                            'ru' => 'Глухие',
                            'en' => 'Blind'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 224,
                        'category_id' => 222,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Зрізні',
                            'ru' => 'Срезные',
                            'en' => 'Cut'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 225,
                        'category_id' => 222,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Трубні',
                            'ru' => 'Трубные',
                            'en' => 'Pipe'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 226,
                        'category_id' => 209,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Превентор',
                            'ru' => 'Превентор',
                            'en' => 'BOP'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 227,
                        'category_id' => 226,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Одинарний',
                            'ru' => 'Одинарный',
                            'en' => 'Single'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 228,
                        'category_id' => 226,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Здвоєний',
                            'ru' => 'Сдвоенный',
                            'en' => 'Double'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 229,
                        'category_id' => 226,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Універсальний',
                            'ru' => 'Универсальный',
                            'en' => 'Annular'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 230,
                        'category_id' => 226,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Хрестовина',
                            'ru' => 'Крестовина',
                            'en' => 'Drilling spool'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 231,
                        'category_id' => 209,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Факельна система',
                            'ru' => 'Факельная система',
                            'en' => 'Flare system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 232,
                        'category_id' => 231,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Факельний ствол',
                            'ru' => 'Факельный ствол',
                            'en' => 'Flare body'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 233,
                        'category_id' => 231,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Засоби контролю та автоматизації',
                            'ru' => 'Cредства контроля и автоматизации',
                            'en' => 'Flare controll & automation'
                        ]
                    ]
                ],
                [
                    'data' => ['id' => 234,'category_id' => 231,'thread' => '1'],
                    'translations' => [
                        'name' => ['uk' => 'Дистанційний електрозапальний пристрій','ru' => 'Дистанционное электро запальное устройство','en' => 'Flare remote starter']
                    ]
                ],
                [
                    'data' => [
                        'id' => 235,
                        'category_id' => 231,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Трубопроводи',
                            'ru' => 'Подводящие трубопроводы',
                            'en' => 'Dlare lines'
                        ]
                    ]
                ],
            //Rotory
                [
                    'data' => [
                        'id' => 236,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Роторна система',
                            'ru' => 'Роторная система',
                            'en' => 'Rotory system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 237,
                        'category_id' => 236,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Ведучі труби',
                            'ru' => 'Ведущие трубы',
                            'en' => 'Kelly valve'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 238,
                        'category_id' => 236,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Вертлюги',
                            'ru' => 'Вертлюги',
                            'en' => 'Swivel'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 239,
                        'category_id' => 236,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Верхні приводи',
                            'ru' => 'Верхние приводы',
                            'en' => 'TDS'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 240,
                        'category_id' => 239,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Аварійна система',
                            'ru' => 'Аварийная система',
                            'en' => 'Emergency system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 241,
                        'category_id' => 239,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Вал',
                            'ru' => 'Вал',
                            'en' => 'Shaft'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 242,
                        'category_id' => 239,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Гідравлічна система',
                            'ru' => 'Гидравлическая система',
                            'en' => 'Hydraulic system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 243,
                        'category_id' => 239,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Грязьові труби',
                            'ru' => 'Грязевые трубы',
                            'en' => 'Mud pipe'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 244,
                        'category_id' => 239,
                        'thread' => '1',
                        'slug' => 'rotory-sensors'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Датчики',
                            'ru' => 'Датчики',
                            'en' => 'Sensors'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 245,
                        'category_id' => 239,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Док. станція',
                            'ru' => 'Док. станция',
                            'en' => 'Control station'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 246,
                        'category_id' => 239,
                        'thread' => '1',
                        'slug' => 'rotory-components'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Компоненти',
                            'ru' => 'Компоненты',
                            'en' => 'Components'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 247,
                        'category_id' => 239,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Крани шарові',
                            'ru' => 'Краны шаровые',
                            'en' => 'Ball valves'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 248,
                        'category_id' => 239,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Направляюча рельса',
                            'ru' => 'Направляющая рельса',
                            'en' => 'TDS rail'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 249,
                        'category_id' => 239,
                        'thread' => '1',
                        'slug' => 'rotory-float-collars'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Обратні клапани',
                            'ru' => 'Обратные клапаны',
                            'en' => 'Float collars'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 250,
                        'category_id' => 239,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Промивний переводник',
                            'ru' => 'Промывочный переводник',
                            'en' => 'Wash pipe'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 251,
                        'category_id' => 239,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Пульт управління',
                            'ru' => 'Пульт управления',
                            'en' => 'Control panel'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 252,
                        'category_id' => 239,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Стропи',
                            'ru' => 'Штропы',
                            'en' => 'Bails'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 253,
                        'category_id' => 239,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Електро двигуни',
                            'ru' => 'Электро двигатели',
                            'en' => 'Electrical motors'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 366,
                        'category_id' => 236,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Ротор',
                            'ru' => 'Ротор',
                            'en' => 'Rotor'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 254,
                        'category_id' => 236,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Вкладиші під ведучу трубу',
                            'ru' => 'Вкладыши под ведущую трубу',
                            'en' => 'Kelly bushes'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 255,
                        'category_id' => 236,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Компоненти',
                            'ru' => 'Компоненты',
                            'en' => 'Component'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 256,
                        'category_id' => 236,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Привід ротора',
                            'ru' => 'Привод ротора',
                            'en' => 'Rotor drive'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 257,
                        'category_id' => 236,
                        'thread' => '1',
                        'slug' => 'rotory-brakes'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Система гальмування',
                            'ru' => 'Система торможения',
                            'en' => 'Brakes'
                        ]
                    ]
                ],
            //power
                [
                    'data' => [
                        'id' => 258,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Система живлення',
                            'ru' => 'Система питания',
                            'en' => 'Power system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 259,
                        'category_id' => 258,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Блоки розподілу',
                            'ru' => 'Блоки распределения',
                            'en' => 'Distribution unit'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 260,
                        'category_id' => 258,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Генератори',
                            'ru' => 'Генераторы',
                            'en' => 'Generators'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 261,
                        'category_id' => 258,
                        'thread' => '1',
                        'slug' => 'power-cables'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Кабелі',
                            'ru' => 'Кабеля',
                            'en' => 'Cables'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 262,
                        'category_id' => 258,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Трансформатори (ММС)',
                            'ru' => 'Трансформаторы (ММС)',
                            'en' => 'Power converters (MMC)'
                        ]
                    ]
                ],
            //simultaneous casing system
                [
                    'data' => [
                        'id' => 263,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Системи одночасної обсадки',
                            'ru' => 'Системы одновременной обсадки',
                            'en' => 'Simultaneous casing system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 264,
                        'category_id' => 263,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Симетрична система',
                            'ru' => 'Симметричная система',
                            'en' => 'Symmetrical system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 265,
                        'category_id' => 263,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Система з розсувними лопастями',
                            'ru' => 'Система с раздвижными лопастями',
                            'en' => 'System with extandable blades'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 266,
                        'category_id' => 265,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Розсувні долота',
                            'ru' => 'Раздвижные долота',
                            'en' => 'Extendable drilling bit'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 267,
                        'category_id' => 265,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Башмаки для обсадних труб',
                            'ru' => 'Башмаки для обсадных труб',
                            'en' => 'Casing shoe'
                        ]
                    ]
                ],
            // Disel storage
                [
                    'data' => [
                        'id' => 268,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Склад ПММ',
                            'ru' => 'Склад ПММ',
                            'en' => 'Disel storage'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 269,
                        'category_id' => 268,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Балони',
                            'ru' => 'Баллонны',
                            'en' => 'Bombs'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 270,
                        'category_id' => 268,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Блоки заправки',
                            'ru' => 'Блоки заправки',
                            'en' => 'Filling station'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 271,
                        'category_id' => 268,
                        'thread' => '1',
                        'slug' => 'fuel-tanks'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Ємкості',
                            'ru' => 'Емкости',
                            'en' => 'Tanks'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 272,
                        'category_id' => 268,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Вимірювальне обладнання',
                            'ru' => 'Измерительное оборудование',
                            'en' => 'Measuring equipment'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 273,
                        'category_id' => 268,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Паливо',
                            'ru' => 'Топливо',
                            'en' => 'Fuel'
                        ]
                    ]
                ],
            // special and heavy machinery
                [
                    'data' => [
                        'id' => 274,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Спеціальна та важка техніка',
                            'ru' => 'Специальная и тяжелая техника',
                            'en' => 'Special and heavy machinety'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 275,
                        'category_id' => 274,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Кран',
                            'ru' => 'Кран',
                            'en' => 'Crane'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 276,
                        'category_id' => 274,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Погрузчик',
                            'ru' => 'Погрузчик',
                            'en' => 'Forklifter'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 277,
                        'category_id' => 274,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Транспортні машини',
                            'ru' => 'Транспортные машины',
                            'en' => 'Trucks'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 278,
                        'category_id' => 274,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Цементажний агрегат',
                            'ru' => 'Цементировочный агрегат',
                            'en' => 'Cementing trucks'
                        ]
                    ]
                ],
            // Block and tackle system
                [
                    'data' => [
                        'id' => 279,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Талева система',
                            'ru' => 'Талевая система',
                            'en' => 'Block and tackle system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 280,
                        'category_id' => 279,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Аварійний привід',
                            'ru' => 'Аварийный привод',
                            'en' => 'Emergency drive'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 281,
                        'category_id' => 279,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Буровий крюк',
                            'ru' => 'Буровой крюк',
                            'en' => 'Drilling hook'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 282,
                        'category_id' => 279,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Система бурової лебідки та тальканат',
                            'ru' => 'Система буровой лебедки и тальканат',
                            'en' => 'Drilling line system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 283,
                        'category_id' => 282,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Барабан',
                            'ru' => 'Барабан',
                            'en' => 'Reel'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 284,
                        'category_id' => 282,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Привід',
                            'ru' => 'Привод',
                            'en' => 'Drive'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 285,
                        'category_id' => 282,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Система охолодження',
                            'ru' => 'Система охлаждения',
                            'en' => 'Cooling system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 286,
                        'category_id' => 282,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Система гальмування',
                            'ru' => 'Система торможения',
                            'en' => 'Brakes'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 287,
                        'category_id' => 282,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Тальканат',
                            'ru' => 'Тальканат',
                            'en' => 'Drilling line'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 288,
                        'category_id' => 282,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Електро двигуни',
                            'ru' => 'Электро двители',
                            'en' => 'Electric motors'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 289,
                        'category_id' => 279,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Допоміжні лебідки та канати',
                            'ru' => 'Вспомогательные лебедки и канаты',
                            'en' => 'Additional winches & drawwirkds'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 290,
                        'category_id' => 279,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Кріплення нерух. кінця тал. канату',
                            'ru' => 'Крепление непод. конца тал. каната',
                            'en' => 'Dead-line anchorage'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 291,
                        'category_id' => 279,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Кронблок',
                            'ru' => 'Кронблок',
                            'en' => 'Crown block'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 292,
                        'category_id' => 279,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Талевий блок',
                            'ru' => 'Талевый блок',
                            'en' => 'Travel block'
                        ]
                    ]
                ],
            // Pipe handling tools and pipe locking
                [
                    'data' => [
                        'id' => 293,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Спуско-підйомний інструмент та фіксація труб',
                            'ru' => 'Спуско-подъемный инструмент и фиксация труб',
                            'en' => 'Pipe handling & locking'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 294,
                        'category_id' => 293,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Клиння',
                            'ru' => 'Клинья',
                            'en' => 'Slips'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 295,
                        'category_id' => 293,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Підйомні пробки',
                            'ru' => 'Подъемные пробки',
                            'en' => 'Heaving plug'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 296,
                        'category_id' => 293,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Ручні зажими',
                            'ru' => 'Ручные зажимы',
                            'en' => 'Manual clamp'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 297,
                        'category_id' => 293,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Спайдера',
                            'ru' => 'Спайдера',
                            'en' => 'Spiders'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 298,
                        'category_id' => 293,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Хомути',
                            'ru' => 'Хомуты',
                            'en' => 'Pipe clamp'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 299,
                        'category_id' => 293,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Хомути для обсадних труб',
                            'ru' => 'Хомуты для обсадных труб',
                            'en' => 'Casing grip'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 300,
                        'category_id' => 293,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Елеватори',
                            'ru' => 'Элеваторы',
                            'en' => 'Elevators'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 301,
                        'category_id' => 300,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Елеватори з зовнішнім захопленням',
                            'ru' => 'Элеваторы с внешним захватом',
                            'en' => 'Standart'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 302,
                        'category_id' => 300,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Елеватори з внутрішнім захопленням',
                            'ru' => 'Элеваторы с внутренним захватом',
                            'en' => 'With inner pipe pick-up'
                        ]
                    ]
                ],
            // Equipment HSE
                [
                    'data' => [
                        'id' => 303,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'бладнання для ТБ',
                            'ru' => 'Оборудование для ТБ',
                            'en' => 'HSE equipment'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 304,
                        'category_id' => 303,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Пожежна система',
                            'ru' => 'Пожарная система',
                            'en' => 'Fire hazard'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 305,
                        'category_id' => 303,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Сигналізація',
                            'ru' => 'Сигнализация',
                            'en' => 'Signalization'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 306,
                        'category_id' => 303,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Система життєзабезпечення',
                            'ru' => 'Система жизнеобеспечения',
                            'en' => 'Life supply'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 307,
                        'category_id' => 303,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Світлова система',
                            'ru' => 'Световая система',
                            'en' => 'Light system'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 308,
                        'category_id' => 303,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Gерсональний захист',
                            'ru' => 'Персональная защита',
                            'en' => 'PPO'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 309,
                        'category_id' => 303,
                        'thread' => '1',
                        'slug'=> 'hse-add-equipment'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Дод оборуднання',
                            'ru' => 'Доп Оборудование',
                            'en' => 'Additional equipment'
                        ]
                    ]
                ],
            // Drilling tongs
                [
                    'data' => [
                        'id' => 310,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Бурові ключі',
                            'ru' => 'Буровые ключи',
                            'en' => 'Drilling tongs'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 311,
                        'category_id' => 310,
                        'thread' => '1',
                        'slug' => 'tongs-components'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Компоненти',
                            'ru' => 'Компоненты',
                            'en' => 'Components'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 312,
                        'category_id' => 310,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Гідравлічні ключі',
                            'ru' => 'Гидравлические ключи',
                            'en' => 'Hydraulic tongs'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 313,
                        'category_id' => 312,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Док станція',
                            'ru' => 'Док станция',
                            'en' => 'Power unit'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 314,
                        'category_id' => 310,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Ключі для НКТ',
                            'ru' => 'Ключи для НКТ',
                            'en' => 'Tubing tongs'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 315,
                        'category_id' => 310,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Ключі для обсадної колони',
                            'ru' => 'Ключи для обсадной колонны',
                            'en' => 'Casing tongs'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 316,
                        'category_id' => 310,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Механічні ключі',
                            'ru' => 'Механические ключи',
                            'en' => 'Manual tongs'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 317,
                        'category_id' => 310,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Підкладні вилки',
                            'ru' => 'Подкладные вилки',
                            'en' => 'Forks'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 318,
                        'category_id' => 310,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Трубні ключі',
                            'ru' => 'Трубные ключи',
                            'en' => 'Pipe spanner'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 319,
                        'category_id' => 310,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Цепні ключі',
                            'ru' => 'Цепные ключи',
                            'en' => 'Chain spanner'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 320,
                        'category_id' => 310,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Шарнірні ключі',
                            'ru' => 'Шарнирные ключи',
                            'en' => 'Hinged tongs'
                        ]
                    ]
                ],
            // Chemical reagents
                [
                    'data' => [
                        'id' => 321,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Хімічні реагенти',
                            'ru' => 'Химические реагенты',
                            'en' => 'Chemical reagents'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 322,
                        'category_id' => 321,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Реагенти-стабілізатори та регулятори фільтрації',
                            'ru' => 'Реагенты-стабилизаторы и регуляторы фильтрации',
                            'en' => 'Sequestering & filtration control agents'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 323,
                        'category_id' => 321,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Обважувачі',
                            'ru' => 'Утяжелители',
                            'en' => 'Mud heaver'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 324,
                        'category_id' => 321,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Кольматанти',
                            'ru' => 'Кольматанты',
                            'en' => 'LCM'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 325,
                        'category_id' => 321,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Бентонити та замінники',
                            'ru' => 'Бентониты и заменители',
                            'en' => 'Bentolite & alternate'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 326,
                        'category_id' => 321,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Неорганічні хімічні реагенти',
                            'ru' => 'Неорганические химические реагенты',
                            'en' => 'Non-organic chemicals'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 327,
                        'category_id' => 321,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Смазочні та антипріхватні добавки',
                            'ru' => 'Смазочные и антиприхватные добавки',
                            'en' => 'Lubricants & antisticking agents'
                        ]
                    ]
                ],
            // Laboratory of mud chemical analysis
                [
                    'data' => [
                        'id' => 328,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Лабораторія бурового розчину',
                            'ru' => 'Лаборатория бурового раствора',
                            'en' => 'Laboratory of mud chemical-analysis'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 329,
                        'category_id' => 328,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Вимір цільності',
                            'ru' => 'Измерение плотности',
                            'en' => 'Density measuring'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 330,
                        'category_id' => 328,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Вимір питомої ваги',
                            'ru' => 'Измерение удельного веса',
                            'en' => 'ASG measuring'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 331,
                        'category_id' => 328,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Вимір в\'язкості',
                            'ru' => 'Измерение вязкости',
                            'en' => 'Viscosity measuring'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 332,
                        'category_id' => 328,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Вимір СНС',
                            'ru' => 'Измерение СНС',
                            'en' => 'SSS measuring'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 333,
                        'category_id' => 328,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Вимір pH',
                            'ru' => 'Измерение pH',
                            'en' => 'pH measuring'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 334,
                        'category_id' => 328,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Вимір водовіддачі',
                            'ru' => 'Измерение водоотдачи',
                            'en' => 'Water loss measuring'
                        ]
                    ]
                ],
            // Jars
                [
                    'data' => [
                        'id' => 335,
                        'category_id' => null,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'ЯСи',
                            'ru' => 'ЯСы',
                            'en' => 'Jars'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 336,
                        'category_id' => 335,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Гідромеханічні',
                            'ru' => 'Гидромеханические',
                            'en' => 'Hydromechanical'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 337,
                        'category_id' => 335,
                        'thread' => '1'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Гідравлічні',
                            'ru' => 'Гидравлические',
                            'en' => 'Hydraulic'
                        ]
                    ]
                ],
            // SERVISES
                [
                    'data' => [
                        'id' => 338,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Інший сервіс',
                            'ru' => 'Другой сервис',
                            'en' => 'Other services'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 339,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Комплексні послуги',
                            'ru' => 'Комплексные услуги',
                            'en' => 'Multiple services'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 340,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Аварійні роботи',
                            'ru' => 'Аварийные работы',
                            'en' => 'Emergency operation'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 341,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Аварійна служба по контролю або ЧС під час робіт',
                            'ru' => 'Аварийная служба по контролю или ЧС во время работ',
                            'en' => 'Well controll'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 342,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Буровий підрядник',
                            'ru' => 'Буровой подрядчик',
                            'en' => 'Drilling contractor'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 343,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Викиди у атмосферу',
                            'ru' => 'Выбросы в атмосферу',
                            'en' => 'Atmospheric discharge'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 367,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Геолого дослідження свердловини',
                            'ru' => 'Геолого исследование скважины',
                            'en' => 'Geo-physical borehole survay'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 344,
                        'category_id' => 343,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Відбір керну',
                            'ru' => 'Отбор керна',
                            'en' => 'Coring operation'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 345,
                        'category_id' => 343,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Каротаж',
                            'ru' => 'Каротаж',
                            'en' => 'Well-logging measurment'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 346,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Дефектоскопія та сертифікація',
                            'ru' => 'Дефектоскопия и сертификация',
                            'en' => 'NDT'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 347,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Долотний сервіс',
                            'ru' => 'Долотный сервис',
                            'en' => 'Bits'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 348,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Забойні двигуни',
                            'ru' => 'Забойные двигателя',
                            'en' => 'Down hole motor'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 349,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Заземлення',
                            'ru' => 'Заземление',
                            'en' => 'Grounding'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 350,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Похило направлене буріння',
                            'ru' => 'Наклонно направленное бурение',
                            'en' => 'Directional drilling'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 351,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Оснащення ОК',
                            'ru' => 'Оснащение ОК',
                            'en' => 'Casing running'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 352,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Охорона',
                            'ru' => 'Охрана',
                            'en' => 'Security'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 353,
                        'category_id' => null,
                        'thread' => '2',
                        'slug' => 'service-bop'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'ПВО',
                            'ru' => 'ПВО',
                            'en' => 'BOP'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 354,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Підготовка кадрів та підбір персоналу',
                            'ru' => 'Подготовка кадров и подбор персонала',
                            'en' => 'Hiring and training of personnel'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 355,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Поставка труб',
                            'ru' => 'Поставка труб',
                            'en' => 'Pipe shipment'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 356,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Продажа та контроль ПРК/АЗС/ПАЗС',
                            'ru' => 'Продажа и контроль ПРК/АЗС/ПАЗС',
                            'en' => 'Selling and controll of filling station & fuel storage'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 357,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Спец. техніка',
                            'ru' => 'Спец техника',
                            'en' => 'Special machinery and vehicle'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 358,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Будівельники',
                            'ru' => 'Строители',
                            'en' => 'Builders'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 359,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Станція ГТИ',
                            'ru' => 'Станция ГТИ',
                            'en' => 'Logging station'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 360,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Транспортники',
                            'ru' => 'Транспортники',
                            'en' => 'Transporters'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 361,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Утилізація відходів',
                            'ru' => 'Утилизация отходов',
                            'en' => 'Disposal of waste'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 362,
                        'category_id' => 361,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Бурових',
                            'ru' => 'Буровых',
                            'en' => 'Drilling'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 363,
                        'category_id' => 361,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Битових',
                            'ru' => 'Бытовых',
                            'en' => 'Domestic'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 364,
                        'category_id' => null,
                        'thread' => '2'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Хім. лабораторія контролю',
                            'ru' => 'Хим. лаборатория контроля',
                            'en' => 'Drilling mud laboratory'
                        ]
                    ]
                ],
                [
                    'data' => [
                        'id' => 365,
                        'category_id' => null,
                        'thread' => '2',
                        'slug' => 'service-cementing'
                    ],
                    'translations' => [
                        'name' => [
                            'uk' => 'Цементаж',
                            'ru' => 'Цементажники',
                            'en' => 'Cementing'
                        ]
                    ]
                ],
        ];
    }
}
