<?php
namespace Klap\xAPI;

/**
 * CourseEnrolCollector Class
 *
 * @package    local_klap
 * @copyright  Klap <kttp://www.klaptek.com>
 * @author     Oscar <oscar@klaptek.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class CourseEnrolCollector extends Collector {
    
    const MAX_REGS = 1000;
    
    public function collectData(){
        global $DB;
        
        $data = $this->dataprovider->getEnrolments($this); 
        
        return (empty($data)) ? null : $data;
        
    }
    
    
    public function prepareStatement(StatementRequest $xAPI_statement, $object){
        if (!empty($object->time)) {
            //SetActor
            $xAPI_statement->setActor($object->userid);

            //SetVerb
            $xAPI_statement->setVerb('registered');

            //SetObject
            $activity = new Activity($this->dataprovider->getCourseId($object->course));

            $activity_definition = new ActivityDefinition('course');

           $activity->setDefinition($activity_definition);
           $xAPI_statement->setObject($activity);

            //SetResult

            //SetContext

            //SetTimeStamp
            $xAPI_statement->setTimestamp($object->time);

            return $xAPI_statement;
        } else {
            $this->addReproccessIds($object->id);
            return null;
        }
    }
    
    public function getMaxId() {
        return $this->dataprovider->getMaxId('course_completions'); 
    }
}