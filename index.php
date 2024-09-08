<?php

declare(strict_types=1);


// Определяем кастомные исключения для каждого типа
class IntTypeException extends Exception
{
}

class FloatTypeException extends Exception
{
}

class StringTypeException extends Exception
{
}

class BoolTypeException extends Exception
{
}

class ArrayTypeException extends Exception
{
}

class NullTypeException extends Exception
{
}

// Функция, которая принимает переменную и выбрасывает исключение в зависимости от её типа
/**
 * @throws ArrayTypeException
 * @throws IntTypeException
 * @throws StringTypeException
 * @throws FloatTypeException
 * @throws NullTypeException
 * @throws BoolTypeException
 * @throws Exception
 */
function calculate($var)
{
    if (is_int($var)) {
        throw new IntTypeException("Тип переменной — int");
    } elseif (is_float($var)) {
        throw new FloatTypeException("Тип переменной — float");
    } elseif (is_string($var)) {
        throw new StringTypeException("Тип переменной — string");
    } elseif (is_bool($var)) {
        throw new BoolTypeException("Тип переменной — bool");
    } elseif (is_array($var)) {
        throw new ArrayTypeException("Тип переменной — array");
    } elseif (is_null($var)) {
        throw new NullTypeException("Тип переменной — null");
    } else {
        throw new Exception("Неизвестный тип переменной");
    }
}

// Пример вызова функции и обработки исключений
$values = [42, 3.14, "Hello", true, [1, 2, 3], null];

foreach ($values as $value) {
    try {
        calculate($value);
    } catch (IntTypeException $e) {
        echo $e->getMessage() . "\n";
    } catch (FloatTypeException $e) {
        echo $e->getMessage() . "\n";
    } catch (StringTypeException $e) {
        echo $e->getMessage() . "\n";
    } catch (BoolTypeException $e) {
        echo $e->getMessage() . "\n";
    } catch (ArrayTypeException $e) {
        echo $e->getMessage() . "\n";
    } catch (NullTypeException $e) {
        echo $e->getMessage() . "\n";
    } catch (Exception $e) {
        echo $e->getMessage() . "\n";
    }
}
