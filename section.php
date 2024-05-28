<?php

return [
    'default_type' => true,
    'name' => 'Buho Code',
    'slug' => 'buho-code',
    'thumb' => 'thumb.png',
    'fields' => [
        [   // Subsection - Section Desctiption
            'type' => 'subsection',
            'name' => 'subsection',
            'label' => 'Introduzca texto o código HTML y JavaScript',
            'collapse' => false
        ],
        [   // Subtitle
            'type' => 'text-editor',
            'name' => 'subtitle',
            'label' => 'Información',
            'placeholder' => 'Ingresa tu codigo',
            'tooltip' => 'Agregue texto conciso para aclarar el contexto y la comprensión del usuario. Puede agregar codigo html, javascript en el icono de la izquirda.',
        ],
    ]
];
