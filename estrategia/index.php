<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 26/9/2016
 * Hora: 20:32
 */

interface IStrategy
{
    function filter( $record );
}

class FindAfterStrategy implements IStrategy
{
    private $_name;

    public function __construct( $name )
    {
        $this->_name = $name;
    }

    public function filter( $record )
    {
        return strcmp( $this->_name, $record ) <= 0;
    }
}

class RandomStrategy implements IStrategy
{
    public function filter( $record )
    {
        return rand( 0, 1 ) >= 0.5;
    }
}

class UserList
{
    private $_list = array();

    public function __construct( $names )
    {
        if ( $names != null )
        {
            foreach( $names as $name )
            {
                $this->_list []= $name;
            }
        }
    }

    public function add( $name )
    {
        $this->_list []= $name;
    }

    public function find( $filter )
    {
        $recs = array();
        foreach( $this->_list as $user )
        {
            if ( $filter->filter( $user ) )
                $recs []= $user;
        }
        return $recs;
    }
}

$ul = new UserList( array( "Andy", "Jack", "Lori", "Megan" ) );
$f1 = $ul->find( new FindAfterStrategy( "K" ) );
$f2 = $ul->find( new RandomStrategy() );

echo '<pre>';print_r([__LINE__, __METHOD__,'hola mundo',$f1]);echo '</pre>';
echo '<pre>';print_r([__LINE__, __METHOD__,'hola mundo',$f2]);echo '</pre>';