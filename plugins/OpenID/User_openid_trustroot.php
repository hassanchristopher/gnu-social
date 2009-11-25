<?php
/**
 * Table Definition for user_openid_trustroot
 */
require_once INSTALLDIR.'/classes/Memcached_DataObject.php';

class User_openid_trustroot extends Memcached_DataObject
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'user_openid_trustroot';                     // table name
    public $trustroot;                         // varchar(255) primary_key not_null
    public $user_id;                         // int(4)  primary_key not_null
    public $created;                         // datetime()   not_null
    public $modified;                        // timestamp()   not_null default_CURRENT_TIMESTAMP

    /* Static get */
    function staticGet($k,$v=null)
    { return Memcached_DataObject::staticGet('User_openid_trustroot',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

    function &pkeyGet($kv)
    {
        return Memcached_DataObject::pkeyGet('User_openid_trustroot', $kv);
    }

    function table() {

        global $_DB_DATAOBJECT;
        $dbtype = $_DB_DATAOBJECT['CONNECTIONS'][$this->_database_dsn_md5]->dsn['phptype'];

        return array('trustroot' => DB_DATAOBJECT_STR + DB_DATAOBJECT_NOTNULL,
                     'user_id'   => DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
                     'created'   => DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME + DB_DATAOBJECT_NOTNULL,
                     'modified'  => ($dbtype == 'mysql') ?
                     DB_DATAOBJECT_MYSQLTIMESTAMP :
                     DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME
                     );
    }

    function keys() {
        return array('trustroot' => 'K', 'user_id' => 'K');
    }

}
