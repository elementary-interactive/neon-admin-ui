<?php

return [
	"actions"    => [
		"acivate"   => [
			"label" => "Kiválasztott elemek aktiválása",
		],
		"inacivate" => [
			"label" => "Kiválasztott elemek inaktiválása",
		],
	],
	"navigation" => [
		"home"      => "Kezdőlap",
		"settings"  => "Beállítások",
		"web"       => "Weboldal",
		"site"      => "Domainek",
		"menu"      => "Menük",
		"menu_item" => "Menü elemek",
		"news"      => "Hírek",
		"content"   => "Tartalmak",
		"slideshow" => "Diavetítés",
		"faq"       => "GYIK",
		"faq_category"
					=> "GYIK Kategóriák",
		"document"  => "Dokumentumok",
		"document_category"
					=> "Dokumentum kategóriák",
		"redirect"  => "Átirányítások",
	],
	"models"     => [
		"admin"      => "Adminisztrátor",
		"admins"     => "Adminisztrátorok",
		"attribute"  => "Attribútum",
		"attributes" => "Attribútumok",
		"site"       => "Oldal",
		"sites"      => "Oldalak",
		"menu"       => "Menü",
		"menus"      => "Menük",
		"news_item"  => "Hír",
		"news"       => "Hírek",
		"menu_item"  => "Menü elem",
		"menu_items" => "Menü elemek",
		"content"    => "Tartalom",
		"contents"   => "Tartalmak",
		"slideshow_item"
					 => "Diavetítés",
		"slideshow"  => "Diavetítés",
		"faq"        => "GYIK",
		"faqs"       => "GYIK",
		"faq_category"
					 => "GYIK Kategória",
		"faq_categories"
					 => "GYIK Kategóriák",
		"document"   => "Dokumentum",
		"documents"  => "Dokumentumok",
		"document_category"
					 => "Dokumentum kategória",
		"document_categories"
					 => "Dokumentum kategóriák",
		"redirect"   => "Átirányítás",
		"redirects"  => "Átirányítások",
	],
	"resources"  => [
		"generic"       => [
			"form" => [
				"tabs" => [
					"basic"         => "Általános adatok",
					"attributables" => "Kiegészítő beállítások",
				],
			],
		],
		"admins"        => "Adminisztrátorok",
		"attributables" => [
			"title" => "Változók",
			"form"  => [
				"fieldset" => [
					"name" => 'Név',
				],
				"fields"   => [
					"class"   => [
						"label" => "Erőforrás",
					],
					"name"    => [
						"label" => "Név",
					],
					"slug"    => [
						"label" => "Azonosító",
					],
					"cast_as" => [
						"label"   => "Kezelés, mint",
						"help"    => "Technikai paraméter, a változó ilyen erőforrásként lesz elmentve az adatbázisban.",
						"options" => [
							"string"  => "Szöveg",
							"integer" => "Egész szám",
							"float"   => "Lebegőpontos szám",
							"boolean" => "Logikai (igaz/hamis)",
							"array"   => "Tömb",
						],
					],
					"field"   => [
						"label"   => "Beviteli mező",
						"options" => [
							"text"    => "Szöveges beviteli mezők",
							"boolean" => "Kapcsoló",
							"select"  => "Választó lista",
						],
					],
					"rules"   => [
						"label"   => "Szabályok",
						"options" => [
							"activeUrl" => "URL",
							"alpha"     => "Csak A-Z betűk",
							"alphaDash" => "A-Z betűk és - _",
							"alphaNum"  => "Számok és betűk",
							"required"  => "Kötelező kitölteni",
							"ascii"     => "ASCII",
						],
					],
					"params"  => [
						"label" => "Paraméterek",
					],
					"slug"    => [
						"label" => "Azonosító",
					],
				],
			],
		],
		"variables"     => "Változók",
		"sites"         => [
			"title" => "Oldal",
			"table" => [],
			"form"  => [
				"fields"   => [
					"locale"     => [
						"label" => "Lokalizáció",
					],
					"domains"    => [
						"label"       => "Domainek",
						"placeholder" => "Domain hozzáadása http vagy https nélkül.",
						"help"        => "Minden, ez alá a domain alá bekötött elem csak erről a daomainről lesz elérhető.",
						"new"         => "Új domain hozzáadaása",
					],
					"prefixes"   => [
						"label"       => "Csoportok",
						"placeholder" => "Csoport hozzáadása.",
						"help"        => "Any kind of items under this site will be accessible only on these prefixes.",
						"new"         => "Új csoport hozzáadása.",
					],
					"is_default" => [
						"label" => "Alapértelmezett?",
					],
					"title"      => [
						"label" => "Név",
					],
					"slug"       => [
						"label" => "Azonosító",
					],
				],
				"fieldset" => [
					"name" => "Név",
				],
			],
		],
		"menu"          => [
			"title" => "Menu",
			"table" => [],
			"form"  => [
				"fieldset" => [
					"name" => 'Név',
				],
				"fields"   => [
					"title"  => [
						"label" => "Név",
					],
					"slug"   => [
						"label" => "Azonosító",
					],
					"site"   => [
						"label" => "Weboldal",
					],
					"status" => [
						"label" => "Státusz",
					],
				],
			],
		],
		"content"       => [
			"title" => "Tartalmak",
			"table" => [
				'tabs' => [
					'all'     => 'Összes',
					'new'     => 'Új',
					'live'    => 'Publikus',
					'pinned'  => 'Kitűzött',
					'archive' => 'Arhív',
				],
			],
			"form"  => [
				"tabs"     => [
					"content" => 'Tartalmak',
				],
				"filters"  => [
					"is_active"    => "Aktív?",
					"is_published" => "Publikálva?",
				],
				"fieldset" => [
					"name"       => "Elnevezés",
					"publishing" => "Publikálási beállítások",
					"og_data"    => "Megosztási beállítások",
				],
				"fields"   => [
					"title"          => [
						"label" => "Cím",
					],
					"slug"           => [
						"label" => "Link",
					],
					"header_image"   => [
						"label" => "Fejléc kép",
					],
					"lead"           => [
						"label" => "Lead",
					],
					"is_index"       => [
						"label" => "Főoldal",
					],
					"content"        => [
						"label"   => "Tartalom",
						"new"     => "Új blokk hozzáadása",
						"heading" => [
							"label"   => "Fejléc",
							"options" => [
								"h1" => "1-es szintű fejléc",
								"h2" => "2-es szintű fejléc",
								"h3" => "3-as szintű fejléc",
								"h4" => "4-es szintű fejléc",
								"h5" => "5-ös szintű fejléc",
								"h6" => "6-os szintű fejléc",
							],
							"padding" => [
								'padding0' => 'nincs eltartás',
								'padding1' => 'kis eltartás',
								'padding2' => 'közepes eltartás',
								'padding3' => 'nagy eltartás',
								'padding4' => 'teljes eltartás',
							],
						],
					],
					"content_image"  => [
						"label" => "Képek",
					],
					"og_title"       => [
						"label" => "Cím",
					],
					"og_image"       => [
						"label" => "Kép",
					],
					"og_description" => [
						"label" => "Leírás",
					],
					"site"           => [
						"label" => "Weboldal",
					],
					"tags"           => [
						"label" => "Címkék",
					],
					"pinned"         => [
						"label" => "Kitűzés",
					],
					"status"         => [
						"label" => "Státusz",
					],
					"published_at"   => [
						"label" => "Publikálva",
					],
					"expired_at"     => [
						"label" => "Lejár",
					],
				],
			],
		],
		"news"          => [
			"title" => "Hírek",
			"table" => [
				'tabs' => [
					'all'     => 'Összes',
					'new'     => 'Új',
					'live'    => 'Publikus',
					'pinned'  => 'Kitűzött',
					'archive' => 'Arhív',
				],
			],
			"form"  => [
				"filters"  => [
					"is_active"    => "Aktív?",
					"is_published" => "Publikálva?",
				],
				"fieldset" => [
					"publishing" => "Publikálási beállítások",
				],
				"fields"   => [
					"title"         => [
						"label" => "Cím",
					],
					"slug"          => [
						"label" => "Link",
					],
					"header_image"  => [
						"label" => "Fejléc kép",
					],
					"lead"          => [
						"label" => "Lead",
					],
					"content"       => [
						"label" => "Tartalom",
					],
					"content_image" => [
						"label" => "Képek",
					],
					"site"          => [
						"label" => "Weboldal",
					],
					"status"        => [
						"label" => "Státusz",
					],
					"tags"          => [
						"label" => "Címkék",
					],
					"pinned"        => [
						"label" => "Kitűzés",
					],
					"published_at"  => [
						"label" => "Publikálva",
					],
					"expired_at"    => [
						"label" => "Lejár",
					],
					"meta"          => [
						"label" => "Metaadatok",
					],
				],
			],
		],
		"slideshow"     => [
			"title"  => "Diavetítés",
			"table"  => [
				'tabs' => [
					'all'     => 'Összes',
					'new'     => 'Új',
					'live'    => 'Élő',
					'archive' => 'Archív',
				],
			],
			"form"   => [
				"fieldset" => [
					"publishing" => "Láthatóság",
					"items"      => "Elemek",
					"add_items"  => "Dia hozzáadása",
				],
				"fields"   => [
					"title"        => [
						"label" => "Cím",
					],
					"site"         => [
						"label" => "Domain",
					],
					"items"        => [
						"label" => "Elemek",
					],
					"items_media"  => [
						"label" => "Az elemhez tartotó média",
					],
					"status"       => [
						"label" => "Státusz",
					],
					"published_at" => [
						"label" => "Publikálás dátuma",
					],
					"expired_at"   => [
						"label" => "Lejárat dátuma",
					],
				],
			],
			"blocks" => [
				"slideshow_block" => [
					"label"     => "Diavetítés",
					"slideshow" => [
						"label" => "Diavetítés kiválasztása",
						"help"  => "A kiválasztott diavetítés fog megjelenni az oldalon, amennyiben a megjelenése lehetséges.",
					],
				],
			],
		],
		"slideshow_items"
						=> [
			"form" => [
				"fieldset" => [
					"items" => [
						"label"  => "Diák",
						"button" => "Dia hozzáadása",
					],
				],
				"fields"   => [
					"title"    => [
						"label" => "Cím",
						"help"  => "Címsor a dián. Hagyd üresen, ha csak a képet szeretnéd megjeleníteni.",
					],
					"lead"     => [
						"label" => "Szöveg",
					],
					"media"    => [
						"label" => "Kép",
					],
					"cta_text" => [
						"label" => "Gomb szövege",
						"help"  => "A CTA gomb szövege. Csak a CTA linkkel együtt hozzák létre a gombot.",
					],
					"cta_link" => [
						"label" => "Gomb linkje",
						"help"  => "Ide fog vezetni a CTA gomb, a link szövege a CTA gomb szövege lesz.",
					],
					"status"   => [
						"label" => "Státusz",
					],
				],
			],
		],
		"faq"           => [
			"form" => [
				"fields" => [
					"category"     => [
						"label" => "GYIK Kategória",
					],
					"question"     => [
						"label" => "Kérdés",
					],
					"answer"       => [
						"label" => "Válasz",
					],
					"media"        => [
						"label" => "Média",
					],
					"status"       => [
						"label" => "Státusz",
					],
					"published_at" => [
						"label" => "Publikálva",
					],
					"expired_at"   => [
						"label" => "Lejárat",
					],
				],
				"schema" => [
					"publishing" => [
						"label" => "Publikálás beállításai",
					],
				],
			],
		],
		"faq_category"  => [
			"form" => [
				"fields" => [
					"site"         => [
						"label" => "Domain",
					],
					"title"        => [
						"label" => "Cím",
					],
					"slug"         => [
						"label" => "URL",
					],
					"media"        => [
						"label" => "Média",
					],
					"lead"         => [
						"label" => "Lead",
					],
					"status"       => [
						"label" => "Státusz",
					],
					"published_at" => [
						"label" => "Publikálva",
					],
					"expired_at"   => [
						"label" => "Lejár",
					],
				],
				"schema" => [
					"publishing" => [
						"label" => "Publikálás beállításai",
					],
				],
			],
		],
		"document"      => [
			"form" => [
				"fields" => [
					"category"     => [
						"label" => "Kategória",
					],
					"title"        => [
						"label" => "Cím",
					],
					"document_original_name"
								   => [
						"label" => "Eredeti név",
					],
					"path"         => [
						"label"  => "Elérési út",
						"copied" => "Elérési út a vágólapra másolva!",
					],
					"description"  => [
						"label" => "Meghatározás",
					],
					"document"     => [
						"label" => "Dokumentum",
					],
					"status"       => [
						"label" => "Státusz",
					],
					"published_at" => [
						"label" => "Publikálva",
					],
					"expired_at"   => [
						"label" => "Lejár",
					],
				],
				"schema" => [
					"publishing" => [
						"label" => "Publikálás beállításai",
					],
				],
			],
		],
		"document_category"
						=> [
			"form" => [
				"fields" => [
					"site"         => [
						"label" => "Domain",
					],
					"title"        => [
						"label" => "Cím",
					],
					"slug"         => [
						"label" => "URL",
					],
					"media"        => [
						"label" => "Média",
					],
					"lead"         => [
						"label" => "Lead",
					],
					"status"       => [
						"label" => "Státusz",
					],
					"published_at" => [
						"label" => "Publikálva",
					],
					"expired_at"   => [
						"label" => "Lejár",
					],
				],
				"schema" => [
					"publishing" => [
						"label" => "Publikálás beállításai",
					],
				],
			],
		],
		"redirect"      => [
			"form" => [
				"fields" => [
					"to"   => [
						"label" => "Honnan",
					],
					"from" => [
						"label" => "Hova",
					],
				],
			],
		],
	],
];
