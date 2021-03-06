<?php

namespace AppBundle\Services;

use Doctrine\ORM\EntityRepository;

class VoteService extends EntityRepository
{
    public function forProducer(string $producer, int $page = 0): ?array
    {
        $sql = " SELECT v.account, (net+cpu) as staked, votes FROM tk_votes v JOIN tk_stakes s ON s.account = v.account WHERE JSON_CONTAINS(votes, '[\"". $producer ."\"]') ORDER BY staked DESC LIMIT 50 OFFSET ".$page * 50;
        $stmt = $this->getEntityManager()->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
