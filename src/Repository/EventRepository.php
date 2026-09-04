<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Event>
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    /**
     * Liste les événements, filtrés sur le titre si une recherche est saisie.
     *
     * @return Event[]
     */
    public function search(?string $q): array
    {
        $qb = $this->createQueryBuilder('e')->orderBy('e.eventDate', 'ASC');

        if ($q) {
            // Les % sont dans le paramètre, pas dans le DQL : pas d'injection possible.
            $qb->andWhere('e.title LIKE :q')->setParameter('q', '%'.$q.'%');
        }

        return $qb->getQuery()->getResult();
    }
}
