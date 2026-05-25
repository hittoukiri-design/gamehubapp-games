<?php
$public_guide_slugs = [
  'library',
  'guide-library-map',
  'mobile-guide-notes',
  'reading-safety-notes',
  'account-safety-tips',
  'privacy-info-guide',
  'mobile-browser-help',
  'content-update-notes',
  'app-info-center',
  'session-reminder-tips',
  'common-guide-faq',
  'lsg-vs-pbks-result-ipl-2026',
  'lsg-vs-pbks-preview-ipl-2026',
  'mi-vs-rr-preview-ipl-2026',
  'kkr-vs-dc-preview-ipl-2026',
  'kkr-vs-dc-result-ipl-2026',
  'rcb-vs-gt-qualifier-1-preview-ipl-2026',
];

$neutral_pages = [
  'library' => [
    'Guide Library',
    'Guide Library: Simple Reading Pages and Mobile Notes',
    'A clean overview of active guide pages, mobile help, privacy notes, content updates, and responsible reading reminders.',
    'Start from one organized library page with clear links to active information pages.',
  ],
  'guide-library-map' => [
    'Topic Map',
    'Guide Library Map',
    'A plain topic map for finding active guide pages without repeated or unrelated links.',
    'Browse the main content areas from a simple map of active guide pages.',
  ],
  'mobile-guide-notes' => [
    'Mobile Notes',
    'Mobile Guide Notes',
    'Mobile-first guide notes for readers who want clear content on a phone screen.',
    'Use simple mobile reading notes for cleaner access from small screens.',
  ],
  'reading-safety-notes' => [
    'Reading Safety',
    'Reading Safety Notes',
    'Responsible reading notes for calmer browsing and clearer information habits.',
    'Use simple limits, slower decisions, and better context while reading digital information content.',
  ],
  'account-safety-tips' => [
    'Safety Guide',
    'Account Safety Tips',
    'General account safety reminders for mobile users, passwords, and sign-in awareness.',
    'Review basic safety habits before saving credentials or using shared devices.',
  ],
  'privacy-info-guide' => [
    'Privacy Guide',
    'Privacy Info Guide',
    'A short privacy information guide for safer browsing and clearer data awareness.',
    'Understand basic privacy habits, browser settings, and personal information reminders.',
  ],
  'mobile-browser-help' => [
    'Browser Help',
    'Mobile Browser Help',
    'Helpful mobile browser notes for smoother reading across Android, iPhone, and desktop.',
    'Check browser basics such as refresh, page loading, and mobile display comfort.',
  ],
  'content-update-notes' => [
    'Update Notes',
    'Content Update Notes',
    'A simple update notes page explaining how guide content is refreshed and organized.',
    'See how article updates and guide pages stay easier to follow.',
  ],
  'app-info-center' => [
    'Info Center',
    'App Info Center',
    'A neutral information center for guide navigation and mobile reading basics.',
    'Find general guide information with direct public reading pages and clear navigation.',
  ],
  'session-reminder-tips' => [
    'Reminder Guide',
    'Session Reminder Tips',
    'Healthy session reminders for reading, browsing, and taking breaks on mobile.',
    'Use short reading sessions, breaks, and calmer comparison habits.',
  ],
  'common-guide-faq' => [
    'Help Center',
    'Common Guide FAQ',
    'Common questions about the guide hub, navigation, privacy notes, and mobile help.',
    'Find simple answers about guide pages, privacy notes, mobile help, and responsible reading reminders.',
  ],
];

$default_related = [
  'library',
  'guide-library-map',
  'privacy-info-guide',
  'mobile-browser-help',
];

$guides = [];

foreach ($neutral_pages as $slug => [$type, $title, $description, $excerpt]) {
  $related = array_values(array_filter($default_related, fn($item) => $item !== $slug));
  $guides[$slug] = [
    'type' => $type,
    'title' => $title,
    'meta_title' => $title . ' | Yaarwin Games',
    'meta_description' => $description,
    'excerpt' => $excerpt,
    'thumb' => 'live',
    'keywords' => ['guide library', 'mobile reading', 'privacy information', 'responsible browsing'],
    'intro' => [
      $description,
      'This page is written as general information content for readers who want clear navigation, mobile help, privacy notes, and responsible reading reminders.',
    ],
    'sections' => [
      [
        'heading' => 'What this page helps with',
        'body' => [
          $excerpt,
          'The goal is to keep the topic easy to scan, useful for first-time readers, and connected to the active guide library.',
        ],
      ],
      [
        'heading' => 'Simple reading checklist',
        'items' => [
          'Start with the page title and summary.',
          'Use only active links from the guide library.',
          'Review privacy and mobile help pages when you need extra context.',
          'Keep browsing sessions short and intentional.',
        ],
      ],
      [
        'heading' => 'Why the page stays simple',
        'body' => [
          'A clear guide page should not force readers through repeated links, vague redirects, or unfinished sections.',
          'Each active page uses direct navigation and visible information so the final URL opens the content readers expect.',
        ],
      ],
    ],
    'faq' => [
      ['Is this page promotional?', 'No. It is written as general guide and information content for readers.'],
      ['Is this page only for reading?', 'Yes. This site is an independent guide hub built around public articles, topic notes, and simple navigation.'],
      ['What should I read next?', 'Use the guide library to continue with privacy notes, safety notes, and mobile-friendly explainers.'],
    ],
    'related' => array_slice($related, 0, 4),
  ];
}

$guides['library']['sections'] = [
  [
    'heading' => 'A clean starting point',
    'body' => [
      'The guide library groups the active pages into a simple reading path. It is designed to avoid repeated links, unfinished pages, or confusing destination paths.',
      'Use it to open topic navigation, mobile help, privacy information, content updates, common questions, and reading safety notes.',
    ],
  ],
  [
    'heading' => 'Active guide areas',
    'items' => [
      'Topic map for quick navigation.',
      'Mobile browser help for small-screen reading.',
      'Privacy information for basic data awareness.',
      'Content update notes for page changes.',
      'Reading safety notes for calmer browsing habits.',
    ],
  ],
  [
    'heading' => 'Public reading only',
    'body' => [
      'The guide hub is built as public reading content. It keeps navigation direct, visible, and focused on article information.',
      'Keeping the page focused on information helps the destination stay clear and easy to review.',
    ],
  ],
];

$guides['library']['faq'] = [
  ['Is this a real guide page?', 'Yes. This page is a guide library overview with links to active reading, privacy, mobile help, and update pages.'],
  ['Does this page require private access?', 'No. It is a public reading page with visible article content and direct navigation.'],
  ['Which page should I open first?', 'Start with the Guide Library Map, then use Common Questions, Mobile Help, or Privacy Info depending on what you need.'],
];

$guides['lsg-vs-pbks-preview-ipl-2026'] = [
  'type' => 'Cricket Culture',
  'title' => 'LSG vs PBKS Preview IPL 2026: Form, Players and Match Context',
  'meta_title' => 'LSG vs PBKS Preview IPL 2026 | Yaarwin Games',
  'meta_description' => 'Neutral LSG vs PBKS IPL 2026 preview with team form, player context, Lucknow home strategy and Punjab Kings momentum notes.',
  'excerpt' => 'A neutral cricket culture preview for Lucknow Super Giants vs Punjab Kings, focused on form, tactics and match context.',
  'thumb' => 'live',
  'keywords' => ['LSG vs PBKS preview', 'IPL 2026 match context', 'cricket culture India', 'Lucknow Super Giants Punjab Kings'],
  'intro' => [
    'Lucknow Super Giants meet Punjab Kings in Match 68 of IPL 2026 at Ekana Stadium, Lucknow. This guide looks at team form, player influence and tactical context without treating the match as a guaranteed outcome.',
    'Punjab may look slightly stronger because of urgency and match-winning quality, but Lucknow still have home conditions and strategic options that can change the direction of the game.',
  ],
  'sections' => [
    [
      'heading' => 'Why Punjab Kings may look dangerous',
      'body' => [
        'Punjab Kings enter this fixture with a stronger reason to push hard. Their best players can shift a T20 match quickly if the powerplay starts cleanly and the middle overs stay controlled.',
        'If PBKS protect wickets and leave enough batting depth for the final overs, they can put Lucknow under pressure with either a strong chase or a defendable total.',
      ],
    ],
    [
      'heading' => 'Why Lucknow Super Giants can still respond',
      'body' => [
        'Lucknow Super Giants should not be reduced to the weaker side only because Punjab have urgency. Home conditions can matter, especially if the surface rewards slower bowling, longer boundaries or disciplined middle-over plans.',
        'A good LSG start, early wickets or a settled partnership can make this match far tighter than a simple form comparison suggests.',
      ],
    ],
    [
      'heading' => 'Balanced match read',
      'body' => [
        'The balanced view is simple: Punjab Kings may carry a narrow edge before the first ball, but Lucknow Super Giants remain very capable of turning the match with strategy and execution.',
        'For readers following Indian cricket culture, this is the kind of late-season fixture where pressure, team identity and one decisive over can become the main story.',
      ],
    ],
    [
      'heading' => 'SEO note for readers',
      'body' => [
        'This LSG vs PBKS preview is written for cricket fans looking for clear IPL 2026 match context, team form notes and tactical reading before tonight’s fixture.',
      ],
    ],
  ],
  'faq' => [
    ['Who has the edge in LSG vs PBKS?', 'Punjab Kings may have a slight edge because of urgency and player quality, but Lucknow Super Giants can still win through home strategy and disciplined execution.'],
    ['Is this a prediction guarantee?', 'No. It is a neutral cricket culture preview, not a guaranteed result claim.'],
    ['What should fans watch first?', 'Watch the toss, confirmed XI, powerplay tempo and how each team handles the middle overs.'],
  ],
  'related' => ['library', 'guide-library-map', 'content-update-notes', 'reading-safety-notes'],
];

$guides['lsg-vs-pbks-result-ipl-2026'] = [
  'type' => 'Cricket Culture',
  'title' => 'LSG vs PBKS Result IPL 2026: Punjab Chase 197 in Lucknow',
  'meta_title' => 'LSG vs PBKS Result IPL 2026 | Yaarwin Games',
  'meta_description' => 'Neutral LSG vs PBKS IPL 2026 result recap with score context, Punjab Kings chase notes and Lucknow Super Giants innings summary.',
  'excerpt' => 'A neutral cricket culture recap of Punjab Kings chasing 197 against Lucknow Super Giants in Match 68 of IPL 2026.',
  'thumb' => 'live',
  'keywords' => ['LSG vs PBKS result', 'IPL 2026 score context', 'Punjab Kings chase', 'Lucknow Super Giants recap'],
  'intro' => [
    'Punjab Kings beat Lucknow Super Giants by 7 wickets in Match 68 of IPL 2026 at Lucknow. LSG made 196/6 in 20 overs, and PBKS reached 200/3 in 18 overs.',
    'This recap focuses on the cricket story: how Lucknow built a defendable total, why Punjab’s chase stayed controlled, and what fans can watch before the final league-day fixtures.',
  ],
  'sections' => [
    [
      'heading' => 'Score summary',
      'body' => [
        'Lucknow Super Giants finished on 196/6 after Josh Inglis made 72 from 44 balls, with Ayush Badoni and Abdul Samad adding late tempo.',
        'Punjab Kings replied with 200/3 in 18 overs. Shreyas Iyer finished unbeaten on 101 from 51 balls, while Prabhsimran Singh added 69 from 39 to keep the chase ahead of the rate.',
      ],
    ],
    [
      'heading' => 'Why the chase worked',
      'body' => [
        'Punjab did not let the asking rate become a late-over problem. The chase stayed clear because the top order attacked without losing control and left enough batting depth for the final phase.',
        'The result also kept Punjab’s late-season story alive and gave the final league day more pressure around Mumbai Indians vs Rajasthan Royals and Kolkata Knight Riders vs Delhi Capitals.',
      ],
    ],
    [
      'heading' => 'What Lucknow can take from it',
      'body' => [
        'Lucknow had enough runs to create pressure, but the bowling innings needed earlier breakthroughs and a tighter middle phase. When a chasing side has a set batter deep into the innings, even a strong total can start to look reachable.',
      ],
    ],
    [
      'heading' => 'Next fixtures to follow',
      'body' => [
        'The next IPL 2026 watchlist now shifts to playoffs: Royal Challengers Bengaluru vs Gujarat Titans (Qualifier 1) on May 26, then the Eliminator on May 28.',
      ],
    ],
  ],
  'faq' => [
    ['Who won LSG vs PBKS in IPL 2026?', 'Punjab Kings beat Lucknow Super Giants by 7 wickets.'],
    ['What was the LSG vs PBKS score?', 'Lucknow Super Giants made 196/6, and Punjab Kings replied with 200/3 in 18 overs.'],
    ['Who was the standout player?', 'Shreyas Iyer was the standout performer with an unbeaten century in the chase.'],
  ],
  'related' => ['lsg-vs-pbks-preview-ipl-2026', 'library', 'guide-library-map', 'content-update-notes'],
];

$guides['mi-vs-rr-preview-ipl-2026'] = [
  'type' => 'Cricket Culture',
  'title' => 'MI vs RR Preview IPL 2026: Wankhede Form and Match Context',
  'meta_title' => 'MI vs RR Preview IPL 2026 | Yaarwin Games',
  'meta_description' => 'Neutral MI vs RR IPL 2026 preview with Wankhede match context, Rajasthan Royals motivation, Mumbai Indians home strength and key tactical notes.',
  'excerpt' => 'A neutral cricket culture preview for Mumbai Indians vs Rajasthan Royals at Wankhede Stadium.',
  'thumb' => 'live',
  'keywords' => ['MI vs RR preview', 'IPL 2026 match context', 'Mumbai Indians Rajasthan Royals', 'cricket culture India'],
  'intro' => [
    'Mumbai Indians meet Rajasthan Royals on May 24, 2026 at Wankhede Stadium, Mumbai. This preview looks at team motivation, player influence and tactical context without treating the match as a certain result.',
    'Rajasthan may look slightly stronger because of late-season urgency, but Mumbai still have home familiarity and experienced match-winners who can change the afternoon quickly.',
  ],
  'sections' => [
    [
      'heading' => 'Why Rajasthan may look dangerous',
      'body' => [
        'Rajasthan Royals have strong motivation in the late league stage. If their top order handles Wankhede pace and bounce, they can build pressure through stable batting and disciplined middle overs.',
        'A clean powerplay and wickets in hand for the finish would give RR the clearest route to controlling the match.',
      ],
    ],
    [
      'heading' => 'Why Mumbai can still respond',
      'body' => [
        'Mumbai Indians remain a serious threat at Wankhede. Home conditions, experienced leadership and familiar hitting angles can make MI dangerous even when the table situation looks difficult.',
        'If Mumbai strike early or build one strong partnership, the match can swing away from a simple form-based read.',
      ],
    ],
    [
      'heading' => 'Balanced match read',
      'body' => [
        'The balanced view is RR narrow edge before the first ball, with MI still very capable of changing the match through home rhythm and tactical execution.',
        'For cricket fans, the first six overs and the way each side handles middle-over pressure may become the most important part of the story.',
      ],
    ],
    [
      'heading' => 'SEO note for readers',
      'body' => [
        'This MI vs RR preview is written for cricket fans who want clear IPL 2026 match context, team form notes, key player angles and a balanced pre-match read.',
      ],
    ],
  ],
  'faq' => [
    ['Who has the edge in MI vs RR?', 'Rajasthan Royals may have a slight edge because of urgency, but Mumbai Indians can still win through home conditions and strong execution.'],
    ['Is this a guaranteed prediction?', 'No. It is a neutral cricket culture preview, not a guaranteed result claim.'],
    ['What should fans watch first?', 'Watch the toss, confirmed XI, Wankhede conditions and the powerplay tempo.'],
  ],
  'related' => ['lsg-vs-pbks-result-ipl-2026', 'library', 'guide-library-map', 'reading-safety-notes'],
];

$guides['kkr-vs-dc-preview-ipl-2026'] = [
  'type' => 'Cricket Culture',
  'title' => 'KKR vs DC Preview IPL 2026: Eden Gardens Form and Match Context',
  'meta_title' => 'KKR vs DC Preview IPL 2026 | Yaarwin Games',
  'meta_description' => 'Neutral KKR vs DC IPL 2026 preview with Eden Gardens match context, Delhi Capitals pressure, Kolkata Knight Riders strategy notes and key tactical angles.',
  'excerpt' => 'A neutral cricket culture preview for Kolkata Knight Riders vs Delhi Capitals at Eden Gardens.',
  'thumb' => 'live',
  'keywords' => ['KKR vs DC preview', 'IPL 2026 match context', 'Kolkata Knight Riders Delhi Capitals', 'cricket culture India'],
  'intro' => [
    'Kolkata Knight Riders meet Delhi Capitals on May 24, 2026 at Eden Gardens, Kolkata. This guide looks at match pressure, team strengths and tactical context before the evening fixture.',
    'Delhi may carry stronger urgency, but Kolkata have home rhythm and enough strategic variety to make this a difficult match to call.',
  ],
  'sections' => [
    [
      'heading' => 'Why Delhi may look dangerous',
      'body' => [
        'Delhi Capitals have a clear reason to push hard in a late-season match. Their experienced batting core and all-round options can create a steady route if the start is calm.',
        'If DC avoid early damage and keep wickets available for the final phase, they can put pressure back on Kolkata.',
      ],
    ],
    [
      'heading' => 'Why Kolkata can still respond',
      'body' => [
        'Kolkata Knight Riders are difficult to ignore at Eden Gardens. Home familiarity, bowling changes and crowd energy can make the match feel different once pressure rises.',
        'A good KKR powerplay or a tight middle-over phase can force Delhi into riskier decisions.',
      ],
    ],
    [
      'heading' => 'Balanced match read',
      'body' => [
        'The balanced view is DC narrow edge because of urgency, with KKR still live through home strategy and execution.',
        'For cricket fans, this is the kind of match where toss, dew, early wickets and one composed partnership can define the result.',
      ],
    ],
    [
      'heading' => 'SEO note for readers',
      'body' => [
        'This KKR vs DC preview is written for cricket fans who want clear IPL 2026 match context, team form notes, key player angles and a balanced pre-match read.',
      ],
    ],
  ],
  'faq' => [
    ['Who has the edge in KKR vs DC?', 'Delhi Capitals may have a slight edge because of urgency, but Kolkata Knight Riders can still win through home conditions and better middle-over control.'],
    ['Is this a result article?', 'No. It is a pre-match cricket culture preview.'],
    ['What should fans watch first?', 'Watch the toss, confirmed XI, dew factor and how each side handles the first six overs.'],
  ],
  'related' => ['mi-vs-rr-preview-ipl-2026', 'library', 'guide-library-map', 'content-update-notes'],
];

$guides['kkr-vs-dc-result-ipl-2026'] = [
  'type' => 'Cricket Culture',
  'title' => 'KKR vs DC Result IPL 2026: Delhi Capitals Win by 40 Runs',
  'meta_title' => 'KKR vs DC Result IPL 2026 | Yaarwin Games',
  'meta_description' => 'Neutral KKR vs DC IPL 2026 result recap with score context, Delhi Capitals batting push and playoff watchlist for upcoming matches.',
  'excerpt' => 'A neutral cricket culture recap of Delhi Capitals beating Kolkata Knight Riders by 40 runs in Match 70 of IPL 2026.',
  'thumb' => 'live',
  'keywords' => ['KKR vs DC result', 'IPL 2026 Match 70 recap', 'Delhi Capitals win', 'cricket culture India'],
  'intro' => [
    'Delhi Capitals beat Kolkata Knight Riders by 40 runs in Match 70 of IPL 2026 at Eden Gardens, Kolkata. DC posted 203/5 in 20 overs, and KKR were bowled out for 163 in 18.4 overs.',
    'This recap is written as a neutral cricket culture update with score context, turning points, and the playoff watchlist for readers tracking IPL 2026 momentum.',
  ],
  'sections' => [
    [
      'heading' => 'Score summary',
      'body' => [
        'Delhi Capitals built 203/5 with a fast top-order platform and enough finishing control to keep the scoring rate above par.',
        'Kolkata Knight Riders needed a steady start in reply, but wickets during the chase slowed the innings and KKR closed on 163 all out in 18.4 overs.',
      ],
    ],
    [
      'heading' => 'Why Delhi controlled the game',
      'body' => [
        'Delhi’s innings avoided long silent phases, so pressure stayed on KKR throughout the chase. With a bigger target and fewer settled partnerships, Kolkata had to force the pace early.',
        'Once the chase lost shape through wickets, DC were able to control the final phase and secure a clear-margin win.',
      ],
    ],
    [
      'heading' => 'What comes next in IPL 2026',
      'body' => [
        'With league Match 70 complete, the IPL 2026 watchlist now moves to the playoffs on May 26, May 28, May 30, and the final on May 31.',
        'The first playoff fixture is Royal Challengers Bengaluru vs Gujarat Titans in Qualifier 1 on May 26.',
      ],
    ],
  ],
  'faq' => [
    ['Who won KKR vs DC in IPL 2026 Match 70?', 'Delhi Capitals won by 40 runs.'],
    ['What was the KKR vs DC scoreline?', 'Delhi Capitals made 203/5 and Kolkata Knight Riders were all out for 163 in 18.4 overs.'],
    ['What is the next IPL 2026 match to watch?', 'The next key match is Qualifier 1: Royal Challengers Bengaluru vs Gujarat Titans on May 26, 2026.'],
  ],
  'related' => ['rcb-vs-gt-qualifier-1-preview-ipl-2026', 'lsg-vs-pbks-result-ipl-2026', 'library', 'guide-library-map'],
];

$guides['rcb-vs-gt-qualifier-1-preview-ipl-2026'] = [
  'type' => 'Cricket Culture',
  'title' => 'RCB vs GT Qualifier 1 Preview IPL 2026: Dharamshala Match Context',
  'meta_title' => 'RCB vs GT Qualifier 1 Preview IPL 2026 | Yaarwin Games',
  'meta_description' => 'Neutral RCB vs GT Qualifier 1 IPL 2026 preview with Dharamshala match context, Bengaluru star power, Gujarat Titans balance and playoff pressure notes.',
  'excerpt' => 'A neutral cricket culture preview for Royal Challengers Bengaluru vs Gujarat Titans in IPL 2026 Qualifier 1.',
  'thumb' => 'live',
  'keywords' => ['RCB vs GT preview', 'IPL 2026 Qualifier 1', 'Royal Challengers Bengaluru Gujarat Titans', 'cricket culture India'],
  'intro' => [
    'Royal Challengers Bengaluru meet Gujarat Titans in Qualifier 1 on May 26, 2026 at the HPCA Stadium, Dharamshala. This preview focuses on playoff pressure, team balance and key tactical context.',
    'RCB may carry momentum and star power, but Gujarat Titans have the structure and calm match management to turn a playoff quickly.',
  ],
  'sections' => [
    [
      'heading' => 'Why Bengaluru may look dangerous',
      'body' => [
        'Royal Challengers Bengaluru have batting quality that can change a playoff in a short burst. If the top order starts with control and the middle order keeps tempo, RCB can build a strong path toward the final.',
        'Their best chance is to avoid panic phases and keep pressure on Gujarat through clean scoring windows.',
      ],
    ],
    [
      'heading' => 'Why Gujarat can still respond',
      'body' => [
        'Gujarat Titans have balance, bowling options and playoff temperament. If GT control the new ball or slow the game in the middle overs, they can make RCB work much harder for momentum.',
        'A composed Gujarat chase or a disciplined defend can keep this Qualifier 1 tight until the final phase.',
      ],
    ],
    [
      'heading' => 'Balanced match read',
      'body' => [
        'The balanced view is RCB narrow edge because of momentum and star power, with GT still very live because of structure and pressure control.',
        'For cricket fans, dew, toss, powerplay wickets and the first middle-over squeeze may decide which side handles the playoff stage better.',
      ],
    ],
    [
      'heading' => 'SEO note for readers',
      'body' => [
        'This RCB vs GT Qualifier 1 preview is written for cricket fans who want clear IPL 2026 playoff context, team form notes, key player angles and a balanced pre-match read.',
      ],
    ],
  ],
  'faq' => [
    ['Who has the edge in RCB vs GT Qualifier 1?', 'RCB may have a slight edge because of momentum and star power, but Gujarat Titans can still win through balance and pressure control.'],
    ['Where is RCB vs GT Qualifier 1 scheduled?', 'The match is scheduled at the HPCA Stadium in Dharamshala.'],
    ['What should fans watch first?', 'Watch the toss, dew conditions, powerplay wickets and how each side handles playoff pressure.'],
  ],
  'related' => ['kkr-vs-dc-preview-ipl-2026', 'mi-vs-rr-preview-ipl-2026', 'library', 'guide-library-map'],
];

$public_guides = array_filter(
  $guides,
  fn($slug) => in_array($slug, $public_guide_slugs, true),
  ARRAY_FILTER_USE_KEY
);

$hero_cards = [
  ['title' => 'Guide Library', 'copy' => 'Start with the main topic hub', 'thumb' => 'live', 'slug' => 'library', 'tone' => 'green'],
  ['title' => 'Topic Map', 'copy' => 'Browse the active page list', 'thumb' => 'live', 'slug' => 'guide-library-map', 'tone' => 'purple'],
  ['title' => 'Common Questions', 'copy' => 'Read simple answers', 'thumb' => 'live', 'slug' => 'common-guide-faq', 'tone' => 'saffron'],
  ['title' => 'Mobile Help', 'copy' => 'Improve phone viewing', 'thumb' => 'live', 'slug' => 'mobile-browser-help', 'tone' => 'blue'],
  ['title' => 'Privacy Info', 'copy' => 'Review browsing basics', 'thumb' => 'live', 'slug' => 'privacy-info-guide', 'tone' => 'gold'],
  ['title' => 'Reading Safety', 'copy' => 'Use calmer guide habits', 'thumb' => 'live', 'slug' => 'reading-safety-notes', 'tone' => 'violet'],
];

$category_cards = [
  ['title' => 'Guide Library', 'copy' => 'A clean starting point for available reading pages.', 'thumb' => 'live', 'slug' => 'library'],
  ['title' => 'Topic Map', 'copy' => 'Find the main guide sections from one page.', 'thumb' => 'live', 'slug' => 'guide-library-map'],
  ['title' => 'Common Questions', 'copy' => 'Short answers about the guide hub and navigation.', 'thumb' => 'live', 'slug' => 'common-guide-faq'],
  ['title' => 'Privacy Info', 'copy' => 'Basic privacy and browser-awareness notes.', 'thumb' => 'live', 'slug' => 'privacy-info-guide'],
  ['title' => 'Mobile Help', 'copy' => 'Phone viewing and display comfort tips.', 'thumb' => 'live', 'slug' => 'mobile-browser-help'],
  ['title' => 'Content Updates', 'copy' => 'Notes about refreshed pages and article changes.', 'thumb' => 'live', 'slug' => 'content-update-notes'],
  ['title' => 'Reading Safety', 'copy' => 'Simple reminders for calmer browsing habits.', 'thumb' => 'live', 'slug' => 'reading-safety-notes'],
  ['title' => 'Mobile Notes', 'copy' => 'Small-screen reading notes and guide basics.', 'thumb' => 'live', 'slug' => 'mobile-guide-notes'],
];

$article_cards = [
  ['type' => 'Cricket Culture', 'slug' => 'kkr-vs-dc-result-ipl-2026'],
  ['type' => 'Cricket Culture', 'slug' => 'rcb-vs-gt-qualifier-1-preview-ipl-2026'],
  ['type' => 'Cricket Culture', 'slug' => 'lsg-vs-pbks-result-ipl-2026'],
  ['type' => 'Cricket Culture', 'slug' => 'mi-vs-rr-preview-ipl-2026'],
  ['type' => 'Guide Notes', 'slug' => 'library'],
  ['type' => 'Topic Map', 'slug' => 'guide-library-map'],
  ['type' => 'Help Notes', 'slug' => 'common-guide-faq'],
  ['type' => 'Privacy', 'slug' => 'privacy-info-guide'],
  ['type' => 'Mobile Help', 'slug' => 'mobile-browser-help'],
];
