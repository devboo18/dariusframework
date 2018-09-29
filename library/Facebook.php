<?php

namespace Library;

class Facebook {

    protected $FB;

    public function __construct(){

        $fb = new Facebook\Facebook([
            'app_id' => '{app-id}', // Replace {app-id} with your app id
            'app_secret' => '{app-secret}',
            'default_graph_version' => 'v2.2',
        ]);
    }


}