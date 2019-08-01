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
- 注册树模式：注册树模式通过将对象实例注册到一棵全局的对象树上，需要的时候从对象树上采摘的模式设计方法。
    * 单例模式解决的是如何在整个项目中创建唯一对象实例的问题，工厂模式解决的是如何不通过new建立实例对象的方法。 那么注册树模式想解决什么问题呢？ 在考虑这个问题前，我们还是有必要考虑下前两种模式目前面临的局限。  首先，单例模式创建唯一对象的过程本身还有一种判断，即判断对象是否存在。存在则返回对象，不存在则创建对象并返回。 每次创建实例对象都要存在这么一层判断。 工厂模式更多考虑的是扩展维护的问题。 总的来说，单例模式和工厂模式可以产生更加合理的对象。怎么方便调用这些对象呢？而且在项目内如此建立的对象好像散兵游勇一样，不便统筹管理安排啊。因而，注册树模式应运而生。不管你是通过单例模式还是工厂模式还是二者结合生成的对象，都统统给我“插到”注册树上。我用某个对象的时候，直接从注册树上取一下就好。这和我们使用全局变量一样的方便实用。 而且注册树模式还为其他模式提供了一种非常好的想法。
- 适配器模式：将一个类的接口转换成客户希望的另外一个接口。Adapter模式使得原本由于接口不兼容而不能一起工作的那些类可以一起工作

