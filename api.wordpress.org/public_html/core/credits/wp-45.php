<?php

class WP_45_Credits extends WP_Credits {

	function groups() {
		$groups = array(
			'project-leaders' => array(
				'name'    => 'Project Leaders',
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => array(
					'matt'        => array( 'Matt Mullenweg',  'Cofounder, Project Lead' ),
					'nacin'       => array( 'Andrew Nacin',    'Lead Developer'          ),
					'markjaquith' => array( 'Mark Jaquith',    'Lead Developer', '097a87a525e317519b5ee124820012fb' ),
					'azaozz'      => array( 'Andrew Ozz',      'Lead Developer'          ),
					'helen'       => array( 'Helen Hou-Sandí', 'Lead Developer'          ),
					'dd32'        => array( 'Dion Hulse',      'Lead Developer'          ),
				),
			),
			'core-developers' => array(
				'name'    => 'Contributing Developers',
				'type'    => 'titles',
				'shuffle' => false,
				'data'    => array(
					'mikeschroder'    => array( 'Mike Schroder',     'Release Lead' ),
					'adamsilverstein' => array( 'Adam Silverstein',  'Release Deputy' ),
					'melchoyce'       => array( 'Mel Choyce',        'Release Design Lead' ),
					'jorbin'          => array( 'Aaron Jorbin',      'Core Developer' ),
					'boonebgorges'    => array( 'Boone B. Gorges',   'Core Developer' ),
					'ocean90'         => array( 'Dominik Schilling', 'Core Developer' ),
					'DrewAPicture'    => array( 'Drew Jaynes',       'Core Developer' ),
					'pento'           => array( 'Gary Pendergast',   'Core Developer' ),
					'jeremyfelt'      => array( 'Jeremy Felt',       'Core Developer' ),
					'johnbillion'     => array( 'John Blackbourn',   'Core Developer', '0000ba6dd1b089e1746abbfe6281ee3b' ),
					'wonderboymusic'  => array( 'Scott Taylor',      'Core Developer' ),
					'SergeyBiryukov'  => array( 'Sergey Biryukov',   'Core Developer' ),
				),
			),
			'contributing-developers' => array(
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => array(
					'obenland'    => 'Konstantin Obenland',
					'iseulde'     => 'Ella Iseulde Van Dorpe',
					'westonruter' => array( 'Weston Ruter', '22ed378fbf1d918ef43a45b2a1f34634' ),
					'afercia'     => 'Andrea Fercia',
					'rmccue'      => array( 'Ryan McCue', '08818120f223035a0857c2a0ec417f93' ),
					'karmatosed'  => 'Tammie Lister',
					'swissspidy'  => 'Pascal Birchler',
					'rachelbaker' => 'Rachel Baker',
					'joehoyle'    => 'Joe Hoyle',
					'ericlewis'   => 'Eric Andrew Lewis',
					'joemcgill'   => 'Joe McGill',
					'Ipstenu'     => 'Mika Epstein',
				),
			),
			'recent-rockstars' => array(
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => array(
					'chriscct7'        => array( 'Chris Christoff', 'd0931e57862048dabb0bea3a71ce6229' ),
					'danielbachhuber'  => 'Daniel Bachhuber',
					'celloexpressions' => 'Nick Halsey',
					'dnewton'          => array( 'David Newton', '2b5c483d8d2a5fb69cb5b27c784edea3' ),
					'ebinnion'         => 'Eric Binnion',
					'grantpalin'       => 'Grant Palin',
					'rockwell15'       => 'Andrew Rockwell',
					'gitlost'          => 'Martin Burke',
					'kwight'           => 'Kirk Wight',
				),
			),
		);

		return $groups;
	}

	function props() {
		return array(
			'5um17',
			'aargh-a-knot',
			'aaroncampbell',
			'abiralneupane',
			'adamsilverstein',
			'afercia',
			'ahockley',
			'aidanlane',
			'ambrosey',
			'andg',
			'andizer',
			'ankit-k-gupta',
			'apaliku',
			'aramzs',
			'ardathksheyna',
			'arush',
			'ashmatadeen',
			'atimmer',
			'azaozz',
			'bandonrandon',
			'bappidgreat',
			'barryceelen',
			'berengerzyla',
			'bhubbard',
			'birgire',
			'boluda',
			'boonebgorges',
			'bordoni',
			'borgesbruno',
			'bradyvercher',
			'cadeyrn',
			'camikaos',
			'celloexpressions',
			'chandrapatel',
			'charlestonsw',
			'cheffheid',
			'chetanchauhan',
			'chmac',
			'chouby',
			'chrico',
			'chris_dev',
			'chriscct7',
			'christophherr',
			'ckoerner',
			'claudiosanches',
			'codex-m',
			'coffee2code',
			'compute',
			'coreymcollins',
			'd4z_c0nf',
			'danhgilmore',
			'danielbachhuber',
			'danielpataki',
			'davidakennedy',
			'dbrumbaugh10up',
			'dd32',
			'denis-de-bernardy',
			'diddledan',
			'dimadin',
			'dlh',
			'dmsnell',
			'dnewton',
			'dossy',
			'dotancohen',
			'drebbitsweb',
			'drewapicture',
			'dshanske',
			'duaneblake',
			'dvankooten',
			'eherman24',
			'eliorivero',
			'empireoflight',
			'enej',
			'ericdaams',
			'ericlewis',
			'ethitter',
			'extendwings',
			'fab1en',
			'faishal',
			'fantasyworld',
			'finnj',
			'firebird75',
			'flixos90',
			'folletto',
			'frozzare',
			'fusillicode',
			'garusky',
			'garyj',
			'gblsm',
			'georgestephanis',
			'gitlost',
			'grapplerulrich',
			'groovecoder',
			'gungeekatx',
			'hakre',
			'helen',
			'henrywright',
			'hlashbrooke',
			'hnle',
			'hugobaeta',
			'iamntz',
			'iamtakashi',
			'igmoweb',
			'imath',
			'ipstenu',
			'iseulde',
			'ivankristianto',
			'ixkaito',
			'jadpm',
			'jamesdigioia',
			'jason_the_adams',
			'jaspermdegroot',
			'jbrinley',
			'jdgrimes',
			'jeffpyebrookcom',
			'jeherve',
			'jeremyfelt',
			'jesin',
			'jmdodd',
			'joefusco',
			'joehoyle',
			'joelerr',
			'joemcgill',
			'johnbillion',
			'johnjamesjacoby',
			'johnnypea',
			'jorbin',
			'joshlevinson',
			'jpry',
			'jrchamp',
			'jrf',
			'juanfra',
			'jubstuff',
			'juhise',
			'juliobox',
			'karmatosed',
			'katieburch',
			'keraweb',
			'khag7',
			'kiranpotphode',
			'kjbenk',
			'kouratoras',
			'kovshenin',
			'kraftbj',
			'krissiev',
			'krogsgard',
			'kucrut',
			'kwight',
			'lamosty',
			'lancewillett',
			'latz',
			'layotte',
			'leemon',
			'liamdempsey',
			'liljimmi',
			'lpawlik',
			'luan-ramos',
			'luciole135',
			'mackensen',
			'madvic',
			'mapk',
			'marcochiesi',
			'mark8barnes',
			'markoheijnen',
			'mattfelten',
			'mattgeri',
			'mattwiebe',
			'maweder',
			'mayukojpn',
			'mcapybara',
			'mdgl',
			'mehulkaklotar',
			'meitar',
			'melchoyce',
			'mensmaximus',
			'mercime',
			'michael-arestad',
			'michalzuber',
			'micropat',
			'mikehansenme',
			'mikejolley',
			'mikeschroder',
			'mordauk',
			'morganestes',
			'mrahmadawais',
			'mt8biz',
			'mte90',
			'mwidmann',
			'nacin',
			'neoxx',
			'netweb',
			'nexurium',
			'niallkennedy',
			'nicdford',
			'ninos-ego',
			'nofearinc',
			'oaron',
			'obenland',
			'obrienlabs',
			'ocean90',
			'overclokk',
			'pauldewouters',
			'pbearne',
			'pento',
			'perezlabs',
			'peterwilsoncc',
			'polevaultweb',
			'prettyboymp',
			'profforg',
			'programmin',
			'ptahdunbar',
			'rabmalin',
			'rachelbaker',
			'rahalaboulfeth',
			'ramiy',
			'realloc',
			'redsweater',
			'rickalee',
			'rilwis',
			'ritteshpatel',
			'rmccue',
			'rob',
			'rockwell15',
			'rogerhub',
			'romsocial',
			'rosso99',
			'ruudjoyo',
			'ryan',
			'ryankienstra',
			'ryelle',
			'sagarjadhav',
			'salcode',
			'salvoaranzulla',
			'samhotchkiss',
			'sarciszewski',
			'sc0ttkclark',
			'scarinessreported',
			'scottbrownconsulting',
			'scribu',
			'sebastianpisula',
			'sergejmueller',
			'sergeybiryukov',
			'shamess',
			'shelob9',
			'shinichin',
			'sidati',
			'siobhan',
			'sirbrillig',
			'skithund',
			'slushman',
			'smerriman',
			'spacedmonkey',
			'stephanethomas',
			'stephenharris',
			'stevegrunwell',
			'stevenkword',
			'subharanjan',
			'sudar',
			'swissspidy',
			'tacoverdo',
			'tahteche',
			'takayukister',
			'tharsheblows',
			'thebrandonallen',
			'themiked',
			'thewanderingbrit',
			'thisisit',
			'thomaswm',
			'timothyblynjacobs',
			'timplunkett',
			'tmuikku',
			'toro_unit',
			'tywayne',
			'tyxla',
			'uglyrobot',
			'usermrpapa',
			'utkarshpatel',
			'valendesigns',
			'vhomenko',
			'virgodesign',
			'vladolaru',
			'voldemortensen',
			'vtieu',
			'walbo',
			'webaware',
			'welcher',
			'wesleye',
			'westonruter',
			'wido',
			'williamsba1',
			'wisdmlabs',
			'wizzard_',
			'wonderboymusic',
			'wp-architect',
			'wpdelighter',
			'wpsmith',
			'xavortm',
			'yetanotherdaniel',
			'zinigor',
		);
	}

	function external_libraries() {
		return array(
			array( 'Backbone.js', 'http://backbonejs.org/' ),
			array( 'Class POP3', 'http://squirrelmail.org/' ),
			array( 'Color Animations', 'http://plugins.jquery.com/color/' ),
			array( 'getID3()', 'http://getid3.sourceforge.net/' ),
			array( 'Horde Text Diff', 'http://pear.horde.org/' ),
			array( 'hoverIntent', 'http://cherne.net/brian/resources/jquery.hoverIntent.html' ),
			array( 'imgAreaSelect', 'http://odyniec.net/projects/imgareaselect/' ),
			array( 'Iris', 'https://github.com/Automattic/Iris' ),
			array( 'jQuery', 'http://jquery.com/' ),
			array( 'jQuery UI', 'http://jqueryui.com/' ),
			array( 'jQuery Hotkeys', 'https://github.com/tzuryby/jquery.hotkeys' ),
			array( 'jQuery serializeObject', 'http://benalman.com/projects/jquery-misc-plugins/' ),
			array( 'jQuery.query', 'http://plugins.jquery.com/query-object/' ),
			array( 'jQuery.suggest', 'http://plugins.jquery.com/project/suggest' ),
			array( 'jQuery UI Touch Punch', 'http://touchpunch.furf.com/' ),
			array( 'json2', 'https://github.com/douglascrockford/JSON-js' ),
			array( 'Masonry', 'http://masonry.desandro.com/' ),
			array( 'MediaElement.js', 'http://mediaelementjs.com/' ),
			array( 'PclZip', 'http://www.phpconcept.net/pclzip/' ),
			array( 'PemFTP', 'http://www.phpclasses.org/browse/package/1743.html' ),
			array( 'phpass', 'http://www.openwall.com/phpass/' ),
			array( 'PHPMailer', 'https://github.com/PHPMailer/PHPMailer' ),
			array( 'Plupload', 'http://www.plupload.com/' ),
			array( 'random_compat', 'https://github.com/paragonie/random_compat' ),
			array( 'SimplePie', 'http://simplepie.org/' ),
			array( 'The Incutio XML-RPC Library', 'https://code.google.com/archive/p/php-ixr/' ),
			array( 'Thickbox', 'http://codylindley.com/thickbox/' ),
			array( 'TinyMCE', 'http://www.tinymce.com/' ),
			array( 'Twemoji', 'https://github.com/twitter/twemoji' ),
			array( 'Underscore.js', 'http://underscorejs.org/' ),
			array( 'zxcvbn', 'https://github.com/dropbox/zxcvbn' ),
		);
	}
}
