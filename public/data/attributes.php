<!-- La Dummy Data va aqui-->

<?php
// Navbar
$subMenuLinks = [
  [
    "title" => "Tortas personalizadas",
    "url" => "tortas-personalizadas",
  ],
  [
    "title" => "Tortas masa elástica",
    "url" => "tortas-elastica",
  ],
  [
    "title" => "Tortas temáticas",
    "url" => "tortas-tematicas"
  ],
  [
    "title" => "Tortas tradicionales",
    "url" => "tortas-tradicionales"
  ],
];

// Section Hero - Home
$data_hero = [
  [
    "title" => "No vendemos pasteles<span>, vendemos felicidad</span>",
    "link" => "tortas-personalizadas",
    "img" => "home/hero/hero-1.png",
    "alt" => "img"
  ],
  [
    "title" => "No vendemos pasteles<span>, vendemos felicidad</span>",
    "link" => "tortas-personalizadas",
    "img" => "home/hero/hero-2.png",
    "alt" => "img"
  ],
  [
    "title" => "No vendemos pasteles<span>, vendemos felicidad</span>",
    "link" => "tortas-personalizadas",
    "img" => "home/hero/hero-3.png",
    "alt" => "img"
  ],
  [
    "title" => "No vendemos pasteles<span>, vendemos felicidad</span>",
    "link" => "tortas-personalizadas",
    "img" => "home/hero/hero-4.png",
    "alt" => "img"
  ]
];

// Section Favorites - Home
// OJO: SOLO ES DE PRUEBA, ESTO SE DEBE OBTENER DE LA BASE DE DATOS Y FILTRAR LOS PRODUCTOS QUE SEAN FavoriteS
$favorites = [
  [
    "image" => "home/favorites/Torta de chocolate.svg",
    "cardTitle" => "Torta de chocolate",
    "price" => 60,
    "alt" => "torta de chocolate"
  ],
  [
    "image" => "home/favorites/Torta personalizada.svg",
    "cardTitle" => "Tortas personalizadas",
    "price" => 150,
    "alt" => "torta personalizada"
  ],
  [
    "image" => "home/favorites/Torta de arandanos.svg",
    "cardTitle" => "Torta de arándanos",
    "price" => 55,
    "alt" => "torta de arándanos"
  ],
  [
    "image" => "home/favorites/Carrot Cake.svg",
    "cardTitle" => "Carrot Cake",
    "price" => 85,
    "alt" => "carrot cake"
  ]
];

// Section Nuestras Tortas - Home
$our_cakes = [
  [
    "image" => "home/our-cakes/Tortas Personalizadas.svg",
    "cardTitle" => "Tortas Personalizadas",
    "alt" => "imagen de torta personalizada",
    "linkPage" => "tortas-personalizadas"
  ],
  [
    "image" => "home/our-cakes/Tortas Tematicas.svg",
    "cardTitle" => "Tortas Temáticas",
    "alt" => "imagen de torta con temática",
    "linkPage" => "tortas-tematicas"
  ],
  [
    "image" => "home/our-cakes/Tortas de masa elastica.svg",
    "cardTitle" => "Tortas de masa elástica",
    "alt" => "imagen de torta elática",
    "linkPage" => "tortas-elastica"
  ],
  [
    "image" => "home/our-cakes/Tortas Tradicionales.svg",
    "cardTitle" => "Tortas tradicionales",
    "alt" => "imagen de torta tradicional",
    "linkPage" => "tortas-tradicionales"
  ],

];
// Section Galeria - Home
$gallery = [
  [
    "image" => "/public/img/home/gallery/cake-1.svg",
    "alt" => "torta de 2 pisos"
  ],
  [
    "image" => "/public/img/home/gallery/cup-cake-1.svg",
    "alt" => "cupcakes"
  ],
  [
    "image" => "/public/img/home/gallery/cake-2.svg",
    "alt" => "torta con tematica"
  ],
  [
    "image" => "/public/img/home/gallery/cake-3.svg",
    "alt" => "torta de masa elastica"
  ],
  [
    "image" => "/public/img/home/gallery/snacks-1.svg",
    "alt" => "bocaditos"
  ],
  [
    "image" => "/public/img/home/gallery/snacks-2.svg",
    "alt" => "bocadito forma de corazón y angel"
  ],
  [
    "image" => "/public/img/home/gallery/cup-cake-2.svg",
    "alt" => "cupcakes"
  ],
  [
    "image" => "/public/img/home/gallery/cake-4.svg",
    "alt" => "torta de maqueta"
  ],
];

// Section Nuestro Equipo - Nosotros
$our_team = [
  [
    "image" => "about-us/our-team/our-team-1.svg",
    "imageMobile" => "about-us/our-team/our-team-1.svg",
    "title" => "Lorem ipsum",
    "subtitle" => "Lorem ipsum dolor sit amet",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
  ],
  [
    "image" => "about-us/our-team/our-team-1.svg",
    "imageMobile" => "about-us/our-team/our-team-1.svg",
    "title" => "Lorem ipsum",
    "subtitle" => "Lorem ipsum dolor sit amet",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
  ],
  [
    "image" => "about-us/our-team/our-team-1.svg",
    "imageMobile" => "about-us/our-team/our-team-1.svg",
    "title" => "Lorem ipsum",
    "subtitle" => "Lorem ipsum dolor sit amet",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
  ],

];

$traditionalCakes = [
  [
    "title" => "Torta 3 Leches de Chocolate",
    "slug" => "torta-3-leches-de-chocolate",
    "id_category" => "tortas-tradicionales",
    "isNew" => false,
    "titleDetail" => "Torta <span>3 Leches de Chocolate</span>",
    "image" => [
      "src" => [
        "movil" => "cakes/traditional-cakes/3-leches-chocolate.png",
        "desktop" => "cakes/traditional-cakes/3-leches-chocolate.png",
      ],
      "alt" => "Torta 3 Leches de Chocolate"
    ],
    "description" => "Keke artesanal de chocolate, humedecido en 3 leches (fresca, evaporada, condensada) y relleno de manjar.",
    "prices" => [
      [
        "size" => "Pequeño",
        "price" => 65
      ],
      [
        "size" => "Mediano",
        "price" => 75
      ],
      [
        "size" => "Grande",
        "price" => 85
      ],
    ]
  ],
  [
    "title" => "Torta 3 Leches de Vainilla",
    "slug" => "torta-3-leches-de-vainilla",
    "id_category" => "tortas-tradicionales",
    "isNew" => false,
    "titleDetail" => "Torta <span>3 Leches de Vainilla</span>",
    "image" => [
      "src" => [
        "movil" => "cakes/traditional-cakes/3-leches-vainillas.png",
        "desktop" => "cakes/traditional-cakes/3-leches-vainillas.png",
      ],
      "alt" => "Torta 3 Leches de Vainilla"
    ],
    "description" => "Bizcocho artesanal de vainilla, humedecido en 3 leches (fresca, evaporada, condensada) y relleno de manjar.",
    "prices" => [
      [
        "size" => "Pequeño",
        "price" => 60
      ],
      [
        "size" => "Mediano",
        "price" => 70
      ],
      [
        "size" => "Grande",
        "price" => 80
      ],
    ]
  ],
  [
    "title" => "Torta 3 Leches de Lúcuma",
    "slug" => "torta-3-leches-de-lucuma",
    "id_category" => "tortas-tradicionales",
    "isNew" => false,
    "titleDetail" => "Torta <span>3 Leches de Lúcuma</span>",
    "image" => [
      "src" => [
        "movil" => "cakes/traditional-cakes/selva-negra.png",
        "desktop" => "cakes/traditional-cakes/selva-negra.png",
      ],
      "alt" => "Torta 3 Leches de Lucuma"
    ],
    "description" => "Bizcocho artesanal de vainilla, humedecido en 3 leches (fresca, evaporada, condensada) y relleno de manjar y bañado con crema de lúcuma.",
    "prices" => [
      [
        "size" => "Pequeño",
        "price" => 65
      ],
      [
        "size" => "Mediano",
        "price" => 75
      ],
      [
        "size" => "Grande",
        "price" => 85
      ],
    ]
  ],
  [
    "title" => "Torta Delicia de Fresa",
    "slug" => "torta-delicia-fresa",
    "id_category" => "tortas-tradicionales",
    "isNew" => false,
    "titleDetail" => "Torta <span>Delicia de Fresa</span>",
    "image" => [
      "src" => [
        "movil" => "cakes/traditional-cakes/delicia-fresa.png",
        "desktop" => "cakes/traditional-cakes/delicia-fresa.png",
      ],
      "alt" => "Torta Delicia de Fresa"
    ],
    "description" => "Bizcocho artesanal de vainilla relleno con crema de manjar y confite de fresas de la casa, decorado con frutas frescas.",
    "prices" => [
      [
        "size" => "Pequeño",
        "price" => 55
      ],
      [
        "size" => "Mediano",
        "price" => 65
      ],
      [
        "size" => "Grande",
        "price" => 75
      ],
    ]
  ],
  [
    "title" => "Torta Delicia de Arándanos",
    "slug" => "torta-delicia-arandanos",
    "id_category" => "tortas-tradicionales",
    "isNew" => true,
    "titleDetail" => "Torta <span>Delicia de Arándanos</span>",
    "image" => [
      "src" => [
        "movil" => "cakes/traditional-cakes/arandanos.png",
        "desktop" => "cakes/traditional-cakes/arandanos.png",
      ],
      "alt" => "Torta Delicia de Arándanos"
    ],
    "description" => "Bizcocho de vainilla relleno de nuestro confite de arándanos y crema de arándanos, decorado con frutas naturales.",
    "prices" => [
      [
        "size" => "Pequeño",
        "price" => 55
      ],
      [
        "size" => "Mediano",
        "price" => 65
      ],
      [
        "size" => "Grande",
        "price" => 75
      ],
    ]
  ],
  [
    "title" => "Torta Delicia de Durazno",
    "slug" => "torta-delicia-durazno",
    "id_category" => "tortas-tradicionales",
    "isNew" => false,
    "titleDetail" => "Torta <span>Delicia de Durazno</span>",
    "image" => [
      "src" => [
        "movil" => "cakes/traditional-cakes/selva-negra.png",
        "desktop" => "cakes/traditional-cakes/selva-negra.png",
      ],
      "alt" => "Torta Delicia de Durazno"
    ],
    "description" => "Bizcocho artesanal de vainilla relleno con crema de manjar y confite de durazno en mitades, decorado con frutas frescas.",
    "prices" => [
      [
        "size" => "Pequeño",
        "price" => 55
      ],
      [
        "size" => "Mediano",
        "price" => 65
      ],
      [
        "size" => "Grande",
        "price" => 75
      ],
    ]
  ],
  [
    "title" => "Torta Delicia de Guanabana",
    "slug" => "torta-delicia-guanabana",
    "id_category" => "tortas-tradicionales",
    "isNew" => false,
    "titleDetail" => "Torta <span>Delicia de Guanabana</span>",
    "image" => [
      "src" => [
        "movil" => "cakes/traditional-cakes/selva-negra.png",
        "desktop" => "cakes/traditional-cakes/selva-negra.png",
      ],
      "alt" => "Torta Delicia de Guanabana"
    ],
    "description" => "Bizcocho de vainilla, relleno con pulpa de guanabana fresca y decorado con fruta natural.",
    "prices" => [
      [
        "size" => "Pequeño",
        "price" => 55
      ],
      [
        "size" => "Mediano",
        "price" => 65
      ],
      [
        "size" => "Grande",
        "price" => 75
      ],
    ]
  ],
  [
    "title" => "Torta de Chocolate",
    "slug" => "torta-chocolate",
    "id_category" => "tortas-tradicionales",
    "isNew" => false,
    "titleDetail" => "Torta <span>de Chocolate</span>",
    "image" => [
      "src" => [
        "movil" => "cakes/traditional-cakes/torta-chocolate.png",
        "desktop" => "cakes/traditional-cakes/torta-chocolate.png",
      ],
      "alt" => "Torta de Chocolate"
    ],
    "description" => "Keke artesanal de chocolate, relleno de manjar casero y decorado con trozos de chocolate bitter.",
    "prices" => [
      [
        "size" => "Pequeño",
        "price" => 60
      ],
      [
        "size" => "Mediano",
        "price" => 70
      ],
      [
        "size" => "Grande",
        "price" => 80
      ],
    ]
  ],
  [
    "title" => "Torta Selva Negra",
    "slug" => "torta-selva-negra",
    "id_category" => "tortas-tradicionales",
    "isNew" => false,
    "titleDetail" => "Torta <span>Selva Negra</span>",
    "image" => [
      "src" => [
        "movil" => "cakes/traditional-cakes/selva-negra.png",
        "desktop" => "cakes/traditional-cakes/selva-negra.png",
      ],
      "alt" => "Torta Selva Negra"
    ],
    "description" => "Keke artesanal de chocolate, relleno de confite de fresas de la casa, manjar casero y decorado con trozos de chocolate bitter.",
    "prices" => [
      [
        "size" => "Pequeño",
        "price" => 55
      ],
      [
        "size" => "Mediano",
        "price" => 65
      ],
      [
        "size" => "Grande",
        "price" => 75
      ],
    ]
  ],
  [
    "title" => "Torta Moka",
    "slug" => "torta-moka",
    "id_category" => "tortas-tradicionales",
    "isNew" => false,
    "titleDetail" => "Torta <span>Moka</span>",
    "image" => [
      "src" => [
        "movil" => "cakes/traditional-cakes/selva-negra.png",
        "desktop" => "cakes/traditional-cakes/selva-negra.png",
      ],
      "alt" => "Torta Moka"
    ],
    "description" => "Keke de chocolate artesanal, relleno en crema de café y fudge.",
    "prices" => [
      [
        "size" => "Pequeño",
        "price" => 55
      ],
      [
        "size" => "Mediano",
        "price" => 65
      ],
      [
        "size" => "Grande",
        "price" => 75
      ],
    ]
  ],
  [
    "title" => "Torta Oreo",
    "slug" => "torta-oreo",
    "id_category" => "tortas-tradicionales",
    "isNew" => false,
    "titleDetail" => "Torta <span>Oreo</span>",
    "image" => [
      "src" => [
        "movil" => "cakes/traditional-cakes/selva-negra.png",
        "desktop" => "cakes/traditional-cakes/selva-negra.png",
      ],
      "alt" => "Torta Oreo"
    ],
    "description" => "Keke de chocolate artesanal, relleno en crema de oreo con trozos de galleta y fudge",
    "prices" => [
      [
        "size" => "Pequeño",
        "price" => 55
      ],
      [
        "size" => "Mediano",
        "price" => 65
      ],
      [
        "size" => "Grande",
        "price" => 75
      ],
    ]
  ],
  [
    "title" => "Torta Helada",
    "slug" => "torta-helada",
    "id_category" => "tortas-tradicionales",
    "isNew" => false,
    "titleDetail" => "Torta <span>Helada</span>",
    "image" => [
      "src" => [
        "movil" => "cakes/traditional-cakes/torta-helada.png",
        "desktop" => "cakes/traditional-cakes/torta-helada.png",
      ],
      "alt" => "Torta Helada"
    ],
    "description" => "Bizcocho artesanal sabor vainilla, relleno de gelatina",
    "prices" => [
      [
        "size" => "Pequeño",
        "price" => 50
      ],
      [
        "size" => "Mediano",
        "price" => 60
      ],
      [
        "size" => "Grande",
        "price" => 70
      ],
    ]
  ],
  [
    "title" => "Torta Alemana",
    "slug" => "torta-alemana",
    "id_category" => "tortas-tradicionales",
    "isNew" => false,
    "titleDetail" => "Torta <span>Alemana</span>",
    "image" => [
      "src" => [
        "movil" => "cakes/traditional-cakes/selva-negra.png",
        "desktop" => "cakes/traditional-cakes/selva-negra.png",
      ],
      "alt" => "Torta Alemana"
    ],
    "description" => "Keke artesanal de chocolate, relleno de merengue italiano, cerezas y bañado en chocolate bitter.",
    "prices" => [
      [
        "size" => "Pequeño",
        "price" => 50
      ],
      [
        "size" => "Mediano",
        "price" => 60
      ],
      [
        "size" => "Grande",
        "price" => 70
      ],
    ]
  ],
];

// Para obtener un producto en especifico por el slug que se le pase
$allProducts = array_merge(
  $traditionalCakes,
);
?>

<?php
$pages = [
  [
    "slug" => "tortas-personalizadas",
    "title" => "Nuestras Tortas Personalizadas",
    "titleDetail" => "Nuestras <span>Tortas Personalizadas</span>",
    "products" => $traditionalCakes // $tortasPersonalizadas
  ],
  [
    "slug" => "tortas-tematicas",
    "title" => "Nuestras Tortas Temáticas",
    "titleDetail" => "Nuestras <span>Tortas Temáticas</span>",
    "products" => $traditionalCakes // $tortasTematicas
  ],
  [
    "slug" => "tortas-elastica",
    "title" => "Nuetsras Tortas de masa Elástica",
    "titleDetail" => "Nuestras <span>Tortas de masa Elástica</span>",
    "products" => $traditionalCakes // $tortasMasaElastica
  ],
  [
    "slug" => "tortas-tradicionales",
    "title" => "Nuestras Tortas Tradicionales",
    "titleDetail" => "Nuestras <span>Tortas Tradicionales</span>",
    "products" => $traditionalCakes
  ],
  [
    "slug" => "postres",
    "title" => "Nuestros Postres",
    "titleDetail" => "Nuestros <span>Postres</span>",
    "products" => $traditionalCakes // $postres
  ],
  [
    "slug" => "bocaditos",
    "title" => "Nuestros Bocaditos",
    "titleDetail" => "Nuestros <span>Bocaditos</span>",
    "products" => $traditionalCakes // $bocaditos
  ],
  [
    "slug" => "panes",
    "title" => "Nuestros Panes",
    "titleDetail" => "Nuestros <span>Panes</span>",
    "products" => $traditionalCakes // $panes
  ],
]
?>