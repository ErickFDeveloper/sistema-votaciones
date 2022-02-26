<?php 
    
    class getVotes {
        public function getVotesA () {
            global $mbd;
    
            $sql = 'SELECT COUNT(*) planchaA FROM votes WHERE matchest = ?';
            $query = $mbd->prepare($sql);
            $query->execute(['Plancha A']);
            $result = $query->fetch();

            return $result['planchaA'];
        }

        public function getVotesB () {
            global $mbd;
    
            $sql = 'SELECT COUNT(*) planchaB FROM votes WHERE matchest = ?';
            $query = $mbd->prepare($sql);
            $query->execute(['Plancha B']);
            $result = $query->fetch();

            return $result['planchaB'];
        }
    }