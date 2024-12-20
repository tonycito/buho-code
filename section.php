
<?php
return [
    'default_type' => true,
    'name' => 'Buho Code',
    'slug' => 'buho-code',
    'thumb' => 'thumb.png',
    'fields' => [
        [
            'type' => 'subsection',
            'name' => 'subsection',
            'label' => 'Introduzca código CSS, HTML o JavaScript personalizado',
            'collapse' => false
        ],
        [
            'type' => 'textarea',
            'name' => 'custom_code',
            'label' => 'Código Personalizado(Hacer click en el editor para visualizar codigo.)',
            'placeholder' => 'Escriba aquí su código personalizado...',
        ]
        ],
];

