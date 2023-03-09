<?php 
    // Call file
    include_once('artworks.php');

    // Check that id exists
    function isExistArtwork(array $artwork) : bool
    {
        if (array_key_exists('id', $artwork) && $_GET['id'] == $artwork['id']) {
            $isExisted = $artwork['id'];
        } else {
            $isExisted = false;
        }

        return $isExisted;
    }

    // Recovery of the work that corresponds to the id
    function getArtworks(array $artworks) : array
    {
        $valid_artworks = [];

        foreach($artworks as $artwork) {
            if (isExistArtwork($artwork)) {
                $valid_artworks[] = $artwork;
            }
        }
        return $valid_artworks;
    }
?>