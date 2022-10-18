<?php 
declare(strict_types=1);

namespace SOLID\OCP;

abstract class RedisConnection{
    abstract protected function __construct($host);
    abstract public static function getInstance();
}

class RedisLocalConnection extends RedisConnection{
    protected function __construct($host){
        
    }

    public static function getInstance(){
        
    }
}

class RedisCloudConnection extends RedisConnection{
    protected function __construct($host){
        
    }

    public static function getInstance(){
        
    }
}

class RedisStorage{
    public function __construct(RedisConnection $rdisClient){
        
    }
}
