<?php

class Video
{

}

class User
{
    public function download(Video $video)
    {
        if (! $this->subscribed()) {
            throw new Exception('You must be subscribed to download videos');
        }
    }

    public function subscribed()
    {
        return false;
    }
}

class UserDownloadController
{
    public function show()
    {
        try {
            (new User)->download(new Video);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

