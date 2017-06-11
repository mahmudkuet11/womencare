<?php

#-----------------------------------------------------------------
# Columns
#-----------------------------------------------------------------

//Half
$official_shortcodes['header_1'] = array( 
	'type'=>'heading', 
	'title'=>__('Columns', 'official')
);


$official_shortcodes['full_column'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Full Width Column', 'official' ), 
	'attr'=>array()
);

$official_shortcodes['one_half'] = array( 
	'type'=>'checkbox', 
	'title'=>__('One Half (1/2) OR (2/4) OR (3/6)', 'official' ), 
	'attr'=>array(
		'position'=>array(
			'type'=>'radio', 
			'title'=>__('Position', 'official'),
			'desc' => __('Please use first and last for children columns and for parents always select middle', 'official'),
			'def' => 'middle',
 			'opt'=>array(
				'first'=>__('First Column', 'official'),
				'middle'=>__('Middle Column', 'official'),
				'last'=>__('Last Column', 'official')
			)
		),
	)
);


$official_shortcodes['one_third'] = array( 
	'type'=>'checkbox', 
	'title'=>__('One Third (1/3) OR (2/6)', 'official' ), 
	'attr'=>array(
		'position'=>array(
			'type'=>'radio', 
			'title'=>__('Position', 'official'),
			'desc' => __('Please use first and last for children columns and for parents always select middle', 'official'),
			'def' => 'middle',
			'opt'=>array(
				'first'=>__('First Column', 'official'),
				'middle'=>__('Middle Column', 'official'),
				'last'=>__('Last Column', 'official')
			)
		),
	)
);


$official_shortcodes['one_fourth'] = array( 
	'type'=>'checkbox', 
	'title'=>__('One Fourth (1/4)', 'official' ), 
	'attr'=>array(
		'position'=>array(
			'type'=>'radio', 
			'title'=>__('Position', 'official'),
			'desc' => __('Please use first and last for children columns and for parents always select middle', 'official'),
			'def' => 'middle',
			'opt'=>array(
				'first'=>__('First Column', 'official'),
				'middle'=>__('Middle Column', 'official'),
				'last'=>__('Last Column', 'official')
			)
		),
	)
);


$official_shortcodes['one_fifth'] = array( 
	'type'=>'checkbox', 
	'title'=>__('One Fifth (1/5)', 'official' ), 
	'attr'=>array(
		'position'=>array(
			'type'=>'radio', 
			'title'=>__('Position', 'official'),
			'desc' => __('Please use first and last for children columns and for parents always select middle', 'official'),
			'def' => 'middle',
			'opt'=>array(
				'first'=>__('First Column', 'official'),
				'middle'=>__('Middle Column', 'official'),
				'last'=>__('Last Column', 'official')
			)
		),
	)
);


$official_shortcodes['one_sixth'] = array( 
	'type'=>'checkbox', 
	'title'=>__('One Sixth (1/6)', 'official' ), 
	'attr'=>array(
		'position'=>array(
			'type'=>'radio', 
			'title'=>__('Position', 'official'),
			'desc' => __('Please use first and last for children columns and for parents always select middle', 'official'),
			'def' => 'middle',
			'opt'=>array(
				'first'=>__('First Column', 'official'),
				'middle'=>__('Middle Column', 'official'),
				'last'=>__('Last Column', 'official')
			)
		),
	)
);


$official_shortcodes['two_third'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Two Third (2/3) OR (4/6)', 'official' ), 
	'attr'=>array(
		'position'=>array(
			'type'=>'radio', 
			'title'=>__('Position', 'official'),
			'desc' => __('Please use first and last for children columns and for parents always select middle', 'official'),
			'def' => 'middle', 
			'opt'=>array(
				'first'=>__('First Column', 'official'),
				'middle'=>__('Middle Column', 'official'),
				'last'=>__('Last Column', 'official')
			)
		),
	)
);


$official_shortcodes['three_fourth'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Three Fourth (3/4)', 'official' ), 
	'attr'=>array(
		'position'=>array(
			'type'=>'radio', 
			'title'=>__('Position', 'official'),
			'desc' => __('Please use first and last for children columns.', 'official'),
			'opt'=>array(
				'first'=>__('First Column', 'official'),
				'last'=>__('Last Column', 'official')
			)
		),
	)
);


$official_shortcodes['two_fifth'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Two Fifth (2/5)', 'official' ), 
	'attr'=>array(
		'position'=>array(
			'type'=>'radio', 
			'title'=>__('Position', 'official'),
			'desc' => __('Please use first and last for children columns and for parents always select middle', 'official'),
			'def' => 'middle',
			'opt'=>array(
				'first'=>__('First Column', 'official'),
				'middle'=>__('Middle Column', 'official'),
				'last'=>__('Last Column', 'official')
			)
		),
	)
);


$official_shortcodes['three_fifth'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Three Fifth (3/5)', 'official' ), 
	'attr'=>array(
		'position'=>array(
			'type'=>'radio', 
			'title'=>__('Position', 'official'),
			'desc' => __('Please use first and last for children columns and for parents always select middle', 'official'),
			'def' => 'middle',
			'opt'=>array(
				'first'=>__('First Column', 'official'),
				'middle'=>__('Middle Column', 'official'),
				'last'=>__('Last Column', 'official')
			)
		),
	)
);


$official_shortcodes['four_fifth'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Four Fifth (4/5)', 'official' ), 
	'attr'=>array(
		'position'=>array(
			'type'=>'radio', 
			'title'=>__('Position', 'official'),
			'desc' => __('Please use first and last for children columns.', 'official'),
			'opt'=>array(
				'first'=>__('First Column', 'official'),
				'last'=>__('Last Column', 'official')
			)
		),
	)
);


$official_shortcodes['five_sixth'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Five Sixth (5/6)', 'official' ), 
	'attr'=>array(
		'position'=>array(
			'type'=>'radio', 
			'title'=>__('Position', 'official'),
			'desc' => __('Please use first and last for children columns.', 'official'),
			'opt'=>array(
				'first'=>__('First Column', 'official'),
				'last'=>__('Last Column', 'official')
			)
		),
	)
);


#-----------------------------------------------------------------
# Typography
#-----------------------------------------------------------------

$official_shortcodes['header_3'] = array( 
	'type'=>'heading', 
	'title'=>__('Typography', 'official' )
);


//Code
$official_shortcodes['code'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Code Block (pre)', 'official') 
);


//Clearfix
$official_shortcodes['clearfix'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Clearfix', 'official') 
);


//Divider
$official_shortcodes['divider'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Divider', 'official' ),
	'attr'=>array( 
		'style'=>array(
			'type'=>'select', 
			'title'=>__('Style', 'official'), 
			'values'=>array(
				'transparent'=>__('Transparent', 'official'),
				'line'=>__('Line', 'official'),
				'dotted'=>__('Dotted', 'official'),
				'double'=>__('Double', 'official'),
				'grad'=>__('Gradient', 'official')

			)
		),
		'color'=>array(
			'type'=>'text', 
			'title'=>__('Color', 'official'),
			'desc' => __('e.g. #eee', 'official')
		),
		'size'=>array(
			'type'=>'text', 
			'title'=>__('Size', 'official'),
			'desc' => __('Please enter the size. default is 1px', 'official')
		)
		,
		'margin_top'=>array(
			'type'=>'text', 
			'title'=>__('Margin Top', 'official'),
			'desc' => __('Please enter the margin top. e.g. 40px or 12em', 'official')
		),
		'margin_bottom'=>array(
			'type'=>'text', 
			'title'=>__('Margin Bottom', 'official'),
			'desc' => __('Please enter the margin bottom. e.g. 40px or 12em', 'official')
		)	
	)
);



//Dropcap
$official_shortcodes['dropcap'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Dropcap', 'official'), 
	'attr'=>array(
		'style'=>array(
			'type'=>'radio', 
			'title'=>__('Style', 'official'), 
			'opt'=>array(
				''=>__('Solid (Simple)', 'official'),
				'-txt'=>__('Simple Text', 'official'),
				'-border'=>__('Border', 'official')
			)
		),
		'radius'=>array(
			'type'=>'select', 
			'title'=>__('Border Radius', 'official'), 
			'values'=>array(
				'1'=>__('1', 'official'),
				'2'=>__('2', 'official'),
				'3'=>__('3', 'official'),
				'4'=>__('4', 'official'),
				'5'=>__('5', 'official'),
				'6'=>__('6', 'official'),
				'7'=>__('7', 'official'),
				'8'=>__('8', 'official'),
				'9'=>__('9', 'official'),
				'10'=>__('10', 'official'),
				'circle'=>__('Circle', 'official'),

			)
		),
		'color'=>array(
			'type'=>'text', 
			'title'=>__('Text Color', 'official'),
			'desc' => __('e.g. #999999', 'official')
		),
		'bg_color'=>array(
			'type'=>'text', 
			'title'=>__('Background Color', 'official'),
			'desc' => __('e.g. #999999', 'official')
		),
		'border_color'=>array(
			'type'=>'text', 
			'title'=>__('Border Color', 'official'),
			'desc' => __('e.g. #999999', 'official')
		)
	) 
);



//Gap
$official_shortcodes['gap'] = array( 
	'type'=>'regular', 
	'title'=>__('Gap', 'official'), 
	'attr'=>array(
		'height'=>array(
			'type'=>'text', 
			'title'=>__('Height', 'official'),
			'desc' => __('Only enter the number. e.g. 50 (You do not need to add px or em)', 'official')
		)
	) 
);


//Highlight
$official_shortcodes['highlight'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Highlight', 'official'), 
	'attr'=>array(

		'background'=>array(
			'type'=>'text', 
			'title'=>__('Background Color', 'official'),
			'desc' => __('e.g. #CC0000', 'official')
		),
		'textcolor'=>array(
			'type'=>'text', 
			'title'=>__('Text Color', 'official'),
			'desc' => __('e.g. #FFFFFF', 'official')
		)
	) 
);




//List Style
$official_shortcodes['liststyle'] = array( 
	'type'=>'dynamic', 
	'title'=>__('List Style', 'official' ), 
	'attr'=>array(
		'liststyle'=>array('type'=>'custom'),

		'icons' => array(
		'type'=>'icons2', 
		'title'=>__('Icon', 'official' ),
		'values'=> array(
			'compass'=>'compass','collapse'=>'collapse','collapse-top'=>'collapse-top','expand'=>'expand','eur'=>'eur','gbp'=>'gbp','usd'=>'usd','inr'=>'inr','jpy'=>'jpy','cny'=>'cny','krw'=>'krw','btc'=>'btc','file'=>'file','file-text'=>'file-text','sort-by-alphabet'=>'sort-by-alphabet','sort-by-alphabet-alt'=>'sort-by-alphabet-alt','sort-by-attributes'=>'sort-by-attributes','sort-by-attributes-alt'=>'sort-by-attributes-alt','sort-by-order'=>'sort-by-order','sort-by-order-alt'=>'sort-by-order-alt','thumbs-up'=>'thumbs-up','thumbs-down'=>'thumbs-down','youtube-sign'=>'youtube-sign','youtube'=>'youtube','xing'=>'xing','xing-sign'=>'xing-sign','youtube-play'=>'youtube-play','dropbox'=>'dropbox','stackexchange'=>'stackexchange','instagram'=>'instagram','flickr'=>'flickr','adn'=>'adn','bitbucket'=>'bitbucket','bitbucket-sign'=>'bitbucket-sign','tumblr'=>'tumblr','tumblr-sign'=>'tumblr-sign','long-arrow-down'=>'long-arrow-down','long-arrow-up'=>'long-arrow-up','long-arrow-left'=>'long-arrow-left','long-arrow-right'=>'long-arrow-right','apple'=>'apple','windows'=>'windows','android'=>'android','linux'=>'linux','dribbble'=>'dribbble','skype'=>'skype','foursquare'=>'foursquare','trello'=>'trello','female'=>'female','male'=>'male','gittip'=>'gittip','sun'=>'sun','moon'=>'moon','archive'=>'archive','bug'=>'bug','vk'=>'vk','weibo'=>'weibo','renren'=>'renren','adjust'=>'adjust','anchor'=>'anchor','archive'=>'archive','asterisk'=>'asterisk','ban-circle'=>'ban-circle','bar-chart'=>'bar-chart','barcode'=>'barcode','beaker'=>'beaker','beer'=>'beer','bell'=>'bell','bell-alt'=>'bell-alt','bolt'=>'bolt','book'=>'book','bookmark'=>'bookmark','bookmark-empty'=>'bookmark-empty','briefcase'=>'briefcase','bug'=>'bug','building'=>'building','bullhorn'=>'bullhorn','bullseye'=>'bullseye','calendar'=>'calendar','calendar-empty'=>'calendar-empty','camera'=>'camera','camera-retro'=>'camera-retro','certificate'=>'certificate','check'=>'check','check-empty'=>'check-empty','check-minus'=>'check-minus','check-sign'=>'check-sign','circle'=>'circle','circle-blank'=>'circle-blank','cloud'=>'cloud','cloud-download'=>'cloud-download','cloud-upload'=>'cloud-upload','code'=>'code','code-fork'=>'code-fork','coffee'=>'coffee','cog'=>'cog','cogs'=>'cogs','collapse'=>'collapse','collapse-alt'=>'collapse-alt','collapse-top'=>'collapse-top','comment'=>'comment','comment-alt'=>'comment-alt','comments'=>'comments','comments-alt'=>'comments-alt','compass'=>'compass','credit-card'=>'credit-card','crop'=>'crop','dashboard'=>'dashboard','desktop'=>'desktop','download'=>'download','download-alt'=>'download-alt','edit'=>'edit','edit-sign'=>'edit-sign','ellipsis-horizontal'=>'ellipsis-horizontal','ellipsis-vertical'=>'ellipsis-vertical','envelope'=>'envelope','envelope-alt'=>'envelope-alt','eraser'=>'eraser','exchange'=>'exchange','exclamation'=>'exclamation','exclamation-sign'=>'exclamation-sign','expand'=>'expand','expand-alt'=>'expand-alt','external-link'=>'external-link','external-link-sign'=>'external-link-sign','eye-close'=>'eye-close','eye-open'=>'eye-open','facetime-video'=>'facetime-video','female'=>'female','fighter-jet'=>'fighter-jet','film'=>'film','filter'=>'filter','fire'=>'fire','fire-extinguisher'=>'fire-extinguisher','flag'=>'flag','flag-alt'=>'flag-alt','flag-checkered'=>'flag-checkered','folder-close'=>'folder-close','folder-close-alt'=>'folder-close-alt','folder-open'=>'folder-open','folder-open-alt'=>'folder-open-alt','food'=>'food','frown'=>'frown','gamepad'=>'gamepad','gift'=>'gift','glass'=>'glass','globe'=>'globe','group'=>'group','hdd'=>'hdd','headphones'=>'headphones','heart'=>'heart','heart-empty'=>'heart-empty','home'=>'home','inbox'=>'inbox','info'=>'info','info-sign'=>'info-sign','key'=>'key','keyboard'=>'keyboard','laptop'=>'laptop','leaf'=>'leaf','legal'=>'legal','lemon'=>'lemon','level-down'=>'level-down','level-up'=>'level-up','lightbulb'=>'lightbulb','location-arrow'=>'location-arrow','lock'=>'lock','magic'=>'magic','magnet'=>'magnet','mail-reply-all'=>'mail-reply-all','male'=>'male','map-marker'=>'map-marker','meh'=>'meh','microphone'=>'microphone','microphone-off'=>'microphone-off','minus'=>'minus','minus-sign'=>'minus-sign','minus-sign-alt'=>'minus-sign-alt','mobile-phone'=>'mobile-phone','money'=>'money','moon'=>'moon','move'=>'move','music'=>'music','off'=>'off','ok'=>'ok','ok-circle'=>'ok-circle','ok-sign'=>'ok-sign','pencil'=>'pencil','phone'=>'phone','phone-sign'=>'phone-sign','picture'=>'picture','plane'=>'plane','plus'=>'plus','plus-sign'=>'plus-sign','plus-sign-alt'=>'plus-sign-alt','print'=>'print','pushpin'=>'pushpin','puzzle-piece'=>'puzzle-piece','qrcode'=>'qrcode','question'=>'question','question-sign'=>'question-sign','quote-left'=>'quote-left','quote-right'=>'quote-right','random'=>'random','refresh'=>'refresh','remove'=>'remove','remove-circle'=>'remove-circle','remove-sign'=>'remove-sign','reorder'=>'reorder','reply'=>'reply','reply-all'=>'reply-all','resize-horizontal'=>'resize-horizontal','resize-vertical'=>'resize-vertical','retweet'=>'retweet','road'=>'road','rocket'=>'rocket','rss'=>'rss','rss-sign'=>'rss-sign','screenshot'=>'screenshot','search'=>'search','share'=>'share','share-alt'=>'share-alt','share-sign'=>'share-sign','shield'=>'shield','shopping-cart'=>'shopping-cart','sign-blank'=>'sign-blank','signal'=>'signal','signin'=>'signin','signout'=>'signout','sitemap'=>'sitemap','smile'=>'smile','sort'=>'sort','sort-by-alphabet'=>'sort-by-alphabet','sort-by-alphabet-alt'=>'sort-by-alphabet-alt','sort-by-attributes'=>'sort-by-attributes','sort-by-attributes-alt'=>'sort-by-attributes-alt','sort-by-order'=>'sort-by-order','sort-by-order-alt'=>'sort-by-order-alt','sort-down'=>'sort-down','sort-up'=>'sort-up','spinner'=>'spinner','star'=>'star','star-empty'=>'star-empty','star-half'=>'star-half','star-half-empty'=>'star-half-empty','subscript'=>'subscript','suitcase'=>'suitcase','sun'=>'sun','superscript'=>'superscript','tablet'=>'tablet','tag'=>'tag','tags'=>'tags','tasks'=>'tasks','terminal'=>'terminal','thumbs-down'=>'thumbs-down','thumbs-down-alt'=>'thumbs-down-alt','thumbs-up'=>'thumbs-up','thumbs-up-alt'=>'thumbs-up-alt','ticket'=>'ticket','time'=>'time','tint'=>'tint','trash'=>'trash','trophy'=>'trophy','truck'=>'truck','umbrella'=>'umbrella','unlock'=>'unlock','unlock-alt'=>'unlock-alt','upload'=>'upload','upload-alt'=>'upload-alt','user'=>'user','volume-down'=>'volume-down','volume-off'=>'volume-off','volume-up'=>'volume-up','warning-sign'=>'warning-sign','wrench'=>'wrench','zoom-in'=>'zoom-in','zoom-out'=>'zoom-out','btc'=>'btc','cny'=>'cny','eur'=>'eur','gbp'=>'gbp','inr'=>'inr','jpy'=>'jpy','krw'=>'krw','usd'=>'usd','align-center'=>'align-center','align-justify'=>'align-justify','align-left'=>'align-left','align-right'=>'align-right','bold'=>'bold','columns'=>'columns','copy'=>'copy','cut'=>'cut','eraser'=>'eraser','file'=>'file','file-alt'=>'file-alt','file-text'=>'file-text','file-text-alt'=>'file-text-alt','font'=>'font','indent-left'=>'indent-left','indent-right'=>'indent-right','italic'=>'italic','link'=>'link','list'=>'list','list-alt'=>'list-alt','list-ol'=>'list-ol','list-ul'=>'list-ul','paper-clip'=>'paper-clip','paste'=>'paste','repeat'=>'repeat','save'=>'save','strikethrough'=>'strikethrough','table'=>'table','text-height'=>'text-height','text-width'=>'text-width','th'=>'th','th-large'=>'th-large','th-list'=>'th-list','underline'=>'underline','undo'=>'undo','unlink'=>'unlink','angle-down'=>'angle-down','angle-left'=>'angle-left','angle-right'=>'angle-right','angle-up'=>'angle-up','arrow-down'=>'arrow-down','arrow-left'=>'arrow-left','arrow-right'=>'arrow-right','arrow-up'=>'arrow-up','caret-down'=>'caret-down','caret-left'=>'caret-left','caret-right'=>'caret-right','caret-up'=>'caret-up','chevron-down'=>'chevron-down','chevron-left'=>'chevron-left','chevron-right'=>'chevron-right','chevron-sign-down'=>'chevron-sign-down','chevron-sign-left'=>'chevron-sign-left','chevron-sign-right'=>'chevron-sign-right','chevron-sign-up'=>'chevron-sign-up','chevron-up'=>'chevron-up','circle-arrow-down'=>'circle-arrow-down','circle-arrow-left'=>'circle-arrow-left','circle-arrow-right'=>'circle-arrow-right','circle-arrow-up'=>'circle-arrow-up','double-angle-down'=>'double-angle-down','double-angle-left'=>'double-angle-left','double-angle-right'=>'double-angle-right','double-angle-up'=>'double-angle-up','hand-down'=>'hand-down','hand-left'=>'hand-left','hand-right'=>'hand-right','hand-up'=>'hand-up','long-arrow-down'=>'long-arrow-down','long-arrow-left'=>'long-arrow-left','long-arrow-right'=>'long-arrow-right','long-arrow-up'=>'long-arrow-up','backward'=>'backward','eject'=>'eject','fast-backward'=>'fast-backward','fast-forward'=>'fast-forward','forward'=>'forward','fullscreen'=>'fullscreen','pause'=>'pause','play'=>'play','play-circle'=>'play-circle','play-sign'=>'play-sign','resize-full'=>'resize-full','resize-small'=>'resize-small','step-backward'=>'step-backward','step-forward'=>'step-forward','stop'=>'stop','youtube-play'=>'youtube-play','adn'=>'adn','android'=>'android','apple'=>'apple','bitbucket'=>'bitbucket','bitbucket-sign'=>'bitbucket-sign','btc'=>'btc','css3'=>'css3','dribbble'=>'dribbble','dropbox'=>'dropbox','facebook'=>'facebook','facebook-sign'=>'facebook-sign','flickr'=>'flickr','foursquare'=>'foursquare','github'=>'github','github-alt'=>'github-alt','github-sign'=>'github-sign','gittip'=>'gittip','google-plus'=>'google-plus','google-plus-sign'=>'google-plus-sign','html5'=>'html5','instagram'=>'instagram','linkedin'=>'linkedin','linkedin-sign'=>'linkedin-sign','linux'=>'linux','maxcdn'=>'maxcdn','pinterest'=>'pinterest','pinterest-sign'=>'pinterest-sign','renren'=>'renren','skype'=>'skype','stackexchange'=>'stackexchange','trello'=>'trello','tumblr'=>'tumblr','tumblr-sign'=>'tumblr-sign','twitter'=>'twitter','twitter-sign'=>'twitter-sign','vk'=>'vk','weibo'=>'weibo','windows'=>'windows','xing'=>'xing','xing-sign'=>'xing-sign','youtube'=>'youtube','youtube-play'=>'youtube-play','youtube-sign'=>'youtube-sign','ambulance'=>'ambulance','h-sign'=>'h-sign','hospital'=>'hospital','medkit'=>'medkit','plus-sign-alt'=>'plus-sign-alt','stethoscope'=>'stethoscope','user-md'=>'user-md'
			)
		)
	)
);




//Quote
$official_shortcodes['quote'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Quote', 'official'), 
	'attr'=>array(

		'style'=>array(
			'type'=>'select', 
			'title'=>__('Style', 'official'),
			'values'=>array(
				'full' => __('Full Width', 'official'),
				'left' => __('Left', 'official'),
				'right' => __('Right', 'official')
			)
		)
	) 
);




//Title
$official_shortcodes['title'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Title', 'official') 
);
	

//Tooltip
$official_shortcodes['tooltip'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Tooltip', 'official'), 
	'attr'=>array(
		'placement'=>array(
			'type'=>'select', 
			'title'=>__('Position', 'official'),
			'values'=>array(
				'toptip' => __('Top', 'official'),
				'rightttip' => __('Right', 'official'),
				'bottomtip' => __('Bottom', 'official'),
				'lefttip' => __('Left', 'official')
			)
		),
		'text'=>array(
			'type'=>'text', 
			'title'=>__('Tooltip Text', 'official')
		)
	) 
);


//Wrap
$official_shortcodes['wrap'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Wrap Section', 'official' ), 
	'attr'=>array(
		'bg_color'=>array(
			'type'=>'text', 
			'title'=>__('Background Color', 'official'),
			'desc' => __('e.g. #EEEEEE', 'official')
		),
		'border_color'=>array(
			'type'=>'text', 
			'title'=>__('Border Color', 'official'),
			'desc' => __('e.g. #E9E9E9', 'official')
		),
		'shadow'=>array(
			'type'=>'checkbox', 
			'title'=>__('Turn on the inset Shadow', 'official')
		),
		'image'=>array('type'=>'custom', 'title'  => __('Background Image','official'))
	)
);


#-----------------------------------------------------------------
# Elements 
#-----------------------------------------------------------------

$official_shortcodes['header_6'] = array( 
	'type'=>'heading', 
	'title'=>__('Elements', 'official' )
);


//Accordion
$official_shortcodes['accordion'] = array( 
	'type'=>'dynamic', 
	'title'=>__('Accordion', 'official' ), 
	'attr'=>array(
		'acc'=>array('type'=>'custom')
	)
);



//ActionBox
$official_shortcodes['actionbox'] = array( 
	'type'=>'radios', 
	'title'=>__('Action Box', 'official'), 
	'attr'=>array(
		'type'=>array(
			'type'=>'radio', 
			'title'=>__('Style', 'official'), 
			'opt'=>array(
				'light'=>__('light', 'official'),
				'dark'=>__('Dark', 'official')
			)
		),
		'style'=>array(
			'type'=>'select', 
			'title'=>__('Style', 'official'), 
			'values'=>array(
				'style1'=>__('Text in Left | Button in Right', 'official'),
				'style2'=>__('Text in Right | Button in Left', 'official'),
				'style3'=>__('Center Style', 'official')
			)
		),
		'title'=>array(
			'type'=>'text', 
			'title'=>__('Title', 'official')
		),
		'sub_text'=>array(
			'type'=>'text', 
			'title'=>__('Sub Text', 'official')
		),
		'button_default_color'=>array(
			'type'=>'select', 
			'title'=>__('Button Default Color', 'official'), 
			'values'=>array(
				'color1'=>__('Black', 'official'),
				'color2'=>__('Green', 'official'),
				'color3'=>__('Orange', 'official'),
				'color4'=>__('Blue', 'official'),
				'color5'=>__('Red', 'official'),
				'color6'=>__('Aqua', 'official'),
				'color7'=>__('Pharlap', 'official'),
				'color8'=>__('Gumbo', 'official'),
				'color9'=>__('Turquoise', 'official'),
				'customcolor'=>__('Custom Color', 'official')
				
			)
		),
		'button_color'=>array(
			'type'=>'text', 
			'title'=>__('Button Custom Color', 'official'),
			'desc'=>__('e.g. #CC0000 or red, blue,... (If you want to use one of the default colors please leave this field empty.)', 'official')
		),
		'button_size'=>array(
			'type'=>'radio', 
			'title'=>__('Button Size', 'official'), 
			'opt'=>array(
				'small'=>__('Small', 'official'),
				'medium'=>__('Medium', 'official'),
				'large'=>__('Large', 'official')	
				
			)
		),
		'button_text'=>array(
			'type'=>'text', 
			'title'=>__('Button Text', 'official')
		),
		'url'=>array(
			'type'=>'text', 
			'title'=>__('Button URL (Link)', 'official')
		),
		'target'=>array(
			'type'=>'select', 
			'title'=> __('Link Target', 'official'), 
			'desc'=> __('Link open in New window or Current window', 'official'),
			'values'=>array(
				'_self'=>__('Current Window (_self)', 'official'),
				'_blank'=>__('New Window (_blank)', 'official')
			)
		)
	) 
);

//Button
$official_shortcodes['button'] = array( 
	'type'=>'radio', 
	'title'=>__('Button', 'official'), 
	'attr'=>array(
		'style'=>array(
			'type'=>'select', 
			'title'=>__('Button Style', 'official'), 
			'values'=>array(
				'tbutton1'=>__('Default (Rounded)', 'official'),
				'tbutton2'=>__('Square', 'official'),
				'tbutton3'=>__('Round', 'official'),
				'tbutton4'=>__('Oval', 'official'),
				'tbutton5'=>__('Outlined', 'official'),
				'tbutton6'=>__('Outlined (Round)', 'official'),
				'tbutton7'=>__('Outlined (Square)', 'official'),

				
			)
		),'size'=>array(
			'type'=>'radio', 
			'title'=>__('Button Size', 'official'), 
			'opt'=>array(
				'small'=>__('Small', 'official'),
				'medium'=>__('Medium', 'official'),
				'large'=>__('Large', 'official')	
				
			)
		),
		'button_default_color'=>array(
			'type'=>'select', 
			'title'=>__('Button Default Color', 'official'), 
			'values'=>array(
				'color1'=>__('Black', 'official'),
				'color2'=>__('Green', 'official'),
				'color3'=>__('Orange', 'official'),
				'color4'=>__('Blue', 'official'),
				'color5'=>__('Red', 'official'),
				'color6'=>__('Aqua', 'official'),
				'color7'=>__('Pharlap', 'official'),
				'color8'=>__('Gumbo', 'official'),
				'color9'=>__('Turquoise', 'official'),
				'customcolor'=>__('Custom Color', 'official')
				
			)
		),
		'button_custom_color'=>array(
			'type'=>'text', 
			'title'=>__('Button Custom Color', 'official'),
			'desc'=>__('e.g. #CC0000 or red, blue,... (If you want to use one of the default colors please leave this field empty.)', 'official')
		),
		'url'=>array(
			'type'=>'text', 
			'title'=>__('Button URL (Link)', 'official')
		),
		'text'=>array(
			'type'=>'text', 
			'title'=>__('Text', 'official')
		),
		'icon'=>array(
			'type'=>'text', 
			'title'=>__('Icon', 'official')
		),
		'target'=>array(
			'type'=>'select', 
			'title'=> __('Link Target', 'official'), 
			'desc'=> __('Link open in New window or Current window', 'official'),
			'values'=>array(
				'_self'=>__('Current Window (_self)', 'official'),
				'_blank'=>__('New Window (_blank)', 'official')
			)
		)
	) 
);




// Featured Box
$official_shortcodes['featured'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Featured Box', 'official' ), 
	'attr'=>array(
		'title'=>array('type'=>'text', 'title'  => __('Title','official')),
		'subtitle'=>array('type'=>'text', 'title'  => __('Sub Title','official')),
		'image'=>array('type'=>'custom', 'title'  => __('Image','official')),
		'icon_color'=>array('type'=>'text', 'title'  => __('Icon Color','official'),'desc' => __('e.g. #666666', 'official')),
		'icon_size'=>array(
			'type'=>'select', 
			'title'=>__('Icon Size', 'official'), 
			'values'=>array(
				'1x'=>'1x',
				'2x'=>'2x',
				'3x'=>'3x',
				'4x'=>'4x',
				'5x'=>'5x'
				
			)
		),
		'icons' => array(
			'type'=>'icons3', 
			'title'=>'Icon', 
			'values'=> array(
				'compass'=>'compass','collapse'=>'collapse','collapse-top'=>'collapse-top','expand'=>'expand','eur'=>'eur','gbp'=>'gbp','usd'=>'usd','inr'=>'inr','jpy'=>'jpy','cny'=>'cny','krw'=>'krw','btc'=>'btc','file'=>'file','file-text'=>'file-text','sort-by-alphabet'=>'sort-by-alphabet','sort-by-alphabet-alt'=>'sort-by-alphabet-alt','sort-by-attributes'=>'sort-by-attributes','sort-by-attributes-alt'=>'sort-by-attributes-alt','sort-by-order'=>'sort-by-order','sort-by-order-alt'=>'sort-by-order-alt','thumbs-up'=>'thumbs-up','thumbs-down'=>'thumbs-down','youtube-sign'=>'youtube-sign','youtube'=>'youtube','xing'=>'xing','xing-sign'=>'xing-sign','youtube-play'=>'youtube-play','dropbox'=>'dropbox','stackexchange'=>'stackexchange','instagram'=>'instagram','flickr'=>'flickr','adn'=>'adn','bitbucket'=>'bitbucket','bitbucket-sign'=>'bitbucket-sign','tumblr'=>'tumblr','tumblr-sign'=>'tumblr-sign','long-arrow-down'=>'long-arrow-down','long-arrow-up'=>'long-arrow-up','long-arrow-left'=>'long-arrow-left','long-arrow-right'=>'long-arrow-right','apple'=>'apple','windows'=>'windows','android'=>'android','linux'=>'linux','dribbble'=>'dribbble','skype'=>'skype','foursquare'=>'foursquare','trello'=>'trello','female'=>'female','male'=>'male','gittip'=>'gittip','sun'=>'sun','moon'=>'moon','archive'=>'archive','bug'=>'bug','vk'=>'vk','weibo'=>'weibo','renren'=>'renren','adjust'=>'adjust','anchor'=>'anchor','archive'=>'archive','asterisk'=>'asterisk','ban-circle'=>'ban-circle','bar-chart'=>'bar-chart','barcode'=>'barcode','beaker'=>'beaker','beer'=>'beer','bell'=>'bell','bell-alt'=>'bell-alt','bolt'=>'bolt','book'=>'book','bookmark'=>'bookmark','bookmark-empty'=>'bookmark-empty','briefcase'=>'briefcase','bug'=>'bug','building'=>'building','bullhorn'=>'bullhorn','bullseye'=>'bullseye','calendar'=>'calendar','calendar-empty'=>'calendar-empty','camera'=>'camera','camera-retro'=>'camera-retro','certificate'=>'certificate','check'=>'check','check-empty'=>'check-empty','check-minus'=>'check-minus','check-sign'=>'check-sign','circle'=>'circle','circle-blank'=>'circle-blank','cloud'=>'cloud','cloud-download'=>'cloud-download','cloud-upload'=>'cloud-upload','code'=>'code','code-fork'=>'code-fork','coffee'=>'coffee','cog'=>'cog','cogs'=>'cogs','collapse'=>'collapse','collapse-alt'=>'collapse-alt','collapse-top'=>'collapse-top','comment'=>'comment','comment-alt'=>'comment-alt','comments'=>'comments','comments-alt'=>'comments-alt','compass'=>'compass','credit-card'=>'credit-card','crop'=>'crop','dashboard'=>'dashboard','desktop'=>'desktop','download'=>'download','download-alt'=>'download-alt','edit'=>'edit','edit-sign'=>'edit-sign','ellipsis-horizontal'=>'ellipsis-horizontal','ellipsis-vertical'=>'ellipsis-vertical','envelope'=>'envelope','envelope-alt'=>'envelope-alt','eraser'=>'eraser','exchange'=>'exchange','exclamation'=>'exclamation','exclamation-sign'=>'exclamation-sign','expand'=>'expand','expand-alt'=>'expand-alt','external-link'=>'external-link','external-link-sign'=>'external-link-sign','eye-close'=>'eye-close','eye-open'=>'eye-open','facetime-video'=>'facetime-video','female'=>'female','fighter-jet'=>'fighter-jet','film'=>'film','filter'=>'filter','fire'=>'fire','fire-extinguisher'=>'fire-extinguisher','flag'=>'flag','flag-alt'=>'flag-alt','flag-checkered'=>'flag-checkered','folder-close'=>'folder-close','folder-close-alt'=>'folder-close-alt','folder-open'=>'folder-open','folder-open-alt'=>'folder-open-alt','food'=>'food','frown'=>'frown','gamepad'=>'gamepad','gift'=>'gift','glass'=>'glass','globe'=>'globe','group'=>'group','hdd'=>'hdd','headphones'=>'headphones','heart'=>'heart','heart-empty'=>'heart-empty','home'=>'home','inbox'=>'inbox','info'=>'info','info-sign'=>'info-sign','key'=>'key','keyboard'=>'keyboard','laptop'=>'laptop','leaf'=>'leaf','legal'=>'legal','lemon'=>'lemon','level-down'=>'level-down','level-up'=>'level-up','lightbulb'=>'lightbulb','location-arrow'=>'location-arrow','lock'=>'lock','magic'=>'magic','magnet'=>'magnet','mail-reply-all'=>'mail-reply-all','male'=>'male','map-marker'=>'map-marker','meh'=>'meh','microphone'=>'microphone','microphone-off'=>'microphone-off','minus'=>'minus','minus-sign'=>'minus-sign','minus-sign-alt'=>'minus-sign-alt','mobile-phone'=>'mobile-phone','money'=>'money','moon'=>'moon','move'=>'move','music'=>'music','off'=>'off','ok'=>'ok','ok-circle'=>'ok-circle','ok-sign'=>'ok-sign','pencil'=>'pencil','phone'=>'phone','phone-sign'=>'phone-sign','picture'=>'picture','plane'=>'plane','plus'=>'plus','plus-sign'=>'plus-sign','plus-sign-alt'=>'plus-sign-alt','print'=>'print','pushpin'=>'pushpin','puzzle-piece'=>'puzzle-piece','qrcode'=>'qrcode','question'=>'question','question-sign'=>'question-sign','quote-left'=>'quote-left','quote-right'=>'quote-right','random'=>'random','refresh'=>'refresh','remove'=>'remove','remove-circle'=>'remove-circle','remove-sign'=>'remove-sign','reorder'=>'reorder','reply'=>'reply','reply-all'=>'reply-all','resize-horizontal'=>'resize-horizontal','resize-vertical'=>'resize-vertical','retweet'=>'retweet','road'=>'road','rocket'=>'rocket','rss'=>'rss','rss-sign'=>'rss-sign','screenshot'=>'screenshot','search'=>'search','share'=>'share','share-alt'=>'share-alt','share-sign'=>'share-sign','shield'=>'shield','shopping-cart'=>'shopping-cart','sign-blank'=>'sign-blank','signal'=>'signal','signin'=>'signin','signout'=>'signout','sitemap'=>'sitemap','smile'=>'smile','sort'=>'sort','sort-by-alphabet'=>'sort-by-alphabet','sort-by-alphabet-alt'=>'sort-by-alphabet-alt','sort-by-attributes'=>'sort-by-attributes','sort-by-attributes-alt'=>'sort-by-attributes-alt','sort-by-order'=>'sort-by-order','sort-by-order-alt'=>'sort-by-order-alt','sort-down'=>'sort-down','sort-up'=>'sort-up','spinner'=>'spinner','star'=>'star','star-empty'=>'star-empty','star-half'=>'star-half','star-half-empty'=>'star-half-empty','subscript'=>'subscript','suitcase'=>'suitcase','sun'=>'sun','superscript'=>'superscript','tablet'=>'tablet','tag'=>'tag','tags'=>'tags','tasks'=>'tasks','terminal'=>'terminal','thumbs-down'=>'thumbs-down','thumbs-down-alt'=>'thumbs-down-alt','thumbs-up'=>'thumbs-up','thumbs-up-alt'=>'thumbs-up-alt','ticket'=>'ticket','time'=>'time','tint'=>'tint','trash'=>'trash','trophy'=>'trophy','truck'=>'truck','umbrella'=>'umbrella','unlock'=>'unlock','unlock-alt'=>'unlock-alt','upload'=>'upload','upload-alt'=>'upload-alt','user'=>'user','volume-down'=>'volume-down','volume-off'=>'volume-off','volume-up'=>'volume-up','warning-sign'=>'warning-sign','wrench'=>'wrench','zoom-in'=>'zoom-in','zoom-out'=>'zoom-out','btc'=>'btc','cny'=>'cny','eur'=>'eur','gbp'=>'gbp','inr'=>'inr','jpy'=>'jpy','krw'=>'krw','usd'=>'usd','align-center'=>'align-center','align-justify'=>'align-justify','align-left'=>'align-left','align-right'=>'align-right','bold'=>'bold','columns'=>'columns','copy'=>'copy','cut'=>'cut','eraser'=>'eraser','file'=>'file','file-alt'=>'file-alt','file-text'=>'file-text','file-text-alt'=>'file-text-alt','font'=>'font','indent-left'=>'indent-left','indent-right'=>'indent-right','italic'=>'italic','link'=>'link','list'=>'list','list-alt'=>'list-alt','list-ol'=>'list-ol','list-ul'=>'list-ul','paper-clip'=>'paper-clip','paste'=>'paste','repeat'=>'repeat','save'=>'save','strikethrough'=>'strikethrough','table'=>'table','text-height'=>'text-height','text-width'=>'text-width','th'=>'th','th-large'=>'th-large','th-list'=>'th-list','underline'=>'underline','undo'=>'undo','unlink'=>'unlink','angle-down'=>'angle-down','angle-left'=>'angle-left','angle-right'=>'angle-right','angle-up'=>'angle-up','arrow-down'=>'arrow-down','arrow-left'=>'arrow-left','arrow-right'=>'arrow-right','arrow-up'=>'arrow-up','caret-down'=>'caret-down','caret-left'=>'caret-left','caret-right'=>'caret-right','caret-up'=>'caret-up','chevron-down'=>'chevron-down','chevron-left'=>'chevron-left','chevron-right'=>'chevron-right','chevron-sign-down'=>'chevron-sign-down','chevron-sign-left'=>'chevron-sign-left','chevron-sign-right'=>'chevron-sign-right','chevron-sign-up'=>'chevron-sign-up','chevron-up'=>'chevron-up','circle-arrow-down'=>'circle-arrow-down','circle-arrow-left'=>'circle-arrow-left','circle-arrow-right'=>'circle-arrow-right','circle-arrow-up'=>'circle-arrow-up','double-angle-down'=>'double-angle-down','double-angle-left'=>'double-angle-left','double-angle-right'=>'double-angle-right','double-angle-up'=>'double-angle-up','hand-down'=>'hand-down','hand-left'=>'hand-left','hand-right'=>'hand-right','hand-up'=>'hand-up','long-arrow-down'=>'long-arrow-down','long-arrow-left'=>'long-arrow-left','long-arrow-right'=>'long-arrow-right','long-arrow-up'=>'long-arrow-up','backward'=>'backward','eject'=>'eject','fast-backward'=>'fast-backward','fast-forward'=>'fast-forward','forward'=>'forward','fullscreen'=>'fullscreen','pause'=>'pause','play'=>'play','play-circle'=>'play-circle','play-sign'=>'play-sign','resize-full'=>'resize-full','resize-small'=>'resize-small','step-backward'=>'step-backward','step-forward'=>'step-forward','stop'=>'stop','youtube-play'=>'youtube-play','adn'=>'adn','android'=>'android','apple'=>'apple','bitbucket'=>'bitbucket','bitbucket-sign'=>'bitbucket-sign','btc'=>'btc','css3'=>'css3','dribbble'=>'dribbble','dropbox'=>'dropbox','facebook'=>'facebook','facebook-sign'=>'facebook-sign','flickr'=>'flickr','foursquare'=>'foursquare','github'=>'github','github-alt'=>'github-alt','github-sign'=>'github-sign','gittip'=>'gittip','google-plus'=>'google-plus','google-plus-sign'=>'google-plus-sign','html5'=>'html5','instagram'=>'instagram','linkedin'=>'linkedin','linkedin-sign'=>'linkedin-sign','linux'=>'linux','maxcdn'=>'maxcdn','pinterest'=>'pinterest','pinterest-sign'=>'pinterest-sign','renren'=>'renren','skype'=>'skype','stackexchange'=>'stackexchange','trello'=>'trello','tumblr'=>'tumblr','tumblr-sign'=>'tumblr-sign','twitter'=>'twitter','twitter-sign'=>'twitter-sign','vk'=>'vk','weibo'=>'weibo','windows'=>'windows','xing'=>'xing','xing-sign'=>'xing-sign','youtube'=>'youtube','youtube-play'=>'youtube-play','youtube-sign'=>'youtube-sign','ambulance'=>'ambulance','h-sign'=>'h-sign','hospital'=>'hospital','medkit'=>'medkit','plus-sign-alt'=>'plus-sign-alt','stethoscope'=>'stethoscope','user-md'=>'user-md'
			)
		)
	)
);






//Google Fonts
$official_shortcodes['gfont'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Google Font', 'official'), 
	'attr'=>array(
		'font'=>array(
			'type'=>'fontselect', 
			'title'=>__('Font Family', 'official'), 
			'values'=>array(
"helvetica"=>"Helvetica","ABeeZee" => "ABeeZee","Abel" => "Abel","Abril Fatface" => "Abril+Fatface","Aclonica" => "Aclonica","Acme" => "Acme","Actor" => "Actor","Adamina" => "Adamina","Advent Pro" => "Advent+Pro","Aguafina Script" => "Aguafina+Script","Akronim" => "Akronim","Aladin" => "Aladin","Aldrich" => "Aldrich","Alegreya" => "Alegreya","Alegreya SC" => "Alegreya+SC","Alex Brush" => "Alex+Brush","Alfa Slab One" => "Alfa+Slab+One","Alice" => "Alice","Alike" => "Alike","Alike Angular" => "Alike+Angular","Allan" => "Allan","Allerta" => "Allerta","Allerta Stencil" => "Allerta+Stencil","Allura" => "Allura","Almendra" => "Almendra","Almendra Display" => "Almendra+Display","Almendra SC" => "Almendra+SC","Amarante" => "Amarante","Amaranth" => "Amaranth","Amatic SC" => "Amatic+SC","Amethysta" => "Amethysta","Anaheim" => "Anaheim","Andada" => "Andada","Andika" => "Andika","Angkor" => "Angkor","Annie Use Your Telescope" => "Annie+Use+Your+Telescope","Anonymous Pro" => "Anonymous+Pro","Antic" => "Antic","Antic Didone" => "Antic+Didone","Antic Slab" => "Antic+Slab","Anton" => "Anton","Arapey" => "Arapey","Arbutus" => "Arbutus","Arbutus Slab" => "Arbutus+Slab","Architects Daughter" => "Architects+Daughter","Archivo Black" => "Archivo+Black","Archivo Narrow" => "Archivo+Narrow","Arimo" => "Arimo","Arizonia" => "Arizonia","Armata" => "Armata","Artifika" => "Artifika","Arvo" => "Arvo","Asap" => "Asap","Asset" => "Asset","Astloch" => "Astloch","Asul" => "Asul","Atomic Age" => "Atomic+Age","Aubrey" => "Aubrey","Audiowide" => "Audiowide","Autour One" => "Autour+One","Average" => "Average","Average Sans" => "Average+Sans","Averia Gruesa Libre" => "Averia+Gruesa+Libre","Averia Libre" => "Averia+Libre","Averia Sans Libre" => "Averia+Sans+Libre","Averia Serif Libre" => "Averia+Serif+Libre","Bad Script" => "Bad+Script","Balthazar" => "Balthazar","Bangers" => "Bangers","Basic" => "Basic","Battambang" => "Battambang","Baumans" => "Baumans","Bayon" => "Bayon","Belgrano" => "Belgrano","Belleza" => "Belleza","BenchNine" => "BenchNine","Bentham" => "Bentham","Berkshire Swash" => "Berkshire+Swash","Bevan" => "Bevan","Bigelow Rules" => "Bigelow+Rules","Bigshot One" => "Bigshot+One","Bilbo" => "Bilbo","Bilbo Swash Caps" => "Bilbo+Swash+Caps","Bitter" => "Bitter","Black Ops One" => "Black+Ops+One","Bokor" => "Bokor","Bonbon" => "Bonbon","Boogaloo" => "Boogaloo","Bowlby One" => "Bowlby+One","Bowlby One SC" => "Bowlby+One+SC","Brawler" => "Brawler","Bree Serif" => "Bree+Serif","Bubblegum Sans" => "Bubblegum+Sans","Bubbler One" => "Bubbler+One","Buda" => "Buda","Buenard" => "Buenard","Butcherman" => "Butcherman","Butterfly Kids" => "Butterfly+Kids","Cabin" => "Cabin","Cabin Condensed" => "Cabin+Condensed","Cabin Sketch" => "Cabin+Sketch","Caesar Dressing" => "Caesar+Dressing","Cagliostro" => "Cagliostro","Calligraffitti" => "Calligraffitti","Cambo" => "Cambo","Candal" => "Candal","Cantarell" => "Cantarell","Cantata One" => "Cantata+One","Cantora One" => "Cantora+One","Capriola" => "Capriola","Cardo" => "Cardo","Carme" => "Carme","Carrois Gothic" => "Carrois+Gothic","Carrois Gothic SC" => "Carrois+Gothic+SC","Carter One" => "Carter+One","Caudex" => "Caudex","Cedarville Cursive" => "Cedarville+Cursive","Ceviche One" => "Ceviche+One","Changa One" => "Changa+One","Chango" => "Chango","Chau Philomene One" => "Chau+Philomene+One","Chela One" => "Chela+One","Chelsea Market" => "Chelsea+Market","Chenla" => "Chenla","Cherry Cream Soda" => "Cherry+Cream+Soda","Cherry Swash" => "Cherry+Swash","Chewy" => "Chewy","Chicle" => "Chicle","Chivo" => "Chivo","Cinzel" => "Cinzel","Cinzel Decorative" => "Cinzel+Decorative","Clicker Script" => "Clicker+Script","Coda" => "Coda","Coda Caption" => "Coda+Caption","Codystar" => "Codystar","Combo" => "Combo","Comfortaa" => "Comfortaa","Coming Soon" => "Coming+Soon","Concert One" => "Concert+One","Condiment" => "Condiment","Content" => "Content","Contrail One" => "Contrail+One","Convergence" => "Convergence","Cookie" => "Cookie","Copse" => "Copse","Corben" => "Corben","Courgette" => "Courgette","Cousine" => "Cousine","Coustard" => "Coustard","Covered By Your Grace" => "Covered+By+Your+Grace","Crafty Girls" => "Crafty+Girls","Creepster" => "Creepster","Crete Round" => "Crete+Round","Crimson Text" => "Crimson+Text","Croissant One" => "Croissant+One","Crushed" => "Crushed","Cuprum" => "Cuprum","Cutive" => "Cutive","Cutive Mono" => "Cutive+Mono","Damion" => "Damion","Dancing Script" => "Dancing+Script","Dangrek" => "Dangrek","Dawning of a New Day" => "Dawning+of+a+New+Day","Days One" => "Days+One","Delius" => "Delius","Delius Swash Caps" => "Delius+Swash+Caps","Delius Unicase" => "Delius+Unicase","Della Respira" => "Della+Respira","Denk One" => "Denk+One","Devonshire" => "Devonshire","Didact Gothic" => "Didact+Gothic","Diplomata" => "Diplomata","Diplomata SC" => "Diplomata+SC","Domine" => "Domine","Donegal One" => "Donegal+One","Doppio One" => "Doppio+One","Dorsa" => "Dorsa","Dosis" => "Dosis","Dr Sugiyama" => "Dr+Sugiyama","Droid Sans" => "Droid+Sans","Droid Sans Mono" => "Droid+Sans+Mono","Droid Serif" => "Droid+Serif","Duru Sans" => "Duru+Sans","Dynalight" => "Dynalight","EB Garamond" => "EB+Garamond","Eagle Lake" => "Eagle+Lake","Eater" => "Eater","Economica" => "Economica","Electrolize" => "Electrolize","Elsie" => "Elsie","Elsie Swash Caps" => "Elsie+Swash+Caps","Emblema One" => "Emblema+One","Emilys Candy" => "Emilys+Candy","Engagement" => "Engagement","Englebert" => "Englebert","Enriqueta" => "Enriqueta","Erica One" => "Erica+One","Esteban" => "Esteban","Euphoria Script" => "Euphoria+Script","Ewert" => "Ewert","Exo" => "Exo","Expletus Sans" => "Expletus+Sans","Fanwood Text" => "Fanwood+Text","Fascinate" => "Fascinate","Fascinate Inline" => "Fascinate+Inline","Faster One" => "Faster+One","Fasthand" => "Fasthand","Federant" => "Federant","Federo" => "Federo","Felipa" => "Felipa","Fenix" => "Fenix","Finger Paint" => "Finger+Paint","Fjalla One" => "Fjalla+One","Fjord One" => "Fjord+One","Flamenco" => "Flamenco","Flavors" => "Flavors","Fondamento" => "Fondamento","Fontdiner Swanky" => "Fontdiner+Swanky","Forum" => "Forum","Francois One" => "Francois+One","Freckle Face" => "Freckle+Face","Fredericka the Great" => "Fredericka+the+Great","Fredoka One" => "Fredoka+One","Freehand" => "Freehand","Fresca" => "Fresca","Frijole" => "Frijole","Fruktur" => "Fruktur","Fugaz One" => "Fugaz+One","GFS Didot" => "GFS+Didot","GFS Neohellenic" => "GFS+Neohellenic","Gabriela" => "Gabriela","Gafata" => "Gafata","Galdeano" => "Galdeano","Galindo" => "Galindo","Gentium Basic" => "Gentium+Basic","Gentium Book Basic" => "Gentium+Book+Basic","Geo" => "Geo","Geostar" => "Geostar","Geostar Fill" => "Geostar+Fill","Germania One" => "Germania+One","Gilda Display" => "Gilda+Display","Give You Glory" => "Give+You+Glory","Glass Antiqua" => "Glass+Antiqua","Glegoo" => "Glegoo","Gloria Hallelujah" => "Gloria+Hallelujah","Goblin One" => "Goblin+One","Gochi Hand" => "Gochi+Hand","Gorditas" => "Gorditas","Goudy Bookletter 1911" => "Goudy+Bookletter+1911","Graduate" => "Graduate","Grand Hotel" => "Grand+Hotel","Gravitas One" => "Gravitas+One","Great Vibes" => "Great+Vibes","Griffy" => "Griffy","Gruppo" => "Gruppo","Gudea" => "Gudea","Habibi" => "Habibi","Hammersmith One" => "Hammersmith+One","Hanalei" => "Hanalei","Hanalei Fill" => "Hanalei+Fill","Handlee" => "Handlee","Hanuman" => "Hanuman","Happy Monkey" => "Happy+Monkey","Headland One" => "Headland+One","Henny Penny" => "Henny+Penny","Herr Von Muellerhoff" => "Herr+Von+Muellerhoff","Holtwood One SC" => "Holtwood+One+SC","Homemade Apple" => "Homemade+Apple","Homenaje" => "Homenaje","IM Fell DW Pica" => "IM+Fell+DW+Pica","IM Fell DW Pica SC" => "IM+Fell+DW+Pica+SC","IM Fell Double Pica" => "IM+Fell+Double+Pica","IM Fell Double Pica SC" => "IM+Fell+Double+Pica+SC","IM Fell English" => "IM+Fell+English","IM Fell English SC" => "IM+Fell+English+SC","IM Fell French Canon" => "IM+Fell+French+Canon","IM Fell French Canon SC" => "IM+Fell+French+Canon+SC","IM Fell Great Primer" => "IM+Fell+Great+Primer","IM Fell Great Primer SC" => "IM+Fell+Great+Primer+SC","Iceberg" => "Iceberg","Iceland" => "Iceland","Imprima" => "Imprima","Inconsolata" => "Inconsolata","Inder" => "Inder","Indie Flower" => "Indie+Flower","Inika" => "Inika","Irish Grover" => "Irish+Grover","Istok Web" => "Istok+Web","Italiana" => "Italiana","Italianno" => "Italianno","Jacques Francois" => "Jacques+Francois","Jacques Francois Shadow" => "Jacques+Francois+Shadow","Jim Nightshade" => "Jim+Nightshade","Jockey One" => "Jockey+One","Jolly Lodger" => "Jolly+Lodger","Josefin Sans" => "Josefin+Sans","Josefin Slab" => "Josefin+Slab","Joti One" => "Joti+One","Judson" => "Judson","Julee" => "Julee","Julius Sans One" => "Julius+Sans+One","Junge" => "Junge","Jura" => "Jura","Just Another Hand" => "Just+Another+Hand","Just Me Again Down Here" => "Just+Me+Again+Down+Here","Kameron" => "Kameron","Karla" => "Karla","Kaushan Script" => "Kaushan+Script","Kavoon" => "Kavoon","Keania One" => "Keania+One","Kelly Slab" => "Kelly+Slab","Kenia" => "Kenia","Khmer" => "Khmer","Kite One" => "Kite+One","Knewave" => "Knewave","Kotta One" => "Kotta+One","Koulen" => "Koulen","Kranky" => "Kranky","Kreon" => "Kreon","Kristi" => "Kristi","Krona One" => "Krona+One","La Belle Aurore" => "La+Belle+Aurore","Lancelot" => "Lancelot","Lato" => "Lato","League Script" => "League+Script","Leckerli One" => "Leckerli+One","Ledger" => "Ledger","Lekton" => "Lekton","Lemon" => "Lemon","Libre Baskerville" => "Libre+Baskerville","Life Savers" => "Life+Savers","Lilita One" => "Lilita+One","Limelight" => "Limelight","Linden Hill" => "Linden+Hill","Lobster" => "Lobster","Lobster Two" => "Lobster+Two","Londrina Outline" => "Londrina+Outline","Londrina Shadow" => "Londrina+Shadow","Londrina Sketch" => "Londrina+Sketch","Londrina Solid" => "Londrina+Solid","Lora" => "Lora","Love Ya Like A Sister" => "Love+Ya+Like+A+Sister","Loved by the King" => "Loved+by+the+King","Lovers Quarrel" => "Lovers+Quarrel","Luckiest Guy" => "Luckiest+Guy","Lusitana" => "Lusitana","Lustria" => "Lustria","Macondo" => "Macondo","Macondo Swash Caps" => "Macondo+Swash+Caps","Magra" => "Magra","Maiden Orange" => "Maiden+Orange","Mako" => "Mako","Marcellus" => "Marcellus","Marcellus SC" => "Marcellus+SC","Marck Script" => "Marck+Script","Margarine" => "Margarine","Marko One" => "Marko+One","Marmelad" => "Marmelad","Marvel" => "Marvel","Mate" => "Mate","Mate SC" => "Mate+SC","Maven Pro" => "Maven+Pro","McLaren" => "McLaren","Meddon" => "Meddon","MedievalSharp" => "MedievalSharp","Medula One" => "Medula+One","Megrim" => "Megrim","Meie Script" => "Meie+Script","Merienda" => "Merienda","Merienda One" => "Merienda+One","Merriweather" => "Merriweather","Merriweather Sans" => "Merriweather+Sans","Metal" => "Metal","Metal Mania" => "Metal+Mania","Metamorphous" => "Metamorphous","Metrophobic" => "Metrophobic","Michroma" => "Michroma","Milonga" => "Milonga","Miltonian" => "Miltonian","Miltonian Tattoo" => "Miltonian+Tattoo","Miniver" => "Miniver","Miss Fajardose" => "Miss+Fajardose","Modern Antiqua" => "Modern+Antiqua","Molengo" => "Molengo","Molle" => "Molle","Monda" => "Monda","Monofett" => "Monofett","Monoton" => "Monoton","Monsieur La Doulaise" => "Monsieur+La+Doulaise","Montaga" => "Montaga","Montez" => "Montez","Montserrat" => "Montserrat","Montserrat Alternates" => "Montserrat+Alternates","Montserrat Subrayada" => "Montserrat+Subrayada","Moul" => "Moul","Moulpali" => "Moulpali","Mountains of Christmas" => "Mountains+of+Christmas","Mouse Memoirs" => "Mouse+Memoirs","Mr Bedfort" => "Mr+Bedfort","Mr Dafoe" => "Mr+Dafoe","Mr De Haviland" => "Mr+De+Haviland","Mrs Saint Delafield" => "Mrs+Saint+Delafield","Mrs Sheppards" => "Mrs+Sheppards","Muli" => "Muli","Mystery Quest" => "Mystery+Quest","Neucha" => "Neucha","Neuton" => "Neuton","New Rocker" => "New+Rocker","News Cycle" => "News+Cycle","Niconne" => "Niconne","Nixie One" => "Nixie+One","Nobile" => "Nobile","Nokora" => "Nokora","Norican" => "Norican","Nosifer" => "Nosifer","Nothing You Could Do" => "Nothing+You+Could+Do","Noticia Text" => "Noticia+Text","Nova Cut" => "Nova+Cut","Nova Flat" => "Nova+Flat","Nova Mono" => "Nova+Mono","Nova Oval" => "Nova+Oval","Nova Round" => "Nova+Round","Nova Script" => "Nova+Script","Nova Slim" => "Nova+Slim","Nova Square" => "Nova+Square","Numans" => "Numans","Nunito" => "Nunito","Odor Mean Chey" => "Odor+Mean+Chey","Offside" => "Offside","Old Standard TT" => "Old+Standard+TT","Oldenburg" => "Oldenburg","Oleo Script" => "Oleo+Script","Oleo Script Swash Caps" => "Oleo+Script+Swash+Caps","Open Sans" => "Open+Sans","Open Sans Condensed" => "Open+Sans+Condensed","Oranienbaum" => "Oranienbaum","Orbitron" => "Orbitron","Oregano" => "Oregano","Orienta" => "Orienta","Original Surfer" => "Original+Surfer","Oswald" => "Oswald","Over the Rainbow" => "Over+the+Rainbow","Overlock" => "Overlock","Overlock SC" => "Overlock+SC","Ovo" => "Ovo","Oxygen" => "Oxygen","Oxygen Mono" => "Oxygen+Mono","PT Mono" => "PT+Mono","PT Sans" => "PT+Sans","PT Sans Caption" => "PT+Sans+Caption","PT Sans Narrow" => "PT+Sans+Narrow","PT Serif" => "PT+Serif","PT Serif Caption" => "PT+Serif+Caption","Pacifico" => "Pacifico","Paprika" => "Paprika","Parisienne" => "Parisienne","Passero One" => "Passero+One","Passion One" => "Passion+One","Patrick Hand" => "Patrick+Hand","Patrick Hand SC" => "Patrick+Hand+SC","Patua One" => "Patua+One","Paytone One" => "Paytone+One","Peralta" => "Peralta","Permanent Marker" => "Permanent+Marker","Petit Formal Script" => "Petit+Formal+Script","Petrona" => "Petrona","Philosopher" => "Philosopher","Piedra" => "Piedra","Pinyon Script" => "Pinyon+Script","Pirata One" => "Pirata+One","Plaster" => "Plaster","Play" => "Play","Playball" => "Playball","Playfair Display" => "Playfair+Display","Playfair Display SC" => "Playfair+Display+SC","Podkova" => "Podkova","Poiret One" => "Poiret+One","Poller One" => "Poller+One","Poly" => "Poly","Pompiere" => "Pompiere","Pontano Sans" => "Pontano+Sans","Port Lligat Sans" => "Port+Lligat+Sans","Port Lligat Slab" => "Port+Lligat+Slab","Prata" => "Prata","Preahvihear" => "Preahvihear","Press Start 2P" => "Press+Start+2P","Princess Sofia" => "Princess+Sofia","Prociono" => "Prociono","Prosto One" => "Prosto+One","Puritan" => "Puritan","Purple Purse" => "Purple+Purse","Quando" => "Quando","Quantico" => "Quantico","Quattrocento" => "Quattrocento","Quattrocento Sans" => "Quattrocento+Sans","Questrial" => "Questrial","Quicksand" => "Quicksand","Quintessential" => "Quintessential","Qwigley" => "Qwigley","Racing Sans One" => "Racing+Sans+One","Radley" => "Radley","Raleway" => "Raleway","Raleway Dots" => "Raleway+Dots","Rambla" => "Rambla","Rammetto One" => "Rammetto+One","Ranchers" => "Ranchers","Rancho" => "Rancho","Rationale" => "Rationale","Redressed" => "Redressed","Reenie Beanie" => "Reenie+Beanie","Revalia" => "Revalia","Ribeye" => "Ribeye","Ribeye Marrow" => "Ribeye+Marrow","Righteous" => "Righteous","Risque" => "Risque","Roboto" => "Roboto","Roboto Condensed" => "Roboto+Condensed","Rochester" => "Rochester","Rock Salt" => "Rock+Salt","Rokkitt" => "Rokkitt","Romanesco" => "Romanesco","Ropa Sans" => "Ropa+Sans","Rosario" => "Rosario","Rosarivo" => "Rosarivo","Rouge Script" => "Rouge+Script","Ruda" => "Ruda","Rufina" => "Rufina","Ruge Boogie" => "Ruge+Boogie","Ruluko" => "Ruluko","Rum Raisin" => "Rum+Raisin","Ruslan Display" => "Ruslan+Display","Russo One" => "Russo+One","Ruthie" => "Ruthie","Rye" => "Rye","Sacramento" => "Sacramento","Sail" => "Sail","Salsa" => "Salsa","Sanchez" => "Sanchez","Sancreek" => "Sancreek","Sansita One" => "Sansita+One","Sarina" => "Sarina","Satisfy" => "Satisfy","Scada" => "Scada","Schoolbell" => "Schoolbell","Seaweed Script" => "Seaweed+Script","Sevillana" => "Sevillana","Seymour One" => "Seymour+One","Shadows Into Light" => "Shadows+Into+Light","Shadows Into Light Two" => "Shadows+Into+Light+Two","Shanti" => "Shanti","Share" => "Share","Share Tech" => "Share+Tech","Share Tech Mono" => "Share+Tech+Mono","Shojumaru" => "Shojumaru","Short Stack" => "Short+Stack","Siemreap" => "Siemreap","Sigmar One" => "Sigmar+One","Signika" => "Signika","Signika Negative" => "Signika+Negative","Simonetta" => "Simonetta","Sintony" => "Sintony","Sirin Stencil" => "Sirin+Stencil","Six Caps" => "Six+Caps","Skranji" => "Skranji","Slackey" => "Slackey","Smokum" => "Smokum","Smythe" => "Smythe","Sniglet" => "Sniglet","Snippet" => "Snippet","Snowburst One" => "Snowburst+One","Sofadi One" => "Sofadi+One","Sofia" => "Sofia","Sonsie One" => "Sonsie+One","Sorts Mill Goudy" => "Sorts+Mill+Goudy","Source Code Pro" => "Source+Code+Pro","Source Sans Pro" => "Source+Sans+Pro","Special Elite" => "Special+Elite","Spicy Rice" => "Spicy+Rice","Spinnaker" => "Spinnaker","Spirax" => "Spirax","Squada One" => "Squada+One","Stalemate" => "Stalemate","Stalinist One" => "Stalinist+One","Stardos Stencil" => "Stardos+Stencil","Stint Ultra Condensed" => "Stint+Ultra+Condensed","Stint Ultra Expanded" => "Stint+Ultra+Expanded","Stoke" => "Stoke","Strait" => "Strait","Sue Ellen Francisco" => "Sue+Ellen+Francisco","Sunshiney" => "Sunshiney","Supermercado One" => "Supermercado+One","Suwannaphum" => "Suwannaphum","Swanky and Moo Moo" => "Swanky+and+Moo+Moo","Syncopate" => "Syncopate","Tangerine" => "Tangerine","Taprom" => "Taprom","Tauri" => "Tauri","Telex" => "Telex","Tenor Sans" => "Tenor+Sans","Text Me One" => "Text+Me+One","The Girl Next Door" => "The+Girl+Next+Door","Tienne" => "Tienne","Tinos" => "Tinos","Titan One" => "Titan+One","Titillium Web" => "Titillium+Web","Trade Winds" => "Trade+Winds","Trocchi" => "Trocchi","Trochut" => "Trochut","Trykker" => "Trykker","Tulpen One" => "Tulpen+One","Ubuntu" => "Ubuntu","Ubuntu Condensed" => "Ubuntu+Condensed","Ubuntu Mono" => "Ubuntu+Mono","Ultra" => "Ultra","Uncial Antiqua" => "Uncial+Antiqua","Underdog" => "Underdog","Unica One" => "Unica+One","UnifrakturCook" => "UnifrakturCook","UnifrakturMaguntia" => "UnifrakturMaguntia","Unkempt" => "Unkempt","Unlock" => "Unlock","Unna" => "Unna","VT323" => "VT323","Vampiro One" => "Vampiro+One","Varela" => "Varela","Varela Round" => "Varela+Round","Vast Shadow" => "Vast+Shadow","Vibur" => "Vibur","Vidaloka" => "Vidaloka","Viga" => "Viga","Voces" => "Voces","Volkhov" => "Volkhov","Vollkorn" => "Vollkorn","Voltaire" => "Voltaire","Waiting for the Sunrise" => "Waiting+for+the+Sunrise","Wallpoet" => "Wallpoet","Walter Turncoat" => "Walter+Turncoat","Warnes" => "Warnes","Wellfleet" => "Wellfleet","Wendy One" => "Wendy+One","Wire One" => "Wire+One","Yanone Kaffeesatz" => "Yanone+Kaffeesatz","Yellowtail" => "Yellowtail","Yeseva One" => "Yeseva+One","Yesteryear" => "Yesteryear","Zeyada" => "Zeyada"
				)
		),
		'size'=>array(
			'type'=>'text', 
			'title'=>__('Font Size', 'official'),
			'desc' => __('e.g. 50px', 'official')
		),
		'color'=>array(
			'type'=>'text', 
			'title'=>__('Text Color', 'official'),
			'desc' => __('e.g. #666666', 'official')
		),
		'margin'=>array(
			'type'=>'text', 
			'title'=>__('Margin', 'official'),
			'desc' => __('e.g. 20px', 'official')
		),
		'textalign'=>array(
			'type'=>'select', 
			'title'=>__('Text Align', 'official'),
			'values'=>array(
				'left' => __('Left', 'official'),
				'right' => __('Right', 'official'),
				'center' => __('Center', 'official'),
				'justify' => __('Justify', 'official'),
			)
		)
	) 
);



//Google Map
$official_shortcodes['gmap'] = array( 
	'type'=>'regular', 
	'title'=>__('Google Map', 'official' ), 
	'attr'=>array( 
		'width'=>array('type'=>'text', 'title'=>__('Width', 'official')),
		'height'=>array('type'=>'text', 'title'=>__('Height', 'official')),
		'lat'=>array('type'=>'text', 'title'=>__('Lat', 'official')),
		'long'=>array('type'=>'text', 'title'=>__('Long', 'official')),
		'address'=>array('type'=>'text', 'title'=>__('Address', 'official')),
		'zoom'=>array('type'=>'zoom'),
		'style'=>array(
			'type'=>'select', 
			'title'=>__('Style', 'official'),
			'values'=>array(
				'full' => __('Full', 'official'),
				'standard' => __('Standard', 'official')
			)
		),
		'maptype'=>array(
			'type'=>'select', 
			'title'=>__('Style', 'official'),
			'values'=>array(
				'ROADMAP' => 'ROADMAP',
				'SATELLITE' => 'SATELLITE',
				'HYBRID' => 'HYBRID',
				'TERRAIN' => 'TERRAIN'
			)
		),
		'hidecontrols'=>array(
			'type'=>'select', 
			'title'=>__('Hide Controls', 'official'),
			'values'=>array(
				'no' => __('No', 'official'),
				'yes' => __('Yes', 'official')
			)
		),
		'infowindow'=>array('type'=>'text', 'title'=>__('Info Window', 'official')),
		'infowindowdefault'=>array(
			'type'=>'select', 
			'title'=>__('Show Info window by default', 'official'),
			'values'=>array(
				'yes' => __('Yes', 'official'),
				'no' => __('No', 'official')
				
			)
		),
		'markerimage'=>array('type'=>'custom', 'title'  => __('Marker Image','official'))
	)
);




//Icon
$official_shortcodes['icon'] = array( 
	'type'=>'regular', 
	'title'=>__('Icon', 'official'), 
	'attr'=>array(
		'size'=>array(
			'type'=>'select', 
			'title'=>__('Icon Size', 'official'), 
			'values'=>array(
				'1x'=>'1x',
				'2x'=>'2x',
				'3x'=>'3x',
				'4x'=>'4x',
				'5x'=>'5x'
				
			)
		),
		'color'=>array(
			'type'=>'text', 
			'title'=>__('Color', 'official'),
			'desc'=>__('e.g. #CC0000 or red, blue,...', 'official')
		),
		'icons' => array(
			'type'=>'icons', 
			'title'=>'Icon', 
			'values'=> array(
				'compass'=>'compass','collapse'=>'collapse','collapse-top'=>'collapse-top','expand'=>'expand','eur'=>'eur','gbp'=>'gbp','usd'=>'usd','inr'=>'inr','jpy'=>'jpy','cny'=>'cny','krw'=>'krw','btc'=>'btc','file'=>'file','file-text'=>'file-text','sort-by-alphabet'=>'sort-by-alphabet','sort-by-alphabet-alt'=>'sort-by-alphabet-alt','sort-by-attributes'=>'sort-by-attributes','sort-by-attributes-alt'=>'sort-by-attributes-alt','sort-by-order'=>'sort-by-order','sort-by-order-alt'=>'sort-by-order-alt','thumbs-up'=>'thumbs-up','thumbs-down'=>'thumbs-down','youtube-sign'=>'youtube-sign','youtube'=>'youtube','xing'=>'xing','xing-sign'=>'xing-sign','youtube-play'=>'youtube-play','dropbox'=>'dropbox','stackexchange'=>'stackexchange','instagram'=>'instagram','flickr'=>'flickr','adn'=>'adn','bitbucket'=>'bitbucket','bitbucket-sign'=>'bitbucket-sign','tumblr'=>'tumblr','tumblr-sign'=>'tumblr-sign','long-arrow-down'=>'long-arrow-down','long-arrow-up'=>'long-arrow-up','long-arrow-left'=>'long-arrow-left','long-arrow-right'=>'long-arrow-right','apple'=>'apple','windows'=>'windows','android'=>'android','linux'=>'linux','dribbble'=>'dribbble','skype'=>'skype','foursquare'=>'foursquare','trello'=>'trello','female'=>'female','male'=>'male','gittip'=>'gittip','sun'=>'sun','moon'=>'moon','archive'=>'archive','bug'=>'bug','vk'=>'vk','weibo'=>'weibo','renren'=>'renren','adjust'=>'adjust','anchor'=>'anchor','archive'=>'archive','asterisk'=>'asterisk','ban-circle'=>'ban-circle','bar-chart'=>'bar-chart','barcode'=>'barcode','beaker'=>'beaker','beer'=>'beer','bell'=>'bell','bell-alt'=>'bell-alt','bolt'=>'bolt','book'=>'book','bookmark'=>'bookmark','bookmark-empty'=>'bookmark-empty','briefcase'=>'briefcase','bug'=>'bug','building'=>'building','bullhorn'=>'bullhorn','bullseye'=>'bullseye','calendar'=>'calendar','calendar-empty'=>'calendar-empty','camera'=>'camera','camera-retro'=>'camera-retro','certificate'=>'certificate','check'=>'check','check-empty'=>'check-empty','check-minus'=>'check-minus','check-sign'=>'check-sign','circle'=>'circle','circle-blank'=>'circle-blank','cloud'=>'cloud','cloud-download'=>'cloud-download','cloud-upload'=>'cloud-upload','code'=>'code','code-fork'=>'code-fork','coffee'=>'coffee','cog'=>'cog','cogs'=>'cogs','collapse'=>'collapse','collapse-alt'=>'collapse-alt','collapse-top'=>'collapse-top','comment'=>'comment','comment-alt'=>'comment-alt','comments'=>'comments','comments-alt'=>'comments-alt','compass'=>'compass','credit-card'=>'credit-card','crop'=>'crop','dashboard'=>'dashboard','desktop'=>'desktop','download'=>'download','download-alt'=>'download-alt','edit'=>'edit','edit-sign'=>'edit-sign','ellipsis-horizontal'=>'ellipsis-horizontal','ellipsis-vertical'=>'ellipsis-vertical','envelope'=>'envelope','envelope-alt'=>'envelope-alt','eraser'=>'eraser','exchange'=>'exchange','exclamation'=>'exclamation','exclamation-sign'=>'exclamation-sign','expand'=>'expand','expand-alt'=>'expand-alt','external-link'=>'external-link','external-link-sign'=>'external-link-sign','eye-close'=>'eye-close','eye-open'=>'eye-open','facetime-video'=>'facetime-video','female'=>'female','fighter-jet'=>'fighter-jet','film'=>'film','filter'=>'filter','fire'=>'fire','fire-extinguisher'=>'fire-extinguisher','flag'=>'flag','flag-alt'=>'flag-alt','flag-checkered'=>'flag-checkered','folder-close'=>'folder-close','folder-close-alt'=>'folder-close-alt','folder-open'=>'folder-open','folder-open-alt'=>'folder-open-alt','food'=>'food','frown'=>'frown','gamepad'=>'gamepad','gift'=>'gift','glass'=>'glass','globe'=>'globe','group'=>'group','hdd'=>'hdd','headphones'=>'headphones','heart'=>'heart','heart-empty'=>'heart-empty','home'=>'home','inbox'=>'inbox','info'=>'info','info-sign'=>'info-sign','key'=>'key','keyboard'=>'keyboard','laptop'=>'laptop','leaf'=>'leaf','legal'=>'legal','lemon'=>'lemon','level-down'=>'level-down','level-up'=>'level-up','lightbulb'=>'lightbulb','location-arrow'=>'location-arrow','lock'=>'lock','magic'=>'magic','magnet'=>'magnet','mail-reply-all'=>'mail-reply-all','male'=>'male','map-marker'=>'map-marker','meh'=>'meh','microphone'=>'microphone','microphone-off'=>'microphone-off','minus'=>'minus','minus-sign'=>'minus-sign','minus-sign-alt'=>'minus-sign-alt','mobile-phone'=>'mobile-phone','money'=>'money','moon'=>'moon','move'=>'move','music'=>'music','off'=>'off','ok'=>'ok','ok-circle'=>'ok-circle','ok-sign'=>'ok-sign','pencil'=>'pencil','phone'=>'phone','phone-sign'=>'phone-sign','picture'=>'picture','plane'=>'plane','plus'=>'plus','plus-sign'=>'plus-sign','plus-sign-alt'=>'plus-sign-alt','print'=>'print','pushpin'=>'pushpin','puzzle-piece'=>'puzzle-piece','qrcode'=>'qrcode','question'=>'question','question-sign'=>'question-sign','quote-left'=>'quote-left','quote-right'=>'quote-right','random'=>'random','refresh'=>'refresh','remove'=>'remove','remove-circle'=>'remove-circle','remove-sign'=>'remove-sign','reorder'=>'reorder','reply'=>'reply','reply-all'=>'reply-all','resize-horizontal'=>'resize-horizontal','resize-vertical'=>'resize-vertical','retweet'=>'retweet','road'=>'road','rocket'=>'rocket','rss'=>'rss','rss-sign'=>'rss-sign','screenshot'=>'screenshot','search'=>'search','share'=>'share','share-alt'=>'share-alt','share-sign'=>'share-sign','shield'=>'shield','shopping-cart'=>'shopping-cart','sign-blank'=>'sign-blank','signal'=>'signal','signin'=>'signin','signout'=>'signout','sitemap'=>'sitemap','smile'=>'smile','sort'=>'sort','sort-by-alphabet'=>'sort-by-alphabet','sort-by-alphabet-alt'=>'sort-by-alphabet-alt','sort-by-attributes'=>'sort-by-attributes','sort-by-attributes-alt'=>'sort-by-attributes-alt','sort-by-order'=>'sort-by-order','sort-by-order-alt'=>'sort-by-order-alt','sort-down'=>'sort-down','sort-up'=>'sort-up','spinner'=>'spinner','star'=>'star','star-empty'=>'star-empty','star-half'=>'star-half','star-half-empty'=>'star-half-empty','subscript'=>'subscript','suitcase'=>'suitcase','sun'=>'sun','superscript'=>'superscript','tablet'=>'tablet','tag'=>'tag','tags'=>'tags','tasks'=>'tasks','terminal'=>'terminal','thumbs-down'=>'thumbs-down','thumbs-down-alt'=>'thumbs-down-alt','thumbs-up'=>'thumbs-up','thumbs-up-alt'=>'thumbs-up-alt','ticket'=>'ticket','time'=>'time','tint'=>'tint','trash'=>'trash','trophy'=>'trophy','truck'=>'truck','umbrella'=>'umbrella','unlock'=>'unlock','unlock-alt'=>'unlock-alt','upload'=>'upload','upload-alt'=>'upload-alt','user'=>'user','volume-down'=>'volume-down','volume-off'=>'volume-off','volume-up'=>'volume-up','warning-sign'=>'warning-sign','wrench'=>'wrench','zoom-in'=>'zoom-in','zoom-out'=>'zoom-out','btc'=>'btc','cny'=>'cny','eur'=>'eur','gbp'=>'gbp','inr'=>'inr','jpy'=>'jpy','krw'=>'krw','usd'=>'usd','align-center'=>'align-center','align-justify'=>'align-justify','align-left'=>'align-left','align-right'=>'align-right','bold'=>'bold','columns'=>'columns','copy'=>'copy','cut'=>'cut','eraser'=>'eraser','file'=>'file','file-alt'=>'file-alt','file-text'=>'file-text','file-text-alt'=>'file-text-alt','font'=>'font','indent-left'=>'indent-left','indent-right'=>'indent-right','italic'=>'italic','link'=>'link','list'=>'list','list-alt'=>'list-alt','list-ol'=>'list-ol','list-ul'=>'list-ul','paper-clip'=>'paper-clip','paste'=>'paste','repeat'=>'repeat','save'=>'save','strikethrough'=>'strikethrough','table'=>'table','text-height'=>'text-height','text-width'=>'text-width','th'=>'th','th-large'=>'th-large','th-list'=>'th-list','underline'=>'underline','undo'=>'undo','unlink'=>'unlink','angle-down'=>'angle-down','angle-left'=>'angle-left','angle-right'=>'angle-right','angle-up'=>'angle-up','arrow-down'=>'arrow-down','arrow-left'=>'arrow-left','arrow-right'=>'arrow-right','arrow-up'=>'arrow-up','caret-down'=>'caret-down','caret-left'=>'caret-left','caret-right'=>'caret-right','caret-up'=>'caret-up','chevron-down'=>'chevron-down','chevron-left'=>'chevron-left','chevron-right'=>'chevron-right','chevron-sign-down'=>'chevron-sign-down','chevron-sign-left'=>'chevron-sign-left','chevron-sign-right'=>'chevron-sign-right','chevron-sign-up'=>'chevron-sign-up','chevron-up'=>'chevron-up','circle-arrow-down'=>'circle-arrow-down','circle-arrow-left'=>'circle-arrow-left','circle-arrow-right'=>'circle-arrow-right','circle-arrow-up'=>'circle-arrow-up','double-angle-down'=>'double-angle-down','double-angle-left'=>'double-angle-left','double-angle-right'=>'double-angle-right','double-angle-up'=>'double-angle-up','hand-down'=>'hand-down','hand-left'=>'hand-left','hand-right'=>'hand-right','hand-up'=>'hand-up','long-arrow-down'=>'long-arrow-down','long-arrow-left'=>'long-arrow-left','long-arrow-right'=>'long-arrow-right','long-arrow-up'=>'long-arrow-up','backward'=>'backward','eject'=>'eject','fast-backward'=>'fast-backward','fast-forward'=>'fast-forward','forward'=>'forward','fullscreen'=>'fullscreen','pause'=>'pause','play'=>'play','play-circle'=>'play-circle','play-sign'=>'play-sign','resize-full'=>'resize-full','resize-small'=>'resize-small','step-backward'=>'step-backward','step-forward'=>'step-forward','stop'=>'stop','youtube-play'=>'youtube-play','adn'=>'adn','android'=>'android','apple'=>'apple','bitbucket'=>'bitbucket','bitbucket-sign'=>'bitbucket-sign','btc'=>'btc','css3'=>'css3','dribbble'=>'dribbble','dropbox'=>'dropbox','facebook'=>'facebook','facebook-sign'=>'facebook-sign','flickr'=>'flickr','foursquare'=>'foursquare','github'=>'github','github-alt'=>'github-alt','github-sign'=>'github-sign','gittip'=>'gittip','google-plus'=>'google-plus','google-plus-sign'=>'google-plus-sign','html5'=>'html5','instagram'=>'instagram','linkedin'=>'linkedin','linkedin-sign'=>'linkedin-sign','linux'=>'linux','maxcdn'=>'maxcdn','pinterest'=>'pinterest','pinterest-sign'=>'pinterest-sign','renren'=>'renren','skype'=>'skype','stackexchange'=>'stackexchange','trello'=>'trello','tumblr'=>'tumblr','tumblr-sign'=>'tumblr-sign','twitter'=>'twitter','twitter-sign'=>'twitter-sign','vk'=>'vk','weibo'=>'weibo','windows'=>'windows','xing'=>'xing','xing-sign'=>'xing-sign','youtube'=>'youtube','youtube-play'=>'youtube-play','youtube-sign'=>'youtube-sign','ambulance'=>'ambulance','h-sign'=>'h-sign','hospital'=>'hospital','medkit'=>'medkit','plus-sign-alt'=>'plus-sign-alt','stethoscope'=>'stethoscope','user-md'=>'user-md'
			)
		)
	) 
);



//Social Icons
$official_shortcodes['member'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Members', 'official'), 
	'attr'=>array(

		'name'=>array(
			'type'=>'text', 
			'title'=>__('Full Name', 'official')
		),
		'role'=>array(
			'type'=>'text', 
			'title'=>__('Jobe Role', 'official')
		),
		'image'=>array(
			'type'=>'custom',
			'title'  => __('Please enter member image','official')
		)
		,
		'facebook'=>array(
			'type'=>'text', 
			'title'=>__('Facebook URL', 'official'),
			'desc'=>__('e.g. http://www.facebook.com/golgraphic (with http://)', 'official')
		),
		'twitter'=>array(
			'type'=>'text', 
			'title'=>__('Twitter URL', 'official')
		),
		'google_plus'=>array(
			'type'=>'text', 
			'title'=>__('Google+', 'official')
		),
		'dribbble'=>array(
			'type'=>'text', 
			'title'=>__('Dribbble', 'official')
		),
		'flickr'=>array(
			'type'=>'text', 
			'title'=>__('Flickr', 'official')
		),
		'linkedin'=>array(
			'type'=>'text', 
			'title'=>__('Linkedin', 'official')
		),
		'instagram'=>array(
			'type'=>'text', 
			'title'=>__('Instagram', 'official')
		),
		'skype'=>array(
			'type'=>'text', 
			'title'=>__('Skype', 'official')
		),
		'email'=>array(
			'type'=>'text', 
			'title'=>__('Email', 'official')
		)
	) 
);



//Message Box
$official_shortcodes['message'] = array( 
	'type'=>'regular', 
	'title'=>__('Message Box', 'official' ), 
	'attr'=>array( 
		'message'=>array('type'=>'text', 'title'=>__('Message', 'official')),
		'type'=>array(
			'type'=>'select', 
			'title'=>__('Message Type', 'official'),
			'values'=>array(
				'success' =>__('Success', 'official'),
				'info' =>__('Info', 'official'),
				'error' =>__('Error', 'official'),
				'warning' =>__('Warning', 'official')
			)
		),
		'icon'=>array(
			'type'=>'checkbox', 
			'title'=>__('Show Icon?', 'official')
		),
		'close_button'=>array(
			'type'=>'checkbox', 
			'title'=>__('Show close button?', 'official')
		)
	)
);






//Pricing Table
$official_shortcodes['pricing'] = array( 
	'type'=>'direct_to_editor', 
	'title'=>__('Pricing Table', 'official' ), 
	'attr'=>array( 
		'columns'=>array(
			'type'=>'radio', 
			'title'=>__('Columns', 'official'), 
			'desc' => __('How many columns would you like?', 'official'),
			'opt'=>array(
				'2'=>__('Two', 'official'),
				'3'=>__('Three', 'official'),
				'4'=>__('Four', 'official'),
				'5'=>__('Five', 'official')
				
			)
		),
		'style'=>array(
			'type'=>'select', 
			'title'=>__('Style', 'official'), 
			'values'=>array(
				'dark'=>__('Dark', 'official'),
				'light'=>__('Light', 'official')	
				
			)
		)
	)
);


//Progress Bar
$official_shortcodes['progress_bar'] = array( 
	'type'=>'regular', 
	'title'=>__('Progress Bar', 'official' ), 
	'attr'=>array( 
		'title'=>array('type'=>'text', 'title'=>__('Title', 'official')),
		'color'=>array('type'=>'text', 'title'=>__('Color', 'official')),
		'zoom'=>array('type'=>'bar'),
		'style'=>array(
			'type'=>'select', 
			'title'=>__('Style', 'official'),
			'values'=>array(
				'simple' => __('Simple', 'official'),
				'stripes' => __('Striped', 'official')
			)
		)
	)
);



//Service Box
$official_shortcodes['service'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Service Box', 'official'), 
	'attr'=>array(
		'style'=>array(
			'type'=>'select', 
			'title'=>__('Style', 'official'), 
			'values'=>array(
				'style1'=>__('Style #1', 'official'),
				'style2'=>__('Style #2', 'official'),
				'style3'=>__('Style #3', 'official'),
				'style4'=>__('Style #4', 'official'),
				'style5'=>__('Style #5', 'official'),
				'style6'=>__('Style #6', 'official'),
				'style7'=>__('Style #7', 'official')
			)
		),
		'title'=>array(
			'type'=>'text', 
			'title'=>__('Title', 'official')
		),
		'sub_title'=>array(
			'type'=>'text', 
			'title'=>__('Sub Title', 'official')
		),
		'icon'=>array(
			'type'=>'text', 
			'title'=>__('Icon', 'official')
		),
		'icon_color'=>array(
			'type'=>'text', 
			'title'=>__('Icon Color', 'official'),
			'desc'=>__('e.g. #CC0000 or red, blue,...', 'official')
		),
		'image'=>array(
			'type'=>'custom',
			'title'  => __('or Image, if you add Image it will be override the icon ','official')
		),
		'button_text'=>array(
			'type'=>'text', 
			'title'=>__('Button Text', 'official')
		),
		'button_default_color'=>array(
			'type'=>'select', 
			'title'=>__('Button Default Color', 'official'), 
			'values'=>array(
				'color1'=>__('Black', 'official'),
				'color2'=>__('Green', 'official'),
				'color3'=>__('Orange', 'official'),
				'color4'=>__('Blue', 'official'),
				'color5'=>__('Red', 'official'),
				'color6'=>__('Aqua', 'official'),
				'color7'=>__('Pharlap', 'official'),
				'color8'=>__('Gumbo', 'official'),
				'color9'=>__('Turquoise', 'official'),
				'customcolor'=>__('Custom Color', 'official')
				
			)
		),
		'button_custom_color'=>array(
			'type'=>'text', 
			'title'=>__('Button Custom Color', 'official'),
			'desc'=>__('e.g. #CC0000 or red, blue,... (If you want to use one of the default colors please leave this field empty.)', 'official')
		),
		'button_icon'=>array(
			'type'=>'text', 
			'title'=>__('Button Icon', 'official')
		),
		'button_size'=>array(
			'type'=>'radio', 
			'title'=>__('Button Size', 'official'), 
			'opt'=>array(
				'small'=>__('Small', 'official'),
				'medium'=>__('Medium', 'official'),
				'large'=>__('Large', 'official')	
				
			)
		),
		'url'=>array(
			'type'=>'text', 
			'title'=>__('Button URL (Link)', 'official')
		),
		'target'=>array(
			'type'=>'select', 
			'title'=> __('Link Target', 'official'), 
			'desc'=> __('Link open in New window or Current window', 'official'),
			'values'=>array(
				'_self'=>__('Current Window (_self)', 'official'),
				'_blank'=>__('New Window (_blank)', 'official')
			)
		)
	) 
);




//Social Icons
$official_shortcodes['social'] = array( 
	'type'=>'regular', 
	'title'=>__('Social Icons', 'official'), 
	'attr'=>array(

		'style'=>array(
			'type'=>'select', 
			'title'=>__('Style', 'official'),
			'values'=>array(
				'square' => __('Square + Border', 'official'),
				'square_wb' => __('Square', 'official'),
				'circular' => __('Circular + Border', 'official'),
				'circular_wb' => __('Circular', 'official'),
				'colorful_square' => __('Colorful Square', 'official'),
				'colorful_circular' => __('Colorful Circular', 'official')
			)
		),
		'target'=>array(
			'type'=>'select', 
			'title'=> __('Link Target', 'official'), 
			'desc'=> __('Link open in New window or Current window', 'official'),
			'values'=>array(
				'_self'=>__('Current Window (_self)', 'official'),
				'_blank'=>__('New Window (_blank)', 'official')
			)
		),
		'tooltip'=>array(
			'type'=>'select', 
			'title'=> __('Tooltip', 'official'), 
			'desc'=> __('Tooltip position or no tooltip', 'official'),
			'values'=>array(
				'notip'=>__('No Tooltip', 'official'),
				'toptip'=>__('Top Tooltip', 'official'),
				'righttip'=>__('Right Tooltip', 'official'),
				'bottomtip'=>__('Bottom Tooltip', 'official'),
				'lefttip'=>__('Left Tooltip', 'official')
			)
		),
		'facebook'=>array(
			'type'=>'text', 
			'title'=>__('Facebook URL', 'official'),
			'desc'=>__('e.g. http://www.facebook.com/golgraphic (with http://)', 'official')
		),
		'twitter'=>array(
			'type'=>'text', 
			'title'=>__('Twitter URL', 'official')
		),
		'google_plus'=>array(
			'type'=>'text', 
			'title'=>__('Google+', 'official')
		),
		'dribbble'=>array(
			'type'=>'text', 
			'title'=>__('Dribbble', 'official')
		),
		'rss'=>array(
			'type'=>'text', 
			'title'=>__('RSS', 'official')
		),
		'flickr'=>array(
			'type'=>'text', 
			'title'=>__('Flickr', 'official')
		),
		'linkedin'=>array(
			'type'=>'text', 
			'title'=>__('Linkedin', 'official')
		),
		'pinterest'=>array(
			'type'=>'text', 
			'title'=>__('Pinterest', 'official')
		),
		'instagram'=>array(
			'type'=>'text', 
			'title'=>__('Instagram', 'official')
		),
		'skype'=>array(
			'type'=>'text', 
			'title'=>__('Skype', 'official')
		),
		'tumblr'=>array(
			'type'=>'text', 
			'title'=>__('Tumblr', 'official')
		),
		'youtube'=>array(
			'type'=>'text', 
			'title'=>__('YouTube', 'official')
		),
		'xing'=>array(
			'type'=>'text', 
			'title'=>__('Xing', 'official')
		),
		'dropbox'=>array(
			'type'=>'text', 
			'title'=>__('Dropbox', 'official')
		),
		'stackexchange'=>array(
			'type'=>'text', 
			'title'=>__('StackExchange', 'official')
		),
		'bitbucket'=>array(
			'type'=>'text', 
			'title'=>__('BitBucket', 'official')
		),
		'weibo'=>array(
			'type'=>'text', 
			'title'=>__('Weibo', 'official')
		),
		'github'=>array(
			'type'=>'text', 
			'title'=>__('GitHub', 'official')
		),
		'foursquare'=>array(
			'type'=>'text', 
			'title'=>__('FourSquare', 'official')
		)
	) 
);



// Table
$official_shortcodes['table'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Table', 'official' )
);




//Tabs
$official_shortcodes['tabs'] = array( 
	'type'=>'dynamic', 
	'title'=>__('Tabs', 'official' ), 
	'attr'=>array(
		'tabs'=>array('type'=>'custom')
	)
);






//Toggle
$official_shortcodes['toggle'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Toggle', 'official' ), 
	'attr'=>array( 
		'title'=>array('type'=>'text', 'title'=>__('Title', 'official')),
		'open'=>array('type'=>'checkbox', 'title'=>__('Open?', 'official'))
	)
);






// Video
$official_shortcodes['video'] = array( 
	'type'=>'regular', 
	'title'=>__('Video', 'official' ), 
	'attr'=>array(
		'type'=>array(
				'type'=>'select', 
				'title'=>__('Type', 'official'), 
				'values'=>array(
					'youtube'=>__('YouTube', 'official'),
					'vimeo'=>__('Vimeo', 'official'),
					'dailymotion'=>__('Daily Motion', 'official')
				)
			),
		'id'=>array('type'=>'text', 'title'  => __('ID','official'),'desc'=> __('Id of video for e.g. https://www.youtube.com/watch?v=5ilc3w8Jmdo in this video of youtube ID is: 5ilc3w8Jmdo','official')),
		'width'=>array('type'=>'text', 'title'  => __('Width','official')),
		'height'=>array('type'=>'text', 'title'  => __('Height','official')),
		'autoplay'=>array('type'=>'checkbox', 'title'=>__('Autoplay?', 'official'))
	)
);





$official_shortcodes['header_7'] = array( 
	'type'=>'heading', 
	'title'=>__('Recent Posts/Works/Clients', 'official' )
);


//Testimonial Slider
$official_shortcodes['testimonial'] = array( 
	'type'=>'radios', 
	'title'=>__('Testimonials & Quotes', 'official'), 
	'attr'=>array(
		'type'=>array(
			'type'=>'radio', 
			'title'=>__('Type', 'official'), 
			'opt'=>array(
				'testimonial'=>__('Testimonial', 'official'),
				'quote'=>__('Quote', 'official')
			)
		),
		'style'=>array(
			'type'=>'radio', 
			'title'=>__('Style', 'official'), 
			'opt'=>array(
				'light'=>__('light', 'official'),
				'dark'=>__('Dark', 'official')
			)
		),
		'title'=>array(
			'type'=>'text', 
			'title'=>__('Title', 'official')
		),
		'items'=>array(
			'type'=>'select', 
			'title'=>__('Number of items to show', 'official'), 
			'values'=>array(
				'1'=>__('1', 'official'),
				'2'=>__('2', 'official'),
				'3'=>__('3', 'official'),
				'4'=>__('4', 'official'),
				'5'=>__('5', 'official'),
				'6'=>__('6', 'official'),
				'7'=>__('7', 'official'),
				'8'=>__('8', 'official'),
				'9'=>__('9', 'official'),
				'10'=>__('10', 'official'),
				'11'=>__('11', 'official'),
				'12'=>__('12', 'official'),
				'13'=>__('13', 'official'),
				'14'=>__('14', 'official'),
				'15'=>__('15', 'official'),
				'16'=>__('16', 'official'),
				'17'=>__('17', 'official'),
				'18'=>__('18', 'official'),
				'19'=>__('19', 'official'),
				'20'=>__('20', 'official'),

			)
		),
		'cat'=>array(
			'type'=>'text', 
			'title'=>__('Category', 'official'),
			'desc' => __('Please enter the testimonial category slug for filtering the result. (optional)', 'official')
		),
		'transition'=>array(
			'type'=>'select', 
			'title'=>__('Please select the slider transition effect.', 'official'), 
			'values'=>array(
				'slide'=>__('Slide', 'official'),
				'fade'=>__('Fade', 'official')

			)
		)
	) 
);


//Client Carousel
$official_shortcodes['clients'] = array( 
	'type'=>'regular', 
	'title'=>__('Clients Carousel', 'official'), 
	'attr'=>array(
		'columns'=>array(
			'type'=>'radio', 
			'title'=>__('Columns', 'official'), 
			'desc' => __('How many columns would you like?', 'official'),
			'opt'=>array(
				'1'=>__('One', 'official'),
				'2'=>__('Two', 'official'),
				'3'=>__('Three', 'official'),
				'4'=>__('Four', 'official')
				
			)
		),
		'title'=>array(
			'type'=>'text', 
			'title'=>__('Title', 'official'),
			'desc' => __('Optional', 'official')
		),
		'cat'=>array(
			'type'=>'text', 
			'title'=>__('Category', 'official'),
			'desc' => __('Please enter the Clients Category slug for filtering the result. (optional)', 'official')
		)
	) 
);



//Portfolio
$official_shortcodes['portfolio'] = array( 
	'type'=>'regular', 
	'title'=>__('Portfolio Items + Carousel', 'official' ), 
	'attr'=>array( 
		'columns'=>array(
			'type'=>'radio', 
			'title'=>__('Columns', 'official'), 
			'desc' => __('How many columns would you like?', 'official'),
			'opt'=>array(
				'1'=>__('One', 'official'),
				'2'=>__('Two', 'official'),
				'3'=>__('Three', 'official'),
				'4'=>__('Four', 'official')
				
			)
		),
		'title'=>array(
			'type'=>'text', 
			'title'=>__('Title', 'official'),
			'desc' => __('Optional', 'official')
		),
		'cat'=>array(
			'type'=>'text', 
			'title'=>__('Category', 'official'),
			'desc' => __('Please enter the Portfolio Category slug for filtering the result. (optional)', 'official')
		),
		'items'=>array(
			'type'=>'text', 
			'title'=>__('Number of Items', 'official'),
			'desc' => __('Please enter the number of items. e.g. 10', 'official')
		),
		'carousel'=>array(
			'type'=>'checkbox', 
			'title'=>__('Turn it to Carousel?', 'official')
		)
	)
);



//Recent Posts
$official_shortcodes['recentposts'] = array( 
	'type'=>'regular', 
	'title'=>__('Recent Posts', 'official' ), 
	'attr'=>array( 
		'title'=>array(
			'type'=>'text', 
			'title'=>__('Title', 'official'),
			'desc' => __('Optional', 'official')
		),
		'cat'=>array(
			'type'=>'text', 
			'title'=>__('Category', 'official'),
			'desc' => __('Please enter the Category slug for filtering the result. (optional)', 'official')
		),
		'items'=>array(
			'type'=>'text', 
			'title'=>__('Number of Items', 'official'),
			'desc' => __('Please enter the number of items. e.g. 10', 'official')
		)
	)
);

?>