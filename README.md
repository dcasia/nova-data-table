# Nova Data Table

[![Latest Version on Packagist](https://img.shields.io/packagist/v/digital-creative/nova-data-table)](https://packagist.org/packages/digital-creative/nova-data-table)
[![Total Downloads](https://img.shields.io/packagist/dt/digital-creative/nova-data-table)](https://packagist.org/packages/digital-creative/nova-data-table)
[![License](https://img.shields.io/packagist/l/digital-creative/nova-data-table)](https://github.com/dcasia/nova-data-table/blob/master/LICENSE)

A Laravel Nova Data Table Component 

Regular data table
![NovaDataTable in Action](https://raw.githubusercontent.com/dcasia/nova-data-table/master/screenshot1.png)

Data table with row labels
![NovaDataTable in Action](https://raw.githubusercontent.com/dcasia/nova-data-table/master/screenshot2.png)

# Installation

You can install the package via composer:

```
composer require digital-creative/nova-data-table
```

## Basic Usage

```php
class ExampleNovaResource extends Resource
{

    public function cards(Request $request)
        {
            return [
                (new NovaDataTable())
                    ->columns(
                        [
                          new Columns('Name', 'name'),
                          new Columns('Age', 'age'),
                          new Columns('Address', 'address'),
                        ]
                    )->data([
                        [
                            'name' => 'Richard Needham',
                            'address' => '9293 South Peachtree Drive Rahway, NJ 07065',
                            'age' => 18
                        ],
                        [
                            'name' => 'Cari Mckenzie',
                            'address' => '8478 Tallwood St.Far Rockaway, NY 11691',
                            'age' => 24,
                        ],
                        [
                            'name' => 'Daniella Connor',
                            'address' => '7674 Hilltop Road Mcdonough, GA 30252',
                            'age' => 33
                        ],
                        [
                            'name' => 'Lamar Mac',
                            'address' => '67 Thorne Circle New Brunswick, NJ 08901',
                            'age' => 44
                        ]
                    ])
                    ->rowLabels([
                        'Label1',
                        'Label2',
                        'Label2',
                        'Label3',
                    ])
            ];
        }

}
```


## License

The MIT License (MIT). Please see [License File](https://raw.githubusercontent.com/dcasia/nova-data-table/master/LICENSE) for more information.
