# PHP 设计模式

### START

---
    小建议：编程字体使用等宽字体 source code pro 等
    IDE：PHPSTORM
---

### 关于命名空间

---
    PHP从5.3开始支持命名空间
    写在文件最开始
    主要是隔离类和函数（方法）
---

### 类自动载入

---
    PHP从5.2开始支持类的自动载入
    - 使用
        function __autoload($class) {
            require PATH . $class.php;
        }
    PHP5.3 开始使用 spl_sutoload_register()替代了__autoload()
    - 使用
        spl_sutoload_register('autoload1')；
        spl_sutoload_register('autoload2')；      
---

### PSR-0 规范

---
    1.命名空间必须与绝对路径一致
    2.类名首字母必须大写
    3.除了入口文件外，其他.php必须只有一个类
---

### PHP标准库（SPL）

---
   官方地址：[https://www.php.net/manual/zh/book.spl.php](https://www.php.net/manual/zh/book.spl.php)
---
    一些数据结构：
    1.栈（先进后出）
```php
    // spl 栈
    $stack = new SplStack();
    // 入栈
    $stack->push('data1');
    $stack->push('data2');
    // 出栈
    echo $stack->pop();
    echo PHP_EOL;
    echo $stack->pop();
```
    2.队列 (先进先出)
 ```php
    // sql 队列
    $queue = new SplQueue();
    // 入队
    $queue->enqueue('data1');
    $queue->enqueue('data2');
    // 出队
    echo $queue->dequeue();
    echo PHP_EOL;
    echo  $queue->dequeue();
```
    3.堆（最小堆）
```php
    // sql 堆（最小堆）
    $heap = new SplMinHeap();
    // 入堆
    $heap->insert('data1');
    $heap->insert('data2');
    // 提取
    echo $heap->extract();
    echo PHP_EOL;
    echo $heap->extract();
```
    4.固定大小的数组
```php
    // spl 固定大小的数组
    $array = new SplFixedArray(10);
    $array[1] = 1;
    $array[6] = 6;
    
    var_dump($array);
```
---

### 链式操作的实现

---
```php
    return $this;
```
    详见 Lib\Database.php
---

### 魔术方法

---
    1.__get/__set 详见 Lib\Object;
    2.__call/__callStatic 详见 Lib\Object;
    3.__toString 详见 Lib\Object;
    4.__invoke 详见 Lib\Object;
---

### 基础设计模式

---
- 工厂模式：替代原来new的方式，主要优势是类的变化修改比较方便，统一实例化
- 单例模式：即一个类只被实例化一次，当其他人对其再次实例化时，返回第一次实例化的对象，可以避免大量的new 操作，减少资源的消耗，
典型应用于数据库类的实例化。


