<?php
namespace changxiaoming\FillName\traits;

trait Singleton
{
    private static $instance;

    /**
     * @param mixed ...$args
     * @return Singleton|static
     */
    public static function getInstance(...$args)
    {
        $className = get_called_class();
        $hash = md5($className . json_encode([$args]));
        if( !isset(self::$instance[$hash]) ){
            self::$instance[$hash] = new $className($args);
        }

        return self::$instance[$hash];
    }
}