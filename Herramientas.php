<?php

/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 3/10/2016
 * Hora: 22:41
 */
class Herramientas
{
    public static $run_in_eclipse = true;
    public static $eclipse_charset = 'UTF-8';
    
    private static $out_charset;
    private static $out_handle;

    public static function str_start_with($haystack, $needle)
    {
        return ($needle === '') || (strpos($haystack, $needle) === 0);
    }

    public static function readln($prompt = '')
    {
        if(PHP_OS == 'WINNT') {
            Herramientas::prt($prompt);
            $handle = fopen("php://stdin", "r");
            $line = stream_get_line($handle, 1024, PHP_EOL);

            Herramientas::detectCharset();
            if (Herramientas::$out_charset != 'UTF-8') {
                $line = iconv(Herramientas::$out_charset, 'UTF-8', $line);
            }
            fclose($handle);
        }else{
            $line = readline($prompt);
        }
        return $line;
    }

    public static function prt($str = '')
    {
        if($str != ''){
            Herramientas::detectCharset();
            
            $str = str_replace("\r", '', $str);
            $str = str_replace("\n", PHP_EOL, $str);
            
            if(Herramientas::$out_charset != 'UTF-8'){
                $str = iconv('UTF-8', Herramientas::$out_charset, $str);
            }
            
            if(!isset(Herramientas::$out_handle)){
                Herramientas::$out_handle = fopen("php://stdout", "w");
            }
            
            fprintf(Herramientas::$out_handle, $str);
            fflush(Herramientas::$out_handle);
        }
    }

    public static function println($str = '')
    {
        Herramientas::prt($str . "\n");
    }

    private static function detectCharset()
    {
        if(!isset(Herramientas::$out_charset)){
            if(Herramientas::$run_in_eclipse){
                Herramientas::$out_charset = Herramientas::$eclipse_charset;
            }else{
                if(PHP_OS == 'WINNT'){
                    Herramientas::$out_charset = 'CP850';
                    exec('chcp', $output);
                    $pos = stripos($output[0], ':');
                    $cp = trim(substr($output[0], $pos + 1));
                    if($cp < 2000){
                        Herramientas::$out_charset = 'CP' . $cp;
                    }
                }else{
                    $local = setlocale(LC_CTYPE, 0);
                    Herramientas::$out_charset = substr($local, 6);
                    if(empty(Herramientas::$out_charset)){
                        Herramientas::$out_charset = 'ISO-8859-1';
                    }else{
                        switch (Herramientas::$out_charset){
                            case 'euro':
                                Herramientas::$out_charset = 'ISO-8859-1';
                                break;
                        }
                    }
                }
                
                Herramientas::$out_charset .= '//TRANSLIT';
            }
        }
    }
}