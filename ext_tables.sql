#
# Table structure for table 'pages'
#
CREATE TABLE pages (
	css_class varchar(255) DEFAULT '' NOT NULL,
	css_id varchar(255) DEFAULT '' NOT NULL,
);

#
# Modifying pages_language_overlay table
#
CREATE TABLE pages_language_overlay (
  css_class varchar(255) DEFAULT '' NOT NULL,
  css_id varchar(255) DEFAULT '' NOT NULL,
);