# POST

POST /api/book-trip  
Бронирование авто

**Параметры запроса:**  
car_id — ID автомобиля  
start_time — начало поездки  
end_time — окончание поездки  

**json-коллекция GET и POST запросов**  
[api/Car_booking_API.postman_collection.json](api/Car_booking_API.postman_collection.json)

**json-коллекция POST-запросов:**
```json
{
    "name": "post-book",
    "request": {
        "method": "GET",
        "header": []
    },
    "response": [
        {
            "name": "book-trip-nat-available",
            "originalRequest": {
                "method": "POST",
                "header": [
                    {
                        "key": "Content-Type",
                        "value": "application/json",
                        "type": "text"
                    }
                ],
                "body": {
                    "mode": "raw",
                    "raw": "{\r\n\"car_id\": 1,\r\n\"start_time\": \"2025-12-21T10:00:00\",\r\n\"end_time\": \"2025-12-21T12:00:00\"\r\n}",
                    "options": {
                        "raw": {
                            "language": "json"
                        }
                    }
                },
                "url": {
                    "raw": "{{base_url}}/api/trip",
                    "host": [
                        "{{base_url}}"
                    ],
                    "path": [
                        "api",
                        "trip"
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
                    "value": "Sun, 21 Dec 2025 18:46:25 GMT"
                },
                {
                    "key": "Access-Control-Allow-Origin",
                    "value": "*"
                }
            ],
            "cookie": [],
            "body": "{\n    \"error\": \"This car is not available for your position\"\n}"
        },
        {
            "name": "auto-not-free",
            "originalRequest": {
                "method": "POST",
                "header": [
                    {
                        "key": "Content-Type",
                        "value": "application/json",
                        "type": "text"
                    }
                ],
                "body": {
                    "mode": "raw",
                    "raw": "{\r\n\"car_id\": 3,\r\n\"start_time\": \"2025-12-21T10:00:00\",\r\n\"end_time\": \"2025-12-21T12:00:00\"\r\n}",
                    "options": {
                        "raw": {
                            "language": "json"
                        }
                    }
                },
                "url": {
                    "raw": "{{base_url}}/api/trip",
                    "host": [
                        "{{base_url}}"
                    ],
                    "path": [
                        "api",
                        "trip"
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
                    "value": "Sun, 21 Dec 2025 19:24:08 GMT"
                },
                {
                    "key": "Access-Control-Allow-Origin",
                    "value": "*"
                }
            ],
            "cookie": [],
            "body": "{\n    \"error\": \"The car is already booked for this time\"\n}"
        },
        {
            "name": "trip-add",
            "originalRequest": {
                "method": "POST",
                "header": [
                    {
                        "key": "Content-Type",
                        "value": "application/json",
                        "type": "text"
                    }
                ],
                "body": {
                    "mode": "raw",
                    "raw": "{\r\n\"car_id\": 4,\r\n\"start_time\": \"2025-12-21T10:00:00\",\r\n\"end_time\": \"2025-12-21T12:00:00\"\r\n}",
                    "options": {
                        "raw": {
                            "language": "json"
                        }
                    }
                },
                "url": {
                    "raw": "{{base_url}}/api/trip",
                    "host": [
                        "{{base_url}}"
                    ],
                    "path": [
                        "api",
                        "trip"
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
                    "value": "Sun, 21 Dec 2025 19:24:08 GMT"
                },
                {
                    "key": "Access-Control-Allow-Origin",
                    "value": "*"
                }
            ],
            "cookie": [],
            "body": "{\n    \"error\": \"The car is already booked for this time\"\n}"
        }
    ]
}
```
