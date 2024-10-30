<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Убедитесь, что у вас есть модель Contact для таблицы contacts

class ContactController extends Controller
{
    // Метод для получения всех записей из таблицы contacts
    public function index()
    {

        $contacts = Contact::all();

        // Возвращаем записи в формате JSON
        return response()->json($contacts);
    }

    // Метод для сохранения новой записи в таблицу contacts
    public function store(Request $request)
    {
        die('asd');
        // Валидация данных
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'required|string|max:15',
            'product_id' => 'required|string|max:255',
        ]);

        // Сохранение записи
        Contact::create($validated);

        // Возвращаем успешный ответ с сообщением о том, что всё окей
        return response()->json(['message' => 'Данные успешно отправлены!'], 200);
    }
}
