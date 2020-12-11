# 网页计数器应用

通过composer包引入PageCountClass类静态调用即可输出

```php
<?php
use PageCount\PageCountClass;
require "vendor/autoload.php";
echo PageCountClass::pageCounts();
```

