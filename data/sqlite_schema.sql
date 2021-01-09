CREATE TABLE sqlite_sequence(name,seq);
CREATE TABLE IF NOT EXISTS "categories" (
	"id"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	"name"	TEXT,
	"count"	INTEGER
);
CREATE TABLE IF NOT EXISTS "users" (
	"id"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	"name"	TEXT,
	"password"	TEXT,
	"email"	TEXT,
	"last_login"	INTEGER,
	"user"	TEXT
);
CREATE TABLE IF NOT EXISTS "site" (
	"title"	TEXT,
	"intro"	TEXT,
	"subtitle"	TEXT,
	"views"	INTEGER,
	"spiders"	INTEGER,
	"id"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT
);
CREATE TABLE IF NOT EXISTS "posts" (
	"pid"	INTEGER NOT NULL,
	"title"	TEXT,
	"status"	INTEGER,
	"url"	TEXT,
	"content_md"	TEXT,
	"category_id"	INTEGER,
	"views"	INTEGER DEFAULT 0,
	"author_id"	INTEGER,
	"create_time"	INTEGER,
	"content_html"	TEXT,
	"update_time"	INTEGER,
	"description"	TEXT,
	PRIMARY KEY("pid" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "comments" (
	"id"	INTEGER NOT NULL,
	"content"	TEXT,
	"name"	TEXT,
	"pid"	INTEGER,
	"email"	TEXT,
	"site"	TEXT,
	"create_time"	INTEGER,
	"is_admin"	INTEGER,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "pages" (
	"id"	INTEGER NOT NULL UNIQUE,
	"title"	TEXT,
	"link"	TEXT,
	PRIMARY KEY("id" AUTOINCREMENT)
);
