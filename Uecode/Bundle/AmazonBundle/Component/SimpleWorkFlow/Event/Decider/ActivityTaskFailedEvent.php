<?php
/**
 * @author Aaron Scherer, John Pancoast
 * @date   2/20/13
 */
namespace Uecode\Bundle\AmazonBundle\Component\SimpleWorkFlow\Event\Decider;

// Amazon Bundle's SWF Components
use \Uecode\Bundle\AmazonBundle\Component\SimpleWorkFlow\Event\AbstractEvent;
use \Uecode\Bundle\AmazonBundle\Component\SimpleWorkFlow\State\DeciderWorkerState;

class ActivityTaskFailedEvent extends AbstractEvent
{
	protected eventType =  'ActivityTaskFailed';

	protected function eventLogic( $event, &$workflowState, &$timerOptions, &$activityOptions, &$continueAsNew, &$maxEventId ) {
		// @TODO
		// Need logic
		// when an activity fails, a real application may want to retry it or report the incident
	}
}
