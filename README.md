# Сложение чисел

Краткое описание пикета

## Требования

- PHP 8.3

## Установка

composer require anatoly-shilyaev/my-composer-package

## Использование

    <?php

    use <vendor>\<name>\Summ;
    use <vendor>\<name>\Subtract;

    $summ = new Summ();
    echo $summ->getSumm(5, 2); // 7

    $subtract = new Subtract();
    echo $subtract->getSubtract(5, 2); // 3
