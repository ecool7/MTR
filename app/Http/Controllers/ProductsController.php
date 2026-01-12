<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $categories = [
            [
                'name' => 'Integrated Circuits',
                'slug' => 'integrated-circuits',
                'description' => 'High-performance integrated circuits for microwave applications.',
            ],
            [
                'name' => 'Power Amplifiers',
                'slug' => 'power-amplifiers',
                'description' => 'Block and modular type power amplifiers with superior efficiency.',
            ],
            [
                'name' => 'Pulse Interference Generators',
                'slug' => 'pulse-interference-generators',
                'description' => 'Advanced pulse interference generators for testing and research.',
            ],
            [
                'name' => 'Circulators',
                'slug' => 'circulators',
                'description' => 'High-quality circulators for microwave systems.',
            ],
            [
                'name' => 'Quartz Resonators',
                'slug' => 'quartz-resonators',
                'description' => 'Precision quartz resonators with excellent stability.',
            ],
            [
                'name' => 'Quartz Generators',
                'slug' => 'quartz-generators',
                'description' => 'Reliable quartz generators for frequency control applications.',
            ],
        ];

        return view('products', compact('categories'));
    }

    public function integratedCircuits()
    {
        $devices = [
            [
                'id' => 'cz4552pe',
                'name' => 'CZ4552PE',
                'image' => asset('images/products/cz4552pe.jpg'),
            ],
            [
                'id' => 'mtrfa1806-32',
                'name' => 'MTRFA1806-32',
                'image' => asset('images/products/mtrfa1806-32.jpg'),
            ],
        ];

        return view('products.category', [
            'devices' => $devices,
            'categoryName' => 'Integrated Circuits',
            'categorySlug' => 'integrated-circuits'
        ]);
    }

    public function powerAmplifiers()
    {
        $devices = [
            [
                'id' => 'mtr-afr10h40-60180',
                'name' => 'MTR-AFR10H40-60180',
                'image' => asset('images/products/mtr-afr10h40-60180.jpg'),
            ],
            [
                'id' => 'mtr-afr30h45-1060',
                'name' => 'MTR-AFR30H45-1060',
                'image' => asset('images/products/mtr-afr30h45-1060.jpg'),
            ],
            [
                'id' => 'rfa20h43b',
                'name' => 'RFA20H43B',
                'image' => asset('images/products/rfa20h43b.jpg'),
            ],
            [
                'id' => 'rfa80m49a',
                'name' => 'RFA80M49A',
                'image' => asset('images/products/rfa80m49a.jpg'),
            ],
            [
                'id' => 'rfa100m50a',
                'name' => 'RFA100M50A',
                'image' => asset('images/products/rfa100m50a.jpg'),
            ],
            [
                'id' => 'rfa120m51a',
                'name' => 'RFA120M51A',
                'image' => asset('images/products/rfa120m51a.jpg'),
            ],
            [
                'id' => 'rfa10m40b-1060',
                'name' => 'RFA10M40B-1060',
                'image' => asset('images/products/rfa10m40b-1060.jpg'),
            ],
            [
                'id' => 'rfa20m43b-1060',
                'name' => 'RFA20M43B-1060',
                'image' => asset('images/products/rfa20m43b-1060.jpg'),
            ],
            [
                'id' => 'rfa50m47b-1060',
                'name' => 'RFA50M47B-1060',
                'image' => asset('images/products/rfa50m47b-1060.jpg'),
            ],
            [
                'id' => 'rfa50m47c-2560',
                'name' => 'RFA50M47C-2560',
                'image' => asset('images/products/rfa50m47c-2560.jpg'),
            ],
            [
                'id' => 'rfa20m43ac1-5060',
                'name' => 'RFA20M43AC1-5060',
                'image' => asset('images/products/rfa20m43ac1-5060.jpg'),
            ],
            [
                'id' => 'rfa08m43bc1-0727',
                'name' => 'RFA08M43BC1-0727',
                'image' => asset('images/products/rfa08m43bc1-0727.jpg'),
            ],
            [
                'id' => 'rfa10m40ac1-11-5-13-5',
                'name' => 'RFA10M40AC1-11.5/13.5',
                'image' => asset('images/products/rfa10m40ac1-11-5-13-5.jpg'),
            ],
            [
                'id' => 'rfa50m47ac1-1060',
                'name' => 'RFA50M47AC1-1060',
                'image' => asset('images/products/rfa50m47ac1-1060.jpg'),
            ],
        ];

        return view('products.category', [
            'devices' => $devices,
            'categoryName' => 'Power Amplifiers',
            'categorySlug' => 'power-amplifiers'
        ]);
    }

    public function pulseInterferenceGenerators()
    {
        $devices = [
            [
                'id' => 'mtr-src450-50b',
                'name' => 'MTR SRC450-50B',
                'image' => asset('images/products/mtr-src450-50b.jpg'),
            ],
            [
                'id' => 'mtr-src940-50b',
                'name' => 'MTR SRC940-50B',
                'image' => asset('images/products/mtr-src940-50b.jpg'),
            ],
            [
                'id' => 'mtr-src1300-50b',
                'name' => 'MTR SRC1300-50B',
                'image' => asset('images/products/mtr-src1300-50b.jpg'),
            ],
            [
                'id' => 'mtr-src1450-50b',
                'name' => 'MTR SRC1450-50B',
                'image' => asset('images/products/mtr-src1450-50b.jpg'),
            ],
            [
                'id' => 'mtr-src1620-50b',
                'name' => 'MTR SRC1620-50B',
                'image' => asset('images/products/mtr-src1620-50b.jpg'),
            ],
            [
                'id' => 'mtr-src2500-50b',
                'name' => 'MTR SRC2500-50B',
                'image' => asset('images/products/mtr-src2500-50b.jpg'),
            ],
            [
                'id' => 'mtr-src5350-50b',
                'name' => 'MTR SRC5350-50B',
                'image' => asset('images/products/mtr-src5350-50b.jpg'),
            ],
            [
                'id' => 'mtr-src5850-50b',
                'name' => 'MTR SRC5850-50B',
                'image' => asset('images/products/mtr-src5850-50b.jpg'),
            ],
        ];

        return view('products.category', [
            'devices' => $devices,
            'categoryName' => 'Pulse Interference Generators',
            'categorySlug' => 'pulse-interference-generators'
        ]);
    }

    public function circulators()
    {
        $devices = [
            [
                'id' => 'mtr-smc-5560-20cw',
                'name' => 'MTR-SMC-5560-20CW',
                'image' => asset('images/products/mtr-smc-5560-20cw.jpg'),
            ],
            [
                'id' => 'mtr-drc-2762-13cw',
                'name' => 'MTR-DRC-2762-13CW',
                'image' => asset('images/products/mtr-drc-2762-13cw.jpg'),
            ],
            [
                'id' => 'mtr-drc-2762-13acw',
                'name' => 'MTR-DRC-2762-13ACW',
                'image' => asset('images/products/mtr-drc-2762-13acw.jpg'),
            ],
            [
                'id' => 'mtr-drc-2060-12-5cw',
                'name' => 'MTR-DRC-2060-12.5CW',
                'image' => asset('images/products/mtr-drc-2060-12-5cw.jpg'),
            ],
            [
                'id' => 'mtr-drc-2060-12-5acw',
                'name' => 'MTR-DRC-2060-12.5ACW',
                'image' => asset('images/products/mtr-drc-2060-12-5acw.jpg'),
            ],
            [
                'id' => 'mtr-drc-80120-17cw',
                'name' => 'MTR-DRC-80120-17CW',
                'image' => asset('images/products/mtr-drc-80120-17cw.jpg'),
            ],
            [
                'id' => 'mtr-drc-80120-17acw',
                'name' => 'MTR-DRC-80120-17ACW',
                'image' => asset('images/products/mtr-drc-80120-17acw.jpg'),
            ],
            [
                'id' => 'mtr-drc-120180-17cw',
                'name' => 'MTR-DRC-120180-17CW',
                'image' => asset('images/products/mtr-drc-120180-17cw.jpg'),
            ],
            [
                'id' => 'mtr-drc-120180-17acw',
                'name' => 'MTR-DRC-120180-17ACW',
                'image' => asset('images/products/mtr-drc-120180-17acw.jpg'),
            ],
        ];

        return view('products.category', [
            'devices' => $devices,
            'categoryName' => 'Circulators',
            'categorySlug' => 'circulators'
        ]);
    }

    public function quartzResonators()
    {
        $devices = [
            [
                'id' => 'mtr-qr-11000',
                'name' => 'MTR-QR-11000',
                'image' => asset('images/products/mtr-qr-11000.jpg'),
            ],
            [
                'id' => 'mtr-qr-12000',
                'name' => 'MTR-QR-12000',
                'image' => asset('images/products/mtr-qr-12000.jpg'),
            ],
        ];

        return view('products.category', [
            'devices' => $devices,
            'categoryName' => 'Quartz Resonators',
            'categorySlug' => 'quartz-resonators'
        ]);
    }

    public function quartzGenerators()
    {
        $devices = [
            [
                'id' => 'mtr-qg-13000',
                'name' => 'MTR-QG-13000',
                'image' => asset('images/products/mtr-qg-13000.jpg'),
            ],
            [
                'id' => 'mtr-qg-14000',
                'name' => 'MTR-QG-14000',
                'image' => asset('images/products/mtr-qg-14000.jpg'),
            ],
        ];

        return view('products.category', [
            'devices' => $devices,
            'categoryName' => 'Quartz Generators',
            'categorySlug' => 'quartz-generators'
        ]);
    }

    public function deviceDetail($category, $deviceId)
    {
        // Все приборы по категориям
        $allDevices = [
            // Integrated Circuits
            'cz4552pe' => [
                'id' => 'cz4552pe',
                'name' => 'CZ4552PE',
                'title' => 'Integrated Circuit CZ4552PE',
                'image' => asset('images/products/cz4552pe.jpg'),
                'description' => 'High-performance integrated circuit for microwave applications.',
                'specifications' => [
                    'Model' => 'CZ4552PE',
                    'Type' => 'Integrated Circuit',
                    'Application' => 'Microwave Systems',
                ],
                'categoryName' => 'Integrated Circuits',
                'categorySlug' => 'integrated-circuits',
            ],
            'mtrfa1806-32' => [
                'id' => 'mtrfa1806-32',
                'name' => 'MTRFA1806-32',
                'title' => 'Integrated Circuit MTRFA1806-32',
                'image' => asset('images/products/mtrfa1806-32.jpg'),
                'description' => 'Advanced integrated circuit designed for high-frequency microwave applications.',
                'specifications' => [
                    'Model' => 'MTRFA1806-32',
                    'Type' => 'Integrated Circuit',
                    'Application' => 'Microwave Systems',
                ],
                'categoryName' => 'Integrated Circuits',
                'categorySlug' => 'integrated-circuits',
            ],
            // Power Amplifiers
            'mtr-afr10h40-60180' => [
                'id' => 'mtr-afr10h40-60180',
                'name' => 'MTR-AFR10H40-60180',
                'title' => 'Power Amplifier MTR-AFR10H40-60180',
                'image' => asset('images/products/mtr-afr10h40-60180.jpg'),
                'description' => 'Power amplifier for microwave applications.',
                'specifications' => [
                    'Model' => 'MTR-AFR10H40-60180',
                    'Type' => 'Power Amplifier',
                    'Category' => 'Power Amplifiers',
                ],
                'categoryName' => 'Power Amplifiers',
                'categorySlug' => 'power-amplifiers',
            ],
            'mtr-afr30h45-1060' => [
                'id' => 'mtr-afr30h45-1060',
                'name' => 'MTR-AFR30H45-1060',
                'title' => 'Power Amplifier MTR-AFR30H45-1060',
                'image' => asset('images/products/mtr-afr30h45-1060.jpg'),
                'description' => 'Power amplifier for microwave applications.',
                'specifications' => [
                    'Model' => 'MTR-AFR30H45-1060',
                    'Type' => 'Power Amplifier',
                    'Category' => 'Power Amplifiers',
                ],
                'categoryName' => 'Power Amplifiers',
                'categorySlug' => 'power-amplifiers',
            ],
            'rfa20h43b' => [
                'id' => 'rfa20h43b',
                'name' => 'RFA20H43B',
                'title' => 'Power Amplifier RFA20H43B',
                'image' => asset('images/products/rfa20h43b.jpg'),
                'description' => 'Power amplifier for microwave applications.',
                'specifications' => [
                    'Model' => 'RFA20H43B',
                    'Type' => 'Power Amplifier',
                    'Category' => 'Power Amplifiers',
                ],
                'categoryName' => 'Power Amplifiers',
                'categorySlug' => 'power-amplifiers',
            ],
            'rfa80m49a' => [
                'id' => 'rfa80m49a',
                'name' => 'RFA80M49A',
                'title' => 'Power Amplifier RFA80M49A',
                'image' => asset('images/products/rfa80m49a.jpg'),
                'description' => 'Power amplifier for microwave applications.',
                'specifications' => [
                    'Model' => 'RFA80M49A',
                    'Type' => 'Power Amplifier',
                    'Category' => 'Power Amplifiers',
                ],
                'categoryName' => 'Power Amplifiers',
                'categorySlug' => 'power-amplifiers',
            ],
            'rfa100m50a' => [
                'id' => 'rfa100m50a',
                'name' => 'RFA100M50A',
                'title' => 'Power Amplifier RFA100M50A',
                'image' => asset('images/products/rfa100m50a.jpg'),
                'description' => 'Power amplifier for microwave applications.',
                'specifications' => [
                    'Model' => 'RFA100M50A',
                    'Type' => 'Power Amplifier',
                    'Category' => 'Power Amplifiers',
                ],
                'categoryName' => 'Power Amplifiers',
                'categorySlug' => 'power-amplifiers',
            ],
            'rfa120m51a' => [
                'id' => 'rfa120m51a',
                'name' => 'RFA120M51A',
                'title' => 'Power Amplifier RFA120M51A',
                'image' => asset('images/products/rfa120m51a.jpg'),
                'description' => 'Power amplifier for microwave applications.',
                'specifications' => [
                    'Model' => 'RFA120M51A',
                    'Type' => 'Power Amplifier',
                    'Category' => 'Power Amplifiers',
                ],
                'categoryName' => 'Power Amplifiers',
                'categorySlug' => 'power-amplifiers',
            ],
            'rfa10m40b-1060' => [
                'id' => 'rfa10m40b-1060',
                'name' => 'RFA10M40B-1060',
                'title' => 'Power Amplifier RFA10M40B-1060',
                'image' => asset('images/products/rfa10m40b-1060.jpg'),
                'description' => 'Power amplifier for microwave applications.',
                'specifications' => [
                    'Model' => 'RFA10M40B-1060',
                    'Type' => 'Power Amplifier',
                    'Category' => 'Power Amplifiers',
                ],
                'categoryName' => 'Power Amplifiers',
                'categorySlug' => 'power-amplifiers',
            ],
            'rfa20m43b-1060' => [
                'id' => 'rfa20m43b-1060',
                'name' => 'RFA20M43B-1060',
                'title' => 'Power Amplifier RFA20M43B-1060',
                'image' => asset('images/products/rfa20m43b-1060.jpg'),
                'description' => 'Power amplifier for microwave applications.',
                'specifications' => [
                    'Model' => 'RFA20M43B-1060',
                    'Type' => 'Power Amplifier',
                    'Category' => 'Power Amplifiers',
                ],
                'categoryName' => 'Power Amplifiers',
                'categorySlug' => 'power-amplifiers',
            ],
            'rfa50m47b-1060' => [
                'id' => 'rfa50m47b-1060',
                'name' => 'RFA50M47B-1060',
                'title' => 'Power Amplifier RFA50M47B-1060',
                'image' => asset('images/products/rfa50m47b-1060.jpg'),
                'description' => 'Power amplifier for microwave applications.',
                'specifications' => [
                    'Model' => 'RFA50M47B-1060',
                    'Type' => 'Power Amplifier',
                    'Category' => 'Power Amplifiers',
                ],
                'categoryName' => 'Power Amplifiers',
                'categorySlug' => 'power-amplifiers',
            ],
            'rfa50m47c-2560' => [
                'id' => 'rfa50m47c-2560',
                'name' => 'RFA50M47C-2560',
                'title' => 'Power Amplifier RFA50M47C-2560',
                'image' => asset('images/products/rfa50m47c-2560.jpg'),
                'description' => 'Power amplifier for microwave applications.',
                'specifications' => [
                    'Model' => 'RFA50M47C-2560',
                    'Type' => 'Power Amplifier',
                    'Category' => 'Power Amplifiers',
                ],
                'categoryName' => 'Power Amplifiers',
                'categorySlug' => 'power-amplifiers',
            ],
            'rfa20m43ac1-5060' => [
                'id' => 'rfa20m43ac1-5060',
                'name' => 'RFA20M43AC1-5060',
                'title' => 'Power Amplifier RFA20M43AC1-5060',
                'image' => asset('images/products/rfa20m43ac1-5060.jpg'),
                'description' => 'Power amplifier for microwave applications.',
                'specifications' => [
                    'Model' => 'RFA20M43AC1-5060',
                    'Type' => 'Power Amplifier',
                    'Category' => 'Power Amplifiers',
                ],
                'categoryName' => 'Power Amplifiers',
                'categorySlug' => 'power-amplifiers',
            ],
            'rfa08m43bc1-0727' => [
                'id' => 'rfa08m43bc1-0727',
                'name' => 'RFA08M43BC1-0727',
                'title' => 'Power Amplifier RFA08M43BC1-0727',
                'image' => asset('images/products/rfa08m43bc1-0727.jpg'),
                'description' => 'Power amplifier for microwave applications.',
                'specifications' => [
                    'Model' => 'RFA08M43BC1-0727',
                    'Type' => 'Power Amplifier',
                    'Category' => 'Power Amplifiers',
                ],
                'categoryName' => 'Power Amplifiers',
                'categorySlug' => 'power-amplifiers',
            ],
            'rfa10m40ac1-11-5-13-5' => [
                'id' => 'rfa10m40ac1-11-5-13-5',
                'name' => 'RFA10M40AC1-11.5/13.5',
                'title' => 'Power Amplifier RFA10M40AC1-11.5/13.5',
                'image' => asset('images/products/rfa10m40ac1-11-5-13-5.jpg'),
                'description' => 'Power amplifier for microwave applications.',
                'specifications' => [
                    'Model' => 'RFA10M40AC1-11.5/13.5',
                    'Type' => 'Power Amplifier',
                    'Category' => 'Power Amplifiers',
                ],
                'categoryName' => 'Power Amplifiers',
                'categorySlug' => 'power-amplifiers',
            ],
            'rfa50m47ac1-1060' => [
                'id' => 'rfa50m47ac1-1060',
                'name' => 'RFA50M47AC1-1060',
                'title' => 'Power Amplifier RFA50M47AC1-1060',
                'image' => asset('images/products/rfa50m47ac1-1060.jpg'),
                'description' => 'Power amplifier for microwave applications.',
                'specifications' => [
                    'Model' => 'RFA50M47AC1-1060',
                    'Type' => 'Power Amplifier',
                    'Category' => 'Power Amplifiers',
                ],
                'categoryName' => 'Power Amplifiers',
                'categorySlug' => 'power-amplifiers',
            ],
            // Pulse Interference Generators
            'mtr-src450-50b' => [
                'id' => 'mtr-src450-50b',
                'name' => 'MTR SRC450-50B',
                'title' => 'Pulse Interference Generator MTR SRC450-50B',
                'image' => asset('images/products/mtr-src450-50b.jpg'),
                'description' => 'Pulse interference generator for electromagnetic compatibility testing and research applications.',
                'specifications' => [
                    'Model' => 'MTR SRC450-50B',
                    'Type' => 'Pulse Interference Generator',
                    'Category' => 'Pulse Interference Generators',
                ],
                'categoryName' => 'Pulse Interference Generators',
                'categorySlug' => 'pulse-interference-generators',
            ],
            'mtr-src940-50b' => [
                'id' => 'mtr-src940-50b',
                'name' => 'MTR SRC940-50B',
                'title' => 'Pulse Interference Generator MTR SRC940-50B',
                'image' => asset('images/products/mtr-src940-50b.jpg'),
                'description' => 'Pulse interference generator for electromagnetic compatibility testing and research applications.',
                'specifications' => [
                    'Model' => 'MTR SRC940-50B',
                    'Type' => 'Pulse Interference Generator',
                    'Category' => 'Pulse Interference Generators',
                ],
                'categoryName' => 'Pulse Interference Generators',
                'categorySlug' => 'pulse-interference-generators',
            ],
            'mtr-src1300-50b' => [
                'id' => 'mtr-src1300-50b',
                'name' => 'MTR SRC1300-50B',
                'title' => 'Pulse Interference Generator MTR SRC1300-50B',
                'image' => asset('images/products/mtr-src1300-50b.jpg'),
                'description' => 'Pulse interference generator for electromagnetic compatibility testing and research applications.',
                'specifications' => [
                    'Model' => 'MTR SRC1300-50B',
                    'Type' => 'Pulse Interference Generator',
                    'Category' => 'Pulse Interference Generators',
                ],
                'categoryName' => 'Pulse Interference Generators',
                'categorySlug' => 'pulse-interference-generators',
            ],
            'mtr-src1450-50b' => [
                'id' => 'mtr-src1450-50b',
                'name' => 'MTR SRC1450-50B',
                'title' => 'Pulse Interference Generator MTR SRC1450-50B',
                'image' => asset('images/products/mtr-src1450-50b.jpg'),
                'description' => 'Pulse interference generator for electromagnetic compatibility testing and research applications.',
                'specifications' => [
                    'Model' => 'MTR SRC1450-50B',
                    'Type' => 'Pulse Interference Generator',
                    'Category' => 'Pulse Interference Generators',
                ],
                'categoryName' => 'Pulse Interference Generators',
                'categorySlug' => 'pulse-interference-generators',
            ],
            'mtr-src1620-50b' => [
                'id' => 'mtr-src1620-50b',
                'name' => 'MTR SRC1620-50B',
                'title' => 'Pulse Interference Generator MTR SRC1620-50B',
                'image' => asset('images/products/mtr-src1620-50b.jpg'),
                'description' => 'Pulse interference generator for electromagnetic compatibility testing and research applications.',
                'specifications' => [
                    'Model' => 'MTR SRC1620-50B',
                    'Type' => 'Pulse Interference Generator',
                    'Category' => 'Pulse Interference Generators',
                ],
                'categoryName' => 'Pulse Interference Generators',
                'categorySlug' => 'pulse-interference-generators',
            ],
            'mtr-src2500-50b' => [
                'id' => 'mtr-src2500-50b',
                'name' => 'MTR SRC2500-50B',
                'title' => 'Pulse Interference Generator MTR SRC2500-50B',
                'image' => asset('images/products/mtr-src2500-50b.jpg'),
                'description' => 'Pulse interference generator for electromagnetic compatibility testing and research applications.',
                'specifications' => [
                    'Model' => 'MTR SRC2500-50B',
                    'Type' => 'Pulse Interference Generator',
                    'Category' => 'Pulse Interference Generators',
                ],
                'categoryName' => 'Pulse Interference Generators',
                'categorySlug' => 'pulse-interference-generators',
            ],
            'mtr-src5350-50b' => [
                'id' => 'mtr-src5350-50b',
                'name' => 'MTR SRC5350-50B',
                'title' => 'Pulse Interference Generator MTR SRC5350-50B',
                'image' => asset('images/products/mtr-src5350-50b.jpg'),
                'description' => 'Pulse interference generator for electromagnetic compatibility testing and research applications.',
                'specifications' => [
                    'Model' => 'MTR SRC5350-50B',
                    'Type' => 'Pulse Interference Generator',
                    'Category' => 'Pulse Interference Generators',
                ],
                'categoryName' => 'Pulse Interference Generators',
                'categorySlug' => 'pulse-interference-generators',
            ],
            'mtr-src5850-50b' => [
                'id' => 'mtr-src5850-50b',
                'name' => 'MTR SRC5850-50B',
                'title' => 'Pulse Interference Generator MTR SRC5850-50B',
                'image' => asset('images/products/mtr-src5850-50b.jpg'),
                'description' => 'Pulse interference generator for electromagnetic compatibility testing and research applications.',
                'specifications' => [
                    'Model' => 'MTR SRC5850-50B',
                    'Type' => 'Pulse Interference Generator',
                    'Category' => 'Pulse Interference Generators',
                ],
                'categoryName' => 'Pulse Interference Generators',
                'categorySlug' => 'pulse-interference-generators',
            ],
            // Circulators
            'mtr-smc-5560-20cw' => [
                'id' => 'mtr-smc-5560-20cw',
                'name' => 'MTR-SMC-5560-20CW',
                'title' => 'Circulator MTR-SMC-5560-20CW',
                'image' => asset('images/products/mtr-smc-5560-20cw.jpg'),
                'description' => 'High-quality circulator for microwave systems.',
                'specifications' => [
                    'Model' => 'MTR-SMC-5560-20CW',
                    'Type' => 'Circulator',
                    'Category' => 'Circulators',
                ],
                'categoryName' => 'Circulators',
                'categorySlug' => 'circulators',
            ],
            'mtr-drc-2762-13cw' => [
                'id' => 'mtr-drc-2762-13cw',
                'name' => 'MTR-DRC-2762-13CW',
                'title' => 'Circulator MTR-DRC-2762-13CW',
                'image' => asset('images/products/mtr-drc-2762-13cw.jpg'),
                'description' => 'High-quality circulator for microwave systems.',
                'specifications' => [
                    'Model' => 'MTR-DRC-2762-13CW',
                    'Type' => 'Circulator',
                    'Category' => 'Circulators',
                ],
                'categoryName' => 'Circulators',
                'categorySlug' => 'circulators',
            ],
            'mtr-drc-2762-13acw' => [
                'id' => 'mtr-drc-2762-13acw',
                'name' => 'MTR-DRC-2762-13ACW',
                'title' => 'Circulator MTR-DRC-2762-13ACW',
                'image' => asset('images/products/mtr-drc-2762-13acw.jpg'),
                'description' => 'High-quality circulator for microwave systems.',
                'specifications' => [
                    'Model' => 'MTR-DRC-2762-13ACW',
                    'Type' => 'Circulator',
                    'Category' => 'Circulators',
                ],
                'categoryName' => 'Circulators',
                'categorySlug' => 'circulators',
            ],
            'mtr-drc-2060-12-5cw' => [
                'id' => 'mtr-drc-2060-12-5cw',
                'name' => 'MTR-DRC-2060-12.5CW',
                'title' => 'Circulator MTR-DRC-2060-12.5CW',
                'image' => asset('images/products/mtr-drc-2060-12-5cw.jpg'),
                'description' => 'High-quality circulator for microwave systems.',
                'specifications' => [
                    'Model' => 'MTR-DRC-2060-12.5CW',
                    'Type' => 'Circulator',
                    'Category' => 'Circulators',
                ],
                'categoryName' => 'Circulators',
                'categorySlug' => 'circulators',
            ],
            'mtr-drc-2060-12-5acw' => [
                'id' => 'mtr-drc-2060-12-5acw',
                'name' => 'MTR-DRC-2060-12.5ACW',
                'title' => 'Circulator MTR-DRC-2060-12.5ACW',
                'image' => asset('images/products/mtr-drc-2060-12-5acw.jpg'),
                'description' => 'High-quality circulator for microwave systems.',
                'specifications' => [
                    'Model' => 'MTR-DRC-2060-12.5ACW',
                    'Type' => 'Circulator',
                    'Category' => 'Circulators',
                ],
                'categoryName' => 'Circulators',
                'categorySlug' => 'circulators',
            ],
            'mtr-drc-80120-17cw' => [
                'id' => 'mtr-drc-80120-17cw',
                'name' => 'MTR-DRC-80120-17CW',
                'title' => 'Circulator MTR-DRC-80120-17CW',
                'image' => asset('images/products/mtr-drc-80120-17cw.jpg'),
                'description' => 'High-quality circulator for microwave systems.',
                'specifications' => [
                    'Model' => 'MTR-DRC-80120-17CW',
                    'Type' => 'Circulator',
                    'Category' => 'Circulators',
                ],
                'categoryName' => 'Circulators',
                'categorySlug' => 'circulators',
            ],
            'mtr-drc-80120-17acw' => [
                'id' => 'mtr-drc-80120-17acw',
                'name' => 'MTR-DRC-80120-17ACW',
                'title' => 'Circulator MTR-DRC-80120-17ACW',
                'image' => asset('images/products/mtr-drc-80120-17acw.jpg'),
                'description' => 'High-quality circulator for microwave systems.',
                'specifications' => [
                    'Model' => 'MTR-DRC-80120-17ACW',
                    'Type' => 'Circulator',
                    'Category' => 'Circulators',
                ],
                'categoryName' => 'Circulators',
                'categorySlug' => 'circulators',
            ],
            'mtr-drc-120180-17cw' => [
                'id' => 'mtr-drc-120180-17cw',
                'name' => 'MTR-DRC-120180-17CW',
                'title' => 'Circulator MTR-DRC-120180-17CW',
                'image' => asset('images/products/mtr-drc-120180-17cw.jpg'),
                'description' => 'High-quality circulator for microwave systems.',
                'specifications' => [
                    'Model' => 'MTR-DRC-120180-17CW',
                    'Type' => 'Circulator',
                    'Category' => 'Circulators',
                ],
                'categoryName' => 'Circulators',
                'categorySlug' => 'circulators',
            ],
            'mtr-drc-120180-17acw' => [
                'id' => 'mtr-drc-120180-17acw',
                'name' => 'MTR-DRC-120180-17ACW',
                'title' => 'Circulator MTR-DRC-120180-17ACW',
                'image' => asset('images/products/mtr-drc-120180-17acw.jpg'),
                'description' => 'High-quality circulator for microwave systems.',
                'specifications' => [
                    'Model' => 'MTR-DRC-120180-17ACW',
                    'Type' => 'Circulator',
                    'Category' => 'Circulators',
                ],
                'categoryName' => 'Circulators',
                'categorySlug' => 'circulators',
            ],
            // Quartz Resonators
            'mtr-qr-11000' => [
                'id' => 'mtr-qr-11000',
                'name' => 'MTR-QR-11000',
                'title' => 'Precision Quartz Resonator MTR-QR-11000',
                'image' => asset('images/products/mtr-qr-11000.jpg'),
                'description' => 'High-precision quartz resonator with excellent frequency stability and low aging characteristics. Ideal for frequency control applications requiring long-term reliability.',
                'specifications' => [
                    'Frequency Range' => '1-100 MHz',
                    'Frequency Stability' => '±5 ppm',
                    'Aging Rate' => '< 1 ppm/year',
                    'Operating Temperature' => '-40°C to +85°C',
                    'Load Capacitance' => '18 pF',
                    'Package' => 'HC-49/U',
                ],
                'categoryName' => 'Quartz Resonators',
                'categorySlug' => 'quartz-resonators',
            ],
            'mtr-qr-12000' => [
                'id' => 'mtr-qr-12000',
                'name' => 'MTR-QR-12000',
                'title' => 'Ultra-Stable Quartz Resonator MTR-QR-12000',
                'image' => asset('images/products/mtr-qr-12000.jpg'),
                'description' => 'Ultra-stable quartz resonator with enhanced temperature compensation and minimal frequency drift for critical timing applications.',
                'specifications' => [
                    'Frequency Range' => '1-150 MHz',
                    'Frequency Stability' => '±2 ppm',
                    'Aging Rate' => '< 0.5 ppm/year',
                    'Operating Temperature' => '-40°C to +85°C',
                    'Load Capacitance' => '18 pF',
                    'Package' => 'HC-49/U',
                ],
                'categoryName' => 'Quartz Resonators',
                'categorySlug' => 'quartz-resonators',
            ],
            // Quartz Generators
            'mtr-qg-13000' => [
                'id' => 'mtr-qg-13000',
                'name' => 'MTR-QG-13000',
                'title' => 'Quartz Crystal Oscillator MTR-QG-13000',
                'image' => asset('images/products/mtr-qg-13000.jpg'),
                'description' => 'Reliable quartz crystal oscillator with excellent frequency accuracy and low phase noise. Designed for precision timing and frequency control systems.',
                'specifications' => [
                    'Frequency Range' => '1-100 MHz',
                    'Frequency Accuracy' => '±20 ppm',
                    'Phase Noise' => '< -120 dBc/Hz @ 10 kHz',
                    'Output Power' => '+3 dBm',
                    'Power Supply' => '+3.3V / 10mA',
                    'Operating Temperature' => '-40°C to +85°C',
                ],
                'categoryName' => 'Quartz Generators',
                'categorySlug' => 'quartz-generators',
            ],
            'mtr-qg-14000' => [
                'id' => 'mtr-qg-14000',
                'name' => 'MTR-QG-14000',
                'title' => 'Temperature Compensated Quartz Generator MTR-QG-14000',
                'image' => asset('images/products/mtr-qg-14000.jpg'),
                'description' => 'Temperature compensated quartz generator with advanced compensation circuitry for superior frequency stability across wide temperature ranges.',
                'specifications' => [
                    'Frequency Range' => '1-150 MHz',
                    'Frequency Accuracy' => '±10 ppm',
                    'Phase Noise' => '< -125 dBc/Hz @ 10 kHz',
                    'Output Power' => '+5 dBm',
                    'Power Supply' => '+5V / 15mA',
                    'Operating Temperature' => '-40°C to +85°C',
                ],
                'categoryName' => 'Quartz Generators',
                'categorySlug' => 'quartz-generators',
            ],
        ];

        if (!isset($allDevices[$deviceId])) {
            abort(404);
        }

        $device = $allDevices[$deviceId];
        $categoryName = $device['categoryName'];
        $categorySlug = $device['categorySlug'];

        return view('products.device-detail', compact('device', 'categoryName', 'category', 'categorySlug'));
    }
}

