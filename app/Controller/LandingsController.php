<?php

class LandingsController extends AppController {
    public $helpers = array('Html', 'Form');
    
    
    public function index() {
        $this->layout = 'main';
        $this->set('title_for_layout',__('Accueil'));
    }
    
    public function polytechnicien() {
        if ($this->Session->read('auth') != 'true') {
            $this->redirect('/index');
        }
        $this->set('title_for_layout',__('Accueil X'));
        $this->layout = 'x';
    }
    
    public function login() {
	$this->Session->write('auth', 'true');
        $this->redirect('/');
    }
    
    public function beforeFilter() {
        
    }
    
    public function fkzlogin() {
	if(!isset($_GET['response'])){
		$this->frankiz_do_auth();
	}
	$auth = $this->frankiz_get_response();
	print_r($auth);
    }
    private $FKZ_KEY = "";

    function frankiz_do_auth() {
        $timestamp = time();
        /**
         * url de la page de login, doit correspondre *exactement* à celle entrée dans
         * la base de données de Frankiz (définie lors de l'inscription)
         */
        $site = 'http://relex.binets.fr/index.php';

        /**
         * Champ non utile pour l'authentification et retransmis tel quel par frankiz.
         * Il est prévu pour pouvoir mettre en place un système de redirection après
         * authentification, vers la page à partir de laquelle le client avait tenté de se connecter.
         */
        $location = '';

        $request = json_encode(array('names', 'promo', 'email'));

        $hash = md5($timestamp . $site . $this->FKZ_KEY . $request);

        $remote = 'https://www.frankiz.net/remote?timestamp=' . $timestamp .
//	$remote  = 'https://dev.frankiz.net/~dev/remote?timestamp=' . $timestamp .
                '&site=' . $site .
                '&location=' . urlencode(urlencode($location)) . // il faut le faire deux fois !? à mon avis il y a un bug côté BR
                '&hash=' . $hash .
                '&request=' . $request;

        header("Location:" . $remote);
        exit();
    }

    function frankiz_get_response() {
        // Read request
        $timestamp = (isset($_GET['timestamp']) ? $_GET['timestamp'] : 0);
        $response = (isset($_GET['response']) ? urldecode($_GET['response']) : '');
        $hash = (isset($_GET['hash']) ? $_GET['hash'] : '');
        $location = (isset($_GET['location']) ? $_GET['location'] : '');

        // Frankiz security protocol
        if (abs($timestamp - time()) > 600)
            die("Délai de réponse dépassé. Annulation de la requête");
        if (!(md5($timestamp . $this->FKZ_KEY . $response) == $hash) && !(($response = str_replace('%22', '"', $response)) && md5($timestamp . $this->$FKZ_KEY . $response) != $hash))
            die("Session compromise.");

        $response = json_decode($response, true);
        $response['location'] = $location;

        // Set empty fields
        $fields = array('hruid',
            'firstname', 'lastname', 'nickname', // 'names' query
            'promo', 'location');
        foreach ($fields as $k) {
            if (!isset($response[$k]))
                $response[$k] = '';
        }
        return $response;
    }
    
    
}

