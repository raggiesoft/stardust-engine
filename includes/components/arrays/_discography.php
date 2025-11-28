<?php
// /includes/components/arrays/_discography.php
// Central source of truth for the Discography menu structure.

$discographyMenu = [
    'Apex "Cold War" Era' => [
        ['title' => 'Electric Color', 'year' => '1987', 'url' => '/discography/1987-electric-color'],
        ['title' => 'Neon Hearts', 'year' => '1989', 'url' => '/discography/1989-neon-hearts'],
        ['title' => 'Live in Chicago', 'year' => '1990', 'url' => '/discography/1990-live-in-chicago'],
        ['title' => 'Friction', 'year' => '1992', 'url' => '/discography/1992-friction', 'extra' => '<span class="badge bg-danger ms-2" style="font-size: 0.6em;">CANCELED</span>'],
    ],
    'The "Freedom" Era' => [
        ['title' => 'The Warehouse Tapes', 'year' => '1995', 'url' => '/discography/1995-the-warehouse-tapes'],
        ['title' => 'Hard Reset', 'year' => '1997', 'url' => '/discography/1997-hard-reset'],
        ['title' => 'Live in Norfolk', 'year' => '2005', 'url' => '/discography/2005-live-in-norfolk'],
        ['title' => 'Lost Sounds', 'year' => '2007', 'url' => '/discography/2007-lost-sounds'],
    ],
    'The Homecoming' => [
        ['title' => 'Re-Ignition', 'year' => '2015', 'url' => '/discography/2015-re-ignition'],
        ['title' => 'Live at The Crucible', 'year' => '2016', 'url' => '/discography/2016-live-at-the-crucible', 'extra' => '<i class="fa-duotone fa-star text-warning ms-2"></i>'],
    ],
    'Soundtracks & Modern' => [
        ['title' => 'Knox (O.S.T.)', 'year' => '2017', 'url' => '/discography/2017-knox-ost'],
    ]
];
?>