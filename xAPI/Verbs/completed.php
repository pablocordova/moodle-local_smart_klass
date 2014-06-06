<?php
namespace Klap\xAPI;

/**
 * xAPI completed Verb
 *
 * @package    local_klap
 * @copyright  Klap <kttp://www.klaptek.com>
 * @author     Oscar <oscar@klaptek.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class completed extends VerbObject {
 
    public function __construct() {
        $this->id = 'http://adlnet.gov/expapi/verbs/completed';

        $this->display['en-US'] = 'completed';
        $this->display['es'] = 'completado';
    }

}
