# 网页计数器应用

通过composer包引入PageCountClass类静态调用即可输出

```php
<?php
use PageCount\PageCountClass;
require "vendor/autoload.php";
echo PageCountClass::pageCounts();
```

如果是laravel框架生成文件会在public文件夹下。