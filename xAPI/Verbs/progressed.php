<?php
namespace Klap\xAPI;

/**
 * xAPI progressed Verb
 *
 * @package    local_klap
 * @copyright  Klap <kttp://www.klaptek.com>
 * @author     Oscar <oscar@klaptek.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class progressed extends VerbObject {

    public function __construct() {
        $this->id = 'http://adlnet.gov/expapi/verbs/progressed';

        $this->display['en-US'] = 'progressed';
        $this->display['es'] = 'progresado';
    }
    
}
