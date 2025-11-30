**API**
Все точки доступны по префиксу /api.

Для демо используется фиксированный пользователь (id = 1).

GET /api/available-cars
Возвращает список автомобилей, доступных текущему пользователю на указанный период.

Параметры запроса:
start_time — начало поездки (формат: YYYY-MM-DDTHH:mm:ss, например 2025-12-10T10:00:00)
end_time — окончание поездки (должно быть позже start_time)
model — (опционально) фильтр по модели автомобиля
comfort_category_id — (опционально) фильтр по категории комфорта

**Примеры запросов**
http://localhost/api/available-cars?start_time=2025-12-10T10:00:00&end_time=2025-12-10T12:00:00 - вывод всех доступных машин
http://localhost/api/available-cars?start_time=2025-12-10T10:00:00&end_time=2025-12-10T12:00:00&model=BMW - фильрация по модели
http://localhost/api/available-cars?start_time=2025-12-10T10:00:00&end_time=2025-12-10T12:00:00&comfort_category_id=2 - фильтрация по категории

{"cars":[],"message":"\u041d\u0435\u0442 \u0434\u043e\u0441\u0442\u0443\u043f\u043d\u044b\u0445 \u0430\u0432\u0442\u043e"} => "Нет доступных авто"


**POST /api/book-trip**
Бронирование авто

car_id — ID автомобиля
start_time — начало поездки
end_time — окончание поездки

**Пример запроса (только через curl)**
curl -X POST http://localhost/api/trip \
-H "Content-Type: application/json" \
-d '{
"car_id": 3,
"start_time": "2025-12-10T10:00:00",
"end_time": "2025-12-10T12:00:00"
}'
