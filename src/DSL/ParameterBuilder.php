<?php

namespace PDPhilip\Elasticsearch\DSL;

class ParameterBuilder
{
    public static function matchAll(): array
    {
        return [
            'query' => [
                'match_all' => new \stdClass(),
            ],
        ];
    }
    
    
    public static function queryStringQuery($string): array
    {
        return [
            'query' => [
                'query_string' => [
                    'query' => $string,
                ],
            ],
        ];
    }
    
    public static function query($dsl): array
    {
        return [
            'query' => $dsl,
        ];
    }
    
    
    public static function fieldSort($field, $order = 'asc'): array
    {
        return [
            $field => [
                'order' => $order,
            ],
        ];
    }
    
    public static function maxAggregation($field): array
    {
        return [
            'max' => [
                'field' => $field,
            ],
        ];
    }
    
    public static function minAggregation($field): array
    {
        return [
            'min' => [
                'field' => $field,
            ],
        ];
    }
    
    public static function avgAggregation($field): array
    {
        return [
            'avg' => [
                'field' => $field,
            ],
        ];
    }
    
    public static function sumAggregation($field): array
    {
        return [
            'sum' => [
                'field' => $field,
            ],
        ];
    }
    
    public static function matrixAggregation(array $fields): array
    {
        return [
            'matrix_stats' => [
                'fields' => $fields,
            ],
        ];
    }
    
    
}