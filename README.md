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