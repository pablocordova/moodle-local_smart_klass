<?php
namespace Klap\xAPI;

/**
 * xAPI attended Verb
 *
 * @package    local_klap
 * @copyright  Klap <kttp://www.klaptek.com>
 * @author     Oscar <oscar@klaptek.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class attended extends VerbObject {

    public function __construct() {
        $this->id = 'http://adlnet.gov/expapi/verbs/attended';

        $this->display['en-US'] = 'attended';
        $this->display['es'] = 'asistido';
    }
    
}
