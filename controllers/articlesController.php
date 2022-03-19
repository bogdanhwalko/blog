<?php


function articles_index()
{
    //Получаем весь текст из файла 'db.txt'
    $text = file_get_contents('db.txt');
    //Разделяем статьи в масив по разделителю '-*-'
    $items = explode('-*-', $text);

    //Определяем категорию
    $category = 'популярные';
    if (isset($_GET['catg'])) {
        $category = $_GET['catg'];
    }

    $result = [];
    foreach ($items as $item) {
        //Разделяем данные одной статьи id категорию и текст
        $article = explode('|', $item);

        //Отбор по категориям
        if ($category === 'популярные' || $article['1'] === $category) {
            //Формируем конечный масив со статьями
            $result[] = [
                'id' => $article['0'],
                'category' => $article['1'],
                'text' => $article['2']
            ];
        }
    }

    //Передаем данные в шаблон
    return ['articles' => $result, 'category' => $category];
}


function articles_view()
{
    $id = $_GET['id'];

    $text = file_get_contents('db.txt');
    $items = explode('-*-', $text);

    $result = NULL;
    foreach ($items as $item) {
        $article = explode('|', $item);

        if ($id == $article['0']) {
            $result = [
                'id' => $article['0'],
                'category' => $article['1'],
                'text' => $article['2']
            ];
        }
    }

    return ['article' => $result];
}
