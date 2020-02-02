use TheGame;

CREATE TABLE `Game_gamedefine` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) not null default `Unknown`,
    `fk_game_type_id` int(11) NOT NULL,
    `fk_design_id` int(11) not null, 
    `geoloc` varchar(100),
    `lmod` datetime,
    primary key (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `Game_gamedef` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fk_game_type_id` int(11) NOT NULL,
  `video_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fk_auth_user_id` int(11) NOT NULL,
  `prolog` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `GAME_geolocs` (
    `id` int(11) not null auto_increment,
    `game_id` int(11) not null,
    `street_name` varchar(350) not null default 'No where.',
    `geo_loc` varchar(60) not null default '0,000000;0,000000',
    `fk_user_id` int(11) not null,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `GAME_gametypes` (
    `id` int(11) not null auto_increment,
    `type_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
    `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_by_user_id` int(11) not null,
    primary key (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;