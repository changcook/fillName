# fillName
生成随机姓名，如： "李小红"

# 使用方法

use changxiaoming\FillName\Genwords;

- 生成一个随机名字

``` php 
 $name =  Genwords::getInstance()->getRandName();
```

- 生成一个女士名-设置性别

``` php 
 $name =  Genwords::getInstance()->setGender('female')->getRandName()  ;
```

- 随机生成100个姓名
``` php 
for($i=0;$i<100;$i++){
    echo ( Genwords::getInstance()->getRandName() ) . "  " ;
    if(($i+1) %5 == 0){
        echo "\n";
    }
}
```


