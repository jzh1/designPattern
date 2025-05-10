 <?php
 class Singleton {
     // 私有静态属性存储唯一实例
     private static $instance = null;

     // 私有构造函数，防止外部实例化
     private function __construct() {}

     // 静态方法返回唯一实例
     public static function getInstance() {
         if (self::$instance === null) {
             self::$instance = new self();
         }
         return self::$instance;
     }

     // 禁止克隆
     public function __clone() {}

     // 禁止反序列化
     public function __wakeup() {}
 }