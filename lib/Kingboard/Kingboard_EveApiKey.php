<?php
class Kingboard_EveApiKey extends King23_MongoObject
{
    protected $_className = __class__;
    
    public static function getById($id)
    {
        return self::_getInstanceById(__class__, $id);    
    }
}
