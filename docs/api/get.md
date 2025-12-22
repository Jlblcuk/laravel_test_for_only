# GET

GET /api/available-cars  
Возвращает список автомобилей, доступных текущему пользователю на указанный период.

**Параметры запроса (в формате ISO 8601):**  
start_time — начало поездки (формат: YYYY-MM-DDTHH:mm:ss, например 2025-12-10T10:00:00)  
end_time — окончание поездки (должно быть позже start_time)  
model — (опционально) фильтр по модели автомобиля  
comfort_category_id — (опционально) фильтр по категории комфорта

**Примеры запросов**  
http://localhost/api/available-cars?start_time=2025-12-10T10:00:00&end_time=2025-12-10T12:00:00 - вывод всех доступных
машин  
http://localhost/api/available-cars?start_time=2025-12-10T10:00:00&end_time=2025-12-10T12:00:00&model=BMW - фильрация по
модели  
http://localhost/api/available-cars?start_time=2025-12-10T10:00:00&end_time=2025-12-10T12:00:00&comfort_category_id=2 -
фильтрация по категории

**json-коллекция GET и POST запросов**  
[Car_booking_API.postman_collection.json](Car_booking_API.postman_collection.json)

**json-коллекция GET-запросов:**
```json
{
    "name": "get-cars",
    "request": {
        "method": "GET",
        "header": []
    },
    "response": [
        {
            "name": "all-cars",
            "originalRequest": {
                "method": "GET",
                "header": [],
                "url": {
                    "raw": "{{base_url}}/api/available-cars?start_time=2025-12-21T10:00:00&end_time=2025-12-21T12:00:00",
                    "host": [
                        "{{base_url}}"
                    ],
                    "path": [
                        "api",
                        "available-cars"
                    ],
                    "query": [
                        {
                            "key": "start_time",
                            "value": "2025-12-21T10:00:00"
                        },
                        {
                            "key": "end_time",
                            "value": "2025-12-21T12:00:00"
                        }
                    ]
                }
            },
            "status": "OK",
            "code": 200,
            "_postman_previewlanguage": null,
            "header": [
                {
                    "key": "Server",
                    "value": "nginx/1.29.3"
                },
                {
                    "key": "Content-Type",
                    "value": "application/json"
                },
                {
                    "key": "Transfer-Encoding",
                    "value": "chunked"
                },
                {
                    "key": "Connection",
                    "value": "keep-alive"
                },
                {
                    "key": "X-Powered-By",
                    "value": "PHP/8.2.29"
                },
                {
                    "key": "Cache-Control",
                    "value": "no-cache, private"
                },
                {
                    "key": "Date",
                    "value": "Sun, 21 Dec 2025 19:10:39 GMT"
                },
                {
                    "key": "Access-Control-Allow-Origin",
                    "value": "*"
                }
            ],
            "cookie": [],
            "body": "[\n    {\n        \"id\": 4,\n        \"model\": \"Mersedes\",\n        \"number_plate\": \"T435SI\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 13,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 5,\n        \"model\": \"Toyota\",\n        \"number_plate\": \"X060JZ\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 17,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 7,\n        \"model\": \"Mersedes\",\n        \"number_plate\": \"F544GS\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 3,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 13,\n        \"model\": \"Mersedes\",\n        \"number_plate\": \"S529OZ\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 8,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 15,\n        \"model\": \"Kia\",\n        \"number_plate\": \"T028LE\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 19,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 17,\n        \"model\": \"Kia\",\n        \"number_plate\": \"U177NQ\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 4,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 18,\n        \"model\": \"Toyota\",\n        \"number_plate\": \"B558TS\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 19,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 19,\n        \"model\": \"Toyota\",\n        \"number_plate\": \"Y526LK\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 13,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 20,\n        \"model\": \"BMW\",\n        \"number_plate\": \"V194GL\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 9,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    }\n]"
        },
        {
            "name": "cars-with-model",
            "originalRequest": {
                "method": "GET",
                "header": [],
                "url": {
                    "raw": "{{base_url}}/api/available-cars?start_time=2025-12-21T10:00:00&end_time=2025-12-21T12:00:00&model=BMW",
                    "host": [
                        "{{base_url}}"
                    ],
                    "path": [
                        "api",
                        "available-cars"
                    ],
                    "query": [
                        {
                            "key": "start_time",
                            "value": "2025-12-21T10:00:00"
                        },
                        {
                            "key": "end_time",
                            "value": "2025-12-21T12:00:00"
                        },
                        {
                            "key": "model",
                            "value": "BMW"
                        }
                    ]
                }
            },
            "status": "OK",
            "code": 200,
            "_postman_previewlanguage": null,
            "header": [
                {
                    "key": "Server",
                    "value": "nginx/1.29.3"
                },
                {
                    "key": "Content-Type",
                    "value": "application/json"
                },
                {
                    "key": "Transfer-Encoding",
                    "value": "chunked"
                },
                {
                    "key": "Connection",
                    "value": "keep-alive"
                },
                {
                    "key": "X-Powered-By",
                    "value": "PHP/8.2.29"
                },
                {
                    "key": "Cache-Control",
                    "value": "no-cache, private"
                },
                {
                    "key": "Date",
                    "value": "Sun, 21 Dec 2025 19:17:33 GMT"
                },
                {
                    "key": "Access-Control-Allow-Origin",
                    "value": "*"
                }
            ],
            "cookie": [],
            "body": "[\n    {\n        \"id\": 20,\n        \"model\": \"BMW\",\n        \"number_plate\": \"V194GL\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 9,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    }\n]"
        },
        {
            "name": "cars-comfort-category",
            "originalRequest": {
                "method": "GET",
                "header": [],
                "url": {
                    "raw": "{{base_url}}/api/available-cars?start_time=2025-12-21T10:00:00&end_time=2025-12-21T12:00:00&comfort_category_id=1",
                    "host": [
                        "{{base_url}}"
                    ],
                    "path": [
                        "api",
                        "available-cars"
                    ],
                    "query": [
                        {
                            "key": "start_time",
                            "value": "2025-12-21T10:00:00"
                        },
                        {
                            "key": "end_time",
                            "value": "2025-12-21T12:00:00"
                        },
                        {
                            "key": "comfort_category_id",
                            "value": "1"
                        }
                    ]
                }
            },
            "status": "OK",
            "code": 200,
            "_postman_previewlanguage": null,
            "header": [
                {
                    "key": "Server",
                    "value": "nginx/1.29.3"
                },
                {
                    "key": "Content-Type",
                    "value": "application/json"
                },
                {
                    "key": "Transfer-Encoding",
                    "value": "chunked"
                },
                {
                    "key": "Connection",
                    "value": "keep-alive"
                },
                {
                    "key": "X-Powered-By",
                    "value": "PHP/8.2.29"
                },
                {
                    "key": "Cache-Control",
                    "value": "no-cache, private"
                },
                {
                    "key": "Date",
                    "value": "Sun, 21 Dec 2025 19:18:48 GMT"
                },
                {
                    "key": "Access-Control-Allow-Origin",
                    "value": "*"
                }
            ],
            "cookie": [],
            "body": "[\n    {\n        \"id\": 4,\n        \"model\": \"Mersedes\",\n        \"number_plate\": \"T435SI\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 13,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 5,\n        \"model\": \"Toyota\",\n        \"number_plate\": \"X060JZ\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 17,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 7,\n        \"model\": \"Mersedes\",\n        \"number_plate\": \"F544GS\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 3,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 13,\n        \"model\": \"Mersedes\",\n        \"number_plate\": \"S529OZ\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 8,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 15,\n        \"model\": \"Kia\",\n        \"number_plate\": \"T028LE\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 19,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 17,\n        \"model\": \"Kia\",\n        \"number_plate\": \"U177NQ\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 4,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 18,\n        \"model\": \"Toyota\",\n        \"number_plate\": \"B558TS\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 19,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 19,\n        \"model\": \"Toyota\",\n        \"number_plate\": \"Y526LK\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 13,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    },\n    {\n        \"id\": 20,\n        \"model\": \"BMW\",\n        \"number_plate\": \"V194GL\",\n        \"comfort_category_id\": 1,\n        \"driver_id\": 9,\n        \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"updated_at\": \"2025-12-21T15:12:57.000000Z\",\n        \"comfort_category\": {\n            \"id\": 1,\n            \"name\": \"Эконом\",\n            \"level\": 1,\n            \"created_at\": \"2025-12-21T15:12:57.000000Z\",\n            \"updated_at\": \"2025-12-21T15:12:57.000000Z\"\n        }\n    }\n]"
        },
        {
            "name": "cars-no-category",
            "originalRequest": {
                "method": "GET",
                "header": [],
                "url": {
                    "raw": "{{base_url}}/api/available-cars?start_time=2025-12-21T10:00:00&end_time=2025-12-21T12:00:00&comfort_category_id=2",
                    "host": [
                        "{{base_url}}"
                    ],
                    "path": [
                        "api",
                        "available-cars"
                    ],
                    "query": [
                        {
                            "key": "start_time",
                            "value": "2025-12-21T10:00:00"
                        },
                        {
                            "key": "end_time",
                            "value": "2025-12-21T12:00:00"
                        },
                        {
                            "key": "comfort_category_id",
                            "value": "2"
                        }
                    ]
                }
            },
            "status": "OK",
            "code": 200,
            "_postman_previewlanguage": null,
            "header": [
                {
                    "key": "Server",
                    "value": "nginx/1.29.3"
                },
                {
                    "key": "Content-Type",
                    "value": "application/json"
                },
                {
                    "key": "Transfer-Encoding",
                    "value": "chunked"
                },
                {
                    "key": "Connection",
                    "value": "keep-alive"
                },
                {
                    "key": "X-Powered-By",
                    "value": "PHP/8.2.29"
                },
                {
                    "key": "Cache-Control",
                    "value": "no-cache, private"
                },
                {
                    "key": "Date",
                    "value": "Sun, 21 Dec 2025 19:20:11 GMT"
                },
                {
                    "key": "Access-Control-Allow-Origin",
                    "value": "*"
                }
            ],
            "cookie": [],
            "body": "{\n    \"cars\": [],\n    \"message\": \"No free auto\"\n}"
        }
    ]
}
```
