<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return $this->fetchBookMetas(explode(' ', fake()->realText(50, 1))[0]);
    }

    private function fetchBookMetas($title, $limit = 1)
    {
        $bookData = Http::get('http://openlibrary.org/search.json', [
            'q' => $title,
            'limit' => $limit
        ])->json();

        $books = [];

        if (isset($bookData['docs']) && count($bookData['docs']) > 0) {
            foreach ($bookData['docs'] as $book) {
                $books[] = [
                    'name' => $book['title'],
                    'cover_url' => isset($book['cover_i']) ? "https://covers.openlibrary.org/b/id/{$book['cover_i']}-L.jpg" : 'https://covers.openlibrary.org/b/id/9201534-L.jpg',
                    'release_year' => isset($book['first_publish_year']) ? $book['first_publish_year'] : fake()->randomNumber(4, true),
                    'publisher' => isset($book['publisher'][0]) && $book['publisher'][0] != 'Independently Published' ? $book['publisher'][0] : (isset($book['author_name'][0]) ? $book['author_name'][0] : fake()->name()),
                    'published_from' => isset($book['publish_place']) ? $book['publish_place'][0] : 'Dreanbury',
                    'language' => isset($book['language'][0]) ? $this->decodeLanguageCode($book['language'][0]) : 'English',
                    'total_page' => isset($book['number_of_pages_median']) ? $book['number_of_pages_median'] : fake()->randomNumber(3, false),
                    'synopsis' => fake()->realText(),
                    'rating' => fake()->randomFloat(1, 1, 5),
                    'hard_copy_available' => fake()->boolean(),
                    'ebook_available' => fake()->boolean(),
                    'audio_book_available' => fake()->boolean(),
                    'status' => fake()->boolean(),
                    'bookshelf' => strtoupper(fake()->randomLetter()) . '-' . fake()->randomNumber(3, false)
                ];
            }
        }
        return $books[0];
    }

    private function decodeLanguageCode($code)
    {
        $languages = [
            "aar" => "Afar",
            "abk" => "Abkhazian",
            "afr" => "Afrikaans",
            "amh" => "Amharic",
            "ara" => "Arabic",
            "asm" => "Assamese",
            "aym" => "Aymara",
            "aze" => "Azerbaijani",
            "bak" => "Bashkir",
            "bel" => "Belarusian",
            "bul" => "Bulgarian",
            "bih" => "Bihari",
            "bis" => "Bislama",
            "ben" => "Bengali",
            "bod" => "Tibetan",
            "bre" => "Breton",
            "cat" => "Catalan",
            "cos" => "Corsican",
            "ces" => "Czech",
            "cym" => "Welsh",
            "dan" => "Danish",
            "deu" => "German",
            "dzo" => "Dzongkha",
            "ell" => "Greek",
            "eng" => "English",
            "epo" => "Esperanto",
            "spa" => "Spanish",
            "est" => "Estonian",
            "eus" => "Basque",
            "fas" => "Persian",
            "fin" => "Finnish",
            "fij" => "Fijian",
            "fao" => "Faroese",
            "fra" => "French",
            "fry" => "Frisian",
            "gle" => "Irish",
            "gla" => "Scots Gaelic",
            "glg" => "Galician",
            "grn" => "Guarani",
            "guj" => "Gujarati",
            "hau" => "Hausa",
            "heb" => "Hebrew",
            "hin" => "Hindi",
            "hrv" => "Croatian",
            "hun" => "Hungarian",
            "hye" => "Armenian",
            "ina" => "Interlingua",
            "ind" => "Indonesian",
            "ile" => "Interlingue",
            "ipk" => "Inupiak",
            "isl" => "Icelandic",
            "ita" => "Italian",
            "iku" => "Inuktitut",
            "heb" => "Hebrew",
            "jpn" => "Japanese",
            "yid" => "Yiddish",
            "jav" => "Javanese",
            "kat" => "Georgian",
            "kaz" => "Kazakh",
            "kal" => "Greenlandic",
            "khm" => "Cambodian",
            "kan" => "Kannada",
            "kor" => "Korean",
            "kas" => "Kashmiri",
            "kur" => "Kurdish",
            "kir" => "Kirghiz",
            "lat" => "Latin",
            "lin" => "Lingala",
            "lao" => "Laothian",
            "lit" => "Lithuanian",
            "lav" => "Latvian",
            "mlg" => "Malagasy",
            "mri" => "Maori",
            "mkd" => "Macedonian",
            "msa" => "Malay",
            "mlt" => "Maltese",
            "mon" => "Mongolian",
            "nau" => "Nauru",
            "nav" => "Navajo",
            "nde" => "Ndebele",
            "ndo" => "Ndonga",
            "nep" => "Nepali",
            "nld" => "Dutch",
            "nno" => "Norwegian Nynorsk",
            "nob" => "Norwegian Bokmål",
            "nor" => "Norwegian",
            "nya" => "Chichewa",
            "oci" => "Occitan",
            "oji" => "Ojibwa",
            "ori" => "Oriya",
            "orm" => "Oromo",
            "oss" => "Ossetian",
            "pan" => "Panjabi",
            "pli" => "Pali",
            "pol" => "Polish",
            "por" => "Portuguese",
            "pus" => "Pashto",
            "que" => "Quechua",
            "roh" => "Romansh",
            "ron" => "Romanian",
            "run" => "Rundi",
            "rus" => "Russian",
            "sag" => "Sango",
            "san" => "Sanskrit",
            "sin" => "Sinhala",
            "slk" => "Slovak",
            "slv" => "Slovenian",
            "sme" => "Northern Sami",
            "smo" => "Samoan",
            "sna" => "Shona",
            "snd" => "Sindhi",
            "som" => "Somali",
            "sot" => "Sotho",
            "sqi" => "Albanian",
            "srp" => "Serbian",
            "ssw" => "Swati",
            "sun" => "Sundanese",
            "swa" => "Swahili",
            "swe" => "Swedish",
            "tam" => "Tamil",
            "tat" => "Tatar",
            "tel" => "Telugu",
            "tgk" => "Tajik",
            "tgl" => "Tagalog",
            "tha" => "Thai",
            "tir" => "Tigrinya",
            "ton" => "Tongan",
            "tsn" => "Tswana",
            "tso" => "Tsonga",
            "tuk" => "Turkmen",
            "tur" => "Turkish",
            "twi" => "Twi",
            "uig" => "Uighur",
            "ukr" => "Ukrainian",
            "urd" => "Urdu",
            "uzb" => "Uzbek",
            "ven" => "Venda",
            "vie" => "Vietnamese",
            "vol" => "Volapük",
            "wln" => "Walloon",
            "wol" => "Wolof",
            "xho" => "Xhosa",
            "yid" => "Yiddish",
            "yor" => "Yoruba",
            "zha" => "Zhuang",
            "zho" => "Chinese",
            "zul" => "Zulu"
        ];

        if (!isset($languages[$code])) return 'Indonesian';
        return $languages[$code];
    }
}
