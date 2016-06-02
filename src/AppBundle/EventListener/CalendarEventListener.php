<?php
/**
 * Created by PhpStorm.
 * User: Celso
 * Date: 21-08-2015
 * Time: 0:44
 */


namespace AppBundle\EventListener;

use ADesigns\CalendarBundle\Event\CalendarEvent;
use ADesigns\CalendarBundle\Entity\EventEntity;
use Doctrine\ORM\EntityManager;

class CalendarEventListener
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function loadEvents(CalendarEvent $calendarEvent)
    {

        // The original request so you can get filters from the calendar
        // Use the filter in your query for example

        // load events using your custom logic here,
        // for instance, retrieving events from a repository

        $companyEvents = $this->entityManager->getRepository('AppBundle:Agenda')
            ->createQueryBuilder('company_events')
            ->getQuery()->getResult();

        // $companyEvents and $companyEvent in this example
        // represent entities from your database, NOT instances of EventEntity
        // within this bundle.
        //
        // Create EventEntity instances and populate it's properties with data
        // from your own entities/database values.

        foreach($companyEvents as $companyEvent) {

            // create an event with a start/end time, or an all day event
            if ($companyEvent->getAllDay() === false) {
                $eventEntity = new EventEntity($companyEvent->getId(),$companyEvent->getTitle(), $companyEvent->getStartDatetime(), $companyEvent->getEndDatetime());
            } else {
                $eventEntity = new EventEntity($companyEvent->getId(),$companyEvent->getTitle(), $companyEvent->getStartDatetime(), $companyEvent->getEndDatetime(), $companyEvent->getAllDay());
            }
            $calendarEvent->addEvent($eventEntity);
        }
    }
}