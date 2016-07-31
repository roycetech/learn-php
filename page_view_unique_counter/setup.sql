-- pageview

-- there was an issue with on MySql so it needs to follow this specific code.
-- http://stackoverflow.com/questions/23054394/mysql-error-there-can-be-only-one-timestamp-column-with-current-timestamp-in-de


CREATE TABLE `pageview` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `page` text NOT NULL,
 `userip` text NOT NULL,
 created_at timestamp default 0 not null,
 modified_at timestamp default current_timestamp not null,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


-- totalview

CREATE TABLE `totalview` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `page` text NOT NULL,
 `totalvisit` int NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;