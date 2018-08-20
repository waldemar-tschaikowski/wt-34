<?php
/**
 * @author waldemar.tschaikowsk
 * @version $Id$
 */

return [
    'controllers' => [
        'FooController' => [
            'fooProvider' => 'FooProvider',
            'artikelProvider' => 'ArtikelProvider'
        ]
    ],
    'provider' => [
        'FooProvider' => function() {
            return [
                'class' => '\App\Provider\FooProvider',
                'abhaengigkeit' => [
                    'BossProvider',
                    'DatenObjektProvider'
                ]
            ];
        },
        'BossProvider' => function() {
            return [
                'class' => '\App\Provider\BossProvider',
                'abhaengigkeit' => []
            ];
        },
        'ArtikelProvider' => function() {
            return [
                'class' => '\App\Provider\ArtikelProvider',
                'abhaengigkeit' => []
            ];
        },
        'DatenObjektProvider' => function() {
            return [
                'class' => '\App\Provider\DatenObjektProvider',
                'abhaengigkeit' => []
            ];
        },
        'JsonProvider' => function() {
            return [
                'class' => '\App\Provider\JsonProvider',
                'abhaengigkeit' => []
            ];
        }
    ]
];