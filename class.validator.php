<?php
/**
 * PHP Class Validator
 *
 * A Simple PHP Class for validate the most common
 * thing in a PHP page using only regex.
 * 
 * If you find a bug, please report at author's mail
 *
 * @package Validator
 * @author Simone Carletti <scanin_20@hotmail.com>
 * @copyright Copyright (c) 2015, Simone Carletti
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 * @note This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 *
*/

/**
 * Validator - Simple regex validator
 * @package Validator
 * @author Simone Carletti
*/

class Validator {
    /**
     * The Validator Version number.
     * @type string
     */
    public $Version = '1.0.0';
    
    /**
     * The regex block
     * @type string
     */
    
    const PATTERN_EMAIL = '/(?:(?:\r\n)?[ \t])*(?:(?:(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*))*@(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*))*|(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*)*\<(?:(?:\r\n)?[ \t])*(?:@(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*))*(?:,@(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*))*)*:(?:(?:\r\n)?[ \t])*)?(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*))*@(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*))*\>(?:(?:\r\n)?[ \t])*)|(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*)*:(?:(?:\r\n)?[ \t])*(?:(?:(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*))*@(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*))*|(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*)*\<(?:(?:\r\n)?[ \t])*(?:@(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*))*(?:,@(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*))*)*:(?:(?:\r\n)?[ \t])*)?(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*))*@(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*))*\>(?:(?:\r\n)?[ \t])*)(?:,\s*(?:(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*))*@(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*))*|(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*)*\<(?:(?:\r\n)?[ \t])*(?:@(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*))*(?:,@(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*))*)*:(?:(?:\r\n)?[ \t])*)?(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|"(?:[^\"\r\\]|\\.|(?:(?:\r\n)?[ \t]))*"(?:(?:\r\n)?[ \t])*))*@(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*)(?:\.(?:(?:\r\n)?[ \t])*(?:[^()<>@,;:\\".\[\] \000-\031]+(?:(?:(?:\r\n)?[ \t])+|\Z|(?=[\["()<>@,;:\\".\[\]]))|\[([^\[\]\r\\]|\\.)*\](?:(?:\r\n)?[ \t])*))*\>(?:(?:\r\n)?[ \t])*))*)?;\s*)/';
    const PATTERN_URL = '/((https?|ftp)\:\/\/)?([a-z0-9-.]*)\.([a-z]{2,4})(\:[0-9]{2,5})?(\/([a-zA-Z0-9+\$_-]\.?)+)*\/?(\?[a-zA-Z+&\$_.-][a-zA-Z0-9;:@&%=+\/\$_.-]*)?(#[a-zA-Z_.-][a-zA-Z0-9+\$_.-]*)?/';
    const PATTERN_DATE_DDMMYYYY = '/((([0][1-9]|[12][\d])|[3][01])[-\/\.]([0][13578]|[1][02])[-\/\.][1-9]\d\d\d)|((([0][1-9]|[12][\d])|[3][0])[-\/\.]([0][13456789]|[1][012])[-\/\.][1-9]\d\d\d)|(([0][1-9]|[12][\d])[-\/\.][0][2][-\/\.][1-9]\d([02468][048]|[13579][26]))|(([0][1-9]|[12][0-8])[-\/\.][0][2][-\/\.][1-9]\d\d\d)/';
    const PATTERN_DATE_MMDDYYYY = '/^(?:(?:(?:0?[13578]|1[02])(\/|-|\.)31)\1|(?:(?:0?[1,3-9]|1[0-2])(\/|-|\.)(?:29|30)\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:0?2(\/|-|\.)29\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:(?:0?[1-9])|(?:1[0-2]))(\/|-|\.)(?:0?[1-9]|1\d|2[0-8])\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/';
    const PATTERN_DATE_YYYYMMDD = '/^(?=\d)(?:(?!(?:1582(?:\.|-|\/)10(?:\.|-|\/)(?:0?[5-9]|1[0-4]))|(?:1752(?:\.|-|\/)0?9(?:\.|-|\/)(?:0?[3-9]|1[0-3])))(?=(?:(?!000[04]|(?:(?:1[^0-6]|[2468][^048]|[3579][^26])00))(?:(?:\d\d)(?:[02468][048]|[13579][26]))\D0?2\D29)|(?:\d{4}\D(?!(?:0?[2469]|11)\D31)(?!0?2(?:\.|-|\/)(?:29|30))))(\d{4})([-\/.])(0?\d|1[012])\2((?!00)[012]?\d|3[01]))$/';
    const PATTERN_IPV4_ADDRESS = '/^(?:(?:25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])\.){3}(?:25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]?|[0-9])$/';
    const PATTERN_IPV6_ADDRESS = '/^(([A-Fa-f0-9]{1,4}:){7}[A-Fa-f0-9]{1,4})$|^([A-Fa-f0-9]{1,4}::([A-Fa-f0-9]{1,4}:){0,5}[A-Fa-f0-9]{1,4})$|^(([A-Fa-f0-9]{1,4}:){2}:([A-Fa-f0-9]{1,4}:){0,4}[A-Fa-f0-9]{1,4})$|^(([A-Fa-f0-9]{1,4}:){3}:([A-Fa-f0-9]{1,4}:){0,3}[A-Fa-f0-9]{1,4})$|^(([A-Fa-f0-9]{1,4}:){4}:([A-Fa-f0-9]{1,4}:){0,2}[A-Fa-f0-9]{1,4})$|^(([A-Fa-f0-9]{1,4}:){5}:([A-Fa-f0-9]{1,4}:){0,1}[A-Fa-f0-9]{1,4})$|^(([A-Fa-f0-9]{1,4}:){6}:[A-Fa-f0-9]{1,4})$/';
    const PATTERN_INTEGER = '/^\d+$/';
    const PATTERN_DECIMAL = '/^\d+\.?\d*$/';
    const PATTERN_ALPHANUMERIC = '/^\w+$/';
    const PATTERN_ALPHANUMERIC_ONLY_ONE_SPACE_BETWEEN_WORDS = '/^\w+(\s\w+)*$/';
    const PATTERN_PHONE = '/^(?:\+\d{1,3}|0\d{1,3}|00\d{1,2})?(?:\s?\(\d+\))?(?:[-\/\s.]|\d)+$/';
    const PATTERN_ALL_CHAR = '/^[\S\s]+$/';
    const PATTERN_FILENAME = '/^[^\s\\\/\*?\"<>|\:\']+/i';
    const PATTERN_FILENAME_NO_SLASH = '^[^\s\\\/\*?\"<>|\:\']+';
    const PATTERN_ALLOW_ONLY_IMAGES = '\.(gif|jpe?g|tiff|png)$'; //da usare con /i
    const PATTERN_ALLOW_ONLY_DOCUMENT = '\.(doc?x|xls?x|accdb|mdb|ppt?x|odt|txt|rtf|pdf|xml)$'; //da usare con /i
    const PATTERN_ALLOW_ONLY_COMPRESSED = '\.(7z|zip|rar|tar|gz)$';
    const PATTERN_ALLOW_ONLY_AUDIO = '\.(mp3|wma|wav|3gp|midi|m4p|aiff|raw)$';
    const PATTERN_ALLOW_ONLY_VIDEO = '\.(mkv|flv|avi|mov|wmv|mp4|m4p|m4v|mp?eg|mp2|mpe|3gp|3g2)$';
    const PATTERN_HEXADECIMAL_COLOR = '/^#?([a-f]|[A-F]|[0-9]){3}(([a-f]|[A-F]|[0-9]){3})?$/';
    const PATTERN_IS_HTML = '/^<([a-z]+)([^<]+)*(?:>(.*)<\/\1>|\s+\/>)$/';
    const PATTERN_IS_VALID_REGEX = '/^((?:(?:[^?+*{}()[\]\\|]+|\\.|\[(?:\^?\\.|\^[^\\]|[^\\^])(?:[^\]\\]+|\\.)*\]|\((?:\?[:=!]|\?<[=!]|\?>)?(?1)??\)|\(\?(?:R|[+-]?\d+)\))(?:(?:[?+*]|\{\d+(?:,\d*)?\})[?+]?)?|\|)*)$/';
    const PATTERN_HEX_NUMBER_1 = '/^0[xX][0-9a-fA-F]+$/';
    const PATTERN_HEX_NUMBER_2 = '/^[0-9|A-F]+(?:\.[0-9|A-F]+)?$/i';
    const PATTERN_OCTAL = "/^[0-7]+(?:\.[0-7]+)?$/";
    const PATTERN_BINARY = "/^[0-1]+(?:\.[0-1]+)?$/";
    const PATTERN_MAC_ADDRESS = "/^([0-9A-F]{2}[:-]){5}([0-9A-F]{2})$/i";
    
    
    /**
     * Constructor.
     */
    public function __construct() {}
    
    /**
    * Destructor.
    */
    public function __destruct() {}
    
    /**
     * Check if string is valid RFC Email
     * @param string $email email
     * @return boolean
    */
    public function isEmail($email) {
        if (preg_match(self::PATTERN_EMAIL, $email)) {
                return true;
        }
        
        return false;
    }
    
    /**
     * Check if string is valid URL Address
     * @param string $url URL
     * @return boolean
    */
    public function isURL($url) {
        if (preg_match(self::PATTERN_URL, $url)) {
                return true;
        }
        
        return false;
    }
    
    /**
     * Check if string is valid date
     * @param string $date date
     * @param string $format date format (accept dd/mm/yyyy, mm/dd/yyyy, yyyy/mm/dd)
     * @param string $sep alternative date separator in $date param
     * @return boolean
    */
    public function isDate($date, $format='dd/mm/yyyy', $sep=null) {
        
        $format = strtolower(str_replace(array("-",'.', $sep), "/", $format));

        switch($format) {
            case 'dd/mm/yyyy':
                if (preg_match(self::PATTERN_DATE_DDMMYYYY, $date)) {
                                return true;
                } else {
                                return false;
                }
                break;
            
            case 'mm/dd/yyyy':
                if (preg_match(self::PATTERN_DATE_MMDDYYYY, $date)) {
                                return true;
                } else {
                                return false;
                }
                break;
            
            case 'yyyy/mm/dd':
                if (preg_match(self::PATTERN_DATE_YYYYMMDD, $date)) {
                                return true;
                } else {
                                return false;
                }
                
                break;
            default:
                throw new Exception('Argument format in isDate() public function is not a valid date format');
                break;
        }
        
    }
    
    /**
     * Check if string is valid IPV4 address
     * @param string $ip ipv4 address
     * @return boolean
    */
    public function isIPV4Address($ip) {
        if (preg_match(self::PATTERN_IPV4_ADDRESS, $ip)) {
                return true;
        }
        
        return false;
    }

    /**
     * Check if string is valid IPV6 address
     * @param string $ip ipv6 address
     * @return boolean
    */
    public function isIPV6Address($ip) {
        if (preg_match(self::PATTERN_IPV6_ADDRESS, $ip)) {
                return true;
        }
        
        return false;
    }
    
    /**
     * Check if string is integer number
     * @param string $number number
     * @return boolean
    */
    public function isInteger($number) {
        if (preg_match(self::PATTERN_INTEGER, $number)) {
                return true;
        }
        
        return false;
    }

    /**
     * Check if string is decimal number (no decimal limit)
     * @param string $number number
     * @return boolean
    */
    public function isDecimal($number) {
        if (preg_match(self::PATTERN_DECIMAL, $number)) {
                return true;
        }
        
        return false;
    }

    /**
     * Check if string is alphanumeric
     * @param string $string string
     * @param boolean $allow_only_one_space_between_words if true, check if each word is separated by only one space
     * @return boolean
    */
    public function isAlphanumeric($string, $allow_only_one_space_between_words=false) {
            
        if (!$allow_only_one_space_between_words) {
                if (preg_match(self::PATTERN_ALPHANUMERIC, $string)) {
                        return true;
                }
        } else {
                if (preg_match(self::PATTERN_ALPHANUMERIC_ONLY_ONE_SPACE_BETWEEN_WORDS, $string)) {
                        return true;
                }
        }
        
        return false;
    
    }

    /**
     * Check if string is valid Phone
     * @param string $phone phone number
     * @return boolean
     *
     * This function not include the differences between european number or us number
    */
    public function isPhone($number) {
        if (preg_match(self::PATTERN_PHONE, $number)) {
                return true;
        }
        
        return false;
    }

    /**
     * Check if string is string (include special chars)
     * @param string $string string
     * @return boolean
    */
    public function isString($string) {
        if (preg_match(self::PATTERN_ALL_CHAR, $string)) {
                return true;
        }
        
        return false;
    }

    /**
     * Check if string is filename
     * @param string $filename filename
     * @return boolean
    */
    public function isFilename($filename) {
        if (preg_match(self::PATTERN_FILENAME, $filename)) {
                return true;
        }
        
        return false;
    }
    
    /**
     * Check if filename extension is valid image
     * @param string $file file
     * @return boolean
    */
    public function isImage($file) {
        if (preg_match("/".self::PATTERN_FILENAME_NO_SLASH.self::PATTERN_ALLOW_ONLY_IMAGES."/i", $file)) {
                return true;
        }
        
        return false;
    }

    /**
     * Check if filename extension is valid document
     * @param string $file file
     * @return boolean
    */
    public function isDocument($file) {
        if (preg_match("/".self::PATTERN_FILENAME_NO_SLASH.self::PATTERN_ALLOW_ONLY_DOCUMENT."/i", $file)) {
                return true;
        }
        
        return false;
    }
    
    /**
     * Check if filename extension is valid compressed file
     * @param string $file file
     * @return boolean
    */
    public function isCompressedFile($file) {
        if (preg_match("/".self::PATTERN_FILENAME_NO_SLASH.self::PATTERN_ALLOW_ONLY_COMPRESSED."/i", $file)) {
                return true;
        }
        
        return false;
    }
    
    /**
     * Check if filename extension is valid audio file
     * @param string $file file
     * @return boolean
    */
    public function isAudio($file) {
        if (preg_match("/".self::PATTERN_FILENAME_NO_SLASH.self::PATTERN_ALLOW_ONLY_AUDIO."/i", $file)) {
                return true;
        }
        
        return false;
    }

    /**
     * Check if filename extension is valid video file
     * @param string $file file
     * @return boolean
    */
    public function isVideo($file) {
        if (preg_match("/".self::PATTERN_FILENAME_NO_SLASH.self::PATTERN_ALLOW_ONLY_VIDEO."/i", $file)) {
                return true;
        }
        
        return false;
    }
    
    /**
     * Check if string is valid hex color
     * @param string $color color
     * @return boolean
    */
    public function isHEXColor($color) {
            if (preg_match(self::PATTERN_HEXADECIMAL_COLOR, $color)) {
                    return true;
            }
            
            return false;
    }

    /**
     * Check if string is html code
     * @param string $html html
     * @return boolean
    */
    public function isHTML($html) {
            if (preg_match(self::PATTERN_HEXADECIMAL_COLOR, $html)) {
                    return true;
            }
            
            return false;
    }

    /**
     * Check if string is valid regex
     * @param string $regex regex
     * @return boolean
    */
    public function isRegex($regex) {
        if (preg_match(self::PATTERN_IS_VALID_REGEX, $regex)) {
                return true;
        }
            
        return false;
    }

    /**
     * Check if string is valid hex number
     * @param string $number number
     * @return boolean
    */
    public function isHEXNumber($number) {
        if (preg_match(self::PATTERN_HEX_NUMBER_1, $number) || preg_match(self::PATTERN_HEX_NUMBER_2, $number)) {
                return true;
        }
            
        return false;
    }

    /**
     * Check if string is valid octal number
     * @param string $number number
     * @return boolean
    */
    public function isOctal($number) {
        if (preg_match(self::PATTERN_OCTAL, $number)) {
                return true;
        }
            
        return false;
    }
    
    /**
     * Check if string is valid binary number
     * @param string $number number
     * @return boolean
    */
    public function isBinary($number) {
        if (preg_match(self::PATTERN_BINARY, $number)) {
            return true;
        }
        
        return false;
    }
    
}

?>
