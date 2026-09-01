<?php

$profile = [
    'name' => 'James Gabriele',
    'short_name' => 'Gab',
    'title' => 'AWS Community Builder & Kiro Ambassador',
    'location' => 'Metro Manila, Philippines',
    'email' => '4regab@gmail.com',
    'github' => 'https://github.com/4regab',
    'linkedin' => 'https://www.linkedin.com/in/4regab',
    'devto' => 'https://dev.to/4regab',
    'aws_community' => 'https://builder.aws.com/community/@jamesgabriele',
    'kiro_ambassador' => 'https://kiro.dev/blog/introducing-kiro-ambassadors/',
    'headline' => 'a software developer based in Metro Manila. Passionate about open source, cloud engineering, AI and building communities.',
    'bio' => 'This is my own little space on the web to showcase my projects, share insights, and build in public. Take a look at my recent projects, read through my notes, and feel free to reach out.',
    'about' => [
        'I am James Gabriele — an AWS Community Builder (AI Engineering) and Kiro Ambassador based in Metro Manila, Philippines.',
        'I am a student leader and stay active in tech organizations across the Philippines. Community building is a big part of how I learn and give back — workshops, speakerships, event organizer, and spaces where people ship together.',
    ],
];

$certifications = [
    [
        'name' => 'AWS Certified Solutions Architect – Associate (SAA-C03)',
        'issuer' => 'Amazon Web Services (AWS)',
        'issued' => 'Apr 2026',
        'expires' => null,
        'url' => 'https://www.credly.com/badges/983a12fe-676d-40b6-82f6-1b0081538f39/linked_in_profile',
    ],
    [
        'name' => 'AWS AI Practitioner Challenge',
        'issuer' => 'Udacity',
        'issued' => 'May 2026',
        'expires' => null,
        'url' => 'https://www.udacity.com/certificate/e/9e01ffbe-28e5-11f1-926e-1b9a82e37a18',
    ],
    [
        'name' => 'AI Engineer for Developers Associate',
        'issuer' => 'Datacamp',
        'issued' => 'Jan 2026',
        'expires' => null,
        'url' => 'https://www.datacamp.com/certificate/AIEDA0018001634705',
    ],
];

$projects = [
    [
        'slug' => 'deepterm',
        'title' => 'DeepTerm',
        'subtitle' => 'free AI study companion',
        'badge' => '2025',
        'url' => 'https://deepterm.app',
        'repo' => 'https://github.com/4regab/deepterm',
        'featured' => true,
        'bg' => '#2a2d33',
        'fg' => '#f0f0f2',
        'mark' => 'term',
        'image' => '/assets/images/deepterm.png',
        'summary' => 'A free, open-source study app that turns PDFs into flashcards, reviewers, and practice tests.',
        'body' => [
            'I built DeepTerm because every study tool we tried had limits or asked for money. I wanted something free that still felt good to use.',
            'You upload a PDF or paste text. AI pulls out key terms. Then you study with flashcards, learn mode, match games, and practice tests. Cards move through stages so you remember them longer.',
            'It also has XP, achievements, a Pomodoro timer, and a spooky theme with a flashlight study mode. No paywalls. No “upgrade to pro.”',
        ],
        'links' => [
            ['label' => 'Live site', 'href' => 'https://deepterm.app'],
            ['label' => 'GitHub', 'href' => 'https://github.com/4regab/deepterm'],
            ['label' => 'Write-up on DEV', 'href' => 'https://dev.to/kirodotdev/made-a-spooky-study-tool-2kec'],
        ],
    ],
    [
        'slug' => 'tasksync',
        'title' => 'TaskSync',
        'subtitle' => 'agent task orchestration',
        'badge' => '2025',
        'url' => 'https://github.com/4regab/TaskSync',
        'repo' => 'https://github.com/4regab/TaskSync',
        'featured' => true,
        'bg' => '#1a2744',
        'fg' => '#e8eef8',
        'mark' => 'sync',
        'image' => '/assets/images/tasksync.png',
        'summary' => 'A popular open-source way to sync tasks and keep AI agents on track while they work.',
        'body' => [
            'TaskSync helps you steer an agent after it has already started. Instead of waiting for a full run to finish, you can send new direction while it works.',
            'It grew into a widely starred project because people needed a simple bridge between human feedback and long-running agent sessions.',
            'There is also a related MCP server, tasksync-mcp, for tools that speak the Model Context Protocol.',
        ],
        'links' => [
            ['label' => 'GitHub', 'href' => 'https://github.com/4regab/TaskSync'],
            ['label' => 'tasksync-mcp', 'href' => 'https://github.com/4regab/tasksync-mcp'],
        ],
    ],
    [
        'slug' => 'kiro-mobile-bridge',
        'title' => 'kiro-mobile-bridge',
        'subtitle' => 'control Kiro from your phone',
        'badge' => '2026',
        'url' => 'https://github.com/4regab/kiro-mobile-bridge',
        'repo' => 'https://github.com/4regab/kiro-mobile-bridge',
        'featured' => true,
        'bg' => '#c5c0e8',
        'fg' => '#1a1830',
        'mark' => 'phone',
        'image' => '/assets/images/kiro-mobile-bridge.png',
        'summary' => 'A light mobile UI that lets you watch and steer Kiro IDE agent sessions from your phone over your local network.',
        'body' => [
            'Open Kiro with Chrome DevTools Protocol enabled, run the bridge, then open the network URL on your phone.',
            'You get chat, code browsing, and tasks in a mobile layout. OTP auth keeps random devices out. Updates come in over WebSocket.',
            'I built it so I could check on agents without sitting at the desk the whole time.',
        ],
        'links' => [
            ['label' => 'GitHub', 'href' => 'https://github.com/4regab/kiro-mobile-bridge'],
        ],
    ],
    [
        'slug' => 'agent-rules-mcp',
        'title' => 'agent-rules-mcp',
        'subtitle' => 'coding rules from GitHub',
        'badge' => '2025',
        'url' => 'https://github.com/4regab/agent-rules-mcp',
        'repo' => 'https://github.com/4regab/agent-rules-mcp',
        'featured' => false,
        'bg' => '#1e3a2f',
        'fg' => '#e6f4ec',
        'mark' => 'code',
        'image' => '/assets/images/agent-rules-mcp.png',
        'summary' => 'An MCP server that pulls coding rules from any GitHub repo so you stop copying .md files between AI tools.',
        'body' => [
            'Switching AI IDEs used to mean duplicating rules everywhere. This server keeps them in one GitHub repo and fetches them on demand.',
            'It supports common rule formats, works without a GitHub token for public repos, and falls back to raw file URLs when the API rate-limits you.',
            'Two tools do the job: list_rules to browse topics, and get_rules to pull the ones you need.',
        ],
        'links' => [
            ['label' => 'GitHub', 'href' => 'https://github.com/4regab/agent-rules-mcp'],
            ['label' => 'Write-up on DEV', 'href' => 'https://dev.to/kirodotdev/building-an-mcp-server-that-solves-every-developers-rules-management-problem-o86'],
        ],
    ],
];

$articles = [
    [
        'slug' => 'spooky-study-tool',
        'title' => 'Made a Spooky Study Tool!',
        'date' => 'Dec 4, 2025',
        'source' => 'DEV · kirodotdev',
        'summary' => 'How I built DeepTerm with Kiro — from Figma to a free, gamified study app with a flashlight mode.',
        'href' => 'https://dev.to/kirodotdev/made-a-spooky-study-tool-2kec',
    ],
    [
        'slug' => 'agent-rules-mcp-post',
        'title' => 'Building an MCP Server for Coding Rules',
        'date' => 'Aug 28, 2025',
        'source' => 'DEV · kirodotdev',
        'summary' => 'Why I made agent-rules-mcp, how specs and steering helped, and what broke when schemas got too clever.',
        'href' => 'https://dev.to/kirodotdev/building-an-mcp-server-that-solves-every-developers-rules-management-problem-o86',
    ],
    [
        'slug' => 'whats-in-kiro',
        'title' => "What's Actually in Kiro IDE 1.0",
        'date' => 'Jul 17, 2026',
        'source' => 'AWS Builder Center',
        'summary' => 'A look inside Kiro IDE from the AWS Builder community.',
        'href' => 'https://builder.aws.com/content/39oTRYukzzjRlPiO51qaCY7biMB/whats-actually-in-kiro-ide-10',
    ],
];

$nav_groups = [
    [
        'label' => 'What I create',
        'items' => [
            ['label' => 'Projects', 'href' => '/projects', 'icon' => 'folder', 'badge' => (string) count($projects), 'external' => false],
            ['label' => 'Writing', 'href' => '/writing', 'icon' => 'book', 'badge' => (string) count($articles), 'external' => false],
        ],
    ],
    [
        'label' => 'About me',
        'items' => [
            ['label' => 'About', 'href' => '/about', 'icon' => 'person', 'badge' => null, 'external' => false],
            ['label' => 'Email', 'href' => 'mailto:4regab@gmail.com', 'icon' => 'mail', 'badge' => null, 'external' => false],
        ],
    ],
    [
        'label' => 'Where to find me',
        'items' => [
            ['label' => 'Github', 'href' => 'https://github.com/4regab', 'icon' => 'github', 'badge' => null, 'external' => true],
            ['label' => 'Linkedin', 'href' => 'https://www.linkedin.com/in/4regab', 'icon' => 'linkedin', 'badge' => null, 'external' => true],
            ['label' => 'DEV', 'href' => 'https://dev.to/4regab', 'icon' => 'code', 'badge' => null, 'external' => true],
        ],
    ],
];

function find_project(string $slug): ?array
{
    global $projects;
    foreach ($projects as $project) {
        if ($project['slug'] === $slug) {
            return $project;
        }
    }
    return null;
}

function featured_projects(): array
{
    global $projects;
    return array_values(array_filter($projects, fn ($p) => !empty($p['featured'])));
}
